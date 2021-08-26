@extends('layout')
@section('title' , 'Accidentes')
@section('h1' , 'Accidentes')
@section('content')

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
            <th>Tipo Lesion</th>
            <th>Mecanismo</th>
            <th>Sitio</th>
            <th>Tipo Accidente</th>
            <th>Fecha Hora</th>
            <th>Dia</th>
            <th>Jornada</th>
            <th>Labor Habitual</th>
            <th>Tiempo PA</th>
            <th>Cantidad de Horas</th>
            <th>Cantidad de Minuto</th>
            <th>Empresa</th>
            <th>Causa de Muerte</th>
            <th>Descripcion</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $listAccidente as $accidente )
            <tr>
                <td>{{$accidente->idParteCuerpo}}</td>
                <td>{{$accidente->idTipoLesion}}</td>
                <td>{{$accidente->idMecanismo}}</td>
                <td>{{$accidente->idSitio}}</td>
                <td>{{$accidente->tipoaccidente}}</td>
                <td>{{$accidente->fechaHora}}</td>
                <td>{{$accidente->dia}}</td>
                <td>{{$accidente->jornada}}</td>
                <td>{{$accidente->laborHabitual}}</td>
                <td>{{$accidente->tiempoPA}}</td>
                <td>{{$accidente->cantHoras}}</td>
                <td>{{$accidente->cantMinutos}}</td>
                <td>{{$accidente->empresa}}</td>
                <td>{{$accidente->causaMuerte}}</td>
                <td>{{$accidente->descripcion}}</td>
                <td>
                     <a href="{{ route('accidente.form', ['idAccidente'=> $accidente->idAccidente]) }}" class="btn btn-warning">Editar</a>
                   {{--  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
