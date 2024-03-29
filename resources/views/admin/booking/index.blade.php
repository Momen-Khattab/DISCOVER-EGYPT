@extends('admin.layouts.front')
@section('content')
<div class="content-header">
    <div class="container-fluid">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">booking</h3>
      <div class="card-tools">
        @if (!$flights->isEmpty())
            {{ $flights->render() }}
        @endif
      </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
        @if ($flights->isEmpty())
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
            <th>Travel date</th>
            <th>Control</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($flights as $item)
              <tr>
                  <td>{{ $item->airport_name }}</td>
                  <td>{{ $item->flight_no }}</td>
                  <td>{{ $item->flight_destinaion }}</td>
                  <td>{{ $item->travel_date }}</td>
                  <td>
                    <a href="{{ route('booking.show', $item->id) }}" class="btn btn-success">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('booking.edit', $item->id) }}" class="btn btn-primary">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form action="{{ route('booking.destroy', $item->id)}}" method="POST" style="display: inline;">
                      @method("DELETE")
                      @csrf
                      <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  </form>
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