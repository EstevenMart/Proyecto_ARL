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
                <td>  <a href="{{route('accidente.editAccidente', ['id'=> $accidente->id])}}"> {{$accidente->tipoaccidente}} </a> </td>
                <td>  <a href="{{route('sitio.formSitio', ['id'=> $accidente->id])}}">{{$accidente->fechaHora}}</a> </td>
                <td>  <a href="{{route('accidente.findAccidente', ['id'=> $accidente->id])}}">{{$accidente->sitio_id}}</a> </td>
                <td>  <a href="{{route('accidente.findAccidente', ['id'=> $accidente->id])}}"> {{$accidente->descripcion}}</a></td>

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
