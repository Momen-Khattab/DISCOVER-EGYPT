@extends('admin.layouts.front')
@section('content')
<div class="content-header">
    <div class="container-fluid">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">restaurant</h3>
      <div class="card-tools">
        @if (!$restaurant->isEmpty())
            {{ $restaurant->render() }}
        @endif
      </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
        @if ($restaurant->isEmpty())
            <div class="alert alert-danger">
                No data found!
            </div>
        @else
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>Room No.</th>
            <th>Hotel name</th>
            <th>Size</th>
            <th>State</th>
            <th>Control</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($restaurant as $item)
              <tr>
                  <td>{{ $item->room_no }}</td>
                  <td>{{ $item->hotel_name }}</td>
                  <td>{{ $item->size }}</td>
                  <td>{{ $item->state }}</td>
                  <td>
                    {{--  <a href="{{ url('/admin/restaurant/'.$item->id) }}" class="btn btn-success">  --}}
                    <a href="{{ route('restaurant.show', $item->id) }}" class="btn btn-success">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('restaurant.edit', $item->id) }}" class="btn btn-primary">
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