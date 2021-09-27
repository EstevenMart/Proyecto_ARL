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

      
        <div class="card card-danger">
            <div class="card-header">
                <h4>Tabla de Usuarios</h4>
                <div class="card-header-form">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Buscar">
                      <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
                      @foreach ( $listUsuario as $usuario )
                      <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img src="{{asset($usuario->imagen) }}" alt="perfil" class="rounded-circle profile-widget-picture"  >
                      <div class="profile-widget-items">
                        <div class="profile-widget-item">
                          <div class="profile-widget-item-label">Nombre y appellido</div>
                          <div class="profile-widget-item-value">{{$usuario->nombre}} {{$usuario->apellido}}</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Numero de documento</div>
                            <div class="profile-widget-item-value">{{$usuario->numeroDocumento}}</div>
                          </div>
                        <div class="profile-widget-item">
                          <div class="profile-widget-item-label">Estado</div>
                          <div class="profile-widget-item-value"><div class="badge badge-success">{{$usuario->estado}}</div></div>
                        </div>
                        <div class="media-cta">
                            <a href="#" class="btn btn-outline-primary">Datalle</a>
                          </div>
                      </div>
                    </div>
                    @endforeach
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                        </nav>
                    </div>
                



@endsection