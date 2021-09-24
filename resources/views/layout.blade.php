
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/css/styleDashboar.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/componentDashboar.css') }}">
        <link rel="icon" type="image/jpg" href="{{ asset('/css/img/logo1.1.png') }}">

      <title>@yield('title' , 'ARL')</title>
    </head>

    <body>
      <div id="app">
        <div class="main-wrapper">
          <div class="navbar-bg"></div>
          <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
              <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
              </ul>
              <div class="search-element">
                <input class="form-control" type="search" placeholder="Buscar" aria-label="Search" data-width="250">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                <div class="search-backdrop"></div>
                <div class="search-result">
                  <div class="search-header">
                    Historial
                  </div>
                  <div class="search-header">
                    Projects
                  </div>
                  <div class="search-item">
                    <a href="#">
                      <div class="search-icon bg-danger text-white mr-3">
                        <i class="fas fa-code"></i>
                      </div>
                      Crear un accidente
                    </a>
                  </div>
                  <div class="search-item">
                    <a href="#">
                      <div class="search-icon bg-primary text-white mr-3">
                        <i class="fas fa-laptop"></i>
                      </div>
                      Crear un usuario
                    </a>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav navbar-right">
              <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                  <div class="dropdown-header">Messages
                    <div class="float-right">
                      <a href="#">Mark All As Read</a>
                    </div>
                  </div>
                  <div class="dropdown-list-content dropdown-list-message">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                      <div class="dropdown-item-avatar">
                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle">
                        <div class="is-online"></div>
                      </div>
                      <div class="dropdown-item-desc">
                        <b>Kusnaedi</b>
                        <p>Hello, Bro!</p>
                        <div class="time">10 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item dropdown-item-unread">
                      <div class="dropdown-item-avatar">
                        <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle">
                      </div>
                      <div class="dropdown-item-desc">
                        <b>Dedik Sugiharto</b>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        <div class="time">12 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item dropdown-item-unread">
                      <div class="dropdown-item-avatar">
                        <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle">
                        <div class="is-online"></div>
                      </div>
                      <div class="dropdown-item-desc">
                        <b>Agung Ardiansyah</b>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="time">12 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-avatar">
                        <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle">
                      </div>
                      <div class="dropdown-item-desc">
                        <b>Ardian Rahardiansyah</b>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                        <div class="time">16 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-avatar">
                        <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle">
                      </div>
                      <div class="dropdown-item-desc">
                        <b>Alfa Zulkarnain</b>
                        <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        <div class="time">Yesterday</div>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </li>
              <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                  <div class="dropdown-header">Notifications
                    <div class="float-right">
                      <a href="#">Mark All As Read</a>
                    </div>
                  </div>
                  <div class="dropdown-list-content dropdown-list-icons">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                      <div class="dropdown-item-icon bg-primary text-white">
                        <i class="fas fa-code"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        Template update is available now!
                        <div class="time text-primary">2 Min Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-icon bg-info text-white">
                        <i class="far fa-user"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                        <div class="time">10 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-icon bg-success text-white">
                        <i class="fas fa-check"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                        <div class="time">12 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-icon bg-danger text-white">
                        <i class="fas fa-exclamation-triangle"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        Low disk space. Let's clean it!
                        <div class="time">17 Hours Ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-item-icon bg-info text-white">
                        <i class="fas fa-bell"></i>
                      </div>
                      <div class="dropdown-item-desc">
                        Welcome to Stisla template!
                        <div class="time">Yesterday</div>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                {{-- modificar nombre --}}
                <div class="d-sm-none d-lg-inline-block">@yield('nombre')</div></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="features-profile.html" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Perfil
                  </a>
                  <a href="features-settings.html" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Ajustes
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <div class="main-sidebar">
            <aside id="sidebar-wrapper">
              <div class="sidebar-brand">
                <img class="imagen-logo" src="{{ asset('/css/img/logo1.1.png') }}" >
                <a href="index.html" class="logo_name">Arbeid</a>
              </div>
              <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html"><img class="imagen-logo" src="{{ asset('/css/img/logo1.1.png') }}" ></a>
              </div>
              <ul class="sidebar-menu">
                  <li class="menu-header">Inicio</li>
                  <li><a class="nav-link active" href="blank.html"><i class="far fa-square"></i> <span>Inicio</span></a></li>
                  <li class="menu-header">Modulos</li>
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Accidente</span></a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link" href="/accidentes">Lista de accidente</a></li>
                      <li><a class="nav-link" href="/accidente/createAccidente">Crear accidente</a></li>
                      <li><a class="nav-link" href="/accidentes">Modificar accidente</a></li>
                    </ul>
                    <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Analisis de Acciente</span></a></li>
                    <li><a class="nav-link" href="credits.html"><i class="far fa-file-alt"></i> <span>Planes de acción</span></a></li>
                  <li class="menu-header">Pages</li>
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Usuario</span></a>
                    <ul class="dropdown-menu">
                      <li><a href="auth-forgot-password.html">Lista de Usuario</a></li>
                      <li><a href="auth-login.html">Crear usuario</a></li>
                      <li><a href="auth-register.html">Modificar datos de usuario</a></li>
                      <li><a class="beep beep-sidebar" href="auth-login-2.html">Recuperar contraseña</a></li>
                    </ul>
                  </li>
                     
                  <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a  href="{{ route('logout') }}" class="btn btn-primary btn-lg btn-block btn-icon-split"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                      <i class='bx bx-log-out'></i>
                      <span class="links_name">Salir</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                  </div>
                
            </aside>
          </div>
    
          <!-- Main Content -->
          <div class="main-content">
            <section class="section">
              <div class="section-header">
               <h1> @yield('h1') </h1>
              </div>

    @yield('Contenido')

  </section>
  </div>
  </div>
</div>
@yield('JS')
<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src=" {{ asset('/js/stisla.js') }}"></script>

<!-- Template JS File -->
<script src=" {{ asset('/js/scripts.js') }}"></script>
<script src=" {{ asset('/js/custom.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('/js/index-0.js') }}"></script>

</body>
</html>