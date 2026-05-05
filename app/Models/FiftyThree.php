<?php

namespace App\Models;

use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiftyThree extends Model
{
    use HasFactory;

    protected $table = 'government_train_diplomat_q53';


    public static function awarness_activities_q53_query_data()
    {
        //  DB::connection()->enableQueryLog(); 
        $awarness_activities_q53_data = DB::table('vots_received_assistance_q53')
            ->select(
                DB::raw('SUM(q53_individual_coverage_men) as q53_individual_coverage_men'),
                DB::raw('SUM(q53_individual_coverage_women) as q53_individual_coverage_women'),
                DB::raw('SUM(q53_individual_coverage_third_gender) as q53_individual_coverage_third_gender'),
                DB::raw('SUM(q53_individual_coverage_boy) as q53_individual_coverage_boy'),
                DB::raw('SUM(q53_individual_coverage_girl) as q53_individual_coverage_girl'),
                'number_of_case'
            )
            ->where('number_of_case', '>=', 1)
            ->groupBy('number_of_case')
            ->get();
        // $queries = DB::getQueryLog();
        return $awarness_activities_q53_data;
    }
}
