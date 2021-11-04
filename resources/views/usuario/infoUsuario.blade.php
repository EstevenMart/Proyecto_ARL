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
      <div class="padding">
        <div class="col-md-11">
            <!-- Column -->
            <div class="card"> <img class="card-img-top" src="{{asset($infoUsuario->imagen) }}" alt="Card image cap">
                <div class="card-body little-profile text-center">
                    <div class="pro-img"><img src="{{asset($infoUsuario->imagen) }}" alt="user"></div>
                    <h3 class="m-b-0">{{$infoUsuario->name}} {{$infoUsuario->apellido}} <br> <small>{{$infoUsuario->numeroDocumento}}</small></h3>
                    <br>
                    <div class="row">
                      <div class="col-4 text-right">
                        <td><div class="badge badge-info ">{{$infoUsuario->cargo->nombreCargo}}</div>
                             
                        </td>
                      </div>
                      <div class="col-8 text-right">
                        <div class="badge badge-dark ">{{$infoUsuario->rol->nombreRol}}</div>
                      </div>
                    </div>
                  </br>
                    
                   
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
                    <input type="text" class="form-control" value="{{$infoUsuario->name}}" readonly>
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
                    <input type="text" class="form-control" value="{{$infoUsuario->email}}" readonly>
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
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group"><label class="bmd-label-floating">Sexo</label>
                      <input type="text" class="form-control" value="{{$infoUsuario->sexo}}" readonly>
                
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
                  <div class="col-md-6">      <label class="bmd-label-floating"> Tipo vinculacion</label>
                    <input type="text" class="form-control" value="{{$infoUsuario->vinculacion}}" readonly>
                  
                  <div class="form-group bmd-form-group">
                   
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


    <style>
      .card-img-top {
    height: 300px;
    object-fit: cover;
      object-position: center center;
    
}

.card-no-border .card1 {
    border-color: #d7dfe3;
    border-radius: 4px;
    margin-bottom: 30px;
    -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05)
}

.pro-img {
    margin-top: -80px;
    margin-bottom: 20px;
}

.little-profile .pro-img img {
    width: 128px;
    height: 128px;
    -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    border-radius: 100%
}

html body .m-b-0 {
    margin-bottom: 0px
}

h3 {
    line-height: 30px;
    font-size: 21px
}


html body .m-t-10 {
    margin-top: 10px
}



.btn-rounded {
    border-radius: 60px;
    
}



.text-center {
    text-align: center !important
}

    </style>
@endsection
