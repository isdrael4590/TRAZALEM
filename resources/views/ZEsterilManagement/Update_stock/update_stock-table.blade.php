<div class="table-responsive">
    <table class="table table-striped custom-table" id="generatorqrDataList" style="width: 100%">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>Ref. QR</th>
                <th>Validaciòn ciclo</th>
                <th>Codigo Paquete</th>
                <th>Descripcion Paquete</th>
                <th>Equipo</th>
                <th>Lote Equipo</th>
                <th>Temp. Equipo</th>
                <th>Lote Biologico</th>
                <th>Vencimiento</th>
                <th>Fecha de Esterilizaciòn</th>
                <th>Operador</th>
                <th>Detalles</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($generatorqrs as $generatorqr)
                <tr class="odd">
                    <td>
                        <div>
                            <a class="btn-sm"href="#">
                                <i class="fa fa-print rm-1"></i>

                        </div>
                    </td>
                    <td>
                        <a class="id">
                            {{ $generatorqr->id }} </span>
                    </td>
                    <td>
                        <a class="ref_qr">
                            {{ $generatorqr->ref_qr }} </a>
                    </td>
                    <td>
                        @if ($generatorqr->validation_biologic == 'NOPROCESADO')
                            <span class="badge badge-warning" class="validation_biologic">
                                {{ $generatorqr->validation_biologic }}
                            </span>
                        @elseif($generatorqr->validation_biologic == 'POSITIVO')
                            <span class="badge badge-danger" class="validation_biologic">
                                {{ $generatorqr->validation_biologic }}
                            </span>
                        @elseif($generatorqr->validation_biologic == 'NEGATIVO')
                            <span class="badge badge-success" class="validation_biologic">
                                {{ $generatorqr->validation_biologic }}
                            </span>
                        @endif
                    </td>

                    <td>
                        <span class="code_coderumed"> {{ $generatorqr->code_coderumed }} </span>
                    </td>
                    <td>
                        <span class="name_coderumed"> {{ $generatorqr->name_coderumed }} </span>
                    </td>
                    <td>
                        <span class="package_wrap"> {{ $generatorqr->package_wrap }} </span>
                    </td>
                    <td>
                        <span class="machine_name"> {{ $generatorqr->machine_name }} </span>
                    </td>
                    <td>
                        <span class="lote_machine"> {{ $generatorqr->lote_machine }} </span>
                    </td>
                    <td>
                        <span class="temp_machine"> {{ $generatorqr->temp_machine }} </span>
                    </td>
                    <td>
                        <span class="lote_biologico"> {{ $generatorqr->lote_biologico }} </span>
                    </td>
                    <td>
                        <span class="type_program"> {{ $generatorqr->type_program }} </span>
                    </td>
                    <td class="sorting_1">
                        {{ $generatorqr->datatime_expiration }}
                    </td>
                    <td class="sorting_1">
                        {{ $generatorqr->temp_ambiente }}
                    </td>
                    <td class="sorting_1">
                        {{ $generatorqr->created_at }}
                    </td>

                    <td>
                        <span class="operator"> {{ $generatorqr->operator }} </span>
                    </td>

                    <td>
                        <span class="observation"> {{ $generatorqr->observation }} </span>
                    </td>
                    <td>
                        <div class="dropdown dropdown-action">
                            <a class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item"href="{{ route('generatorqr.edit', $generatorqr->id) }}">
                                    <i class="fa fa-pencil m-r-5"></i> Editar entrada
                                </a>
                                <form method="POST" action="{{ route('generatorqr.destroy', $generatorqr->id) }}">
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
        {{ $generatorqrs->withQueryString()->links() }}
    </div>
</div>
