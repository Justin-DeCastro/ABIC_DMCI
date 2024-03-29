@include('layouts.landing.sidebar')
<div class="siteProgress-popup">
    <a href="#" class="jq-close"><span class="icon-home icon-close"></span></a>
    <div class="sp-p-wrap clearfix">
        <div class="sp-large-carousel owl-carousel" id="sp-large-container">
        </div>
        <div class="sp-thumb-nav" id="sp-thumb-parent">

        </div>
    </div>
</div>

<section id="main-wrapper">

    <section class="banner banner single-property-banner jq-section" id="overview">
        <picture class="coverimage-img animated fadeIn visible" data-animation="fadeIn" style="">
            <source type="image/webp" data-src="{{ asset('images/new/The Celandine white logo-small.webp') }}"
                media="(min-width: 767px)">
            <source type="image/webp" data-src="{{ asset('images/new/the-celandine-building-The Celandine-medium.jpg') }}"
                media="(min-width: 320px)">
            <img class=" ls-is-cached lazyloaded" src="{{ asset('images/new/The Celandine-header-1648108169453-large.webp') }}"
                alt="MDN" width="1475" height="942">
        </picture>
        <div class="table-wrap">
            <div class="table-cell">
                <div class="container">
                    <figure class="banner-logo animated fadeInUp visible" data-animation="fadeInUp">
                        <img class=" lazyloaded" src="{{ asset('images/new/The Celandine white logo-small.webp') }}"
                            data-src="{{ asset('images/new/The Celandine white logo-small.webp') }}" alt="">
                    </figure>
                    <div class="banner-text no-filter-banner animated fadeInUp visible" data-animation="fadeInUp">


                        <h2>Revel in Cityscape </h2>
                        <p>Invest in a home that elevates the comforts of city living and crafted by the country’s first
                            Quadruple A real estate developer. The Crestmont boasts modern contemporary architectural
                            design that is tailored for the needs of go-getters and professionals.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="unit-info">
            <div class="container">

                <div class="box-card">
                    <ul class="flex">

                        <li>
                            <p class="price">
                                <span class="currency-convert" data-value="6271000.00">PHP 6,271,000</span>
                                -
                                <span class="currency-convert" data-value="15106000.00">PHP 15,106,000</span>
                            </p>
                            <p class="sub-text">Price Range</p>


                        </li>
                        <li>
                            <p class="property-type">
                                <span class="box-type  not-available ">1BR</span>
                                <span class="box-type ">2BR</span>
                                <span class="box-type ">3BR</span>
                            </p>
                            <p class="sub-text">Units</p>
                        </li>
                        <li>
                            <div class="unit-info-status">
                                <span class="property-status circle-white">
                                    <span class="icon-home icon-under-construction uc "></span>
                                </span>
                                <p>Ready for Occupancy</p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-pad jq-section" id="masterplan">
        <div class="container m-t-80">

            <div class="master-plan-wrapper landscape">
                <div class="master-plan-details animated fadeInUp visible" data-animation="fadeInUp" data-delay="100">
                    <ul class="flex">
                        <li>
                            <h4 class="area-convert" data-value="3000">3,000 sqm.</h4>
                            <p>Land Area</p>
                        </li>
                        <li>
                            <h4>
                                High Rise Condominiums
                            </h4>
                            <p>Development Type</p>
                        </li>
                        <li>
                            <h4>
                                Modern Contemporary
                            </h4>
                            <p>Architectural Theme</p>
                        </li>
                    </ul>
                </div>
                <div class="master-plan-img-wrapper animated fadeInUp visible" data-animation="fadeInUp">
                    <div class="master-plan-img" id="container-360">
                        <a data-fancybox="" data-src="/images/new/The Celandine-master-plan-large.webp">
                            <img class="mp-initial ls-is-cached lazyloaded" src="/images/new/The Celandine-master-plan-large.webp" data-src="/images/new/The Celandine-master-plan-large.webp" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="section-features">
                <div class="sec-head">
                    <h4 class="sec-title"></h4>
                </div>


                <div class="sec-features full animated hiding" data-animation="fadeInUp">
                    <!-- <h4 class="sec-feature-title">Building Features</h4> -->

                </div>
            </div>
        </div>
    </section>

    <section class="sec-pad sec-default jq-section" id="units">
        <div class="container">
            <div class="sec-head">
                <h2 class="sec-title">Units</h2>

                <div class="sec-head-action fr">
                    <div class="fr">


                    </div>
                </div>
            </div>
            <div class="units-wrapper">
                <div class="units-details-header">
                    <ul class="flex">
                        <li></li>
                        <li>Unit Type</li>
                        <li>Gross Floor Area</li>
                        <li>Price Range</li>
                        <li style="width: 0;"></li>
                        <li style="width: 35%;"><em
                                style="font-size: 10px; display: block; font-weight: 300; text-transform: capitalize;     text-align: right; font-family: 'Roboto'; font-style: italic;">Last
                                Updated: Feb 21,2024 06:17:24</em></li>
                    </ul>
                </div>
                <ul id="ul-units-wrapper">
                    <li class="unit-item" data-name="2 Bedroom A Inner" data-size="57.00" data-min="9920000.00"
                        data-max="10748000.00" data-available="58">
                        <div class="units-details-content">
                            <ul class="flex animated  fadeInUp visible" data-animation="fadeInUp">
                                <li>
                                    <span class=""></span>
                                </li>
                                <li>2 Bedroom A Inner</li>
                                <li class="area-convert" data-value="57.00">57 sqm.</li>
                                <li><span class="currency-convert" data-value="9920000.00">PHP 9,920,000</span>
                                    -
                                    <span class="currency-convert-no-symbol"
                                        data-value="10748000.00">10,748,000</span>
                                </li>

                                <li>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="unit-item" data-name="2 Bedroom B Inner" data-size="66.50" data-min="11153000.00"
                        data-max="12087000.00" data-available="50">
                        <div class="units-details-content">
                            <ul class="flex animated  fadeInUp visible" data-animation="fadeInUp">
                                <li>
                                    <span class=""></span>
                                </li>
                                <li>2 Bedroom B Inner</li>
                                <li class="area-convert" data-value="66.50">66.5 sqm.</li>
                                <li><span class="currency-convert" data-value="11153000.00">PHP 11,153,000</span>
                                    -
                                    <span class="currency-convert-no-symbol"
                                        data-value="12087000.00">12,087,000</span>
                                </li>

                                <li>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="unit-item" data-name="2 Bedroom D Inner" data-size="65.50" data-min="11426000.00"
                        data-max="12465000.00" data-available="32">
                        <div class="units-details-content">
                            <ul class="flex animated  fadeInUp visible" data-animation="fadeInUp">
                                <li>
                                    <span class=""></span>
                                </li>
                                <li>2 Bedroom D Inner</li>
                                <li class="area-convert" data-value="65.50">65.5 sqm.</li>
                                <li><span class="currency-convert" data-value="11426000.00">PHP 11,426,000</span>
                                    -
                                    <span class="currency-convert-no-symbol"
                                        data-value="12465000.00">12,465,000</span>
                                </li>

                                <li>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="unit-item" data-name="2 Bedroom C Inner" data-size="65.50" data-min="11426000.00"
                        data-max="12465000.00" data-available="32">
                        <div class="units-details-content">
                            <ul class="flex animated  fadeInUp visible" data-animation="fadeInUp">
                                <li>
                                    <span class=""></span>
                                </li>
                                <li>2 Bedroom C Inner</li>
                                <li class="area-convert" data-value="65.50">65.5 sqm.</li>
                                <li><span class="currency-convert" data-value="11426000.00">PHP 11,426,000</span>
                                    -
                                    <span class="currency-convert-no-symbol"
                                        data-value="12465000.00">12,465,000</span>
                                </li>

                                <li>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="unit-item" data-name="3 Bedroom  End" data-size="84.50" data-min="13857000.00"
                        data-max="15106000.00" data-available="14">
                        <div class="units-details-content">
                            <ul class="flex animated  fadeInUp visible" data-animation="fadeInUp">
                                <li>
                                    <span class=""></span>
                                </li>
                                <li>3 Bedroom End</li>
                                <li class="area-convert" data-value="84.50">84.5 sqm.</li>
                                <li><span class="currency-convert" data-value="13857000.00">PHP 13,857,000</span>
                                    -
                                    <span class="currency-convert-no-symbol"
                                        data-value="15106000.00">15,106,000</span>
                                </li>

                                <li class="text-warning">FEW UNITS LEFT</li>
                                <li>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="unit-item" data-name="3 Bedroom  End" data-size="84.50" data-min="13857000.00"
                        data-max="15106000.00" data-available="14">
                        <div class="units-details-content">
                            <ul class="flex animated  fadeInUp visible" data-animation="fadeInUp">
                                <li>
                                    <span class=""></span>
                                </li>
                                <li>3 Bedroom End</li>
                                <li class="area-convert" data-value="84.50">84.5 sqm.</li>
                                <li><span class="currency-convert" data-value="13857000.00">PHP 13,857,000</span>
                                    -
                                    <span class="currency-convert-no-symbol"
                                        data-value="15106000.00">15,106,000</span>
                                </li>

                                <li class="text-warning">FEW UNITS LEFT</li>
                                <li>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="unit-item" data-name="1 Bedroom B End" data-size="36.00" data-min="6514000.00"
                        data-max="6774000.00" data-available="0">
                        <div class="units-details-content">
                            <ul class="flex animated not-available fadeInUp visible" data-animation="fadeInUp">
                                <li>
                                    <span class=" icon-caution "></span>
                                </li>
                                <li>1 Bedroom B End</li>
                                <li class="area-convert" data-value="36.00">36 sqm.</li>
                                <li><span class="currency-convert" data-value="6514000.00">PHP 6,514,000</span>
                                    -
                                    <span class="currency-convert-no-symbol" data-value="6774000.00">6,774,000</span>
                                </li>

                                <li class="text-warning">NOT AVAILABLE
                                </li>
                                <li>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="unit-item" data-name="1 Bedroom A Inner" data-size="33.00" data-min="6271000.00"
                        data-max="6794000.00" data-available="0">
                        <div class="units-details-content">
                            <ul class="flex animated not-available fadeInUp visible" data-animation="fadeInUp">
                                <li>
                                    <span class=" icon-caution "></span>
                                </li>
                                <li>1 Bedroom A Inner</li>
                                <li class="area-convert" data-value="33.00">33 sqm.</li>
                                <li><span class="currency-convert" data-value="6271000.00">PHP 6,271,000</span>
                                    -
                                    <span class="currency-convert-no-symbol" data-value="6794000.00">6,794,000</span>
                                </li>

                                <li class="text-warning">NOT AVAILABLE
                                </li>
                                <li>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="unit-item" data-name="1 Bedroom C End" data-size="42.50" data-min="7194000.00"
                        data-max="7461000.00" data-available="0">
                        <div class="units-details-content">
                            <ul class="flex animated not-available fadeInUp visible" data-animation="fadeInUp">
                                <li>
                                    <span class=" icon-caution "></span>
                                </li>
                                <li>1 Bedroom C End</li>
                                <li class="area-convert" data-value="42.50">42.5 sqm.</li>
                                <li><span class="currency-convert" data-value="7194000.00">PHP 7,194,000</span>
                                    -
                                    <span class="currency-convert-no-symbol" data-value="7461000.00">7,461,000</span>
                                </li>

                                <li class="text-warning">NOT AVAILABLE
                                </li>
                                <li>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="unit-item" data-name="1 Bedroom C End" data-size="42.50" data-min="7194000.00"
                        data-max="7461000.00" data-available="0">
                        <div class="units-details-content">
                            <ul class="flex animated not-available fadeInUp visible" data-animation="fadeInUp">
                                <li>
                                    <span class=" icon-caution "></span>
                                </li>
                                <li>1 Bedroom C End</li>
                                <li class="area-convert" data-value="42.50">42.5 sqm.</li>
                                <li><span class="currency-convert" data-value="7194000.00">PHP 7,194,000</span>
                                    -
                                    <span class="currency-convert-no-symbol" data-value="7461000.00">7,461,000</span>
                                </li>

                                <li class="text-warning">NOT AVAILABLE
                                </li>
                                <li>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <p class="text-right" style="padding-right: 15px; padding-top: 5px;"><em
                        style="font-size: 10px; display: block; font-weight: 300; text-transform: capitalize;     text-align: right; font-family: 'Roboto'; font-style: italic;">Last
                        Updated: Feb 21,2024 06:17:24</em></p>
            </div>

            <div class="section-features">
                <div class="sec-head">
                    <h4 class="sec-title">Unit Features</h4>
                </div>
                <div class="single-features-list">
                    <ul class="flex owl-carousel mobile-carousel master-plan owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"></div>
                        </div>
                        <div class="owl-nav disabled">
                            <div class="owl-prev"><span class="icon-left-arrow"></span></div>
                            <div class="owl-next"><span class="icon-right-arrow"></span></div>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </ul>
                </div>

                <div class="sec-features full" style="font-size: 20px;">
                    <!-- <h4 class="sec-feature-title">Building Features</h4> -->
                    <ul>
                        <li>
                            <p style="font-size: inherit;">Fire Alarm &amp; Sprinkler System</p>
                        </li>
                        <li>
                            <p style="font-size: inherit;">Provision for CATV</p>
                        </li>
                        <li>
                            <p style="font-size: inherit;">Provision for Metered Utility</p>
                        </li>
                        <li>
                            <p style="font-size: inherit;">Provision for Phone Line</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

   @include('layouts.style.footer')
