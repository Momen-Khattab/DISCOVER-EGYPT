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
                    <label for="exampleInputEmail1">Restaurant name</label>
                    <input type="text" class="form-control" id="restaurantname" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Restaurant type</label>
                    <input type="text" class="form-control" id="foodtype" placeholder="Foods | Deserts | Drinks">
                </div>

                
                <div class="form-group">
                    <label for="#">food Price</label>
                    <input type="number" class="form-control" id="foodprice" placeholder="$">
                </div>

                <div class="form-group">
                    <label for="#">Notes</label>
                    <input type="number" class="form-control" id="notes" placeholder="Description">
                </div>

                <div class="form-group">
                    <label for="#">food Picture</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foodpicture">
                            <label class="custom-file-label" for="exampleInputFile">Choose Picture</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.container-fluid -->
</div>


@endsection
