<?php

namespace App\Http\Controllers;

use App\Order;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;
use Illuminate\Http\Request;
use Hash;

//Necessary imports to use mailing functionality in laravel
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmation;

class InvoiceController extends Controller
{
    /**
     * Sends a copy of the invoice to user's email
     */
    public function mail($cust_email, $cust_name, $totalPrice, $order)
    {
        Mail::to($cust_email)->send(new OrderConfirmation($cust_email, $cust_name, $totalPrice, $order));
        
        //return 'Email was sent';
    }

    /**
     * View the invoice page
     */
    protected function viewInvoice(){
        if(Auth::guard('customer')->check()){
            $cust_id = Auth::guard('customer')->user()->id;
            $order = Order::where(['custID' => $cust_id])->get()->toArray();

            $cust_name = Auth::guard('customer')->user()->name;
            $cust_email = Auth::guard('customer')->user()->email;
            $totalPrice = Order::where('custID',$cust_id)->sum('productprice');

            $this->mail($cust_email, $cust_name, $totalPrice, $order);

            return view('invoice',['order' => $order, 'custemail' => $cust_email, 'custname' => $cust_name, 'totalPrice' => $totalPrice]);

        }else{
            return redirect('/');
        }
    }
}
