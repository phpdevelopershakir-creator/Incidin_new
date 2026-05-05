<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Seventeen extends Model
{
    use HasFactory;

    protected $table = 'report_country_narrative_protection_q17';

    public static function get_question17_string_data_by_date($startDate, $endDate, $is_date = true)
    {

        $data = DB::table('situation_prevention_yes_no_others');
        $data->select('participation_international_domestic_q17.*', 'users.name', 'users.user_type', 'situation_prevention_yes_no_others.created_at as date');
        $data->leftJoin('participation_international_domestic_q17', 'situation_prevention_yes_no_others.case_id', '=', 'participation_international_domestic_q17.case_id');
        $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
        $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
        if ($is_date) {
            $data->whereBetween('situation_prevention_yes_no_others.created_at', [$startDate, $endDate]);
        }
        $data->where('situation_prevention_yes_no_others.created_by', '>', '0');
        $data->groupBy('participation_international_domestic_q17.status_id_q17', 'participation_international_domestic_q17.case_id');
        $data->orderBy('participation_international_domestic_q17.created_at', 'desc');
        $new_data = $data->get();
        return $new_data;
    }
}
