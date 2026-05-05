<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwentySix extends Model
{
    use HasFactory;
    protected $table ='the_quality_care_q26';

    public function distric()
    {
      return $this->belongsTo(Distric::class, 'q26_location_id');
    }
}
