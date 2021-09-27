@extends('layouts.register')

@section('contenido')

<div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="{{ asset('/css/img/world-amico.png') }}" alt="">
        <div class="text">
          {{-- <span class="text-1">Tu nos ayudas a ser <br> mejor</span>
          <span class="text-2">Conectemonos!</span> --}}
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="{{ asset('/css/img/tools-pana.png') }}" alt="">
        <div class="text">
          {{-- <span class="text-1">Nuestro programa <br> te espera</span>
          <span class="text-2">Empecemos</span> --}}
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <img src="{{ asset('/css/img/logo1.4.png') }}" width="390px">
            <br><br>
            <div class="title">¿olvidaste tu contraseña?</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                              <i class="fas fa-envelope"></i>
                              <input id="email" type="email"  placeholder="Ingresa tu correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              
                                              @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                            </div>

    

                        </div>

                        
                        <div class="button input-box">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar codigo') }}
                                </button>
                        </div>   
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
</div> 
</div>
   <a class="read_more" href="/register"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
      <i class='bx bx-log-out'></i>
      <span class="links_name">Atrás</span></a>
      
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
      </form>
@endsection
