@extends('admin.layouts.front')
@section('content')


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Create new restaurant</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">restaurant</li>
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
              <h3 class="card-title">Create new restaurant</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('foods.store', $food->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body" style="display: block;" >
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            {{--  <label for="exampleInputPassword1">{{ trans('app.Restaurant_name') }}</label>  --}}
                            <label for="exampleInputPassword1">@lang('app.Restaurant_name')</label>
                            <input type="text" class="form-control {{ $errors->has('Restaurant_name') ? 'is-invalid' : ''}}" value="{{ $food->Restaurant_name }}" name="Restaurant_name" id="Restaurant_name" placeholder="Restaurant Name">
                            <div class="invalid-feedback">
                                {{ $errors->first('Restaurant_name') }}
                              </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">@lang('app.food_no')</label>
                            <input type="text" class="form-control {{ $errors->has('food_no') ? 'is-invalid' : ''}}" name="food_no" id="romenumber" value="{{ $food->food_no }}" placeholder="Enter Number">
                            <div class="invalid-feedback">
                                {{ $errors->first('food_no') }}
                              </div>
                        </div>
                    </div>
                  </div>
      
                  <div class="row">
                    
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">@lang('app.cost')</label>
                            <input type="number" class="form-control {{ $errors->has('cost') ? 'is-invalid' : ''}}" name="cost" id="cost" value="{{ $food->cost }}" placeholder="$">
                            <div class="invalid-feedback">
                                {{ $errors->first('cost') }}
                              </div>
                        </div>
                    </div>
                  </div>
    
                  <div class="row">
                    <div class="col-12 col-sm-6">
                      <div class="form-group">
                          <label for="exampleInputPassword1">@lang('app.number')</label>
                          <input type="number" class="form-control {{ $errors->has('number') ? 'is-invalid' : ''}}" name="number" id="number" value="{{ $food->number }}" placeholder="$">
                          <div class="invalid-feedback">
                              {{ $errors->first('number') }}
                            </div>
                      </div>
                  </div>
    
                      <div class="col-sm-6">
                        <div class="form-group">
                            <h5>Has offer?</h5>
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" value="1" name="has_offer" id="customSwitch1" {{ $food->has_offer == '1' ? 'checked' : '' }}>
                              <label class="custom-control-label" for="customSwitch1">Has offer</label>
                            </div>
                          </div>
                      </div>
                  </div>
                  <br>
                  <div class="row">
    
                    <div class="row">
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">@lang('app.address')</label>
                            <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" name="address" id="address" value="{{ $food->address }}" placeholder="address">
                            <div class="invalid-feedback">
                                {{ $errors->first('address') }}
                              </div>
                        </div>
                    </div>
    
    
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Notes</label>
                            <textarea name="notes" class="form-control {{ $errors->has('notes') ? 'is-invalid' : ''}}" id="" cols="30" rows="5" placeholder="Description">{{ $food->notes }}</textarea>
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