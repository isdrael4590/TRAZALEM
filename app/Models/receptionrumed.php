<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receptionrumed extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'coderumed_id',
        'name_coderumed',
        'date_reception',
        'operator',
        'delivery_staff',
        'type_dirt',
        'state_rumed',
        'observation',
    ];
    public function history()
    {
        return $this->hasMany(receptionrumedActivityLog::class);
    }
}
