<?php

namespace App\Http\Controllers\AdminAuth;

use App\Admin;
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
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.guest');
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
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Admin
     */
    protected function create(array $data)
    {
        return Admin::create([
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
        return view('admin.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }

    /*
    * Registers the vendor with the system 
    */
    protected function register(Request $request){
        
        $admin = new Admin;

        if($request->get('password_confirmation') === $request->get('password')){

            $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|unique:admins',
                'password' => 'required'
            ]);

            //$password =  $request->get('password');

            $admin->name = $request->get('name');
            $admin->email = $request->get('email');
            $admin->password = Hash::make($request->get('password'));
           
           
            $admin->save();
    
            //$credentials = $request->only('email', 'password');
    
            if (Auth::guard('admin')->attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
                // Authentication passed...
                return redirect('/admin/dashboard');
                
            }else{
                //echo "something wrong";
                return redirect('/admin/register')->with('alert','Oops. Something happened. Try again later or contact customer support.');
            }
        }else{
            //echo "passwords don't match, go back and try again!";
            return redirect('/admin/register')->with('alert','passwords don\'t match, try again!');
        }
    }
    
}
