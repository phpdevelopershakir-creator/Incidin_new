<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class FortyFour extends Model
{
    use HasFactory;
    protected $table = 'awareness_campaigns_research_projects_q44';

    public static function government_train_diplomats_q44_query_data()
    {
        //  DB::connection()->enableQueryLog(); 
        $government_train_diplomats_q44_data = DB::table('allegedly_complicit_officials_q44')
            ->select(
                DB::raw('SUM(number_official_accused_men) as number_official_accused_men'),
                DB::raw('SUM(number_official_accused_women) as number_official_accused_women'),
                DB::raw('SUM(number_official_accused_third_gender) as number_official_accused_third_gender'),
                'ministry_department'
            )
            ->where('ministry_department', '>=', 1)
            ->groupBy('ministry_department')
            ->get();
        // $queries = DB::getQueryLog();
        return $government_train_diplomats_q44_data;
    }
}
