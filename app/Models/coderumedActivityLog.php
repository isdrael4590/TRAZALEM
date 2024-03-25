<?php

namespace App\Models;

use App\Http\Controllers\CodeRumedController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coderumedActivityLog extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "coderumed_id", "type","code_coderumed", "name_coderumed", "area", "category", "detalls"];

    // Relaciona cada historial de rumed con un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

