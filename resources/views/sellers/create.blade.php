<!-- resources/views/sellers/create.blade.php -->

@extends('layouts.sellers')
@extends('layouts.sidebar')

@section('content')
<div class="container">
    <h1>Create Seller</h1>
    <form method="POST" action="{{ route('sellers.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="accreditation">Accreditation:</label>
            <input type="text" class="form-control" id="accreditation" name="accreditation">
        </div>
        <div class="form-group">
            <label for="special_training">Special Training:</label>
            <input type="text" class="form-control" id="special_training" name="special_training">
        </div>
        <div class="form-group">
            <label for="events">Events:</label>
            <input type="text" class="form-control" id="events" name="events">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
