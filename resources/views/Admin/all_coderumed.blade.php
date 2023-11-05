@extends('layouts.admin_master')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        BASE DE DATOS RUMED
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE</th>
                        <th>AREA</th>
                        <th>CATEGORIA</th>
                        <th>DETALLES</th>
                        <th>ACCION</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($coderumed as $row)
                    <tr>
                        <td>{{ $row->product_code }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->area }}</td>
                        <td>{{ $row->category }}</td>
                        <td>{{ $row->detalls }}</td>
                        <td>
                        	<a href="#" class="btn btn-sm btn-info">EDITAR</a>
                            <a href="#" class="btn btn-sm btn-danger">BORRAR</a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        
<script>
$('#dataTable').DataTable({
    columnDefs: [
    {bSortable: false, targets: [5]} 
  ],
                dom: 'lBfrtip',
           buttons: [
               {
                   extend: 'copyHtml5',
                   exportOptions: {
                    modifier: {
                        page: 'current'
                    },
                       columns: [ 0, ':visible' ]
                       
                   }
               },
               {
                   extend: 'excelHtml5',
                   exportOptions: {
                    modifier: {
                        page: 'current'
                    },
                    columns: [ 0, ':visible' ]
                   }
               },
               {
                   extend: 'pdfHtml5',
                   exportOptions: {
                    modifier: {
                        page: 'current'
                    },
                       columns: [ 0, 1, 2, 5 ]
                   }
               },
               'colvis'
           ]
           });
       </script>
@endsection