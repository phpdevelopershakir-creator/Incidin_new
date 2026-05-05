<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
class FagController extends Controller
{
    public function all()
    {
        $faqs=Faq::all();
        return view('superadmin.faq.list',compact('faqs'));
    }

    public function Create()
    {
        return view('superadmin.faq.add_faq');
    }

    public function Store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'is_active' => 'required',
            
        ]);

        $fag=new Faq();
        $fag->question=$request->question;
        $fag->answer=$request->answer;
        $fag->is_active= $request->is_active;
        $fag->save();
        $notification=array(
            'messege'=>' Faq Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }


    public function edit($id)
    {
        $faq=Faq::find($id);
        return view('superadmin.faq.edit_faq',compact('faq'));
    }

    public function update(Request $request,$id)
    {
        $faq = Faq::find($id);
        $faq->question=$request->question;
        $faq->answer=$request->answer;
        $faq->is_active= $request->is_active;

        $faq->save();
        $notification=array(
            'messege'=>' Fag Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('superadmin.all.faq')->with($notification);
        
    }
    
       public function delete($id)
    {

        $faq = Faq::find($id);
        

        $faq->delete();
        $notification=array(
            'messege'=>' Fag Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('superadmin.all.faq')->with($notification);
    }


}
