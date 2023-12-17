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
                            <li class="breadcrumb-item active">Test B&D  </li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_testbowie"><i class="fa fa-plus"></i>  Registrar Nuevo Test</a>
                    </div>
                </div>
            </div>
			<!-- /Page Header -->

            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-6 col-md-2">  
                    <div class="form-group form-focus select-focus">
                        <select class="select floating" id="id_machine"
                        name="id_machine"> 
                            <option selected disabled>-- Seleccionar el Equipo--</option>
                            <option value="MATACHANA V1"> MATACHANA V1</option>
                                <option value="CISA V2"> CISA V2</option>
                        </select>
                        <label class="focus-label">Nombre del Area</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2"> 
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating" id="lote_machine" name="lote_machine">
                        <label class="focus-label">LOTE DE EQUIPO</label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-2">  
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating" id="lote_bd" name="lote_bd">
                        <label class="focus-label">LOTE DE INSUMO</label>
                    </div>
                </div>
                <div class="col-sm-4 col-md-2">  
                    <div class="form-group">
                        
                        <input type="text" class="form-control datetimepicker @error('start_date') is-invalid @enderror" name="lote_bd" value="{{ old('start_date') }}"id="lote_bd">
                        <label class="focus-label">Fecha de Test</label>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">  
                    <button type="sumit" class="btn btn-success btn-block btn_search"> BUSCAR </button>  
                </div>
            </div>

            {{-- message --}}
            {!! Toastr::message() !!}

            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table" id="testbowieDataList" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Equipo</th>
                                    <th>Lote de equipo</th>
                                    <th>Lote de Insumo</th>
                                    <th>Validacion </th>
                                    <th>Proceso realizado</th>
                                    <th>Operador</th>
                                    <th>Detalles</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

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
                        <form action="{{ route('testbowie/add/save') }}" method="POST">
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
                                                <option value="ERROR">  ERROR</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6"> 
                                    <label>Lote a esterilizar</label>
                                    <input class="form-control" type="text" id="lote_machine" name="lote_machine" placeholDeleteder="Ingrese el LOTE del equipo">
                                </div>
                                <div class="col-sm-6"> 
                                    <label>Lote del insumo</label>
                                    <input class="form-control" type="text" id="lote_bd" name="lote_bd" placeholder="Ingrese el lote del insumo">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6"> 
                                    <label>Observaciones</label>
                                    <input class="form-control" type="text" id="observation" name="observation" placeholder="Ingrese alguna observacion">
                                </div>
                                <div class="col-sm-6"> 
                                    <label>Operador</label>
                                    <input class="form-control" type="text" id="operator" name="operator" placeholder= "{{ Auth::user()->name }}" value="{{ Auth::user()->name }}">
                                </div>
                            </div>
                       
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add testbowie Modal -->
				
        <!-- Edit testbowie Modal -->
        <div id="edit_testbowie" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Test validacion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('form/apply/testbowie/update') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-focus select-focus">
                                        <select class="select floating" id="e_machine_id" name="machine_id"> 
                                            <option selected disabled>-- SELECCIONAR EL EQUIPO--</option>
                                                <option value="MATACHANA V1"> MATACHANA V1</option>
                                                <option value="CISA V2"> CISA V2</option>
                                        </select>
                                    </div>
                                </div>
                                <input class="form-control" type="hidden" id="e_id" name="id" value="">
                                <div class="col-sm-6 "> 
                                    <label>VALIDAR EL PROCESO</label>
                                    <div class="form-group form-focus select-focus">
                                        <select class="select floating" id="e_validation_bd" name="validation_bd"> 
                                            <option selected disabled>-- Validar--</option>
                                                <option value="Correcto"> Correcto </option>
                                                <option value="ERROR">  ERROR</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6"> 
                                    <label>Lote a esterilizar</label>
                                    <input class="form-control" type="text" id="e_lote_machine" name="lote_machine" placeholDeleteder="Ingrese el LOTE del equipo">
                                </div>
                                <div class="col-sm-6"> 
                                    <label>Lote del insumo</label>
                                    <input class="form-control" type="text" id="e_lote_bd" name="lote_bd" placeholder="Ingrese el lote del insumo">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6"> 
                                    <label>Observaciones</label>
                                    <input class="form-control" type="text" id="observation" name="observation" placeholder="Ingrese alguna observacion">
                                </div>
                                <div class="col-sm-6"> 
                                    <label>Operador</label>
                                    <input class="form-control" type="text" id="operator" name="operator" placeholder= "{{ Auth::user()->name }}" value="{{ Auth::user()->name }}">
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
        

				
        <!-- Delete testbowie Modal -->
        <div class="modal custom-modal fade" id="delete_testbowie" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Borrar Test</h3>
                            <p>Estas seguro de Eliminar?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Eliminar</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete testbowie Modal -->
    </div>
    <!-- /Page Wrapper -->
    @section('script')

    <script type="text/javascript">
        $(document).ready(function() {
            
            table = $('#testbowieDataList').DataTable({
                
                lengthMenu: [
                    [10, 25, 50, 100,150],
                    [10, 25, 50, 100,150]
                ],
                buttons: [
                    'pageLength',
                ],
                "pageLength": 10,
                order: [
                    [5, 'desc']
                ],
                processing: true,
                serverSide: true,
                ordering: true,
                searching: true,
                ajax: {
                    url:"{{ route('get-testbowie-data') }}",
                    data:function(data) {
                        // read valus for search
                        var machine_id   = $('#machine_id').val();
                        var lote_machine   = $('#lote_machine').val();
                        data.machine_id   = machine_id;
                        data.lote_machine   = lote_machine;
                    }
                },
                
                columns: [{
                        data: 'no',
                        name: 'no',
                    },
                    {
                        data: 'machine_id',
                        name: 'machine_id',
                    },
                    {
                        data: 'lote_machine',
                        name: 'lote_machine',
                    },
                    {
                        data: 'lote_bd',
                        name: 'lote_bd',
                    },
                    {
                        data: 'validation_bd',
                        name: 'validation_bd',
                    },
                    
                    {
                        data: 'date_done_bd',
                        name: 'date_done_bd',
                    },
                    {
                        data: 'operator',
                        name: 'operator',
                    },
                    {
                        data: 'observation',
                        name: 'observation',
                    },
                    {
                        data: 'action',
                        name: 'action',
                    },
                ]
            });
            $('.btn_search').on('click',function() {
                table.draw();
            });
        });
    </script>

    {{-- update js --}}
    <script>
        $(document).on('click','.testbowieUpdate',function()
        {
            var _this = $(this).parents('tr');
            $('#e_machine_id').val(_this.find('.machine_id').text());
            $('#e_lote_machine').val(_this.find('.lote_machine').text());
            $('#e_lote_bd').val(_this.find('.lote_bd').text());
            $('#e_validation_bd').val(_this.find('.validation_bd').text());
            $('#e_operator').val(_this.find('.operator').text());
            $('#e_observation').val(_this.find('.observation').text());
        });
    </script>

    {{-- delete js --}}
    <script>
        $(document).on('click','.testDelete',function()
        {
            var _this = $(this).parents('tr');
            $('.e_machine_id').val(_this.find('.machine_id').data('machine_id'));
            $('#e_lote_machine').val(_this.find('.lote_machine').data('lote_machine'));
        });
    </script>

    @endsection

@endsection
