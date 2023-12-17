@extends('layouts.master')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Registro de actividad del TEST BOWIE</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Registro de cambios en Base de TEST BOWIE</li>
                        </ul>
                    </div>
                </div>
            </div>
			<!-- /Page Header -->

            <!-- /Search Filter -->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID EQUIPO</th>
                                    <th>LOTE DE EQUIPO</th>
                                    <th>LOTE DE INSUMO </th>
                                    <th>VALIDACION</th>
                                    <th>Observaciones</th>
                                    <th>Modificacion</th>
                                    <th>Operador</th>
                                    <th>Fecha Modificado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($activityLogtestbowie as $key => $item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $item->machine_id }}</td>
                                        <td>{{ $item->lote_machine }}</td>
                                        <td>{{ $item->lote_bd }}</td>
                                        <td>{{ $item->validation_bd }}</td>
                                        <td>{{ $item->observation }}</td>
                                        <td>{{ $item->modify_testbowie }}</td>
                                        <td>{{ $item->operator }}</td>
                                        <td>{{ $item->date_time_testbowie }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
@endsection

