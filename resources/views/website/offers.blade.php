@extends('website.layouts.front')

@section('content')      
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/Luxor-karnak-temple.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-end">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Blog</span></p>
              <h1 class="mb-3">TODAY OFEERS</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          @if ($trips->isEmpty())
                <div class="alert alert-danger">
                  No results found!
                </div>
            @else
            @foreach ($trips as $item)
                    <div class="col-md-4 ftco-animate">
                      <a href="javascript::void();" data-toggle="modal" data-target="#itemModal{{$item->id}}">
                      <div class="room-wrap">
                        <a href="#" class="room-img" style="background-image: url({{$item->getImage()}});"></a>
                        <div class="text p-4">
                          <div class="d-flex mb-1">
                            <div class="one-third">
                              <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                              <h3><a href="#">{{ $item->trip_name }}</a></h3>
                            </div>
                            <div class="one-forth text-center">
                              <p class="price">${{ $item->cost }} <br><span>/person</span></p>
                            </div>
                          </div>
                          <p class="features">
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i>Trip Number: {{ $item->trip_no }}</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i>Room size: {{$item->size}}</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i>Available: {{$item->capacity}}seat</span>
                            <span class="d-block mb-2"><i class="icon-check mr-2"></i>Dead-line: {{$item->dead_line}}</span>
                            <span class="alert alert-warning">Notes: {{$item->notes}}</span>
                            <span class="d-block mb-2">@if ($item->has_offer==1)
                              <div class="alert alert-success">
                                Special Offer!
                              </div>
                                
                            @endif</span>
                          </p>
                          <form action="{{ url('/reserve-trip') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <button class="btn btn-primary">Reserve Now</button>
                          </form>                        
                        </div>
                      </div>
                    </div>
                    @endforeach
                    @endif
        </div>
      </div>
      </div>
    </section>


  @endsection