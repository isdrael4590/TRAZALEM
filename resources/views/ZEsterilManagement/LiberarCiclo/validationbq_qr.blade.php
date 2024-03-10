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
                        <h3 class="page-title">LIBERCIÒN Y VALIDACIÒN DE CICLO</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Incubaciòn y liberacion de Biologico.</li>
                        </ul>
                    </div>
                </div>

            </div>

            {{-- message --}}
            {!! Toastr::message() !!}

            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Annual labelqr -->
                    <form action="{{ route('validationbd_qr.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="h3 card-title with-switch">
                            SELECIONAR EQUIPO Y CICLO
                        </div>

                        <!--¡labelqr -->
                        <div class="row">
                            <div class="col-md-3">
                                <label class="d-block">EQUIPO A ESTERILIZAR</label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" id="machine_id" name="machine_id">
                                        <option selected disabled>-- SELECCIONAR EL EQUIPO--</option>
                                        <option value="MATACHANA V1"> MATACHANA V1</option>
                                        <option value="CISA V2"> CISA V2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Lote del Equipo a esterilizar</label>
                                <input class="form-control" type="text" id="lote_machine" name="lote_machine"
                                    placeholDeleteder="Ingrese el LOTE del equipo">
                            </div>

                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn m-r-10">Generar e Imprimir</button>
                            <button type="submit" class="btn btn-primary submit-btn">Generar</button>
                        </div>
                    </form>
      
                </div>

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
    </div>

    <script src="{{ URL::to('assets/js/otherjs/mainrowtoqr.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#Selectcoderumed').select2();
        });
    </script>

@endsection
