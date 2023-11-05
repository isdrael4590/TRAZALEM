@extends('layouts.admin_master')

@section('content')

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">TEST DE BOWIE AND DICK</h3>
                        <p class="text-center item-intro text-muted">Validación de funcionalidad, evitar presencia de aire en la cámara y/o vapor defectuso.</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/insert-resultbd') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">ELEGIR EQUIPO DE VAPOR </label>
                                        <select name="name_equip">
                                            <option value="Matachana"> MATACHANA  </option>
                                            <option value="Cisa"> CISA </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">VALIDACION DEL RESULTADO</label>
                                        <select name="validation_bd">
                                            <option value="NO"> ERROR DE CICLO   </option>
                                            <option value="SI"> OK </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName"> LOTE DE CICLO DEL EQUIPO </label>
                                        <input class="form-control py-4" name="l_equipo" type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName"> LOTE DEL INSUMO </label>
                                        <input class="form-control py-4" name="l_bd" type="text" placeholder="" />
                                    </div>
                                </div>                                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName"> OBSERVACIONES </label>
                                        <input class="form-control py-4" name="Observacion_bd" type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName"> OPERADOR </label>
                                        <input class="form-control py-4" name="operator" type="text" placeholder= "{{ Auth::user()->name }}" value="{{ Auth::user()->name }}"/>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block"> Enviar </button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection