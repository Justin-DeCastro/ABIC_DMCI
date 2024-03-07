<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo Management</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset("properties/antipolo.jpg") }}');

            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9); /* White with opacity */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            max-width: 400px;
        }
    </style>
</head>
<body>

<div class="card-container">
    <div class="card">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                {{-- <a class="navbar-brand" href="#">Logo Management</a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        {{-- <li class="nav-item"> --}}
                            {{-- <a class="nav-link" href="{{ route('home') }}">Logos</a> --}}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
            @yield('content')
        </div>
    </div>
</div>

@section('content')
<div class="modal fade" id="updateAboutModal" tabindex="-1" role="dialog" aria-labelledby="updateAboutModalLabel" aria-hidden="true">
    <!-- Modal content -->
</div>

<!-- Your HTML content for the about section -->
@endsection

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
