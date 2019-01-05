<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/signup', function(){
    return view('signup');
})->name('signup');
Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/vendor/signup', function(){
    return view('vendor_register');
})->name('vendor-signup');
Route::get('/vendor/login', function(){
    return view('vendor_login');
})->name('vendor-login');



Route::get('/cart', function(){
    return view('cart');
})->name('cart');
Route::get('/categories', function(){
    return view('categories');
})->name('categories');
Route::get('/checkout', function(){
    return view('checkout');
})->name('checkout');
Route::get('/invoice', function(){
    return view('invoice');
})->name('invoice');
/*Route::get('/{id}', function(){
    return view('product');
});*/


Route::get('/contactus', function(){
    return view('contact');
})->name('contact');
Route::get('/aboutus', function(){
    return view('about');
})->name('about');