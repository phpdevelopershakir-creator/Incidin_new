<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirtyTwo extends Model
{
    use HasFactory;

    protected $table ='participated_investigation_prosecution_q32';

    public static function awarness_activities_q32_query_data (){
        //  DB::connection()->enableQueryLog(); 
        $awarness_activities_q32_data = DB::table('participated_investigation_prosecution_q32')
        ->select(
            DB::raw('SUM(q32_internal_trafficking_men) as q32_internal_trafficking_men'),
            DB::raw('SUM(q32_trafficking_women) as q32_trafficking_women'),
            DB::raw('SUM(q32_trafficking_third_gender) as q32_trafficking_third_gender'),
            DB::raw('SUM(q32_trafficking_boy) as q32_trafficking_boy'),
            DB::raw('SUM(q32_trafficking_girl) as q32_trafficking_girl'),
            'q32_type'
        )
        ->where('q32_type', '>=', 1)
        ->groupBy('q32_type')
        ->get();
        // $queries = DB::getQueryLog();
        return $awarness_activities_q32_data ;
      }
}
