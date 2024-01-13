<div>
    <form action="{{ route('coderumed.update', $coderumed->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="row">
            <div class="form-group">
                <div class="col-sm-6">
                    <label>Nombre del paquete</label>
                    <input class="form-control" type="text" name="name_coderumed" id="e_name_coderumed"
                        value="{{ $coderumed->name_coderumed }}" />
                </div>
                <div class="col-sm-6">
                    <label>Código rumed</label>
                    <input class="form-control" type="text" name="coderumed_id" id="e_coderumed_id"
                        value="{{ $coderumed->coderumed_id }}" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label>Área del paquete</label>
                    <input class="form-control" type="text" name="area" id="e_area"
                        value="{{ $coderumed->area }}" />
                </div>

                <div class="col-sm-6">
                    <label>Categoría del Paquete</label>
                    <input class="form-control" type="text" name="category" id="e_category"
                        value="{{ $coderumed->category }}" />
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label>Detalles del paquete</label>
                    <input class="form-control" type="text" name="detalls" id="e_detalls"
                        value="{{ $coderumed->detalls }}" />
                </div>


            </div>
            <div class="submit-section">
                <button type="submit" class="btn btn-primary submit-btn">Actualizar</button>
            </div>
        </div>
    </form>
</div>
