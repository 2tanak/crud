<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
 

  <!-- Google Font: Source Sans Pro 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/dist/plugins/fontawesome-free/css/amesome.min.css">
  <!-- Ionicons -
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  -->
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/dist/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck 
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  -->
  <!-- JQVMap 
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  -->
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/dist/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
   <link rel="stylesheet" href="/dist/css/myadmin.css">
   <link rel="stylesheet" href="/dist/drobsone/css/dropzone.css">
   <link rel="stylesheet" href="/dist/plugins/select2/css/select2.min.css">

  <!-- Daterange picker 
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  -->
  <!-- summernote 
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  
 <!-- /.navbar -->
 @include('__block.main_navbar')
  <!-- /.navbar -->
 @include('__block.sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid" >
        <div class="row mb-2">
          <div class="col-sm-12">
            
          </div><!-- /.col -->
		  
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
	
    <section class="content">
      <div class="container-fluid" >
	  @if (session('error'))
        <div class="alert alert-danger" style='text-align:center'>
          {{ session('error') }}
        </div>
      @endif
      @if (session('message'))
       <div class="alert alert-success" style='text-align:center'>
        {{ session('message') }}
     </div>
      @endif
	  
	  
	  
       @yield('content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/dist/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/dist/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<!---<script src="/plugins/chart.js/Chart.min.js"></script>--->
<!-- Sparkline 
<script src="/plugins/sparklines/sparkline.js"></script>
-->
<!-- JQVMap 
<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>

<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
-->
<!-- jQuery Knob Chart 
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
-->
<!-- daterangepicker 
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
-->
<!-- Tempusdominus Bootstrap 4
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 -->
<!-- Summernote 
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
-->
<!-- overlayScrollbars 
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
</script>
-->
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) 
<script src="/dist/js/pages/dashboard.js"></script>
-->
<script src="/dist/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8" ></script>
<script type="text/javascript" src="/dist/drobsone/js/dropzone.js"></script>
<script type="text/javascript" src="/dist/drobsone/js/main2.js"></script>
<script src="/dist/js/myadmin.js"></script>
<script src="/dist/plugins/select2/js/select2.full.min.js"></script>
@section('js_block')
@show
</body>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
 })
  </script>
</html>
