<div class="table-responsive">
    <table class="table table-striped custom-table" id="testbowieDataList" style="width: 100%">
        <thead>
            <tr>
                <th>Descarga</th>
                <th>No</th>
                <th>Equipo</th>
                <th>Lote Equipo</th>
                <th>Temp. Equipo</th>
                <th>Lote Insumo B&D</th>
                <th> Proceso Realizado</th>
                <th>Validacion</th>
                <th>Operador</th>
                <th>Temp. Ambiente</th>
                <th>Detalles</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testbowies as $testbowie)
                <tr class="odd">
                    <td>
                        <div>
                            <a class="btn-sm"href="{{ route('printertestbowie.show', $testbowie->id) }}">
                                <i class="fa fa-print rm-1"></i>

                        </div>
                    </td>
                    <td>
                        <a class="id">
                            {{ $testbowie->id }} </span>
                    </td>
                    <td>
                        <span class="machine_id"> {{ $testbowie->machine_id }} </span>
                    </td>
                    <td>
                        <a href="{{ route('testbowie.show', $testbowie->lote_machine) }}" class="link-primary">
                            {{ $testbowie->lote_machine }} </a>
                    </td>
                    <td>
                        <span class="temp_machine"> {{ $testbowie->temp_machine }} </span>
                    </td>
                    <td>
                        <span class="lote_bd"> {{ $testbowie->lote_bd }} </span>
                    </td>
                    <td class="sorting_1">
                        {{ $testbowie->created_at }}
                    </td>
                    <td>
                        @if ($testbowie->validation_bd == 'Correcto')
                            <span class="badge bg-inverse-info" class="validation_bd"> {{ $testbowie->validation_bd }}
                            @else
                                <span class="badge bg-inverse-danger" class="validation_bd">
                                    {{ $testbowie->validation_bd }}
                        @endif

                        </span>
                    </td>
                    <td>
                        <span class="operator"> {{ $testbowie->operator }} </span>
                    </td>
                    <td>
                        <span class="temp_ambiente"> {{ $testbowie->temp_ambiente }} </span>
                    </td>
                    <td>
                        <span class="observation"> {{ $testbowie->observation }} </span>
                    </td>
                    <td>
                        <div class="dropdown dropdown-action">
                            <a class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item"href="{{ route('testbowie.edit', $testbowie->id) }}">
                                    <i class="fa fa-pencil m-r-5"></i> Editar entrada
                                </a>
                                <form method="POST" action="{{ route('testbowie.destroy', $testbowie->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="dropdown-item" data-toggle="modal">
                                        <i class="fa fa-trash-o m-r-5"></i> Borrar entrada
                                    </button>
                                </form>
                            </div>
                            
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-3">
        {{ $testbowies->withQueryString()->links() }}
    </div>
</div>
