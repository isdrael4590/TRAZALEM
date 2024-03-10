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
                    <form action="{{ route('receptionrumed.update', $receptionrumed->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-sm-6 ">
                                <label>CODIGO RUMED</label>
                                <input class="form-control" type="text" id="coderumed" name="coderumed"
                                    value="{{ $receptionrumed->coderumed }}"placeholDeleteder="Ingrese el CODIGO RUMED">
                            </div>
                            <div class="col-sm-6">
                                <label>NOMBRE CODERUMED</label>
                                <input class="form-control" type="text" id="name_coderumed" name="name_coderumed"
                                    value="{{ $receptionrumed->name_coderumed }} "placeholDeleteder="">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <label class="d-block">NIVEL DE INFECCION</label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" id="type_dirt" name="type_dirt">
                                        <option selected disabled>{{ $receptionrumed->type_dirt }} </option>
                                        <option value="NO CRITICO"> NO CRITICO</option>
                                        <option value="SEMI-CRITICO"> SEMI-CRITICO</option>
                                        <option value="CRITICO"> CRITICO</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label>ESTADO DEL MATERIAL</label>

                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" id="state_rumed" name="state_rumed">
                                        <option selected disabled>{{ $receptionrumed->state_rumed }}</option>
                                        <option value="BUENO"> BUENO</option>
                                        <option value="REGULAR"> REGULAR</option>
                                        <option value="MALO"> MALO</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-6">
                                <label>Observaciones</label>
                                <input class="form-control" type="text" id="observation" name="observation"
                                    value="{{ $receptionrumed->observation }} " placeholder="Ingrese alguna observacion">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>PERSONA QUE ENTREGA</label>
                                <input class="form-control" type="text" id="delivery_staff" name="delivery_staff"
                                    value="{{ $receptionrumed->delivery_staff }} ">
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
