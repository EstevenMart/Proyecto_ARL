<!DOCTYPE html>
<html lang="en">
<head>

     <title>Aseguradora de Riesgos Laborales</title>

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
     <link rel="stylesheet" href="{{ asset('/css/templatemo-digital-trend.css') }}">

</head>
<body>

  <!-- MENU BAR -->
  <nav class="navbar navbar-expand-lg">

     <a class="navbar-brand title" href="index.html">
       <img src="{{ asset('/css/img/logo1.1.png') }}" width="55px" height="55px">
       Arbeid
     </a>

     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
         aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav ml-auto">
             <li class="nav-item">
                 <a href="#about" class="nav-link smoothScroll"></a>
             </li>
             <li class="nav-item">
              <a href="#container" class="nav-link smoothScroll">Inicio</a>
          </li>
             <li class="nav-item">
              <a href="#funcionalidades" class="nav-link smoothScroll">Módulos</a>
          </li>
             <li class="nav-item">
              <a href="#funcionalidades" class="nav-link smoothScroll">Funcionalidades</a>
          </li>
             <li class="nav-item">
                 <a href="#beneficios" class="nav-link smoothScroll">Beneficios</a>
             </li>
             <li class="nav-item">
                 <a href="#contactanos" class="nav-link smoothScroll">Contáctanos</a>
             </li>
             <li class="nav-item">
              @if (Route::has('login'))
              <a class="nav-link contact" href="{{ route('login') }}">
                 iniciar sesion
              </a>
          @endif

          </li>
         </ul>
     </div>

</nav>



  <section class="hero hero-bg d-flex justify-content-center align-items-center">
            <div class="container">
                 <div class="row">

                     <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                           <div class="hero-text">

                                <h1 class="text-white" data-aos="fade-up">Gestor de Riesgos Profesionales </h1>
                                 <p class="text-white">Dile adiós a las celdas, fórmulas y tablas dinámicas de Excel. Comienza a usar nuestro software que te permite ser más eficiente y estratégico en tu labor.

                                  Comienza gratis <p>

                                <a href="{{ route('login') }}" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Iniciar sesión</a>

                           </div>
                     </div>

                     <div class="col-lg-6 col-12">
                       <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                         <img src="{{ asset('/css/img/Design stats-rafiki3.png') }}" class="img-fluid" alt="working girl" width="1800px" height="1800px">
                       </div>
                     </div>

                 </div>
            </div>
  </section>


             <div class="title">
               <center><h1><strong>Módulos</strong></h1></center>

             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="choose_bg">
    <div class="container">
       <div class="white_bg">
       <div class="row">
          <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
             <div class="for_box">
                <i><img src="{{ asset('/css/img/searching-amico.png') }}" width="150px" height="150px" /></i>
                <h3>Consulta fácil </h3>
                <p>Encuentra la información ordenada de tus procesos, riesgos y controles<br>

                </p>
             </div>
          </dir>
          <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
             <div class="for_box">
                <i><img src="{{ asset('/css/img/Certification-pana.png') }}" width="150px" height="150px"/></i>
                <h3>Certificado del control</h3>
                <p>Control avalado por la Aseguradora de Riesgos Laborales  </p>
             </div>
          </dir>
          <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
             <div class="for_box">
                <i><img src="{{ asset('/css/img/out-bro.png') }}" width="150px" height="150px"/></i>
                <h3>Reporte de riesgo</h3>
                <p>Se registrara un nuevo reporte correctamente fácil y sencillo
                 </p>
             </div>
          </dir>
          <dir class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
             <div class="for_box">
                <i><img src="{{ asset('/css/img/management-cuate.png') }}" width="150px" height="150px"/></i>
                <h3>Seguimiento efectivo</h3>
                <p>Validar los datos del reporte de riesgo <br>
                Llevar continuidad del reporte</p>
             </div>
          </dir>

       </div>
    </div>
  </div>
 </div>
<!-- end CHOOSE -->


<!-- funcionalidades -->


 <!-- ***** Features Big Item Start ***** -->
  <!-- ***** Home Parallax Start ***** -->
  <section class="mini" id="work-process">
    <div class="mini-content">
        <div class="container">


            <!-- ***** Mini Box Start ***** -->
           <center>  <h1><strong>Funcionalidades</strong> </h1></center>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="#" class="mini-box">
                        <i><img src="{{ asset('/css/img/Server-bro.png') }}" alt="" width="100px" height="100px"></i>
                        <strong>Manejo de los datos del empleado</strong>

                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="#" class="mini-box">
                        <i><img src="{{ asset('/css/img/Hidden-amico.png') }}" alt="" width="100px" height="100px"></i>
                        <strong> Vinculación personal</strong>

                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="#" class="mini-box">
                        <i><img src="{{ asset('/css/img/extraction-rafiki.png') }}" alt="" width="100px" height="100px"></i>
                        <strong>Gestión de datos</strong>

                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="#" class="mini-box">
                        <i><img src="{{ asset('/css/img/searching-amico.png') }}" alt="" width="100px" height="100px"></i>
                        <strong>Consulta el control de la ARL</strong>

                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="#" class="mini-box">
                        <i><img src="{{ asset('/css/img/out-pana.png') }}" alt="" width="100px" height="100px"></i>
                        <strong>Generar reporte de riesgos</strong>

                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <a href="#" class="mini-box">
                        <i><img src="{{ asset('/css/img/engineers-rafiki.png') }}" alt="" width="100px" height="100px"></i>
                        <strong>Seguimiento de reportes</strong>
                    </a>
                </div>
            </div>
            <!-- ***** Mini Box End ***** -->
        </div>
    </div>
</section>
<!-- ***** Home Parallax End ***** -->
<!-- ***** Features Big Item End ***** -->

    <!-- end Hosting -->
   <!-- Services  -->

    <!-- end Servicess -->
    <!-- why -->

<!-- beneficios  -->
<div id="beneficios" class="our-services section">
  <div class="container">


        <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <h5>Arbeid te da los siguientes</h5>
         <center><h1><strong>Beneficios para tu empresa</strong> </h1></center>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon">
                <img src="{{ asset('/css/img/features-icon-black-01.png') }} "  alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="right-content">
                <h4>Disminución de tiempo</h4>
                <p>En pocos minutos realiza las funcionalidades solo agregando los riesgos y listo</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon">
                <img src="{{ asset('/css/img/service-icon-02.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="right-content">
                <h4>Conoce la evolución</h4>
                <p>Consulta fácilmente cómo evolucionan tus riesgos y toma mejores decisiones con esta información.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon">
                <img src="{{ asset('/css/img/service-icon-03.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="right-content">
                <h4>Proceso estándar</h4>
                <p> Mejora la efectividad y la eficiencia operacional haciendo que todos tengan el mismo proceso</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon">
                <img src="{{ asset('/css/img/service-icon-03.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="right-content">
                <h4>Consulta eficíente</h4>
                <p>Al momento de hacer cualquier consulta va hacer de forma fácil, rápida y sencilla </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon">
                <img src="{{ asset('/css/img/service-icon-01.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="right-content">
                <h4>Seguridad al registrar</h4>
                <p>Nuestro sistema de información hace registros rápidos y seguros.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.8s">
          <div class="row">
            <div class="col-lg-4">
              <div class="icon">
                <img src="{{ asset('/css/img/features-icon-black-02.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="right-content">
                <h4>Seguimiento continuo</h4>
                <p>Genera un análisis de datos haciendo que se pueda ver el seguimiento de los procesos.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- TESTIMONIAL -->
  <section class="testimonial section-padding">
       <div class="container">
            <div class="row">

                 <div class="col-lg-6 col-md-5 col-12">
                     <div class="contact-image" data-aos="fade-up">

                       <img src="{{ asset('/css/img/female-avatar.png') }}" class="img-fluid" alt="website" width="450px" height="450px">
                     </div>
                 </div>

                 <div class="col-lg-6 col-md-7 col-12">
                   <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Testimonios de Clientes</h4>

                   <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                   <h2 class="mb-4" data-aos="fade-up" >Al momento de utilizar el sistema de información fue fácil y sencillo y me generaba reportes de inmediato </h2>

                   <p data-aos="fade-up" data-aos-delay="400">
                     <strong>Camila Duarte</strong>

                     <span class="mx-1">/</span>

                     <small>Agente comercial (CEO)</small>
                   </p>
                 </div>

            </div>
       </div>
  </section>

     <!-- CONTACT -->
     <section class="contact section-padding" id="contactanos">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                      <center><h1><strong>Contáctanos</strong> </h1></center>
                      <h1 class="mb-4">Hola quieres saber más sobre nuestro <strong>sistema de información</strong> contáctanos</h1>

                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">

                    <!-- Follow https://templatemo.com/contact page to setup your own contact form -->

                      <form action="#" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                          <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" name="name" placeholder="Nombre">
                          </div>

                          <div class="col-lg-6 col-12">
                            <input type="email" class="form-control" name="email" placeholder="Correo">
                          </div>

                          <div class="col-lg-12 col-12">
                            <textarea class="form-control" rows="6" name="message" placeholder="Mensaje"></textarea>
                          </div>

                          <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button" name="submit">Enviar Mensaje</button>
                          </div>
                        </div>

                      </form>
                    </div>

               </div>
          </div>
     </section>
     @yield('content')



     <!-- SCRIPTS -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <!-- <script src="js/aos.js"></script> -->

     <!-- <script src="js/owl.carousel.min.js"></script> -->
     <!-- <script src="js/smoothscroll.js"></script> -->
     <!-- <script src="js/custom.js"></script> -->

</body>
</html>
