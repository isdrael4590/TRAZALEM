<div class="table-responsive">
    <table class="table table-striped custom-table" id="generatorqrDataList" style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Ref. QR</th>
                <th>Info QR</th>
                <th>Codigo Paquete</th>
                <th>Descripcion Paquete</th>
                <th>Envoltura Paquete</th>
                <th>Equipo</th>
                <th>Lote Equipo</th>
                <th>Temp. Equipo</th>
                <th>Lote Biologico</th>
                <th>Tipo de carga</th>
                <th>Vencimiento</th>
                <th>Temp. Ambiente</th>
                <th>Fecha de Esterilizaciòn</th>
                <th>Operador</th>
                <th>Detalles</th>
         
            </tr>
        </thead>
        <tbody>
            @foreach ($generatorqrs as $generatorqr)
                <tr class="odd">
                    <td>
                        <a class="id">
                            {{ $generatorqr->id }} </span>
                    </td>
                    <td>
                        <a href="{{ route('Reportref_qr.show', $generatorqr->ref_qr) }}" class="link-primary">
                            {{ $generatorqr->ref_qr }} </a>
                    </td>
                    <td>
                        <span class="info_qr"> {{ $generatorqr->info_qr }} </span>
                    </td>
                    <td>
                        <span class="coderumed_id"> {{ $generatorqr->coderumed_id }} </span>
                    </td>
                    <td>
                        <span class="name_coderumed"> {{ $generatorqr->name_coderumed }} </span>
                    </td>
                    <td>
                        <span class="package_wrap"> {{ $generatorqr->package_wrap }} </span>
                    </td>
                    <td>
                        <span class="machine_id"> {{ $generatorqr->machine_id }} </span>
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
            
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-3">
        {{ $generatorqrs->withQueryString()->links() }}
    </div>
</div>
