<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourty extends Model 
{
    use HasFactory;

    protected $table = 'conviction_status_q40';

    public static function awarness_activities_q40_query_data (){
        //  DB::connection()->enableQueryLog(); 
        $awarness_activities_q40_data = DB::table('conviction_status_q40')
        ->select(
            DB::raw('SUM(q40_new_report_sex_trafficking_cases_men) as q40_new_report_sex_trafficking_cases_men'),
            DB::raw('SUM(q40_new_report_sex_trafficking_cases_women) as q40_new_report_sex_trafficking_cases_women'),
            DB::raw('SUM(q40_new_report_sex_trafficking_cases_third_gender) as q40_new_report_sex_trafficking_cases_third_gender'),
            DB::raw('SUM(q40_new_report_sex_trafficking_cases_boy) as q40_new_report_sex_trafficking_cases_boy'),
            DB::raw('SUM(q40_new_report_sex_trafficking_cases_girl) as q40_new_report_sex_trafficking_cases_girl'),
            'q40_type_cases_investigated','q40_category_coverage'
        )
        ->where('q40_type_cases_investigated', '>=', 1)
        ->groupBy('q40_type_cases_investigated','q40_category_coverage')
        ->get();
        // $queries = DB::getQueryLog();
        return $awarness_activities_q40_data ;
      }
}
