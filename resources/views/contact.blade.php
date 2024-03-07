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
                                        <input id="rf-buy" type="radio" value="buy" name="as-radio" checked="true">
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
                                        <input id="tp-highrise" type="checkbox" class="advance-dev-type-cb" name="development_type[]" value="2">
                                        <label for="tp-highrise">High Rise Condominiums</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tp-midrise" type="checkbox" class="advance-dev-type-cb" name="development_type[]" value="3">
                                        <label for="tp-midrise">Mid Rise Condominiums</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tp-sub" type="checkbox" class="advance-dev-type-cb" name="development_type[]" value="4">
                                        <label for="tp-sub">Subdivisions</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tp-leisure" type="checkbox" class="advance-dev-type-cb" name="development_type[]" value="5">
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
                                        <input id="bare-unit-input" type="checkbox" class="advance-furnish-type-cb" name="furnished_type[]" value="BARE UNIT">
                                        <label for="bare-unit-input">Bare Unit</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="semi-furnished-input" type="checkbox" class="advance-furnish-type-cb" name="furnished_type[]" value="SEMI-FURNISHED">
                                        <label for="semi-furnished-input">Semi Furnished</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="full-furnished-input" type="checkbox" class="advance-furnish-type-cb" name="furnished_type[]" value="FULLY FURNISHED">
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
                                        <input id="tu-studio" type="checkbox" class="advance-unit-type-cb" name="unit_type[]" value="1">
                                        <label for="tu-studio">Studio</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tu-1bed" type="checkbox" class="advance-unit-type-cb" name="unit_type[]" value="2">
                                        <label for="tu-1bed">1 Bedroom</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tu-2bed" type="checkbox" class="advance-unit-type-cb" name="unit_type[]" value="3">
                                        <label for="tu-2bed">2 Bedroom</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tu-3bed" type="checkbox" class="advance-unit-type-cb" name="unit_type[]" value="4">
                                        <label for="tu-3bed">3 Bedroom</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="tu-4bed" type="checkbox" class="advance-unit-type-cb" name="unit_type[]" value="5">
                                        <label for="tu-4bed">4 Bedroom</label>
                                    </div>
                                </li>
                                <li data-search-option="buy">
                                    <div class="custom-checkbox">
                                        <input id="tu-b-house" type="checkbox" class="advance-unit-type-cb" name="unit_type[]" value="6">
                                        <label for="tu-b-house">Loft</label>
                                    </div>
                                </li>
                                <li data-search-option="buy">
                                    <div class="custom-checkbox">
                                        <input id="tu-2s-house" type="checkbox" class="advance-unit-type-cb sdv" name="unit_type[]" value="7">
                                        <label for="tu-2s-house">House &amp; Lot</label>
                                    </div>
                                </li>
                                <li data-search-option="buy">
                                    <div class="custom-checkbox">
                                        <input id="tu-lot" type="checkbox" class="advance-unit-type-cb sdv" name="unit_type[]" value="8">
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
                                    <div class="noUiSlider noUi-target noUi-ltr noUi-horizontal noUi-background" id="noUiSlider-budget-2"><div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
                                    <input type="hidden" id="budget-min-price-2" name="budget_fm" class="price_fm">
                                    <input type="hidden" id="budget-max-price-2" name="budget_to" class="price_to">
                                    <p class="pricing-label clear">
                                        <label class="pl-1 fl" for="" style="left: -12px; font-family: 'Arial', 'Helvetica', sans-serif !important;"><span>P </span> <span id="budget-min-price-label-2">5</span><span>,000</span></label>
                                        <label class="pl-3 fr" for="" style="left: auto; right: -18px; font-family: 'Arial', 'Helvetica', sans-serif !important;"><span>P </span> <span id="budget-max-price-label-2">90</span><span> 000</span></label>
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
                                            <option value="0"><span data-value="0" class="currency-convert">PHP 0</span> M</option><option value="1"><span data-value="1" class="currency-convert">PHP 1</span> M</option><option value="2"><span data-value="2" class="currency-convert">PHP 2</span> M</option><option value="3"><span data-value="3" class="currency-convert">PHP 3</span> M</option><option value="4"><span data-value="4" class="currency-convert">PHP 4</span> M</option><option value="5"><span data-value="5" class="currency-convert">PHP 5</span> M</option><option value="6"><span data-value="6" class="currency-convert">PHP 6</span> M</option><option value="7"><span data-value="7" class="currency-convert">PHP 7</span> M</option><option value="8"><span data-value="8" class="currency-convert">PHP 8</span> M</option><option value="9"><span data-value="9" class="currency-convert">PHP 9</span> M</option><option value="10"><span data-value="10" class="currency-convert">PHP 10</span> M</option><option value="11"><span data-value="11" class="currency-convert">PHP 11</span> M</option><option value="12"><span data-value="12" class="currency-convert">PHP 12</span> M</option><option value="13"><span data-value="13" class="currency-convert">PHP 13</span> M</option><option value="14"><span data-value="14" class="currency-convert">PHP 14</span> M</option><option value="15"><span data-value="15" class="currency-convert">PHP 15</span> M</option><option value="16"><span data-value="16" class="currency-convert">PHP 16</span> M</option><option value="17"><span data-value="17" class="currency-convert">PHP 17</span> M</option><option value="18"><span data-value="18" class="currency-convert">PHP 18</span> M</option><option value="19"><span data-value="19" class="currency-convert">PHP 19</span> M</option><option value="20"><span data-value="20" class="currency-convert">PHP 20</span> M</option></select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="">Max Price</label>
                                        <div class="custom-select">
                                            <label for="max-price"></label>
                                            <select name="" id="max-price-select">
                                            <option value="1"><span data-value="1" class="currency-convert">PHP 1</span> M</option><option value="2"><span data-value="2" class="currency-convert">PHP 2</span> M</option><option value="3"><span data-value="3" class="currency-convert">PHP 3</span> M</option><option value="4"><span data-value="4" class="currency-convert">PHP 4</span> M</option><option value="5"><span data-value="5" class="currency-convert">PHP 5</span> M</option><option value="6"><span data-value="6" class="currency-convert">PHP 6</span> M</option><option value="7"><span data-value="7" class="currency-convert">PHP 7</span> M</option><option value="8"><span data-value="8" class="currency-convert">PHP 8</span> M</option><option value="9"><span data-value="9" class="currency-convert">PHP 9</span> M</option><option value="10"><span data-value="10" class="currency-convert">PHP 10</span> M</option><option value="11"><span data-value="11" class="currency-convert">PHP 11</span> M</option><option value="12"><span data-value="12" class="currency-convert">PHP 12</span> M</option><option value="13"><span data-value="13" class="currency-convert">PHP 13</span> M</option><option value="14"><span data-value="14" class="currency-convert">PHP 14</span> M</option><option value="15"><span data-value="15" class="currency-convert">PHP 15</span> M</option><option value="16"><span data-value="16" class="currency-convert">PHP 16</span> M</option><option value="17"><span data-value="17" class="currency-convert">PHP 17</span> M</option><option value="18"><span data-value="18" class="currency-convert">PHP 18</span> M</option><option value="19"><span data-value="19" class="currency-convert">PHP 19</span> M</option><option value="20"><span data-value="20" class="currency-convert">PHP 20</span> M</option></select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-range">
                                <div class="noUiSlider noUi-target noUi-ltr noUi-horizontal noUi-background" id="noUiSlider-1"><div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
                                <input type="hidden" id="qs-min-price-1" name="price_fm" class="price_fm">
                                <input type="hidden" id="qs-max-price-1" name="price_to" class="price_to">
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
                            <h2>Near this Location</h2>
                            <input data-fancybox-loc="" data-src="#map-pin" type="text" name="advance-location" id="advance-search-location" class="location-autocomple" placeholder="Any Location" readonly="">
                            <button data-fancybox-loc="" data-src="#map-pin">
                                <!-- <i class="icon-home icon-pin-locator"></i> <span>Use<br>Pin</span> -->
                                <img src="{{asset('images/map-marker-white.png')}}" alt="">
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
                                        <input id="cs-new" type="checkbox" class="advance-status-cb" name="status[]" value="1">
                                        <label for="cs-new"><span class="icon icon-new"></span> New</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="cs-rfo" type="checkbox" class="advance-status-cb" name="status[]" value="2">
                                        <label for="cs-rfo"><span class="icon icon-RFO"></span> Ready for Occupancy</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="cs-uc" type="checkbox" class="advance-status-cb" name="status[]" value="3">
                                        <label for="cs-uc"><span class="property-status">
                                            <i class="icon-under-construction"></i></span> Under Construction</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="custom-checkbox">
                                        <input id="cs-cs" type="checkbox" class="advance-status-cb" name="status[]" value="4">
                                        <label for="cs-cs"><span class="icon icon-coming-soon"></span>
                                            Coming Soon</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="input-wrap text-center not-this">
                    <button id="advance-search-button" data-search-option="buy" class="btn btn-large btn-round btn-green disabled">Search</button>
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
            <li><a href="#" class="btn btn-round btn-ghost sidebar-location-all active" data-location="all">View All</a></li><li><a href="https://www.dmcihomes.com/condo-antipolo" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Antipolo City">Antipolo City</a></li><li><a href="https://www.dmcihomes.com/condo-bacoor" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Bacoor">Bacoor</a></li><li><a href="https://www.dmcihomes.com/condo-baguio" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Baguio City">Baguio City</a></li><li><a href="https://www.dmcihomes.com/condo-cabuyao-laguna" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Cabuyao, Laguna">Cabuyao, Laguna</a></li><li><a href="https://www.dmcihomes.com/condo-caloocan" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Caloocan">Caloocan</a></li><li><a href="https://www.dmcihomes.com/condo-carmona" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Carmona">Carmona</a></li><li><a href="https://www.dmcihomes.com/condo-cavite-city" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Cavite City">Cavite City</a></li><li><a href="https://www.dmcihomes.com/condo-cebu-city" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Cebu City">Cebu City</a></li><li><a href="https://www.dmcihomes.com/condo-davao" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Davao City">Davao City</a></li><li><a href="https://www.dmcihomes.com/condo-las-pinas" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Las Piñas">Las Piñas</a></li><li><a href="https://www.dmcihomes.com/condo-makati" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Makati">Makati</a></li><li><a href="https://www.dmcihomes.com/condo-malay" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Malay">Malay</a></li><li><a href="https://www.dmcihomes.com/condo-mandaluyong" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Mandaluyong">Mandaluyong</a></li><li><a href="https://www.dmcihomes.com/condo-manila" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Manila">Manila</a></li><li><a href="https://www.dmcihomes.com/condo-muntinlupa" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Muntinlupa">Muntinlupa</a></li><li><a href="https://www.dmcihomes.com/condo-paranaque" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Parañaque">Parañaque</a></li><li><a href="https://www.dmcihomes.com/condo-pasay" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Pasay">Pasay</a></li><li><a href="https://www.dmcihomes.com/condo-pasig" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Pasig">Pasig</a></li><li><a href="https://www.dmcihomes.com/condo-quezon-city" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Quezon City">Quezon City</a></li><li><a href="https://www.dmcihomes.com/condo-san-juan-batangas" class="btn btn-round btn-ghost sidebar-location-filter" data-location="San Juan, Batangas">San Juan, Batangas</a></li><li><a href="https://www.dmcihomes.com/condo-santa-rosa-laguna" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Santa Rosa City, Laguna">Santa Rosa City, Laguna</a></li><li><a href="https://www.dmcihomes.com/condo-taguig" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Taguig">Taguig</a></li><li><a href="https://www.dmcihomes.com/condo-tuba-benguet" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Tuba, Benguet">Tuba, Benguet</a></li></ul>
            <p>Can't see what your looking for?</p>
            <a href="/properties" class="btn btn-round btn-small">View all <span> Properties</span></a>
        </div>
    </div>
</div>
        <section id="main-wrapper">
        <section class="banner wavy default" id="overview">
            <picture class="coverimage-img">
                <source data-srcset="{{ asset('images/hero-shd.png')}}" media="(min-width: 570px)" srcset="{{ asset('images/hero-shd.png')}}">
                <source data-srcset="{{ asset('images/hero-shd.png')}}" media="(min-width: 320px)" srcset="{{ asset('images/hero-shd.png')}}">
                <img class=" lazyloaded" data-src="{{ asset('images/hero-shd.png')}}" width="1440" height="330" alt="MDN" src="{{ asset('images/hero-shd.png')}}" >
            </picture>
            <div class="banner-text">
                <div class="container">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </section>

        <section class="sec-pad contact-us" id="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-form-wrap" id="contact-form">
                            <form method="POST" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" id="multi-type-inquiry">
                                                                <input type="hidden" name="oid" value="00D5g000000J3Js">
                                <input type="hidden" name="lead_source" value="Website">
                                <input type="hidden" name="retURL" value="https://www.dmcihomes.com/thank-you">
                                <!--<input type="hidden" name="debug" value=1>
                                <input type="hidden" name="debugEmail" value="robbie.ko@afdigital.com">-->
                                <!-- <div class="contact-form-wrap"> -->
                                    <!-- <div class="sec-head">
                                        <h4>What can we help you with?</h4>
                                    </div> -->
                                    <div class="input-wrap inquiry-wrap">
                                        <label for="00N5g000003tIus">What can we help you with? <span class="required-field">*</span></label>
                                        <div class="custom-select">
                                            <!--<label for="inquiry-type"></label>-->
                                            <select id="00N5g000003tIus" name="00N5g000003tIus" title="Inquiry Type">
                                                <option value="Sales Inquiry" selected="">Sales Inquiry</option>
                                                <option value="Customer Care Concern">Customer Care Concern</option>
                                                <option value="Leasing Inquiry">Leasing Inquiry</option>
                                                <!--<option value="Careers">Careers</option>-->
                                                <option value="Other Concerns">Other Concerns</option>
                                            </select>
                                        </div>
                                        <div class="clr"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-wrap">
                                                <label for="first_name">First Name <span class="required-field">*</span></label>
                                                <input id="first_name" name="first_name" type="text">
                                                <p class="error-message">This field is required.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-wrap">
                                                <label for="last_name">Last Name <span class="required-field">*</span></label>
                                                <input id="last_name" name="last_name" type="text">
                                                <p class="error-message">This field is required.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-wrap">
                                                <label for="email">Email <span class="required-field">*</span></label>
                                                <input id="email" name="email" type="email">
                                                <p class="error-message">Input a valid email address (eg. juan@gmail.com)</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-wrap">
                                                <label for="00N5g000003tnlz">Contact Number <span class="required-field">*</span></label>
                                                <input id="00N5g000003tnlz" name="00N5g000003tnlz" onkeypress="return event.charCode === 0 || /[\d-+=,()]/.test(String.fromCharCode(event.charCode));" type="tel" maxlength="15">
                                                <p class="error-message">Input a valid mobile or landline number.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="input-wrap">
                                                <label for="00N5g000003tnOR">Country <span class="required-field">*</span></label>
                                                <div class="custom-select">
                                                    <select id="00N5g000003tnOR" name="00N5g000003tnOR" title="Country">
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                                                        <option value="Congo, Republic of the">Congo, Republic of the</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea, North">Korea, North</option>
                                                        <option value="Korea, South">Korea, South</option>
                                                        <option value="Kosovo">Kosovo</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macedonia">Macedonia</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines" selected="">Philippines</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Sudan">South Sudan</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="The Bahamas">The Bahamas</option>
                                                        <option value="The Gambia">The Gambia</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States of America">United States of America</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican City (Holy See)">Vatican City (Holy See)</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                                <!-- <input type="text" name="country" id="country" placeholder="eq. Philippines"> -->
                                                <!--input type="text" value="" /-->
                                                <p class="error-message">This field is required.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-wrap">
                                                <label for="00N5g000003tIux">Province<span class="required-field">*</span></label>
                                                <input id="00N5g000003tIux" name="00N5g000003tIux" type="text">
                                                <!-- input type="text" value="" /-->
                                                <p class="error-message">This field is required.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">

                                            <div class="input-wrap">
                                                <label for="00N5g000003tnnR">Town / City <span class="required-field">*</span></label>
                                                <input id="00N5g000003tnnR" name="00N5g000003tnnR" type="text">
                                                <p class="error-message">This field is required.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 inquiry-condition">
                                            <div class="input-wrap">
                                                <label for="00N5g000009mqi9" class="inquiry-label" data-inquiry="customer-care" style="display: none;">Property Owned: <span class="required-field">*</span></label>
                                                <label for="00N5g000009mqi9" class="inquiry-label" data-inquiry="sales">Property Inquired: <span class="required-field">*</span></label>
                                                <div class="custom-select">
                                                    <select id="00N5g000009mqi9" name="00N5g000009mqi9" title="Property Inquired">
                                                        <option value="Accolade Place">Accolade Place</option>
                                                        <option value="Alder Residences">Alder Residences</option>
                                                        <option value="Alea Residences">Alea Residences</option>
                                                        <option value="Allegra Garden Place">Allegra Garden Place</option>
                                                        <option value="Alta Vista de Boracay">Alta Vista de Boracay</option>
                                                        <option value="Arista Place">Arista Place</option>
                                                        <option value="Asteria Residences">Asteria Residences</option>
                                                        <option value="The Aston Place">The Aston Place</option>
                                                        <option value="Belleza Towers">Belleza Towers</option>
                                                        <option value="Bonifacio Heights Condominiums">Bonifacio Heights Condominiums</option>
                                                        <option value="Brio Tower">Brio Tower</option>
                                                        <option value="Bristle Ridge">Bristle Ridge</option>
                                                        <option value="Brixton Place">Brixton Place</option>
                                                        <option value="Calathea Place">Calathea Place</option>
                                                        <option value="Cardea Terraces">Cardea Terraces</option>
                                                        <option value="Cedar Crest Condominiums">Cedar Crest Condominiums</option>
                                                        <option value="Cameron Residences">Cameron Residences</option>
                                                        <option value="Cypress Towers">Cypress Towers</option>
                                                        <option value="Dansalan Gardens Condominiums">Dansalan Gardens Condominiums</option>
                                                        <option value="East Ortigas Mansions">East Ortigas Mansions</option>
                                                        <option value="East Raya Gardens">East Raya Gardens</option>
                                                        <option value="Fairlane Residences">Fairlane Residences</option>
                                                        <option value="Flair Towers">Flair Towers</option>
                                                        <option value="Fortis Residences">Fortis Residences</option>
                                                        <option value="Fairway Terraces">Fairway Terraces</option>
                                                        <option value="Hampstead Garden Condominiums">Hampstead Garden Condominiums</option>
                                                        <option value="Infina Towers">Infina Towers</option>
                                                        <option value="Illumina Residences Manila">Illumina Residences Manila</option>
                                                        <option value="Ivory Wood">Ivory Wood</option>
                                                        <option value="Kai Garden Residences">Kai Garden Residences</option>
                                                        <option value="Kalea Heights">Kalea Heights</option>
                                                        <option value="La Verti Residences">La Verti Residences</option>
                                                        <option value="Lakeview Manors">Lakeview Manors</option>
                                                        <option value="Levina Place">Levina Place</option>
                                                        <option value="Lumiere Residences">Lumiere Residences</option>
                                                        <option value="Lyre Garden Residences">Lyre Garden Residences</option>
                                                        <option value="Magnolia Place">Magnolia Place</option>
                                                        <option value="Mahogany Place">Mahogany Place</option>
                                                        <option value="Mahogany Place 2">Mahogany Place 2</option>
                                                        <option value="Mahogany Place 3">Mahogany Place 3</option>
                                                        <option value="Maple Place">Maple Place</option>
                                                        <option value="Maricielo Villas">Maricielo Villas</option>
                                                        <option value="Mayfield Park Residences">Mayfield Park Residences</option>
                                                        <option value="Mirea Residences">Mirea Residences</option>
                                                        <option value="Moncello Crest">Moncello Crest</option>
                                                        <option value="Morning Sun Townhomes">Morning Sun Townhomes</option>
                                                        <option value="Mulberry Place">Mulberry Place</option>
                                                        <option value="Oak Harbor Residences">Oak Harbor Residences</option>
                                                        <option value="Ohana Place">Ohana Place</option>
                                                        <option value="Olea Estates">Olea Estates</option>
                                                        <option value="One Castilla Place">One Castilla Place</option>
                                                        <option value="Outlook Ridge Residences">Outlook Ridge Residences</option>
                                                        <option value="Palm Grove">Palm Grove</option>
                                                        <option value="Parama Residences">Parama Residences</option>
                                                        <option value="Prisma Residences">Prisma Residences</option>
                                                        <option value="Rainbow Ridge Condominiums">Rainbow Ridge Condominiums</option>
                                                        <option value="Raya Garden Condominiums">Raya Garden Condominiums</option>
                                                        <option value="Rhapsody Residences">Rhapsody Residences</option>
                                                        <option value="Riverfront Residences">Riverfront Residences</option>
                                                        <option value="Rosewood Pointe">Rosewood Pointe</option>
                                                        <option value="Royal Palm Residences">Royal Palm Residences</option>
                                                        <option value="Sage Residences">Sage Residences</option>
                                                        <option value="Satori Residences">Satori Residences</option>
                                                        <option value="Sheridan Towers">Sheridan Towers</option>
                                                        <option value="Siena Park Residences">Siena Park Residences</option>
                                                        <option value="Solmera Coast">Solmera Coast</option>
                                                        <option value="Sonora Garden Residences">Sonora Garden Residences</option>
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
                                                        <option value="The Manors at Celebrity Place">The Manors at Celebrity Place</option>
                                                        <option value="The Orabella">The Orabella</option>
                                                        <option value="The Oriana">The Oriana</option>
                                                        <option value="The Redwoods">The Redwoods</option>
                                                        <option value="The Valeron Tower">The Valeron Tower</option>
                                                        <option value="Tivoli Garden Residences">Tivoli Garden Residences</option>
                                                        <option value="Torre de Manila">Torre de Manila</option>
                                                        <option value="Verawood Residences">Verawood Residences</option>
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
                                                <p class="error-message">Please select a property.</p>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-wrap">
                                                <label for="00N5g000003tIvCEAU">Message <span class="required-field">*</span></label>
                                                <textarea id="00N5g000003tIvCEAU" name="00N5g000003tIvCEAU" placeholder="Type your message here" wrap="soft"></textarea>
                                                <p class="error-message">This field is required.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-wrap new-recaptcha-wrap">
                                        <!-- <label for="">Prove you're not a robot.</label> -->
                                                                                <div id="captchacode"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-1my640kzpc3g" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcKHRwiAAAAAPmLGJqTqV37DxkqG59azLwp8v6-&amp;co=aHR0cHM6Ly93d3cuZG1jaWhvbWVzLmNvbTo0NDM.&amp;hl=en&amp;v=1kRDYC3bfA-o6-tsWzIBvp7k&amp;size=normal&amp;cb=rvwkgmdyi4x"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                                        <div class="error-message">
                                            <p>Please verify that you are not a robot.<span>*</span></p>
                                        </div>
                                    </div>

                                    <div class="notes policy">
                                        <ul class="flex check wide">
                                            <li>
                                                <div class="custom-checkbox input-wrap data-privacy">
                                                    <input type="checkbox" id="agreedToDPA" name="agreedToDpa">
                                                    <label for="agreedToDPA"><span class="required-field">*</span> I agree to the DMCI Homes <a data-fancybox="" data-src="#privacy-policy"><strong>Privacy Policy</strong></a> as guided by RA10173 or the Philippine Data Privacy Act of 2012.</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="custom-checkbox input-wrap data-privacy">
                                                    <input type="checkbox" id="allowedCRF" name="allowedCRF" value="yes">
                                                    <label for="allowedCRF">I am allowing DMCI Homes’ Corporate Accounts Management group to be my official sales representative for the next 30 days. The group will exclusively be responsible for any of my inquiries and processes needed, should I decide to make a reservation/purchase.
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="input-wrap" id="all-field">
                                        <button type="submit" class="btn btn-round btn-green btn-large" id="submit-contact-form">Submit</button>
                                        <p class="error-message">Please fill up the required field correctly.</p>
                                    </div>


                                <!-- </div> -->
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4">
                            <div class="whistleblower">
                                <div class="sec-head">
                                    <h4 for="">Whistleblower</h4>
                                </div>
                                <div class="input-wrap">
                                    <p>Have you encountered any malpractice or misconduct by our company officers/employees? <a href="/contact-us/whistle-blower"><strong>Let us know</strong></a>.</p>
                                </div>
                                <hr>
                            </div>
                            <div class="office-contact m-t-40">
                                <div class="sec-head">
                                    <h4>Contact Information</h4>
                                </div>
                                <div class="input-wrap">
                                    <p><strong>Our Address:</strong></p>
                                    <p>DMCI Homes Corporate Center, 1321 Apolinario Street, Bangkal, Makati City, Metro Manila, PH 1233</p>
                                </div>

                                <div class="input-wrap">
                                    <p><strong>Business Hours:</strong></p>
                                    <p>Mondays to Fridays 8:00 am to 5:00 pm</p>
                                </div>

                                <div class="input-wrap">
                                    <p><strong>Set an Appointment</strong></p>
                                    <p><a href="https://book.dmcihomes.com/" target="_blank"><strong>book.dmcihomes.com</strong></a></p>
                                </div>

                                <div class="input-wrap">
                                    <p><strong>For Bank Financing</strong></p>
                                    <p>Manila - Bhing V. Nocos - <a href="tel:+639266470626"><strong>09266470626</strong></a></p>
                                    <p>Davao - Almira May O. Omar - <a href="tel:+639952112723"><strong>09952112723</strong></a></p>
                                </div>

                                <div class="input-wrap">
                                    <p><strong>For Local Sales Inquiries</strong></p>
                                    <p><a href="tel:+63 (2) 53248888">Tel: <strong>+63 (2) 53248888</strong></a></p>
                                    <p><a href="mailto:sales@dmcihomes.com">Email: <strong>sales@dmcihomes.com</strong></a></p>
                                </div>

                                <div class="input-wrap">
                                    <p><strong>For Customer Care Concerns</strong></p>
                                    <p><a href="mailto:sales@dmcihomes.com">Email: <strong>customercare@dmcihomes.com</strong></a></p>
                                    <p><a href="tel:+63285557700">Tel: <strong> +63 (2) 85557700</strong></a></p>
                                    <p><a href="tel:+639189183456">Mobile: <strong>(+63) 918 9183456 (SMART)</strong></a></p>
                                    <p><a href="tel:+639178115268">Mobile: <strong>(+63) 917 8115268 (GLOBE)</strong></a></p>
                                </div>
                                <div class="input-wrap">
                                    <p><strong>For Leasing Services</strong></p>
                                    <p><a href="tel:+63 (2) 84037368">Tel: <strong>+63 (2) 84037368</strong></a></p>
                                    <p><a href="mailto:leasing@dmcihomes.com">Email: <strong>leasing@dmcihomes.com</strong></a></p>
                                </div>
                                <div class="input-wrap">
                                    <p><strong>For Employment Inquiry</strong></p>
                                    <p><a href="tel:+63 (2) 85557777">Tel: <strong>+63 (2) 85557777</strong></a></p>
                                    <p><a href="mailto:careers@dmcihomes.com">Email: <strong>careers@dmcihomes.com</strong></a></p>
                                </div>

                                <div class="input-wrap">
                                    <p><strong>Other Inquiries</strong></p>
                                    <p><a href="tel:+63 (2) 85557777">Tel: <strong>+63 (2) 85557777</strong></a></p>
                                </div>

                                <div class="input-wrap">
                                    <p><strong>For Customer Care Davao Concerns (Verdon Parc)</strong></p>
                                    <p><a href="mailto:customercaredavao@dmcihomes.com">Email: <strong>customercaredavao@dmcihomes.com</strong></a></p>
                                    <p><a href="tel:0822970447">Tel: <strong>(082) 297-0447, local 109</strong></a></p>
                                    <p><a href="tel:+639985924529">Mobile: <strong>(+63) 998-592-4529</strong></a></p>
                                </div>

                                <div class="input-wrap">
                                    <p><strong>For Customer Care Exclusive (Oak Harbor Residences and Fortis Residences</strong></p>
                                    <p><a href="mailto:exclusivesupport@dmcihomes.com">Email: <strong>exclusivesupport@dmcihomes.com</strong></a></p>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </section>
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

<footer class="sec-pad sec-default" id="footer">
    <!-- <div class="slant-border slant-bot slant-blue slant-right"></div> -->
    <div class="bg-blue">
        <div class="container clearfix">

            <div class="footer-info fl">
                <figure class="logo">
                    <a href="#"><img class="lazyload" src="{{asset('images/lazyload.png')}}" data-src="{{asset('images/logo-dmci.png')}} " alt="DMCI Homes Logo" width="170" height="37"></a>
                </figure>
                <p>With skill, passion and dedication, we continue our quest in attaining engineering excellence in quality homebuilding and community development, that shall endure generations.</p>
            </div>
            <div class="footer-detail fl">
                <div class="row">
                    <div class="col-sm-5 footer-address">
                        <h4>Head Office</h4>

                        <p><a data-fancybox="" data-type="iframe" data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1930.9966604879698!2d121.0134147!3d14.5423746!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63ca380cdb6728d1!2sDMCI%20Homes%20Corporate%20Center!5e0!3m2!1sen!2sph!4v1570602301415!5m2!1sen!2sph" href="javascript:;" class="footer-map-link">DMCI Homes Corporate Center, 1321 Apolinario Street, Bangkal, Makati City, Metro Manila, PH 1233</a></p>
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
                                <a href="tel:+63 (2) 85557700">
                                    <label for="">Customer Care </label> +63 (2) 85557700
                                </a>
                            </li>
                            <li>
                                <a href="tel:+63 (2) 85557777">
                                    <label for="">Others</label> +63 (2) 85557777
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4 footer-link">
                        <h4>Links</h4>
                        <ul>
                            <li><a href="/about-us">About DMCI</a></li>
                            <li><a href="/properties">Properties</a></li>
                            <li><a href="/whats-new">What’s New</a></li>
                            <li><a href="/privacy-policy">Terms</a></li>
                            <li><a href="/privacy-policy">Privacy</a></li>
                        </ul>
                        <ul>
                            <li><a href="https://communities.dmcihomes.com/" target="_blank">Community</a></li>
                            <li><a href="https://leasing.dmcihomes.com/" target="_blank">Leasing</a></li>
                            <li><a href="/contact-us">Customer Care</a></li>
                            <li><a href="/sellers">Sellers</a></li>
                            <li><a href="/careers">Careers</a></li>
                            <li><a href="/site-map">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3 footer-social">
                        <h4>Social Links</h4>
                        <ul>
                            <li><a href="https://www.facebook.com/dmcihomesofficial"><span class="icon-home-2 icon-facebook"></span> <span class="fs-text">Facebook<span></span></span></a></li>
                            <li><a href="https://twitter.com/dmcihomes"><span class="icon-home-2 icon-twitter"></span> <span class="fs-text"> Twitter</span></a></li>
                            <li><a href="https://www.instagram.com/dmcihomesofficial"><span class="icon-home-2 icon-instagram"></span> <span class="fs-text">Instagram</span></a></li>
                            <li><a href="https://www.youtube.com/user/dmcihomesofficial"><span class="icon-home-2 icon-youtube"></span> <span class="fs-text">Youtube </span></a></li>

                            <li class="qq-wrap">
                                <a class="hide-mobile" data-fancybox-image-qr="" href="#qq-modal" data-caption="Scan the QR code">
                                    <figure><img class="lazyload" src="{{asset('images/lazyload.png')}}" data-src="{{asset('images/qr.png')}}" width="18" height="18" alt=""></figure>
                                    <span class="fs-text">QQ</span>
                                </a>


                                <a data-fancybox-image-qr="" data-src="#qq-brand" class="hide-desktop">
                                    <img class="lazyload" src="{{asset('images/lazyload.png')}}" data-src="{{asset('images/qq.png')}}" width="24" height="28" alt="">
                                </a>
                            </li>
                            <li class="wechat-wrap">
                                <a class="hide-mobile" data-fancybox-image-qr="" href="#wechat-modal" data-caption="Scan the QR code to add me on WeChat">
                                    <figure><img class="lazyload" src="{{asset('images/lazyload.png')}}" data-src="{{asset('images/we.png')}}" width="18" height="18" alt=""></figure>
                                    <span class="fs-text">WeChat</span>
                                </a>

                                <a data-fancybox-image-qr="" data-src="#wechat-brand" class="hide-desktop">
                                    <img class="lazyload" src="{{asset('images/lazyload.png')}}" data-src="{{asset('images/wechat.png')}}" width="34" height="40" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="qq-modal" class="read no-padding" style="display: none;">
        <div class="content">
            <div class="sec-head">
                <figure><img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="/frontend/images/qr-qq-large.webp" alt=""></figure>
                <p><strong>QQ ID : </strong> <a href="http://qm.qq.com/cgi-bin/qm/qr?k=9JbHHMYoo-WJw0_sWtnFQiaB8YZeXsyh">2456975737</a></p>
            </div>
        </div>
    </div>

    <div id="wechat-modal" class="read no-padding" style="display: none;">
        <div class="content">
            <div class="sec-head">
                <figure><img class="lazyload" src="{{asset('images/lazyload.png')}}" data-src="{{asset('images/we.png')}}" alt=""></figure>
                <p><strong>WeChat ID :</strong> <span>DMCI Homes Official</span></p>
            </div>
        </div>
    </div>

    <div id="qq-brand" class="read" style="display: none;">
        <div class="content">
            <div class="sec-head">

                <p><strong>QQ ID :</strong> <a href="http://qm.qq.com/cgi-bin/qm/qr?k=9JbHHMYoo-WJw0_sWtnFQiaB8YZeXsyh"><span>2456975737</span></a></p>
            </div>
        </div>
    </div>

    <div id="wechat-brand" class="read" style="display: none;">
        <div class="content">
            <div class="sec-head">
                <p><strong>WeChat ID :</strong> <span>DMCI Homes Official</span></p>
            </div>
        </div>
    </div>
</footer>


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
                <div class="loader-pin"><img src="{{asset('images/loading-idle.gif')}}" width="70" height="70"></div>
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
                    <textarea class="js-copytextarea" readonly=""></textarea>
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

    <link rel="preload" href="/frontend/css/contact-us.css" as="style">
    <link rel="stylesheet" href="/frontend/css/contact-us.css" media="all">
<script type="text/javascript" id="">-1==document.location.href.search("appspot.com")&&-1==document.referrer.search("appspot.com")&&!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1683067715278685");
fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1683067715278685&amp;ev=PageView&amp;noscript=1"></noscript>

<script type="text/javascript" id="">function getCookie(a){if(a=document.cookie.match(new RegExp("(^| )"+a+"\x3d([^;]+)")))return a[2]}var _gaCookie=getCookie("_ga");_gaCookie=_gaCookie.split(".");var _middle=_gaCookie.length-2,_last=_gaCookie.length-1,_gaClientId=_gaCookie[_middle]+"."+_gaCookie[_last];window.dataLayer=window.dataLayer||[];window.dataLayer.push({GAClientID:_gaClientId});</script>
    <style>
        .contact-form-wrap .custom-select:after {
            content: '';
            position: absolute;
            right: 15px;
            top: 15px;
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-top: 8px solid #ccc;
        }
    </style>


    <script src="/frontend/js/optimized/jquery.js"></script>
<script src="/frontend/js/optimized/bundle.js"></script>

<script defer="">

   var GLOBAL_frontend_get__properties_json = "/get/properties/json";
    var GLOBAL_app_request_schemeAndHttpHost = "https://www.dmcihomes.com";
    var GLOBAL_countries_json = "/frontend/js/countries.json";
    var GLOBAL_careers_position_json = "/json/positions.json";
    var GLOBAL_frontend_contact_us_captcha = "/contact-us/captcha/generate";
    var GLOBAL_APP_REQUEST_GET = "frontend_contact_us";

    "use strict";var map,locationMap,positionMarker,locationMarker,geocoder,cookieSetupLoc,newCookieValue,activeProperties=[],allProperties=[],propertyLocation=[],selectedLocation=[],currencies={},currentLocation={lat:"",lng:""},prefCities=[],optionCities=[],locationEnabled=!1,popUpLocationValue={name:"",lat:"",lng:"",complete_address:""},autoCompleteLocationValue={name:"",lat:"",lng:"",complete_address:""};function getActivePropertiesJson(){$.ajax({url:GLOBAL_frontend_get__properties_json,type:"GET",processData:!1,success:function(a){Object.keys(a).forEach(function(b){let c=a[b];allProperties.push(c)}),activeProperties=allProperties.reduce(function(a,c){var b=c.city;return a[b]=a[b]||[],a[b].push(c),a},{});var c=[];allProperties.forEach(function(a){c[a.city]=a.city_slug});var b=$("#sidebar-property-modal-location-list");b.append('<li><a href="#" class="btn btn-round btn-ghost sidebar-location-all active" data-location="all">View All</a></li>'),Object.keys(activeProperties).forEach(function(a){propertyLocation.push(a)}),propertyLocation.sort(),propertyLocation.forEach(function(a){var d=c[a];b.append('<li><a href="'+GLOBAL_app_request_schemeAndHttpHost+"/"+d+'" class="btn btn-round btn-ghost sidebar-location-filter" data-location="'+a+'">'+a+"</a></li>")}),$(".sidebar-location-all").click(function(){selectedLocation=null,loadAllProperties(),$(".sidebar-location-filter").removeClass("active"),$(this).addClass("active")}),$(".sidebar-location-filter").click(function(a){a.preventDefault(),populateSidebarProperties(selectedLocation=$(this).data("location")),$(".sidebar-location-all").removeClass("active"),$(".sidebar-location-filter").removeClass("active"),$(this).addClass("active")})}})}function populateSidebarProperties(a){var b=activeProperties[a],c=$("#sidebar-property-list");c.empty(),$("#sidebar-property-header").text('Properties around "'+a+'".'),b.sort(),b.forEach(function(a){var b="coming-soon",d="cs",e=Number(a.price_range[0].min_price),f=Number(a.price_range[0].max_price);1===a.status?(b="new",d="new"):2===a.status?(b="RFO",d="rfo"):3===a.status&&(b="under-construction",d="uc");var g='<span data-value="'+e+'" class="currency-convert">'+e+'</span> - <span data-value="'+f+'" class="currency-convert">'+f+"</span>";0==a.is_unit_activated&&(g="<span>NOT YET AVAILABLE</span>");var h='<li class="box-card">                <div class="property-item">                    <a href="/'+a.slug+'">                        <figure class="property-img">                            <img class="lazyload" src="frontend/images/page_template/lazyload.png" data-src="'+a.image+'" alt="">                                <span class="property-status circle-white">                                    <span class="'+d+" icon-"+b+'"></span>                                </span>                        </figure>                        <div class="property-detail">                            <h3>'+a.name+'</h3>                            <p class="price">'+g+"</p>                        </div>                    </a>                </div>            </li>";c.append(h),convertCurrencies()})}function loadAllProperties(){var a=$("#sidebar-property-list");a.empty(),$("#sidebar-property-header").text("Viewing all properties."),allProperties.forEach(function(b){var c="coming-soon",d="cs",e=Number(b.price_range[0].min_price),f=Number(b.price_range[0].max_price);1===b.status?(c="new",d="new"):2===b.status?(c="RFO",d="rfo"):3===b.status&&(c="under-construction",d="uc");var g='<span data-value="'+e+'" class="currency-convert">'+e+'</span> - <span data-value="'+f+'" class="currency-convert">'+f+"</span>";0==b.is_unit_activated&&(g="<span>NOT YET AVAILABLE</span>");var h='<li class="box-card">                <div class="property-item">                    <a href="/'+b.slug+'">                        <figure class="property-img">                            <img class="lazyload" src="frontend/images/page_template/lazyload.png" data-src="'+b.image+'" alt="">                                <span class="property-status circle-white">                                    <span class="'+d+" icon-"+c+'"></span>                                </span>                        </figure>                        <div class="property-detail">                            <h3>'+b.name+'</h3>                            <p class="price">'+g+"</p>                        </div>                    </a>                </div>            </li>";a.append(h)})}function initializeDefaultButtons(){$("#property-sidebar-list-button").click(function(a){a.preventDefault(),loadAllProperties(),convertCurrencies()}),$("#save-profile").click(function(a){a.preventDefault();var b=$("#pop-up-looking-select").val(),c=JSON.stringify(popUpLocationValue),d=$("#pop-up-currency-select").val(),e=$("#pop-up-language-select").val(),f=$("#pop-up-measure-select").val();setCookie("profile-lookingFor",b,31),setCookie("profile-locatedNear",c,31),setCookie("profile-currency",d,31),setCookie("profile-language",e,31),setCookie("profile-measure",f,31),setCookie("profile-set",!0,31),$.fancybox.close("#cookie-preference"),loadCookies(),$(".hamburger-menu").hasClass("active")&&$(".hamburger-menu").click(),convertMeasures(),convertDistances(),convertCurrencies()}),$("#done-location-search").click(function(a){a.preventDefault(),setCookie("profile-locatedNear",JSON.stringify(autoCompleteLocationValue),31),$.fancybox.close("#map-pin"),loadCookies()}),$("#clear-location-search").click(function(a){a.preventDefault(),autoCompleteLocationValue=void 0,$("#search-location-autocomplete").val("").focus(),$("#header-search-location-field").val(""),$("#advance-search-location").val("")}),$("#skip-profile").click(function(a){a.preventDefault(),setCookie("profile-set",!0,31),setCookie("profile-measure",$("#pop-up-measure-select").val(),31),$.fancybox.close("#cookie-preference")}),$(".pop-up-trigger").click(function(a){$.fancybox.open({src:"#cookie-preference",clickContent:!1,beforeShow:function(){$(".fancybox-bg").css({background:"rgba(255, 255, 255, 0.6)"})}})}),$("#advance-search-button").click(function(g){g.preventDefault();var h=$(".advance-status-cb:checked"),i=$(".advance-unit-type-cb:checked"),j=$(".advance-dev-type-cb:checked"),a=[];h.each(function(c,b){a.push(b.value)});var b=[];i.each(function(c,a){b.push(a.value)});var c=[];j.each(function(b,a){c.push(a.value)});var k=currentLocation.lat,l=currentLocation.lng,d=$("#min-price-select").val(),e=$("#max-price-select").val(),f=$("#advance-search-location").val();""===f?window.location="/property-finder?search=advance&min="+d+"&max="+e+"&type="+b.toString()+"&dev="+c.toString()+"&status="+a.toString()+"&location=any":window.location="/property-finder?search=advance&lat="+k+"&lng="+l+"&min="+d+"&max="+e+"&type="+b.toString()+"&dev="+c.toString()+"&status="+a.toString()+"&address="+f}),$(".advance-dev-type-cb").change(function(){4==$(this).val()&&$(".advance-dev-type-cb[value=4]").is(":checked")?$(".sdv").prop("disabled",!1):$(".advance-dev-type-cb[value=4]").is(":checked")||$(".sdv").prop("disabled",!0)});var a=!1,b=!1,c=!1;$(".ads-types input[type=checkbox]").change(function(){var d="";$(".ads-types input[type=checkbox]").each(function(){d+=this.checked?"1,":"0,"}),(d=d.substr(0,d.length-1)).indexOf("1")> -1?(b=!0,a&&b&&c&&$("#advance-search-button").removeClass("disabled")):(b=!1,$("#advance-search-button").addClass("disabled"))}),$(".ads-unit-type input[type=checkbox]").change(function(){var d="";$(".ads-unit-type input[type=checkbox]").each(function(){d+=this.checked?"1,":"0,"}),(d=d.substr(0,d.length-1)).indexOf("1")> -1?(a=!0,b&&c&&$("#advance-search-button").removeClass("disabled")):(a=!1,$("#advance-search-button").addClass("disabled"))}),$(".fa-status-list input[type=checkbox]").change(function(){var d="";$(".fa-status-list input[type=checkbox]").each(function(){d+=this.checked?"1,":"0,"}),(d=d.substr(0,d.length-1)).indexOf("1")> -1?(c=!0,a&&b&&c&&$("#advance-search-button").removeClass("disabled")):(c=!1,$("#advance-search-button").addClass("disabled"))}),$(".slider-advisory").owlCarousel({loop:!0,item:1,margin:10,nav:!1,dots:!1,autoplay:!0,autoplayTimeout:7e3,autoplayHoverPause:!0,responsive:{0:{items:1},600:{items:1},1e3:{items:1}}})}function loadCookies(){getCookie("profile-lookingFor");var a,b=getCookie("profile-locatedNear"),c=getCookie("profile-currency"),e=getCookie("profile-language"),d=getCookie("profile-measure");""===d&&(setCookie("profile-measure",$("#pop-up-measure-select").val(),31),d=getCookie("profile-measure")),(void 0===c||"undefined"===c||""===c)&&(setCookie("profile-currency","PHP",31),c=getCookie("profile-currency")),""!==b&& void 0!==b&&"undefined"!==b&&"null"!==b&&(popUpLocationValue=a=JSON.parse(b),$("#pop-up-location-select").val(a.name),$("#search-location-autocomplete").val(a.name),autoCompleteLocationValue={name:a.name,complete_address:a.complete_address,lat:a.lat,lng:a.lng},geocodeDefault()),$("#pop-up-language-select").val(e),$("#pop-up-measure-select").val(d),$("#pop-up-currency-select").val(c)}function convertMeasures(){$(".area-convert").each(function(){var a=+$(this).data("value"),b=" sqm.";"Imperial"===getCookie("profile-measure")&&(a*=10.764,b=" sft."),this.innerHTML=a.toLocaleString(void 0,{maximumFractionDigits:2})+b})}function convertDistances(){$(".distance-convert").each(function(){var a=+$(this).data("value");"Imperial"===getCookie("profile-measure")&&(a*=.62137),this.innerHTML=a.toLocaleString(void 0,{maximumFractionDigits:2})})}function convertCurrencies(){var a=getCookie("profile-currency");void 0===localStorage.getItem("conversion")&&getCurrencies();var b=JSON.parse(localStorage.getItem("conversion"))[a];$(".currency-convert").each(function(){var c=+$(this).data("value");c*=b,this.innerHTML=a+" "+c.toLocaleString(void 0,{maximumFractionDigits:2})}),$(".currency-convert-no-symbol").each(function(){var a=+$(this).data("value");a*=b,this.innerHTML=a.toLocaleString(void 0,{maximumFractionDigits:2})})}function getCurrencyMultiplier(){var a=getCookie("profile-currency");return void 0===localStorage.getItem("conversion")&&getCurrencies(),JSON.parse(localStorage.getItem("conversion"))[a]}function getCurrencyCode(){return getCookie("profile-currency")}function setCookie(b,c,d){var a=new Date;a.setTime(a.getTime()+864e5*d);var e="expires="+a.toUTCString();document.cookie=b+"="+c+";"+e+";path=/"}function getCookie(e){for(var c=e+"=",d=decodeURIComponent(document.cookie).split(";"),b=0;b<d.length;b++){for(var a=d[b];" "===a.charAt(0);)a=a.substring(1);if(0===a.indexOf(c))return a.substring(c.length,a.length)}return""}function getParameterByName(a,b){b||(b=window.location.href),a=a.replace(/[\[\]]/g,"\\$&");var c=new RegExp("[?&]"+a+"(=([^&#]*)|&|#|$)").exec(b);return c?c[2]?decodeURIComponent(c[2].replace(/\+/g," ")):"":null}function showMap(e){geocoder=new google.maps.Geocoder;var a=14.5427941,b=121.0130898;locationMap=new google.maps.Map(document.getElementById("home-pin-map"),{center:new google.maps.LatLng(a,b),zoom:14,streetViewControl:!1,styles:[{featureType:"administrative",elementType:"geometry",stylers:[{visibility:"off"}]},{featureType:"poi",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"transit",stylers:[{visibility:"off"}]}]});var f={url:"/frontend/images/loading-idle.gif",scaledSize:new google.maps.Size(70,70),origin:null,anchor:null,size:null};positionMarker=new google.maps.Marker({position:new google.maps.LatLng(a,b),map:locationMap,animation:google.maps.Animation.DROP,draggable:!0,icon:f}),!1===geocodeDefault()&&null!==e&&(locationEnabled=!0,a=e.coords.latitude,b=e.coords.longitude,currentLocation.lat=a,currentLocation.lng=b,placeMarkerAndPanTo(new google.maps.LatLng(a,b)),geocode(new google.maps.LatLng(a,b))),locationMap.addListener("click",function(a){placeMarkerAndPanTo(a.latLng,locationMap),geocode(a.latLng)}),positionMarker.setVisible(!0),google.maps.event.addListener(positionMarker,"dragend",function(a){placeMarkerAndPanTo(a.latLng,locationMap),geocode(a.latLng)});var g=document.getElementById("pop-up-location-select"),c=new google.maps.places.Autocomplete(g);c.bindTo("bounds",locationMap),c.setTypes([]),c.setFields(["address_components","geometry","icon","name"]),c.addListener("place_changed",function(){var a=c.getPlace(),b="";a.address_components.forEach(function(a,c){b=0===c?a.long_name:b+","+a.long_name}),popUpLocationValue={name:a.name,complete_address:b,lat:a.geometry.location.lat(),lng:a.geometry.location.lng()}});var h=document.getElementById("search-location-autocomplete"),d=new google.maps.places.Autocomplete(h);d.bindTo("bounds",locationMap),d.setTypes([]),d.setFields(["address_components","geometry","icon","name"]),d.addListener("place_changed",function(){var a=d.getPlace(),b="";a.address_components.forEach(function(a,c){b=0===c?a.long_name:b+","+a.long_name}),autoCompleteLocationValue={name:a.name,complete_address:b,lat:a.geometry.location.lat(),lng:a.geometry.location.lng()},a.geometry.location?placeMarkerAndPanTo(a.geometry.location):locationMap.setCenter(a.geometry.location)})}function placeMarkerAndPanTo(a){void 0!==positionMarker&&positionMarker.setPosition(a),void 0!==locationMap&&(locationMap.panTo(a),locationMap.setZoom(17))}function geocodeDefault(){var a,b=getCookie("profile-locatedNear");try{a=JSON.parse(b),currentLocation.lat=a.lat,currentLocation.lng=a.lng,"function"==typeof getRecommended&&getRecommended(a.lat,a.lng),placeMarkerAndPanTo(new google.maps.LatLng(a.lat,a.lng)),$("#header-search-location-field").val(a.name),$("#advance-search-location").val(a.name)}catch(c){return"function"==typeof getRecommended&&(getRecommended("",""),placeMarkerAndPanTo(new google.maps.LatLng(currentLocation.lat,currentLocation.lng))),!1}return!0}function geocode(a){geocoder.geocode({location:a},function(b,c){"OK"===c&&(b[0]&&($("#header-search-location-field").val(b[0].formatted_address),$("#advance-search-location").val(b[0].formatted_address),$("#search-location-autocomplete").val(b[0].formatted_address)),autoCompleteLocationValue={name:b[0].formatted_address,complete_address:b[0].formatted_address,lat:a.lat(),lng:a.lng()},"getRecommended"==typeof obj&&getRecommended(a.lat(),a.lng()))})}function IsEmail(a){return/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(a)}function populateCoutries(){$.getJSON(GLOBAL_countries_json,function(a){a.countries.forEach(function(b){var a='<option value="'+b.value+'" ';"Philippines"===b.value&&(a+="selected "),a=a+">"+b.name+"</option>",$("#country").append(a)})})}function populatePositions(){$.getJSON(GLOBAL_careers_position_json,function(a){a.positions.forEach(function(b){var a='<option value="'+b.value+'" ';a=a+">"+b.name+"</option>",$("#position-interested").append(a)})}).then(function(){$("#position-interested").multiselect({enableFiltering:!0,enableCaseInsensitiveFiltering:!0})})}function populateContactProperties(){var a=$("#propertyInterested"),b=$("#propertyOwned"),c={enableFiltering:!0,enableCaseInsensitiveFiltering:!0};a.empty(),b.empty(),allProperties.forEach(function(d,f){var e='<option value="'+d.id+'" >'+d.name+" | "+d.city+"</option>";a.append(e),b.append(e),f===allProperties.length-1&&(firedContactSelect=!0,$("#propertyInterested").multiselect(c),$("#propertyOwned").multiselect(c),$(".contact-form-wrap").removeClass("loading-form"))})}function change_captcha(){document.getElementById("captcha").src=GLOBAL_frontend_contact_us_captcha}$(document).ready(function(){$(".copy-url").click(function(b){var a;b.preventDefault(),document.querySelector(".js-copytextarea").select();try{document.execCommand("copy")}catch(c){}$(".notes-copied").addClass("active"),clearTimeout(a),a=setTimeout(function(){$(".notes-copied").removeClass("active")},2500)}),$(document).on("click",".pi-share",function(b){b.preventDefault();var c=$(this).data("url"),a=GLOBAL_app_request_schemeAndHttpHost+"/"+c;$("#share-url-fb").attr("href","https://www.facebook.com/sharer/sharer.php?u="+a),$("#share-url-twitter").attr("href","https://twitter.com/intent/tweet?url="+a),$("#input-share-url").val(a),$(".js-copytextarea").val(a),$("#a-share-url").attr("data-url",a),$.fancybox.open({src:"#share-info",autoSize:!1,toolbar:!0,gutter:20,touch:!1,fitToView:!1,clickContent:!1})}),initializeDefaultButtons(),loadCookies(),getCookie("DMCI_advisory"),"-1"==document.cookie.indexOf("advisoryCookie=here")&&($(".advisory-wrap").addClass("active"),1025>$(window).width()&&$("body").addClass("advisory"),$(".advisory-wrap .jq-close").click(function(b){b.preventDefault();var a=new Date;a=new Date(a.getTime()+864e5),document.cookie="advisoryCookie=here; expires="+a,$("body.advisory").removeClass("advisory"),$(".advisory-wrap").removeClass("active"),$(".advisory-wrap").addClass("hide")}),$(".advisory-wrap btn.btn-round").click(function(){var a=new Date;return a=new Date(a.getTime()+864e5),document.cookie="advisoryCookie=here; expires="+a,$("body.advisory").removeClass("advisory"),$(".advisory-wrap").removeClass("active"),$(".advisory-wrap").addClass("hide"),!0}))}),$(function(){getActivePropertiesJson()});var isBusyCaptcha=!1;$("img#refresh").click(function(){!1==isBusyCaptcha&&(isBusyCaptcha=!0,$("img#refresh").addClass("active"),setTimeout(function(){$("img#refresh").removeClass("active"),isBusyCaptcha=!1},300),change_captcha())}),$("#captchaerror-close").click(function(a){a.preventDefault(),$.fancybox.close("#captcha-error")});var firedContactSelect=!1;"frontend_single_property"!==GLOBAL_APP_REQUEST_GET?($(document).ready(function(){}),$(window).on("scroll",function(){if($(".contact-form-wrap").length>0){var a=window.innerHeight?window.innerHeight:$(window).height(),b=$(window).scrollTop(),c=$(".contact-form-wrap").offset(),d=c.top-a;b>=d&& !1==firedContactSelect&&populatePositions()}})):$(function(){var a={enableFiltering:!0,enableCaseInsensitiveFiltering:!0};$("#position-interested").multiselect(a),$("#propertyInterested").multiselect(a),$("#propertyOwned").multiselect(a)}),$(function(){getCookie("profile-set")||$.fancybox.open({src:"#cookie-preference",modal:!0,beforeShow:function(){$(".fancybox-bg").css({background:"rgba(255, 255, 255, 0.6)"})}})})

</script>


            <script async="">
$(document).ready(function(){$(".contact-us ul li a.btn").click(function(t){t.preventDefault(),$(this).closest("input-wrap").hasClass("multi-select")?$(this).removeClass("active"):$(this).hasClass("active")?$(this).removeClass("active"):($(this).closest(".input-wrap:not(.multi-select)").find("li a").removeClass("active"),$(this).addClass("active"))}),$("[data-fancybox]").fancybox({maxWidth:1055,maxHeight:600,autoSize:!1,width:1055,height:600,gutter:20,afterLoad:function(){$(".fancybox-content").css("border-radius","8px")}});var t=!1,e=!1;$("#agreedToDPA").change(function(){t=!!$(this).is(":checked")}),$("#allowedCRF").change(function(){e=!!$(this).is(":checked")})});"use strict";function initializeContactMultiSelect(){console.log("initialized");var t={enableFiltering:!0,enableCaseInsensitiveFiltering:!0};$("#propertyInterested").multiselect(t),$("#propertyOwned").multiselect(t),$("#position-interested").multiselect(t)}!function(t,e,i){var n=t.querySelectorAll(".inputfile");Array.prototype.forEach.call(n,function(t){var e=t.nextElementSibling,i=e.innerHTML;t.addEventListener("change",function(t){var n="";(n=this.files&&this.files.length>1?(this.getAttribute("data-multiple-caption")||"").replace("{count}",this.files.length):t.target.value.split("\\").pop())?e.querySelector("span").innerHTML=n:e.innerHTML=i}),t.addEventListener("focus",function(){t.classList.add("has-focus")}),t.addEventListener("blur",function(){t.classList.remove("has-focus")})})}(document,window,0);
</script>
    <script>
        $(document).ready(function() {

            storeSelectedInquiryType();
            $(document).on('change', '#00N5g000003tIus', function() {
                storeSelectedInquiryType();
            });

            function storeSelectedInquiryType() {
                var _inqType = $('#00N5g000003tIus option:selected').val();

                storeCookie("inquiry_type", _inqType, 1);
            }

            function storeCookie(cname, cvalue, exdays) {
                const d = new Date();
                d.setTime(d.getTime() + (exdays*24*60*60*1000));
                let expires = "expires="+ d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }
        });
    </script>


    <script async="">
    var GLOBAL_frontend_home_conversion_rate_json = "/conversion-rates/json";
    getCurrencies();function getCurrencies(){$.ajax({url:GLOBAL_frontend_home_conversion_rate_json,type:"GET",processData:!1,success:function(a){localStorage.setItem("conversion",JSON.stringify(a))}}).then(function(){convertCurrencies()})}
</script>


<script async="">(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"26169032"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>

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

<script type="text/javascript" src="https://service.force.com/embeddedservice/5.0/esw.min.js"></script>
<script type="text/javascript">
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



            // embedded_svc.settings.enabledFeatures = ['LiveAgent'];
            //     embedded_svc.settings.entryFeature = 'LiveAgent';



            // embedded_svc.init(
            //         'https://dmcihomes4.my.salesforce.com',
            //         'https://dmcihomes.secure.force.com/liveAgentSetupFlow',
            //         gslbBaseURL,
            //         '00D5g000000J3Js',
            //         'WEB_CHAT',
            //         {
            //             baseLiveAgentContentURL: 'https://c.la1-core1.sfdc-mchho0.salesforceliveagent.com/content',
            //             deploymentId: '5725g000000PHDZ',
            //             buttonId: '573BL000000001h',
            //             baseLiveAgentURL: 'https://d.la1-core1.sfdc-mchho0.salesforceliveagent.com/chat',
            //             eswLiveAgentDevName: 'WEBCHAT_DELETETHIS',
            //             isOfflineSupportEnabled: true
            //         }
            //     );
            // };



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
        </script><script id="common-script" type="text/javascript" src="https://service.force.com/embeddedservice/5.0/utils/common.min.js"></script>


<script async="">
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

<div style="display: none; visibility: hidden;"><script>fbq("track","ViewContent",{value:0,currency:"PHP"});</script></div><script id="liveagent-esw-script" type="text/javascript" src="https://service.force.com/embeddedservice/5.0/client/liveagent.esw.min.js"></script><form id="fileUploadForm" enctype="multipart/form-data" method="post" target="fileUploadIframe"><input type="file" id="fileSelector" name="file" style="display: none;"><input name="filename" type="hidden"></form><iframe id="fileUploadIframe" name="fileUploadIframe" title="FileUploadFrame" style="display: none;"></iframe><div id="batBeacon104326936253" style="width: 0px; height: 0px; display: none; visibility: hidden;"><img id="batBeacon304338360065" width="0" height="0" alt="" src="https://bat.bing.com/action/0?ti=26169032&amp;Ver=2&amp;mid=8820f379-8f09-42a7-a5ce-a8b4f8b566fe&amp;sid=7c5f9a10d43911eea8293f51b3e52217&amp;vid=00e39ef0cf1511ee9d27d93e2ab67dea&amp;vids=0&amp;msclkid=N&amp;uach=pv%3D10.0.0&amp;pi=918639831&amp;lg=en-US&amp;sw=1366&amp;sh=768&amp;sc=24&amp;tl=Online%20Inquiry%20Form%20%7C%20DMCI%20Homes&amp;p=https%3A%2F%2Fwww.dmcihomes.com%2Fcontact-us&amp;r=&amp;lt=1572&amp;evt=pageLoad&amp;sv=1&amp;rn=829257" style="width: 0px; height: 0px; display: none; visibility: hidden;"></div><iframe id="esw_storage_iframe" src="https://service.force.com/embeddedservice/5.0/esw.html?parent=https://www.dmcihomes.com/contact-us" title="Live Chat Metadata" style="display: none;"></iframe><script type="text/javascript" src="https://d.la1-core1.sfdc-mchho0.salesforceliveagent.com/chat/rest/EmbeddedService/EmbeddedServiceConfig.jsonp?Settings.prefix=EmbeddedService&amp;org_id=00D5g000000J3Js&amp;EmbeddedServiceConfig.configName=WEB_CHAT&amp;callback=embedded_svc.liveAgentAPI.handleChatSettings&amp;version=48"></script><script id="invite-esw-script" type="text/javascript" src="https://service.force.com/embeddedservice/5.0/client/invite.esw.min.js"></script><div class="embeddedServiceHelpButton"><div class="helpButton"><button class="helpButtonEnabled uiButton" href="javascript:void(0)"><span class="embeddedServiceIcon" aria-hidden="true" data-icon="" style="display: inline-block;"></span><span class="helpButtonLabel" id="helpButtonSpan" aria-live="polite" aria-atomic="true"><span class="assistiveText">Live chat:</span><span class="message">Chat with an Expert</span></span></button></div></div><script id="inert-script" type="text/javascript" src="https://service.force.com/embeddedservice/5.0/utils/inert.min.js"></script><script type="text/javascript" src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&amp;render=explicit"></script><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge expires in two minutes" name="c-1my640kzpc3g" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=1kRDYC3bfA-o6-tsWzIBvp7k&amp;k=6LcKHRwiAAAAAPmLGJqTqV37DxkqG59azLwp8v6-" style="width: 100%; height: 100%;"></iframe></div></div></body></html>
