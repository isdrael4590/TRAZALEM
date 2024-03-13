<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class institution extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'company_name',
        'short_name',
        'company_area',
        'address',
        'country',
        'city',
        'state_province',
        'postal_code',
        'contact_person',
        'email',
        'phone_number',
        'mobile_number',
        'imageInstitucion',

    ];
    public function getImageUrlInstitucion()
    {
        if ($this->imageInstitucion) {
            return url('storage/'.$this->imageInstitucion);
        }
      
    }
}
