@extends('layout')
@section('title' , 'Crear usuario')
@section('h1' , 'Crear usuario')



@section('Contenido')
<form action="{{ route('register') }}" method="POST" >
    @csrf
   
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
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" name='name'>
                                    @error('name')
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
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"  id="email" name='email'>
                                    @error('email')
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
                                       <option value="{{$eps->id}}" {{$eps->id == $usuario->eps_id ? "selected" : ""}}>{{$eps->denominacionEps}}</option>        
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
                        <button type="submit" >
                            {{ __('Registrarse') }}
                        </button>
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
