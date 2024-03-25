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
                    <form action="{{ route('coderumed.update', $coderumed->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label>Nombre del paquete</label>
                                    <input class="form-control" type="text" name="name_coderumed" id="e_name_coderumed"
                                        value="{{ $coderumed->name_coderumed }}" />
                                </div>
                                <div class="col">
                                    <label>Código rumed</label>
                                    <input class="form-control" type="text" name="code_coderumed" id="e_code_coderumed"
                                        value="{{ $coderumed->code_coderumed }}" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Área del paquete</label>
                                    <input class="form-control" type="text" name="area" id="e_area"
                                        value="{{ $coderumed->area }}" />
                                </div>

                                <div class="col">
                                    <label>Categoría del Paquete</label>
                                    <input class="form-control" type="text" name="category" id="e_category"
                                        value="{{ $coderumed->category }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Detalles del paquete</label>
                                    <input class="form-control" type="text" name="detalls" id="e_detalls"
                                        value="{{ $coderumed->detalls }}" />
                                </div>


                            </div>
                            <div class="row">

                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn">Actualizar</button>
                                </div>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
