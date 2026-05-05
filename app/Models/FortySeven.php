<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FortySeven extends Model
{
  use HasFactory;

  protected $table = 'government_change_regulated_q47';

  public function distric()
  {
    return $this->belongsTo(Distric::class, 'q47_location_id');
  }
}
