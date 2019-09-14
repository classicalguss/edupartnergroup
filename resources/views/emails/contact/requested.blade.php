@component('mail::message')
# {{ $contact->school_name }} has sent their contact details

A contact was requested. Here are the details for it:

@component('mail::table')
    | Property      | Value         |
    | :------------- | :-------------|
    | Email:     | {{ $contact->email }}|
    | Phone Number:     | {{ $contact->phone_number }} |
    | Contact Name:      | {{ $contact->first_name.' '.$contact->last_name }} |
    | School Name:      | {{ $contact->school_name }} |
    | School Address:      | {{ $contact->school_address }} |
    | Number of students:      | {{ $contact->number_of_students_option->value }} |
    | School Sector:      | {{ $contact->school_sector_option->value }} |
    | Service Required:      | {{ $contact->service_option->value }} |
@endcomponent
@component('mail::promotion')
    {{ $contact->optional_message }}
@endcomponent
{{--@component('mail::button', ['url' => url('/admin')])--}}
    {{--Go to admin interface--}}
{{--@endcomponent--}}
Thanks,<br>
{{ config('app.name') }}
@endcomponent
