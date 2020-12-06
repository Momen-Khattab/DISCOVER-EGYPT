<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | Panel </title>

  <link rel="stylesheet" href="{{ asset('admin_panel') }}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('admin_panel') }}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{ asset('admin_panel') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('admin_panel') }}/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<body class="login-page" style="min-height: 512.8px;">
<div class="">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('admin_panel') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin_panel') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('admin_panel') }}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="{{ asset('admin_panel') }}/plugins/select2/js/select2.full.min.js"></script>

<!-- AdminLTE -->
<script src="{{ asset('admin_panel') }}/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('admin_panel') }}/plugins/chart.js/Chart.min.js"></script>
<script src="{{ asset('admin_panel') }}/dist/js/demo.js"></script>
<script src="{{ asset('admin_panel') }}/dist/js/pages/dashboard3.js"></script>
@yield('js')
</body>
</html>
