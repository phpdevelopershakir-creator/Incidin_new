<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    use HasFactory;

     protected $table ='upzilas';

    public function distric(){
    	return $this->belongsTo(Distric::class,'distric_id','id');
    }
}
