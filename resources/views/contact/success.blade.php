@extends('layouts.app')

@section('content')
    <div class="wb">
        <div class="container">
            <div class="home-section">
                <h3 class="text-center">Success!</h3>
                <div class="col-md-8 m-auto">
                    <h4 class="">Thank you for contacting us. A specialist from Edupartner will get back to
                        you soon</h4>
                </div>
            </div>
            <div class="home-section services-section">
                <p class="follow-up">Meanwhile, you can check our other services:</p>
                <br>
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
                <p class="follow-up">Or if you're already interested in another service or have any other inquiries, feel free to contact us again:</p>
                <br>
                <a href="{{ route('contact') }}" class="prompt">Contact us</a>
            </div>
        </div>
    </div>
@endsection
