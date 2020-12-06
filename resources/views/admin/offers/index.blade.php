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
            <th>offer_no</th>
            <th>offer_name</th>
            <th>capacity</th>
            <th>has_discount</th>
            <th>notes</th>
            <th>Control</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($trips as $item)
              <tr>
                  <td>{{ $item->offer_no }}</td>
                  <td>{{ $item->offer_name }}</td>
                  <td>{{ $item->capacity }}</td>
                  <td>{{ $item->has_discount }}</td>
                  <td>{{ $item->notes }}</td>
                  <a href="{{ route('offes.show', $item->id) }}" class="btn btn-success">
                    <i class="fa fa-eye"></i>
                </a>
                <a href="{{ route('offers.edit', $item->id) }}" class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                </a>
                {{--  <a href="#" onclick="" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </a>  --}}
                <form action="{{ route('offers.destroy', $item->id)}}" method="POST" style="display: inline;">
                  @method("DELETE")
                  @csrf
                  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
              </form>
                  <td>
                    <a href="#" class="btn btn-success">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('offers.edit', $item->id) }}" class="btn btn-primary">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="{{ route('offers.destroy', $item->id)}}" class="btn btn-danger">
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