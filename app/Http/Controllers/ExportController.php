<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExportController extends Controller
{
    public function index()
    {
    	$data = DB::table('addproducts')->get();
    	return view('export_excle')->with('data',$data); 
    }

    public function excel()
    {
     $customer_data = DB::table('addproducts')->get()->toArray();
     $customer_array[] = array('product_name', 'product_category', 'product_quantity', 'product_rate');
     foreach($customer_data as $customer)
     {
      $customer_array[] = array(
       'product_name'  => $customer->product_name,
       'product_category'   => $customer->product_category,
       'product_quantity'    => $customer->product_quantity,
       'product_rate'  => $customer->product_rate,
      );
     }
     Excel::create('Product Data', function($excel) use ($customer_array){
      $excel->setTitle('Customer Data');
      $excel->sheet('Customer Data', function($sheet) use ($customer_array){
       $sheet->fromArray($customer_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }
}
