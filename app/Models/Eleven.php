<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Eleven extends Model
{
    use HasFactory;

    protected $table = 'government_agreements_transparent_q11';
    public static function get_question11_string_data_by_date($startDate, $endDate, $is_date = true)
    {

        $data = DB::table('situation_prevention_yes_no_others');
        $data->select('recruitment_licensed_unlicensed_q11.*', 'users.name', 'users.user_type', 'situation_prevention_yes_no_others.created_at as date');
        $data->leftJoin('recruitment_licensed_unlicensed_q11', 'situation_prevention_yes_no_others.case_id', '=', 'recruitment_licensed_unlicensed_q11.case_id');
        $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
        $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
        if ($is_date) {
            $data->whereBetween('situation_prevention_yes_no_others.created_at', [$startDate, $endDate]);
        }
        $data->where('situation_prevention_yes_no_others.created_by', '>', '0');
        $data->groupBy('recruitment_licensed_unlicensed_q11.description_change', 'recruitment_licensed_unlicensed_q11.case_id');
        $data->orderBy('recruitment_licensed_unlicensed_q11.created_at', 'desc');
        $new_data = $data->get();
        return $new_data;
    }
}
