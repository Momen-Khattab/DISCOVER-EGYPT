@extends('admin.layouts.front')
@section('content')


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
                    <li class="breadcrumb-item active">Offers</li>

                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <form role="form">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">offer_no</label>
                    <input type="text" class="form-control" id="offer_no" placeholder="offer_no">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">offer_name</label>
                    <input type="text" class="form-control" id="offer_name" placeholder="offer_name">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">capacity</label>
                    <input type="text" class="form-control" id="capacity" placeholder="capacity">
                </div>

                
                <div class="form-group">
                    <label for="#">cost</label>
                    <input type="number" class="form-control" id="cost" placeholder="$">
                </div>

                <div class="form-group">
                    <label for="#">booked_date</label>
                    <input type="date" class="form-control" id="booked_date" placeholder="booked_date">
                </div>

                <div class="form-group">
                    <label for="#">has_discount</label>
                    <input type="boolean" class="form-control" id="notes" placeholder="has_discount">
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
</div>


@endsection
