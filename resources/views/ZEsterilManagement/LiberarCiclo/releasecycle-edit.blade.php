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
                            <li class="breadcrumb-item active">Editar QR.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('qrgenerado.update', $qrgenerado->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="labelqr-item">
                            <div class="labelqr-action">
                                <!--¡labelqr -->
                                <div class="labelqr-row">
                                    <div class="col-md-6">
                                        <label class="d-block">EQUIPO SELECIONADO</label>
                                        <span> {{ $qrgenerado->machine_id }} </span>

                                    </div>
                                    <div class="col-sm-6">
                                        <label>Lote del Equipo a esterilizar</label>
                                        <span> {{ $qrgenerado->lote_machine }} </span>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="d-block">Temperatura Ambiente</label>
                                       <span>{{ $qrgenerado->temp_ambiente }} </span> 
                                    </div>
                                    <div class="col-md-6">
                                        <label class="d-block">Temperatura a Esterilizar</label>
                                        <span> {{ $qrgenerado->temp_machine }} </span>
                                    </div>


                                </div>
                                <!-- /EQUIPO  -->


                                <div class="labelqr-row">
                                    <div class="col-md-6">
                                        <label class="d-block">Tipo de carga a Esterilizar</label>
                                        <span> {{ $qrgenerado->type_program }} </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Lote del biologico a esterilizar</label>
                                        <span> {{ $qrgenerado->lote_biologico }} </span>

                                    </div>
                                    <div class="col-sm-6">
                                        <label class="d-block">TIEMPO DE VENCIMIENTO</label>
                                        <span> {{ $qrgenerado->datatime_expiration }} </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="d-block">CODIGO CODERUMED</label>
                                        <span> {{ $qrgenerado->coderumed_id }} </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="d-block">DESCRIPTION CODERUMED</label>
                                        <span> {{ $qrgenerado->name_coderumed }} </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="d-block">TPO DE ENVOLTURA</label>
                                        <span> {{ $qrgenerado->package_wrap }} </span>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-focus">
                                            <label class="d-block">VALIDAR BIOLOGICO</label>
                                            <div class="form-group form-focus select-focus">
                                                <select class="select floating" id="validation_biologic" name="validation_biologic">
                                                    <option selected disabled>-- ValidAr Biologico--</option>
                                                    <option value="NEGATIVO"> NEGATIVO V1</option>
                                                    <option value="POITIVO"> POITIVO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="d-block">OBSERVACIONES</label>
                                        <span> {{ $qrgenerado->observation }} </span>
                                    </div>

                                </div>
                            </div>

                        </div>


                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">ACTUALIZAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
