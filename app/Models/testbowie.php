<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testbowie extends Model
{
    use HasFactory;
    protected $fillable = [
        'machine_id',
        'lote_machine',
        'lote_bd',
        'validation_bd',
        'operator',
        'date_done_bd',
        'observation',
    ];
}
