@push('stack_title_style')
    <title>Deshboard | Boostem</title>
    <style>
        .flex {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .right-time a{
            color: white;
            background-color: rgb(1, 136, 159);
            font-size: 1.2rem;
            border-radius: 4px;
            padding: 9px 22px;
        }
        .right-time a:hover{
            color: white;
            background-color: rgb(3, 143, 168);
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
    
        @media only screen and (max-width: 1000px) {
            .main-page-container {
                padding: 6rem 4vw !important;
            }
        }
    
        @media only screen and (max-width: 820px) {
            
    
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
            .right-time a{
                font-size: 1rem;
                padding: 6px 12px;
            }
        }
    </style>
@endpush


@extends('user/layout/user-layout')
@section('content')
    <div class="home-container">
        <a href="{{ url('/event/edp') }}">
            <div class="banner-wrapper"> <img src="{{ asset('public/img/e-cellBanner.png') }}" alt="your banner"> </div> 
        </a>
        {{--
            /banner ends heare --}} {{--
            logo and time section startes heare --}}
            <div class="flex logo-time-container">
                <a href="{{ url('/event/edp') }}">
                <div class="flex left-logo">
                    <div class="logo-container"> <img src="{{ asset('public/img/e-cellLogo.png') }}" alt=""> </div>
                    <div class="event-title">
                        <h3 style="margin-bottom: 0">SPECTRA</h3>
                        <p style="margin-bottom: 0">E-CELL RGPV Bhopal</p>
                        {{-- <button id="success">Success</button> --}}
                    </div>
                </div>
                </a>
                <div class="flex right-time">
                    <a href="{{ url('/event/edp') }}">
                        Register Now
                    </a>
                </div>
            </div>
        </div>
    
@endsection