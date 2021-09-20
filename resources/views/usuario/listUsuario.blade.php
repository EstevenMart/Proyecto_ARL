@extends('layout')
@section('title' , 'Usuario')
@section('h1' , 'Usuario')
@section('Contenido')

{{-- <a href=" {{route('usuario.formUsuario')}} " class="btn btn-primary">Nuevo Usuario</a> --}}


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Tipo Documento</th>
            <th>Numero de Documento</th>
            <th>Telefono</th>
            <th>Correo</th>


            <th>Ver más</th>
            <th>Acciones</th>



        </tr>
    </thead>
    <tbody>

        @foreach ( $listUsuario as $usuario )
            <tr>
                <td><img src="{{asset($usuario->imagen) }}" alt="perfil" class="imagen_perfil" ></td>
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->tipo_documento->nombreTipoDocumento}}</td>
                <td>{{$usuario->numeroDocumento}}</td>
                <td>{{$usuario->telefono}}</td>
                <td>{{$usuario->correo}}</td>


                <td>  <a href="{{route('usuario.findUsuario', ['id'=> $usuario->id])}}">  <i class="fas fa-search"></i> </a></td>
                <td>
                     <a href="{{ route('usuario.formUsuario', ['id'=> $usuario->id]) }}" class="btn btn-warning">Editar</a>
                   {{--  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> --}}
                </td>
            </tr>
        @endforeach
</table>


@endsection