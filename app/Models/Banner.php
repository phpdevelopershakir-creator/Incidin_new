<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

        public function getBanner()
{
    if (!empty($this->image) && file_exists('uploads/banner/'.$this->image))
     {
        return url('uploads/banner/'.$this->image);
    }
    else
    {
        return "";
    }
}

}
