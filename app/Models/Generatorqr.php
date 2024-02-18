<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generatorqr extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'ref_qr',
        'qr_info',
        'coderumed_id',
        'name_coderumed',
        'machine_id',
        'lote_machine',
        'lote_biologic',
        'temp_machine',
        'type_program',
        'package_type',
        'datatime_cycle',
        'validation_biologic',
        'temp_ambiente',
        'datatime_expiration',
        'operator',
        'observation',
    ];
}
