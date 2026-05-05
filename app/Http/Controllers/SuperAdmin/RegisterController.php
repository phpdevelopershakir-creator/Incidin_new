<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function Register()
    {
        $ministries=User::where('user_type','ministry')->paginate(10);
        return view('superadmin.pages.ministry.list',compact('ministries'));
    }

    public function Registeradd()
    {
  


        return view('superadmin.pages.ministry.add');
    }

    public function RegisterStore(Request $request)
    {

        echo"DOne";
        request()->validate([
            // 'email'=>'required|email|unique:users',
            'email'=>'required',
            'password'=>'required|min:6|max:10',
            'name'=>'required'
            ]);
            $user= new User();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->division_department=$request->division_department;
            $user->focal_person=$request->focal_person;
            $user->focal_person_number=$request->focal_person_number;
            $user->focal_person_two=$request->focal_person_two;
            $user->focal_person_number_two=$request->focal_person_number_two;
            $user->focal_person_three=$request->focal_person_three;
            $user->focal_person_number_three=$request->focal_person_number_three;
            $user->focal_person_email_three=$request->focal_person_email_three;
            $user->status="Active";
            $user->user_type="ministry";
            $user->password=Hash::make($request->password);
            $user->save();
    
    
            
            $notification=array(
                'messege'=>'Ministry Added Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
    }

    public function AgencyAdd()
    {
  


        return view('superadmin.pages.agency.add');
    }

    public function AgencyMoibAdd()
    {
  


        return view('superadmin.pages.agencymoib.add');
    }

    public function CTG()
    {
        return view('superadmin.pages.ctg.add');
    }

    public function NGO()
    {
  


        return view('superadmin.pages.ngo.add');
    }

}
