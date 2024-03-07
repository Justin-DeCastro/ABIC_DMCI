<!-- resources/views/logos/edit.blade.php -->

@extends('layouts.app')
@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Edit Logo</h1>
            <form action="{{ route('logos.update', $logo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $logo->name }}" required>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $logo->type }}" required>
                </div>
                <div class="form-group">
                    <label for="picture">Picture</label>
                    <input type="file" class="form-control-file" id="picture" name="picture">
                    <img src="{{ asset('uploads/logos/' . $logo->picture) }}" alt="{{ $logo->name }}" width="100" class="mt-2">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
