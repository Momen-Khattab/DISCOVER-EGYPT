@extends('admin.layouts.front')
@section('content')


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Create new mail</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">inbox</li>
                    <li class="breadcrumb-item active">replay</li>
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
              <h3 class="card-title">Create new mail</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('mail.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body" style="display: block;" >
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">mail_no</label>
                        <input type="text" class="form-control {{ $errors->has('mail_no') ? 'is-invalid' : ''}}" value="{{ old('mail_no') }}" name="mail_no" id="mail_no" placeholder="type...">
                        <div class="invalid-feedback">
                            {{ $errors->first('mail_no') }}
                          </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">mail name</label>
                        <input type="text" class="form-control {{ $errors->has('mail_name') ? 'is-invalid' : ''}}" name="mail_name" id="mail_name" placeholder="type...">
                        <div class="invalid-feedback">
                            {{ $errors->first('mail_name') }}
                          </div>
                    </div>
                </div>
              </div>
  
              <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">capacity</label>
                        <select class="form-control {{ $errors->has('capacity') ? 'is-invalid' : ''}}" name="capacity" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
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
                        <label for="exampleInputPassword1">Cost</label>
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
                                <input type="file" class="custom-file-input" id="uploadpic">
                                <label class="custom-file-label" for="exampleInputFile">Choose Picture</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                              <h5>has discount?</h5>
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" value="1" name="has_discount" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">has_discount</label>
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