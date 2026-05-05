<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwentyFive extends Model
{
    use HasFactory;
    protected $table ='services_available_victim_organization_q25';

    public static function awarness_activities_q25_query_data (){
        //  DB::connection()->enableQueryLog(); 
        $awarness_activities_q25_data = DB::table('services_available_victim_organization_q25')
        ->select(
                DB::raw('SUM(q25_current_coverage_vots_men) as q25_current_coverage_vots_men'),
                DB::raw('SUM(q25_current_coverage_vots_women) as q25_current_coverage_vots_women'),
                DB::raw('SUM(q25_current_coverage_vots_third_gender) as q25_current_coverage_vots_third_gender'),
                DB::raw('SUM(q25_current_coverage_vots_boy) as q25_current_coverage_vots_boy'),
                DB::raw('SUM(q25_current_coverage_vots_girl) as q25_current_coverage_vots_girl'),
                'protection_services_q25','q25_status_id',
        )
        ->where('protection_services_q25', '>=' ,1)
        
        ->groupBy('protection_services_q25','q25_status_id')
        
        ->get();
        // $queries = DB::getQueryLog();
        return $awarness_activities_q25_data ;
        }

   
}
