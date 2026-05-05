<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Two extends Model
{
    use HasFactory;
    protected $table ='involved_directly_trafficking_2q';

    public static function get_question2_string_data_by_date($startDate,$endDate,$is_date=true)
{
   
    $data = DB::table('situation_prevention_yes_no_others');
    $data->select('sex_trafficking_force_labors_q2.*','users.name','users.user_type','situation_prevention_yes_no_others.created_at as date');
    $data->leftJoin('sex_trafficking_force_labors_q2', 'situation_prevention_yes_no_others.case_id', '=','sex_trafficking_force_labors_q2.case_id');
    $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
    $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
    if($is_date){
        $data->whereBetween('situation_prevention_yes_no_others.created_at',[$startDate,$endDate]);
    }
    $data->where('situation_prevention_yes_no_others.created_by','>','0' );
    $data->groupBy('sex_trafficking_force_labors_q2.choose_vulnerable_list_id','sex_trafficking_force_labors_q2.case_id');
    $data->orderBy('sex_trafficking_force_labors_q2.created_at','desc');
    $new_data=$data->get();
    return $new_data;
    }
}



