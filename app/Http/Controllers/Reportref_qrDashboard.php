<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\generatorqr;
Use Carbon\Carbon;

class Reportref_qrDashboard extends Controller
{
  //
  public function __invoke(Request $request)
  {

    $machine_id = $request->input('machine_id'); // TODO: Verificar porque cambiar id_machine a  hace que no se renderice el dato
    $lote_machine = $request->input('lote_machine');
    $ref_qr = $request->input('ref_qr');
    $search_date = $request->input('search_date');
    $generatorqrs = generatorqr::when($machine_id, function ($query, $machine_id) {
      return $query->where('machine_id', $machine_id);
    })->when($lote_machine, function ($query, $lote_machine) {
      return $query->where('lote_machine', 'like', '%' . $lote_machine . '%');
    })->when($ref_qr, function ($query, $ref_qr) {
      return $query->where('ref_qr', 'like', '%' . $ref_qr . '%');
    })->when($search_date, function ($query, $search_date) {
      return $query->whereDate('created_at', Carbon::parse($search_date));
    })->orderByDesc('created_at')->paginate(20); // Adjust the number per page as needed
    return view('zneManagement.Reportref_qr.allReportref_qr', compact('generatorqrs')); // Adjust the number per page as needed

  }
}
