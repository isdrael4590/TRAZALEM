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
                        <h3 class="page-title">GENERADOR DE ETIQUETAS</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Generar QR por equipo.</li>
                        </ul>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Annual labelqr -->
                    <form action="{{ route('Generatorqr.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="card labelqr-box" id="labelqr_annual">
                            <div class="card-body">
                                <div class="h3 card-title with-switch">
                                    Configurar ETIQUETAS
                                </div>
                                <div class="labelqr-item">
                                    <div class="labelqr-action">
                                        <!--¡labelqr -->
                                        <div class="labelqr-row">
                                            <div class="col-md-6">
                                                <label class="d-block">EQUIPO A ESTERILIZAR</label>
                                                <div class="form-group form-focus select-focus">
                                                    <select class="select floating" id="machine_id" name="machine_id">
                                                        <option selected disabled>-- SELECCIONAR EL EQUIPO--</option>
                                                        <option value="MATACHANA V1"> MATACHANA V1</option>
                                                        <option value="CISA V2"> CISA V2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Lote del Equipo a esterilizar</label>
                                                <input class="form-control" type="text" id="lote_machine"
                                                    name="lote_machine" placeholDeleteder="Ingrese el LOTE del equipo">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="d-block">Temperatura Ambiente</label>
                                                <input class="form-control" type="text" id="temp_ambiente"
                                                    name="temp_ambiente"
                                                    placeholDeleteder="Ingrese el la temperatura ambiente">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="d-block">Temperatura a Esterilizar</label>
                                                <div class="form-group form-focus select-focus">
                                                    <select class="select floating" id="temp_machine" name="temp_machine">
                                                        <option selected disabled>-- SELECCIONAR TEMPERATURA DEL CICLO--
                                                        </option>
                                                        <option value="134ºC ESTANDAR"> 134ºC ESTANDAR </option>
                                                        <option value="121ºC ESTANDAR"> 121ºC ESTANDAR </option>
                                                    </select>

                                                </div>
                                            </div>


                                        </div>
                                        <!-- /EQUIPO  -->


                                        <div class="labelqr-row">
                                            <div class="col-md-6">
                                                <label class="d-block">Tipo de carga a Esterilizar</label>
                                                <div class="form-group form-focus select-focus">
                                                    <select class="select floating" id="type_program" name="type_program">
                                                        <option selected disabled>-- SELECCIONAR TIPO DE CARGA--</option>
                                                        <option value="134ºC ESTANDAR"> 134ºC ESTANDAR </option>
                                                        <option value="121ºC ESTANDAR"> 121ºC ESTANDAR </option>
                                                        <option value="CONTENEDORES"> CONTENEDORES</option>
                                                        <option value=" RAPID"> RAPID </option>
                                                        <option value=" ESPORAS"> ESPORAS </option>

                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Lote del biologico a esterilizar</label>
                                                <input class="form-control" type="text" id="e_lote_biologico"
                                                    name="lote_biologico" placeholDeleteder="Ingrese el LOTE del biologico">
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="d-block">TIEMPO DE VENCIMIENTO</label>
                                                <div class="form-group form-focus select-focus">
                                                    <select class="select floating" id="time_expiration"
                                                        name="time_expiration">
                                                        <option selected disabled>-- SELECCIONAR LOS MESES--</option>
                                                        <option value="3"> 3 meses </option>
                                                        <option value="6"> 6 meses </option>
                                                        <option value="12"> 12 meses </option>
                                                        <option value="18"> 18 meses </option>
                                                        <option value="24"> 24 meses </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <br><br>
                                {{-- message --}}
                                {!! Toastr::message() !!}
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Paquetes de instrumental seleccionado</h3>
                                        @empty($rumed_selecprevqr)
                                            <p class="text-center mt-4"> Sin ingresar Paquetes </p>
                                        @else
                                            @include('zneManagement.Generator_qr.rumedselected-table')
                                        @endempty
                                    </div>
                                    <div class="labelqr-action">
                                        <button class=" btn-secundary" type="button" data-toggle="modal"
                                            data-target="#prev_generatorqr"><i class="fa fa-plus"></i> INGRESAR
                                            INSTRUMENTAL</button>
                                            
                                    </div>
                                </div>
                                <br><br>
                                <div class="labelqr-header">
                                    <div class="col-md-12">
                                        <h3>TABLA DE REFERENCIAS CREADA</h3>
                                        @empty($generatorqrs)
                                            <p class="text-center mt-4"> Sin Generar qr y referencias aún </p>
                                        @else
                                            @include('zneManagement.Generatorqr.Generatorqr-table')
                                        @endempty
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                        <div class="submit-section">
                            <button type="submit" class=" btn-secundary submit-btn">Generar
                                referencia de Qr</button>
                        </div>
                    </form>
                    <!-- /Annual labelqr -->
                    <div class="labelqr-action">
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#add_generatorqr"><i
                                class="fa fa-plus"></i> GENERAR PREVIES QR</button>
                    </div>
                    <!-- PREVIUWA labelqr -->
                    <div id="prev_generatorqr" class="modal custom-modal fade" role="dialog">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Añadir nuevo Paquete</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('rumed_selecprevqr.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div>
                                                    <select id="coderumed_id" name="coderumed_id">
                                                        {{-- @foreach ($receptionrumeds as $receptionrumed)
                                                                <option value="{{ $receptionrumed->id }}">
                                                                    {{ $receptionrumed->receptionrumed_id }}</option>
                                                            @endforeach --}}
                                                        <option selected disabled>-- Seleccionar la PAQUETE--
                                                        </option>
                                                        <option value="V1"> v1
                                                        </option>
                                                        <option value="A1"> a1 </option>
                                                        <option value="c1"> c1 </option>
                                                        <option value="d4"> d4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Nombre del paquete RUMED</label>
                                                <input class="form-control" type="text" id=""
                                                    name="name_coderumed" value="{{ old('name_coderumed') }}"
                                                    placeholder="Ingrese el codigo RUMED">
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group form-focus select-focus">
                                                    <select class="select floating" id="package_wrap"
                                                        name="package_wrap">
                                                        <option selected disabled>-- Seleccionar la envoltura--
                                                        </option>
                                                        <option value="Contenedor Rigido"> Contenedor Rigido
                                                        </option>
                                                        <option value="Papel Mixto"> Papel Mixto </option>
                                                        <option value="Tela NO Tejida"> Tela NO Tejida </option>
                                                        <option value="Tela Tejida"> Tela Tejida </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <br>
                                        <!-- Motrar errores de validación si es que hay -->
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="submit-section">
                                            <button type="submit" class="btn btn-primary submit-btn">Añadir</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- --------------------------------------------------------------------------------->

                    <!-- --------------------------------------------------------------------------------->
                    <!-- /Sick labelqr -->
                    <div id="add_generatorqr" class="modal custom-modal fade" role="dialog">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">QR GENERADO ETIQUETA</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn">IMPRIMIR QR</button>
                                </div>
                            </div>


                        </div>

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
