<?php

namespace App\Http\Controllers\SuperAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Mail\RegistrationMail;
use Illuminate\Support\Str;
class UserController extends Controller
{
      public function add()
    {
        $data['header_title']='User Create';
         $user = Auth::user();
    $loggedInUserRole = $user->getRoleNames()->first();

    if (in_array($loggedInUserRole, ['Super Admin'])) {
        // Super Admin and MOHA can see all roles
        $roles = Role::all();
    } elseif ($loggedInUserRole == 'User') {
        $roles = Role::where('name', 'User')->get();
    }

    elseif ($loggedInUserRole == 'BGB') {
        $roles = Role::where('name', 'BGB')->get();
    } 

    elseif ($loggedInUserRole == 'Police HQ') {
        $roles = Role::where('name', 'Police HQ')->get();
    } 

    elseif ($loggedInUserRole == 'MoIB') {
        $roles = Role::where('name', 'MoIB')->get();
    } 

    elseif ($loggedInUserRole == 'Cost Guard') {
        $roles = Role::where('name', 'Cost Guard')->get();
    } 

    elseif ($loggedInUserRole == 'CID') {
        $roles = Role::where('name', 'CID')->get();
    } 
    elseif ($loggedInUserRole == 'RAB') {
        $roles = Role::where('name', 'RAB')->get();
    } 

    elseif ($loggedInUserRole == 'Ansar') {
        $roles = Role::where('name', 'Ansar')->get();
    } 

     elseif ($loggedInUserRole == 'PIB') {
        $roles = Role::where('name', 'PIB')->get();
    } 

    elseif ($loggedInUserRole == 'MoLJPA') {
        $roles = Role::where('name', 'MoLJPA')->get();
    } 

    elseif ($loggedInUserRole == 'MoWCA') {
        $roles = Role::where('name', 'MoWCA')->get();
    } 

    elseif ($loggedInUserRole == 'MoSW') {
        $roles = Role::where('name', 'MoSW')->get();
    } 


    elseif ($loggedInUserRole == 'MoFA') {
        $roles = Role::where('name', 'MoFA')->get();
    } 

    elseif ($loggedInUserRole == 'B. Betar') {
        $roles = Role::where('name', 'B. Betar')->get();
    } 
    elseif ($loggedInUserRole == 'BTV') {
        $roles = Role::where('name', 'BTV')->get();
    } 

     elseif ($loggedInUserRole == 'MoLE') {
        $roles = Role::where('name', 'MoLE')->get();
    } 

    elseif ($loggedInUserRole == 'MoRA') {
        $roles = Role::where('name', 'MoRA')->get();
    } 


    elseif ($loggedInUserRole == 'MoYS') {
        $roles = Role::where('name', 'MoYS')->get();
    } 

    elseif ($loggedInUserRole == 'MoDMR') {
        $roles = Role::where('name', 'MoDMR')->get();
    } 

    elseif ($loggedInUserRole == 'MoLGRDC') {
        $roles = Role::where('name', 'MoLGRDC')->get();
    } 

    elseif ($loggedInUserRole == 'MoHFW') {
        $roles = Role::where('name', 'MoHFW')->get();
    } 

     elseif ($loggedInUserRole == 'District') {
        $roles = Role::where('name', 'District')->get();
    } 

    elseif ($loggedInUserRole == 'Upazila') {
        $roles = Role::where('name', 'Upazila')->get();
    } 

    elseif ($loggedInUserRole == 'Union') {
        $roles = Role::where('name', 'Union')->get();
    } 

    elseif ($loggedInUserRole == 'NGO') {
        $roles = Role::where('name', 'NGO')->get();
    } 


    elseif ($loggedInUserRole == 'UN') {
        $roles = Role::where('name', 'UN')->get();
    } 

    elseif ($loggedInUserRole == 'MoEWOE') {
        $roles = Role::where('name', 'MoEWOE')->get();
    } 




     else {
        // Others see no roles
        $roles = collect();
    }
        
        //$roles=Role::all();
        // return response()->json($roles);
        return view('superadmin.user.add',$data,compact('roles'));
    }

    public function list()
    {
            $userId = Auth::id();
           $userType = Auth::user()->user_type;

          if ($userType == "Super Admin") {
            $users = User::paginate(20);
        } else {
            $users = User::where('user_id', $userId)
                ->paginate(20);
        }

       //return response()->json($users);
        return view('superadmin.user.list',compact('users'));
    }



    public function store(Request $request)
    {

        request()->validate([
        // 'email'=>'required|email|unique:users',
        'email'=>'required',
        'name'=>'required',
        'user_type'=>'required'
        ]);
        $password = Str::random(10);
        $userid = Str::random(10);

        $user= new User();
        $user->user_id = Auth()->user()->id;
        $user->userid = $userid;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->mobile=$request->mobile;
        $user->focal_person_name_one=$request->focal_person_name_one;
        $user->designation_one=$request->designation_one;
        $user->organization=$request->organization;
        $user->work_area=$request->work_area;
        $user->user_type=$request->user_type;
        $user->status=1;
        $user->password = Hash::make($password);

        $user->save();

        


        if ($request->roles) {
            $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name');
        
            $user->assignRole($roleNames);
        }
         Mail::to($user->email)->send(new RegistrationMail($user, $password));
        

        
        $notification=array(
            'messege'=>'User Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $data['getRecord']=User::getSingle($id);
        $roles=Role::all();
        if (!empty($data['getRecord']))
        {
          $data['header_title']='User Edit';
        return view('superadmin.user.edit',$data,compact('roles'));
        }
      else
      {
       abort(404);
      }
    }

    public function update(Request $request,$id)
    {
        request()->validate([

            'email' => 'required|email|unique:users,email,'.$id

            ]);

        $user=User::getSingle($id);
        $user->user_id = Auth()->user()->id;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->mobile=$request->mobile;
        $user->designation_one=$request->designation_one;
        $user->organization=$request->organization;
        $user->work_area=$request->work_area;
        $user->user_type=$request->user_type;
        $user->status=$request->status;
        if (!empty($request->password))
        {
            $user->password=Hash::make($request->password);
        }
        $user->save();
        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
            // $roleNames = Role::whereIn('id', (array)$request->roles)->pluck('name'); 
        }
        

        
        $notification=array(
            'messege'=>'User Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('dashboard.user.list')->with($notification);
       
    }


    public function Delete($id)
    {
        $delete = User::find($id);
        $delete->delete();
         $notification=array(
              'messege'=>'User Deleted Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->back()->with($notification);
    }


}
