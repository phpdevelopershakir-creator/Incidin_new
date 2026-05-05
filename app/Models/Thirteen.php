<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Thirteen extends Model
{
    use HasFactory;
    protected $table ='global_supply_chains_q13';

    public static function get_question13_string_data_by_date($startDate,$endDate,$is_date=true)
{
   
    $data = DB::table('situation_prevention_yes_no_others');
    $data->select('global_supply_chains_q13.*','users.name','users.user_type','situation_prevention_yes_no_others.created_at as date');
    $data->leftJoin('global_supply_chains_q13', 'situation_prevention_yes_no_others.case_id', '=','global_supply_chains_q13.case_id');
    $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
    $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
    if($is_date){
        $data->whereBetween('situation_prevention_yes_no_others.created_at',[$startDate,$endDate]);
    }
    $data->where('situation_prevention_yes_no_others.created_by','>','0' );
    $data->groupBy('global_supply_chains_q13.q13_national_type_action','global_supply_chains_q13.case_id');
    $data->orderBy('global_supply_chains_q13.created_at','desc');
    $new_data = $data->get();
    return $new_data;
    }
}
