<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard() {

        return view('admin.index');

    }//End method



    public function AdminLogout(Request $request) {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');

    }//End methot

    public function AdminLogin() {

        return view('admin.admin_login');
        
    }//End method

} 