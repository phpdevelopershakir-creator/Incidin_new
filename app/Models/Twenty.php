<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Twenty extends Model
{
    use HasFactory;

    protected $table ='trafficking_victims_services_20q';

    public static function awarness_activities_q20_query_data (){
      //  DB::connection()->enableQueryLog(); 
      $awarness_activities_q20_data = DB::table('deployed_abroad_peacekeeping_q20')
      ->select(
              DB::raw('SUM(q20_number_cases_men) as q20_number_cases_men'),
              DB::raw('SUM(q20_number_cases_women) as q20_number_cases_women'),
              DB::raw('SUM(q20_number_cases_third_gender) as q20_number_cases_third_gender'),
              'q20_country_id','q20_description'
      )
      ->where('q20_country_id', '>=' ,1)
    
      ->groupBy('q20_country_id','q20_description')
      
      ->get();
       //$queries = DB::getQueryLog();
      return $awarness_activities_q20_data ;
      }


    public static function get_question20_string_data_by_date($startDate,$endDate,$is_date=true)
{
   
    $data = DB::table('situation_prevention_yes_no_others');
    $data->select('deployed_abroad_peacekeeping_q20.*','users.name','users.user_type','situation_prevention_yes_no_others.created_at as date','countries.name as country');
    $data->leftJoin('deployed_abroad_peacekeeping_q20', 'situation_prevention_yes_no_others.case_id', '=','deployed_abroad_peacekeeping_q20.case_id');
    $data->leftJoin('countries', 'deployed_abroad_peacekeeping_q20.q20_country_id', '=', 'countries.id');
    $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
    $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
    if($is_date){
      $data->whereBetween('situation_prevention_yes_no_others.created_at',[$startDate,$endDate]);
    }
    $data->where('situation_prevention_yes_no_others.created_by','>','0' );
    $data->groupBy('deployed_abroad_peacekeeping_q20.q20_country_id','deployed_abroad_peacekeeping_q20.case_id');
    $data->orderBy('deployed_abroad_peacekeeping_q20.created_at','desc');
    $new_data = $data->get();
    return $new_data;
    }

    public function country()
    {
      return $this->belongsTo(Country::class, 'q20_country_id');
    }
}
