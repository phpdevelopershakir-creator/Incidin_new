<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Sixteen extends Model
{
    use HasFactory;

    protected $table ='victim_identification_protocol_16q';
    public static function get_question16_string_data_by_date($startDate,$endDate,$is_date =true)
{
   
    $data = DB::table('situation_prevention_yes_no_others');
    $data->select('reduce_demand_commercial_q16.*','users.name','users.user_type','situation_prevention_yes_no_others.created_at as date');
    $data->leftJoin('reduce_demand_commercial_q16', 'situation_prevention_yes_no_others.case_id', '=','reduce_demand_commercial_q16.case_id');
    $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
    $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
    if($is_date){
        $data->whereBetween('situation_prevention_yes_no_others.created_at',[$startDate,$endDate]);
    }
    $data->where('situation_prevention_yes_no_others.created_by','>','0' );
    $data->groupBy('reduce_demand_commercial_q16.q16_status_id','reduce_demand_commercial_q16.case_id');
    $data->orderBy('reduce_demand_commercial_q16.created_at','desc');
    $new_data = $data->get();
    return $new_data;
    }
}
