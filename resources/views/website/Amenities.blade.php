@extends('website.layouts.front')
  
@section('content')
  <section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-end">
          <div class="col-md-10 col-sm-12 ftco-animate mb-4">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>other</span></p>
            <h1 class="mb-3">Accomodation</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row no-gutters">
        <div class="amenities d-md-flex ftco-animate">
          <div class="one-half order-first img" style="background-image: url(images/amenities-1.jpg);"></div>
          <div class="one-half order-last text">
            <h2>Business Center</h2>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
            <p>
                  <a href="#" class="btn btn-primary">Join</a>
                  <a href="#" class="btn btn-primary btn-outline-primary">See details</a>
            </p>          
          </div>
        </div>
        <div class="amenities d-md-flex ftco-animate">
          <div class="one-half order-first img" style="background-image: url(images/amenities-3.jpg);"></div>
          <div class="one-half order-last text">
            <h2>Meeting &amp; Conferences</h2>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
            <p>
                  <a href="#" class="btn btn-primary">Join</a>
                  <a href="#" class="btn btn-primary btn-outline-primary">See details</a>
            </p>
          </div>
        </div>
        <div class="amenities d-md-flex ftco-animate">
          <div class="one-half order-last img" style="background-image: url(images/amenities-4.jpg);"></div>
          <div class="one-half order-first text">
            <h2>Airport Shuttle &amp; Parking Lot</h2>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
            <p>
                  <a href="#" class="btn btn-primary">Join</a>
                  <a href="#" class="btn btn-primary btn-outline-primary">See details</a>
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection