<?php

namespace App\Http\Controllers;
use App\ecomuser;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\addcategory;
use App\addproduct;
use App\Banner;
use App\specialbanner;
use App\productStatus;
use App\add_to_carts\carts;
use DB;

class EcomuserController extends Controller
{
    public function register_view()
    {
    	return view('frontend.ecom_user_register');
    }

    public function register_save(Request $request)
    {
    	$obj = new ecomuser;
    	$obj->name = $request->name;
    	$obj->email = $request->email;
    	$obj->password = sha1($request->password);
        $obj->access_token = 0;
    	$obj->save();
    	if($obj){

    		return redirect('login_view')->with('message','successfully registered now Login');
    	}
    }

    public function login_view()
    {
    	return view('frontend.ecom_user_login');
    }

    public function login_verify(Request $request)
    {
        $data= $request->input();
        $pass = ecomuser::select('id')->where(['email'=>$data['email']])->where(['password'=>sha1($data['password'])])->get();
        if (!empty($pass)) {
            $c =$pass[0];
            $a =  ecomuser::where('id','=',$c->id)->update([
                'access_token'=> $request->_token,
            ]);
            // $a = $c->id;
            // $a = session_id();
             session()->put('email', $data['email']);
            // $session_id= Session::get('email');
            // dd($session_id);

            //session::put('users_id', $c->id);
             return redirect("/");
           // return redirect("ecom_after_login/".$c->id);
        }
        else
            echo "falsse";
        die;
        
    }

    public function ecommerce_logout_user($id) // IN USE
    {
        Session::flush();
        $a =  ecomuser::where('id','=',$id)->update([
                'access_token'=> 0,
            ]);
        return  redirect('/');
    }

    public function views_single_product_detail($id) // IN USE
    {
            $product_detail = addproduct::select('product_name','product_rate','product_image','product_quantity','product_category')->where('id','=',$id)->first();

            $a = session()->get('session_id');

            if(empty(session()->get('email'))){
                
                $session_cart = carts::select('id','product_name','product_image','product_price','quantity')->where('session_id','=',$a)->get();
                $session_cart_count = carts::where('session_id','=',$a)->count();

                $cart_amount = 0;
                foreach ($session_cart as $cart_value) {
                    $cart_amount += $cart_value->product_price;
                }


                return view('layout.single_product',compact('cart_amount',
                'session_cart','session_cart_count','product_detail'));

            }
            else{

                $product_detail = addproduct::select('product_name','product_rate','product_image','product_quantity','product_category')->where('id','=',$id)->first();

                $b = session()->get('email');

               $user_id = ecomuser::select('id')->where('email','=',$b)->first();

                $session_cart = carts::select('id','product_name','product_image','product_price','quantity')->where('session_id','=',$a)->orwhere('user_id','=',$user_id->id)->get();
                $cart_amount = 0;
                foreach ($session_cart as $cart_value) {
                    $cart_amount += $cart_value->product_price;
                }
                //dd($cart_amount);
                $session_cart_count = carts::where('session_id','=',$a)->orwhere('user_id','=',$user_id->id)->count();

                return view('layout.single_product',compact('cart_amount',
                'session_cart','session_cart_count','user_id','product_detail'));
            }
    }
}
