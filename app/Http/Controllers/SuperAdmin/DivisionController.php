<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
class DivisionController extends Controller
{
    public function all()
    {
        $divisions=Division::get();
        return view('superadmin.division.list',compact('divisions'));
    }

    public function Create()
    {
        return view('superadmin.division.add_division');
    }

    public function Store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:divisions|max:255',
            
        ]);

        $division=new Division();
        $division->name= $request->name;
        $division->bn_name= $request->bn_name;
        $division->url= $request->url;
        $division->created_by=Auth()->user()->id;
        $division->status=1;
        $division->save();
        $notification=array(
            'messege'=>' Division Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }


    public function edit($id)
    {
        $division=Division::find($id);
        return view('superadmin.division.edit_division',compact('division'));
    }

    public function update(Request $request,$id)
    {
        $division = Division::find($id);
        $division->name=$request->name;
        $division->bn_name= $request->bn_name;
        $division->url= $request->url;
        $division->status=1;
        $division->updated_by=Auth()->user()->id;
        $division->save();
        $notification=array(
            'messege'=>' Division Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('superadmin.all.division')->with($notification);
        
    }
    public function delete($id)
    {
      $delete = Division::find($id);
      $delete->delete();
       $notification=array(
            'messege'=>'Division Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
}
