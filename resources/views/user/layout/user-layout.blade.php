<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @stack('stack_title_style')
    @include('user.partials.meta')
    {{-- @include('global_links') --}}
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/icons/logo.png') }}">

    <!-- vendor css -->
    <link href="{{ asset('public/dashforge/lib/%40fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/dashforge/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('public/dashforge/assets/css/dashforge.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dashforge/assets/css/dashforge.dashboard.css') }}">

    <link href="{{ asset('public/fonic/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('public/fonic/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('public/fonic/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    
    {{-- @stack('child_style') --}}
</head>

<style>
       .main-page-container{
        min-height: 100vh;
        box-sizing: border-box;
        padding: 6rem 10vw;
        margin: 0;
       } 
</style>
@stack('child_style')

<body>
    @include('user/partials/user-navbar')
    <div class="main-page-container" >
        @yield('content')
    </div>
    @stack('child_script')
</body>
</html>    