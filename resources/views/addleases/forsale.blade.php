<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR SALE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* Your custom CSS styles here */
    </style>
</head>
<body>

@include('layouts.landing.sidebar')

<section id="main-wrapper">

    <section class="banner sec-pad wavy default" id="overview">
        <picture class="coverimage-img">
            <source srcset="{{ asset('images/hero-shd.png')}}" media="(min-width: 570px)">
            <source srcset="{{ asset('images/hero-shd.png')}}" media="(min-width: 320px)">
            <img class="ls-is-cached lazyloaded" src="{{ asset('images/hero-shd.png')}}" width="1440" height="330" alt="MDN" >
        </picture>
        <div class="banner-text">
            <div class="container">
                <h1>FOR SALE</h1>
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
                        <li><i class="fas fa-home fa-2x" style="color: blue;"></i> {{ $alders->name }}</li><br>
                        <li><i class="fas fa-info-circle fa-2x" style="color: green;"></i> {{ $alders->status }}</li><br>
                        <li><i class="fas fa-map-marker-alt fa-2x" style="color: red;"></i> {{ $alders->location }}</li><br>
                        <li><i class="fas fa-coins fa-2x" style="color: orange;"></i> {{ $alders->price }}</li><br>
                        <li><i class="fas fa-bed fa-2x" style="color: orange;"></i> {{ $alders->units }}</li><br>
                        <li><i class="fas fa-align-left fa-2x" style="color: orange;"></i> {{ $alders->description }}</li>
                    </ul>
                </div>

                <div class="col-md-7">
                    <img src="{{ $alders->image }}" alt="Lease Image" class="card-image"  style="max-width: 100%;">
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
