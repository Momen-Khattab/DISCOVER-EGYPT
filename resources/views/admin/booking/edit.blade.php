@extends('admin.layouts.front')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Edit Flight Info</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('booking.update', $flights->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="card-body" style="display: block;" >
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('app.airport_name')</label>
                        <input type="text" class="form-control {{ $errors->has('airport_name') ? 'is-invalid' : ''}}" value="{{ $flights->airport_name }}" name="airport_name" id="hotelname" placeholder="Type...">
                        <div class="invalid-feedback">
                            {{ $errors->first('airport_name') }}
                          </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">@lang('app.flight_no')</label>
                        <input type="text" class="form-control {{ $errors->has('flight_no') ? 'is-invalid' : ''}}" value="{{ $flights->flight_no }}" name="flight_no" id="romenumber" placeholder="Type...">
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
                            <option value="egypt-air" {{ $flights->flight_company == 'egypt-air' ? 'selected' : ''}} >egypt air</option>
                            <option value="emirates" {{ $flights->flight_company == 'emirates' ? 'selected' : ''}}>emirates</option>
                            <div class="invalid-feedback">
                                {{ $errors->first('flight_company') }}
                              </div>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('app.flight_cost')</label>
                        <input type="number" class="form-control {{ $errors->has('flight_cost') ? 'is-invalid' : ''}}" value="{{ $flights->cost }}" name="flight_cost" id="flight_cost" placeholder="$">
                        <div class="invalid-feedback">
                            {{ $errors->first('flight_cost') }}
                          </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">@lang('app.flight_destinaion')</label>
                        <input type="text" class="form-control {{ $errors->has('flight_destinaion') ? 'is-invalid' : ''}}" value="{{ $flights->flight_destinaion }}" name="flight_destinaion" id="flight_destinaion" placeholder="Type...">
                        <div class="invalid-feedback">
                            {{ $errors->first('flight_destinaion') }}
                          </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">@lang('app.address')</label>
                        <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" value="{{ $flights->address }}" name="address" id="address" placeholder="Type...">
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                          </div>
                    </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">@lang('app.travel_date')</label>
                        <input type="text" class="form-control {{ $errors->has('travel_date') ? 'is-invalid' : ''}}" value="{{ $flights->travel_date }}" name="travel_date" id="travel_date" placeholder="Type...">
                        <div class="invalid-feedback">
                            {{ $errors->first('travel_date') }}
                          </div>
                    </div>
                </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">@lang('app.seat_no')</label>
                            <input type="text" class="form-control {{ $errors->has('seat_no') ? 'is-invalid' : ''}}" value="{{ $flights->seat_no }}" name="seat_no" id="seat_no" placeholder="Type...">
                            <div class="invalid-feedback">
                                {{ $errors->first('seat_no') }}
                              </div>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">@lang('app.company_number')</label>
                            <input type="number" class="form-control {{ $errors->has('company_number') ? 'is-invalid' : ''}}" value="{{ $flights->company_number }}" name="company_number" id="company_number" placeholder="Type...">
                            <div class="invalid-feedback">
                                {{ $errors->first('company_number') }}
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