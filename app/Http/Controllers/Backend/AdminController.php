<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdminDashboard (){
        return view('admin_dashboard.admin_dashboard');
    }
}
