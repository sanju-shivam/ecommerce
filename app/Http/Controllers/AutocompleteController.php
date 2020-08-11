<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\addproducts;
class AutocompleteController extends Controller
{
    public function index()
    {
      echo "aa gya";
      die;
    	return view('search');
    }

    public function fetch(Request $request)
    {
      alert('aa gya');
      die;
        if($request->get('query'))
     {
      $query = $request->get('query');
      $data = addproducts::select('product_name')->where('product_name', 'LIKE', "%{$query}%")->distinct()->get();
      dd($data);
      $output = '<ul class="dropdown-menu" " style="display:block; position:absolute;z-index:10000 !important;width:100%">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->product_name.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
}
