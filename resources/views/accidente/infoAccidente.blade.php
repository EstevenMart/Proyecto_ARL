@extends('layout')
@section('title' , 'Accidentes')
@section('h1' , 'Accidentes')
@section('content')

<a href=" {{route('accidente.formAccidente')}} " class="btn btn-primary">Nuevo Accidente</a>


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr>
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
            <th>Mecanismo</th>
            <th>Agente Accidente</th>
            <th>Sitio</th>
            <th>parte cuerpo</th>
            <th>Tipo Lesion</th>
            <th>Acciones</th>

            
        </tr>
    </thead>
    <tbody>
        
       
            <tr>
                
                <td>{{$infoAccidente->tipoaccidente}}</td>
                <td>{{$infoAccidente->fechaHora}}</td>
                <td>{{$infoAccidente->dia}}</td>
                <td>{{$infoAccidente->jornada}}</td>
                <td>{{$infoAccidente->laborHabitual}}</td>
                <td>{{$infoAccidente->tiempoPA}}</td>
                <td>{{$infoAccidente->cantHoras}}</td>
                <td>{{$infoAccidente->cantMinutos}}</td>
                <td>{{$infoAccidente->empresa}}</td>
                <td>{{$infoAccidente->causaMuerte}}</td>
                <td>{{$infoAccidente->descripcion}}</td>
                <td>{{$infoAccidente->mecanismo->denominacionMecanismo}}</td>
                <td>{{$infoAccidente->agente->denominacionAgente}}</td>
                <td>{{$infoAccidente->sitio->denominacionSitio}}</td>
                <td>@foreach ($infoAccidente->partes_cuerpo as $parte_cuerpo)
                   {{ $parte_cuerpo->denominacionParteCuerpo }} 
                @endforeach </td>
                <td>@foreach ($infoAccidente->lesions as $lesions)
                    {{ $lesions->denominacionTipoLesion }} 
                 @endforeach </td>

               
                <td>
                     <a href="{{ route('accidente.formAccidente', ['id'=> $infoAccidente->id]) }}" class="btn btn-warning">Editar</a> 
                   {{--  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> --}}
                </td>
            </tr>
         
</table>


@endsection
