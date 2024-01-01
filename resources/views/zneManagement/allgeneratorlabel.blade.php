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
                            <li class="breadcrumb-item active">Generar QR por equipo.</li>
                        </ul>
                    </div>
                   
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Annual labelqr -->
                    <div class="card labelqr-box" id="labelqr_annual">
                        <div class="card-body">
                            <div class="h3 card-title with-switch">
                                Configurar ETIQUETAS 											
                                <div class="onoffswitch">
                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_annual" checked>
                                    <label class="onoffswitch-label" for="switch_annual">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                           
                            <div class="labelqr-item">
                                <div class="labelqr-action">
                                <!-- Annual Days labelqr -->
                                <div class="labelqr-row">
                                    <div class="col-md-6">
                                        <label class="d-block">EQUIPO A ESTERILIZAR</label>
                                        <div class="form-group form-focus select-focus">
                                            <select class="select floating" id="machine_id" name="machine_id"> 
                                                <option selected disabled>-- SELECCIONAR EL EQUIPO--</option>
                                                
                                                    <option value="MATACHANA V1"> MATACHANA V1</option>
                                                    <option value="CISA V2"> CISA V2</option>
                                              
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6"> 
                                        <label>Lote del Equipo a esterilizar</label>
                                        <input class="form-control" type="text" id="e_lote_machine" name="lote_machine" placeholDeleteder="Ingrese el LOTE del equipo">
                                    </div>
                                    
                                    
                                </div>
                                <!-- /EQUIPO  -->
                                
                                <!-- LOTE DEL EQUIPO-->
                                <div class="labelqr-row">
                                    <div class="col-md-6">
                                        <label class="d-block">Temperatura a Esterilizar</label>
                                        <div class="form-group form-focus select-focus">
                                            <select class="select floating" id="e_temp_machine" name="temp_machine"> 
                                                <option selected disabled>-- SELECCIONAR TEMPERATURA DEL CICLO--</option>
                                                    <option value="134ºC ESTANDAR"> 134ºC ESTANDAR </option>
                                                    <option value="121ºC ESTANDAR"> 121ºC ESTANDAR </option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="d-block">Tipo de carga a Esterilizar</label>
                                        <div class="form-group form-focus select-focus">
                                            <select class="select floating" id="e_tipo_paquete" name="tipo_paquete"> 
                                                <option selected disabled>-- SELECCIONAR TIPO DE CARGA--</option>
                                                    <option value="134ºC ESTANDAR"> 134ºC ESTANDAR </option>
                                                    <option value="121ºC ESTANDAR"> 121ºC ESTANDAR </option>
                                                    <option value="CONTENEDORES"> CONTENEDORES</option>
                                                    <option value=" RAPID"> RAPID </option>
                                                    <option value=" ESPORAS"> ESPORAS </option>

                                            </select>
                                            
                                        </div>
                                    </div>
                                   
                                </div>

                                <!--  -->
                                
                                <!-- biologico -->
                                <div class="labelqr-row">
                                    <div class="col-sm-6"> 
                                        <label>Lote del biologico a esterilizar</label>
                                        <input class="form-control" type="text" id="e_lote_biologico" name="lote_biologico" placeholDeleteder="Ingrese el LOTE del biologico">
                                    </div>
                                    <div class="col-sm-6"> 
                                        <label>FECHA DE ELABORACION</label>
                                        
                                        <input type="text" class="form-control datetimepicker @error('start_date') is-invalid @enderror" name="fecha_elaboracion" value="{{ old('start_date') }}"id="fecha_elaboracion">
                                       
                                    </div>
                                </div>
                                 <!-- /biologico -->
                            </div>
                               
                            </div>
                            
                            <!-- Custom Policy -->
                            <div class="custom-policy">
                                <div class="labelqr-header">
                                 
                                    <div class="labelqr-action">
                                        <button class="btn btn-sm btn-primary" type="button" data-toggle="modal" data-target="#add_custom_package"><i class="fa fa-plus"></i> INSERTAR PAQUETES</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-nowrap labelqr-table mb-0">
                                        <thead>
                                            <tr>
                                                <th class="l-Numero">No</th>
                                                <th class="l-codigo">codigo No</th>
                                                <th class="l-Paquetes">Descripcion Paquetes</th>
                                                <th class="l-cantidad">Cantidad</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($temporarycoderumed as $key=>$temp_coderumed)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $temp_coderumed->coderumed_id }}</td>
                                                <td>{{ $temp_coderumed->name_coderumed }}</td>
                                                <td class="form-group form-focus select-focus">
                                                   
                                                        <select class="select floating" id="cantidad_paq" name="label_number"> 
                                                                <option value="1"> 1</option>
                                                                <option value="2"> 2</option>
                                                                <option value="3"> 3</option>
                                                                <option value="4"> 4</option>
                                                                <option value="5"> 5</option>
                                                                <option value="6"> 6</option>
                                                          
                                                        </select>
                                                        
                                                    
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            
                                                            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#delete_temporary_coderumed"><i class="fa fa-trash-o m-r-5"></i> Eliminar</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                     
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">GENERAR QR</button>
                            </div>
                            
                            <!--  -->
                        </div>
                    </div>
                    <!-- /Annual labelqr -->
                    
                    <!-- PREVIUWA labelqr -->
                    <div class="card labelqr-box" id="labelqr_sick">
                        <div class="card-body">
                            <div class="h3 card-title with-switch">
                                ETIQUETAS  											
                                <div class="onoffswitch">
                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_sick" checked>
                                    <label class="onoffswitch-label" for="switch_sick">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="labelqr-item">
                                <div class="labelqr-row">
                                    <div class="labelqr-left">
                                        <div class="input-box">
                                            <div class="form-group">
                                                <label>Days</label>
                                                <input type="text" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="labelqr-right">
                                        <button class="labelqr-edit-btn">
                                            Edit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Sick labelqr -->
                    



                </div>
            </div>          
        </div>
        <!-- Add package Modal -->
        <div id="add_custom_package" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">AÑADIR PAQUETES DE LA RUMED</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('add/coderumed/temporary') }}">
                            @csrf
                            <div class="form-group labelqr-duallist">
                                <label>SELECCIONAR Y AÑADIR</label>
                                <div class="row">
                                    <div class="col-lg-5 col-sm-5" class="table-responsive">
                                        <select name="package_rumed_from" id="package_rumed_select" class="form-control" size="5" multiple="multiple">
                                            @foreach ($coderumedselect as $key => $itemrumed)
                                            <option value="{{ $itemrumed->coderumed_id }}">{{ $itemrumed->coderumed_id }}   ==>   {{ $itemrumed->name_coderumed }}</option>
                                            @endforeach
                                           
                                        </select>
                                    </div>
                                    <div class="multiselect-controls col-lg-2 col-sm-2">
                                        <button type="button" id="package_rumed_select_rightAll" class="btn btn-block btn-white"><i class="fa fa-forward"></i></button>
                                        <button type="button" id="package_rumed_select_rightSelected" class="btn btn-block btn-white"><i class="fa fa-chevron-right"></i></button>
                                        <button type="button" id="package_rumed_select_leftSelected" class="btn btn-block btn-white"><i class="fa fa-chevron-left"></i></button>
                                        <button type="button" id="package_rumed_select_leftAll" class="btn btn-block btn-white"><i class="fa fa-backward"></i></button>
                                    </div>
                                    <div class="col-lg-5 col-sm-5">
                                        <select name="package_rumed_to" id="package_rumed_select_to" class="form-control" size="8" multiple="multiple"></select>
                                    </div>
                                </div>
                            </div>

                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">GUARDAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add package modal -->



    </div>




@endsection



