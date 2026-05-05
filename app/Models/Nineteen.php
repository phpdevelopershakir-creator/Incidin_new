<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Nineteen extends Model
{
    use HasFactory;

    protected $table ='sex_trafficking_forced_labor_country_19q';

    public static function get_question19_string_data_by_date($startDate,$endDate,$is_date=true)
{
   
    $data = DB::table('situation_prevention_yes_no_others');
    $data->select('seek_criminal_accountability_q19.*','users.name','users.user_type','situation_prevention_yes_no_others.created_at as date','countries.name as country');
    $data->leftJoin('seek_criminal_accountability_q19', 'situation_prevention_yes_no_others.case_id', '=','seek_criminal_accountability_q19.case_id');
    $data->leftJoin('countries', 'seek_criminal_accountability_q19.q19_country_id', '=', 'countries.id');
    $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
    $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
    if($is_date){
      $data->whereBetween('situation_prevention_yes_no_others.created_at',[$startDate,$endDate]);
    }
    $data->where('situation_prevention_yes_no_others.created_by','>','0' );
    $data->groupBy('seek_criminal_accountability_q19.q19_country_id','seek_criminal_accountability_q19.case_id');
    $data->orderBy('seek_criminal_accountability_q19.created_at','desc');
    $new_data = $data->get();
    return $new_data;
    }

    public function country()
    {
      return $this->belongsTo(Country::class, 'q19_country_id');
    }
}
