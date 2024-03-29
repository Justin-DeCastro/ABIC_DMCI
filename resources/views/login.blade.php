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
                                                <input id="rf-buy" type="radio" value="buy" name="as-radio"
                                                    checked="true">
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
                                                <input id="tp-highrise" type="checkbox" class="advance-dev-type-cb"
                                                    name="development_type[]" value="2">
                                                <label for="tp-highrise">High Rise Condominiums</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-checkbox">
                                                <input id="tp-midrise" type="checkbox" class="advance-dev-type-cb"
                                                    name="development_type[]" value="3">
                                                <label for="tp-midrise">Mid Rise Condominiums</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-checkbox">
                                                <input id="tp-sub" type="checkbox" class="advance-dev-type-cb"
                                                    name="development_type[]" value="4">
                                                <label for="tp-sub">Subdivisions</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-checkbox">
                                                <input id="tp-leisure" type="checkbox" class="advance-dev-type-cb"
                                                    name="development_type[]" value="5">
                                                <label for="tp-leisure">Leisure Residences</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4" data-search-option="lease" data-filter="rent"
                                style="display: none;">
                                <div class="input-wrap multi-select">
                                    <h2>Finish</h2>
                                    <ul class="ads-types">
                                        <li>
                                            <div class="custom-checkbox">
                                                <input id="bare-unit-input" type="checkbox"
                                                    class="advance-furnish-type-cb" name="furnished_type[]"
                                                    value="BARE UNIT">
                                                <label for="bare-unit-input">Bare Unit</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-checkbox">
                                                <input id="semi-furnished-input" type="checkbox"
                                                    class="advance-furnish-type-cb" name="furnished_type[]"
                                                    value="SEMI-FURNISHED">
                                                <label for="semi-furnished-input">Semi Furnished</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-checkbox">
                                                <input id="full-furnished-input" type="checkbox"
                                                    class="advance-furnish-type-cb" name="furnished_type[]"
                                                    value="FULLY FURNISHED">
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
                                                <input id="tu-studio" type="checkbox" class="advance-unit-type-cb"
                                                    name="unit_type[]" value="1">
                                                <label for="tu-studio">Studio</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-checkbox">
                                                <input id="tu-1bed" type="checkbox" class="advance-unit-type-cb"
                                                    name="unit_type[]" value="2">
                                                <label for="tu-1bed">1 Bedroom</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-checkbox">
                                                <input id="tu-2bed" type="checkbox" class="advance-unit-type-cb"
                                                    name="unit_type[]" value="3">
                                                <label for="tu-2bed">2 Bedroom</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-checkbox">
                                                <input id="tu-3bed" type="checkbox" class="advance-unit-type-cb"
                                                    name="unit_type[]" value="4">
                                                <label for="tu-3bed">3 Bedroom</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-checkbox">
                                                <input id="tu-4bed" type="checkbox" class="advance-unit-type-cb"
                                                    name="unit_type[]" value="5">
                                                <label for="tu-4bed">4 Bedroom</label>
                                            </div>
                                        </li>
                                        <li data-search-option="buy">
                                            <div class="custom-checkbox">
                                                <input id="tu-b-house" type="checkbox" class="advance-unit-type-cb"
                                                    name="unit_type[]" value="6">
                                                <label for="tu-b-house">Loft</label>
                                            </div>
                                        </li>
                                        <li data-search-option="buy">
                                            <div class="custom-checkbox">
                                                <input id="tu-2s-house" type="checkbox"
                                                    class="advance-unit-type-cb sdv" name="unit_type[]"
                                                    value="7">
                                                <label for="tu-2s-house">House &amp; Lot</label>
                                            </div>
                                        </li>
                                        <li data-search-option="buy">
                                            <div class="custom-checkbox">
                                                <input id="tu-lot" type="checkbox"
                                                    class="advance-unit-type-cb sdv" name="unit_type[]"
                                                    value="8">
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
                                            <div class="noUiSlider noUi-target noUi-ltr noUi-horizontal noUi-background"
                                                id="noUiSlider-budget-2">
                                                <div class="noUi-base">
                                                    <div class="noUi-origin noUi-connect" style="left: 0%;">
                                                        <div class="noUi-handle noUi-handle-lower"></div>
                                                    </div>
                                                    <div class="noUi-origin noUi-background" style="left: 100%;">
                                                        <div class="noUi-handle noUi-handle-upper"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" id="budget-min-price-2" name="budget_fm"
                                                class="price_fm">
                                            <input type="hidden" id="budget-max-price-2" name="budget_to"
                                                class="price_to">
                                            <p class="pricing-label clear">
                                                <label class="pl-1 fl" for=""
                                                    style="left: -12px; font-family: 'Arial', 'Helvetica', sans-serif !important;"><span>P
                                                    </span> <span
                                                        id="budget-min-price-label-2">5</span><span>,000</span></label>
                                                <label class="pl-3 fr" for=""
                                                    style="left: auto; right: -18px; font-family: 'Arial', 'Helvetica', sans-serif !important;"><span>P
                                                    </span> <span id="budget-max-price-label-2">90</span><span>
                                                        000</span></label>
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
                                                        <option value="0"><span data-value="0"
                                                                class="currency-convert">PHP 0</span> M</option>
                                                        <option value="1"><span data-value="1"
                                                                class="currency-convert">PHP 1</span> M</option>
                                                        <option value="2"><span data-value="2"
                                                                class="currency-convert">PHP 2</span> M</option>
                                                        <option value="3"><span data-value="3"
                                                                class="currency-convert">PHP 3</span> M</option>
                                                        <option value="4"><span data-value="4"
                                                                class="currency-convert">PHP 4</span> M</option>
                                                        <option value="5"><span data-value="5"
                                                                class="currency-convert">PHP 5</span> M</option>
                                                        <option value="6"><span data-value="6"
                                                                class="currency-convert">PHP 6</span> M</option>
                                                        <option value="7"><span data-value="7"
                                                                class="currency-convert">PHP 7</span> M</option>
                                                        <option value="8"><span data-value="8"
                                                                class="currency-convert">PHP 8</span> M</option>
                                                        <option value="9"><span data-value="9"
                                                                class="currency-convert">PHP 9</span> M</option>
                                                        <option value="10"><span data-value="10"
                                                                class="currency-convert">PHP 10</span> M</option>
                                                        <option value="11"><span data-value="11"
                                                                class="currency-convert">PHP 11</span> M</option>
                                                        <option value="12"><span data-value="12"
                                                                class="currency-convert">PHP 12</span> M</option>
                                                        <option value="13"><span data-value="13"
                                                                class="currency-convert">PHP 13</span> M</option>
                                                        <option value="14"><span data-value="14"
                                                                class="currency-convert">PHP 14</span> M</option>
                                                        <option value="15"><span data-value="15"
                                                                class="currency-convert">PHP 15</span> M</option>
                                                        <option value="16"><span data-value="16"
                                                                class="currency-convert">PHP 16</span> M</option>
                                                        <option value="17"><span data-value="17"
                                                                class="currency-convert">PHP 17</span> M</option>
                                                        <option value="18"><span data-value="18"
                                                                class="currency-convert">PHP 18</span> M</option>
                                                        <option value="19"><span data-value="19"
                                                                class="currency-convert">PHP 19</span> M</option>
                                                        <option value="20"><span data-value="20"
                                                                class="currency-convert">PHP 20</span> M</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-6">
                                                <label for="">Max Price</label>
                                                <div class="custom-select">
                                                    <label for="max-price"></label>
                                                    <select name="" id="max-price-select">
                                                        <option value="1"><span data-value="1"
                                                                class="currency-convert">PHP 1</span> M</option>
                                                        <option value="2"><span data-value="2"
                                                                class="currency-convert">PHP 2</span> M</option>
                                                        <option value="3"><span data-value="3"
                                                                class="currency-convert">PHP 3</span> M</option>
                                                        <option value="4"><span data-value="4"
                                                                class="currency-convert">PHP 4</span> M</option>
                                                        <option value="5"><span data-value="5"
                                                                class="currency-convert">PHP 5</span> M</option>
                                                        <option value="6"><span data-value="6"
                                                                class="currency-convert">PHP 6</span> M</option>
                                                        <option value="7"><span data-value="7"
                                                                class="currency-convert">PHP 7</span> M</option>
                                                        <option value="8"><span data-value="8"
                                                                class="currency-convert">PHP 8</span> M</option>
                                                        <option value="9"><span data-value="9"
                                                                class="currency-convert">PHP 9</span> M</option>
                                                        <option value="10"><span data-value="10"
                                                                class="currency-convert">PHP 10</span> M</option>
                                                        <option value="11"><span data-value="11"
                                                                class="currency-convert">PHP 11</span> M</option>
                                                        <option value="12"><span data-value="12"
                                                                class="currency-convert">PHP 12</span> M</option>
                                                        <option value="13"><span data-value="13"
                                                                class="currency-convert">PHP 13</span> M</option>
                                                        <option value="14"><span data-value="14"
                                                                class="currency-convert">PHP 14</span> M</option>
                                                        <option value="15"><span data-value="15"
                                                                class="currency-convert">PHP 15</span> M</option>
                                                        <option value="16"><span data-value="16"
                                                                class="currency-convert">PHP 16</span> M</option>
                                                        <option value="17"><span data-value="17"
                                                                class="currency-convert">PHP 17</span> M</option>
                                                        <option value="18"><span data-value="18"
                                                                class="currency-convert">PHP 18</span> M</option>
                                                        <option value="19"><span data-value="19"
                                                                class="currency-convert">PHP 19</span> M</option>
                                                        <option value="20"><span data-value="20"
                                                                class="currency-convert">PHP 20</span> M</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-range">
                                        <div class="noUiSlider noUi-target noUi-ltr noUi-horizontal noUi-background"
                                            id="noUiSlider-1">
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
                                            <label class="pl-1" for=""><span data-value="1"
                                                    class="currency-convert-no-symbol">1</span><span>M</span></label>
                                            <label class="pl-3" for=""><span data-value="3"
                                                    class="currency-convert-no-symbol">3</span><span>M</span></label>
                                            <label class="pl-5" for=""><span data-value="5"
                                                    class="currency-convert-no-symbol">5</span><span>M</span></label>
                                            <label class="pl-7" for=""><span data-value="7"
                                                    class="currency-convert-no-symbol">7</span><span>M</span></label>
                                            <label class="pl-10" for=""><span data-value="10"
                                                    class="currency-convert-no-symbol">10</span><span>M</span></label>
                                            <label class="pl-15" for=""><span data-value="15"
                                                    class="currency-convert-no-symbol">15</span><span>M</span></label>
                                            <label class="pl-20" for=""><span data-value="20"
                                                    class="currency-convert-no-symbol">20</span><span>M</span></label>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="clr"></div>

                            <div class="col-lg-7 col-md-6" data-search-option="both" data-filter="rent">
                                <div class="input-wrap bf-loc">
                                    <h2>Near this Location</h2>
                                    <input data-fancybox-loc="" data-src="#map-pin" type="text"
                                        name="advance-location" id="advance-search-location"
                                        class="location-autocomple" placeholder="Any Location" readonly="">
                                    <button data-fancybox-loc="" data-src="#map-pin">
                                        <!-- <i class="icon-home icon-pin-locator"></i> <span>Use<br>Pin</span> -->
                                        <img src="{{ asset('images/map-marker-white.png') }}" alt="">
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
                                                <input id="cs-new" type="checkbox" class="advance-status-cb"
                                                    name="status[]" value="1">
                                                <label for="cs-new"><span class="icon icon-new"></span> New</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-checkbox">
                                                <input id="cs-rfo" type="checkbox" class="advance-status-cb"
                                                    name="status[]" value="2">
                                                <label for="cs-rfo"><span class="icon icon-RFO"></span> Ready for
                                                    Occupancy</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-checkbox">
                                                <input id="cs-uc" type="checkbox" class="advance-status-cb"
                                                    name="status[]" value="3">
                                                <label for="cs-uc"><span class="property-status">
                                                        <i class="icon-under-construction"></i></span> Under
                                                    Construction</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-checkbox">
                                                <input id="cs-cs" type="checkbox" class="advance-status-cb"
                                                    name="status[]" value="4">
                                                <label for="cs-cs"><span class="icon icon-coming-soon"></span>
                                                    Coming Soon</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="input-wrap text-center not-this">
                            <button id="advance-search-button" data-search-option="buy"
                                class="btn btn-large btn-round btn-green disabled">Search</button>
                            <a href="" id="advance-lease-button" data-search-option="lease"
                                class="btn btn-large btn-round btn-green disabled"
                                style="margin-top: 20px; display: none;">Search</a>
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
                        <li><a href="#" class="btn btn-round btn-ghost sidebar-location-all active"
                                data-location="all">View All</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-antipolo"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Antipolo City">Antipolo City</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-bacoor"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Bacoor">Bacoor</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-baguio"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Baguio City">Baguio City</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-cabuyao-laguna"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Cabuyao, Laguna">Cabuyao, Laguna</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-caloocan"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Caloocan">Caloocan</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-carmona"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Carmona">Carmona</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-cavite-city"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Cavite City">Cavite City</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-cebu-city"
                                class="btn btn-round btn-ghost sidebar-location-filter" data-location="Cebu City">Cebu
                                City</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-davao"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Davao City">Davao City</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-las-pinas"
                                class="btn btn-round btn-ghost sidebar-location-filter" data-location="Las Piñas">Las
                                Piñas</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-makati"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Makati">Makati</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-malay"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Malay">Malay</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-mandaluyong"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Mandaluyong">Mandaluyong</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-manila"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Manila">Manila</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-muntinlupa"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Muntinlupa">Muntinlupa</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-paranaque"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Parañaque">Parañaque</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-pasay"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Pasay">Pasay</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-pasig"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Pasig">Pasig</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-quezon-city"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Quezon City">Quezon City</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-san-juan-batangas"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="San Juan, Batangas">San Juan, Batangas</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-santa-rosa-laguna"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Santa Rosa City, Laguna">Santa Rosa City, Laguna</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-taguig"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Taguig">Taguig</a></li>
                        <li><a href="https://www.dmcihomes.com/condo-tuba-benguet"
                                class="btn btn-round btn-ghost sidebar-location-filter"
                                data-location="Tuba, Benguet">Tuba, Benguet</a></li>
                    </ul>
                    <p>Can't see what your looking for?</p>
                    <a href="/properties" class="btn btn-round btn-small">View all <span> Properties</span></a>
                </div>
            </div>
        </div>

        <nav class="rightbar-nav animated hiding" data-animation="fadeInRight" data-delay="700">
            <h2>What's New</h2>
            <div class="sec-active-text">
                <span>Latest News</span>
                <div class="bullet-wrap">
                    <i class="bullet"></i>
                    <i class="bullet"></i>
                    <i class="bullet"></i>
                </div>
            </div>
            <ul>
                <li class="active"><a href="#latest-news">Latest News</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#promos">Promo</a></li>
                <li><a href="#site-progress-news">Site Progress</a></li>
                <li><a href="#contact-us">Contact Us</a></li>
            </ul>
        </nav>

        <section id="main-wrapper">
            <section class="banner wavy default" id="overview">
                <picture class="coverimage-img">
                    <source data-srcset="{{ asset('images/hero-shd.png') }}" media="(min-width: 570px)"
                        srcset="{{ asset('images/hero-shd.png') }}">
                    <source data-srcset="{{ asset('images/hero-shd.png') }}" media="(min-width: 320px)"
                        srcset="{{ asset('images/hero-shd.png') }}">
                    <img class=" lazyloaded" data-src="{{ asset('images/hero-shd.png') }}" width="1440"
                        height="330" alt="MDN" src="{{ asset('images/hero-shd.png') }}">
                </picture>
                <div class="banner-text">
                    <div class="container">
                        <h1>What's New</h1>
                    </div>
                </div>
            </section>

            <section class="sec-pad jq-section" id="latest-news">
                <div class="container">
                    <div class="sec-head">
                        <h2 class="sec-title">News</h2>
                        <p>Latest news and updates from DMCI Homes.</p>
                    </div>
                    <div class="property-list">
                        <ul class="flex property-list-carousel owl-carousel" id="recommended-properties">
                            @foreach ($allUpdates as $update)
                                <li class="" data-animation="fadeInUp" data-delay="100">
                                    <a href="https://www.dmcihomes.com/the-atherton">
                                        <div class="property-item box-card">
                                            <figure class="property-img">
                                                <img class="lazyload" src="{{ asset($update->image) }}"
                                                    alt="{{ $update->name }}" width="380" height="215">
                                                <span class="property-status circle-white">
                                                    <span class="icon-home rfo icon-RFO"></span>
                                                </span>
                                            </figure>
                                            <div class="content">
                                                <h3>{{ $update->name }}</h3>
                                                <p>Date: {{ $update->date }}</p>
                                                <p style="font-size:16px">{{ $update->description }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
     <section class="sec-pad jq-section" id="testimonials">
                                    <div class="container">
                                        <div class="sec-head">
                                            <h2 class="sec-title">Testimonials</h2>
                                            <p>What our clients say about us.</p>
                                        </div>
                                        <div class="grid-container">
                                            @foreach($testimonials as $testimonial)
                                            <div class="grid-item" data-animation="fadeInUp" data-delay="100">
                                                <a href="#">
                                                    <div class="article-item box-card">
                                                        <figure class="article-img">
                                                            <img src="{{ asset('images/testimonials/' . $testimonial->image) }}" alt="Testimonial Image" width="380" height="215">
                                                        </figure>
                                                        <div class="content">
                                                            <h3>{{ $testimonial->name }}</h3>
                                                            <p>Date: {{ $testimonial->date }}</p>
                                                            <p style="font-size:16px">{{ $testimonial->description }}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>


                {{-- <div class="slant-border slant-bot slant-white slant-right"></div>
            </section> --}}

            <section class="sec-pad jq-section" id="events">
                <div class="container">
                    <div class="sec-head">
                        <h2 class="sec-title">Events</h2>
                        <p>Stay tuned for the latest happenings in DMCI Homes and its communities.</p>
                    </div>

                    <div class="grid-container" id="events-grid">
                        @foreach($events as $event)
                        <div class="grid-item" data-animation="fadeInUp" data-delay="100">
                            <div class="article-item box-card">
                                <div class="content" style="height: 300px;"> <!-- Adjust the height as needed -->
                                    <h3 class="event-title">{{ $event->name }}</h3>
                                    <p class="event-date">Date: <span class="date-published">{{ $event->date }}</span></p>
                                    <div class="description-card"> <!-- Description card starts here -->
                                        <div class="article-description">
                                            <p>{{ $event->description }}</p>
                                        </div>
                                    </div> <!-- Description card ends here -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <style>
                .description-card {
        background-color: #ffffff; /* White background */
        border: 1px solid #dddddd; /* Light border */
        border-radius: 10px; /* Rounded corners */
        padding: 15px; /* Padding */
        margin-top: 15px; /* Top margin */
    }
                .article-item {
                    max-width: 380px; /* Adjust the maximum width as needed */
                    background-color: #f0f8ff; /* Light blue background for a cloudy appearance */
                    border-radius: 15px; /* Rounded corners */
                    padding: 20px; /* Padding */
                    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Box shadow */
                    transition: box-shadow 0.3s ease; /* Smooth transition */
                    position: relative; /* Position relative for pseudo-elements */
                    overflow: hidden; /* Hide overflow for pseudo-elements */
                }

                .article-item:before,
                .article-item:after {
                    content: ''; /* Create pseudo-elements */
                    position: absolute; /* Position absolute */
                    background: radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0) 70%); /* Cloud-like gradient */
                    top: 0; /* Align to top */
                    width: 100%; /* Full width */
                    height: 100%; /* Full height */
                    z-index: -1; /* Behind content */
                }

                .article-item:hover {
                    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.3); /* Box shadow on hover */
                }

                .event-title {
                    font-size: 24px; /* Larger title */
                    font-weight: bold; /* Bold font weight */
                    color: #333333; /* Dark text color */
                    margin-bottom: 10px; /* Bottom margin */
                }

                .event-date {
    font-size: 16px; /* Date font size */
    font-weight: bold; /* Bold font weight */
    color: #999999; /* Light text color */
    margin-bottom: 5px; /* Bottom margin */
}

.event-description {
    font-size: 16px; /* Description font size */
    font-family: Arial, sans-serif; /* Change font family */
    color: #666666; /* Medium text color */
}
            </style>




                                {{-- <div class="grid-item " data-animation="fadeInUp">
                                    <article class="article-item  article-min no-image">
                                        <div class="article-info">

                                            <p class="tag">

                                            </p>

                                            <h2 class="article-title"><a
                                                    href="/whats-new/events/stunning-vistas-and-serene-havens">Stunning
                                                    Vistas and Serene Havens</a></h2>
                                            <p class="date-published">January 24, 2013</p>
                                            <div class="clr"></div>
                                            <p>DMCI Homes Grand Open House Series
                                                DMCI Homes, the country&amp;rsquo;s leading developer of resort-inspired
                                                communities continues to redefine urban living with its extensive
                                                portfolio of residential projects featuring high-rise developments,
                                                mid-rise condo communities, and exclusive subdivisions. With
                                                resort-style outdoor amenities, wide open indoor spaces and themed
                                                architectural designs, you never have to venture far to be transported
                                                to a place where you can rest easy.
                                                Avail of light payment terms during these dates!...</p>

                                        </div>
                                    </article>
                                </div>
                                <div class="grid-item " data-animation="fadeInUp">
                                    <article class="article-item  article-min no-image">
                                        <div class="article-info">

                                            <p class="tag">

                                            </p>

                                            <h2 class="article-title"><a
                                                    href="/whats-new/events/acacia-estates-christmas-bazaar">Acacia
                                                    Estates Christmas Bazaar</a></h2>
                                            <p class="date-published">December 3, 2012</p>
                                            <div class="clr"></div>
                                            <p>Christmas is just around the corner at Acacia Estates open grounds. Come
                                                and join our residents in a Christmas Bazaar on December 14 to 16, 2012
                                                from 10AM to 10PM.&amp;nbsp;Great Food, Good Finds, Fun Shopping!...</p>

                                        </div>
                                    </article>
                                </div>
                                <div class="grid-item " data-animation="fadeInUp">
                                    <article class="article-item  article-min no-image">
                                        <div class="article-info">

                                            <p class="tag">

                                            </p>

                                            <h2 class="article-title"><a
                                                    href="/whats-new/events/take-your-palate-on-a-journey-home">Take
                                                    your Palate on a Journey Home</a></h2>
                                            <p class="date-published">October 4, 2012</p>
                                            <div class="clr"></div>
                                            <p>Allow us to take you through memory lane as we celebrate the rich
                                                culinary heritage of Filipino flavors. Delight yourselves with our
                                                unique takes on traditional dishes, heirloom recipes and family
                                                favorites....</p>

                                        </div>
                                    </article>
                                </div>
                                <div class="grid-item " data-animation="fadeInUp">
                                    <article class="article-item  article-min no-image">
                                        <div class="article-info">

                                            <p class="tag">

                                            </p>

                                            <h2 class="article-title"><a
                                                    href="/whats-new/events/dmci-homes-and-sm-savemore-bring-grocery-convenience-to-acacia-estates">DMCI
                                                    Homes and SM Savemore bring grocery convenience to Acacia Estates
                                                </a></h2>
                                            <p class="date-published">September 28, 2012</p>
                                            <div class="clr"></div>
                                            <p>...</p>

                                        </div>
                                    </article>
                                </div>
                                <div class="grid-item " data-animation="fadeInUp">
                                    <article class="article-item  article-min no-image">
                                        <div class="article-info">

                                            <p class="tag">

                                            </p>

                                            <h2 class="article-title"><a
                                                    href="/whats-new/events/dmci-homes-summer-camp-2012">DMCI Homes
                                                    Summer Camp 2012</a></h2>
                                            <p class="date-published">February 21, 2012</p>
                                            <div class="clr"></div>
                                            <p>We are inviting all the kids of DMCI Homes Communities to join and
                                                participate in the SUMMER CAMP PROGRAM 2012. DMCI Homes will be offering
                                                various classes in sports, creative and performing arts that would be a
                                                convenient, safe and affordable venue for your kids to enjoy this
                                                summer. It will surely provide opportunities for new learning
                                                experiences, discover talents and abilities, learn values and also
                                                develop interpersonal and social skills. Moreover, a culminating day of
                                                games and activities will be organized to showcase what the kids have
                                                learned at the end of the program.



                                                SUMMER CAMP PROGRAMS



                                                1. Basket...</p>

                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div> --}}

                {{-- <div class="slant-border slant-bot  slant-left"></div>
            </section> --}}








            <section class="sec-pad jq-section" id="promos" style="min-height: unset;">
                <div class="container">
                    <div class="sec-head">
                        <h2 class="sec-title">Promos</h2>
                        <p>Get the best deals from us! </p>
                    </div>
                    <div class="featured-news">
                        @foreach($promo as $promo)
                        <div class="masonry-wrap">
                            <div class="grid" id="promo-wrapper">
                                <div class="grid-item  grid-item--width2" data-animation="fadeInUp">
                                    <article class="article-item featured-article">
                                        <figure class="article-img ">

                                                <img src="{{ asset('images/promo/' . $promo->image) }}" alt="Promo Image" width="100">

                                        </figure>
                                        <div class="article-info">

                                            <p class="tag">

                                            </p>

                                            <h2 class="article-title">{{ $promo->name }}</a></h2>
                                            <p class="date-published">{{ $promo->date }}</p>
                                            <div class="clr"></div>
                                            <p>

                                        </div>
                                    </article>

                                </div>
                                @endforeach
                            </div>
                        </div>



                    </div>
                </div>
                <div class="slant-border slant-bot slant-blue slant-left"></div>
            </section>
{{--
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
            <section class="sec-pad sec-default bg-blue">
                <div class="container"> <!-- Add a container around the carousel -->
                    <div class="site-progress-wrap animated fadeInUp visible" data-animation="fadeInUp">
                        <ul class="site-progress-list" id="site-progress-list">
                            <!-- Site progress items -->
                            @foreach($cards as $card)
                            <li data-id="{{ $card->id }}">
                                <a href="/{{ $card->name }}#site-progress" class="site-progress-item">
                                    <div class="box-card">
                                        <figure class="site-progress-bg">
                                            <span class="sp-percent-value" style="height:{{ $card->progress }}; display: block; background-color: rgba(0, 255, 0, 0.5);"></span>
                                            <span class="sp-percentage">{{ $card->progress }}</span>
                                            <img src="{{ asset($card->image) }}" alt="Card Image">
                                        </figure>
                                        <label for="">{{ $card->name }}<span>{{ $card->place }}</span></label>
                                        <p class="update-date">{{ $card->date }}</p>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                            <!-- End of Site progress items -->
                        </ul>
                    </div>
                </div>
            </section>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
            <script>
                jQuery(document).ready(function($) {
                    $('#site-progress-list').slick({
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        arrows: true,
                        dots: true,
                        responsive: [{
                                breakpoint: 0,
                                settings: {
                                    slidesToShow: 2
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 1
                                }
                            }
                        ],
                        onAfterChange: function(slick, currentSlide) {
                            if (currentSlide === slick.slideCount - 1) {
                                // If it's the last slide, jump to the first slide
                                $('#site-progress-list').slick('slickGoTo', 0);
                            }
                        }
                    });
                });
            </script>



                        </div>
                    </div>
                </ul>
            </div> --}}




        <section class="sec-pad sec-default jq-section" id="contact-us">
            <div class="container m-t-40">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="contact-form-wrap contact-us" id="contact-form">
                            <div class="sec-head">
                                <h2 class="sec-title">Contact Us</h2>
                                <p>Leave us a message and we will get back to you as soon as possible.</p>
                            </div>

                            <form method="POST"
                                action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"
                                id="multi-type-inquiry">
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
                                    <label for="00N5g000003tIus">What can we help you with? <span
                                            class="required-field">*</span></label>
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
                                            <label for="first_name">First Name <span
                                                    class="required-field">*</span></label>
                                            <input id="first_name" name="first_name" type="text">
                                            <p class="error-message">This field is required.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-wrap">
                                            <label for="last_name">Last Name <span
                                                    class="required-field">*</span></label>
                                            <input id="last_name" name="last_name" type="text">
                                            <p class="error-message">This field is required.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-wrap">
                                            <label for="email">Email <span
                                                    class="required-field">*</span></label>
                                            <input id="email" name="email" type="email">
                                            <p class="error-message">Input a valid email address (eg. juan@gmail.com)
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-wrap">
                                            <label for="00N5g000003tnlz">Contact Number <span
                                                    class="required-field">*</span></label>
                                            <input id="00N5g000003tnlz" name="00N5g000003tnlz"
                                                onkeypress="return event.charCode === 0 || /[\d-+=,()]/.test(String.fromCharCode(event.charCode));"
                                                type="tel" maxlength="15">
                                            <p class="error-message">Input a valid mobile or landline number.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="input-wrap">
                                            <label for="00N5g000003tnOR">Country <span
                                                    class="required-field">*</span></label>
                                            <div class="custom-select">
                                                <select id="00N5g000003tnOR" name="00N5g000003tnOR"
                                                    title="Country">
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
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                    </option>
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
                                                    <option value="Central African Republic">Central African Republic
                                                    </option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo, Democratic Republic of the">Congo,
                                                        Democratic Republic of the</option>
                                                    <option value="Congo, Republic of the">Congo, Republic of the
                                                    </option>
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
                                                    <option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)
                                                    </option>
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
                                                    <option value="Micronesia, Federated States of">Micronesia,
                                                        Federated States of</option>
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
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                    </option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and
                                                        the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe
                                                    </option>
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
                                                    <option value="United States of America">United States of America
                                                    </option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City (Holy See)">Vatican City (Holy See)
                                                    </option>
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
                                            <label for="00N5g000003tIux">Province<span
                                                    class="required-field">*</span></label>
                                            <input id="00N5g000003tIux" name="00N5g000003tIux" type="text">
                                            <!-- input type="text" value="" /-->
                                            <p class="error-message">This field is required.</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-wrap">
                                            <label for="00N5g000003tIvCEAU">Message <span
                                                    class="required-field">*</span></label>
                                            <textarea id="00N5g000003tIvCEAU" name="00N5g000003tIvCEAU" placeholder="Type your message here" wrap="soft"></textarea>
                                            <p class="error-message">This field is required.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-wrap new-recaptcha-wrap">
                                    <!-- <label for="">Prove you're not a robot.</label> -->
                                    <div id="captchacode">
                                        <div style="width: 304px; height: 78px;">
                                            <div><iframe title="reCAPTCHA" width="304" height="78"
                                                    role="presentation" name="a-2eoi2lrf1ir0" frameborder="0"
                                                    scrolling="no"
                                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcKHRwiAAAAAPmLGJqTqV37DxkqG59azLwp8v6-&amp;co=aHR0cHM6Ly93d3cuZG1jaWhvbWVzLmNvbTo0NDM.&amp;hl=en&amp;v=1kRDYC3bfA-o6-tsWzIBvp7k&amp;size=normal&amp;cb=umr2ar208nyg"></iframe>
                                            </div>
                                            <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                        </div><iframe style="display: none;"></iframe>
                                    </div>
                                    <div class="error-message">
                                        <p>Please verify that you are not a robot.<span>*</span></p>
                                    </div>
                                </div>

                                <div class="notes policy">
                                    <ul class="flex check wide">
                                        <li>
                                            <div class="custom-checkbox input-wrap data-privacy">
                                                <input type="checkbox" id="agreedToDPA" name="agreedToDpa">
                                                <label for="agreedToDPA"><span class="required-field">*</span> I
                                                    agree to the DMCI Homes <a data-fancybox=""
                                                        data-src="#privacy-policy"><strong>Privacy Policy</strong></a>
                                                    as guided by RA10173 or the Philippine Data Privacy Act of
                                                    2012.</label>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="custom-checkbox input-wrap data-privacy">
                                                <input type="checkbox" id="allowedCRF" name="allowedCRF"
                                                    value="yes">
                                                <label for="allowedCRF">I am allowing DMCI Homes’ Corporate Accounts
                                                    Management group to be my official sales representative for the next
                                                    30 days. The group will exclusively be responsible for any of my
                                                    inquiries and processes needed, should I decide to make a
                                                    reservation/purchase.
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="input-wrap" id="all-field">
                                    <button type="submit" class="btn btn-round btn-green btn-large"
                                        id="submit-contact-form">Submit</button>
                                    <p class="error-message">Please fill up the required field correctly.</p>
                                </div>


                                <!-- </div> -->
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 other-channel-wrap hidden-tablet">
                        <div class="sec-head">
                            <h4 class="sec-title">You can also reach us via the following channels</h4>
                            <p>We always enjoy hearing from you and there are several ways that you can reach us.</p>
                        </div>
                        <div class="other-channels">
                            <ul>
                                <li class="animated hiding" data-animation="fadeInUp">
                                    <figure><img class="lazyload" src="{{ asset('images/lazyload.png') }}"
                                            data-src="{{ asset('images/icon-call.webp') }}" alt=""
                                            width="40" height="40"></figure>
                                    <h4><strong>Phone</strong></h4>
                                    <p>Our phone lines are available every. <strong>Monday to Friday</strong> from
                                        <span> 8AM to 5PM</span>.
                                        <!-- <a href="#" class="jq-with-tooltip">See our phone line listing.</a> -->
                                    </p>

                                    <div class="channel-tooltips">
                                        <!-- <h3>Phone Line list</h3> -->
                                        <p><a href="tel:+63253248888"><span>Sales:</span> +63 (2) 53248888</a></p>
                                        <p><a href="tel:+63284037368"><span>Leasing:</span> +63 (2) 84037368</a></p>
                                        <p><a href="tel:+63285557777"><span>Employment Inquiry:</span> +63 (2)
                                                85557777</a></p>
                                        <p><a href="tel:+639189183456"><span>Customer Care (SMART):</span> (+63) 918
                                                9183456 </a></p>
                                        <p><a href="tel:+639178115268"><span>Customer Care (GLOBE):</span> (+63) 917
                                                8115268 </a></p>
                                        <p><a href="tel:+6328s5557777"><span>Other Inquiries:</span> +63 (2)
                                                85557777</a></p>
                                    </div>

                                </li>
                                <li class="animated hiding" data-animation="fadeInUp">
                                    <figure><img class="lazyload" src="{{asset('images/lazyload.png')}}"
                                            data-src="{{asset('images/icon-email.webp')}}" alt=""
                                            width="40" height="40"></figure>
                                    <h4><strong>Email</strong></h4>
                                    <p>You may reach us by email for all manner of information. Send an enquiry to the
                                        following designated email list.</p>

                                    <div class="channel-tooltips">
                                        <p><a href="mailto:sales@dmcihomes.com"><span>Sales:</span>
                                                sales@dmcihomes.com</a></p>
                                        <!-- <p><a href="mailto:dmci.internationalwebsite@gmail.com"><span>International Sales Inquiries:</span> dmci.internationalwebsite@gmail.com</a></p> -->
                                        <p><a href="mailto:leasing@dmcihomes.com"><span>Leasing:</span>
                                                leasing@dmcihomes.com</a></p>
                                        <p><a href="mailto:customercare@dmcihomes.com"><span>Customer Care
                                                    Concerns:</span> customercare@dmcihomes.com</a></p>
                                        <p><a href="mailto:careers@dmcihomes.com"><span>Employment Inquiry:</span>
                                                careers@dmcihomes.com</a>
                                        </p>
                                    </div>
                                </li>
                                <li class="animated hiding" data-animation="fadeInUp">
                                    <figure><img class="lazyload" src="{{asset('images/lazyload.png')}}"
                                            data-src="{{asset('images/calendar.png')}}" alt=""
                                            width="40" height="40"></figure>
                                    <h4><strong>Set an Appointment</strong></h4>
                                    <p>Avoid the long queues, book your next visit to our customer helpdesk at <a
                                            href="https://book.dmcihomes.com/"
                                            target="_blanks"><strong>book.dmcihomes.com</strong></a></p>
                                </li>
                                <li class="animated hiding" data-animation="fadeInUp">
                                    <figure><img class="whistles-icon lazyload"
                                            style="width:60px; margin-left: -8px;"
                                            src="{{asset('images/lazyload.png')}}"
                                            data-src="{{asset('images/whistles.png')}}" alt=""
                                            width="40" height="40"></figure>
                                    <h4><strong>Whistleblower</strong></h4>
                                    <p>Have you encountered any malpractice or misconduct by our company
                                        officers/employees? <a href="/contact-us/whistle-blower"><strong>Let us
                                                know</strong></a></p>
                                </li>
                                <!-- <li class="animated hiding" data-animation="fadeInUp" data-delay="500">
                        <figure><img src="/frontend/images/page_template/icon-message.png" alt=""></figure>
                        <p><strong>Chat with Us</strong></p>
                        <p>Our chat support is online every Monday to Friday from 8AM to 5PM.</p>
                    </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>



    <div id="privacy-policy" class="read" style="display: none">
        <div class="content">
            <h2>Terms &amp; Privacy Policies</h2>
            <p>We, DMCI Project Developers, Inc. (the “Company”), together with its subsidiaries, special projects and
                business units, highly value the confidentiality of information you have entrusted us. We highly regard
                your personal, sensitive and privileged information such that it will only be used for its intended
                purpose (or as may be required by existing national and local laws, rules and regulations), kept within
                the agreed period and protected against data privacy breach. Any personal, sensitive and privileged
                information that you provide shall be kept safe under the Data Privacy Act of 2012 (the “Act”),
                applicable laws of the Philippines and the Company’s very own commitment through its Data Privacy
                Policy.</p>
            <p>Personal, sensitive and privileged information that you provide shall be used for transactions related to
                the sale of the Company’s products and all matters arising out of the said transaction.</p>
            <p>All information collected by the Company shall be considered accurate unless the Client/Potential Client
                requests for update. It shall never be the responsibility of the Company to ensure validity/accuracy of
                information shared by the Client/Potential Client.</p>
            <p>Under the Data Privacy Act of 2012, you have the right to access, modify, erase and/or object to any
                processing of personal, sensitive or privileged data that you have provided to us. To do so, kindly
                contact our Data Protection Officer with the following information:</p>
            <ul>
                <li><strong>Name:</strong> Josephine C. Isidro</li>
                <li><strong>Address:</strong> 1321 Apolinario St., Brgy. Bangkal, Makati City PH 1322</li>
                <li><strong>Phone No.:</strong> (02) 555-7777 x7863</li>
                <li><strong>Email Address:</strong> dataprivacyoffice@dmcihomes.com</li>
            </ul>
            <p>The Company will not impose any charge to cover the cost of verifying a request for information and
                locating, retrieving, reviewing and copying any material requested.</p>
            <p>Please note, however, that the Company’s decision to provide such access or consider any request for
                correction, erasure and objection to process of the personal data as it appears in our records is
                subject to any exceptions under applicable laws, rules and regulations and/or the Act.</p>
            <p>We have implemented technological, organizational and physical security measures to protect your
                information from loss, misuse, modification, unauthorized or accidental access or disclosure, alteration
                or destruction. We put in effect safeguards such as:</p>
            <p>Keeping and protecting your information using a secured server behind a firewall, deploying encryption on
                computing devices and physical security controls</p>
            <p>Restricting access to your information only to qualified and authorized personnel who hold your
                information with strict confidentiality including third-party personnel/company who may be required to
                process your information.</p>
            <p>The data will be kept within 10 years from date of last engagement (e.g. release of transferred title,
                release of documents related to back-out) or as may be required by existing laws, rules and regulations,
                unless you request your data to be deleted in our systems, databases and hard copies earlier than this
                date, subject to limitation of applicable laws and/or the Act. Once deleted, your information will no
                longer be searchable or included in anonymous searches and will be completely removed from all the
                storage location.</p>
            <p>By agreeing to this policy, you explicitly and unambiguously consent to the collection, processing and
                storage of your personal, sensitive and privileged data by DMCI Project Developers, Inc. for the
                purpose(s) described in this Data Privacy Notice.</p>
        </div>
    </div>

    <footer class="sec-pad sec-default" id="footer">
        <!-- <div class="slant-border slant-bot slant-blue slant-right"></div> -->
        <div class="bg-blue">
            <div class="container clearfix">

                <div class="footer-info fl">
                    <figure class="logo">
                        <a href="#"><img class="lazyload" src="{{ asset('images/lazyload.png')}}"
                                data-src="{{ asset('images/logo-dmci.png')}} " alt="DMCI Homes Logo"
                                width="170" height="37"></a>
                    </figure>
                    <p>With skill, passion and dedication, we continue our quest in attaining engineering excellence in
                        quality homebuilding and community development, that shall endure generations.</p>
                </div>
                <div class="footer-detail fl">
                    <div class="row">
                        <div class="col-sm-5 footer-address">
                            <h4>Head Office</h4>

                            <p><a data-fancybox="" data-type="iframe"
                                    data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1930.9966604879698!2d121.0134147!3d14.5423746!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63ca380cdb6728d1!2sDMCI%20Homes%20Corporate%20Center!5e0!3m2!1sen!2sph!4v1570602301415!5m2!1sen!2sph"
                                    href="javascript:;" class="footer-map-link">DMCI Homes Corporate Center, 1321
                                    Apolinario Street, Bangkal, Makati City, Metro Manila, PH 1233</a></p>
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
                                <li><a href="https://www.facebook.com/dmcihomesofficial"><span
                                            class="icon-home-2 icon-facebook"></span> <span
                                            class="fs-text">Facebook<span></span></span></a></li>
                                <li><a href="https://twitter.com/dmcihomes"><span
                                            class="icon-home-2 icon-twitter"></span> <span class="fs-text">
                                            Twitter</span></a></li>
                                <li><a href="https://www.instagram.com/dmcihomesofficial"><span
                                            class="icon-home-2 icon-instagram"></span> <span
                                            class="fs-text">Instagram</span></a></li>
                                <li><a href="https://www.youtube.com/user/dmcihomesofficial"><span
                                            class="icon-home-2 icon-youtube"></span> <span class="fs-text">Youtube
                                        </span></a></li>

                                <li class="qq-wrap">
                                    <a class="hide-mobile" data-fancybox-image-qr="" href="#qq-modal"
                                        data-caption="Scan the QR code">
                                        <figure><img class="lazyload"
                                                src="{{ asset('images/lazyload.png')}}"
                                                data-src="{{ asset('images/qr.png')}}" width="18"
                                                height="18" alt=""></figure>
                                        <span class="fs-text">QQ</span>
                                    </a>


                                    <a data-fancybox-image-qr="" data-src="#qq-brand" class="hide-desktop">
                                        <img class="lazyload" src="{{ asset('images/lazyload.png')}}"
                                            data-src="{{ asset('images/qq')}}" width="24" height="28"
                                            alt="">
                                    </a>
                                </li>
                                <li class="wechat-wrap">
                                    <a class="hide-mobile" data-fancybox-image-qr="" href="#wechat-modal"
                                        data-caption="Scan the QR code to add me on WeChat">
                                        <figure><img class="lazyload"
                                                src="{{ asset('images/lazyload.png')}}"
                                                data-src="{{ asset('images/we.png')}}" width="18"
                                                height="18" alt=""></figure>
                                        <span class="fs-text">WeChat</span>
                                    </a>

                                    <a data-fancybox-image-qr="" data-src="#wechat-brand" class="hide-desktop">
                                        <img class="lazyload" src="{{ asset('images/lazyload.png')}}"
                                            data-src="{{ asset('images/wechat.png')}}" width="34"
                                            height="40" alt="">
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
                    <figure><img class="lazyload" src="{{ asset('images/lazyload.png')}}"
                            data-src="{{ asset('images/qr.png')}}" alt=""></figure>
                    <p><strong>QQ ID : </strong> <a
                            href="http://qm.qq.com/cgi-bin/qm/qr?k=9JbHHMYoo-WJw0_sWtnFQiaB8YZeXsyh">2456975737</a>
                    </p>
                </div>
            </div>
        </div>

        <div id="wechat-modal" class="read no-padding" style="display: none;">
            <div class="content">
                <div class="sec-head">
                    <figure><img class="lazyload" src="{{ asset('images/lazyload.png')}}"
                            data-src="{{ asset('images/we.png')}}" alt=""></figure>
                    <p><strong>WeChat ID :</strong> <span>DMCI Homes Official</span></p>
                </div>
            </div>
        </div>

        <div id="qq-brand" class="read" style="display: none;">
            <div class="content">
                <div class="sec-head">

                    <p><strong>QQ ID :</strong> <a
                            href="http://qm.qq.com/cgi-bin/qm/qr?k=9JbHHMYoo-WJw0_sWtnFQiaB8YZeXsyh"><span>2456975737</span></a>
                    </p>
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
                <div class="loader-pin"><img src="/frontend/images/loading-idle.gif" width="70"
                        height="70"></div>
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
    <script type="text/javascript" id="">
        -1 == document.location.href.search("appspot.com") && -1 == document.referrer.search("appspot.com") && ! function(b,
            e, f, g, a, c, d) {
            b.fbq || (a = b.fbq = function() {
                    a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
                }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e
                .createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode
                .insertBefore(c, d))
        }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "1683067715278685");
        fbq("track", "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1683067715278685&amp;ev=PageView&amp;noscript=1"></noscript>

    <script type="text/javascript" id="">
        function getCookie(a) {
            if (a = document.cookie.match(new RegExp("(^| )" + a + "\x3d([^;]+)"))) return a[2]
        }
        var _gaCookie = getCookie("_ga");
        _gaCookie = _gaCookie.split(".");
        var _middle = _gaCookie.length - 2,
            _last = _gaCookie.length - 1,
            _gaClientId = _gaCookie[_middle] + "." + _gaCookie[_last];
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            GAClientID: _gaClientId
        });
    </script>
    <div class="append-style">
        <!-- <link async rel="stylesheet" href="/frontend/css/tablet.css" media="(max-width: 991px)"> -->
    </div>

    <link rel="preload" href="{{ asset('css/newsPage.css')}}" as="style">
    <link rel="stylesheet" href="{{ asset('css/newsPage.css')}}" media="all">
    <style>
        .featured-article .article-info {
            width: 100%;
        }
    </style>


    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/bundle.js')}}"></script>

    <script defer="">
        var GLOBAL_frontend_get__properties_json = "/get/properties/json";
        var GLOBAL_app_request_schemeAndHttpHost = "https://www.dmcihomes.com";
        var GLOBAL_countries_json = {!! json_encode(asset('js/countries.json')) !!};

        var GLOBAL_careers_position_json = "/json/positions.json";
        var GLOBAL_frontend_contact_us_captcha = "/contact-us/captcha/generate";
        var GLOBAL_APP_REQUEST_GET = "frontend_whats_new";

        "use strict";
        var map, locationMap, positionMarker, locationMarker, geocoder, cookieSetupLoc, newCookieValue,
            activeProperties = [],
            allProperties = [],
            propertyLocation = [],
            selectedLocation = [],
            currencies = {},
            currentLocation = {
                lat: "",
                lng: ""
            },
            prefCities = [],
            optionCities = [],
            locationEnabled = !1,
            popUpLocationValue = {
                name: "",
                lat: "",
                lng: "",
                complete_address: ""
            },
            autoCompleteLocationValue = {
                name: "",
                lat: "",
                lng: "",
                complete_address: ""
            };

        function getActivePropertiesJson() {
            $.ajax({
                url: GLOBAL_frontend_get__properties_json,
                type: "GET",
                processData: !1,
                success: function(a) {
                    Object.keys(a).forEach(function(b) {
                        let c = a[b];
                        allProperties.push(c)
                    }), activeProperties = allProperties.reduce(function(a, c) {
                        var b = c.city;
                        return a[b] = a[b] || [], a[b].push(c), a
                    }, {});
                    var c = [];
                    allProperties.forEach(function(a) {
                        c[a.city] = a.city_slug
                    });
                    var b = $("#sidebar-property-modal-location-list");
                    b.append(
                        '<li><a href="#" class="btn btn-round btn-ghost sidebar-location-all active" data-location="all">View All</a></li>'
                        ), Object.keys(activeProperties).forEach(function(a) {
                        propertyLocation.push(a)
                    }), propertyLocation.sort(), propertyLocation.forEach(function(a) {
                        var d = c[a];
                        b.append('<li><a href="' + GLOBAL_app_request_schemeAndHttpHost + "/" + d +
                            '" class="btn btn-round btn-ghost sidebar-location-filter" data-location="' +
                            a + '">' + a + "</a></li>")
                    }), $(".sidebar-location-all").click(function() {
                        selectedLocation = null, loadAllProperties(), $(".sidebar-location-filter")
                            .removeClass("active"), $(this).addClass("active")
                    }), $(".sidebar-location-filter").click(function(a) {
                        a.preventDefault(), populateSidebarProperties(selectedLocation = $(this).data(
                            "location")), $(".sidebar-location-all").removeClass("active"), $(
                            ".sidebar-location-filter").removeClass("active"), $(this).addClass(
                            "active")
                    })
                }
            })
        }

        function populateSidebarProperties(a) {
            var b = activeProperties[a],
                c = $("#sidebar-property-list");
            c.empty(), $("#sidebar-property-header").text('Properties around "' + a + '".'), b.sort(), b.forEach(function(
            a) {
                var b = "coming-soon",
                    d = "cs",
                    e = Number(a.price_range[0].min_price),
                    f = Number(a.price_range[0].max_price);
                1 === a.status ? (b = "new", d = "new") : 2 === a.status ? (b = "RFO", d = "rfo") : 3 === a
                    .status && (b = "under-construction", d = "uc");
                var g = '<span data-value="' + e + '" class="currency-convert">' + e +
                    '</span> - <span data-value="' + f + '" class="currency-convert">' + f + "</span>";
                0 == a.is_unit_activated && (g = "<span>NOT YET AVAILABLE</span>");
                var h =
                    '<li class="box-card">                <div class="property-item">                    <a href="/' +
                    a.slug +
                    '">                        <figure class="property-img">                            <img class="lazyload" src="frontend/images/page_template/lazyload.png" data-src="' +
                    a.image +
                    '" alt="">                                <span class="property-status circle-white">                                    <span class="' +
                    d + " icon-" + b +
                    '"></span>                                </span>                        </figure>                        <div class="property-detail">                            <h3>' +
                    a.name + '</h3>                            <p class="price">' + g +
                    "</p>                        </div>                    </a>                </div>            </li>";
                c.append(h), convertCurrencies()
            })
        }

        function loadAllProperties() {
            var a = $("#sidebar-property-list");
            a.empty(), $("#sidebar-property-header").text("Viewing all properties."), allProperties.forEach(function(b) {
                var c = "coming-soon",
                    d = "cs",
                    e = Number(b.price_range[0].min_price),
                    f = Number(b.price_range[0].max_price);
                1 === b.status ? (c = "new", d = "new") : 2 === b.status ? (c = "RFO", d = "rfo") : 3 === b
                    .status && (c = "under-construction", d = "uc");
                var g = '<span data-value="' + e + '" class="currency-convert">' + e +
                    '</span> - <span data-value="' + f + '" class="currency-convert">' + f + "</span>";
                0 == b.is_unit_activated && (g = "<span>NOT YET AVAILABLE</span>");
                var h =
                    '<li class="box-card">                <div class="property-item">                    <a href="/' +
                    b.slug +
                    '">                        <figure class="property-img">                            <img class="lazyload" src="frontend/images/page_template/lazyload.png" data-src="' +
                    b.image +
                    '" alt="">                                <span class="property-status circle-white">                                    <span class="' +
                    d + " icon-" + c +
                    '"></span>                                </span>                        </figure>                        <div class="property-detail">                            <h3>' +
                    b.name + '</h3>                            <p class="price">' + g +
                    "</p>                        </div>                    </a>                </div>            </li>";
                a.append(h)
            })
        }

        function initializeDefaultButtons() {
            $("#property-sidebar-list-button").click(function(a) {
                a.preventDefault(), loadAllProperties(), convertCurrencies()
            }), $("#save-profile").click(function(a) {
                a.preventDefault();
                var b = $("#pop-up-looking-select").val(),
                    c = JSON.stringify(popUpLocationValue),
                    d = $("#pop-up-currency-select").val(),
                    e = $("#pop-up-language-select").val(),
                    f = $("#pop-up-measure-select").val();
                setCookie("profile-lookingFor", b, 31), setCookie("profile-locatedNear", c, 31), setCookie(
                    "profile-currency", d, 31), setCookie("profile-language", e, 31), setCookie(
                    "profile-measure", f, 31), setCookie("profile-set", !0, 31), $.fancybox.close(
                    "#cookie-preference"), loadCookies(), $(".hamburger-menu").hasClass("active") && $(
                    ".hamburger-menu").click(), convertMeasures(), convertDistances(), convertCurrencies()
            }), $("#done-location-search").click(function(a) {
                a.preventDefault(), setCookie("profile-locatedNear", JSON.stringify(autoCompleteLocationValue), 31),
                    $.fancybox.close("#map-pin"), loadCookies()
            }), $("#clear-location-search").click(function(a) {
                a.preventDefault(), autoCompleteLocationValue = void 0, $("#search-location-autocomplete").val("")
                    .focus(), $("#header-search-location-field").val(""), $("#advance-search-location").val("")
            }), $("#skip-profile").click(function(a) {
                a.preventDefault(), setCookie("profile-set", !0, 31), setCookie("profile-measure", $(
                    "#pop-up-measure-select").val(), 31), $.fancybox.close("#cookie-preference")
            }), $(".pop-up-trigger").click(function(a) {
                $.fancybox.open({
                    src: "#cookie-preference",
                    clickContent: !1,
                    beforeShow: function() {
                        $(".fancybox-bg").css({
                            background: "rgba(255, 255, 255, 0.6)"
                        })
                    }
                })
            }), $("#advance-search-button").click(function(g) {
                g.preventDefault();
                var h = $(".advance-status-cb:checked"),
                    i = $(".advance-unit-type-cb:checked"),
                    j = $(".advance-dev-type-cb:checked"),
                    a = [];
                h.each(function(c, b) {
                    a.push(b.value)
                });
                var b = [];
                i.each(function(c, a) {
                    b.push(a.value)
                });
                var c = [];
                j.each(function(b, a) {
                    c.push(a.value)
                });
                var k = currentLocation.lat,
                    l = currentLocation.lng,
                    d = $("#min-price-select").val(),
                    e = $("#max-price-select").val(),
                    f = $("#advance-search-location").val();
                "" === f ? window.location = "/property-finder?search=advance&min=" + d + "&max=" + e + "&type=" + b
                    .toString() + "&dev=" + c.toString() + "&status=" + a.toString() + "&location=any" : window
                    .location = "/property-finder?search=advance&lat=" + k + "&lng=" + l + "&min=" + d + "&max=" +
                    e + "&type=" + b.toString() + "&dev=" + c.toString() + "&status=" + a.toString() + "&address=" +
                    f
            }), $(".advance-dev-type-cb").change(function() {
                4 == $(this).val() && $(".advance-dev-type-cb[value=4]").is(":checked") ? $(".sdv").prop("disabled",
                    !1) : $(".advance-dev-type-cb[value=4]").is(":checked") || $(".sdv").prop("disabled", !0)
            });
            var a = !1,
                b = !1,
                c = !1;
            $(".ads-types input[type=checkbox]").change(function() {
                var d = "";
                $(".ads-types input[type=checkbox]").each(function() {
                    d += this.checked ? "1," : "0,"
                }), (d = d.substr(0, d.length - 1)).indexOf("1") > -1 ? (b = !0, a && b && c && $(
                    "#advance-search-button").removeClass("disabled")) : (b = !1, $("#advance-search-button")
                    .addClass("disabled"))
            }), $(".ads-unit-type input[type=checkbox]").change(function() {
                var d = "";
                $(".ads-unit-type input[type=checkbox]").each(function() {
                    d += this.checked ? "1," : "0,"
                }), (d = d.substr(0, d.length - 1)).indexOf("1") > -1 ? (a = !0, b && c && $(
                    "#advance-search-button").removeClass("disabled")) : (a = !1, $("#advance-search-button")
                    .addClass("disabled"))
            }), $(".fa-status-list input[type=checkbox]").change(function() {
                var d = "";
                $(".fa-status-list input[type=checkbox]").each(function() {
                    d += this.checked ? "1," : "0,"
                }), (d = d.substr(0, d.length - 1)).indexOf("1") > -1 ? (c = !0, a && b && c && $(
                    "#advance-search-button").removeClass("disabled")) : (c = !1, $("#advance-search-button")
                    .addClass("disabled"))
            }), $(".slider-advisory").owlCarousel({
                loop: !0,
                item: 1,
                margin: 10,
                nav: !1,
                dots: !1,
                autoplay: !0,
                autoplayTimeout: 7e3,
                autoplayHoverPause: !0,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1e3: {
                        items: 1
                    }
                }
            })
        }

        function loadCookies() {
            getCookie("profile-lookingFor");
            var a, b = getCookie("profile-locatedNear"),
                c = getCookie("profile-currency"),
                e = getCookie("profile-language"),
                d = getCookie("profile-measure");
            "" === d && (setCookie("profile-measure", $("#pop-up-measure-select").val(), 31), d = getCookie(
                    "profile-measure")), (void 0 === c || "undefined" === c || "" === c) && (setCookie("profile-currency",
                    "PHP", 31), c = getCookie("profile-currency")), "" !== b && void 0 !== b && "undefined" !== b &&
                "null" !== b && (popUpLocationValue = a = JSON.parse(b), $("#pop-up-location-select").val(a.name), $(
                    "#search-location-autocomplete").val(a.name), autoCompleteLocationValue = {
                    name: a.name,
                    complete_address: a.complete_address,
                    lat: a.lat,
                    lng: a.lng
                }, geocodeDefault()), $("#pop-up-language-select").val(e), $("#pop-up-measure-select").val(d), $(
                    "#pop-up-currency-select").val(c)
        }

        function convertMeasures() {
            $(".area-convert").each(function() {
                var a = +$(this).data("value"),
                    b = " sqm.";
                "Imperial" === getCookie("profile-measure") && (a *= 10.764, b = " sft."), this.innerHTML = a
                    .toLocaleString(void 0, {
                        maximumFractionDigits: 2
                    }) + b
            })
        }

        function convertDistances() {
            $(".distance-convert").each(function() {
                var a = +$(this).data("value");
                "Imperial" === getCookie("profile-measure") && (a *= .62137), this.innerHTML = a.toLocaleString(
                    void 0, {
                        maximumFractionDigits: 2
                    })
            })
        }

        function convertCurrencies() {
            var a = getCookie("profile-currency");
            void 0 === localStorage.getItem("conversion") && getCurrencies();
            var b = JSON.parse(localStorage.getItem("conversion"))[a];
            $(".currency-convert").each(function() {
                var c = +$(this).data("value");
                c *= b, this.innerHTML = a + " " + c.toLocaleString(void 0, {
                    maximumFractionDigits: 2
                })
            }), $(".currency-convert-no-symbol").each(function() {
                var a = +$(this).data("value");
                a *= b, this.innerHTML = a.toLocaleString(void 0, {
                    maximumFractionDigits: 2
                })
            })
        }

        function getCurrencyMultiplier() {
            var a = getCookie("profile-currency");
            return void 0 === localStorage.getItem("conversion") && getCurrencies(), JSON.parse(localStorage.getItem(
                "conversion"))[a]
        }

        function getCurrencyCode() {
            return getCookie("profile-currency")
        }

        function setCookie(b, c, d) {
            var a = new Date;
            a.setTime(a.getTime() + 864e5 * d);
            var e = "expires=" + a.toUTCString();
            document.cookie = b + "=" + c + ";" + e + ";path=/"
        }

        function getCookie(e) {
            for (var c = e + "=", d = decodeURIComponent(document.cookie).split(";"), b = 0; b < d.length; b++) {
                for (var a = d[b];
                    " " === a.charAt(0);) a = a.substring(1);
                if (0 === a.indexOf(c)) return a.substring(c.length, a.length)
            }
            return ""
        }

        function getParameterByName(a, b) {
            b || (b = window.location.href), a = a.replace(/[\[\]]/g, "\\$&");
            var c = new RegExp("[?&]" + a + "(=([^&#]*)|&|#|$)").exec(b);
            return c ? c[2] ? decodeURIComponent(c[2].replace(/\+/g, " ")) : "" : null
        }

        function showMap(e) {
            geocoder = new google.maps.Geocoder;
            var a = 14.5427941,
                b = 121.0130898;
            locationMap = new google.maps.Map(document.getElementById("home-pin-map"), {
                center: new google.maps.LatLng(a, b),
                zoom: 14,
                streetViewControl: !1,
                styles: [{
                    featureType: "administrative",
                    elementType: "geometry",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "poi",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "road",
                    elementType: "labels.icon",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "transit",
                    stylers: [{
                        visibility: "off"
                    }]
                }]
            });
            var f = {
                url: "/frontend/images/loading-idle.gif",
                scaledSize: new google.maps.Size(70, 70),
                origin: null,
                anchor: null,
                size: null
            };
            positionMarker = new google.maps.Marker({
                position: new google.maps.LatLng(a, b),
                map: locationMap,
                animation: google.maps.Animation.DROP,
                draggable: !0,
                icon: f
            }), !1 === geocodeDefault() && null !== e && (locationEnabled = !0, a = e.coords.latitude, b = e.coords
                .longitude, currentLocation.lat = a, currentLocation.lng = b, placeMarkerAndPanTo(new google.maps
                    .LatLng(a, b)), geocode(new google.maps.LatLng(a, b))), locationMap.addListener("click", function(
            a) {
                placeMarkerAndPanTo(a.latLng, locationMap), geocode(a.latLng)
            }), positionMarker.setVisible(!0), google.maps.event.addListener(positionMarker, "dragend", function(a) {
                placeMarkerAndPanTo(a.latLng, locationMap), geocode(a.latLng)
            });
            var g = document.getElementById("pop-up-location-select"),
                c = new google.maps.places.Autocomplete(g);
            c.bindTo("bounds", locationMap), c.setTypes([]), c.setFields(["address_components", "geometry", "icon",
                "name"]), c.addListener("place_changed", function() {
                    var a = c.getPlace(),
                        b = "";
                    a.address_components.forEach(function(a, c) {
                        b = 0 === c ? a.long_name : b + "," + a.long_name
                    }), popUpLocationValue = {
                        name: a.name,
                        complete_address: b,
                        lat: a.geometry.location.lat(),
                        lng: a.geometry.location.lng()
                    }
                });
            var h = document.getElementById("search-location-autocomplete"),
                d = new google.maps.places.Autocomplete(h);
            d.bindTo("bounds", locationMap), d.setTypes([]), d.setFields(["address_components", "geometry", "icon",
                "name"]), d.addListener("place_changed", function() {
                    var a = d.getPlace(),
                        b = "";
                    a.address_components.forEach(function(a, c) {
                        b = 0 === c ? a.long_name : b + "," + a.long_name
                    }), autoCompleteLocationValue = {
                        name: a.name,
                        complete_address: b,
                        lat: a.geometry.location.lat(),
                        lng: a.geometry.location.lng()
                    }, a.geometry.location ? placeMarkerAndPanTo(a.geometry.location) : locationMap.setCenter(a
                        .geometry.location)
                })
        }

        function placeMarkerAndPanTo(a) {
            void 0 !== positionMarker && positionMarker.setPosition(a), void 0 !== locationMap && (locationMap.panTo(a),
                locationMap.setZoom(17))
        }

        function geocodeDefault() {
            var a, b = getCookie("profile-locatedNear");
            try {
                a = JSON.parse(b), currentLocation.lat = a.lat, currentLocation.lng = a.lng, "function" ==
                    typeof getRecommended && getRecommended(a.lat, a.lng), placeMarkerAndPanTo(new google.maps.LatLng(a.lat,
                        a.lng)), $("#header-search-location-field").val(a.name), $("#advance-search-location").val(a.name)
            } catch (c) {
                return "function" == typeof getRecommended && (getRecommended("", ""), placeMarkerAndPanTo(new google.maps
                    .LatLng(currentLocation.lat, currentLocation.lng))), !1
            }
            return !0
        }

        function geocode(a) {
            geocoder.geocode({
                location: a
            }, function(b, c) {
                "OK" === c && (b[0] && ($("#header-search-location-field").val(b[0].formatted_address), $(
                        "#advance-search-location").val(b[0].formatted_address), $(
                        "#search-location-autocomplete").val(b[0].formatted_address)),
                    autoCompleteLocationValue = {
                        name: b[0].formatted_address,
                        complete_address: b[0].formatted_address,
                        lat: a.lat(),
                        lng: a.lng()
                    }, "getRecommended" == typeof obj && getRecommended(a.lat(), a.lng()))
            })
        }

        function IsEmail(a) {
            return /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(a)
        }

        function populateCoutries() {
            $.getJSON(GLOBAL_countries_json, function(a) {
                a.countries.forEach(function(b) {
                    var a = '<option value="' + b.value + '" ';
                    "Philippines" === b.value && (a += "selected "), a = a + ">" + b.name + "</option>", $(
                        "#country").append(a)
                })
            })
        }

        function populatePositions() {
            $.getJSON(GLOBAL_careers_position_json, function(a) {
                a.positions.forEach(function(b) {
                    var a = '<option value="' + b.value + '" ';
                    a = a + ">" + b.name + "</option>", $("#position-interested").append(a)
                })
            }).then(function() {
                $("#position-interested").multiselect({
                    enableFiltering: !0,
                    enableCaseInsensitiveFiltering: !0
                })
            })
        }

        function populateContactProperties() {
            var a = $("#propertyInterested"),
                b = $("#propertyOwned"),
                c = {
                    enableFiltering: !0,
                    enableCaseInsensitiveFiltering: !0
                };
            a.empty(), b.empty(), allProperties.forEach(function(d, f) {
                var e = '<option value="' + d.id + '" >' + d.name + " | " + d.city + "</option>";
                a.append(e), b.append(e), f === allProperties.length - 1 && (firedContactSelect = !0, $(
                    "#propertyInterested").multiselect(c), $("#propertyOwned").multiselect(c), $(
                    ".contact-form-wrap").removeClass("loading-form"))
            })
        }

        function change_captcha() {
            document.getElementById("captcha").src = GLOBAL_frontend_contact_us_captcha
        }
        $(document).ready(function() {
            $(".copy-url").click(function(b) {
                    var a;
                    b.preventDefault(), document.querySelector(".js-copytextarea").select();
                    try {
                        document.execCommand("copy")
                    } catch (c) {}
                    $(".notes-copied").addClass("active"), clearTimeout(a), a = setTimeout(function() {
                        $(".notes-copied").removeClass("active")
                    }, 2500)
                }), $(document).on("click", ".pi-share", function(b) {
                    b.preventDefault();
                    var c = $(this).data("url"),
                        a = GLOBAL_app_request_schemeAndHttpHost + "/" + c;
                    $("#share-url-fb").attr("href", "https://www.facebook.com/sharer/sharer.php?u=" + a), $(
                        "#share-url-twitter").attr("href", "https://twitter.com/intent/tweet?url=" + a), $(
                        "#input-share-url").val(a), $(".js-copytextarea").val(a), $("#a-share-url").attr(
                        "data-url", a), $.fancybox.open({
                        src: "#share-info",
                        autoSize: !1,
                        toolbar: !0,
                        gutter: 20,
                        touch: !1,
                        fitToView: !1,
                        clickContent: !1
                    })
                }), initializeDefaultButtons(), loadCookies(), getCookie("DMCI_advisory"), "-1" == document.cookie
                .indexOf("advisoryCookie=here") && ($(".advisory-wrap").addClass("active"), 1025 > $(window)
                .width() && $("body").addClass("advisory"), $(".advisory-wrap .jq-close").click(function(b) {
                        b.preventDefault();
                        var a = new Date;
                        a = new Date(a.getTime() + 864e5), document.cookie = "advisoryCookie=here; expires=" +
                            a, $("body.advisory").removeClass("advisory"), $(".advisory-wrap").removeClass(
                                "active"), $(".advisory-wrap").addClass("hide")
                    }), $(".advisory-wrap btn.btn-round").click(function() {
                        var a = new Date;
                        return a = new Date(a.getTime() + 864e5), document.cookie =
                            "advisoryCookie=here; expires=" + a, $("body.advisory").removeClass("advisory"), $(
                                ".advisory-wrap").removeClass("active"), $(".advisory-wrap").addClass("hide"), !
                            0
                    }))
        }), $(function() {
            getActivePropertiesJson()
        });
        var isBusyCaptcha = !1;
        $("img#refresh").click(function() {
            !1 == isBusyCaptcha && (isBusyCaptcha = !0, $("img#refresh").addClass("active"), setTimeout(function() {
                $("img#refresh").removeClass("active"), isBusyCaptcha = !1
            }, 300), change_captcha())
        }), $("#captchaerror-close").click(function(a) {
            a.preventDefault(), $.fancybox.close("#captcha-error")
        });
        var firedContactSelect = !1;
        "frontend_single_property" !== GLOBAL_APP_REQUEST_GET ? ($(document).ready(function() {}), $(window).on("scroll",
            function() {
                if ($(".contact-form-wrap").length > 0) {
                    var a = window.innerHeight ? window.innerHeight : $(window).height(),
                        b = $(window).scrollTop(),
                        c = $(".contact-form-wrap").offset(),
                        d = c.top - a;
                    b >= d && !1 == firedContactSelect && populatePositions()
                }
            })) : $(function() {
            var a = {
                enableFiltering: !0,
                enableCaseInsensitiveFiltering: !0
            };
            $("#position-interested").multiselect(a), $("#propertyInterested").multiselect(a), $("#propertyOwned")
                .multiselect(a)
        }), $(function() {
            getCookie("profile-set") || $.fancybox.open({
                src: "#cookie-preference",
                modal: !0,
                beforeShow: function() {
                    $(".fancybox-bg").css({
                        background: "rgba(255, 255, 255, 0.6)"
                    })
                }
            })
        })
    </script>


    <script async="">
        'use strict';

        var newsPage = 1;
        var promoPage = 1;
        var eventPage = 1;
        var testimonialPage = 1;
        var siteProgressPage = 1;

        var siteProgress = [];
        var siteProgressPropertyIds = [];

        var siteProgressOption = {
            loop: false,
            dots: false,
            items: 3,
            nav: true,
            rtl: true,
            margin: 5,
            smartSpeed: 700,
            navText: ["<span class='icon-right-arrow'></span>", "<span class='icon-left-arrow'></span>"],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                767: {
                    items: 5
                },
                1400: {
                    items: 5
                },
                1600: {
                    items: 7
                }
            }
        };

        $('#top-nav').addClass('gray');

        $(document).ready(function() {
            //initGrid();
            initButtons();
            siteProgressInit();
            getSiteProgress();

        });

        function initButtons() {
            $('#show-more-news').click(function() {
                newsPage++;
                getNews();
            });

            $('#show-more-events').click(function() {
                console.log('triggered')
                eventPage++;
                getEvents();
            });

            $('#show-more-promo').click(function() {
                promoPage++;
                getPromos();
            });

            $('#show-more-testimonials').click(function() {
                testimonialPage++;
                getTestimonials();
            });
        }

        // frontend_home_site_progress_get
        function getSiteProgress() {

            $.ajax({
                url: "/site_progress/get",
                type: "GET",
                processData: false,
                success: function(data) {
                    console.log(data);

                    populateSiteProgress(data);

                    var opts_list = $('#site-progress-property-select').find('option');
                    opts_list.sort(function(a, b) {
                        return $(a).text() > $(b).text() ? 1 : -1;
                    });
                    $('#site-progress-property-select').html('').append(
                        '<option value="all">View all properties</option>');
                    $('#site-progress-property-select').append(opts_list);
                    $('#site-progress-property-select').val('all');

                }
            });
        }

        function populateSiteProgress(data) {

            siteProgressPage = 0;

            let wrapper = $('#site-progress-list');

            wrapper.empty();

            siteProgress = data;

            Object.keys(data).forEach(function(key) {
                let sp = data[key];

                if (!siteProgressPropertyIds.includes(sp.proj_id)) {
                    siteProgressPropertyIds.push(sp.proj_id);
                    $('#site-progress-property-select').append('<option value=' + sp.proj_id + '>' + sp.name +
                        '</option>');
                }
            });


            wrapper.append(loadSiteProgressData(siteProgressPage));

            wrapper.on('translated.owl.carousel', function(event) {

                console.log('translated');

                var element = event.target;
                var items = event.item.count;
                var item = event.item.index;

                var testIndex = event.item.count - 5;
                console.log(testIndex);
                console.log(event.item.index);

                if (event.item.index === testIndex) {
                    var siteProgressItem = loadSiteProgressData(siteProgressPage);
                    console.log(siteProgressItem);

                    console.log('test');
                    wrapper.trigger('add.owl.carousel', [siteProgressItem]).trigger('destroy.owl.carousel');
                    wrapper.owlCarousel(siteProgressOption);
                    wrapper.trigger('to.owl.carousel', [testIndex, 0]);
                }
            });


            $('#site-progress-property-select').change(function() {
                var filter = $('#site-progress-property-select').val();
                if (filter === "all") {
                    populateSiteProgress(siteProgress);
                } else {
                    filterSiteProgress(siteProgress, filter);
                }
            });

            siteProgressInit();

        }

        function loadSiteProgressData(index) {

            let append = '';
            for (var x = index; x < index + 12; x++) {
                var sp = siteProgress[x];

                append = append + '<li data-id="' + sp.proj_id + '">' +
                    '    <a href="/' + sp.slug + '#site-progress" class="site-progress-item" data-progress="80">' +
                    '        <div class="box-card">' +
                    '            <figure class="site-progress-bg">' +
                    '                <img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="' +
                    sp['image'] + '" alt="" width="210" height="310">';


                if (parseFloat(sp['percent']) > 0) {
                    append = append + '                <span class="sp-percent-value" style="height:' + sp['percent'] +
                        '%;"></span>' +
                        '                <span class="sp-percentage">' + sp['percent'] + '%</span>';
                }


                append = append + '            </figure>' +
                    '            <label for=""> ' + sp['name'] + ' <span>' + sp['city'] + '</span></label>' +
                    '            <p class="update-date">' + sp['date'] + '</p>' +
                    '        </div>' +
                    '    </a>' +
                    '</li>';


            }

            siteProgressPage = siteProgressPage + 12;
            return append;

        }

        function filterSiteProgress(data, id) {


            let wrapper = $('#site-progress-list');

            wrapper.empty();

            wrapper.off();

            Object.keys(data).forEach(function(key) {


                let sp = data[key];


                let append = '<li data-id="' + sp.proj_id + '">' +
                    '    <a href="/' + sp.slug + '#site-progress" class="site-progress-item" data-progress="80">' +
                    '        <div class="box-card">' +
                    '            <figure class="site-progress-bg">' +
                    '                <img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="' +
                    sp['image'] + '" alt="" width="210" height="310">';


                if (parseFloat(sp['percent']) > 0) {
                    append = append + '                <span class="sp-percent-value" style="height:' + sp[
                            'percent'] + '%;"></span>' +
                        '                <span class="sp-percentage">' + sp['percent'] + '%</span>';
                }


                append = append + '            </figure>' +
                    '            <label for=""> ' + sp['name'] + ' <span>' + sp['city'] + '</span></label>' +
                    '            <p class="update-date">' + sp['date'] + '</p>' +
                    '        </div>' +
                    '    </a>' +
                    '</li>';


                if (sp.proj_id == id) {
                    wrapper.append(append);
                }

            });

            siteProgressInit();

        }


        // frontend_whats_new_latest_json
        function getNews() {
            $.ajax({
                url: "/whats-new/json/news?page=" + newsPage,
                type: "GET",
                processData: false,
                success: function(data) {
                    populateNews(data);
                }
            });
        }

        function populateNews(data) {
            let wrapper = $('#news-wrapper');

            Object.keys(data).forEach(function(key, index) {

                let n = data[key];

                var addtionalClass = '';
                var featuredClass = 'article-min';

                if (index === 0) {
                    if (newsPage === 1) {
                        if (n.img !== undefined && n.img !== '') {
                            addtionalClass = 'grid-item--width2';
                            featuredClass = 'featured-article';
                        }
                    }
                }

                let append = '<div class="grid-item ' + addtionalClass + '" data-animation="fadeInUp">';
                if (n.img !== undefined && n.img !== '') {
                    append = append +
                        '                <article class="article-item ' + featuredClass + '">' +
                        '                    <figure class="article-img ">' +
                        '                        <a href="/whats-new/news/' + n.slug + '" class="">' +
                        '                            <img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="/uploads/news/' +
                        n.img + '" alt="' + n.img + '" width="235" height="150">' +
                        '                        </a>' +
                        '                    </figure>';

                } else {
                    append = append +
                        '                <article class="article-item ' + featuredClass + ' no-image" >';
                }

                append = append + '                    <div class="article-info">' +

                    '                        <p class="tag">';

                if (n.property !== undefined) {
                    append = append + '<a href="/' + n.property_url + '">' + n.property + '</a>';
                }

                if (n.csr === true) {
                    append = append + '<a href="#">Kaakbay</a>';
                }


                append = append + '</p>' +
                    '                        <h2 class="article-title"><a href="/whats-new/news/' + n.slug + '">' +
                    n.title + '</a></h2>' +
                    '                        <p class="date-published">' + n.date + '</p>' +
                    ' <div class="clr"></div>';

                if (n.copy) {
                    append = append + '<p>' + n.copy + '...</p>';
                }

                append = append +
                    '                    </div>' +
                    '                </article>';

                append = append + '</div>';

                var $append = $(append);
                wrapper.append($append);

                // wrapper.imagesLoaded( function() {
                //wrapper.packery( 'appended', $append );
                // });
            });


        }


        function getEvents() {

            $.ajax({
                url: "/whats-new/json/events?page=" + eventPage,
                type: "GET",
                processData: false,
                success: function(data) {
                    populateEvents(data);
                }
            });
        }

        function populateEvents(data) {
            let wrapper = $('#events-wrapper');

            Object.keys(data).forEach(function(key, index) {

                let n = data[key];

                var addtionalClass = '';
                var featuredClass = 'article-min';

                if (index === 0) {
                    if (eventPage === 1) {
                        if (n.img !== undefined && n.img !== '') {
                            addtionalClass = 'grid-item--width2';
                            featuredClass = 'featured-article';
                        }
                    }
                }

                let append = '<div class="grid-item ' + addtionalClass + '" data-animation="fadeInUp">';
                if (n.img !== undefined && n.img !== '') {

                    append = append +
                        '                <article class="article-item ' + featuredClass + '">' +
                        '                    <figure class="article-img ">' +
                        '                        <a href="/whats-new/events/' + n.slug + '" class="">' +
                        '                            <img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="/uploads/news/' +
                        n.img + '" alt="' + n.img + '" width="235" height="150">' +
                        '                        </a>' +
                        '                    </figure>';

                } else {
                    append = append +
                        '                <article class="article-item ' + featuredClass + ' no-image" >';
                }

                append = append + '                    <div class="article-info">' +

                    '                        <p class="tag">';

                if (n.property !== undefined) {
                    append = append + '<a href="/' + n.property_url + '">' + n.property + '</a>';
                }

                if (n.csr === true) {
                    append = append + '<a href="#">Kaakbay</a>';
                }


                append = append + '</p>' +
                    '                        <h2 class="article-title"><a href="/whats-new/events/' + n.slug +
                    '">' + n.title + '</a></h2>' +
                    '                        <p class="date-published">' + n.date + '</p>' +
                    ' <div class="clr"></div>';

                if (n.copy) {
                    append = append + '<p>' + n.copy + '...</p>';
                }

                append = append +
                    '                    </div>' +
                    '                </article>';

                append = append + '</div>';

                var $append = $(append);
                wrapper.append($append);

                // wrapper.imagesLoaded( function() {
                //wrapper.packery( 'appended', $append );
                // });
            });


        }


        function getTestimonials() {
            $.ajax({
                url: "/whats-new/json/testimonials?page=" + testimonialPage,
                type: "GET",
                processData: false,
                success: function(data) {
                    populateTestimonials(data);
                }
            });
        }

        function populateTestimonials(data) {
            let wrapper = $('#testimonials-wrapper');

            Object.keys(data).forEach(function(key, index) {

                let n = data[key];

                var addtionalClass = '';
                var featuredClass = 'article-min';

                if (index === 0) {
                    if (testimonialPage === 1) {
                        if (n.img !== undefined && n.img !== '') {
                            addtionalClass = 'grid-item--width2';
                            featuredClass = 'featured-article';
                        }
                    }
                }

                let append = '<div class="grid-item ' + addtionalClass + '" data-animation="fadeInUp">';
                if (n.img !== undefined && n.img !== '') {
                    append = append +
                        '                <article class="article-item ' + featuredClass + '">' +
                        '                    <figure class="article-img ">' +
                        '                        <a href="/whats-new/testimonials' + n.slug + '" class="">' +
                        '                            <img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="/uploads/news/' +
                        n.img + '" alt="' + n.img + '" width="235" height="150">' +
                        '                        </a>' +
                        '                    </figure>';

                } else {
                    append = append +
                        '                <article class="article-item ' + featuredClass + ' no-image" >';
                }

                append = append + '                    <div class="article-info">' +

                    '                        <p class="tag">';

                if (n.property !== undefined) {
                    append = append + '<a href="/' + n.property_url + '">' + n.property + '</a>';
                }

                if (n.csr === true) {
                    append = append + '<a href="#">Kaakbay</a>';
                }


                append = append + '</p>' +
                    '                        <h2 class="article-title"><a href="/whats-new/testimonials/' + n.slug +
                    '">' + n.title + '</a></h2>' +
                    '                        <p class="date-published">' + n.date + '</p>' +
                    ' <div class="clr"></div>';

                if (n.copy) {
                    append = append + '<p>' + n.copy + '...</p>';
                }

                append = append +
                    '                    </div>' +
                    '                </article>';

                append = append + '</div>';

                var $append = $(append);
                wrapper.append($append);

                // wrapper.imagesLoaded( function() {
                //wrapper.packery( 'appended', $append );
                // });
            });


        }


        function getPromos() {
            $.ajax({
                url: "/whats-new/json/promos?page=" + promoPage,
                type: "GET",
                processData: false,
                success: function(data) {
                    populatePromos(data);
                }
            });
        }

        function populatePromos(data) {
            let wrapper = $('#promo-wrapper');

            Object.keys(data).forEach(function(key, index) {

                let n = data[key];

                var addtionalClass = '';
                var featuredClass = 'article-min';

                if (index === 0) {
                    if (promoPage === 1) {
                        if (n.img !== undefined && n.img !== '') {
                            addtionalClass = 'grid-item--width2';
                            featuredClass = 'featured-article';
                        }
                    }
                }

                let append = '<div class="grid-item ' + addtionalClass + '" data-animation="fadeInUp">';
                if (n.img !== undefined && n.img !== '') {
                    append = append +
                        '                <article class="article-item ' + featuredClass + '">' +
                        '                    <figure class="article-img ">' +
                        '                        <a href="/whats-new/promos' + n.slug + '" class="">' +
                        '                            <img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="/uploads/news/' +
                        n.img + '" alt="' + n.img + '" width="235" height="150">' +
                        '                        </a>' +
                        '                    </figure>';

                } else {
                    append = append +
                        '                <article class="article-item ' + featuredClass + ' no-image" >';
                }

                append = append + '                    <div class="article-info">' +

                    '                        <p class="tag">';

                if (n.property !== undefined) {
                    append = append + '<a href="/' + n.property_url + '">' + n.property + '</a>';
                }

                if (n.csr === true) {
                    append = append + '<a href="#">Kaakbay</a>';
                }


                append = append + '</p>' +
                    '                        <h2 class="article-title"><a href="/whats-new/promos/' + n.slug +
                    '">' + n.title + '</a></h2>' +
                    '                        <p class="date-published">' + n.date + '</p>' +
                    ' <div class="clr"></div>';

                if (n.copy) {
                    append = append + '<p>' + n.copy + '...</p>';
                }

                append = append +
                    '                    </div>' +
                    '                </article>';

                append = append + '</div>';

                var $append = $(append);
                wrapper.append($append);

                // wrapper.imagesLoaded( function() {
                //wrapper.packery( 'appended', $append );
                // });
            });


        }

        function siteProgressInit() {
            var siteProgressCarousel = $('#site-progress-list');
            siteProgressCarousel.owlCarousel('destroy');
            siteProgressCarousel.owlCarousel(siteProgressOption);
        }
    </script>

    <script async="">
        var GLOBAL_frontend_home_conversion_rate_json = "/conversion-rates/json";
        getCurrencies();

        function getCurrencies() {
            $.ajax({
                url: GLOBAL_frontend_home_conversion_rate_json,
                type: "GET",
                processData: !1,
                success: function(a) {
                    localStorage.setItem("conversion", JSON.stringify(a))
                }
            }).then(function() {
                convertCurrencies()
            })
        }
    </script>


    <script async="">
        (function(w, d, t, r, u) {
            var f, n, i;
            w[u] = w[u] || [], f = function() {
                var o = {
                    ti: "26169032"
                };
                o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
            }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
                var s = this.readyState;
                s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
            }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
        })(window, document, "script", "//bat.bing.com/bat.js", "uetq");
    </script>

    <style>
        .embeddedServiceSidebar {
            z-index: 999999 !important;
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






    <script id="common-script" type="text/javascript"
        src="https://service.force.com/embeddedservice/5.0/utils/common.min.js"></script>


    <script async="">
        var onloadCallback = function() {
            grecaptcha.render('captchacode', {
                'sitekey': '6LcKHRwiAAAAAPmLGJqTqV37DxkqG59azLwp8v6-'
            });
        };
        setTimeout(function() {

            var body = document.getElementsByTagName('body')[0]
            var script = document.createElement('script')
            script.type = 'text/javascript';
            script.src = 'https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit'
            body.appendChild(script);
            console.log("est");
        }, 5000);

        <
        link rel = "preload"
        href = "{{ asset('js/jquery2.js') }}"
        as = "script" >
            <
            script src = "{{ asset('js/jquery2.js') }}" >
    </script>
    </script>

    <div style="display: none; visibility: hidden;">
        <script>
            fbq("track", "ViewContent", {
                value: 0,
                currency: "PHP"
            });
        </script>
    </div>

    <form id="fileUploadForm" enctype="multipart/form-data" method="post" target="fileUploadIframe"><input
            type="file" id="fileSelector" name="file" style="display: none;"><input name="filename"
            type="hidden"></form><iframe id="fileUploadIframe" name="fileUploadIframe" title="FileUploadFrame"
        style="display: none;"></iframe>
    <div id="batBeacon163992553217" style="width: 0px; height: 0px; display: none; visibility: hidden;"><img
            id="batBeacon856388515886" width="0" height="0" alt=""
            src="https://bat.bing.com/action/0?ti=26169032&amp;Ver=2&amp;mid=b110418f-a3d8-4100-b55f-36ae06a625a7&amp;sid=00e372e0cf1511eeb35bb9c5faeb4816&amp;vid=00e39ef0cf1511ee9d27d93e2ab67dea&amp;vids=0&amp;msclkid=N&amp;uach=pv%3D10.0.0&amp;pi=918639831&amp;lg=en-US&amp;sw=1366&amp;sh=768&amp;sc=24&amp;tl=Latest%20News%20%7C%20DMCI%20Homes&amp;p=https%3A%2F%2Fwww.dmcihomes.com%2Fwhats-new&amp;r=https%3A%2F%2Fwww.dmcihomes.com%2F&amp;lt=1895&amp;evt=pageLoad&amp;sv=1&amp;rn=883033"
            style="width: 0px; height: 0px; display: none; visibility: hidden;"></div>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&amp;render=explicit">
    </script>
    <div
        style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
        <div
            style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;">
        </div>
        <div class="g-recaptcha-bubble-arrow"
            style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;">
        </div>
        <div class="g-recaptcha-bubble-arrow"
            style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;">
        </div>
        <div style="z-index: 2000000000; position: relative;"><iframe
                title="recaptcha challenge expires in two minutes" name="c-2eoi2lrf1ir0" frameborder="0"
                scrolling="no"
                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=1kRDYC3bfA-o6-tsWzIBvp7k&amp;k=6LcKHRwiAAAAAPmLGJqTqV37DxkqG59azLwp8v6-"
                style="width: 100%; height: 100%;"></iframe></div>
    </div><iframe id="esw_storage_iframe"
        src="https://service.force.com/embeddedservice/5.0/esw.html?parent=https://www.dmcihomes.com/whats-new"
        title="Live Chat Metadata" style="display: none;"></iframe>
    <script type="text/javascript"
        src="https://d.la1-core1.sfdc-mchho0.salesforceliveagent.com/chat/rest/EmbeddedService/EmbeddedServiceConfig.jsonp?Settings.prefix=EmbeddedService&amp;org_id=00D5g000000J3Js&amp;EmbeddedServiceConfig.configName=WEB_CHAT&amp;callback=embedded_svc.liveAgentAPI.handleChatSettings&amp;version=48">
    </script>
    <script id="invite-esw-script" type="text/javascript"
        src="https://service.force.com/embeddedservice/5.0/client/invite.esw.min.js"></script>
    <div class="embeddedServiceHelpButton">
        <div class="helpButton"><button class="helpButtonEnabled uiButton" href="javascript:void(0)"><span
                    class="embeddedServiceIcon" aria-hidden="true" data-icon=""
                    style="display: inline-block;"></span><span class="helpButtonLabel" id="helpButtonSpan"
                    aria-live="polite" aria-atomic="true"><span class="assistiveText">Live chat:</span><span
                        class="message">Chat with an Expert</span></span></button></div>
    </div>
    <script id="inert-script" type="text/javascript" src="https://service.force.com/embeddedservice/5.0/utils/inert.min.js">
    </script>
</body>

<style>
    .loader-pin {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0
    }

    .loader-pin.loading {
        opacity: 1
    }
</style>
<style media="screen and (max-width: 767px)">
    @media (max-width:767px) {
        .container {
            max-width: 100%;
            margin-left: auto;
            margin-right: auto
        }

        .sec-head {
            text-align: center;
            margin-bottom: 20px
        }

        .sec-head p {
            float: none;
            clear: both;
            margin-left: auto;
            margin-right: auto;
            padding-bottom: 30px
        }

        h1 {
            font-size: 36px
        }

        h2 {
            font-size: 28px
        }

        h3 {
            font-size: 22px
        }

        h4 {
            font-size: 18px
        }

        .sec-pad.sec-default {
            padding: 30px 0 0px
        }

        .sec-pad.sec-default.bg-karen {
            min-height: 300px
        }

        .sec-pad.sec-default.bg-karen .ss-right {
            text-align: center;
            padding: 40px 0
        }

        .sec-head h2 {
            font-size: 28px
        }

        .sec-head .sec-head-action {
            margin-top: 20px;
            max-width: 320px;
            margin-left: auto;
            margin-right: auto
        }

        .sec-head .sec-head-action .fr {
            display: block;
            clear: both;
            float: none
        }

        .banner-left {
            padding-bottom: 0
        }
    }

    @media (max-width:767px) {
        .banner {
            min-height: 480px;
            height: calc(100vh - 70px)
        }

        .banner#vision {
            height: auto
        }

        .banner#brand-story {
            height: auto
        }

        .banner.default {
            min-height: 235px;
            height: 29vh;
            background-color: #ffffff;
            position: relative
        }

        .banner.default.wavy:after {
            background-size: contain;
            height: 30px
        }

        .banner.default .banner-text {
            padding-top: 67px;
            height: 100%
        }

        .banner.default .banner-text .container {
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .banner.default .banner-text .container h1 {
            margin-top: -12px
        }

        .banner-logo {
            text-align: center
        }

        .banner-logo img {
            display: inline-block
        }

        .banner-filter {
            display: none
        }

        .banner-text {
            float: none;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            padding-right: 0;
            width: 80%
        }

        .banner-text h1 {
            font-size: 42px;
            line-height: 45px
        }

        .banner-arrow {
            display: none
        }

        .mobile-search {
            display: block;
            background: #01a71c;
            position: absolute;
            z-index: 101;
            padding: 10px 20px;
            bottom: 0;
            left: 0;
            width: 100%;
            font-size: 20px;
            font-family: "Molengo", "Trebuchet MS", "sans-serif";
            font-weight: 700;
            text-align: center;
            color: #ffffff
        }

        .mobile-search span.icon-home {
            font-size: 30px;
            margin-right: 15px;
            display: inline-block;
            vertical-align: middle
        }

        .sm-loc-mobile {
            max-width: 220px;
            float: left;
            padding-left: 20px;
            margin-top: 20px;
            display: block;
            padding-bottom: 20px
        }

        .sm-loc-mobile p {
            color: #90b4ff;
            font-size: 13px;
            margin-bottom: 20px
        }

        .sm-loc-mobile p a {
            color: #90b4ff
        }

        .sm-loc-mobile ul {
            float: none !important;
            clear: both
        }

        .sm-loc-mobile ul li {
            font-size: 10px;
            padding: 0;
            text-align: left
        }

        .sm-loc-mobile ul li a {
            text-align: left !important;
            font-size: 10px !important;
            font-family: "Roboto", "Helvetica", "sans-serif";
            white-space: normal;
            padding: 0
        }

        .sm-loc-mobile ul li a label {
            color: #90b4ff
        }

        .price-range .noUi-horizontal .noUi-handle {
            width: 20px;
            height: 20px;
            left: -10px;
            top: -10px
        }
    }

    @media (max-width:767px) {
        .top-menu {
            padding-top: 8px;
            padding-bottom: 8px;
            background-color: #003299;
            -webkit-box-shadow: 2px 5px 5px rgba(0, 0, 0, 0.16);
            box-shadow: 2px 5px 5px rgba(0, 0, 0, 0.16)
        }

        .top-menu .search-icon {
            display: block;
            margin-right: 10px;
            padding-left: 0;
            width: 51px;
            overflow: visible
        }

        .top-menu .search-icon>label {
            display: none
        }

        .sidebar-menu {
            padding-right: 15px;
            left: auto;
            right: 0
        }

        .main-nav:after {
            content: '';
            display: block;
            float: none;
            clear: both
        }

        .main-nav ul:not(.nav-other-site) li {
            margin-bottom: 4px
        }

        .main-nav ul:not(.nav-other-site) li a {
            font-size: 12px
        }

        .main-nav ul.nav-other-site {
            margin-top: 80px;
            max-width: 180px
        }

        .main-nav ul.nav-other-site li {
            padding-left: 20px;
            line-height: 50px;
            height: 50px
        }

        .main-nav ul.nav-other-site li a {
            font-size: 12px
        }

        .main-nav ul.nav-other-site li a span.icon-home {
            font-size: 18px
        }

        .main-nav ul.nav-other-site li a {
            padding-left: 0
        }
    }

    @media (max-width:767px) {
        .copyrights {
            margin-top: 0;
            padding-bottom: 20px
        }

        #main-container {
            position: relative;
            overflow: hidden;
            min-height: auto;
            height: auto
        }

        .footer-info {
            padding: 0px 40px
        }

        #executives-wrapper li {
            width: calc(50% - 20px)
        }

        #executives-wrapper li.box-card {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }

        #executives-wrapper .content {
            padding: 0px 10px 20px
        }

        #executives-wrapper .content p {
            font-size: 12px
        }

        #executives-wrapper .content h3 {
            font-size: 14px;
            margin-bottom: 5px
        }
    }

    @media (max-width:767px) {
        footer {
            padding-bottom: 30px
        }

        footer h4 {
            margin-bottom: 20px
        }

        .footer-detail {
            padding: 0;
            border: none;
            width: auto;
            margin-left: -5px;
            margin-right: -5px
        }

        .footer-detail:before {
            display: none
        }

        .footer-address {
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.2)
        }

        .footer-address {
            text-align: center
        }

        .footer-link {
            text-align: center;
            margin: 30px 0;
            padding: 10px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2)
        }

        .footer-link h4 {
            margin-bottom: 0
        }

        .footer-link ul {
            width: 100%;
            float: none;
            clear: both;
            display: none
        }

        .footer-social {
            text-align: center
        }

        .footer-social ul:after {
            content: '';
            display: block;
            float: none;
            clear: both
        }

        .footer-social ul li {
            font-size: 28px;
            display: inline-block;
            width: 15.66%;
            vertical-align: top
        }

        .footer-social ul li .fs-text {
            display: none
        }

        .footer-social ul li a {
            color: #ffffff
        }

        .footer-social ul li span {
            visibility: visible;
            margin: auto;
            float: none
        }

        .footer-social h4 {
            display: none
        }

        .footer-social .fs-text {
            display: none
        }
    }

    @media (max-width:640px) {
        .article-info .tag a {
            margin-right: 8px;
            font-size: 14px;
            padding: 2px 5px
        }
    }

    @media (max-width:480px) {
        .container {
            padding: 0px 20px
        }

        footer .container {
            padding: 30px 20px 0
        }

        footer .footer-link ul {
            margin-top: 30px
        }

        footer .footer-link ul li {
            padding: 10px 0;
            margin: 0
        }

        footer .bg-blue {
            padding-bottom: 0
        }

        .sec-head h2 {
            font-size: 24px
        }

        .sec-head p {
            padding-bottom: 0
        }

        .contact-form-wrap .sec-head h2 {
            font-size: 24px
        }

        .other-channels {
            text-align: center
        }

        #buildingCarousel {
            padding: 0px 60px;
            width: auto
        }

        #buildingCarousel .owl-item {
            padding: 0
        }

        .banner-text {
            width: 100%
        }

        .banner-text h1,
        .banner-text h2 {
            font-size: 30px;
            line-height: 1
        }

        .banner-text p {
            line-height: 1.3;
            margin-bottom: 15px
        }

        .banner-logo {
            margin-bottom: 15px
        }

        .customer-care-mobile .input-wrap .col-md-6 {
            margin-bottom: 10px
        }

        .customer-care-mobile .submit {
            display: block;
            text-align: center;
            padding: 10px 0 30px;
            border-bottom: 1px solid #818181;
            margin-bottom: 30px
        }

        .customer-care-mobile .submit a {
            float: none
        }

        .customer-care-mobile .side {
            text-align: center
        }

        .customer-care-mobile .side .socials li {
            display: inline-block
        }
    }
</style>


<style>
    .bf-bot-wrap .btn {
        padding: 0 10px
    }

    .bf-price-range.bf-price-budget .pricing-label label.pl-1 {
        left: -12px
    }

    .bf-price-range.bf-price-budget .pricing-label label.pl-3 {
        left: auto;
        right: -18px
    }

    .custom-checkbox [type=checkbox]:disabled:not(:checked)+label,
    .filter-search-options .custom-checkbox [type=checkbox]:disabled:checked+label,
    .filter-search-options .custom-checkbox [type=radio]:disabled:not(:checked)+label {
        opacity: 1;
        cursor: pointer
    }

    .ad-filter-search-options .custom-checkbox [type=checkbox]:disabled:checked+label,
    .ad-filter-search-options .custom-checkbox [type=radio]:disabled:not(:checked)+label,
    .custom-checkbox [type=checkbox]:disabled:not(:checked)+label {
        opacity: 1;
        cursor: pointer
    }

    .banner .coverimage-img {
        background: #ccc
    }

    .banner .coverimage-img {
        display: none
    }

    html.js-user-action .coverimage-img {
        display: block
    }
</style>

<link rel="preload" href="{{ asset('css/home-btf.min.css') }}" as="style">
<link rel="stylesheet" href="{{ asset('css/home-btf.min.css') }}">



<script src="{{ asset('js/jquery2.js') }}"></script>
<script src="{{ asset('js/bundle.js') }}"></script>


<script defer>
    var GLOBAL_frontend_get__properties_json = "/get/properties/json";
    var GLOBAL_app_request_schemeAndHttpHost = "https://www.dmcihomes.com";
    var GLOBAL_countries_json = "/frontend/js/countries.json";
    var GLOBAL_careers_position_json = "/json/positions.json";
    var GLOBAL_frontend_contact_us_captcha = "/contact-us/captcha/generate";
    var GLOBAL_APP_REQUEST_GET = "frontend_home";

    "use strict";
    var map, locationMap, positionMarker, locationMarker, geocoder, cookieSetupLoc, newCookieValue,
        activeProperties = [],
        allProperties = [],
        propertyLocation = [],
        selectedLocation = [],
        currencies = {},
        currentLocation = {
            lat: "",
            lng: ""
        },
        prefCities = [],
        optionCities = [],
        locationEnabled = !1,
        popUpLocationValue = {
            name: "",
            lat: "",
            lng: "",
            complete_address: ""
        },
        autoCompleteLocationValue = {
            name: "",
            lat: "",
            lng: "",
            complete_address: ""
        };

    function getActivePropertiesJson() {
        $.ajax({
            url: GLOBAL_frontend_get__properties_json,
            type: "GET",
            processData: !1,
            success: function(a) {
                Object.keys(a).forEach(function(b) {
                    let c = a[b];
                    allProperties.push(c)
                }), activeProperties = allProperties.reduce(function(a, c) {
                    var b = c.city;
                    return a[b] = a[b] || [], a[b].push(c), a
                }, {});
                var c = [];
                allProperties.forEach(function(a) {
                    c[a.city] = a.city_slug
                });
                var b = $("#sidebar-property-modal-location-list");
                b.append(
                    '<li><a href="#" class="btn btn-round btn-ghost sidebar-location-all active" data-location="all">View All</a></li>'
                    ), Object.keys(activeProperties).forEach(function(a) {
                    propertyLocation.push(a)
                }), propertyLocation.sort(), propertyLocation.forEach(function(a) {
                    var d = c[a];
                    b.append('<li><a href="' + GLOBAL_app_request_schemeAndHttpHost + "/" + d +
                        '" class="btn btn-round btn-ghost sidebar-location-filter" data-location="' +
                        a + '">' + a + "</a></li>")
                }), $(".sidebar-location-all").click(function() {
                    selectedLocation = null, loadAllProperties(), $(".sidebar-location-filter")
                        .removeClass("active"), $(this).addClass("active")
                }), $(".sidebar-location-filter").click(function(a) {
                    a.preventDefault(), populateSidebarProperties(selectedLocation = $(this).data(
                        "location")), $(".sidebar-location-all").removeClass("active"), $(
                        ".sidebar-location-filter").removeClass("active"), $(this).addClass(
                        "active")
                })
            }
        })
    }

    function populateSidebarProperties(a) {
        var b = activeProperties[a],
            c = $("#sidebar-property-list");
        c.empty(), $("#sidebar-property-header").text('Properties around "' + a + '".'), b.sort(), b.forEach(function(
        a) {
            var b = "coming-soon",
                d = "cs",
                e = Number(a.price_range[0].min_price),
                f = Number(a.price_range[0].max_price);
            1 === a.status ? (b = "new", d = "new") : 2 === a.status ? (b = "RFO", d = "rfo") : 3 === a
                .status && (b = "under-construction", d = "uc");
            var g = '<span data-value="' + e + '" class="currency-convert">' + e +
                '</span> - <span data-value="' + f + '" class="currency-convert">' + f + "</span>";
            0 == a.is_unit_activated && (g = "<span>NOT YET AVAILABLE</span>");
            var h =
                '<li class="box-card">                <div class="property-item">                    <a href="/' +
                a.slug +
                '">                        <figure class="property-img">                            <img class="lazyload" src="frontend/images/page_template/lazyload.png" data-src="' +
                a.image +
                '" alt="">                                <span class="property-status circle-white">                                    <span class="' +
                d + " icon-" + b +
                '"></span>                                </span>                        </figure>                        <div class="property-detail">                            <h3>' +
                a.name + '</h3>                            <p class="price">' + g +
                "</p>                        </div>                    </a>                </div>            </li>";
            c.append(h), convertCurrencies()
        })
    }

    function loadAllProperties() {
        var a = $("#sidebar-property-list");
        a.empty(), $("#sidebar-property-header").text("Viewing all properties."), allProperties.forEach(function(b) {
            var c = "coming-soon",
                d = "cs",
                e = Number(b.price_range[0].min_price),
                f = Number(b.price_range[0].max_price);
            1 === b.status ? (c = "new", d = "new") : 2 === b.status ? (c = "RFO", d = "rfo") : 3 === b
                .status && (c = "under-construction", d = "uc");
            var g = '<span data-value="' + e + '" class="currency-convert">' + e +
                '</span> - <span data-value="' + f + '" class="currency-convert">' + f + "</span>";
            0 == b.is_unit_activated && (g = "<span>NOT YET AVAILABLE</span>");
            var h =
                '<li class="box-card">                <div class="property-item">                    <a href="/' +
                b.slug +
                '">                        <figure class="property-img">                            <img class="lazyload" src="frontend/images/page_template/lazyload.png" data-src="' +
                b.image +
                '" alt="">                                <span class="property-status circle-white">                                    <span class="' +
                d + " icon-" + c +
                '"></span>                                </span>                        </figure>                        <div class="property-detail">                            <h3>' +
                b.name + '</h3>                            <p class="price">' + g +
                "</p>                        </div>                    </a>                </div>            </li>";
            a.append(h)
        })
    }

    function initializeDefaultButtons() {
        $("#property-sidebar-list-button").click(function(a) {
            a.preventDefault(), loadAllProperties(), convertCurrencies()
        }), $("#save-profile").click(function(a) {
            a.preventDefault();
            var b = $("#pop-up-looking-select").val(),
                c = JSON.stringify(popUpLocationValue),
                d = $("#pop-up-currency-select").val(),
                e = $("#pop-up-language-select").val(),
                f = $("#pop-up-measure-select").val();
            setCookie("profile-lookingFor", b, 31), setCookie("profile-locatedNear", c, 31), setCookie(
                "profile-currency", d, 31), setCookie("profile-language", e, 31), setCookie(
                "profile-measure", f, 31), setCookie("profile-set", !0, 31), $.fancybox.close(
                "#cookie-preference"), loadCookies(), $(".hamburger-menu").hasClass("active") && $(
                ".hamburger-menu").click(), convertMeasures(), convertDistances(), convertCurrencies()
        }), $("#done-location-search").click(function(a) {
            a.preventDefault(), setCookie("profile-locatedNear", JSON.stringify(autoCompleteLocationValue), 31),
                $.fancybox.close("#map-pin"), loadCookies()
        }), $("#clear-location-search").click(function(a) {
            a.preventDefault(), autoCompleteLocationValue = void 0, $("#search-location-autocomplete").val("")
                .focus(), $("#header-search-location-field").val(""), $("#advance-search-location").val("")
        }), $("#skip-profile").click(function(a) {
            a.preventDefault(), setCookie("profile-set", !0, 31), setCookie("profile-measure", $(
                "#pop-up-measure-select").val(), 31), $.fancybox.close("#cookie-preference")
        }), $(".pop-up-trigger").click(function(a) {
            $.fancybox.open({
                src: "#cookie-preference",
                clickContent: !1,
                beforeShow: function() {
                    $(".fancybox-bg").css({
                        background: "rgba(255, 255, 255, 0.6)"
                    })
                }
            })
        }), $("#advance-search-button").click(function(g) {
            g.preventDefault();
            var h = $(".advance-status-cb:checked"),
                i = $(".advance-unit-type-cb:checked"),
                j = $(".advance-dev-type-cb:checked"),
                a = [];
            h.each(function(c, b) {
                a.push(b.value)
            });
            var b = [];
            i.each(function(c, a) {
                b.push(a.value)
            });
            var c = [];
            j.each(function(b, a) {
                c.push(a.value)
            });
            var k = currentLocation.lat,
                l = currentLocation.lng,
                d = $("#min-price-select").val(),
                e = $("#max-price-select").val(),
                f = $("#advance-search-location").val();
            "" === f ? window.location = "/property-finder?search=advance&min=" + d + "&max=" + e + "&type=" + b
                .toString() + "&dev=" + c.toString() + "&status=" + a.toString() + "&location=any" : window
                .location = "/property-finder?search=advance&lat=" + k + "&lng=" + l + "&min=" + d + "&max=" +
                e + "&type=" + b.toString() + "&dev=" + c.toString() + "&status=" + a.toString() + "&address=" +
                f
        }), $(".advance-dev-type-cb").change(function() {
            4 == $(this).val() && $(".advance-dev-type-cb[value=4]").is(":checked") ? $(".sdv").prop("disabled",
                !1) : $(".advance-dev-type-cb[value=4]").is(":checked") || $(".sdv").prop("disabled", !0)
        });
        var a = !1,
            b = !1,
            c = !1;
        $(".ads-types input[type=checkbox]").change(function() {
            var d = "";
            $(".ads-types input[type=checkbox]").each(function() {
                d += this.checked ? "1," : "0,"
            }), (d = d.substr(0, d.length - 1)).indexOf("1") > -1 ? (b = !0, a && b && c && $(
                "#advance-search-button").removeClass("disabled")) : (b = !1, $("#advance-search-button")
                .addClass("disabled"))
        }), $(".ads-unit-type input[type=checkbox]").change(function() {
            var d = "";
            $(".ads-unit-type input[type=checkbox]").each(function() {
                d += this.checked ? "1," : "0,"
            }), (d = d.substr(0, d.length - 1)).indexOf("1") > -1 ? (a = !0, b && c && $(
                "#advance-search-button").removeClass("disabled")) : (a = !1, $("#advance-search-button")
                .addClass("disabled"))
        }), $(".fa-status-list input[type=checkbox]").change(function() {
            var d = "";
            $(".fa-status-list input[type=checkbox]").each(function() {
                d += this.checked ? "1," : "0,"
            }), (d = d.substr(0, d.length - 1)).indexOf("1") > -1 ? (c = !0, a && b && c && $(
                "#advance-search-button").removeClass("disabled")) : (c = !1, $("#advance-search-button")
                .addClass("disabled"))
        }), $(".slider-advisory").owlCarousel({
            loop: !0,
            item: 1,
            margin: 10,
            nav: !1,
            dots: !1,
            autoplay: !0,
            autoplayTimeout: 7e3,
            autoplayHoverPause: !0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1e3: {
                    items: 1
                }
            }
        })
    }

    function loadCookies() {
        getCookie("profile-lookingFor");
        var a, b = getCookie("profile-locatedNear"),
            c = getCookie("profile-currency"),
            e = getCookie("profile-language"),
            d = getCookie("profile-measure");
        "" === d && (setCookie("profile-measure", $("#pop-up-measure-select").val(), 31), d = getCookie(
                "profile-measure")), (void 0 === c || "undefined" === c || "" === c) && (setCookie("profile-currency",
                "PHP", 31), c = getCookie("profile-currency")), "" !== b && void 0 !== b && "undefined" !== b &&
            "null" !== b && (popUpLocationValue = a = JSON.parse(b), $("#pop-up-location-select").val(a.name), $(
                "#search-location-autocomplete").val(a.name), autoCompleteLocationValue = {
                name: a.name,
                complete_address: a.complete_address,
                lat: a.lat,
                lng: a.lng
            }, geocodeDefault()), $("#pop-up-language-select").val(e), $("#pop-up-measure-select").val(d), $(
                "#pop-up-currency-select").val(c)
    }

    function convertMeasures() {
        $(".area-convert").each(function() {
            var a = +$(this).data("value"),
                b = " sqm.";
            "Imperial" === getCookie("profile-measure") && (a *= 10.764, b = " sft."), this.innerHTML = a
                .toLocaleString(void 0, {
                    maximumFractionDigits: 2
                }) + b
        })
    }

    function convertDistances() {
        $(".distance-convert").each(function() {
            var a = +$(this).data("value");
            "Imperial" === getCookie("profile-measure") && (a *= .62137), this.innerHTML = a.toLocaleString(
                void 0, {
                    maximumFractionDigits: 2
                })
        })
    }

    function convertCurrencies() {
        var a = getCookie("profile-currency");
        void 0 === localStorage.getItem("conversion") && getCurrencies();
        var b = JSON.parse(localStorage.getItem("conversion"))[a];
        $(".currency-convert").each(function() {
            var c = +$(this).data("value");
            c *= b, this.innerHTML = a + " " + c.toLocaleString(void 0, {
                maximumFractionDigits: 2
            })
        }), $(".currency-convert-no-symbol").each(function() {
            var a = +$(this).data("value");
            a *= b, this.innerHTML = a.toLocaleString(void 0, {
                maximumFractionDigits: 2
            })
        })
    }

    function getCurrencyMultiplier() {
        var a = getCookie("profile-currency");
        return void 0 === localStorage.getItem("conversion") && getCurrencies(), JSON.parse(localStorage.getItem(
            "conversion"))[a]
    }

    function getCurrencyCode() {
        return getCookie("profile-currency")
    }

    function setCookie(b, c, d) {
        var a = new Date;
        a.setTime(a.getTime() + 864e5 * d);
        var e = "expires=" + a.toUTCString();
        document.cookie = b + "=" + c + ";" + e + ";path=/"
    }

    function getCookie(e) {
        for (var c = e + "=", d = decodeURIComponent(document.cookie).split(";"), b = 0; b < d.length; b++) {
            for (var a = d[b];
                " " === a.charAt(0);) a = a.substring(1);
            if (0 === a.indexOf(c)) return a.substring(c.length, a.length)
        }
        return ""
    }

    function getParameterByName(a, b) {
        b || (b = window.location.href), a = a.replace(/[\[\]]/g, "\\$&");
        var c = new RegExp("[?&]" + a + "(=([^&#]*)|&|#|$)").exec(b);
        return c ? c[2] ? decodeURIComponent(c[2].replace(/\+/g, " ")) : "" : null
    }

    function showMap(e) {
        geocoder = new google.maps.Geocoder;
        var a = 14.5427941,
            b = 121.0130898;
        locationMap = new google.maps.Map(document.getElementById("home-pin-map"), {
            center: new google.maps.LatLng(a, b),
            zoom: 14,
            streetViewControl: !1,
            styles: [{
                featureType: "administrative",
                elementType: "geometry",
                stylers: [{
                    visibility: "off"
                }]
            }, {
                featureType: "poi",
                stylers: [{
                    visibility: "off"
                }]
            }, {
                featureType: "road",
                elementType: "labels.icon",
                stylers: [{
                    visibility: "off"
                }]
            }, {
                featureType: "transit",
                stylers: [{
                    visibility: "off"
                }]
            }]
        });
        var f = {
            url: "/frontend/images/loading-idle.gif",
            scaledSize: new google.maps.Size(70, 70),
            origin: null,
            anchor: null,
            size: null
        };
        positionMarker = new google.maps.Marker({
            position: new google.maps.LatLng(a, b),
            map: locationMap,
            animation: google.maps.Animation.DROP,
            draggable: !0,
            icon: f
        }), !1 === geocodeDefault() && null !== e && (locationEnabled = !0, a = e.coords.latitude, b = e.coords
            .longitude, currentLocation.lat = a, currentLocation.lng = b, placeMarkerAndPanTo(new google.maps
                .LatLng(a, b)), geocode(new google.maps.LatLng(a, b))), locationMap.addListener("click", function(
        a) {
            placeMarkerAndPanTo(a.latLng, locationMap), geocode(a.latLng)
        }), positionMarker.setVisible(!0), google.maps.event.addListener(positionMarker, "dragend", function(a) {
            placeMarkerAndPanTo(a.latLng, locationMap), geocode(a.latLng)
        });
        var g = document.getElementById("pop-up-location-select"),
            c = new google.maps.places.Autocomplete(g);
        c.bindTo("bounds", locationMap), c.setTypes([]), c.setFields(["address_components", "geometry", "icon",
            "name"]), c.addListener("place_changed", function() {
                var a = c.getPlace(),
                    b = "";
                a.address_components.forEach(function(a, c) {
                    b = 0 === c ? a.long_name : b + "," + a.long_name
                }), popUpLocationValue = {
                    name: a.name,
                    complete_address: b,
                    lat: a.geometry.location.lat(),
                    lng: a.geometry.location.lng()
                }
            });
        var h = document.getElementById("search-location-autocomplete"),
            d = new google.maps.places.Autocomplete(h);
        d.bindTo("bounds", locationMap), d.setTypes([]), d.setFields(["address_components", "geometry", "icon",
            "name"]), d.addListener("place_changed", function() {
                var a = d.getPlace(),
                    b = "";
                a.address_components.forEach(function(a, c) {
                    b = 0 === c ? a.long_name : b + "," + a.long_name
                }), autoCompleteLocationValue = {
                    name: a.name,
                    complete_address: b,
                    lat: a.geometry.location.lat(),
                    lng: a.geometry.location.lng()
                }, a.geometry.location ? placeMarkerAndPanTo(a.geometry.location) : locationMap.setCenter(a
                    .geometry.location)
            })
    }

    function placeMarkerAndPanTo(a) {
        void 0 !== positionMarker && positionMarker.setPosition(a), void 0 !== locationMap && (locationMap.panTo(a),
            locationMap.setZoom(17))
    }

    function geocodeDefault() {
        var a, b = getCookie("profile-locatedNear");
        try {
            a = JSON.parse(b), currentLocation.lat = a.lat, currentLocation.lng = a.lng, "function" ==
                typeof getRecommended && getRecommended(a.lat, a.lng), placeMarkerAndPanTo(new google.maps.LatLng(a.lat,
                    a.lng)), $("#header-search-location-field").val(a.name), $("#advance-search-location").val(a.name)
        } catch (c) {
            return "function" == typeof getRecommended && (getRecommended("", ""), placeMarkerAndPanTo(new google.maps
                .LatLng(currentLocation.lat, currentLocation.lng))), !1
        }
        return !0
    }

    function geocode(a) {
        geocoder.geocode({
            location: a
        }, function(b, c) {
            "OK" === c && (b[0] && ($("#header-search-location-field").val(b[0].formatted_address), $(
                    "#advance-search-location").val(b[0].formatted_address), $(
                    "#search-location-autocomplete").val(b[0].formatted_address)),
                autoCompleteLocationValue = {
                    name: b[0].formatted_address,
                    complete_address: b[0].formatted_address,
                    lat: a.lat(),
                    lng: a.lng()
                }, "getRecommended" == typeof obj && getRecommended(a.lat(), a.lng()))
        })
    }

    function IsEmail(a) {
        return /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(a)
    }

    function populateCoutries() {
        $.getJSON(GLOBAL_countries_json, function(a) {
            a.countries.forEach(function(b) {
                var a = '<option value="' + b.value + '" ';
                "Philippines" === b.value && (a += "selected "), a = a + ">" + b.name + "</option>", $(
                    "#country").append(a)
            })
        })
    }

    function populatePositions() {
        $.getJSON(GLOBAL_careers_position_json, function(a) {
            a.positions.forEach(function(b) {
                var a = '<option value="' + b.value + '" ';
                a = a + ">" + b.name + "</option>", $("#position-interested").append(a)
            })
        }).then(function() {
            $("#position-interested").multiselect({
                enableFiltering: !0,
                enableCaseInsensitiveFiltering: !0
            })
        })
    }

    function populateContactProperties() {
        var a = $("#propertyInterested"),
            b = $("#propertyOwned"),
            c = {
                enableFiltering: !0,
                enableCaseInsensitiveFiltering: !0
            };
        a.empty(), b.empty(), allProperties.forEach(function(d, f) {
            var e = '<option value="' + d.id + '" >' + d.name + " | " + d.city + "</option>";
            a.append(e), b.append(e), f === allProperties.length - 1 && (firedContactSelect = !0, $(
                "#propertyInterested").multiselect(c), $("#propertyOwned").multiselect(c), $(
                ".contact-form-wrap").removeClass("loading-form"))
        })
    }

    function change_captcha() {
        document.getElementById("captcha").src = GLOBAL_frontend_contact_us_captcha
    }
    $(document).ready(function() {
        $(".copy-url").click(function(b) {
                var a;
                b.preventDefault(), document.querySelector(".js-copytextarea").select();
                try {
                    document.execCommand("copy")
                } catch (c) {}
                $(".notes-copied").addClass("active"), clearTimeout(a), a = setTimeout(function() {
                    $(".notes-copied").removeClass("active")
                }, 2500)
            }), $(document).on("click", ".pi-share", function(b) {
                b.preventDefault();
                var c = $(this).data("url"),
                    a = GLOBAL_app_request_schemeAndHttpHost + "/" + c;
                $("#share-url-fb").attr("href", "https://www.facebook.com/sharer/sharer.php?u=" + a), $(
                    "#share-url-twitter").attr("href", "https://twitter.com/intent/tweet?url=" + a), $(
                    "#input-share-url").val(a), $(".js-copytextarea").val(a), $("#a-share-url").attr(
                    "data-url", a), $.fancybox.open({
                    src: "#share-info",
                    autoSize: !1,
                    toolbar: !0,
                    gutter: 20,
                    touch: !1,
                    fitToView: !1,
                    clickContent: !1
                })
            }), initializeDefaultButtons(), loadCookies(), getCookie("DMCI_advisory"), "-1" == document.cookie
            .indexOf("advisoryCookie=here") && ($(".advisory-wrap").addClass("active"), 1025 > $(window)
            .width() && $("body").addClass("advisory"), $(".advisory-wrap .jq-close").click(function(b) {
                    b.preventDefault();
                    var a = new Date;
                    a = new Date(a.getTime() + 864e5), document.cookie = "advisoryCookie=here; expires=" +
                        a, $("body.advisory").removeClass("advisory"), $(".advisory-wrap").removeClass(
                            "active"), $(".advisory-wrap").addClass("hide")
                }), $(".advisory-wrap btn.btn-round").click(function() {
                    var a = new Date;
                    return a = new Date(a.getTime() + 864e5), document.cookie =
                        "advisoryCookie=here; expires=" + a, $("body.advisory").removeClass("advisory"), $(
                            ".advisory-wrap").removeClass("active"), $(".advisory-wrap").addClass("hide"), !
                        0
                }))
    }), $(function() {
        getActivePropertiesJson()
    });
    var isBusyCaptcha = !1;
    $("img#refresh").click(function() {
        !1 == isBusyCaptcha && (isBusyCaptcha = !0, $("img#refresh").addClass("active"), setTimeout(function() {
            $("img#refresh").removeClass("active"), isBusyCaptcha = !1
        }, 300), change_captcha())
    }), $("#captchaerror-close").click(function(a) {
        a.preventDefault(), $.fancybox.close("#captcha-error")
    });
    var firedContactSelect = !1;
    "frontend_single_property" !== GLOBAL_APP_REQUEST_GET ? ($(document).ready(function() {}), $(window).on("scroll",
        function() {
            if ($(".contact-form-wrap").length > 0) {
                var a = window.innerHeight ? window.innerHeight : $(window).height(),
                    b = $(window).scrollTop(),
                    c = $(".contact-form-wrap").offset(),
                    d = c.top - a;
                b >= d && !1 == firedContactSelect && populatePositions()
            }
        })) : $(function() {
        var a = {
            enableFiltering: !0,
            enableCaseInsensitiveFiltering: !0
        };
        $("#position-interested").multiselect(a), $("#propertyInterested").multiselect(a), $("#propertyOwned")
            .multiselect(a)
    }), $(function() {
        getCookie("profile-set") || $.fancybox.open({
            src: "#cookie-preference",
            modal: !0,
            beforeShow: function() {
                $(".fancybox-bg").css({
                    background: "rgba(255, 255, 255, 0.6)"
                })
            }
        })
    })
</script>

<script>
    < script >
        function initAutocomplete() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: -33.8688,
                    lng: 151.2195
                },
                zoom: 13,
                mapTypeId: "roadmap",
            });

            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });

            let markers = [];
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length === 0) {
                    return;
                }

                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];

                const bounds = new google.maps.LatLngBounds();
                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }

                    const marker = new google.maps.Marker({
                        map,
                        title: place.name,
                        position: place.geometry.location,
                    });
                    markers.push(marker);

                    if (place.geometry.viewport) {
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }
    document.getElementById("searchButton").addEventListener("click", function() {
        var location = document.getElementById("location").value;
        document.getElementById("locationDisplay").innerText = "You searched for: " + location;
    });
    document.addEventListener("DOMContentLoaded", function() {
        // Get the input field
        var locationInput = document.getElementById("header-search-location-field");

        // Add event listener for input event
        locationInput.addEventListener("input", function(event) {
            // Get the value entered by the user
            var enteredLocation = event.target.value;

            // Perform actions based on the entered location
            // For example, you can display suggestions, perform autocomplete, or search functionality
            console.log("User entered location:", enteredLocation);
            // You can perform further actions here based on the entered location
        });
    });
</script>

<link rel="preload" href="{{ asset('js/jquery2.js') }}" as="script">
<script src="{{ asset('js/jquery2.js') }}"></script>

<script async>
    function detectUserInteraction() {
        document.getElementsByTagName("html")[0].classList.add("js-user-action"),
            "keydown mouseover touchmove touchstart wheel".split(" ").forEach(function(a) {
                window.removeEventListener(a, detectUserInteraction, !1)
            })
    }
    window.mobileCheck = function() {
        var a;
        let b = !1;
        return a = navigator.userAgent || navigator.vendor || window.opera, (
            /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i
            .test(a) ||
            /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
            .test(a.substr(0, 4))) && (b = !0), b
    }, window.mobileCheck() ? "keydown mouseover touchmove touchstart wheel".split(" ").forEach(function(a) {
        window.addEventListener(a, detectUserInteraction, !1)
    }) : document.getElementsByTagName("html")[0].classList.add("js-user-action")
</script>

<script async>
    var GLOBAL_lazyload_png = "/frontend/images/page_template/lazyload.png";
    var GLOBAL_frontend_home_rules_get = "/rules/get";
    var GLOBAL_frontend_home_site_progress_get = "/site_progress/get";
    var GLOBAL_frontend_home_site_timeline_get = "/timeline/get";
    var GLOBAL_frontend_properties_unit_types = "/properties/unit/types";
    var GLOBAL_frontend_whats_latest_news_json = "/whats-new/json/latest-news";

    "use strict";
    var owlHeritage = $(".timeline-wrapper"),
        siteProgressOption = {
            loop: !1,
            dots: !1,
            items: 3,
            nav: !0,
            rtl: !0,
            margin: 5,
            smartSpeed: 700,
            navText: ["<span class='icon-right-arrow'></span>", "<span class='icon-left-arrow'></span>", ],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                767: {
                    items: 5
                },
                1400: {
                    items: 5
                },
                1600: {
                    items: 7
                }
            }
        },
        siteProgress = [],
        siteProgressPropertyIds = [],
        siteProgressPage = 0,
        $recommendedCarousel = $(".property-list-carousel").not("#sidebar-property-list");

    function getLocation() {
        navigator.geolocation || getRecommended("", "")
    }

    function siteProgressInit() {
        var e = $("#site-progress-list");
        e.owlCarousel("destroy"), e.owlCarousel(siteProgressOption)
    }

    function initializeNoUiHome() {
        var e = document.getElementById("noUiSlider"),
            t = document.getElementById("first-mil"),
            a = document.getElementById("second-mil");
        document.getElementById("qs-price-mobile-min"), document.getElementById("qs-price-mobile-max"), noUiSlider
            .create(e, {
                start: [0, 40],
                connect: !0,
                format: wNumb({
                    decimals: 0
                }),
                range: {
                    min: 0,
                    max: 20
                }
            }), e.noUiSlider.on("update", function(e, i) {
                var s = e[i];
                i ? 0 == s ? $(a).html(Math.floor(s) + 1) : $(a).html(Math.floor(s)) : 0 == s ? $(t).html(Math
                    .floor(s) + 1) : $(t).html(Math.floor(s))
            }), new SelectPure(".bfb-autocomplete", {
                options: [{
                    label: "Lot",
                    value: "8"
                }, {
                    label: "House & Lot",
                    value: "7"
                }, {
                    label: "Loft",
                    value: "6"
                }, {
                    label: "4 Bedroom",
                    value: "5"
                }, {
                    label: "3 Bedroom",
                    value: "4"
                }, {
                    label: "2 Bedroom",
                    value: "3"
                }, {
                    label: "1 Bedroom",
                    value: "2"
                }, {
                    label: "Studio",
                    value: "1"
                }, ],
                value: [],
                multiple: !0,
                autocomplete: !1,
                icon: "fa fa-times",
                onChange: function(e) {
                    console.log(e.join()), $("#header-search-unit-type").val(e.join()), console.log(e), $(
                            ".bfb-autocomplete .select-pure__label").children(".select-pure__selected-label")
                        .length > 0 ? $(".bfb-autocomplete").addClass("removePlaceholder") : $(
                            ".bfb-autocomplete").removeClass("removePlaceholder")
                }
            })
    }

    function initTimeLine() {
        $(".timeline-year li a").click(function(e) {
            e.preventDefault(), $(this).attr(""), $(this).closest("li").index();
            var a = $(this).data("year"),
                i = $(".timeline-carousel").find(".item[data-year=" + a + "]")[0],
                s = $(".timeline-carousel").find(i).parent(".owl-item").index();
            t.owlCarousel().trigger("to.owl.carousel", [s, 300]), $(".timeline-year li").removeClass("active"),
                $(".timeline-year li").removeClass("medium-two"), $(".timeline-year li").removeClass(
                    "large-one"), $(this).closest("li").addClass("active"), $(this).closest("li").nextAll(
                    ":lt(2)").addClass("medium-two"), $(this).closest("li").nextAll(":lt(1)").addClass(
                    "large-one"), $(this).closest("li").prevAll(":lt(1)").addClass("large-one"), $(this)
                .closest("li").prevAll(":lt(2)").addClass("medium-two")
        }), $("#timeline-year-select").change(function() {
            var t = $(this).val();
            $("#timeline-mobile-carousel").trigger("destroy.owl.carousel"), $("#timeline-mobile-carousel").html(
                ""), $(".timeline-carousel .item[data-year-mobile=" + t + "]").each(function() {
                var e = $(this).clone();
                $("#timeline-mobile-carousel").append(e)
            }), $("#timeline-mobile-carousel").owlCarousel(e), $("#timeline-mobile-carousel").trigger(
                "refresh.owl.carousel")
        });
        var e = {
            loop: !1,
            dots: !1,
            items: 4,
            nav: !0,
            center: !1,
            margin: 5,
            smartSpeed: 700,
            rtl: !0,
            navText: ["<span class='icon-right-arrow'></span>", "<span class='icon-left-arrow'></span>", ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                767: {
                    items: 1
                }
            }
        };
        $(".timeline-carousel").owlCarousel(e);
        var t = $(".timeline-carousel");
        t.on("changed.owl.carousel", function(e) {
            var t = e.target;
            e.item.count;
            var a = e.item.index,
                i = $(t).find(".owl-item").eq(a).find(".item").attr("data-year");
            if ("" != i) {
                var s = $(".timeline-year").find("a[data-year=" + i + "]").closest("li");
                $(".timeline-year li").removeClass("active"), $(".timeline-year li").removeClass("medium-two"),
                    $(".timeline-year li").removeClass("large-one"), s.addClass("active"), s.nextAll(":lt(2)")
                    .addClass("medium-two"), s.nextAll(":lt(1)").addClass("large-one"), s.prevAll(":lt(1)")
                    .addClass("large-one"), s.prevAll(":lt(2)").addClass("medium-two")
            }
        }), t.trigger("to.owl.carousel", [3, 0]), 768 > $(window).width() && $("#timeline-year-select").val($(
            "#timeline-year-select option:first").val()).trigger("change")
    }

    function getSiteProgress() {
        $.ajax({
            url: GLOBAL_frontend_home_site_progress_get,
            type: "GET",
            processData: !1,
            success: function(e) {
                populateSiteProgress(e);
                var t = $("#site-progress-property-select").find("option");
                t.sort(function(e, t) {
                        return $(e).text() > $(t).text() ? 1 : -1
                    }), $("#site-progress-property-select").html("").append(
                        '<option value="all">View all properties</option>'), $(
                        "#site-progress-property-select").append(t), $("#site-progress-property-select")
                    .val("all")
            }
        })
    }

    function populateSiteProgress(e) {
        siteProgressPage = 0;
        let t = $("#site-progress-list");
        t.empty(), siteProgress = e, Object.keys(e).forEach(function(t) {
            let a = e[t];
            siteProgressPropertyIds.includes(a.proj_id) || (siteProgressPropertyIds.push(a.proj_id), $(
                "#site-progress-property-select").append("<option value=" + a.proj_id + ">" + a.name +
                "</option>"))
        }), t.append(loadSiteProgressData(siteProgressPage)), t.on("translated.owl.carousel", function(e) {
            e.target, e.item.count, e.item.index;
            var a = e.item.count - 5;
            if (e.item.index === a) {
                var i = loadSiteProgressData(siteProgressPage);
                t.trigger("add.owl.carousel", [i]).trigger("destroy.owl.carousel"), t.owlCarousel(
                    siteProgressOption), t.trigger("to.owl.carousel", [a, 0])
            }
        }), $("#site-progress-property-select").change(function() {
            var e = $("#site-progress-property-select").val();
            "all" === e ? populateSiteProgress(siteProgress) : filterSiteProgress(siteProgress, e)
        }), siteProgressInit()
    }

    function loadSiteProgressData(e) {
        let t = "";
        for (var a = e; a < e + 12; a++) {
            var i = siteProgress[a];
            t = t + '<li data-id="' + i.proj_id + '">    <a href="/' + i.slug +
                '#site-progress" class="site-progress-item" data-progress="80">        <div class="box-card">            <figure class="site-progress-bg">                <img class="lazyload" src="' +
                GLOBAL_lazyload_png + '" data-src="' + i.image + '" alt="" width="210" height="310">', parseFloat(i
                    .percent) > 0 && (t = t + '                <span class="sp-percent-value" style="height:' + i
                    .percent + '%;"></span>                <span class="sp-percentage">' + i.percent + "%</span>"), t =
                t + '            </figure>            <label for=""> ' + i.name + " <span>" + i.city +
                '</span></label>            <p class="update-date">' + i.date + "</p>        </div>    </a></li>"
        }
        return siteProgressPage += 12, t
    }

    function filterSiteProgress(e, t) {
        let a = $("#site-progress-list");
        a.empty(), a.off(), Object.keys(e).forEach(function(i) {
            let s = e[i],
                r = '<li data-id="' + s.proj_id + '">    <a href="/' + s.slug +
                '#site-progress" class="site-progress-item" data-progress="80">        <div class="box-card">            <figure class="site-progress-bg">                <img class="lazyload" src="' +
                GLOBAL_lazyload_png + '" data-src="' + s.image + '" alt="" width="210" height="310">';
            parseFloat(s.percent) > 0 && (r = r +
                    '                <span class="sp-percent-value" style="height:' + s.percent +
                    '%;"></span>                <span class="sp-percentage">' + s.percent + "%</span>"), r = r +
                '            </figure>            <label for=""> ' + s.name + " <span>" + s.city +
                '</span></label>            <p class="update-date">' + s.date +
                "</p>        </div>    </a></li>", s.proj_id == t && a.append(r)
        }), siteProgressInit()
    }

    function getRecommended(e, t) {
        $(".banner").addClass("banner-loading");
        var a = new Date,
            i = a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds();
        $.ajax({
            url: GLOBAL_frontend_home_rules_get,
            type: "POST",
            data: {
                lat: e,
                longi: t,
                timeOfDay: i
            },
            success: function(e) {
                populateDynamicBanner(e), populateRecommendedProperties(e.recommended),
                    initializeWindowEvent()
            }
        })
    }

    function populateDynamicBanner(e) {
        $("#dynamic-banner-souce-large"), $("#dynamic-banner-souce-medium");
        var t = $("#dynamic-banner-img"),
            a = $("#dynamic-banner-headline"),
            i = $("#dynamic-banner-subHeadLine"),
            s = $("#dynamic-banner-cta"),
            r = e.featured,
            o = r.image.replace(/\s/g, "%20"),
            n = r.image_medium.replace(/\s/g, "%20"),
            l = new Image,
            c = new Image;
        r.logo, new Image, a.text(e.headline), i.text(e.subheadline), t.css({
            opacity: 0
        }), $(window).width() > 1023 ? ($(l).on("load", function() {
            o = this.src
        }), t.attr("src", o)) : ($(c).on("load", function() {
            n = this.src
        }), t.attr("src", n)), t.css({
            opacity: 1
        }), console.log("test me"), $(".banner").removeClass("banner-loading"), e.isDefault ? (s.prop("href", e
            .ctaLink), s.text(e.ctaAction)) : (s.prop("href", r.slug), s.text("Visit " + r.name))
    }

    function populateRecommendedProperties(e) {
        let t = $("#recommended-properties");
        t.empty(), $recommendedCarousel.trigger("destroy.owl.carousel"), Object.keys(e).forEach(function(a, i) {
            let s = e[a];
            var r = "coming-soon",
                o = "cs";
            1 === s.status ? (r = "new", o = "new") : 2 === s.status ? (r = "RFO", o = "rfo") : 3 === s
                .status && (r = "under-construction", o = "uc");
            let n = '<li class="" data-animation="fadeInUp" data-delay="600"> <a href="/' + s.slug +
                '">    <div class="property-item box-card">        <figure class="property-img">                <img class="lazyload" src="' +
                GLOBAL_lazyload_png + '" data-src="' + s.image +
                '" alt="" width="380" height="215"><span class="property-status circle-white"><span class="icon-home ' +
                o + " icon-" + r +
                '"></span></span>        </figure>        <div class="content">            <h3>' + s.name +
                "</h3>            <p>" + s.city + '</p>            <p class="property-type">';
            var l = Number(s.price_range[0].min_price),
                c = Number(s.price_range[0].max_price),
                p = '<span data-value="' + l + '" class="currency-convert">' + l +
                '</span> - <span data-value="' + c + '" class="currency-convert">' + c + "</span>";
            0 == s.is_unit_activated ? (p = "<span>NOT YET AVAILABLE</span>", n +=
                    '<span class="box-type">TBA</span>') : s.unit_types.forEach(function(e) {
                    var t = "not-available";
                    e.available > 0 && (t = ""), n = n + '<span class="box-type ' + t + '">' + e.unit_type +
                        "</span>"
                }), n = n + '           </p>            <p class="price">' + p +
                "</p>        </div>    </div></a></li>", i <= 2 && t.append(n), $recommendedCarousel.trigger(
                    "refresh.owl.carousel"), convertCurrencies()
        })
    }

    function getTimeline() {
        $.ajax({
            url: GLOBAL_frontend_home_site_timeline_get,
            type: "GET",
            processData: !1,
            success: function(e) {
                populateTimeline(e)
            }
        })
    }

    function populateTimeline(e) {
        var t = $("#timeline-wrapper"),
            a = $("#timeline-year-ul"),
            i = $("#timeline-year-select");
        t.empty();
        var s = [],
            r = [];
        Object.keys(e).forEach(function(t) {
            let a = e[t];
            s.push(a)
        });
        var o = s.reduce(function(e, t) {
            var a = t.launch_date.date,
                i = new Date(a.replace(" ", "T")).getFullYear() + " ";
            return e[i] = e[i] || [], e[i].push(t), e
        }, {});
        Object.keys(o).forEach(function(e) {
            r.push(e), a.append('<li><a href="#" data-year="' + parseInt(e) + '"><span>' + e +
                "</span></a></li>"), i.append("<option value=select-" + parseInt(e) + ">" + parseInt(e) +
                "</option>"), o[e].forEach(function(a, i) {
                var s = a.launch_date.date,
                    r = new Date(s.replace(" ", "T")),
                    n = "coming-soon",
                    l = "cs";
                1 === a.status ? (n = "new", l = "new") : 2 === a.status ? (n = "RFO", l = "rfo") :
                    3 === a.status && (n = "under-construction", l = "uc");
                var c = '<div class="item"';
                c = (c = o[e].length - 1 === i ? c + 'data-year="' + r.getFullYear() +
                        '"data-year-mobile="select-' + r.getFullYear() + '"' : c +
                        'data-year=""data-year-mobile="select-' + r.getFullYear() + '"') +
                    ' >                                    <a href="/' + a.slug +
                    '">                            <div class="property-item box-card">                                <figure class="property-img">                                        <img class="lazyload" src="' +
                    GLOBAL_lazyload_png + '" data-src="' + a.logo +
                    '" alt="" width:265" height="185">                                    <span class="property-status circle-white">                                        <span class="icon-home ' +
                    l + " icon-" + n +
                    '"></span>NaN                                </figure>                                <div class="content">                                    <h3>' +
                    a.name + " </h3>                                    <p>" + ["January", "February",
                        "March", "April", "May", "June", "July", "August", "September", "October",
                        "November", "December",
                    ][r.getMonth()] + " " + r.getFullYear() +
                    "</p>                                    <p>" + a.city +
                    "</p>                                </div>                            </div>                                </a>                        </div>",
                    t.append(c)
            })
        }), a.find("li:first-child").addClass("active"), initTimeLine()
    }

    function getUnits() {
        $.get(GLOBAL_frontend_properties_unit_types).done(function(e) {
            var t = $("#header-search-unit-type");
            Object.keys(e).forEach(function(a) {
                var i = e[a],
                    s = '<option id="type-' + i.type + '"  value="' + i.type + '" data-name="' + i
                    .unit_type + '">' + i.unit_type + "</option>";
                t.append(s)
            })
        }).fail(function() {
            alert("error")
        })
    }

    function initializeWindowEvent() {
        var e = $(".property-list-carousel").not("#sidebar-property-list");
        767 >= $(window).width() ? (e.owlCarousel({
            center: !1,
            loop: !1,
            margin: 30,
            nav: !0,
            smartSpeed: 700,
            navText: ["<span class='icon-left-arrow'></span>", "<span class='icon-right-arrow'></span>", ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                767: {
                    items: 2
                }
            }
        }), e.trigger("refresh.owl.carousel")) : e.trigger("destroy.owl.carousel")
    }
    $(window).on("resize", function() {
        initializeWindowEvent()
    }), $(document).ready(function() {
        initializeButton(), $('.filter-search-options input[type="radio"]').click(function() {
            var e = $('input[name="contact-inquiry"]:checked').val();
            if ($('input[name="as-radio"]:checked').val(), "lease" == e) {
                $('.ad-filter-search-options input[type="radio]').prop("checked", !1), $(
                        '.filter-search-options input[type="radio"]').prop("checked", !1), $(
                        '.ad-filter-search-options input[value="lease"]').prop("checked", !0), $(this)
                    .prop("checked", !0), $('[data-search-option="buy"]').css({
                        display: "none"
                    }), $('[data-search-option="lease"]').css({
                        display: "inline-block"
                    }), $('.select-pure__option[data-value="6"]').css({
                        display: "none"
                    }), $('.select-pure__option[data-value="7"]').css({
                        display: "none"
                    }), $('.select-pure__option[data-value="8"]').css({
                        display: "none"
                    });
                var t = document.getElementById("noUiSlider-budget"),
                    a = document.getElementById("budget-min-price-label"),
                    i = document.getElementById("budget-max-price-label");
                noUiSlider.create(t, {
                    start: [5, 90],
                    connect: !0,
                    format: wNumb({
                        decimals: 0
                    }),
                    range: {
                        min: 5,
                        max: 90
                    }
                }), t.noUiSlider.on("update", function(e, t) {
                    var s = e[t];
                    t ? 0 == s ? $(i).html(Math.floor(s) + 1) : $(i).html(Math.floor(s)) : 0 ==
                        s ? $(a).html(Math.floor(s) + 1) : $(a).html(Math.floor(s))
                })
            } else $('.ad-filter-search-options input[type="radio]').prop("checked", !1), $(
                '.filter-search-options input[type="radio"]').prop("checked", !1), $(
                '.ad-filter-search-options input[value="buy"]').prop("checked", !0), $(this).prop(
                "checked", !0), $('[data-search-option="lease"]').css({
                display: "none"
            }), $('[data-search-option="buy"]').css({
                display: "inline-block"
            }), $('.select-pure__option[data-value="6"]').css({
                display: "block"
            }), $('.select-pure__option[data-value="7"]').css({
                display: "block"
            }), $('.select-pure__option[data-value="8"]').css({
                display: "block"
            })
        }), $('.ad-filter-search-options input[type="radio"]').click(function() {
            "lease" == $('input[name="as-radio"]:checked').val() ? ($(
                    '.ad-filter-search-options input[type="radio]').prop("checked", !1), $(
                    '.filter-search-options input[type="radio"]').prop("checked", !1), $(
                    '.filter-search-options input[value="lease"]').prop("checked", !0), $(this)
                .prop("checked", !0), $('[data-search-option="buy"]').css({
                    display: "none"
                }), $('[data-search-option="lease"]').css({
                    display: "inline-block"
                })) : ($('.ad-filter-search-options input[type="radio]').prop("checked", !1), $(
                '.filter-search-options input[type="radio"]').prop("checked", !1), $(
                '.filter-search-options input[value="buy"]').prop("checked", !0), $(this).prop(
                "checked", !0), $('[data-search-option="lease"]').css({
                display: "none"
            }), $('[data-search-option="buy"]').css({
                display: "inline-block"
            }))
        })
    });
    var firedSiteproggres = !1,
        firedTimeline = !1;

    function initMap() {
        navigator.geolocation ? navigator.geolocation.getCurrentPosition(showMap, geoFail) : showMap(null)
    }

    function geoFail(e) {
        showMap(null)
    }

    function initializeButton() {
        $("#search-simple-button").click(function(e) {
            e.preventDefault();
            var t = currentLocation.lat,
                a = currentLocation.lng,
                i = $("#first-mil").text(),
                s = $("#second-mil").text(),
                r = $("#header-search-unit-type").val();
            "" === r && (r = "any");
            var o = $("#header-search-location-field").val();
            "" === o ? window.location = "/property-finder?search=simple&min=" + i + "&max=" + s + "&type=" +
                r + "&location=any" : window.location = "/property-finder?search=simple&lat=" + t + "&lng=" +
                a + "&min=" + i + "&max=" + s + "&type=" + r + "&address=" + o
        }), $("#advance-lease-button").click(function(e) {
            e.preventDefault();
            var t = $(".advance-unit-type-cb:checked"),
                a = $(".advance-furnish-type-cb:checked"),
                i = [];
            t.each(function(e, t) {
                i.push(t.value)
            });
            var s = [];
            a.each(function(e, t) {
                s.push(t.value)
            });
            var r = currentLocation.lat,
                o = currentLocation.lng,
                n = $("#budget-min-price-label").text(),
                l = $("#budget-max-price-label").text(),
                c = $("#advance-search-location").val();
            $(this).html("Searching...").css({
                    "pointer-event": "none"
                }), "" === c ? window.location = "https://leasing.dmcihomes.com/units-finder?furnish=" + s +
                "&min=" + n + "&max=" + l + "&type=" + i + "&location=any&&isHome=true" : window.location =
                "https://leasing.dmcihomes.com/units-finder?&lat=" + r + "&lng=" + o + "&min=" + n + "&max=" +
                l + "&type=" + i + "&address=" + c + "&furnish=" + s + "&isHome=true"
        }), $("#search-lease-simple-button").click(function(e) {
            e.preventDefault();
            var t = currentLocation.lat,
                a = currentLocation.lng,
                i = $("#budget-min-price-label").text(),
                s = $("#budget-max-price-label").text(),
                r = $("#header-search-unit-type").val(),
                o = "BARE UNIT,SEMI-FURNISHED,FULLY FURNISHED";
            $(this).html("Searching...").css({
                "pointer-event": "none"
            }), "" === r && (r = "1,2,3,4,5");
            var n = $("#header-search-location-field").val();
            "" === n ? window.location = "https://leasing.dmcihomes.com/units-finder?furnish=" + o + "&min=" +
                i + "&max=" + s + "&type=" + r + "&location=any&&isHome=true" : window.location =
                "https://leasing.dmcihomes.com/units-finder?&lat=" + t + "&lng=" + a + "&min=" + i + "&max=" +
                s + "&type=" + r + "&address=" + n + "&furnish=" + o + "&isHome=true"
        }), $(".advance-filter-link").click(function(e) {
            e.preventDefault(), $(".search-mobile").addClass("activated")
        })
    }
    $(window).on("scroll", function() {
        var e = window.innerHeight ? window.innerHeight : $(window).height(),
            t = $(window).scrollTop(),
            a = $(".site-progress-wrap").offset(),
            i = $("#timeline-main").offset(),
            s = a.top - e,
            r = i.top - e;
        t >= s && !1 == firedSiteproggres && (firedSiteproggres = !0, getSiteProgress()), t >= r && !1 ==
            firedTimeline && (firedTimeline = !0, getTimeline())
    }), $(".map-pin-trigger").one("click", function() {
        var e = document.createElement("script");
        e.src =
            "https://maps.googleapis.com/maps/api/js?key=AIzaSyAUjRJ94fK4D3OWyO1Sp40V4t3v6wwbKI4&libraries=places",
            e.id = "googlemaps", e.setAttribute("async", "true"), document.body.appendChild(e), $(".loader-pin")
            .addClass("loading"), setTimeout(function() {
                initMap(), $(".loader-pin").removeClass("loading")
            }, 2e3)
    });
</script>

<script async src="animation.js"></script>

<script async type="text/javascript">
    function detectUserInteraction() {
        document.getElementsByTagName("html")[0].classList.add("js-user-action"),
            "keydown mouseover touchmove touchstart wheel".split(" ").forEach(function(a) {
                window.removeEventListener(a, detectUserInteraction, !1)
            })
    }
    window.mobileCheck = function() {
        var a;
        let b = !1;
        return a = navigator.userAgent || navigator.vendor || window.opera, (
            /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i
            .test(a) ||
            /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
            .test(a.substr(0, 4))) && (b = !0), b
    }, window.mobileCheck() ? "keydown mouseover touchmove touchstart wheel".split(" ").forEach(function(a) {
        window.addEventListener(a, detectUserInteraction, !1)
    }) : document.getElementsByTagName("html")[0].classList.add("js-user-action")
</script>

<script async>
    var GLOBAL_lazyload_png = "/frontend/images/page_template/lazyload.png";
    var GLOBAL_frontend_home_rules_get = "/rules/get";
    var GLOBAL_frontend_home_site_progress_get = "/site_progress/get";
    var GLOBAL_frontend_home_site_timeline_get = "/timeline/get";
    var GLOBAL_frontend_properties_unit_types = "/properties/unit/types";
    var GLOBAL_frontend_whats_latest_news_json = "/whats-new/json/latest-news";

    "use strict";
    var owlHeritage = $(".timeline-wrapper"),
        siteProgressOption = {
            loop: !1,
            dots: !1,
            items: 3,
            nav: !0,
            rtl: !0,
            margin: 5,
            smartSpeed: 700,
            navText: ["<span class='icon-right-arrow'></span>", "<span class='icon-left-arrow'></span>"],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                767: {
                    items: 5
                },
                1400: {
                    items: 5
                },
                1600: {
                    items: 7
                }
            }
        },
        siteProgress = [],
        siteProgressPropertyIds = [],
        siteProgressPage = 0,
        $recommendedCarousel = $(".property-list-carousel").not("#sidebar-property-list");

    function getLocation() {
        navigator.geolocation || getRecommended("", "")
    }

    function siteProgressInit() {
        var a = $("#site-progress-list");
        a.owlCarousel("destroy"), a.owlCarousel(siteProgressOption)
    }

    function initializeNoUiHome() {
        var a = document.getElementById("noUiSlider"),
            b = document.getElementById("first-mil"),
            c = document.getElementById("second-mil");
        document.getElementById("qs-price-mobile-min"), document.getElementById("qs-price-mobile-max"), noUiSlider
            .create(a, {
                start: [0, 40],
                connect: !0,
                format: wNumb({
                    decimals: 0
                }),
                range: {
                    min: 0,
                    max: 20
                }
            }), a.noUiSlider.on("update", function(e, d) {
                var a = e[d];
                d ? 0 == a ? $(c).html(Math.floor(a) + 1) : $(c).html(Math.floor(a)) : 0 == a ? $(b).html(Math
                    .floor(a) + 1) : $(b).html(Math.floor(a))
            }), new SelectPure(".bfb-autocomplete", {
                options: [{
                    label: "Lot",
                    value: "8"
                }, {
                    label: "House & Lot",
                    value: "7"
                }, {
                    label: "Loft",
                    value: "6"
                }, {
                    label: "4 Bedroom",
                    value: "5"
                }, {
                    label: "3 Bedroom",
                    value: "4"
                }, {
                    label: "2 Bedroom",
                    value: "3"
                }, {
                    label: "1 Bedroom",
                    value: "2"
                }, {
                    label: "Studio",
                    value: "1"
                }],
                value: [],
                multiple: !0,
                autocomplete: !1,
                icon: "fa fa-times",
                onChange: function(a) {
                    console.log(a.join()), $("#header-search-unit-type").val(a.join()), console.log(a), $(
                            ".bfb-autocomplete .select-pure__label").children(".select-pure__selected-label")
                        .length > 0 ? $(".bfb-autocomplete").addClass("removePlaceholder") : $(
                            ".bfb-autocomplete").removeClass("removePlaceholder")
                }
            })
    }

    function initTimeLine() {
        $(".timeline-year li a").click(function(b) {
            b.preventDefault(), $(this).attr(""), $(this).closest("li").index();
            var c = $(this).data("year"),
                d = $(".timeline-carousel").find(".item[data-year=" + c + "]")[0],
                e = $(".timeline-carousel").find(d).parent(".owl-item").index();
            a.owlCarousel().trigger("to.owl.carousel", [e, 300]), $(".timeline-year li").removeClass("active"),
                $(".timeline-year li").removeClass("medium-two"), $(".timeline-year li").removeClass(
                    "large-one"), $(this).closest("li").addClass("active"), $(this).closest("li").nextAll(
                    ":lt(2)").addClass("medium-two"), $(this).closest("li").nextAll(":lt(1)").addClass(
                    "large-one"), $(this).closest("li").prevAll(":lt(1)").addClass("large-one"), $(this)
                .closest("li").prevAll(":lt(2)").addClass("medium-two")
        }), $("#timeline-year-select").change(function() {
            var a = $(this).val();
            $("#timeline-mobile-carousel").trigger("destroy.owl.carousel"), $("#timeline-mobile-carousel").html(
                ""), $(".timeline-carousel .item[data-year-mobile=" + a + "]").each(function() {
                var a = $(this).clone();
                $("#timeline-mobile-carousel").append(a)
            }), $("#timeline-mobile-carousel").owlCarousel(b), $("#timeline-mobile-carousel").trigger(
                "refresh.owl.carousel")
        });
        var b = {
            loop: !1,
            dots: !1,
            items: 4,
            nav: !0,
            center: !1,
            margin: 5,
            smartSpeed: 700,
            rtl: !0,
            navText: ["<span class='icon-right-arrow'></span>", "<span class='icon-left-arrow'></span>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                767: {
                    items: 1
                }
            }
        };
        $(".timeline-carousel").owlCarousel(b);
        var a = $(".timeline-carousel");
        a.on("changed.owl.carousel", function(b) {
            var d = b.target;
            b.item.count;
            var e = b.item.index,
                c = $(d).find(".owl-item").eq(e).find(".item").attr("data-year");
            if ("" != c) {
                var a = $(".timeline-year").find("a[data-year=" + c + "]").closest("li");
                $(".timeline-year li").removeClass("active"), $(".timeline-year li").removeClass("medium-two"),
                    $(".timeline-year li").removeClass("large-one"), a.addClass("active"), a.nextAll(":lt(2)")
                    .addClass("medium-two"), a.nextAll(":lt(1)").addClass("large-one"), a.prevAll(":lt(1)")
                    .addClass("large-one"), a.prevAll(":lt(2)").addClass("medium-two")
            }
        }), a.trigger("to.owl.carousel", [3, 0]), 768 > $(window).width() && $("#timeline-year-select").val($(
            "#timeline-year-select option:first").val()).trigger("change")
    }

    function getSiteProgress() {
        $.ajax({
            url: GLOBAL_frontend_home_site_progress_get,
            type: "GET",
            processData: !1,
            success: function(b) {
                populateSiteProgress(b);
                var a = $("#site-progress-property-select").find("option");
                a.sort(function(a, b) {
                        return $(a).text() > $(b).text() ? 1 : -1
                    }), $("#site-progress-property-select").html("").append(
                        '<option value="all">View all properties</option>'), $(
                        "#site-progress-property-select").append(a), $("#site-progress-property-select")
                    .val("all")
            }
        })
    }

    function populateSiteProgress(b) {
        siteProgressPage = 0;
        let a = $("#site-progress-list");
        a.empty(), siteProgress = b, Object.keys(b).forEach(function(c) {
            let a = b[c];
            siteProgressPropertyIds.includes(a.proj_id) || (siteProgressPropertyIds.push(a.proj_id), $(
                "#site-progress-property-select").append("<option value=" + a.proj_id + ">" + a.name +
                "</option>"))
        }), a.append(loadSiteProgressData(siteProgressPage)), a.on("translated.owl.carousel", function(b) {
            b.target, b.item.count, b.item.index;
            var c = b.item.count - 5;
            if (b.item.index === c) {
                var d = loadSiteProgressData(siteProgressPage);
                a.trigger("add.owl.carousel", [d]).trigger("destroy.owl.carousel"), a.owlCarousel(
                    siteProgressOption), a.trigger("to.owl.carousel", [c, 0])
            }
        }), $("#site-progress-property-select").change(function() {
            var a = $("#site-progress-property-select").val();
            "all" === a ? populateSiteProgress(siteProgress) : filterSiteProgress(siteProgress, a)
        }), siteProgressInit()
    }

    function loadSiteProgressData(d) {
        let b = "";
        for (var c = d; c < d + 12; c++) {
            var a = siteProgress[c];
            b = b + '<li data-id="' + a.proj_id + '">    <a href="/' + a.slug +
                '#site-progress" class="site-progress-item" data-progress="80">        <div class="box-card">            <figure class="site-progress-bg">                <img class="lazyload" src="' +
                GLOBAL_lazyload_png + '" data-src="' + a.image + '" alt="">', parseFloat(a.percent) > 0 && (b = b +
                    '                <span class="sp-percent-value" style="height:' + a.percent +
                    '%;"></span>                <span class="sp-percentage">' + a.percent + "%</span>"), b = b +
                '            </figure>            <label for=""> ' + a.name + " <span>" + a.city +
                '</span></label>            <p class="update-date">' + a.date + "</p>        </div>    </a></li>"
        }
        return siteProgressPage += 12, b
    }

    function filterSiteProgress(b, c) {
        let a = $("#site-progress-list");
        a.empty(), a.off(), Object.keys(b).forEach(function(f) {
            let d = b[f],
                e = '<li data-id="' + d.proj_id + '">    <a href="/' + d.slug +
                '#site-progress" class="site-progress-item" data-progress="80">        <div class="box-card">            <figure class="site-progress-bg">                <img class="lazyload" src="' +
                GLOBAL_lazyload_png + '" data-src="' + d.image + '" alt="">';
            parseFloat(d.percent) > 0 && (e = e +
                    '                <span class="sp-percent-value" style="height:' + d.percent +
                    '%;"></span>                <span class="sp-percentage">' + d.percent + "%</span>"), e = e +
                '            </figure>            <label for=""> ' + d.name + " <span>" + d.city +
                '</span></label>            <p class="update-date">' + d.date +
                "</p>        </div>    </a></li>", d.proj_id == c && a.append(e)
        }), siteProgressInit()
    }

    function getRecommended(b, c) {
        $(".banner").addClass("banner-loading");
        var a = new Date,
            d = a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds();
        $.ajax({
            url: GLOBAL_frontend_home_rules_get,
            type: "POST",
            data: {
                lat: b,
                longi: c,
                timeOfDay: d
            },
            success: function(a) {
                populateDynamicBanner(a), populateRecommendedProperties(a.recommended),
                    initializeWindowEvent()
            }
        })
    }

    function populateDynamicBanner(a) {
        $("#dynamic-banner-souce-large"), $("#dynamic-banner-souce-medium");
        var c = $("#dynamic-banner-img"),
            e = $("#dynamic-banner-headline"),
            f = $("#dynamic-banner-subHeadLine"),
            d = $("#dynamic-banner-cta"),
            b = a.featured,
            g = b.image.replace(/\s/g, "%20"),
            h = b.image_medium.replace(/\s/g, "%20"),
            i = new Image,
            j = new Image;
        b.logo, new Image, e.text(a.headline), f.text(a.subheadline), c.css({
            opacity: 0
        }), $(window).width() > 1023 ? ($(i).on("load", function() {
            g = this.src
        }), c.attr("src", g)) : ($(j).on("load", function() {
            h = this.src
        }), c.attr("src", h)), c.css({
            opacity: 1
        }), console.log("test me"), $(".banner").removeClass("banner-loading"), a.isDefault ? (d.prop("href", a
            .ctaLink), d.text(a.ctaAction)) : (d.prop("href", b.slug), d.text("Visit " + b.name))
    }

    function populateRecommendedProperties(a) {
        let b = $("#recommended-properties");
        b.empty(), $recommendedCarousel.trigger("destroy.owl.carousel"), Object.keys(a).forEach(function(j, k) {
            let c = a[j];
            var d = "coming-soon",
                e = "cs";
            1 === c.status ? (d = "new", e = "new") : 2 === c.status ? (d = "RFO", e = "rfo") : 3 === c
                .status && (d = "under-construction", e = "uc");
            let f = '<li class="" data-animation="fadeInUp" data-delay="600"> <a href="/' + c.slug +
                '">    <div class="property-item box-card">        <figure class="property-img">                <img class="lazyload" src="' +
                GLOBAL_lazyload_png + '" data-src="' + c.image +
                '" alt=""><span class="property-status circle-white"><span class="icon-home ' + e + " icon-" +
                d + '"></span></span>        </figure>        <div class="content">            <h3>' + c.name +
                "</h3>            <p>" + c.city + '</p>            <p class="property-type">';
            var g = Number(c.price_range[0].min_price),
                h = Number(c.price_range[0].max_price),
                i = '<span data-value="' + g + '" class="currency-convert">' + g +
                '</span> - <span data-value="' + h + '" class="currency-convert">' + h + "</span>";
            0 == c.is_unit_activated ? (i = "<span>NOT YET AVAILABLE</span>", f +=
                    '<span class="box-type">TBA</span>') : c.unit_types.forEach(function(a) {
                    var b = "not-available";
                    a.available > 0 && (b = ""), f = f + '<span class="box-type ' + b + '">' + a.unit_type +
                        "</span>"
                }), f = f + '           </p>            <p class="price">' + i +
                "</p>        </div>    </div></a></li>", k <= 2 && b.append(f), $recommendedCarousel.trigger(
                    "refresh.owl.carousel"), convertCurrencies()
        })
    }

    function getTimeline() {
        $.ajax({
            url: GLOBAL_frontend_home_site_timeline_get,
            type: "GET",
            processData: !1,
            success: function(a) {
                populateTimeline(a)
            }
        })
    }

    function populateTimeline(a) {
        var b = $("#timeline-wrapper"),
            c = $("#timeline-year-ul"),
            f = $("#timeline-year-select");
        b.empty();
        var d = [],
            g = [];
        Object.keys(a).forEach(function(b) {
            let c = a[b];
            d.push(c)
        });
        var e = d.reduce(function(a, c) {
            var d = c.launch_date.date,
                b = new Date(d.replace(" ", "T")).getFullYear() + " ";
            return a[b] = a[b] || [], a[b].push(c), a
        }, {});
        Object.keys(e).forEach(function(a) {
            g.push(a), c.append('<li><a href="#" data-year="' + parseInt(a) + '"><span>' + a +
                "</span></a></li>"), f.append("<option value=select-" + parseInt(a) + ">" + parseInt(a) +
                "</option>"), e[a].forEach(function(c, i) {
                var j = c.launch_date.date,
                    d = new Date(j.replace(" ", "T")),
                    g = "coming-soon",
                    h = "cs";
                1 === c.status ? (g = "new", h = "new") : 2 === c.status ? (g = "RFO", h = "rfo") :
                    3 === c.status && (g = "under-construction", h = "uc");
                var f = '<div class="item"';
                f = (f = e[a].length - 1 === i ? f + 'data-year="' + d.getFullYear() +
                        '"data-year-mobile="select-' + d.getFullYear() + '"' : f +
                        'data-year=""data-year-mobile="select-' + d.getFullYear() + '"') +
                    ' >                                    <a href="/' + c.slug +
                    '">                            <div class="property-item box-card">                                <figure class="property-img">                                        <img class="lazyload" src="' +
                    GLOBAL_lazyload_png + '" data-src="' + c.logo +
                    '" alt="">                                    <span class="property-status circle-white">                                        <span class="icon-home ' +
                    h + " icon-" + g +
                    '"></span>NaN                                </figure>                                <div class="content">                                    <h3>' +
                    c.name + " </h3>                                    <p>" + ["January", "February",
                        "March", "April", "May", "June", "July", "August", "September", "October",
                        "November", "December"
                    ][d.getMonth()] + " " + d.getFullYear() +
                    "</p>                                    <p>" + c.city +
                    "</p>                                </div>                            </div>                                </a>                        </div>",
                    b.append(f)
            })
        }), c.find("li:first-child").addClass("active"), initTimeLine()
    }

    function getUnits() {
        $.get(GLOBAL_frontend_properties_unit_types).done(function(a) {
            var b = $("#header-search-unit-type");
            Object.keys(a).forEach(function(d) {
                var c = a[d],
                    e = '<option id="type-' + c.type + '"  value="' + c.type + '" data-name="' + c
                    .unit_type + '">' + c.unit_type + "</option>";
                b.append(e)
            })
        }).fail(function() {
            alert("error")
        })
    }

    function initializeWindowEvent() {
        var a = $(".property-list-carousel").not("#sidebar-property-list");
        767 >= $(window).width() ? (a.owlCarousel({
            center: !1,
            loop: !1,
            margin: 30,
            nav: !0,
            smartSpeed: 700,
            navText: ["<span class='icon-left-arrow'></span>", "<span class='icon-right-arrow'></span>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                767: {
                    items: 2
                }
            }
        }), a.trigger("refresh.owl.carousel")) : a.trigger("destroy.owl.carousel")
    }
    $(window).on("resize", function() {
        initializeWindowEvent()
    }), $(document).ready(function() {
        initializeButton(), $('.filter-search-options input[type="radio"]').click(function() {
            var b = $('input[name="contact-inquiry"]:checked').val();
            if ($('input[name="as-radio"]:checked').val(), "lease" == b) {
                $('.ad-filter-search-options input[type="radio]').prop("checked", !1), $(
                        '.filter-search-options input[type="radio"]').prop("checked", !1), $(
                        '.ad-filter-search-options input[value="lease"]').prop("checked", !0), $(this)
                    .prop("checked", !0), $('[data-search-option="buy"]').css({
                        display: "none"
                    }), $('[data-search-option="lease"]').css({
                        display: "inline-block"
                    }), $('.select-pure__option[data-value="6"]').css({
                        display: "none"
                    }), $('.select-pure__option[data-value="7"]').css({
                        display: "none"
                    }), $('.select-pure__option[data-value="8"]').css({
                        display: "none"
                    });
                var a = document.getElementById("noUiSlider-budget"),
                    c = document.getElementById("budget-min-price-label"),
                    d = document.getElementById("budget-max-price-label");
                noUiSlider.create(a, {
                    start: [5, 90],
                    connect: !0,
                    format: wNumb({
                        decimals: 0
                    }),
                    range: {
                        min: 5,
                        max: 90
                    }
                }), a.noUiSlider.on("update", function(e, b) {
                    var a = e[b];
                    b ? 0 == a ? $(d).html(Math.floor(a) + 1) : $(d).html(Math.floor(a)) : 0 ==
                        a ? $(c).html(Math.floor(a) + 1) : $(c).html(Math.floor(a))
                })
            } else $('.ad-filter-search-options input[type="radio]').prop("checked", !1), $(
                '.filter-search-options input[type="radio"]').prop("checked", !1), $(
                '.ad-filter-search-options input[value="buy"]').prop("checked", !0), $(this).prop(
                "checked", !0), $('[data-search-option="lease"]').css({
                display: "none"
            }), $('[data-search-option="buy"]').css({
                display: "inline-block"
            }), $('.select-pure__option[data-value="6"]').css({
                display: "block"
            }), $('.select-pure__option[data-value="7"]').css({
                display: "block"
            }), $('.select-pure__option[data-value="8"]').css({
                display: "block"
            })
        }), $('.ad-filter-search-options input[type="radio"]').click(function() {
            "lease" == $('input[name="as-radio"]:checked').val() ? ($(
                    '.ad-filter-search-options input[type="radio]').prop("checked", !1), $(
                    '.filter-search-options input[type="radio"]').prop("checked", !1), $(
                    '.filter-search-options input[value="lease"]').prop("checked", !0), $(this)
                .prop("checked", !0), $('[data-search-option="buy"]').css({
                    display: "none"
                }), $('[data-search-option="lease"]').css({
                    display: "inline-block"
                })) : ($('.ad-filter-search-options input[type="radio]').prop("checked", !1), $(
                '.filter-search-options input[type="radio"]').prop("checked", !1), $(
                '.filter-search-options input[value="buy"]').prop("checked", !0), $(this).prop(
                "checked", !0), $('[data-search-option="lease"]').css({
                display: "none"
            }), $('[data-search-option="buy"]').css({
                display: "inline-block"
            }))
        })
    });
    var firedSiteproggres = !1,
        firedTimeline = !1;

    function initMap() {
        navigator.geolocation ? navigator.geolocation.getCurrentPosition(showMap, geoFail) : showMap(null)
    }

    function geoFail(a) {
        showMap(null)
    }

    function initializeButton() {
        $("#search-simple-button").click(function(e) {
            e.preventDefault();
            var f = currentLocation.lat,
                g = currentLocation.lng,
                b = $("#first-mil").text(),
                c = $("#second-mil").text(),
                a = $("#header-search-unit-type").val();
            "" === a && (a = "any");
            var d = $("#header-search-location-field").val();
            "" === d ? window.location = "/property-finder?search=simple&min=" + b + "&max=" + c + "&type=" +
                a + "&location=any" : window.location = "/property-finder?search=simple&lat=" + f + "&lng=" +
                g + "&min=" + b + "&max=" + c + "&type=" + a + "&address=" + d
        }), $("#advance-lease-button").click(function(f) {
            f.preventDefault();
            var g = $(".advance-unit-type-cb:checked"),
                h = $(".advance-furnish-type-cb:checked"),
                a = [];
            g.each(function(c, b) {
                a.push(b.value)
            });
            var b = [];
            h.each(function(c, a) {
                b.push(a.value)
            });
            var i = currentLocation.lat,
                j = currentLocation.lng,
                c = $("#budget-min-price-label").text(),
                d = $("#budget-max-price-label").text(),
                e = $("#advance-search-location").val();
            $(this).html("Searching...").css({
                    "pointer-event": "none"
                }), "" === e ? window.location = "https://leasing.dmcihomes.com/units-finder?furnish=" + b +
                "&min=" + c + "&max=" + d + "&type=" + a + "&location=any&&isHome=true" : window.location =
                "https://leasing.dmcihomes.com/units-finder?&lat=" + i + "&lng=" + j + "&min=" + c + "&max=" +
                d + "&type=" + a + "&address=" + e + "&furnish=" + b + "&isHome=true"
        }), $("#search-lease-simple-button").click(function(f) {
            f.preventDefault();
            var g = currentLocation.lat,
                h = currentLocation.lng,
                b = $("#budget-min-price-label").text(),
                c = $("#budget-max-price-label").text(),
                a = $("#header-search-unit-type").val(),
                d = "BARE UNIT,SEMI-FURNISHED,FULLY FURNISHED";
            $(this).html("Searching...").css({
                "pointer-event": "none"
            }), "" === a && (a = "1,2,3,4,5");
            var e = $("#header-search-location-field").val();
            "" === e ? window.location = "https://leasing.dmcihomes.com/units-finder?furnish=" + d + "&min=" +
                b + "&max=" + c + "&type=" + a + "&location=any&&isHome=true" : window.location =
                "https://leasing.dmcihomes.com/units-finder?&lat=" + g + "&lng=" + h + "&min=" + b + "&max=" +
                c + "&type=" + a + "&address=" + e + "&furnish=" + d + "&isHome=true"
        }), $(".advance-filter-link").click(function(a) {
            a.preventDefault(), $(".search-mobile").addClass("activated")
        })
    }
    $(window).on("scroll", function() {
        var a = window.innerHeight ? window.innerHeight : $(window).height(),
            b = $(window).scrollTop(),
            c = $(".site-progress-wrap").offset(),
            d = $("#timeline-main").offset(),
            e = c.top - a,
            f = d.top - a;
        b >= e && !1 == firedSiteproggres && (firedSiteproggres = !0, getSiteProgress()), b >= f && !1 ==
            firedTimeline && (firedTimeline = !0, getTimeline())
    }), $(".map-pin-trigger").one("click", function() {
        var a = document.createElement("script");
        a.src =
            "https://maps.googleapis.com/maps/api/js?key=AIzaSyAUjRJ94fK4D3OWyO1Sp40V4t3v6wwbKI4&libraries=places",
            a.id = "googlemaps", a.setAttribute("async", "true"), document.body.appendChild(a), $(".loader-pin")
            .addClass("loading"), setTimeout(function() {
                initMap(), $(".loader-pin").removeClass("loading")
            }, 2e3)
    })
</script>

<script async>
    var GLOBAL_frontend_home_conversion_rate_json = "/conversion-rates/json";
    getCurrencies();

    function getCurrencies() {
        $.ajax({
            url: GLOBAL_frontend_home_conversion_rate_json,
            type: "GET",
            processData: !1,
            success: function(a) {
                localStorage.setItem("conversion", JSON.stringify(a))
            }
        }).then(function() {
            convertCurrencies()
        })
    }

    <
    script async = "" >
        'use strict';

    var newsPage = 1;
    var promoPage = 1;
    var eventPage = 1;
    var testimonialPage = 1;
    var siteProgressPage = 1;

    var siteProgress = [];
    var siteProgressPropertyIds = [];

    var siteProgressOption = {
        loop: false,
        dots: false,
        items: 3,
        nav: true,
        rtl: true,
        margin: 5,
        smartSpeed: 700,
        navText: ["<span class='icon-right-arrow'></span>", "<span class='icon-left-arrow'></span>"],
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            767: {
                items: 5
            },
            1400: {
                items: 5
            },
            1600: {
                items: 7
            }
        }
    };

    $('#top-nav').addClass('gray');

    $(document).ready(function() {
        //initGrid();
        initButtons();
        siteProgressInit();
        getSiteProgress();

    });

    function initButtons() {
        $('#show-more-news').click(function() {
            newsPage++;
            getNews();
        });

        $('#show-more-events').click(function() {
            console.log('triggered')
            eventPage++;
            getEvents();
        });

        $('#show-more-promo').click(function() {
            promoPage++;
            getPromos();
        });

        $('#show-more-testimonials').click(function() {
            testimonialPage++;
            getTestimonials();
        });
    }

    // frontend_home_site_progress_get
    function getSiteProgress() {

        $.ajax({
            url: "/site_progress/get",
            type: "GET",
            processData: false,
            success: function(data) {
                console.log(data);

                populateSiteProgress(data);

                var opts_list = $('#site-progress-property-select').find('option');
                opts_list.sort(function(a, b) {
                    return $(a).text() > $(b).text() ? 1 : -1;
                });
                $('#site-progress-property-select').html('').append(
                    '<option value="all">View all properties</option>');
                $('#site-progress-property-select').append(opts_list);
                $('#site-progress-property-select').val('all');

            }
        });
    }

    function populateSiteProgress(data) {

        siteProgressPage = 0;

        let wrapper = $('#site-progress-list');

        wrapper.empty();

        siteProgress = data;

        Object.keys(data).forEach(function(key) {
            let sp = data[key];

            if (!siteProgressPropertyIds.includes(sp.proj_id)) {
                siteProgressPropertyIds.push(sp.proj_id);
                $('#site-progress-property-select').append('<option value=' + sp.proj_id + '>' + sp.name +
                    '</option>');
            }
        });


        wrapper.append(loadSiteProgressData(siteProgressPage));

        wrapper.on('translated.owl.carousel', function(event) {

            console.log('translated');

            var element = event.target;
            var items = event.item.count;
            var item = event.item.index;

            var testIndex = event.item.count - 5;
            console.log(testIndex);
            console.log(event.item.index);

            if (event.item.index === testIndex) {
                var siteProgressItem = loadSiteProgressData(siteProgressPage);
                console.log(siteProgressItem);

                console.log('test');
                wrapper.trigger('add.owl.carousel', [siteProgressItem]).trigger('destroy.owl.carousel');
                wrapper.owlCarousel(siteProgressOption);
                wrapper.trigger('to.owl.carousel', [testIndex, 0]);
            }
        });


        $('#site-progress-property-select').change(function() {
            var filter = $('#site-progress-property-select').val();
            if (filter === "all") {
                populateSiteProgress(siteProgress);
            } else {
                filterSiteProgress(siteProgress, filter);
            }
        });

        siteProgressInit();

    }

    function loadSiteProgressData(index) {

        let append = '';
        for (var x = index; x < index + 12; x++) {
            var sp = siteProgress[x];

            append = append + '<li data-id="' + sp.proj_id + '">' +
                '    <a href="/' + sp.slug + '#site-progress" class="site-progress-item" data-progress="80">' +
                '        <div class="box-card">' +
                '            <figure class="site-progress-bg">' +
                '                <img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="' +
                sp['image'] + '" alt="" width="210" height="310">';


            if (parseFloat(sp['percent']) > 0) {
                append = append + '                <span class="sp-percent-value" style="height:' + sp['percent'] +
                    '%;"></span>' +
                    '                <span class="sp-percentage">' + sp['percent'] + '%</span>';
            }


            append = append + '            </figure>' +
                '            <label for=""> ' + sp['name'] + ' <span>' + sp['city'] + '</span></label>' +
                '            <p class="update-date">' + sp['date'] + '</p>' +
                '        </div>' +
                '    </a>' +
                '</li>';


        }

        siteProgressPage = siteProgressPage + 12;
        return append;

    }

    function filterSiteProgress(data, id) {


        let wrapper = $('#site-progress-list');

        wrapper.empty();

        wrapper.off();

        Object.keys(data).forEach(function(key) {


            let sp = data[key];


            let append = '<li data-id="' + sp.proj_id + '">' +
                '    <a href="/' + sp.slug + '#site-progress" class="site-progress-item" data-progress="80">' +
                '        <div class="box-card">' +
                '            <figure class="site-progress-bg">' +
                '                <img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="' +
                sp['image'] + '" alt="" width="210" height="310">';


            if (parseFloat(sp['percent']) > 0) {
                append = append + '                <span class="sp-percent-value" style="height:' + sp[
                        'percent'] + '%;"></span>' +
                    '                <span class="sp-percentage">' + sp['percent'] + '%</span>';
            }


            append = append + '            </figure>' +
                '            <label for=""> ' + sp['name'] + ' <span>' + sp['city'] + '</span></label>' +
                '            <p class="update-date">' + sp['date'] + '</p>' +
                '        </div>' +
                '    </a>' +
                '</li>';


            if (sp.proj_id == id) {
                wrapper.append(append);
            }

        });

        siteProgressInit();

    }


    // frontend_whats_new_latest_json
    function getNews() {
        $.ajax({
            url: "/whats-new/json/news?page=" + newsPage,
            type: "GET",
            processData: false,
            success: function(data) {
                populateNews(data);
            }
        });
    }

    function populateNews(data) {
        let wrapper = $('#news-wrapper');

        Object.keys(data).forEach(function(key, index) {

            let n = data[key];

            var addtionalClass = '';
            var featuredClass = 'article-min';

            if (index === 0) {
                if (newsPage === 1) {
                    if (n.img !== undefined && n.img !== '') {
                        addtionalClass = 'grid-item--width2';
                        featuredClass = 'featured-article';
                    }
                }
            }

            let append = '<div class="grid-item ' + addtionalClass + '" data-animation="fadeInUp">';
            if (n.img !== undefined && n.img !== '') {
                append = append +
                    '                <article class="article-item ' + featuredClass + '">' +
                    '                    <figure class="article-img ">' +
                    '                        <a href="/whats-new/news/' + n.slug + '" class="">' +
                    '                            <img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="/uploads/news/' +
                    n.img + '" alt="' + n.img + '" width="235" height="150">' +
                    '                        </a>' +
                    '                    </figure>';

            } else {
                append = append +
                    '                <article class="article-item ' + featuredClass + ' no-image" >';
            }

            append = append + '                    <div class="article-info">' +

                '                        <p class="tag">';

            if (n.property !== undefined) {
                append = append + '<a href="/' + n.property_url + '">' + n.property + '</a>';
            }

            if (n.csr === true) {
                append = append + '<a href="#">Kaakbay</a>';
            }


            append = append + '</p>' +
                '                        <h2 class="article-title"><a href="/whats-new/news/' + n.slug + '">' +
                n.title + '</a></h2>' +
                '                        <p class="date-published">' + n.date + '</p>' +
                ' <div class="clr"></div>';

            if (n.copy) {
                append = append + '<p>' + n.copy + '...</p>';
            }

            append = append +
                '                    </div>' +
                '                </article>';

            append = append + '</div>';

            var $append = $(append);
            wrapper.append($append);

            // wrapper.imagesLoaded( function() {
            //wrapper.packery( 'appended', $append );
            // });
        });


    }


    function getEvents() {

        $.ajax({
            url: "/whats-new/json/events?page=" + eventPage,
            type: "GET",
            processData: false,
            success: function(data) {
                populateEvents(data);
            }
        });
    }

    function populateEvents(data) {
        let wrapper = $('#events-wrapper');

        Object.keys(data).forEach(function(key, index) {

            let n = data[key];

            var addtionalClass = '';
            var featuredClass = 'article-min';

            if (index === 0) {
                if (eventPage === 1) {
                    if (n.img !== undefined && n.img !== '') {
                        addtionalClass = 'grid-item--width2';
                        featuredClass = 'featured-article';
                    }
                }
            }

            let append = '<div class="grid-item ' + addtionalClass + '" data-animation="fadeInUp">';
            if (n.img !== undefined && n.img !== '') {

                append = append +
                    '                <article class="article-item ' + featuredClass + '">' +
                    '                    <figure class="article-img ">' +
                    '                        <a href="/whats-new/events/' + n.slug + '" class="">' +
                    '                            <img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="/uploads/news/' +
                    n.img + '" alt="' + n.img + '" width="235" height="150">' +
                    '                        </a>' +
                    '                    </figure>';

            } else {
                append = append +
                    '                <article class="article-item ' + featuredClass + ' no-image" >';
            }

            append = append + '                    <div class="article-info">' +

                '                        <p class="tag">';

            if (n.property !== undefined) {
                append = append + '<a href="/' + n.property_url + '">' + n.property + '</a>';
            }

            if (n.csr === true) {
                append = append + '<a href="#">Kaakbay</a>';
            }


            append = append + '</p>' +
                '                        <h2 class="article-title"><a href="/whats-new/events/' + n.slug +
                '">' + n.title + '</a></h2>' +
                '                        <p class="date-published">' + n.date + '</p>' +
                ' <div class="clr"></div>';

            if (n.copy) {
                append = append + '<p>' + n.copy + '...</p>';
            }

            append = append +
                '                    </div>' +
                '                </article>';

            append = append + '</div>';

            var $append = $(append);
            wrapper.append($append);

            // wrapper.imagesLoaded( function() {
            //wrapper.packery( 'appended', $append );
            // });
        });


    }


    function getTestimonials() {
        $.ajax({
            url: "/whats-new/json/testimonials?page=" + testimonialPage,
            type: "GET",
            processData: false,
            success: function(data) {
                populateTestimonials(data);
            }
        });
    }

    function populateTestimonials(data) {
        let wrapper = $('#testimonials-wrapper');

        Object.keys(data).forEach(function(key, index) {

            let n = data[key];

            var addtionalClass = '';
            var featuredClass = 'article-min';

            if (index === 0) {
                if (testimonialPage === 1) {
                    if (n.img !== undefined && n.img !== '') {
                        addtionalClass = 'grid-item--width2';
                        featuredClass = 'featured-article';
                    }
                }
            }

            let append = '<div class="grid-item ' + addtionalClass + '" data-animation="fadeInUp">';
            if (n.img !== undefined && n.img !== '') {
                append = append +
                    '                <article class="article-item ' + featuredClass + '">' +
                    '                    <figure class="article-img ">' +
                    '                        <a href="/whats-new/testimonials' + n.slug + '" class="">' +
                    '                            <img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="/uploads/news/' +
                    n.img + '" alt="' + n.img + '" width="235" height="150">' +
                    '                        </a>' +
                    '                    </figure>';

            } else {
                append = append +
                    '                <article class="article-item ' + featuredClass + ' no-image" >';
            }

            append = append + '                    <div class="article-info">' +

                '                        <p class="tag">';

            if (n.property !== undefined) {
                append = append + '<a href="/' + n.property_url + '">' + n.property + '</a>';
            }

            if (n.csr === true) {
                append = append + '<a href="#">Kaakbay</a>';
            }


            append = append + '</p>' +
                '                        <h2 class="article-title"><a href="/whats-new/testimonials/' + n.slug +
                '">' + n.title + '</a></h2>' +
                '                        <p class="date-published">' + n.date + '</p>' +
                ' <div class="clr"></div>';

            if (n.copy) {
                append = append + '<p>' + n.copy + '...</p>';
            }

            append = append +
                '                    </div>' +
                '                </article>';

            append = append + '</div>';

            var $append = $(append);
            wrapper.append($append);

            // wrapper.imagesLoaded( function() {
            //wrapper.packery( 'appended', $append );
            // });
        });


    }


    function getPromos() {
        $.ajax({
            url: "/whats-new/json/promos?page=" + promoPage,
            type: "GET",
            processData: false,
            success: function(data) {
                populatePromos(data);
            }
        });
    }

    function populatePromos(data) {
        let wrapper = $('#promo-wrapper');

        Object.keys(data).forEach(function(key, index) {

            let n = data[key];

            var addtionalClass = '';
            var featuredClass = 'article-min';

            if (index === 0) {
                if (promoPage === 1) {
                    if (n.img !== undefined && n.img !== '') {
                        addtionalClass = 'grid-item--width2';
                        featuredClass = 'featured-article';
                    }
                }
            }

            let append = '<div class="grid-item ' + addtionalClass + '" data-animation="fadeInUp">';
            if (n.img !== undefined && n.img !== '') {
                append = append +
                    '                <article class="article-item ' + featuredClass + '">' +
                    '                    <figure class="article-img ">' +
                    '                        <a href="/whats-new/promos' + n.slug + '" class="">' +
                    '                            <img class="lazyload" src="/frontend/images/page_template/lazyload.png" data-src="/uploads/news/' +
                    n.img + '" alt="' + n.img + '" width="235" height="150">' +
                    '                        </a>' +
                    '                    </figure>';

            } else {
                append = append +
                    '                <article class="article-item ' + featuredClass + ' no-image" >';
            }

            append = append + '                    <div class="article-info">' +

                '                        <p class="tag">';

            if (n.property !== undefined) {
                append = append + '<a href="/' + n.property_url + '">' + n.property + '</a>';
            }

            if (n.csr === true) {
                append = append + '<a href="#">Kaakbay</a>';
            }


            append = append + '</p>' +
                '                        <h2 class="article-title"><a href="/whats-new/promos/' + n.slug +
                '">' + n.title + '</a></h2>' +
                '                        <p class="date-published">' + n.date + '</p>' +
                ' <div class="clr"></div>';

            if (n.copy) {
                append = append + '<p>' + n.copy + '...</p>';
            }

            append = append +
                '                    </div>' +
                '                </article>';

            append = append + '</div>';

            var $append = $(append);
            wrapper.append($append);

            // wrapper.imagesLoaded( function() {
            //wrapper.packery( 'appended', $append );
            // });
        });


    }

    function siteProgressInit() {
        var siteProgressCarousel = $('#site-progress-list');
        siteProgressCarousel.owlCarousel('destroy');
        siteProgressCarousel.owlCarousel(siteProgressOption);
    }
</script>
</script>


<script async>
    (function(w, d, t, r, u) {
        var f, n, i;
        w[u] = w[u] || [], f = function() {
            var o = {
                ti: "26169032"
            };
            o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
        }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
            var s = this.readyState;
            s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
        }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
    })(window, document, "script", "../bat.bing.com/bat.js", "uetq");
</script>

<style>
    .embeddedServiceSidebar {
        z-index: 999999 !important;
    }

    .embeddedServiceHelpButton .helpButton .uiButton {
        background-color: #005290;
        font-family: "Arial", sans-serif;
    }

    .embeddedServiceHelpButton .helpButton .uiButton:focus {
        outline: 1px solid #005290;
    }
</style>

<script type='text/javascript' src='../service.force.com/esw.min.js'></script>
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



    //     embedded_svc.settings.enabledFeatures = ['LiveAgent'];
    //     embedded_svc.settings.entryFeature = 'LiveAgent';



    //     embedded_svc.init(
    //         'https://dmcihomes4.my.salesforce.com',
    //         'https://dmcihomes.secure.force.com/liveAgentSetupFlow',
    //         gslbBaseURL,
    //         '00D5g000000J3Js',
    //         'WEB_CHAT', {
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
        s.setAttribute('src', '../dmcihomes4.my.salesforce.com/esw.min.js');
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
            'sitekey': '6LcKHRwiAAAAAPmLGJqTqV37DxkqG59azLwp8v6-'
        });
    };
    setTimeout(function() {

        var body = document.getElementsByTagName('body')[0]
        var script = document.createElement('script')
        script.type = 'text/javascript';
        script.src = '../google.com/api.js'
        body.appendChild(script);
        console.log("est");
    }, 5000);

    <
    link rel = "stylesheet"
    href = "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" >
        <
        link rel = "stylesheet"
    href = "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" >


        <
        style >

        <
        /style> <
        script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" >
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $("#site-progress-list").owlCarousel({
            loop: true,
            margin: 10,
            nav: true, // Set to false if you don't want navigation buttons
            autoplay: true, // Set to false if you don't want autoplay
            autoplayTimeout: 3000, // Adjust autoplay speed in milliseconds
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
    });
</script>

</script>

</body>
