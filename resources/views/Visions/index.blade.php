{{-- @extends('layouts.visions') --}}
@extends('layouts.app')
@extends('layouts.sidebar')

@section('content')
<div class="container">
    <h1>Vision</h1>

    @if ($visions->isEmpty())
        <p>No vision found.</p>
    @else

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($visions as $vision)
                    <tr>
                        <td>{{ $vision->name }}</td>
                        <td style="width:200px">{{ $vision->description }}</td>
                        <td>
                            <a href="{{ route('visions.create') }}" class="btn btn-primary mb-3">Add</a>
                            <a href="{{ route('visions.edit', $vision->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('visions.destroy', $vision->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this vision?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
{{-- <div class="container">
    <h1>Vision</h1>

    @if ($visions->isEmpty())
        <p>No Mission found.</p>
    @else

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($missions as $mission)
                    <tr>
                        <td>{{ $mission->name }}</td>
                        <td style="width:200px">{{ $mission->description }}</td>
                        <td>
                            <a href="{{ route('misions.create') }}" class="btn btn-primary mb-3">Add</a>
                            <a href="{{ route('misions.edit', $mision->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('misions.destroy', $mision->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this mission?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div> --}}
@endsection
