<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo', 'REDEServ') | CCEV</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.css")}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel=" stylesheet" href="{{asset("assets/$theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
    <!-- Bootstrap Color Picker -->
    <link rel=" stylesheet" href="{{asset("assets/$theme/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css")}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel=" stylesheet" href="{{asset("assets/$theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
    <!-- Select2 -->
    <link rel=" stylesheet" href="{{asset("assets/$theme/plugins/select2/css/select2.min.css")}}">
    <link rel=" stylesheet" href="{{asset("assets/$theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/jqvmap/jqvmap.min.css")}}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel=" stylesheet" href="{{asset("assets/$theme/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css")}}">
    <!-- Theme style -->
    <link rel=" stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.css")}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/summernote/summernote-bs4.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/custom.css")}}">

    @yield('styles')

    <!-- Google Font: Source Sans Pro -->
    <link href=" https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Inicio Header -->
        @include("theme/$theme/header")
        <!-- Fin Header -->
        <!-- Inicio Aside -->
        @include("theme/$theme/aside")
        <!-- Fin Aside -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                
            </div>
            <!-- /.content-header -->

            <!-- Main content-->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->

                        @yield('contenido')

                </div>
            </section>
        </div>
        <!-- Inicio Footer-->
        @include("theme/$theme/footer")
        <!-- Fin Footer -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    <!-- jQuery -->
    <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset("assets/$theme/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- ChartJS -->
    <script src="{{asset("assets/$theme/plugins/chart.js/Chart.min.js")}}"></script>
    <!-- Sparkline -->
    <script src="{{asset("assets/$theme/plugins/sparklines/sparkline.js")}}"></script>
    <!-- JQVMap -->
    <script src="{{asset("assets/$theme/plugins/jqvmap/jquery.vmap.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/jqvmap/maps/jquery.vmap.usa.js")}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset("assets/$theme/plugins/jquery-knob/jquery.knob.min.js")}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset("assets/$theme/plugins/moment/moment.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.js")}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset("assets/$theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
    <!-- Summernote -->
    <script src="{{asset("assets/$theme/plugins/summernote/summernote-bs4.min.js")}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset("assets/$theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/$theme/dist/js/adminlte.js")}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset("assets/$theme/dist/js/pages/dashboard.js")}}"></script>

    @yield('scripts')
</body>

</html>