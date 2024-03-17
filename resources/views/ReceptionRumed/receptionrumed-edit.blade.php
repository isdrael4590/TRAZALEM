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
                    <form action="{{ route('receptionrumed.update', $receptionrumed->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-sm-6 ">
                                <label>CÓDIGO CODERUMED</label>
                                <select class="select" id="coderumed_id" name="coderumed_id">
                                    @foreach ($coderumeds as $coderumed)
                                        <option value="{{ $coderumed->coderumed_id }}">(
                                            {{ $coderumed->coderumed_id }}) -> {{ $coderumed->name_coderumed }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-sm-6 ">
                                <label>NOMBRE CODERUMED</label>
                                <select class="select" id="name_coderumed" name="name_coderumed">
                                    @foreach ($coderumeds as $coderumed)
                                        <option value="{{ $coderumed->name_coderumed }}">(
                                            {{ $coderumed->coderumed_id }}) -> {{ $coderumed->name_coderumed }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <label class="d-block">NIVEL DE INFECCION</label>
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" id="type_dirt" name="type_dirt">
                                        <option selected disabled>{{ $receptionrumed->type_dirt }} </option>
                                        <option value="NOCRITICO"> NO CRITICO</option>
                                        <option value="SEMICRITICO"> SEMI-CRITICO</option>
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
