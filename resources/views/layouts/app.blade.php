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
              <a href="#funcionalidades" class="nav-link smoothScroll">Modúlos</a>
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
              <a href="/register" class="nav-link contact">Iniciar sesión</a>
          </li>
         </ul>
     </div>

</nav>



  <section class="hero hero-bg d-flex justify-content-center align-items-center">
            <div class="container">
                 <div class="row">

                     <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                           <div class="hero-text">

                                <h1 class="text-white" data-aos="fade-up">Gestor de riesgos profesionales </h1>

                                <a href="/register" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">¡Iniciar sesión!</a>

                           </div>
                     </div>

                     <div class="col-lg-6 col-12">
                       <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                         <img src="{{ asset('/css/img/working-girl.png') }}" class="img-fluid" alt="working girl">
                       </div>
                     </div>

                 </div>
            </div>
  </section>




<!-- funcionalidad -->
<div id="funcionalidades" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
          <img src="{{ asset('/css/img/about-left-image.png') }}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="section-heading">
          <strong><h2>Funcionalidades</h2></strong>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <div class="about-item">
              <h4>750+</h4>
              <h6>proyectos finalizados</h6>
            </div>
          </div>
          <div class="col-lg-4 col-sm-4">
            <div class="about-item">
              <h4>340+</h4>
              <h6>Clientes felices</h6>
            </div>
          </div>
        </div>
        <p> La función principal de ARL es cooperar con las empresas para identificar ,controlar y Reportar los riesgos en el lugar de trabajo para evitar accidentes y enfermedades profesionales.</p>
        <div class="main-green-button"><a href="#">Discover company</a></div>
      </div>
    </div>
  </div>
</div>

<!-- funcionalidades -->
  <!-- ***** Features Big Item Start ***** -->
  <section class="section padding-top-70 padding-bottom-0" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="{{ asset('/css/assets/img/left-image.png') }}" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                <div class="left-heading">
                    <h2 class="section-title">Empleado</h2>
                </div>
                <div class="left-text">
                    <p>Manejo de los datos del empleado <br>
                      Registro de documentos: ARL, EPS, ARP, Vinculación personal<br>
                    Manipulación de los datos</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hr"></div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->

<!-- ***** Features Big Item Start ***** -->
<section class="section padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                <div class="left-heading">
                    <h2 class="section-title">Accidentes</h2>
                </div>
                <div class="left-text">
                    <p>-Generar certificado del control de la ARL <br>
                      -Generar reporte de riesgos <br>
                      -Seguimiento de reporte de accidentes<br>
                      -Consulta el control de la ARL </p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <img src=" {{ asset('/css/img/130175.png') }}" class="rounded img-fluid d-block mx-auto" alt="App" width="50%" height="50%">
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->
 <!-- ***** Features Big Item Start ***** -->
 <section class="section padding-top-70 padding-bottom-0" id="features">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
              <img src=" {{ asset('/css/img/left-image.png') }}" class="rounded img-fluid d-block mx-auto" alt="App">
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
              <div class="left-heading">
                  <h2 class="section-title">Manejo de los datos del empleado</h2>
              </div>
              <div class="left-text">
                  <p>Nullam sit amet purus libero. Etiam ullamcorper nisl ut augue blandit, at finibus leo efficitur. Nam gravida purus non sapien auctor, ut aliquam magna ullamcorper.</p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
              <div class="hr"></div>
          </div>
      </div>
  </div>
</section>
<!-- ***** Features Big Item End ***** -->

    <!-- end Hosting -->
   <!-- Services  -->

    <!-- end Servicess -->
    <!-- why -->

<!-- beneficios  -->
<div id="beneficios" class="our-services section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <h6>Arbeid</h6>
          <h2><strong>Beneficios</strong>  para nuestros <em>Clientes</em></h2>
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
                <h4>Menos tiempo de producción</h4>
                <p>Como es un sistema de información facil de utilizar al momento de utilizarlo se va garantizar un menor tiempo de producción</p>
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
                <h4>Menores costos</h4>
                <p>Al ser un sistema de información que genera menos tiempo en la gestión de accidentes los empleados se enfocaran en otras acctividades y teniendo una mejor produccion.</p>
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
                <h4>Registro de información más acertivo</h4>
                <p>Nuestro sistema de información al momento de registar es facil de entender y va hacer mas puntual en los untos que necesita.</p>
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
                <h4>Mejora el rendimiento de la información</h4>
                <p>Al momento de hacer cualquier consulta o registro de información en nuestro sistema de información este va hacer de una forma fácil y sencilla.</p>
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
                <h4>Eficiencia al registrar cualquier información</h4>
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
                <h4>Un seguimiento continuo</h4>
                <p>Nuestro sistema de informacion va a generar un analisis de datos haciendo que se pueda ver seguimiento de los procesos.</p>
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

                       <img src="{{ asset('/css/img/female-avatar.png') }}" class="img-fluid" alt="website">
                     </div>
                 </div>

                 <div class="col-lg-6 col-md-7 col-12">
                   <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Testimonios de Clientes</h4>

                   <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                   <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Al momento de utilizar el sistema de informacion fue facil y sencillo y me generaba reportes de inmediato </h2>

                   <p data-aos="fade-up" data-aos-delay="400">
                     <strong>Mary Zoe</strong>

                     <span class="mx-1">/</span>

                     <small>Digital Agency (CEO)</small>
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

                      <h1 class="mb-4">Hola quieres sabes mas sobre nuestro <strong>sistema de información</strong> contáctanos</h1>

                      <p>ó envianos un correo electronico a <a href="mailto:hello@company.com">hello@company.com</a></p>
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
