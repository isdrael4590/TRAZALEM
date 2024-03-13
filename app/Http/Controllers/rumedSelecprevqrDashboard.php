<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\generatorqrActivityLog;
use App\Models\generatorqr;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class rumedSelecprevqrDashboard extends Controller
{
    //
    public function index()
    {
        return view('zneManagement.Generator_qr.creategeneratorqr');

    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            //'ref_qr' => 'required|string|max:255', TODO: Añadir de nuevo
            //'qr_info' => 'nullable|string|max:255', TODO: Añadir de nuevo
            'coderumed_id' => 'required|string|max:255',
            'name_coderumed' => 'required|string|max:255',
            'machine_id' => 'required|string|max:255',
            'lote_machine' => 'required|string|max:255',
            'lote_biologic' => 'required|string|max:255',
            'temp_machine' => 'required|string|max:255',
            'type_program' => 'required|string|max:255',
            //'package_type' => 'nullable|string|max:255',TODO: Añadir de nuevo
            'temp_ambiente' => 'required|string|max:255',
            'datatime_expiration' => 'required|string|max:255',
            'operator' => 'nullable|string|max:255',
            'package_wrap' => 'required|string|max:255',
            'observation' => 'nullable|string|max:255',
        ]);
        $dt = Carbon::now();

        $validated['user_id'] = auth()->id();
        $validated['ref_qr'] = "Añademe!"; // TODO: Añadir este valor
        $validated['qr_info'] = "Añademe!"; // TODO: Añadir este valor
        $validated['observation'] = "Añademe!"; // TODO: Añadir este valor



        $generatorqr = generatorqr::create($validated);
        generatorqrActivityLog::create([
            "user_id" => auth()->id(),
            "generatorqr_id" => $generatorqr->id,
            "ref_qr" => $generatorqr->ref_qr,
            "qr_info" => $generatorqr->qr_info,
            "coderumed_id" => $generatorqr->coderumed_id,
            "name_coderumed" => $generatorqr->name_coderumed,
            "machine_id" => $generatorqr->machine_id,
            "lote_machine" => $generatorqr->lote_machine,
            "lote_biologic" => $generatorqr->lote_biologic,
            "temp_machine" => $generatorqr->temp_machine,
            "type_program" => $generatorqr->type_program,
            "temp_ambiente" => $generatorqr->temp_ambiente,
            "datatime_expiration" => $generatorqr->datatime_expiration,
            "operator" => $generatorqr->operator,
            "package_wrap" => $generatorqr->package_wrap,
            "observation" => $generatorqr->observation,
            "type" => "create",
        ]);

        Toastr::success('REF Y QR GENERADO', 'Éxito');
        return redirect()->route('zneManagement/generatorqr');
    }
}
