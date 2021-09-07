@extends('layout')
@section('title' , 'otraPersona')
@section('h1' , 'otraPersona')
@section('Contenido')

<a href=" {{route('otraPersona.formOtrasPersona')}} " class="btn btn-primary">Nuevo Sitio</a>


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>tipoDocumento</th>
            <th>numeroDocumento</th>
            <th>cargo</th>
            <th>accidente_id</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $listOtraPersona as $otraPersona )
            <tr>
                <td>{{$otraPersona->tipoDocumento}}</td>
                <td>{{$otraPersona->numeroDocumento}}</td>
                <td>{{$otraPersona->cargo}}</td>
                <td>{{$otraPersona->accidente_id}}</td>

                <td>
                  <a href="{{ route('otraPersona.formOtrasPersona', ['id'=> $otraPersona->id]) }}" class="btn btn-warning">Editar</a>
                {{--     <a href="{{ route('sitio.delete' , ['id'=> $sitio->id]) }}" class="btn btn-danger">Borrar</a>  --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
