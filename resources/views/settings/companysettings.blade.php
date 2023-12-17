@extends('layouts.settings')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Configuracion Institucion</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    <form action="{{ route('company/settings/save') }}" method="POST">
                        @csrf
                        <input type="hidden" class="form-control" name="id" value="1">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nombre de la Institucion <span class="text-danger">*</span></label>
                                    @if (!empty($companySettings->company_name))
                                    <input class="form-control" type="text" name="company_name" value="{{ $companySettings->company_name }}">
                                    @else
                                    <input class="form-control" type="text" name="company_name" value="">
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Persona de Contacto</label>
                                    @if (!empty($companySettings->contact_person))
                                    <input type="text" class="form-control" name="contact_person" value="{{ $companySettings->contact_person }}">
                                    @else
                                    <input type="text" class="form-control" name="contact_person" value="">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Direccion</label>
                                    @if (!empty($companySettings->address))
                                    <input type="text" class="form-control" name="address" value="{{ $companySettings->address }}">
                                    @else
                                    <input type="text" class="form-control" name="address" value="">

                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Pais</label>
                                    <select class="form-control select" name="country">
                                        @if (!empty($companySettings->country))
                                            <option value="ECUADOR" {{ ( $companySettings->country == 'ECUADOR') ? 'selected' : '' }}> ECUADOR</option>
                                            <option value="PERU" {{ ( $companySettings->country == 'PERU') ? 'selected' : '' }}> PERU</option>
                                            <option value="OTRO" {{ ( $companySettings->country == ' OTRO') ? 'selected' : '' }}> OTRO </option> 
                                        @else
                                            <option value="ECUADOR">ECUADOR</option>
                                            <option value="PERU">PERU</option>
                                            <option value="OTRO">OTRO</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    @if (!empty($companySettings->city))
                                        <input type="text" class="form-control" name="city" value="{{ $companySettings->city }}">
                                    @else
                                        <input type="text" class="form-control" name="city">
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Provincia</label>
                                    <select class="form-control select" name="state_province">
                                        @if (!empty($companySettings->state_province))
                                            <option value="Pichincha" {{ ( $companySettings->state_province == 'Pichincha') ? 'selected' : '' }}> Pichincha</option>
                                            <option value="Guayas" {{ ( $companySettings->state_province == 'Guayas') ? 'selected' : '' }}> Guayas</option>
                                            <option value="Tungurahua" {{ ( $companySettings->state_province == 'Tungurahua') ? 'selected' : '' }}> Tungurahua</option>
                                           
                                        @else
                                            <option value="Pichincha">Pichincha</option>
                                            <option value="Guayas ">Guayas </option>
                                            <option value="Tungurahua ">Tungurahua </option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label>Codigo postal</label>
                                    @if (!empty($companySettings->postal_code))
                                        <input type="text" class="form-control" name="postal_code" value="{{ $companySettings->postal_code }}">
                                    @else
                                        <input type="text" class="form-control" name="postal_code">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Correo</label>
                                    @if (!empty($companySettings->email))
                                        <input type="email" class="form-control" name="email" value="{{ $companySettings->email }}">
                                    @else
                                        <input type="email" class="form-control" name="email">
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Numero de telefono</label>
                                    @if (!empty($companySettings->phone_number))
                                        <input type="tel" class="form-control" name="phone_number" value="{{ $companySettings->phone_number }}">
                                    @else
                                        <input type="tel" class="form-control" name="phone_number">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Numero movil</label>
                                    @if (!empty($companySettings->mobile_number))
                                    <input type="tel" class="form-control" name="mobile_number" value="{{ $companySettings->mobile_number }}">
                                    @else
                                    <input type="tel" class="form-control" name="mobile_number" value="">
                                    @endif
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
@endsection