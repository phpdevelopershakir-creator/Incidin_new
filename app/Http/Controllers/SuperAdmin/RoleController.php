<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use DB;
class RoleController extends Controller
{
    public function AllPermission(){
        $permissions=Permission::get();
        return view('superadmin.pages.permission.all_permission',compact('permissions'));
    }

    public function Create()
    {
        return view('superadmin.pages.permission.add_permission');
    }

    public function StorePermission(Request $request)
    {
        $permission=new Permission();
        $permission->name= $request->name;
        $permission->group_name=$request->group_name;
        $permission->save();
        $notification=array(
            'messege'=>' Permission Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
     
    }

    public function edit($id)
    {
        $permission=Permission::find($id);
        // return response()->json($permission);
        return view('superadmin.pages.permission.edit_permission',compact('permission'));
    }


    public function update(Request $request,$id)
    {
        $permission = Permission::find($id);
        $permission->name=$request->name;
        $permission->group_name=$request->group_name;
        $permission->save();
        return redirect()->route('superadmin.all.permission');
    }

    public function delete($id)
    {
      $delete = Permission::find($id);
      $delete->delete();
       $notification=array(
            'messege'=>'Permission Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function AllRole(){
        $roles=Role::get();

        //return response()->json($roles);
        return view('superadmin.pages.roles.all_role',compact('roles'));
    }

    public function RoleCreate()
    {
        return view('superadmin.pages.roles.add_role');
    }

    public function StoreRole(Request $request)
    {
        $role=new Role();
        $role->name= $request->name;
        $role->save();
        $notification=array(
            'messege'=>' Role Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
     
    }

    public function editrole($id)
    {
        $role=Role::find($id);
        // return response()->json($role);
        return view('superadmin.pages.roles.edit_role',compact('role'));
    }


    public function updaterole(Request $request,$id)
    {
        $role = Role::find($id);
        $role->name=$request->name;
        $role->save();

        $notification=array(
            'messege'=>' Role Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('superadmin.all.role')->with($notification);

        
    }

    public function deleterole($id)
    {
      $delete = Role::find($id);
      $delete->delete();
       $notification=array(
            'messege'=>'Role Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }



    public function RolePermissionCreate()
    {
        $roles=Role::all();
        $permissions=Permission::all();
        $permission_groups=User::getpermissionGroups();
        return view('superadmin.pages.rolesetup.add_role_permission',compact('roles','permissions','permission_groups'));
    }


    public function StoreRolePermission(Request $request)
    {
        $data=array();
         $permissions=$request->permission;
         foreach ($permissions as $key => $item) {
           $data['role_id']=$request->role_id;
           $data['permission_id']=$item;
           DB::table('role_has_permissions')->insert($data);
         }

              $notification=array(
                  'messege'=>'Role Permission Added Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->back()->with($notification);
     
    }








    public function AllRolePermission(){
        $rolepermissions=Role::get();
        return view('superadmin.pages.rolesetup.all_role_permission',compact('rolepermissions'));
    }


      public function editrolepermission($id)
      {
        $role=Role::findOrFail($id);
        $permissions=Permission::all();
        $permission_groups=User::getpermissionGroups();
        return view('superadmin.pages.rolesetup.edit_role_permission',compact('role','permissions','permission_groups'));
      }

public function updaterolepermission(Request $request,$id)
{

   

    $role = Role::findOrFail($id);


    $permissions=$request->permission;
    $role->syncPermissions($permissions);


//    $role=Role::findOrFail($id);
//    $permissions=$request->permission;

//    if (!empty($permissions)) {
//     $role->syncPermissions($permissions);
//    }

   $notification=array(
    'messege'=>' Role & Permission Update Successfully',
    'alert-type'=>'success'
     );
   return Redirect()->route('superadmin.all.role.permission')->with($notification);

   
}

public function deleterolepermission($id)
{
  $role=Role::findOrFail($id);
  if (!is_null($role)) {
    $role->delete();
  }

  $notification=array(
    'messege'=>' Role & Permission Delete Successfully',
    'alert-type'=>'success'
     );
   return Redirect()->route('superadmin.all.role.permission')->with($notification);


}





}
