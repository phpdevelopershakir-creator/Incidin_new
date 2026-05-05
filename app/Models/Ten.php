<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Ten extends Model
{
    use HasFactory;
    protected $table = 'exclusively_trafficking_q10';




    public static function get_question10_string_data_by_date($startDate, $endDate, $is_date = true)
    {

        $data = DB::table('situation_prevention_yes_no_others');
        $data->select('foreign_governments_trafficking_q10.*', 'users.name', 'users.user_type', 'situation_prevention_yes_no_others.created_at as date', 'countries.name as country');
        $data->leftJoin('foreign_governments_trafficking_q10', 'situation_prevention_yes_no_others.case_id', '=', 'foreign_governments_trafficking_q10.case_id');
        $data->leftJoin('countries', 'foreign_governments_trafficking_q10.trafficking_country', '=', 'countries.id');
        $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
        $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
        if ($is_date) {
            $data->whereBetween('situation_prevention_yes_no_others.created_at', [$startDate, $endDate]);
        }
        $data->where('situation_prevention_yes_no_others.created_by', '>', '0');
        $data->groupBy('foreign_governments_trafficking_q10.trafficking_target_group', 'foreign_governments_trafficking_q10.case_id');
        $data->orderBy('foreign_governments_trafficking_q10.created_at', 'desc');
        $new_data = $data->get();
        return $new_data;
    }


    public function country()
    {
        return $this->belongsTo(Country::class, 'trafficking_country', 'id');
    }
}
