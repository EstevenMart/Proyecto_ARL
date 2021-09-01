@extends('layout')

@section('title',$accidente->id ? 'Editar Accidente' : 'Nuevo Accidente')
@section('h1' , $accidente->id ? 'Editar Accidente' : 'Nuevo Accidente')


@section('Contenido')
<form action="{{ route('accidente.saveAccidente') }}" method="POST" >
    @csrf

    <input type="hidden" name="id" value="{{ $accidente->id }}">

    <div class="login-box">  
        <div class="user-box">
          <input type="date" class="form-control" id="fechaHora" name='fechaHora'
          value="{{ @old('fechaHora') ? @old('fechaHora') : $accidente->fechaHora}}">
          <label class="label">Fecha del accidente</label>
        </div>
        @error('fechaHora')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
        <div class="user-box1">
            <select name="dia" value="{{ @old('dia') ? @old('dia') : $accidente->dia}}">
                <option selected>Seleccione...</option>
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
        <div class="  form-check-inline" >
            <input  type="radio" name="jornada"  value="Normal">
            <label class="">Normal</label>
          </div>
          <div class=" form-check-inline">
            <input  type="radio" name="jornada"  value="Extra">
            <label class="">Extra</label>
          </div>
          {{-- <input type="text" class="form-control" id="jornada" name='jornada'
          value="{{ @old('jornada') ? @old('jornada') : $accidente->jornada}}"> --}}
        
      </div>
      @error('jornada')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
      <div class="user-box1">
          <label class="label1" >  ¿Estaba realizando la labor habitual?</label>
        <div class="  form-check-inline" >
            <input  type="radio" name="jornada"  value="si">
            <label class="">si</label>
          </div>
          <div class=" form-check-inline">
            <input  type="radio" name="jornada"  value="no">
            <label class="">no</label>
          </div>
          {{-- <input type="text" class="form-control" id="laborHabitual" name='laborHabitual'
          value="{{ @old('laborHabitual') ? @old('laborHabitual') : $accidente->laborHabitual}}"> --}}
        
      </div>
      @error('laborHabitual')
      <p class="text-danger">
          {{ $message }}
      </p>
       @enderror
  </div>
  <div class="login-box">  
      <div class="user-box">   
              <input type="text" class="form-control" id="tiempoPA" name='tiempoPA'
              value="{{ @old('tiempoPA') ? @old('tiempoPA') : $accidente->tiempoPA}}">
        <label class="label"> Tiempo Previo al Accidente</label>
      </div>
      @error('tiempoPA')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror
      <div class="user-box1">
        <input type="numeric" id="cantHoras" name='cantHoras'
        value="{{ @old('cantHoras') ? @old('cantHoras') : $accidente->cantHoras}}">
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
            <input type="numeric" id="cantMinutos" name='cantMinutos'
            value="{{ @old('cantMinutos') ? @old('cantMinutos') : $accidente->cantMinutos}}">
            <label class="label">Cantidad Minutos</label>
          </div>
          @error('cantMinutos')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
         <div class="user-box1">
         <select name='tipoaccidente' value="{{ @old('tipoaccidente') ? @old('tipoaccidente') : $accidente->tipoaccidente}}">>
                <option selected>Seleccione...</option>
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
        <div class="  form-check-inline" >
            <input  type="radio" name="causaMuerte"  value="Si">
            <label class="">si</label>
          </div>
          <div class=" form-check-inline">
            <input  type="radio" name="causaMuerte"  value="NO">
            <label class="">no</label>
          </div>
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
          {{-- <input type="password" name="" required="">
        <label class="label"> Parte del cuerpo aparentemente afectado</label> --}}
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


    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/accidentes" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>

  
@endsection
