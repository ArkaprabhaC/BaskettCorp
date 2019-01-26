<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;
use Illuminate\Http\Request;
use Hash;
use Session;

class ProfileController extends Controller
{
    protected function viewProfile(Request $request){

        if(Auth::guard('customer')->check()){           
            return view('profile');
        }else{
            return redirect('/');
        }
    
    }

    protected function updateUser(Request $request){

        $cust_id = Auth::guard('customer')->user()->id;
        $customer = Customer::find($cust_id);

        $customer->name = $request->get('name');
        
        
        $customer->dob = $request->get('dob');
        $customer->phone = $request->get('phone');
        $customer->flatno = $request->get('flatno');
        $customer->address = $request->get('address');
        $customer->pincode = $request->get('pincode');

        $customer->save();

        return redirect('/profile')->with('alertsuccess', 'Profile Updated!');
    }
}
