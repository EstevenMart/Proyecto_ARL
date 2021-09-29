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
                            <label>Fecha del accidente</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-calendar"></i>
                                </div>
                                </div>
                                <input type="date" class="form-control" id="fechaHora" name='fechaHora'>
                                @error('fechaHora')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    
                    <div class="card-body">
                            <div class="form-group">
                                <label>dia de la semana que ocurrio el accidente</label>
                                    <select class="form-control select2" name="dia" value="{{ @old('dia') ? @old('dia') : $accidente->dia}}">
                                        <option value="{{ @old('dia') ? @old('dia') : $accidente->dia}}">{{ @old('dia') ? @old('dia') : $accidente->dia}}</option>
                                        <option value="Lunes">Lunes</option>
                                        <option value="Martes">Martes</option>
                                        <option value="Miercoles">Miercoles</option>
                                        <option value="Jueves">Jueves-</option>
                                        <option value="Viernes">Viernes</option>
                                        <option value="Sabado">Sabado</option>
                                    </select>
                                @error('dia')
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
                            <label >Jornada en que sucecdio</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="Extra" >
                                <label class="form-check-label" >Extra</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="Normal">
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
                            <label > ¿Estaba realizando la labor habitual? Si escogio no, cual fué?</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="No" >
                                <label class="form-check-label" >No</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="Si">
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
                            <label>Tiempo Previo al Accidente</label>
                                <input type="number" class="form-control" id="tiempoPA" name='tiempoPA'>
                                @error('tiempoPA')
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
                            <label>Tiempo Previo al Accidente</label>
                                <input type="number" class="form-control" id="tiempoPA" name='tiempoPA'>
                                @error('tiempoPA')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
          
    <div class="input-group">
        <select class="custom-select" id="inputGroupSelect04">
          <option selected="">Choose...</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">Button</button>
        </div>
      </div>



   
    <div class="form-group">
        <label >Jornada en que sucecdio</label>
          <select class="form-control select2" name="jornada" >
            <option selected>Seleccione....</option>
            <option value="Extra">Extra</option>
            <option value="Normal">Normal</option>
        </select>
        <div class="form-group">
            <div class="control-label">Jornada en que sucecdio</div>
            <div class="custom-switches-stacked mt-2">
              <label class="custom-switch">
                <input type="radio" name="option" value="Extra" class="custom-switch-input" checked>
                <span class="custom-switch-indicator"></span>
                <span class="custom-switch-description"  >Extra</span>
              </label>
              <label class="custom-switch">
                <input type="radio" name="option" value="Normal" class="custom-switch-input">
                <span class="custom-switch-indicator"></span>
                <span class="custom-switch-description" >Normal</span>
              </label>
            </div>
          </div>
      @error('jornada')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
    </div>
    </div>
          <label class="label1" >  ¿Estaba realizando la labor habitual? si o no. Si escogio no, cual fué?</label>
          <select name="laborHabitual" >
            <option selected>Seleccione....</option>
            <option value="No">No</option>
            <option value="Si">Si</option>
          </select>
      
      @error('laborHabitual')
      <p class="text-danger">
          {{ $message }}
      </p>
       @enderror
  
  <div class="login-box">
      <div class="user-box">
              <input type="number" class="form-control" id="tiempoPA" name='tiempoPA'>
        <label class="label"> Tiempo Previo al Accidente</label>
      </div>
      @error('tiempoPA')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror
      <div class="user-box1">
        <input type="number" id="cantHoras" name='cantHoras'>
        <label class="label">Cantidad Horas</label>
      </div>
      @error('cantHoras')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
  </div>

  <div class="login-box">

      <div class="user-box">
            <input type="number" id="cantMinutos" name='cantMinutos'>
            <label class="label">Cantidad Minutos</label>
          </div>
          @error('cantMinutos')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
         <div class="user-box1">
         <select name='tipoaccidente' >
            <option selected>Seleccione....</option>
                <option value="Violencia">Violencia</option>
                <option value="Transito">Tránsito</option>
                <option value="Deportivo">Deportivo</option>
                <option value="Recreativo o cultural">Recreativo o cultural</option>
                <option value="Propios del trabajo">Propios del trabajo</option>
               </select>
          <label class="label">Tipo Accidente</label>
          </div>
          @error('tipoaccidente')
          <p class="text-danger">
              {{ $message }}
          </p>
         @enderror
  </div>
  <div class="login-box">
    <div class="user-box">
        <label class="label1" >¿Causo muerte al trabajador?</label>
        <select name="causaMuerte" >
            <option selected>Seleccione....</option>
            <option value="No">No</option>
            <option value="Si">Si</option>
          </select>
      </div>
      @error('causaMuerte')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror

      <div class="user-box1">
        <select name="sitio_id" >
        <option selected>Seleccione...</option>
        @foreach ($sitios as $sitio)
        <option value="{{$sitio->id}}" {{$sitio->id == $accidente->sitio_id ? "selected" : ""}}>
            {{$sitio->denominacionSitio}}</option>
    @endforeach
    </select><br><br>
    <a href="   {{route('sitio.formSitio')}} " class="btn btn-primary">Otro Sitio</a>

    <label class="label">Sitio</label>
      </div>
    @error('sitio_id')
    <p class="text-danger">
        {{ $message }}
    </p>
    @enderror
  </div>
  <br>
  <div class="login-box">
      <div class="user-box">
            <select name="agente_id" >
            <option selected>Seleccione...</option>
            @foreach ($agentes as $agente)
            <option value="{{$agente->id}}" {{$agente->id == $accidente->agente_id ? "selected" : ""}} >{{$agente->denominacionAgente}}</option>
            @endforeach
        </select>

        <label class="label">Agente Accidente</label>
        @error('agente_id')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
      </div>
      <div class="user-box1">
        <select name="mecanismo_id">
            <option selected>Seleccione...</option>
            @foreach ($mecanismos as $mecanismo)
            <option value="{{$mecanismo->id}}" {{$mecanismo->id == $accidente->mecanismo_id ? "selected" : ""}} >{{$mecanismo->denominacionMecanismo}}</option>
        @endforeach
    </select><br><br>
    <a href=" {{route('mecanismo.formMecanismo')}} " class="btn btn-primary">Otro Mecanismo</a>

    <label class="label">Mecanismo o forma de accidente</label>
      </div>
      @error('mecanismo_id')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror
  </div>
  <br>
  <div class="login-box">
    <div class="user-box">
        <input type="text" id="empresa" name='empresa'>
        <label class="label">Empresa</label>
    </div>
    @error('descripcion')
    <p class="text-danger">
        {{ $message }}
    </p>
@enderror
    <div class="user-box1">
        <input type="text" id="descripcion" name='descripcion'>
        <label class="label">Descripcion</label>
    </div>
    @error('empresa')
    <p class="text-danger">
        {{ $message }}
    </p>
@enderror
  </div>

    <div class="user-box">
        <label class="label">parte cuerpo</label>
        <br>
               @foreach ($partes_cuerpo as $id=> $parte_cuerpo)

              <div class="inline">
                  <label class="label2">
                      <input class="form-check-input" type="checkbox" name="denominacionParteCuerpo[]"
                          value="{{$id}}">
                      <span class="form-check-sign">
                          <span class="check"></span>
                      </span>
                  </label>
              </div>

              {{$parte_cuerpo}}
        <br>
      @endforeach

    </div>
     <div class="user-box2">
         <label class="label">lesiones</label>
        <br>
               @foreach ($lesions as $id=> $lesionn)

              <div class="inline">
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








    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/accidentes" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>


</form>


@endsection
