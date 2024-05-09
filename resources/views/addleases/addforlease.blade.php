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
                        <h1>For Lease</h1>
                    </div>
                </div>
            </section>
            <section class="sec-pad sec-default" id="recommended">
                <div class="recommended-bg animated hiding" data-animation="fadeIn"></div>
                <div class="container">
                    <div class="property-list">
                        <ul class="flex property-list-carousel owl-carousel" id="recommended-properties">
                            @foreach ($addLeases as $lease)
                            <li class="" data-animation="fadeInUp" data-delay="100">
                                <div class="property-item box-card">
                                    <a href="{{ route('viewleasing', ['id' => $lease->id]) }}">
                                        <figure class="property-img">
                                            <img src="{{ $lease->image }}" alt="Lease Image" style="max-width: 50%;">
                                        </a>
                                        <span class="status-badge" style="background-color:
                                        @if ($lease->name === 'Residential')
                                            blue;
                                        @elseif ($lease->name === 'Commercial')
                                            green;
                                        @endif;
                                        padding: 4px 8px; /* Adjust padding as needed */
                                        border-radius: 4px; /* Optional: Add rounded corners for a nicer look */
                                        color: white; /* Set the text color to white for better contrast */
                                    ">
                                        {{ $lease->name }}
                                    </span>
                                     <!-- Lease status -->
                                        </figure>

                                    <br>
                                    <div class="content" style="display: flex; align-items: center;">
                                        <p class="content" style="margin-bottom: 5px;">
                                            <i class="fas fa-location-dot fa-2x" style="color: red;"></i>
                                            <span class="box-type">{{ $lease->location }}</span>
                                        </p>
                                        <p class="content" style="margin-bottom: 5px;">
                                            <i class="fas fa-peso-sign fa-2x" style="color: orange;"></i>

                                            <span class="box-type">{{ $lease->price }}</span>
                                        </p>
                                        <p class="content" style="margin-bottom: 5px;">
                                            <i class="fas fa-home fa-2x"></i>

                                            <span class="box-type">{{ $lease->status }}</span>
                                        </p>
                                        <p class="content" style="margin-bottom: 5px;">
                                            <i class="fas fa-bed fa-2x" style="color:green"></i>
                                            <span class="box-type">{{ $lease->units }}</span>
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
                .status-badge {
    position: absolute;
    top: 10px;
    right: 10px;
   /* Blue color for the badge */
    color: white; /* White color for the text */
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
}
</style>




            <!-- CSS for hiding card body by default -->

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

