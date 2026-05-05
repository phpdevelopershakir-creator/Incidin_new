<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Five extends Model
{
    use HasFactory;

   protected $table ='involved_directly_trafficking_q5';

    
    public static function get_question5_string_data_by_date($startDate,$endDate,$is_date=true)
{
   
    $data = DB::table('situation_prevention_yes_no_others');
    $data->select('among_trafficking_victims_q5.*','users.name','users.user_type','situation_prevention_yes_no_others.created_at as date');
    $data->leftJoin('among_trafficking_victims_q5', 'situation_prevention_yes_no_others.case_id', '=','among_trafficking_victims_q5.case_id');
    $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
    $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
    if($is_date){
        $data->whereBetween('situation_prevention_yes_no_others.created_at',[$startDate,$endDate]);
    }
    $data->where('situation_prevention_yes_no_others.created_by','>','0' );
    $data->groupBy('among_trafficking_victims_q5.type_policy_tool_id','among_trafficking_victims_q5.case_id');
    $data->orderBy('among_trafficking_victims_q5.created_at','desc');
    $new_data =$data->get();
    return $new_data;
    }
}
