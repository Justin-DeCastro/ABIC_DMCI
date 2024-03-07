@include('layouts.landing.sidebar')


            <div class="search-mobile parent-class">
    <div class="sm-content">
        <a href="#" class="jq-close"><span class="icon-home icon-close"></span></a>
        <div class="container">
            <div class="sec-head">
                <h2 class="sec-title">More Search Options</h2>
            </div>
            <form action="/property-finder">
                <div class="row">
                    <div class="col-md-12 not-this">
                        <div class="input-wrap looking-type">
                            <h2 class="fl" for="">I am Looking to..</h2>
                            <ul class="ad-filter-search-options fl">
                                <li>
                                    <div class="custom-checkbox radio-style">
                                        <input id="rf-buy" type="radio" value="buy" name="as-radio"  checked="true">
                                        <label for="rf-buy">Buy</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox radio-style">
                                        <input id="rf-rent" type="radio" value="lease" name="as-radio">
                                        <label for="rf-rent">Rent/Lease</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col-md-4" data-search-option="buy" data-filter="rent">
                        <div class="input-wrap multi-select">
                            <h2>Property type</h2>
                            <ul class="ads-types">
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tp-highrise" type="checkbox" class="advance-dev-type-cb"  name="development_type[]" value="2">
                                        <label for="tp-highrise">High Rise Condominiums</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tp-midrise" type="checkbox" class="advance-dev-type-cb"  name="development_type[]" value="3">
                                        <label for="tp-midrise">Mid Rise Condominiums</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tp-sub" type="checkbox" class="advance-dev-type-cb"  name="development_type[]" value="4">
                                        <label for="tp-sub">Subdivisions</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tp-leisure" type="checkbox" class="advance-dev-type-cb"  name="development_type[]" value="5">
                                        <label for="tp-leisure">Leisure Residences</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4" data-search-option="lease" data-filter="rent" style="display: none;">
                        <div class="input-wrap multi-select">
                            <h2>Finish</h2>
                            <ul class="ads-types">
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="bare-unit-input" type="checkbox" class="advance-furnish-type-cb"  name="furnished_type[]" value="BARE UNIT">
                                        <label for="bare-unit-input">Bare Unit</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="semi-furnished-input" type="checkbox" class="advance-furnish-type-cb"  name="furnished_type[]" value="SEMI-FURNISHED">
                                        <label for="semi-furnished-input">Semi Furnished</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="full-furnished-input" type="checkbox" class="advance-furnish-type-cb"  name="furnished_type[]" value="FULLY FURNISHED">
                                        <label for="full-furnished-input">Full Furnished</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 for-advance-search" data-search-option="both" data-filter="rent">
                        <div class="input-wrap multi-select ">
                            <h2 for="">Unit type</h2>
                            <ul class="ads-unit-type">
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tu-studio" type="checkbox" class="advance-unit-type-cb"  name="unit_type[]" value="1">
                                        <label for="tu-studio">Studio</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tu-1bed" type="checkbox" class="advance-unit-type-cb"  name="unit_type[]" value="2">
                                        <label for="tu-1bed">1 Bedroom</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tu-2bed" type="checkbox" class="advance-unit-type-cb"  name="unit_type[]" value="3">
                                        <label for="tu-2bed">2 Bedroom</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tu-3bed" type="checkbox" class="advance-unit-type-cb"  name="unit_type[]" value="4">
                                        <label for="tu-3bed">3 Bedroom</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tu-4bed" type="checkbox" class="advance-unit-type-cb"  name="unit_type[]" value="5">
                                        <label for="tu-4bed">4 Bedroom</label>
                                    </div>
                                </li>
                                <li data-search-option="buy">
                                    <div class="custom-checkbox">
                                        <input id="tu-b-house" type="checkbox" class="advance-unit-type-cb"  name="unit_type[]" value="6">
                                        <label for="tu-b-house">Loft</label>
                                    </div>
                                </li>
                                <li data-search-option="buy">
                                    <div class="custom-checkbox">
                                        <input id="tu-2s-house" type="checkbox" class="advance-unit-type-cb sdv"  name="unit_type[]" value="7">
                                        <label for="tu-2s-house">House & Lot</label>
                                    </div>
                                </li>
                                <li data-search-option="buy">
                                    <div class="custom-checkbox">
                                        <input id="tu-lot" type="checkbox" class="advance-unit-type-cb sdv"  name="unit_type[]" value="8">
                                        <label for="tu-lot">Lot</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-4" data-search-option="lease" style="display: none;">
                        <div class="input-wrap">
                            <h2>Budget per month</h2>
                            <div class="bf-price-range bf-price-budget">
                                <div class="price-range">
                                    <div class="noUiSlider" id="noUiSlider-budget-2"></div>
                                    <input type="hidden" id="budget-min-price-2" name="budget_fm" class="price_fm" />
                                    <input type="hidden" id="budget-max-price-2" name="budget_to" class="price_to" />
                                    <p class="pricing-label clear">
                                        <label class="pl-1 fl" for="" style="left: -12px; font-family: 'Arial', 'Helvetica', sans-serif !important;"><span>P </span> <span id="budget-min-price-label-2">5, </span><span>,000</span></label>
                                        <label class="pl-3 fr" for="" style="left: auto; right: -18px; font-family: 'Arial', 'Helvetica', sans-serif !important;"><span>P </span> <span id="budget-max-price-label-2">90,</span><span> 000</span></label>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4" data-search-option="buy">
                        <div class="input-wrap">
                            <h2 for="">Price Range</h2>
                            <div class="price-selectbox">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="">Min Price</label>
                                        <div class="custom-select">
                                            <label for="min-price"></label>
                                            <select name="" id="min-price-select">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="">Max Price</label>
                                        <div class="custom-select">
                                            <label for="max-price"></label>
                                            <select name="" id="max-price-select">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-range">
                                <div class="noUiSlider" id="noUiSlider-1"></div>
                                <input type="hidden" id="qs-min-price-1" name="price_fm" class="price_fm" />
                                <input type="hidden" id="qs-max-price-1" name="price_to" class="price_to" />
                                <p class="pricing-label">
                                    <label class="pl-1" for=""><span data-value="1" class="currency-convert-no-symbol">1</span><span>M</span></label>
                                    <label class="pl-3" for=""><span data-value="3" class="currency-convert-no-symbol">3</span><span>M</span></label>
                                    <label class="pl-5" for=""><span data-value="5" class="currency-convert-no-symbol">5</span><span>M</span></label>
                                    <label class="pl-7" for=""><span data-value="7" class="currency-convert-no-symbol">7</span><span>M</span></label>
                                    <label class="pl-10" for=""><span data-value="10" class="currency-convert-no-symbol">10</span><span>M</span></label>
                                    <label class="pl-15" for=""><span data-value="15" class="currency-convert-no-symbol">15</span><span>M</span></label>
                                    <label class="pl-20" for=""><span data-value="20" class="currency-convert-no-symbol">20</span><span>M</span></label>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="clr"></div>

                    <div class="col-lg-7 col-md-6" data-search-option="both" data-filter="rent">
                        <div class="input-wrap bf-loc">
                            <h2 >Near this Location</h2>
                            <input data-fancybox-loc data-src="#map-pin" type="text" name="advance-location" id="advance-search-location" class="location-autocomple" placeholder="Any Location" readonly>
                            <button data-fancybox-loc data-src="#map-pin">
                                <!-- <i class="icon-home icon-pin-locator"></i> <span>Use<br>Pin</span> -->
                                <img src="/frontend/images/map-marker-white.png" alt="">
                                <span>Locate<br>on Map</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6" data-search-option="buy">
                        <div class="input-wrap">
                            <h2>Development Status</h2>
                            <ul class="fa-status-list">
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="cs-new" type="checkbox" class="advance-status-cb"  name="status[]" value="1">
                                        <label for="cs-new"><span class="icon icon-new"></span> New</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="cs-rfo" type="checkbox" class="advance-status-cb"  name="status[]" value="2">
                                        <label for="cs-rfo"><span class="icon icon-RFO"></span> Ready for Occupancy</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="cs-uc" type="checkbox" class="advance-status-cb"  name="status[]" value="3">
                                        <label for="cs-uc"><span class="property-status">
                                            <i class="icon-under-construction"></i></span> Under Construction</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="cs-cs" type="checkbox" class="advance-status-cb"  name="status[]" value="4">
                                        <label for="cs-cs"><span class="icon icon-coming-soon"></span>
                                            Coming Soon</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="input-wrap text-center not-this">
                    <button id="advance-search-button" data-search-option="buy"  class="btn btn-large btn-round btn-green disabled" >Search</button>
                    <a href="" id="advance-lease-button" data-search-option="lease" class="btn btn-large btn-round btn-green disabled" style="margin-top: 20px; display: none;">Search</a>
                    <br>
                    <a href="#" class="btn-link btn-advance-search">Show Advance Search</a>
                </div>
            </form>
        </div>
    </div>
</div>
    <div class="property-nav">
    <div class="property-content">
        <a href="#" class="jq-close"></a>
        <div class="property-left-card">
            <h3 id="sidebar-property-header"></h3>
            <div class="property-list">
                <ul class="flex property-list-carousel" id="sidebar-property-list">
                </ul>
            </div>
        </div>
        <div class="property-right-loc">
            <h5>Other Locations</h5>
            <ul id="sidebar-property-modal-location-list">
            </ul>
            <p>Can't see what your looking for?</p>
            <a href="/properties" class="btn btn-round btn-small">View all <span> Properties</span></a>
        </div>
    </div>
</div>


    <section id="main-wrapper">
        <section class="sec-pad search-ask wavy bg-blue">
            <div class="container">
                <div class="sec-head">
                    <label>Is there anything we can help you with?</label>
                    <form action="/guides" method="post">
                        <div class="input-wrap">
                            <input type="text" name="search-faq" id="search-faq" value="" placeholder="Type your Question here">
                            <button><span class="icon-home icon-search"></span></button>
                        </div>
                    </form>


                </div>
                <h1>Expert Series</h1>
                <div class="breadcrumbs">
                    <p><a href="/guides">Guides</a> <span>Expert Series</span></p>
                </div>
            </div>
        </section>

        <div class="alternate-bg">

            <section class="sec-pad">
                <div class="read" >
                    <div class="sticky-wrapper">
                         <div class="manual-wrapper is-desktop sticky">
                            <div class="manual-filter">
                                <ul>
                                                                            <li
                                                                                                    class="active"
                                                                                        >
                                            <h5><a href="#faq-13" class="jq-sec">What is the &quot;DMCI Homes 102-point inspection&quot;?</a></h5>
                                        </li>
                                                                            <li
                                                                                        >
                                            <h5><a href="#faq-26" class="jq-sec">What things should I remember to ask my agent?</a></h5>
                                        </li>
                                                                            <li
                                                                                        >
                                            <h5><a href="#faq-27" class="jq-sec">Will I still own my condo after 50 years?</a></h5>
                                        </li>
                                                                            <li
                                                                                        >
                                            <h5><a href="#faq-28" class="jq-sec">Why am I paying monthly Association Dues?</a></h5>
                                        </li>
                                                                    </ul>
                            </div>
                        </div>
                        <div class="manual-content">
                            <div class="common-question">


                                                                <article id="faq-13">
                                    <div class="article-body">
                                        <h3><a href="#faq-13" class="jq-sec">What is the &quot;DMCI Homes 102-point inspection&quot;?</a></h3>
                                        <div class="ask-list">
                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                    <!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><iframe src="//www.youtube.com/embed/UbODOVXmeaw?autoplay=1&amp;rel=0&amp;loop=1&amp;playlist=UbODOVXmeaw" width="803" height="450" allowfullscreen="allowfullscreen"></iframe></p>
</body>
</html>
                                                </div>
                                                                                                                                                <!-- <div class="col-md-5">
                                                    <figure class="ask-video-wrap">
                                                        <iframe width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </figure>
                                                </div> -->
                                                                                            </div>
                                        </div>
                                    </div>
                                </article>
                                                                <article id="faq-26">
                                    <div class="article-body">
                                        <h3><a href="#faq-26" class="jq-sec">What things should I remember to ask my agent?</a></h3>
                                        <div class="ask-list">
                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                    <!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><iframe src="//www.youtube.com/embed/1Xl82AnI4LE?autoplay=1&amp;rel=0&amp;loop=1&amp;playlist=1Xl82AnI4LE" width="803" height="450" allowfullscreen="allowfullscreen"></iframe></p>
</body>
</html>
                                                </div>
                                                                                                                                                <!-- <div class="col-md-5">
                                                    <figure class="ask-video-wrap">
                                                        <iframe width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </figure>
                                                </div> -->
                                                                                            </div>
                                        </div>
                                    </div>
                                </article>
                                                                <article id="faq-27">
                                    <div class="article-body">
                                        <h3><a href="#faq-27" class="jq-sec">Will I still own my condo after 50 years?</a></h3>
                                        <div class="ask-list">
                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                    <!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><iframe src="//www.youtube.com/embed/IL_sL7h7pgk?autoplay=1&amp;rel=0&amp;loop=1&amp;&amp;playlist=IL_sL7h7pgk" width="803" height="450" allowfullscreen="allowfullscreen"></iframe></p>
</body>
</html>
                                                </div>
                                                                                                                                                <!-- <div class="col-md-5">
                                                    <figure class="ask-video-wrap">
                                                        <iframe width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </figure>
                                                </div> -->
                                                                                            </div>
                                        </div>
                                    </div>
                                </article>
                                                                <article id="faq-28">
                                    <div class="article-body">
                                        <h3><a href="#faq-28" class="jq-sec">Why am I paying monthly Association Dues?</a></h3>
                                        <div class="ask-list">
                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                    <!DOCTYPE html>
<html>
<head>
</head>
<body>
<p><iframe src="//www.youtube.com/embed/1sEyL5t3IGE?autoplay=1&amp;rel=0&amp;loop=1&amp;playlist=1sEyL5t3IGE" width="803" height="450" allowfullscreen="allowfullscreen"></iframe></p>
</body>
</html>
                                                </div>
                                                                                                                                                <!-- <div class="col-md-5">
                                                    <figure class="ask-video-wrap">
                                                        <iframe width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </figure>
                                                </div> -->
                                                                                            </div>
                                        </div>
                                    </div>
                                </article>

                            </div>
                        </div>
                    </div>
                </div>
            </section>




    <div id="privacy-policy" class="read" style="display: none">
    <div class="content">
        <h2>Terms &amp; Privacy Policies</h2>
        <p>We, DMCI Project Developers, Inc. (the “Company”), together with its subsidiaries, special projects and business units, highly value the confidentiality of information you have entrusted us. We highly regard your personal, sensitive and privileged information such that it will only be used for its intended purpose (or as may be required by existing national and local laws, rules and regulations), kept within the agreed period and protected against data privacy breach. Any personal, sensitive and privileged information that you provide shall be kept safe under the Data Privacy Act of 2012 (the “Act”), applicable laws of the Philippines and the Company’s very own commitment through its Data Privacy Policy.</p>
        <p>Personal, sensitive and privileged information that you provide shall be used for transactions related to the sale of the Company’s products and all matters arising out of the said transaction.</p>
        <p>All   information collected by the Company shall be considered accurate unless the Client/Potential Client requests for update. It shall never be the responsibility of the Company to ensure validity/accuracy of information shared by the Client/Potential Client.</p>
        <p>Under the Data Privacy Act of 2012, you have the right to access, modify, erase and/or object to any processing of personal, sensitive or privileged data that you have provided to us. To do so, kindly contact our Data Protection Officer with the following information:</p>
        <ul>
            <li><strong>Name:</strong> Josephine C. Isidro</li>
            <li><strong>Address:</strong> 1321 Apolinario St., Brgy. Bangkal, Makati City PH 1322</li>
            <li><strong>Phone No.:</strong> (02) 555-7777 x7863</li>
            <li><strong>Email Address:</strong> dataprivacyoffice@dmcihomes.com</li>
        </ul>
        <p>The Company will not impose any charge to cover the cost of verifying a request for information and locating, retrieving, reviewing and copying any material requested.</p>
        <p>Please note, however, that the Company’s decision to provide such access or consider any request for correction, erasure and objection to process of the personal data as it appears in our records is subject to any exceptions under applicable laws, rules and regulations and/or the Act.</p>
        <p>We have implemented technological, organizational and physical security measures to protect your information from loss, misuse, modification, unauthorized or accidental access or disclosure, alteration or destruction. We put in effect safeguards such as:</p>
        <p>Keeping and protecting your information using a secured server behind a firewall, deploying encryption on computing devices and physical security controls</p>
        <p>Restricting access to your information only to qualified and authorized personnel who hold your information with strict confidentiality including third-party personnel/company who may be required to process your information.</p>
        <p>The data will be kept within 10 years from date of last engagement (e.g. release of transferred title, release of documents related to back-out) or as may be required by existing laws, rules and regulations, unless you request your data to be deleted in our systems, databases and hard copies earlier than this date, subject to limitation of applicable laws and/or the Act. Once deleted, your information will no longer be searchable or included in anonymous searches and will be completely removed from all the storage location.</p>
        <p>By agreeing to this policy, you explicitly and unambiguously consent to the collection, processing and storage of your personal, sensitive and privileged data by DMCI Project Developers, Inc. for the purpose(s) described in this Data Privacy Notice.</p>
    </div>
</div>
@include('layouts.landing.footer')

    <div id="map-pin" class="read" style="display: none;">
        <div class="fancy-map">
            <div class="fancy-map-form">
                <label for="">Enter your Preferred Nearby Location </label>
                <div class="input-wrap">
                    <input type="text" id="search-location-autocomplete" placeholder="Any location">
                    <button class="fmf-clear" id="clear-location-search">Clear</button>
                    <button id="done-location-search" class="fmf-end">Done</button>
                </div>
            </div>
            <div id="home-pin-map">
                <div class="loader-pin"><img src="/frontend/images/loading-idle.gif" width="70" height="70"></div>
            </div>
            <p class="notes">
                <em>You can drag the map pin to change your location.</em>
            </p>
        </div>
    </div>

    <div id="thankyou" class="read" style="display: none;">
        <div class="content text-center">
            <h2> Thank you for contacting us at DMCI Homes.</h2>
            <p>A company representative will be in touch with you shortly.</p>
            <a href="#" class="btn btn-large btn-round btn-green" id="thankyou-close">OK</a>
        </div>
    </div>

    <div id="error-inquiry" class="read" style="display: none;">
        <div class="content text-center">
            <h2> Failed to send inquiry</h2>
            <a href="#" class="btn btn-large btn-round btn-green" id="error-close">Close</a>
        </div>
    </div>

    <div id="captcha-error" class="read" style="display: none;">
        <div class="content text-center">
            <h4> Invalid captcha please try again.</h4>

            <a href="#" class="btn btn-large btn-round btn-green" id="captchaerror-close">OK</a>
        </div>
    </div>

    <div id="share-info" class="read" style="display: none">
        <div class="content text-center">
            <ul>
                <li><a href="https://www.facebook.com/dmcihomesofficial" id="share-url-fb" target="_blank">
                    <span class="icon-home-2 icon-facebook"></span> <span class="fs-text">Facebook</span></a>
                </li>
                <li><a href="https://twitter.com/dmcihomes" id="share-url-twitter" target="_blank">
                    <span class="icon-home-2 icon-twitter"></span><span class="fs-text">Twitter</span></a>
                </li>
                                                                </ul>

            <div class="si-bar">
                <div class="input-wrap">
                    <textarea class="js-copytextarea" readonly></textarea>
                    <!-- <input type="text" value="" readonly id="input-share-url"> -->
                    <a href="#" class="copy-url" id="a-share-url">Copy</a>
                </div>

            </div>
            <div class="notes-copied">Link copied to Clipboard</div>
        </div>
    </div>

</section>
<div class="append-style">
    <!-- <link async rel="stylesheet" href="/frontend/css/tablet.css" media="(max-width: 991px)"> -->
</div>

    <link rel="stylesheet" href="{{ asset('css/ask.css')}}" media="all" />


    <script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/bundle.js')}}"></script>

<script defer>

   var GLOBAL_frontend_get__properties_json = "/get/properties/json";
    var GLOBAL_app_request_schemeAndHttpHost = "https://www.dmcihomes.com";
    var GLOBAL_countries_json = "/frontend/js/countries.json";
    var GLOBAL_careers_position_json = "/json/positions.json";
    var GLOBAL_frontend_contact_us_captcha = "/contact-us/captcha/generate";
    var GLOBAL_APP_REQUEST_GET = "frontend_guide_faq_inner";

    "use strict";var map,locationMap,positionMarker,locationMarker,geocoder,cookieSetupLoc,newCookieValue,activeProperties=[],allProperties=[],propertyLocation=[],selectedLocation=[],currencies={},currentLocation={lat:"",lng:""},prefCities=[],optionCities=[],locationEnabled=!1,popUpLocationValue={name:"",lat:"",lng:"",complete_address:""},autoCompleteLocationValue={name:"",lat:"",lng:"",complete_address:""};function getActivePropertiesJson(){$.ajax({url:GLOBAL_frontend_get__properties_json,type:"GET",processData:!1,success:function(a){Object.keys(a).forEach(function(b){let c=a[b];allProperties.push(c)}),activeProperties=allProperties.reduce(function(a,c){var b=c.city;return a[b]=a[b]||[],a[b].push(c),a},{});var c=[];allProperties.forEach(function(a){c[a.city]=a.city_slug});var b=$("#sidebar-property-modal-location-list");b.append('<li><a href="#" class="btn btn-round btn-ghost sidebar-location-all active" data-location="all">View All</a></li>'),Object.keys(activeProperties).forEach(function(a){propertyLocation.push(a)}),propertyLocation.sort(),propertyLocation.forEach(function(a){var d=c[a];b.append('<li><a href="'+GLOBAL_app_request_schemeAndHttpHost+"/"+d+'" class="btn btn-round btn-ghost sidebar-location-filter" data-location="'+a+'">'+a+"</a></li>")}),$(".sidebar-location-all").click(function(){selectedLocation=null,loadAllProperties(),$(".sidebar-location-filter").removeClass("active"),$(this).addClass("active")}),$(".sidebar-location-filter").click(function(a){a.preventDefault(),populateSidebarProperties(selectedLocation=$(this).data("location")),$(".sidebar-location-all").removeClass("active"),$(".sidebar-location-filter").removeClass("active"),$(this).addClass("active")})}})}function populateSidebarProperties(a){var b=activeProperties[a],c=$("#sidebar-property-list");c.empty(),$("#sidebar-property-header").text('Properties around "'+a+'".'),b.sort(),b.forEach(function(a){var b="coming-soon",d="cs",e=Number(a.price_range[0].min_price),f=Number(a.price_range[0].max_price);1===a.status?(b="new",d="new"):2===a.status?(b="RFO",d="rfo"):3===a.status&&(b="under-construction",d="uc");var g='<span data-value="'+e+'" class="currency-convert">'+e+'</span> - <span data-value="'+f+'" class="currency-convert">'+f+"</span>";0==a.is_unit_activated&&(g="<span>NOT YET AVAILABLE</span>");var h='<li class="box-card">                <div class="property-item">                    <a href="/'+a.slug+'">                        <figure class="property-img">                            <img class="lazyload" src="frontend/images/page_template/lazyload.png" data-src="'+a.image+'" alt="">                                <span class="property-status circle-white">                                    <span class="'+d+" icon-"+b+'"></span>                                </span>                        </figure>                        <div class="property-detail">                            <h3>'+a.name+'</h3>                            <p class="price">'+g+"</p>                        </div>                    </a>                </div>            </li>";c.append(h),convertCurrencies()})}function loadAllProperties(){var a=$("#sidebar-property-list");a.empty(),$("#sidebar-property-header").text("Viewing all properties."),allProperties.forEach(function(b){var c="coming-soon",d="cs",e=Number(b.price_range[0].min_price),f=Number(b.price_range[0].max_price);1===b.status?(c="new",d="new"):2===b.status?(c="RFO",d="rfo"):3===b.status&&(c="under-construction",d="uc");var g='<span data-value="'+e+'" class="currency-convert">'+e+'</span> - <span data-value="'+f+'" class="currency-convert">'+f+"</span>";0==b.is_unit_activated&&(g="<span>NOT YET AVAILABLE</span>");var h='<li class="box-card">                <div class="property-item">                    <a href="/'+b.slug+'">                        <figure class="property-img">                            <img class="lazyload" src="frontend/images/page_template/lazyload.png" data-src="'+b.image+'" alt="">                                <span class="property-status circle-white">                                    <span class="'+d+" icon-"+c+'"></span>                                </span>                        </figure>                        <div class="property-detail">                            <h3>'+b.name+'</h3>                            <p class="price">'+g+"</p>                        </div>                    </a>                </div>            </li>";a.append(h)})}function initializeDefaultButtons(){$("#property-sidebar-list-button").click(function(a){a.preventDefault(),loadAllProperties(),convertCurrencies()}),$("#save-profile").click(function(a){a.preventDefault();var b=$("#pop-up-looking-select").val(),c=JSON.stringify(popUpLocationValue),d=$("#pop-up-currency-select").val(),e=$("#pop-up-language-select").val(),f=$("#pop-up-measure-select").val();setCookie("profile-lookingFor",b,31),setCookie("profile-locatedNear",c,31),setCookie("profile-currency",d,31),setCookie("profile-language",e,31),setCookie("profile-measure",f,31),setCookie("profile-set",!0,31),$.fancybox.close("#cookie-preference"),loadCookies(),$(".hamburger-menu").hasClass("active")&&$(".hamburger-menu").click(),convertMeasures(),convertDistances(),convertCurrencies()}),$("#done-location-search").click(function(a){a.preventDefault(),setCookie("profile-locatedNear",JSON.stringify(autoCompleteLocationValue),31),$.fancybox.close("#map-pin"),loadCookies()}),$("#clear-location-search").click(function(a){a.preventDefault(),autoCompleteLocationValue=void 0,$("#search-location-autocomplete").val("").focus(),$("#header-search-location-field").val(""),$("#advance-search-location").val("")}),$("#skip-profile").click(function(a){a.preventDefault(),setCookie("profile-set",!0,31),setCookie("profile-measure",$("#pop-up-measure-select").val(),31),$.fancybox.close("#cookie-preference")}),$(".pop-up-trigger").click(function(a){$.fancybox.open({src:"#cookie-preference",clickContent:!1,beforeShow:function(){$(".fancybox-bg").css({background:"rgba(255, 255, 255, 0.6)"})}})}),$("#advance-search-button").click(function(g){g.preventDefault();var h=$(".advance-status-cb:checked"),i=$(".advance-unit-type-cb:checked"),j=$(".advance-dev-type-cb:checked"),a=[];h.each(function(c,b){a.push(b.value)});var b=[];i.each(function(c,a){b.push(a.value)});var c=[];j.each(function(b,a){c.push(a.value)});var k=currentLocation.lat,l=currentLocation.lng,d=$("#min-price-select").val(),e=$("#max-price-select").val(),f=$("#advance-search-location").val();""===f?window.location="/property-finder?search=advance&min="+d+"&max="+e+"&type="+b.toString()+"&dev="+c.toString()+"&status="+a.toString()+"&location=any":window.location="/property-finder?search=advance&lat="+k+"&lng="+l+"&min="+d+"&max="+e+"&type="+b.toString()+"&dev="+c.toString()+"&status="+a.toString()+"&address="+f}),$(".advance-dev-type-cb").change(function(){4==$(this).val()&&$(".advance-dev-type-cb[value=4]").is(":checked")?$(".sdv").prop("disabled",!1):$(".advance-dev-type-cb[value=4]").is(":checked")||$(".sdv").prop("disabled",!0)});var a=!1,b=!1,c=!1;$(".ads-types input[type=checkbox]").change(function(){var d="";$(".ads-types input[type=checkbox]").each(function(){d+=this.checked?"1,":"0,"}),(d=d.substr(0,d.length-1)).indexOf("1")> -1?(b=!0,a&&b&&c&&$("#advance-search-button").removeClass("disabled")):(b=!1,$("#advance-search-button").addClass("disabled"))}),$(".ads-unit-type input[type=checkbox]").change(function(){var d="";$(".ads-unit-type input[type=checkbox]").each(function(){d+=this.checked?"1,":"0,"}),(d=d.substr(0,d.length-1)).indexOf("1")> -1?(a=!0,b&&c&&$("#advance-search-button").removeClass("disabled")):(a=!1,$("#advance-search-button").addClass("disabled"))}),$(".fa-status-list input[type=checkbox]").change(function(){var d="";$(".fa-status-list input[type=checkbox]").each(function(){d+=this.checked?"1,":"0,"}),(d=d.substr(0,d.length-1)).indexOf("1")> -1?(c=!0,a&&b&&c&&$("#advance-search-button").removeClass("disabled")):(c=!1,$("#advance-search-button").addClass("disabled"))}),$(".slider-advisory").owlCarousel({loop:!0,item:1,margin:10,nav:!1,dots:!1,autoplay:!0,autoplayTimeout:7e3,autoplayHoverPause:!0,responsive:{0:{items:1},600:{items:1},1e3:{items:1}}})}function loadCookies(){getCookie("profile-lookingFor");var a,b=getCookie("profile-locatedNear"),c=getCookie("profile-currency"),e=getCookie("profile-language"),d=getCookie("profile-measure");""===d&&(setCookie("profile-measure",$("#pop-up-measure-select").val(),31),d=getCookie("profile-measure")),(void 0===c||"undefined"===c||""===c)&&(setCookie("profile-currency","PHP",31),c=getCookie("profile-currency")),""!==b&& void 0!==b&&"undefined"!==b&&"null"!==b&&(popUpLocationValue=a=JSON.parse(b),$("#pop-up-location-select").val(a.name),$("#search-location-autocomplete").val(a.name),autoCompleteLocationValue={name:a.name,complete_address:a.complete_address,lat:a.lat,lng:a.lng},geocodeDefault()),$("#pop-up-language-select").val(e),$("#pop-up-measure-select").val(d),$("#pop-up-currency-select").val(c)}function convertMeasures(){$(".area-convert").each(function(){var a=+$(this).data("value"),b=" sqm.";"Imperial"===getCookie("profile-measure")&&(a*=10.764,b=" sft."),this.innerHTML=a.toLocaleString(void 0,{maximumFractionDigits:2})+b})}function convertDistances(){$(".distance-convert").each(function(){var a=+$(this).data("value");"Imperial"===getCookie("profile-measure")&&(a*=.62137),this.innerHTML=a.toLocaleString(void 0,{maximumFractionDigits:2})})}function convertCurrencies(){var a=getCookie("profile-currency");void 0===localStorage.getItem("conversion")&&getCurrencies();var b=JSON.parse(localStorage.getItem("conversion"))[a];$(".currency-convert").each(function(){var c=+$(this).data("value");c*=b,this.innerHTML=a+" "+c.toLocaleString(void 0,{maximumFractionDigits:2})}),$(".currency-convert-no-symbol").each(function(){var a=+$(this).data("value");a*=b,this.innerHTML=a.toLocaleString(void 0,{maximumFractionDigits:2})})}function getCurrencyMultiplier(){var a=getCookie("profile-currency");return void 0===localStorage.getItem("conversion")&&getCurrencies(),JSON.parse(localStorage.getItem("conversion"))[a]}function getCurrencyCode(){return getCookie("profile-currency")}function setCookie(b,c,d){var a=new Date;a.setTime(a.getTime()+864e5*d);var e="expires="+a.toUTCString();document.cookie=b+"="+c+";"+e+";path=/"}function getCookie(e){for(var c=e+"=",d=decodeURIComponent(document.cookie).split(";"),b=0;b<d.length;b++){for(var a=d[b];" "===a.charAt(0);)a=a.substring(1);if(0===a.indexOf(c))return a.substring(c.length,a.length)}return""}function getParameterByName(a,b){b||(b=window.location.href),a=a.replace(/[\[\]]/g,"\\$&");var c=new RegExp("[?&]"+a+"(=([^&#]*)|&|#|$)").exec(b);return c?c[2]?decodeURIComponent(c[2].replace(/\+/g," ")):"":null}function showMap(e){geocoder=new google.maps.Geocoder;var a=14.5427941,b=121.0130898;locationMap=new google.maps.Map(document.getElementById("home-pin-map"),{center:new google.maps.LatLng(a,b),zoom:14,streetViewControl:!1,styles:[{featureType:"administrative",elementType:"geometry",stylers:[{visibility:"off"}]},{featureType:"poi",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"transit",stylers:[{visibility:"off"}]}]});var f={url:"/frontend/images/loading-idle.gif",scaledSize:new google.maps.Size(70,70),origin:null,anchor:null,size:null};positionMarker=new google.maps.Marker({position:new google.maps.LatLng(a,b),map:locationMap,animation:google.maps.Animation.DROP,draggable:!0,icon:f}),!1===geocodeDefault()&&null!==e&&(locationEnabled=!0,a=e.coords.latitude,b=e.coords.longitude,currentLocation.lat=a,currentLocation.lng=b,placeMarkerAndPanTo(new google.maps.LatLng(a,b)),geocode(new google.maps.LatLng(a,b))),locationMap.addListener("click",function(a){placeMarkerAndPanTo(a.latLng,locationMap),geocode(a.latLng)}),positionMarker.setVisible(!0),google.maps.event.addListener(positionMarker,"dragend",function(a){placeMarkerAndPanTo(a.latLng,locationMap),geocode(a.latLng)});var g=document.getElementById("pop-up-location-select"),c=new google.maps.places.Autocomplete(g);c.bindTo("bounds",locationMap),c.setTypes([]),c.setFields(["address_components","geometry","icon","name"]),c.addListener("place_changed",function(){var a=c.getPlace(),b="";a.address_components.forEach(function(a,c){b=0===c?a.long_name:b+","+a.long_name}),popUpLocationValue={name:a.name,complete_address:b,lat:a.geometry.location.lat(),lng:a.geometry.location.lng()}});var h=document.getElementById("search-location-autocomplete"),d=new google.maps.places.Autocomplete(h);d.bindTo("bounds",locationMap),d.setTypes([]),d.setFields(["address_components","geometry","icon","name"]),d.addListener("place_changed",function(){var a=d.getPlace(),b="";a.address_components.forEach(function(a,c){b=0===c?a.long_name:b+","+a.long_name}),autoCompleteLocationValue={name:a.name,complete_address:b,lat:a.geometry.location.lat(),lng:a.geometry.location.lng()},a.geometry.location?placeMarkerAndPanTo(a.geometry.location):locationMap.setCenter(a.geometry.location)})}function placeMarkerAndPanTo(a){void 0!==positionMarker&&positionMarker.setPosition(a),void 0!==locationMap&&(locationMap.panTo(a),locationMap.setZoom(17))}function geocodeDefault(){var a,b=getCookie("profile-locatedNear");try{a=JSON.parse(b),currentLocation.lat=a.lat,currentLocation.lng=a.lng,"function"==typeof getRecommended&&getRecommended(a.lat,a.lng),placeMarkerAndPanTo(new google.maps.LatLng(a.lat,a.lng)),$("#header-search-location-field").val(a.name),$("#advance-search-location").val(a.name)}catch(c){return"function"==typeof getRecommended&&(getRecommended("",""),placeMarkerAndPanTo(new google.maps.LatLng(currentLocation.lat,currentLocation.lng))),!1}return!0}function geocode(a){geocoder.geocode({location:a},function(b,c){"OK"===c&&(b[0]&&($("#header-search-location-field").val(b[0].formatted_address),$("#advance-search-location").val(b[0].formatted_address),$("#search-location-autocomplete").val(b[0].formatted_address)),autoCompleteLocationValue={name:b[0].formatted_address,complete_address:b[0].formatted_address,lat:a.lat(),lng:a.lng()},"getRecommended"==typeof obj&&getRecommended(a.lat(),a.lng()))})}function IsEmail(a){return/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(a)}function populateCoutries(){$.getJSON(GLOBAL_countries_json,function(a){a.countries.forEach(function(b){var a='<option value="'+b.value+'" ';"Philippines"===b.value&&(a+="selected "),a=a+">"+b.name+"</option>",$("#country").append(a)})})}function populatePositions(){$.getJSON(GLOBAL_careers_position_json,function(a){a.positions.forEach(function(b){var a='<option value="'+b.value+'" ';a=a+">"+b.name+"</option>",$("#position-interested").append(a)})}).then(function(){$("#position-interested").multiselect({enableFiltering:!0,enableCaseInsensitiveFiltering:!0})})}function populateContactProperties(){var a=$("#propertyInterested"),b=$("#propertyOwned"),c={enableFiltering:!0,enableCaseInsensitiveFiltering:!0};a.empty(),b.empty(),allProperties.forEach(function(d,f){var e='<option value="'+d.id+'" >'+d.name+" | "+d.city+"</option>";a.append(e),b.append(e),f===allProperties.length-1&&(firedContactSelect=!0,$("#propertyInterested").multiselect(c),$("#propertyOwned").multiselect(c),$(".contact-form-wrap").removeClass("loading-form"))})}function change_captcha(){document.getElementById("captcha").src=GLOBAL_frontend_contact_us_captcha}$(document).ready(function(){$(".copy-url").click(function(b){var a;b.preventDefault(),document.querySelector(".js-copytextarea").select();try{document.execCommand("copy")}catch(c){}$(".notes-copied").addClass("active"),clearTimeout(a),a=setTimeout(function(){$(".notes-copied").removeClass("active")},2500)}),$(document).on("click",".pi-share",function(b){b.preventDefault();var c=$(this).data("url"),a=GLOBAL_app_request_schemeAndHttpHost+"/"+c;$("#share-url-fb").attr("href","https://www.facebook.com/sharer/sharer.php?u="+a),$("#share-url-twitter").attr("href","https://twitter.com/intent/tweet?url="+a),$("#input-share-url").val(a),$(".js-copytextarea").val(a),$("#a-share-url").attr("data-url",a),$.fancybox.open({src:"#share-info",autoSize:!1,toolbar:!0,gutter:20,touch:!1,fitToView:!1,clickContent:!1})}),initializeDefaultButtons(),loadCookies(),getCookie("DMCI_advisory"),"-1"==document.cookie.indexOf("advisoryCookie=here")&&($(".advisory-wrap").addClass("active"),1025>$(window).width()&&$("body").addClass("advisory"),$(".advisory-wrap .jq-close").click(function(b){b.preventDefault();var a=new Date;a=new Date(a.getTime()+864e5),document.cookie="advisoryCookie=here; expires="+a,$("body.advisory").removeClass("advisory"),$(".advisory-wrap").removeClass("active"),$(".advisory-wrap").addClass("hide")}),$(".advisory-wrap btn.btn-round").click(function(){var a=new Date;return a=new Date(a.getTime()+864e5),document.cookie="advisoryCookie=here; expires="+a,$("body.advisory").removeClass("advisory"),$(".advisory-wrap").removeClass("active"),$(".advisory-wrap").addClass("hide"),!0}))}),$(function(){getActivePropertiesJson()});var isBusyCaptcha=!1;$("img#refresh").click(function(){!1==isBusyCaptcha&&(isBusyCaptcha=!0,$("img#refresh").addClass("active"),setTimeout(function(){$("img#refresh").removeClass("active"),isBusyCaptcha=!1},300),change_captcha())}),$("#captchaerror-close").click(function(a){a.preventDefault(),$.fancybox.close("#captcha-error")});var firedContactSelect=!1;"frontend_single_property"!==GLOBAL_APP_REQUEST_GET?($(document).ready(function(){}),$(window).on("scroll",function(){if($(".contact-form-wrap").length>0){var a=window.innerHeight?window.innerHeight:$(window).height(),b=$(window).scrollTop(),c=$(".contact-form-wrap").offset(),d=c.top-a;b>=d&& !1==firedContactSelect&&populatePositions()}})):$(function(){var a={enableFiltering:!0,enableCaseInsensitiveFiltering:!0};$("#position-interested").multiselect(a),$("#propertyInterested").multiselect(a),$("#propertyOwned").multiselect(a)}),$(function(){getCookie("profile-set")||$.fancybox.open({src:"#cookie-preference",modal:!0,beforeShow:function(){$(".fancybox-bg").css({background:"rgba(255, 255, 255, 0.6)"})}})})

</script>

    <script rel="preload" src="/frontend/js/sticky-sidebar.js"></script>
    <script defer>

        var sidebar = new StickySidebar('.sticky', {
            topSpacing: 20,
            bottomSpacing: 20,
            containerSelector: '.manual-content',
            innerWrapperSelector: '.manual-filter'
          });

        $(document).ready(function(){
            //Stickyfill.add($('.sticky'));

            $('.manual-filter li h5 > a').click(function(e){
                e.preventDefault();

                $('.manual-filter li').removeClass('active');
                $(this).closest('li').addClass('active');
            });
        });


        $(window).on('resize load', function() {

            // News Masonry
            var $container = $('#testimonials-wrapper');

            //$container.imagesLoaded().progress(function() {
            $container.packery({
                itemSelector: '.grid-item',
                gutter: 0,
                resize: true,
                percentPosition: true
            });
        });

    </script>

    <script>

        var testimonialsPage = 1;

        function initGrid(){

            var testimonialsWrapper = $('#testimonials-wrapper');

            testimonialsWrapper.packery({
                itemSelector: '.grid-item',
                gutter: 0,
                percentPosition: true
            });


            $(window).on('resize load', function() {


                var testimonialsWrapper = $('#testimonials-wrapper');

                //$container.imagesLoaded().progress(function() {
                testimonialsWrapper.packery({
                    itemSelector: '.grid-item',
                    gutter: 0,
                    resize: true,
                    percentPosition: true
                });

            });

            $(window).on('resize', function() {


                var testimonialsWrapper = $('#testimonials-wrapper');

                testimonialsWrapper.packery({
                    itemSelector: '.grid-item',
                    gutter: 0,
                    percentPosition: true
                });

            });
        }

        function getTestimonials()
        {
            $.ajax({
                url: "/whats-new/json/testimonials?page=" + testimonialsPage,
                type: "GET",
                processData: false,
                success: function(data) {
                    populateTestimonials(data);
                }
            });
        }

        function populateTestimonials(data){
            let wrapper = $('#testimonials-wrapper');

            Object.keys(data).forEach(function (key, index) {

                let n = data[key];

                var addtionalClass = '';
                var featuredClass = 'article-min';

                if(index === 0){
                    if(testimonialsPage === 1) {
                        if(n.img !== undefined &&  n.img !== '') {
                            addtionalClass = 'grid-item--width2';
                            featuredClass = 'featured-article';
                        }
                    }
                }

                let append = '<div class="grid-item ' + addtionalClass + '" data-animation="fadeInUp">';
                if(n.img !== undefined && n.img !== '') {
                    append = append +
                        '                <article class="article-item ' + featuredClass + '">' +
                        '                    <figure class="article-img ">' +
                        '                        <a href="/whats-new/news/'+ n.slug +'" class="">' +
                        '                            <img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="/uploads/news/' + n.img  + '" alt="' + n.img + '">' +
                        '                        </a>' +
                        '                    </figure>';

                } else {
                    append = append +
                        '                <article class="article-item ' + featuredClass + ' no-image" >';
                }

                append = append + '                    <div class="article-info">' +

                    '                        <p class="tag">';

                if(n.property !== undefined){
                    append = append + '<a href="/' + n.property_url + '">' + n.property +'</a>';
                }

                if(n.csr === true) {
                    append = append + '<a href="#">Kaakbay</a>';
                }


                append = append + '</p>' +
                    '                        <h2 class="article-title"><a href="/whats-new/news/'+ n.slug +'">' + n.title +'</a></h2>'+
                    '                        <p class="date-published">' + n.date +'</p>'+
                    ' <div class="clr"></div>';

                if(n.copy){
                    append = append + '<p>' + n.copy + '...</p>';
                }

                append = append +
                    '                    </div>' +
                    '                </article>';

                append = append + '</div>';

                var $append = $(append);
                wrapper.append($append);

                // wrapper.imagesLoaded( function() {
                wrapper.packery( 'appended', $append );
                // });
            });


        }

        $(document).ready(function(e){
            initGrid();

            $('#show-more-testimonials').click(function(){
                testimonialsPage++;
                getTestimonials();
            });
        });
    </script>

    <script async>
    var GLOBAL_frontend_home_conversion_rate_json = "/conversion-rates/json";
    getCurrencies();function getCurrencies(){$.ajax({url:GLOBAL_frontend_home_conversion_rate_json,type:"GET",processData:!1,success:function(a){localStorage.setItem("conversion",JSON.stringify(a))}}).then(function(){convertCurrencies()})}
</script>


<script async>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"26169032"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>

<style>
        .embeddedServiceSidebar {
            z-index: 999999!important;
        }
        .embeddedServiceHelpButton .helpButton .uiButton {
            background-color: #005290;
            font-family: "Arial", sans-serif;
        }
        .embeddedServiceHelpButton .helpButton .uiButton:focus {
            outline: 1px solid #005290;
        }
</style>

<script type='text/javascript' src='https://service.force.com/embeddedservice/5.0/esw.min.js'></script>
<script type='text/javascript'>
            var initESW = function(gslbBaseURL) {
                embedded_svc.settings.displayHelpButton = true; //Or false
                embedded_svc.settings.language = ''; //For example, enter 'en' or 'en-US'



            //embedded_svc.settings.defaultMinimizedText = '...'; //(Defaults to Chat with an Expert)
                //embedded_svc.settings.disabledMinimizedText = '...'; //(Defaults to Agent Offline)



            //embedded_svc.settings.loadingText = ''; //(Defaults to Loading)
                //embedded_svc.settings.storageDomain = 'yourdomain.com'; //(Sets the domain for your deployment so that visitors can navigate subdomains during a chat session)



            // Settings for Chat
                //embedded_svc.settings.directToButtonRouting = function(prechatFormData) {
                    // Dynamically changes the button ID based on what the visitor enters in the pre-chat form.
                    // Returns a valid button ID.
                //};
                //embedded_svc.settings.prepopulatedPrechatFields = {}; //Sets the auto-population of pre-chat form fields
                //embedded_svc.settings.fallbackRouting = []; //An array of button IDs, user IDs, or userId_buttonId
                //embedded_svc.settings.offlineSupportMinimizedText = '...'; //(Defaults to Contact Us)



            embedded_svc.settings.enabledFeatures = ['LiveAgent'];
                embedded_svc.settings.entryFeature = 'LiveAgent';



            embedded_svc.init(
                    'https://dmcihomes4.my.salesforce.com',
                    'https://dmcihomes.secure.force.com/liveAgentSetupFlow',
                    gslbBaseURL,
                    '00D5g000000J3Js',
                    'WEB_CHAT',
                    {
                        baseLiveAgentContentURL: 'https://c.la1-core1.sfdc-mchho0.salesforceliveagent.com/content',
                        deploymentId: '5725g000000PHDZ',
                        buttonId: '573BL000000001h',
                        baseLiveAgentURL: 'https://d.la1-core1.sfdc-mchho0.salesforceliveagent.com/chat',
                        eswLiveAgentDevName: 'WEBCHAT_DELETETHIS',
                        isOfflineSupportEnabled: true
                    }
                );
            };



            if (!window.embedded_svc) {
                var s = document.createElement('script');
                s.setAttribute('src', 'https://dmcihomes4.my.salesforce.com/embeddedservice/5.0/esw.min.js');
                s.onload = function() {
                    initESW(null);
                };
                document.body.appendChild(s);
            } else {
                initESW('https://service.force.com');
            }
        </script>


<script async>
    var onloadCallback = function() {
            grecaptcha.render('captchacode', {
              'sitekey' : '6LcKHRwiAAAAAPmLGJqTqV37DxkqG59azLwp8v6-'
            });
      };
      setTimeout(function(){

          var body = document.getElementsByTagName('body')[0]
          var script = document.createElement('script')
          script.type = 'text/javascript';
          script.src = 'https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit'
          body.appendChild(script);
          console.log("est");
      }, 5000);

</script>
</body>
</html>
