<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Profile</title>
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
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">DISCOVER EGYPT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?php echo asset('index.php');?>" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="<?php echo asset('profile.php');?>" class="nav-link">profile</a></li>

            <li class="nav-item"><a href="<?php echo asset('rooms.php');?>" class="nav-link">Rooms</a></li>

            <li class="nav-item"><a href="<?php echo asset('rest.php');?>" class="nav-link">Restaurants</a></li>
            <li class="nav-item"><a href="<?php echo asset('Amenities.php');?>" class="nav-link">Amenities</a></li>
            <li class="nav-item"><a href="<?php echo asset('booking.php');?>" class="nav-link">Booking</a></li>
            <li class="nav-item"><a href="<?php echo asset('offers.php');?>" class="nav-link">Offers</a></li>
            <li class="nav-item"><a href="<?php echo asset('about.php');?>" class="nav-link">About us</a></li>
            <li class="nav-item"><a href="<?php echo asset('contact.php');?>" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/maldives_tropical_bungalows_sky_90627_1920x1080.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-end">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Profile</span></p>
              <h1 class="mb-3">My Profile</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

      <!--end Navbar -->
      
                <div class="card-body">
                  <form>

                  <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      
                     <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone</label>
                          <input type="Phone" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                    </div>
                    <!--start address section-->
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>

                    <!--end of address section-->

                  <!--start optional-->
                  <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Job</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating" class="form-control">Gender </label></br>
                            <input type="radio" name="gender" value="male">Male</br>
                            <input type="radio" name="gender" value="female">Female
                          </div>
                        </div>
                    
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

      
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">DISCOVER EGYPT</h2>
              <p>OUR SOCIAL PLATES.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="WWW.TWITTER/DISCOVER-EGYPT.COM"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="WWW.FACEBOOK/DISCOVER-EGYPT.COM"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="WWW.INSTAGRAM/DISCOVER-EGYPT.COM"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">AGENCY Opening Hours</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Sunday: <span>08: - 16:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Monday: <span>08: - 16:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Tuesday: <span>08: - 16:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Wednesday: <span>08: - 16:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Thursday: <span>08: - 16:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Friday: <span>CLOSED</span></a></li>
                <li><a href="#" class="py-2 d-block">Saturday: <span>CLOSED</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">198 West 21th Street,New cairo 721 New Capital B 10016</a></li>
                <li><a href="#" class="py-2 d-block">HOTLINE: <span>19877</span></a></li>
                <li><a href="#" class="py-2 d-block">info@DICOVER-EGYPT.com</a></li>
                <li><a href="#" class="py-2 d-block">DISOVER-EGYPT@email.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">FEEDBACKS</h2>
              <p>IF YOU FACED ANY PROPLEM, WRITE YOUR EMAIL AND WE WILL CONTACT WITH YOU.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <span class="icon icon-paper-plane"></span>
                  <input type="text" class="form-control" placeholder="EMAIL">
                </div>
              </form>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to DISCOVER-EGYPT can't be removed. SITE is licensed under CC BY 36.8. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made by <a href="https://DISCOVER-EGYPT.com" target="#">PROJECT TEAM</a>
  <!-- Link back to DISCOVER-EGYPT can't be removed. SITE is licensed under CC BY 36.8. --></p>
          </div>
        </div>
      </div>
    </footer>

  

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
</body>

  </html>