<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coderumed extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    protected $fillable = [
        'user_id',
        'code_coderumed',
        'name_coderumed',
        'join_date_coderumed',
        'category',
        'area',
        'detalls',
        'created_at',
        'updated_at',
        "uuid"
    ];



    // Permite leer datos que pertenecen solo al coderumed_id que estan en la tabla coderumedActivityLog
    public function history()
    {
        return $this->hasMany(coderumedActivityLog::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}
