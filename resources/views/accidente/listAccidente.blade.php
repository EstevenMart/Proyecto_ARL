@extends('layout')
@section('title' , 'Accidentes')
@section('h1' , 'Accidentes')
@section('Contenido')

{{-- <a href=" {{route('accidente.createAccidente')}} " class="btn btn-primary">Nuevo Accidente</a>
 --}}

@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif
<div class="card-body">
    <input wire:model="search" class="form-control" placeholder="ingrese lo que quieres buscar">
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Tipo Accidente</th>
            <th>Fecha Hora</th>
            <th>Sitio</th>
            <th>Descripcion</th>
            <th>Ver más</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $listAccidente as $accidente )
            <tr>
                <td>{{$accidente->tipoaccidente}}</td>
                <td>{{$accidente->fechaHora}}</td>
                <td>{{$accidente->sitio_id}}</td>
                <td>{{$accidente->descripcion}}</td>

                <td>  <a href="{{route('accidente.findAccidente', ['id'=> $accidente->id])}}">  <i class="fas fa-search"></a></i></td>
                <td>
                     <a href="{{ route('accidente.editAccidente', ['id'=> $accidente->id]) }}" class="btn btn-warning">Editar</a>
                   {{--  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
