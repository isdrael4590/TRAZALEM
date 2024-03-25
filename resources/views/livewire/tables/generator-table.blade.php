<div class="card">
    <div class="card-header">
        <div>
            <h3 class="card-title">
                {{ __('Generador de Etiquetas') }}
            </h3>
        </div>

        <div class="card-actions">
            <x-action.create route="{{ route('generators.create') }}" />
        </div>
    </div>

    <div class="card-body border-bottom py-3">
        <div class="d-flex">
            <div class="text-secondary">
                Mostrar
                <div class="mx-2 d-inline-block">
                    <select wire:model.live="perPage" class="form-select form-select-sm" aria-label="result per page">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="25">25</option>
                    </select>
                </div>
                resultados
            </div>
            <div class="ms-auto text-secondary">
                Buscar:
                <div class="ms-2 d-inline-block">
                    <input type="text" wire:model.live="search" class="form-control form-control-sm" aria-label="Search invoice">
                </div>
            </div>
        </div>
    </div>

    <x-spinner.loading-spinner/>

    <div class="table-responsive">
        <table wire:loading.remove class="table table-bordered card-table table-vcenter text-nowrap datatable">
            <thead class="thead-light">
            <tr>
                <th class="align-middle text-center w-1">
                    {{ __('No.') }}
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('reference')" href="#" role="button">
                        {{ __('N° Referencia ID del ciclo.') }}
                        @include('inclues._sort-icon', ['field' => 'reference'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('date')" href="#" role="button">
                        {{ __('Fecha de Elaboración') }}
                        @include('inclues._sort-icon', ['field' => 'date'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('machine_name')" href="#" role="button">
                        {{ __('Equipo') }}
                        @include('inclues._sort-icon', ['field' => 'machine_name'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('lote_machine')" href="#" role="button">
                        {{ __('Lote Equipo') }}
                        @include('inclues._sort-icon', ['field' => 'lote_machine'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('datatime_expiration')" href="#" role="button">
                        {{ __('Fecha de vencimiento') }}
                        @include('inclues._sort-icon', ['field' => 'datatime_expiration'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('status')" href="#" role="button">
                        {{ __('Estado del ciclo') }}
                        @include('inclues._sort-icon', ['field' => 'status'])
                    </a>
                </th>

                <th scope="col" class="align-middle text-center">
                    {{ __('Action') }}
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse ($generators as $generator)
                <tr>
                    <td class="align-middle text-center">
                        {{ $loop->iteration }}
                    </td>
                    <td class="align-middle text-center">
                        {{ $generator->reference }}
                    </td>
                    <td class="align-middle text-center">
                        {{ $generator->created_at }}
                    </td>
                    <td class="align-middle text-center">
                        {{ $generator->machine->machine_name}}
                    </td>
                    <td class="align-middle text-center">
                        {{ $generator->lote_machine}}
                    </td>
                    <td class="align-middle text-center">
                        {{ $generator->datatime_expiration}}
                    </td>
           
                    <td class="align-middle text-center">
                        <x-button.show class="btn-icon" route="{{ route('generators.show', $generator->uuid) }}"/>
                        @if ($generator->status === \App\Enums\generatorStatus::EN_CURSO)
                            <x-button.edit class="btn-icon" route="{{ route('generators.edit', $generator->uuid) }}"/> 
                            <x-button.complete class="btn-icon" route="{{ route('generators.update', $generator->uuid) }}" onclick="return confirm('Are you sure to complete generator no. {{ $generator->reference }}?')"/>
                            <x-button.delete class="btn-icon" route="{{ route('generators.destroy', $generator) }}" onclick="return confirm('Are you sure to cancel generator NO. {{ $generator->reference }}?')"/>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="align-middle text-center" colspan="8">
                       Resultados no encontrados
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div class="card-footer d-flex align-items-center">
        <p class="m-0 text-secondary">
            Mostrando <span>{{ $generators->firstItem() }}</span> to <span>{{ $generators->lastItem() }}</span> de <span>{{ $generators->total() }}</span> páginas
        </p>

        <ul class="pagination m-0 ms-auto">
            {{ $generators->links() }}
        </ul>
    </div>
</div>