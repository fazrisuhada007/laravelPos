<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kitatanam</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('public/frontend/img/favicon.png') }}" rel="icon">
  <link href="{{asset('public/frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('public/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/frontend/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/frontend/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/frontend/vendor/venobox/venobox.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('public/frontend/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v2.0.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  @include('frontend.layouts.header')
  @yield('content')
  @include('frontend.layouts.footer')
  <!-- Vendor JS Files -->
  <script src="{{ asset('public/frontend/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('public/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('public/frontend/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('public/frontend/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('public/frontend/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('public/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('public/frontend/vendor/venobox/venobox.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('public/frontend/js/main.js') }}"></script>

</body>

</html>