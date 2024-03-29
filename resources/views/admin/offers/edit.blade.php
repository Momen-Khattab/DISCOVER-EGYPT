@extends('admin.layouts.front')
@section('content')


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">edit Trip</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Offer</li>
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
              <h3 class="card-title">Add Trip Info</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('offers.update', $trip->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="card-body" style="display: block;" >
              <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('app.trip_no')</label>
                        <input type="number" class="form-control {{ $errors->has('trip_no') ? 'is-invalid' : ''}}" value="{{ $trip->trip_no }}" name="trip_no" id="trip_no" placeholder="$">
                        <div class="invalid-feedback">
                            {{ $errors->first('trip_no') }}
                          </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('app.trip_name')</label>
                        <input type="text" class="form-control {{ $errors->has('trip_name') ? 'is-invalid' : ''}}" value="{{ $trip->trip_name }}" name="trip_name" id="trip_name" placeholder="$">
                        <div class="invalid-feedback">
                            {{ $errors->first('trip_name') }}
                          </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('app.capacity')</label>
                        <select class="form-control {{ $errors->has('capacity') ? 'is-invalid' : ''}}" value="{{ $trip->capacity }}" name="capacity" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="single"><=10</option>
                            <option value="double"><=15</option>
                            <option value="family"><=20</option>
                            <div class="invalid-feedback">
                                {{ $errors->first('capacity') }}
                              </div>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('app.cost')</label>
                        <input type="number" class="form-control {{ $errors->has('cost') ? 'is-invalid' : ''}}" value="{{ $trip->cost }}" name="cost" id="cost" placeholder="$">
                        <div class="invalid-feedback">
                            {{ $errors->first('cost') }}
                          </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label>dead line</label>
                          <div class="input-group" id="deadline" data-target-input="nearest">
                              <input type="text" name="dead_line" autocomplete="off" value="{{ $trip->dead_line }}" class="form-control datepicker" {{ $errors->has('deadline') ? 'is-invalid' : ''}} data-target="#deadline">
                              <div class="input-group-append" data-target="#deadline" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  {{ $errors->first('deadline') }}
                              </div>
                          </div>
                      </div>
                </div>

              </div>
              </div>

              <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('app.notes')</label>
                        <textarea name="notes" class="form-control {{ $errors->has('notes') ? 'is-invalid' : ''}}" id="" value="" cols="30" rows="5" placeholder="Description">{{ $trip->notes }}</textarea>
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
                                <input type="file" class="custom-file-input" id="uploadpic" name="image">
                                <label class="custom-file-label" for="exampleInputFile">Choose Picture</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                        <br>
                            <div class="img-responsive">
                                @if (!empty($trip->image))
                                <img src="{{ $trip->getImage() }}" style="height: 100px; width: 100px;" alt="">
                                @endif
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                              <h5>@lang('app.has_offer')</h5>
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" value="{{ $trip->has_offer }}" name="has_offer" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">has offer</label>
                              </div>
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