<!-- resources/views/visions/create.blade.php -->

@extends('layouts.app')
{{-- @extends('layouts\visions') --}}
@section('content')
<div class="container">
    <h1>Add Vision</h1>
    <form action="{{ route('visions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
