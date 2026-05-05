<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class ThirtySix extends Model
{
    use HasFactory;
    protected $table ='organ_trafficking_q36';

    public static function awarness_activities_q36_query_data (){
        //  DB::connection()->enableQueryLog(); 
        $awarness_activities_q36_data = DB::table('organ_trafficking_q36')
        ->select(
            DB::raw('SUM(q36_new_report_sex_trafficking_cases_men) as q36_new_report_sex_trafficking_cases_men'),
            DB::raw('SUM(q36_new_report_sex_trafficking_cases_women) as q36_new_report_sex_trafficking_cases_women'),
            DB::raw('SUM(q36_new_report_sex_trafficking_cases_third_gender) as q36_new_report_sex_trafficking_cases_third_gender'),
            DB::raw('SUM(q36_new_report_sex_trafficking_cases_boy) as q36_new_report_sex_trafficking_cases_boy'),
            DB::raw('SUM(q36_new_report_sex_trafficking_cases_girl) as q36_new_report_sex_trafficking_cases_girl'),
            'q36_type_cases_investigated','q36_category_coverage'
        )
        ->where('q36_type_cases_investigated', '>=', 1)
        ->groupBy('q36_type_cases_investigated','q36_category_coverage')
        ->get();
        // $queries = DB::getQueryLog();
        return $awarness_activities_q36_data ;
      }
}
