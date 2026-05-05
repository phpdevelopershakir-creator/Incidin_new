<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirtyThree extends Model
{
    use HasFactory;

    protected $table ='participating_victims_provided_q33';

    public static function awarness_activities_q33_query_data (){
        //  DB::connection()->enableQueryLog(); 
        $awarness_activities_q33_data = DB::table('participating_victims_provided_q33')
        ->select(
            DB::raw('SUM(q33_trafficking_men) as q33_trafficking_men'),
            DB::raw('SUM(q33_trafficking_women) as q33_trafficking_women'),
            DB::raw('SUM(q33_trafficking_third_gender) as q33_trafficking_third_gender'),
            DB::raw('SUM(q33_trafficking_boy) as q33_trafficking_boy'),
            DB::raw('SUM(q33_trafficking_girl) as q33_trafficking_girl'),
            'q33_type'
        )
        ->where('q33_type', '>=', 1)
        ->groupBy('q33_type')
        ->get();
        // $queries = DB::getQueryLog();
        return $awarness_activities_q33_data ;
      }
}
