@include('layouts.landing.sidebar')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-....">

        <section id="main-wrapper">

            <section class="banner sec-pad wavy default" id="overview">
                <picture class="coverimage-img">
                    <source srcset="{{ asset('images/hero-shd.png')}}" media="(min-width: 570px)">
                    <source srcset="{{ asset('images/hero-shd.png')}}" media="(min-width: 320px)">
                    <img class=" ls-is-cached lazyloaded" src="{{ asset('images/hero-shd.png')}}" width="1440" height="330" alt="MDN" style="width: 1900px; height: 330px; margin-top: 0px; margin-left: -173px;">
                </picture>
                <div class="banner-text">
                    <div class="container">
                        <h1>FOR SALE</h1>
                    </div>
                </div>
            </section>

            <section class="sec-pad sec-default" id="recommended">
                <div class="recommended-bg animated hiding" data-animation="fadeIn"></div>
                <div class="container">
                    <div class="property-list">
                        <ul class="flex property-list-carousel owl-carousel" id="recommended-properties">
                            @foreach($alders as $alder)
                            <li class="" data-animation="fadeInUp" data-delay="100">
                                <div class="property-item box-card" style="position: relative;">
                                    <a href="{{ route('viewsale', ['id' => $alder->id]) }}">
                                        <figure class="property-img">
                                            <img src="{{ asset($alder->image) }}" alt="Reco Image">
                                        </figure>
                                    </a>
                                    <span class="status-badge" style="background-color:
                                        @if ($alder->name === 'FOR SALE')
                                            blue;
                                        @elseif ($alder->name === 'Pre-Selling')
                                            green;
                                        @endif;
                                        padding: 4px 8px; /* Adjust padding as needed */
                                        border-radius: 4px; /* Optional: Add rounded corners for a nicer look */
                                        color: white; /* Set the text color to white for better contrast */
                                        position: absolute;
                                        top: 10px; /* Adjust top position */
                                        right: 10px; /* Adjust right position */
                                        z-index: 1; /* Ensure badge is above image */
                                    ">
                                        {{ $alder->name }}
                                    </span>
                                    <br>
                                    <div class="content" style="display: flex; align-items: center;">
                                        <p class="content" style="margin-bottom: 5px;">
                                            <i class="fas fa-check-circle fa-2x" style="color: green;"></i>
                                            <span class="box-type">{{ $alder->status }}</span>
                                        </p>
                                        <p class="content" style="margin-bottom: 5px;">
                                            <i class="fas fa-location-dot fa-2x" style="color: red;"></i>
                                            <span class="box-type">{{ $alder->location }}</span>
                                        </p>
                                        <p class="content" style="margin-bottom: 5px;">
                                            <i class="fas fa-peso-sign fa-2x" style="color: orange;"></i>
                                            <span class="box-type">{{ $alder->price }}</span>
                                        </p>
                                        <p class="content" style="margin-bottom: 5px;">
                                            <i class="fas fa-bed fa-2x"></i>
                                            <span class="box-type">{{ $alder->units }}</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="slant-border slant-bot slant-blue pos-a"></div>
            </section>

<style>
    .property-item {
    position: relative;
}

.name-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: blue; /* Blue color for the badge */
    color: white; /* White color for the text */
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
}

</style>



            <!-- CSS for hiding card body by default -->
            <style>

                .modal-image {
    max-width: 90%; /* Adjust the percentage as needed */
    height: auto;
}

                .card-body {
                    display: none;
                    position: fixed;
                    z-index: 9999;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    overflow: auto;
                    background-color: rgba(0, 0, 0, 0.5);
                }
                .close {
    color: #aaaaaa;
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

                .card-content {
    background-color: #fefefe;
    margin: 10% auto; /* Adjusted margin */
    padding: 20px;
    border: 1px solid #888;
    width: 30%;
    max-width: 600px; /* Added max-width */
    border-radius: 10px;
    position: relative;
}


                .close {
                    color: #aaaaaa;
                    float: right;
                    font-size: 28px;
                    font-weight: bold;
                }

                .close:hover,
                .close:focus {
                    color: #000;
                    text-decoration: none;
                    cursor: pointer;
                }
            </style>

            <!-- JavaScript for showing and hiding card body -->
            <script>
                var showDetailLinks = document.getElementsByClassName("show-details");

                for (var i = 0; i < showDetailLinks.length; i++) {
                    showDetailLinks[i].addEventListener("click", function () {
                        var targetId = this.getAttribute("data-toggle");
                        var target = document.getElementById(targetId);
                        target.style.display = "block";
                    });
                }

                var closeButtons = document.getElementsByClassName("close");

                for (var i = 0; i < closeButtons.length; i++) {
                    closeButtons[i].addEventListener("click", function () {
                        var parent = this.parentElement.parentElement;
                        parent.style.display = "none";
                    });
                }
            </script>

                    <section class="sec-pad compare brk" id="compared-properties-wrapper">
                        <div class="container">
                            <div class="compare-content">
                                <ul class="flex" id="compared-properties">
                                </ul>
                            </div>
                        </div>
                    </section>


                </div>
            </div>




    </section>
    <div class="append-style">
        <!-- <link async rel="stylesheet" href="/frontend/css/tablet.css" media="(max-width: 991px)"> -->
    </div>

    <link rel="preload" href="{{asset('css/about.css" as="style')}}">
    <link rel="preload" href="{{asset('css/property-list-page.min.css')}}" as="style">
    <link rel="stylesheet" href="{{asset('css/about.css" media="all')}}">
    <link rel="stylesheet" href="{{asset('css/property-list-page.min.css')}}" media="all" />

