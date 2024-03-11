<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\generatorqr;
Use Carbon\Carbon;


class Reportref_qrController extends Controller
{
    public function show(string $ref_qr)
    {
        $generatorqr = generatorqr::where('ref_qr', $ref_qr)->first();
        return view('zneManagement.Generator_qr.uniquegeneratorqr', compact('generatorqr'));
 
    }
}
