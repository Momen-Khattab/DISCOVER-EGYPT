@extends('admin.layouts.front')
@section('content')
<div class="content-header">
    <div class="container-fluid">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">restaurant</h3>
      <div class="card-tools">
        @if (!$foods->isEmpty())
            {{ $foods->render() }}
        @endif
      </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
        @if ($foods->isEmpty())
            <div class="alert alert-danger">
                No data found!
            </div>
        @else
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>food no.</th>
            <th>Restaurant name</th>
            <th>cost</th>
            <th>has_offer</th>
            <th>address</th>
            <th>number</th>
            <th>Control</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($foods as $item)
              <tr>
                  <td>{{ $item->food_no }}</td>
                  <td>{{ $item->Restaurant_name }}</td>
                  <td>{{ $item->cost }}</td>
                  <td>{{ $item->has_offer }}</td>
                  <td>{{ $item->address }}</td>
                  <td>{{ $item->number }}</td>
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