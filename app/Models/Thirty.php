<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thirty extends Model
{
    use HasFactory;
    protected $table ='foreign_victims_legally_entitled_q30';

    public static function awarness_activities_q30_query_data (){
        //  DB::connection()->enableQueryLog(); 
        $awarness_activities_q25_data = DB::table('foreign_victims_legally_entitled_q30')
        ->select(
                DB::raw('SUM(current_coverage_foreign_vots_men) as current_coverage_foreign_vots_men'),
                DB::raw('SUM(current_coverage_foreign_vots_women) as current_coverage_foreign_vots_women'),
                DB::raw('SUM(current_coverage_foreign_vots_third_gender) as current_coverage_foreign_vots_third_gender'),
                DB::raw('SUM(current_coverage_foreign_vots_boy) as current_coverage_foreign_vots_boy'),
                DB::raw('SUM(current_coverage_foreign_vots_girl) as current_coverage_foreign_vots_girl'),
                'protection_services_q30','status_coverage_q30',
        )
        ->where('protection_services_q30', '>=' ,1)
        
        ->groupBy('protection_services_q30','status_coverage_q30')
        
        ->get();
        // $queries = DB::getQueryLog();
        return $awarness_activities_q25_data ;
        }
}
