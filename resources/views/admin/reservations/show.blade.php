@extends('admin.layouts.front')
@section('content')
{{--  content  --}}
<section class="content">
  <br>
    <div class="row">
      <div class="col-md-12">
      <div class="card">
        <div class="card-header"> Message from: {{ $Reservations->guest_name }}</div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-stripped table-bordered">
                <thead>
                  <th>guest_name</th>
                  <th>from_Date</th>
                  <th>to_Date</th>
                  <th>object_picked</th>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $Reservations->guest_name }}</td>
                    <td>{{ $Reservations->from_Date }}</td>
                    <td>{{ $Reservations->to_Date }}</td>
                    <td>{{ $Reservations->object_picked }}</td>
                  </tr>
                </tbody>
              </table>      
            </div>
        </div>  
        </div>
      </div>

      </div>
</section>

@endsection