<?php

namespace App\Http\Controllers;

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
        return view('coderumedManagement.allcoderumedcontrol', compact('coderumed'));
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

        coderumed::create($validated);

        Toastr::success('Paquete creado exitosamente :)', 'Success');
        return redirect()->back();
    }

    /** Edita  coderumed record */
    public function edit(Request $request)
    {
        DB::beginTransaction();
        try {
            $coderumed_id = $request->coderumed_id;
            $name_coderumed = $request->name_coderumed;
            $detalls = $request->detalls;
            $category = $request->category;
            $area = $request->area;

            $dt = Carbon::now();
            $todayDate = $dt->toDayDateTimeString();

            $update = [

                'coderumed_id' => $coderumed_id,
                'name_coderumed' => $name_coderumed,
                'detalls' => $detalls,
                'category' => $category,
                'area' => $area,
            ];


            coderumed::where('coderumed_id', $request->coderumed_id)->update($update);
            DB::commit();
            Toastr::success('Paquete actualizado :)', 'Success');
            return redirect()->route('coderumedManagement');

        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('Fallo de actualizacion de paquete :)', 'Error');
            return redirect()->back();
        }
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
        Toastr::success($coderumed->name_coderumed .' borrado exitosamente!', 'Éxito');
        return redirect()->route("coderumedManagement");
    }
}
