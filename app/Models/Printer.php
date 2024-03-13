<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    use HasFactory;
    public function getImageUrlInstitucion()
    {
        if ($this->imageInstitucion) {
            return url('storage/'.$this->imageInstitucion);
        }
      
    }

}
