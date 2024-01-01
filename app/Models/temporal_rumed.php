<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temporal_rumed extends Model
{
    use HasFactory;
    protected $fillable = [
        'coderumed_id',
        'name_coderumed',
        'join_date_coderumed',
    ];
}
