<!--
=========================================================
* Material Kit 3 - v3.1.0
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/KUPTECH_ICON.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/KUPTECH_ICON.png') }}">
  <title>
    {{ config('app.name') }}
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('thirdparty/material-kit') }}/css/material-kit.css?v=3.1.0" rel="stylesheet" />
    <!--   Core JS Files   -->
  <script src="{{ asset('thirdparty/material-kit') }}/js/core/popper.min.js" type="text/javascript"></script>
  <script src="{{ asset('thirdparty/material-kit') }}/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="{{ asset('thirdparty/material-kit') }}/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="{{ asset('thirdparty/material-kit') }}/js/plugins/countup.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script src="{{ asset('thirdparty/material-kit') }}/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>
  <style>

    .custom-img{
      height: 35px;
      weight: 35px;
    }

    .custom-img-icon{
      height: 35px;
      weight: 35px;
      border-radius: 100%;
    }

    .bg-custom-primary {
      background-color: #98D8EF !important;
    }

    .bg-custom-secondary {
      background-color: #f4f4f5 !important;
    }

    .custom-img-hero {
      height: 400px;
      weight: 80px;
    }

    .custom-mask {
      position: absolute;
      background-size: cover;
      background-position: center center;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0.9;
    }


    .text-dark {
      color: #000000 !important;
    }
    
    .bg-opacity-5 {
      background-color: rgba(255,255,255, 0.9) !important;
    }
    .bg-opacity-4 {
      background-color: rgba(255,255,255, 0.8) !important;
    }
    .bg-opacity-3 {
      background-color: rgba(255,255,255, 0.6) !important;
    }
    .bg-opacity-2 {
      background-color: rgba(255,255,255, 0.4) !important;
    }
    .bg-opacity-1 {
      background-color: rgba(255,255,255, 0.2) !important;
    }


  </style>
</head>

<body class="bg-gray-700">

  {{ $slot }}

</body>

</html>