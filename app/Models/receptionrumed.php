<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receptionrumed extends Model
{
    protected $guarded =['id'];

    use HasFactory;
    protected $fillable = [
        'user_id',
        'coderumed_id',
        'code_coderumed',
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
