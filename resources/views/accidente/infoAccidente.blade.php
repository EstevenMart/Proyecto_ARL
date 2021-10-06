@extends('layout')
@section('title' , 'Accidentes')
@section('h1' , 'Accidentes')
@section('Contenido')

{{-- <a href=" {{route('accidente.editAccidente')}} " class="btn btn-primary">Nuevo Accidente</a> --}}


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
                     <a href="{{ route('accidente.editAccidente', ['id'=> $infoAccidente->id]) }}" class="btn btn-warning">Editar</a>
                   {{--  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> --}}
                </td>
            </tr>

</table>
<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Grid Rows</h5>
        <form class="">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Tipo Accidente</label><input class="form-control" type="text" value="{{$infoAccidente->tipoaccidente}}" aria-label="readonly input example" readonly></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="examplePassword11" class="">Fecha Hora</label><input class="form-control" type="text" value="{{$infoAccidente->fechaHora}}" aria-label="readonly input example" readonly></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="exampleCity" class="">Labor Habitual</label><input class="form-control" type="text" value="{{$infoAccidente->laborHabitual}}" aria-label="readonly input example" readonly></div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group"><label for="exampleState" class="">Dia</label><input class="form-control" type="text" value="{{$infoAccidente->dia}}" aria-label="readonly input example" readonly></div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group"><label for="exampleZip" class="">Jornada</label><input class="form-control" type="text" value="{{$infoAccidente->jornada}}" aria-label="readonly input example" readonly></div>
                </div>
            </div>
            <div class="position-relative form-group"><label for="exampleAddress" class="">Dia</label><input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
            <div class="position-relative form-group"><label for="exampleAddress2" class="">Jornada</label><input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group"><label for="exampleCity" class="">Labor Habitual</label><input class="form-control" type="text" value="{{$infoAccidente->fechaHora}}" aria-label="readonly input example" readonly></div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group"><label for="exampleState" class="">Tiempo PA</label><input class="form-control" type="text" value="{{$infoAccidente->fechaHora}}" aria-label="readonly input example" readonly></div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group"><label for="exampleZip" class="">Cantidad de Horas</label><input class="form-control" type="text" value="{{$infoAccidente->fechaHora}}" aria-label="readonly input example" readonly></div>
                </div>
            </div>
            <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me out</label></div>
            <button class="mt-2 btn btn-primary">Sign in</button>
        </form>
    </div>
</div>


@endsection
