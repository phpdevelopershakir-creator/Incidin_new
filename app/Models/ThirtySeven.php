<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class ThirtySeven extends Model
{
    use HasFactory;
    protected $table ='labour_trafficking_q37';
    public static function awarness_activities_q37_query_data (){
        //  DB::connection()->enableQueryLog(); 
        $awarness_activities_q37_data = DB::table('labour_trafficking_q37')
        ->select(
            DB::raw('SUM(q37_new_report_sex_trafficking_cases_men) as q37_new_report_sex_trafficking_cases_men'),
            DB::raw('SUM(q37_new_report_sex_trafficking_cases_women) as q37_new_report_sex_trafficking_cases_women'),
            DB::raw('SUM(q37_new_report_sex_trafficking_cases_third_gender) as q37_new_report_sex_trafficking_cases_third_gender'),
            DB::raw('SUM(q37_new_report_sex_trafficking_cases_boy) as q37_new_report_sex_trafficking_cases_boy'),
            DB::raw('SUM(q37_new_report_sex_trafficking_cases_girl) as q37_new_report_sex_trafficking_cases_girl'),
            'q37_type_cases_investigated','q37_category_coverage'
        )
        ->where('q37_type_cases_investigated', '>=', 1)
        ->groupBy('q37_type_cases_investigated','q37_category_coverage')
        ->get();
        // $queries = DB::getQueryLog();
        return $awarness_activities_q37_data ;
      }
}
