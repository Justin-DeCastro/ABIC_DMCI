@component('mail::message')
# Property Inquiries

@if(isset($message))
{{ $message }}
@endif

**Status:** {{ $requestItem->status }}

@endcomponent
