<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class One extends Model
{
    use HasFactory;

    protected $table ='supreme_court_precedent_1a';

    public static function get_string_data_by_date($startDate,$endDate,$is_date=true)
    {
       
        $data = DB::table('situation_prevention_yes_no_others');
        $data->leftJoin('trafficking_location_q1', 'situation_prevention_yes_no_others.case_id', '=','trafficking_location_q1.case_id');
        $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
        $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
        if($is_date){
            $data->whereBetween('situation_prevention_yes_no_others.created_at',[$startDate,$endDate]);
        }
        $data->where('situation_prevention_yes_no_others.created_by','>','0' );
        $data->groupBy('trafficking_location_q1.q1_type_id','trafficking_location_q1.case_id');
        $data->orderBy('trafficking_location_q1.created_at','desc');
        $data->select('trafficking_location_q1.*','users.*','situation_prevention_yes_no_others.created_at as date');
        $new_data=$data->get();
        return $new_data;
    }
}
