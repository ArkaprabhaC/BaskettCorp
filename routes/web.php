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

Route::get('/', 'ProductController@index');
//Route::get('/', 'ProductController@datecal');
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
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'customer'], function () {
  Route::get('/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CustomerAuth\LoginController@login');
  Route::get('/logout', 'CustomerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CustomerAuth\RegisterController@register');

  Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'vendor'], function () {
  Route::get('/login', 'VendorAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'VendorAuth\LoginController@login');
  Route::get('/logout', 'VendorAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'VendorAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'VendorAuth\RegisterController@register');
  
  Route::get('/dashboard', 'VendorAuth\DashboardController@showDashboardPage');
  Route::post('/dashboard', 'VendorAuth\DashboardController@addProduct');
  Route::get('/dashboard/removeproduct', 'VendorAuth\DashboardController@showRemoveProductPage');
  Route::post('/dashboard/removeproduct', 'VendorAuth\DashboardController@removeProduct');
  Route::get('/dashboard/settings', 'VendorAuth\DashboardController@showSettingsPage');
  Route::post('/dashboard/settings', 'VendorAuth\DashboardController@updateProfile');
  Route::post('dashboard/updateprofilepic', 'VendorAuth\DashboardController@updateProfilePicture');

  Route::post('/password/email', 'VendorAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'VendorAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'VendorAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'VendorAuth\ResetPasswordController@showResetForm');
});
//Route::get('/','ProductController@index');