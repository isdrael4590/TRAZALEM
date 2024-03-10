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
                        <h3 class="page-title">INGRESO DE INSTRUMENTAL</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Recepcion</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('receptionrumed.store') }}" class="btn add-btn" data-toggle="modal"
                            data-target="#add_receptionrumed"><i class="fa fa-plus"></i> Registrar Nuevo Ingreso</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div>
                <form action='{{ route('ReceptionRumed') }}' method="GET">
                    <div class="row filter-row">
                        <div class="col-sm-4 col-md-2">
                            <div class="form-group form-focus">
                                <div class="cal-icon">
                                    <input id="created_at" name="created_at" class="form-control floating datetimepicker" type="text">
                                </div>

                                <label class="focus-label">Fecha de  Ingreso</label>

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="coderumed" name="coderumed">
                                <label class="focus-label">CODIGO RUMED</label>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="name_coderumed"
                                    name="name_coderumed">
                                <label class="focus-label">DESCRIPCION DE RUMED</label>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-3">
                            <button type="submit" class="btn btn-success btn-block btn_search"> Buscar </button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}

            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    @empty($receptionrumeds)
                        <p class="text-center mt-4"> Sin resultados aún </p>
                    @else
                        @include('ReceptionRumed.receptionrumed-table')
                    @endempty
                </div>
            </div>
        </div>
        <!-- Add User Modal -->
        <div id="add_receptionrumed" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Añadir nuevo Registro de Ingreso</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('receptionrumed.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-sm-6 ">

                                    <label>NOMBRE CODERUMED</label>
                                    <select class="select"  id="name_coderumed" name="name_coderumed">
                                        @foreach ($coderumeds as $coderumed)
                                            <option value="{{ $coderumed->name_coderumed }}">(
                                                {{ $coderumed->coderumed_id }})   ->     {{ $coderumed->name_coderumed }} </option>
                                        @endforeach

                                    </select>
                                </div>
                               
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <label class="d-block">NIVEL DE INFECCION</label>
                                    <div class="form-group form-focus select-focus">
                                        <select class="select floating" id="type_dirt" name="type_dirt">
                                            <option selected disabled>-- SELECCIONAR EL NIVEL DE INFECCION--</option>
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
                                            <option selected disabled>-- SELECCIONAR EL ESTADO DEL MATERIAL--</option>
                                            <option value="BUENO"> BUENO</option>
                                            <option value="REGULAR"> REGULAR</option>
                                            <option value="MALO"> MALO</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>PERSONA QUE ENTREGA</label>
                                    <input class="form-control" type="text" id="delivery_staff" name="delivery_staff"
                                        value="{{ old('delivery_staff') }}" placeholder="">
                                </div>
                                <div class="col-sm-6">
                                    <label>Observaciones</label>
                                    <input class="form-control" type="text" id="observation" name="observation"
                                        placeholder="Ingrese alguna observacion">
                                </div>
                                <div class="col-sm-6">
                                    <label>Operador</label>
                                    <input class="form-control" type="text" id="operator" name="operator"
                                        placeholder= "{{ Auth::user()->name }}" value="{{ Auth::user()->name }}">
                                </div>
                            </div>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add reception Modal -->

    </div>
@endsection
