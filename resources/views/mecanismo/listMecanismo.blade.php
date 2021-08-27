@extends('layout')
@section('title' , 'Mecanismo')
@section('h1' , 'Mecanismo')
@section('content')

<a href=" {{route('mecanismo.formMecanismo')}} " class="btn btn-primary">Nuevo Mecanismo</a>


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Denominacion Mecanismo</th>
            <th>Acciones</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $listMecanismo as $mecanismo )
            <tr>
                <td>{{$mecanismo->denominacionMecanismo}}</td>
                <td>
                     <a href="{{ route('mecanismo.formMecanismo', ['id'=> $mecanismo->id]) }}" class="btn btn-warning">Editar</a>
                   {{--  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

