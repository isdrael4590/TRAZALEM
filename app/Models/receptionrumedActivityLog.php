<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receptionrumedActivityLog extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", 
    "receptionrumed_id", 
    "coderumed_id", 
    "name_coderumed", 
    "date_reception", 
    "operator", 
    "delivery_staff", 
    "type_dirt",
     "state_rumed","
     observation"];

    // Relaciona cada historial de rumed con un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
