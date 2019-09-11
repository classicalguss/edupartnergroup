@extends('layouts.app')
@section('content')
    <div class="wb">
        <div class="container">
            <div class="home-section">
                <h3 class="text-center">About us</h3>
                <div class="row">
                    <div>
                        <p class="follow-up">
                            As one of the leading Education Management firms in the region, EduPartner Group through its strategic partnership with the leading educational establishments worldwide include Cambridge Educational services; a well-established world leader in academic services, publishing, and assessments, City & Guilds of UK; another world leader in academic certification and accreditation, and All Learn aims to play an effective role in improving the overall performance of educational establishments locally and regionally. This is principally done through partnering with the formal educational regulatory bodies (such as Ministries of Education) to elevate their ability to maintain high quality of education based on the highest internationally accepted standards.
                            EduPartner Group partnership arrangements with these establishments include sharing of resources, programs assurance, auditing, and QA procedures.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="lb">
        <div class="container">
            <div class="home-section">
                <h3 class="">Our area of expertise</h3>
                <p class="follow-up">Our areas of expertise cover the following educational domains in many Educational programs including IB, GCSE, SAT, and local systems in the Arab World:</p>
                <ul>
                    <li><span>Curriculum Development (Taught, written, and assessed curriculum) including identifying Learning standards, Scope and sequencing, content provision.</span></li>
                    <li><span>Instructional Design (Building curriculum for specific delivery platforms).</span></li>
                    <li><span>Schools operating modeling</span></li>
                    <li><span>Schools structuring and Re-structuring</span></li>
                    <li><span>Adaptive learning</span></li>
                    <li><span>Digital curriculum and virtual learning environments</span></li>
                    <li><span>Schools Administration and Operations</span></li>
                    <li><span>Schools reviews and inspections</span></li>
                </ul>
                <div class="text-center">
                    <br>
                    <a class="prompt" href="{{ url('/about') }}" class="prompt">Contact us for any inquiries</a>
                </div>
            </div>

        </div>
    </div>
@endsection
