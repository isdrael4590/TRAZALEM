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
                        <h3 class="page-title">ALMACEN ESTERIL</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Actualización del registro.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('qrgenerado.update', $qrgenerado->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="labelqr-item">
                            <div class="labelqr-action">
                                <!--¡labelqr -->


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
