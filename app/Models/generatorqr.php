<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generatorqr extends Model
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
        'temp_ambiente',
        'datatime_expiration',
        'operator',
        'package_wrap',
        'observation',
    ];
    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model_qr) {
            $getref_qr = self::orderBy('ref_qr', 'desc')->first();

            if ($getref_qr) {
                $latestID = intval(substr($getref_qr->user_id, 5));
                $nextID = $latestID + 1;
            } else {
                $nextID = 1;
            }
            $model_qr->user_id = 'VM_' . sprintf("%04s", $nextID);
            while (self::where('user_id', $model_qr->user_id)->exists()) {
                $nextID++;
                $model_qr->user_id = 'VM_' . sprintf("%04s", $nextID);
            }
        });
    }
}
