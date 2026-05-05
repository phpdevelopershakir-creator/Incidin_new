<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FortySix extends Model
{
    use HasFactory;
    protected $table = 'government_unit_courts_responsible_q46';

    public function distric()
    {
      return $this->belongsTo(Distric::class, 'q46_location_id');
    }
}
