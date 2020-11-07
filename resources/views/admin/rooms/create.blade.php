@extends('admin.layouts.front')
@section('content')


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Create new room</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Room</li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Create new room</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body" style="display: block;" >
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        {{--  <label for="exampleInputPassword1">{{ trans('app.hotel_name') }}</label>  --}}
                        <label for="exampleInputPassword1">@lang('app.hotel_name')</label>
                        <input type="text" class="form-control {{ $errors->has('hotel_name') ? 'is-invalid' : ''}}" value="{{ old('hotel_name') }}" name="hotel_name" id="hotelname" placeholder="Hotel Name">
                        <div class="invalid-feedback">
                            {{ $errors->first('hotel_name') }}
                          </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Rome Number</label>
                        <input type="text" class="form-control {{ $errors->has('room_no') ? 'is-invalid' : ''}}" name="room_no" id="romenumber" placeholder="Enter Number">
                        <div class="invalid-feedback">
                            {{ $errors->first('room_no') }}
                          </div>
                    </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Rome Size</label>
                        <select class="form-control {{ $errors->has('size') ? 'is-invalid' : ''}}" name="size" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="single">Single</option>
                            <option value="double">Double</option>
                            <option value="family">Family</option>
                            <div class="invalid-feedback">
                                {{ $errors->first('size') }}
                              </div>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Cost per night</label>
                        <input type="number" class="form-control {{ $errors->has('cost_per_night') ? 'is-invalid' : ''}}" name="cost_per_night" id="cost" placeholder="$">
                        <div class="invalid-feedback">
                            {{ $errors->first('cost_per_night') }}
                          </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">    
                    <h5>Room status</h5>                    
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio1" checked value="1" name="status">
                        <label for="customRadio1" class="custom-control-label">Available</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio2" value="0" name="status">
                        <label for="customRadio2" class="custom-control-label">Not available</label>
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
                        <label for="exampleInputPassword1">Notes</label>
                        <textarea name="notes" class="form-control {{ $errors->has('notes') ? 'is-invalid' : ''}}" id="" cols="30" rows="5" placeholder="Description"></textarea>
                        <div class="invalid-feedback">
                            {{ $errors->first('notes') }}
                          </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload picture</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input {{ $errors->has('image') ? 'is-invalid' : ''}}" name="image" id="uploadpic">
                                <label class="custom-file-label" for="exampleInputFile">Choose Picture</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>

                            <div class="invalid-feedback">
                                {{ $errors->first('image') }}
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


@endsection

@section('js')
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