<div class="table-responsive">
    <table class="table table-striped custom-table" id="rumed_selecprevqrDataList" style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Codigo Paquete</th>
                <th>Nombre de Paquete</th>
                <th>Tipo de Envoltura</th>
                <th>ACCION</th>
                 </tr>
        </thead>
        <tbody>
            @foreach ($rumed_selecprevqr as $rumed_selecprevqr)
                <tr class="odd">
                    <td>
                        <a class="id">
                            {{ $rumed_selecprevqr->id }} </span>
                    </td>
                    <td>
                        <span class="coderumed_id"> {{ $rumed_selecprevqr->coderumed_id }} </span>
                    </td>
                    <td>
                        <span class="name_coderumed"> {{ $rumed_selecprevqr->name_coderumed }} </span>
                    </td>
                    <td>
                        <span class="package_wrap"> {{ $rumed_selecprevqr->package_wrap }} </span>
                    </td>


                    <td>
                        <div class="dropdown dropdown-action">
                            <a class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <form method="POST" action="{{ route('rumed_selecprevqr.destroy', $rumed_selecprevqr->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="dropdown-item" data-toggle="modal">
                                        <i class="fa fa-trash-o m-r-5"></i> BORRAR PAQUETE
                                    </button>
                                </form>
                            </div>

                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
{{--<div class="mt-3">
        {{ $rumed_selecprevqr->withQueryString()->links() }}
    </div>--}}
</div>
