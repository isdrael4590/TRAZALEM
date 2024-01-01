<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\coderumed;
use Carbon\Carbon;
use Session;

class coderumedController extends Controller
{

    public function index()
    {

        $coderumed = DB::table('coderumeds')->get();

        return view('coderumedManagement.allcoderumedcontrol', compact('coderumed'));
        return view('zneManagement.allgeneratorlabel', compact('coderumed'));

    }



    /** save new coderumed */
    public function addNewCoderumed(Request $request)
    {
        $request->validate([
            'coderumed_id' => 'required|string|max:255',
            'name_coderumed' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'detalls' => 'required|string|max:255',

        ]);
        DB::beginTransaction();
        try {
            $dt = Carbon::now();
            $todayDate = $dt->toDayDateTimeString();
            $coderumed = new coderumed(
                [
                    "coderumed_id" => $request->coderumed_id,
                    "name_coderumed" => $request->name_coderumed,
                    "join_date_coderumed" => $todayDate,
                    "detalls" => $request->detalls,
                    "category" => $request->category,
                    "area" => $request->area,
                ]
            );
            $coderumed->save();

            DB::commit();
            Toastr::success('Paquete creado exitosamente :)', 'Success');
            return redirect()->route('coderumedManagement');
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('FALLO crear nuevo paquete:)', 'Error');
            return redirect()->back();
        }
    }
    /** get list data and search */
    public function getcoderumedData(Request $request)
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

        $coderumed = DB::table('coderumeds');
        $totalRecords = $coderumed->count();

        $coderumed_id = $request->coderumed_id;
        $name_coderumed = $request->name_coderumed;
        $area = $request->area;


        /** search for descripcion */
        if (!empty($coderumed_id)) {
            $coderumed->when($coderumed_id, function ($query) use ($coderumed_id) {
                $query->where('name', 'LIKE', '%' . $coderumed_id . '%');
            });
        }

        /** search for codigo */
        if (!empty($name_coderumed)) {
            $coderumed->when($name_coderumed, function ($query) use ($name_coderumed) {
                $query->where('name_coderumed', $name_coderumed);
            });
        }

        /** search for area */
        if (!empty($area)) {
            $coderumed->when($area, function ($query) use ($area) {
                $query->where('area', $area);
            });
        }

        $totalRecordsWithFilter = $coderumed->where(function ($query) use ($searchValue) {
            $query->where('name_coderumed', 'like', '%' . $searchValue . '%');
            $query->orWhere('coderumed_id', 'like', '%' . $searchValue . '%');
            $query->orWhere('area', 'like', '%' . $searchValue . '%');
            $query->orWhere('category', 'like', '%' . $searchValue . '%');
            $query->orWhere('detalls', 'like', '%' . $searchValue . '%');
            $query->orWhere('join_date_coderumed', 'like', '%' . $searchValue . '%');

        })->count();

        if ($columnName == 'coderumed_id') {
            $columnName = 'coderumed_id';
        }
        $records = $coderumed->orderBy($columnName, $columnSortOrder)->where(function ($query) use ($searchValue) {
            $query->where('name_coderumed', 'like', '%' . $searchValue . '%');
            $query->orWhere('coderumed_id', 'like', '%' . $searchValue . '%');
            $query->orWhere('area', 'like', '%' . $searchValue . '%');
            $query->orWhere('category', 'like', '%' . $searchValue . '%');
            $query->orWhere('detalls', 'like', '%' . $searchValue . '%');
            $query->orWhere('join_date_coderumed', 'like', '%' . $searchValue . '%');
        })
            ->skip($start)
            ->take($rowPerPage)
            ->get();
        $data_arr = [];

        foreach ($records as $key => $record) {
            $record->name_coderumed = '<h2 class=""><a href="' . url('allcoderumedcontrol/' . $record->name_coderumed) . '" class="name_coderumed">' . $record->name_coderumed . '</a></h2>';


            $data_arr[] = [
                "no" => '<span class="id" data-id = ' . $record->id . '>' . $start + ($key + 1) . '</span>',
                "coderumed_id" => '<span class="coderumed_id">' . $record->coderumed_id . '</span>',
                "name_coderumed" => $record->name_coderumed,
                "category" => '<span class="category">' . $record->category . '</span>',
                "area" => '<span class="area">' . $record->area . '</span>',
                "join_date_coderumed" => $record->join_date_coderumed,
                "detalls" => '<span class="detalls">' . $record->detalls . '</span>',

                "action" =>
                    '
                <td>
                    <div class="dropdown dropdown-action">
                        <a class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item coderumedUpdate" data-toggle="modal" data-id="' . $record->id . '" data-target="#edit_coderumed">
                                <i class="fa fa-pencil m-r-5"></i> Editar
                            </a>
                            <a class="dropdown-item coderumedDelete" data-toggle="modal" data-id="' . $record->id . '" data-target="#delete_coderumed">
                                <i class="fa fa-trash-o m-r-5"></i> BORRAR
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
    public function updateCoderumed(Request $request)
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



    /** delete record */
    public function deleteCoderumed(Request $request)
    {
        DB::beginTransaction();
        try {

            $dt = Carbon::now();
            $todayDate = $dt->toDayDateTimeString();

            $activityLog_coderumed = [
                'coderumed_id' => Session::get('coderumed_id'),
                'name_coderumed' => Session::get('name_coderumed'),
                'detalls' => Session::get('detalls'),
                'category' => Session::get('category'),
                'area' => Session::get('area'),
                'modify_coderumed' => 'Eliminado',
                'date_time_corumed' => $todayDate,
            ];

            DB::table('coderumed_activity_logs')->insert($activityLog_coderumed);

            /** remove all information coderumed */
            coderumed::destroy($request->id);


            DB::commit();
            Toastr::success('coderumed deleted successfully :)', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('coderumed deleted fail :)', 'Error');
            return redirect()->back();
        }
    }



}
