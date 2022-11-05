@push('stack_title_style')
<title>Event preview | Boostem</title>

<link href="{{ asset('public/cork/collapsible-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('public/cork/collapsible-menu/loader.js') }}"></script>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="{{ asset('public/cork/admin/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('public/cork/collapsible-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('public/cork/collapsible-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css"
    href="{{ asset('public/cork/admin/src/plugins/src/stepper/bsStepper.min.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('public/cork/admin/src/assets/css/light/scrollspyNav.css') }}" />
<link rel="stylesheet" type="text/css"
    href="{{ asset('public/cork/admin/src/plugins/css/light/stepper/custom-bsStepper.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('public/cork/admin/src/assets/css/dark/scrollspyNav.css') }}" />
<link rel="stylesheet" type="text/css"
    href="{{ asset('public/cork/admin/src/plugins/css/dark/stepper/custom-bsStepper.css') }}">
<!--  END CUSTOM STYLE FILE  -->
<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css"
    href="{{ asset('public/cork/admin/src/plugins/css/light/editors/quill/quill.snow.css') }}">

<link rel="stylesheet" type="text/css"
    href="{{ asset('public/cork/admin/src/plugins/css/dark/editors/quill/quill.snow.css') }}">
<!--  END CUSTOM STYLE FILE  -->
<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/cork/admin/src/plugins/src/tagify/tagify.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('public/cork/admin/src/plugins/css/light/tagify/custom-tagify.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('public/cork/admin/src/plugins/css/dark/tagify/custom-tagify.css') }}">
<!--  END CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="{{ asset('public/cork/admin/src/assets/css/light/forms/switches.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/cork/admin/src/assets/css/dark/forms/switches.css') }}">
{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css"> --}}

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- SweetAlert2 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script> --}}
@endpush

@push('child_style')
<style>
    .flex {
        display: flex;
        align-items: center;
        justify-content: center;
    }


    p {
        margin-bottom: 0;
        color: gray;
    }

    h3 {
        padding-left: 0;
        margin-bottom: 0;
    }

    h5 {
        margin-bottom: 0;
    }

    .banner-wrapper {
        width: 100%;
        background-color: rgb(128, 128, 128);
        border-radius: 10px;
        overflow: hidden;
    }

    .banner-wrapper img {
        width: 100%;
        border-radius: 10px;
        overflow: hidden;
    }

    .logo-time-container {
        justify-content: space-between;
        /* background-color: rgb(246, 186, 186); */
        padding: 1.5rem 0;
    }

    .logo-container {
        height: 4.4rem;
        width: 4.4rem;
        background-color: transparent;
        border-radius: 6px;
        overflow: hidden;
    }

    .logo-container img {
        height: 100%;
        width: 100%;
        object-fit: contain;
        border-radius: 6px;
        overflow: hidden;
    }

    .time-box {
        background-color: rgb(225, 225, 231);
        box-shadow: 1px 1px 5px rgb(160, 162, 169);
        min-width: 10rem;
        padding: 0.5rem 1.2rem;
        margin-left: 1.2rem;
    }

    .time-box i {
        width: 1.2rem;
        height: 1.2rem;
        font-size: 1.2rem;
        padding: 0;
        margin-right: 1rem;
    }

    .time-box p {
        color: gray;
        font-size: 0.9rem;
        font-weight: 300;
    }

    .time-box h5 {
        color: rgb(72, 72, 72);
        font-size: 1rem;
        font-weight: 500;
    }

    .event-title {
        padding-left: 1rem;
    }

    .event-title h3 {
        font-size: 1.5rem;
        font-weight: 700;
        color: rgb(53, 53, 53);
    }

    .pearks-container {
        padding: 2rem 0;
        padding-top: 4rem;
        background-color: transparent;
        width: 100%;
        min-height: 18rem;
        /* justify-content: space-evenly; */
        flex-wrap: wrap;
    }

    .peark-box {
        height: 14rem;
        padding: 0 2.5rem;
        margin: 1rem 1rem;
        width: 30%;
        min-width: 18rem;
        flex-direction: column;
        border-radius: 12px;
        border-bottom: 4px solid rgb(255, 9, 239);
        background-color: white;
        box-shadow: 1px 1px 8px rgb(185, 186, 191);
        position: relative;
        text-align: center;
    }

    .peark-box::before {
        content: '';
        background: url('https://media.istockphoto.com/vectors/vector-flat-golden-trophy-vector-id1176397624?k=20&m=1176397624&s=612x612&w=0&h=yICH7de39SwB1sDP4-kBHFS8bJz4srdu_HOrBC9KvzY=');
        width: 100%;
        height: 13rem;
        display: block;
        position: absolute;
        background-size: contain;
        filter: blur(1px);
        filter: opacity(30%);
        top: 0;
        left: 0;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .card {
        box-shadow: none;
    }

    .page-content {
        padding: 2rem;
        padding-top: 6rem;
    }

    .peark-content {
        z-index: 2;
        flex-direction: column;
    }

    #cd-timeline::before {
        border-left: 3px solid #bababa;
    }

    .cd-timeline-content::before {
        border-left: 12px solid white;
    }

    .cd-timeline-content {
        background-color: white;
    }

    .cd-timeline-block:nth-child(even) .cd-timeline-content::before {
        border-right-color: white;
    }

    .registration-form {
        width: 100%;
        min-height: 20rem;
        padding: 3rem 1rem;
        /* background-color: rgb(240, 185, 185); */
    }

    .black-out {
        background-color: #040023;
        position: absolute;
        top: 0;
        left: 0;
        width: 100vw;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    body:before {
        height: 0 !important;
    }

    .col-12 {
        margin: 20px 0;
    }

    .tagify__input {
        width: 100%;
    }

    .dstepper-block {
        margin-top: 0 !important;
    }

    .widget-content-area {
        border: none;
    }

    .btn-secondary {
        color: #fff !important;
        background-color: #805dca;
        border-color: #805dca;
        box-shadow: 0 10px 20px -10px rgb(92 26 195 / 59%);
    }

    .btn-secondary:hover {
        color: #fff !important;
        background-color: #6643b2;
        border-color: #6643b2;
        box-shadow: 0 10px 20px -10px rgb(92 26 195 / 59%);
    }

    .button-popup {
        background-color: cadetblue;
        color: whitesmoke;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        font-size: 18px;
        font-weight: 500;
        border-radius: 7px;
        padding: 15px 35px;
        cursor: pointer;
        white-space: nowrap;
        margin: 10px;
    }

    .img-popup {
        width: 200px;
    }

    .swal2-success-circular-line-right {
        background-color: #eff3f6 !important;
    }

    .swal2-success-circular-line-left {
        background-color: #eff3f6 !important;
    }

    .swal2-success-fix {
        background-color: #eff3f6 !important;
    }

    #success {
        background: green;
    }

    @media only screen and (max-width: 1170px) {
        .cd-timeline-block:nth-child(even) .cd-timeline-content::before {
            border-right-color: transparent;
        }

        .cd-timeline-content::before {
            border-left: 12px solid transparent;

        }
    }

    @media only screen and (max-width: 1000px) {
        .main-page-container {
            padding: 6rem 4vw !important;
        }
    }

    @media only screen and (max-width: 820px) {
        .time-box {
            background-color: rgb(225, 225, 231);
            box-shadow: 1px 1px 5px rgb(160 162 169);
            min-width: 7rem;
            padding: 0.3rem 1rem;
            margin-left: 1rem;
        }

        .time-box h5 {
            font-size: 0.9rem;
        }

        .time-box p {
            font-size: 0.7rem;
        }

        .event-title h3 {
            font-size: 1.3rem;
        }

        .logo-container {
            height: 3.8rem;
            width: 3.8rem;
            background-color: transparent;
            border-radius: 6px;
            overflow: hidden;
        }

        .peark-box {
            height: 12rem;
        }

        .peark-box::before {
            height: 11rem;
        }
    }

    @media only screen and (max-width: 765px) {
        .logo-time-container {
            flex-direction: column;
            margin-bottom: 0;
        }

        .left-logo {
            margin-bottom: 1rem;
        }
    }

    @media only screen and (max-width: 500px) {
        .logo-container {
            height: 2.8rem;
            width: 2.8rem;
            background-color: transparent;
            border-radius: 6px;
            overflow: hidden;
        }

        .event-title h3 {
            font-size: 1rem;
        }

        .event-title p {
            font-size: 0.7rem;
        }

        .time-box {
            background-color: rgb(225, 225, 231);
            box-shadow: 1px 1px 5px rgb(160 162 169);
            min-width: 7rem;
            padding: 0.3rem 0.85rem;
        }

        .time-box h5 {
            font-size: 0.7rem;
        }

        .time-box p {
            font-size: 0.5rem;
        }

        .peark-box {
            height: 11rem;
        }

        .peark-box p {
            font-size: 0.75rem;
        }

        .peark-box h4 {
            font-size: 1rem;
        }

        .peark-box::before {
            height: 10rem;
        }

        .card-body {
            padding: 0;
        }

        .registration-form {
            padding: 3rem 0rem;
        }

        .registration-form .container {
            padding-right: 0;
            padding-left: 0;
        }

        .widget-content-area {
            padding: 20px 0;

        }
    }
</style>
@endpush

@extends('user/layout/user-layout')
@section('content') 
{{-- banner startes heare --}}
{{-- if session has message --}}
@if (session('message'))
<div  class="flex message-box" id="success-msg" style="position: fixed;z-index:20; left:10vw; top:10vh; height:14rem;width:25rem; background-color:white; flex-direction:column; transition:1s;">
    <img style="height: 5rem;width:5rem; margin-bottom:1rem;" src="{{ asset('public/icons/checked.png') }}" alt="">
    <h2>SUCCESS</h2>
    <p>you have registered successfully</p>
    <button onclick="displayNone()" type="button" id="success-close-btn" style="margin-top:0.5rem;background-color:rgb(255, 40, 40);color:white;
    padding:6px 12px;border:none;border-radius:6px;">Close</button>
</div>
@endif
@if($errors->any())
<div  class="flex message-box" id="success-msg" style="position: fixed;z-index:20; left:10vw; top:10vh; height:14rem;width:25rem; background-color:white; flex-direction:column; transition:1s;">
    <img style="height: 5rem;width:5rem; margin-bottom:1rem;" src="{{ asset('public/icons/error.png') }}" alt="">
    <h2>Error</h2>
    <p>{{$errors->first()}}</p>
    <button onclick="displayNone()" type="button" id="success-close-btn" style="margin-top:0.5rem;background-color:rgb(255, 40, 40);color:white;
    padding:6px 12px;border:none;border-radius:6px;">Close</button>
</div>
@endif
<div class="banner-wrapper"> <img src="{{ asset('public/img/e-cellBanner.png') }}" alt="your banner"> </div> {{--
/banner ends heare --}} {{--
logo and time section startes heare --}}
<div class="flex logo-time-container">
    <div class="flex left-logo">
        <div class="logo-container"> <img src="{{ asset('public/img/e-cellLogo.png') }}" alt=""> </div>
        <div class="event-title">
            <h3>SPECTRA</h3>
            <p>E-CELL RGPV Bhopal</p>
            {{-- <button id="success">Success</button> --}}
        </div>
    </div>
    <div class="flex right-time">
        <div class="flex time-box"> <i class="dripicons-calendar"></i>
            <div>
                <p>Registration starts</p>
                <h5>04 Nov 2022 | 00:00</h5>
            </div>
        </div>
        <div class="flex time-box"> <i class="dripicons-calendar"></i>
            <div>
                <p>Registration ends</p>
                <h5>11 Nov 2022 | 23:59</h5>
            </div>
        </div>
    </div>
</div> {{-- /logo and time section ends heare --}} {{-- About event section startes heare --}} {{-- <div
    class="about-event">
    <h1>Abous EDP</h1>
    <h5>entepenore devlopement program</h5>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic mollitia ex soluta ducimus voluptatibus consectetur
        beatae rem blanditiis deserunt dolorem tempora quas corporis ipsam reprehenderit nisi maiores at ab, facilis
        iure dolor numquam labore perspiciatis totam dolore! Facere odit cumque placeat accusantium quasi voluptates,
        blanditiis voluptate corrupti aliquid debitis illum. </p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum totam fugit aut magni rerum quam libero
        voluptatum a, natus dicta.</p>
</div> --}} {{-- /About event section ends heare --}} {{-- pearks section startes heare --}}
<div class="flex pearks-container">
    <div class="flex peark-box">
        <div class="flex peark-content">
            <h4>Certificate</h4>
            <p>Get a certificate for the 2-month entrepreneur development program</p>
        </div>
    </div>
    <div class="flex peark-box">
        <div class="flex peark-content">
            <h4>Experience</h4>
            <p>Get exposed to the best experience an entrepreneur can get</p>
        </div>
    </div>
    <div class="flex peark-box">
        <div class="flex peark-content">
            <h4>Network</h4>
            <p>Build a network with successful entrepreneurs from all over the country</p>
        </div>
    </div>
    <div class="flex peark-box">
        <div class="flex peark-content">
            <h4>Leadership qualities</h4>
            <p>Learn skills that you should have as a leader</p>
        </div>
    </div>
    <div class="flex peark-box">
        <div class="flex peark-content">
            <h4>Knowledge</h4>
            <p>Know all you need to build your own startup, practically from experts</p>
        </div>
    </div>
</div> {{-- /pearks section ends heare --}} {{-- timeline startes heare --}}
<div class="timeline">
    <div class="row">
        <div class="col-12"> {{-- <div class="card" style="background-color: red;"> --}}
                <div class="card" style="background-color: transparent;">
                    <div class="card-body">
                        <section id="cd-timeline" class="cd-container">
                            <div class="cd-timeline-block">
                                <div class="cd-timeline-img bg-success"> <i class="mdi mdi-adjust"></i> </div>
                                {{-- < !-- cd-timeline-img --> --}}
                                    <div class="cd-timeline-content">
                                        <h3>Registration</h3>
                                        <p class="mb-0 text-muted"> Registration for spectra organised by ecell RGPV bhopal are going to start from 04/11/2022 Ard end at 11/11/2022 all entreated students are required to fill this form to be considered for the event. </p> <span class="cd-date me-xl-0 me-2">04 Nov | 11 Nov</span>
                                    </div>
                                    {{-- < !-- cd-timeline-content --> --}}
                            </div>
                            {{-- < !-- cd-timeline-block --> --}}
                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img bg-danger"> <i class="mdi mdi-adjust"></i> </div>
                                    {{-- < !-- cd-timeline-img --> --}}
                                        <div class="cd-timeline-content" style="background-color: white;">
                                            <h3>Introduction</h3>
                                            <p class="mb-3 text-muted">An introduction session on entrepreneurship it's importance and introduction to the session by succesful entrepreneurs who have got the best knowledge in this field . </p> <span
                                                class="cd-date me-xl-0 me-2">15 Nov</span>
                                        </div>
                                        {{-- < !-- cd-timeline-content --> --}}
                                </div>
                                {{-- < !-- cd-timeline-block --> --}}
                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img bg-info"> <i class="mdi mdi-adjust"></i> </div>
                                        {{-- cd-timeline-img --}}
                                        <div class="cd-timeline-content">
                                            <h3>Workshops & Assessments</h3>
                                            <p class="mb-0 text-muted">All participants will be given a session on entrepreneurship development and how to build a startup from scratch followed by a task on the same topic covered in that session. </p> <span
                                                class="cd-date me-xl-0 me-2">17 Nov | 06 Jan</span>
                                        </div>
                                        {{-- < !-- cd-timeline-content --> --}}
                                    </div>
                                    {{-- < !-- cd-timeline-block --> --}}
                                        <div class="cd-timeline-block">
                                            <div class="cd-timeline-img bg-pink"> <i class="mdi mdi-adjust"></i> </div>
                                            {{-- < !-- cd-timeline-img --> --}}
                                                <div class="cd-timeline-content">
                                                    <h3>Pitching & Analysis</h3>
                                                    <p class="mb-3 text-muted">Afterwords each startup will pitch its idea in front of the panel and will be able to get responses and reviews from them.</p> <span
                                                        class="cd-date me-xl-0 me-2">10 & 11 Jan</span>
                                                </div>
                                                {{-- < !-- cd-timeline-content --> --}}
                                        </div>
                                        {{-- < !-- cd-timeline-block --> --}}
                                            <div class="cd-timeline-block">
                                                <div class="cd-timeline-img bg-warning"> <i class="mdi mdi-adjust"></i>
                                                </div>
                                                {{-- < !-- cd-timeline-img --> --}}
                                                    <div class="cd-timeline-content">
                                                        <h3>Conclusion & Leaderboard</h3>
                                                        <p class="mb-3 text-muted">Finally, a session with everyone and the best startup owners from around the country will take place to which top performers will be awarded.</p> <span class="cd-date me-xl-0 me-2">15
                                                            Jan</span>
                                                    </div>
                                                    {{-- < !-- cd-timeline-content --> --}}
                                            </div>
                                            {{-- < !-- cd-timeline-block --> --}}
                        </section>
                        {{-- < !-- cd-timeline --> --}}
                    </div>
                </div>
            </div>
            {{-- < !-- end col --> --}}
        </div>
    </div> {{-- /timeline ends heare --}} {{-- registration startes heare --}}
    <div class="flex registration-form">
        @if(Auth::check()) <div class="container" style="max-width: 40rem">
            <div class="container">
                <div class="row layout-top-spacing" id="cancel-row">
                    <div id="wizard_Default" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <form method="POST" id="spectra-form" action="{{ url('/event/edp') }}"> @csrf <div
                                    class="widget-content widget-content-area">
                                    <div class="bs-stepper stepper-form-one">
                                        <div class="bs-stepper-header" role="tablist">
                                            <div class="step" data-target="#defaultStep-one"> <button type="button"
                                                    class="step-trigger" role="tab"> <span
                                                        class="bs-stepper-circle">1</span> <span
                                                        class="bs-stepper-label">Step One</span> </button> </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#defaultStep-two"> <button type="button"
                                                    class="step-trigger" role="tab"> <span
                                                        class="bs-stepper-circle">2</span> <span
                                                        class="bs-stepper-label">Step Two</span> </button> </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#defaultStep-three"> <button type="button"
                                                    class="step-trigger" role="tab"> <span
                                                        class="bs-stepper-circle">3</span> <span
                                                        class="bs-stepper-label"> <span class="bs-stepper-title">Step
                                                            Three</span> </span> </button> </div>
                                        </div>
                                        <div id="error-msg"
                                            style="color: red; font-size:1rem; margin:0 3.2rem; padding:0px 9px; background-color:#fdcbcb; border-radius:4px; ">
                                        </div>
                                        <div class="bs-stepper-content">
                                            <div id="defaultStep-one" class="content" role="tabpanel"> {{-- <form> --}}
                                                    <div class="form-group mb-4"> <label
                                                            for="defaultForm-name">Name</label> <input type="text"
                                                            required name="name" class="form-control"
                                                            id="defaultForm-name" @if (Auth::check())
                                                            value="{{ Auth::user()->name }}" @endif> </div>
                                                    <div class="form-group mb-4"> <label for="defaultEmailAddress">Email
                                                            Address</label> <input type="email" required
                                                            class="form-control" id="defaultEmailAddress" name="email"
                                                            @if (Auth::check()) value="{{ Auth::user()->email }}"
                                                            @endif> </div>
                                                    <div class="form-group mb-4"> <label
                                                            for="defaultContactAddress">Contact No.</label> <input
                                                            type="text" required class="form-control"
                                                            id="defaultContactAddress" name="contact"> </div>
                                                    <div class="form-group mb-4"> <label
                                                            for="defaultContactAddress">Watsapp No.</label> <input
                                                            type="text" required class="form-control"
                                                            id="defaultContactAddress" name="watsapp"> </div> {{--
                                                </form> --}}
                                                <div class="button-action mt-5"> <button type="button"
                                                        class="btn btn-secondary btn-prev me-3" disabled>Prev</button>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-nxt">Next</button>
                                                </div>
                                            </div>
                                            <div id="defaultStep-two" class="content" role="tabpanel"> {{-- <form> --}}
                                                    <div class="" style="margin: 1rem 0;"> <label
                                                            for="defaultInputAddress" class="form-label">College</label>
                                                        <input type="text" required class="form-control"
                                                            id="defaultInputAddress" name="college">
                                                    </div>
                                                    <div class="" style="margin: 1rem 0;"> <label
                                                            for="defaultInputAddress2" class="form-label"> Enrollment
                                                            No.</label> <input type="text" class="form-control"
                                                            id="defaultInputAddress2" placeholder="ex: 0101CS211120"
                                                            name="enrollment_no"> </div>
                                                    <div class="row">
                                                        <div class="col-md-6" style="margin: 0.8rem 0;"> <label
                                                                for="defaultInputState" class="form-label">Year</label>
                                                            <select id="defaultInputState" required name="year"
                                                                class="form-select">
                                                                <option value="1" selected="">1st</option>
                                                                <option value="2">2nd</option>
                                                                <option value="3">3rd</option>
                                                                <option value="4">4th</option>
                                                                <option value="10">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6" style="margin: 0.8rem 0;"> <label
                                                                for="defaultInputBranch"
                                                                class="form-label">Branch</label> <select
                                                                id="defaultInputBranch" class="form-select"
                                                                name="branch">
                                                                <option value="CSE" selected="">CSE</option>
                                                                <option value="ECE">ECE</option>
                                                                <option value="EX">EX</option>
                                                                <option value="IT">IT</option>
                                                                <option value="ME">ME</option>
                                                                <option value="PCT">PCT</option>
                                                                <option value="ECE">ECE</option>
                                                                <option value="CE">CE</option>
                                                                <option value="AU">AU</option>
                                                                <option value="CSBS">CSBS</option>
                                                                <option value="Other">Other</option>
                                                            </select> </div>
                                                    </div> {{--
                                                </form> --}}
                                                <div class="button-action mt-5"> <button type="button"
                                                        class="btn btn-secondary btn-prev me-3">Prev</button> <button
                                                        type="button" class="btn btn-secondary btn-nxt">Next</button>
                                                </div>
                                            </div>
                                            <div id="defaultStep-three" class="content" role="tabpanel"> {{-- <form
                                                    class="row g-3"> --}}
                                                    <div class="form-group mb-4"> <label
                                                            for="exampleFormControlTextarea1"> Why do you want to join
                                                            this program </label> <textarea class="form-control"
                                                            id="exampleFormControlTextarea1" name="why_join" rows="3"
                                                            spellcheck="false"></textarea> </div>
                                                    <div class="form-group mb-4"> <label
                                                            for="exampleFormControlTextarea2"> Do you have an idea which
                                                            you want to work on</label> <textarea class="form-control"
                                                            id="exampleFormControlTextarea2" name="pre_idea" rows="3"
                                                            spellcheck="false"></textarea> </div>
                                                    <div class="widget-content widget-content-area"
                                                        style="padding: 20px 0px"> {{-- <label for="interest">
                                                            Interest</label> --}} <input id="interest"
                                                            placeholder="Interest" name='interest'> </div>
                                                    <div class="col-lg-12 col-12 layout-spacing">
                                                        <div class="form-check form-switch form-check-inline"> <input
                                                                class="form-check-input" name="current_startup"
                                                                type="checkbox" role="switch"
                                                                id="flexSwitchCheckChecked" checked value="1"> <label
                                                                class="form-check-label" for="flexSwitchCheckChecked">
                                                                Are you currently working on any startup or idea</label>
                                                        </div>
                                                    </div> {{--
                                                </form> --}}
                                                <div id="form-action-last" class="button-action mt-3"> 
                                                    <button type="button"
                                                        class="btn btn-secondary btn-prev me-3">Prev</button>

                                                    <button type="button" onclick="submitFormSpectra()"
                                                        class="btn btn-success me-3">Verify</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> @else <div class="flex container black-layer" style="max-width: 40rem; height:100%;
                width:100%; background-color:#d8d8d8; min-height:60vh; position:relative; "> <a
                href="{{ route('user.register') }}"
                style=" position:absolute; top:50%; left:50%; padding:10px 24px; font-size:1.2rem;  color:white; cursor: pointer; border-radius: 4px;transform: translate(-50% ,-50%); background-color:#0168fa ;  ">Login
                to Register</a>
            <div> @endif </div> {{-- /registration ends heare --}}
@endsection
            @push('child_script') 
            <script src="{{ asset('public/cork/admin/src/plugins/src/stepper/bsStepper.min.js') }}"></script>
            <script src="{{ asset('public/cork/admin/src/plugins/src/stepper/custom-bsStepper.min.js') }}"></script>
            {{-- < !-- END PAGE LEVEL SCRIPTS --> --}}
                {{-- < !-- BEGIN GLOBAL MANDATORY STYLES --> --}}
                    <script src="{{ asset('public/cork/admin/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                    <script
                        src="{{ asset('public/cork/admin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}">
                    </script>
                    <script src="{{ asset('public/cork/admin/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
                    <script src="../../../resources/views/admin/html/layouts/vertical-dark-menu/app.js"></script>
                    <script src="{{ asset('public/cork/admin/src/plugins/src/highlight/highlight.pack.js') }}"></script>
                    {{-- < !-- END GLOBAL MANDATORY STYLES --> --}}
                        {{-- < !-- BEGIN PAGE LEVEL SCRIPTS --> --}}
                            <script src="{{ asset('public/cork/admin/src/assets/js/scrollspyNav.js') }}"></script>
                            <script src="{{ asset('public/cork/admin/src/plugins/src/editors/quill/quill.js') }}">
                            </script> {{-- <script
                                src="{{ asset('cork/admin/src/plugins/src/editors/quill/custom-quill.js') }}"></script>
                            --}}
                            {{-- < !-- END PAGE LEVEL SCRIPTS --> --}}
                                {{-- < !-- BEGIN CUSTOM SCRIPTS FILE --> --}}
                                    <script src="{{ asset('public/cork/admin/src/plugins/src/tagify/tagify.min.js') }}">
                                    </script>
                                    <script
                                        src="{{ asset('public/cork/admin/src/plugins/src/tagify/custom-tagify.js') }}">
                                    </script>
                                    {{-- < !-- BEGIN CUSTOM SCRIPTS FILE --> --}}
                                        {{-- < !-- BEGIN PAGE LEVEL PLUGINS --> --}}
                                            {{-- < !-- toastr --> --}}
                                                <script
                                                    src="{{ asset('public/cork/admin/src/plugins/src/notification/snackbar/snackbar.min.js') }}">
                                                </script>
                                                {{-- < !-- END PAGE LEVEL PLUGINS --> --}}
                                                    {{-- < !-- BEGIN CUSTOM SCRIPTS FILE --> --}}
                                                        <script
                                                            src="{{ asset('public/cork/admin/src/assets/js/components/notification/custom-snackbar.js') }}">
                                                        </script>
                                                        {{-- < !-- END CUSTOM SCRIPTS FILE --> --}}
                                                            <script>
                                                                // // The DOM element you wish to replace with Tagify
                                                            // var input = document.querySelector('input[name=interest]');

                                                            // // initialize Tagify on the above input node reference
                                                            // new Tagify(input)
                                                            var inputElm = document.querySelector('input[name=interest]')
                                                                , whitelist = [
                                                                    "Public Speaking"
                                                                    , "Digital Marketing"
                                                                    , "Business Development"
                                                                    , "Entrepreneurship"
                                                                    , "Finance"
                                                                    , "Law"
                                                                    , "Management"
                                                                    , "Human Resources"
                                                                    , "Operations"
                                                                    , "Sales"
                                                                    , "Upcoming tech"
                                                                    , "Web3"
                                                                , ];

                                                            var tagify = new Tagify(inputElm, {
                                                                whitelist: whitelist,
                                                                // maxTags: 10,
                                                                dropdown: {
                                                                    maxItems: 20, // <- mixumum allowed rendered suggestions
                                                                    classname: "tags-look", // <- custom classname for this dropdown, so it could be targeted
                                                                    enabled: 0, // <- show suggestions on focus
                                                                    closeOnSelect: false // <- do not hide the suggestions dropdown once an item has been selected
                                                                }
                                                            })

                                                            const parentTab = {
                                                                'name': '#defaultStep-one'
                                                                , 'email': '#defaultStep-one'
                                                                , 'contact': '#defaultStep-one'
                                                                , 'watsapp': '#defaultStep-one'
                                                                , 'college': '#defaultStep-two'
                                                                , 'year': '#defaultStep-two'
                                                                , 'branch': '#defaultStep-two',

                                                            }

                                                            // display none on click
                                                            function displayNone() {
                                                                document.getElementById("success-msg").style.display =
                                                                    "none";
                                                            }

                                                            function submitFormSpectra() {
                                                                var form = document.getElementById('spectra-form');
                                                                var formData = new FormData(form);
                                                                // check if form is valid
                                                                if (form.checkValidity()) {
                                                                    document.getElementById('form-action-last').innerHTML =
                                                                    `<button type="button"
                                                        class="btn btn-secondary btn-prev me-3">Prev</button>
                                                        <button type="submit" 
                                                        class="btn btn-success me-3">Submit Now</button>
                                                        `;
                                                                    
                                                                    //alert('form is valid');
                                                                    // fetch("{{ route('submit.form.spectra') }}", { 
                                                                    //        method: 'POST',
                                                                    //        body: formData
                                                                    // }).then(() => console.log('success'));


                                                                } else {
                                                                    // detect which input is invalid
                                                                    var invalid = document.querySelectorAll(':invalid');
                                                                    var invalidItem = invalid[1];
                                                                    var invalidTab = parentTab[invalidItem.name];
                                                                    // show the invalid tab
                                                                    var stepper = new Stepper(document.querySelector('.bs-stepper'))
                                                                    stepper.to(invalidTab);
                                                                    // show the invalid input
                                                                    invalidItem.focus();
                                                                    invalidItem.style.border = '1px solid red';
                                                                    // show error message
                                                                    document.getElementById('error-msg').innerHTML = 'Please fill all the required fields';

                                                                }
                                                            }

                                                            // Alert Modal Type
		// $(document).on('click', '#success', function(e) {
		// 	swal(
		// 		'Success',
		// 		'You clicked the <b style="color:green;">Success</b> button!',
		// 		'success'
		// 	)
		// });

                                                            
                                                           

                                                            </script>
                                                            {{-- <script>
                                                                if (Session::has('message')) {
                                                                swal(
				'Success',
				'You have <b style="color:green;">Successfully</b> registered!',
				'success'
			)
                                                            }
                                                            </script> --}}
                                                            {{-- < !-- JAVASCRIPT --> --}}
                                                                <script
                                                                    src="{{ asset('public/fonic/libs/jquery/jquery.min.js') }}">
                                                                </script>
                                                                <script
                                                                    src="{{ asset('public/fonic/libs/bootstrap/js/bootstrap.bundle.min.js') }}">
                                                                </script>
                                                                <script
                                                                    src="{{ asset('public/fonic/libs/metismenu/metisMenu.min.js') }}">
                                                                </script>
                                                                <script
                                                                    src="{{ asset('public/fonic/libs/simplebar/simplebar.min.js') }}">
                                                                </script>
                                                                <script
                                                                    src="{{ asset('public/fonic/libs/node-waves/waves.min.js') }}">
                                                                </script>
                                                                {{-- < !--Morris Chart--> --}}
                                                                    <script
                                                                        src="{{ asset('public/fonic/libs/morris.js/morris.min.js') }}">
                                                                    </script>
                                                                    <script
                                                                        src="{{ asset('public/fonic/libs/raphael/raphael.min.js') }}">
                                                                    </script>
                                                                    <script
                                                                        src="{{ asset('public/fonic/js/pages/dashboard.init.js') }}">
                                                                    </script>
                                                                    <script src="{{ asset('public/fonic/js/app.js') }}">
                                                                    </script>
                                                                    {{-- < !-- Required datatable js --> --}}
                                                                        <script
                                                                            src="{{ asset('public/fonic/libs/datatables.net/js/jquery.dataTables.min.js') }}">
                                                                        </script>
                                                                        <script
                                                                            src="{{ asset('public/fonic/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}">
                                                                        </script>
                                                                        {{-- < !-- Buttons examples --> --}}
                                                                            <script
                                                                                src="{{ asset('public/fonic/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}">
                                                                            </script>
                                                                            <script
                                                                                src="{{ asset('public/fonic/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}">
                                                                            </script>
                                                                            <script
                                                                                src="{{ asset('public/fonic/libs/jszip/jszip.min.js') }}">
                                                                            </script>
                                                                            <script
                                                                                src="{{ asset('public/fonic/libs/pdfmake/build/pdfmake.min.js') }}">
                                                                            </script>
                                                                            <script
                                                                                src="{{ asset('public/fonic/libs/pdfmake/build/vfs_fonts.js') }}">
                                                                            </script>
                                                                            <script
                                                                                src="{{ asset('public/fonic/libs/datatables.net-buttons/js/buttons.html5.min.js') }}">
                                                                            </script>
                                                                            <script
                                                                                src="{{ asset('public/fonic/libs/datatables.net-buttons/js/buttons.print.min.js') }}">
                                                                            </script>
                                                                            <script
                                                                                src="{{ asset('public/fonic/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}">
                                                                            </script>
                                                                            {{-- < !-- Responsive examples --> --}}
                                                                                <script
                                                                                    src="{{ asset('public/fonic/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
                                                                                </script>
                                                                                <script
                                                                                    src="{{ asset('public/fonic/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
                                                                                </script>
                                                                                {{-- < !-- Datatable init js --> --}}
                                                                                    <script
                                                                                        src="{{ asset('public/fonic/js/pages/datatables.init.js') }}">
                                                                                    </script>
                                                                                    <script
                                                                                        src="{{ asset('public/fonic/js/app.js') }}">
                                                                                    </script> @endpush