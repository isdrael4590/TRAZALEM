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
                        <a href="{{ route('coderumed.store') }}" class="btn add-btn" data-toggle="modal"
                            data-target="#add_coderumed"><i class="fa fa-plus"></i> Añadir Paquetes</a>
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
                    @empty($coderumeds)
                        <p class="text-center mt-4"> Sin resultados aún </p>
                    @else
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
                                                <h2 class="">
                                                    <a ref="{{ route('coderumed.show', $coderumed->id) }}"
                                                        class="name_coderumed"> {{ $coderumed->name_coderumed }} </a>
                                                </h2>
                                            </td>
                                            <td>
                                                <span class="area"> {{ $coderumed->area }} </span>
                                            </td>
                                            <td>
                                                <span class="category"> {{ $coderumed->category }} </span>
                                            </td>
                                            <td class="sorting_1">
                                                {{ $coderumed->category }}
                                            </td>
                                            <td>
                                                <span class="detalls"> {{ $coderumed->detalls }} </span>
                                            </td>
                                            <td>
                                                <div class="dropdown dropdown-action">
                                                    <a class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="material-icons">more_vert</i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <form method="POST"
                                                            action="{{ route('coderumed.update', $coderumed->id) }}">
                                                            @csrf
                                                            @method('put')
                                                            <button class="dropdown-item" data-toggle="modal">
                                                                <i class="fa fa-trash-o m-r-5"></i> Editar entrada
                                                            </button>
                                                        </form>
                                                        <a class="dropdown-item coderumedUpdate" data-toggle="modal"
                                                            data-id="' . $record->id . '" data-target="#edit_coderumed">
                                                            <i class="fa fa-pencil m-r-5"></i> Editar entrada
                                                        </a>
                                                        <form method="POST"
                                                            action="{{ route('coderumed.destroy', $coderumed->id) }}">
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
                    @endempty

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
                        <form action="{{ route('coderumed.store') }}" method="POST" enctype="multipart/form-data">
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

                </div>
            </div>
        </div>
    </div>
    <!-- /Delete User Modal -->
    </div>
    <!-- /Page Wrapper -->


@endsection
