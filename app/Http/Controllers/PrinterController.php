<?php

namespace App\Http\Controllers;

use App\Models\institution;
use App\Models\testbowie;


use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PrinterController extends Controller
{
    //
    public function show(string $id)
    {
     
        return view('impresiones.ciclob_d', ['testbowie' => testbowie::findOrFail($id)
        
        
    ]);
 
    }
    
}
