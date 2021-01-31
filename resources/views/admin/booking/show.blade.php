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
        <li class="breadcrumb-item active" aria-current="page"><a href="{{url('/admin/booking')}}">Flights</a></li>
        <li class="breadcrumb-item active" aria-current="page">Show</li>
      </ol>
    </nav>

    <h4>offers details</h4>
  </div>
    <div class="row justify-content-center">
      <div class="col-sm-5">
        <div class="card">

          <div class="card-body">
            <div class="row">
              <div class="col-sm-9">
                <h4>{{ $flights->flight_destinaion }}</h4>
              </div>
              <div class="col-sm-3">
                <h5><span class="">{{ $flights->cost }}$</span></h5>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="col-sm-12">
              <p class="features">
                <span class="d-block mb-2"><i class="icon-check mr-2"></i>Flight Number:{{$flights->flight_no}} </span>
                <span class="d-block mb-2"><i class="icon-check mr-2"></i>Company Name:{{$flights->company_name}} </span>
                <span class="d-block mb-2"><i class="icon-check mr-2"></i>Airport Name:{{$flights->airport_name}} </span>
                <span class="d-block mb-2"><i class="icon-check mr-2"></i>Seat Number:{{$flights->seat_no}} </span>
                <span class="d-block mb-2"><i class="icon-check mr-2"></i>Travel Date:{{$flights->travel_date}} </span>
                <span class="d-block mb-2"><i class="icon-check mr-2"></i>Airport Address:{{$flights->address}} </span>
                <span class="d-block mb-2"><i class="icon-check mr-2"></i>Company Number:{{$flights->company_number}} </span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection