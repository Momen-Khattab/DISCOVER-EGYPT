@extends('admin.layouts.front')
@section('content')


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Home</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Restaurants</li>
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
              <h3 class="card-title">Create new Food Type</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('restaurants.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body" style="display: block;" >
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Restaurant Name</label>
                        <input type="text" class="form-control {{ $errors->has('restaurant_name') ? 'is-invalid' : ''}}" value="{{ old('restaurant_name') }}" name="restaurant_name" id="restaurant_name" placeholder="Type...">
                        <div class="invalid-feedback">
                            {{ $errors->first('restaurant_name') }}
                          </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Food Type</label>
                        <select class="form-control {{ $errors->has('food_type') ? 'is-invalid' : ''}}" name="food_type" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="single">Main</option>
                            <option value="double">Desert</option>
                            <option value="family">Drinks</option>
                            <div class="invalid-feedback">
                                {{ $errors->first('food_type') }}
                              </div>
                        </select>
                    </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">price</label>
                        <input type="number" class="form-control {{ $errors->has('price') ? 'is-invalid' : ''}}" name="price" id="cost" placeholder="$">
                        <div class="invalid-feedback">
                            {{ $errors->first('price') }}
                          </div>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="exampleInputFile">Upload picture</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="uploadpic">
                            <label class="custom-file-label" for="exampleInputFile">Choose Picture</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
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
