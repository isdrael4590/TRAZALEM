<?php

namespace App\Models;

use App\Http\Controllers\testbowieController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testbowieActivityLog extends Model
{
    use HasFactory;
    protected $fillable = ["user_id","testbowie_id","machine_name", "lote_machine","temp_machine", "lote_bd", "date_done_bd","validation_bd","temp_ambiente", "operator", "observation"];

    // Relaciona cada historial de rumed con un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

