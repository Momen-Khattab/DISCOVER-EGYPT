@extends('admin.layouts.front')
@section('content')


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Create new flight</h1>
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
              <h3 class="card-title">Add Flight Info</h3>
  
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
                        <label for="exampleInputPassword1">@lang('app.airport_name')</label>
                        <input type="text" class="form-control {{ $errors->has('airport_name') ? 'is-invalid' : ''}}" value="{{ old('airport_name') }}" name="airport_name" id="hotelname" placeholder="Type...">
                        <div class="invalid-feedback">
                            {{ $errors->first('airport_name') }}
                          </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">@lang('app.flight_no')</label>
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
                        <label for="exampleInputPassword1">@lang('app.flight_company')</label>
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
                        <label for="exampleInputPassword1">@lang('app.cost')</label>
                        <input type="number" class="form-control {{ $errors->has('cost') ? 'is-invalid' : ''}}" name="cost" id="cost" placeholder="$">
                        <div class="invalid-feedback">
                            {{ $errors->first('cost') }}
                          </div>
                    </div>
                </div>
                

              </div>

              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">@lang('app.flight_destinaion')</label>
                        <input type="text" class="form-control {{ $errors->has('flight_destinaion') ? 'is-invalid' : ''}}" name="flight_destinaion" id="flight_destinaion" placeholder="Type...">
                        <div class="invalid-feedback">
                            {{ $errors->first('flight_destinaion') }}
                          </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">@lang('app.address')</label>
                        <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" name="address" id="address" placeholder="Airport address..">
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                          </div>
                    </div>
                </div>

                
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">@lang('app.seat_no')</label>
                        <input type="number" class="form-control {{ $errors->has('seat_no') ? 'is-invalid' : ''}}" name="seat_no" id="seat_no" placeholder="seat number..">
                        <div class="invalid-feedback">
                            {{ $errors->first('seat_no') }}
                          </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('app.company_number')</label>
                        <input type="number" class="form-control {{ $errors->has('company_number') ? 'is-invalid' : ''}}" name="company_number" id="company_number" placeholder="01">
                        <div class="invalid-feedback">
                            {{ $errors->first('company_number') }}
                          </div>
                    </div>
                </div>

              </div>
              <br>
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                          <label for="exampleInputEmail1">Travel date</label>
                          <div class="input-group" id="travel_date" data-target-input="nearest">
                            <input type="text" name="travel_date" autocomplete="off" class="form-control datepicker {{ $errors->has('travel_date') ? 'is-invalid' : ''}}" data-target="#travel_date">
                            <div class="input-group-append" data-target="#travel_date" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                            <div class="invalid-feedback">
                              {{ $errors->first('travel_date') }}
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
