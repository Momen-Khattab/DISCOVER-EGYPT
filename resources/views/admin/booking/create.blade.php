@extends('admin.layouts.front')
@section('content')


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Home</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Booking</li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Create new flight</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('booking.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body" style="display: block;" >
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Airport name</label>
                        <input type="text" class="form-control {{ $errors->has('airport_name') ? 'is-invalid' : ''}}" value="{{ old('airport_name') }}" name="airport_name" id="hotelname" placeholder="Type...">
                        <div class="invalid-feedback">
                            {{ $errors->first('airport_name') }}
                          </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Flight Number</label>
                        <input type="text" class="form-control {{ $errors->has('flight_no') ? 'is-invalid' : ''}}" name="flight_no" id="romenumber" placeholder="Type...">
                        <div class="invalid-feedback">
                            {{ $errors->first('flight_no') }}
                          </div>
                    </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">flight company</label>
                        <select class="form-control {{ $errors->has('flight_company') ? 'is-invalid' : ''}}" name="flight_company" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="single">egypt air</option>
                            <option value="double">emirates</option>
                            <div class="invalid-feedback">
                                {{ $errors->first('flight_company') }}
                              </div>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">flight cost</label>
                        <input type="number" class="form-control {{ $errors->has('flight_cost') ? 'is-invalid' : ''}}" name="flight_cost" id="flight_cost" placeholder="$">
                        <div class="invalid-feedback">
                            {{ $errors->first('flight_cost') }}
                          </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">flight distination</label>
                        <input type="text" class="form-control {{ $errors->has('flight_distination') ? 'is-invalid' : ''}}" name="flight_distination" id="flight_distination" placeholder="Type...">
                        <div class="invalid-feedback">
                            {{ $errors->first('flight_distination') }}
                          </div>
                    </div>
                </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                        <h5>Has offer?</h5>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" value="1" name="has_offer" id="customSwitch1">
                          <label class="custom-control-label" for="customSwitch1">Has offer</label>
                        </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">travel date</label>
                        <input type="text" class="form-control {{ $errors->has('travel_date') ? 'is-invalid' : ''}}" name="travel_date" id="travel_date" placeholder="Type...">
                        <div class="invalid-feedback">
                            {{ $errors->first('travel_date') }}
                          </div>
                    </div>
                </div>
                  <div class="col-sm-6">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">seat_no</label>
                            <input type="text" class="form-control {{ $errors->has('seat_no') ? 'is-invalid' : ''}}" name="seat_no" id="seat_no" placeholder="Type...">
                            <div class="invalid-feedback">
                                {{ $errors->first('seat_no') }}
                              </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>

                @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <li> {{ $error}}      
                    @endforeach
                </ul>
                @endif
            </div>
            </form>
          </div>

    </div>
</div>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    
        //Initialize Select2 Elements
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        });
    });
</script>
@endsection
