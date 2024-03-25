<?php

namespace App\Models;

use Attribute;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class generatorDetails extends Model
{

    protected $fillable = [
        'generator_id',
        'ref_qr',
        'code_coderumed',
        'name_coderumed',
        'coderumed_id',
        'lote_machine',
        'lote_biologic',
        'datatime_expiration',
        'operator',
        'package_wrap',
    ];
    protected $with =['coderumed'];

    protected $cats = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

   

    public function generator():BelongsTo
    {
        return $this -> belongsTo(generator::class,'generator_id','id');
    }

    public function coderumed():BelongsTo {
        return $this -> belongsTo(coderumed::class,'coderumed_id','id');


    }
}
