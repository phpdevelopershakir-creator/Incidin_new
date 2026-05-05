<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirtyFour extends Model
{
    use HasFactory;

    protected $table ='avoid_retraumatization_victims_q34';

    public static function awarness_activities_q34_query_data (){
        //  DB::connection()->enableQueryLog(); 
        $awarness_activities_q34_data = DB::table('avoid_retraumatization_victims_q34')
        ->select(
            DB::raw('SUM(q34_coverage_men) as q34_coverage_men'),
            DB::raw('SUM(q34_coverage_women) as q34_coverage_women'),
            DB::raw('SUM(q34_coverage_third_gender) as q34_coverage_third_gender'),
            DB::raw('SUM(q34_coverage_boy) as q34_coverage_boy'),
            DB::raw('SUM(q34_coverage_girl) as q34_coverage_girl'),
            'location_id_q34','types_assistance_q34'
        )
        ->where('location_id_q34', '>=', 1)
        ->groupBy('location_id_q34','types_assistance_q34')
        ->get();
        // $queries = DB::getQueryLog();
        return $awarness_activities_q34_data ;
      }
}
