<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Eighteen extends Model
{
    use HasFactory;

    protected $table ='trafficking_among_risk_population_18q';

    public static function government_train_diplomats_q18_query_data (){
        //  DB::connection()->enableQueryLog(); 
        $government_train_diplomats_q18_data = DB::table('government_train_diplomats_engage_q18')
        ->select(
            DB::raw('SUM(coverage_training_men) as coverage_training_men'),
            DB::raw('SUM(coverage_training_women) as coverage_training_women'),
            DB::raw('SUM(coverage_training_third_gender) as coverage_training_third_gender'),
            'category_trainee_q18'
        )
        ->where('category_trainee_q18', '>=', 1)
        ->groupBy('category_trainee_q18')
        ->get();
        // $queries = DB::getQueryLog();
        return $government_train_diplomats_q18_data ;
    }
}
