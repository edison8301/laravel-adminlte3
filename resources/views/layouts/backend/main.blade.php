<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AdminLTE') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed">

    <!-- wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.backend.nav')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.backend.sidebar')
        <!-- /.Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        @include('layouts.backend.content')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        @include('layouts.backend.controlbar')
        <!-- /.control-sidebar -->

        <!-- Admin Footer -->
        @include('layouts.backend.footer')
    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('js_footer')

</body>

</html>
