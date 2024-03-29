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
                                    <div class="noUiSlider noUi-target noUi-ltr noUi-horizontal noUi-background" id="noUiSlider-budget-2">
                                        <div class="noUi-base">
                                            <div class="noUi-origin noUi-connect" style="left: 0%;">
                                                <div class="noUi-handle noUi-handle-lower"></div>
                                            </div>
                                            <div class="noUi-origin noUi-background" style="left: 100%;">
                                                <div class="noUi-handle noUi-handle-upper"></div>
                                            </div>
                                        </div>
                                    </div>
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
                                                <option value="0"><span data-value="0" class="currency-convert">PHP 0</span> M</option>
                                                <option value="1"><span data-value="1" class="currency-convert">PHP 1</span> M</option>
                                                <option value="2"><span data-value="2" class="currency-convert">PHP 2</span> M</option>
                                                <option value="3"><span data-value="3" class="currency-convert">PHP 3</span> M</option>
                                                <option value="4"><span data-value="4" class="currency-convert">PHP 4</span> M</option>
                                                <option value="5"><span data-value="5" class="currency-convert">PHP 5</span> M</option>
                                                <option value="6"><span data-value="6" class="currency-convert">PHP 6</span> M</option>
                                                <option value="7"><span data-value="7" class="currency-convert">PHP 7</span> M</option>
                                                <option value="8"><span data-value="8" class="currency-convert">PHP 8</span> M</option>
                                                <option value="9"><span data-value="9" class="currency-convert">PHP 9</span> M</option>
                                                <option value="10"><span data-value="10" class="currency-convert">PHP 10</span> M</option>
                                                <option value="11"><span data-value="11" class="currency-convert">PHP 11</span> M</option>
                                                <option value="12"><span data-value="12" class="currency-convert">PHP 12</span> M</option>
                                                <option value="13"><span data-value="13" class="currency-convert">PHP 13</span> M</option>
                                                <option value="14"><span data-value="14" class="currency-convert">PHP 14</span> M</option>
                                                <option value="15"><span data-value="15" class="currency-convert">PHP 15</span> M</option>
                                                <option value="16"><span data-value="16" class="currency-convert">PHP 16</span> M</option>
                                                <option value="17"><span data-value="17" class="currency-convert">PHP 17</span> M</option>
                                                <option value="18"><span data-value="18" class="currency-convert">PHP 18</span> M</option>
                                                <option value="19"><span data-value="19" class="currency-convert">PHP 19</span> M</option>
                                                <option value="20"><span data-value="20" class="currency-convert">PHP 20</span> M</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="">Max Price</label>
                                        <div class="custom-select">
                                            <label for="max-price"></label>
                                            <select name="" id="max-price-select">
                                                <option value="1"><span data-value="1" class="currency-convert">PHP 1</span> M</option>
                                                <option value="2"><span data-value="2" class="currency-convert">PHP 2</span> M</option>
                                                <option value="3"><span data-value="3" class="currency-convert">PHP 3</span> M</option>
                                                <option value="4"><span data-value="4" class="currency-convert">PHP 4</span> M</option>
                                                <option value="5"><span data-value="5" class="currency-convert">PHP 5</span> M</option>
                                                <option value="6"><span data-value="6" class="currency-convert">PHP 6</span> M</option>
                                                <option value="7"><span data-value="7" class="currency-convert">PHP 7</span> M</option>
                                                <option value="8"><span data-value="8" class="currency-convert">PHP 8</span> M</option>
                                                <option value="9"><span data-value="9" class="currency-convert">PHP 9</span> M</option>
                                                <option value="10"><span data-value="10" class="currency-convert">PHP 10</span> M</option>
                                                <option value="11"><span data-value="11" class="currency-convert">PHP 11</span> M</option>
                                                <option value="12"><span data-value="12" class="currency-convert">PHP 12</span> M</option>
                                                <option value="13"><span data-value="13" class="currency-convert">PHP 13</span> M</option>
                                                <option value="14"><span data-value="14" class="currency-convert">PHP 14</span> M</option>
                                                <option value="15"><span data-value="15" class="currency-convert">PHP 15</span> M</option>
                                                <option value="16"><span data-value="16" class="currency-convert">PHP 16</span> M</option>
                                                <option value="17"><span data-value="17" class="currency-convert">PHP 17</span> M</option>
                                                <option value="18"><span data-value="18" class="currency-convert">PHP 18</span> M</option>
                                                <option value="19"><span data-value="19" class="currency-convert">PHP 19</span> M</option>
                                                <option value="20"><span data-value="20" class="currency-convert">PHP 20</span> M</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-range">
                                <div class="noUiSlider noUi-target noUi-ltr noUi-horizontal noUi-background" id="noUiSlider-1">
                                    <div class="noUi-base">
                                        <div class="noUi-origin noUi-connect" style="left: 0%;">
                                            <div class="noUi-handle noUi-handle-lower"></div>
                                        </div>
                                        <div class="noUi-origin noUi-background" style="left: 100%;">
                                            <div class="noUi-handle noUi-handle-upper"></div>
                                        </div>
                                    </div>
                                </div>
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
                <li><a href="#" class="btn btn-round btn-ghost sidebar-location-all active" data-location="all">View All</a></li>
                <li><a href="https://www.dmcihomes.com/condo-antipolo" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Antipolo City">Antipolo City</a></li>
                <li><a href="https://www.dmcihomes.com/condo-bacoor" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Bacoor">Bacoor</a></li>
                <li><a href="https://www.dmcihomes.com/condo-baguio" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Baguio City">Baguio City</a></li>
                <li><a href="https://www.dmcihomes.com/condo-cabuyao-laguna" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Cabuyao, Laguna">Cabuyao, Laguna</a></li>
                <li><a href="https://www.dmcihomes.com/condo-caloocan" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Caloocan">Caloocan</a></li>
                <li><a href="https://www.dmcihomes.com/condo-carmona" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Carmona">Carmona</a></li>
                <li><a href="https://www.dmcihomes.com/condo-cavite-city" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Cavite City">Cavite City</a></li>
                <li><a href="https://www.dmcihomes.com/condo-cebu-city" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Cebu City">Cebu City</a></li>
                <li><a href="https://www.dmcihomes.com/condo-davao" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Davao City">Davao City</a></li>
                <li><a href="https://www.dmcihomes.com/condo-las-pinas" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Las Piñas">Las Piñas</a></li>
                <li><a href="https://www.dmcihomes.com/condo-makati" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Makati">Makati</a></li>
                <li><a href="https://www.dmcihomes.com/condo-malay" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Malay">Malay</a></li>
                <li><a href="https://www.dmcihomes.com/condo-mandaluyong" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Mandaluyong">Mandaluyong</a></li>
                <li><a href="https://www.dmcihomes.com/condo-manila" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Manila">Manila</a></li>
                <li><a href="https://www.dmcihomes.com/condo-muntinlupa" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Muntinlupa">Muntinlupa</a></li>
                <li><a href="https://www.dmcihomes.com/condo-paranaque" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Parañaque">Parañaque</a></li>
                <li><a href="https://www.dmcihomes.com/condo-pasay" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Pasay">Pasay</a></li>
                <li><a href="https://www.dmcihomes.com/condo-pasig" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Pasig">Pasig</a></li>
                <li><a href="https://www.dmcihomes.com/condo-quezon-city" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Quezon City">Quezon City</a></li>
                <li><a href="https://www.dmcihomes.com/condo-san-juan-batangas" class="btn btn-round btn-ghost sidebar-location-filter" data-location="San Juan, Batangas">San Juan, Batangas</a></li>
                <li><a href="https://www.dmcihomes.com/condo-santa-rosa-laguna" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Santa Rosa City, Laguna">Santa Rosa City, Laguna</a></li>
                <li><a href="https://www.dmcihomes.com/condo-taguig" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Taguig">Taguig</a></li>
                <li><a href="https://www.dmcihomes.com/condo-tuba-benguet" class="btn btn-round btn-ghost sidebar-location-filter" data-location="Tuba, Benguet">Tuba, Benguet</a></li>
            </ul>
            <p>Can't see what your looking for?</p>
            <a href="/properties" class="btn btn-round btn-small">View all <span> Properties</span></a>
        </div>
    </div>
</div>

<section class="banner wavy">

    <picture class="coverimage-img" style="">
        <span id="dynamic-banner-souce-large" data-src="/uploads/media/generated/Mulberry Place-featured-1665479476736-large.jpg"></span>
        <span id="dynamic-banner-souce-medium" data-src="/uploads/media/generated/Mulberry Place-featured-1665479476736-large.jpg"></span>
        <img id="dynamic-banner-img" src="/uploads/media/generated/Mulberry%20Place-featured-1665479476736-medium.jpg" alt="Visit Mulberry Place" width="1493" height="1000" style="width: 892px; height: 597px; margin-top: 0px; margin-left: -258px; opacity: 1;">
    </picture>
    <div class="table-wrap ">
        <div class="table-cell">
            <div class="container">
                <div class="banner-left">
                    <!-- <figure class="banner-logo animated hiding" data-animation="fadeInUp" data-delay="100">
                    <img id="dynamic-banner-logo" src="/uploads/media/generated/Mulberry Place Header Logo-large.webp" alt="">
                </figure> -->
                    <div class="banner-text animated hiding" data-animation="fadeInUp" data-delay="300" style="opacity: 1;">
                        <h1 id="dynamic-banner-headline">The hallmark of a graceful lifestyle in Taguig City</h1>
                        <p id="dynamic-banner-subHeadLine">Mulberry Place is an Asian-Tropical development found at the growing community of Acacia Estates in Taguig City. This exclusive residential retreat seamlessly blends exquisitely designed amenities with nature's grandeur.</p>
                        <a href="mulberry-place" class="btn btn-round" id="dynamic-banner-cta">Visit Mulberry Place</a>
                    </div>

                    <div class="banner-text-placeholder">
                        <!-- <figure class="banner-logo">
                        <div class="loading-large loading-text-title"></div>
                    </figure> -->
                        <div class="loading-large loading-text-title"></div>
                        <div class="loading-large loading-text"></div>
                        <div class="loading-large loading-text"></div>
                        <div class="loading-large loading-text"></div>
                        <div class="loading-large loading-text-btn"></div>
                    </div>
                </div>

                <!-- <div class="banner-filter animated hiding" data-animation="fadeInUp" data-delay="100">
                <div class="bf-looking">
                    <ul>
                        <li><span>I’m looking to</span></li>
                        <li>
                            <div class="custom-select">
                                <label for="qs-type"></label>
                                <select name="" id="qs-type">
                                    <option value="">Buy</option>
                                    <option value="">Rent</option>
                                    <option value="">Lease</option>
                                </select>
                            </div>
                        </li>
                        <li><span>a</span></li>
                        <li>
                            <div class="custom-select house-type">
                                <label for="house-type"></label>
                                <select name="" id="header-search-unit-type">
                                </select>
                            </div>
                        </li>
                        <li><span>unit</span></li>
                    </ul>
                </div>
                <div class="bf-loc">
                    <div class="input-wrap">
                        <input id="header-search-location-field" type="text" class="location-autocomple"  placeholder="Your Location">
                                                        <button data-fancybox data-src="#map-pin">
                            <img src="/frontend/images/map-marker-white.png" alt="">
                            <span>Locate<br>on Map</span>
                        </button>
                    </div>
                </div>
                <div class="bf-price-range">
                    <h4>with my budget around <label><i class="icon-home icon-peso-sign"></i><span id="first-mil">2</span> Million - <i class="icon-home icon-peso-sign"></i><span id="second-mil">14</span> Million</label></h4>
                    <div class="price-range">
                        <div class="noUiSlider" id="noUiSlider"></div>
                        <input type="hidden" id="header-min-price" name="price_fm" class="price_fm" />
                        <input type="hidden" id="header-max-price" name="price_to" class="price_to" />
                        <p class="pricing-label">
                            <label class="pl-1" for="">1<span>M</span></label>
                            <label class="pl-3" for="">3<span>M</span></label>
                            <label class="pl-5" for="">5<span>M</span></label>
                            <label class="pl-7" for="">7<span>M</span></label>
                            <label class="pl-10" for="">10<span>M</span></label>
                            <label class="pl-15" for="">15<span>M</span></label>
                            <label class="pl-20" for="">20<span>M</span></label>
                        </p>
                    </div>
                </div>
                <div class="banner-action clearfix">
                    <a href="#" class="advance-filter-link"><span class="icon-home icon-advancefilter"></span>Advance Filters</a>
                    <button class="btn btn-round" id="search-simple-button">Search</button>
                </div>
            </div> -->
            </div>
        </div>
    </div>
    <!-- <div class="banner-arrow-wrap animated hiding" data-animation="fadeInUp" data-delay="600">
    <a href="#recommended" class="banner-arrow">
        <span class="icon-home icon-down-arrow"></span>
    </a>
</div> -->
