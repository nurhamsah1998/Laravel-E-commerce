<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{asset("AdminLTE/plugins/fontawesome-free/css/all.min.css")}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset("AdminLTE/dist/css/adminlte.min.css")}}>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sticky sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{asset("AdminLTE/dist/img/user2-160x160.jpg")}} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
              <p>
               Dashboard Penjualan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/product" class="nav-link">
                <i class="nav-icon fas fa-database"></i>
              <p>
                Produk Saya
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/setting" class="nav-link">
                <i class="nav-icon fas fa-wrench"></i>
              <p>
           Pengaturan
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
        @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src={{asset("AdminLTE/plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap 4 -->
<script src={{asset("AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("AdminLTE/dist/js/adminlte.min.js")}}></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
