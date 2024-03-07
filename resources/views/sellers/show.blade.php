{{-- resources/views/sellers/show.blade.php --}}

@extends('layouts.app')
@extends('layouts.sellers')
@section('content')
<div class="container">
    <h1>{{ $seller->name }}</h1>
    <p><strong>Accreditation:</strong> {{ $seller->accreditation }}</p>
    <p><strong>Special Training:</strong> {{ $seller->special_training }}</p>
    <p><strong>Events:</strong> {{ $seller->events }}</p>
</div>
@endsection
