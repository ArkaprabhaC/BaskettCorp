<?php

namespace App\Http\Controllers\AdminAuth;

use App\Admin;
use App\Customer;
use App\Vendor;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RemovalNotice;
use Hash;
use Image;
use DB;

class DashboardController extends Controller
{
    protected function viewDashboard(){
        if(Auth::guard('admin')->check()){
            $total_order_count =  DB::select("SELECT (NumOfOrders) from (SELECT count(custID) as 'NumOfOrders' FROM orders GROUP BY custID) AS derivedTable");
            //dd(count($total_order_count));

            $total_customer_count = Customer::select('name')->count();
            $total_vendor_count = Vendor::select('vendorname')->count();

            return view('admin.dashboard.index', ['totalOrders' => count($total_order_count), 'totalVendors' => $total_vendor_count, 'totalCustomers' => $total_customer_count]);
        }else{
            return redirect('/');
        }
    }

    protected function viewCustomerPage(){
        if(Auth::guard('admin')->check()){
            $customers = Customer::all();
            return view('admin.dashboard.viewcustomer',['customers' => $customers]);
        }else{
            return redirect('/');
        }
    }

    protected function viewVendorPage(){
        if(Auth::guard('admin')->check()){
            $vendors = Vendor::all()->toArray();
            //dd($vendors);
            return view('admin.dashboard.viewvendor',['vendors' => $vendors]);
        }else{
            return redirect('/');
        }
    }

    protected function viewSettingsPage(){
        if(Auth::guard('admin')->check()){

            $id = Auth::guard('admin')->user()->id;
            $admin = Admin::find($id);

            return view('admin.dashboard.settings',['admin' => $admin]);
        }else{
            return redirect('/');
        }
    }





    protected function updateProfile(Request $request){

        $admin = Auth::guard('admin')->user();

        $admin->name=$request->name;
        $admin->email = $request->email;

        if($request->new_password !== NULL){
            $admin->password = Hash::make($request->new_password);
        }

        $admin->save();

        return redirect('/admin/settings')->with('alert-success', 'Admin profile successfully updated!');
    }

    protected function updateProfilePicture(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(180, 180)->save( public_path('/uploads/avatars/'.$filename));

            $admin = Auth::guard('admin')->user();
            $admin->avatar = $filename;
            $admin->save();
        }

        return redirect('/admin/settings');
    }






    protected function deleteCustomer(Request $request, $id){
        if(Auth::guard('admin')->check()){

            if($request->get('removalmsg') !== NULL){

                $tobedelCust = Customer::where('id', $id)->first()->toArray();
                //dd($request->get('removalmsg'));
                $this->removalmail($tobedelCust['name'], $tobedelCust['email'],$request->get('removalmsg'));

                Customer::where('id', $id)->delete();

                return redirect('/admin/viewcustomers')->with('alert-success', 'Customer deleted from the system and notification mail to the customer sent.');
            }else{
                return redirect('/admin/viewcustomers')->with('alert-error', 'Add a comment to remove the customer.');
            }

        }else{
            return redirect('/');
        }
    }

    protected function removalmail($custname, $custemail, $removalmsg)
    {
        Mail::to($custemail)->send(new RemovalNotice( $custemail, $custname, $removalmsg));
                
    }

    protected function editCustomer(Request $request, $id){

        if(Auth::guard('admin')->check()){

            $customer = Customer::find($id);

            $customer->name = $request->name;
            $customer->email = $request->email;

            $customer->save();

            return redirect('/admin/viewcustomers')->with('alert-success', 'Customer details updated!');

        }else{
            return redirect('/');
        }
        
    }

    







    protected function deleteVendor(Request $request, $id){
        if(Auth::guard('admin')->check()){

            if($request->get('removalmsg') !== NULL){

                $tobedelVendor = Vendor::where('id', $id)->first()->toArray();
                //dd($request->get('removalmsg'));
                $this->removalmail($tobedelVendor['vendorname'], $tobedelVendor['email'],$request->get('removalmsg'));

                Vendor::where('id', $id)->delete();

                return redirect('/admin/viewvendors')->with('alert-success', 'Vendor deleted from the system and notification mail to the vendor sent.');
            }else{
                return redirect('/admin/viewvendors')->with('alert-error', 'Add a comment to remove the vendor.');
            }

        }else{
            return redirect('/');
        }
    }

    protected function removalmailvendor($vendorname, $vendoremail, $removalmsg)
    {
        Mail::to($vendoremail)->send(new RemovalNotice( $vendoremail, $vendorname, $removalmsg));
                
    }



 

}
