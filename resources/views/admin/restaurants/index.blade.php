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
            <th>Food number</th>
            <th>Food name</th>
            <th>Restaurant name</th>
            <th>cost</th>
            <th>has_offer</th>
            <th>Control</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($foods as $item)
              <tr>
                  <td>{{ $item->food_no }}</td>
                  <td>{{ $item->food_name }}</td>
                  <td>{{ $item->restaurant_name }}</td>
                  <td>{{ $item->cost }} $</td>
                  <td>{{ $item->has_offer }}</td>
                  <td>
                    {{--  <a href="{{ url('/admin/restaurant/'.$item->id) }}" class="btn btn-success">  --}}
                    <a href="{{ route('restaurants.show', $item->id) }}" class="btn btn-success">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ route('restaurants.edit', $item->id) }}" class="btn btn-primary">
                        <i class="fa fa-edit"></i>
                    </a>
                    
                    <form action="{{ route('restaurants.destroy', $item->id)}}" method="POST" style="display: inline;">
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