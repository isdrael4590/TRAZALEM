@extends('layouts.master')
@section('content')
    <?php
    $hour = date('G');
    $minute = date('i');
    $second = date('s');
    $msg = ' Today is ' . date('l, M. d, Y.');
    
    if ($hour == 00 && $hour <= 11 && $minute <= 59 && $second <= 59) {
        $greet = 'Buenos dias,';
    } elseif ($hour >= 12 && $hour <= 17 && $minute <= 59 && $second <= 59) {
        $greet = 'Buenas Tardes,';
    } elseif ($hour >= 18 && $hour <= 23 && $minute <= 59 && $second <= 59) {
        $greet = 'Buenas noches,';
    } else {
        $greet = 'Bienvenido,';
    }
    ?>
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">{{ $greet }}{{ Session::get('name') }}!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Panel Principal</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h2>EQUIPOS VAPOR <img src="{{ URL::to('assets/img/logos_equipos/LOGO-STEAM.png') }}"
                                            height="100"> </h2>
                                    <h3>LOTE ACTUAL : </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h2>EQUIPOS BAJA TEMPERATURA <img
                                            src="{{ URL::to('assets/img/logos_equipos/130HPO.png') }}" height="60"></h2>
                                    <h3>LOTE ACTUAL : </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <h3 class="text-center">NUMERO DE TEST DE BOWIE </h3>
                        <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                            <div class="dash-widget-info">
                                <h3>112</h3>
                                <h1><img src="{{ URL::to('assets/img/logos_equipos/logo_matachana.png') }}" height="20">
                                    1</h1>
                            </div>
                        </div>

                        <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                            <div class="dash-widget-info">
                                <h3>1112</h3>
                                <h1><img src="{{ URL::to('assets/img/logos_equipos/logo_matachana.png') }}" height="20">
                                    2</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">

                    <div class="card dash-widget">
                        <h3 class="text-center">NUMERO DE CICLOS </h3>
                        <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
                            <div class="dash-widget-info">
                                <h3>1112</h3>
                                <h1><img src="{{ URL::to('assets/img/logos_equipos/logo_matachana.png') }}" height="20">
                                    1</h1>
                            </div>
                        </div>
                        <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
                            <div class="dash-widget-info">
                                <h3>1112</h3>
                                <h1><img src="{{ URL::to('assets/img/logos_equipos/logo_matachana.png') }}" height="20">
                                    2</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <h3 class="text-center">NUMERO DE TEST DE VACIO </h3>

                        <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                            <div class="dash-widget-info">
                                <h3>1112</h3>
                                <h2><img src="{{ URL::to('assets/img/logos_equipos/130HPO.png') }}" height="40"> </h2>
                            </div>
                        </div>

                        <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
                            <div class="dash-widget-info">
                                <h3>1112</h3>
                                <h2><img src="{{ URL::to('assets/img/logos_equipos/LOGO_130LF.png') }}" height="30"></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">

                    <div class="card dash-widget">
                        <h3 class="text-center">NUMERO DE CICLOS </h3>
                        <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
                            <div class="dash-widget-info">
                                <h3>1112</h3>
                                <h2><img src="{{ URL::to('assets/img/logos_equipos/130HPO.png') }}" height="40"> </h2>
                            </div>
                        </div>
                        <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
                            <div class="dash-widget-info">
                                <h3>1112</h3>
                                <h2><img src="{{ URL::to('assets/img/logos_equipos/LOGO_130LF.png') }}" height="30">
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Rendimiento de Funcionalidad <img
                                            src="{{ URL::to('assets/img/logos_equipos/LOGO-STEAM.png') }}" height="100">
                                    </h3>
                                    <div id="bar-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">PRODUCCION <img
                                            src="{{ URL::to('assets/img/logos_equipos/LOGO-STEAM.png') }}" height="100">
                                    </h3>
                                    <div id="line-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Rendimiento de Incubacion <img
                                            src="{{ URL::to('assets/img/logos_equipos/LOGO-STEAM.png') }}"
                                            height="100"></h3>
                                    <div id="bar-charts2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Rendimiento de Incubacion <img
                                            src="{{ URL::to('assets/img/logos_equipos/130HPO.png') }}" height="50">
                                    </h3>
                                    <div id="line-charts2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- message --}}
            {!! Toastr::message() !!}
            <!-- Statistics Widget -->

        </div>
        <!-- /Page Content -->
    </div>
@endsection
