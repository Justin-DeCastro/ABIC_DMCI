<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="/frontend/images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <title>DMCI Homes | Real Estate Philippines, Condo, House &amp; Lot for Sale</title>
    <meta name="description" content="Welcome to DMCI Homes&#039; official website. Explore prime house and lots, real estate properties, and condos for sale in the Philippines. Learn more today!">
    <link rel="canonical" href="https://www.dmcihomes.com/">

    <meta property="og:title" content="DMCI Homes | Real Estate Philippines, Condo, House &amp; Lot for Sale">
    <meta property="og:description" content="Welcome to DMCI Homes&#039; official website. Explore our prime house and lots, real estate properties, apartments and condos for sale in the Philippines.">
    <meta property="og:image" content="https://www.dmcihomes.com/uploads/media/generated/Mulberry Place-featured-1665479476736-large.jpg">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@dmcihomes" />

    <meta name="twitter:title" content="DMCI Homes | Real Estate Philippines, Condo, House &amp; Lot for Sale" />
    <meta name="twitter:description" content="Welcome to DMCI Homes&#039; official website. Explore our prime house and lots, real estate properties, apartments and condos for sale in the Philippines." />
    <meta property="twitter:image" content="https://www.dmcihomes.com/uploads/media/generated/Mulberry Place-featured-1665479476736-large.jpg">

    <meta property="og:site_name" content="DMCI Homes">
    <meta property="og:type" content="Website">
    <meta property="og:url" content="https://www.dmcihomes.com/">
    <link rel="amphtml" href="https://www.dmcihomes.com/amp/index">


    <meta name="facebook-domain-verification" content="nhksdl5rrq51rn5yaxsdh62xp7bquj" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="preconnect" href="https://www.googletagmanager.com/" crossorigin>
    <link rel="preconnect" href="https://www.google-analytics.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://www.clarity.ms" crossorigin>
    <link rel="preconnect" href="https://bat.bing.com" crossorigin>
    <link rel="preload" href="/js/jquery.js" as="script">
    <link rel="preload" href="/js/bundle.js" as="script">
    <link rel="preload" href="https://service.force.com/embeddedservice/5.0/esw.min.js" as="script">

    <!-- Google Tag Manager -->
    <script rel="dns-prefetch">
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-4DFQ');
    </script>
    <!-- End Google Tag Manager -->

    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/molengo/v9/I_uuMpWeuBzZNBtQXbNakwKso5c.woff2" crossorigin>
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fBBc4AMP6lQ.woff2" crossorigin>
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2" crossorigin>
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2" crossorigin>
    <link rel="preload" href="/css/icons.min.css" as="style">
    <link rel="preload" href="/css/plugins.min.css" as="style">

@include('layouts.landing.css')




    <!--[if lt IE 9]> <script src="/js/css3-mediaqueries.js"></script> <![endif]-->




    <script async>
        function getLang() {
            if (navigator.languages != undefined) {
                return navigator.languages[0];
            } else {
                return navigator.language;
            }
        }

        var languageSetting = getLang();

        CRISP_RUNTIME_CONFIG = {
            locale: languageSetting
        };
    </script>
</head>



<section id="main-container" class="">


    <header id="config-header">
        <div class="top-menu">
            <div class="container clearfix">
                <figure class="logo">
                    <a href="/">
                        <img src="/images/dmci.png" class="lazyload" alt="DMCI Homes Logo" width="140" height="31">
                        <img class="logo-exclusive lazyload" style="display: none;" src="/images/dmci-exclusive-logo.png" alt="DMCI Homes Exclusive Logo" width="400" height="105">
                    </a>

                </figure>
                <div class="fr">
                    <nav class="top-nav fl" id="top-nav">

                    </nav>
                    <div class="fr">



                    </div>


                        <div class="hamburger-menu">
                            <div class="bar arrow-top"></div>
                            <div class="bar arrow-middle"></div>
                            <div class="bar arrow-bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="sidebar-menu" style="z-index: 1000;">
        <li> <div id="google_translate_element"></div></li>
        <figure class="logo">

            <a href="/">
                <img src="/images/dmci.png" alt="DMCI Homes Logo" width="170" height="37">
                <img class="lazyload logo-exclusive" style="display: none;" data-src="/images/dmci-exclusive-logo.png" alt="DMCI Homes Exclusive Logo" width="400" height="105">
            </a>

        </figure>
        <nav class="main-nav">
            <ul>
                <li><a href="{{ route('landing-page') }}">Home</a></li>
                    <li><a href="{{ route('whatsNew') }}">Whats New</a></li>
                    <li><a href="{{ route('viewproperties') }}">Properties</a></li>
                    {{-- <li><a href="{{ route('guides') }}">Guides</a></li> --}}
                    <li><a href="{{ route('seller') }}">FOR SALE</a></li>
                    <li><a href="{{ route('leasing') }}">FOR LEASING</a></li>
                    <li><a href="{{ route('career') }}">JOB OFFERS</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{ route('sendproperties.index') }}">Send a Property to us</a></li>
                    <li><a href="/contact">Contact us</a></li>

                    {{-- <div style="text-align: right;"> --}}
                        <a href="https://wa.me/+639483877158" target="_blank" style="margin-left: 48px;"> <!-- WhatsApp Link -->
                            <img src="{{ asset('images/whats.png') }}" alt="WhatsApp" width="30" height="30"> <!-- WhatsApp Logo -->
                        </a>


                        {{-- <a href="https://web.telegram.org/k/#5645362073" target="_blank" style="margin-left: 10px;"> <!-- Telegram Group/Channel Link -->
                            <img src="{{ asset('leasing/telegram-removebg-preview.png') }}" alt="Telegram" width="30" height="30"> <!-- Telegram Logo -->
                        </a> --}}


                        <a href="https://www.facebook.com/tine.tainy" target="_blank" style="margin-left: 10px;"> <!-- Telegram Link -->
                            <img src="{{ asset('images/fb-removebg-preview.png') }}" alt="Facebook" width="30" height="30"> <!-- Telegram Logo -->
                        </a>
                        <a href="https://www.instagram.com/jmdec21/" target="_blank" style="margin-left: 10px;"> <!-- Telegram Link -->
                            <img src="{{ asset('images/ig-removebg-preview.png') }}" alt="Facebook" width="30" height="30"> <!-- Telegram Logo -->
                        </a>
                    {{-- </div> --}}

            </ul>
            <ul class="nav-other-site">
              <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#loanCalculatorModal" data-dismiss="modal" style="width: 200px;">Loan Calculator</button>
              <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#Request" data-dismiss="modal" style="width: 200px;">Request A Viewing</button>
              <li class="mn-green mn-btn"><a href="/contact">Customer Care <span class="icon-home icon-costumer-care" ></span></a></li>



                        <span class="icon-communitys">
                            <img class="lazyload" src="/images/lazyload.png" data-src="/images/community-icon.webp" width="40" height="17" alt="">
                            <img class="lazyload exclusive" style="display: none;" src="/images/lazyload.png" data-src="/images/community-icon-white.png" width="40" height="17" alt="">
                        </span>
                    </a>
                </li>
            </ul>
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Loan Calculator</title>
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


            <body>



                <!-- Modal -->
                <div class="modal fade" id="loanCalculatorModal" tabindex="-1" role="dialog" aria-labelledby="loanCalculatorModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="loanCalculatorModalLabel">Loan Calculator</h5>
                            </div>
                            <div class="modal-body">
                                <form id="loan-form" class="form-inline">
                                    <div class="form-group">
                                        <label for="loan_amount">Loan Amount:</label>
                                        <input type="text" class="form-control col-sm-8" id="loan_amount" name="loan_amount" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="interest_rate">Interest Rate:</label>
                                        <select class="form-control" id="interest_rate" name="interest_rate">
                                            <option value="0.05">5%</option>
                                            <option value="0.06">6%</option>
                                            <option value="0.07">7%</option>
                                            <option value="0.08">8%</option>
                                            <option value="0.09">9%</option>
                                            <option value="0.1">10%</option>
                                            <option value="0.11">11%</option>
                                            <option value="0.12">12%</option>
                                            <option value="0.13">13%</option>
                                            <option value="0.14">14%</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Calculate</button>
                                </form>
                                <div class="result" id="results">
                                    <h2>Results</h2>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Months</th>
                                                <th>Monthly Payment</th>
                                                <th>Total Payment</th>
                                                <th>Total Interest</th>
                                            </tr>
                                        </thead>
                                        <tbody id="results-body">
                                            <!-- Result rows will be appended here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    /* Styles for modal */
                </style>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#loan_amount').on('input', function () {
                            // Remove existing commas and spaces from the input value
                            var value = $(this).val().replace(/[, ]/g, '');
                            // Add commas every three digits
                            $(this).val(value.replace(/\B(?=(\d{3})+(?!\d))/g, ','));
                        });
                    });

                    document.getElementById('loan-form').addEventListener('submit', function (e) {
                        e.preventDefault();
                        calculateLoan();
                    });

                    function formatCurrency(amount) {
                        // Add comma separators for thousands and round to 2 decimal places
                        return amount.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    }

                    function calculateLoan() {
                        // Parse the loan amount value and remove commas
                        const loanAmount = parseFloat(document.getElementById('loan_amount').value.replace(/,/g, ''));
                        const interestRate = parseFloat(document.getElementById('interest_rate').value);
                        const loanTerm = 12; // Fixed to 12 for simplicity

                        const monthlyInterestRate = interestRate / 12;
                        const resultsBody = document.getElementById('results-body');
                        resultsBody.innerHTML = ''; // Clear previous results

                        for (let months of [12, 18, 24, 30, 36]) {
                            const x = Math.pow(1 + monthlyInterestRate, months);
                            const monthlyPayment = (loanAmount * x * monthlyInterestRate) / (x - 1);
                            const totalPayment = monthlyPayment * months;
                            const totalInterest = totalPayment - loanAmount;

                            // Create and append table row
                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <td>${months}</td>
                                <td>₱${formatCurrency(monthlyPayment)}</td>
                                <td>₱${formatCurrency(totalPayment)}</td>
                                <td>₱${formatCurrency(totalInterest)}</td>`;
                            resultsBody.appendChild(row);
                        }
                    }
                </script>



            <div class="sm-loc-mobile">
                <p><a data-fancybox data-type="iframe" data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30895.61180450057!2d121.0179848!3d14.5447676!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3d1595d328ceba09!2sDMCI+Homes+Sales+office!5e0!3m2!1sen!2sph!4v1548819351382" href="javascript:;" class="footer-map-link">DMCI Homes Corporate Center, 1321 Apolinario Street, Bangkal, Makati City, Metro Manila, PH 1233</a></p>
                <ul>
                    <li>
                        <a href="tel:+63 (2) 53248888">
                            <label for="">Sales</label> +63 (2) 53248888</a>
                    </li>
                    <li>
                        <a href="tel:+63 (2) 84037368<">
                            <label for="">Leasing</label> +63 (2) 84037368</a>
                    </li>
                    <li>
                        <a href="tel:+63 (2) 85557777">
                            <label for="">Employment</label> +63 (2) 85557777</a>
                    </li>
                    <li>
                        <a href="tel:+63 (2) 85557777">
                            <label for="">Others</label> +63 (2) 85557777</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>



<style>
    .sidebar-container {
    display: flex;
    flex-direction: column;
    position: relative;
}

.sidebar-menu {
    /* Your existing sidebar menu styles */
}

.hamburger-menu {
    position: absolute;
    top: 20px; /* Adjust this value according to your layout */
    right: 20px; /* Adjust this value according to your layout */
    cursor: pointer;
    z-index: 1000; /* Ensure the hamburger menu appears above other content */
}

.bar {
    width: 25px;
    height: 3px;
    background-color: #333; /* Adjust color as needed */
    margin: 6px 0;
    transition: 0.4s;
}

/* Styles for hamburger menu animation */
.change .bar:nth-child(1) {
    transform: rotate(-45deg) translate(-5px, 6px);
}

.change .bar:nth-child(2) {
    opacity: 0;
}

.change .bar:nth-child(3) {
    transform: rotate(45deg) translate(-5px, -6px);
}
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const sidebarMenu = document.querySelector('.sidebar-menu');

    hamburgerMenu.addEventListener('click', function() {
        this.classList.toggle('change');
        sidebarMenu.classList.toggle('show');
    });
});
</script>

<script>
    // BotMan widget configuration
    var botmanWidget = {

        aboutText: 'Say Hi',
        introMessage: 'Hi, I\'m Justin the Real Estate Bot. How can I assist you today?'
    };

    // Function to handle introductory message
    function handleIntroMessage() {
        var introMessageElement = document.querySelector('.botman-about-text');
        if (introMessageElement) {
            introMessageElement.innerHTML = botmanWidget.aboutText;
        }
    }

    // Call the function when the page loads
    window.addEventListener('load', handleIntroMessage);
</script>

<style>
    .custom-modal-size {
    max-width: 500px; /* Adjust the width as needed */
    margin: 1.75rem auto;
}

</style>

<script src='/js/widget.js'></script>
<div class="modal fade" id="Request" tabindex="-1" role="dialog" aria-labelledby="RequestModalLabel" aria-hidden="true">
    <div class="modal-dialog custom-modal-size" role="document">

        <div class="modal-content">
            <form method="POST" action="{{ url('/submit-request') }}">
                @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="RequestModalLabel">Request Viewing Form</h5>
            </div>
            <div class="modal-body">
                <form id="loan-form">
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input type="tel" class="form-control" id="contact" name="contact" required>
                    </div>
                    <div class="form-group">
                        <label for="property" class="inquiry-label" data-inquiry="sales">Property Inquired: <span class="required-field">*</span></label>
                        <div class="custom-select">
                            <select id="property" name="property" class="form-control" title="Property Inquired" required>
                                <option value="">Select a property</option>
                                <option value="Accolade Place">Accolade Place</option>
                                <option value="Alder Residences">Alder Residences</option>
                                <option value="Alea Residences">Alea Residences</option>
                                <option value="Allegra Garden Place">Allegra Garden Place
                                </option>
                                <option value="Alta Vista de Boracay">Alta Vista de Boracay
                                </option>
                                <option value="Arista Place">Arista Place</option>
                                <option value="Asteria Residences">Asteria Residences</option>
                                <option value="The Aston Place">The Aston Place</option>
                                <option value="Belleza Towers">Belleza Towers</option>
                                <option value="Bonifacio Heights Condominiums">Bonifacio
                                    Heights Condominiums</option>
                                <option value="Brio Tower">Brio Tower</option>
                                <option value="Bristle Ridge">Bristle Ridge</option>
                                <option value="Brixton Place">Brixton Place</option>
                                <option value="Calathea Place">Calathea Place</option>
                                <option value="Cardea Terraces">Cardea Terraces</option>
                                <option value="Cedar Crest Condominiums">Cedar Crest
                                    Condominiums</option>
                                <option value="Cameron Residences">Cameron Residences</option>
                                <option value="Cypress Towers">Cypress Towers</option>
                                <option value="Dansalan Gardens Condominiums">Dansalan Gardens
                                    Condominiums</option>
                                <option value="East Ortigas Mansions">East Ortigas Mansions
                                </option>
                                <option value="East Raya Gardens">East Raya Gardens</option>
                                <option value="Fairlane Residences">Fairlane Residences
                                </option>
                                <option value="Flair Towers">Flair Towers</option>
                                <option value="Fortis Residences">Fortis Residences</option>
                                <option value="Fairway Terraces">Fairway Terraces</option>
                                <option value="Hampstead Garden Condominiums">Hampstead Garden
                                    Condominiums</option>
                                <option value="Infina Towers">Infina Towers</option>
                                <option value="Illumina Residences Manila">Illumina Residences
                                    Manila</option>
                                <option value="Ivory Wood">Ivory Wood</option>
                                <option value="Kai Garden Residences">Kai Garden Residences
                                </option>
                                <option value="Kalea Heights">Kalea Heights</option>
                                <option value="La Verti Residences">La Verti Residences
                                </option>
                                <option value="Lakeview Manors">Lakeview Manors</option>
                                <option value="Levina Place">Levina Place</option>
                                <option value="Lumiere Residences">Lumiere Residences</option>
                                <option value="Lyre Garden Residences">Lyre Garden Residences
                                </option>
                                <option value="Magnolia Place">Magnolia Place</option>
                                <option value="Mahogany Place">Mahogany Place</option>
                                <option value="Mahogany Place 2">Mahogany Place 2</option>
                                <option value="Mahogany Place 3">Mahogany Place 3</option>
                                <option value="Maple Place">Maple Place</option>
                                <option value="Maricielo Villas">Maricielo Villas</option>
                                <option value="Mayfield Park Residences">Mayfield Park
                                    Residences</option>
                                <option value="Mirea Residences">Mirea Residences</option>
                                <option value="Moncello Crest">Moncello Crest</option>
                                <option value="Morning Sun Townhomes">Morning Sun Townhomes
                                </option>
                                <option value="Mulberry Place">Mulberry Place</option>
                                <option value="Oak Harbor Residences">Oak Harbor Residences
                                </option>
                                <option value="Ohana Place">Ohana Place</option>
                                <option value="Olea Estates">Olea Estates</option>
                                <option value="One Castilla Place">One Castilla Place</option>
                                <option value="Outlook Ridge Residences">Outlook Ridge
                                    Residences</option>
                                <option value="Palm Grove">Palm Grove</option>
                                <option value="Parama Residences">Parama Residences</option>
                                <option value="Prisma Residences">Prisma Residences</option>
                                <option value="Rainbow Ridge Condominiums">Rainbow Ridge
                                    Condominiums</option>
                                <option value="Raya Garden Condominiums">Raya Garden
                                    Condominiums</option>
                                <option value="Rhapsody Residences">Rhapsody Residences
                                </option>
                                <option value="Riverfront Residences">Riverfront Residences
                                </option>
                                <option value="Rosewood Pointe">Rosewood Pointe</option>
                                <option value="Royal Palm Residences">Royal Palm Residences
                                </option>
                                <option value="Sage Residences">Sage Residences</option>
                                <option value="Satori Residences">Satori Residences</option>
                                <option value="Sheridan Towers">Sheridan Towers</option>
                                <option value="Siena Park Residences">Siena Park Residences
                                </option>
                                <option value="Solmera Coast">Solmera Coast</option>
                                <option value="Sonora Garden Residences">Sonora Garden
                                    Residences</option>
                                <option value="Sorrel Residences">Sorrel Residences</option>
                                <option value="Sovanna Towers">Sovanna Towers</option>
                                <option value="Spring Lane Homes">Spring Lane Homes</option>
                                <option value="Stellar Place">Stellar Place</option>
                                <option value="The Amaryllis">The Amaryllis</option>
                                <option value="The Atherton">The Atherton</option>
                                <option value="The Avalon Heights">The Avalon Heights</option>
                                <option value="The Birchwood">The Birchwood</option>
                                <option value="The Camden Place">The Camden Place</option>
                                <option value="The Celandine">The Celandine</option>
                                <option value="The Crestmont">The Crestmont</option>
                                <option value="Lucine Estates">Lucine Estates</option>
                                <option value="The Manors at Celebrity Place">The Manors at
                                    Celebrity Place</option>
                                <option value="The Orabella">The Orabella</option>
                                <option value="The Oriana">The Oriana</option>
                                <option value="The Redwoods">The Redwoods</option>
                                <option value="The Valeron Tower">The Valeron Tower</option>
                                <option value="Tivoli Garden Residences">Tivoli Garden
                                    Residences</option>
                                <option value="Torre de Manila">Torre de Manila</option>
                                <option value="Verawood Residences">Verawood Residences
                                </option>
                                <option value="Verdon Parc">Verdon Parc</option>
                                <option value="Viera Residences">Viera Residences</option>
                                <option value="Villa Alegre Homes">Villa Alegre Homes</option>
                                <option value="Vista De Lago">Vista De Lago</option>
                                <option value="Willow Park Homes">Willow Park Homes</option>
                                <option value="Woodland Hills">Woodland Hills</option>
                                <option value="Zinnia Towers">Zinnia Towers</option>
                                <option value="The Erin Heights">The Erin Heights</option>
                            </select>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Request a Visit</button>
                </form>

                <div class="result" id="results"></div>

            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
            toastr.success('{{ session('success') }}', '', {
                "progressBar": true,
                "positionClass": "toast-top-right", // You can change the position if needed
                "closeButton": true,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000", // Change the duration as needed
                "extendedTimeOut": "1000",
                "class": "toastr-success" // Custom class for success notification
            });
        @endif
    });
</script>
<script src="js/element.js"></script>
<script>
    function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {
      pageLanguage: 'en', // Change this to your website's primary language code
      includedLanguages: 'zh-CN,en,fr,ja', // Languages to display in the widget (Chinese and English in this case)
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE, // Layout style
      autoDisplay: false, // Prevent auto-display of the widget
    },
    'google_translate_element' // ID of the HTML element to attach the widget to
  );
}

</script>
