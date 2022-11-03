@push('stack_title_style')
    <title>Table | Boostem</title>
    <link href="{{ asset('cork/collapsible-menu/css/dark/loader.css') }}" rel="stylesheet"
        type="text/css" />
    <script src="{{ asset('cork/collapsible-menu/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('cork/admin/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/collapsible-menu/css/light/plugins.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('cork/collapsible-menu/css/dark/plugins.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/admin/src/plugins/src/stepper/bsStepper.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('cork/admin/src/assets/css/light/scrollspyNav.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('cork/admin/src/plugins/css/light/stepper/custom-bsStepper.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('cork/admin/src/assets/css/dark/scrollspyNav.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('cork/admin/src/plugins/css/dark/stepper/custom-bsStepper.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('cork/admin/src/plugins/css/light/editors/quill/quill.snow.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('cork/admin/src/plugins/css/dark/editors/quill/quill.snow.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/admin/src/plugins/src/tagify/tagify.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('cork/admin/src/plugins/css/light/tagify/custom-tagify.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('cork/admin/src/plugins/css/dark/tagify/custom-tagify.css') }}">
    <!--  END CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/admin/src/assets/css/light/forms/switches.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/admin/src/assets/css/dark/forms/switches.css') }}">
    <!-- DataTables -->
    <link href="{{ asset('fonic/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fonic/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('fonic//libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet"
        type="text/css" />
@endpush

@push('child-style')

@endpush

@extends('community/layout/community-layout')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Spectra registrations</h4>
                            {{-- <p class="card-title-desc">This is an experimental awesome solution for responsive
                                tables with complex data.</p> --}}

                            <div class="table-rep-plugin">
                                <div class="table-responsive b-0" data-pattern="priority-columns">
                                    <table id="datatable-buttons" class="table  table-striped">
                                        <thead>
                                            <tr>
                                                <th data-priority="1">Name</th>
                                                <th data-priority="2">Email</th>
                                                <th data-priority="3">Phone No.</th>
                                                <th data-priority="4">Watsapp No.</th>
                                                <th data-priority="5">College</th>
                                                <th data-priority="6">Year</th>
                                                <th data-priority="7">Branch</th>
                                                <th data-priority="8">Enrollment</th>
                                                <th data-priority="9"> Why do you want to join</th>
                                                <th data-priority="10">Do you have an idea</th>
                                                <th data-priority="11">interest</th>
                                                <th data-priority="12">current Startup</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($data as $dataitem )
                                           <tr>
                                            <th>{{ $dataitem ->name }}</th>
                                            <th>{{ $dataitem ->email }}</th>
                                            <th>{{ $dataitem ->contact }}</th>
                                            <th>{{ $dataitem ->watsapp }}</th>
                                            <th>{{ $dataitem ->college }}</th>
                                            <th>{{ $dataitem ->year }}</th>
                                            <th>{{ $dataitem ->branch }}</th>
                                            <th>{{ $dataitem ->enrollment_no }}</th>
                                            <th>{{ $dataitem ->why_join }}</th>
                                            <th>{{ $dataitem ->pre_idea }}</th>
                                            <th>{{ $dataitem ->interest }}</th>
                                            <th>@if ($dataitem ->current_startup == 1)
                                                Yes
                                              @else
                                                No  
                                            @endif
                                        </tr>
                                           @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            
        </div>
    </div> 
</div> 

@endsection