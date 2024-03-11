<?php

namespace App\Http\Controllers;
use App\Models\generatorqr;
use App\Models\generatorqrActivityLog;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class generatorqrController extends Controller
{
 

    /** save new generatorqr */

    public function edit(generatorqr $generatorqr)
    {
        return view('zneManagement.generatorqr-edit', compact('generatorqr'));
    }
    public function update(Request $request, generatorqr $generatorqr)
    {
        $validated = $request->validate([
            'ref_qr' => 'required|string|max:255',
            'qr_info' => 'nullable|string|max:255',
            'coderumed_id'=> 'required|string|max:255',
            'name_coderumed' => 'required|string|max:255',
            'machine_id' => 'required|string|max:255',
            'lote_machine'=> 'required|string|max:255',
            'lote_biologic' => 'required|string|max:255',
            'temp_machine' => 'required|string|max:255',
            'type_program'=> 'required|string|max:255',
            'package_type' => 'nullable|string|max:255',
            'temp_ambiente'=> 'required|string|max:255',
            'datatime_expiration' => 'required|string|max:255',
            'operator' => 'nullable|string|max:255',
            'package_wrap' => 'required|string|max:255',
            'observation' => 'nullable|string|max:255',
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
            "package_type" => $generatorqr->package_type,
            "temp_ambiente" => $generatorqr->temp_ambiente,
            "datatime_expiration" => $generatorqr->datatime_expiration,
            "operator" => $generatorqr->operator,
            "package_wrap" => $generatorqr->package_wrap,
            "observation" => $generatorqr->observation,
            "type" => "create",
        ]);
        
        Toastr::success('Test actualizado', 'Satisfactorio');
        return redirect()->route('zneManagement/generatorqr');

    }
    public function destroy(generatorqr $generatorqr)
    {
        $generatorqr->delete();
        Toastr::success($generatorqr->ref_qr . ' borrado exitosamente', 'Éxito');
        return redirect()->route('zneManagement/generatorqr');
    }


    
}
