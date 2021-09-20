<!DOCTYPE html>
<html lang="en">
<head>

     <title>Digital Trend HTML Template</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
     <link rel="icon" type="image/jpg" href="{{ asset('/css/img/logo1.1.png') }}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ asset('/css/stylef.css') }}">

</head>
<body>
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

                <button type="submit">
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

