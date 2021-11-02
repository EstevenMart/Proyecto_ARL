
@extends('layout')
@section('title' , 'departamento')
@section('h1' , 'departamento')
@section('Contenido')

<a href="  {{route('departamento.formDepartamento')}}  " class="btn btn-primary">Nuevo departamento</a>


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>departamento</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $listDepartamento as $departamento )
            <tr>
                <td>{{$departamento->denominacionDepartamento}}</td>

                <td>
                  <a href="{{ route('departamento.formDepartamento', ['id'=> $departamento->id]) }}" class="btn btn-warning">Editar</a>
                {{--     <a href="{{ route('sitio.delete' , ['id'=> $sitio->id]) }}" class="btn btn-danger">Borrar</a>  --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
