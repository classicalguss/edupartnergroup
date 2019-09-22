@php
    $routeName = Route::currentRouteName();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{@asset('css/app.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    {{--<link rel="stylesheet" href="{{@asset('css/temp.css')}}">--}}
    <title>Edupartnergroup</title>
</head>
<body>
<div class="site-header">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ url("/") }}">
                <img src="{{ asset('img/edupartner-logo3.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right">
                    <li class="nav-item @if( $routeName == "home" ) active @endif">
                        <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @if( $routeName == "about") active @endif">
                        <a class="nav-link" href="/about">ABOUT US</a>
                    </li>
                    <li class="nav-item @if( $routeName == "audit") active @endif">
                        <a class="nav-link" href="{{ route('audit') }}">SCHOOL AUDIT</a>
                    </li>
                    <li class="nav-item dropdown @if(in_array($routeName, ['school-management', 'teachers-training', 'teachers-recruitment'])) active @endif">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            OTHER SERVICES
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('school-management') }}">School Management</a>
                            <a class="dropdown-item" href="{{ route('teachers-training') }}">Teachers Training</a>
                            <a class="dropdown-item" href="{{ route('teachers-recruitment') }}">Teachers Recruitment</a>
                        </div>
                    </li>
                    <li class="nav-item @if (in_array($routeName, ['success', 'contact'])) active @endif">
                        <a class="nav-link " href="{{ route('contact') }}"><i class="fas fa-envelope"> </i> CONTACT</a>
                    </li>
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#"><i class="fas fa-user"> </i> LOGIN</a>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </nav>
    </div>
</div>
@yield('content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/edupartner-logo3.png') }}">
                </a>
                <p class="white">EduPartner is a regional educational management firm specialized in designing new operating models for educational institutes. The purpose of such a customized operating model is to help schools convert strategies to tangible results.
                </p>
            </div>
            <div class="col-sm-3">
                <h3>Links</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{ route('audit') }}">School Audit</a></li>
                    <li><a href="{{ route('school-management') }}">School Management</a></li>
                    <li><a href="{{ route('teachers-training') }}">Teachers Training</a></li>
                    <li><a href="{{ route('teachers-recruitment') }}">Teachers Recruitment</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h3>Contact</h3>
                <p><i class="fas fa-envelope"> </i> info@edupartnergroup.com</p>
                <p><i class="fas fa-phone-square"> </i> +962 796341119</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <p>Copyright © 2019 Edupartner Group. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

</body>

<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>

</html>
