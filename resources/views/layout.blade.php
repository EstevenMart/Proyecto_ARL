<!doctype html>
<html lang="en">
  <head>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
     <script src="http://code.jquery.com/jquery-latest.js"></script>
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
      <link rel="icon" type="image/jpg" href="{{ asset('/css/img/logo1.1.png') }}">


      <title>@yield('title' , 'ARL')</title>
    </head>
    <body>

     <div class="sidebar">
      <div class="logo-details">
        <img src="{{ asset('/css/img/logo1.1.png') }}" width="40px" height="40px ">
      <!-- <i class='bx bxl-c-plus-plus'></i> -->
      <span class="logo_name">Arbeid</span>
      </div>
        <ul class="nav-links">
          <li><a href="#">
            <i class="fas fa-user"></i>
            <span class="links_name" >Usuario</span>
            </a>
            <ul >
              <li> <a href="{{-- {{route('usuario.formAccidente')}} --}}" >
                <i class="fas fa-user-plus"></i>
                <span class="links_name" >Registrar usuario</span>
              </a></li>
              <li><a href="/usuarios">
                <i class="fas fa-users-cog"></i>
                <span class="links_name">Consultar usuario</span>
              </a></li>
              <li><a href="{{-- {{ route('usuario.saveUsuario') }} --}}">
                <i class="fas fa-user-edit"></i>
                <span class="links_name">Modificar usuario</span>
              </a></li>
            </ul>
          </li>
          <li><a href="#">

            <i class="fas fa-file-medical-alt"></i>
            <span class="links_name" > Accidente</span>
            </a>
            <ul>
              <li> <a href="#" >
                <i class="fas fa-file-medical"></i>
                <span class="links_name" >Registrar Accidente</span>
              </a></li>
              <li><a href="/accidentes">
                <i class="fas fa-paste"></i>
                <span class="links_name">Consultar Accidente</span>
              </a></li>
              <li><a href="#">
                <i class='bx bx-list-ul' ></i>
                <span class="links_name">Modificar Accidente</span>
              </a></li>
            </ul>
          </li>
          <li class="log_out">
            <a class="nav-link px-3" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
         <i class='bx bx-log-out'></i>
         <span class="links_name">Salir</span></a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
            </li>

        </ul>
    </div>

    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">Arbeid</span>
        </div>

        <div class="profile-details">
          <img src="portada-foto-perfil-redes-sociales-consejos.jpg" alt="">
          <span class="admin_name">{{ Auth::user()->name }}</span>
           <i class='bx bx-chevron-down' ></i>
        </div>
      </nav>
           </div>
        </div>
  </div>

  <br><br><br><br><br>
 <h1> @yield('h1') </h1>
    @yield('Contenido')

  </section>
<script src="{{ asset('/js/menu.js') }}"></script>
</body>
</html>
