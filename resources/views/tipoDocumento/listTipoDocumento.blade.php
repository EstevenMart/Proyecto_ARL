
@extends('layout')
@section('title' , 'Tipo de Documento')
@section('h1' , 'Tipo de Documento')
@section('Contenido')

<a href="  {{route('tipoDocumento.formTipoDocumento')}}  " class="btn btn-primary">Nuevo Tipo de Documento</a>


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Tipo de Documento</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $listTipoDocumento as $tipoDocumento )
            <tr>
                <td>{{$tipoDocumento->nombreTipoDocumento}}</td>

                <td>
                  <a href="{{ route('tipoDocumento.formTipoDocumento', ['id'=> $tipoDocumento->id]) }}" class="btn btn-warning">Editar</a>
                {{--     <a href="{{ route('sitio.delete' , ['id'=> $sitio->id]) }}" class="btn btn-danger">Borrar</a>  --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
