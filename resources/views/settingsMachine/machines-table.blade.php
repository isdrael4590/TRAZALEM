<div class="table-responsive">
    <table class="table table-striped custom-table" id="MachineDataList" style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Equipo</th>
                <th>MOdelo del Equipo</th>
                <th>Serie. Equipo</th>
                <th>Capacidad del Equipo</th>
                <th> Fabricante</th>
                <th>Pais de Fabricacion</th>
                <th>Proveedor</th>
                <th>Ing. Servicio</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Pagina web</th>
                <th>Imagen</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($machines as $Machine)
                <tr class="odd">
                    <td>
                        <a class="id">
                            {{ $Machine->id }} </span>
                    </td>
                    <td>
                        <span class="machine_id"> {{ $Machine->machine_id }} </span>
                    </td>
                    <td>
                        <a href="{{ route('machine.show', $Machine->machine_model) }}" class="link-primary">
                         {{ $Machine->machine_model }} </a>
                    </td>
                    <td>
                        <span class="serial"> {{ $Machine->serial }} </span>
                    </td>
                    <td>
                        <span class="capacity"> {{ $Machine->capacity }} </span>
                    </td>
                    <td class="sorting_1">
                        {{ $Machine->manufacture_name }} 
                    </td>
                    <td>
                        <span class="manufacture_country"> {{ $Machine->manufacture_country }} </span>
                    </td>
                    <td>
                        <span class="supplier"> {{ $Machine->supplier }} </span>
                    </td>
                    <td>
                        <span class="field_engineer"> {{ $Machine->field_engineer }} </span>
                    </td>
                    <td>
                        <span class="email"> {{ $Machine->email }} </span>
                    </td>
                    <td>
                        <span class="mobile_number"> {{ $Machine->mobile_number }} </span>
                    </td>
                    <td>
                        <span class="website_url"> {{ $Machine->website_url}} </span>
                    </td>
                    <td>
                        <span class="machine_image"> {{ $Machine->machine_image}} </span>
                    </td>
                    <td>
                        <div class="dropdown dropdown-action">
                            <a class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item"href="{{ route('machine.edit', $Machine->id) }}">
                                    <i class="fa fa-pencil m-r-5"></i> Editar entrada
                                </a>
                                <form method="POST" action="{{ route('machine.destroy', $Machine->id) }}">
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
        {{ $machines->withQueryString()->links() }}
    </div>
</div>
