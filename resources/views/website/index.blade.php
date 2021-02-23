@extends('website.layouts.front')
@section('content')
    {{--  //sliders  --}}
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/valley-of-the-kings.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-start">
            <div class="col-md-6 col-sm-12 ftco-animate">
              <h1 class="mb-4">Welcome to EGYPT</h1>
              <abbr title="Youtube : Experience-Egypt All &copy; reserved"><p><a href="<?php echo asset('videos/This is Egypt.mp4');?>" class="btn btn-primary btn-outline-white px-4 py-3 popup-vimeo"><span class="ion-ios-play mr-2"></span>THIS IS EGYPT</a></p></abbr>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/PYRAMIDS.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-start">
            <div class="col-md-6 col-sm-12 ftco-animate">
              <h1 class="mb-4">Grand SPHINX</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/nile.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-start">
            <div class="col-md-6 col-sm-12 ftco-animate">
              <h1 class="mb-4">Book Trips in Nile</h1>
            </div>
          </div>
        </div>
      </div>


      <div class="slider-item" style="background-image: url('images/06070052_8_A_resort_in_Sharm_El_Sheikh fliped.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-start">
            <div class="col-md-6 col-sm-12 ftco-animate">
              <h1 class="mb-4">Book the perfect accomodations without breaking the bank</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('images/Egypt-Abu-Simbel-Statues-Pharaoh-Ramesses-II-Temple-Ramesses-1440x960.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-start">
            <div class="col-md-6 col-sm-12 ftco-animate">
              <h1 class="mb-4">Abu-Simbel-Statues</h1>
            </div>
          </div>
        </div>
      </div>


      <div class="slider-item" style="background-image: url('images/SHARM.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-start">
            <div class="col-md-6 col-sm-12 ftco-animate">
              <h1 class="mb-4">HILTON SHARM ELSHEKH</h1>
            </div>
          </div>
        </div>
      </div>
          <!-- END slider -->
    </section>


    {{--  //restaurants  --}}
    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-md-center align-items-sm-end" style="background-image: url('images/food/foodcover.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row desc d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <span class="subheading">RESTAURANTS</span>
              <h2 class="h1 font-weight-bold">Food Centre</h2>
              <p><a href="{{ url('restaurants') }}" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">View more details</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{--  //booking  --}}
    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-md-center align-items-sm-end" style="background-image: url('images/booking/fl.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row desc d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <span class="subheading">Our Flights</span>
              <h2 class="h1 font-weight-bold">Booking Centre</h2>
              <p><a href="{{ url('booking') }}" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">View more details</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{--  //offers  --}}
    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-md-center align-items-sm-end" style="background-image: url('images/pyra2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row desc d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <span class="subheading">Our Offers</span>
              <h2 class="h1 font-weight-bold">Trips Centre</h2>
              <p><a href="{{ url('offers') }}" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">View more details</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
