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
                        <h3 class="page-title">Registro de actividad del TEST BOWIE</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Registro de cambios en Base de TEST BOWIE</li>
                        </ul>
                    </div>
                </div>
            </div>
			<!-- /Page Header -->
        {{-- message --}}
        {!! Toastr::message() !!}
        <h1>Detalles del Lote de TEST DE BOWIE</h1>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                        <strong>Identificacion del Equipo--</strong>
                        <span> {{ $machine->machine_id }} </span>
                    </div>
                    <div class="col-sm-6">
                        <strong>Lote del Ciclo del Equipo/strong>
                        <span> {{ $machine->lote_machine }} </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <strong>Lote del insumo B&D</strong>
                        <span> {{ $machine->lote_bd }} </span>
                    </div>

                    <div class="col-sm-6">
                        <strong>Validacion del Ciclo</strong>
                        <span> {{ $machine->validation_bd }} </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <strong>Temperatura del Esterilizador</strong>
                        <span> {{ $machine->operator }} </span>
                    </div>
                    <div class="col-sm-12">
                        <strong>Temperatura del Ambiente</strong>
                        <span> {{ $machine->observation }} </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <strong>Elaborado por</strong>
                        <span> {{ $machine->operator }} </span>
                    </div>
                    <div class="col-sm-12">
                        <strong>Observaciones</strong>
                        <span> {{ $machine->observation }} </span>
                    </div>
                </div>
            </div>
        </div>


        @if (Auth::user()->role_name == 'Admin' || Auth::user()->role_name == 'Super Admin')
            <h1>Historial Versiones</h1>
            @foreach ($machine->history as $history)
                <p>
                    <strong>ID:</strong> {{ $history->id }} <strong>Equipo:</strong> {{ $history->machine_id }},
                    <strong>Lote de equipo:</strong>: {{ $history->lote_machine }}, <strong>Lote de Insumo:</strong>: {{ $history->lote_bd }},
                    <strong>Validacion:</strong>: {{ $history->validation_bd }},
                    <strong>Observaciones:</strong>: {{ $history->observation }}, <strong>Modificado por:</strong>
                    <!--TODO: Redigir adecuadamente al perfil del usuario  -->
                    <a href="{{ route('userManagement', $history->user->id) }}"> {{ $history->user->name }} </a>
                    <strong>Última Modificación:</strong> {{ $history->created_at->diffForHumans() }}

                </p>
            @endforeach
        @endif
          
    </div>
@endsection

