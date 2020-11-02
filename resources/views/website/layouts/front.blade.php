<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DISCOVER EGYPT</title>
    <link rel="logo" href="images/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo asset('css/open-iconic-bootstrap.min.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/animate.css');?>" type="text/css">
    
    <link rel="stylesheet" href="<?php echo asset('css/owl.carousel.min.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/owl.theme.default.min.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/magnific-popup.css');?>" type="text/css">

    <link rel="stylesheet" href="<?php echo asset('css/aos.css');?>" type="text/css">

    <link rel="stylesheet" href="<?php echo asset('css/ionicons.min.css');?>" type="text/css">

    <link rel="stylesheet" href="<?php echo asset('css/bootstrap-datepicker.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/jquery.timepicker.css');?>" type="text/css">

    
    <link rel="stylesheet" href="<?php echo asset('css/flaticon.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/icomoon.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/style.css');?>" type="text/css">
    
    @yield('css')
    
  </head>
  
  <body>
    
    {{-- Navbar -- start --}}
        @include('website.layouts.navbar')
    {{-- Navbar -- end --}}

    
    {{-- Content - start --}}
        @yield('content')
    {{-- Content - end --}}
    
    
    {{-- Footer - start --}}
        @include('website.layouts.footer')
    {{-- Footer - end --}}
    
  

  <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  @yield('js')
    
  </body>
</html>