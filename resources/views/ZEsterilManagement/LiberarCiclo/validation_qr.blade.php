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
                        <h3 class="page-title">LIBERACIÓN Y VALIDACIÓN DE CICLO</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Incubación y liberación de Biológico.</li>
                        </ul>
                    </div>
                </div>

            </div>

            {{-- message --}}
            {!! Toastr::message() !!}

            <!-- /Page Header -->
            {{-- aqui va el filtro --}}
            <div>
                <form action='{{ route('ZEsterilManagement/LiberarCiclo') }}' method="GET">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="machine_id" name="machine_id">
                                <label class="focus-label">Equipo</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="lote_machine" name="lote_machine">
                                <label class="focus-label">Lote de Equipo</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <button type="submit" class="btn btn-success btn-block btn_search"> Buscar </button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- aqui cierra el filtro --}}
            {{-- message --}}
            {!! Toastr::message() !!}

            <!-- /Page Header -->
            <div class="row">
                <form action="{{ route('realesecycle.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            @empty($generatorqrs)
                                <p class="text-center mt-4"> Sin resultados aún </p>
                            @else
                                @include('zneManagement.Generator_qr.generatorqr-table')
                            @endempty
                        </div>
                    </div>
                    <div class="row">
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="validation_biologic" checked>
                            <label class="onoffswitch-label" for="switch_hra">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>

                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn m-r-10">Generar e Imprimir</button>
                        <button type="submit" class="btn btn-primary submit-btn">Generar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ URL::to('assets/js/otherjs/mainrowtoqr.js') }}"></script>

@endsection
