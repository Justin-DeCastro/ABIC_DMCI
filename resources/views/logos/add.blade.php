<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 5vw;
            height: 5vh;
        }
    </style>
</head>
<body>
    <a href="/admin" class="btn btn-primary">Back</a>
    <a href="/logo/add">Add</a>
    <table class="tbl w-100">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Picture</th>
                <th>Action</th>
            </tr>
        </thead>
        {{-- <tbody>
            @if (count($logo) > 0)
                @foreach ($logo as $logo)
                    <tr>
                        <td>{{ $logo->name }}</td>
                        <td>{{ $logo->type }}</td>
                        <td><img src="{{  asset('uploads/amenities/picture') }}/{{ $logo->picture }}" alt=""></td>
                        <td><a href="/admin/amenities/edit/{{ $logo->id }}" class="btn btn-primary">Edit</a>
                            <a href="/admin/amenities/delete/{{ $logo->id }}" class="btn btn-danger" onclick="return confirm('Delete?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif --}}
        </tbody>
    </table>
</body>
</html>
