@extends('layout')
@section('title' , 'Crear accidente')
@section('h1' , 'Crear accidente')



@section('Contenido')
<form action="{{ route('accidente.store') }}" method="POST" >
    @csrf
    <div class="row">
    <input type="hidden" name="id" >
    <div class="col-12">
        <div class="card">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card-body">
                        <div class="form-group">
                         <div class="section-title mt-0">Fecha del accidente</div>
                            <div class="input-group">
                                <input type="date" class="form-control @error('fechaHora') is-invalid @enderror" id="fechaHora" name='fechaHora'>
                                @error('fechaHora')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    
                    <div class="card-body">
                            <div class="form-group">
                
                                <div class="section-title mt-0">Dia de la semana que ocurrio el accidente</div>
                                    <select class="form-control @error('dia') is-invalid @enderror select2" name="dia" value="{{ @old('dia') ? @old('dia') : $accidente->dia}}">
                                        <option value="{{  $accidente->dia}}">{{  $accidente->dia}}</option>
                                        <option value="Lunes">Lunes</option>
                                        <option value="Martes">Martes</option>
                                        <option value="Miercoles">Miercoles</option>
                                        <option value="Jueves">Jueves-</option>
                                        <option value="Viernes">Viernes</option>
                                        <option value="Sabado">Sabado</option>
                                    </select>
                                @error('dia')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                           
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card-body">
                        <div class="form-group">
                        <div class="section-title mt-0">Jornada en que sucecdio</div>
                            <br>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input jornada" type="radio" name="jornada"  value="Extra" >
                                <label class="form-check-label" >Extra</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jornada" value="Normal">
                                <label class="form-check-label" >Normal</label>
                              </div>
                              @error('jornada')
                              <p class="text-danger">
                                {{ $message }}
                            </p>
                          @enderror
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    
                    <div class="card-body">
                        <div class="form-group">
                            <div class="section-title mt-0">¿Estaba realizando la labor habitual? Si escogio no, cual fué?</div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="laborHabitual"  value="No" >
                                <label class="form-check-label" >No</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="laborHabitual" value="Si">
                                <label class="form-check-label" >Si</label>
                              </div>
                              @error('laborHabitual')
                              <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card-body">
                        <div class="form-group">
                           <div class="section-title mt-0">Tiempo Previo al Accidente</div>
                                <input type="number" class="form-control @error('tiempoPA') is-invalid @enderror" id="tiempoPA" name='tiempoPA'>
                                @error('tiempoPA')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    
                    <div class="card-body">
                        <div class="form-group">
                        <div class="section-title mt-0">Cantidad Horas</div>
                                <input type="number" class="form-control @error('cantHoras') is-invalid @enderror" id="cantHoras" name='cantHoras'>
                                @error('cantHoras')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="section-title mt-0">Cantidad Minutos</div>
                                <input type="number" class="form-control @error('cantMinutos') is-invalid @enderror" id="cantMinutos" name='cantMinutos'>
                                @error('cantMinutos')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        
                        <div class="card-body">
                            <div class="form-group">
                                <div class="section-title mt-0">Tipo Accidente</div>
                                <div class="input-group">
                                    <select class="custom-select " name="tipoaccidente" >
                                        <option selected>Seleccione...</option>
                                        <option value="Violencia">Violencia</option>
                                        <option value="Transito">Tránsito</option>
                                        <option value="Deportivo">Deportivo</option>
                                        <option value="Recreativo o cultural">Recreativo o cultural</option>
                                        <option value="Propios del trabajo">Propios del trabajo</option>
                                    </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                @error('tipoaccidente')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card-body">
                            <div class="form-group">
                            <div class="section-title mt-0">¿Causo muerte al trabajador?</div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="causaMuerte"  value="No" >
                                <label class="form-check-label" >No</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="causaMuerte" value="Si">
                                <label class="form-check-label" >Si</label>
                              </div>
                              @error('causaMuerte')
                              <p class="text-danger">
                                {{ $message }}
                            </p>
                          @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        
                        <div class="card-body">
                            <div class="form-group">
                                <div class="section-title mt-0">Sitio</div>
                                <div class="input-group">
                                    <select class=" custom-select" name="sitio_id" >
                                       <option selected>Seleccione...</option>
                                       @foreach ($sitios as $sitio)
                                        <option value="{{$sitio->id}}" {{$sitio->id == $accidente->sitio_id ? "selected" : ""}}>
                                        {{$sitio->denominacionSitio}}</option>
                                        @endforeach
                                        </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                  
                               @error('sitio_id')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card-body">
                            <div class="form-group">
                               <div class="section-title mt-0">Agente Accidente</div>
                                <div class="input-group">
                                    <select class="custom-select @error('agente_id') is-invalid @enderror " name="agente_id" >
                                       <option selected>Seleccione...</option>
                                       @foreach ($agentes as $agente)
                                        <option value="{{$agente->id}}" {{$agente->id == $accidente->agente_id ? "selected" : ""}}>
                                        {{$agente->denominacionAgente}}</option>
                                        @endforeach
                                        </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                @error('agente_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        
                        <div class="card-body">
                            <div class="form-group">
                               <div class="section-title mt-0">Mecanismo o forma de accidente</div>
                                <div class="input-group">
                                    <select class=" custom-select" name="mecanismo_id" >
                                       <option selected>Seleccione...</option>
                                       @foreach ($mecanismos as $mecanismo)
                                        <option value="{{$mecanismo->id}}" {{$mecanismo->id == $accidente->mecanismo_id ? "selected" : ""}}>
                                        {{$mecanismo->denominacionMecanismo}}</option>
                                        @endforeach
                                        </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                @error('mecanismo_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="section-title mt-0">Empresa</div>
                                <input type="text" id="empresa" class="form-control @error('Empresa') is-invalid @enderror" name='empresa'>
                                @error('Empresa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">  
                        <div class="card-body">
                            <div class="form-group mb-0">
                                <div class="section-title mt-0">Descripcion</div>
                                <textarea class="form-control @error('descripcion') is-invalid @enderror" id="descripcion" name='descripcion'></textarea>
                                @error('descripcion')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                          
                            </div>
                              
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="section-title mt-0">lesiones</div>
                                @foreach ($lesions as $id=> $lesionn)

                                <div class="form-check form-check-inline">
                                    <label class="label2">
                                        <input class="form-check-input" type="checkbox" name="denominacionTipoLesion[]"
                                            value="{{$id}}">
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                  
                                {{$lesionn}}
                                 <br>
                  
                                 @endforeach
                              </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">  
                        <div class="card-body">
                            <div class="form-group">
                                 <div class="section-title mt-0">parte cuerpo</div>
                                @foreach ($partes_cuerpo as $id=> $partes_cuerpo)

                                <div class="form-check form-check-inline">
                                    <label class="label2">
                                        <input class="form-check-input" type="checkbox" name="denominacionParteCuerpo[]"
                                            value="{{$id}}">
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
                </div>
            

                <div class="mb-3 row">
                    <div class="col-sm-9"></div>
                    <div class="col-sm-3">
                        <a href="/accidentes" class="btn btn-light">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            
            
            </form>
            </div>
        </div>
    </div>
        
@endsection
