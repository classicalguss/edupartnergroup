@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        <a href="{{ route('home') }}"><img src="data:image/png;base64,{{base64_encode(file_get_contents(public_path('img/edupartner-logo3.png')))}}"></a>
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
