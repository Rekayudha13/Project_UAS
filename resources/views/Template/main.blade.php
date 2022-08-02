<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bayern Munich</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset("AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css") }}">
  <!-- Theme style -->
<link rel="stylesheet" href="{{ asset("AdminLTE-3.2.0/dist/css/adminlte.min.css") }}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
            <a href="../../index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>        
    </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('pemain.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pemain
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('staf.index') }}" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Staf
              </p>
            </a>
          </li> <li class="nav-item">
            <a href="{{ route("posisi.index") }}" class="nav-link">
              <i class="nav-icon fas fa-user-tag"></i>
              <p>
                Posisi
              </p>
            </a>
          </li> <li class="nav-item">
            <a href="{{ route('status.index') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>
                Status
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('container')
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset("AdminLTE-3.2.0/plugins/jquery/jquery.min.js") }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset("AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("AdminLTE-3.2.0/dist/js/adminlte.min.js") }}"></script>
</body>
</html>
