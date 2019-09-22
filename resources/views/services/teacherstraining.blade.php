@extends('layouts.app')
@section('content')
    <div class="wb">
        <div class="container">
            <div class="home-section">
                <h3 class="">Teachers Training</h3>
                <div class="row">
                    <div class="col-md-9">
                        <p class="follow-up">
                            As one of the leading Education Management firms in the region, EduPartner Group through its
                            strategic partnership with the leading educational establishments worldwide include
                            <a href="https://www.cambridgeed.com/">Cambridge Educational services</a>; a
                            well-established world leader in academic services,
                            publishing, and assessments, <a href="https://www.cityandguilds.com">City & Guilds</a> of
                            UK; another world leader in academic
                            certification and accreditation, aims to play an effective role in improving the overall
                            performance of educational establishments locally and regionally.
                            <br> This is principally done
                            through designing a customized model for every school based on a thorough needs analysis
                            conducted by schools under the supervision of EduPartner Group.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <a href="https://www.cambridgeed.com/"><img style="width: 70%"
                                                                    src="{{asset('img/cambridge.png')}}"></a>
                        <a href="https://www.cityandguilds.com"><img style="width: 100%; margin-left:-40px"
                                                                     src="{{asset('img/city-and-guilds.png')}}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lb">
        <div class="container">
            <div class="home-section">
                <h3>Leadership model</h3>
                <p class="follow-up">
                    Our leadership training model is a competency based one. It covers the most important
                    educational leadership competencies:
                </p>
                <div class="row">
                    <img class="mx-auto d-block section-image" src="{{ asset('img/teachers-training-graph.png') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="wb">
        <div class="container">
            <div class="home-section">
                <div class="row">
                    <h3 class="">Our training program</h3>
                    <p class="follow-up">In addition to the above, we build and implement a training program for
                        teachers, coordinators
                        and administrators that covers technical and educational competencies. The training program
                        includes
                        the following modules:</p>
                    <ul>
                        <li><span>Differentiated Instruction</span></li>
                        <li><span>Inquiry in Teaching and Learning</span></li>
                        <li><span>Concept-Based Learning: Teaching for Deep Understanding</span></li>
                        <li><span>Effective Feedback Practices</span></li>
                        <li><span>Assessment</span></li>
                        <li><span>The Power of questioning</span></li>
                        <li><span>Social and Emotional Intelligence through Project Work</span></li>
                    </ul>
                </div>
                <div class="text-center">
                    <br>
                    <a class="prompt" href="{{ url('/contact?service=teachers-training') }}" class="prompt">Contact us
                        for teachers training</a>
                </div>
            </div>
        </div>
    </div>
@endsection
