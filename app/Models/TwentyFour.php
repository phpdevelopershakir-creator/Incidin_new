<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class TwentyFour extends Model
{
    use HasFactory;
    protected $table ='specialized_trafficking_victims_q24';
    
    protected $casts = [
        'specialized_trafficking_victims_location_q24' => 'array',
    ];



    
    public static function government_train_diplomats_q24_query_data (){
        //  DB::connection()->enableQueryLog(); 
        $government_train_diplomats_q24_data = DB::table('victim_protected_services_q24')
        ->select(
            DB::raw('SUM(men_q24) as men_q24'),
            DB::raw('SUM(women_q24) as women_q24'),
            DB::raw('SUM(boy_q24) as boy_q24'),
            DB::raw('SUM(girl_q24) as girl_q24'),
            DB::raw('SUM(third_gender_q24) as third_gender_q24'),
            'q24_title_origin_guidelines','q24_description_change_status'
        )
        ->where('q24_title_origin_guidelines', '>=', 1)
        ->groupBy('q24_title_origin_guidelines','q24_description_change_status')
        ->get();
        // $queries = DB::getQueryLog();
        return $government_train_diplomats_q24_data ;
    }

}
