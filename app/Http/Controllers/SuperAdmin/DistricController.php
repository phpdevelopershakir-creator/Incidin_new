<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distric;
use App\Models\Division;
class DistricController extends Controller
{
    public function all()
    {
        $districs=Distric::get();
        return view('superadmin.distric.list',compact('districs'));
    }

    public function Create()
    {
        $divisions=Division::where('status',1)->get();
        return view('superadmin.distric.add_distric',compact('divisions'));
    }

    public function Store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:districs|max:255',
            
        ]);

        $distric=new Distric();
        $distric->division_id= $request->division_id;
        $distric->name= $request->name;
        $distric->bn_name= $request->bn_name;
        $distric->created_by=Auth()->user()->id;
        $distric->status=1;
        $distric->save();
        $notification=array(
            'messege'=>' District Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }


    public function edit($id)
    {
        $distric=Distric::find($id);
        $divisions=Division::where('status',1)->get();
        return view('superadmin.distric.edit_distric',compact('distric','divisions'));
    }

    public function update(Request $request,$id)
    {
        $distric = Distric::find($id);
        $distric->division_id= $request->division_id;
        $distric->name= $request->name;
        $distric->bn_name= $request->bn_name;
        $distric->updated_by=Auth()->user()->id;
        $distric->status=1;
        $distric->save();
        $notification=array(
            'messege'=>' Distric Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('superadmin.all.district')->with($notification);
        
    }
    public function delete($id)
    {
      $delete = Distric::find($id);
      $delete->delete();
       $notification=array(
            'messege'=>'District Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
}
