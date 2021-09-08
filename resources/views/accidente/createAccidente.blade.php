@extends('layout')




@section('Contenido')
<form action="{{ route('accidente.store') }}" method="POST" >
    @csrf

    <input type="hidden" name="id" >

    <div class="login-box">
        <div class="user-box">
          <input type="date" class="form-control" id="fechaHora" name='fechaHora'>
          <label class="label">Fecha del accidente</label>
        </div>
        @error('fechaHora')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
        <div class="user-box1">
            <select name="dia" >
                <option selected>Seleccione....</option>
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miercoles">Miercoles</option>
                <option value="Jueves">Jueves-</option>
                <option value="Viernes">Viernes</option>
                <option value="Sabado">Sabado</option>
            </select>
            <label class="label"> dia de la semana que ocurrio el accidente</label>
        </div>
     @error('dia')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
    </div>


    <div class="login-box">
      <div class="user-box">
        <label class="label1">Jornada en que sucecdio</label>
          <select name="jornada" >
            <option selected>Seleccione....</option>
            <option value="Extra">Extra</option>
            <option value="Normal">Normal</option>
        </select>

      </div>
      @error('jornada')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
      <div class="user-box1">
          <label class="label1" >  ¿Estaba realizando la labor habitual? si o no. Si escogio no, cual fué?</label>
          <select name="laborHabitual" >
            <option selected>Seleccione....</option>
            <option value="No">No</option>
            <option value="Si">Si</option>
          </select>
      </div>
      @error('laborHabitual')
      <p class="text-danger">
          {{ $message }}
      </p>
       @enderror
  </div>
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
    </select>
    <label class="label">Sitio</label>
      </div>
    @error('sitio_id')
    <p class="text-danger">
        {{ $message }}
    </p>
    @enderror
  </div>
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
    </select>
    <label class="label">Mecanismo o forma de accidente</label>
      </div>
      @error('mecanismo_id')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror
  </div>
  <div class="login-box">
    <div class="user-box">
        <input type="text" id="empresa" name='empresa'>
        <label class="label">empresa</label>
    </div>
    @error('descripcion')
    <p class="text-danger">
        {{ $message }}
    </p>
@enderror
    <div class="user-box1">
        <input type="text" id="descripcion" name='descripcion'>
        <label class="label">descripcion</label>
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
  
  

   
    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/accidentes" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>


</form>
  
@endsection
