<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Str;
class BannerController extends Controller
{
    public function banner_add()
    {
        $banner=Banner::firstOrNew();
        return view('superadmin.pages.settings.banner',compact('banner'));
    }

    public function banner_store(Request $request)
    {

        //dd($request->all());
       $banner = Banner::findOrFail($request->id);

        if (!empty($request->file('image')))
         {
         $ext=$request->file('image')->getClientOriginalExtension();
         $file=$request->file('image');
         $randomStr=Str::random(20);
         $filename=strtolower($randomStr).'.'.$ext;
         $file->move('uploads/banner/',$filename);
         $banner->image=$filename;
         }

         $banner->status=$request->status;
         $banner->save();
         $notification=array(
               'messege'=>'Banner   Updated  Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->back()->with($notification);

    }
}
