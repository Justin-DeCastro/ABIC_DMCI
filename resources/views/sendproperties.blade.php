<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Property to us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <style>
        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            /* background-color:navnavyyblue; */
            color: #fff;
            padding-top: 60px;
        }

        .sidebar.active {
            width: 0;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            padding: 8px;
            font-size: 16px;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar ul li a:hover {
            color: #ccc;
        }

        /* Content Wrapper Styles */
        #content-wrapper {
            width: 100%;
            padding-left: 250px;
            transition: all 0.5s;
        }

        .collapse.navbar-collapse {
            justify-content: flex-end;
        }

        /* Hamburger Menu Styles */
        #sidebarCollapse {
            background-color: transparent;
            border: none;
            outline: none;
            color: white;
        }

        /* Modal Styles */
        .modal-dialog {
            max-width: 90%;
        }
    </style>
</head>

<body>
    <div class="sidebar" id="sidebar">
         @include('layouts.landing.sidebar')
    </div>

    <!-- Content Wrapper -->
    <div id="content-wrapper">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <!-- Sidebar Toggle Button -->
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-bars"></i>
                </button>

        </nav>
        <!-- /Navbar -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sendPropertiesModal">Send Properties</button>
        <!-- Page Content -->
        <div class="container-fluid">
            <br>

            <h1><center> Property Sent by Users</h1>
            <div class="py-5" style="background-color:#E0E0E0;" id="venue">
                <div class="container">
                    @foreach($sendproperties as $key => $property)
                        @if($property->status === 'Accepted')
                            <div class="row bg-white animate-in-down rounded shadow mb-4">
                                <div class="col-md-6 p-0">
                                    <div class="carousel slide" data-ride="carousel" id="carousel{{$key}}">
                                        <div class="carousel-inner" role="listbox">
                                            @if($property->image)
                                                @php $images = json_decode($property->image); @endphp
                                                @foreach($images as $k => $image)
                                                    <div class="carousel-item @if($k === 0) active @endif">
                                                        <img src="{{ $image }}" class="d-block w-100" alt="Property Image">
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel{{$key}}" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel{{$key}}" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 p-4">
                                    <h2 class="text-primary">
                                        <i class="fas fa-building fa-1x"></i> <!-- Example icon: star -->
                                        {{ $property->name }}
                                    </h2>
                                    <br>
                                    <p class="text-muted">
                                        <i class="fa-solid fa-align-left fa-2x"></i> <!-- Example icon: star -->
                                        <strong>{{ $property->description }}</strong>
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Content Wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="sendPropertiesModal" tabindex="-1" role="dialog" aria-labelledby="sendPropertiesModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sendPropertiesModalLabel">Add New Property</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form accept-charset="UTF-8" action="{{ route('sendproperties.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Property Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter your property name" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="required">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="4" placeholder="Enter description" required="required"></textarea>
                        </div>
                        <label for="imageUpload">You can upload many pictures:</label>
                        <div class="form-group">
                            <input type="file" name="image[]" id="imageUpload" multiple required="required">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Script -->
    <script>
        $(document).ready(function () {
            // Toggle sidebar on button click
            $('#sidebarCollapse').on('click', function () {
                $('.sidebar').toggleClass('active');
            });
        });
    </script>

</body>

</html>
