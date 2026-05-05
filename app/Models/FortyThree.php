<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FortyThree extends Model
{
    use HasFactory;

    protected $table = 'regional_enforcement_coordination_q43';

    public function country()
    {
      return $this->belongsTo(Country::class, 'q43_country_id');
    }
}
