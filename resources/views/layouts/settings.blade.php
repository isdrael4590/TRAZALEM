<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Soeng Souy">
        <meta name="robots" content="noindex, nofollow">
        <title>Configuracion - TrazALEM</title>
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/img/favicon.png') }}">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/font-awesome.min.css') }}">
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/line-awesome.min.css') }}">
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{ URL::to('assets/css/select2.min.css') }}">
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
		{{-- message toastr --}}
		<link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
		<script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
		<script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>

    </head>
	@yield('style')
	<style>
		.error{
			color: red;
		}
	</style>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<!-- Header -->
			<div class="main-wrapper">
		
				<!-- Header -->
				{{-- @yield('nav') --}}
				<div class="header">
					<!-- Logo -->
					<div class="header-left">
						<a href="{{ route('home') }}" class="logo"> <img src="{{ URL::to('assets/img/logo1.png') }}" width="50" height="50" alt=""> </a>
					</div>
					<!-- /Logo -->
					<a id="toggle_btn" href="javascript:void(0);">
						<span class="bar-icon"><span></span><span></span><span></span></span>
					</a>
					<!-- Header Title -->
					<div class="page-title-box">
						<h3>BIENVENIDO, {{ Auth::user()->name }}</h3>
					</div>
					<!-- /Header Title -->
					<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
					<!-- Header Menu -->
					<ul class="nav user-menu">
						
						<!-- Flag -->
						<li class="nav-item dropdown has-arrow flag-nav">
							<a class="nav-link " data-toggle="dropdown" href="#" role="button"> <img src="{{ URL::to('assets/img/flags/es.png') }}" alt="" height="20"> <span>Español</span> </a>
						
						</li>
						<!-- /Flag -->
				
						<!-- /Message Notifications -->
						<li class="nav-item dropdown has-arrow main-drop">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
								<img src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
								<span class="status online"></span></span>
								<span>{{ Auth::user()->name }}</span>
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="{{ route('profile_user') }}">Mi Perfil</a>
								<a class="dropdown-item" href="{{ route('company/settings/page') }}">Configuracion</a>
								<a class="dropdown-item" href="{{ route('logout') }}">SALIR</a>
							</div>
						</li>
					</ul>
					<!-- /Header Menu -->
					<!-- Mobile Menu -->
					<div class="dropdown mobile-user-menu">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<i class="fa fa-ellipsis-v"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="profile.html">Mi perfil</a> 
							<a class="dropdown-item" href="{{ route('company/settings/page') }}">CONFIGURAR</a>
							<a class="dropdown-item" href="{{ route('logout') }}">SALIR</a>
						</div>
					</div>
					<!-- /Mobile Menu -->
				</div>
				<!-- /Header -->
				<!-- Sidebar -->
				@include('sidebar.sidebar')
				<!-- /Sidebar -->
				<!-- Page Wrapper -->
				@yield('content')
				<!-- /Page Wrapper -->
			</div>
			<!-- /Header -->
			<!-- Sidebar -->
			@include('sidebar.sidebarsetting')
			<!-- /Sidebar -->
            {{-- content --}}
            @yield('content')
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{ URL::to('assets/js/jquery-3.5.1.min.js') }}"></script>
		<!-- Bootstrap Core JS -->
        <script src="{{ URL::to('assets/js/popper.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
		<!-- Slimscroll JS -->
		<script src="{{ URL::to('assets/js/jquery.slimscroll.min.js') }}"></script>
		<!-- Select2 JS -->
		<script src="{{ URL::to('assets/js/select2.min.js') }}"></script>
		<!-- validation-->
		<script src="{{ URL::to('assets/js/jquery.validate.js') }}"></script>
		<!-- Custom JS -->
		<script src="{{ URL::to('assets/js/app.js') }}"></script>
		@yield('script')
    </body>
</html>