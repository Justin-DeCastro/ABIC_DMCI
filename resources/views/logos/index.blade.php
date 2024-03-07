<!-- resources/views/logos/index.blade.php -->

@extends('layouts.app')
@extends('layouts.sidebar')

@section('content')
<div class="container">
    {{-- <h1>Logos</h1> --}}

    @if ($logos->isEmpty())
        <p>No logos found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
            </thead>
            <style>
                /* Custom table styles */
                .table {
                    width: 100%;
                    border-collapse: collapse;
                }

                .table th,
                .table td {
                    padding: 8px;
                    border: 1px solid #ddd;
                    text-align: left;
                }

                .table th {
                    background-color: #f2f2f2;
                }

                .table td img {
                    max-width: auto;
                    height: auto;
                }

                /* Optional hover effect on table rows */
                .table tbody tr:hover {
                    background-color: #f9f9f9;
                }
            </style>

            <tbody>
                @foreach ($logos as $logo)
                    <tr>
                        <td>{{ $logo->name }}</td>
                        <td>{{ $logo->type }}</td>
                        <td><img src="{{ asset('uploads/logos/' . $logo->picture) }}" alt="{{ $logo->name }}" width="50"></td>
                        <td>
                            <a href="{{ route('logos.create') }}" class="btn btn-primary mb-3">Add</a>
                            <a href="{{ route('logos.edit', $logo->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('logos.destroy', $logo->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')

                              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this logo?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
