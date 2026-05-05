<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourTwo extends Model
{
    use HasFactory;
    public function four()
    {
        return $this->belongsTo(Four::class, 'four_id');
    }
}
