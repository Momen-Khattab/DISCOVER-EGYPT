@extends('admin.layouts.front')
@section('content')
<div class="content-header">
    <div class="container-fluid">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Trips</h3>
      <div class="card-tools">
        @if (!$trips->isEmpty())
            {{ $trips->render() }}
        @endif
      </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
        @if ($trips->isEmpty())
            <div class="alert alert-danger">
                No data found!
            </div>
        @else
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>Offer number</th>
            <th>Offer name</th>
            <th>Capacity</th>
            <th>Cost</th>
            <th>Has discount</th>
            <th>Control</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($trips as $item)
              <tr>
                  <td>{{ $item->trip_no }}</td>
                  <td>{{ $item->trip_name }}</td>
                  <td>{{ $item->capacity }}</td>
                  <td>{{ $item->cost }}$</td>
                  <td>{{ $item->has_offer }}</td>
                  <td>
                <a href="{{ route('offers.show', $item->id) }}" class="btn btn-success">
                    <i class="fa fa-eye"></i>
                </a>
                <a href="{{ route('offers.edit', $item->id) }}" class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                </a>
                <form action="{{ route('offers.destroy', $item->id)}}" method="POST" style="display: inline;">
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