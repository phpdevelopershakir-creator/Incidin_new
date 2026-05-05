<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirtyEight extends Model
{
    use HasFactory;
    protected $table ='law_enforcement_activities_q38';

    public function country()
    {
      return $this->belongsTo(Country::class, 'q38_country_id');
    }
}
