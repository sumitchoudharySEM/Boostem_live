<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @stack('stack_title_style')
    @include('user.partials.meta')
    {{-- @include('global_links') --}}
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/icons/logo.png') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('public/fonic/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('public/fonic/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('public/fonic/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    @stack('child-style')

</head>

<body data-sidebar="dark">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- navbar Start -->
        @include('community/partials/community-navbar')
        <!-- navbar end -->

        <!-- Left Sidebar start -->
        @include('community/partials/community-sidebar')
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->
        @yield('content')
        <!-- end right Content here -->

    </div>
    <!-- end page -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('public/fonic/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('public/fonic/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('public/fonic/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('public/fonic/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('public/fonic/libs/node-waves/waves.min.js')}}"></script>

    <!--Morris Chart-->
    <script src="{{ asset('public/fonic/libs/morris.js/morris.min.js')}}"></script>
    <script src="{{ asset('public/fonic/libs/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('public/fonic/js/pages/dashboard.init.js')}}"></script>
    <script src="{{ asset('public/fonic/js/app.js')}}"></script>

    <!-- Required datatable js -->
<script src="{{ asset('public/fonic/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('public/fonic/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{ asset('public/fonic/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('public/fonic/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('public/fonic/libs/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('public/fonic/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{ asset('public/fonic/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{ asset('public/fonic/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('public/fonic/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('public/fonic/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{ asset('public/fonic/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('public/fonic/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<!-- Datatable init js -->
<script src="{{ asset('public/fonic/js/pages/datatables.init.js')}}"></script>
<script src="{{ asset('public/fonic/js/app.js')}}"></script>

</body>

</html>
