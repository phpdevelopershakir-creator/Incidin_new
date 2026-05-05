<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Twelve extends Model
{
    use HasFactory;

    protected $table = 'government_cooperate_foreign_counterparts_q12';

    public static function get_question12_string_data_by_date($startDate, $endDate, $is_date = true)
    {

        $data = DB::table('situation_prevention_yes_no_others');
        $data->select('transparent_oversight_mechanism_q12.*', 'users.name', 'users.user_type', 'situation_prevention_yes_no_others.created_at as date', 'countries.name as country');
        $data->leftJoin('transparent_oversight_mechanism_q12', 'situation_prevention_yes_no_others.case_id', '=', 'transparent_oversight_mechanism_q12.case_id');
        $data->leftJoin('countries', 'transparent_oversight_mechanism_q12.country_id_q12', '=', 'countries.id');
        $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
        $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
        if ($is_date) {
            $data->whereBetween('situation_prevention_yes_no_others.created_at', [$startDate, $endDate]);
        }
        $data->where('situation_prevention_yes_no_others.created_by', '>', '0');
        $data->groupBy('transparent_oversight_mechanism_q12.instrument', 'transparent_oversight_mechanism_q12.case_id');
        $data->orderBy('transparent_oversight_mechanism_q12.created_at', 'desc');
        $new_data = $data->get();
        return $new_data;
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id_q12', 'id');
    }
}
