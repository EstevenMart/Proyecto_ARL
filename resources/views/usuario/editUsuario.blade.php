@extends('layout')

@section('title',$accidente->id ? 'Editar Accidente' : 'Nuevo Accidente')
@section('h1' , $accidente->id ? 'Editar Accidente' : 'Nuevo Accidente')


@section('Contenido')
<form action="{{ route('accidente.updateAccidente', $accidente->id ) }}" method="POST" >
    @csrf
@method('put')

    <div class="login-box">
        <div class="user-box">
          <input type="date" class="form-control" id="fechaHora" name='fechaHora'
          value="{{  $accidente->fechaHora}}">
          <label class="label">Fecha del accidente</label>
        </div>
        @error('fechaHora')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
        <div class="user-box1">
            <select name="dia" value="{{  $accidente->dia}}">
                <option value="{{  $accidente->dia}}">{{  $accidente->dia}}</option>
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
          <select name="jornada" value="{{  $accidente->jornada}}">
          <option  value="{{  $accidente->jornada}}">{{  $accidente->jornada}}</option>
            <option value="Extra">Extra</option>
            <option value="Normal">Normal</option>
        </select>
          {{-- <input type="text" class="form-control" id="jornada" name='jornada'
          value="{{ @old('jornada') ? @old('jornada') : $accidente->jornada}}"> --}}

      </div>
      @error('jornada')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
      <div class="user-box1">
          <label class="label1" >  ¿Estaba realizando la labor habitual? si o no. Si escogio no, cual fué?</label>
          <select name="laborHabitual" value="{{  $accidente->laborHabitual}}">
            <option  value="{{  $accidente->laborHabitual}}">{{  $accidente->laborHabitual}}</option>
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
              <input type="number" class="form-control" id="tiempoPA" name='tiempoPA'
              value="{{  $accidente->tiempoPA}}">
        <label class="label"> Tiempo Previo al Accidente</label>
      </div>
      @error('tiempoPA')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror
      <div class="user-box1">
        <input type="number" id="cantHoras" name='cantHoras'
        value="{{ $accidente->cantHoras}}">
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
            <input type="number" id="cantMinutos" name='cantMinutos'
            value="{{ $accidente->cantMinutos}}">
            <label class="label">Cantidad Minutos</label>
          </div>
          @error('cantMinutos')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
         <div class="user-box1">
         <select name='tipoaccidente' value="{{ $accidente->tipoaccidente}}">
                <option selected value="{{ $accidente->tipoaccidente}}">{{ $accidente->tipoaccidente}}</option>
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
        <select name="causaMuerte" value="{{$accidente->causaMuerte}}">
            <option selected value="{{$accidente->causaMuerte}}">{{$accidente->causaMuerte}}</option>
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
  <div class="login-box">
    <div class="user-box">
        <input type="text" id="empresa" name='empresa'
        value="{{ @old('empresa') ? @old('empresa') : $accidente->empresa}}">
        <label class="label">empresa</label>
    </div>
    @error('descripcion')
    <p class="text-danger">
        {{ $message }}
    </p>
@enderror
    <div class="user-box1">
        <input type="text" id="descripcion" name='descripcion'
        value="{{ @old('descripcion') ? @old('descripcion') : $accidente->descripcion}}">
        <label class="label">descripcion</label>
    </div>
    @error('empresa')
    <p class="text-danger">
        {{ $message }}
    </p>
@enderror
  </div>
  @foreach ($partes_cuerpo as $id=> $parte_cuerpo)
  <tr>
      <td>
          <div class="form-check">
              <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="denominacionParteCuerpo[]"
                      value="{{$id}}" {{$accidente->partes_cuerpo->contains($id)? "checked": "" }}> 
                  <span class="form-check-sign">
                      <span class="check"></span>
                  </span>
              </label>
          </div>
      </td>
      <td>
          {{$parte_cuerpo}}
      </td>
  </tr>
  @endforeach

    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/accidentes" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>


@endsection
