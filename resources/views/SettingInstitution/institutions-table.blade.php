<div class="table-responsive">

    @foreach ($institutions as $institutions)
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <strong><label   for="company_name">Nombre de la Institucion:   </label></strong>
                    <h2> {{ $institutions->company_name }}"</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <strong><label>Area</label></strong>
                <h2> {{ $institutions->company_area }}</h2>
            </div>
            
            
        </div>
        <div class="row">

            <div class="col-sm-6">
                <strong><label>Direccion</label></strong>
                <h2> {{ $institutions->address }}" </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <strong><label>Pais</label></strong>
                <h2> {{ $institutions->country }} </h2>
            </div>
            <div class="col-sm-6">
                <strong><label>Ciudad</label></strong>
                <h2> {{ $institutions->city }} </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <strong> <label>Provincia</label></strong>
                <h2> {{ $institutions->state_province }} </h2>
            </div>
            <div class="col-sm-6">
                <strong> <label>Codigo Postal</label></strong>
                <h2> {{ $institutions->postal_code }} </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <strong><label>Responsable del servicio</label></strong>
                <h2> {{ $institutions->contact_person }} </h2>
            </div>
            <div class="col-sm-6">
                <strong><label>correo</label></strong>
                <h2> {{ $institutions->email }} </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <strong><label>Telefono Institucional</label></strong>
                <h2> {{ $institutions->phone_number }} </h2>
            </div>
            <div class="col-sm-6">
                <strong><label>Numero movil</label></strong>
                <h2> {{ $institutions->mobile_number }} </h2>
            </div>
        </div>
        <div class="col-auto float-right ml-auto">
            <a href="{{ route('institution.edit', $institutions->id) }}" class="btn add-btn"><i
                    class="fa fa-pencil"></i> Editar Institucion</a>
        </div>
    @endforeach





</div>
