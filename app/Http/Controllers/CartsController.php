<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\add_to_carts\carts;
use Session;
use DB;
use App\addproduct;
use App\ecomuser;

class CartsController extends Controller
{
    
    public function add_to_cart(Request $request,$id)
    {
            ob_start(); // Turn on output buffering
            system('ipconfig /all'); //Execute external program to display output
            $mycom=ob_get_contents(); // Capture the output into a variable
            ob_clean(); // Clean (erase) the output buffer

            $findme = "Physical";
            $pmac = strpos($mycom, $findme); // Find the position of Physical text
            $MAC=substr($mycom,($pmac+36),17);

        	if(Session()->has('email') == NULL ){
                
        		$a = session()->get('session_id');
        		$product_details = addproduct::select('product_name','product_image','product_rate','product_quantity')->where('id','=',$id)->first();
        		//dd($product_details);
        		$carts = new carts;
        		$carts->product_id = $id;
        		$carts->user_id = NULL;
        		$carts->session_id = $a;
        		$carts->product_name = $product_details->product_name;
        		$carts->product_image = $product_details->product_image;
        		$carts->product_price = $product_details->product_rate;
                $carts->quantity = $product_details->product_quantity;
        		$carts->save();
        		return redirect('/');
        	}
        	else{
                        $a = session()->get('session_id');
                        $b = session()->get('email');
            
                        $userid = ecomuser::select('id')->where('email','=',$b)->first();
            
                        $product_details = addproduct::select('product_name','product_image','product_rate')->where('id','=',$id)->first();
                        //dd($product_details);
                        $carts = new carts;
                        $carts->product_id = $id;
                        $carts->user_id = $userid->id;
                        $carts->session_id = $a;
                        $carts->product_name = $product_details->product_name;
                        $carts->product_image = $product_details->product_image;
                        $carts->product_price = $product_details->product_rate;
                        $carts->save();
                        return redirect('/');
                }   	
    }

    public function delete_from_cart($id)
    {
    	carts::where('id','=',$id)->delete();
        if(empty(session()->get('email'))){
                return redirect('/');
            }
            else{

                $b = session()->get('email');
                $userid = ecomuser::select('id')->where('email','=',$b)->first();
                return redirect('/');
            }
    }




    public function cart(Request $request)
        {   
           
                $product_id = $request->get('id');
                //return $product_id;

                ob_start(); // Turn on output buffering
                system('ipconfig /all'); //Execute external program to display output
                $mycom=ob_get_contents(); // Capture the output into a variable
                ob_clean(); // Clean (erase) the output buffer

                $findme = "Physical";
                $pmac = strpos($mycom, $findme); // Find the position of Physical text
                $MAC=substr($mycom,($pmac+36),17);

                if(Session()->has('email') == NULL ){
                    
                    $a = session()->get('session_id');
                    $product_details = addproduct::select('product_name','product_image','product_rate','product_quantity')->where('id','=',$product_id)->first();
                    //dd($product_details);
                    $carts = new carts;
                    $carts->product_id = $product_id;
                    $carts->user_id = NULL;
                    $carts->session_id = $a;
                    $carts->product_name = $product_details->product_name;
                    $carts->product_image = $product_details->product_image;
                    $carts->product_price = $product_details->product_rate;
                    $carts->quantity = $product_details->product_quantity;
                    $carts->save();
                    if($carts){
                        return response()->json('button_text','Added');
                    }
                    
                }
                else{
                            $a = session()->get('session_id');
                            $b = session()->get('email');
                
                            $userid = ecomuser::select('id')->where('email','=',$b)->first();
                
                            $product_details = addproduct::select('product_name','product_image','product_rate')->where('id','=',$product_id)->first();
                            //dd($product_details);
                            $carts = new carts;
                            $carts->product_id = $product_id;
                            $carts->user_id = $userid->id;
                            $carts->session_id = $a;
                            $carts->product_name = $product_details->product_name;
                            $carts->product_image = $product_details->product_image;
                            $carts->product_price = $product_details->product_rate;
                            $carts->save();
                            return redirect('/');
                    }
        }       
        

}




