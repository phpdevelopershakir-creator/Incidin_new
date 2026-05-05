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
class UNController extends Controller
{
    public function index()
    {
        $uns=User::where('user_type','un')->paginate(10);
        return view('superadmin.pages.un.list',compact('uns'));
    }

    public function create()
    {
  

        $roles=Role::all();
        return view('superadmin.pages.un.add',compact('roles'));
    }

   

 

    public function store(Request $request)
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
            $user->user_type="UN";
            $user->password = Hash::make($password);
            $user->save();
            
            if ($request->roles) {
                $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name');
            
                $user->assignRole($roleNames);
            }

            // Mail::to('phpdeveloper.shakir@gmail.com')->send(new UserMail($user, $password));
             Mail::to($user->email)->send(new UserMail($user, $password));
    
            
            $notification=array(
                'messege'=>'UN has been added Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
    
    }


    public function edit ($id)
    {
        $un=User::where('user_type','un')->find($id);
        $roles=Role::all();
        //return response()->json($ministry);
        return view('superadmin.pages.un.edit',compact('un','roles'));
    }


    public function update (Request $request,$id)
    {
        $user=User::find($id);
        $user->name=$request->name;
            $user->division_id=$request->division_id;
            $user->district_id=$request->district_id;
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
        $user->user_type="UN";
        $user->save();
        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
            // $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name'); 
        }
        
        $notification=array(
            'messege'=>'UN has been updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('superadmin.un.list')->with($notification);
    }
    public function delete($id)
    {
      $delete = User::find($id);
      $delete->delete();
       $notification=array(
            'messege'=>'UN has been deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function UNProfile(Request $request)
    {
        $user=User::find(Auth::id());
        $user->name=$request->name;
        $user->division_id=$request->division_id;
        $user->district_id=$request->district_id;
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
               'messege'=>'UN Profile Completed  Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->route('superadmin.dashboard')->with($notification);
           
        }
    }
}
