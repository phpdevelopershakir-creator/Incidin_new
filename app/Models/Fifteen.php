<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Fifteen extends Model
{
    use HasFactory;

    protected $table ='formal_written_procedures_15q';



     protected $fillable = [
        'case_id', 
        'category_trainee', 
        'number_traning', 
        'development_partner', 
        'men_q15', 
        'women_q15', 
        'third_gender_q15', 
        'total_q15'
    ];



    public static function get_question15_string_data_by_date($startDate,$endDate,$is_date=true)
{
   
    $data = DB::table('situation_prevention_yes_no_others');
    $data->select('prohibit_prevent_trafficking_q15.*','users.name','users.user_type','situation_prevention_yes_no_others.created_at as date');
    $data->leftJoin('prohibit_prevent_trafficking_q15', 'situation_prevention_yes_no_others.case_id', '=','prohibit_prevent_trafficking_q15.case_id');
    $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
    $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
    if($is_date){
        $data->whereBetween('situation_prevention_yes_no_others.created_at',[$startDate,$endDate]);
    }
    $data->where('situation_prevention_yes_no_others.created_by','>','0' );
    $data->groupBy('prohibit_prevent_trafficking_q15.q15_status_id','prohibit_prevent_trafficking_q15.case_id');
    $data->orderBy('prohibit_prevent_trafficking_q15.created_at','desc');
    $new_data = $data->get();
    return $new_data;
    }
}
