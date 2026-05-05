<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NineAll extends Model
{
    use HasFactory;



    protected $table = 'awareness_activities_q9';

    // protected $fillable = [
    //     'case_id', 
    //     'type_activities', 
    //     'type_activities_men', 
    //     'type_activities_women', 
    //     'type_activities_third_gender', 
    //     'type_activities_boy', 
    //     'type_activities_girl', 
    //     'type_activities_total'
    // ];

    public function attachments()
    {
        return $this->hasMany(Q9Questions::class, 'q9_id', 'id');
    }
}
