@extends('admin.layouts.front')
@section('content')
<div class="content-header">
    <div class="container-fluid">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Rooms</h3>
      <div class="card-tools">
        @if (!$restaurants->isEmpty())
            {{ $restaurants->render() }}
        @endif
      </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
        @if ($restaurants->isEmpty())
            <div class="alert alert-danger">
                No data founded!
            </div>
        @else
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>Restaurant Name</th>
            <th>Food Type</th>
            <th>Price</th>
            <th>Notes</th>
            <th>Control</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($restaurants as $item)
              <tr>
                  <td>{{ $item->restaurant_name }}</td>
                  <td>{{ $item->food_type }}</td>
                  <td>{{ $item->price }}</td>
                  <td>{{ $item->notes }}</td>
                  <td>
                    <a href="#" class="btn btn-success">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="#" class="btn btn-primary">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
      @endif
    </div>
    <!-- /.card-body -->
  </div>

    </div>
</div>
  @endsection