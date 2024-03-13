<?php

namespace App\Http\Controllers;

use App\Models\coderumed;
use App\Models\receptionrumedActivityLog;

use Illuminate\Http\Request;
use App\Models\receptionrumed;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;


use Carbon\Carbon;

class receptionrumedController extends Controller
{

    public function show(string $name_coderumed)
    {

        $receptionrumed = receptionrumed::where('name_coderumed', $name_coderumed)->first();
        return view('ReceptionRumed.uniquereceptionrumed', compact('receptionrumed'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'coderumed_id' => 'required|string|max:255',
            'name_coderumed' => 'required|string|max:255',
            'operator' => 'required|string|max:255',
            'delivery_staff' => 'required|string|max:255',
            'type_dirt' => 'required|string|max:255',
            'state_rumed' => 'required|string|max:255',
            'observation' => 'nullable|string|max:255',
        ]);
        $dt = Carbon::now();
        $todayDate = $dt->toDateString();
        $validated["date_reception"] = $todayDate; // TODO: No sería mejor usar created_at?
        $validated['user_id'] = auth()->id();
        $receptionrumed = receptionrumed::create($validated);

        receptionrumedActivityLog::create([
            "user_id" => auth()->id(),
            "receptionrumed_id" => $receptionrumed->id,
            "coderumed_id" => $receptionrumed->coderumed_id,
            "name_coderumed" => $receptionrumed->name_coderumed,
            "date_reception" => $receptionrumed->date_reception,
            "operator" => $receptionrumed->operator,
            "delivery_staff" => $receptionrumed->delivery_staff,
            "type_dirt" => $receptionrumed->type_dirt,
            "state_rumed" => $receptionrumed->state_rumed,
            "observation" => $receptionrumed->observation,
            "type" => "create",
        ]);
        Toastr::success('Test Registrado exitosamente', 'Éxito');
        return redirect()->back();
    }


    public function edit(receptionrumed $receptionrumed)
    {
        $coderumeds = coderumed::all();
        return view('ReceptionRumed.receptionrumed-edit', compact('receptionrumed', 'coderumeds'));
    }

    /** update coderumed record */
    // TODO: Ver si se cambia el nombre de zonanoesteil a receptionrumed
    public function update(Request $request, receptionrumed $receptionrumed)
    {
        $validated = $request->validate([
            'coderumed_id' => 'required|string|max:255',
            'name_coderumed' => 'required|string|max:255',
            'operator' => 'required|string|max:255',
            'delivery_staff' => 'required|string|max:255',
            'type_dirt' => 'required|string|max:255',
            'state_rumed' => 'required|string|max:255',
            'observation' => 'nullable|string|max:255',
        ]);
        dd($validated);
        $receptionrumed->update($validated);

        receptionrumedActivityLog::create([
            "user_id" => auth()->id(),
            "receptionrumed_id" => $receptionrumed->id,
            "coderumed_id" => $receptionrumed->coderumed_id,
            "name_coderumed" => $receptionrumed->name_coderumed,
            "date_reception" => $receptionrumed->date_reception,
            "operator" => $receptionrumed->operator,
            "delivery_staff" => $receptionrumed->delivery_staff,
            "type_dirt" => $receptionrumed->type_dirt,
            "state_rumed" => $receptionrumed->state_rumed,
            "observation" => $receptionrumed->observation,
            "type" => "create",
        ]);

        Toastr::success('Ingreso actualizado actualizado', 'Satisfactorio');
        return redirect()->route('ReceptionRumed');
    }



    // TODO: Ver si se cambia el nombre de zonano esteril a receptionrumed
    public function destroy(receptionrumed $receptionrumed)
    {
        $receptionrumed->delete();
        Toastr::success($receptionrumed->name_coderumed . ' borrado exitosamente', 'Éxito');
        return redirect()->route('ReceptionRumed');
    }




    /**------------------------------------------------------ */
}
