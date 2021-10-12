@extends('layout')
@section('title' , 'Usuario')
@section('h1' , 'Usuario')
@section('Contenido')

{{-- <a href=" {{route('usuario.formUsuario')}} " class="btn btn-primary">Nuevo Usuario</a> --}}


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>imagen</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Tipo Documento</th>
            <th>Numero de Documento</th>
            <th>Tipo de Sangre</th>
            <th>Telefono</th>
            <th>Fecha de Nacimiento</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Sexo</th>
            <th>Direccion</th>
            <th>Jornada</th>
            <th>Rol</th>
            <th>Cargo</th>
            <th>Fecha de Ingreso a la Empresa</th>
            <th>Tipo vinculacion</th>
            <th>afp</th>
            <th>Municipio</th>
            <th>arp</th>
            
            <th>eps</th>





        </tr>
    </thead>
    <tbody>


            <tr> <td><img src="{{asset($infoUsuario->imagen) }}" alt="image" class="imagen_perfil" ></td>
                <td>{{$infoUsuario->nombre}}</td>
                <td>{{$infoUsuario->apellido}}</td>
                <td>{{$infoUsuario->tipo_documento->nombreTipoDocumento}}</td>
                <td>{{$infoUsuario->numeroDocumento}}</td>
                <td>{{$infoUsuario->sangre}}</td>
                <td>{{$infoUsuario->telefono}}</td>
                <td>{{$infoUsuario->fechaNacimiento}}</td>
                <td>{{$infoUsuario->correo}}</td>
                <td>{{$infoUsuario->estado}}</td>
                <td>{{$infoUsuario->sexo}}</td>
                <td>{{$infoUsuario->direccion}}</td>
                <td>{{$infoUsuario->jornada}}</td>
                <td>{{$infoUsuario->rol->nombreRol}} </td>
                <td>{{$infoUsuario->cargo->nombreCargo}}</td>
                <td>{{$infoUsuario->fechaIngreso}}</td>
                <td>{{$infoUsuario->vinculacion}}</td>
                <td>{{$infoUsuario->afp->denominacionAfp}}</td>
                <td>{{$infoUsuario->municipios->denominacionMunicipio;}}</td>
                 <td>{{$infoUsuario->arp->denominacionArp}}</td>
                
                 <td>{{$infoUsuario->eps->denominacionEps}}</td>
                <td>
                     {{-- <a href="{{ route('usuario.formUsuario', ['id'=> $infoUsuario->id]) }}" class="btn btn-warning">Editar</a> --}}
                   {{--  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> --}}
                </td>
            </tr>

</table>

<div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Profile</h4>
            <p class="card-category">Complete your profile</p>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Company (disabled)</label>
                    <input type="text" class="form-control" disabled="">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Username</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Email address</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Fist Name</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Last Name</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Adress</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">City</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Country</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Postal Code</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>About Me</label>
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                      <textarea class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="img" src="../assets/img/faces/marc.jpg">
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category">CEO / Co-Founder</h6>
            <h4 class="card-title">Alec Thompson</h4>
            <p class="card-description">
              Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
            </p>
            <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
