<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FortyEight extends Model
{
    use HasFactory;
    protected $table ='law_enforcement_border_security_q48';


    public function distric()
    {
      return $this->belongsTo(Distric::class, 'q48_location_id');
    }

}
