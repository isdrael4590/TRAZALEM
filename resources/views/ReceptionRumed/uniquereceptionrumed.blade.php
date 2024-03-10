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
                        <h3 class="page-title">Registro de actividad del INGRESO INSTRUMENTAL</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Registro de cambios en Base del INGRESO INSTRUMENTAL </li>
                        </ul>
                    </div>
                </div>
            </div>
			<!-- /Page Header -->
        {{-- message --}}
        {!! Toastr::message() !!}
        <h1>Detalles del Lote de INGRESO INSTRUMENTAL</h1>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                        <strong>Identificacion del Instrumental--</strong>
                        <span> {{ $receptionrumed->coderumed }} </span>
                    </div>
                    <div class="col-sm-6">
                        <strong>Nombre del Instrumental</strong>
                        <span> {{ $receptionrumed->name_coderumed }} </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <strong>Fecha de Recepcion</strong>
                        <span> {{ $receptionrumed->created_at }} </span>
                    </div>

                    <div class="col-sm-6">
                        <strong>Operador</strong>
                        <span> {{ $receptionrumed->operator }} </span>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-sm-12">
                        <strong>Persona de entrega</strong>
                        <span> {{ $receptionrumed->delivery_staff }} </span>
                    </div>
                    <div class="col-sm-12">
                        <strong>Tipo de Contaminacion</strong>
                        <span> {{ $receptionrumed->type_dirt }} </span>
                    </div>
                </div>
                <div class="row">
                  
                    <div class="col-sm-12">
                        <strong>Estado del Instrumental</strong>
                        <span> {{ $receptionrumed->state_rumed }} </span>
                    </div>
                    <div class="col-sm-12">
                        <strong>Observaciones</strong>
                        <span> {{ $receptionrumed->observation }} </span>
                    </div>
                </div>
                <div class="row">
                 
                    
                </div>
            </div>
        </div>


        @if (Auth::user()->role_name == 'Admin' || Auth::user()->role_name == 'Super Admin')
            <h1>Historial Versiones</h1>
            @foreach ($receptionrumed->history as $history)
                <p>
                    <strong>ID:</strong> {{ $history->id }} <strong>Codigo de Instrumental:</strong> {{ $history->coderumed }},
                    <strong>Descripcion de instrumental:</strong>: {{ $history->name_coderumed }}, 
                    <strong>Fecha de Recepcion:</strong>: {{ $history->created_at }},
                    <strong>Operador:</strong>: {{ $history->operator }},
                    <strong>Persona de entrega:</strong>: {{ $history->delivery_staff }},
                    <strong>Observaciones:</strong>: {{ $history->observation }}, <strong>Modificado por:</strong>
                    <!--TODO: Redigir adecuadamente al perfil del usuario  -->
                    <a href="{{ route('userManagement', $history->user->id) }}"> {{ $history->user->name }} </a>
                    <strong>Última Modificación:</strong> {{ $history->created_at->diffForHumans() }}

                </p>
            @endforeach
        @endif
          
    </div>
@endsection

