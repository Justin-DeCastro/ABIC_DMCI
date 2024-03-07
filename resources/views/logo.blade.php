<!-- resources/views/admin/logo/edit.blade.php -->
@extends('layouts.adminlogo')

@section('content')
    <div class="container">
        <h2>Edit Logo</h2>
        <form action="{{ route('logo.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="image">Logo Image:</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Update Logo</button>
        </form>
    </div>
@endsection
