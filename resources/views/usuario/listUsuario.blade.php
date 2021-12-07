@extends('layout')
@section('title' , 'Usuario')
@section('h1' , 'Usuario')
@section('Contenido')
@section('CSS')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

@endsection

@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif


        <div class="card card-danger">

            <div class="card-header">
                <h4>Tabla de Usuarios</h4>
                <div class="card-header-form">
                  @can('usuario_crear')
                    <a href="{{route('usuario.createUsuario')}}" class="btn btn-primary"><i class="fas fa-user-plus"></i>Nueva Usuario</a>
                  @endcan
                  @can('usuario_pdf')
                  <a href="{{ route('descargarPDFUsuario') }}" target="_blank" class="btn btn-primary" ><i class="fas fa-file-import"></i> Imprimir todos los usuarios</a>
                  @endcan
              
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">

                  <table id="search" class="table table-striped table-md"  >
                <thead>
                  <tr>
                    <th></th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Numero de documento</th>
                    @can('usuario_inactivar')
                    <th>Estado</th>
                    @endcan
                    <th>Ver más</th>
                    @can('usuario_edit')
                    <th>Acciones</th>
                    @endcan
                    @can('usuario_pdf')
                    <th>PDF</th>
                    @endcan
                </tr>
                </thead>
                <tbody>
                  @foreach ( $listUsuario as $usuario )
                  <tr>
                    <td> <div class="card profile-widget">
                      <div class="profile-widget-header">
                          <img src="{{asset($usuario->imagen) }}" alt="perfil" class="rounded-circle profile-widget-picture"  > </td>
                      </div>
              </div>
                          <td>
                      {{$usuario->name}}</div>
                      </td>
                      <td> {{$usuario->apellido}}</td>
                    <td>{{$usuario->numeroDocumento}}</td>
                    <td>
                        <form action="{{route('status',$usuario->id)}}" method="POST" >
                            @csrf
                            @if($usuario->estado === "Inactivo")
                            <button type="submit" class="badge badge-danger ">Inactivo</button>
                            @else
                            <button type="submit" class="badge badge-success ">Activo</button>
                            @endif
                        </form>
                    </td>
                  
                    <td>  <a href="{{route('usuario.findUsuario', ['id'=> $usuario->id])}}">  <i class="fas fa-search"></a></i></td>
                    @can('usuario_edit')
                      <td>
                         <a href=" {{ route('usuario.editUsuario', ['id'=> $usuario->id]) }}" class="btn btn-outline-primary" ><i class="far fa-edit"></i></a>

                    </td>
                    <td>
                      <a href=" {{ route('descargarPDFUsuario.id', ['id'=> $usuario->id]) }}" class="btn btn-outline-primary" target="_blank" ><i class="fas fa-file-import"></i></a>
                      
                 </td>
                    @endcan
                    
                    
                  
            @endforeach
                </tbody>
              </table>


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
