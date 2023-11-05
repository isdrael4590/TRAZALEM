@extends('layouts.admin_master')

@section('content')

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">GENERADOR DE ETIQUETA</h3>
                        <p class="item-intro text-muted"> PREVIO A LA GENERACIÓN DE ETIQUETAS SELECIONAR LISTA DE INSTRUMENTAL, TEMPERATURA, TIPO DE CICLO, ENTRE OTROS.  </p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/insert-qrgenerator') }}" enctype="multipart/form-data">
                        @csrf
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>TIPO TEMPERATURA</td>
                                    <td>TIPO DE CARGA</td>
                                    <td>LOTE DE ESTERILIZACIÓN</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="temperature">Elegir Temperatura:</label>
                                        <select name="temperature" id="temperature">
                                            <option value="134°C">134°C</option>
                                            <option value="121°C">121°C</option>

                                        </select>
                                    </td>
                                    <td>
                                        <label for="tipo_carga">Elegir Carga:</label>
                                        <select name="tipo_carga" id="tipo_carga">
                                            <option value="Estándar">Estándar </option>
                                            <option value="Mixto">Mixto </option>
                                            <option value="Contendores ">Contendores </option>
                                            <option value="Rapid ">Rapid 121°C</option>
                                            <option value="Esporas ">Esporas </option>
                                        </select>
                                    </td>
                                    <td>
                                        <strong>LOTE:</strong>
                                        <input type="text" id="flote" name="flote" placeholder="Ingrese # lote del proceso"><br/>
                                    </td>
                                </tr> 
                           
                                <tr class="bg-dark text-white">
                                        <td>DESCRIPCION MATERIAL</td>
                                        <td>TIEMPO DE EXPIRACIÓN</td>
                                        <td> GENERAR QR</td>

                                </tr>
                                <tr>
                                    <td>DESCRIPCION MATERIAL</td>
                                    <td>
                                        <label for="time_expiration">EXPIRACIÓN: </label>
                                    '    <select name="time_exp" id="time_exp">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                        <label for="meses">MES(ES) </label>
                                    </td>
                                    <td> 
                                        <div>
                                            {!! QrCode::generate('Temp:' ); !!}   
                                        </div>
                                    </td>
                                </tr>  
                            </table>
                            <li>
                                <strong>OPERADOR:</strong>
                                <input type="text" id="operator" placeholder="Ingrese sus nombres*"><br/><br/>
                            </li>

                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Enviar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection