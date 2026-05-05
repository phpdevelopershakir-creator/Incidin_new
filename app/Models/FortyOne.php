<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FortyOne extends Model
{
    use HasFactory;
    protected $table = 'court_proceedings_district_q41';

    public function distric()
    {
      return $this->belongsTo(Distric::class, 'q41_district_id');
    }
}
