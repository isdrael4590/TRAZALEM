<?php

namespace App\Http\Controllers;
use App\Models\coderumed;
use App\Models\Generatorqr;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GeneratorqrController extends Controller
{
    //
    /** save new testbowie */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ref_qr' => 'required|string|max:255',
            'qr_info' => 'required|string|max:255',
            'coderumed_id'=> 'required|string|max:255',
            'name_coderumed' => 'required|string|max:255',
            'machine_id' => 'required|string|max:255',
            'lote_machine'=> 'required|string|max:255',
            'lote_biologic' => 'required|string|max:255',
            'temp_machine' => 'required|string|max:255',
            'type_program'=> 'required|string|max:255',
            'package_type' => 'nullable|string|max:255',
            'datatime_cycle' => 'required|string|max:255',
            'validation_biologic' => 'required|string|max:255',
            'temp_ambiente'=> 'required|string|max:255',
            'datatime_expiration' => 'required|string|max:255',
            'observation' => 'nullable|string|max:255',
        ]);
        $dt = Carbon::now();
        $todayDate = $dt->toDateString();
        $validated["datatime_cycle"] = $todayDate; // TODO: No sería mejor usar created_at?
        $validated['user_id'] = auth()->id();
        $Generatorqr=Generatorqr::create($validated);

        
        Toastr::success('QR GENERADO', 'Éxito');
        return redirect()->back();
    }

/** public function qrcode(){

*/

    
}
