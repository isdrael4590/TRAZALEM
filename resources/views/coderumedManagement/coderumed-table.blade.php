<div class="table-responsive">
    <table class="table table-striped custom-table" id="coderumedDataList" style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Código RUMED</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Área </th>
                <th>Creado</th>
                <th>Detalles</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coderumeds as $coderumed)
                <tr class="odd">
                    <td>
                        <span class="id" data-id = "{{ $coderumed->id }}"> {{ $coderumed->id }}
                        </span>
                    </td>
                    <td>
                        <span class="coderumed_id"> {{ $coderumed->coderumed_id }} </span>
                    </td>
                    <td>
                        <a href="{{ route('coderumed.show', $coderumed->id) }}" class="link-primary">
                            {{ $coderumed->name_coderumed }} </a>
                    </td>
                    <td>
                        <span class="category"> {{ $coderumed->category }} </span>
                    </td>
                    <td>
                        <span class="area"> {{ $coderumed->area }} </span>
                    </td>
                    <td class="sorting_1">
                        {{ $coderumed->join_date_coderumed }}
                    </td>
                    <td>
                        <span class="detalls"> {{ $coderumed->detalls }} </span>
                    </td>
                    <td>
                        <div class="dropdown dropdown-action">
                            <a class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item"href="{{ route('coderumed.edit', $coderumed->id) }}">
                                    <i class="fa fa-pencil m-r-5"></i> Editar entrada
                                </a>
                                <form method="POST" action="{{ route('coderumed.destroy', $coderumed->id) }}">
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
        {{ $coderumeds->withQueryString()->links() }}
    </div>
</div>
