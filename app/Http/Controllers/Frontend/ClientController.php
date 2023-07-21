<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function viewHomepage (){
        $new_products=Product::latest()->where('tag','new')->limit(8)->get();
        $products=Product::latest()->where('tag','!=','new')->limit(8)->get();
        $best_sellers=Transaction::select('productid', 'totalstocksold')->distinct()->limit(1)->orderBy('totalstocksold','desc')->get(); 
        $productIds=$best_sellers->pluck('productId');
        $top_products=Product::where('id',$productIds)->get();
        return view('client.client_master',compact('new_products','products','top_products'));
    }
    public function login(){
        
    }
}
