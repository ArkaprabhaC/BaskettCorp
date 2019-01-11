<?php

namespace App\Http\Controllers\VendorAuth;

use App\Vendor;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/vendor/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('vendor.guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:vendors',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Vendor
     */
    protected function create(array $data)
    {
        return Vendor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('vendor.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('vendor');
    }

    /** Registers the vendor with the system */
    protected function register(Request $request){
        
        $vendor = new Vendor;

        if($request->get('chk_password') === $request->get('password')){

            $password =  $request->get('password');

            $vendor->vendorname = $request->get('vendorname');
            $vendor->email = $request->get('email');
            $vendor->password = Hash::make($password);
            $vendor->phone = $request->get('phone');

            $vendor->storename = $request->get('storename');
            $vendor->state = $request->get('state');
            $vendor->city = $request->get('city');
            $vendor->address = $request->get('address');
            $vendor->pincode = $request->get('pincode');
    
            $vendor->save();
    
            //$credentials = $request->only('email', 'password');
    
            if (Auth::guard('vendor')->attempt(['email' => $request->get('email'), 'password' => $password])) {
                // Authentication passed...
                return redirect('/');
            }else{
                echo "something wrong";
            }
        }else{
            echo "passwords don't match, go back and try again!";
        }
    }
}
