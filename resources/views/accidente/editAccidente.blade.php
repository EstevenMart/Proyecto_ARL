@extends('layout')
@section('title' , 'Editar accidente')
@section('h1' , 'Editar accidente')

@section('CSS')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
@endsection

@section('Contenido')
<form action="{{ route('accidente.updateAccidente', $accidente->id ) }}" method="POST" >
    @csrf
@method('put')

<div class="row">
    <input type="hidden" name="id" >
    <div class="col-12">
        <div class="card">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card-body">
                            <div class="form-group">
                                <div class="section-title mt-0">Usuario del accidente</div>
                                <div class="input-group">
                                    <select class=" custom-select @error('name[]') is-invalid @enderror " name="name[]" >
                                        <option value="">Seleccione...</option>
                                       @foreach ($usuario as $id=> $usuario)
                                        <option value="{{$id}}" {{ $id ? "selected" : ""}} {{ old('name') == $id ? 'selected' : '' }} >
                                       {{$usuario}} </option>
                                        
                                        @endforeach
                                        </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                  
                               @error('name[]')
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
                        <div class="form-group" id="simple-date3">
                            <div class="section-title mt-0">Fecha del accidente</div>
                              <div class="input-group date">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                </div>
                                <input type="text" id="decadeView"  class="form-control @error('fechaHora') is-invalid @enderror"  name='fechaHora'  value="{{  $accidente->fechaHora}}" autocomplete="off" >
                              </div>
                              @error('fechaHora')
                              <div class="text-danger">
                                  {{ $message }}
                              </div>
                                  @enderror
                          </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    
                    <div class="card-body">
                            <div class="form-group">
                                <div class="section-title mt-0">Dia de la semana que ocurrio el accidente</div>
                                <div class="input-group">
                                    <select class="custom-select @error('dia') is-invalid @enderror " name="dia" id="dia" >
                                        <option value="{{  $accidente->dia}}">{{  $accidente->dia}}</option>
                                        <option value="Lunes"@if (old('dia') == "Lunes") {{ 'selected' }} @endif>Lunes</option>
                                        <option value="Martes"@if (old('dia') == "Martes") {{ 'selected' }} @endif>Martes</option>
                                        <option value="Miercoles"@if (old('dia') == "Miercoles") {{ 'selected' }} @endif>Miercoles</option>
                                        <option value="Jueves" @if (old('dia') == "Jueves") {{ 'selected' }} @endif>Jueves</option>
                                        <option value="Viernes" @if (old('dia') == "Viernes") {{ 'selected' }} @endif>Viernes</option>
                                        <option value="Sabado" @if (old('dia') == "Sabado") {{ 'selected' }} @endif>Sabado</option>
                                    </select>
                                    
                                  </div>
                                @error('dia')
                                <div class="text-danger">
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
                                <input class="form-check-input jornada" type="radio" name="jornada"  value="Extra"  {{ $accidente->jornada == 'Extra' ? 'checked' : ''}}>
                                <label class="form-check-label" >Extra</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jornada" value="Normal" {{ $accidente->jornada == 'Normal' ? 'checked' : ''}}>
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
                                <input class="form-check-input" type="radio" name="laborHabitual"  value="No" {{ $accidente->laborHabitual == 'No' ? 'checked' : ''}} >
                                <label class="form-check-label" >No</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="laborHabitual" value="Si" {{ $accidente->laborHabitual == 'Si' ? 'checked' : ''}} >
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
                                <input type="number" class="form-control @error('tiempoPA') is-invalid @enderror" id="tiempoPA" name='tiempoPA'  value="{{  $accidente->tiempoPA}}">
                                @error('tiempoPA')
                                <div class="text-danger">
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
                                <input type="number" class="form-control @error('cantHoras') is-invalid @enderror" id="cantHoras" name='cantHoras' value="{{ $accidente->cantHoras}}">
                                @error('cantHoras')
                                <div class="text-danger">
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
                                <input type="number" class="form-control @error('cantMinutos') is-invalid @enderror" id="cantMinutos" name='cantMinutos' value="{{ $accidente->cantMinutos}}">
                                @error('cantMinutos')
                                <div class="text-danger">
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
                                    <select class="custom-select @error('tipoaccidente') is-invalid @enderror " name="tipoaccidente" id="tipoaccidente" value="{{ $accidente->tipoaccidente}}" >
                                        <option selected value="{{ $accidente->tipoaccidente}}">{{ $accidente->tipoaccidente}}</option>
                                        <option value="Violencia" @if (old('tipoaccidente') == "Violencia") {{ 'selected' }} @endif>Violencia</option>
                                        <option value="Transito" @if (old('tipoaccidente') == "Transito") {{ 'selected' }} @endif>Tránsito</option>
                                        <option value="Deportivo" @if (old('tipoaccidente') == "Deportivo") {{ 'selected' }} @endif>Deportivo</option>
                                        <option value="Recreativo o cultural" @if (old('tipoaccidente') == "Recreativo o cultural") {{ 'selected' }} @endif>Recreativo o cultural</option>
                                        <option value="Propios del trabajo" @if (old('tipoaccidente') == "Propios del trabajo") {{ 'selected' }} @endif>Propios del trabajo</option>
                                    </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                @error('tipoaccidente')
                                <div class="text-danger">
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
                                <input class="form-check-input" type="radio" name="causaMuerte"   value="No"  {{ $accidente->causaMuerte == 'No' ? 'checked' : ''}}  >
                                <label class="form-check-label" >No</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="causaMuerte"  value="Si" {{ $accidente->causaMuerte == 'Si' ? 'checked' : ''}} >
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
                                    <select class=" custom-select @error('sitio_id') is-invalid @enderror " name="sitio_id" >
                                        
                                       @foreach ($sitios as $sitio)
                                        <option value="{{$sitio->id}}" {{$sitio->id == $accidente->sitio_id ? "selected" : ""}} {{ old('sitio_id') == $sitio->id ? 'selected' : '' }}>
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
                                       
                                       @foreach ($agentes as $agente)
                                        <option value="{{$agente->id}}" {{$agente->id == $accidente->agente_id ? "selected" : ""}}{{ old('agente_id') == $agente->id ? 'selected' : '' }}>
                                        {{$agente->denominacionAgente}}  </option>
                                        @endforeach
                                        </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                @error('agente_id')
                                <div class="text-danger">
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
                                    <select class=" custom-select  @error('sitio_id') is-invalid @enderror" name="mecanismo_id" >
                                       
                                       @foreach ($mecanismos as $mecanismo)
                                        <option value="{{$mecanismo->id}}" {{$mecanismo->id == $accidente->mecanismo_id ? "selected" : ""}} {{ old('mecanismo_id') == $mecanismo->id ? 'selected' : '' }}>
                                        {{$mecanismo->denominacionMecanismo}}</option>
                                        @endforeach
                                        </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                @error('mecanismo_id')
                                <div class="text-danger">
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
                                <input type="text" id="empresa" class="form-control @error('empresa') is-invalid @enderror" name='empresa'  value="{{  $accidente->empresa}}">
                           
                            </div>
                             @error('empresa')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">  
                        <div class="card-body">
                            <div class="form-group mb-0">
                                <div class="section-title mt-0">Descripcion</div>
                                <textarea  class="form-control  @error('descripcion') is-invalid @enderror"   name='descripcion' style="max-height: 100px; min-height:100px"  >{{$accidente->descripcion}}</textarea>
                                @error('descripcion')
                                <div class="text-danger">
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
                                            value="{{$id}}" {{$accidente->lesions->contains($id)? "checked": "" }} >
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
                                            value="{{$id}}" {{$accidente->partes_cuerpo->contains($id)? "checked": "" }}  >
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                  
                                {{$partes_cuerpo}}
                                 <br>
                  
                                 @endforeach
                              </div>
                              @error('denominacionParteCuerpo[]')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
               
                
                <div class="mb-3 row">
                    <div class="col-sm-9"></div>
                    <div class="col-sm-3">
                        <a href="/accidentes" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
                   
            
              
            
            </form>
            </div>
        </div>
    </div>


@endsection

@section('JS')
 {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 

<script>
    $(document).ready(function () {


      $('.select2-single').select2();

      // Select2 Single  with Placeholder
      $('.select2-single-placeholder').select2({
        placeholder: "Select a Province",
        allowClear: true
      });      

      // Select2 Multiple
      $('.select2-multiple').select2();

      // Bootstrap Date Picker
      $('#simple-date1 .input-group.date').datepicker({
        format: 'dd/mm/yyyy',
        todayBtn: 'linked',
        todayHighlight: true,
        autoclose: true,        
      });

      $('#simple-date2 .input-group.date').datepicker({
        startView: 1,
        format: 'dd/mm/yyyy',        
        autoclose: true,     
        todayHighlight: true,   
        todayBtn: 'linked',
      });

      $('#simple-date3 .input-group.date').datepicker({
        startView: 2,
        format: 'dd/mm/yyyy',        
        autoclose: true,     
        todayHighlight: true,   
        todayBtn: 'linked',
      });

      $('#simple-date4 .input-daterange').datepicker({        
        format: 'dd/mm/yyyy',        
        autoclose: true,     
        todayHighlight: true,   
        todayBtn: 'linked',
      });    

      // TouchSpin

      $('#touchSpin1').TouchSpin({
        min: 0,
        max: 100,                
        boostat: 5,
        maxboostedstep: 10,        
        initval: 0
      });

      $('#touchSpin2').TouchSpin({
        min:0,
        max: 100,
        decimals: 2,
        step: 0.1,
        postfix: '%',
        initval: 0,
        boostat: 5,
        maxboostedstep: 10
      });

      $('#touchSpin3').TouchSpin({
        min: 0,
        max: 100,
        initval: 0,
        boostat: 5,
        maxboostedstep: 10,
        verticalbuttons: true,
      });

      $('#clockPicker1').clockpicker({
        donetext: 'Done'
      });

      $('#clockPicker2').clockpicker({
        autoclose: true
      });

      let input = $('#clockPicker3').clockpicker({
        autoclose: true,
        'default': 'now',
        placement: 'top',
        align: 'left',
      });

      $('#check-minutes').click(function(e){        
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
      });

    });
  </script>

@endsection

