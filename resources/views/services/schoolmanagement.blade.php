@extends('layouts.app')
@section('content')
    <div class="wb">
        <div class="container">
            <div class="home-section">
                <h3 class="">School Management</h3>
                <div class="row">
                    <div class="col-md-6">
                        <p class="follow-up">
                            EduPartner Group and its team of experienced educators can manage schools throughout the
                            world. As a result, owners and boards can rely on the expertise we have accumulated from
                            designing and implementing operating models for schools offer different educational national
                            and international programs. We partner with our clients to deliver an ongoing educational
                            management structure or operation of the school to ensure sustainability and demonstrate
                            schools vision and mission.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <h3 class="follow-up">
                            “We provide complete oversight regarding the overall operational management structure of your school.”
                        </h3>
                        <p style="float: right">-EduPartner group CEO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lb">
        <div class="container">
            <div class="home-section">
                <h3 class="">Our comprehensive management services include:</h3>
                <div class="row">
                    <img class="mx-auto d-block section-image" src="{{ asset('img/management-graph.png') }}">

                </div>
                <div class="text-center">
                    <br>
                    <a class="prompt" href="{{ url('/contact?service=school-management') }}" class="prompt">Contact us for school management</a>
                </div>
            </div>
        </div>
    </div>
@endsection
