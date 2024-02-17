<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testbowie extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'machine_id',
        'lote_machine',
        'temp_machine',
        'lote_bd',
        'date_done_bd',
        'validation_bd',
        'temp_ambiente',
        'operator',
        'observation',
    ];
    public function history()
    {
        return $this->hasMany(testbowieActivityLog::class);
    }
}
