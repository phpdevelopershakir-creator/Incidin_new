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
class CTGController extends Controller
{
    public function CTGies()
    {
        $ctgs=User::where('user_type','ctc')->paginate(10);
        return view('superadmin.pages.ctg.list',compact('ctgs'));
    }

    public function CTGAdd()
    {
  

        $roles=Role::all();
        return view('superadmin.pages.ctg.add',compact('roles'));
    }

    public function GetDivision($division_id)
    {
       
        $cat=DB::table('districs')->where("division_id",$division_id)->get();
        return json_decode($cat);
    }

    public function GetUpazila($upazilla_id)
    {
        $upa=DB::table('unions')->where("upazilla_id",$upazilla_id)->get();
        return json_decode($upa);
    }

    public function CTGStore(Request $request)
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
            $user->user_type="CTC";
            $user->password = Hash::make($password);
            $user->save();
            if ($request->roles) {
                $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name');
            
                $user->assignRole($roleNames);
            }

            // Mail::to('phpdeveloper.shakir@gmail.com')->send(new UserMail($user, $password));
             Mail::to($user->email)->send(new UserMail($user, $password));
    
            
            $notification=array(
                'messege'=>'CTC Added Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
    
    }


    public function CTGEdit($id)
    {
        $ctc=User::where('user_type','ctc')->find($id);
        $roles=Role::all();
        return view('superadmin.pages.ctg.edit',compact('ctc','roles'));
    }


    public  function CTGUpdate (Request $request,$id)
    {
           $user= User::find($id);
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
            $user->user_type="CTC";
            $user->save();
            $user->roles()->detach();
            if ($request->roles) {
                $user->assignRole($request->roles);
                // $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name'); 
            }
            $notification=array(
                'messege'=>'CTC Update Successfully',
                'alert-type'=>'success'
                 );
                 return Redirect()->route('superadmin.ctc.list')->with($notification);
    }
    public function CTGDelete($id)
    {
      $delete = User::find($id);
      $delete->delete();
       $notification=array(
            'messege'=>'CTC Delete Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function CTCProfile(Request $request)
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
               'messege'=>'CTC  Profile Completed  Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->route('superadmin.dashboard')->with($notification);
           
        }
    }
}
