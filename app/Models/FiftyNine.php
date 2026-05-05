<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiftyNine extends Model
{
    use HasFactory;
    protected $table ='conduct_awareness_activities_q59';

    
     protected $fillable = [
        'case_id', 
        'number_traning_59', 
        'men_q59', 
        'women_q59', 
        'third_gender_q59', 
        'boy_q59', 
        'girl_q59', 
        'total_q59'
    ];

}
