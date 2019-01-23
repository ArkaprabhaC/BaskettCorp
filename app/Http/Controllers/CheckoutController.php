<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;
use Illuminate\Http\Request;
use Hash;

class CheckoutController extends Controller
{
    /**
     * PHP function to generate random token sequence to verify orders uniquely
     */
    protected function generateRandomToken(){
        $str ='';
        $rand_characters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        for($i=0;$i<6;$i++){
            $index = rand(0,59);
            $str .= substr($rand_characters, $index, 1);
        }

        return $str;
    }

    /**
      * Function to view the checkout page
     */
    protected function viewPage(Request $request){
        if(Auth::guard('customer')->check()){
            $cust_id = Auth::guard('customer')->user()->id;
            $get_cart = Cart::where(['custID' => $cust_id])->get()->toArray();
            $cur_user = Auth::guard('customer')->user()->toArray();
            $totalPrice = Cart::where('custID',$cust_id)->sum('productprice');

            return view('checkout',['cur_user' => $cur_user, 'cartproducts' => $get_cart, 'totalPrice' => $totalPrice]);
        }else{
            return redirect('/');
        }
        
    }

    /**
      * Function to process an order
     */
    protected function placeOrder(Request $request){
        if(Auth::guard('customer')->check()){
            $cust_id = Auth::guard('customer')->user()->id;
            $get_cart = Cart::where(['custID' => $cust_id])->get()->toArray();

            //Unique Token for each order
            $token = $this->generateRandomToken();

            foreach($get_cart as $gc){
                $order = new Order;

                $order->productname = $gc['productname'];
                $order->productprice = $gc['productprice'];
                $order->custID = $cust_id;
                $order->productname = $gc['productname'];
                $order->token = $token;
                $order->ordercomment = $request->checkout_comment ? $request->checkout_comment:'No Comments';

                $order->save();
            }

            Cart::where(['custID' => $cust_id])->delete();
            return redirect('/invoice')->with('alertsuccess', 'Your order is successfully placed');

        }else{
            return redirect('/');
        }
        
    }

}
