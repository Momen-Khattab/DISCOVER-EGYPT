@extends('admin.layouts.front')
@section('content')
{{--  content  --}}
<section class="content">
  <br>
    <div class="row">
      <div class="col-md-12">
      <div class="card">
        <div class="card-header"> Message from: {{ $contact->name }}</div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-stripped table-bordered">
                <thead>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                  </tr>
                  <tr>
                    <td colspan="3"><strong>Message: </strong> <br>{{ $contact->message }}</td>
                  </tr>
                  <tr>
                    <td colspan="3">
                      <form action="{{ route('replayForEmail', $contact->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="content">Replay: </label>
                          <textarea name="content" id="" cols="30" rows="10" placeholder="Type your replay" class="form-control">{{ old('content') }}</textarea>
                        </div>
                        <div class="form-group text-center">
                          <input type="submit" class="btn btn-primary" value="Send">
                        </div>
                      </form>
                    </td>
                  </tr>
                </tbody>
              </table>

              <hr>
              <h4>Replies</h4>
              <table class="table table-hover">
                <thead>
                  <th>Admin</th>
                  <th>Replay</th>
                  <th>Time</th>
                </thead>
                <tbody>
                  @foreach ($contact->replies as $item)
                      <tr>
                          <td>{{ $item->admin->name }}</td>
                          <td>{{ $item->content }}</td>
                          <td>{{ $item->created_at->diffForHumans() }}</td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
        </div>
      </div>

      </div>
</section>

@endsection
