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
                        <h3 class="page-title">Registro de actividad del RUMED</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Registro de cambios en Base de Datos RUMED</li>
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
                                    <th>ID CODERUMED</th>
                                    <th>DESCRIPCION RUMED</th>
                                    <th>Area </th>
                                    <th>Categoria</th>
                                    <th>Detalles</th>
                                    <th>Modificacion</th>
                                    <th>Operador</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($activityLog_coderumed as $key => $item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $item->coderumed_id }}</td>
                                        <td>{{ $item->name_coderumed }}</td>
                                        <td>{{ $item->area }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->detalls }}</td>
                                        <td>{{ $item->modify_coderumed }}</td>
                                        <td>{{ $item->operator }}</td>
                                        <td>{{ $item->date_time_coderumed }}</td>
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

