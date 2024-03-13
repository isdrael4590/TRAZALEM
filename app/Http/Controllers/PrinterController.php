<?php

namespace App\Http\Controllers;

use App\Models\receptionrumed;
use App\Models\testbowie;
use App\Models\institution;


use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class PrinterController extends Controller
{
    //
    public function FormatprinterBD(string $id)
    {
        return view('impresiones.ciclob_d', ['testbowie' => testbowie::findOrFail($id)
    ]);
    }

    public function FormatprinterInput(Request $id)
    {
        $receptionrumed=receptionrumed::findOrFail($id );
        $institution=institution::all();
        dd( $receptionrumed);
    
        return view('impresiones.reporte_recepcion', compact('receptionrumed','institution'));
    }
}
