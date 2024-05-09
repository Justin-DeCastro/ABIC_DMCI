<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR LEASE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* Your custom CSS styles here */
    </style>

@include('layouts.landing.sidebar')
</head>
<body>


<section id="main-wrapper">

    <section class="banner sec-pad wavy default" id="overview">
        <picture class="coverimage-img">
            <source srcset="{{ asset('images/hero-shd.png')}}" media="(min-width: 970px)">
            <source srcset="{{ asset('images/hero-shd.png')}}" media="(min-width: 320px)">
            <img class="ls-is-cached lazyloaded" src="{{ asset('images/hero-shd.png')}}" width="1440" height="330" alt="MDN" >
        </picture>
        <div class="banner-text">
            <div class="container">
                <h1>For Lease</h1>
            </div>
        </div>
    </section>
    <div class="container py-4 my-4 mx-auto d-flex flex-column">
        <div class="header">
            <div class="row r1">
                <div class="col-md-9 abc">

                </div>
            </div>
        </div>

        <div class="container-body mt-4">
            <div class="row r3">
                <div class="col-md-5 p-0 klo">
                    <ul style="font-size: 24px;">
                        <li><i class="fas fa-building fa-2x" style="color: green;"></i> {{ $addLeases->name }}</li><br>
                        <li><i class="fas fa-info-circle fa-2x" style="color: green;"></i> {{ $addLeases->status }}</li><br>
                        <li><i class="fas fa-map-marker-alt fa-2x" style="color: red;"></i> {{ $addLeases->location }}</li><br>
                        <li><i class="fas fa-peso-sign fa-2x" style="color: orange;"></i>
                            {{ $addLeases->price }}</li><br>
                        <li><i class="fas fa-bed fa-2x" style="color: green;"></i> {{ $addLeases->units }}</li><br>
                        <li><i class="fas fa-align-left fa-2x" style="color: black;"></i> {{ $addLeases->description }}</li>
                    </ul>
                </div>

                <div class="col-md-7">
                    <img src="{{ $addLeases->image }}" alt="Lease Image" class="card-image" style="max-width: 80%;">

                </div>
            </div>
        </div>
    </div>



        <div class="footer d-flex flex-column mt-5">
            <div class="row r4">
                <div class="col-md-2 myt des">
                    <a href="#">Description</a>
                </div>
            </div>
        </div>
    </div>

</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
