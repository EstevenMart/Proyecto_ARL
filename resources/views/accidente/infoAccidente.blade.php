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

{{-- <table class="table table-striped table-hover">
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
                  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> 
                </td>
            </tr>

</table> --}}
<div class="main-card mb-3 card">
    <div class="card-body">
        <form class="">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"> <div class="section-title mt-0">Tipo Accidente</div><input class="form-control" type="text" value="{{$infoAccidente->tipoaccidente}}" aria-label="readonly input example" readonly></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"> <div class="section-title mt-0">Fecha Hora</div><input class="form-control" type="text" value="{{$infoAccidente->fechaHora}}" aria-label="readonly input example" readonly></div>
                </div>
            </div>
            <div class="form-row">  
                 <div class="col-md-3">
                    <div class="position-relative form-group"><div class="section-title mt-0">Dia</div><input class="form-control" type="text" value="{{$infoAccidente->dia}}" aria-label="readonly input example" readonly></div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group"><div class="section-title mt-0">Jornada</div><input class="form-control" type="text" value="{{$infoAccidente->jornada}}" aria-label="readonly input example" readonly></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><div class="section-title mt-0">Labor Habitual</div><input class="form-control" type="text" value="{{$infoAccidente->laborHabitual}}" aria-label="readonly input example" readonly></div>
                </div>
             
            </div>
            <div class="form-row">
                
                <div class="col-md-6">
                    <div class="position-relative form-group"><div class="section-title mt-0">Mecanismo</div><input class="form-control" type="text" value="{{$infoAccidente->mecanismo->denominacionMecanismo}}" aria-label="readonly input example" readonly></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><div class="section-title mt-0">Agente Accidente</div><input class="form-control" type="text" value="{{$infoAccidente->agente->denominacionAgente}}" aria-label="readonly input example" readonly></div>
                </div>
                
            </div>
   
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><div class="section-title mt-0">Tiempo Previo al accidente</div><input class="form-control" type="text" value="{{$infoAccidente->tiempoPA}}" aria-label="readonly input example" readonly></div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group"><div class="section-title mt-0"> Horas</div><input class="form-control" type="text" value="{{$infoAccidente->cantHoras}}" aria-label="readonly input example" readonly></div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative form-group"><div class="section-title mt-0"> Minuto</div><input class="form-control" type="text" value="{{$infoAccidente->cantMinutos}}" aria-label="readonly input example" readonly></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><div class="section-title mt-0">Sitio</div><input class="form-control" type="text" value="{{$infoAccidente->sitio->denominacionSitio}}" aria-label="readonly input example" readonly></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><div class="section-title mt-0">Empresa</div><input class="form-control" type="text" value="{{$infoAccidente->empresa}}" aria-label="readonly input example" readonly></div>
                </div>
            </div>
            <div class="position-relative form-group"><div class="section-title mt-0">Descripcion</div>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"style="height: 70px;" readonly>{{$infoAccidente->descripcion}}</textarea></div>
                
            <div class="form-row">
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="section-title mt-0">parte cuerpo</div>
                            @foreach ($partes_cuerpo as $id=> $partes_cuerpo)

                            <div class="form-check form-check-inline">
                                <label class="label2 ">
                                    <input class="form-check-input " type="checkbox" name="denominacionParteCuerpo[]"
                                    value="{{$id}}" {{$infoAccidente->partes_cuerpo->contains($id)? "checked": "" }} disabled   >
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
              
                            {{$partes_cuerpo}}
                             <br>
              
                             @endforeach
                          </div>
                          
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="section-title mt-0">Lesion</div>
                            @foreach ($lesions as $id=> $lesions)

                            <div class="form-check form-check-inline">
                                <label class="label2"color="#000">
                                    <input class="form-check-input"  type="checkbox" name="denominacionTipoLesion[]"
                                    value="{{$id}}" {{$infoAccidente->lesions->contains($id)? "checked": "" }}  >
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
              
                            {{$lesions}}
                             <br>
              
                             @endforeach
                          </div>
                          

                          
                      
                          
                    </div>
            </div>
            
            <button class="mt-2 btn btn-primary">Sign in</button>
        </form>
    </div>
</div>


@endsection
@section('JS')
<script src="{{ asset('/js/components-table.js') }}"></script>
@endsection