<?php

namespace App\Http\Controllers;

use App\Models\coderumed;
use App\Models\temporal_rumed;
use Illuminate\Http\Request;
use App\Models\testbowie;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class zonanoesterilController extends Controller
{

    /** save new coderumed */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'machine_id' => 'required|string|max:255',
            'lote_machine' => 'required|string|max:255',
            'lote_bd' => 'required|string|max:255',
            'validation_bd' => 'required|string|max:255',
            'operator' => 'required|string|max:255',
            'observation' => 'nullable|string|max:255',
        ]);
        $dt = Carbon::now();
        $todayDate = $dt->toDateString();
        $validated["date_done_bd"] = $todayDate; // TODO: No sería mejor usar created_at?
        testbowie::create($validated);

        Toastr::success('Test Registrado exitosamente', 'Éxito');
        return redirect()->route('zneManagement');
    }
    /** get list data and search */
    public function show(testbowie $testbowie)
    {
        return view('zneManagement.uniquetestbowie', compact($testbowie));
    }

    public function edit(testbowie $zonanoesteril)
    {
        return view('zneManagement.testbowie-edit', compact('zonanoesteril'));
    }

    /** update coderumed record */
    // TODO: Ver si se cambia el nombre de zonanoesteril a testbowie
    public function update(Request $request, testbowie $zonanoesteril)
    {
        $validated = $request->validate([
            'machine_id' => 'required|string|max:255',
            'lote_machine' => 'required|string|max:255',
            'lote_bd' => 'required|string|max:255',
            'validation_bd' => 'required|string|max:255',
            'operator' => 'required|string|max:255',
            'observation' => 'nullable|string|max:255',
        ]);
        $zonanoesteril->update($validated);
        $dt = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();

        // TODO: Revisar si hay que mantener el log
        /*
        $activityLog = [
            'user_name' => $name,
            'email' => $email,
            'phone_number' => $phone,
            'status' => $status,
            'role_name' => $role_name,
            'modify_user' => 'Actualizado',
            'date_time' => $todayDate,
        ];
        */
        Toastr::success('Test actualizado', 'Satisfactorio');
        return redirect()->route('zneManagement');

    }

    // TODO: Ver si se cambia el nombre de zonanoesteril a testbowie
    public function destroy(testbowie $zonanoesteril)
    {
        $zonanoesteril->delete();
        Toastr::success($zonanoesteril->lote_bd . ' borrado exitosamente', 'Éxito');
        return redirect()->route('zneManagement');
    }
    /** testbowie activity log */
    public function activityLogtestbowie()
    {
        $activityLogtestbowie = DB::table('testbowie_activity_logs')->get();
        return view('zneManagement.testbowie_activity_log', compact('activityLogtestbowie'));
    }




    /**------------------------------------------------------ */


    public function allgeneratorlabel()
    {

        return view(('zneManagement.allgeneratorlabel'));
    }


    public function SelectCoderumed()
    {
        $coderumedselect = DB::table('coderumed')->get();
        $temporarycoderumed = DB::table('temporary_code_prev_qr')->get();
        return view('zneManagement.allgeneratorlabel', compact('coderumedselect', 'temporarycoderumed'));
    }

    public function TemporarySelecRumed(Request $request_temp_rumed)
    {
        $request_temp_rumed->validate([
            'coderumed_id' => 'required|string|max:255',
            'name_coderumed' => 'required|string|max:255',
        ]);
        DB::beginTransaction();
        try {
            $temporal_rumed = new temporal_rumed;

            $temporal_rumed->coderumed_id = $request_temp_rumed->coderumed_id;
            $temporal_rumed->name_coderumed = $request_temp_rumed->name_coderumed;
            $temporal_rumed->save();
            DB::commit();
            Toastr::success('CODIGO INSERTADO', 'EXITOSO');
            return redirect()->route('zneManagement.allgeneratorlabel');
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('FALLO EL INGRESAR EL CODIGO:)', 'Error');
            return redirect()->back();
        }
    }


}
