<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Upazila;
use App\Models\Distric;
use App\Models\Union;
use DB;
class UnionController extends Controller
{
    public function all()
    {
        $unions=Union::get();
        // return response()->json($unions);
        return view('superadmin.union.list',compact('unions'));
    }

    public function Create()
    {
        $upzilas=Upazila::where('status','Active')->get();
        return view('superadmin.union.add',compact('upzilas'));
    }

 

   

    public function Store(Request $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required',
        //     'upazilla_id' => 'required',

            
        // ]);

        $union=new Union();
        $union->name= $request->name;
        $union->upazilla_id= $request->upazilla_id;
        $union->name= $request->name;
        $union->bn_name= $request->bn_name;
        $union->url= $request->url;
        $union->status="Active";
        $union->created_by=Auth()->user()->id;
        $union->save();
        $notification=array(
            'messege'=>'Union Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }


    public function edit($id)
    {
        $union=Union::find($id);
        $upzilas=Upazila::where('status','Active')->get();
        return view('superadmin.union.edit',compact('union','upzilas'));
    }

    public function update(Request $request,$id)
    {
        $union = Union::find($id);
        $union->upazilla_id= $request->upazilla_id; 
        $union->name= $request->name;
        $union->bn_name= $request->bn_name;
        $union->url= $request->url;
        $union->status= $request->status;
        $union->updated_by=Auth()->user()->id;
        $union->save();
        $notification=array(
            'messege'=>'Union Update Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('dashboard.all.union')->with($notification);
       
        
    }
    public function delete($id)
    {
      $delete = Union::find($id);
      $delete->delete();
       $notification=array(
            'messege'=>'Union Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
}
