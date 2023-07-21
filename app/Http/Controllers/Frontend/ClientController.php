<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use DB;
class ClientController extends Controller
{
    public function viewHomepage (){
        $new_products=Product::latest()->where('tag','new')->limit(8)->get();
        $products=Product::latest()->where('tag','!=','new')->limit(8)->get();
        $best_sellers=Transaction::select('productId',DB::raw('SUM(amountSold) AS totalStockSold'))
        ->whereIn('status', ['paid', 'completed'])
        ->groupBy('productId')
        ->limit(4)
        ->orderBy('totalStockSold','desc')
        ->pluck('productId');
        $top_products=Product::whereIn('id',$best_sellers)->get();
        return view('client.client_master',compact('new_products','products','top_products'));
    }
    public function login(){
        
    }
}
