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

        <link rel="stylesheet" href="/css/single.product.css">
        <!-- Text Block One -->

                <section class="single-product">
                    <div class="container">
                        <div class="row justify-content-center">

                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="{{ $alders->image }}" alt="Sale Image" class="card-image"  style="max-width: 100%;">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="single-product-title">
                                            <h3>{{ $alders->name }}</h3>
                                        </div>
                                        <div class="single-product-description">
                                            <p class="details">{{ $alders->description }}</p>
                                            <h6 class="price">&#8369;{{ $alders->price }}</h6>
                                        </div>
                                        <hr>
                                        <div class="amenities">
                                            <ul>
                                                <li>{{ $alders->units }}</li>

                                            </ul>
                                        </div>
                                        <div class="contact">
                                            <i class="fas fa-location"></i> {{ $alders->location }}

                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </section>








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
