<?php

namespace App\Models;

use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiftyFive extends Model
{
  use HasFactory;

  protected $table = 'government_provide_trafficking_q55';


  

  public static function awarness_activities_q9_query_data()
  {
    //  DB::connection()->enableQueryLog(); 
    $awarness_activities_q55_data = DB::table('partnership_promotion_actions_q55')
      ->select(
        DB::raw('SUM(q55_individuals_covered_men) as q55_individuals_covered_men'),
        DB::raw('SUM(q55_individuals_covered_women) as q55_individuals_covered_women'),
        DB::raw('SUM(q55_individuals_covered_third_gender) as q55_individuals_covered_third_gender'),
        DB::raw('SUM(q55_individuals_covered_boy) as q55_individuals_covered_boy'),
        DB::raw('SUM(q55_individuals_covered_girl) as q55_individuals_covered_girl'),
        'q55_type_activities',
        'q55_district_id'
      )
      ->where('q55_type_activities', '>=', 1)
      ->groupBy('q55_type_activities', 'q55_district_id')
      ->get();
    // $queries = DB::getQueryLog();
    return $awarness_activities_q55_data;
  }

  public function distric()
  {
    return $this->belongsTo(Distric::class, 'q55_district_id');
  }
}
