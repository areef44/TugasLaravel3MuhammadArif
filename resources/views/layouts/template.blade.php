<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }}</title>


 
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href={{ asset('assets/img/favicon.png')}} rel="icon">
  <link href={{ asset('assets/img/apple-touch-icon.png')}} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }} rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }} rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{ asset('assets/css/style.css')}} rel="stylesheet">
  <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <!-- =======================================================
  * Template Name: Sailor - v4.9.1
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('partials.navbar')

  <main id="main">
      
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>{{ $judul }}</h2>
          <h2></h2>
          
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
   @yield('container')
   @yield('produk')
   @yield('artikel')
   @yield('produkmanage')
   @yield('tambahArtikel')
   @yield('tambahProduk')
   @yield('editarticle')
   @yield('editdata')
   @yield('showarticle')
   @yield('login')
   @yield('admin')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa-sharp fa-solid fa-arrow-up"></i></a>

  <!-- Vendor JS Files -->
<script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<script src={{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}></script>
<script src={{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}></script>
<script src={{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}></script>
<script src={{ asset('assets/vendor/waypoints/noframework.waypoints.js')}}></script>
<script src={{ asset('assets/vendor/php-email-form/validate.js')}}></script>


  <!-- Template Main JS File -->
  <script src={{ asset('assets/js/main.js') }}></script>

</body>

</html>