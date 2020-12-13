@extends('admin.layouts.front')
@section('content')
<br/>


{{--  content  --}}
<section class="content">
    <div class="row">
      <div class="col-md-3">


          {{--  right section  --}}
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">test</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item active">
                <a href="#" class="nav-link">
                  <i class="fas fa-inbox"></i> Inbox
                  <span class="badge bg-primary float-right">no of messages</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-envelope"></i> Sent
                </a>
              </li>
              <ul>
          </div>
          </div>
        </div>

        {{--  main frame  --}}
        <div class="col-md-9">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Inbox</h3>

            <div class="card-tools">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Search Mail">
                <div class="input-group-append">
                  <div class="btn btn-primary">
                    <i class="fas fa-search"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
         
            <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tbody>
                    <tr>
                        <td>
                            <td class="mailbox-name"><a href="read-mail.html">Name</a></td>
                            <td class="mailbox-email"><a href="read-mail.html">Email</a></td>
                            <td class="mailbox-subject"><a href="read-mail.html">Subject</a></td>
                            <td class="mailbox-message"><b>message</b>
                        </td>
                    </tr>
                </tbody>
              </table>
            </div>
              <!--Ending table -->
</section>

@endsection