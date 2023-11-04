
<!--$url_base="http://localhost:3000/TRAZALEM/dist/config/";-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <!-- ADAPTACION -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <!-- FIN ADAPTACION -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="FJACOME" />
        <title>Trazabilidad - ALEM</title>
        <!-- Favicon-->
        <link rel="icon" type="ifavcon.ico" href="{{ asset('assets/ifavcon_1.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->

        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" />

        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
        <script defer src="{{ asset('js/qrcode.min.js') }}"></script>

        <script defer src="{{ asset('js/app_qr.js') }}"></script>
    </head>
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <ul>
                <a class="navbar-brand" href="#page-top">Sistema de Trazabilidad</a>
                <a class="navbar-brand" href="#page-top">TrazALEM</a>
                </ul>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#lavado">Lavado</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">ZNE (Zona No Estéril)</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio_despacho">ZE (Zona Estéril)</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Despacho</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Sistema Inteligente de Trazabilidad para RUMEDs (Unidad de Reprocesamiento de Dispositivos Médicos) </div>
                <div class="masthead-heading text-decoration-underline">TrazALEM</div>
                <!-- <a class="btn btn-primary btn-xl text-uppercase" href="#lavado">Tell Me More</a>
                -->
            </div>
        </header>
    <body id="page-top">
