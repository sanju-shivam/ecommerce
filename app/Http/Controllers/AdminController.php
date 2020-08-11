<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addcategory;
use App\addproduct;
use Session;
use App\Banner;
use App\specialbanner;
use App\productStatus;
use DB;
use App\ecomuser;
use Illuminate\Support\Facades\Hash;
use App\add_to_carts\carts;

class AdminController extends Controller
{
    public function home()
    {
    	return view('admin.master_of_admin');
    }

    public function welcome()
    {   
        


        // MAC address-------------------------------------------------------
            ob_start(); // Turn on output buffering
            system('ipconfig /all'); //Execute external program to display output
            $mycom=ob_get_contents(); // Capture the output into a variable
            ob_clean(); // Clean (erase) the output buffer

            $findme = "Physical";
            $pmac = strpos($mycom, $findme); // Find the position of Physical text
            $MAC=substr($mycom,($pmac+36),17); // Get Physical Address

            //echo $mac;
            //echo $MAC;
            
        //mac address end------------------------------------------------

        session_set_cookie_params(120);
        session_start();
        session()->put('session_id', $MAC);
        $a = session()->put('session_id', $MAC);
        //session::flush();
        if(empty(session()->get('email'))){
            
            
            //$a = session_id();
            $a = session()->get('session_id');
            //echo($a);
            //$a = session()->put('session_id', $a);

            $session_cart = carts::select('id','product_name','product_image','product_price','quantity','product_id')->where('session_id','=',$a)->get();

            $session_cart_count = carts::where('session_id','=',$a)->count();
            //dd($session_cart,$session_cart_count);

            $cart_amount = 0;
            foreach ($session_cart as $cart_value) {
                $cart_amount += $cart_value->product_price;
            }
            $Banner_data = Banner::OrderBy('id','asc')->get();
            
            $min_id = Banner::get()->min('id');

            $first_banner_that_display= $Banner_data[0];

            $product_data = addproduct::select('id','product_image','product_name','product_rate')->OrderBy('id','desc')->get();

             $top_3_product_data = DB::table('product_statuses')->join('addproducts','product_statuses.product_id','=','addproducts.id')->select('addproducts.product_image','addproducts.product_name','product_statuses.id','product_statuses.product_id','product_statuses.new','product_statuses.top_products','product_statuses.brand_new','product_statuses.recomended')->where('recomended','=',4)->get();

            // $top_3_product_data = productStatus::where('recomended', '=',0)->get();
            $new_arrival_product_data = DB::table('product_statuses')->join('addproducts','product_statuses.product_id','=','addproducts.id')->select('addproducts.product_image','addproducts.product_rate','addproducts.product_name','product_statuses.id','product_statuses.product_id','product_statuses.new','product_statuses.top_products','product_statuses.brand_new','product_statuses.recomended')->where('new','=',1)->get();

            $top_product_data = DB::table('product_statuses')->join('addproducts','product_statuses.product_id','=','addproducts.id')->select('addproducts.product_image','addproducts.product_name','addproducts.product_rate','product_statuses.id','product_statuses.product_id','product_statuses.new','product_statuses.top_products','product_statuses.brand_new','product_statuses.recomended')->where('top_products','=',2)->get();

             // $brand_new_product_data = productStatus::where('brand_new', '=',3)->get();
             $brand_new_product_data = DB::table('product_statuses')->join('addproducts','product_statuses.product_id','=','addproducts.id')->select('addproducts.product_image','addproducts.product_name','addproducts.product_rate','product_statuses.id','product_statuses.product_id','product_statuses.new','product_statuses.top_products','product_statuses.brand_new','product_statuses.recomended')->where('brand_new', '=',3)->get();
             //dd($brand_new_product_data);

            $specialbanner = specialbanner::select('special_banner_image','special_banner_url')->limit(2)->get();

            return view('welcome',compact('Banner_data','first_banner_that_display','min_id','top_3_product_data','product_data','new_arrival_product_data','top_product_data','specialbanner','session_cart','session_cart_count','cart_amount','brand_new_product_data'));

        }
        else{

            $b = session()->get('email');

           $user_id = ecomuser::select('id')->where('email','=',$b)->first();

            $a = session()->get('session_id');
            $session_cart = carts::select('id','product_name','product_image','product_price','quantity')->where('session_id','=',$a)->orwhere('user_id','=',$user_id->id)->get();
            $cart_amount = 0;
            foreach ($session_cart as $cart_value) {
                $cart_amount += $cart_value->product_price;
            }
            //dd($cart_amount);
            $session_cart_count = carts::where('session_id','=',$a)->orwhere('user_id','=',$user_id->id)->count();
            
            $Banner_data = Banner::OrderBy('id','asc')->get();
            
            $min_id = Banner::get()->min('id');

            $first_banner_that_display= $Banner_data[0];

            $product_data = addproduct::OrderBy('id','desc')->get();

             $top_3_product_data = DB::table('product_statuses')->join('addproducts','product_statuses.product_id','=','addproducts.id')->select('addproducts.product_image','addproducts.product_name','product_statuses.*')->where('recomended','=',4)->get();

            // $top_3_product_data = productStatus::where('recomended', '=',0)->get();
            $new_arrival_product_data = DB::table('product_statuses')->join('addproducts','product_statuses.product_id','=','addproducts.id')->select('addproducts.product_image','addproducts.product_rate','addproducts.product_name','product_statuses.*')->where('new','=',1)->get();
            // $top_product_data = DB::table('product_statuses')->join('addproducts','product_statuses.product_id','=','addproducts.id')->select('addproducts.product_image','addproducts.product_name','product_statuses.*')->where('top_products','=',2)->get();
            $top_product_data = DB::table('product_statuses')->join('addproducts','product_statuses.product_id','=','addproducts.id')->select('addproducts.product_image','addproducts.product_name','addproducts.product_rate','product_statuses.id','product_statuses.product_id','product_statuses.new','product_statuses.top_products','product_statuses.brand_new','product_statuses.recomended')->where('top_products','=',2)->get();

            $brand_new_product_data = DB::table('product_statuses')->join('addproducts','product_statuses.product_id','=','addproducts.id')->select('addproducts.product_image','addproducts.product_name','addproducts.product_rate','product_statuses.id','product_statuses.product_id','product_statuses.new','product_statuses.top_products','product_statuses.brand_new','product_statuses.recomended')->where('brand_new', '=',3)->get();

            $specialbanner = specialbanner::select('special_banner_image','special_banner_url')->limit(2)->get();

            return view('welcome',compact('Banner_data','first_banner_that_display','min_id','top_3_product_data','product_data','new_arrival_product_data','top_product_data','specialbanner','user_id','session_cart','session_cart_count','cart_amount','brand_new_product_data'));
        }
    }


    public function logout()
    {
    	Session::flush();
        
    	return redirect('login')->with('message','Logout Succesfully');
    }

    public function recomended_update() // IN USE
    {
        $all_product_with_status = DB::table('product_statuses')->join('addproducts','product_statuses.product_id','=','addproducts.id')->select('addproducts.product_image','addproducts.product_category','addproducts.product_name','product_statuses.*')->get();

    
         $all_product_without_status = DB::select(DB::raw('select addproducts.product_image,addproducts.product_category,addproducts.product_name , addproducts.id from addproducts where id not in (select product_id from product_statuses)'));

       
        return view('admin.recomended_product_after_status_changed',compact('all_product_with_status','all_product_without_status'));
    }

    public function recomended_db_update(Request $request) // IN USE
    {

        global $recomended , $new ,$top_products, $brand_new;
        if($request->has('recomended')){
             $recomended = $request->recomended;
        }
        // else
        //     $recomended= NULL;
        if($request->has('new')){
         $new= $request->new;
        }
         // else
         //    $new= NULL;
        if($request->has('top_products')){
            $top_products= $request->top_products;
        }
         // else
         //    $top_products= NULL;
        if($request->has('brand_new')){
            $brand_new= $request->brand_new;
        }
        $a = productStatus::where('product_id','=',$request->product_id)->update([
                'recomended'=>$recomended,
                'new'=>$new,
                'top_products'=>$top_products,
                'brand_new'=>$brand_new,
            ]);
        if($a == 0){
            productStatus::create([
                'product_id'=>$request->product_id,
                'recomended'=>$recomended,
                'new'=>$new,
                'top_products'=>$top_products,
                'brand_new'=>$brand_new,
            ]);
        }

        $product_status_all_null = productStatus::where('product_id','=',$request->product_id)->get();
        
        
        // delete product id if there all field is empty
        if($product_status_all_null[0]->recomended == NULL && $product_status_all_null[0]->new == NULL  && $product_status_all_null[0]->top_products == NULL  && $product_status_all_null[0]->brand_new == NULL ){
            productStatus::where('product_id','=',$request->product_id)->delete();
        }
        return redirect('recomended_update')->with('message','product status updated');
    }
}
