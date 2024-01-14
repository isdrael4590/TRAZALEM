<?php

namespace App\Models;

use App\Http\Controllers\CodeRumedController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coderumedActivityLog extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "coderumed_id", "type", "name_coderumed", "area", "category", "detalls"];
}

