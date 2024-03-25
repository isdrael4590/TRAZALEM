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
                        <h3 class="page-title">REPORTE DE ETIQUETAS GENERADAS</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Etiquetas QR </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div>
                <form action='{{ route('zneManagement/Reportref_qr') }}' method="GET">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="machine_name" name="machine_name">
                                <label class="focus-label">Equipo</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="lote_machine" name="lote_machine">
                                <label class="focus-label">Lote de Equipo</label>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="ref_qr" name="ref_qr">
                                <label class="focus-label">Referencia Qr</label>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <div class="form-group form-focus">
                                <div class="cal-icon">
                                    <input id="created_at" name="created_at" class="form-control floating datetimepicker" type="text">
                                </div>

                                <label class="focus-label">Fecha</label>

                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <button type="submit" class="btn btn-success btn-block btn_search"> Buscar </button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}

            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    @empty($generatorqrs)
                        <p class="text-center mt-4"> Sin resultados aún </p>
                    @else
                        @include('zneManagement.Reportref_qr.Reportref_qr-table')
                    @endempty
                </div>
            </div>
        </div>

    </div>
@endsection
