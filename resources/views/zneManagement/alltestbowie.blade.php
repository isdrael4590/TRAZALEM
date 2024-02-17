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
                        <h3 class="page-title">TEST DE BOWIE & DICK</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Test B&D </li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('testbowie.store') }}" class="btn add-btn" data-toggle="modal" data-target="#add_testbowie"><i
                                class="fa fa-plus"></i> Registrar Nuevo Test</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div>
                <form action='{{ route('zneManagement') }}' method="GET">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="machine_id" name="machine_id">
                                <label class="focus-label">Equipo</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="lote_machine" name="lote_machine">
                                <label class="focus-label">Lote de Equipo</label>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="lote_bd" name="lote_bd">
                                <label class="focus-label">Lote de Insumo</label>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <div class="form-group">

                                
                                <label class="focus-label">Fecha de Test</label>
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
                    @empty($testbowies)
                    <p class="text-center mt-4"> Sin resultados aún </p>
                @else
                    @include('zneManagement.testbowie-table')
                @endempty
                </div>
            </div>
        </div>
        <!-- Add User Modal -->
        <div id="add_testbowie" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Añadir nuevo TEST</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('testbowie.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-focus select-focus">
                                        <select class="select floating" id="machine_id" name="machine_id">
                                            <option selected disabled>-- SELECCIONAR EL EQUIPO--</option>

                                            <option value="MATACHANA V1"> MATACHANA V1</option>
                                            <option value="CISA V2"> CISA V2</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <label>VALIDAR EL PROCESO</label>
                                    <div class="form-group form-focus select-focus">
                                        <select class="select floating" id="validation_bd" name="validation_bd">
                                            <option selected disabled>-- Validar--</option>
                                            <option value="Correcto"> Correcto </option>
                                            <option value="ERROR"> ERROR</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Lote a esterilizar</label>
                                    <input class="form-control" type="text" id="e_lote_machine" name="lote_machine"
                                        value="{{ old('lote_machine') }}" placeholDeleteder="Ingrese el LOTE del equipo">
                                </div>
                                <div class="col-sm-6">
                                    <label>Lote del insumo</label>
                                    <input class="form-control" type="text" id="lote_bd" name="lote_bd"
                                        value="{{ old('lote_bd') }}" placeholder="Ingrese el lote del insumo">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Temperatura Equipo</label>
                                    <div class="form-group form-focus select-focus">
                                        <select class="select floating" id="e_temp_machine" name="temp_machine"> 
                                            <option selected disabled>--  TEMPERATURA DEL TEST B&D-</option>
                                                <option value="134"> 134ºC  </option>
                                                <option value="121"> 121ºC  </option>
                                        </select>
                                        </div>
                                    
                                </div>
                                <div class="col-sm-6">
                                    <label>Temperatura Ambiente</label>
                                    <input class="form-control" type="text" id="e_temp_ambiente" name="temp_ambiente"
                                    value="{{ old('temp_ambiente') }}" placeholDeleteder="Ingrese la temperatura del ambiente">
                                    
                                </div>
                            </div>
                            <div class="row">
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
        <!-- /Add testbowie Modal -->
      
   
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar paquete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <br>

        </div>
    </div>
</div>
@endsection
