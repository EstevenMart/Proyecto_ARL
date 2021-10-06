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
                    <a href="{{route('usuario.createUsuario')}}" class="btn btn-primary"><i class="fas fa-user-plus"></i>Nueva Usuario</a>
              
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
                    <th>Estado</th>
                    <th></th>
        
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
                      {{$usuario->nombre}}</div>
                      </td>
                      <td> {{$usuario->apellido}}</td>
                    <td>{{$usuario->numeroDocumento}}</td>
                    <td><div class="badge badge-success">{{$usuario->estado}}</div></td>
    
                    <td> <a href="#" class="btn btn-outline-primary"><i class="fas fa-eye"></i></a></td>
                  
            @endforeach
                </tbody>
              </table>
                     

@endsection
@section('JS')
<script src="{{ asset('/js/components-table.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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
