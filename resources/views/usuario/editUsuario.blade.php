@extends('layout')

@section('title',$usuario->id ? 'Editar Accidente' : 'Nuevo Accidente')
@section('h1' , $usuario->id ? 'Editar Accidente' : 'Nuevo Accidente')


@section('Contenido')
<form action="{{ route('accidente.updateAccidente', $usuario->id ) }}" method="POST" >
    @csrf
@method('put')

<input type="hidden" name="id" value="{{ $usuario->id }}">

<div class="login-box">
    <div class="user-box">
        <input type="text" id="nombre" name="nombre"
        value="{{ @old('nombre') ? @old('nombre') : $usuario->nombre}}">
      <label class="label">Nombre</label>
    </div>
    @error('nombre')
    <p class="text-danger">
        {{ $message }}
    </p>
    @enderror
    <div class="user-box1">
        <input type="text" id="apellido" name="apellido"
        value="{{ @old('apellido') ? @old('apellido') : $usuario->apellido}}" >
        <label class="labe">Apellido</label>
    </div>
    @error('apellido')
    <p class="text-danger">
        {{ $message }}
    </p>
    @enderror
</div>
<div class="login-box">
    <div class="user-box">
        <select name="tipoDocumento_id" >
            <option selected>Seleccione...</option>
            @foreach ($tipo_documentos as $tipo_documento)
            <option value="{{$tipo_documento->id}}" {{$tipo_documento->id == $usuario->tipoDocumento_id ? "selected" : ""}} >{{$tipo_documento->nombreTipoDocumento}}</option>
            @endforeach
        </select>
        <label class="label">Tipo Documento</label>
      </div>
      @error('tipoDocumento_id')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror

      <div class="user-box1">
        <input type="number" id="numeroDocumento" name='numeroDocumento'
        value="{{ @old('numeroDocumento') ? @old('numeroDocumento') : $usuario->numeroDocumento}}">
        <label class="label">Numero de Documento</label>

      </div>
    @error('numeroDocumento')
    <p class="text-danger">
        {{ $message }}
    </p>
    @enderror
  </div>
  <div class="login-box">
    <div class="user-box">
        <select name="sangre" value="{{ @old('sangre') ? @old('sangre') : $usuario->sangre}}">
            <option value="{{ @old('sangre') ? @old('sangre') : $usuario->sangre}}">{{ @old('sangre') ? @old('sangre') : $usuario->sangre}}</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <label class="label">Tipo de Sangre</label>
      </div>
      @error('sangre')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror

      <div class="user-box1">
        <input type="number" id="telefono" name='telefono'
        value="{{ @old('telefono') ? @old('telefono') : $usuario->telefono}}">
        <label class="label">Telefono</label>

      </div>
    @error('telefono')
    <p class="text-danger">
        {{ $message }}
    </p>
    @enderror
  </div>
  <div class="login-box">
      <div class="user-box1">
        <input type="date" id="fechaNacimiento" name='fechaNacimiento'
        value="{{ @old('fechaNacimiento') ? @old('fechaNacimiento') : $usuario->fechaNacimiento}}">
        <label class="label">Fecha de Nacimiento</label>

      </div>
        @error('fechaNacimiento')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror

        <div class="user-box">
            <input type="text" id="correo" name='correo'
            value="{{ @old('correo') ? @old('correo') : $usuario->correo}}">
            <label class="label">Correo</label>

          </div>
            @error('correo')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
  </div>
  <div class="login-box">
    <div class="user-box">
        <select name="estado" value="{{ @old('estado') ? @old('estado') : $usuario->estado}}">
            <option value="{{ @old('estado') ? @old('estado') : $usuario->estado}}">{{ @old('estado') ? @old('estado') : $usuario->estado}}</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select>
        <label class="label">Estado</label>
      </div>
      @error('estado')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror

      <div class="user-box1">
        <select name="sexo" value="{{ @old('sexo') ? @old('sexo') : $usuario->sexo}}">
            <option value="{{ @old('sexo') ? @old('sexo') : $usuario->sexo}}">{{ @old('sexo') ? @old('sexo') : $usuario->sexo}}</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Indefinido">Indefinido</option>
        </select>
        <label class="label">Sexo</label>

      </div>
    @error('sexo')
    <p class="text-danger">
        {{ $message }}
    </p>
    @enderror
  </div>
  <div class="login-box">
    <div class="user-box">
        <input type="text" id="direccion" name="direccion"
        value="{{ @old('direccion') ? @old('direccion') : $usuario->direccion}}">
        <label class="label"> Direccion</label>
      </div>
      @error('direccion')
      <p class="text-danger">
          {{ $message }}
      </p>
     @enderror

      <div class="user-box1">
        <select name="jornada" value="{{ @old('jornada') ? @old('jornada') : $usuario->jornada}}">
            <option value="{{ @old('jornada') ? @old('jornada') : $usuario->jornada}}">{{ @old('jornada') ? @old('jornada') : $usuario->jornada}}</option>
            <option value="Diurna">Diurna</option>
            <option value="Mixta">Mixta</option>
            <option value="Nocturna">Nocturna</option>
        </select>
        <label class="label">Jornada</label>
      </div>
        @error('jornada')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
  </div>
  <div class="login-box">
    <div class="user-box">
        <select name="rol_id" >
            <option selected>Seleccione...</option>
            @foreach ($rols as $rol)
            <option value="{{$rol->id}}" {{$rol->id == $usuario->rol_id ? "selected" : ""}}>{{$rol->nombreRol}}</option>
        @endforeach
        </select>
        <label class="label">Rol</label>
      </div>
      @error('rol_id')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror

      <div class="user-box1">
        <select name="cargo_id" >
        <option selected>Seleccione...</option>
        @foreach ($cargos as $cargo)
        <option value="{{$cargo->id}}" {{$cargo->id == $usuario->cargo_id ? "selected" : ""}}>{{$cargo->nombreCargo}}</option>
    @endforeach
    </select>
    <label class="label">Cargo</label>
      </div>
    @error('cargo_id')
    <p class="text-danger">
        {{ $message }}
    </p>
    @enderror
  </div>

  <div class="login-box">
    <div class="user-box">
        <input type="date" id="fechaIngreso" name='fechaIngreso'
        value="{{ @old('fechaIngreso') ? @old('fechaIngreso') : $usuario->fechaIngreso}}">
        <label class="label">Fecha de Ingreso a la Empresa</label>
      </div>
      @error('fechaIngreso')
      <p class="text-danger">
          {{ $message }}
      </p>
     @enderror

      <div class="user-box1">
        <select name="vinculacion" value="{{ @old('vinculacion') ? @old('vinculacion') : $usuario->vinculacion}}">
            <option value="{{ @old('vinculacion') ? @old('vinculacion') : $usuario->vinculacion}}">{{ @old('vinculacion') ? @old('vinculacion') : $usuario->vinculacion}}</option>
            <option value="Planta">Planta</option>
            <option value="Misión">Misión</option>
            <option value="Estudiante o Aprendiz">Estudiante o Aprendiz</option>
            <option value="Independiente">Independiente</option>
        </select>
        <label class="label">Tipo vinculacion</label>

      </div>
        @error('vinculacion')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
  </div>
  <div class="login-box">
    <div class="user-box">
        <select name="afp_id" >
            <option selected>Seleccione...</option>
            @foreach ($afps as $afp)
            <option value="{{$afp->id}}" {{$afp->id == $usuario->afp_id ? "selected" : ""}}>{{$afp->denominacionAfp}}</option>
        @endforeach
        </select>
        <br><br>
        <a href="  {{route('afp.formAfp')}}  " class="btn btn-primary">Otro Afp</a>

        <label class="label">Administradoras de Fondos de Pensiones</label>
      </div>
      @error('afp_id')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror

      <div class="user-box1">
        <select name="municipio_id" >
        <option selected>Seleccione...</option>
        @foreach ($municipios as $municipio)
        <option value="{{$municipio->id}}" {{$municipio->id == $usuario->municipio_id ? "selected" : ""}}>{{$municipio->denominacionMunicipio}}</option>
    @endforeach
    </select>
    <label class="label">Municipio</label>
      </div>
    @error('municipio_id')
    <p class="text-danger">
        {{ $message }}
    </p>
    @enderror
  </div>
  <br>

  <div class="login-box">
    <div class="user-box">
        <select name="arp_id" >
            <option selected>Seleccione...</option>
            @foreach ($arps as $arp)
            <option value="{{$arp->id}}" {{$arp->id == $usuario->arp_id ? "selected" : ""}}>{{$arp->denominacionArp}}</option>
        @endforeach
        </select><br><br>
        <a href="  {{route('arp.formArp')}} " class="btn btn-primary">Otro Arp</a>

        <label class="label">Administradoras de Riesgos Profesionales</label>
      </div>
      @error('arp_id')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror

      <div class="user-box1">

        <select name="eps_id" >
            <option selected>Seleccione...</option>
            @foreach ($eps as $eps)
            <option value="{{$eps->id}}" {{$eps->id == $usuario->eps_id ? "selected" : ""}}>{{$eps->denominacionEps}}</option>

        @endforeach
        </select><br><br>
        <a href="  {{route('eps.formEps')}}  " class="btn btn-primary">Otra Eps</a>

        <label class="label">Eps</label>

      </div>
      @error('eps_id')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror
  </div>
<input type="file" name="imagen"  accept="image/*">
@error('imagen')
<p class="text-danger">
{{ $message }}
</p>
@enderror
  <div class="mb-3 row">
    <div class="col-sm-9"></div>
    <div class="col-sm-3">
        <a href="/usuarios" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
</form>

{{-- fsfgsdhfjgf --}}

<form action="{{ route('accidente.updateAccidente', $usuario->id ) }}" method="POST" >
    @csrf
@method('put')

   
    <div class="row">
        <input type="hidden" name="id" value="{{ $usuario->id }}" >
        <div class="col-12">
            <div class="card">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card-body">
                            <div class="form-group">
                               <div class="section-title mt-0">Nombres</div>
                                <div class="input-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror"  id="nombre" name='nombre'>
                                    @error('nombre')
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
                                <div class="section-title mt-0">Apellidos</div>
                                <div class="input-group">
                                    <input type="text" class="form-control @error('apellido') is-invalid @enderror"  id="apellido" name='apellido'>
                                    @error('apellido')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card-body">
                            <div class="form-group">
                               <div class="section-title mt-0">Tipo de documento</div>
                                <div class="input-group">
                                    <select class=" custom-select" name="tipoDocumento_id" >
                                       <option selected>Seleccione...</option>
                                       @foreach ($tipo_documentos as $tipo_documento)
                                       <option value="{{$tipo_documento->id}}" {{$tipo_documento->id == $usuario->tipoDocumento_id ? "selected" : ""}} >{{$tipo_documento->nombreTipoDocumento}}</option>
                                        @endforeach
                                        </select>
                                  </div>
                                  
                               @error('tipoDocumento_id')
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
                                <div class="section-title mt-0">Numero de Documento</div>
                                <div class="input-group">
                                    <input type="number" class="form-control @error('numeroDocumento') is-invalid @enderror"  id="numeroDocumento" name='numeroDocumento'>
                                    @error('numeroDocumento')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="section-title mt-0">Tipo de Sangre</div>
                                    <select class="form-control @error('sangre') is-invalid @enderror select2" name="sangre" value="{{ @old('sangre') ? @old('sangre') : $usuario->sangre}}">
                                        <option selected>Seleccione...</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                @error('sangre')
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
                                <div class="section-title mt-0">Telefono</div>
                                <div class="input-group">
                                    <input type="number" class="form-control @error('telefono') is-invalid @enderror"  id="telefono" name='telefono'>
                                    @error('telefono')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="section-title mt-0">Fecha de Nacimiento</div>
                                <div class="input-group">
                                    <input type="date" class="form-control @error('fechaNacimiento') is-invalid @enderror" id="fechaNacimiento" name='fechaNacimiento'>
                                    @error('fechaNacimiento')
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
                               <div class="section-title mt-0">Correo</div>
                                <div class="input-group">
                                    <input type="email" class="form-control @error('correo') is-invalid @enderror"  id="correo" name='correo'>
                                    @error('correo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="section-title mt-0">Estado</div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="estado"  value="Activo" >
                                    <label class="form-check-label" >Activo</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="estado" value="Inactivo">
                                    <label class="form-check-label" >Inactivo</label>
                                  </div>
                                  @error('estado')
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
                                <div class="section-title mt-0">Sexo</div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexo"  value="Masculino" >
                                    <label class="form-check-label" >Masculino</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexo" value="Femenino">
                                    <label class="form-check-label" >Femenino</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexo" value="Indefinido">
                                    <label class="form-check-label" >Indefinido</label>
                                  </div>
                                  @error('sexo')
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
                                <div class="section-title mt-0">Direccion</div>
                                <div class="input-group">
                                    <input type="text" class="form-control @error('direccion') is-invalid @enderror"  id="direccion" name='direccion'>
                                    @error('direccion')
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
                               <div class="section-title mt-0">Rol</div>
                                <div class="input-group">
                                    <select class="custom-select @error('rol_id') is-invalid @enderror " name="rol_id" >
                                       <option selected>Seleccione...</option>
                                       @foreach ($rols as $rol)
                                       <option value="{{$rol->id}}" {{$rol->id == $usuario->rol_id ? "selected" : ""}}>{{$rol->nombreRol}}</option>
                                   @endforeach
                                        </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                @error('rol_id')
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
                                <div class="section-title mt-0">Cargo</div>
                                <div class="input-group">
                                    <select class=" custom-select" name="cargo_id" >
                                        require intervention/image                     <option selected>Seleccione...</option>
                                       @foreach ($cargos as $cargo)
                                       <option value="{{$cargo->id}}" {{$cargo->id == $usuario->cargo_id ? "selected" : ""}}>{{$cargo->nombreCargo}}</option>
                                   @endforeach
                                        </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                @error('cargo_id')
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
                                    <div class="section-title mt-0">Fecha de Ingreso a la Empresa</div>
                                    <div class="input-group">
                                        <input type="date" class="form-control @error('fechaIngreso') is-invalid @enderror" id="fechaIngreso" name='fechaIngreso'>
                                        @error('fechaIngreso')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                        @enderror
                                    </div>
                                </div>
                          
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card-body">
                        <div class="form-group">
                           <div class="section-title mt-0">Tipo vinculacion</div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="vinculacion"  value="Planta" >
                                <label class="form-check-label" >Planta</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="vinculacion" value="Misión">
                                <label class="form-check-label" >Misión</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="vinculacion" value="Estudiante o Aprendiz">
                                <label class="form-check-label" >Estudiante o Aprendiz</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="vinculacion" value="Independiente">
                                <label class="form-check-label" >Independiente</label>
                              </div>
                              @error('vinculacion')
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
                                <div class="section-title mt-0">Municipio</div>
                                <div class="input-group">
                                    <select class=" custom-select" name="municipio_id" >
                                       <option selected>Seleccione...</option>
                                       @foreach ($municipios as $municipio)
                                       <option value="{{$municipio->id}}" {{$municipio->id == $usuario->municipio_id ? "selected" : ""}}>{{$municipio->denominacionMunicipio}}</option>
                                   @endforeach
                                        </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                @error('municipio_id')
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
                                <div class="section-title mt-0">Administradora de Fondo de Pensiones (AFP)</div> 
                                <div class="input-group">
                                    <select class=" custom-select" name="afp_id" >
                                       <option selected>Seleccione...</option>
                                       @foreach ($afps as $afp)
                                       <option value="{{$afp->id}}" {{$afp->id == $usuario->afp_id ? "selected" : ""}}>{{$afp->denominacionAfp}}</option>
                                   @endforeach
                                        </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                @error('afp_id')
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
                                <div class="section-title mt-0">Administradora de Riesgos Profesionales (ARP)</div>
                                <div class="input-group">
                                    <select class=" custom-select" name="arp_id" >
                                       <option selected>Seleccione...</option>
                                       @foreach ($arps as $arp)
                                       <option value="{{$arp->id}}" {{$arp->id == $usuario->arp_id ? "selected" : ""}}>{{$arp->denominacionArp}}</option>
                                   @endforeach
                                        </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                @error('arp_id')
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
                                <div class="section-title mt-0">EPS</div>
                                <div class="input-group">
                                    <select class=" custom-select" name="eps_id" >
                                       <option selected>Seleccione...</option>
                                       @foreach ($eps as $eps)
                                       {{-- <option value="{{$eps->id}}" {{$eps->id == $usuario->eps_id ? "selected" : ""}}>{{$eps->denominacionEps}}</option>         --}}
                                   @endforeach
                                        </select>
                                    <div class="input-group-append">
                                      <button class="btn btn-primary btn-lg btn-block btn-icon-split" type="button">Otro</button>
                                    </div>
                                  </div>
                                @error('eps_id')
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
                                <div class="section-title mt-0">Jornada</div>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jornada"  value="Diurna" >
                                    <label class="form-check-label" >Diurna</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jornada" value="Nocturna">
                                    <label class="form-check-label" >Nocturna</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jornada" value="Mixta">
                                    <label class="form-check-label" >Mixta</label>
                                  </div>
                                  @error('jornada')
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
                                
                                
                                <div class="card-body">
                                    <div class="form-group">
                                      <div class="section-title mt-0">Imagen</div>
                                      <div class="row gutters-sm">
                                        <div class="col-6 col-sm-4">
                                          <label class="imagecheck mb-4">
                                            <input name="imagen" type="radio" value="storage/imagenes/avatar-1.png" class="imagecheck-input">
                                            <figure class="imagecheck-figure">
                                              <img src="{{asset('storage/imagenes/avatar-1.png') }}" alt="}" class="imagecheck-image">
                                            </figure>
                                          </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                          <label class="imagecheck mb-4">
                                            <input name="imagen" type="radio" value="storage/imagenes/avatar-2.png" class="imagecheck-input" >
                                            <figure class="imagecheck-figure">
                                              <img src="{{asset('storage/imagenes/avatar-2.png') }}" alt="}" class="imagecheck-image">
                                            </figure>
                                          </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                          <label class="imagecheck mb-4">
                                            <input name="imagen" type="radio" value="storage/imagenes/avatar-3.png" class="imagecheck-input">
                                            <figure class="imagecheck-figure">
                                              <img src="{{asset('storage/imagenes/avatar-3.png') }}" alt="}" class="imagecheck-image">
                                            </figure>
                                          </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                          <label class="imagecheck mb-4">
                                            <input name="imagen" type="radio" value="storage/imagenes/avatar-4.png" class="imagecheck-input" >
                                            <figure class="imagecheck-figure">
                                              <img src="{{asset('storage/imagenes/avatar-4.png') }}" alt="}" class="imagecheck-image">
                                            </figure>
                                          </label>
                                        </div>
                                        <div class="col-6 col-sm-4">
                                          <label class="imagecheck mb-4">
                                            <input name="imagen" type="radio" value="storage/imagenes/avatar-5.png" class="imagecheck-input">
                                            <figure class="imagecheck-figure">
                                              <img src="{{asset('storage/imagenes/avatar-5.png') }}" alt="}" class="imagecheck-image">
                                            </figure>
                                          </label>
                                        </div>
                                        {{-- <div class="col-6 col-sm-4">
                                          <label class="imagecheck mb-4">
                                            <input name="imagen" type="radio" value="6" class="imagecheck-input">
                                            <figure class="imagecheck-figure">
                                                <figure class="avatar mr-2 avatar-xl" data-initial="UM"></figure>
                                            </figure>
                                          </label>
                                        </div> --}}
                                        {{-- <div class="input-group">
                                            <input type="file" name="imagen"  accept="image/*">   
                                          </div> --}}
                                        @error('imagen')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                      
                                    </div>
                                  </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        
                       
                    </div>
                </div>
                
                
                                       
                <div class="mb-3 row">
                    <div class="col-sm-9"></div>
                    <div class="col-sm-3">
                        <a href="/usuarios" class="btn btn-light">Cancelar</a>
                        <button type="submit" class="btn btn-primary confirmar">Guardar</button>
                    </div>
                </div>
              
                
            </form>
        </div>
    </div>
</div>
    
@endsection
@section('JS')
<script>
$('.confirmar').submit(function(e){
e.preventDefault() 
 const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Signed in successfully'
})
});

</script>
    
@endsection

