<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | {{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/') }}css/fontawesome.all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">
    {{-- Data Table --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.min.css">

    {{-- TinyMCE --}}
    <x-head.tinymce-config />




</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        {{-- @include('dashboard.layouts.navbar') --}}
        <x-dashboard.navbar />
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        {{-- @include('dashboard.layouts.menu') --}}
        <x-dashboard.menu />

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            {{-- @include('components.pesan') --}}
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        {{-- <aside class="control-sidebar control-sidebar-dark"> --}}
        <!-- Control sidebar content goes here -->
        {{-- </aside> --}}
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <x-dashboard.footer />

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    {{-- <script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
        integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/') }}js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="{{ asset('/') }}dist/js/adminlte.js"></script>

    {{-- Data Table --}}
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabelSaya').DataTable();
        });
    </script>

    {{-- Sweet Alert --}}
    @include('sweetalert::alert')

</body>

</html>
