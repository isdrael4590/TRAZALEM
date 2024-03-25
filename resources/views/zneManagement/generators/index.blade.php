@extends('layouts.master')

@section('content')
    <div class="page-body">
        @if(!$generators)
            <x-empty
                title="No generators found"
                message="Registra y/o intenta buscar ."
                button_label="{{ __('Añadir su primer ciclo a esterilizar ') }}"
                button_route="{{ route('generators.create') }}"
            />
        @else
            <div class="container-xl">
                @livewire('tables.generator-table')
            </div>
        @endif
    </div>
@endsection