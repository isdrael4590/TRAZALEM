<?php

namespace App\Http\Controllers;

use App\Models\machine;
use Illuminate\Http\Request;
Use Carbon\Carbon;

class MachineDashboard extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
    
        $machine_name = $request->input('machine_name'); // TODO: Verificar porque cambiar id_machine a  hace que no se renderice el dato
        $machine_model = $request->input('machine_model');
        $serial = $request->input('serial');
        $search_date = $request->input('search_date');
        $machines = machine::when($machine_name, function($query, $machine_name){
            return $query->where('machine_name', $machine_name);
        })->when($machine_model, function($query, $machine_model){
            return $query->where('machine_model', 'like', '%' . $machine_model . '%');
        })->when($serial, function($query, $serial){
            return $query->where('serial', 'like', '%' . $serial . '%');
        })->when($search_date, function($query, $search_date){
            return $query->whereDate('created_at', Carbon::parse($search_date));
        })->orderByDesc('created_at')->paginate(20); // Adjust the number per page as needed
        return view('settingsMachine.allmachine', compact('machines'));

    }
}
