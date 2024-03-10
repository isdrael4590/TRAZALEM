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
                        <h3 class="page-title">Registro de actividad del Referencia QR</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Registro de cambios en Base de Referencia QR</li>
                        </ul>
                    </div>
                </div>
            </div>
			<!-- /Page Header -->
        {{-- message --}}
        {!! Toastr::message() !!}
        <h1>Detalles del Referencia QR</h1>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                        <strong>Referencia QR</strong>
                        <span> {{ $generatorqr->ref_qr }} </span>
                    </div>
                    <div class="col-sm-6">
                        <strong>Codigo Paquete</strong>
                        <span> {{ $generatorqr->coderumed_id }} </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <strong>Descripcion Paquete</strong>
                        <span> {{ $generatorqr->name_coderumed }} </span>
                    </div>

                    <div class="col-sm-6">
                        <strong>Envoltura Paquete</strong>
                        <span> {{ $generatorqr->package_wrap }} </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <strong>Equipo</strong>
                        <span> {{ $generatorqr->machine_id }} </span>
                    </div>
                    <div class="col-sm-12">
                        <strong>Lote Equipo</strong>
                        <span> {{ $generatorqr->lote_machine }} </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <strong>Temp. Equipo</strong>
                        <span> {{ $generatorqr->temp_machine }} </span>
                    </div>
                    <div class="col-sm-12">
                        <strong>Lote Biologico</strong>
                        <span> {{ $generatorqr->lote_biologico }} </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <strong>Tipo de carga</strong>
                        <span> {{ $generatorqr->type_program }} </span>
                    </div>
                    <div class="col-sm-12">
                        <strong>Vencimiento</strong>
                        <span> {{ $generatorqr->datatime_expiration }} </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <strong>Temp. Ambiente</strong>
                        <span> {{ $generatorqr->temp_ambiente }} </span>
                    </div>
                    <div class="col-sm-12">
                        <strong>Fecha de Esterilizaciòn</strong>
                        <span> {{ $generatorqr->created_at }} </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <strong>Operador</strong>
                        <span> {{ $generatorqr->operator }} </span>
                    </div>
                    <div class="col-sm-12">
                        <strong>Detalles</strong>
                        <span> {{ $generatorqr->observation }} </span>
                    </div>
                </div>
            </div>
        </div>


        @if (Auth::user()->role_name == 'Admin' || Auth::user()->role_name == 'Super Admin')
            <h1>Historial Versiones</h1>
            @foreach ((array)$generatorqr->history as $history)
                <p>
                    <strong>ID:</strong> {{ $history->id }} 
                    <strong>Referencia QR:</strong> {{ $history->ref_qr }},
                    <strong>Codigo Paquete:</strong>: {{ $history->coderumed_id }}, <strong>Descripcion Paquete:</strong>: {{ $history->name_coderumed }},
                    <strong>Envoltura Paquete:</strong>: {{ $history->package_wrap }},
                    <strong>Equipo:</strong>: {{ $history->machine_id }}, 
                    <strong>Lote Equipo:</strong>: {{ $history->lote_machine }}, <strong>Temp. Equipo:</strong>: {{ $history->temp_machine }},
                    <strong>Lote Biologico:</strong>: {{ $history->lote_biologico }},
                    <strong>Tipo de carga:</strong>: {{ $history->type_program }}, 
                    <strong>Vencimiento:</strong>: {{ $history->datatime_expiration }}, <strong>Temp. Ambiente</strong>: {{ $history->temp_ambiente }},
                    <strong>Fecha de Esterilizaciòn:</strong>: {{ $history->created_at }},
                    <strong>Detalles:</strong>: {{ $history->observation }}, 
                    <strong>Modificado por:</strong>
                    <!--TODO: Redigir adecuadamente al perfil del usuario  -->
                    <a href="{{ route('userManagement', $history->user->id) }}"> {{ $history->user->name }} </a>
                    <strong>Última Modificación:</strong> {{ $history->created_at->diffForHumans() }}

                </p>
            @endforeach
        @endif
          
    </div>
@endsection

