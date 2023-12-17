@extends('layouts.app')
@section('content')
    <div class="main-wrapper">
        <div class="account-content">
            <a href="{{ route('form/job/list') }}" class="btn btn-primary apply-btn">Apply Job</a>
            <div class="container">
                <!-- Account Logo -->
                <div class="account-logo">
                    <a href="index.html"><img src="{{ URL::to('assets/img/logo2.png') }}" alt="Soeng Souy"></a>
                </div>
                {{-- message --}}
                {!! Toastr::message() !!}
                <!-- /Account Logo -->
                <div class="account-box">
                    <div class="account-wrapper">
                        <h3 class="account-title">Contraseña olvidada</h3>
                        <p class="account-subtitle">Ingrese su email para evio de link de verificacion.</p>
                        <!-- Account Form -->
                        <form method="POST" action="/forget-password">
                            @csrf
                            <div class="form-group">
                                <label>Correo electronico</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Ingrese su contraseña">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">ENVIAR</button>
                            </div>
                            <div class="account-footer">
                                <p>NO TENGO CUENTA TODAVIA? <a href="{{ route('login') }}">Ingresar</a></p>
                            </div>
                        </form>
                        <!-- /Account Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
