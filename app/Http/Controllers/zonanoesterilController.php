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
    public function index()
    {

        $testbowie = DB::table('testbowies')->get();

        return view('zneManagement.alltestbowie', compact('testbowie'));
    }

    /** save new coderumed */
    public function addNewtestbowie(Request $request)
    {
        $validated = $request->validate([
            'machine_id' => 'required|string|max:255',
            'lote_machine' => 'required|string|max:255',
            'lote_bd' => 'required|string|max:255',
            'validation_bd' => 'required|string|max:255',
            'operator' => 'required|string|max:255',
            'observation' => 'nullable|string|max:255',
        ]);
        DB::beginTransaction();
        try {
            $dt = Carbon::now();
            $todayDate = $dt->toDateString();
            $validated["date_done_bd"] = $todayDate;
            $testbowie = new testbowie($validated);
            $testbowie->save();

            DB::commit();
            Toastr::success('TEST REGISTRADO exitosamente :)', 'Success');
            return redirect()->route('zneManagement');
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('FALLO registro de TEST:)', 'Error');
            return redirect()->back();
        }
    }
    /** get list data and search */
    public function gettesbowieData(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowPerPage = $request->get("length"); // total number of rows per page
        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        $testbowie = DB::table('testbowies');
        $totalRecords = $testbowie->count();

        $machine_id = $request->machine_id;
        $lote_machine = $request->lote_machine;
        $lote_bd = $request->lote_bd;
        $date_done_bd = $request->date_done_bd;


        /** search for equipo */
        if (!empty($machine_id)) {
            $testbowie->when($machine_id, function ($query) use ($machine_id) {
                $query->where('machine_id', 'LIKE', '%' . $machine_id . '%');
            });
        }

        /** search for lote */
        if (!empty($lote_machine)) {
            $testbowie->when($lote_machine, function ($query) use ($lote_machine) {
                $query->where('lote_machine', $lote_machine);
            });
        }

        /** search for lote insumo */
        if (!empty($lote_bd)) {
            $testbowie->when($lote_bd, function ($query) use ($lote_bd) {
                $query->where('lote_bd', $lote_bd);
            });
        }
        /** search for fecha */
        if (!empty($date_doneupdateCoderumed_bd)) {
            $testbowie->when($date_done_bd, function ($query) use ($date_done_bd) {
                $query->where('date_done_bd', $date_done_bd);
            });
        }

        $totalRecordsWithFilter = $testbowie->where(function ($query) use ($searchValue) {
            $query->where('machine_id', 'like', '%' . $searchValue . '%');
            $query->orWhere('lote_machine', 'like', '%' . $searchValue . '%');
            $query->orWhere('lote_bd', 'like', '%' . $searchValue . '%');
            $query->orWhere('operator', 'like', '%' . $searchValue . '%');
            $query->orWhere('validation_bd', 'like', '%' . $searchValue . '%');
            $query->orWhere('observation', 'like', '%' . $searchValue . '%');
            $query->orWhere('date_done_bd', 'like', '%' . $searchValue . '%');
        })->count();

        if ($columnName == 'machine_id') {
            $columnName = 'machine_id';
        }
        $records = $testbowie->orderBy($columnName, $columnSortOrder)->where(function ($query) use ($searchValue) {
            $query->where('machine_id', 'like', '%' . $searchValue . '%');
            $query->orWhere('lote_machine', 'like', '%' . $searchValue . '%');
            $query->orWhere('lote_bd', 'like', '%' . $searchValue . '%');
            $query->orWhere('operator', 'like', '%' . $searchValue . '%');
            $query->orWhere('validation_bd', 'like', '%' . $searchValue . '%');
            $query->orWhere('observation', 'like', '%' . $searchValue . '%');
            $query->orWhere('date_done_bd', 'like', '%' . $searchValue . '%');
        })
            ->skip($start)
            ->take($rowPerPage)
            ->get();

        $data_arr = [];
        foreach ($records as $key => $record) {
            $record->machine_id = '<h2 class="table-avatar"><a href="' . url('alltestbowie/' . $record->machine_id) . '" class="machine_id">' . $record->machine_id . '</a></h2>';

            if ($record->validation_bd == 'ERROR') {
                /** color role VALIDATION */
                $validation_bd = '<span class="badge bg-inverse-danger validation_bd">' . $record->validation_bd . '</span>';
            } elseif ($record->validation_bd == 'Correcto') {
                /** color role VALIDATION */
                $validation_bd = '<span class="badge bg-inverse-success validation_bd">' . $record->validation_bd . '</span>';
            }

            $data_arr[] = [
                "no" => '<span class="id" data-id = ' . $record->id . '>' . $start + ($key + 1) . '</span>',
                "machine_id" => '<span class="machine_id">' . $record->machine_id . '</span>',
                "lote_machine" => '<span class="lote_machine">' . $record->lote_machine . '</span>',

                "lote_bd" => '<span class="lote_bd">' . $record->lote_bd . '</span>',
                "validation_bd" => '<span class="validation_bd">' . $record->validation_bd . '</span>',
                "date_done_bd" => $record->date_done_bd,
                "operator" => '<span class="operator">' . $record->operator . '</span>',
                "observation" => '<span class="observation">' . $record->observation . '</span>',


                "action" =>
                '
                <td>
                    <div class="dropdown dropdown-action">
                        <a class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item testbowieUpdate" data-toggle="modal" data-id="' . $record->id . '" data-target="#edit_testbowie">
                                <i class="fa fa-pencil m-r-5"></i> Editar
                            </a>
                            <a class="dropdown-item testbowieDelete" data-toggle="modal" data-id="' . $record->id . '" data-target="#delete_testbowie">
                                <i class="fa fa-trash-o m-r-5"></i> BORRAR
                            </a>
                      
                        
                            <a class="dropdown-item testbowieprinter"  data-id="' . $record->id . '" data-target="#printer_testbowie">
                            <i class="fa-solid fa-print"></i> IMPRIMIR
                            </a>
                         </div>

                    </div>
                </td>
                ',
            ];
        }
        $response = [
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordsWithFilter,
            "aaData" => $data_arr
        ];
        return response()->json($response);
    }

    /** update coderumed record */
    public function updateTestbowie(Request $request)
    {
        DB::beginTransaction();
        try {
            $machine_id = $request->machine_id;
            $lote_machine = $request->lote_machine;
            $lote_bd = $request->lote_bd;
            $operator = $request->operator;
            $validation_bd = $request->validation_bd;
            $observation = $request->observation;

            $dt = Carbon::now();
            $todayDate = $dt->toDayDateTimeString();

            $update = [

                'machine_id' => $machine_id,
                'lote_machine' => $lote_machine,
                'lote_bd' => $lote_bd,
                'operator' => $operator,
                'validation_bd' => $validation_bd,
                'observation' => $observation,
            ];

            $activityLog = [
                'user_name' => $name,
                'email' => $email,
                'phone_number' => $phone,
                'status' => $status,
                'role_name' => $role_name,
                'modify_user' => 'Actualizado',
                'date_time' => $todayDate,
            ];
            DB::table('testbowie_activity_logs')->insert($activityLog);

            testbowie::where('machine_id', $request->machine_id)->update($update);
            DB::commit();
            Toastr::success('Test actualizado :)', 'Satisfactorio');
            return redirect()->route('
            ');
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('Fallo de actualizacion de TEST :)', 'Error');
            return redirect()->back();
        }
    }

    public function deleteTestbowie(Request $request)
    {
        DB::beginTransaction();
        try {

            $dt = Carbon::now();
            $todayDate = $dt->toDayDateTimeString();

            $activityLogtestbowie = [
                'machine_id' => Session::get('machine_id'),
                'lote_machine' => Session::get('lote_machine'),
                'lote_bd' => Session::get('lote_bd'),
                'validation_bd' => Session::get('validation_bd'),
                'observation' => Session::get('observation'),
                'modify_testbowie' => 'Eliminado',
                'operator' => Session::get('operator'),
                'date_time_testbowie' => $todayDate,
            ];

            DB::table('testbowie_activity_logs')->insert($activityLogtestbowie);



            DB::commit();
            Toastr::success('Testbowie Actualizado:)', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('FALLO ELIMINAR TEST BOWIE  :)', 'Error');
            return redirect()->back();
        }
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
        $coderumedselect = DB::table('coderumeds')->get();
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
