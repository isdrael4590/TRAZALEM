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
                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('machine.store') }}" class="btn add-btn" data-toggle="modal"
                            data-target="#add_machine"><i class="fa fa-plus"></i> Añadir Equipo</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div>
                <form action='{{ route('settingsMachine/machine') }}' method="GET">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="machine_id" name="machine_id">
                                <label class="focus-label">Nombre del Equipo</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="machine_model" name="machine_model">
                                <label class="focus-label">Modelo del Equipo</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <button type="submit" class="btn btn-success btn-block btn_search"> BUSCAR </button>
                        </div>
                    </div>
                </form>
            </div>

            {{-- message --}}
            {!! Toastr::message() !!}

            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    @empty($machines)
                        <p class="text-center mt-4"> Sin resultados aún </p>
                    @else
                        @include('settingsMachine.machine-table')
                    @endempty

                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add User Modal -->
        <div id="add_machine" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Añadir nuevo Equipo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('machine.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                          
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="machine_id">Descripción del Equipo</label>
                                        <input class="form-control" type="text" id="" name="machine_id"
                                            value="{{ old('machine_id') }}" placeholder="Ingrese la descripcion">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Modelo del Equipo</label>
                                    <input class="form-control" type="text" id="" name="machine_model"
                                        value="{{ old('machine_model') }}" placeholder="Ingrese el MOdelo del Equipo">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Serie del Equipo</label>
                                    <input class="form-control" type="text" id="" name="serial"
                                        value="{{ old('serial') }}"
                                        placeholder="Ingrese el serial a donde pertenece el Equipo">
                                </div>
                                <div class="col-sm-6">
                                    <label>Capacidad (lt)</label>
                                    <input class="form-control" type="text" id="" name="capacity"
                                        value="{{ old('capacity') }}" placeholder="Ingrese la capacidad">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Marca</label>
                                    <input class="form-control" type="text" id="" name="manufacture_name"
                                        value="{{ old('manufacture_name') }}" placeholder="Ingrese la Marca">
                                </div>
                                <div class="col-sm-6">
                                    <label>Procedencia</label>
                                    <input class="form-control" type="text" id="" name="manufacture_country"
                                        value="{{ old('manufacture_country') }}" placeholder="Ingrese la Procedencia">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Proveedor</label>
                                    <input class="form-control" type="text" id="" name="supplier"
                                        value="{{ old('supplier') }}"
                                        placeholder="Ingrese el proveedor a donde pertenece el Equipo">
                                </div>
                                <div class="col-sm-6">
                                    <label>Ingeniero de Servicio </label>
                                    <input class="form-control" type="text" id="" name="field_engineer"
                                        value="{{ old('field_engineer') }}" placeholder="Ingrese el  tecnico">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Email Tecnico</label>
                                    <input class="form-control" type="text" id="" name="email"
                                        value="{{ old('email') }}" placeholder="Ingrese el email ">
                                </div>
                                <div class="col-sm-6">
                                    <label>Telefono del Tècnico</label>
                                    <input class="form-control" type="text" id="" name="mobile_number"
                                        value="{{ old('mobile_number') }}" placeholder="Ingrese el #  del tecnico">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>PAGINA WEB</label>
                                    <input class="form-control" type="text" id="" name="website_url"
                                        value="{{ old('website_url') }}" placeholder="Ingrese el website_url ">
                                </div>
                                <div class="col-sm-6">
                                    <label>Foto del Equipo</label>
                                    <input class="form-control" type="file" id="image" name="image">
                                    <input type="hidden" name="image" id="image" value="">
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
                                    <button type="submit" class="btn btn-primary submit-btn">Enviar</button>
                                </div>
                                <!-- /Add User Modal -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Wrapper -->


@endsection
