<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

use Request;
use DB;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function cases()
    {
        return $this->hasMany(CaseModel::class, 'user_id');
    }
    
    

    static public function getAdmin()
    {
        $return = self::select('users.*');
        // ->where('user_type','=',3);
        if (!empty(Request::get('name')))
        {
            $return = $return->where('name','like','%' .Request::get('name'));
        }

        if (!empty(Request::get('email')))
        {
            $return = $return->where('email','like','%' .Request::get('email'));
        }

        if (!empty(Request::get('mobile')))
        {
            $return = $return->where('mobile','like','%' .Request::get('mobile'));
        }

        

       $return = $return->orderBy('id','desc')
        ->paginate(10);
        return $return;
    }

    static public function getSingle($id)
    {
        return self::find($id);
    }

    public static function getpermissionGroups(){
        $permission_groups = DB::table('permissions')->select('group_name')->groupBy('group_name')->get();
        return $permission_groups;
    } // End Method 
    public static function getpermissionByGroupName($group_name){

        $permissions = DB::table('permissions')
                         ->select('name','id')
                         ->where('group_name',$group_name)
                         ->get();
        return $permissions;

    }// End Method 



    public static function roleHasPermissions($role,$permissions){

        $hasPermission = true;
        foreach($permissions as $permission){
            if (!$role->hasPermissionTo($permission->name)) {
                 $hasPermission = false;
            }
            return $hasPermission;
        }

    }// End Method 


    public function division(){
    	return $this->belongsTo(Division::class,'division_id','id');
    }

    public function ministy(){
    	return $this->belongsTo(Ministry::class,'ministry_id','id');
    }

    

    static public function getEmailSingle($email)
    {
        return User::where('email','=', $email)->first();
    }

    static public function getTokenSingle($remember_token)
    {
        return User::where('remember_token','=', $remember_token)->first();
    }

   

}
