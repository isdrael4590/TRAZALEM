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
                        <h3 class="page-title">institución</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Informacion</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('institution.update', $institution->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="company_name">Nombre de la institution</label>
                                    <input class="form-control" type="text" id="" name="company_name"
                                        value="{{ $institution->company_name }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Nombre Corto</label>
                                <input class="form-control" type="text" id="" name="short_name"
                                    value="{{ $institution->short_name }}" placeholder="Ingrese  un nombre corto">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-6">
                                <label>Direccion</label>
                                <input class="form-control" type="text" id="" name="address"
                                    value="{{ $institution->address }}" placeholder="Ingrese la direccion">
                            </div>
                            <div class="col-sm-6">
                                <label>Area</label>
                                <input class="form-control" type="text" id="" name="company_area"
                                    value="{{ $institution->company_area }}" placeholder="Ingrese el area">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Pais</label>
                                <input class="form-control" type="text" id="" name="country"
                                    value="{{ $institution->country }}" placeholder="Ingrese el pais">
                            </div>
                            <div class="col-sm-6">
                                <label>Ciudad</label>
                                <input class="form-control" type="text" id="" name="city"
                                    value="{{ $institution->city }}" placeholder="Ingrese la ciudad">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Provincia</label>
                                <input class="form-control" type="text" id="" name="state_province"
                                    value="{{ $institution->state_province }}" placeholder="Ingrese la Provincia">
                            </div>
                            <div class="col-sm-6">
                                <label>Codigo Postal</label>
                                <input class="form-control" type="text" id="" name="postal_code"
                                    value="{{ $institution->postal_code }}" placeholder="Ingrese el codigo postal">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Responsable del servicio</label>
                                <input class="form-control" type="text" id="" name="contact_person"
                                    value="{{ $institution->contact_person }}"
                                    placeholder="Ingrese el nombre de responsable del servicio">
                            </div>
                            <div class="col-sm-6">
                                <label>correo</label>
                                <input class="form-control" type="text" id="" name="email"
                                    value="{{ $institution->email }}" placeholder="Ingrese el correo del servicio">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Telefono institutional</label>
                                <input class="form-control" type="text" id="" name="phone_number"
                                    value="{{ $institution->phone_number }}" placeholder="Ingrese el Telefono ">
                            </div>
                            <div class="col-sm-6">
                                <label>Numero movil</label>
                                <input class="form-control" type="text" id="" name="mobile_number"
                                    value="{{ $institution->mobile_number }}" placeholder="Ingrese el #  del tecnico">
                            </div>
                        </div>
                        <div>
                            <div class="col-sm-6">
                                <label>Foto del Equipo</label>
                                <input class="form-control" type="file" id="imageInstitucion"
                                    name="imageInstitucion">
                                <input type="hidden" name="hidden_imageInstitucion" id="imageInstitucion" value="">
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
