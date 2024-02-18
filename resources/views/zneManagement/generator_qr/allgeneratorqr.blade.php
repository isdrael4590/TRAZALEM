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
                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                        id="switch_annual" checked>
                                    <label class="onoffswitch-label" for="switch_annual">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="labelqr-item">
                                <div class="labelqr-action">
                                    <!--¡labelqr -->
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
                                            <input class="form-control" type="text" id="lote_machine" name="lote_machine"
                                                placeholDeleteder="Ingrese el LOTE del equipo">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="d-block">Temperatura Ambiente</label>
                                            <input class="form-control" type="text" id="temp_ambiente"
                                                name="temp_ambiente" placeholDeleteder="Ingrese el la temperatura ambiente">
                                        </div>


                                    </div>
                                    <!-- /EQUIPO  -->

                                    <!-- LOTE DEL EQUIPO-->
                                    <div class="labelqr-row">
                                        <div class="col-md-6">
                                            <label class="d-block">Temperatura a Esterilizar</label>
                                            <div class="form-group form-focus select-focus">
                                                <select class="select floating" id="temp_machine" name="temp_machine">
                                                    <option selected disabled>-- SELECCIONAR TEMPERATURA DEL CICLO--
                                                    </option>
                                                    <option value="134ºC ESTANDAR"> 134ºC ESTANDAR </option>
                                                    <option value="121ºC ESTANDAR"> 121ºC ESTANDAR </option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="d-block">Tipo de carga a Esterilizar</label>
                                            <div class="form-group form-focus select-focus">
                                                <select class="select floating" id="type_program" name="type_program">
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
                                            <input class="form-control" type="text" id="e_lote_biologico"
                                                name="lote_biologico" placeholDeleteder="Ingrese el LOTE del biologico">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>TIEMPO DE VENCIMIENTO</label>

                                            <div class="form-group form-focus select-focus">
                                                <select class="select floating" id="datatime_expiration"
                                                    name="datatime_expiration">
                                                    <option selected disabled>-- SELECCIONAR LOS MESES--</option>
                                                    <option value="1"> 1 mes </option>
                                                    <option value="2"> 2 meses </option>
                                                    <option value="3"> 3 meses </option>

                                                    <option value="6"> 6 meses </option>
                                                    <option value="12"> 12 meses </option>


                                                </select>

                                            </div>

                                        </div>
                                    </div>
                                    <!-- /biologico -->
                                </div>

                            </div>

                            <!-- Custom Policy -->
                            <div class="custom-policy">

                                <div class="selectRumed-body">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="l-Numero">No</th>
                                                <th class="l-coderumed_id">Codigo No</th>
                                                <th class="l-name_coderumed">Descripcion Paquetes</th>
                                                <th class="l-package_type">Embalaje</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a class="control removeRow" href="#">x</a><span>1</span>
                                                </td>
                                                <td><span>prueba</span></td>
                                                
                                                <td class="amount"><input type="text" value="1" /></td>
                                                <td class="package_type">
                                                    <div class="form-group form-focus select-focus">
                                                        <select class="select floating" id="datatime_expiration"
                                                            name="datatime_expiration">
                                                            <option selected disabled>-- Seleccionar la emboltura--</option>
                                                            <option value="Contenedor Rigido"> Contenedor Rigido </option>
                                                            <option value="Papel Mixto"> Papel Mixto </option>
                                                            <option value="Tela NO Tejida"> Tela NO Tejida </option>
                                                            <option value="Tela Tejida"> Tela Tejida </option>
                                                        </select>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <a class="control newRow" href="#"> + Nuevo paquete</a>
                                </div>
                            </div>
                            <div class="labelqr-header">

                                <div class="labelqr-action">
                                    <button class="btn btn-primary" type="button" data-toggle="modal"
                                        data-target="#add_generatorqr"><i class="fa fa-plus"></i> GENERAR QR</button>
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

                    <!-- /Sick labelqr -->
                    <div id="add_generatorqr" class="modal custom-modal fade" role="dialog">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">QR GENERADO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-content">

                                    <div class="cabecera-ticket ">
                                        <header>
                                            <div class="upper-ticket">
                                                <small>hOSPITAL HE-1</small>
                                                <strong>Esterilizaciòn</strong>
                                            </div>
                                            <div class="upper-ticket2">
                                                <small>AUTOCLAVE DE VAPOR</small>
                                                <strong>MATACHANA 1</strong>
                                            </div>
                                        </header>
                                        <section class="machine-info">
                                            <div class="machine-info2">
                                                <small>Descripcion Paquete</small>
                                                <strong>PIEZAS DE MANO PARA SIERRAS SYNTHES (TRAUMAMED) </strong>
                                            </div>
                                            
                                        </section>
                                        <section class="machine-info">
                                            <div class="machine-info3">
                                                <small>Tipo de Ciclo</small>
                                                <strong> 134 Estandar</strong>
                                            </div>
                                            <div class="machine-info3">
                                                <small>LOTE</small>
                                                <strong>1232</strong>
                                            </div>
                                        </section>
                                        <section class="infos">
                                            <div class="detalls_cycle">
                                                <div class="box">
                                                    <small>F. Elab.</small>
                                                    <strong><em>W</em></strong>
                                                </div>
                                                <div class="box">
                                                    <small>F. Caduc.</small>
                                                    <strong><em>C3</em></strong>
                                                </div>
                                                <div class="box">
                                                    <small>Lote Biolo.</small>
                                                    <strong>14B</strong>
                                                </div>
                                                <div class="box">
                                                    <small>Operario</small>
                                                    <strong>Guillermo Luzuriaga</strong>
                                                </div>
                                            </div>
                                            <div class="detalls_cycle">
                                                <div class="qrcode">
                                                    <use xlink:href="#qrcode"></use>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="strap">
                                            <div class="box">
                                                <div class="">
                                                    <small>El producto no se considera ESTERIL, si el empaque esta ABIERTO o
                                                        HUMEDO</small>

                                                </div>

                                            </div>
                                            
                                        </section>
                                    </div>


                                </div>
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn">IMPRIMIR QR</button>
                                </div>
                            </div>


                        </div>

                    </div>



                </div>
            </div>
        </div>

        <!-- /Add package modal -->



    </div>
    <script src="{{ URL::to('assets/js/otherjs/mainrowtoqr.js') }}"></script>
@endsection
