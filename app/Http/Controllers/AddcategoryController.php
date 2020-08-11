<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addcategory;

class AddcategoryController extends Controller
{   
    //index
    public function add_category()
    {
        return view('admin.add_Category');
    }

    //save
    public function add_category_db(Request $request)
    {
    	$obj = new addcategory;
    	$obj->Category = $request->Category;
    	$obj->save();

    	if ($obj) {
    		return redirect('/admin_add_category_view')->with('message','Successfully Added Category');
    	}
    }

    //show
    public function view_category()
    {
        $category= addcategory::orderby('id','desc')->get();
        return view('admin.view_category',compact('category'));
    }

    //EDIT
    public function edit_category($id)
    {
    	$obj = addcategory::find($id)->first();
    	return view('admin.edit_Category',compact('obj'));

    }

    //delete
    public function delete_category($id)
    {
    	addcategory::find($id)->delete();
    	return redirect('admin_view_category_view');
    }
}
