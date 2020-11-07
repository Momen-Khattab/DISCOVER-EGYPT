@extends('website.layouts.front')

@section('content')
    {{--  //slider  --}}
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/balloon_flight_plant_91681_1920x1080.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-end">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>About</span></p>
              <h1 class="mb-3">About Us</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{--  //intro  --}}
    <section class="ftco-section-2">
      <div class="container d-flex">
        <div class="section-2-blocks-wrapper row d-flex">
          <div class="img col-sm-12 col-lg-6 order-last" style="background-image: url('images/logo.png');">
          </div>
          <div class="text col-lg-6 order-first ftco-animate">
            <div class="text-inner align-self-start">
              <span class="subheading">About US</span>
              <h3 class="heading">Our Main Goal</h3>
              <p>1-Increasing the rate of foreign investment inside Egypt </br> 2-Promoting the most beautiful places in Egypt </br> 3-Helping those who want to know the tourist attractions and everything related to ancient and modern Egyptian history </br> 4-Facilitating reservations, whether they are booking airline pilots or booking hotel tickets and arrangements for trips</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{--  //insta section  --}}
    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span class="icon-instagram"></span> Instagram</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="#" class="insta-img image-popup" style="background-image: url(images/Luxor-karnak-temple.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="#" class="insta-img image-popup" style="background-image: url(images/morning-time-at-valley-of-the-kings-in-luxor-city--egypt-951657442-5c1e008fc9e77c00011a4843.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="#" class="insta-img image-popup" style="background-image: url(images/KingTut-2.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="#" class="insta-img image-popup" style="background-image: url(images/hero-22.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-5.jpg" class="insta-img image-popup" style="background-image: url(images/fyala_aswan.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    
@endsection