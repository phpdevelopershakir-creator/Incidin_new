<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirtyOne extends Model
{
    use HasFactory;

    protected $table ='foreign_victims_legally_entitled_q31';

     
    public static function awarness_activities_q31_query_data (){
        //  DB::connection()->enableQueryLog(); 
        $awarness_activities_q31_data = DB::table('country_nationals_q31')
        ->select(
            DB::raw('SUM(q31_traffick_men) as q31_traffick_men'),
            DB::raw('SUM(q31_traffick_women) as q31_traffick_women'),
            DB::raw('SUM(q31_traffick_third_gender) as q31_traffick_third_gender'),
            DB::raw('SUM(q31_traffick_boys) as q31_traffick_boys'),
            DB::raw('SUM(q31_traffick_girls) as q31_traffick_girls'),
            DB::raw('SUM(q31_traffick_type_of_hotlines) as q31_traffick_type_of_hotlines'), // New field
            'q31_type','q31_implementer_traffick'
        )
        ->where('q31_type', '>=', 1)
        ->groupBy('q31_type','q31_implementer_traffick')
        ->get();
        // $queries = DB::getQueryLog();

        return $awarness_activities_q31_data ;
      }
}
