<?php

namespace App\Http\Controllers;

use App\Models\testbowie;
use Illuminate\Http\Request;
Use Carbon\Carbon;

class GeneratorqrDashboard extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
    
      // Adjust the number per page as needed
        return view('zneManagement.generator_qr.allgeneratorqr');

    }
}
