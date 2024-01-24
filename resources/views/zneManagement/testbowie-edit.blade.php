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
                        <h3 class="page-title">RUMED</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Base de datos</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('zonanoesteril.update', $zonanoesteril->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" id="e_machine_id" name="machine_id">
                                        <option value="MATACHANA V1" @if($zonanoesteril->machine_id === 'MATACHANA V1') selected @endif> MATACHANA V1</option>
                                        <option value="CISA V2" @if($zonanoesteril->machine_id === 'CISA V2') selected @endif> CISA V2</option>
                                    </select>
                                </div>
                            </div>
                            <input class="form-control" type="hidden" id="e_id" name="id" value="">
                            <div class="col-sm-6 ">
                                <label>VALIDAR EL PROCESO</label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" id="e_validation_bd" name="validation_bd">
                                        <option value="Correcto" @if($zonanoesteril->validation_bd === 'Correcto') selected @endif> Correcto </option>
                                        <option value="ERROR" @if($zonanoesteril->validation_bd === 'ERROR') selected @endif>> ERROR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Lote a esterilizar</label>
                                <input class="form-control" type="text" id="e_lote_machine" name="lote_machine"
                                    value="{{ $zonanoesteril->lote_machine }}">
                            </div>
                            <div class="col-sm-6">
                                <label>Lote del insumo</label>
                                <input class="form-control" type="text" id="e_lote_bd" name="lote_bd"
                                    value="{{ $zonanoesteril->lote_bd }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Observaciones</label>
                                <input class="form-control" type="text" id="observation" name="observation"
                                    value="{{ $zonanoesteril->observation }}">
                            </div>
                            <div class="col-sm-6">
                                <label>Operador</label>
                                <input class="form-control" type="text" id="operator" name="operator"
                                    placeholder= "{{ Auth::user()->name }}" value="{{ Auth::user()->name }}">
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
