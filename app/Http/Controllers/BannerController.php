<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Intervention\Image\ImageManagerStatic as Image;

class BannerController extends Controller
{
    public function add_banner_view(){
    	return view('admin.banners.add_banner');
    }

    public function banner_db(Request $request){
    	$obj = new Banner;
    	if(!empty($request->banner_image)){
    		 $file= $request->file('banner_image');
            $filename= 'banner_image'.time().'.'.$request->banner_image->extension();
            
            $file->move('banner_image/',$filename);
            $image = Image::make(sprintf('banner_image/%s', $filename))->resize(1349,393)->save();
            
            
            $obj->title = $request->title;
            $obj->url = $request->url;
            $obj->banner_image = $filename;
            $obj->save();
            if($obj){
            	return redirect('admin_add_banner_view')->with('message', 'Banner Add Successfuly!');
            }
    	}
    	else{
    		$filename =NULL;
    		$obj->title = $request->title;
            $obj->url = $request->url;
            $obj->banner_image = $filename;
            $obj->save();
            if($obj){
            	return redirect('admin_add_banner_view')->with('message', 'Banner Add Successfuly!');
            }
    	}
    }

    public function view_banner()
    {
        $banr = Banner::orderBy('id','desc')->get();
        return view('admin.banners.view_banner',compact('banr'));
    }

    public function edit_banner($id)
    {
        $a = Banner::where('id','=',$id)->get();
        return view('admin.banners.edit_banner',compact('a'));
    }

    public function banner_update(Request $request)
    {   
        global $filename ;

        if(!empty($request->banner_image)){
             $file= $request->file('banner_image');
            $filename= 'banner_image'.time().'.'.$request->banner_image->extension();
            $file->move('banner_image/',$filename);
        
            $obj = Banner::find($request->id)->update([
            "title"=>$request->title,
            "url"=>$request->url,
            "banner_image"=>$filename,
            ]);
            if($obj){
                    return redirect('admin_view_banner')->with('message','Banner Edited Successfuly!');
                }
        }
        else {
                $filename = NULL;
                $obj = Banner::find($request->id)->update([
                    "title"=>$request->title,
                    "url"=>$request->url,
                    "banner_image"=>$filename,
                ]);

                if($obj){
                    return redirect('admin_view_banner')->with('message','Banner Edited Successfuly!');
                }
        }
    }

    public function delete_banner($id)
    {
        Banner::where('id','=',$id)->delete();
        return redirect('admin_view_banner')->with('message','Banner Deleted Successfuly!');
    }
}
