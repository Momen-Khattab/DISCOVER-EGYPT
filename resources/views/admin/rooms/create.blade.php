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
                    <li class="breadcrumb-item">Room</li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        <form role="form">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Hotel Name</label>
                    <input type="text" class="form-control" id="hotelname" placeholder="Hotel Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Rome Number</label>
                    <input type="text" class="form-control" id="romenumber" placeholder="Enter Number">
                </div>


                <!--make this select-->
                <div class="form-group">
                    <label for="exampleInputPassword1">Rome Size</label>
                    <input type="text" class="form-control" id="romesize" placeholder="Rome size">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Cost per night</label>
                    <input type="number" class="form-control" id="cost" placeholder="$">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Room State</label>
                    <input type="number" class="form-control" id="roomstate" placeholder="State">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Notes</label>
                    <input type="number" class="form-control" id="Notes" placeholder="Description">
                </div>
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
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="offer">
                    <label class="form-check-label" for="exampleCheck1">Has offer</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>


@endsection
