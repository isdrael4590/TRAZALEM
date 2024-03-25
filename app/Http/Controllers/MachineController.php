<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\machine;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Carbon\Carbon;

class MachineController extends Controller
{
    //


    /** save new equipo */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'machine_name' => 'required|string|max:255',
            'machine_model' => 'required|string|max:255',
            'serial' => 'required|string|max:255',
            'capacity' => 'required|string|max:255',
            'manufacture_name' => 'required|string|max:255',
            'supplier' => 'required|string|max:255',
            'field_engineer' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'mobile_number' => 'nullable|string|max:255',
            'website_url' => 'nullable|string|max:255',
            'image' => 'image',
        ]);
        $validated['user_id'] = auth()->id();
       
        if (request()->has('image')) {
            $imagePath = request()->file('image')->store('machine', 'public');
            $validated['image'] = $imagePath;
        }
        
        $machine=machine::create($validated);


        Toastr::success('Equipo actualizado', 'Satisfactorio');
        return redirect()->back();
    }


    public function edit(machine $machine)
    {
        return view('settingsMachine.machine-edit', compact('machine'));
    }

    /** update coderumed record */
    // TODO: Ver si se cambia el nombre de zonanoesteil a machine
    public function update(Request $request, machine $machine)
    {
        $validated = $request->validate([
            'machine_name' => 'required|string|max:255',
            'machine_model' => 'required|string|max:255',
            'serial' => 'required|string|max:255',
            'capacity' => 'required|string|max:255',
            'manufacture_name' => 'required|string|max:255',
            'supplier' => 'required|string|max:255',
            'field_engineer' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'mobile_number' => 'nullable|string|max:255',
            'website_url' => 'nullable|string|max:255',
            'image' => 'image',
        ]);
    

        if (request()->has('image')) {
            $imagePath = request()->file('image')->store('machine', 'public');
            $validated['image'] = $imagePath;
            Storage::disk('public')->delete($machine->image);
        }
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
