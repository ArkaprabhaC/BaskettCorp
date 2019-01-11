<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Customer;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('customer.guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:customers',
            'password' => 'required|min:6|confirmed',
        ]);
    }*/

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Customer
     */
    /*protected function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }*/

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('customer.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('customer');
    }

    /**
     * process the form data and register the user
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function register(Request $request)
    {

        $customer = new Customer;

        if($request->get('chk_password') === $request->get('password')){

            $password =  $request->get('password');

            $customer->name = $request->get('name');
            $customer->email = $request->get('email');
            $customer->password = Hash::make($password);
            $customer->dob = $request->get('dob');
            $customer->phone = $request->get('phone');
            $customer->state = $request->get('state');
            $customer->city = $request->get('city');
            $customer->flatno = $request->get('flatno');
            $customer->address = $request->get('address');
            $customer->pincode = $request->get('pincode');
    
            $customer->save();
    
            //$credentials = $request->only('email', 'password');
    
            if (Auth::guard('customer')->attempt(['email' => $request->get('email'), 'password' => $password])) {
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
