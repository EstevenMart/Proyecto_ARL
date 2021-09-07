
@extends('layout')
@section('title' , 'ARP')
@section('h1' , 'ARP')
@section('Contenido')

<a href="  {{route('arp.formArp')}}  " class="btn btn-primary">Nuevo Arp</a>


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Arp</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $listArp as $arp )
            <tr>
                <td>{{$arp->denominacionArp}}</td>

                <td>
                  <a href="{{ route('arp.formArp', ['id'=> $arp->id]) }}" class="btn btn-warning">Editar</a>
                {{--     <a href="{{ route('sitio.delete' , ['id'=> $sitio->id]) }}" class="btn btn-danger">Borrar</a>  --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
