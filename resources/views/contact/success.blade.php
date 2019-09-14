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
                @include('layouts.servicesboxes')
                <p class="follow-up">Or if you're already interested in another service or have any other inquiries, feel free to contact us again:</p>
                <br>
                <a href="{{ route('contact') }}" class="prompt">Contact us</a>
            </div>
        </div>
    </div>
@endsection
