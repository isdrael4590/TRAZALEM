<?php

namespace App\Models;

use App\Enums\generatorStatus;
use Attribute;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class generator extends Model
{

    protected $fillable = [
        'user_id',
        'reference',
        'machine_id',
        'machine_name',
        'lote_machine',
        'date',
        'datatime_expiration',
        'operator',
        'package_wrap',
        'status',
        'observation',
        'created_at',
        'updated_at',
        "uuid"
    ];
    protected $cats = [
        'date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'status' => generatorStatus::class
    ];

    public static function bool()
    {
        parent::boot();
        static::creating(function ($model) {
            $number = generator::max('id') + 1;
            $model->reference = make_reference_id('Ciclo', $number);
        });
    }

    public function generatorDetails(): HasMany
    {
        return $this->hasMany(generatorDetails::class);
    }

    public function coderumed(): BelongsTo
    {
        return $this->belongsTo(coderumed::class);
    }
    public function scopeSearch($query, $value): void
    {
        $query->where('reference', 'like', "%{$value}%")
        ->orWhere('machine_name', 'like', "%{$value}%")
        ->orWhere('lote_machine', 'like', "%{$value}%")
        ->orWhere('status', 'like', "%{$value}%");

    }

    public function user():BelongsTo{
        return $this-> belongsTo(User::class);
    }
}
