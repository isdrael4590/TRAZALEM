@extends('layouts.master')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center mb-3">
                <div class="col">
                    <h2 class="page-title">
                        {{ __('Generar Un Nuevo ciclo') }}
                    </h2>
                </div>
            </div>

            @include('partials._breadcrumbs')
        </div>
    </div>

    @include('partials.session')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">

                <div class="row">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header">
                              Configuración de Paquetes de Instrumental.
                            </div>
                            <div class="card-body">
                             <livewire:search-coderumed />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="{{ route('generators.store') }}" method="POST">
                                    @csrf
                                    <div class="row gx-3 mb-3">
                                        <div class="col">
                                            <label class="small mb-1" for="date">
                                                Fecha
                                                <span class="text-danger">*</span>
                                            </label>

                                            {{--                                    <input class="form-control form-control-solid example-date-input @error('date') is-invalid @enderror" --}}
                                            {{--                                           name="purchase_date" id="date" type="date" value="{{ old('purchase_date') }}" --}}
                                            {{--                                    > --}}
                                            <input class="form-control @error('date') is-invalid @enderror" name="date"
                                                id="date" type="date" value="{{ now()->format('Y-m-d') }}">

                                            @error('date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col">
                                            <label class="small mb-1" for="machine_name">
                                                Equipo
                                                <span class="text-danger">*</span>
                                            </label>

                                            <select class="form-select @error('machine_name') is-invalid @enderror"
                                                id="machine_name" name="machine_name">
                                                <option selected="" disabled="">
                                                    Seleccione el Equipo:
                                                </option>

                                                @foreach ($machines as $machine)
                                                    <option value="{{ $machine->id }}" @selected(old('machine_name') == $machine->id)>
                                                        {{ $machine->machine_name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @error('customer_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col">
                                            <label class="small mb-1" for="lote_machine">
                                               Lote del Equipo
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="number" label="Lote del Equipo" name="lote_machine"
                                                id="lote_machine" placeholder="0" value="{{ old('lote_machine') }}">
                                        </div>

                                        <div class="col">
                                            <label for="temp_machine" class="small mb-1">
                                                Temperatura del Equipo
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="temp_machine" id="temp_machine" required>
                                                <option selected disabled>-- Seleccionar la Temperatura del Ciclo--
                                                </option>
                                                <option value="134ºC ESTANDAR"> 134ºC Estándar </option>
                                                <option value="121ºC ESTANDAR"> 121ºC Estándar </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row 3 mb-3">

                                        <div class="col">
                                            <label for="type_program" class="small mb-1">
                                                Tipo de carga
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="type_program" id="type_program" required>
                                                <option selected disabled>-- SELECCIONAR TIPO DE CARGA--
                                                </option>
                                                <option value="134ºC ESTANDAR"> 134ºC ESTANDAR </option>
                                                <option value="121ºC ESTANDAR"> 121ºC ESTANDAR </option>
                                                <option value="CONTENEDORES"> CONTENEDORES</option>
                                                <option value=" RAPID"> RAPID </option>
                                                <option value=" ESPORAS"> ESPORAS </option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="type_program" class="small mb-1">
                                                LOTE DEL BIOLOGICO
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" label="Lote del Biológico" name="lote_biologic"
                                            id="lote_biologic" placeholder="0" value="{{ old('lote_biologic') }}">
                                        </div>
                                        <div class="col">
                                            <label for="datatime_expiration" class="small mb-1">
                                                Tipo de carga
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="datatime_expiration" id="datatime_expiration" required>
                                                <option selected disabled>-- SELECCIONAR LOS MESES--</option>
                                                <option value="3"> 3 meses </option>
                                                <option value="6"> 6 meses </option>
                                                <option value="12"> 12 meses </option>
                                                <option value="18"> 18 meses </option>
                                                <option value="24"> 24 meses </option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="status" class="small mb-1">
                                                ESTADO
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-select" name="status" id="status" required>
                                                @foreach (\App\Enums\generatorStatus::cases() as $status)
                                                    <option value="{{ $status->value }}">
                                                        {{ $status->label() }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <livewire:coderumed-cart :cartInstance="'generator'" />

                                    <div class="col-md-12 mt-4">
                                        <div class="form-group">
                                            <label for="note">
                                                {{ __('Notes') }}
                                            </label>
                                            <textarea name="note" id="note" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-4">
                                        <div class="d-flex flex-wrap">
                                            <button type="submit" class="btn btn-success add-list mx-1">
                                                {{ __('Create generator') }}
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
