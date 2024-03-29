@component('mail::message')
# Property Inquiries

@if(isset($message))
{{ $message }}
@endif


**Status:** {{ $property->status }}


@endcomponent
