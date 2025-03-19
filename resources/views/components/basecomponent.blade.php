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
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    {{ config('app.name') }}
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  


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
  <script src="{{ asset('thirdparty/material-kit') }}/js/material-kit.min.js?v=3.1.0" type="text/javascript"></script>
</head>

<body class="bg-gray-700">
  <nav class="navbar navbar-expand-lg bg-gray-400 text-dark rounded mt-1 position-sticky top-0">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="{{ route('home') }}">{{ config('app.name') }}</a>

    </div>
  
  </nav>

  <section>
    <div class="row">
      <div class="col">
        <div class="container mt-7 px-5 text-justify">
          <p class="fs-2 text-white opacity-7">KupTech IT Solutions</p>
          <p class="fs-5 text-white opacity-6">We are a team of developers, designers, and marketers who are dedicated to creating the best digital products for our clients. We specialize in web and mobile app development. Our goal is to help you grow your business and reach your target audience. Contact us today to learn more about our services and how we can help you achieve your goals.</p>
        </div>
      </div>
      <div class="col d-none d-md-block">
        <img src="https://learn.g2.com/hubfs/iStock-1130210581.jpg" class="img-fluid">
      </div>

    </div>

  </section>

  <footer>
    <div class="container-fluid bg-gray-400 text-dark text-center py-3 fixed-bottom">
      <p>&copy; <script>document.write(new Date().getFullYear())</script> KupTech IT Solutions. All rights reserved.</p>
    </div>
  </footer>

</body>

</html>