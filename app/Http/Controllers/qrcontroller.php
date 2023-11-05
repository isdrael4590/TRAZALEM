<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\qrgenerator;

class qrcontroller extends Controller
{
    function generate()
    {
        return view('qrgenerator');
    }
}