@extends('layout')
@section('title' , 'Información del usuario  ')
@section('h1' , 'Información del usuario ')
@section('Contenido')

{{-- <a href=" {{route('usuario.formUsuario')}} " class="btn btn-primary">Nuevo Usuario</a> --}}


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif



  <div class="row">
    <div class="col-xl-4 order-xl-2">
      <div class="card card-profile">
        <img src="{{asset($infoUsuario->imagen) }}" alt="Image placeholder" class="card-img-top">
        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2">
            <div class="card-profile-image">
              <a href="#">
                <img src="{{asset($infoUsuario->imagen) }}" class="rounded-circle" width="134px" height="134px">
              </a>
            </div>
          </div>
        </div>
        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
          <div class="d-flex justify-content-between">
            <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
            <a href="#" class="btn btn-sm btn-default float-right">Message</a>
          </div>
        </div>
        <div class="card-body pt-0">
          <div class="row">
            <div class="col">
              <div class="card-profile-stats d-flex justify-content-center">
                <div>
                  <span class="heading">22</span>
                  <span class="description">Friends</span>
                </div>
                <div>
                  <span class="heading">10</span>
                  <span class="description">Photos</span>
                </div>
                <div>
                  <span class="heading">89</span>
                  <span class="description">Comments</span>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <h5 class="h3">
              Jessica Jones<span class="font-weight-light">, 27</span>
            </h5>
            <div class="h5 font-weight-300">
              <i class="ni location_pin mr-2"></i>Bucharest, Romania
            </div>
            <div class="h5 mt-4">
              <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
            </div>
            <div>
              <i class="ni education_hat mr-2"></i>University of Computer Science
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-8 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Usuario</h3>
            </div>
            <div class="col-4 text-right">
              <td> @if($infoUsuario->estado === "Inactivo")
                <div class="badge badge-danger ">Inactivo</div>
                    @else
                    <div class="badge badge-success ">Activo</div>
                @endif
              </td>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form>
            <h6 class="heading-small text-muted mb-4"></h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombres</label>
                    <input type="text" class="form-control" value="{{$infoUsuario->nombre}}" readonly>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Apellidos</label>
                    <input type="email" class="form-control" value="{{$infoUsuario->apellido}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Telefono</label>
                    <input type="text" class="form-control" value="{{$infoUsuario->telefono}}" readonly>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Correo</label>
                    <input type="text" class="form-control" value="{{$infoUsuario->correo}}" readonly>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4">
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">informacion general del usuario</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Tipo de documento </label>
                    <input type="text" class="form-control" value="{{$infoUsuario->tipo_documento->nombreTipoDocumento}}" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Numero de Documento</label>
                    <input type="text" class="form-control" value="{{$infoUsuario->numeroDocumento}}" readonly>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Tipo de Sangre</label>
                    <input type="text" class="form-control" value="{{$infoUsuario->sangre}}" readonly>
                  </div>
                </div>
               
                <div class="col-md-3">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Fecha de Nacimiento</label>
                    <input type="text" class="form-control" value="{{$infoUsuario->fechaNacimiento}}" readonly>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating">Jornada</label>
                      <input type="text" class="form-control" value="{{$infoUsuario->jornada}}" readonly>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Municipio</label>
                      <input type="text" class="form-control" value="{{$infoUsuario->municipios->denominacionMunicipio}}" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Direccion</label>
                      <input type="text" class="form-control" value="{{$infoUsuario->direccion}}" readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Fecha de Ingreso a la Empresa</label>
                    <input type="text" class="form-control" value="{{$infoUsuario->fechaIngreso}}" readonly>
                      
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group bmd-form-group"><label class="bmd-label-floating">Tipo vinculacion</label>
                      <input type="text" class="form-control" value="{{$infoUsuario->vinculacion}}" readonly>
                
                    </div>
                  </div>
                  <div class="col-md-3">      <label class="bmd-label-floating">Sexo</label>
                      <input type="text" class="form-control" value="{{$infoUsuario->sexo}}" readonly>
                    
                    <div class="form-group bmd-form-group">
                     
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">AFP</label>
                      <input type="text" class="form-control" value="{{$infoUsuario->afp->denominacionAfp}}" readonly>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">ARP</label>
                      <input type="text" class="form-control" value="{{$infoUsuario->arp->denominacionArp}}" readonly>
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">EPS</label>
                      <input type="text" class="form-control" value="{{$infoUsuario->eps->denominacionEps}}" readonly>
                    </div>
                  </div>
                </div>

              </div>
              
            </div>
            
              </div>
            </div>
          </form>
        </div>
        <center>
          <a href="/usuarios" class="btn btn-primary btn-lg">Atras</a>
        </center>
        <br>
      </div>
    </div>
@endsection
