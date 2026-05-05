<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Three extends Model
{
    use HasFactory;

    protected $table = 'state_sponsored_forced_labor_q3';

    public static function get_question3_string_data_by_date($startDate, $endDate, $is_date = true)
    {

        $data = DB::table('situation_prevention_yes_no_others');
        $data->select('trafficking_associated_climate_change_q3.*', 'users.name', 'users.user_type', 'situation_prevention_yes_no_others.created_at as date');
        $data->leftJoin('trafficking_associated_climate_change_q3', 'situation_prevention_yes_no_others.case_id', '=', 'trafficking_associated_climate_change_q3.case_id');
        $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
        $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
        if ($is_date) {
            $data->whereBetween('situation_prevention_yes_no_others.created_at', [$startDate, $endDate]);
        }
        $data->where('situation_prevention_yes_no_others.created_by', '>', '0');
        $data->groupBy('trafficking_associated_climate_change_q3.q3_initiative_mitigate_risk', 'trafficking_associated_climate_change_q3.case_id');
        $data->orderBy('trafficking_associated_climate_change_q3.created_at', 'desc');
        $new_data = $data->get();
        return $new_data;
    }
}
