{{-- <?php
session_start();
//if (isset($_SESSION["user_id"])) {
   //header("Location: index.php");
//}
?> --}}
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INGRESO A TRAZALEM </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        @include("layouts.header")
    </head>
    <body>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4"> </div>

                <div class="col-md-4">
                    <div><p>INGRESAR</p></div>

                    <form method="POST" action="{{ route('login') }}">
                        {{-- Metodo de seguridad descrito por Laravel --}}
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Usuario" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Contraseña" name="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="form-btn">
                            <input type="submit" value="INGRESO" name="login" class="btn btn-primary">
                        </div>
                    </form>
                    <div><p>NO ESTOY REGISTRADO <a href="{{route("register")}}">Registrar aquí</a></p></div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
