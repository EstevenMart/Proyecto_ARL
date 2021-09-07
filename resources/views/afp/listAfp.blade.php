
@extends('layout')
@section('title' , 'AFP')
@section('h1' , 'AFP')
@section('Contenido')

<a href="  {{route('afp.formAfp')}}  " class="btn btn-primary">Nuevo Afp</a>


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Afp</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $listAfp as $afp )
            <tr>
                <td>{{$afp->denominacionAfp}}</td>

                <td>
                  <a href="{{ route('afp.formAfp', ['id'=> $afp->id]) }}" class="btn btn-warning">Editar</a>
                {{--     <a href="{{ route('sitio.delete' , ['id'=> $sitio->id]) }}" class="btn btn-danger">Borrar</a>  --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
