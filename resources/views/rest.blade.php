<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RESTAURANTS</title>
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
            <li class="nav-item"><a href="<?php echo asset('profile.php');?>" class="nav-link">profile</a></li>

            <li class="nav-item"><a href="<?php echo asset('rooms.php');?>" class="nav-link">Rooms</a></li>

            <li class="nav-item active"><a href="<?php echo asset('rest.php');?>" class="nav-link">Restaurants</a></li>
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
      <div class="slider-item" style="background-image: url('images/b47e1152307807.590bd66ad49c4.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-end">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Restaurant</span></p>
              <h1 class="mb-3">DISCOVER EGYPTIAN FOODS</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Menu</span>
            <h2>Restaurant &amp; Cafe</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 dish-menu">

            <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link py-3 px-4 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="flaticon-tray"></span> Main</a>
              <a class="nav-link py-3 px-4" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="flaticon-beer"></span> Dessert</a>
              <a class="nav-link py-3 px-4" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="flaticon-cheers"></span> Drinks</a>
            </div>

            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dish-3.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Grilled Beef with potatoes</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dish-4.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Fruit Vanilla Ice Cream</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dish-5.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Asian Hoisin Pork</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dish-6.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Spicy Fried Rice &amp; Bacon</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dish-7.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Mango Chili Chutney</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dish-8.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Savory Watercress Chinese Pancakes</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dish-9.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Soup With Vegetables And Meat</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dish-10.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Udon Noodles With Vegetables</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dish-11.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Baked Lobster With A Garnish</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dish-8.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Octopus with Vegetables</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- END -->

              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dessert-1.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Grilled Beef with potatoes</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dessert-2.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Grilled Beef with potatoes</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dessert-3.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Grilled Beef with potatoes</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dessert-4.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Grilled Beef with potatoes</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dessert-5.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Grilled Beef with potatoes</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dessert-6.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Tiramisu</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dessert-7.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Chocolate Cream</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dessert-8.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Pizza Pie</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dessert-9.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Sicilian Ricotta</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dessert-10.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Mango FLoat</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- END -->

              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-1.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Lemon Juice</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-2.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Guava Juice</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-3.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Sprite</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-4.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Cola</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-5.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Wine</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-6.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Beer</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-7.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Mango Juice</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-8.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Apple Juice</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-9.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Strawberry Juice</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-10.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Orange Juice</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$29</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
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
    
  </body>
</html>