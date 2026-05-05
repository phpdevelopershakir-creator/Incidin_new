<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;
use App\Mail\UpdateProfileMail;
use Illuminate\Support\Str;
class AgencyController extends Controller
{
    public function Agencies()
    {
        $agencies=User::where('user_type','agency')->paginate(10);
        return view('superadmin.pages.agency.list',compact('agencies'));
    }

    public function AgencyAdd()
    {
  

        $roles=Role::all();
        return view('superadmin.pages.agency.add',compact('roles'));
    }

    public function AgencyStore(Request $request)
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
            $user->agency=$request->agency;
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
            $user->user_type="Agency";
            $user->password = Hash::make($password);
            $user->save();

            if ($request->roles) {
                $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name');
            
                $user->assignRole($roleNames);
            }

            
            Mail::to($user->email)->send(new UserMail($user, $password));
           
            
            $notification=array(
                'messege'=>'Agency Added Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
    
    }


    public function AgencyEdit($id)
    {
        $agency=User::where('user_type','agency')->find($id);
        $roles=Role::all();
        return view('superadmin.pages.agency.edit',compact('agency','roles'));
    }


    public function AgencyUpdate(Request $request,$id)
    {
            $user= User::find($id);
            $user->ministry_id=$request->ministry_id;
            $user->division_id=$request->division_id;
            $user->agency=$request->agency;
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
            $user->user_type="Agency";
            $user->status=0;
            $user->save();

            $user->roles()->detach();
            if ($request->roles) {
                $user->assignRole($request->roles);
                // $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name'); 
            }

            $notification=array(
                'messege'=>'Agency Update Successfully',
                'alert-type'=>'success'
                 );
              
               return Redirect()->route('superadmin.agency.list')->with($notification);
    }

    public function AgencyProfile(Request $request)
    {
        $user=User::find(Auth::id());
        $user->ministry_id=$request->ministry_id;
        $user->division_id=$request->division_id;
        $user->agency=$request->agency;
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
               'messege'=>'Agency  Profile Completed  Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->route('superadmin.dashboard')->with($notification);
           
        }
    }


    public function AgencyDelete($id)
    {
        $delete = User::find($id);
        $delete->delete();
         $notification=array(
              'messege'=>'Agency Deleted Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->back()->with($notification);
    }

    public function AgencyMoi()
    {
        $agencymoies=User::where('user_type','agencymoib')->paginate(10);
        return view('superadmin.pages.agencymoib.list',compact('agencymoies'));
    }

    public function AgencyMoibAdd()
    {
  

        $roles=Role::all();
        return view('superadmin.pages.agencymoib.add',compact('roles'));
    }

    public function AgencyMoiStore(Request $request)
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
            $user->agency=$request->agency;
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
            $user->user_type="AgencyMoib";
            $user->password = Hash::make($password);
            $user->save();

            
            if ($request->roles) {
                $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name');
            
                $user->assignRole($roleNames);
            }



            Mail::to($user->email)->send(new UserMail($user, $password));
          
            
            $notification=array(
                'messege'=>'Agency Moib Added Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
    
    }


    public function AgencyMoibEdit($id)
    {
        $agencymoib=User::where('user_type','agencymoib')->find($id);
        $roles=Role::all();
        return view('superadmin.pages.agencymoib.edit',compact('agencymoib','roles'));
    }

    public function AgencyMoibUpdate (Request $request,$id)
    {
        $user= User::find($id);
        $user->ministry_id=$request->ministry_id;
        $user->division_id=$request->division_id;
        $user->agency=$request->agency;
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
        $user->user_type="AgencyMoib";
        $user->save();

        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
            // $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name'); 
        }

        $notification=array(
            'messege'=>'Agency Moib Update Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('superadmin.agencymoib.list')->with($notification);
    }

    public function AgencyMoibDelete($id)
    {
        $delete = User::find($id);
        $delete->delete();
         $notification=array(
              'messege'=>'Agency Moib Deleted Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->back()->with($notification);
    }

    public function AgencymoibProfile(Request $request)
    {
        $user=User::find(Auth::id());
        $user->ministry_id=$request->ministry_id;
        $user->division_id=$request->division_id;
        $user->agency = $request->agency;
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
             if ($user) {           
             $notification=array(
               'messege'=>'Agency Moib Profile Completed  Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->route('superadmin.dashboard')->with($notification);
           
        }
    }
}
