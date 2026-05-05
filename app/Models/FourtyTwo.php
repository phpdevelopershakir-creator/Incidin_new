<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourtyTwo extends Model
{
    use HasFactory;

    protected $table = 'internal_trafficking_division_q42';

    public static function government_train_diplomats_q42_query_data (){
        //  DB::connection()->enableQueryLog(); 
        $government_train_diplomats_q42_data = DB::table('internal_trafficking_division_q42')
        ->select(
            DB::raw('SUM(q42_sexual_men) as q42_sexual_men'),
            DB::raw('SUM(q42_sexual_women) as q42_sexual_women'),
            DB::raw('SUM(q42_sexual_third_gender) as q42_sexual_third_gender'),
            'q42_type','q42_sexual_exploitation_division_id'
        )
        ->where('q42_type', '>=', 1)
        ->groupBy('q42_type','q42_sexual_exploitation_division_id')
        ->get();
        // $queries = DB::getQueryLog();
        return $government_train_diplomats_q42_data ;
      }
}
