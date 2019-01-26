<?php

namespace App\Http\Controllers\AdminAuth;

use App\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected function viewDashboard(){
        if(Auth::guard('admin')->check()){
            return view('admin.dashboard.index');
        }else{
            return redirect('/');
        }
    }
}
