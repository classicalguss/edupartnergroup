@extends('layouts.app')
<link rel="stylesheet" href="{{ @asset('css/intlTelInput.css') }}">

@section('content')
    <div class="wb">
        <div class="container">
            <div class="home-section">
                <div class="col-md-8 m-auto">
                    <form method="POST" action="{{ route('contact') }}" novalidate>
                        @csrf
                        <legend>Contact Details</legend>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="email"
                                       class="form-control @if ($errors->has('email')) is-invalid @elseif ($errors->count() > 0) is-valid @endif"
                                       id="inputEmail" placeholder="Email" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                @else
                                    <div class="valid-feedback">Looks good!</div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input
                                    class="form-control @if ($errors->has('phonenumber')) is-invalid @elseif ($errors->count() > 0) is-valid @endif"
                                    id="inputTel" placeholder="Phone Number" name="phonenumber"
                                    value="{{ old('phonenumber') }}">
                                @if ($errors->has('phonenumber'))
                                    <div class="invalid-feedback">{{ $errors->first('phonenumber') }}</div>
                                @else
                                    <div class="valid-feedback">Looks good!</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text"
                                       class="form-control @if ($errors->has('firstname')) is-invalid @elseif ($errors->count() > 0) is-valid @endif"
                                       id="inputFirstName" name="firstname" value="{{ old('firstname') }}"
                                       placeholder="First Name">
                                @if ($errors->has('firstname'))
                                    <div class="invalid-feedback">{{ $errors->first('firstname') }}</div>
                                @else
                                    <div class="valid-feedback">Looks good!</div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input type=""
                                       class="form-control @if ($errors->has('lastname')) is-invalid @elseif ($errors->count() > 0) is-valid @endif"
                                       id="inputLastName" name="lastname" value="{{ old('lastname') }}"
                                       placeholder="Last Name">
                                @if ($errors->has('lastname'))
                                    <div class="invalid-feedback">{{ $errors->first('lastname') }}</div>
                                @else
                                    <div class="valid-feedback">Looks good!</div>
                                @endif
                            </div>
                        </div>
                        <legend>School Information</legend>
                        <div class="form-group">
                            <input type="text" name="schoolname"
                                   class="form-control @if ($errors->has('schoolname')) is-invalid @elseif ($errors->count() > 0) is-valid @endif"
                                   id="inputName" placeholder="School Name" value="{{ old('schoolname') }}">
                            @if ($errors->has('schoolname'))
                                <div class="invalid-feedback">{{ $errors->first('schoolname') }}</div>
                            @else
                                <div class="valid-feedback">Looks good!</div>
                            @endif
                        </div>
                        <div type="text" name="schooladdress"
                             class="form-group">
                            <input type="text" name="schooladdress"
                                   class="form-control @if ($errors->has('schooladdress')) is-invalid @elseif ($errors->count() > 0) is-valid @endif"
                                   id="inputAddress" placeholder="School Address" value="{{ old('schooladdress') }}">
                            @if ($errors->has('schooladdress'))
                                <div class="invalid-feedback">{{ $errors->first('schooladdress') }}</div>
                            @else
                                <div class="valid-feedback">Looks good!</div>
                            @endif
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select name="numofstudents"
                                        class="form-control @if ($errors->has('numofstudents')) is-invalid @elseif ($errors->count() > 0) is-valid @endif"
                                        value="{{ old('numofstudents') }}">
                                    <option value="">-- Number of Students --</option>
                                    <option value="1">Less than 100</option>
                                    <option value="2">100 - 500</option>
                                    <option value="3">500 - 1000</option>
                                    <option value="4">1000 - 2000</option>
                                    <option value="5">More than 2000</option>
                                </select>
                                @if ($errors->has('numofstudents'))
                                    <div class="invalid-feedback">{{ $errors->first('numofstudents') }}</div>
                                @else
                                    <div class="valid-feedback">Looks good!</div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <select name="schoolsector"
                                        class="form-control @if ($errors->has('schoolsector')) is-invalid @elseif ($errors->count() > 0) is-valid @endif"
                                        value="{{ old('schoolsector') }}">
                                    <option value="" selected>-- School Sector --</option>
                                    <option value="private">Private</option>
                                    <option value="public">Public</option>
                                </select>
                                @if ($errors->has('schoolsector'))
                                    <div class="invalid-feedback">{{ $errors->first('schoolsector') }}</div>
                                @else
                                    <div class="valid-feedback">Looks good!</div>
                                @endif
                            </div>
                        </div>
                        <legend>Service</legend>
                        <div class="form-group">
                            <select name="servicetype" class="form-control @if ($errors->has('servicetype')) is-invalid
                                    @elseif ($errors->count() > 0) is-valid @endif"
                                    value="{{ old('servicetype') }}">
                                <option value="" selected>-- Service Type --</option>
                                <option value="1">Free Self-Audit</option>
                                <option value="2">Educational Consultants Audit</option>
                                <option value="3">School Management & Operating model development</option>
                                <option value="4">Teachers Training</option>
                                <option value="4">Teachers Recruitment</option>
                                <option value="6">Other inquiries</option>
                            </select>
                            @if ($errors->has('servicetype'))
                                <div class="invalid-feedback">{{ $errors->first('servicetype') }}</div>
                            @else
                                <div class="valid-feedback">Looks good!</div>
                            @endif
                        </div>
                        <div class="form-group">    
                            <textarea class="form-control" id="customMessageContactForm" rows="5"
                                      placeholder="Optional Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
