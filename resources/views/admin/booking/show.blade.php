@extends('admin.layouts.front')
@section('content')
    <div class="row">
        <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
            <div class="room-wrap">
              <a href="#" class="room-img" style="background-image: url(images/#);"></a>
              <div class="text p-4">
                <div class="d-flex mb-1">
                  <div class="one-third">
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                    <h3><a href="#">{{ $booking->airport_name }}</a></h3>
                  </div>
                  <div class="one-forth text-center">
                    <p class="price">{{$booking->cost}}$ <br></p>
                  </div>
                </div>
                <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>Trip Number:{{$booking->flight_no}} </span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>Capacity:{{$booking->company_name}} </span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>Capacity:{{$booking->flight_destinaion}} </span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>Has offer?:{{$booking->has_offer}} </span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>date dl:{{$booking->travel_date}} </span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>Address:{{$booking->address}} </span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>description:{{$booking->company_number}} </span>
                </p>
              </div>
            </div>
          </div>
    </div>
@endsection