<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addproduct;
use App\addcategory;
use App\SubCategoriesTable;
use App\productStatus;
use App\add_to_carts\carts;
use DB;
class AddproductController extends Controller
{
    //index
    public function add_product(Request $request )
    {
        //save
        
        if($request->isMethod('post')){
            $get_category_id = addcategory::where('Category','=',$request->product_category)->first()->id;
            //dd($request->all());
            $file= $request->file('product_image');
            $filename= 'product_image'.time().'.'.$request->product_image->extension();
            $file->move('product_image/',$filename);

            $obj= new addproduct;
            $obj->product_name = $request->product_name;
            $obj->catagery_id = $get_category_id;   //from category table
            $obj->subcategory_id = $request->subcategory_id;
            $obj->super_subcategory_id = $request->super_subcategory_id;
            $obj->product_rate = $request->product_rate;
            $obj->product_category = $request->product_category;
            $obj->product_image = $filename;
            $obj->product_quantity = $request->product_quantity;
            $obj->save();
            //dd($obj->id);

             global $recomended, $new ,$top_products , $brand_new ;
             if($request->recomended != NULL || $request->new != NULL || $request->top_products != NULL || $request->brand_new != NULL){


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
                productStatus::create([
                        'product_id'=>$obj->id,
                        'recomended'=>$recomended,
                        'new'=>$new,
                        'top_products'=>$top_products,
                        'brand_new'=>$brand_new,
                    ]);
                    if($obj){
                    return redirect('admin_add_products_view')->with('message','Product Added');
                }

            }
            else{
                if($obj){
                    return redirect('admin_add_products_view')->with('message','Product Added');
                }
            }
        }

        $category = addcategory::orderby('id','desc')->get();
        $subcat = SubCategoriesTable::orderby('id','desc')->get();
        return view('admin.add_Products',compact('category','subcat'));
    }


    //show
    public function view_product()
    {
        $product= addproduct::orderby('id','desc')->get();
        return view('admin.view_product',compact('product'));
    }

    public function view_more_product($id)
    {
        $product= addproduct::find($id);
        return view('admin.view_more_in_product',compact('product'));
    }

    public function edit_product(Request $request , $id)
    {
        $editproduct = addproduct::find($id);
      // $a = $editproduct->product_category;
        $category = addcategory::orderby('id','desc')->get();
        return view('admin.edit_product',compact('editproduct','category'));

    }

    public function update_product(Request $request)
    {
        global  $filename;
        $get_category_id = addcategory::where('Category','=',$request->product_category)->first()->id;
        
        if(!empty($request->product_image)){
            $file= $request->file('product_image');
            $filename= 'product_image'.time().'.'.$request->product_image->extension();
            $file->move('product_image/',$filename);
        }

        $a = $request->proid;

        $product = addproduct::find($a)->update([
            'product_name'=>$request->product_name,
            'catagery_id'=>$get_category_id,
            'product_rate'=>$request->product_rate,
            'product_category'=>$request->product_category,
            'product_image'=>$request->image_name_noedit,
            'product_quantity'=>$request->product_quantity,
            'product_rate'=>$request->product_rate,
        ]);
        if($product){
                return redirect('admin_view_product_view')->with('message','Product Edited Successfuly!');
            }
        
    }

    public function delete_product($id)
    {
        $editproduct = addproduct::find($id)->delete();
        return redirect('admin_view_product_view');
    }
















    public function view_all_products_page()
    {
        $a = session()->get('session_id');
        $product_data = addproduct::select('id','product_image','product_name','product_rate')->OrderBy('id','desc')->get();
         $session_cart = carts::select('id','product_name','product_image','product_price','quantity','product_id')->where('session_id','=',$a)->get();

            $session_cart_count = carts::where('session_id','=',$a)->count();
            //dd($session_cart,$session_cart_count);

            $cart_amount = 0;
            foreach ($session_cart as $cart_value) {
                $cart_amount += $cart_value->product_price;
            }

        return view('frontend.pagesinecom.all_product_page',compact('product_data','session_cart','session_cart_count','cart_amount'));
    }



     public function view_new_arrival_page()
    {
        $a = session()->get('session_id');
        $new_arrival_product_data = DB::table('product_statuses')->join('addproducts','product_statuses.product_id','=','addproducts.id')->select('addproducts.product_image','addproducts.product_rate','addproducts.product_name','product_statuses.id','product_statuses.product_id')->where('new','=',1)->get();
       

         $session_cart = carts::select('id','product_name','product_image','product_price','quantity','product_id')->where('session_id','=',$a)->get();

            $session_cart_count = carts::where('session_id','=',$a)->count();
            //dd($session_cart,$session_cart_count);

            $cart_amount = 0;
            foreach ($session_cart as $cart_value) {
                $cart_amount += $cart_value->product_price;
            }
            
        return view('frontend.pagesinecom.new_arrival_products_page',compact('new_arrival_product_data','session_cart','session_cart_count','cart_amount'));
    }


     public function view_top_products_page()
    {
        $a = session()->get('session_id');
        $top_product_data = DB::table('product_statuses')->join('addproducts','product_statuses.product_id','=','addproducts.id')->select('addproducts.product_image','addproducts.product_name','addproducts.product_rate','product_statuses.id','product_statuses.product_id')->where('top_products','=',2)->get();


         $session_cart = carts::select('id','product_name','product_image','product_price','quantity','product_id')->where('session_id','=',$a)->get();

            $session_cart_count = carts::where('session_id','=',$a)->count();
            //dd($session_cart,$session_cart_count);

            $cart_amount = 0;
            foreach ($session_cart as $cart_value) {
                $cart_amount += $cart_value->product_price;
            }
            
        return view('frontend.pagesinecom.top_product',compact('top_product_data','session_cart','session_cart_count','cart_amount'));
    }




    public function contact_us_ecommerce()
    {
         $a = session()->get('session_id');
         $session_cart = carts::select('id','product_name','product_image','product_price','quantity','product_id')->where('session_id','=',$a)->get();

            $session_cart_count = carts::where('session_id','=',$a)->count();
            //dd($session_cart,$session_cart_count);

            $cart_amount = 0;
            foreach ($session_cart as $cart_value) {
                $cart_amount += $cart_value->product_price;
            }
        return view('frontend.pagesinecom.contact_us',compact('session_cart','session_cart_count','cart_amount'));
    }
     

}
