@extends('layout')
@section('title' , 'Accidentes')
@section('h1' , 'Accidentes')
@section('Contenido')
@section('CSS')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"> 

@endsection

{{-- <a href=" {{route('accidente.createAccidente')}} " class="btn btn-primary">Nuevo Accidente</a>
 --}}

@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif
<div class="row">

<div class="col-12 col-md-12 col-lg-12">
        <div class="card card-danger">
        <div class="card-header">
            <h4>Tabla de Accidentes</h4>
            <div class="card-header-form">
            <a href="{{route('accidente.createAccidente')}}" class="btn btn-primary"><i class="fas fa-user-plus"></i>Nueva Accidente</a>
            
          </div>
          </div>
        
      <div class="card-body p-0">
        <div class="table-responsive">

          <table id="search" class="table table-striped table-md"  >
        <thead>
            <tr>
            <th>
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                  <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                </div>
              </th> 
              <th>Usuario</th>
            <th>Tipo Accidente</th>
            <th>Fecha Hora</th>         
            <th>Descripcion</th>
            <th>Ver más</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $listAccidente as $accidente )
            <tr>
                <td class="p-0 text-center">
                    <div class="custom-checkbox custom-control">
                      <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                      <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                    </div>
                  </td>
                  <td>@foreach ($accidente->user as $users)
      {{ $users->name }} {{ $users->apellido }}
   @endforeach </td>
                <td>{{$accidente->tipoaccidente}}</td>
                <td>{{$accidente->fechaHora}}</td>
               
         
    <td>{{$accidente->descripcion}}}</td>
    

                <td>  <a href="{{route('accidente.findAccidente', ['id'=> $accidente->id])}}">  <i class="fas fa-search"></a></i></td>
                <td>
                     <a href="{{ route('accidente.editAccidente', ['id'=> $accidente->id]) }}" class="btn btn-outline-primary" ><i class="far fa-edit"></i></a>
                   {{--  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    </div>
    </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
            <ul class="pagination mb-0">
                            
            </ul>
            </nav>
        </div>
    </div>
</div>
</div>
@endsection


@section('JS')
 <script src="{{ asset('/js/components-table.js') }}"></script> 
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready( function () {
  var table = $('#search').DataTable({
    language: {
      url: '//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json'
    },
  });
} );
</script>
@endsection

