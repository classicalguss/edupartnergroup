<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{@asset('css/app.css')}}">
    <link rel="stylesheet" href="{{@asset('css/temp.css')}}">
    <title>Edupartnergroup</title>
</head>
<body>
<div class="site-header">
    {{--<a class="navbar-brand" href="#">--}}
        {{--<img src="{{ asset('img/edupartner-logo.png') }}">--}}
    {{--</a>--}}
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/edupartner-logo3.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">School Audit</a>
                            <a class="dropdown-item" href="#">School Management</a>
                            <a class="dropdown-item" href="#">Teachers Training</a>
                            <a class="dropdown-item" href="#">Teachers Recruitment</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user"> </i> Login</a>
                    </li>
                    <li class="nav-item prompt">
                        <a class="nav-link" href="#"><i class="fas fa-chart-line"> </i> Free Assessment</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</div>

@yield('content')

</body>

<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>

</html>
