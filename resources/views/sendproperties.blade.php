<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Property to us</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-L3x14kHtXVjZUjL/GtDmDwMjtUMeOV8i2XAY+1h9d9yByKNcf0qzl7UhC+1L5s6MAc4hGEBXvtV9g5U9EY4oyA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-4VJuYM7o2VHZL3eYAR9x2x3z5mEYqo+/BTcdXm1vqqfLCnUU8lAEBY/8SXwYQLezoTzRUbTkiTYQ7cP3INNJGw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <style>
        /* Your custom CSS styles here */
        .text-color {
            color: #fff;
        }

        .carousel-item img {
            height: 400px;
        }

        h1 {
            font-size: 20px;
            margin-top: 24px;
            margin-bottom: 24px;
            text-align: left; /* Aligning the heading to the left */
            margin-left: auto; /* Adding margin-left: auto */
        }

        img {
            height: 60px;
        }

        .form-container {
            margin-left: 20px; /* Adjust this margin as needed */
        }
    </style>
</head>
<body>

@include('layouts.landing.sidebar')
<div class="modal fade" id="addAlderModal" tabindex="-1" role="dialog" aria-labelledby="addAlderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAlderModalLabel">Add New </h5>
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
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5 form-container"> <!-- Adding a class to the form container and applying margin -->
            <h1>Upload your properties here</h1>
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
                <div> <!-- Aligning the button to the left -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
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
<!-- Toast container -->
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

<!-- Toast container -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-L3x14kHtXVjZUjL/GtDmDwMjtUMeOV8i2XAY+1h9d9yByKNcf0qzl7UhC+1L5s6MAc4hGEBXvtV9g5U9EY4oyA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        // Submit form and show Bootstrap toast
        $('form').submit(function(event) {
            event.preventDefault(); // Prevent default form submission
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    // Show Bootstrap toast
                    $('.toast').toast('show');
                    // Reset the form after successful submission if needed
                    form.trigger('reset');
                },
                error: function(xhr, status, error) {
                    // Handle errors if any
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

@if(session('success'))
    <script>
        // Show Toastr notification
        toastr.success('{{ session('success') }}');
    </script>
@endif

</body>
</html>
