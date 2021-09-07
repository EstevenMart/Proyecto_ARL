@extends('layout')
@section('title' , 'Sitio')
@section('h1' , 'Sitio')
@section('Contenido')

<a href=" {{route('sitio.formSitio')}} " class="btn btn-primary">Nuevo Sitio</a>


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Parte del Cuerpo</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $listSitio as $sitio )
            <tr>
                <td>{{$sitio->denominacionSitio}}</td>

                <td>
                  <a href="{{ route('sitio.formSitio', ['id'=> $sitio->id]) }}" class="btn btn-warning">Editar</a>
                {{--     <a href="{{ route('sitio.delete' , ['id'=> $sitio->id]) }}" class="btn btn-danger">Borrar</a>  --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
