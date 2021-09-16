@extends('layout')

@section('title',$usuario->id ? 'Editar Usuario' : 'Nuevo Usuario')
@section('h1' , $usuario->id ? 'Editar Usuario' : 'Nuevo Usuario')


@section('Contenido')
<form action="{{ route('usuario.saveUsuario') }}" method="POST" >
    @csrf
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

      <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/usuarios" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>

@endsection
