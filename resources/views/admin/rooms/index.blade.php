@extends('admin.layouts.front')
@section('content')
<div class="content-header">
    <div class="container-fluid">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Rooms</h3>
      <div class="card-tools">
        @if (!$rooms->isEmpty())
            {{ $rooms->render() }}
        @endif
      </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
        @if ($rooms->isEmpty())
            <div class="alert alert-danger">
                No data found!
            </div>
        @else
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>Room number</th>
            <th>Hotel name</th>
            <th>Size</th>
            <th>Cost</th>
            <th>Availability</th>
            <th>Has offer</th>
            <th>Control</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($rooms as $item)
              <tr>
                  <td>{{ $item->room_no }}</td>
                  <td>{{ $item->hotel_name }}</td>
                  <td>{{ $item->size }}</td>
                  <td>{{ $item->cost_per_night }}$</td>
                  <td>{{ $item->status }}</td>
                  <td>{{ $item->has_offer }}</td>
                  <td>
                    <a href="{{ url('/admin/rooms/'.$item->id) }}" class="btn btn-success">
                    {{--  <a href="{{ route('rooms.show', $item->id) }}" class="btn btn-success">  --}}
                        <i class="fa fa-eye"></i>
                    </a>
                        <a href="{{ route('rooms.edit', $item->id) }}" class="btn btn-primary">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form action="{{ route('rooms.destroy', $item->id)}}" method="POST" style="display: inline;">
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