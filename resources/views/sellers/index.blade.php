
@extends('admin.sellers_nav')


    <h1>Sellers</h1>



    @if ($sellers->isEmpty())
        <p>No sellers found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Accreditation</th>
                    <th>Special Training</th>
                    <th>Events</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sellers as $seller)
                    <tr>
                        <td>{{ $seller->name }}</td>
                        <td>{{ $seller->accreditation }}</td>
                        <td>{{ $seller->special_training }}</td>
                        <td>{{ $seller->events }}</td>
                        <td>
                            <a href="{{ route('sellers.edit', $seller->id) }}" class="btn btn-primary">Edit</a>

                            <form action="{{ route('sellers.destroy', $seller->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this seller?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4"></td>
                    <td>
                        <a href="{{ route('sellers.create') }}" class="btn btn-success">Add Seller</a>
                    </td>
                </tr>
            </tbody>
        </table>
    @endif
</div>

