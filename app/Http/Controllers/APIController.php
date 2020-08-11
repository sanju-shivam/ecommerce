<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addproduct;
use App\apilogintable;
use App\addcategory;
class APIController extends Controller
{
    public function send()
    {
    	$a = addproduct::all();
    	return response()->json($a);
    }
    public function save(Request $re)
    {
    	$i = $re->all();
    	$a = new addcategory;
    	$c = response()->json($a);
    	$v= json_encode($c);
    	echo $v;

    }
    public function login(Request $request)
    {
        $a = new apilogintable;
        $a->username = $request->username;
        $a->password = $request->password;
        $a->save();
        echo "suc";

    }
    public function delete($id)
    {
    	addcategory::find($id)->delete();
    	//$a = response()->json('deleted');
    	return redirect('admin_view_category_view');//->with($a);
    }
}
