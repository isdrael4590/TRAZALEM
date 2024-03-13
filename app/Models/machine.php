<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class machine extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'machine_id',
        'machine_model',
        'serial',
        'capacity',
        'manufacture_name',
        'manufacture_country',
        'supplier',
        'field_engineer',
        'email',
        'mobile_number',
        'website_url',
        'image',
    ];
    public function getImageUrl()
    {
        if ($this->image) {
            return url('storage/'.$this->image);
        }
      
    }
}
