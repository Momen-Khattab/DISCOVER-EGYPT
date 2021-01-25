@extends('admin.layouts.front')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Edit food</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('restaurants.update', $food->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="card-body" style="display: block;" >
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">@lang('app.restaurant_name')</label>
                        <input type="text" class="form-control {{ $errors->has('restaurant_name') ? 'is-invalid' : ''}}" value="{{ $food->restaurant_name }}" name="restaurant_name" id="restaurant_name" placeholder="Restaurant Name">
                        <div class="invalid-feedback">
                            {{ $errors->first('restaurant_name') }}
                          </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Food name</label>
                        <input type="text" class="form-control {{ $errors->has('food_name') ? 'is-invalid' : ''}}" value="{{ $food->food_name }}" name="food_name" id="food_name" placeholder="Restaurant Name">
                        <div class="invalid-feedback">
                            {{ $errors->first('food_name') }}
                          </div>
                    </div>
                </div>
              </div>
              <div>
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
                      <label for="exampleInputPassword1">@lang('app.rest_no')</label>
                      <input type="number" class="form-control {{ $errors->has('rest_no') ? 'is-invalid' : ''}}" name="rest_no" id="rest_no" value="{{ $food->rest_no }}" placeholder="01">
                      <div class="invalid-feedback">
                          {{ $errors->first('rest_no') }}
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
                  @if (!empty($food->image))
                  <div class="col-sm-6">
                    <div class="img-responsive"><img src="{{ $food->getImage() }}" style="height: 200px; width: 200px;" alt=""></div>
                  </div>
                  @endif

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