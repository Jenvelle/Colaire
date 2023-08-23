<?php

namespace App\Http\Controllers\Frontend;
use App\Models\PhoneModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Carbon;

class ClientController extends Controller
{
    public function viewHomepage (){
        $new_products=Product::latest()
        ->where('tag','new')
        ->limit(8)
        ->get();
        
        $products=Product::latest()
        ->where('tag','!=','new')
        ->limit(8)
        ->get();
        
        $best_sellers=Transaction::select('productId',DB::raw('SUM(amountSold) AS totalStockSold'))
        ->whereIn('status', ['paid', 'completed'])
        ->groupBy('productId')
        ->limit(4)
        ->orderBy('totalStockSold','desc')
        ->pluck('productId');
        $top_products=Product::whereIn('id',$best_sellers)
        ->get();

        $devices=PhoneModel::latest()
        ->get();

        return view('client.index',compact('new_products','products','top_products','devices'));
    }
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('home');
    }

    public function clientLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
}
    public function searchProduct(Request $request){
        $searchRequest=Product::where('productName','like','%'.$request->search.'%')
        ->get();
        return view('client.result', compact('searchRequest'));
    }
    
    public function clientRegister(Request $request):RedirectResponse{
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'contactNumber'=>['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'address' => $request->address,
            'email' => $request->email,
            'contactNumber'=> $request->contactNumber,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()
        ->route('home');
    }
    public function productDetails($id){
        $searchResult=Product::findOrFail($id);
        return view('client.products.product_details',compact('searchResult'));

    }

    public function phoneModels(){
        $phoneModels=PhoneModel::orderby('model','asc')
        ->get();
        return json_encode($phoneModels);
    }
    public function viewProfile(){
        $id=Auth::user()
        ->id;
        $profileInfo=User::findOrFail($id);
        return view('client.user.user_dashboard',compact('profileInfo'));

    }

    public function changeProfileInfo(Request $request){
        $id=Auth::user()
        ->id;
        $findUser=User::findOrFail($id);
        $findUser->update([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'contactNumber'=>$request->contactNumber,
            'address'=>$request->address,
            'email'=>$request->email,
        ]);
        if($request->dbPassword){
            $findUser->update([
                'password'=>$request->dbPassword,
            ]);
        }
        return redirect()->back();
    }

    public function deleteProfile(){
        $id=Auth::user()
        ->id;

        $user=User::findOrFail($id);

        Auth::logout();

        $user->delete();

        return redirect()
        ->route('home');
    }

    // public function forgotPassword(){
        
    // }
    public function addToCart($id, $qty){
        // user id, product id, quantity
        $userId = Auth::user()->id;
        Redis::hincrby('cart-'.$userId, $id, $qty);
        return $this->cartQuantity();
    }

    public function deleteCart(){
        $userId = Auth::user()->id;
        Redis::del('cart-'.$userId);
    }

    public function viewCart(){
        $userId=Auth::user()
        ->id;
        $data=[];
        $cartItems=Redis::hgetall('cart-'.$userId);
        foreach ($cartItems as $key => $value) {
            list($newKey, $newValue) = [$key, $value];
           $product=Product::findOrFail($newKey);
           $data[]=['product'=>$product,'quantity'=>$newValue];
        }
        return view('client.cart_header', compact('cartItems','data'));
        
    }

    public function cartQuantity(){
        $userId=Auth::user()
        ->id;
        $cartQty=Redis::hlen('cart-'.$userId);
        return $cartQty;
    }

    public function addCartQuantity($productId){
        $userId=Auth::user()
        ->id;

        Redis::hincrby('cart-'.$userId, $productId, 1);

    }

    public function subtractCartQuantity($productId){
        $userId=Auth::user()
        ->id;

        Redis::hincrby('cart-'.$userId, $productId, -1);
    }

    public function deleteCartItem ($productId){
        $userId=Auth::user()
        ->id;
        Redis::hdel('cart-'.$userId, $productId);
    }

    public function cartCheckout(){
        $id=Auth::user()
        ->id;
        $user=User::findOrFail($id);
        $products=[];
        $totalCartItemPrice=0;
        $cartItems=Redis::hgetall('cart-'.$id);
        foreach ($cartItems as $key => $value) {
            list($newKey, $newValue) = [$key, $value];
           $product=Product::findOrFail($newKey);
           $products[]=[
            "productId"=>$newKey,
            "productName"=>$product->productName,
            "productQuantity"=>$newValue,
            "productTotalPrice"=>$product->price * $newValue,
           ];
        }
        foreach ($products as $item){
            $totalCartItemPrice+=$item['productTotalPrice'];
        }
        return view('client.payment_form', compact('user','cartItems','products','totalCartItemPrice'));
    }

    public function createTransaction(Request $request){
        $id=Auth::user()
        ->id;
        $totalCartItemPrice=0;
        $productIds=$request->input('productId');
        $data=[];
        $billedTo=[
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'address'=>$request->address,
            'email'=>$request->email,
            'contactNumber'=>$request->contactNumber,
        ];
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = substr(str_shuffle($characters), 0, 10);
        $dateString = date('Ymd');
        $ref_no = 'CA' . $dateString . $randomString;

        while (Transaction::where('transaction_id', $ref_no)->exists()) {
            $randomString = substr(str_shuffle($characters), 0, 10);
            $ref_no = 'CA' . $dateString . $randomString;
        }
        foreach ($productIds as $productId){
            $quantity=Redis::hget('cart-'.$id, $productId);
            Transaction::insert([
                'transaction_id'=>$ref_no,
                'email'=>$request->email,
                'created_at'=>Carbon::now()->setTimezone('Asia/Manila'),
                'productId'=>$productId,
                'amountSold'=>$quantity,
                'totalPrice'=>Product::findOrFail($productId)
                ->price * $quantity,
            ]);
            $data[]=[
                'productName'=>Product::findOrFail($productId)->productName,
                'productPrice'=>Product::findOrFail($productId)
                ->price,
                'quantity'=>$quantity,
                'totalPrice'=>Product::findOrFail($productId)
                ->price* $quantity,
            ];  
        }
        foreach ($data as $item){
            $totalCartItemPrice+=$item['totalPrice'];
        }
        Redis::del('cart-'.$id);
        return view ('client.receipt', compact('billedTo','data','totalCartItemPrice','ref_no', 'dateString'));
    }
}
