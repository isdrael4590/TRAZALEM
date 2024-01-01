@extends('layouts.master')
@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">RUMED</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Base de datos</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_coderumed"><i
                                class="fa fa-plus"></i> Añadir Paquetes</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating" id="coderumed_name" name="coderumed_name">
                        <label class="focus-label">Nombre del paquete</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating" id="area">
                            <option selected disabled>-- Seleccionar el Area--</option>

                        </select>
                        <label class="focus-label">Nombre del Area</label>
                    </div>
                </div>


                <div class="col-sm-6 col-md-3">
                    <button type="sumit" class="btn btn-success btn-block btn_search"> BUSCAR </button>
                </div>
            </div>

            {{-- message --}}
            {!! Toastr::message() !!}

            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table" id="coderumedDataList" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Codigo RUMED</th>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Area </th>
                                    <th>Creado</th>
                                    <th>Detalles</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add User Modal -->
        <div id="add_coderumed" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Añadir nuevo Paquete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('coderumed/add/save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name_coderumed">Descripción del paquete</label>
                                        <input class="form-control" type="text" id="" name="name_coderumed"
                                            value="{{ old('name_coderumed') }}" placeholder="Ingrese la descripcion">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Codigo RUMED</label>
                                    <input class="form-control" type="text" id="" name="coderumed_id"
                                        value="{{ old('coderumed_id') }}" placeholder="Ingrese el codigo RUMED">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Area que pertenece</label>
                                    <input class="form-control" type="text" id="" name="area"
                                        value="{{ old('area') }}"
                                        placeholder="Ingrese el area a donde pertenece el paquete">
                                </div>
                                <div class="col-sm-6">
                                    <label>Categoria</label>
                                    <input class="form-control" type="text" id="" name="category"
                                        value="{{ old('category') }}" placeholder="Ingrese una categoria">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Observaciones</label>
                                    <input class="form-control" type="text" id="" name="detalls"
                                        value="{{ old('detalls') }}" placeholder="Ingrese alguna observacion">
                                </div>
                                <br>
                                <!-- Motrar errores de validación si es que hay -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="submit-section">
                                    <button type="submit" class="btn btn-primary submit-btn">Enviar</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add User Modal -->

        <!-- Edit User Modal -->

        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar paquete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <br>
                <div class="modal-body">
                    <form action="{{ route('coderumed/update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="coderumed_id" id="e_id" value="">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nombre del paquete</label>
                                    <input class="form-control" type="text" name="name_coderumed"
                                        id="e_name_coderumed" value="" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>AREA</label>
                                <input class="form-control" type="text" name="area" id="e_area"
                                    value="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Categoria</label>
                                <input class="form-control" type="text" name="category" id="e_category"
                                    value="" />


                            </div>

                        </div>
                        <br>

                        <br>
                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">ACTUALIZAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="edit_coderumed" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar paquete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('coderumed/update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nombre del paquete</label>
                                    <input class="form-control" type="text" name="name_coderumed"
                                        id="e_name_coderumed" value="" />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label>CODIGO RUMED</label>
                                <input class="form-control" type="text" name="coderumed_id" id="e_coderumed_id"
                                    value="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>AREA DEL PAQUETE</label>
                                    <input class="form-control" type="text" name="area" id="e_area"
                                        value="" />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label>CATEGORIA DEL PAQUETE</label>
                                <input class="form-control" type="text" name="category" id="e_category"
                                    value="" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>DETALLES DEL PAQUETE</label>
                                    <input class="form-control" type="text" name="detalls" id="e_detalls"
                                        value="" />
                                </div>
                            </div>


                        </div>



                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">ACTUALIZAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete User Modal -->
    <div class="modal custom-modal fade" id="delete_coderumed" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>ELIMINAR PAQUETE</h3>
                        <p>Estas seguro de Eliminar?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="{{ route('coderumed/delete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" class="e_id" value="">

                            <div class="row">
                                <div class="col-6">
                                    <button type="submit"
                                        class="btn btn-primary continue-btn submit-btn">Eliminar</button>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal"
                                        class="btn btn-primary cancel-btn">CANCELAR</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete User Modal -->
    </div>
    <!-- /Page Wrapper -->
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            table = $('#coderumedDataList').DataTable({

                lengthMenu: [
                    [10, 25, 50, 100, 150],
                    [10, 25, 50, 100, 150]
                ],
                buttons: [
                    'pageLength',
                ],
                "pageLength": 10,
                order: [
                    [5, 'desc']
                ],
                processing: true,
                serverSide: true,
                ordering: true,
                searching: true,
                ajax: {
                    url: "{{ route('get-coderumed-data') }}",
                    data: function(data) {
                        // read valus for search
                        var name_coderumed = $('#name_coderumed').val();
                        var coderumed_id = $('#coderumed_id').val();
                        data.name_coderumed = name_coderumed;
                        data.coderumed_id = coderumed_id;
                    }
                },

                columns: [{
                        data: 'no',
                        name: 'no',
                    },
                    {
                        data: 'coderumed_id',
                        name: 'coderumed_id',
                    },
                    {
                        data: 'name_coderumed',
                        name: 'name_coderumed',
                    },
                    {
                        data: 'area',
                        name: 'area',
                    },
                    {
                        data: 'category',
                        name: 'category',
                    },

                    {
                        data: 'join_date_coderumed',
                        name: 'join_date_coderumed',
                    },
                    {
                        data: 'detalls',
                        name: 'detalls',
                    },
                    {
                        data: 'action',
                        name: 'action',
                    },
                ]
            });
            $('.btn_search').on('click', function() {
                table.draw();
            });
        });
    </script>

    {{-- update js --}}
    <script>
        $(document).on('click', '.coderumedUpdate', function() {
            var _this = $(this).parents('tr');
            $('#e_coderumed_id').val(_this.find('.coderumed_id').text());
            $('#e_name_coderumed').val(_this.find('.name_coderumed').text());
            $('#e_area').val(_this.find('.area').text());
            $('#e_category').val(_this.find('.category').text());
            $('#e_detalls').val(_this.find('.detalls').text());

        });
    </script>

    {{-- delete js --}}
    <script>
        $(document).on('click', '.coderumedDelete', function() {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.coderumed_id').data('coderumed_id'));
            $('#e_name_coderumed').val(_this.find('.name_coderumed').data('name_coderumed'));
        });
    </script>
@endsection

@endsection
