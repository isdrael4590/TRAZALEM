<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generatorqrActivityLog extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'generatorqr_id',
        'ref_qr',
        'qr_info',
        'coderumed_id',
        'name_coderumed',
        'machine_id',
        'lote_machine',
        'lote_biologic',
        'temp_machine',
        'type_program',
        'temp_ambiente',
        'datatime_expiration',
        'operator',
        'package_wrap',
        'observation',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
