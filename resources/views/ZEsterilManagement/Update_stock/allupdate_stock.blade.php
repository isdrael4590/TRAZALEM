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
                        <h3 class="page-title"> ALMACEN ESTERIL</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Panel</a></li>
                            <li class="breadcrumb-item active">Actualización de Stock.</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a  href="{{ route('realesecycle.index') }}" class="btn add-btn" ><i
                                class="fa fa-plus"></i> Registrar paquetes en Almacén</a>
                    </div>

                </div>

            </div>
            {{-- aqui va el filtro --}}
            <div>
                <form action='{{ route('ZEsterilManagement/Update_stock') }}' method="GET">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="name_coderumed" name="name_coderumed">
                                <label class="focus-label">Equipo</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" id="lote_machine" name="lote_machine">
                                <label class="focus-label">Lote de Equipo</label>
                            </div>
                        </div>



                        <div class="col-sm-6 col-md-3">
                            <button type="submit" class="btn btn-success btn-block btn_search"> Buscar </button>
                        </div>
                    </div>
                </form>
            </div>

            {{-- aqui cierra el filtro --}}
            {{-- message --}}
            {!! Toastr::message() !!}

            <!-- /Page Header -->
            <div class="row">
                <div class="row">
                    <div class="col-md-12">
                        @empty($generatorqrs)
                            <p class="text-center mt-4"> Sin resultados aún </p>
                        @else
                            @include('ZEsterilManagement.Update_stock.update_stock-table')
                        @endempty
                    </div>
                </div>
            </div>



        </div>

        <!-- /Add package modal -->



    </div>
    <script src="{{ URL::to('assets/js/otherjs/mainrowtoqr.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#Selectcoderumed').select2();
        });
    </script>
@endsection
