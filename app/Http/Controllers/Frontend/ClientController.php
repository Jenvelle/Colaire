<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function viewHomepage (){
        $new_products=Product::latest()->where('tag','new')->limit(8)->get();
        $products=Product::latest()->where('tag','!=','new')->limit(8)->get();
        // $best_sellers=Product::orderBy('stocksPurchased', 'desc')->limit(4)->get();
        return view('client.client_master',compact('new_products','products'));
    }
    public function login(){
        
    }
}
