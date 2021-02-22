@extends('admin.layouts.front')
@section('content')
<div class="content-header">
  <div class="container-fluid">


    {{--  food cards  --}}
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Latest Foods reservations</h3>
        <div class="card-tools">
        </div>
      </div>

      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>Guest name</th>
              <th>Food Number</th>
              <th>Food name</th>
              <th>Restaurant name</th>

            </tr>
          </thead>
          @forelse ($latestFoodsReservations as $item)
        <tr>
          <td>{{ $item->user->getFullName() }}</td>
          <td>{{ $item->food->food_no }}</td>
          <td>{{ $item->food->food_name }}</td>
          <td>{{ $item->food->restaurant_name }}</td>
      </tr>
        @empty
            <div class="alert alert-danger">
              No data found!
            </div>
        @endforelse
      </tbody>
        </table>
      </div>
      {{--  // Card -end  --}}
    </div>


    {{--  Flights cards  --}}
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Latest flights reservations</h3>
        <div class="card-tools">
        </div>
      </div>

      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>Guest name</th>
              <th>travel Date</th>
              <th>ticket number</th>
              <th>flight destinaion</th>

            </tr>
          </thead>
          @forelse ($latestFlightsReservations as $item)
        <tr>
          <td>{{ $item->user->getFullName() }}</td>
          <td>{{ $item->flight->travel_date }}</td>
          <td>{{ $item->flight->flight_no }}</td>
          <td>{{ $item->flight->flight_destinaion }}</td>
      </tr>
        @empty
            <div class="alert alert-danger">
              No data found!
            </div>
        @endforelse
      </tbody>
        </table>
      </div>
      {{--  // Card -end  --}}
    </div>


    {{--  Rooms  --}}
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Latest rooms reservations</h3>
        <div class="card-tools">
        </div>
      </div>

      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>Guest name</th>
              <th>Hotel Name</th>
              <th>Room number</th>
              <th>Room status</th>

            </tr>
          </thead>
          @forelse ($latestRoomsReservations as $item)
        <tr>
          <td>{{ $item->user->getFullName() }}</td>
          <td>{{ $item->room->hotel_name }}</td>
          <td>{{ $item->room->room_no }}</td>
          <td>{{ $item->room->status }}</td>
      </tr>
        @empty
            <div class="alert alert-danger">
              No data found!
            </div>
        @endforelse
      </tbody>
        </table>
      </div>
      {{--  // Card -end  --}}
    </div>


    {{--  Trips  --}}
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Latest trips reservations</h3>
        <div class="card-tools">
        </div>
      </div>

      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>Guest name</th>
              <th>Trip name</th>
              <th>Trip Number</th>
              <th>dead_line</th>

            </tr>
          </thead>
          @forelse ($latestTripsReservations as $item)
        <tr>
          <td>{{ $item->user->getFullName() }}</td>
          <td>{{ $item->trip->trip_name }}</td>
          <td>{{ $item->trip->trip_no }}</td>
          <td>{{ $item->trip->dead_line }}</td>
      </tr>
        @empty
            <div class="alert alert-danger">
              No data found!
            </div>
        @endforelse
      </tbody>
        </table>
      </div>
      {{--  // Card -end  --}}

    </div>


  </div>
</div>
  @endsection
