<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Four extends Model
{
    use HasFactory;

    protected $table ='crime_obstructing_justice_q4';
    protected $fillable = [
        'case_id',
        'justice_title', 
        'justice_men',
        'justice_women',
        'justice_total'
    ];

     public static function get_question4_string_data_by_date($startDate,$endDate,$is_date=true)
{

    $data = DB::table('situation_prevention_yes_no_others');
    $data->select('national_authority_convene_q4.*','users.name','users.user_type','situation_prevention_yes_no_others.created_at as date');
    $data->leftJoin('national_authority_convene_q4', 'situation_prevention_yes_no_others.case_id', '=','national_authority_convene_q4.case_id');
    $data->leftJoin('users', 'users.id', '=', 'situation_prevention_yes_no_others.created_by');
    $data->leftJoin('roles', 'users.name', '=', 'users.user_type');
    if($is_date){
        $data->whereBetween('situation_prevention_yes_no_others.created_at',[$startDate,$endDate]);
    }
    $data->where('situation_prevention_yes_no_others.created_by','>','0' );
    $data->groupBy('national_authority_convene_q4.type_issue_q4','national_authority_convene_q4.case_id');
    $data->orderBy('national_authority_convene_q4.created_at','desc');
    $new_data =$data->get();
    return $new_data;
    }

    public function caseModel()
    {
        return $this->belongsTo(CaseModel::class, 'case_id');
    }

    public function fourTwos()
    {
        return $this->hasMany(FourTwo::class, 'four_id');
    }

    // Relationship to FourThree added
    public function fourThrees()
    {
        return $this->hasMany(FourThree::class, 'four_id');
    }
}
