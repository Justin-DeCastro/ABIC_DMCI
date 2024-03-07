@extends('layouts.app')

@section('content')
    <div style="text-align: center;">
        <h2>Sign In</h2>
        <form method="POST" action="{{ route('signin.post') }}" style="max-width: 300px; margin: 0 auto;">
            @csrf

            <div style="margin-bottom: 20px;">
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" required autofocus style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div>
                <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Sign In</button>
            </div>
        </form>

        <div style="margin-top: 20px;">
            Don't have an account? <a href="{{ route('registration') }}" style="color: #007bff; text-decoration: none;">Register here</a>.
        </div>

        <!-- SweetAlert for invalid credentials -->
        @if(isset($errorMessage))
            <script>
                window.onload = function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: '{{ $errorMessage }}',
                    });
                };
            </script>
        @endif
    </div>
@endsection
