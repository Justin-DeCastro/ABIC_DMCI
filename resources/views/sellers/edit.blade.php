<!-- resources/views/sellers/edit.blade.php -->

@extends('layouts.sellers')
@extends('layouts.sidebar')

@section('content')
<div class="container">
    <h1>Edit Seller</h1>
    <form method="POST" action="{{ route('sellers.update', $seller->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $seller->name }}">
        </div>
        <div class="form-group">
            <label for="accreditation">Accreditation:</label>
            <input type="text" class="form-control" id="accreditation" name="accreditation" value="{{ $seller->accreditation }}">
        </div>
        <div class="form-group">
            <label for="special_training">Special Training:</label>
            <input type="text" class="form-control" id="special_training" name="special_training" value="{{ $seller->special_training }}">
        </div>
        <div class="form-group">
            <label for="events">Events:</label>
            <input type="text" class="form-control" id="events" name="events" value="{{ $seller->events }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
