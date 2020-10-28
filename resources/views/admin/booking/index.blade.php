@extends('admin.layouts.front')
@section('content')
<div class="content-header">
    <div class="container-fluid">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">booking</h3>
      <div class="card-tools">
        @if (!$booking->isEmpty())
            {{ $booking->render() }}
        @endif
      </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
        @if ($booking->isEmpty())
            <div class="alert alert-danger">
                No data found!
            </div>
        @else
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>airport name</th>
            <th>flight number</th>
            <th>flight distination</th>
            <th>travel date</th>
            <th>seat number</th>
            <th>Control</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($booking as $item)
              <tr>
                  <td>{{ $item->airport_name }}</td>
                  <td>{{ $item->flight_no }}</td>
                  <td>{{ $item->flight_distination }}</td>
                  <td>{{ $item->travel_date }}</td>
                  <td>{{ $item->seat_no }}</td>

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