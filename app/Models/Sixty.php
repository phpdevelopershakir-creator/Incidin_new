<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sixty extends Model
{
    use HasFactory;
    protected $table ='foreign_governments_trafficking_q60';

   public function traffickingCountry()
    {
        return $this->belongsTo(Country::class, 'trafficking_country', 'id');
    }

}
