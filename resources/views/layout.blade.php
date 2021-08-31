<!doctype html>
<html lang="en">
  <head>
    
      <meta charset="UTF-8">
      <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
      <link rel="stylesheet" href="../css/style.css">
      <!-- Boxicons CDN Link -->	
  <script src="http://code.jquery.com/jquery-latest.js"></script>
    
      <!-- Boxicons CDN Link -->
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title' , '2242762')</title>









    <h1> @yield('h1') </h1>

    <div class="container">


        @yield('content')

        <div class="sidebar">
          <div class="logo-details">
            <img src="../logo1.1.png" width="40px" height="40px ">
          <!-- <i class='bx bxl-c-plus-plus'></i> -->
          <span class="logo_name">Arbeid</span>
        </div>
            <ul class="nav-links">
              <li><a href="#">
                <i class="fas fa-user"></i>
                <span class="links_name" >Usuario</span>
                </a>
                <ul >
                  <li> <a href="#" class="active">
                    <i class="fas fa-user-plus"></i>
                    <span class="links_name" >Registrar usuario</span>
                  </a></li>
                  <li><a href="#">
                    <i class="fas fa-users-cog"></i>
                    <span class="links_name">Consultar usuario</span>
                  </a></li>
                  <li><a href="#">
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
                  <li> <a href="#" class="active">
                    <i class="fas fa-file-medical"></i>
                    <span class="links_name" >Registrar Accidente</span>
                  </a></li>
                  <li><a href="#">
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
                  <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Salir</span>
                  </a>
                </li> 
              
            </ul>
        </div>
      
        <section class="home-section">
          <nav>
            <div class="sidebar-button">
              <i class='bx bx-menu sidebarBtn'></i>
              <span class="dashboard">Arbeid</span>
            </div>
            <div class="search-box">
              <input type="text" placeholder="Buscar...">
              <i class='bx bx-search' ></i>
            </div>
            <div class="profile-details">
              <img src="portada-foto-perfil-redes-sociales-consejos.jpg" alt="">
              <span class="admin_name">Administrador</span>
               <i class='bx bx-chevron-down' ></i> 
            </div>
          </nav>
         
                  <br>


                  <style>
                    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
                  @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
                  * {
                    margin: 0;
                    padding: 0;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                      box-sizing: border-box;
                    font-family: "Poppins", sans-serif;
                  }
                  
                  
                  a {
                    text-decoration: none;
                    
                  }
                  
                  .sidebar.active {
                      width: 60px;
                  
                  }
                  .sidebar .logo-details {
                    height: 80px;
                    display: flex;
                    margin-left: 10px;
                    align-items: center;
                  }
                  .sidebar .logo-details i {
                    font-size: 28px;
                    font-weight: 500;
                    color: #fff;
                    min-width: 60px;
                    text-align: center;
                  }
                  .sidebar .logo-details img {
                    margin-right: 20px;
                    margin-left: 5px;
                  }
                  
                  .sidebar .logo-details .logo_name {
                    color: #fff;
                    font-size: 24px;
                    font-weight: 800;
                    font-family: Arbeid;
                  }
                  
                  .sidebar {
                  
                  position: fixed;
                    height: 100%;
                    width: 240px;
                    background: #057a8d;
                    transition: all 0.5s ease;
                  }
                  
                  .sidebar .nav-links {
                    width: 100%;
                      margin-top: 10px;
                    padding-left: 0%;
                    margin-top: 10px;
                  }
                  
                  .sidebar .nav-links ul {
                    padding-left: -2rem;
                  margin-left: -10px;
                  }
                  
                  .sidebar .nav-links li {
                    position: relative;
                    list-style: none;
                    margin-left: -20px;
                    
                  }
                  .sidebar .nav-links li a {
                    color:#fff;
                    display: block;
                    padding: 15px 20px;
                    background: #057a8d;
                      height: 100%;
                    width: 100%;
                    display: flex;
                    align-items: center;
                    text-decoration: none;
                    transition: all 0.4s ease;
                      
                  }
                  
                  .sidebar .nav-links li a:hover {
                    background: #086270;
                      color: black;
                  }
                  .sidebar .nav-links li a.active{
                      background: #086270;
                      color: black;
                  }
                  .sidebar .nav-links li i{
                      min-width: 60px;
                    text-align: center;
                    font-size: 18px;
                    color: #fff;
                  }
                  
                  .sidebar .nav-links ul {
                    display: none;
                  }
                  
                  .sidebar .nav-links ul li a {
                    background: #057a8d;
                    color:#e9e9e9;
                  }
                  
                  /* .sidebar .nav-links .activado > a {
                    background: #086270;
                      color: black;
                  } */
                  .sidebar .nav-links li a .links_name {
                    color: #fff;
                    font-size: 15px;
                    font-weight: 400;
                    white-space: nowrap;
                  }
                  
                  .sidebar .nav-links .log_out {
                    position: absolute;
                    bottom: 0;
                    width: 100%;
                  }
                  
                  .home-section {
                    position: relative;
                    background: #f5f5f5;
                    min-height: 100vh;
                    width: calc(100% - 240px);
                    left: 240px;
                    
                    transition: all 0.5s ease;
                  }
                  
                  .home-section nav {
                    display: flex;
                    justify-content: space-between;
                    height: 80px;
                    background: #fff;
                    display: flex;
                    align-items: center;
                    position: fixed;
                    width: calc(100% - 240px);
                    left: 240px;
                    z-index: 100;
                    padding: 0 20px;
                    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                    transition: all 0.5s ease;
                  }
                  .sidebar.active ~ .home-section nav {
                    left: 60px;
                    width: calc(100% - 60px);
                    
                  }
                  
                  .home-section nav .sidebar-button {
                    display: flex;
                    align-items: center;
                    font-size: 24px;
                    font-weight: 500;
                  }
                  
                  
                  nav .sidebar-button i {
                    font-size: 35px;
                    margin-right: 10px;
                  }
                  .home-section nav .search-box {
                    position: relative;
                    height: 50px;
                    max-width: 550px;
                    width: 100%;
                    margin: 0 20px;
                  }
                  nav .search-box input {
                    height: 100%;
                    width: 100%;
                    outline: none;
                    background: #f5f6fa;
                    border: 2px solid #efeef1;
                    border-radius: 6px;
                    font-size: 18px;
                    padding: 0 15px;
                  }
                  nav .search-box .bx-search {
                    position: absolute;
                    height: 40px;
                    width: 40px;
                    background: #2697ff;
                    right: 5px;
                    top: 50%;
                    transform: translateY(-50%);
                    border-radius: 4px;
                    line-height: 40px;
                    text-align: center;
                    color: #fff;
                    font-size: 22px;
                    transition: all 0.4 ease;
                  }
                  
                  .home-section nav .profile-details {
                    display: flex;
                    align-items: center;
                    background: #f5f6fa;
                    border: 2px solid #efeef1;
                    border-radius: 6px;
                    height: 50px;
                    min-width: 190px;
                    padding: 0 15px 0 2px;
                  }
                  
                  nav .profile-details img {
                    height: 40px;
                    width: 40px;
                    border-radius: 6px;
                    object-fit: cover;
                  }
                  nav .profile-details .admin_name {
                    font-size: 15px;
                    font-weight: 500;
                    color: #333;
                    margin: 0 10px;
                    white-space: nowrap;
                  }
                  nav .profile-details i {
                    font-size: 25px;
                    color: #333;
                  }
                  .home-section .home-content {
                    position: relative;
                    padding-top: 104px;
                  }
                  
                  
                  /* left box */
                   .recent-sales {
                    width: 90%;
                    background: #fff;
                    padding: 20px 30px;
                    margin: 0 20px;
                    border-radius: 12px;
                    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                  }
                  
                  /* Responsive Media Query */
                  @media (max-width: 1800px) {
                    .sidebar {
                      width: 60px;
                    }
                    .sidebar.active {
                      width: 220px;
                    }
                    .home-section {
                      width: calc(100% - 60px);
                      left: 60px;
                    }
                    .sidebar.active ~ .home-section {
                      /* width: calc(100% - 220px); */
                      overflow: hidden;
                      left: 220px;
                    }
                    .home-section nav {
                      width: calc(100% - 60px);
                      left: 60px;
                    }
                    .sidebar.active ~ .home-section nav {
                      width: calc(100% - 220px);
                      left: 220px;
                    }
                  }
                   @media (max-width: 1150px) {
                    .home-content .sales-boxes {
                      flex-direction: column;
                    }
                    .home-content .sales-boxes .box {
                      width: 100%;
                      overflow-x: scroll;
                      margin-bottom: 30px;
                    }
                    .home-content .sales-boxes .top-sales {
                      margin: 0;
                    }
                  } 
                  @media (max-width: 1000px) {
                    .overview-boxes .box {
                      width: calc(100% / 2 - 15px);
                      margin-bottom: 15px;
                    }
                  }
                  @media (max-width: 700px) {
                    nav .sidebar-button .dashboard,
                    nav .profile-details .admin_name,
                    nav .profile-details i {
                      display: none;
                    }
                    .home-section nav .profile-details {
                      height: 50px;
                      min-width: 40px;
                    }
                    .home-content .sales-boxes .sales-details {
                      width: 560px;
                    }
                  }
                  
                  @media (max-width: 550px) {
                    .overview-boxes .box {
                      width: 100%;
                      margin-bottom: 15px;
                    }
                    .sidebar.active ~ .home-section nav .profile-details {
                      display: none;
                    }
                  }
                  
                   .login-box {
                      position: relative;
                      margin: 5px;
                      box-sizing: border-box;
                      height: 50px;
                      margin: 50px 0px;
                    } 
                    
                  
                   
                    .login-box .user-box{
                      position: absolute;
                      box-sizing: border-box;
                      width: 45%;
                      padding: 10px 0;
                    }
                    .login-box .user-box1 {
                      position: absolute;
                      box-sizing: border-box;
                      width: 45%;
                      left: 50%;
                      padding: 10px 0;
                    }
                  
                   .radio{
                    position: relative;
                      top:5px;
                      left: 0;
                      padding: 10px 0;
                      pointer-events: none;
                      top:-5px;
                      left: 0;
                      color: #000;
                      font-size: 15px;
                   }
                  
                    .login-box .user-box input,
                    .login-box .user-box1 input,
                    .login-box .user-box1 select,
                    .login-box .user-box1 select,
                    .login-box .user-box select,
                    .login-box .user-box select {
                      width: 100%;
                      padding: 10px 0;
                      font-size: 16px;
                      color: #000;
                   
                      border: none;
                      border-bottom: 1px solid #000;
                      outline: none;
                      background: transparent;
                     
                    }
                    
                    .login-box .user-box .label,
                    .login-box .user-box1 .label  {
                      position: absolute;
                      top:0;
                      left: 0;
                      padding: 10px 0;
                      font-size: 16px;
                      color: #000;
                      pointer-events: none;
                      transition: .5s;
                      
                    }
                    
                    .login-box .user-box input:focus ~ .label,
                    .login-box .user-box input:valid ~ .label,
                    .login-box .user-box1 input:focus ~ .label,
                    .login-box .user-box1 input:valid ~ .label,
                    .login-box .user-box select:focus ~ .label,
                    .login-box .user-box select:valid ~ .label,
                    .login-box .user-box1 select:focus ~ .label,
                    .login-box .user-box1 select:valid ~ .label
                     {
                      top: -20px;
                      left: 0;
                      color: #000;
                      font-size: 12px;
                    }
                    .label1{
                      position: absolute;
                      top:0;
                      left: 0;
                      padding: 10px 0;
                      pointer-events: none;
                      top: -20px;
                      left: 0;
                      color: #000;
                      font-size: 12px;
                    }
                    .login-box .user-box1 {
                      position: absolute;
                      box-sizing: border-box;
                      width: 45%;
                      left: 50%;
                      padding: 10px 0;
                    }
                    
                    
                    @font-face {
                      font-family: Arbeid;
                      src: url(font/Azonix-1VB0.otf);
                    }
                  
                      </style>
  </section>
  <script src="css/js/menu.js" > </script>
</body>
</html>
