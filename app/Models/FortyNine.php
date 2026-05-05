<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FortyNine extends Model
{
    use HasFactory;

    protected $table = 'government_agreements_transparent_q49';

    public static function government_train_diplomats_q49_query_data()
    {
        //  DB::connection()->enableQueryLog(); 
        $government_train_diplomats_q49_data = DB::table('organization_train_judiciary_q49')
            ->select(
                DB::raw('SUM(q49_coverage_men) as q49_coverage_men'),
                DB::raw('SUM(q49_coverage_women) as q49_coverage_women'),
                DB::raw('SUM(q49_coverage_third_gender) as q49_coverage_third_gender'),
                'q49_category_trainee',
                'q49_training_contents',
                'q49_location_id'
            )
            ->where('q49_category_trainee', '>=', 1)
            ->groupBy('q49_category_trainee', 'q49_training_contents', 'q49_location_id')
            ->get();
        // $queries = DB::getQueryLog();
        return $government_train_diplomats_q49_data;
    }
}
