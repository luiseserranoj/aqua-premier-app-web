<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="welcome/assets/img/favicon.png" rel="icon">
  <link href="welcome/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="welcome/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="welcome/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="welcome/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="welcome/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="welcome/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="welcome/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="welcome/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="welcome/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <link rel="shortcut icon" type="image/png" href="{{ asset('dist/img/aqua-service-vip.png') }}">
  <link rel="shortcut icon" sizes="192x192" href="{{ asset('dist/img/aqua-service-vip.png') }}">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Aqua Service VIP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ route('register') }}">Registrarse</a></li>
          <li><a class="getstarted scrollto" href="{{ route('login') }}">Iniciar sesión</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Software Web</h1>
          <h2>Control de inventarios, pedidos, ventas y cobranzas</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{ route('login') }}" class="btn-get-started scrollto">Iniciar sesión</a>            
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="welcome/assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->



  <!-- ======= Footer ======= -->
  <footer id="footer"> 


    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Aqua Service VIP</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Diseñado por <a href="#">Informatica SERGO</a>
      </div>
    </div>

  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="welcome/assets/vendor/aos/aos.js"></script>
  <script src="welcome/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="welcome/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="welcome/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="welcome/assets/vendor/php-email-form/validate.js"></script>
  <script src="welcome/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="welcome/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="welcome/assets/js/main.js"></script>

</body>

</html>