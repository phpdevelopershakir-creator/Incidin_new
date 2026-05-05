<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Upazila;
use App\Models\Distric;
class UpzilaController extends Controller
{
    public function all()
    {
        $upzilas=Upazila::get();
        return view('superadmin.upzila.list',compact('upzilas'));
    }

    public function Create()
    {
        $districs=Distric::where('status',1)->get();
        return view('superadmin.upzila.add',compact('districs'));
    }

    public function Store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'bn_name' => 'required',
            'distric_id' => 'required',
            
        ]);

        $upzila=new Upazila();
        $upzila->distric_id= $request->distric_id;
        $upzila->name= $request->name;
        $upzila->bn_name= $request->bn_name;
        $upzila->url= $request->url;
        $upzila->status="Active";
        $upzila->created_by=Auth()->user()->id;


        $upzila->save();
        $notification=array(
            'messege'=>' Upzila Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }


    public function edit($id)
    {
        $upzila=Upazila::find($id);
        $districs=Distric::where('status',1)->get();
        return view('superadmin.upzila.edit',compact('upzila','districs'));
    }

    public function update(Request $request,$id)
    {
        $upzila = Upazila::find($id);
        $upzila->distric_id= $request->distric_id; 
        $upzila->name= $request->name;
        $upzila->bn_name= $request->bn_name;
        $upzila->url= $request->url;
        $upzila->status= $request->status;
        $upzila->updated_by=Auth()->user()->id;
        $upzila->save();
        $notification=array(
            'messege'=>' Upazila Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('dashboard.all.upazila')->with($notification);
        
    }
    public function delete($id)
    {
      $delete = Upazila::find($id);
      $delete->delete();
       $notification=array(
            'messege'=>'Upazila Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
}
