<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Carbon\Carbon;
class ProductController extends Controller
{
    public function index()
    {
       $products= Product::all();
       $datediff=array();
    
       foreach($products as $prod){
           $datediff[$prod->id] = $this->datecal($prod->id);
       }
      return view ('index',['products' => $products, 'datediff' => $datediff]);
    }
    public function datecal($id)
    {
        $ed=Product::all();

        $today=Carbon::today();
        $prod=Product::find($id);
        $expd=date_create($prod->expirydate);
        $datediff=date_diff($expd,$today);
        return $datediff;
        //return view('index')->with('datediff',$datediff);
    }
}
