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
                        <h3 class="page-title">INSTITUCION</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">INFORMATIVO</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('institution.store') }}" class="btn add-btn" data-toggle="modal"
                            data-target="#add_institution"><i class="fa fa-plus"></i> Añadir institution</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->


            {{-- message --}}
            {!! Toastr::message() !!}

            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    @empty($institutions)
                        <p class="text-center mt-4"> Sin resultados aún </p>
                    @else
                        @include('SettingInstitution.institutions-table')
                    @endempty

                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add User Modal -->

        <!-- /Add User Modal -->

        <!-- Edit User Modal -->





        <!-- /Delete User Modal -->
    </div>
    <!-- /Page Wrapper -->
    <div id="add_institution" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Añadir nueva institucion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('institution.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="company_name">Nombre de la institution </label>
                                    <input class="form-control" type="text" id="" name="company_name"
                                        value="{{ old('company_name') }}" placeholder="Ingrese el nombre de la institucion">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Nombre del Area</label>
                                <input class="form-control" type="text" id="" name="company_area"
                                    value="{{ old('company_area') }}" placeholder="Ingrese el nombre del area">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Ciudad</label>
                                <input class="form-control" type="text" id="" name="city"
                                    value="{{ old('city') }}" placeholder="Ingrese la ciudad">
                            </div>
                            <div class="col-sm-6">
                                <label>Direccion</label>
                                <input class="form-control" type="text" id="" name="address"
                                    value="{{ old('address') }}" placeholder="Ingrese la direccion">
                            </div>
                        </div>
            
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Pais</label>
                                <input class="form-control" type="text" id="" name="country"
                                    value="{{ old('country') }}"
                                    placeholder="Ingrese el pais">
                            </div>
                            <div class="col-sm-6">
                                <label>Provincia</label>
                                <input class="form-control" type="text" id="" name="state_province"
                                    value="{{ old('state_province') }}" placeholder="Ingrese la Provincia">
                            </div>
                        </div>
                        <div class="row">
                         
                            <div class="col-sm-6">
                                <label>Codigo Postal</label>
                                <input class="form-control" type="text" id="" name="postal_code"
                                    value="{{ old('postal_code') }}" placeholder="Ingrese el codigo postal">
                            </div>
                            <div class="col-sm-6">
                                <label>Correo</label>
                                <input class="form-control" type="text" id="" name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Ingrese el correo del servicio">
                            </div>
                        </div>
                        <div class="row">
                          
                            <div class="col-sm-6">
                                <label>Responsable del servicio</label>
                                <input class="form-control" type="text" id="" name="contact_person"
                                    value="{{ old('contact_person') }}" placeholder="Ingrese el nombre de responsable del servicio">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Telefono institutional</label>
                                <input class="form-control" type="text" id="" name="phone_number"
                                    value="{{ old('phone_number') }}" placeholder="Ingrese el Telefono ">
                            </div>
                            <div class="col-sm-6">
                                <label>Numero movil</label>
                                <input class="form-control" type="text" id="" name="mobile_number"
                                    value="{{ old('mobile_number') }}" placeholder="Ingrese el #  de responable">
                            </div>
                        </div>
                        <br>
                   
                          
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
                   
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
