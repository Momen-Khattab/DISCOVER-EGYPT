@extends('admin.layouts.front')
@section('content')
<style>
  .card{
    width: 300px;
    width: 300px;
    padding: 0px;
    box-shadow: 1px 1px 30px #c3c3c3;
    transition: all ease-in-out .2s;
  }

  .card:hover{
    box-shadow: -30px 1px 30px rgba(167, 162, 162, 0.699);
  }

  .card-header{
    padding: 0;
  }

  .card-body, .card-footer{
    padding: 10px;
    color: rgba(150, 141, 141, 0.801);
  }
  .card-footer{
    padding: 0;
  }
</style>
<div class="container">
  <div class="col-sm-12">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/admin/restaurants')}}">Foods</a></li>
        <li class="breadcrumb-item active" aria-current="page">Show</li>
      </ol>
    </nav>

    <h4>Food details</h4>
  </div>
    <div class="row justify-content-center">
      <div class="col-sm-5">
        <div class="card">
          <div class="card-header">
            <div class="img-responsive">
              <img src="{{ $restaurant->getImage() }}" style="height: 100%; width: 100%;" alt="">
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-9">
                <h4>{{ $restaurant->food_name }}</h4>
              </div>
              <div class="col-sm-3">
                <h5><span class="">{{ $restaurant->cost }}$</span></h5>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="col-sm-12">
              <p class="features">
                <span class="d-block mb-2"><i class="icon-check mr-2"></i>Food Number:{{$restaurant->food_no}} </span>
                <span class="d-block mb-2"><i class="icon-check mr-2"></i>Restaurant name:{{ $restaurant->restaurant_name }} </span>
                <span class="d-block mb-2"><i class="icon-check mr-2"></i>Restaurant Number:{{$restaurant->rest_no}} </span>
                <span class="d-block mb-2"><i class="icon-check mr-2"></i>Address:{{$restaurant->address}} </span>
                <span class="d-block mb-2"><i class="icon-check mr-2"></i>description:{{$restaurant->notes}} </span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection