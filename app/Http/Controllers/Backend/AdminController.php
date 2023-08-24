<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdminDashboard (){
        $products=Product::get();
        $transactions=Transaction::latest()
        ->limit(5)
        ->get();
        
        
        $users=User::get();

        return view('admin_dashboard.admin_dashboard', compact('products','users','transactions'));
    }

    public function viewAllUserAccounts(){
        $users=User::get();
        return view('admin_dashboard.users-list', compact('users'));
    }

    public function viewAllTransactions(){
        $transactions=Transaction::latest()
        ->get();
        return view ('admin_dashboard.transactions', compact('transactions'));
    }

    public function viewAllProducts(){
        $products=Product::get();
        return view ('admin_dashboard.products', compact('products'));
    }

    public function deleteTableEntry($table, $id){
        switch($table){
            case 'product':
                Product::findOrFail($id)->delete();
                break;
            case 'user':
                User::findOrFail($id)->delete();
                break;
            case 'transactions':
                Transaction::findOrFail($id)->delete();
                break;
        }
        return 'Success';
    }
}
