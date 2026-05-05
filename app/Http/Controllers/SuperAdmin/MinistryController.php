<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;
use App\Mail\UpdateProfileMail;
use Illuminate\Support\Str;
class MinistryController extends Controller
{
    public function Ministries()
    {
        $ministries=User::where('user_type','ministry')->paginate(10);
        return view('superadmin.pages.ministry.list',compact('ministries'));
    }

    public function MinistryAdd()
    {
  

        $roles=Role::all();
        return view('superadmin.pages.ministry.add',compact('roles'));
    }

    public function MinistryStore(Request $request)
    {

        request()->validate([
            // 'email'=>'required|email|unique:users'
            'email'=>'required'
        
            ]);

            $password = Str::random(10);
            $userid = Str::random(10);
      

          
            $user= new User();
            $user->userid = $userid;
            $user->ministry_id=$request->ministry_id;
            $user->division_id=$request->division_id;
            $user->focal_person_name_one=$request->focal_person_name_one;
            $user->designation_one=$request->designation_one;
            $user->focal_person_number_one=$request->focal_person_number_one;
            $user->email=$request->email;
            $user->focal_person_name_two=$request->focal_person_name_two;
            $user->designation_two=$request->designation_two;
            $user->focal_person_number_two=$request->focal_person_number_two;
            $user->focal_person_email_two=$request->focal_person_email_two;
            $user->focal_person_name_three=$request->focal_person_name_three;
            $user->designation_three=$request->designation_three;
            $user->focal_person_number_three=$request->focal_person_number_three;
            $user->focal_person_email_three=$request->focal_person_email_three;
            $user->status=0;
            $user->user_type="Ministry";
            $user->password = Hash::make($password);
            $user->save();

            if ($request->roles) {
                $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name');
            
                $user->assignRole($roleNames);
            }


            
            //Mail::to('phpdeveloper.shakir@gmail.com')->send(new UserMail($user, $password));
             Mail::to($user->email)->send(new UserMail($user, $password));
    
            
            $notification=array(
                'messege'=>'Ministry Added Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
    
    }



    public function MinistryEdit($id)
    {
        $ministry=User::where('user_type','ministry')->find($id);
        $roles=Role::all();
        //return response()->json($ministry);
        return view('superadmin.pages.ministry.edit',compact('ministry','roles'));
    }

    public function MinistryUpdate(Request $request,$id)
    {
        $user= User::find($id);
        $user->ministry_id=$request->ministry_id;
        $user->division_id=$request->division_id;
        $user->focal_person_name_one=$request->focal_person_name_one;
        $user->designation_one=$request->designation_one;
        $user->focal_person_number_one=$request->focal_person_number_one;
        $user->email=$request->email;
        $user->focal_person_name_two=$request->focal_person_name_two;
        $user->designation_two=$request->designation_two;
        $user->focal_person_number_two=$request->focal_person_number_two;
        $user->focal_person_email_two=$request->focal_person_email_two;
        $user->focal_person_name_three=$request->focal_person_name_three;
        $user->designation_three=$request->designation_three;
        $user->focal_person_number_three=$request->focal_person_number_three;
        $user->focal_person_email_three=$request->focal_person_email_three;
        $user->status=0;
        $user->user_type="Ministry";
        $user->save();

        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
            // $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name'); 
        }
        
        $notification=array(
            'messege'=>'Ministry Update Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('superadmin.ministry.list')->with($notification);
    }

    public function delete($id)
    {
      $delete = User::find($id);
      $delete->delete();
       $notification=array(
            'messege'=>'Ministry Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

public function MinistryProfile(Request $request)
{

 
    $user=User::find(Auth::id());
    $user->ministry_id=$request->ministry_id;
    $user->division_id=$request->division_id;
    $user->focal_person_name_one=$request->focal_person_name_one;
    $user->designation_one=$request->designation_one;
    $user->focal_person_number_one=$request->focal_person_number_one;
    $user->email=$request->email;
    $user->focal_person_name_two=$request->focal_person_name_two;
    $user->designation_two=$request->designation_two;
    $user->focal_person_number_two=$request->focal_person_number_two;
    $user->focal_person_email_two=$request->focal_person_email_two;
    $user->focal_person_name_three=$request->focal_person_name_three;
    $user->designation_three=$request->designation_three;
    $user->focal_person_number_three=$request->focal_person_number_three;
    $user->focal_person_email_three=$request->focal_person_email_three;
        $user->status =1;
           $user->save();

           Mail::to($user->email)->send(new UpdateProfileMail($user));


             if ($user) {           
             $notification=array(
               'messege'=>'Profile Completed  Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->route('superadmin.dashboard')->with($notification);
           
        }
}

}
