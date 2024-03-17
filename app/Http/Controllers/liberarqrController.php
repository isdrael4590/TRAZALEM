<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\generatorqrActivityLog;
use App\Models\generatorqr;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class liberarqrController extends Controller
{
    public function index()
    {
        return view('ZEsterilManagement.LiberarCiclo.validation_qr');
    }
    public function Update(Request $request, generatorqr $generatorqr)
    {
        $validated = $request->validate([
            //'ref_qr' => 'required|string|max:255', TODO: Añadir de nuevo
            //'qr_info' => 'nullable|string|max:255', TODO: Añadir de nuevo
            'validation_biologic' => 'required|string|max:255',

        ]);

        $generatorqr->update($validated);
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
            "validation_biologic" => $generatorqr->validation_biologic,
            "observation" => $generatorqr->observation,
            "type" => "create",
        ]);

        Toastr::success('PAQEUTES LIBERADOS', 'Éxito');
        return redirect()->route('ZEsterilManagement/LiberarCiclo');
    }
}
