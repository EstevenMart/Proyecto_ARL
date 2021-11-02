@extends('layout')
@section('title' , 'Agente Accidentes')
@section('h1' , 'Agente Accidentes')
@section('Contenido')

<a href=" {{route('agentAcci.formAgentAcci')}} " class="btn btn-primary">Nuevo Agente Accidentes</a>


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Denominacion Agente Accidente</th>
            <th>Acciones</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $listAgentAcci as $agentAcci )
            <tr>
                <td>{{$agentAcci->denominacionAgenteAccidente}}</td>
                <td>
                     <a href="{{ route('agentAcci.formAgentAcci', ['id'=> $agentAcci->id]) }}" class="btn btn-warning">Editar</a>
                   {{--  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
