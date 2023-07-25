<?php

namespace App\Http\Controllers\Frontend;
use App\Models\PhoneModel;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
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
}
