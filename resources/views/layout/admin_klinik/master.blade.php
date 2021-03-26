<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset ('asset_admin_klinik/img/logo/logo.png') }}" rel="icon">
  <title> Dashboard </title>
  <link href="{{ asset ('asset_admin_klinik/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('asset_admin_klinik/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('asset_admin_klinik/css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include ('layout.admin_klinik.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include ('layout.admin_klinik.header')
        <!-- Topbar -->
        
        <!-- Container Fluid-->
        @yield('content')
        
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset ('asset_admin_klinik/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset ('asset_admin_klinik/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('asset_admin_klinik/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset ('asset_admin_klinik/js/ruang-admin.min.js') }}"></script>
  <script src="{{ asset ('asset_admin_klinik/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset ('asset_admin_klinik/js/demo/chart-area-demo.js') }}"></script>  
</body>

</html>