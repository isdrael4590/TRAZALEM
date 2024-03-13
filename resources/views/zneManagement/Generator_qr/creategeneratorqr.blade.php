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
                        <h3 class="page-title">Generador de Etiquetas</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Generar QR por equipo.</li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @if (session()->has('error'))
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        @endif
                    </div>
                    <!-- Annual labelqr -->
                    <form action="{{ route('generatorqr.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="h3 card-title with-switch">
                            Configurar etiquetas
                        </div>

                        <!--¡labelqr -->
                        <div class="row">
                            <div class="col-md-3">
                                <label class="d-block">Equipo a esterilizar</label>
                                @error('machine_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" id="machine_id" name="machine_id">
                                        <option selected disabled>-- Seleccionar el equipo --</option>
                                        <option value="MATACHANA V1"> MATACHANA V1</option>
                                        <option value="CISA V2"> CISA V2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Lote del Equipo a esterilizar</label>
                                @error('lote_machine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input class="form-control" type="text" id="lote_machine" name="lote_machine"
                                    placeholDeleteder="Ingrese el LOTE del equipo">
                            </div>
                            <div class="col-md-3">
                                <label class="d-block">Temperatura Ambiente</label>
                                @error('temp_ambiente')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input class="form-control" type="text" id="temp_ambiente" name="temp_ambiente"
                                    placeholDeleteder="Ingrese el la temperatura ambiente">
                            </div>
                            <div class="col-md-3">
                                <label class="d-block">Temperatura a Esterilizar</label>
                                @error('temp_machine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" id="temp_machine" name="temp_machine">
                                        <option selected disabled>-- Sleccionar la Temperatura del Ciclo--
                                        </option>
                                        <option value="134ºC ESTANDAR"> 134ºC Estándar </option>
                                        <option value="121ºC ESTANDAR"> 121ºC Estándar </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="d-block">Tipo de carga a Esterilizar</label>
                                @error('type_program')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                            <div class="col-md-3">
                                <label>Lote del biologico a esterilizar</label>
                                @error('lote_biologic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input class="form-control" type="text" id="lote_biologic" name="lote_biologic"
                                    placeholDeleteder="Ingrese el LOTE del biologico">
                            </div>
                            <div class="col-md-3">
                                <label class="d-block">TIEMPO DE VENCIMIENTO</label>
                                @error('datatime_expiration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group form-focus select-focus">
                                    <select class="select floating" id="datatime_expiration" name="datatime_expiration">
                                        <option selected disabled>-- SELECCIONAR LOS MESES--</option>
                                        <option value="3"> 3 meses </option>
                                        <option value="6"> 6 meses </option>
                                        <option value="12"> 12 meses </option>
                                        <option value="18"> 18 meses </option>
                                        <option value="24"> 24 meses </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Operador</label>
                                @error('operator')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input class="form-control" type="text" id="operator" name="operator"
                                    placeholder= "{{ Auth::user()->name }}" value="{{ Auth::user()->name }}"">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-hover table-white" id="tableSelecterumed">
                                        <thead>
                                            <tr>
                                                <th style="width: 20px"> </th>
                                                <th style="width: 20px">#</th>
                                                <th class="col-sm-2">Codigo RUMED</th>
                                                <th class="col-md-6">Descripcion</th>
                                                <th style="width:100px;">Tipo de Empaque</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="javascript:void(0)" class="text-success font-18"
                                                        title="Add" id="addBtn" style="min-width:150px"><i
                                                            class="fa fa-plus"></i></a></td>
                                                <td>1</td>
                                                <td>
                                                    <div class="form-group form-focus select-focus">
                                                        @error('coderumed_id', 'coderumed_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <select id="coderumed_id" name="coderumed_id">

                                                            <option selected disabled>-- Seleccionar la PAQUETE--
                                                            </option>
                                                            <option value="V1"> v1
                                                            </option>
                                                            <option value="A1"> a1 </option>
                                                            <option value="c1"> c1 </option>
                                                            <option value="d4"> d4</option>
                                                        </select>

                                                    </div>
                                                </td>
                                                <td>
                                                    <input class="form-control"style="min-width:150px" type="text"
                                                        id="name_coderumed" name="name_coderumed">
                                                </td>
                                                <td>
                                                    <div class="form-group form-focus select-focus">
                                                        <select class="select floating" id="package_wrap"
                                                            name="package_wrap">
                                                            <option selected disabled>-- Seleccionar la envoltura--
                                                            </option>
                                                            <option value="Contenedor Rigido"> Contenedor Rigido
                                                            </option>
                                                            <option value="Papel Mixto"> Papel Mixto </option>
                                                            <option value="Tela NO Tejida"> Tela NO Tejida </option>
                                                            <option value="Tela Tejida"> Tela Tejida </option>
                                                        </select>
                                                        @error('package_wrap')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn m-r-10">Generar e Imprimir</button>
                            <button type="submit" class="btn btn-primary submit-btn">Generar</button>
                        </div>
                    </form>
                    {{-- message --}}
                    {!! Toastr::message() !!}
                </div>
            </div>
        </div>
    </div>

    <script src="{{ URL::to('assets/js/otherjs/mainrowtoqr.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#Selectcoderumed').select2();
        });
    </script>
@section('script')
    {{-- add multiple row --}}
    <script>
        var rowIdx = 1;
        $("#addBtn").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableSelecterumed tbody").append(`
            <tr id="R${++rowIdx}">
                <td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                <td class="row-index text-center"><p> ${rowIdx}</p></td>
                <td><input class="form-control" type="text" style="min-width:150px" id="coderumed_id" name="coderumed_id[]"></td>
                <td><input class="form-control" type="text" style="min-width:150px" id="name_coderumed" name="name_coderumed[]"></td>
                <td><div class="form-group form-focus select-focus"><select class="select floating" id="package_wrap" name="package_wrap[]"><option selected disabled>-- Seleccionar la envoltura--</option><option value="Contenedor Rigido"> Contenedor Rigido</option><option value="Papel Mixto"> Papel Mixto </option><option value="Tela NO Tejida"> Tela NO Tejida </option><option value="Tela Tejida"> Tela Tejida </option></select></div></td>
            </tr>`);
        });
        $("#tableSelecterumed tbody").on("click", ".remove", function() {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();
            // Iterating across all the rows
            // obtained to change the index
            child.each(function() {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <p> inside the .row-index class.
                var idx = $(this).children(".row-index").children("p");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(1));

                // Modifying row index.
                idx.html(`${dig - 1}`);

                // Modifying row id.
                $(this).attr("id", `R${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();

            // Decreasing total number of rows by 1.
            rowIdx--;
        });
    </script>
@endsection
@endsection
