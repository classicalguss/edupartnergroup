@extends('layouts.app')
@section('content')
    <div class="wb">
        <div class="container">
            <div class="home-section">
                <h3 class="">Teachers Recruitment</h3>
                <div class="row">
                    <div class="col-md-6">
                        <p class="follow-up">
                            We understand that any school success and achievement of its business
                            objectives are dependent on
                            professionalism, competency and the integrity of its teaching and non-teaching staff
                            members. We
                            help schools attract, develop, motivate and reward the highest caliber teachers based on
                            competencies, experience and skills.
                            At Eduvation Group, we provide customized hiring and executive search solutions for
                            schools. We
                            differentiate ourselves from other teacher recruitment agencies through establishing
                            Teacher-Employer Partnerships and providing services based on mutual understanding for the
                            students,
                            teachers and school needs in line with their programs and culture.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img style="width: 80%" class="section-side-image" src="{{ asset('img/recruitment-main.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lb">
        <div class="container">
            <div class="home-section">
                <h3 class="">Who do we recruit?</h3>
                <p class="follow-up">
                    We recruit for the best qualified teachers in Education, with a strong emphasis on
                    schools that
                    offer international programs including IB (PYP, MYP and DP) in addition to IGCSE,
                    A-Level and
                    many other programs
                </p>
                <br/>
                <h3 class="">What is our approach?</h3>
                <p class="follow-up">
                    Extensive work and leadership experience within the Education sector and consulting industry give us
                    a deep understanding of the teachers and schools specific needs.
                    Our systematic approach when recruiting candidates for job openings is geared toward creating
                    long-term solutions with schools specific requirements and corporate culture in mind.
                </p>
                <br/>
                <h3>What do we offer?</h3>
                <ul class="follow-up">
                    <li>Analyzing and determining the requirements for your ideal candidate</li>
                    <li>Approaching suitable candidates directly</li>
                    <li>Pre-selecting interested candidates</li>
                    <li>Supporting the selection and hiring process</li>
                </ul>
                <div class="text-center">
                    <br>
                    <a class="prompt" href="{{ url('/contact?service=teachers-recruitment') }}" class="prompt">Contact us for teachers recruitment</a>
                </div>
            </div>
        </div>
    </div>
@endsection
