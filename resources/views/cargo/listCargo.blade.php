
@extends('layout')
@section('title' , 'Cargo')
@section('h1' , 'Cargo')
@section('Contenido')

<a href="  {{route('cargo.formCargo')}}  " class="btn btn-primary">Nuevo Cargo</a>


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nivel de Riesgo</th>
            <th>Nombre Cargo</th>
            <th>Estado</th>
            <th>Salario</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $listCargo as $cargo )
            <tr>
                <td>{{$cargo->nivelRiesgo}}</td>
                <td>{{$cargo->nombreCargo}}</td>
                <td>{{$cargo->estado}}</td>
                <td>{{$cargo->salario}}</td>

                <td>
                  <a href="{{ route('cargo.formCargo', ['id'=> $cargo->id]) }}" class="btn btn-warning">Editar</a>
                {{--     <a href="{{ route('sitio.delete' , ['id'=> $sitio->id]) }}" class="btn btn-danger">Borrar</a>  --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
