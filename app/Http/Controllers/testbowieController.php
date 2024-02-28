<?php

namespace App\Http\Controllers;
use App\Models\testbowieActivityLog;


use Illuminate\Http\Request;
use App\Models\testbowie;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Symfony\Contracts\Service\Attribute\Required;

class testbowieController extends Controller
{
    /** get list data and search */
    public function show(string $lote_machine)
    {
        $testbowie = testbowie::where('lote_machine', $lote_machine)->first();
        return view('zneManagement.uniquetestbowie', compact('testbowie'));
 
    }
    

    /** save new testbowie */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'machine_id' => 'required|string|max:255',
            'lote_machine' => 'required|string|max:255',
            'temp_machine'=> 'required|string|max:255',
            'lote_bd' => 'required|string|max:255',
            'validation_bd' => 'required|string|max:255',
            'temp_ambiente'=> 'required|string|max:255',
            'operator' => 'required|string|max:255',
            'observation' => 'nullable|string|max:255',
        ]);
        $dt = Carbon::now();
        $todayDate = $dt->toDateString();
        $validated["date_done_bd"] = $todayDate; // TODO: No sería mejor usar created_at?
        $validated['user_id'] = auth()->id();
        $testbowie=testbowie::create($validated);

        testbowieActivityLog::create([
            "user_id" => auth()->id(),
            "testbowie_id" => $testbowie->id,
            "machine_id" => $testbowie->machine_id,
            "lote_machine" => $testbowie->lote_machine,
            "temp_machine" => $testbowie->temp_machine,
            "lote_bd" => $testbowie->lote_bd,
            "date_done_bd" => $testbowie->date_done_bd,
            "validation_bd" => $testbowie->validation_bd,
            "temp_ambiente" => $testbowie->temp_ambiente,
            "operator" => $testbowie->operator,
            "observation" => $testbowie->observation,
            "type" => "create",
        ]);
        Toastr::success('Test Registrado exitosamente', 'Éxito');
        return redirect()->back();
    }
   

    public function edit(testbowie $testbowie)
    {
        return view('zneManagement.testbowie-edit', compact('testbowie'));
    }

    /** update coderumed record */
    // TODO: Ver si se cambia el nombre de zonanoesteil a testbowie
    public function update(Request $request, testbowie $testbowie)
    {
        $validated = $request->validate([
            'machine_id' => 'required|string|max:255',
            'lote_machine' => 'required|string|max:255',
            'temp_machine'=> 'required|string|max:255',
            'lote_bd' => 'required|string|max:255',
            'validation_bd' => 'required|string|max:255',
            'temp_ambiente'=> 'required|string|max:255',
            'operator' => 'required|string|max:255',
            'observation' => 'nullable|string|max:255',
        ]);
        $testbowie->update($validated);
        
        testbowieActivityLog::create([
            "user_id" => auth()->id(),
            "testbowie_id" => $testbowie->id,
            "machine_id" => $testbowie->machine_id,
            "lote_machine" => $testbowie->lote_machine,
            "temp_machine" => $testbowie->temp_machine,
            "lote_bd" => $testbowie->lote_bd,
            "date_done_bd" => $testbowie->date_done_bd,
            "validation_bd" => $testbowie->validation_bd,
            "temp_ambiente" => $testbowie->temp_ambiente,
            "operator" => $testbowie->operator,
            "observation" => $testbowie->observation,
            "type" => "create",
        ]);
        
        Toastr::success('Test actualizado', 'Satisfactorio');
        return redirect()->route('zneManagement');

    }

    /** testbowie activity log */
    public function activityLogtestbowie()
    {
        $testbowie_activity_log = DB::table('testbowie_activity_logs')->get();
        return view('zneManagement.testbowie_activity_log', compact('testbowie_activity_log'));
    }

        // TODO: Ver si se cambia el nombre de zonano esteril a testbowie
        public function destroy(testbowie $testbowie)
        {
            $testbowie->delete();
            Toastr::success($testbowie->lote_bd . ' borrado exitosamente', 'Éxito');
            return redirect()->route('zneManagement');
        }




    /**------------------------------------------------------ */


   


}