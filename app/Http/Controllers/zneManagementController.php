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
        $machine_id = $request->input('machine_id');
        $lote_machine = $request->input('lote_machine');
        $lote_bd = $request->input('lote_bd');
        $search_date = $request->input('search_date');
        $testbowies = testbowie::when($machine_id, function($query, $machine_id){
            return $query->where('machine_id', $machine_id);
        })->when($lote_machine, function($query, $lote_machine){
            return $query->where('lote_machine', 'like', '%' . $lote_machine . '%');
        })->when($lote_bd, function($query, $lote_bd){
            return $query->where('lote_bd', 'like', '%' . $lote_bd . '%');
        })->orderByDesc('created_at')
        ->paginate(20); // Adjust the number per page as needed
        // TODO: Crear filtro para fecha
        return view('zneManagement.alltestbowie', compact('testbowies'));
    }
}
