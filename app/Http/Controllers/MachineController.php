<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\machine;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MachineController extends Controller
{
    //
    public function show(string $machine_model)
    {
        $machine = machine::where('machine_model', $machine_model)->first();
        return view('settingsMachine.uniquesmachines', compact('machine'));
 
    }
    
    /** save new equipo */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'machine_id' => 'required|string|max:255',
            'machine_model' => 'required|string|max:255',
            'serial' => 'required|string|max:255',
            'capacity' => 'required|string|max:255',
            'manufacture_name' => 'required|string|max:255',
            'manufacture_country' => 'required|string|max:255',
            'supplier' => 'required|string|max:255',
            'field_engineer' => 'required|string|max:255',
            'email' => 'nullable|string|max:255',
            'mobile_number' => 'nullable|string|max:255',
            'website_url' => 'nullable|string|max:255',
        ]);

        $validated['user_id'] = auth()->id();
        $machine = machine::create($validated);

        Toastr::success('Equipo Registrado exitosamente', 'Éxito');
        return redirect()->back();
    }


    public function edit(machine $machine)
    {
        return view('settingsMachine.machines-edit', compact('machine'));
    }

    /** update coderumed record */
    // TODO: Ver si se cambia el nombre de zonanoesteil a machine
    public function update(Request $request, machine $machine)
    {
        $validated = $request->validate([
            'machine_id' => 'required|string|max:255',
            'machine_model' => 'required|string|max:255',
            'serial' => 'required|string|max:255',
            'capacity' => 'required|string|max:255',
            'manufacture_name' => 'required|string|max:255',
            'supplier' => 'required|string|max:255',
            'field_engineer' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'mobile_number' => 'nullable|string|max:255',
            'website_url' => 'nullable|string|max:255',
        ]);
        $machine->update($validated);


        Toastr::success('Equipo actualizado', 'Satisfactorio');
        return redirect()->route('settingsMachine/machine');
    }
    public function destroy(machine $machine)
    {
        $machine->delete();
        Toastr::success($machine->lote_bd . ' borrado exitosamente', 'Éxito');
        return redirect()->route('settingsMachine/machine');
    }
}
