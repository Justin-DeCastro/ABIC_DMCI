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

    <!-- <nav class="rightbar-nav animated hiding" data-animation="fadeInRight" data-delay="700">
        <h2>Careers</h2>
        <div class="sec-active-text">
            <span>Technical Positions</span>
            <div class="bullet-wrap">
                <i class="bullet"></i>
                <i class="bullet"></i>
                <i class="bullet"></i>
            </div>
        </div>
        <ul>
            <li class="active"><a href="#technical-position">Techincal <br>Positions</a></li>
            <li><a href="#non-technical">Non-Technical <br>Position</a></li>
            <li><a href="#sales">Sales Positions</a></li>
        </ul>
    </nav> -->

    <section id="main-wrapper">
        <section class="banner wavy default" id="overview">
            <picture class="coverimage-img">
                <source data-srcset="{{ asset('images/hero-shd.png')}}" media="(min-width: 570px)" srcset="{{ asset('images/hero-shd.png')}}">
                <source data-srcset="{{ asset('images/hero-shd.png')}}" media="(min-width: 320px)" srcset="{{ asset('images/hero-shd.png')}}">
                <img class=" lazyloaded" data-src="{{ asset('images/hero-shd.png')}}" width="1440" height="330" alt="MDN" src="{{ asset('images/hero-shd.png')}}" style="width: 1026px; height: 235px; margin-top: 0px; margin-left: -151px;">
            </picture>
            <div class="banner-text">
                <div class="container">
                    <h1>Careers</h1>
                </div>
            </div>
        </section>
        <section class="sec-pad" id="technical-position">
            <div class="container">
                <div class="career-filter">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="sort-by">
                                <label for="">Sort By: </label>
                                <div class="custom-select">
                                    <label for="careers-sort"></label>
                                    <select name="careers-sort" id="careers-sort">
                                        <option value="name_asc">Job  A-Z</option>
                                        <option value="name_desc">Job Z-A</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="category-by">
                                <label for="">By Category:</label>
                                <div class="custom-select">
                                    <label for="category-filter"></label>
                                    <select name="category-filter" id="category-filter">
                                        <option value="0">All Categories</option>
                                        <option value="1">Technical Positions</option>
                                        <option value="2">Non-Technical Positions</option>
                                        <option value="3">Sales Positions</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="search-careers">
                                <div class="input-wrap">
                                    <input type="text" id="position-search" placeholder="Search Position...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="careers-list technical">
                    <div class="careers-list-head">

                            <ul class="flex">
                                <li>Job Title</li>
                                <li></li>
                                <li>Department</li>
                                <li>Category</li>
                                <li></li>
                            </ul>

                    </div>

                    <ul id="careers-list-wrapper">


























































































































                                            <li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Application Developer">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="182" data-name="Application Developer" data-content="<p><strong>Technical Competicies:</strong></p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Knowledge of functional or object-oriented programming.</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Familiar with Team Foundation Server.</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Understanding of REST APIs, the document request model, and offline storage</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Firm grasp of C# .Net MVC / .Net Core and its nuances.</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Knowledge of multiple front-end languages and libraries (e.g. HTML/ CSS, JavaScript, XML, jQuery)</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Knowledge of multiple back-end languages (e.g. C#, Java, Python) and JavaScript frameworks (e.g. Angular, React, Node.js)</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Familiarity with databases (e.g. MySQL, MS SQL), web servers (e.g. IIS) and UI/UX design</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Maintaining&amp;nbsp;awareness of new and emerging technologies and the potential application on service offerings and products provided by IT.</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Excellent communication and teamwork skills</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Strong analytical skills</p>
<p><strong>Primary Responsibilities:</strong></p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Design client-side and server-side architecture.</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Build the front-end of applications through appealing visual design</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Develop and manage well-functioning databases and applications</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Write effective APIs</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Test software to ensure responsiveness and efficiency</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Troubleshoot, debug and upgrade software</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Create security and data protection settings</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Participate in software design reviews, conduct peer code reviews, provide input and feedback to other members of the development team</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Implement means of authentication, encryption and security within the applications</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Build features and applications with a mobile responsive design</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Write technical documentation</p>
<p>&amp;middot;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Work with data scientists and analysts to improve software</p>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Application Developer</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Information Technology</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Architect">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="231" data-name="Architect" data-content="<p>QUALIFICATIONS:</p>
<ul>
<li>Graduate of BS Architecture</li>
<li>At least 2 years with Computer-Aided Drafting and Design (CADD)</li>
<li>With basic background in Revit.</li>
</ul>
<p>JOB DESCRIPTION:</p>
<ul>
<li>Prepare architectural CAD drawing requirements for sales and marketing, for permit up to construction that are aligned with design standards, project concepts and budget</li>
<li>Prepare conceptual design studies for cost analysis.</li>
<li>Monitor drawing deliverables and facilitates production output based on weekly target of Design Production Team</li>
<li>Propose improvements to standard design and detail</li>
<li>Research cost of architectural materials/ finishes and accessories for D&amp;amp;E&amp;rsquo;s database and /or for Management approval.</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Architect</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Design &amp; Engineering</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="BIM Project Specialist">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="229" data-name="BIM Project Specialist" data-content="<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Candidates must possess at least Vocational Courses in Graphics Technology, Architecture Technology, Industrial Technology Major in Drafting, or BS Architecture</li>
<li>Work experience in Revit is an advantage.</li>
<li>Fresh graduates who are familiar and proficient in Revit may apply.</li>
</ul>
<p><strong>KEY JOB RESPONSIBILITIES</strong></p>
<ul>
<li>Maintain up to date model information</li>
<li>Maintain/manage document registers, file and record management</li>
<li>Produce as-built documents from BIModels</li>
<li>Assist project team with modeling, detailing and other BIM requirements</li>
<li>BIM 360 Project Admin</li>
<li>Subcontractor&amp;rsquo;s drawing management</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>BIM Project Specialist</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="BIM Specialist">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="247" data-name="BIM Specialist" data-content="<h2 class=&quot;css-4eji2y e1tiznh50&quot;>Job description</h2>
<div>
<div class=&quot;jd-appended-job-description&quot;>
<div class=&quot;jd-section-employer&quot;>
<div class=&quot;jd-description-text&quot;>
<p><strong>QUALIFICATIONS:</strong></p>
<p><strong>&amp;middot; Candidate must be a graduate of Industrial Technology, Drafting, Architecture Technology, Engineering, Architecture, or IT related courses.</strong></p>
<p>&amp;middot; Proven experience working as BIM specialist or similar role&amp;nbsp;<strong>(at least 2 years experience)</strong></p>
<p>&amp;middot; Proficiency in range of&amp;nbsp;BIM softwares, <strong>including but not limited to</strong>:</p>
<ul>
<li><strong>Autodesk revit</strong></li>
<li><strong>Tekla Structures</strong></li>
<li><strong>Navisworks</strong></li>
<li><strong>BIM 360</strong></li>
</ul>
<p>&amp;middot; Proficiency in digital tools such as&amp;nbsp;<strong>dynamo, grasshopper, python, revit API, etc. is an advantage.</strong></p>
<p>&amp;middot; Must be willing to work at the&amp;nbsp;<strong>head office</strong>.</p>
<p><strong>KEY JOB RESPONSIBILITIES:</strong></p>
<p>&amp;middot; Identify areas for improvement and provide automation solutions to improve workflows.</p>
<p>&amp;middot; Provide technical supports to less experience staff/s</p>
<p>&amp;middot; Assist in developing/updating training materials and Tekla/Revit and other digital tools user guides.</p>
<p>&amp;middot; Ensure up to date training for all BIM users or new tools, new product features and updates.</p>
<p>&amp;middot; Monitor teams&amp;rsquo; progression on the use of new tools/applications.</p>
<p>&amp;middot; Continuous research and development to optimize BIM tools with its new product features and updates.</p>
<p>&amp;middot; Conducts various research on BIM-related best practices to improve workflows, and to ensure efficient collaboration.</p>
<p>&amp;middot; Drive innovation initiatives within the team that improves timeliness, cost efficiency, quality and customer experience.</p>
<p>&amp;middot; Provides regular updates/reports to Supervisor.</p>
<p>&amp;middot; Perform any related task as directed by the supervisor.</p>
</div>
</div>
</div>
</div>
<p>&amp;nbsp;</p>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>BIM Specialist</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Design &amp; Engineering</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Business Analyst">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="202" data-name="Business Analyst" data-content="<p><strong><u>PRIMARY RESPONSIBILITIES</u></strong></p>
<p>✓ Identifying and addressing operational, financial and technological risks within the business.</p>
<p>✓ Maintaining, testing and improving business and systems operations.</p>
<p>✓ Building and maintaining relationships with key stakeholders.</p>
<p>✓ Identifying and capitalizing on improvement opportunities.</p>
<p>✓ Identifying innovative ways to increase customer satisfaction.</p>
<p>✓ Evaluating the performance of project teams to ensure that targets and deadlines are met.</p>
<p>✓ Communicating ideas and viewpoints to senior management.</p>
<p>✓ Acts as a liaison between business and IT groups.</p>
<p>✓ Designing and documentation of new system features</p>
<p>✓ Creating monthly performance reports.</p>
<p>&amp;nbsp;</p>
<p><strong><u>QUALIFICATIONS:</u></strong></p>
<p>✓ Preferably an IT or Business-related course or equivalent</p>
<p>✓ With at least 3-4 years experience in business analysis</p>
<p>✓ Strong stakeholder management; ability to influence stakeholders and work closely with them to determine acceptable solutions</p>
<p>✓ Good documentation, presentation &amp;amp; communication skills</p>
<p>✓ Excellent planning, organizational and time management skills</p>
<p>✓ Ability to multitask</p>
<p>✓ Effective Communication and Leadership Skills</p>
<p>✓ Problem Solving and Analytical thinking skills</p>
<p>✓ Self-starter and resourceful</p>
<p>✓ Thinking out of the box</p>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Business Analyst</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Information Technology</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Business Development Officer">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="259" data-name="Business Development Officer" data-content="<h2 class=&quot;css-iqofca e1tiznh50&quot;>Job description</h2>
<div>
<div class=&quot;jd-appended-job-description&quot;>
<div class=&quot;jd-section-employer&quot;>
<div class=&quot;jd-description-text&quot;>
<p><strong>Duties &amp;amp; Responsibilities:</strong></p>
<p><strong>1. Prospecting of Land</strong></p>
<p>1.1. Assess properties for suitability to development of current and new products.</p>
<p>1.2. Conduct historical and preliminary legal investigation on prospective land. 1.3. Comparative analysis of properties in a locality, formulating strategies to develop in locality.</p>
<p>1.4. Conduct site inspection to ascertain and assess features of prospective land; also, facilitate group site inspections.</p>
<p>1.5. Secure market data through research or through coordination with internal research groups.</p>
<p>1.6. Identify new prospective localities, conducting research necessary to support or verify potential of identified localities.</p>
<p>1.7. Conduct financial feasibility studies for prospective land.</p>
<p>1.8. Generate reports and document assessments, research, and communications pertinent to prospecting.</p>
<p><strong>2. Negotiations for Various Transactions</strong></p>
<p>2.1. Secure and review legal and technical due diligence reports for prospective land, formulating actions/strategies to address findings.</p>
<p>2.2. Prepare contracts pertinent to acquisition and manage notarization of contracts, managing coordination with other departments to perfect contracts.</p>
<p>2.3. Generate reports and document assessments, research, and communications pertinent to negotiations.</p>
<p><strong>3. Land Acquisition</strong></p>
<p>3.1. Manage completion of implementation and corrective actions, contract milestones, and requirements pertinent to acquired land, including monitoring, documentation, and escalation of issues.</p>
<p>3.2 Secure original documents of acquired land and coordinate safe keeping of original documents.</p>
<p>3.3 Manage refunds, including securing of checks, endorsement to other departments, documentation of refund, etc.</p>
<p>3.4. Generate reports and document assessments, research, and communications pertinent to acquisition.</p>
<p><strong>4. Research and Product Development</strong></p>
<p>4.1. Conceptualize new products or business models, or identify new sources of revenue.</p>
<p>4.2. Research and conduct pre-feasibility study for new products or business models.</p>
<p>4.3. Generate reports and document assessments, research, and communications pertinent to formation of new products or business models.</p>
<p><strong>Qualifications:</strong></p>
<p>1. Graduate of Management, Engineering or Business courses. Specialization in Real Estate Management is an advantage.</p>
<p>2. Minimum 5 years experience in real estate management, 2 years minimum of which were in a supervisory capacity.</p>
<p>3. Understands basic schematic architectural plans and drawings.</p>
<p>4. Understands general legal concepts; can create clear contracts from templates and can administer contracts.</p>
<p>5. Ability to undertake negotiations with stakeholders so that intended outcomes are achieved.</p>
<p>6. Ability to initiate, plan, implement, and control activities to achieve intended outcomes.</p>
<p>7. Ability to identify and analyze issues/changes/assumptions; able to prioritize and implement solutions to ensure projects stay on track.</p>
<p>8. Ability to identify, assess, and document project risks; can develop contingency plans and recommendations.</p>
<p>9. Ability to handle project scheduling and can manage project documentation; can track project performance.</p>
<p>10. Ability to understand financial concepts and general accounting principles that affect feasibility of projects and more specifically, that of transactions for land or for partnerships.</p>
<p>11. Ability to use time as a resource and to prioritize assignments effectively.</p>
</div>
</div>
</div>
</div>
<p>&amp;nbsp;</p>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Business Development Officer</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Business Development</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Business Development Senior Specialist">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="258" data-name="Business Development Senior Specialist" data-content="<h2 class=&quot;css-iqofca e1tiznh50&quot;>Job description</h2>
<div>
<div class=&quot;jd-appended-job-description&quot;>
<div class=&quot;jd-section-employer&quot;>
<div class=&quot;jd-description-text&quot;>
<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Graduate of Business Administration/ Economics, Architecture or any related courses</li>
<li>Strong background in Feasibility Studies and Financial Analysis.</li>
<li>Person of good moral character and integrity.</li>
<li>Good public relation skills.</li>
<li>Outstanding communication skills both verbal or written communication.</li>
<li>Real Estate experience is an advantage.</li>
<li>Must be able to work with minimal supervision</li>
<li>Must have excellent decision-making skills</li>
<li>Must be willing to work in Makati City</li>
<li>Atleast 2 years experience in land Acquisition but Fresh Graduates are welcome to apply!</li>
</ul>
<p><strong>RESPONSIBILITIES</strong></p>
<ul>
<li>Conducts site or raw land analysis and selection, market studies and competitive survey to recommend viability of a project.</li>
<li>Develops conceptual, business plans, and feasibility studies through preparation of cash flow studies and point estimates.</li>
<li>Prepares Net Present Value computations for financing option.</li>
<li>Review contracts and legal documents related to prior to property acquisition.</li>
<li>Liaises with government agencies with regard to property under review.</li>
</ul>
</div>
</div>
</div>
</div>
<p>&amp;nbsp;</p>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Business Development Senior Specialist</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Business Development</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Business Development Specialist">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="141" data-name="Business Development Specialist" data-content="<p><strong>QUALIFICATIONS</strong>&amp;nbsp;</p>
<ul>
<li>Graduate of Business Administration/ Economics, Architecture or any related courses</li>
<li>Strong background in&amp;nbsp;Feasibility Studies&amp;nbsp;and&amp;nbsp;Financial Analysis.</li>
<li>Familiar and has network of contacts with government coordinating agencies related to property acquisition.</li>
<li>Background on Contracts Review and Drafting of Agreement is an advantage .</li>
<li>Person of good moral character, and integrity.</li>
<li>Good public relation skills.</li>
<li>Outstanding communication skills both verbal or written communication .</li>
<li>Real Estate experience is an advantage.</li>
<li>Para-Legal background is an advantage.</li>
<li>Must be able to work with minimal supervision</li>
<li>Must have excellent decision-making skills&amp;nbsp;</li>
<li>Must be willing to work in Makati City</li>
<li><strong>Position is open for fresh graduates</strong></li>
</ul>
<p><strong>RESPONSIBILITIES</strong></p>
<ul>
<li>Conducts site or raw land analysis and selection, market studies and competitive survey to recommend viability of a project.</li>
<li>Develops conceptual, business plans, and feasibility studies through preparation of cash flow studies and point estimates.</li>
<li>Prepares Net Present Value computations for financing option.</li>
<li>Review contracts and legal documents related to prior to property acquisition.</li>
<li>Liaises with government agencies with regard to property under review.</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Business Development Specialist</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Business Development</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Business Process Analyst (Methods Analyst)">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="269" data-name="Business Process Analyst (Methods Analyst)" data-content="<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Candidate must possess at least a Bachelor's/College Degree in Industrial Engineering or equivalent courses</li>
</ul>
<ul>
<li>Must be process-oriented and must have experience as Methods Analyst in an ISO-certified company</li>
</ul>
<ul>
<li>Preferably has experience in process documentation/system auditing and process audit</li>
</ul>
<ul>
<li>Must have experience in a construction or property development firm</li>
</ul>
<ul>
<li>Must be computer-literate</li>
</ul>
<ul>
<li>Must have good oral and written communication skills</li>
</ul>
<ul>
<li>Must be willing to work at our Head Office in Bangkal, Makati</li>
<li>Preferably with Lean Six Sigma Certification</li>
</ul>
<p><strong>RESPONSIBILITIES</strong></p>
<ul>
<li>Examines and evaluates methods to develop new or improved standardized methods or procedures</li>
</ul>
<ul>
<li>Interviews personnel and conducts audits to ascertain unit functions, work performed, methods and equipments used, and personnel involved</li>
</ul>
<ul>
<li>Confers with audited personnel to obtain suggestions for improvements such as modifying existing procedures, using alternate work method, or introducing new business forms, reports standards, or systems</li>
</ul>
<ul>
<li>Conducts audit and evaluates findings using knowledge of principles and techniques of work simplification, industry standards, and company policies to recommend methods or system intended to improve clerical operations</li>
</ul>
<p>* Evaluates audit findings using knowledge of principles and techniques of work simplification, industry standards, and company policies to recommend methods or system-intended to improve clerical operation</p>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Business Process Analyst (Methods Analyst)</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Businee Process Unit</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Civil Engineer">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="162" data-name="Civil Engineer" data-content="<p><strong>QUALIFICATIONS:</strong></p>
<ul>
<li>With effective communication and commanding skills.</li>
<li>Graduate of BS Construction Engineering and Management and BS Civil Engineering</li>
<li>Resilient and target-oriented</li>
<li>Fresh graduates are welcome to apply</li>
<li>Professional license is an advantage</li>
<li>Must be residing around Metro Manila</li>
</ul>
<p><strong>BRIEF SCOPE OF WORK:</strong></p>
<ul>
<li>Rebar Works</li>
<li>Formworks</li>
<li>Masonry</li>
<li>Finishing Works</li>
<li>Site Development and Amenities Works</li>
<li>Turnover and Dress Up of Units</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Civil Engineer</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Civil Engineer - Site Planner and Scheduler">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="254" data-name="Civil Engineer - Site Planner and Scheduler" data-content="<p><strong>Planning and Scheduling</strong></p>
<ul>
<li>Participate in the preparation of Project Operational Plan, Master Schedule and PERT-CPM&amp;nbsp;</li>
<li>Details the schedule based on the present condition/workability of the project site&amp;nbsp;</li>
<li>Computes for the resource loading based on the construction schedule&amp;nbsp;</li>
<li>Present to the Project Team the construction schedule for submission to the client/stakeholders; discusses with the Client/Stakeholders and seek approval of the same&amp;nbsp;</li>
<li>Provides Project Team with a detailed target schedule/production:&amp;nbsp;</li>
</ul>
<ol>
<li>Three-week look ahead&amp;nbsp;</li>
<li>Three-month look ahead&amp;nbsp;</li>
</ol>
<ul>
<li>Analyzes variance on time and resources.&amp;nbsp;</li>
<li>Conducts committee meeting on schedule review.&amp;nbsp;</li>
<li>Generates and recommends alternative plans and courses of action in consultation with the Project Team members.&amp;nbsp;</li>
<li>Maintain and updates schedule &amp;mdash;&amp;nbsp;<em>Actual&amp;nbsp;</em>against the&amp;nbsp;<em>Plan.</em>&amp;nbsp;</li>
<li>Monitors progress accomplishment.&amp;nbsp;</li>
<li>Coordinates with the office engineer and PIC for the reporting of actual progress of work based on quantity and/or unit price.&amp;nbsp;</li>
<li>Identifies and monitors events of delays in the schedule for the purpose of claiming time extensions and additional cost.&amp;nbsp;</li>
<li>Generates a tail-end schedule to have a clear realization of the remaining works based on the actual and/or target parameters.&amp;nbsp;</li>
<li>Updates resources loading based on the remaining works.&amp;nbsp;</li>
</ul>
<p>&amp;nbsp;</p>
<p><strong>4D/5D BIM</strong></p>
<ul>
<li>Create/update 4D model by Mapping of model element and schedule task using Naviswork&amp;nbsp;</li>
<li>Utilize 4D model to simulate construction schedule to visualize construction sequences&amp;nbsp;</li>
<li>Create 4D/5D model using MS Project cost loaded schedule&amp;nbsp;</li>
<li>Utilize 4D/5D model to accurately track %CompIetion of the project for more accurate reporting&amp;nbsp;</li>
<li>Prepare visualization report/videos to communicate project schedule with the project team&amp;nbsp;</li>
<li>Able to utilize naviswork for visual walkthrough to analyze/identify potential issues&amp;nbsp;</li>
<li>Coordinate model issues related to construction operations with the BIM team</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Civil Engineer - Site Planner and Scheduler</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Company Nurse (HR Assistant)">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="218" data-name="Company Nurse (HR Assistant)" data-content="<p><strong>PRIMARY FUNCTIONS:</strong></p>
<p>&amp;bull; Promptly attends to employees&amp;rsquo; medical and health needs according to accepted medical standards.</p>
<p>&amp;bull; Provides nursing care to injured or ill employees and refers them to a hospital for further treatment as deemed necessary.</p>
<p>&amp;bull; Provides health advice and nursing care to employees and refers major health issues to the Company Physician</p>
<p>&amp;bull; Responsible for providing nursing care to sick or injured employees, handles medical related inquiries and educating employees on the prevention of sickness/ diseases.</p>
<p>&amp;bull; Processes SSS sickness notification and reimbursement</p>
<p>&amp;bull; Issue Philhealth certification to employees</p>
<p>&amp;bull; Communicates all pre-employment medical exam results to the Company Physician and other concerned HR Recruiter for proper guidance.</p>
<p>&amp;bull; Processes &amp;amp; monitors billing statements from accredited pre-employment clinics</p>
<p>&amp;bull; Coordinates with the project sites regarding health-related issues and concerns</p>
<p>&amp;bull; Accompany the Company Physician during the quarterly site visit</p>
<p>&amp;bull; Consolidate monthly reports from the project sites</p>
<p>&amp;bull; Prepares weekly report for the vaccination and health surveillance program</p>
<p><strong>QUALIFICATIONS:</strong></p>
<p>&amp;bull; With an updated PRC License</p>
<p>&amp;bull; With experience as an occupational health nurse and exposure in a corporate setting</p>
<p>&amp;bull; Work experience in HR function particularly in processing SSS &amp;amp; ECC benefits</p>
<p>&amp;bull; Can do multiple tasks with minimum supervision within set deadlines</p>
<p>&amp;bull; Possesses a strong sense of urgency and responsibility</p>
<p>&amp;bull; Highly organized with keen attention to detail</p>
<p>&amp;bull; Proficient in MS Office applications (MS Word, Excel, PowerPoint)</p>
<p>&amp;bull; Strong oral and written communication skills</p>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Company Nurse (HR Assistant)</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Human Resources</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Construction Area Manager">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="178" data-name="Construction Area Manager" data-content="<p><strong>Job Summary</strong>&amp;nbsp;</p>
<p>&amp;nbsp;</p>
<p>This position is generally responsible for overseeing and directing the construction and completion of a&amp;nbsp;Residential Development Project&amp;nbsp;from conception to completion. Primarily responsible in ensuring that it is finished according to approved For Construction Plans and Specification in time, within budget, and according to quality and safety standards.&amp;nbsp;</p>
<p>&amp;nbsp;</p>
<p><strong>Duties and Responsibilities:</strong>&amp;nbsp;</p>
<p>&amp;nbsp;</p>
<ol>
<li>Risk and Safety Management&amp;nbsp;</li>
<li>Quality Management&amp;nbsp;and Quality Control&amp;nbsp;</li>
<li>Project Financials and Cost Management&amp;nbsp;</li>
<li>Planning and Schedule Management&amp;nbsp;&amp;nbsp;&amp;nbsp;</li>
<li>Construction Management&amp;nbsp;</li>
<li>Subcontractor Management&amp;nbsp;</li>
<li>Community Relations&amp;nbsp;&amp;nbsp;</li>
</ol>
<p>&amp;nbsp;</p>
<p><strong>Job Qualifications</strong>&amp;nbsp;</p>
<ul>
<li>Licensed Civil Engineer&amp;nbsp;&amp;nbsp;</li>
<li>At least 10 years&amp;nbsp;experience in construction industry with a minimum of&amp;nbsp;five (5)&amp;nbsp;years in managerial capacity&amp;nbsp;</li>
<li>Experience in&amp;nbsp;completing a&amp;nbsp;High Rise&amp;nbsp;Building construction&amp;nbsp;is an advantage&amp;nbsp;</li>
<li>In-depth understanding of&amp;nbsp;local building codes,&amp;nbsp;construction procedures,&amp;nbsp;and material and project management principles&amp;nbsp;</li>
<li>Knowledge in Construction methodologies and procedures is a must&amp;nbsp;&amp;nbsp;</li>
<li>With excellent analytical and organizational skills&amp;nbsp;</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Construction Area Manager</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Contracts Engineer">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="161" data-name="Contracts Engineer" data-content="<p><strong>QUALIFICATIONS:</strong></p>
<ul>
<li>Candidate must possess at least a Professional License (Passed Board Exam) in Civil Engineering</li>
<li>Must have at least 1 year experience in bidding and awarding of contracts</li>
<li>Can work under pressure and with deadlines</li>
<li>Innovative and has initiative</li>
<li>Good communication skills</li>
<li>Must be willing to work in the head office</li>
</ul>
<p>&amp;nbsp;</p>
<p><strong>RESPONSIBILITIES:</strong></p>
<ul>
<li>Provide cost evaluation to contractor bids and shop drawings</li>
<li>Prepare and analyze cost comparison to design budget and cost studies</li>
<li>Preparation and management of contracts to subcontractors</li>
<li>Evaluation of contracts</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Contracts Engineer</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Design &amp; Engineering</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Cost Engineer">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="160" data-name="Cost Engineer" data-content="<p><strong>QUALIFICATIONS:</strong></p>
<ul>
<li>Candidate must possess at least the Professional License (Passed Board/Professional License Exam) in Civil Engineering</li>
<li>Preferably 1-2 years work experience in Engineering - Quantity Surveying/Cost Management</li>
<li><strong>Fresh graduates are welcome to apply!</strong></li>
<li>Can work under pressure and with deadlines</li>
<li>Innovative and has initiative</li>
<li>Good communication skills</li>
<li><strong>Must be willing to work in the head office</strong></li>
</ul>
<p><strong>RESPONSIBILITIES:</strong></p>
<ul>
<li>Estimate architectural and structural works of a project</li>
<li>Generate project budget from the estimated quantities</li>
<li>Cost evaluation and monitoring</li>
<li>Permits requirement monitoring and collation</li>
<li>Closing of contracts, work orders, and purchase orders</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Cost Engineer</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Design &amp; Engineering</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Cost Officer">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="246" data-name="Cost Officer" data-content="<p><strong><u>QUALIFICATIONS:</u></strong></p>
<ul>
<li>Must be a graduate of BS Civil Engineering</li>
<li>Must be with at least <strong>5 years experience in Cost Management</strong></li>
<li>Must be a Licensed Civil Engineer</li>
</ul>
<p><strong><u>JOB DESCRIPTION:</u></strong></p>
<ul>
<li>Prepares and issues for construction budget per entity</li>
<li>Ensures sufficiency of data gathered by cost engineers for budget generation</li>
<li>Gathers references by coordinating with different departments for budget generation</li>
<li>Creates estimates based on the plans provided by Architects, Design Team</li>
<li>Checks quantity and unit costs prior budget issuance</li>
<li>Performs quantity and cost comparison and analysis to check cost per area or cost for volume for projects</li>
<li>Verifies budget for other departments (MEPF and Contracts Department) prior award to subcontractors</li>
<li>Handles all pre-launch, on-going and RFO projects</li>
<li>Submits weekly reports for monitoring of construction items (Rebar, aggregates)</li>
<li>Performs cost control and cost variance analysis</li>
<li>Provides instructions and guidance to Cost Engineers during the process of budget generation</li>
<li>Organizes workflow and delegates tasks appropriately for an effective manpower loading</li>
<li>Monitors employee productivity and ensures quality of work output</li>
<li>Assigned as a subject matter expert</li>
<li>Assigned to special task as requested by management</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Cost Officer</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Design &amp; Engineering</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Credit &amp; Collection Assistant">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="138" data-name="Credit &amp; Collection Assistant" data-content="<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Candidate must possess at least a Bachelor's/College Degree on Accountancy/Banking/Financing, Management or any-related courses.&amp;nbsp;</li>
<li>At least 2-3 year(s) of working experience in the related field is required for this position.</li>
<li>Can work with minimal supervision.</li>
<li>Knowledgeable in MS Excel and MS Word.</li>
<li>Analytical thinking skills is an advantage.</li>
<li>Computer literate.</li>
<li>With experience in real estate is an advantage.</li>
<li>Fast learner and can be a future team leader.</li>
</ul>
<p><strong>JOB DESCRIPTION</strong>:</p>
<ul>
<li>Preparation of notices, memo and reminder letter.</li>
<li>Preparation of Statement of Account (SOA).</li>
<li>Proper allocation, analysis, and adjustments of clients ledger.</li>
<li>Can do multi-tasking related default activities.</li>
<li>Uploading of default&amp;nbsp;SOA to PDF.&amp;nbsp;</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Credit &amp; Collection Assistant</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Credit &amp; Collection</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Customer Care Specialist">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="203" data-name="Customer Care Specialist" data-content="<div class=&quot;sx2jih0 zcydq86q zcydq86v zcydq86w&quot;>
<div class=&quot;sx2jih0 _17fduda0 _17fduda2&quot;>
<div class=&quot;sx2jih0 zcydq866&quot;>
<div class=&quot;_1x1c7ng0&quot; data-automation=&quot;jobDescription&quot;>
<div class=&quot;sx2jih0&quot;>
<p><strong>RESPONSIBILITIES</strong></p>
<ul>
<li>Assist in handling clients' concerns</li>
<li>Appropriately and timely coordinate and relay clients' concerns and inquiries&amp;nbsp;</li>
<li>Assess clients' concerns by getting data and information from concerned departments</li>
<li>Consistently follow-up on the progress of clients' concerns and requests</li>
<li>Recommend viable solutions based on the data gathered</li>
</ul>
<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Graduate of any four (4) year degree course (preferably Business and Hospitality related course)</li>
<li>Minimum of 1 year relevant experience in customer service of a real estate company or in a BPO industry</li>
<li>Has a good customer relations skills, friendly demeanor, can-do attitude, and willingness to help at all times</li>
<li>Can handle work pressure and has good temper in handling different types of customer</li>
<li>Has&amp;nbsp;a postive attitude and project professionalism at all times</li>
<li>Adept in MS Office Application, familiar on PIVOT table an advantage</li>
<li>Has excellent negotiation and customer service skills</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class=&quot;sx2jih0 zcydq86q zcydq86v zcydq86w&quot;>
<div class=&quot;sx2jih0 _17fduda0 _17fduda2&quot;>
<div class=&quot;sx2jih0 zcydq866&quot;>&amp;nbsp;</div>
</div>
</div>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Customer Care Specialist</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Customer Care</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Design Assistant/Architect">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="157" data-name="Design Assistant/Architect" data-content="<p><strong>Qualifications :</strong></p>
<ul>
<li>Candidate must possess at least a Bachelor's/College Degree in Architecture or equivalent.</li>
<li>Graduates of Architecture Technology, Drafting Technology, Product Design and Development Technology, Mechanical Drafting Technology and Graphics Technology or any related courses are encouraged to apply.</li>
<li>Fresh graduates/Entry level applicants are welcome to apply</li>
<li><strong>Familiar and Proficient with the following program/application : Revit Archi and Revit MEP for drawing / Navis for checking the drawing</strong></li>
<li>Must be a Team Player</li>
<li>Must be willing to work in the Head Office (Makati City)</li>
</ul>
<p><strong>Responsibilities:</strong></p>
<ul>
<li>Use of Building Information Modelling (BIM) to perform drawing work tasked</li>
<li>Resonsible for basic CAD design and details</li>
<li>Responsible for preparation of shop drawings and as-built drawings.</li>
<li>Responsible for&amp;nbsp;filing&amp;nbsp;and organizing data</li>
<li>Produce shop drawings as per detail given by engineer/supervisor/manager</li>
<li>Report to the manager/supervisor/engineer in charge and perform work task assigned</li>
<li>Monitor modeling/update drawing/ inform Project Manager/supervisor/engineer if there is any changes</li>
<li>Coordinate and monitor shop drawing submission schedule.</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Design Assistant/Architect</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Design &amp; Engineering</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Electrical Engineer (Site-Based)">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="233" data-name="Electrical Engineer (Site-Based)" data-content="<p><strong>RESPONSIBILITIES</strong></p>
<ul>
<li>Preparation / Application of Utilities for Temporary facilities</li>
</ul>
<ol>
<li>Power</li>
<li>Water</li>
<li>Telephone</li>
</ol>
<ul>
<li>Application for Permanent power and water of project</li>
<li>Estimates (Rehash) and orders DMCI supplied materials, ensures timely delivery and monitor inventory of OSM and subcontractor materials</li>
<li>Reviews plan/drawing and ensures correct implementation</li>
<li>Manages / Coordinates with Electrical Subcontractor</li>
<li>Participates on toolbox meeting and ensures safe work practices are implemented</li>
<li>Submits daily activity / accomplishment report to office engineer</li>
<li>Ensures full compliance of checklist forms</li>
<li>Monitors productivity of EE Subcontractor</li>
<li>Prepares detailed schedule tied up on the general schedule prepared by the PIC</li>
<li>Secure approval of shop drawings prior to implementation</li>
<li>Checking of As-Built plans and ensuring accuracy of submitted As-Built</li>
<li>Prepares RFI and follow up response in case of plan deviation / conflict from consultant / Main office</li>
<li>Reconciles change order and closing of account with the EE contractor</li>
<li>Billing evaluation of EE contractor</li>
<li>Prepares request for payment for Meralco billing with attached Analysis / Justification</li>
<li>Coordination for approval of power distribution to Meralco until energization</li>
<li>Coordinates and Supervises installation of Genset, Busduct and Low Voltage Switchgear</li>
</ul>
<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Candidate must be a graduate of BS Electrical Engineering</li>
<li>Willing to be assigned in any project within Metro Manila&amp;nbsp;</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Electrical Engineer (Site-Based)</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Equipment Engineer">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="171" data-name="Equipment Engineer" data-content="<p><strong>DUTIES AND RESPONSIBILITIES</strong></p>
<ul>
<li>Equipment Management</li>
<li>Facilitate mobilization of equipment for project use and ensure availability of all needed equipment in site.</li>
<li>Coordinate with warehouse personnel for equipment transfer and/or safekeeping. Maintain a dispatch board or log sheet.</li>
<li>Study, prepare, and supervise project&amp;rsquo;s equipment schedule of activities. Review and prepare equipment daily time record.</li>
<li>Monitor daily status of equipment including equipment breakdown, availability, utilization, and fuel consumption.</li>
<li>Subcontracts Management</li>
<li>Supervise and maintain an inventory of motor pool manpower of the project. Coordinate motor pool manpower with neighboring project.</li>
<li>Project Financials and Cost Management</li>
<li>Evaluate and ensure accuracy of subcontractor billings and equipment rental billings.</li>
</ul>
<p><br /><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Candidate must be a graduate of BS Mechanical Engineering or BS Electrical Engineering</li>
<li>Preferably with 3-4 years related experience on-site</li>
<li>Preferably a licensed Mechanical/Electrical Engineer</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Equipment Engineer</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Equipment Manager">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="199" data-name="Equipment Manager" data-content="<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Candidate must have at least 10 years solid experience in Construction industry with a minimum of 3 years in managerial capacity</li>
<li>Candidate must be a graduate of BS Mechanical or Electrical Engineering</li>
</ul>
<p><strong>RESPONSIBILITIES</strong></p>
<ul>
<li>Oversee and ensure that the implementation of all Equipment Group&amp;rsquo;s tasks, activities, and programs are timely and according to the agreed standard.</li>
<li>Ensure smooth execution of Equipment Group&amp;rsquo;s services and products and that any problems or issues that hampers the operation are addressed.</li>
<li>Escalate high impact issues to Head of Construction for direction.</li>
<li>Recommend improvements and innovations in the group&amp;rsquo;s processes, programs, systems, etc. that will improve timeliness, quality, customer service, or cost efficiency.</li>
<li>Ensure strict adherence to policies, procedures, and practices within the company.</li>
<li>Ensure compliance to the approved safety, health and environmental requirements prescribed in the ESH plan.</li>
<li>Ensure that critical activities are covered with method statements and/or calculations to prove safe work practices.</li>
<li>Ensure adequacy of training and certification for operators and equipment utilized in critical activities.</li>
<li>Analyze injury case studies and other safety statistics to identify trends and recommend solution and other improvement plans to avoid recurrence.</li>
<li>Ensure adherence to Preventive Maintenance Plan.</li>
<li>Ensure that products and services are carried out according to quality standards.</li>
<li>Address identified non-conformities and ensuring all NCRs are properly, effectively, and timely addressed through identification of corrective and preventive actions.</li>
<li>Ensure that materials and equipment are procured in accordance to the issued specification.</li>
<li>People Management</li>
<li>Financials and Cost Management</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Equipment Manager</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Field Recruiter">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="214" data-name="Field Recruiter" data-content="<p><strong>DUTIES AND RESPONSIBILITIES:</strong></p>
<p><u>Online Recruitment</u></p>
<p>1.1. Coordinate manpower requisition request received from project sites to involved groups or individuals.</p>
<p>1.2. Source applicants through the following channels/strategies: Facebook, referral, site job fair, provincial visit, and flyering.</p>
<p>1.3. Conduct interview with applicants.</p>
<p>1.4. Coordinate trade testing of applicants with the project site.</p>
<p>1.5. Discuss pre-employment requirements to the new hires.</p>
<p>1.6. Address all recruitment concerns from applicants, project site employees, and project PICs and AMs.</p>
<p><u>Field Recruitment</u></p>
<p>2.1. Coordinate with the PIC, AM, Guards, Timekeeper, and Trade tester on the conduct of field recruitment on the particular project site.</p>
<p>2.2. Coordinate all the logistical requirements needed for the conduct of the field recruitment.</p>
<p>2.3. Administer the 1-day recruitment process on the site:</p>
<p>&amp;middot; Conduct interview with the applicants</p>
<p>&amp;middot; Monitor the trade testing</p>
<p>&amp;middot; Discuss pre-employment requirements to the new hires</p>
<p><u>Administrative</u></p>
<p>3.1. Endorse applicant for Pre-employment medical examination</p>
<p>3.2. Assist in processing Employee Movement Form</p>
<p>3.3. Properly file pertinent documents and records.</p>
<p>3.4. Update recruitment monitoring records</p>
<p>3.5. Prepare recruitment report based on schedule or as required.</p>
<p><strong>QUALIFICATIONS:</strong></p>
<ol>
<li>Graduate of BS Psychology / BS Human Resource Development Management / BS Behavioural Science or any related course</li>
<li>At least 1 year of experience in Direct Labor Recruitment</li>
<li>Willing to be assigned at our Project Site in Las Pi&amp;ntilde;as City</li>
</ol>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Field Recruiter</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Human Resources</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Finance Assistant">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="136" data-name="Finance Assistant" data-content="<p><strong>QUALIFICATIONS:</strong></p>
<ul>
<li>Candidate must possess at least Bachelor's/College Degree in Business Studies/Administration/Management, Finance/Accountancy/Banking or equivalent.</li>
<li>At least 1&amp;nbsp;Year(s) of working experience in the related field is required for this position.</li>
<li>With experience of at least 1 year in Bank Financing, Collecting Clients or Help Desk.</li>
<li>Must be keen to details, analytical and resourceful.</li>
<li>Must have the ability to multi-task and result-oriented.</li>
<li>Fast learner and responsible to the task assigned.</li>
<li>Should have confidence in dealing internal and external clients.</li>
<li>Has good communication skills.</li>
<li>With respect to others.</li>
</ul>
<p><strong>JOB DESCRIPTIONS:</strong></p>
<ul>
<li>Generate reminder letter and send thru courier, e-mail and intelli-messaging.</li>
<li>Coordinate with courier on the status of reminder letter.</li>
<li>Call-out to client w/o Letter of Guaranty yet.</li>
<li>Assist clients on their bank financing application.</li>
<li>Client interface, if they need personal discussion.</li>
<li>Prepare request on waiver of penalty as needed.</li>
<li>Coordinate with banks on developer&amp;rsquo;s incentive.</li>
<li>Provide requirements for project accreditation to the banks.</li>
<li>Request with other departments for the documents not yet on file but required by the bank.</li>
<li>Prepare weekly and monthly reports.</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Finance Assistant</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Finance</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Fit-Out Engineer">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="261" data-name="Fit-Out Engineer" data-content="<p><strong>QUALIFICATIONS:</strong></p>
<ul>
<li>Candidate must possess at least Bachelor's/College Degree in any Engineering Program<strong>.</strong></li>
<li>At least 1 Year(s) of working experience in fit-out or finishing works.</li>
<li>Must be willing to be assigned in&amp;nbsp;<strong>Acacia Estates, Taguig City</strong></li>
</ul>
<p>&amp;nbsp;</p>
<p><strong>RESPONSIBILITIES:</strong></p>
<ul>
<li>Prepare shop drawing, drawing detailing, assembly blow-up and ensure accuracy and consistency prior to fabrication/installation</li>
<li>Prepare/complete as-built drawing and disseminate it to intended recipients.</li>
<li>Securing shop drawings and product samples from Supplier and Subcontractor (e.g. granites, railings and other metal works, wooden doors, mirror, etc.)</li>
<li>Securing as-built drawings and testing certificates from subcontractors (e.g. electrical, plumbing, fire pro, and FDAS)</li>
<li>Disseminate approved RFA/RFI that affects current scope</li>
<li>Ensure approved drawings are current, distributed, logged and filed accordingly</li>
<li>Maintain central filing system and ensure no document is retrieved without approval</li>
<li>Update action sheets issued by Design and Engineering and Interior Design Department. Ensures these are disseminated to the people and contractors concerned</li>
<li>Update submittal and sample board and ensure they are logged with standard control number</li>
<li>Maintain files of Request for Information (RFI), Request for Approval (RFA) and Confirmation of Verbal Instruction (CVI) transmittal and response from concerned department</li>
<li>Other tasks that may be assigned from time to time</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Fit-Out Engineer</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Interior Design</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="HR Assistant (Direct Labor - Recruitment)">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="213" data-name="HR Assistant (Direct Labor - Recruitment)" data-content="<p><strong>DUTIES &amp;amp; RESPONSIBILITIES</strong></p>
<ol>
<li>Conduct the initial screening of the direct labor applicants (staff, motorpool, skilled workers, or labor).</li>
<li>Endorse the skilled worker applicants for trade testing and interview with the foreman and area manager.</li>
<li>Conduct testing and schedule for next level interview the qualified direct labor staff applicants</li>
<li>Regularly provide updates on direct labor hiring</li>
<li>Ensure that all applicants have the needed requirements</li>
</ol>
<p><strong>QUALIFICATIONS</strong></p>
<ol>
<li>Graduate of BS Psychology / BS Human Resource Development Management / BS Behavioural Science or any related course</li>
<li>At least 1 year experience in Direct Labor Recruitment</li>
</ol>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>HR Assistant (Direct Labor - Recruitment)</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Human Resources</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="HR Assistant (Direct Labor - Recruitment) - Cebu Based">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="215" data-name="HR Assistant (Direct Labor - Recruitment) - Cebu Based" data-content="<p><strong>DUTIES &amp;amp; RESPONSIBILITIES</strong></p>
<ol>
<li>Conduct the initial screening of the direct labor applicants (staff, motorpool, skilled workers, or labor).</li>
<li>Endorse the skilled worker applicants for trade testing and interview with the foreman and area manager.</li>
<li>Conduct testing and schedule for next level interview the qualified direct labor staff applicants</li>
<li>Regularly provide updates on direct labor hiring</li>
<li>Ensure that all applicants have the needed requirements</li>
</ol>
<p><strong>QUALIFICATIONS</strong></p>
<ol>
<li>Graduate of BS Psychology / BS Human Resource Development Management / BS Behavioural Science or any related course</li>
<li>At least 1 year experience in Recruitment</li>
</ol>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>HR Assistant (Direct Labor - Recruitment) - Cebu Based</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Human Resources</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="HR Assistant/Specialist - Recruitment (Project Based)">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="244" data-name="HR Assistant/Specialist - Recruitment (Project Based)" data-content="<p><strong>QUALIFICATIONS:</strong></p>
<ul>
<li>Graduate of BS in Human Resource Management or BS Psychology</li>
<li><strong>Fresh graduates are encouraged to apply</strong></li>
<li>Excellent communication and interpersonal skills</li>
<li>Has strong and sound decision-making skills</li>
<li>Willing to start ASAP</li>
<li>Contract duration is 6 months</li>
</ul>
<p><strong>RESPONSIBILITIES:</strong></p>
<ul>
<li>Prepare and post jobs to appropriate job sources</li>
<li>Source and attract candidates by using databases, social media, etc.</li>
<li>Screen candidates' resumes and job applications</li>
<li>Conduct interviews using various reliable personnel selection tools/methods to filter candidates within schedule</li>
<li>Assess applicants&amp;rsquo; relevant knowledge, skills, soft skills, experience and aptitudes</li>
<li>Onboard new employees in order to become fully integrated</li>
<li>Monitor and apply HR recruiting best practices</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>HR Assistant/Specialist - Recruitment (Project Based)</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Human Resources</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="HR Specialist - Training">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="216" data-name="HR Specialist - Training" data-content="<p><strong>RESPONSIBILITIES</strong></p>
<ul>
<li>Responsible in conducting training programs for direct labor employees.</li>
<li>Update orientation material/module for direct labor orientation.</li>
<li>Responsible for all logistical and coordination requirements for all assigned internal and external trainings</li>
<li>Responsible for the effective planning, development, coordination, and implementation of training and learning interventions for direct labors to enhance their technical skills and behavioral competencies</li>
<li>Responsible in conducting training needs analysis and devising basic training modules</li>
<li>Facilitate on soft skills training such as WAVE (Work Attitude and Values Enhancement, Digital Utilization, etc.)</li>
</ul>
<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Graduate of BS Psychology, Behavioral Science, Industrial Relations or its equivalent</li>
<li>With at least 1 year work experience in training facilitation from a Construction company is an advantage</li>
<li>Ability to communicate/function and interact effectively across levels of staff including senior managers</li>
<li>Proficiency in MS Office, Facilitation, Presentation, Module Development</li>
<li>Experience and exposure on e-learning tools and processes an advantage</li>
<li>Enthusiastic with a positive, optimistic personality</li>
<li>Able to build trusting relationships with others</li>
<li>Excellent communication skills, both written &amp;amp; verbal</li>
<li>Proven organizational skills, works well individually and with teams, able to set and meet deadlines with quality results</li>
<li>Can multi- task and able to work in a fast paced work environment</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>HR Specialist - Training</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Human Resources</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Interior Design Assistant">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="262" data-name="Interior Design Assistant" data-content="<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Graduate of Bachelor's/College Degree in Interior Design or Architecture</li>
<li>With at least 1-year working experience in a similar field</li>
<li>Willing to do leg works/ oftentimes on-field</li>
<li>Highly creative and keen on details</li>
<li>Knowledge on 3D max is an advantage</li>
<li>Average technical skills in CAD Drawing Rendering</li>
<li>Result-oriented</li>
</ul>
<p><strong>RESPONSIBILITIES</strong></p>
<ul>
<li>Plans design conceptualization of showrooms, model units, clubhouses, sales offices, and other interior environments</li>
<li>Handles project coordination and implementation with the team (engineers, architects, marketing, and project development)</li>
<li>Provides well-designed spaces for all end users</li>
<li>Coordinates/follows up and reviews shop drawing from suppliers/subcontractors</li>
<li>Prepares marketing peripherals, the cost estimate of items ( furniture, fixture, appliances, accessories, etc. )</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Interior Design Assistant</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Interior Design</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Internal Audit Specialist">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="270" data-name="Internal Audit Specialist" data-content="<h2 class=&quot;css-eoghzg e1tiznh50&quot;>Job description</h2>
<div>
<div class=&quot;jd-appended-job-description&quot;>
<div class=&quot;jd-section-employer&quot;>
<div class=&quot;jd-description-text&quot;>
<ul>
<li>Must have a Bachelor&amp;rsquo;s/College degree in Banking, Accountancy, Financial Management or any equivalent course</li>
</ul>
<ul>
<li>1 &amp;ndash; 3 years of experience on internal auditing</li>
</ul>
<ul>
<li>CPA or CIA is an advantage</li>
</ul>
<ul>
<li>Knowledgeable in auditing practices and procedures</li>
</ul>
<ul>
<li>Excellent verbal and written communication skills</li>
</ul>
<ul>
<li>Ability to work around large amount of data</li>
</ul>
<ul>
<li>Excellent analytical skills</li>
</ul>
<ul>
<li>Detail-oriented</li>
</ul>
<ul>
<li>Proficient in the use of MS office applications</li>
<li>Must willing to work at our Head Office in Bangkal, Makati</li>
</ul>
<p><strong>Responsibilities:</strong></p>
<ul>
<li>Performs full audit cycle over construction operations effectiveness, financial &amp;amp; information reliability and compliance with directives and regulations</li>
</ul>
<ul>
<li>Prepares reports that reflect audit results of engagement</li>
</ul>
<ul>
<li>Ensures that financial statements are accurate and reliable</li>
</ul>
<ul>
<li>Conducts cash/financial and inventory audit</li>
</ul>
<ul>
<li>Ensures that all audit engagements are accomplished within given period set forth in the audit plan or by the Audit Manager</li>
</ul>
</div>
</div>
</div>
</div>
<p>&amp;nbsp;</p>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Internal Audit Specialist</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Internal Audit</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Junior Accountant">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="135" data-name="Junior Accountant" data-content="<p>QUALIFICATIONS</p>
<ul>
<li>Candidate must possess at least&amp;nbsp;<strong>Bachelor's/College Degree in Accountancy</strong></li>
<li>CPA is an advantage</li>
<li>Preferably with 1&amp;nbsp;Year of working experience in the related field is required for this position.</li>
</ul>
<p>RESPONSIBILITIES</p>
<ul>
<li>Prepares monthly statements by collecting data; analyzing and investigating variances; summarizing data, information, and trends.</li>
<li>Responds to financial inquiries by gathering, analyzing, summarizing, and interpreting data.</li>
<li>Applying financial principles and practices; developing recommendations.</li>
<li>Prepares special reports by studying variances; preparing budgets; developing forecasts.</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Junior Accountant</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Accounting</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Landscape Architect/Design Assistant">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="192" data-name="Landscape Architect/Design Assistant" data-content="<p><strong>RESPONSIBILITIES</strong></p>
<ul>
<li>Plans and implements the development and preparation of landscape construction plans, specifications, estimates, and other contract documents</li>
<li>Reviews and makes recommendations concerning landscape architecture and design, and makes final decisions about the design of specific project</li>
<li>Prepares shop drawings for correctness and conformity with approved plans and specifications</li>
<li>Interprets landscape plans, specifications, and codes and regulations related to the work</li>
<li>Oversees and conducts field inspections prior to finalization of landscape plans and as landscape projects progress to determine compliance with regulations and specifications</li>
<li>Supervises the preparations of design changes and revisions to construction plans</li>
<li>Facilitates execution of landscape design for each project in conformity with the approved plan</li>
<li>Ensures the all landscape projects are maintained</li>
</ul>
<p><strong>REQUIREMENTS</strong></p>
<ul>
<li><strong>Graduate of Landscape Architecture</strong></li>
<li>Preferably with at least 1 year experience as Landscape Designer or Landscape Architect</li>
<li>Good interpersonal and communication skills</li>
<li>Outstanding communication skills both verbal or written communication</li>
<li>Open for fresh graduates</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Landscape Architect/Design Assistant</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Concepts &amp; Landscape Management</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="MEP Cost Engineer - Team Leader">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="256" data-name="MEP Cost Engineer - Team Leader" data-content="<div class=&quot;_1wkzzau0 a1msqi76&quot;>
<section>
<div class=&quot;_1wkzzau0 szurmz0 szurmz7&quot;>
<div class=&quot;_1wkzzau0 a1msqi6y&quot;>
<div data-automation=&quot;jobAdDetails&quot;>
<div class=&quot;_1wkzzau0 _1pehz540&quot;>
<p>DMCI Homes is currently seeking a dedicated and experienced QS to join our commercial team in Makati. As MEP QS, you will play a pivotal role in project cost management and control, ensuring that our project are executed efficiently and within budget.&amp;nbsp;</p>
<p>&amp;nbsp;</p>
<p><strong>QUALIFICATIONS:&amp;nbsp;</strong></p>
<ul>
<li>Candidate must be a graduate of mechanical or Electrical Engineering&amp;nbsp;</li>
<li>At least 5 years QS experience with at least 2 years supervisory experience.</li>
<li>Must be willing to work at the Head Office.&amp;nbsp;</li>
</ul>
<p>&amp;nbsp;</p>
<p><strong>KEY JOB RESPONSIBILITIES:&amp;nbsp;</strong></p>
<ul>
<li>Collaborate with MEP Team to prepare accurate and detailed cost estimates and bill of quantities (Budget cost estimates and Pre-tender estimates).</li>
<li>Manage the preparation of tender documents, tender clarification, and tender analysis report.</li>
<li>Review and analysis of contractor's proposal for variation orders and claims</li>
<li>Manage change orders, variations and claims while maintaining accurate record up to the final account.</li>
<li>Manage the preparation of BOM through CostX</li>
<li>Assist in developing/updating training materials needed to enhance commercial team's competencies.</li>
<li>Undertake cost analysis, value engineering and risk and opportunity costs.</li>
<li>Administer subcontractor's contract obligations, entitlements, and procedures</li>
<li>Monitor project costs throughout the construction lifecycle, Identifying cost variances and proposing cost-effective solutions and monitor project financial performance.</li>
<li>Oversee and improve project reporting processes</li>
<li>Manage the team in preparation of accurate monthly progress reports and cost forecast.</li>
<li>Supervise coordination between team members and ensure effective collaboration and communication&amp;nbsp;</li>
<li>Benchmarking</li>
</ul>
</div>
</div>
</div>
</div>
</section>
</div>
<div class=&quot;_1wkzzau0 a1msqi76&quot;>
<section>
<div class=&quot;_1wkzzau0 a1msqi5i a1msqi0 _6ly8y50&quot;>&amp;nbsp;</div>
</section>
</div>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>MEP Cost Engineer - Team Leader</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Design &amp; Engineering</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="MEPF Engineer">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="264" data-name="MEPF Engineer" data-content="<p><strong>QUALIFICATIONS:</strong></p>
<ul>
<li>Graduate in Mechanical/Electrical/Sanitary Engineering, Bachelor of Engineering Technology - Major in Electrical Technology, or BS in Industrial Technology</li>
<li>Fresh graduates are welcome to apply</li>
<li>Able to read and interpret plans and specifications.</li>
<li>Ability to interact effectively with others to achieve mutual objectives; readily offers assistance to others to facilitate their goal accomplishment.</li>
<li>Able to implement standard work sequence according to schedule tied up to the general construction Schedule</li>
<li>Ability to conduct and interpret the different testing required</li>
<li>Able to identify different construction materials and equipment.</li>
<li>Able to identify appropriate methods of measurement/quantification.</li>
<li>Able to secure quotations from subcon/supplier.</li>
<li>Able to evaluate quotations from suppliers/subcontractor accurately.</li>
<li>Demonstrate appreciation of MEP Works.</li>
<li>Able to identify and evaluate changes in plans and specifications.</li>
<li>Able to collate technical data.</li>
<li>Able to conduct basic engineering Computation.</li>
</ul>
<p><strong>1. Quality Control</strong></p>
<p>❑ Ensure the unit is CAS accepted prior to start of MEP works</p>
<p>❑ Conducts audit before installation of Plumbing Fixtures and Devices such as:</p>
<p>A. Waterline Flushing</p>
<p>B. De-clogging of Drains</p>
<p>C. Hydro Test to ensure that no leak manifests</p>
<p>D. Alignment &amp;amp; Location of Stub outs</p>
<p>❑ Witness and accepts system test endorsed by subcontractor for the functionality test of electrical and plumbing fixtures</p>
<p>A. Electrical &amp;amp; FDAS Testing (Live Test, Torque Test, Insulation Resistance Test &amp;amp; Continuity Test)</p>
<p>B. Plumbing, Sanitary &amp;amp; Fire Protection System Test (Visual &amp;amp; Functionality)</p>
<p>❑ Monitors completion of installation of wiring devices, lighting fixtures, plumbing fixtures and other devices for units.</p>
<p>❑ Ensure processed quality control records/checklists are available and adequately controlled.</p>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>MEPF Engineer</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Post Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Management Trainee for Construction">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="194" data-name="Management Trainee for Construction" data-content="<p><strong>Qualifications:</strong></p>
<p>●&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Candidates must possess a Bachelor's Degree in Engineering (Civil, Mechanical, Electrical)</p>
<p>●&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Must have a strong desire to pursue a career in Construction</p>
<p>●&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Must be able to work with minimum supervision</p>
<p>●&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Must have excellent scholastic records</p>
<p>●&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Must have excellent written and verbal communication skills</p>
<p>●&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Must have effective leadership and interpersonal skills</p>
<p>●&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Must be able to work individually and with a team</p>
<p>●&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Should be result-oriented, systematic, and organized</p>
<p>●&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;PRC Licensure is an advantage but is not required</p>
<p>●&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Work experience is preferred but not a requirement</p>
<p>&amp;nbsp;</p>
<p><strong>Responsibilities:&amp;nbsp;</strong></p>
<p>The Management Trainee Program offers a holistic perspective and exposure on construction through various trainings such as: classroom and hands-on training, coaching and mentoring by veteran professionals in the organization.</p>
<p>As a Management Trainee, you will be developed to:</p>
<p>●&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Manage the delivery of the overall project construction to the required quality standards requirements of the project</p>
<p>●&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Manage the review of key milestone deliverables for completion in relation to quality of construction</p>
<p>●&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Review and manage all construction&amp;nbsp;related queries to arrive at an amicable resolution</p>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Management Trainee for Construction</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Management Training</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Management Trainee for Design Management">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="195" data-name="Management Trainee for Design Management" data-content="<p><strong>Qualifications:</strong></p>
<ul>
<li>Candidates must possess a Bachelor's Degree in Engineering (Civil, Mechanical, Electrical)</li>
<li>Must have a strong desire to pursue a career on design management</li>
<li>Must be able to work with minimum supervision</li>
<li>Must have excellent scholastic records</li>
<li>Must have excellent written and verbal communication skills</li>
<li>Must have effective leadership and interpersonal skills</li>
<li>Must be able to work individually and with a team</li>
<li>Should be result-oriented, systematic, and organized</li>
<li>PRC Licensure is an advantage but is not required</li>
<li>Work experience is preferred but not a requirement</li>
</ul>
<p><strong>Responsibilities:&amp;nbsp;</strong></p>
<p>The Management Trainee Program offers a holistic perspective and exposure on design through various trainings such as: classroom and hands-on training, coaching and mentoring by veteran professionals in the organization.</p>
<p>As a Management Trainee, you will be developed to:</p>
<ul>
<li>Manage the delivery of the overall project construction/design requirements during the construction phase to the required quality standards requirements of the project</li>
<li>Take the responsibility for coordinating the construction/ design related matters and solutions among various project stake holders in relation to all design approvals, reviews and coordination throughout the construction period</li>
<li>Support the project team to review and coordinate to ensure all design changes and solutions are implemented and coordinated into the project design documentation</li>
<li>Manage the review of key milestone deliverables for completion in relation to quality of construction/ design, implementation and coordination of design changes</li>
<li>Review and recommend project design changes</li>
<li>Assess project feasibility by analyzing technology, resource needed and market demand</li>
<li>Review and recommend approval of contracts or cost estimates</li>
<li>Review and manage all construction/ design related queries to arrive at an amicable resolution</li>
<li>Review and ensure all construction plans are optimally designed</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Management Trainee for Design Management</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Management Training</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Management Trainee for Property Management">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="196" data-name="Management Trainee for Property Management" data-content="<p><strong>Qualifications:</strong></p>
<ul>
<li>Must possess a Bachelor's Degree in Electrical/Mechanical Engineering, Property Management, Business Administration, Management, or equivalent</li>
<li>Must have a strong desire to pursue a career in Property Management</li>
<li>Must have excellent scholastic records</li>
<li>Must be able to work with minimum supervision</li>
<li>Must have excellent written and verbal communication skills</li>
<li>Must have effective leadership and interpersonal skills</li>
<li>Must be able to work individually and with a team</li>
<li>Must be result-oriented, systematic, and organized</li>
<li>PRC License is an advantage but is not required</li>
<li>Work experience is preferred but not a requirement</li>
</ul>
<p><strong>Responsibilities:</strong></p>
<p>The Management Trainee Program offers a holistic exposure on Property Management through classroom &amp;amp; hands-on training and coaching &amp;amp; mentoring by subject matter exports within the organization. As a Management Trainee, you will be developed to:</p>
<ul>
<li>Manage the delivery of the overall property management requirements that adhere quality standards</li>
<li>Coordinate property management matters and solutions among various project stake holders</li>
<li>Manage the administration and facilities of properties</li>
<li>Ensure that properties have efficient collection systems</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Management Trainee for Property Management</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Management Training</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Marketing Coordinator - Cebu-Based">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="250" data-name="Marketing Coordinator - Cebu-Based" data-content="<p><strong>JOB DESCRIPTION:</strong></p>
<ul>
<li>Conduct site inspections to oversee the maintenance and upkeep of all merchandising items.</li>
<li>Identify areas for improvement including other departments concerns for site experience.</li>
<li>Upload construction milestone photos with details in the DMCI Website</li>
<li>Conduct booth exhibit inspections for assigned projects and identify areas for improvement.</li>
<li>Monitor presence and adequacy of collateral and merchandise materials.</li>
<li>Prepare, Submit and Secure approval of work plan on specific promotional and merchandising efforts based on job orders.</li>
<li>Validate marketing plan for project visibility by identifying and recommending strategic spots for outdoor merchandise with high target market reach / traffic</li>
<li>Update and maintain the Online Operations Monitoring System for tracking of request transmitted to Purchasing.</li>
<li>Regularly align with Brand specialist for branding and creative content consistency and technical concerns. May also directly coordinate with Creative but Brand need to be informed.</li>
</ul>
<p>&amp;nbsp;</p>
<p><strong>QUALIFICATIONS:</strong></p>
<ul>
<li>Bachelor&amp;rsquo;s Degree in Management, Communications, Fine Arts, Art History, Visual Communications, and Advertising.</li>
<li>At least 1 years client-side or agency-side visual merchandising / trade marketing experience (real estate, FMCG/retail, publishing)</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Marketing Coordinator - Cebu-Based</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Marketing</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Mechanical Engineer">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="168" data-name="Mechanical Engineer" data-content="">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Mechanical Engineer</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Mechanical Engineer (Head Office)">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="167" data-name="Mechanical Engineer (Head Office)" data-content="<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Candidate must possess at least a Professional License (Passed Board/Bar/Professional License Exam) in Mechanical Engineering</li>
<li>Fresh graduates are welcome to apply.</li>
<li><strong>Wlling to be assigned in the Head Office (Bangkal, Makati City)</strong></li>
</ul>
<p><strong>RESPONSIBILITIES</strong></p>
<ul>
<li>Estimates (Rehash) and orders DMCI supplied materials, ensures timely delivery and monitors inventory of OSM and subcontractor materials</li>
<li>Review plans/drawings and ensures correct implementation</li>
<li>Manages / Coordinates with Plumbing / Sanitary and Fire Protection Subcontractor</li>
<li>Participates on toolbox meeting and ensures safe work practices are implemented</li>
<li>Monitors productivity of Plumbing / Sanitary and Fire Protection Subcontractor</li>
<li>Secures approval of shop drawings prior to implementation</li>
<li>Checking of As-Built plans and ensuring accuracy of submitted As-Built</li>
<li>Reconciles change order and closing of account with the Plumbing / Sanitary and Fire Protection contractor</li>
<li>Billing evaluation of Plumbing / Sanitary and Fire Protection contractor</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Mechanical Engineer (Head Office)</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Design &amp; Engineering</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Mechanical Engineer (RMC)">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="235" data-name="Mechanical Engineer (RMC)" data-content="<p><strong>Job Description:</strong></p>
<ul>
<li>Supervises the production unit of the batching plant.</li>
<li>Responsible for the availability and operating capability of plants, equipment and manpower needed for production , delivery and placement of concreate products.</li>
<li>Proper operation of production or handling equipment and proper assignment of people.</li>
<li>Makes a revision of any of the work instruction under the production unit in case of process control improvement to be reviewed by the RMC Manager.</li>
<li>Counter checks the defects found by the plant operator during the plant maintenance check up.</li>
<li>Prepares the Corresponding job order with the noted defect including the defect found by the preventive maintenance section</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Mechanical Engineer (RMC)</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Organizational Development Assistant/Specialist">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="217" data-name="Organizational Development Assistant/Specialist" data-content="<p><strong>1. Employee Engagement&amp;nbsp;</strong></p>
<p>1.1 Assist in the conceptualization and implementation of Employee Engagement programs or activities.</p>
<p>1.2 Conduct research and benchmarking with competitors and other companies on best practices in Employee Engagement.</p>
<p><strong>2. HR Business Process Improvement and Automations&amp;nbsp;</strong></p>
<p>2.1 Conduct HR process reviews and propose improvements that will increase the department's effectiveness and efficiency. Assist in the implementation of proposed improvements.</p>
<p>2.2 Assist in the digitization and automation projects of HR.</p>
<p>2.3 Monitor HR's business process compliance and resolution</p>
<p>2.4 Conduct research and benchmarking on automation, digitization, and other HR innovations.&amp;nbsp;</p>
<p><strong>3. Administrative</strong></p>
<p>3.1 Prepare, route, and liquidate Cash Advance for funding of all Organizational Development and Quality-related meetings, programs, and projects.</p>
<p>3.2 Assist in scheduling/setting up meetings and related logistical preparations and admin tasks including sending of invites, reserving a room, ordering of food, taking minutes.</p>
<p>3.3 Properly file documents and records.</p>
<p><strong>QUALIFICATIONS:</strong></p>
<ol>
<li>Graduate of BS Psychology, AB Behavioral Science, or BS Industrial Engineering&amp;nbsp;</li>
<li>With at least 1 year of relevant experience&amp;nbsp;</li>
</ol>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Organizational Development Assistant/Specialist</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Human Resources</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Organizational Development Manager">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="208" data-name="Organizational Development Manager" data-content="<p><strong>Job Summary:</strong></p>
<p>Organizational Development Manager is responsible for planning, organizing, management and implementation of programs that facilitates the professional development and continuous learning of team members, particularly executives and emerging leaders.</p>
<p><strong><em>Duties/Responsibilities:</em></strong></p>
<ul>
<li>Manages Organizational Development (OD) strategies and processes aimed towards achievement of Department and Corporate objectives on People Development.</li>
<li>Assesses OD needs of all department of DMCI Homes and its subsidiaries.</li>
<li>Leads the design, development, implementation and evaluation of programs, policies and strategies towards OD and People Development.</li>
<li>Assists with the provision of expert facilitation and coaching to supervisors and managers regarding OD methods and tools.</li>
<li>Manages the individual development planning process for executives and emerging leaders.</li>
<li>Spearheads the implementation of Quality and Employee Engagement programs of the Company.</li>
</ul>
<p><strong><em>Required Skills/Abilities:</em></strong></p>
<ul>
<li>Superior verbal and written communication skills.</li>
<li>Proficient with Microsoft Office or related software.</li>
<li>Excellent presentation and facilitation skills.</li>
<li>Ability to evaluate and research OD and People Development interventions and alternatives.</li>
<li>Ability to design and implement effective training and development.</li>
<li>Excellent leadership skills.</li>
</ul>
<p><strong><em>Education and Experience:</em></strong></p>
<ul>
<li>Master's degree in organizational development/organizational behavior is an advantage.</li>
<li>At least five years of experience working in organizational development for operations in a large organizational and/or functional business unit.</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Organizational Development Manager</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Human Resources</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Payroll Supervisor">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="238" data-name="Payroll Supervisor" data-content="<div class=&quot;z1s6m00 _1hbhsw66y _1hbhsw673 _1hbhsw674&quot;>
<div class=&quot;z1s6m00&quot; data-automation=&quot;job-details-job-highlights&quot;>
<div class=&quot;z1s6m00 _5135ge0 _5135ge2&quot;>
<div class=&quot;z1s6m00 _1hbhsw66e&quot;>
<h4 class=&quot;z1s6m00 _1hbhsw64y y44q7i0 y44q7il _1d0g9qk4 y44q7iv y44q7i21&quot;>Job Highlights</h4>
</div>
<div class=&quot;z1s6m00 _1hbhsw66e&quot;>
<ul class=&quot;z1s6m00 z1s6m03 _5135ge0 _5135ge6&quot;>
<li class=&quot;z1s6m00 _1hbhsw66u&quot;>
<div class=&quot;z1s6m00 _1hbhsw65a&quot;>
<div class=&quot;z1s6m00 _1hbhsw64y y44q7i0 y44q7i1 y44q7i21 _1d0g9qk4 y44q7ia&quot;>
<div class=&quot;z1s6m00 _1hbhsw65a _1hbhsw6fe _1hbhsw64 of5ilj2&quot; aria-hidden=&quot;true&quot;>
<div class=&quot;z1s6m00 _1hbhsw65u _1mx61b40 _1mx61b42&quot;>Competitive compensation and package</div>
</div>
</div>
</div>
</li>
<li class=&quot;z1s6m00 _1hbhsw66u&quot;>
<div class=&quot;z1s6m00 _1hbhsw65a&quot;>
<div class=&quot;z1s6m00 _1hbhsw64y y44q7i0 y44q7i1 y44q7i21 _1d0g9qk4 y44q7ia&quot;>
<div class=&quot;z1s6m00 _1hbhsw65a _1hbhsw6fe _1hbhsw64 of5ilj2&quot; aria-hidden=&quot;true&quot;>
<div class=&quot;z1s6m00 _1hbhsw65u _1mx61b40 _1mx61b42&quot;>Learning and development opportunities</div>
</div>
</div>
</div>
</li>
<li class=&quot;z1s6m00 _1hbhsw66u&quot;>
<div class=&quot;z1s6m00 _1hbhsw65a&quot;>
<div class=&quot;z1s6m00 _1hbhsw64y y44q7i0 y44q7i1 y44q7i21 _1d0g9qk4 y44q7ia&quot;>
<div class=&quot;z1s6m00 _1hbhsw65a _1hbhsw6fe _1hbhsw64 of5ilj2&quot; aria-hidden=&quot;true&quot;>
<div class=&quot;z1s6m00 _1hbhsw65u _1mx61b40 _1mx61b42&quot;>Flexible working arrangement</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class=&quot;z1s6m00 _1hbhsw66y _1hbhsw673 _1hbhsw674&quot;>
<div class=&quot;z1s6m00 _5135ge0 _5135ge2&quot;>
<div class=&quot;z1s6m00 _1hbhsw66e&quot;>
<h4 class=&quot;z1s6m00 _1hbhsw64y y44q7i0 y44q7il _1d0g9qk4 y44q7iv y44q7i21&quot;>Job Description</h4>
</div>
<div class=&quot;z1s6m00 _1hbhsw66e&quot;>
<div class=&quot;_1x1c7ng0&quot; data-automation=&quot;jobDescription&quot;>
<div class=&quot;z1s6m00&quot;>
<p><strong>RESPONSIBILITIES:</strong></p>
<ul>
<li>Oversee and ensure timely and accurate processing of all compensation-related deliverables including timekeeping, payroll administration, incentives processing, allowance processing, etc.</li>
<li>Regularly review and conduct comparative studies on the salary scales of all positions to ensure that the employees' compensation remains competitive</li>
<li>Consolidate and ensure completeness, accuracy, and consistent update of salary information and other historical records pertaining to compensation</li>
<li>Ensure confidentiality of all compensation-related information and records</li>
<li>Administer the HR payroll system and HR employee portal system and ensure regular, timely, and accurate updating of information pertaining to compensation</li>
<li>Prepare and process all documents with payroll information</li>
<li>Ensure the timely release of final pay of separated employees by overseeing the entire employee exit process (clearance processing, final pay computation, final pay processing)</li>
<li>Assist on other HR activities as necessary</li>
</ul>
<p><strong>QUALIFICATIONS:</strong></p>
<ul>
<li>Candidate must be a graduate of any four year course preferably Finance-related courses</li>
<li>Must have at least 3 years of HR experience in the field of payroll or compensation and benefits</li>
<li>Must have an experience in preparing salary studies</li>
<li>Knowledge in the use of PeopleCore HR System is an advantage</li>
<li>Must be organized and keen to details</li>
<li>Must be a fast-learner and highly adaptable to a fast-paced work environment</li>
<li>Must be resilient, flexible, and enthusiastic in his/her work</li>
</ul>
</div>
</div>
</div>
</div>
</div>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Payroll Supervisor</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Human Resources</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Permits Assistant">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="227" data-name="Permits Assistant" data-content="<p><strong>JOB DESCRIPTION</strong></p>
<ul>
<li>Coordinate with the Local Government Units (LGUs) about the document checklists needed in accomplishing the application of different permits&amp;nbsp;</li>
<li>Request with the other departments (Project Development, Turnover Group, Design &amp;amp; Engineering, and Construction) the needed requirements needed from their end; follow up if necessary&amp;nbsp;</li>
<li>Secure the required permits from different LGUs</li>
<li>Coordinate the issues with the submitted documents found by the evaluator to the departments concerned&amp;nbsp;</li>
<li>Conduct site inspection alongside the LGU representative as part of the application process&amp;nbsp;</li>
<li>Create and regularly update all essential records of the permits application of different projects.</li>
</ul>
<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Any 4 year course</li>
<li>1 year or more experience as Permits Assistant, or Legal Assistant and experienced employees specializing in Law/Legal Services or equivalent.</li>
<li>Ability to work well and interact with others positively.</li>
<li>Ability to write clearly, concisely, organized, and convincingly for the intended audience.</li>
<li>Ability to efficiently manage workload, schedule, and resources to achieve goals effectively.</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Permits Assistant</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Legal</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Project Accountant">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="212" data-name="Project Accountant" data-content="<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Candidate must possess a Bachelor's/College Degree in Accountancy</li>
<li>Preferably with 1 Year of related experience</li>
<li>Must be detail oriented and organized</li>
<li>CPA is an advantage</li>
</ul>
<p><strong>DUTIES AND RESPONSIBILITIES:</strong></p>
<p><strong>1.&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Bookkeeping</strong></p>
<ul>
<li>Monitor the accuracy of project&amp;rsquo;s invoices by comparing and tracing to delivery receipts, purchase orders, and other documents.</li>
<li>Review request for payment for suppliers and subcontractors and submit to Project Accounting Assistant Manager for final review and approval.</li>
<li>Check project&amp;rsquo;s revolving fund and petty cash replenishment and reviews the accuracy correctness of disbursements charged to petty cash and revolving fund.</li>
<li>Encode check vouchers, journal vouchers, and credit memos properly and completely in the accounting system.</li>
<li>Record the proper and complete accrual for project expenses incurred paid or not paid at the end of the reporting period.</li>
<li>Maintain the proper, complete, and orderly filling of all projects&amp;rsquo; accounting documents such as not limited to check vouchers, journal vouchers, and official receipts.</li>
<li>Ensure that all manual book of accounts of projects are updated.</li>
</ul>
<p><strong>2.&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;Expense Monitoring</strong></p>
<ul>
<li>Review project budgets, including staffing, work plans, and fee structures.</li>
<li>Report to the Senior Accountant the remaining funding available for the remaining budgets.&amp;nbsp;</li>
<li>Provide to the Senior Accountant, Project Managers (PMs), and Project-in-Charge (PICs) with timely financial reports and project budget forecast.</li>
<li>Prepare pre-billing reports for Senior Accountant and PMs or PICs to review.</li>
<li>Prepare project&amp;rsquo;s actual cost, working capital, and tax report.&amp;nbsp;</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Project Accountant</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Accounting</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Project Development Specialist">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="152" data-name="Project Development Specialist" data-content="<p><strong>RESPONSIBILITIES</strong></p>
<ul>
<li>Coordinate with various departments for the overall development of DMCI Homes projects</li>
<li>Responsible for monitoring projects and concerns from overall business perspective</li>
<li>Recommend project decisions</li>
<li>In charge of pricing computations and strategies (cost and budget monirtoring of DMCI Homes projects)</li>
</ul>
<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Candidate must possess at least a Bachelor's/College Degree in Engineering (Civil), Economics, Business Studies/Administration/Management, Marketing, Commerce, Finance or equivalent</li>
<li>At least 1 year of working experience in the related field is required for this position</li>
<li>Must be analytic and detail-oriented</li>
<li>Must have knowledge or interest in real estate</li>
<li>Must be able to work with minimal supervision</li>
<li>Must have excellent decision-making skills&amp;nbsp;</li>
<li>Must be willing to work in Makati City</li>
<li>Position is open for fresh graduates with excellent academic records</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Project Development Specialist</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Project Development</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Project-In-Charge">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="177" data-name="Project-In-Charge" data-content="<p><strong>Job Summary</strong>&amp;nbsp;</p>
<p>&amp;nbsp;</p>
<p>This position is generally responsible for overseeing and directing the construction and completion of a&amp;nbsp;Residential Development Project&amp;nbsp;from conception to completion. Primarily responsible in ensuring that it is finished according to approved For Construction Plans and Specification in time, within budget, and according to quality and safety standards.&amp;nbsp;</p>
<p>&amp;nbsp;</p>
<p><strong>Duties and Responsibilities:</strong>&amp;nbsp;</p>
<p>&amp;nbsp;</p>
<ol>
<li>Risk and Safety Management&amp;nbsp;</li>
<li>Quality Management&amp;nbsp;and Quality Control&amp;nbsp;</li>
<li>Project Financials and Cost Management&amp;nbsp;</li>
<li>Planning and Schedule Management&amp;nbsp;&amp;nbsp;&amp;nbsp;</li>
<li>Construction Management&amp;nbsp;</li>
<li>Subcontractor Management&amp;nbsp;</li>
<li>Community Relations&amp;nbsp;&amp;nbsp;</li>
</ol>
<p>&amp;nbsp;</p>
<p><strong>Job Qualifications</strong>&amp;nbsp;</p>
<ul>
<li>Licensed Civil Engineer&amp;nbsp;&amp;nbsp;</li>
<li>At least 5 to 10 years&amp;nbsp;experience in construction industry with a minimum of&amp;nbsp;three (3)&amp;nbsp;years in supervisory capacity&amp;nbsp;</li>
<li>Experience in&amp;nbsp;completing a&amp;nbsp;High Rise&amp;nbsp;Building construction&amp;nbsp;is an advantage&amp;nbsp;</li>
<li>In-depth understanding of&amp;nbsp;local building codes,&amp;nbsp;construction procedures,&amp;nbsp;and material and project management principles&amp;nbsp;</li>
<li>Knowledge in Construction methodologies and procedures is a must&amp;nbsp;&amp;nbsp;</li>
<li>With excellent analytical and organizational skills&amp;nbsp;</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Project-In-Charge</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Property Advisor">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="153" data-name="Property Advisor" data-content="<p><strong>ENJOY THE FOLLOWING PERKS:</strong></p>
<ul>
<li>Unlimited earning potential</li>
<li>Flexible work schedule</li>
<li>Learning and Development Programs</li>
<li>Lead generation and marketing support</li>
</ul>
<p><strong>QUALIFICATIONS:&amp;nbsp;</strong></p>
<ul>
<li>Graduate of any Bachelor's Degree course</li>
<li>No sales experience is required as long as the candidates have a passion for selling</li>
<li>Good communication and interpersonal skills</li>
<li>Fresh graduates are welcome to apply</li>
</ul>
<p><strong>RESPONSIBILITIES</strong>:</p>
<ul>
<li>Promptly answer all sales inquiries received from managed channels</li>
<li>Log milestones and other necessary details of every lead generated</li>
<li>Schedule and deliver sales presentations</li>
<li>Facilitate documentation process to close sales</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Property Advisor</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Property Advisors Unit</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="QC Engineer (RMC)">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="266" data-name="QC Engineer (RMC)" data-content="<p><strong>JOB SUMMARY</strong></p>
<p>The RMC Quality Control Engineer plans, directs and coordinates all batch plant and on-site Concrete Quality Control (QC) activities to ensure compliance with applicable DMCI Homes Projects, and government regulations and requirements.<strong><br /></strong></p>
<p><strong>QUALIFICATIONS:</strong></p>
<ul>
<li>Graduate of BS Civil Engineering</li>
<li>With at least one year experience in the Construction industry</li>
<li>Willing to be assigned to the Batching Plant</li>
</ul>
<p>&amp;nbsp;</p>
<p><strong>DUTIES AND RESPONSIBILITIES:</strong></p>
<ul>
<li>Implements the Concrete QC Plan in its entirety and making appropriate and necessary changes to the plan as needed</li>
<li>Ensures daily site inspections are performed and directs all quality control personnel</li>
<li>Performs submittal review and approval, ensures testing is performed and provides QC certifications and documentation as required in the supply agreement</li>
<li>Maintains the DMCI Homes project documentation processes as related to supply agreement QC procedures</li>
<li>Disseminates Quality Control Plan, issues and objectives to all production personnel</li>
<li>Acts as the main point of contact for receiving and disseminating concrete supply agreement modifications</li>
<li>Optimizes all Concrete Design Mix in compliance to project concrete requirements and specifications</li>
<li>Recommends process improvements for more efficient quality control</li>
<li>Supervises the quality control personnel of daily operations</li>
<li>Implements plant regulations on safety work permit for critical jobs in the batching plant</li>
<li>Conduct safety audit, hazard, and improvement reports with the Safety officer</li>
<li>Supports production personnel to ensure quality services</li>
<li>Issues the Concrete Design Mix to production team as required by Project sites in a timely manner</li>
<li>Develops, leads and maintains a team quality control working environment. Establish and maintain good working relationships with PICs, QC Inspectors, OPCEN, Concrete Supervisors/Foreman, Suppliers and Subcontractor</li>
</ul>
<div>&amp;nbsp;</div>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>QC Engineer (RMC)</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Regional Sales Coordinator">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="271" data-name="Regional Sales Coordinator" data-content="<p><strong>1. Incentives- Timely processing and request of Incentive for below category:</strong></p>
<p>&amp;Oslash; Tactical Incentive</p>
<p>&amp;Oslash; Group Incentive</p>
<p>&amp;Oslash; Individual Incentive</p>
<p>&amp;Oslash; Quarterly/Annual Incentive</p>
<p>&amp;nbsp;</p>
<p><strong>2. Admin Support</strong></p>
<p>&amp;Oslash; Sales activity support: manning and open houses</p>
<p>&amp;Oslash; Updates and monitors all Regional Sales sellers</p>
<p>&amp;Oslash; Prepare and monitor Request For Payment</p>
<p>&amp;Oslash; Prepare Cash Advances, PRS and Travel Order</p>
<p>&amp;Oslash; Timely liquidation of all Advances requests</p>
<p>&amp;Oslash; Replenishment and monitoring of office supplies and consumption</p>
<p>&amp;Oslash; Accreditation: Slotting of walk in/Phone call broker to Broker Coordinators</p>
<p>&amp;nbsp;</p>
<p><strong>3. Communication</strong></p>
<p>&amp;Oslash; Apply access on Sellers Portal for all newly hired sellers</p>
<p>&amp;Oslash; Monitoring of memos Internal and External</p>
<p>&amp;Oslash; Encoding of sellers to AX</p>
<p>&amp;nbsp;</p>
<p><strong>4. Seller Services</strong></p>
<p>&amp;Oslash; Proper accreditation of all Regional Sales Sellers</p>
<p>&amp;Oslash; Assistance on computation for sellers</p>
<p>&amp;Oslash; Assistance on tripping</p>
<p>&amp;nbsp;</p>
<p>Qualifications:</p>
<ul>
<li data-ogsc=&quot;black&quot;><span data-ogsc=&quot;black&quot;>Graduate of any 4-year course</span></li>
<li data-ogsc=&quot;black&quot;><span data-ogsc=&quot;black&quot;>Sales experience is preferred but not required</span></li>
<li data-ogsc=&quot;black&quot;><span data-ogsc=&quot;black&quot;>Flexible/organize and willing to work during weekend and overtime</span></li>
<li data-ogsc=&quot;black&quot;><span data-ogsc=&quot;black&quot;>with good oral &amp;amp; communication skills</span></li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Regional Sales Coordinator</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Sales </p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Research &amp; Development Manager">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="263" data-name="Research &amp; Development Manager" data-content="<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Bachelor's Degree holder</li>
<li>With 15+ years combined experience in Design and Construction Field</li>
<li>Knowledgeable in Design Process, Specification and Building Materials (specs writer or equivalent)</li>
<li>Knowledgeable in Existing &amp;amp; updated Governing Building Code Standards (ASTM, ISO, EN, IN, PNS and other standards)</li>
<li>Knowledgeable in different material testing e.g. UTM (compressive strength test of concrete, rebar test, etc.)</li>
<li>Has technical Knowledge of Different Trades</li>
<li>Creative and innovative</li>
<li>With effective managerial and organizational skills</li>
<li>With good communication skill in both oral and written</li>
</ul>
<p>&amp;nbsp;</p>
<p><strong>DUTIES AND RESPONSIBILITIES</strong></p>
<p>A. Oversees the Research &amp;amp; Development Group in the development process of new products and programs;<br />&amp;nbsp; &amp;nbsp; &amp;nbsp;1. Establishes a streamlined workflow of tasks and activities of the Research and Development Group;<br />&amp;nbsp; &amp;nbsp; &amp;nbsp;2. Sets timelines for studies and research works;<br />&amp;nbsp; &amp;nbsp; &amp;nbsp;3. Delegates tasks and responsibilities to his team accordingly;<br />&amp;nbsp; &amp;nbsp; &amp;nbsp;4. Monitors the productivity of his team, and ensures quality of work output;<br />&amp;nbsp; &amp;nbsp; &amp;nbsp;5. Provides effective and actionable feedback to his subordinates;<br />&amp;nbsp; &amp;nbsp; &amp;nbsp;6. Guides the team towards a clear set of goals, and fosters a collaborative and innovative environment;<br />B. Establishes a research program with clear objectives and goals that aligns with the goals of the department, and the company;<br />C. Assesses the current specifications and construction methodologies in place, identifies the common challenges and setbacks, and recommends creative and cost-effective improvements and solutions to the management;<br />D. Presents new ideas and technologies and proposes application of these ideas to our projects.<br />E. Must have a strong background in the field of design, engineering, or construction, and knowledgeable of the available and emerging technologies in order to provide creative, and cost-effective solutions and improvements;<br />F. Must always be well informed on what is happening in the research and development field in order to make sure that the company is up-to-date and current with the most advance technology.<br />G. Works closely with the Managers of Design and Engineering and Construction, as well as other stakeholders to understand the requirements for material and process improvement.<br />H. Manages the facilitation of testing at the R&amp;amp;D Testing Facility. Ensures that the Testing Facility is well equipped and maintained.<br />I. Analyzes and approves test results and reports it to the management</p>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Research &amp; Development Manager</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Design &amp; Engineering</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Risk &amp; Control Officer">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="139" data-name="Risk &amp; Control Officer" data-content="<p><strong>QUALIFICATIONS</strong></p>
<ul>
<li>Candidate must possess at least a Bachelor's/College Degree in Accountancy or equivalent.</li>
<li>CPA is an advantage&amp;nbsp;</li>
<li>Preferably with related work experience in a real estate industry.</li>
<li>Must be computer literate and knowledgeable in MS Office</li>
<li>Must be hardworking, independent, and trustworthy</li>
<li>At least 4 years experience in audit</li>
</ul>
<p><br /><strong>RESPONSIBILITIES</strong></p>
<ul>
<li>Assess and identify risks related to finances</li>
<li>Ensure compliance with audit policies</li>
<li>Serves as mitigators whenever there are discrepancies in terms of transactions for the company</li>
<li>Review of Financials and performing bank reconciliation</li>
<li>Monthly preparation of financial statements and cost report</li>
<li>Ensure compliance of policies and procedures within the department/section</li>
<li>Will be assigned to Head Office.</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Risk &amp; Control Officer</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Accounting</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Safety Auditor">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="201" data-name="Safety Auditor" data-content="<p><strong>QUALIFICATIONS:</strong></p>
<ul>
<li>Graduate of Engineering or any related field</li>
<li>At least 2 years of experience as a Safety Auditor in the construction industry</li>
<li>OSH practitioner</li>
<li>Has OHSAS 18001 / ISO 45001 background</li>
<li>Internal Auditor's course in OHSAS 18001 is an advantage</li>
</ul>
<p>&amp;nbsp;</p>
<p><strong>RESPONSIBILITIES:</strong></p>
<ul>
<li>Maintain up-to-date knowledge of relevant COSH legislation and best practices and provide updates on a monthly basis on all new or amended COSH legislation</li>
<li>Monitor the compliance of all work practices and procedures done at the project site to the COSH standards</li>
<li>Ensure the company&amp;rsquo;s compliance with all the safety, health, and environmental regulatory bodies and standards</li>
<li>Examine the compliance of the subcontractors with the COSH standards, the company&amp;rsquo;s safety plans, and legal guidelines</li>
<li>Lead investigations of all accidents and near-miss incidents and prepare a report</li>
<li>Analyze injury case studies and other safety statistics</li>
<li>Monitor compliance with COSH policies and laws by performing audit inspections</li>
<li>Prepare written reports of findings and recommendations for corrective or preventive measures and ensure measures will be implemented</li>
<li>Conduct visits to job sites to evaluate facilities, working conditions, and other health, safety, and environmental items</li>
<li>Maintain all COSH-related documents of the entire project</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Safety Auditor</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Quality Management Department</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Safety Officer">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="173" data-name="Safety Officer" data-content="<div class=&quot;sx2jih0 zcydq866&quot;>
<h4 class=&quot;sx2jih0 _18qlyvc0 _18qlyvch _1d0g9qk4 _18qlyvcs _18qlyvc1x&quot;>Job Description</h4>
</div>
<div class=&quot;sx2jih0 zcydq866&quot;>
<div class=&quot;YCeva_0&quot; data-automation=&quot;jobDescription&quot;>
<div class=&quot;sx2jih0&quot;>
<ul>
<li>Candidate must possess at least Bachelor's/College Degree in Engineering (Others) or equivalent.</li>
<li>At least 2-3 Year(s) of working experience in the related field is required for this position in a Construction Company.</li>
<li>Certificate holder of Construction Occupational Safety and Health Training (DOLE accredited SO3)</li>
<li>Proficient on preparing job hazard analysis reports, inspection/safety reports, and DOLE reports</li>
<li>Knowledgeable in safety policies, implementation, hazard/risk analysis, knowledgeable in computer software applications.</li>
<li>Skilled in preparing safety written report</li>
</ul>
<p><strong>Job Responsibilities:</strong></p>
<ul>
<li>Inspects worksites to ensure hazard-free environment</li>
<li>Prepares hazard analysis of work methods and procedures</li>
<li>Conducts toolbox meetings to ensure all tools and equipment are adequate and safe to use</li>
<li>Reviews and approves all safety plans</li>
<li>Evaluates risks of recognized hazards to determine priorities of corrective actions and levels of concern</li>
<li>Provides assistance in implementing safety program corrective actions</li>
<li>Conducts investigations of all accidents and near-misses.</li>
<li>Promotes safety practices and enforces safety guidlines at the job site.</li>
<li>Performs emergency response drills.</li>
<li>Receives reports from and responds to orders issued by Department of Labor inspectors.</li>
<li>Working hours/days as Regular Hours, Monday to Saturday.</li>
</ul>
</div>
</div>
</div>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Safety Officer</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Sales Management Coordinator">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="243" data-name="Sales Management Coordinator" data-content="<p><u>Job Description</u></p>
<ul>
<li>Helpdesk for seller&amp;rsquo;s commission inquiry</li>
<li>Provide helpdesk assistance to all commission-related concerns. Ensure that commission inquiry of all sellers are properly coordinated to concerned departments.</li>
<li>Provide support in payroll processing</li>
<li>Monitoring of In-House Incentive, from requesting RFPs for those already qualified, to distribution of debit advice to Sales Channels.</li>
<li>Define a fair, equitable and competitive total compensation and benefits package that fits and is aligned to our company&amp;rsquo;s strategy and business goals</li>
<li>Responsible for managing seller&amp;rsquo;s database through accurate and regular updating of all necessary information including correct hierarchy, sellers' information and movement or termination of sellers.</li>
<li>Activation of access to Seller's Portal for In-house Sellers and Brokers. Accommodating inquiry with regards to log-in issue and coordination with IT Dept. all the Log-in issue/error encountered.</li>
<li>Employment verification of Sellers from Banks and other companies.</li>
<li>Conduct periodic audits, prepare and present reports</li>
</ul>
<p><u>Qualifications</u></p>
<p>Minimum Qualifications:</p>
<ul>
<li>Graduate of any Bachelor&amp;rsquo;s Degree and/or any related courses ( BS degree in Human Resources, Business Administration or Finance</li>
<li>Strong quantitative and analytical skills</li>
<li>Proficient in MS Office applications particularly excel</li>
<li>Good written and oral communication skills</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Sales Management Coordinator</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Sales</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Sales Management Specialist">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="219" data-name="Sales Management Specialist" data-content="<p><strong>RESPONSIBILITIES:</strong></p>
<ul>
<li>Conducts project analysis&amp;nbsp;</li>
<li>Prepares and presents various reports</li>
<li>Create proposal of sellers incentive based on study and recommendation</li>
<li>Attends and participates in regular coordination meetings</li>
<li>Coordinates to Marketing department for marketing collaterals of projects to be used by digital advertisement of sellers</li>
<li>Provide assistance to sellers with regard to project concerns</li>
<li>Performs other job-related tasks that may be assigned by superiors from time to time</li>
</ul>
<p><strong>QUALIFICATIONS:</strong></p>
<ul>
<li>Graduate of Business Administration, Marketing, Economics or equivalent</li>
<li>Proficient in Microsoft Office</li>
<li>Good written and oral communication skills</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Sales Management Specialist</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Sales</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Service Engineer">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="265" data-name="Service Engineer" data-content="<p><strong>QUALIFICATIONS:</strong></p>
<ul>
<li>Graduated of any Engineering course</li>
<li>With at least one year experience in a Construction industry</li>
</ul>
<p>&amp;nbsp;</p>
<p><strong>DUTIES AND RESPONSIBILITIES:</strong></p>
<p><strong>1. Production and Quality Control</strong></p>
<ul>
<li>Leads Operations of the batch plant in order to meet production targets, product quality, and delivery schedules&amp;nbsp;&amp;nbsp;</li>
<li>Makes all the corresponding control adjustments to ensure production efficiency&amp;nbsp;&amp;nbsp;</li>
<li>Conducts preventive checking to avoid occurrences of product non-conformity</li>
<li>Conducts troubleshooting to solve problems that affect process and equipment operation</li>
<li>Identifies and records any product quality issues</li>
</ul>
<p><strong>2. Process Improvements</strong></p>
<ul>
<li>Embarks on improvement efforts in operating the plant, equipment, and facilities</li>
<li>Coordinates with other functional areas</li>
<li>Recommends process improvements for more efficient operations</li>
</ul>
<p><strong>3. Personnel Management</strong></p>
<ul>
<li>Supervises the workers during plant operations</li>
<li>Ensures adherence to plans and programs</li>
<li>Implements Personnel Policies</li>
</ul>
<p><strong>4. Safety Compliance</strong></p>
<ul>
<li>Implements plant regulations on safety work permit for critical jobs in the batching plant</li>
<li>Conducts toolbox meetings before the start of operations focusing on operational and safety concerns</li>
<li>Identifies and correct hazards</li>
<li>Conducts safety audit, hazard, and improvement reports with the Safety Officer</li>
</ul>
<p><strong>5. Coordination</strong></p>
<ul>
<li>Verifies job site pouring preparations including volume computation, batching plant mobilization and utilization</li>
</ul>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Service Engineer</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="1" data-name="Survey Assistant">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="166" data-name="Survey Assistant" data-content="<div class=&quot;sx2jih0 zcydq866&quot;>
<h4 class=&quot;sx2jih0 _18qlyvc0 _18qlyvch _1d0g9qk4 _18qlyvcs _18qlyvc1x&quot;>Job Description</h4>
</div>
<div class=&quot;sx2jih0 zcydq866&quot;>
<div class=&quot;YCeva_0&quot; data-automation=&quot;jobDescription&quot;>
<div class=&quot;sx2jih0&quot;>
<ul>
<li>Candidate must possess&amp;nbsp;<strong>Bachelor's/College Degree in Civil Technology&amp;nbsp;</strong>(Civil Engineering Technology)</li>
<li>Preferably Less than 1 year experience specialized in Engineering - Civil/Construction/Structural or equivalent.</li>
<li>Assist and support geodetic engineer in field surveys&amp;nbsp;</li>
<li>Conduct on-field survey and record measurements</li>
<li>Draft survey notes and detailed drawings of the surveyed field</li>
<li>Prepare as-built files of&amp;nbsp;utilities, driven piles, lot, site development</li>
<li>Maintain logs, reports and records in geodetic databases</li>
<li>Ensure compliance of the established procedures and guidelines in survey activities</li>
<li>Required Skill(s): Knowledge of the instruments, equipment, and tools used in the actual surveying and land. Understanding of surveying principles, components, processes, techniques, and practices</li>
<li>Willing to be assigned in any projects within Metro Manila.</li>
</ul>
</div>
</div>
</div>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Survey Assistant</h3></li>
                                                <li>
                                                                                                            <span class="status">Urgent</span>
                                                                                                        </li>
                                                <li><p>Construction</p></li>
                                                <li><p>
                                                                                                                    Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li><li class="animated career-item fadeInUp visible" data-animation="fadeInUp" data-category="2" data-name="Treasury Assistant">
                                <div class="careers-item">
                                    <a href="#careers-info" class="career-popup" data-fancybox="" data-id="209" data-name="Treasury Assistant" data-content="<p><strong><em>Treasury Assistant is responsible for Check preparation and check releases, daily monitoring and preparation of Cash Position Report for Davao RF Accounts, Monitoring and replenishment of Revolving Funds, and served as Petty Cash Custodian.</em></strong></p>
<p><strong><u>Qualifications:</u></strong></p>
<p>- Candidate must have a degree in&amp;nbsp;<strong>Accounting</strong>&amp;nbsp;or equivalent</p>
<p>- At least (1) year of experience in Accounting, Disbursement Processing, Preparation of Cash Position Report, Cashiering</p>
<p><strong><u>Major Functions:</u></strong></p>
<p><strong>1. Check Payment Processing</strong></p>
<p>1.1 Preparation of check voucher for DMCI PDI and ensure that payment request is approved and checks prepared are signed by authorized signatories before releasing of checks</p>
<p>1.2 Ensures that check released is funded</p>
<p>1.3 Releasing of Checks / Releases checks to suppliers on time and utilities provider</p>
<p>1.4 Safekeeping of unreleased checks</p>
<p>1.5 Tagging of Released Checks (D365 System)</p>
<p>1.6 Printing &amp;amp; Releasing of Checks through Business Banking -Online</p>
<p>1.7 Accuracy of CV transmittal/CV Transmittal of Released checks back to Head Office with OR (Attach APV Construction Package received from Accounting Department together with the OR &amp;amp; CV)</p>
<p>1.8 Details on Official Receipts received is accurately &amp;amp; completely filled up (Payee, TIN, business style, amount in words and in figures, proper breakdown of payments, ATP validity, etc)</p>
<p><strong>2. Monitoring and replenishment of revolving funds for EWB and BPI</strong></p>
<p>2.1 Ensures that revolving fund are replenished based on RF Policy.</p>
<p><strong>3. Preparation and Submission of Daily Cash Position Report</strong></p>
<p>3.1 To ensure availability of funds, NO report on returned check due to insufficient fund. Zero unaccounted of bank credits from fund replenishments and disbursements/bank debits</p>
<p><strong>4. Other Tasks</strong></p>
<p>4.1 Petty Cash Fund Custodian (Treasury and C&amp;amp;C)</p>
<p>4.2 Follow-up and remind employees for the liquidation of advances taken from Revolving Fund</p>
<p>4.3 Updating of bank records by routing documents to the authorized signatories required by the bank</p>
<p>4.4 Assist for department&amp;rsquo;s compliance if any on Periodic Audit conducted both by Internal and External Auditor</p>
<p>4.5 Other tasks that may assign from time to time</p>
<p><strong>Candidate for this role will be assigned in Davao City.</strong></p>">
                                        <div class="content">
                                            <ul class="flex">

                                                <li><h3>Treasury Assistant</h3></li>
                                                <li>
                                                                                                    </li>
                                                <li><p>Treasury</p></li>
                                                <li><p>
                                                                                                                    Non Technical
                                                                                                            </p></li>
                                                <li>
                                                    <p>
                                                        <span class="btn btn-ghost btn-v-small btn-dark btn-round apply-positions-btn">Apply</span>
                                                    </p>
                                                </li>

                                            </ul>
                                        </div>

                                    </a>

                                </div>
                            </li></ul>

                </div>
            </div>
            <!-- <div class="slant-border slant-bot slant-grey slant-left"></div> -->
        </section>

    </section>

    <div id="careers-info" class="read" style="display: none;">
        <div class="property-content">
            <div class="property-left-card career-info-wrap read">
                <h2></h2>
                <article>
                    <figure>

                    </figure>
                </article>
            </div>
            <div class="property-right-loc">
                <h5>Apply Now for <span id="career-title"></span></h5>
                <div class="career-forms">
                    <form action="/contact-us/submit-career" method="POST" id="career-form" enctype="multipart/form-data">

                        <input type="hidden" name="id" id="c-id">

                        <div class="input-wrap">
                            <label for="c-fname">Your First Name <span class="required-field">*</span></label>
                            <input type="text" id="c-fname" name="fname" required="">
                            <p class="error-message">This field is required.</p>
                        </div>

                        <div class="input-wrap">
                            <label for="c-lname">Your Last Name <span class="required-field">*</span></label>
                            <input type="text" id="c-lname" name="lname" value="">
                            <p class="error-message">This field is required.</p>
                        </div>
                        <div class="input-wrap">
                            <label for="c-email">Your Email <span class="required-field">*</span></label>
                            <input type="email" id="c-email" name="email" value="">
                            <p class="error-message">Input a valid email address.</p>
                        </div>
                        <div class="input-wrap">
                            <label for="c0contact">Contact Number <span class="required-field">*</span></label>
                            <input type="tel" id="c-contact" name="contact" maxlength="15" onkeypress="return event.charCode === 0 || /[\d-+=,()]/.test(String.fromCharCode(event.charCode));">
                            <p class="error-message">Input a valid mobile or landline number</p>
                        </div>

                        <div class="input-wrap m-b-0">
                            <label for="">Attach your resume</label>
                        </div>
                        <div class="input-wrap custom-upload">
                            <input type="file" name="resume" id="resume" class="inputfile inputfile-6">
                            <label for="resume"><strong> Choose a file…</strong><span></span> </label>
                            <p class="error-message">Please upload your resume.</p>
                        </div>
                        <div class="input-wrap">
                            <button class="btn btn-round btn-green btn-large" id="apply-btn">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



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
                    <a href="#"><img class=" ls-is-cached lazyloaded" src="{{ asset('images/logo-dmci.png')}} " data-src="{{ asset('images/logo-dmci.png')}} " alt="DMCI Homes Logo" width="170" height="37"></a>
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
                                    <figure><img class=" ls-is-cached lazyloaded"src="{{ asset('images/qr.png')}}" data-src="{{ asset('images/qr.png')}}" width="18" height="18" alt=""></figure>
                                    <span class="fs-text">QQ</span>
                                </a>


                                <a data-fancybox-image-qr="" data-src="#qq-brand" class="hide-desktop">
                                    <img class="lazyload" src="{{ asset('images/lazyload.png')}}" data-src="{{ asset('images/qq.png')}}" width="24" height="28" alt="">
                                </a>
                            </li>
                            <li class="wechat-wrap">
                                <a class="hide-mobile" data-fancybox-image-qr="" href="#wechat-modal" data-caption="Scan the QR code to add me on WeChat">
                                    <figure><img class=" ls-is-cached lazyloaded" src="{{ asset('images/we.png')}}" data-src="{{ asset('images/we.png')}}" width="18" height="18" alt=""></figure>
                                    <span class="fs-text">WeChat</span>
                                </a>

                                <a data-fancybox-image-qr="" data-src="#wechat-brand" class="hide-desktop">
                                    <img class="lazyload" src="{{ asset('images/lazyload.png')}}" data-src="{{ asset('images/wechat.png')}}" width="34" height="40" alt="">
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
                <figure><img class="lazyload" src="{{ asset('images/lazyload.png')}}" data-src="{{ asset('images/qr.png')}}" alt=""></figure>
                <p><strong>QQ ID : </strong> <a href="http://qm.qq.com/cgi-bin/qm/qr?k=9JbHHMYoo-WJw0_sWtnFQiaB8YZeXsyh">2456975737</a></p>
            </div>
        </div>
    </div>

    <div id="wechat-modal" class="read no-padding" style="display: none;">
        <div class="content">
            <div class="sec-head">
                <figure><img class="lazyload" src="{{ asset('images/lazyload.png')}}" data-src="{{ asset('images/wechatt.png')}}" alt=""></figure>
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
                <div class="loader-pin"><img src="{{ asset('images/loading-idle.gif')}}" width="70" height="70"></div>
            </div>
            <p class="notes">s
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
<script type="text/javascript" id="">-1==document.location.href.search("appspot.com")&&-1==document.referrer.search("appspot.com")&&!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1683067715278685");
fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1683067715278685&amp;ev=PageView&amp;noscript=1"></noscript>

<script type="text/javascript" id="">function getCookie(a){if(a=document.cookie.match(new RegExp("(^| )"+a+"\x3d([^;]+)")))return a[2]}var _gaCookie=getCookie("_ga");_gaCookie=_gaCookie.split(".");var _middle=_gaCookie.length-2,_last=_gaCookie.length-1,_gaClientId=_gaCookie[_middle]+"."+_gaCookie[_last];window.dataLayer=window.dataLayer||[];window.dataLayer.push({GAClientID:_gaClientId});</script>
<div class="append-style">
    <!-- <link async rel="stylesheet" href="/frontend/css/tablet.css" media="(max-width: 991px)"> -->
</div>

    <link rel="preload" href="{{ asset('css/careers.css')}}" as="style">
    <link rel="stylesheet" href="{{ asset('css/careers.css')}}" media="all">


    <script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/bundle.js')}}"></script>

<script defer="">

   var GLOBAL_frontend_get__properties_json = "/get/properties/json";
    var GLOBAL_app_request_schemeAndHttpHost = "https://www.dmcihomes.com";
    var GLOBAL_countries_json = "/frontend/js/countries.json";
    var GLOBAL_careers_position_json = "/json/positions.json";
    var GLOBAL_frontend_contact_us_captcha = "/contact-us/captcha/generate";
    var GLOBAL_APP_REQUEST_GET = "frontend_careers";

    "use strict";var map,locationMap,positionMarker,locationMarker,geocoder,cookieSetupLoc,newCookieValue,activeProperties=[],allProperties=[],propertyLocation=[],selectedLocation=[],currencies={},currentLocation={lat:"",lng:""},prefCities=[],optionCities=[],locationEnabled=!1,popUpLocationValue={name:"",lat:"",lng:"",complete_address:""},autoCompleteLocationValue={name:"",lat:"",lng:"",complete_address:""};function getActivePropertiesJson(){$.ajax({url:GLOBAL_frontend_get__properties_json,type:"GET",processData:!1,success:function(a){Object.keys(a).forEach(function(b){let c=a[b];allProperties.push(c)}),activeProperties=allProperties.reduce(function(a,c){var b=c.city;return a[b]=a[b]||[],a[b].push(c),a},{});var c=[];allProperties.forEach(function(a){c[a.city]=a.city_slug});var b=$("#sidebar-property-modal-location-list");b.append('<li><a href="#" class="btn btn-round btn-ghost sidebar-location-all active" data-location="all">View All</a></li>'),Object.keys(activeProperties).forEach(function(a){propertyLocation.push(a)}),propertyLocation.sort(),propertyLocation.forEach(function(a){var d=c[a];b.append('<li><a href="'+GLOBAL_app_request_schemeAndHttpHost+"/"+d+'" class="btn btn-round btn-ghost sidebar-location-filter" data-location="'+a+'">'+a+"</a></li>")}),$(".sidebar-location-all").click(function(){selectedLocation=null,loadAllProperties(),$(".sidebar-location-filter").removeClass("active"),$(this).addClass("active")}),$(".sidebar-location-filter").click(function(a){a.preventDefault(),populateSidebarProperties(selectedLocation=$(this).data("location")),$(".sidebar-location-all").removeClass("active"),$(".sidebar-location-filter").removeClass("active"),$(this).addClass("active")})}})}function populateSidebarProperties(a){var b=activeProperties[a],c=$("#sidebar-property-list");c.empty(),$("#sidebar-property-header").text('Properties around "'+a+'".'),b.sort(),b.forEach(function(a){var b="coming-soon",d="cs",e=Number(a.price_range[0].min_price),f=Number(a.price_range[0].max_price);1===a.status?(b="new",d="new"):2===a.status?(b="RFO",d="rfo"):3===a.status&&(b="under-construction",d="uc");var g='<span data-value="'+e+'" class="currency-convert">'+e+'</span> - <span data-value="'+f+'" class="currency-convert">'+f+"</span>";0==a.is_unit_activated&&(g="<span>NOT YET AVAILABLE</span>");var h='<li class="box-card">                <div class="property-item">                    <a href="/'+a.slug+'">                        <figure class="property-img">                            <img class="lazyload" src="frontend/images/page_template/lazyload.png" data-src="'+a.image+'" alt="">                                <span class="property-status circle-white">                                    <span class="'+d+" icon-"+b+'"></span>                                </span>                        </figure>                        <div class="property-detail">                            <h3>'+a.name+'</h3>                            <p class="price">'+g+"</p>                        </div>                    </a>                </div>            </li>";c.append(h),convertCurrencies()})}function loadAllProperties(){var a=$("#sidebar-property-list");a.empty(),$("#sidebar-property-header").text("Viewing all properties."),allProperties.forEach(function(b){var c="coming-soon",d="cs",e=Number(b.price_range[0].min_price),f=Number(b.price_range[0].max_price);1===b.status?(c="new",d="new"):2===b.status?(c="RFO",d="rfo"):3===b.status&&(c="under-construction",d="uc");var g='<span data-value="'+e+'" class="currency-convert">'+e+'</span> - <span data-value="'+f+'" class="currency-convert">'+f+"</span>";0==b.is_unit_activated&&(g="<span>NOT YET AVAILABLE</span>");var h='<li class="box-card">                <div class="property-item">                    <a href="/'+b.slug+'">                        <figure class="property-img">                            <img class="lazyload" src="frontend/images/page_template/lazyload.png" data-src="'+b.image+'" alt="">                                <span class="property-status circle-white">                                    <span class="'+d+" icon-"+c+'"></span>                                </span>                        </figure>                        <div class="property-detail">                            <h3>'+b.name+'</h3>                            <p class="price">'+g+"</p>                        </div>                    </a>                </div>            </li>";a.append(h)})}function initializeDefaultButtons(){$("#property-sidebar-list-button").click(function(a){a.preventDefault(),loadAllProperties(),convertCurrencies()}),$("#save-profile").click(function(a){a.preventDefault();var b=$("#pop-up-looking-select").val(),c=JSON.stringify(popUpLocationValue),d=$("#pop-up-currency-select").val(),e=$("#pop-up-language-select").val(),f=$("#pop-up-measure-select").val();setCookie("profile-lookingFor",b,31),setCookie("profile-locatedNear",c,31),setCookie("profile-currency",d,31),setCookie("profile-language",e,31),setCookie("profile-measure",f,31),setCookie("profile-set",!0,31),$.fancybox.close("#cookie-preference"),loadCookies(),$(".hamburger-menu").hasClass("active")&&$(".hamburger-menu").click(),convertMeasures(),convertDistances(),convertCurrencies()}),$("#done-location-search").click(function(a){a.preventDefault(),setCookie("profile-locatedNear",JSON.stringify(autoCompleteLocationValue),31),$.fancybox.close("#map-pin"),loadCookies()}),$("#clear-location-search").click(function(a){a.preventDefault(),autoCompleteLocationValue=void 0,$("#search-location-autocomplete").val("").focus(),$("#header-search-location-field").val(""),$("#advance-search-location").val("")}),$("#skip-profile").click(function(a){a.preventDefault(),setCookie("profile-set",!0,31),setCookie("profile-measure",$("#pop-up-measure-select").val(),31),$.fancybox.close("#cookie-preference")}),$(".pop-up-trigger").click(function(a){$.fancybox.open({src:"#cookie-preference",clickContent:!1,beforeShow:function(){$(".fancybox-bg").css({background:"rgba(255, 255, 255, 0.6)"})}})}),$("#advance-search-button").click(function(g){g.preventDefault();var h=$(".advance-status-cb:checked"),i=$(".advance-unit-type-cb:checked"),j=$(".advance-dev-type-cb:checked"),a=[];h.each(function(c,b){a.push(b.value)});var b=[];i.each(function(c,a){b.push(a.value)});var c=[];j.each(function(b,a){c.push(a.value)});var k=currentLocation.lat,l=currentLocation.lng,d=$("#min-price-select").val(),e=$("#max-price-select").val(),f=$("#advance-search-location").val();""===f?window.location="/property-finder?search=advance&min="+d+"&max="+e+"&type="+b.toString()+"&dev="+c.toString()+"&status="+a.toString()+"&location=any":window.location="/property-finder?search=advance&lat="+k+"&lng="+l+"&min="+d+"&max="+e+"&type="+b.toString()+"&dev="+c.toString()+"&status="+a.toString()+"&address="+f}),$(".advance-dev-type-cb").change(function(){4==$(this).val()&&$(".advance-dev-type-cb[value=4]").is(":checked")?$(".sdv").prop("disabled",!1):$(".advance-dev-type-cb[value=4]").is(":checked")||$(".sdv").prop("disabled",!0)});var a=!1,b=!1,c=!1;$(".ads-types input[type=checkbox]").change(function(){var d="";$(".ads-types input[type=checkbox]").each(function(){d+=this.checked?"1,":"0,"}),(d=d.substr(0,d.length-1)).indexOf("1")> -1?(b=!0,a&&b&&c&&$("#advance-search-button").removeClass("disabled")):(b=!1,$("#advance-search-button").addClass("disabled"))}),$(".ads-unit-type input[type=checkbox]").change(function(){var d="";$(".ads-unit-type input[type=checkbox]").each(function(){d+=this.checked?"1,":"0,"}),(d=d.substr(0,d.length-1)).indexOf("1")> -1?(a=!0,b&&c&&$("#advance-search-button").removeClass("disabled")):(a=!1,$("#advance-search-button").addClass("disabled"))}),$(".fa-status-list input[type=checkbox]").change(function(){var d="";$(".fa-status-list input[type=checkbox]").each(function(){d+=this.checked?"1,":"0,"}),(d=d.substr(0,d.length-1)).indexOf("1")> -1?(c=!0,a&&b&&c&&$("#advance-search-button").removeClass("disabled")):(c=!1,$("#advance-search-button").addClass("disabled"))}),$(".slider-advisory").owlCarousel({loop:!0,item:1,margin:10,nav:!1,dots:!1,autoplay:!0,autoplayTimeout:7e3,autoplayHoverPause:!0,responsive:{0:{items:1},600:{items:1},1e3:{items:1}}})}function loadCookies(){getCookie("profile-lookingFor");var a,b=getCookie("profile-locatedNear"),c=getCookie("profile-currency"),e=getCookie("profile-language"),d=getCookie("profile-measure");""===d&&(setCookie("profile-measure",$("#pop-up-measure-select").val(),31),d=getCookie("profile-measure")),(void 0===c||"undefined"===c||""===c)&&(setCookie("profile-currency","PHP",31),c=getCookie("profile-currency")),""!==b&& void 0!==b&&"undefined"!==b&&"null"!==b&&(popUpLocationValue=a=JSON.parse(b),$("#pop-up-location-select").val(a.name),$("#search-location-autocomplete").val(a.name),autoCompleteLocationValue={name:a.name,complete_address:a.complete_address,lat:a.lat,lng:a.lng},geocodeDefault()),$("#pop-up-language-select").val(e),$("#pop-up-measure-select").val(d),$("#pop-up-currency-select").val(c)}function convertMeasures(){$(".area-convert").each(function(){var a=+$(this).data("value"),b=" sqm.";"Imperial"===getCookie("profile-measure")&&(a*=10.764,b=" sft."),this.innerHTML=a.toLocaleString(void 0,{maximumFractionDigits:2})+b})}function convertDistances(){$(".distance-convert").each(function(){var a=+$(this).data("value");"Imperial"===getCookie("profile-measure")&&(a*=.62137),this.innerHTML=a.toLocaleString(void 0,{maximumFractionDigits:2})})}function convertCurrencies(){var a=getCookie("profile-currency");void 0===localStorage.getItem("conversion")&&getCurrencies();var b=JSON.parse(localStorage.getItem("conversion"))[a];$(".currency-convert").each(function(){var c=+$(this).data("value");c*=b,this.innerHTML=a+" "+c.toLocaleString(void 0,{maximumFractionDigits:2})}),$(".currency-convert-no-symbol").each(function(){var a=+$(this).data("value");a*=b,this.innerHTML=a.toLocaleString(void 0,{maximumFractionDigits:2})})}function getCurrencyMultiplier(){var a=getCookie("profile-currency");return void 0===localStorage.getItem("conversion")&&getCurrencies(),JSON.parse(localStorage.getItem("conversion"))[a]}function getCurrencyCode(){return getCookie("profile-currency")}function setCookie(b,c,d){var a=new Date;a.setTime(a.getTime()+864e5*d);var e="expires="+a.toUTCString();document.cookie=b+"="+c+";"+e+";path=/"}function getCookie(e){for(var c=e+"=",d=decodeURIComponent(document.cookie).split(";"),b=0;b<d.length;b++){for(var a=d[b];" "===a.charAt(0);)a=a.substring(1);if(0===a.indexOf(c))return a.substring(c.length,a.length)}return""}function getParameterByName(a,b){b||(b=window.location.href),a=a.replace(/[\[\]]/g,"\\$&");var c=new RegExp("[?&]"+a+"(=([^&#]*)|&|#|$)").exec(b);return c?c[2]?decodeURIComponent(c[2].replace(/\+/g," ")):"":null}function showMap(e){geocoder=new google.maps.Geocoder;var a=14.5427941,b=121.0130898;locationMap=new google.maps.Map(document.getElementById("home-pin-map"),{center:new google.maps.LatLng(a,b),zoom:14,streetViewControl:!1,styles:[{featureType:"administrative",elementType:"geometry",stylers:[{visibility:"off"}]},{featureType:"poi",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"transit",stylers:[{visibility:"off"}]}]});var f={url:"/frontend/images/loading-idle.gif",scaledSize:new google.maps.Size(70,70),origin:null,anchor:null,size:null};positionMarker=new google.maps.Marker({position:new google.maps.LatLng(a,b),map:locationMap,animation:google.maps.Animation.DROP,draggable:!0,icon:f}),!1===geocodeDefault()&&null!==e&&(locationEnabled=!0,a=e.coords.latitude,b=e.coords.longitude,currentLocation.lat=a,currentLocation.lng=b,placeMarkerAndPanTo(new google.maps.LatLng(a,b)),geocode(new google.maps.LatLng(a,b))),locationMap.addListener("click",function(a){placeMarkerAndPanTo(a.latLng,locationMap),geocode(a.latLng)}),positionMarker.setVisible(!0),google.maps.event.addListener(positionMarker,"dragend",function(a){placeMarkerAndPanTo(a.latLng,locationMap),geocode(a.latLng)});var g=document.getElementById("pop-up-location-select"),c=new google.maps.places.Autocomplete(g);c.bindTo("bounds",locationMap),c.setTypes([]),c.setFields(["address_components","geometry","icon","name"]),c.addListener("place_changed",function(){var a=c.getPlace(),b="";a.address_components.forEach(function(a,c){b=0===c?a.long_name:b+","+a.long_name}),popUpLocationValue={name:a.name,complete_address:b,lat:a.geometry.location.lat(),lng:a.geometry.location.lng()}});var h=document.getElementById("search-location-autocomplete"),d=new google.maps.places.Autocomplete(h);d.bindTo("bounds",locationMap),d.setTypes([]),d.setFields(["address_components","geometry","icon","name"]),d.addListener("place_changed",function(){var a=d.getPlace(),b="";a.address_components.forEach(function(a,c){b=0===c?a.long_name:b+","+a.long_name}),autoCompleteLocationValue={name:a.name,complete_address:b,lat:a.geometry.location.lat(),lng:a.geometry.location.lng()},a.geometry.location?placeMarkerAndPanTo(a.geometry.location):locationMap.setCenter(a.geometry.location)})}function placeMarkerAndPanTo(a){void 0!==positionMarker&&positionMarker.setPosition(a),void 0!==locationMap&&(locationMap.panTo(a),locationMap.setZoom(17))}function geocodeDefault(){var a,b=getCookie("profile-locatedNear");try{a=JSON.parse(b),currentLocation.lat=a.lat,currentLocation.lng=a.lng,"function"==typeof getRecommended&&getRecommended(a.lat,a.lng),placeMarkerAndPanTo(new google.maps.LatLng(a.lat,a.lng)),$("#header-search-location-field").val(a.name),$("#advance-search-location").val(a.name)}catch(c){return"function"==typeof getRecommended&&(getRecommended("",""),placeMarkerAndPanTo(new google.maps.LatLng(currentLocation.lat,currentLocation.lng))),!1}return!0}function geocode(a){geocoder.geocode({location:a},function(b,c){"OK"===c&&(b[0]&&($("#header-search-location-field").val(b[0].formatted_address),$("#advance-search-location").val(b[0].formatted_address),$("#search-location-autocomplete").val(b[0].formatted_address)),autoCompleteLocationValue={name:b[0].formatted_address,complete_address:b[0].formatted_address,lat:a.lat(),lng:a.lng()},"getRecommended"==typeof obj&&getRecommended(a.lat(),a.lng()))})}function IsEmail(a){return/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(a)}function populateCoutries(){$.getJSON(GLOBAL_countries_json,function(a){a.countries.forEach(function(b){var a='<option value="'+b.value+'" ';"Philippines"===b.value&&(a+="selected "),a=a+">"+b.name+"</option>",$("#country").append(a)})})}function populatePositions(){$.getJSON(GLOBAL_careers_position_json,function(a){a.positions.forEach(function(b){var a='<option value="'+b.value+'" ';a=a+">"+b.name+"</option>",$("#position-interested").append(a)})}).then(function(){$("#position-interested").multiselect({enableFiltering:!0,enableCaseInsensitiveFiltering:!0})})}function populateContactProperties(){var a=$("#propertyInterested"),b=$("#propertyOwned"),c={enableFiltering:!0,enableCaseInsensitiveFiltering:!0};a.empty(),b.empty(),allProperties.forEach(function(d,f){var e='<option value="'+d.id+'" >'+d.name+" | "+d.city+"</option>";a.append(e),b.append(e),f===allProperties.length-1&&(firedContactSelect=!0,$("#propertyInterested").multiselect(c),$("#propertyOwned").multiselect(c),$(".contact-form-wrap").removeClass("loading-form"))})}function change_captcha(){document.getElementById("captcha").src=GLOBAL_frontend_contact_us_captcha}$(document).ready(function(){$(".copy-url").click(function(b){var a;b.preventDefault(),document.querySelector(".js-copytextarea").select();try{document.execCommand("copy")}catch(c){}$(".notes-copied").addClass("active"),clearTimeout(a),a=setTimeout(function(){$(".notes-copied").removeClass("active")},2500)}),$(document).on("click",".pi-share",function(b){b.preventDefault();var c=$(this).data("url"),a=GLOBAL_app_request_schemeAndHttpHost+"/"+c;$("#share-url-fb").attr("href","https://www.facebook.com/sharer/sharer.php?u="+a),$("#share-url-twitter").attr("href","https://twitter.com/intent/tweet?url="+a),$("#input-share-url").val(a),$(".js-copytextarea").val(a),$("#a-share-url").attr("data-url",a),$.fancybox.open({src:"#share-info",autoSize:!1,toolbar:!0,gutter:20,touch:!1,fitToView:!1,clickContent:!1})}),initializeDefaultButtons(),loadCookies(),getCookie("DMCI_advisory"),"-1"==document.cookie.indexOf("advisoryCookie=here")&&($(".advisory-wrap").addClass("active"),1025>$(window).width()&&$("body").addClass("advisory"),$(".advisory-wrap .jq-close").click(function(b){b.preventDefault();var a=new Date;a=new Date(a.getTime()+864e5),document.cookie="advisoryCookie=here; expires="+a,$("body.advisory").removeClass("advisory"),$(".advisory-wrap").removeClass("active"),$(".advisory-wrap").addClass("hide")}),$(".advisory-wrap btn.btn-round").click(function(){var a=new Date;return a=new Date(a.getTime()+864e5),document.cookie="advisoryCookie=here; expires="+a,$("body.advisory").removeClass("advisory"),$(".advisory-wrap").removeClass("active"),$(".advisory-wrap").addClass("hide"),!0}))}),$(function(){getActivePropertiesJson()});var isBusyCaptcha=!1;$("img#refresh").click(function(){!1==isBusyCaptcha&&(isBusyCaptcha=!0,$("img#refresh").addClass("active"),setTimeout(function(){$("img#refresh").removeClass("active"),isBusyCaptcha=!1},300),change_captcha())}),$("#captchaerror-close").click(function(a){a.preventDefault(),$.fancybox.close("#captcha-error")});var firedContactSelect=!1;"frontend_single_property"!==GLOBAL_APP_REQUEST_GET?($(document).ready(function(){}),$(window).on("scroll",function(){if($(".contact-form-wrap").length>0){var a=window.innerHeight?window.innerHeight:$(window).height(),b=$(window).scrollTop(),c=$(".contact-form-wrap").offset(),d=c.top-a;b>=d&& !1==firedContactSelect&&populatePositions()}})):$(function(){var a={enableFiltering:!0,enableCaseInsensitiveFiltering:!0};$("#position-interested").multiselect(a),$("#propertyInterested").multiselect(a),$("#propertyOwned").multiselect(a)}),$(function(){getCookie("profile-set")||$.fancybox.open({src:"#cookie-preference",modal:!0,beforeShow:function(){$(".fancybox-bg").css({background:"rgba(255, 255, 255, 0.6)"})}})})

</script>


            <!-- <script rel="preload" src="/frontend/js/imagesloaded.pkgd.js "></script>
<script rel="preload" src="/frontend/js/packery.pkgd.js"></script> -->
<script async="defer">
"use strict";function initUnitFilters(){var e=$("#careers-list-wrapper"),t=$("#careers-sort");e.find(".career-item").sort(sortByNameAsc).appendTo(e),t.change(function(){var a=t.val();"name_asc"===a&&e.find(".career-item").sort(sortByNameAsc).appendTo(e),"name_desc"===a&&e.find(".career-item").sort(sortByNameDesc).appendTo(e)})}function sortByNameAsc(e,t){return $(t).data("name")<$(e).data("name")?1:-1}function sortByNameDesc(e,t){return $(t).data("name")>$(e).data("name")?1:-1}function IsEmail(e){return/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(e)}!function(e,t,a){var r=e.querySelectorAll(".inputfile");Array.prototype.forEach.call(r,function(e){var t=e.nextElementSibling,a=t.innerHTML;e.addEventListener("change",function(e){var r="";(r=this.files&&this.files.length>1?(this.getAttribute("data-multiple-caption")||"").replace("{count}",this.files.length):e.target.value.split("\\").pop())?t.querySelector("span").innerHTML=r:t.innerHTML=a}),e.addEventListener("focus",function(){e.classList.add("has-focus")}),e.addEventListener("blur",function(){e.classList.remove("has-focus")})})}(document,window,0),$(document).ready(function(){initUnitFilters(),$(".career-popup").on("click",function(){var e=$(this).data("name"),t=$(this).data("content"),a=$(this).data("id");console.log(t),$(".career-info-wrap h2").text(e),$(".career-info-wrap article").html(t),$("#career-title").text(e),$("#c-id").val(a)}),$("#apply-btn").click(function(e){console.log("triggerd"),e.preventDefault();var t=!1;if($(".input-wrap").removeClass("error"),""===$("#c-fname").val()&&($("#c-fname").closest(".input-wrap").addClass("error"),t=!0),""===$("#c-lname").val()&&($("#c-lname").closest(".input-wrap").addClass("error"),t=!0),""!==$("#c-email").val()&&IsEmail($("#c-email").val())||($("#c-email").closest(".input-wrap").addClass("error"),t=!0),(""===$("#c-contact").val()||$("#c-contact").val().length<=5)&&($("#c-contact").closest(".input-wrap").addClass("error"),t=!0),0===$("#resume").get(0).files.length&&($("#resume").closest(".input-wrap").addClass("error"),t=!0),t)$("#all-field").addClass("error");else{console.log("triggered");var a=$("#career-form")[0],r=new FormData(a);$.ajax({type:"POST",enctype:"multipart/form-data",url:$("#career-form").attr("action"),data:r,processData:!1,contentType:!1,cache:!1,timeout:6e5,success:function(e){var t={event:"Submit Button Inquiry",eventCategory:"Inquiry Form",eventAction:"Submit Button Inquiry",eventLabel:"careers_inquiry_"+$("#career-title").text()};console.log(t),console.log(e),dataLayer.push(t),$.fancybox.open({src:"#thankyou",clickContent:!1,beforeShow:function(){$("#career-form")[0].reset()}})},error:function(e){alert("failed to send inquiry")}})}})}),$("#position-search").keyup(function(e){var t=$(this).val().toUpperCase();$(".career-item").each(function(e){var a=parseInt($("#category-filter").val()),r=$(this).data("name").toUpperCase(),n=parseInt($(this).data("category"));0===a&&(a=n),r.indexOf(t)>-1&&n===a?$(this).css("display",""):$(this).css("display","none")})}),$("#category-filter").change(function(){var e=$("#position-search").val().toUpperCase();$(".career-item").each(function(t){var a=parseInt($("#category-filter").val()),r=$(this).data("name").toUpperCase(),n=parseInt($(this).data("category"));0===a&&(a=n),r.indexOf(e)>-1&&n===a?$(this).css("display",""):$(this).css("display","none")})});
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

<div style="display: none; visibility: hidden;"><script>fbq("track","ViewContent",{value:0,currency:"PHP"});</script></div><script id="liveagent-esw-script" type="text/javascript" src="https://service.force.com/embeddedservice/5.0/client/liveagent.esw.min.js"></script><div id="batBeacon450089220818" style="width: 0px; height: 0px; display: none; visibility: hidden;"><img id="batBeacon487060677871" width="0" height="0" alt="" src="https://bat.bing.com/action/0?ti=26169032&amp;Ver=2&amp;mid=578ae719-aca9-412f-bdca-2bb91b410ef2&amp;sid=7c5f9a10d43911eea8293f51b3e52217&amp;vid=00e39ef0cf1511ee9d27d93e2ab67dea&amp;vids=0&amp;msclkid=N&amp;uach=pv%3D10.0.0&amp;pi=918639831&amp;lg=en-US&amp;sw=1366&amp;sh=768&amp;sc=24&amp;tl=Careers%20%7C%20DMCI%20Homes&amp;p=https%3A%2F%2Fwww.dmcihomes.com%2Fcareers&amp;r=https%3A%2F%2Fwww.dmcihomes.com%2F&amp;lt=1552&amp;evt=pageLoad&amp;sv=1&amp;rn=524448" style="width: 0px; height: 0px; display: none; visibility: hidden;"></div><form id="fileUploadForm" enctype="multipart/form-data" method="post" target="fileUploadIframe"><input type="file" id="fileSelector" name="file" style="display: none;"><input name="filename" type="hidden"></form><iframe id="fileUploadIframe" name="fileUploadIframe" title="FileUploadFrame" style="display: none;"></iframe><iframe id="esw_storage_iframe" src="https://service.force.com/embeddedservice/5.0/esw.html?parent=https://www.dmcihomes.com/careers" title="Live Chat Metadata" style="display: none;"></iframe><script type="text/javascript" src="https://d.la1-core1.sfdc-mchho0.salesforceliveagent.com/chat/rest/EmbeddedService/EmbeddedServiceConfig.jsonp?Settings.prefix=EmbeddedService&amp;org_id=00D5g000000J3Js&amp;EmbeddedServiceConfig.configName=WEB_CHAT&amp;callback=embedded_svc.liveAgentAPI.handleChatSettings&amp;version=48"></script><script id="invite-esw-script" type="text/javascript" src="https://service.force.com/embeddedservice/5.0/client/invite.esw.min.js"></script><div class="embeddedServiceHelpButton"><div class="helpButton"><button class="helpButtonEnabled uiButton" href="javascript:void(0)"><span class="embeddedServiceIcon" aria-hidden="true" data-icon="" style="display: inline-block;"></span><span class="helpButtonLabel" id="helpButtonSpan" aria-live="polite" aria-atomic="true"><span class="assistiveText">Live chat:</span><span class="message">Chat with an Expert</span></span></button></div></div><script id="inert-script" type="text/javascript" src="https://service.force.com/embeddedservice/5.0/utils/inert.min.js"></script><script type="text/javascript" src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&amp;render=explicit"></script></body></html>
