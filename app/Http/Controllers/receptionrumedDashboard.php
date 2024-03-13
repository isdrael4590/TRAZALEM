<?php

namespace App\Http\Controllers;

use App\Models\receptionrumed;
use App\Models\coderumed;
use Illuminate\Http\Request;
use Carbon\Carbon;

class receptionrumedDashboard extends Controller
{
    //
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //

        $receptionrumed_id = $request->input('receptionrumed_id'); // TODO: Verificar porque cambiar id_machine a  hace que no se renderice el dato
        $name_coderumed = $request->input('name_coderumed');
        $date_reception = $request->input('date_reception');
        $operator = $request->input('operator');
        $receptionrumeds = receptionrumed::when($receptionrumed_id, function ($query, $receptionrumed_id) {
            return $query->where('receptionrumed_id', $receptionrumed_id);
        })->when($name_coderumed, function ($query, $name_coderumed) {
            return $query->where('name_coderumed', 'like', '%' . $name_coderumed . '%');
        })->when($date_reception, function ($query, $date_reception) {
            return $query->where('date_reception', 'like', '%' . $date_reception . '%');
        })->when($operator, function ($query, $operator) {
            return $query->whereDate('created_at', Carbon::parse($operator));
        })->orderByDesc('created_at')->paginate(20); // Adjust the number per page as needed
        
        $coderumeds = coderumed::all();
        
        return view('ReceptionRumed.allreceptionrumed', compact('receptionrumeds', 'coderumeds'));
        return view('ReceptionRumed.receptionrumed-edit', compact( 'coderumeds'));
    }
}
