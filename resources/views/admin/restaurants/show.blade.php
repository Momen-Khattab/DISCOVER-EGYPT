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
                    <h3><a href="#">{{ $restaurant->restaurant_name }}</a></h3>
                  </div>
                  <div class="one-forth text-center">
                    <p class="price">{{$restaurant->cost}}$ <br></p>
                  </div>
                </div>
                <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>Food Number:{{$restaurant->food_no}} </span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>Restaurant Number:{{$restaurant->rest_no}} </span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>Address:{{$restaurant->address}} </span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>description:{{$restaurant->notes}} </span>
                </p>
              </div>
            </div>
          </div>
    </div>
@endsection