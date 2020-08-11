<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategoriesTable;
use App\addcategory;


class SubCategoriesTableController extends Controller
{
    public function sub_category_view()
    {
    	$category = addcategory::orderBy('id','desc')->get();
    	return view('subcategory.subcategory',compact('category'));
    }

    public function savesubcategory(Request $req)
    {
    	$obj = new SubCategoriesTable;
    	$obj->category_id = $req->category_id;
    	$obj->sub_category = $req->sub_category;
    	$obj->sub_category_2 = $req->sub_category_2;
    	$obj->save();

    	if($obj){
    		return redirect('sub_category_view')->with('message','SubCategory Added Succesfully');
    	}
    }
}
