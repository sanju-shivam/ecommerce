<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\specialbanner;


class SpecialbannerController extends Controller
{
    public function index ()
    {
    	return view ('admin.banners.Specialbanner.specialbanner');
    }

    public function save(Request $request)
    {
    	$obj = new specialbanner;
    	if(!empty($request->special_banner_image)){
    			$file = $request->file('special_banner_image');
    			$filename = 'special_banner_image'.time().'.'.$request->special_banner_image->extension();
    			$file->move('special_banner/',$filename);
    	    	$obj->special_banner_name = $request->special_banner_name;
    	    	$obj->special_banner_image = $filename;
    	    	$obj->special_banner_url = $request->special_banner_url;
    	    	$obj->save();
    	    	if($obj){
    	    		return redirect('special')->with('message','Banner Is Seccessfully Added');
    	    	}
    	    }
    	    else
    	    {
    	    	return redirect('special')->with('error','Image Is required');
    	    }
    }
}
