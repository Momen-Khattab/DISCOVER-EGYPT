@extends('admin.layouts.front')
@section('content')
    <div class="row">
        <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
            <div class="room-wrap">
              <a href="#" class="room-img" style="background-image: url(images/room-2.jpg);"></a>
              <div class="text p-4">
                <div class="d-flex mb-1">
                  <div class="one-third">
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                    <h3><a href="#">{{ $room->hotel_name }}</a></h3>
                  </div>
                  <div class="one-forth text-center">
                    <p class="price">{{ $room->cost_per_night }}$<br><span>/night</span></p>
                  </div>
                </div>
                <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>Room Number: {{ $room->room_no }}</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>Room size: {{ $room->size }}</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>Room has offer? {{ $room->has_offer }}</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i>Room status: {{ $room->status }}</span>
                </p>
                <p><a href="#" class="btn btn-primary">Reserve a room</a></p>
              </div>
            </div>
          </div>
    </div>
@endsection