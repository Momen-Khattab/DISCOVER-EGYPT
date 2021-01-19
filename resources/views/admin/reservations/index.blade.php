@extends('admin.layouts.front')
@section('content')
<div class="content-header">
    <div class="container-fluid">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Reservations</h3>
      <div class="card-tools">
        @if (!$Reservations->isEmpty())
            {{ $Reservations->render() }}
        @endif
      </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
        @if ($Reservations->isEmpty())
            <div class="alert alert-danger">
                No data found!
            </div>
        @else
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>Guest name</th>
            <th>From Date</th>
            <th>To Date</th>
            <th>Object picked</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($Reservations as $item)
              <tr>
                  <td>{{ $item->guest_name }}</td>
                  <td>{{ $item->from_Date }}</td>
                  <td>{{ $item->to_Date }}</td>
                  <td>{{ $item->object_picked }}</td>
                  <td>
                    <a href="{{ route('Reservations.show', $item->id) }}" class="btn btn-success">
                      <i class="fas fa-reply"></i>
                    </a>
                    <a href="{{ route('Reservations.destroy', $item->id) }}" class="btn btn-danger">
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