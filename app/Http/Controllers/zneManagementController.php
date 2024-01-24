<?php

namespace App\Http\Controllers;

use App\Models\testbowie;
use Illuminate\Http\Request;

class zneManagementController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $testbowies = testbowie::all();

        return view('zneManagement.alltestbowie', compact('testbowies'));
    }
}
