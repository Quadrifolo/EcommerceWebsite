@component('mail::message')
# {{$subject ?? ''}}

## {{$message}}

Feel free to contact me via {{$phone_number}} or {{$email}}

Thanks,<br>
{{$fullname}}

{{ config('app.name') }}
@endcomponent