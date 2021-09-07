@extends('layout')
@section('title' , 'Usuario')
@section('h1' , 'Usuario')
@section('Contenido')

<a href=" {{route('usuario.formUsuario')}} " class="btn btn-primary">Nuevo Usuario</a>


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Tipo Documento</th>
            <th>Numero de Documento</th>
            <th>Tipo de Sangre</th>
            <th>Telefono</th>
            <th>Fecha de Nacimiento</th>
            <th>Estado</th>
            <th>Sexo</th>
            <th>Direccion</th>
            <th>Jornada</th>
            <th>Rol</th>
            <th>Cargo</th>
            <th>Fecha de Ingreso a la Empresa</th>
            <th>Tipo vinculacion</th>
            <th>afp</th>
            <th>Municipio</th>
            <th>arp</th>
            <th>eps</th>





        </tr>
    </thead>
    <tbody>


            <tr>

                <td>{{$infoUsuario->nombre}}</td>
                <td>{{$infoUsuario->apellido}}</td>
                <td>{{$infoUsuario->tipoDocumento_id->nombreTipoDocumento}}</td>
                <td>{{$infoUsuario->numeroDocumento}}</td>
                <td>{{$infoUsuario->sangre}}</td>
                <td>{{$infoUsuario->telefono}}</td>
                <td>{{$infoUsuario->estado}}</td>
                <td>{{$infoUsuario->sexo}}</td>
                <td>{{$infoUsuario->direccion}}</td>
                <td>{{$infoUsuario->jornada}}</td>
                <td>@foreach ($infoUsuario->rol as $rols)
                   {{ $rols->denominacionRol }}
                @endforeach </td>
                <td>@foreach ($infoUsuario->cargo as $cargos)
                    {{ $cargos->denominacionCargo }}
                 @endforeach </td>
                <td>{{$infoUsuario->fechaIngreso}}</td>
                <td>{{$infoUsuario->vinculacion}}</td>
                <td>@foreach ($infoUsuario->afp as $afps)
                    {{ $afps->denominacionAFP }}
                 @endforeach </td>
                 <td>@foreach ($infoUsuario->municipio as $municipios)
                    {{ $municipios->denominacionMunicipio }}
                 @endforeach </td>
                 <td>@foreach ($infoUsuario->arp as $arps)
                    {{ $arps->denominacionARP }}
                 @endforeach </td>
                 <td>@foreach ($infoUsuario->eps as $epss)
                    {{ $epss->denominacionEPS }}
                 @endforeach </td>
                <td>
                     <a href="{{ route('accidente.formAccidente', ['id'=> $infoAccidente->id]) }}" class="btn btn-warning">Editar</a>
                   {{--  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> --}}
                </td>
            </tr>

</table>


@endsection
