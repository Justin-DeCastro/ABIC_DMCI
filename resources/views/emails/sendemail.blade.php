@component('mail::message')
# Inquiries

**Full Name:** {{ $first_name }} {{ $last_name }} <br>
**Email:** {{ $email }} <br>
**Contact Number:** {{ $contact }} <br>
**Country:** {{ $country }} <br>
**Province:** {{ $province }} <br>
**City:** {{ $city }} <br>
**Property Inquired:** {{ $property }} <br>

**Message:** <br>
{{ $message }}

@endcomponent
