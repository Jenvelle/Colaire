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
        $totalCartCount = Redis::hlen('cart-'.$userId);
        return $totalCartCount;
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
        $cartQuantity=Redis::hlen('cart-'.$userId);
        return $cartQuantity;
    }
}
