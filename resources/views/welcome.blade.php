@extends('layouts.app')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide"  data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">

            <div class="banner carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/slide_02.jpg') }}" alt="School Audit">
                <div class="shade"></div>
                <div class="banner-content row align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="big-tagline col-md-6 col-sm">
                                <h2>Audit Schools Thoroughly</h2>
                                <p class="lead">We at "EduPartner group" have devised a special model to audit schools
                                    and determine their strengths and weaknesses.
                                    Our audit model consists of 8 different capabilities.</p>
                                <a href="{{ route('audit') }}" class="banner-prompt">Learn More</a>
                            </div>
                            <div class="col-md-6 col-sm">
                                <img style=""
                                     src="{{ asset('img/new/Audit.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner carousel-item">
                <img class="d-block w-100" src="{{ asset('img/slide_01.jpg') }}" alt="School Management">
                <div class="shade"></div>
                <div class="banner-content row align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <img style="width: 80%"
                                     src="{{ asset('img/new/Operating Model.jpg')}}" alt="image">
                            </div>
                            <div class="big-tagline col-md-6 col-sm-12">
                                <h2>School Operating Model</h2>
                                <p class="lead">We partner with our clients to deliver an ongoing educational management
                                    structure or operation of the school to ensure sustainability and demonstrate
                                    schools vision and mission.</p>
                                <a href="{{ route("school-management") }}" class="banner-prompt">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner carousel-item">
                <img class="d-block w-100" src="{{ asset('img/slide_04.jpg') }}" alt="School Audit">
                <div class="shade"></div>
                <div class="banner-content row align-items-center">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="big-tagline col-md-6 col-sm">
                                <h2>Comprehensive Teachers Training</h2>
                                <p class="lead">Partnering with a leading establishment in Cambridge Educational
                                    Services, we aim to play an effective role in improving the overall performance of
                                    educational establishments locally and regionally.</p>
                                <a href="{{ route("teachers-training") }}" class="banner-prompt">Learn More</a>
                            </div>
                            <div class="col-md-6 col-sm">
                                <img style=""
                                     src="{{ asset('img/new/training.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner carousel-item">
                <img class="d-block w-100" src="{{ asset('img/slide_03.jpg') }}" alt="School Management">
                <div class="shade"></div>
                <div class="banner-content row align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <img style=" padding-left: 30px" src="{{ asset('img/new/Recruitment.png')}}"
                                     alt="image">
                            </div>
                            <div class="big-tagline col-md-6 col-sm-12">
                                <h2>Teachers Recruitment</h2>
                                <p class="lead">At EduPartner Group, we provide customized hiring and executive search
                                    solutions for schools. We recruit for the best qualified teachers in Education, with
                                    a strong emphasis on schools that offer international programs including IB (PYP,
                                    MYP and DP) in addition to IGCSE, A-Level and many other programs.</p>
                                <a href="#support" class="banner-prompt">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="wb">
        <div class="container">
            <div class="home-section">
                <h3 class="">Who we are</h3>
                <div class="row">
                    <div class="col-md-4">
                        <p class="follow-up">
                            We are a diversified group of educators with experience in many international
                            programs including the International Baccalaureate (DP, MYP, PYP), IGCSE, SAT, AP, and other
                            programs.
                        </p>
                        <br>
                    </div>
                    <div class="col-md-8">
                        <img style="width: 100%; height: auto; float: right;" src="{{ asset('img/new/about us.jpg') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <br>
                        <p class="follow-up">Our team members held senior positions in different educational
                            establishments; Examiners and Assistant Examiners, Workshop Leaders, Moderators, subject
                            matter experts, Heads of Departments, Subject Coordinators, PYP Coordinators, MYP
                            Coordinators, DP Coordinators and  Approaches to Learning (ATL) coordinators.
                            <br/><br>
                            Also, many members of our team have a solid experience in digital transformation including
                            digital content design and development, instructional design, adaptive learning models, and
                            computer based assessment.
                        </p>
                    </div>
                </div>
                    <div class="text-center">
                        <br><a href="{{ url('/about') }}" class="prompt">More about us</a>
                    </div>
            </div>
        </div>
    </div>
    <div class="lb">
        <div class="container">
            <div class="home-section services-section">
                <h3 class="text-center">Our Services</h3>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-item first-service">
                            <p class="text-center icon"><i class="fas fa-chart-line"> </i></p>
                            <h4>School Audit</h4>
                            <p>We use a comprehensive auditing model that uses 8 different capabilities to determine
                                what might need to be improved.</p>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-item first-service">
                            <p class="text-center icon"><i class="fas fa-tasks"> </i></p>
                            <h4>School Management</h4>
                            <p>We Partner with our clients to deliver an ongoing educational management structure to
                                ensure success and sustainability.</p>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-item first-service">
                            <p class="text-center icon"><i class="fas fa-hands-helping"> </i></p>
                            <h4>Teachers Training</h4>
                            <p>Our leadership training model is a competency based one. It covers the most important
                                educational leadership competencies</p>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-item first-service">
                            <p class="text-center icon"><i class="fas fa-user-tie"> </i></p>
                            <h4>Teachers Recruitment</h4>
                            <p>Our systematic approach when recruiting candidates for job openings is geared toward
                                creating long-term solutions.</p>
                            <br>
                        </div>
                    </div>
                </div>
                <br>
                <h3>Feel free to ask us about any service</h3>
                <br>
                <a href="https://google.com" class="prompt">Contact us</a>
            </div>
        </div>
    </div>
    <div class="wb">
        <div class="container">
            <div class="home-section school-impact">
                <h3 class="text-center">Our Impact on schools</h3>
                <p class="follow-up">Our areas of expertise cover the following educational domains in many Educational
                    programs including IB, GCSE, SAT, and local systems in the Arab World:</p>
                <div class="row school-impact-row">
                    <div class="col-sm">
                        <img src="{{ asset('img/area-expertise-check.png') }}">
                        <span>Achieving a better students performance</span>
                    </div>
                    <div class="col-sm">
                        <img src="{{ asset('img/area-expertise-check.png') }}">
                        <span>Building a stronger stakeholders engagement</span>
                    </div>
                </div>
                <div class="row school-impact-row">
                    <div class="col-sm">
                        <img src="{{ asset('img/area-expertise-check.png') }}">
                        <span>Ensuring the continuum of educational programs</span>
                    </div>
                    <div class="col-sm">
                        <img src="{{ asset('img/area-expertise-check.png') }}">
                        <span>Building a clear matrix of authorities and segregation of duties</span>
                    </div>
                </div>
                <div class="row school-impact-row">
                    <div class="col-sm">
                        <img src="{{ asset('img/area-expertise-check.png') }}">
                        <span>Promoting new teaching and learning approaches</span>
                    </div>
                    <div class="col-sm">
                        <img src="{{ asset('img/area-expertise-check.png') }}">
                        <span>International accreditation and certification</span>
                    </div>
                </div>
                <div class="row school-impact-row">
                    <div class="col-sm">
                        <img src="{{ asset('img/area-expertise-check.png') }}">
                        <span>Identifying risk factors and establishing mitigation actions</span>
                    </div>
                    <div class="col-sm">
                        <img src="{{ asset('img/area-expertise-check.png') }}">
                        <span>Establishing a performance – based compensation culture</span>
                    </div>
                </div>
                <div class="row school-impact-row">
                    <div class="col-sm">
                        <img src="{{ asset('img/area-expertise-check.png') }}">
                        <span>Adopting new teaching and learning approaches</span>
                    </div>
                    <div class="col-sm">
                        <img src="{{ asset('img/area-expertise-check.png') }}">
                        <span>Standardizing educational practices</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
