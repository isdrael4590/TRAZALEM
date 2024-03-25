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
                                        <span> {{ $qrgenerado->machine_name }} </span>

                                    </div>
                                    <div class="col-sm-6">
                                        <label>Lote del Equipo a esterilizar</label>
                                        <span> {{ $qrgenerado->lote_machine }} </span>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="d-block">Temperatura Ambiente</label>
                                        <input class="form-control" type="text" id="temp_ambiente"
                                            name="temp_ambiente" value="{{ $qrgenerado->temp_ambiente }} ">
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
                                    <div>
                                        <div  class="col-sm-6" >
                                            <select id="coderumed_id" name="coderumed_id">
                                                {{-- @foreach ($coderumed as $coderumed)
                                                        <option value="{{ $coderumed->id }}">
                                                            {{ $coderumed->coderumed_id }}</option>
                                                    @endforeach --}}
                                                <option selected disabled>-- Seleccionar la PAQUETE--
                                                </option>
                                                <option value="Contenedor Rigido"> v1
                                                </option>
                                                <option value="Papel Mixto"> a1 </option>
                                                <option value="Tela NO Tejida"> c1 </option>
                                                <option value="Tela Tejida"> d4</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Nombre del paquete RUMED</label>
                                            <span> {{ $qrgenerado->name_coderumed }} </span>
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
