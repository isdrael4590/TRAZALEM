<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coderumed extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'coderumed_id',
        'name_coderumed',
        'join_date_coderumed',
        'category',
        'area',
        'detalls',
    ];

    // Permite leer datos que pertenecen solo al coderumed_id que estan en la tabla coderumedActivityLog
    public function history()
    {
        return $this->hasMany(coderumedActivityLog::class);
    }
}
