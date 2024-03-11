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

            {{-- message --}}
            {!! Toastr::message() !!}
            <h1>Detalles del Paquete</h1>
            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <strong>Nombre del paquete</strong>
                            <span> {{ $coderumed->name_coderumed }} </span>
                            
                        </div>
                        <div class="col-sm-6">
                            <strong>Código rumed</strong>
                            <span> {{ $coderumed->coderumed_id }} </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <strong>Área del paquete</strong>
                            <span> {{ $coderumed->area }} </span>
                        </div>

                        <div class="col-sm-6">
                            <strong>Categoría del Paquete</strong>
                            <span> {{ $coderumed->category }} </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <strong>Detalles del paquete</strong>
                            <span> {{ $coderumed->detalls }} </span>
                        </div>
                    </div>
                </div>
            </div>


            @if (Auth::user()->role_name == 'Admin' || Auth::user()->role_name == 'Super Admin')
                <h1>Historial Versiones</h1>
                @foreach ($coderumed->history as $history)
                    <p>
                        <strong>ID:</strong> {{ $history->id }} <strong>Nombre:</strong> {{ $history->name_coderumed }},
                        <strong>Área:</strong>: {{ $history->area }}, <strong>Categoría:</strong>: {{ $history->category }},
                        <strong>Detalles:</strong>: {{ $history->detalls }}, <strong>Modificado por:</strong>
                        <!--TODO: Redigir adecuadamente al perfil del usuario  -->
                        <a href="{{ route('userManagement', $history->user->id) }}"> {{ $history->user->name }} </a>
                        <strong>Última Modificación:</strong> {{ $history->created_at->diffForHumans() }}

                    </p>
                @endforeach
            @endif
        </div>
    @endsection
