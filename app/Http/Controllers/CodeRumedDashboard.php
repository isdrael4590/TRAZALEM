<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coderumed;

class CodeRumedDashboard extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $coderumeds = coderumed::all();
        return view('coderumedManagement.allcoderumedcontrol', compact('coderumeds'));
    }
}
