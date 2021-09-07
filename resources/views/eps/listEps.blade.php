
@extends('layout')
@section('title' , 'eps')
@section('h1' , 'eps')
@section('Contenido')

<a href="  {{route('eps.formEps')}}  " class="btn btn-primary">Nuevo eps</a>


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>eps</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $listEps as $eps )
            <tr>
                <td>{{$eps->denominacionEps}}</td>

                <td>
                  <a href="{{ route('eps.formEps', ['id'=> $eps->id]) }}" class="btn btn-warning">Editar</a>
                {{--     <a href="{{ route('sitio.delete' , ['id'=> $sitio->id]) }}" class="btn btn-danger">Borrar</a>  --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
