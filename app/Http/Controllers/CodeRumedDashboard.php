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
        // Busca todos los code rumeds
        $areas = coderumed::distinct()->pluck('area');
        $selectedArea = $request->input('area');
        $selectedName = $request->input('name_coderumed');
        // Construir the query de acuerdo a los valores recibidos
        $coderumeds = coderumed::when($selectedArea, function($query, $selectedArea){
            return $query->where('area', $selectedArea);
        })->when($selectedName, function($query, $selectedName){
            return $query->where('name_coderumed', 'like', '%' . $selectedName . '%');
        })->orderByDesc('created_at')
        ->paginate(20); // Adjust the number per page as needed

        return view('coderumedManagement.allcoderumedcontrol', compact('coderumeds', 'areas'));
    }
}
