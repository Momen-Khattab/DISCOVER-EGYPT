@extends('website.layouts.front')

@section('content')      
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/booking/Serf6yS.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-end">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Booking</span></p>
              <h1 class="mb-3">MAKE YOUR DESTINATION</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-12 ftco-animate makereservation p-5 bg-light">
            <form action="#">
              <h2 class="mb-4">Contact Details</h2>
              <div class="row mb-5">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Select Country</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select class="countrypicker form-control" data-live-search="true" data-default="Country of Passport" data-flag="false"></select>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Your Email">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" placeholder="Phone">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" placeholder="Phone">
                  </div>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-12">
                  <h2 class="mb-4">Guest Details</h2>
                </div>
                <div class="col-md-12">
                  <h3 class="h4">Superior Room - Twin - Best available</h3>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" class="form-control" placeholder="First Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Select Country</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select class="countrypicker form-control" data-live-search="true" data-default="Country of Passport" data-flag="false"></select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Date of Birth</label>
                    <input type="text" class="form-control" id="birth_date" placeholder="Birth Date">
                  </div>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-12">
                  <h2 class="mb-4">Flight Details</h2>
                </div>
                <div class="col-md-6 d-flex">
                  <div class="form-group mr-4">
                    <label for="">Arrival Date</label>
                    <input type="text" class="form-control" id="arrival_date" placeholder="Date">
                  </div>
                  <div class="form-group">
                    <label for="">Arrival Time</label>
                    <input type="text" class="form-control" id="arrival_time" placeholder="Time">
                  </div>
                </div>
                <div class="col-md-6 d-flex">
                  <div class="form-group mr-4">
                    <label for="">Departure Date</label>
                    <input type="text" class="form-control" id="departure_date" placeholder="Date">
                  </div>
                  <div class="form-group">
                    <label for="">Departure Time</label>
                    <input type="text" class="form-control" id="arrival_time" placeholder="Time">
                  </div>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-12">
                  <h2 class="mb-4">Payment Details</h2>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Card Type</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Visa</option>
                        <option value="">Master Card</option>
                        <option value="">Credit Card</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">Card No</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">Name on Card</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mr-4">
                    <label for="">Expiration Date</label>
                    <input type="text" class="form-control" id="expiration_date" placeholder="">
                  </div>
                </div>
                
              </div>
              <button type="submit" class="btn btn-primary pull-right">Confirm</button>

            </form>
          </div>
        </div>
      </div>
    </section>
@endsection