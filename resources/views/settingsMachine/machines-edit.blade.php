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
                        <h3 class="page-title">EQUIPOS</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Base de datos</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('machine.update', $machine->id) }}" method="POST">
                        @csrf
                        @method('put')
             
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="machine_id">Descripción del Equipo</label>
                                    <input class="form-control" type="text" id="" name="machine_id"
                                    value="{{ $machine->machine_id }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Modelo del Equipo</label>
                                <input class="form-control" type="text" id="" name="machine_model"
                                value="{{ $machine->machine_model }}" placeholder="Ingrese el MOdelo del Equipo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Serie del Equipo</label>
                                <input class="form-control" type="text" id="" name="serial"
                                value="{{ $machine->serial }}" placeholder="Ingrese el serial a donde pertenece el Equipo">
                            </div>
                            <div class="col-sm-6">
                                <label>Capacidad (lt)</label>
                                <input class="form-control" type="text" id="" name="capacity"
                                value="{{ $machine->capacity }}" placeholder="Ingrese una categoria">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Marca</label>
                                <input class="form-control" type="text" id="" name="manufacture_name"
                                value="{{ $machine->manufacture_name }}" placeholder="Ingrese la Marca">
                            </div>
                            <div class="col-sm-6">
                                <label>Procedencia</label>
                                <input class="form-control" type="text" id="" name="manufacture_country"
                                value="{{ $machine->manufacture_country }}" placeholder="Ingrese la Procedencia">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Proveedor</label>
                                <input class="form-control" type="text" id="" name="supplier"
                                value="{{ $machine->supplier }}"
                                    placeholder="Ingrese el proveedor a donde pertenece el Equipo">
                            </div>
                            <div class="col-sm-6">
                                <label>Ingeniero de Servicio (lt)</label>
                                <input class="form-control" type="text" id="" name="field_engineer"
                                value="{{ $machine->field_engineer }}" placeholder="Ingrese el  tecnico">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Email Tecnico</label>
                                <input class="form-control" type="text" id="" name="email"
                                value="{{ $machine->email }}" placeholder="Ingrese el email ">
                            </div>
                            <div class="col-sm-6">
                                <label>Telefono del Tècnico</label>
                                <input class="form-control" type="text" id="" name="mobile_number"
                                value="{{ $machine->mobile_number }}" placeholder="Ingrese el #  del tecnico">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>PAGINA WEB</label>
                                <input class="form-control" type="text" id="" name="website_url"
                                value="{{ $machine->website_url }}" placeholder="Ingrese el website_url ">
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
