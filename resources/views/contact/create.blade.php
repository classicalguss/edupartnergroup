@extends('layouts.app')

@php
    use App\Contact;
    $contact = new Contact();
    if ($errors->count() > 0) {
        echo ("Yes there ");
        foreach ($contact->getFillable() as $attribute) {
            $contact->setAttribute($attribute, old($attribute));
        }
        $errorsMan = 'Yes errors';
    } else {
    echo ('no err');
        $contact = $prev_contact;
        $errorsMan = 'no errors';
    }

@endphp
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
                                       id="inputEmail" placeholder="Email" name="email" value="{{ $contact->email }}">
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                @else
                                    <div class="valid-feedback">Looks good!</div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input
                                    class="form-control @if ($errors->has('phone_number')) is-invalid @elseif ($errors->count() > 0) is-valid @endif"
                                    id="inputTel" placeholder="Phone numberber" name="phone_number"
                                    value="{{ $contact->phone_number }}">
                                @if ($errors->has('phone_number'))
                                    <div class="invalid-feedback">{{ $errors->first('phone_number') }}</div>
                                @else
                                    <div class="valid-feedback">Looks good!</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text"
                                       class="form-control @if ($errors->has('first_name')) is-invalid @elseif ($errors->count() > 0) is-valid @endif"
                                       id="inputfirst_name" name="first_name" value="{{ $contact->first_name }}"
                                       placeholder="First Name">
                                @if ($errors->has('first_name'))
                                    <div class="invalid-feedback">{{ $errors->first('first_name') }}</div>
                                @else
                                    <div class="valid-feedback">Looks good!</div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <input type=""
                                       class="form-control @if ($errors->has('last_name')) is-invalid @elseif ($errors->count() > 0) is-valid @endif"
                                       id="inputlast_name" name="last_name" value="{{ $contact->last_name }}"
                                       placeholder="Last Name">
                                @if ($errors->has('last_name'))
                                    <div class="invalid-feedback">{{ $errors->first('last_name') }}</div>
                                @else
                                    <div class="valid-feedback">Looks good!</div>
                                @endif
                            </div>
                        </div>
                        <legend>School Information</legend>
                        <div class="form-group">
                            <input type="text" name="school_name"
                                   class="form-control @if ($errors->has('school_name')) is-invalid @elseif ($errors->count() > 0) is-valid @endif"
                                   id="inputName" placeholder="School Name" value="{{ $contact->school_name }}">
                            @if ($errors->has('school_name'))
                                <div class="invalid-feedback">{{ $errors->first('school_name') }}</div>
                            @else
                                <div class="valid-feedback">Looks good!</div>
                            @endif
                        </div>
                        <div type="text" name="school_address"
                             class="form-group">
                            <input type="text" name="school_address"
                                   class="form-control @if ($errors->has('school_address')) is-invalid @elseif ($errors->count() > 0) is-valid @endif"
                                   id="inputAddress" placeholder="School Address" value="{{ $contact->school_address }}">
                            @if ($errors->has('school_address'))
                                <div class="invalid-feedback">{{ $errors->first('school_address') }}</div>
                            @else
                                <div class="valid-feedback">Looks good!</div>
                            @endif
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select name="number_of_students_option"
                                        class="form-control @if ($errors->has('number_of_students_option')) is-invalid @elseif ($errors->count() > 0) is-valid @endif">
                                    <option value="">-- Number of Students --</option>
                                    @foreach ($number_of_students_options as $option)
                                        @if ( $contact->number_of_students_option == $option->id)
                                            <option value="{{ $option->id }}" selected>{{ $option->value }}</option>
                                        @else
                                            <option value="{{ $option->id }}">{{ $option->value }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('number_of_students_option'))
                                    <div class="invalid-feedback">{{ $errors->first('number_of_students_option') }}</div>
                                @else
                                    <div class="valid-feedback">Looks good!</div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <select name="school_sector_option"
                                        class="form-control @if ($errors->has('school_sector_option')) is-invalid @elseif ($errors->count() > 0) is-valid @endif">
                                    <option value="" selected>-- School Sector --</option>
                                    @foreach ($school_sector_options as $option)
                                        @if ($contact->school_sector_option == $option->id)
                                            <option value="{{ $option->id }}" selected>{{ $option->value }}</option>
                                        @else
                                            <option value="{{ $option->id }}">{{ $option->value }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('school_sector_option'))
                                    <div class="invalid-feedback">{{ $errors->first('school_sector_option') }}</div>
                                @else
                                    <div class="valid-feedback">Looks good!</div>
                                @endif
                            </div>
                        </div>
                        <legend>Service</legend>
                        <div class="form-group">
                            <select name="service_type_option" class="form-control @if ($errors->has('service_type_option')) is-invalid
                                    @elseif ($errors->count() > 0) is-valid @endif">
                                <option value="" selected>-- Service Type --</option>
                                @foreach ($service_type_options as $option)
                                    @if (old('service_type_option') == $option->id)
                                        <option value="{{ $option->id }}" selected>{{ $option->value }}</option>
                                    @else
                                        <option value="{{ $option->id }}">{{ $option->value }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('service_type_option'))
                                <div class="invalid-feedback">{{ $errors->first('service_type_option') }}</div>
                            @else
                                <div class="valid-feedback">Looks good!</div>
                            @endif
                        </div>
                        <div class="form-group">    
                            <textarea name="optional_message" class="form-control" id="customMessageContactForm" rows="5"
                                      placeholder="Optional Message">{{ old('optional_message') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
