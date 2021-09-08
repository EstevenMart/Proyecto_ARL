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
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Tipo Documento</th>
            <th>Numero de Documento</th>
            <th>Tipo de Sangre</th>
            <th>Telefono</th>
            <th>Fecha de Nacimiento</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Sexo</th>
            <th>Direccion</th>
            <th>Jornada</th>
            <th>Rol</th>
            <th>Cargo</th>
            <th>Fecha de Ingreso a la Empresa</th>
            <th>Tipo vinculacion</th>
            <th>afp</th>
            <th>Municipio</th>
            <th>arp</th>
            <th>eps</th>





        </tr>
    </thead>
    <tbody>

        @foreach ( $listUsuario as $usuario )
            <tr>
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->apellido}}</td>
                <td>{{$usuario->tipo_documento->nombreTipoDocumento}}</td>
                <td>{{$usuario->numeroDocumento}}</td>
                <td>{{$usuario->sangre}}</td>
                <td>{{$usuario->telefono}}</td>
                <td>{{$usuario->fechaNacimiento}}</td>
                <td>{{$usuario->user->email}}</td>
                <td>{{$usuario->estado}}</td>
                <td>{{$usuario->sexo}}</td>
                <td>{{$usuario->direccion}}</td>
                <td>{{$usuario->jornada}}</td>
                <td>{{$usuario->rol->nombreRol}} </td>
                <td>{{$usuario->cargo_id}}</td>
                <td>{{$usuario->fechaIngreso}}</td>
                <td>{{$usuario->vinculacion}}</td>
                <td>{{$usuario->afp->denominacionAfp}}</td>
                <td>{{$usuario->municipios->denominacionMunicipio;}}</td>
                 <td>{{$usuario->arp->denominacionArp}}</td>
                 <td>{{$usuario->eps->denominacionEps}}</td>
                <td>
                     <a href="{{ route('usuario.formUsuario', ['id'=> $usuario->id]) }}" class="btn btn-warning">Editar</a>
                   {{--  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> --}}
                </td>
            </tr>
        @endforeach
</table>


@endsection
