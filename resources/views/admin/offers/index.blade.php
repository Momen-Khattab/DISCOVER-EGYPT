@extends('admin.layouts.front')
@section('content')
<div class="content-header">
    <div class="container-fluid">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">offers</h3>
      <div class="card-tools">
        @if (!$offers->isEmpty())
            {{ $offers->render() }}
        @endif
      </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
        @if ($offers->isEmpty())
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
          @foreach ($offers as $item)
              <tr>
                  <td>{{ $item->offer_no }}</td>
                  <td>{{ $item->offer_name }}</td>
                  <td>{{ $item->capacity }}</td>
                  <td>{{ $item->has_discount }}</td>
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