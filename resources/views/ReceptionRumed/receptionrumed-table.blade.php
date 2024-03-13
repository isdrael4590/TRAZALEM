<div class="table-responsive">
    <table class="table table-striped custom-table" id="receptionrumedDataList" style="width: 100%">
        <thead>
            <tr>
                <th>Descarga</th>
                <th>No</th>
                <th>CODIGO RUMED</th>
                <th>Nombre RUMED</th>
                <th>Fecha de Recepcion</th>
                <th>Operador</th>
                <th>Persona de entrega</th>
                <th>Tipo de Contaminacion</th>
                <th>Estado de Recepcion</th>
                <th>Detalles</th>
                <th>Action</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach ($receptionrumeds as $receptionrumed)
                <tr class="odd">
                    <td>
                        <div>
                            <a class="  btn-sm  " href="{{ route('/printerInput', $receptionrumed->id) }}">
                                <i class="fa fa-print mr-1"> Imprimir</i>

                        </div>
                    </td>
                    <td>
                        <a class="id">
                            {{ $receptionrumed->id }} </span>
                    </td>
                    <td>
                        <span class="coderumed"> {{ $receptionrumed->coderumed }} </span>
                    </td>
                    <td>
                        <a href="{{ route('receptionrumed.show', $receptionrumed->name_coderumed) }}" class="link-primary">
                            {{ $receptionrumed->name_coderumed }} </a>
                    </td>
                    
                   
                    <td class="sorting_1">
                        <span class="date_reception"> {{ $receptionrumed->created_at }} </span>
                    </td>
                    <td>
                        <span class="operator"> {{ $receptionrumed->operator }} </span>
                    </td>
                    <td class="sorting_1">
                        <span class="delivery_staff"> {{ $receptionrumed->delivery_staff }} </span>
                    </td>
                    <td>
                        <span class="type_dirt"> {{ $receptionrumed->type_dirt }} </span>
                    </td>
                    <td>
                        <span class="state_rumed"> {{ $receptionrumed->state_rumed }} </span>
                    </td>
                    <td>
                        <span class="observation"> {{ $receptionrumed->observation }} </span>
                    </td>




                    
                    <td>
                        <div class="dropdown dropdown-action">
                            <a class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item"href="{{ route('receptionrumed.edit', $receptionrumed->id) }}">
                                    <i class="fa fa-pencil m-r-5"></i> Editar entrada
                                </a>
                                <form method="POST" action="{{ route('receptionrumed.destroy', $receptionrumed->id) }}">
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
        {{ $receptionrumeds->withQueryString()->links() }}
    </div>
</div>
