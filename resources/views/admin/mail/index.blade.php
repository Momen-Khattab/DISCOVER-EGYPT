@extends('admin.layouts.front')
@section('content')
<div class="content-header">
    <div class="container-fluid">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">mail</h3>
      <div class="card-tools">
        @if (!$mail->isEmpty())
            {{ $mail->render() }}
        @endif
      </div>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
        @if ($mail->isEmpty())
            <div class="alert alert-danger">
                No data found!
            </div>
        @else
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>mail_no</th>
            <th>mail_name</th>
            <th>sender</th>
            <th>subject</th>
            <th>Control</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mail as $item)
              <tr>
                  <td>{{ $item->mail_no }}</td>
                  <td>{{ $item->mail_name }}</td>
                  <td>{{ $item->sender }}</td>
                  <td>{{ $item->subject }}</td>
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