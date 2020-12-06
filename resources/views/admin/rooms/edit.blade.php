@extends('admin.layouts.front')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Edit room</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body" style="display: block;" >
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('app.hotel_name')</label>
                        <input type="text" class="form-control {{ $errors->has('hotel_name') ? 'is-invalid' : ''}}" value="{{ $room->hotel_name }}" name="hotel_name" id="hotelname" placeholder="Hotel Name">
                        <div class="invalid-feedback">
                            {{ $errors->first('hotel_name') }}
                          </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">@lang('app.room_no')</label>
                        <input type="text" class="form-control {{ $errors->has('room_no') ? 'is-invalid' : ''}}" name="room_no" id="romenumber" value="{{ $room->room_no }}" placeholder="Enter Number">
                        <div class="invalid-feedback">
                            {{ $errors->first('room_no') }}
                          </div>
                    </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('app.size')</label>
                        <select class="form-control {{ $errors->has('size') ? 'is-invalid' : ''}}" name="size" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            {{--  <option value="single">Single</option>
                            <option value="double">Double</option>
                            <option value="family">Family</option>  --}}
                            @foreach (App\Models\Room::roomSizes() as $item)
                                <option value="{{ $item }}" {{ $room->size == $item ? 'selected' : ''}} >{{ ucfirst($item) }}</option>
                            @endforeach
                            <div class="invalid-feedback">
                                {{ $errors->first('size') }}
                              </div>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('app.cost_per_night')</label>
                        <input type="number" class="form-control {{ $errors->has('cost_per_night') ? 'is-invalid' : ''}}" name="cost_per_night" id="cost" value="{{ $room->cost_per_night }}" placeholder="$">
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
                        <input class="custom-control-input" type="radio" id="customRadio2" value="0" {{ $room->status == '0' ? 'checked' : '' }} name="status">
                        <label for="customRadio2" class="custom-control-label">Not available</label>
                    </div>
                </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                        <h5>@lang('app.status')</h5>
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" value="1" name="has_offer" id="customSwitch1" {{ $room->status == '1' ? 'checked' : '' }}>
                          <label class="custom-control-label" for="customSwitch1">Has offer</label>
                        </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('app.notes')</label>
                        <textarea name="notes" class="form-control {{ $errors->has('notes') ? 'is-invalid' : ''}}" id="" cols="30" rows="5" placeholder="Description">{{ $room->notes }}</textarea>
                        <div class="invalid-feedback">
                            {{ $errors->first('notes') }}
                          </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputFile">@lang('app.image')</label>
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