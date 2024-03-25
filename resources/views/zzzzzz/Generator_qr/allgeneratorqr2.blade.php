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
                        <h3 class="page-title"> ETIQUETADO</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Generar QR por equipo.</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a  href="{{ route('generatorqr.index') }}" class="btn add-btn" ><i
                                class="fa fa-plus"></i> Registrar ETIQUETAS</a>
                    </div>

                </div>

            </div>
            {{-- aqui va el filtro --}}
            <div>
                <form action='{{ route('zneManagement/generatorqr') }}' method="GET">
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
                                    <input id="created_at" name="created_at" class="form-control floating datetimepicker"
                                        type="text">
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

            {{-- aqui cierra el filtro --}}
            {{-- message --}}
            {!! Toastr::message() !!}

            <!-- /Page Header -->
            <div class="row">
                <div class="row">
                    <div class="col-md-12">
                        @empty($generatorqrs)
                            <p class="text-center mt-4"> Sin resultados aún </p>
                        @else
                            @include('zneManagement.Generator_qr.generatorqr-table')
                        @endempty
                    </div>
                </div>
            </div>



        </div>

        <!-- /Add package modal -->



    </div>
    <script src="{{ URL::to('assets/js/otherjs/mainrowtoqr.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#Selectcoderumed').select2();
        });
    </script>
@endsection
