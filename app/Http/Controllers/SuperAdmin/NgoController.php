<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Division;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;
use App\Mail\UpdateProfileMail;
use Illuminate\Support\Str;
class NgoController extends Controller
{
    public function ngos()
    {
        $ngos=User::where('user_type','ngo')->paginate(10);
        return view('superadmin.pages.ngo.list',compact('ngos'));
    }

    public function NGOAdd()
    {
  

        $roles=Role::all();
        return view('superadmin.pages.ngo.add',compact('roles'));
    }

   

 

    public function NGOStore(Request $request)
    {

        request()->validate([
            // 'email'=>'required|email|unique:users',
          
            'email'=>'required',
            'name'=>'required'
            ]);
            $password = Str::random(10);
            $userid = Str::random(10);
            $user= new User();
            $user->userid = $userid;
            $user->name=$request->name;
            $user->division_id=$request->division_id;
            $user->district_id=$request->district_id;
            $user->upazilla_id=$request->upazilla_id;
            $user->union_id=$request->union_id;
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
            $user->user_type="NGO";
            $user->password = Hash::make($password);
            $user->save();
            
            if ($request->roles) {
                $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name');
            
                $user->assignRole($roleNames);
            }

            // Mail::to('phpdeveloper.shakir@gmail.com')->send(new UserMail($user, $password));
    
            Mail::to($user->email)->send(new UserMail($user, $password));
            
            $notification=array(
                'messege'=>'Ngo Added Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
    
    }


    public function NGOEdit ($id)
    {
        $ngo=User::where('user_type','ngo')->find($id);
        $roles=Role::all();
        //return response()->json($ministry);
        return view('superadmin.pages.ngo.edit',compact('ngo','roles'));
    }


    public function NGOUpdate (Request $request,$id)
    {
        $user=User::find($id);
        $user->name=$request->name;
        $user->division_id=$request->division_id;
        $user->district_id=$request->district_id;
        $user->upazilla_id=$request->upazilla_id;
        $user->union_id=$request->union_id;
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
        $user->user_type="NGO";
        $user->save();
        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
            // $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name'); 
        }
        
        $notification=array(
            'messege'=>'NGO Update Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('superadmin.ngo.list')->with($notification);
    }
    public function NGODelete($id)
    {
      $delete = User::find($id);
      $delete->delete();
       $notification=array(
            'messege'=>'Ngo Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function NGOrofile(Request $request)
    {
        $user=User::find(Auth::id());
        $user->name=$request->name;
        $user->division_id=$request->division_id;
        $user->district_id=$request->district_id;
        $user->upazilla_id=$request->upazilla_id;
        $user->union_id=$request->union_id;
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
               'messege'=>'NGO Profile Completed  Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->route('superadmin.dashboard')->with($notification);
           
        }
    }
}
