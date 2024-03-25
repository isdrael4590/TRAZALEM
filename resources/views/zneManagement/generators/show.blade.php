@extends('layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">
                                {{ __('Detalles del Ciclo') }}
                            </h3>
                        </div>

                        <div class="card-actions btn-actions">
                            <x-action.close route="{{ route('generators.index') }}" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row row-cards mb-3">
                            <div class="col-3">
                                <label for="date" class="small mb-1">
                                    {{ __('Fecha de Elaboración') }}
                                </label>

                                <input type="text" id="date" class="form-control"
                                    value="{{ $generator->date->format('d-m-Y') }}" disabled>
                            </div>

                            <div class="col-3">
                                <label for="purchase_no" class="small mb-1">
                                    {{ __('Referencia ID') }}
                                </label>
                                <input type="text" id="purchase_no" class="form-control"
                                    value="{{ $generator->reference }}" disabled>
                            </div>

                            <div class="col-3">
                                <label for="machine_name" class="small mb-1">
                                    {{ __('Equipo') }}
                                </label>
                                <input type="text" id="machine_name" class="form-control"
                                    value="{{ $generator->machine_name }}" disabled>
                            </div>

                            <div class="col-3">
                                <label for="lote_machine" class="small mb-1">
                                    {{ __('lote del equipo') }}
                                </label>
                                <input type="text" id="lote_machine" class="form-control"
                                    value="{{ $generator->lote_machine }}" disabled>
                            </div>



                        </div>
                        <div class="row row-cards mb-3">
                            <div class="col-3">
                                <label for="temp_machine" class="small mb-1">
                                    {{ __('Temperatura del Equipo') }}
                                </label>
                                <input type="text" id="temp_machine" class="form-control"
                                    value="{{ $generator->temp_machine }}" disabled>
                            </div>
                            <div class="col-3">
                                <label for="type_program" class="small mb-1">
                                    {{ __('Tipo de programa') }}
                                </label>
                                <input type="text" id="type_program" class="form-control"
                                    value="{{ $generator->type_program }}" disabled>

                            </div>

                            <div class="col-3">
                                <label for="temp_ambiente" class="small mb-1">
                                    {{ __('Temperatura del ambiente') }}
                                </label>
                                <input type="text" id="temp_ambiente" class="form-control"
                                    value="{{ $generator->temp_ambiente }}" disabled>
                            </div>
                        </div>
                        <div class="row row-cards mb-3">
                            <div class="col-12">
                                <label for="observation" class="small mb-1">
                                    {{ __('Observaciones') }}
                                </label>
                                <textarea name="observation" id="observation" cols="30" rows="2" class="form-control" disabled>{{ $generator->observation }}</textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped align-middle">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="align-middle text-center">No.</th>
                                            <th scope="col" class="align-middle text-center">Qr Referencia.</th>
                                            <th scope="col" class="align-middle text-center">Código</th>
                                            <th scope="col" class="align-middle text-center">Nombre del Instrumental</th>
                                            <th scope="col" class="align-middle text-center"> Tipo de envoltura</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($generator->generatorDetails as $item)
                                            <tr>
                                                <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                                <td class="align-middle text-center">
                                                    <span class="badge bg-indigo-lt">
                                                        {{ $item->ref_qr }}
                                                    </span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="badge bg-indigo-lt">
                                                        {{ $item->coderumed->code_coderumed }}
                                                    </span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    {{ $item->coderumed->name_coderumed }}
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="badge bg-primary-lt">
                                                        {{ $item->package_wrap }}
                                                    </span>
                                                </td>

                                            </tr>
                                        @endforeach
                                        {{-- created by --}}
                                        <tr>
                                            <td class="align-middle text-end" colspan="7">
                                                Usuario Responsable
                                            </td>
                                            <td class="align-middle text-center">
                                                {{ $generator->user->name }}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="align-middle text-end" colspan="7">
                                                Estado del ciclo
                                            </td>
                                            <td class="align-middle text-center">
                                                @if ($generator->status->value == 1)
                                                    <span class="badge bg-success-lt">
                                                        Validado
                                                    </span>
                                                @elseif ($generator->status->value == 0)
                                                    <span class="badge bg-warning-lt">
                                                        En curso
                                                    </span>
                                                @elseif ($generator->status->value == 3)
                                                    <span class="badge bg-warning-lt">
                                                        Falla
                                                    </span>
                                                @else
                                                    <span class="badge bg-danger-lt">
                                                        Rechazado
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- complete generator button --}}
                        @if ($generator->status->value == 0)
                            <div class="col-4 float-right my-4">
                                <form action="{{ route('generators.update', $generator->uuid) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-check-circle"></i>
                                        Ciclo Validado
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
