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
            <div class="title">Iniciar sesión</div>
          <form method="POST" action="{{ route('login') }}" >
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
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input id="password" placeholder="Ingresa tu contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group row">
                
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Recuérdame') }}
                        </label>
                    </div>
               
            </div>
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('¿Olvidaste tu contraseña?') }}
            </a>
        @endif
              <div class="button input-box">

                <button type="submit" >
                  {{ __('Ingresar') }}
              </button>
              </div>
              <div class="text sign-up-text">¿No tienes una cuenta? <label for="flip">Registrate ahora</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <img src="{{ asset('/css/img/logo1.4.png') }}" width="390px">
          <div class="title">Registrar una cuenta</div>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input id="name" type="text" placeholder="Ingresa tu nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input id="email" type="email" placeholder="Ingresa tu email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input id="password" placeholder="Ingrese su contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input id="password-confirm" placeholder="Confirmar contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

              </div>
              <div class="button input-box">
                <button type="submit" >
                  {{ __('Registrarse') }}
              </button>
              </div>
              <div class="text sign-up-text">¿Ya tienes una cuenta? <label for="flip">Inicia sesión ahora</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>


  <a class="read_more" href="/login"
  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
<i class='bx bx-log-out'></i>
<span class="links_name">Atrás</span></a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
   @csrf
</form>
@endsection
