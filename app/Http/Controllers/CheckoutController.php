<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class CheckoutController extends Controller
{
    public function login_check()
    {
    	return view('pages.login');
    }
    public function customer_registration(Request $request){
       $data = array();
       $data['customer_name']  = $request->customer_name;
       $data['customer_email'] = $request->customer_email;
       $data['mobile_number']  = $request->mobile_number;
       $data['password']       = md5($request->password);

       $customer_id = DB::table('tbl_customer')
                      ->insertGetId($data);
                    Session::put('customer_id',$customer_id);
                    Session::put('customer_name',$request->customer_name);
                    return Redirect('/checkout');
    }
    public function checkout()
    {
    	return view('pages.checkout');
    }
    public function save_shipping_details(Request $request)
    {
      $data = array();
      $data['shipping_full_name']     = $request->shipping_full_name;
      $data['shipping_email']         = $request->shipping_email;
      $data['shipping_mobile_number'] = $request->shipping_mobile_number;
      $data['shipping_address']       = $request->shipping_address;
      $data['shipping_city']          = $request->shipping_city;

      $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
                     Session::put('shipping_id',$shipping_id);
               return  Redirect::to('/payment');
    }
    public function customer_login(Request $request){
      $customer_email = $request->customer_email;
      $password       = md5($request->password);
      $result         = DB::table('tbl_customer')
                        ->where('customer_email',$customer_email)
                        ->where('password',$password)
                        ->first();
                if ($result) {
                	Session::put('customer_id',$result->customer_id);
                	return Redirect::to('/checkout');
                }else{
                    return Redirect::to('/login-check');
                }
    }
    public function order_place(Request $request)
    {
      $payment_gateway = $request->payment_gateway;
      echo $payment_gateway;
    }

    public function logout(){
    	Session::flush();
    	return Redirect::to('/');
    }
    public function payment()
    {
     return view('pages.payment');
    }
}
