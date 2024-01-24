<div class="table-responsive">
    <table class="table table-striped custom-table" id="testbowieDataList" style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Equipo</th>
                <th>Lote de equipo</th>
                <th>Lote de Insumo</th>
                <th>Validacion </th>
                <th>Proceso realizado</th>
                <th>Operador</th>
                <th>Detalles</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testbowies as $testbowie)
                <tr class="odd">
                    <td>
                        <a href="{{ route('zonanoesteril.show', $testbowie->id) }}" class="link-primary">
                            {{ $testbowie->id }} </a>
                    </td>
                    <td>
                        <span class="machine_id"> {{ $testbowie->machine_id }} </span>
                    </td>
                    <td>
                        <span class="lote_machine"> {{ $testbowie->lote_machine }} </span>
                    </td>
                    <td>
                        <span class="lote_bd"> {{ $testbowie->lote_bd }} </span>
                    </td>
                    <td class="sorting_1">
                        <span class="date_done_bd"> {{ $testbowie->created_at->diffForHumans() }} </span>
                    </td>
                    <td>
                        <span class="validation_bd"> {{ $testbowie->validation_bd }} </span>
                    </td>
                    <td>
                        <span class="operator"> {{ $testbowie->operator }} </span>
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
                                <a class="dropdown-item"href="{{ route('zonanoesteril.edit', $testbowie->id) }}">
                                    <i class="fa fa-pencil m-r-5"></i> Editar entrada
                                </a>
                                <form method="POST" action="{{ route('zonanoesteril.destroy', $testbowie->id) }}">
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
</div>
