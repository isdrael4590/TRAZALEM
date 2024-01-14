<?php

namespace App\Http\Controllers;

use App\Models\coderumedActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Brian2694\Toastr\Facades\Toastr;
use App\Models\coderumed;
use Carbon\Carbon;
use Session;

class CodeRumedController extends Controller
{


    /**
     * Aqui se muestra el modelo del controlador
     */
    public function show(coderumed $coderumed)
    {
        return view('coderumedManagement.uniquecoderumedcontrol', compact('coderumed'));
    }


    /** Añade un nuevo coderumed */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'coderumed_id' => 'required|string|max:255',
            'name_coderumed' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'detalls' => 'nullable|string|max:255',
        ]);
        $dt = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        $validated["join_date_coderumed"] = $todayDate;

        $coderumed = coderumed::create($validated);

        coderumedActivityLog::create([
            "user_id" => auth()->id(),
            "coderumed_id" => $coderumed->id,
            "name_coderumed" => $coderumed->name_coderumed,
            "area" => $coderumed->area,
            "category" => $coderumed->category,
            "detalls" => $coderumed->detalls,
            "type" => "create",
        ]);

        Toastr::success('Paquete creado exitosamente :)', 'Success');
        return redirect()->back();
    }

    /** Muestra la entrada de coderumed a editar */
    public function edit(coderumed $coderumed)
    {
        // TODO: Añadir autorización
        return view("coderumedManagement.coderumed-edit", compact('coderumed'));
    }

    /** Actualiza la entrada de codeRumed a editar*/

    public function update(Request $request, coderumed $coderumed)
    {
        $validated = $request->validate([
            'coderumed_id' => 'required|string|max:255',
            'name_coderumed' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'detalls' => 'nullable|string|max:255',
        ]);
        $coderumed->update($validated);
        // Crear un archivo del Log
        coderumedActivityLog::create([
            "user_id" => auth()->id(),
            "coderumed_id" => $coderumed->id,
            "name_coderumed" => $coderumed->name_coderumed,
            "area" => $coderumed->area,
            "category" => $coderumed->category,
            "detalls" => $coderumed->detalls,
            "type" => "modify",
        ]);
        return redirect()->route('coderumedManagement');
    }
    /** use activity log */
    public function activityLogcoderumed()
    {
        $activityLog_coderumed = DB::table('coderumed_activity_logs')->get();
        return view('coderumedManagement.coderumed_activity_log', compact('activityLog_coderumed'));
    }



    /** Borra un coderumed */
    public function destroy(coderumed $coderumed)
    {
        $coderumed->delete();
        Toastr::success($coderumed->name_coderumed . ' borrado exitosamente!', 'Éxito');
        return redirect()->route("coderumedManagement");
    }
}
