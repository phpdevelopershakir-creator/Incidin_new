<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{



  

    public function ChangeProfile()
    {
      
          $id=Auth::user()->id;
         $editData =User::find($id);
        return view('auth.profile',compact('editData'));
    }


    public function UpdateProfile(Request $request)
    {
        $data=User::find(Auth::id());
        $data->name = $request->name;
        $data->userid = $request->userid;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->designation = $request->designation;
        $data->organization = $request->organization;
        $data->work_area = $request->work_area;
        $data->status =1;
           $data->save();
             if ($data) {           
             $notification=array(
               'messege'=>'Profile Update  Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->route('superadmin.dashboard')->with($notification);
           
        }

    }


    public function ChangePassword()
    {
      
         $id=Auth::user()->id;
         $editData =User::find($id);
         //dd($editData);
        return view('auth.change_password',compact('editData'));
    }


    public function UpdatePassword(Request $request)
    {
   
     
      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                   
                      $user=User::find(Auth::id());
                      $user->password=Hash::make($request->password);
                      $user->save();
                      Auth::logout();  
                      $notification=array(
                        'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('login')->with($notification); 
                 }else{
                     $notification=array(
                        'messege'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->back()->with($notification);
                 }     
      }else{
        $notification=array(
                'messege'=>'Old Password not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
      }
    }
}
