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

    <nav class="rightbar-nav animated hiding" data-animation="fadeInRight" data-delay="700">
        <h2>About Us</h2>
        <div class="sec-active-text">
            <span>Vision Mission</span>
            <div class="bullet-wrap">
                <i class="bullet"></i>
                <i class="bullet"></i>
                <i class="bullet"></i>
            </div>
        </div>
        <ul>
            <li class="active"><a href="#vision">Vision Mission</a></li>
            <li><a href="#core-values">Core Values</a></li>
            <li><a href="#brand-story">Brand Story</a></li>
            <li><a href="#brand-values">Brand Values</a></li>
            <li><a href="#innovation">Innovation</a></li>
            <li><a href="#certification">Certification <br>Awards</a></li>
            <li><a href="#partners">Our Partners</a></li>
            <li><a href="#executives">Our Executives</a></li>
            <li><a href="#affiliates">Our Affiliates</a></li>
            <li><a href="#downloads">Corporate Information</a></li>
            <li><a href="#kaakbay">Kaakbay</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>

    <section id="main-wrapper">
        <section class="banner wavy default jq-section" id="overview">
            <picture class="coverimage-img">
                <source data-srcset="{{ asset('images/hero-shd.webp') }}" media="(min-width: 570px)">
                <source data-srcset="{{ asset('images/hero-shd.webp') }}" media="(min-width: 320px)">
                <img class="lazyload" data-src="{{ asset('images/hero-shd.webp') }}" width="1440" height="330" alt="MDN">
            </picture>
            <div class="banner-text">
                <div class="container">
                    <h1>About Us</h1>
                </div>
            </div>
        </section>
    </section>

    <div class="alternate-bg">
        <section class="sec-pad sec-default read sec-reveal jq-section" id="vision">
            <figure class="temp-float">
                <img class="lazyload" src="{{asset('images/lazyload.png')}}" data-src="{{asset('images/helmet.png')}}" width="765" height="491" alt="MDN">
            </figure>
        </section>
            <div class="container">
                <div class="row">
                    @foreach($missions as $mission)
                    <div class="col-sm-6">
                        <div class="sec-head">
                            <h2 class="sec-title">{{ $mission->name }}</h2>
                        </div>
                        <div>
                            <p><span class="sec-sub-title">{{ $mission->description }}</span></p>
                            <br>

                    <p><strong>In so doing, we are committed:</strong></p>
<ul class="list-2">
<li>To ensure customer satisfaction</li>
<li>To achieve a sustainable growth on our shareholders investment</li>
<li>To maintain a mutually beneficial relationship with our partners in the business</li>
<li>To care for the environment we work in</li>
<li>To promote the growth of our people</li>
<li>While building an organization that espouses Integrity, Excellence and Interdependence</li>
</ul>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-sm-6">
                        <div class="sec-head">
                            <h2 class="sec-title">The DMCI Creed</h2>
                        </div>
                        <div>
                            <p><strong>We believe:</strong></p>
                            <p>That construction is a noble profession whose activities are vital to economic development and national progress,</p>
                            <p>That fair competition is essential to the growth and stability of the construction industry,</p>
                            <p>That a contractor's primary responsibility to his client is to give his best in faithful compliance with their agreement;</p>
                            <p>That labor and capital should cooperate with one another so that labor may live with dignity and capital may find its just rewards;</p>
                            <p>That the ill-gotten violates business ethics and the ill-conceived wreaks havoc on the public good;</p>
                            <p>That the ultimate objectives are to serve not only man but humankind; and to build not only an enterprise but an institution that will serve society.</p>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </section> --}}
    </div>



<div class="container p-t-80">
    <div class="sec-head">
        <h2 class="sec-title">Our Core Values</h2>
        <p>Learn about our company's fundamental beliefs.</p>
    </div>

    <div class="about-cards">
        <ul class="flex card-list" id="core-values-wrapper">
            @foreach($cores as $core)
            <li class="box-card">
                <figure class="property-img">
                    <a href="#">
                        <span class="text-top">{{ $core->name }}</span>
                        <img src="{{ asset('images/' . $core->image) }}" alt="core Image" width="100">
                    </a>
                </figure>
                <div class="content">
                    <p>{{ $core->description }}</p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>


<section class="sec-pad sec-default brand-story jq-section" id="brand-story">
    <div class="slant-border slant-bot slant-blue slant-ghost slant-right"></div>
    <div class="coverimage-title no-filter-banner">
        <div class="container">
            <div class="sec-head m-t-40">
                <h2 class="sec-title">Brand Story</h2>
            </div>
            <div class="row">
                @foreach($brands as $brand)
                <div class="col-lg-7 col-sm-12 brand-story-content">
                    <h3> <td>{{ $brand->name }}</td></h3>
<p>&nbsp;</p>
<p><strong>Inspired by Alfonso</strong><br /> <p>{{ $brand->description }}</p>
                    <a href="#brand-more-story" class="btn btn-large btn-round btn-ghost text-dark jq-brand-popup" data-fancybox data-content="&lt;h3&gt;The Heroes of the Underserved: the DMCI Homes Brand Story&lt;/h3&gt;
&lt;p&gt;&lt;strong&gt;Inspired by Alfonso&lt;/strong&gt;&lt;br /&gt;With a wife and a baby on the way, the cost of living in the city became prohibitive for Alfonso. Far beyond the city boundaries, other builders began to develop sprawling neighborhoods of cookie-cutter houses on doily-sized lots. They&#039;re pretty but too cramped (for a growing family) and too far out of the city center.&lt;/p&gt;
&lt;p&gt;The middle-class man became a stressed out man-in-the-middle, faced with no choice but to take the long daily commute--or pay big city prices. There was no middle ground. &quot;Pagod ka na papunta sa trabaho, pagod ka pa pag-uwi...&quot;&lt;/p&gt;
&lt;p&gt;&quot;Alfonso deserves better,&quot; the Builder remarked. &quot;He deserves a real home, accessible to his work... a cocoon of good living.&quot;&lt;/p&gt;
&lt;p&gt;The Builder saw land on the edge of the city--and bought it. SOMEDAY, he knew, this fringe would be part of the metropolis. This, he dedicated to Alfonso, the underserved middle manager--his needs, his family&amp;rsquo;s needs, his realities, and his dreams.&lt;/p&gt;
&lt;p&gt;The Builder had friends who shared his passion for building and who possessed the expertise to make things happen. With knowledge gained from building skyscrapers, the Builder and friends built mid-rise havens that Alfonso could call home.&lt;/p&gt;
&lt;p&gt;He used the best materials and fine finishing, and sold these at Alfonso-friendly prices.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Expanding the Vision&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;More Alfonsos came to stay. And the Builder and friends visited them every week, asking how they could make &quot;home&quot; more comfortable. See, the Builder was an experimental sort--and would innovate and iterate according to the wishes of Alfonso and his people. It sometimes drove his partners crazy, and these ever-changing plans often forced them to work late into the night. But when they built it and saw the vision come to life, they were thankful for the challenge that made them all better builders!&lt;/p&gt;
&lt;p&gt;The Builder loved his motley crew, and often said &quot;Not one of us is better than all of us!&quot;&lt;/p&gt;
&lt;p&gt;Other people--architects, builders, engineers, salesmen, contractors--happily joined the Builder! The team came to be known as The Heroes of the Underserved.&lt;/p&gt;
&lt;p&gt;Alfonso and his people were a neighborly group. They thrived on social encounters and they valued friendships highly. So the intrepid team built neighborhoods with clubhouses where people would converge to party or to simply lounge around. They put up playgrounds and dug swimming pools; they incorporated parks and greenery. They built a world close to, or within, the city where children played and families found respite from the urban jungle.&lt;/p&gt;
&lt;p&gt;Because no one should feel that he has compromised on his home. No, not even Alfonso.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;The Daily Challenge&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;More Alfonsos came, inquiring about possible homes. So the Builder and his team built faster... and faster... barely aware that an enemy was rising within: the twin destroyers known as Complacency and Carelessness.&lt;/p&gt;
&lt;p&gt;They are formidable enemies, said the Builder. They can make themselves invisible. They hide inside people who seem to be working, but whose hearts are not for Alfonso and the people they serve. They are enemies whose loyalties are not to the team.&lt;/p&gt;
&lt;p&gt;The enemy can take shortcuts and call it expediency. It can lead the team into the rut of mindless repetition of projects. The enemy ignores Alfonso and his needs.&lt;/p&gt;
&lt;p&gt;The enemy is the spirit of underservice. This, our heroes must fight everyday.&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;Moving Closer to the City of Tomorrow&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;As long as there are people like Alfonso, as long as people must go to the cities for their livelihood, Heroes of the Underserved continue to build cocoons of affordable comfort and serve Alfonso in the most personable, remarkable ways.&lt;/p&gt;
&lt;p&gt;In some secret cavern, our heroes keep the blueprint of a dream: a city of tomorrow--a place where a more prosperous Alfonso shall live and work. Our heroes dream of a 50-storey tower with a view of the bay and mountains beyond. They dream of the easy flow of traffic and a causeway that gets Alfonso to the old city in a matter of minutes. The finest of leisure, entertainment, working spaces, and family havens are in one accessible site. For Alfonso...the city of tomorrow is a place NEVER out of reach.&lt;/p&gt;" data-title="Brand Story">Read More</a>
                </div>
@endforeach
            </div>
        </div>
    </div>
    <picture class="coverimage-img">
        <source data-srcset="{{asset('images/brand-story.png')}}" media="(min-width: 570px)">
        <source data-srcset="{{asset('images/brand-story-mobile.jpg')}}" media="(min-width: 320px)">
        <img class="lazyload" src="{{asset('images/lazyload.png')}}" data-src="{{asset('images/brand-story-mobile.jpg')}}" width="1381" height="570" alt="MDN">
    </picture>
    <!-- <div class="slant-border slan-bot slant-grey slant-left"></div> -->
</section>



<section class="sec-pad sec-default bg-grey jq-section" id="certification">
    <div class="container">
        <div class="sec-head">
            <h2 class="sec-title">BRAND VALUES</h2>

        </div>
        <div class="about-cards">
            <ul class="flex card-list" id="certification">
                @foreach($values as $value)
                <li class="box-card">
                    <figure class="property-img">
                        <img src="{{ asset('images/value/' . $value->image) }}" alt="Value Image" width="100">
                    </figure>
                    <div class="content">
                        <h3>{{ $value->name }}</h3>

                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>



                <section class="sec-pad sec-default banner for-pages slant-border slant-bot slant-white slant-ghost slant-right innovation jq-section" id="innovation">
                    <div class="slant-border slant-bot slant-grey slant-ghost slant-right"></div>
                    <div class="coverimage-title banner-text innovation">
                        <div class="container">
                            <div>
                                <p>How do you bring that distinct outdoor <br>feel inside a modern home?</p>
    <h3>Our answer is</h3>
    <h2>INNOVATION</h2>
                            </div>
                            <div class="play-video"><a data-fancybox="" href="https://youtu.be/GrwjxlOmNs0?autoplay=1"><span class="icon-play-button"></span></a></div>
                        </div>
                    </div>
                    <picture>
                        <source data-srcset="{{asset('images/innovation-banner.jpg')}}" media="(min-width: 570px)" srcset="{{asset('images/innovation-banner.jpg')}}">
                        <source data-srcset="{{asset('images/innovation-mobile.jpg')}}" media="(min-width: 320px)" srcset="{{asset('images/innovation-mobile.jpg')}}">
                        <img class=" ls-is-cached lazyloaded" src="{{asset('images/innovation-mobile.jpg')}}" data-src="{{asset('images/innovation-mobile.jpg')}}" width="1381" height="570" alt="MDN">
                    </picture>
                </section>
                <section class="sec-pad sec-default sec-reveal innovation-content" id="innovation-content">
                    <div class="container">
                        <div class="about-cards col-card-2">
                            <ul class="flex card-list" id="innovations-wrapper">

            <li class="box-card">
                <div class="content">
                    <img class=" ls-is-cached lazyloaded" src="{{asset('images/innovation-item-1551064810547.png')}}" data-src="{{asset('images/innovation-item-1551064810547.png')}}" alt="/uploads/media/innovation-item-1551064810547" width="300" height="115">
                    <h3>Lumiventt Design Technology</h3>
                    <p></p><p><span style="color: #212121; font-family: avenir, Helvetica, sans-serif; text-align: justify;">From 'lumen' meaning light and 'ventus' meaning wind, this pioneering design technology for high-rise structures allows ambient light and fresh air to permeate the building and all unit spaces within. Sky Patios, 3-storey high openings located at the front and back of every five-floor levels, and breezeways, vents at both sides of the building; allow cross-ventilation by employing basic principles of airflow. The introduction of single loaded hallways and central garden atriums not only improve aesthetics but also give a wide open feel to the building interior, for true resort-inspired living.</span></p><p></p>
                </div>
            </li>

            <li class="box-card">
                <div class="content">
                    <img class=" ls-is-cached lazyloaded" src="{{asset('images/Quality-Seal.jpg')}}" data-src="{{asset('images/Quality-Seal.jpg')}}" alt="/uploads/media/" width="300" height="115">
                    <h3>The DMCI Homes Quality Seal</h3>
                    <p></p><p style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: avenir, Helvetica, sans-serif; vertical-align: baseline; overflow: hidden; word-break: break-word; text-align: justify; color: #212121;">The DMCI Homes Quality Seal signifies that a property has passed DMCI Homes's standard 102 Inspection Points from the start of construction, design until the property's turnover. This is done to assure that all our projects are high quality.</p><p></p>
                </div>
            </li>


    </ul>
                        </div>
                    </div>
                    <!-- <div class="sec-reveal slant-border slant-bot slant-grey slant-left"></div> -->
                </section>
                    <!-- <div class="sec-reveal slant-border slant-bot slant-grey slant-left"></div> -->
                    {{-- <div class="corporate-governance slant-border slant-bot slant-right">
                        <div class="slant-border slant-bot slant-grey slant-right slant-ghost -reverse"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4>DMCI Homes is guided by seasoned executives with vast knowledge and experience in property development</h4>
                                </div>
                                <div class="col-sm-8">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <section class="sec-pad sec-default executives jq-section" id="executives">
                        <div class="container">
                            <div class="sec-head">
                                <h2 class="sec-title">Certification and Awards</h2>
                                <p>Excellent quality has always been one of our strengths and it is recognized by various organizations inside and outside of the Philippines. </p>
                            </div>
                        </div>


                        <div class="container">
                            <div class="about-cards">
                                <ul class="flex card-list" id="executives-wrapper">
                                    @foreach($certifications as $certification)
                                    <li class="box-card">
                                        <figure class="property-img">
                                            <img src="{{ asset('images/' . $certification->image) }}" alt="Certification Image" width="295" height="205">
                                        </figure>
                                        <div class="content">
                                            <h3>{{ $certification->name }}</h3>
                                            <p style="font-size:20px">{{ $certification->description }}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </section>


<section class="sec-pad sec-default jq-section" id="partners">
    <div class="container">
        <div class="sec-head">
            <h2 class="sec-title">Our Partners</h2>
            <p>DMCI Homes fosters partnerships with only the best companies to ensure the excellent quality of properties we provide.</p>
        </div>
        <div class="brand-logos">
            <ul class="flex" id="partners-wrapper">
                <li><img class="lazyloaded" src="{{ asset('images/bpi.jpg')}}" data-src="{{ asset('images/bpi.jpg')}}" alt="/uploads/media/" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1550835568259.jpg')}}" data-src="{{ asset('images/partner-image-1550835568259.jpg')}}" alt="/uploads/media/partner-image-1550835568259" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551156543414.jpg')}}" data-src="{{ asset('images/partner-image-1551156543414.jpg')}}" alt="images/partner-image-1551156543414" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551156606344.jpg')}}" data-src="{{ asset('images/partner-image-1551156606344.jpg')}}" alt="images/partner-image-1551156606344" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551156695438.jpg')}}" data-src="{{ asset('images/partner-image-1551156695438.jpg')}}" alt="images/partner-image-1551156695438" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157038919.jpg')}}" data-src="{{ asset('images/partner-image-1551157038919.jpg')}}" alt="images/partner-image-1551157038919" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157111806.jpg')}}" data-src="{{ asset('images/partner-image-1551157111806.jpg')}}" alt="images/partner-image-1551157111806" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157171813.jpg')}}" data-src="{{ asset('images/partner-image-1551157171813.jpg')}}" alt="images/partner-image-1551157171813" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157229700.jpg')}}" data-src="{{ asset('images/partner-image-1551157229700.jpg')}}" alt="images/partner-image-1551157229700" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157297236.jpg')}}" data-src="{{ asset('images/partner-image-1551157297236.jpg')}}" alt="images/partner-image-1551157297236" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157346861.jpg')}}" data-src="{{ asset('images/partner-image-1551157346861.jpg')}}" alt="images/partner-image-1551157346861" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157401916.jpg')}}" data-src="{{ asset('images/partner-image-1551157401916.jpg')}}" alt="images/partner-image-1551157401916" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157434324.jpg')}}" data-src="{{ asset('images/partner-image-1551157434324.jpg')}}" alt="images/partner-image-1551157434324" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157470053.jpg')}}" data-src="{{ asset('images/partner-image-1551157470053.jpg')}}" alt="images/partner-image-1551157470053" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157531692.jpg')}}" data-src="{{ asset('images/partner-image-1551157531692.jpg')}}" alt="/uploads/media/partner-image-1551157531692" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157577108.jpg')}}" data-src="{{ asset('images/partner-image-1551157577108.jpg')}}" alt="/uploads/media/partner-image-1551157577108" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157619204.jpg')}}" data-src="{{ asset('images/partner-image-1551157619204.jpg')}}" alt="/uploads/media/partner-image-1551157619204" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157663219.jpg')}}" data-src="{{ asset('images/partner-image-1551157663219.jpg')}}" alt="/uploads/media/partner-image-1551157663219" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157852213.jpg')}}" data-src="{{ asset('images/partner-image-1551157852213.jpg')}}" alt="/uploads/media/partner-image-1551157852213" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157899283.jpg')}}" data-src="{{ asset('images/partner-image-1551157899283.jpg')}}" alt="/uploads/media/partner-image-1551157899283" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157939371.jpg')}}" data-src="{{ asset('images/partner-image-1551157939371.jpg')}}" alt="/uploads/media/partner-image-1551157939371" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157972275.jpg')}}" data-src="{{ asset('images/partner-image-1551157972275.jpg')}}" alt="/uploads/media/partner-image-1551157972275" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551158019618.jpg')}}" data-src="{{ asset('images/partner-image-1551158019618.jpg')}}" alt="/uploads/media/partner-image-1551158019618" width="160" height="135"></li>
                <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551158059652.jpg')}}" data-src="{{ asset('images/partner-image-1551158059652.jpg')}}" alt="/uploads/media/partner-image-1551158059652" width="160" height="135"></li>
            </ul>
        </div>
    </div>
    <!-- <div class="slant-border slant-bot slant-grey slant-left"></div> -->
</section>


<section class="sec-pad sec-default executives jq-section" id="executives">
    <div class="container">
        <div class="sec-head">
            <h2 class="sec-title">Executives</h2>
            <p>DMCI Homes is guided by seasoned executives with vast knowledge and experience in property development</p>
        </div>
    </div>



    <div class="container">
        <div class="about-cards">
            <ul class="flex card-list" id="executives-wrapper">
                @foreach($executives as $executive)
                <li class="box-card">
                    <figure class="property-img">
                        <img src="{{ asset('images/executive/' . $executive->image) }}" alt="Executive Image" width="295" height="205">
                    </figure>
                    <div class="content">
                        <h3>{{ $executive->name }}</h3>
                        <p>{{ $executive->position }}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<section class="sec-pad sec-default bg-grey jq-section" id="affiliates">
    <div class="container">
        <div class="sec-head">
            <h2 class="sec-title">Our Affiliates</h2>
            <p>DMCI Holdings Inc. along with its subsidiaries has conquered the test of time and are always dedicated in providing only the best to the communities it serves. </p>
        </div>

        <div class="brand-logos affiliates">
            <ul class="flex" id="affiliates_wrapper">
<li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552378020317.jpg')}}" data-src="{{ asset('images/affiliates-1552378020317.jpg')}}" alt="/uploads/media/affiliates-1552378020317" width="176" height="100"></li>
<li><img class=" lazyloaded" src="{{ asset('images/affiliates-1563253721818.jpg')}}" data-src="{{ asset('images/affiliates-1563253721818.jpg')}}" alt="{{ asset('images/affiliates-1563253721818.jpg')}}" width="176" height="100"></li>
<li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552377809892.jpg')}}" data-src="{{ asset('images/affiliates-1552377809892.jpg')}}" alt="/uploads/media/affiliates-1552377809892" width="176" height="100"></li>
<li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552377895748.jpg')}}" data-src="{{ asset('images/affiliates-1552377895748.jpg')}}" alt="/uploads/media/affiliates-1552377895748" width="176" height="100"></li>
<li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552377920581.jpg')}}" data-src="{{ asset('images/affiliates-1552377920581.jpg')}}" alt="/uploads/media/affiliates-1552377920581" width="176" height="100"></li>
<li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552377952905.jpg')}}" data-src="{{ asset('images/affiliates-1552377952905.jpg')}}" alt="/uploads/media/affiliates-1552377952905" width="176" height="100"></li>
<li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552377977900.jpg')}}" data-src="{{ asset('images/affiliates-1552377977900.jpg')}}" alt="/uploads/media/affiliates-1552377977900" width="176" height="100"></li>
<li><img class=" lazyloaded" src="{{ asset('images/affiliates-1553167305245.jpg')}}" data-src="{{ asset('images/affiliates-1553167305245.jpg')}}" alt="/uploads/media/affiliates-1553167305245" width="176" height="100"></li>
<li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552377998070.jpg')}}" data-src="{{ asset('images/affiliates-1552377998070.jpg')}}" alt="/uploads/media/affiliates-1552377998070" width="176" height="100"></li>
<li><img class=" lazyloaded" src="{{ asset('images/affiliates-1563258239287.jpg')}}" data-src="{{ asset('images/affiliates-1563258239287.jpg')}}" alt="/uploads/media/affiliates-1563258239287" width="176" height="100"></li>
<li><img class=" lazyloaded" src="{{ asset('images/affiliates-1641127835619.jpeg')}}" data-src="{{ asset('images/affiliates-1641127835619.jpeg')}}" alt="/uploads/media/affiliates-1641127835619" width="176" height="100"></li>


</ul>
        </div>
    </div>
    <!-- <div class="slant-border slant-bot slant-right"></div> -->
</section>

                        <section class="sec-pad sec-default jq-section" id="downloads">
                <div class="container">
                    <div class="sec-head">
                        <h2 class="sec-title">Corporate Information</h2>

                    </div>
                    <div class="download-wrapper">
                        <ul>
                                                    <li>
                                <div class="download-details-header accor-header flex">
                                    <p>About DMCI PDI</p>
                                    <div class="flex">
                                        <span>Show 4 files</span>
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                </div>
                                <div class="download-details accor-content-wrapper">
                                    <ul class="flex">
                                        <li>File Name</li>
                                        <li>Date</li>
                                        <li>Type</li>
                                        <li>Size</li>
                                    </ul>
                                                                                <ul class="flex">
                                            <li>Approval of Amended Articles of Incorporation</li>
                                            <li>2017-06-27</li>
                                            <li>PDF</li>
                                            <li>130.88 KB</li>
                                            <li><a href="/uploads/media/Approval of Amended Articles of Incorporation.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>
                                                                                <ul class="flex">
                                            <li>Amended Articles of Incorporation</li>
                                            <li>2017-06-20</li>
                                            <li>PDF</li>
                                            <li>1,953.97 KB</li>
                                            <li><a href="/uploads/media/Amended Articles of Incorporation.PDF" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>
                                                                                <ul class="flex">
                                            <li>Amended Manual on Corporate Governance</li>
                                            <li>2015-09-14</li>
                                            <li>PDF</li>
                                            <li>983.06 KB</li>
                                            <li><a href="/uploads/media/Amended Manual on Corporate Governance.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>
                                                                                <ul class="flex">
                                            <li>Articles of Incorporation</li>
                                            <li>2014-12-11</li>
                                            <li>PDF</li>
                                            <li>1,940.92 KB</li>
                                            <li><a href="/uploads/media/Articles of Incorporation.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>

                                </div>
                            </li>
                                                    <li>
                                <div class="download-details-header accor-header flex">
                                    <p>Annual Reports</p>
                                    <div class="flex">
                                        <span>Show 3 files</span>
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                </div>
                                <div class="download-details accor-content-wrapper">
                                    <ul class="flex">
                                        <li>File Name</li>
                                        <li>Date</li>
                                        <li>Type</li>
                                        <li>Size</li>
                                    </ul>
                                                                                <ul class="flex">
                                            <li>DMCI Project Developers Inc SEC Form 17A 2019</li>
                                            <li>2020-07-02</li>
                                            <li>PDF</li>
                                            <li>11,751.01 KB</li>
                                            <li><a href="/uploads/media/DMCI Project Developers Inc SEC Form 17A 2019.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>
                                                                                <ul class="flex">
                                            <li>SEC Form 17-A 2018</li>
                                            <li>2018-05-09</li>
                                            <li>PDF</li>
                                            <li>1,498.57 KB</li>
                                            <li><a href="/uploads/media/SEC Form 17-A 2018.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>
                                                                                <ul class="flex">
                                            <li>DMCI PDI SEC-17A</li>
                                            <li>2017-04-24</li>
                                            <li>PDF</li>
                                            <li>1,333.71 KB</li>
                                            <li><a href="/uploads/media/DMCI-PDI-SEC-17A.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>

                                </div>
                            </li>
                                                    <li>
                                <div class="download-details-header accor-header flex">
                                    <p>Quarterly Reports</p>
                                    <div class="flex">
                                        <span>Show 1 files</span>
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                </div>
                                <div class="download-details accor-content-wrapper">
                                    <ul class="flex">
                                        <li>File Name</li>
                                        <li>Date</li>
                                        <li>Type</li>
                                        <li>Size</li>
                                    </ul>
                                                                                <ul class="flex">
                                            <li>DMCI Project Developers Inc - SEC Form 17Q 2020 </li>
                                            <li>2020-07-02</li>
                                            <li>PDF</li>
                                            <li>1,510.25 KB</li>
                                            <li><a href="/uploads/media/DMCI Project Developers Inc - SEC Form 17Q 2020 .pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>

                                </div>
                            </li>
                                                    <li>
                                <div class="download-details-header accor-header flex">
                                    <p>Definitive Information Statement</p>
                                    <div class="flex">
                                        <span>Show 3 files</span>
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                </div>
                                <div class="download-details accor-content-wrapper">
                                    <ul class="flex">
                                        <li>File Name</li>
                                        <li>Date</li>
                                        <li>Type</li>
                                        <li>Size</li>
                                    </ul>
                                                                                <ul class="flex">
                                            <li>DMCI PDI- DIS and Management Report 2021</li>
                                            <li>2022-06-01</li>
                                            <li>PDF</li>
                                            <li>6,772.15 KB</li>
                                            <li><a href="/uploads/media/DMCI PDI- DIS and Management Report 2021.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>
                                                                                <ul class="flex">
                                            <li>DMCI PDI - DIS &amp; Management Report 2020</li>
                                            <li>2021-04-14</li>
                                            <li>PDF</li>
                                            <li>3,472.74 KB</li>
                                            <li><a href="/uploads/media/DMCI PDI - DIS &amp; Management Report 2020.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>
                                                                                <ul class="flex">
                                            <li>DMCI PDI - DIS &amp; Management Report 2019</li>
                                            <li>2020-07-02</li>
                                            <li>PDF</li>
                                            <li>1,066.46 KB</li>
                                            <li><a href="/uploads/media/DMCI PDI - DIS &amp; Management Report 2019.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>

                                </div>
                            </li>
                                                    <li>
                                <div class="download-details-header accor-header flex">
                                    <p>General Information Sheet</p>
                                    <div class="flex">
                                        <span>Show 1 files</span>
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                </div>
                                <div class="download-details accor-content-wrapper">
                                    <ul class="flex">
                                        <li>File Name</li>
                                        <li>Date</li>
                                        <li>Type</li>
                                        <li>Size</li>
                                    </ul>
                                                                                <ul class="flex">
                                            <li>DMCI PDI - 2020 GIS</li>
                                            <li>2021-04-14</li>
                                            <li>PDF</li>
                                            <li>5,064.14 KB</li>
                                            <li><a href="/uploads/media/DMCI PDI - 2020 GIS.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>

                                </div>
                            </li>
                                                    <li>
                                <div class="download-details-header accor-header flex">
                                    <p>Other Disclosures</p>
                                    <div class="flex">
                                        <span>Show 4 files</span>
                                        <span class="icon-right-arrow"></span>
                                    </div>
                                </div>
                                <div class="download-details accor-content-wrapper">
                                    <ul class="flex">
                                        <li>File Name</li>
                                        <li>Date</li>
                                        <li>Type</li>
                                        <li>Size</li>
                                    </ul>
                                                                                <ul class="flex">
                                            <li>DMCI-PDI SEC Form 17-C Additional Cash Dividends</li>
                                            <li>2021-04-14</li>
                                            <li>PDF</li>
                                            <li>159.80 KB</li>
                                            <li><a href="/uploads/media/DMCI-PDI SEC Form 17-C Additional Cash Dividends.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>
                                                                                <ul class="flex">
                                            <li>DMCI-PDI SEC Form 17-C ASM Results 2020</li>
                                            <li>2021-04-14</li>
                                            <li>PDF</li>
                                            <li>235.26 KB</li>
                                            <li><a href="/uploads/media/DMCI-PDI SEC Form 17-C ASM Results 2020.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>
                                                                                <ul class="flex">
                                            <li>DMCI-PDI SEC Form 17-C New CG Manual 2020</li>
                                            <li>2021-04-14</li>
                                            <li>PDF</li>
                                            <li>113.02 KB</li>
                                            <li><a href="/uploads/media/DMCI-PDI SEC Form 17-C New CG Manual 2020.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>
                                                                                <ul class="flex">
                                            <li>DMCI-PDI SEC Form 17-C resignation of VSL 2020 0630</li>
                                            <li>2020-07-02</li>
                                            <li>PDF</li>
                                            <li>173.80 KB</li>
                                            <li><a href="/uploads/media/DMCI-PDI SEC Form 17-C resignation of VSL 2020 0630.pdf" class="btn btn-round btn-ghost text-dark" download>Download</a></li>
                                        </ul>

                                </div>
                            </li>
                                                </ul>


                    </div>
                </div>
                <!-- <div class="slant-border slant-bot slant-right slant-grey"></div> -->
            </section>

            <section class="sec-pad sec-default jq-section" id="kaakbay">
                <div class="container m-t-40">
                    <div class="sec-head">
                        <h2 class="sec-title">Kaakbay</h2>
                        <p>Kaakbay is DMCI Homes' Corporate Social Responsibility program which aims to extend global affluence
                            and uphold the well-being of Filipinos. Kaakbay promotes fostering good relations with the
                            communities where they operate and bring forth social activities beneficial to the Filipino society.
                        </p>
                        <div class="sec-head-action fr">
                            <a href="#" class="btn btn-round btn-small">More News</a>
                        </div>
                    </div>
                    <div class="featured-news">
                        <div class="masonry-wrap">
                            <div class="grid" id="news-wrapper">
                                @foreach($kaakbays as $kaakbay)
                                <div class="grid-item" data-animation="fadeInUp">
                                    <article class="article-item article-min">
                                        <figure class="article-img">
                                            <a href="/whats-new/news/dmci-homes-employees-help-brgy-bangkal-makati-public-schools">
                                                <img src="{{ asset('images/kaakbay/' . $kaakbay->image) }}" alt="kaakbay Image" width="100">
                                            </a>
                                        </figure>
                                        <div class="article-info">
                                            <p class="tag"></p>
                                            <h2 class="article-title">
                                                <a href="/whats-new/news/dmci-homes-employees-help-brgy-bangkal-makati-public-schools">{{ $kaakbay->name }}</a>
                                            </h2>
                                            <p class="date-published">{{ $kaakbay->date }}</p>
                                            <div class="clr"></div>
                                            <p></p>
                                        </div>
                                    </article>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>


                <section class="sec-pad sec-default jq-section" id="contact">
                    <div class="container m-t-40">
                        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="contact-form-wrap contact-us" id="contact-form">
                    <div class="sec-head">
                        <h2 class="sec-title">Contact Us</h2>
                        <p>Leave us a message and we will get back to you as soon as possible.</p>
                    </div>

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

                                <!--<div class="col-md-12 inquiry-condition" data-inquiry="customer-care">
                                    <div class="input-wrap">
                                        <label for="propertyOwned">Property owned: <span class="required-field">*</span></label>
                                        <div class="custom-select">
                                            <select  id="00N5g000009mqi9" name="00N5g000009mqi9" title="Property Inquired">
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
                                </div>-->

                                <!--<div class="col-md-12 inquiry-condition" data-inquiry="career">
                                    <div class="input-wrap custom-multi-select">
                                        <label for="position-interested">Select Position: <span class="required-field">*</span></label>
                                        <select id="position-interested" name="position">
                                                                                    <option value="182">Application Developer</option>
                                                                                    <option value="231">Architect</option>
                                                                                    <option value="229">BIM Project Specialist</option>
                                                                                    <option value="247">BIM Specialist</option>
                                                                                    <option value="202">Business Analyst</option>
                                                                                    <option value="259">Business Development Officer</option>
                                                                                    <option value="258">Business Development Senior Specialist</option>
                                                                                    <option value="141">Business Development Specialist</option>
                                                                                    <option value="269">Business Process Analyst (Methods Analyst)</option>
                                                                                    <option value="162">Civil Engineer</option>
                                                                                    <option value="254">Civil Engineer - Site Planner and Scheduler</option>
                                                                                    <option value="218">Company Nurse (HR Assistant)</option>
                                                                                    <option value="178">Construction Area Manager</option>
                                                                                    <option value="161">Contracts Engineer</option>
                                                                                    <option value="160">Cost Engineer</option>
                                                                                    <option value="246">Cost Officer</option>
                                                                                    <option value="138">Credit &amp; Collection Assistant</option>
                                                                                    <option value="203">Customer Care Specialist</option>
                                                                                    <option value="157">Design Assistant/Architect</option>
                                                                                    <option value="233">Electrical Engineer (Site-Based)</option>
                                                                                    <option value="171">Equipment Engineer</option>
                                                                                    <option value="199">Equipment Manager</option>
                                                                                    <option value="214">Field Recruiter</option>
                                                                                    <option value="136">Finance Assistant</option>
                                                                                    <option value="261">Fit-Out Engineer</option>
                                                                                    <option value="165">Geodetic Engineer</option>
                                                                                    <option value="213">HR Assistant (Direct Labor - Recruitment)</option>
                                                                                    <option value="215">HR Assistant (Direct Labor - Recruitment) - Cebu Based</option>
                                                                                    <option value="244">HR Assistant/Specialist - Recruitment (Project Based)</option>
                                                                                    <option value="216">HR Specialist - Training</option>
                                                                                    <option value="270">Internal Audit Specialist</option>
                                                                                    <option value="135">Junior Accountant</option>
                                                                                    <option value="192">Landscape Architect/Design Assistant</option>
                                                                                    <option value="194">Management Trainee for Construction</option>
                                                                                    <option value="195">Management Trainee for Design Management</option>
                                                                                    <option value="196">Management Trainee for Property Management</option>
                                                                                    <option value="250">Marketing Coordinator - Cebu-Based</option>
                                                                                    <option value="168">Mechanical Engineer</option>
                                                                                    <option value="167">Mechanical Engineer (Head Office)</option>
                                                                                    <option value="235">Mechanical Engineer (RMC)</option>
                                                                                    <option value="256">MEP Cost Engineer - Team Leader</option>
                                                                                    <option value="264">MEPF Engineer</option>
                                                                                    <option value="217">Organizational Development Assistant/Specialist</option>
                                                                                    <option value="208">Organizational Development Manager</option>
                                                                                    <option value="238">Payroll Supervisor</option>
                                                                                    <option value="227">Permits Assistant</option>
                                                                                    <option value="212">Project Accountant</option>
                                                                                    <option value="152">Project Development Specialist</option>
                                                                                    <option value="177">Project-In-Charge</option>
                                                                                    <option value="153">Property Advisor</option>
                                                                                    <option value="266">QC Engineer (RMC)</option>
                                                                                    <option value="271">Regional Sales Coordinator</option>
                                                                                    <option value="263">Research &amp; Development Manager</option>
                                                                                    <option value="139">Risk &amp; Control Officer</option>
                                                                                    <option value="201">Safety Auditor</option>
                                                                                    <option value="173">Safety Officer</option>
                                                                                    <option value="243">Sales Management Coordinator</option>
                                                                                    <option value="219">Sales Management Specialist</option>
                                                                                    <option value="265">Service Engineer</option>
                                                                                    <option value="166">Survey Assistant</option>
                                                                                    <option value="209">Treasury Assistant</option>
                                                                            </select>
                                        <p class="error-message">Please select a your desired position.</p>
                                    </div>
                                </div>-->

                                <!--<div class="col-md-12 inquiry-condition" data-inquiry="career">
                                    <div class="input-wrap custom-upload">
                                        <input type="file" name="resume" id="resume" class="inputfile inputfile-6">
                                        <label for="resume"><strong> Upload CV</strong><span></span> </label>
                                        <p class="error-message">Please upload your resume.</p>
                                    </div>
                                </div>-->
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
                                                        <div id="captchacode"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-2bh11n1c94k6" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6LcKHRwiAAAAAPmLGJqTqV37DxkqG59azLwp8v6-&amp;co=aHR0cHM6Ly93d3cuZG1jaWhvbWVzLmNvbTo0NDM.&amp;hl=en&amp;v=1kRDYC3bfA-o6-tsWzIBvp7k&amp;size=normal&amp;cb=r8gelcad6hsw"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
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
            <div class="col-sm-12 col-md-4 other-channel-wrap hidden-tablet">
                <div class="sec-head">
                    <h4 class="sec-title">You can also reach us via the following channels</h4>
                    <p>We always enjoy hearing from you and there are several ways that you can reach us.</p>
                </div>
                <div class="other-channels">
                    <ul>
                        <li class="animated fadeInUp visible" data-animation="fadeInUp">
                            <figure><img class=" lazyloaded" src="{{ asset('images/icon-call.webp')}}" data-src="{{ asset('images/icon-call.webp')}}" alt="" width="40" height="40"></figure>
                            <h4><strong>Phone</strong></h4>
                            <p>Our phone lines are available every. <strong>Monday to Friday</strong> from <span> 8AM to 5PM</span>.
                                <!-- <a href="#" class="jq-with-tooltip">See our phone line listing.</a> --></p>

                            <div class="channel-tooltips">
                                <!-- <h3>Phone Line list</h3> -->
                                <p><a href="tel:+63253248888"><span>Sales:</span> +63 (2) 53248888</a></p>
                                <p><a href="tel:+63284037368"><span>Leasing:</span> +63 (2) 84037368</a></p>
                                <p><a href="tel:+63285557777"><span>Employment Inquiry:</span> +63 (2) 85557777</a></p>
                                <p><a href="tel:+639189183456"><span>Customer Care (SMART):</span> (+63) 918 9183456 </a></p>
                                <p><a href="tel:+639178115268"><span>Customer Care (GLOBE):</span> (+63) 917 8115268 </a></p>
                                <p><a href="tel:+6328s5557777"><span>Other Inquiries:</span> +63 (2) 85557777</a></p>
                            </div>

                        </li>
                        <li class="animated hiding" data-animation="fadeInUp">
                            <figure><img class=" lazyloaded" src="{{ asset('images/icon-email.webp')}}" data-src="{{ asset('images/icon-email.webp')}}" alt="" width="40" height="40"></figure>
                            <h4><strong>Email</strong></h4>
                            <p>You may reach us by email for all manner of information. Send an enquiry to the following designated email list.</p>

                            <div class="channel-tooltips">
                                <p><a href="mailto:sales@dmcihomes.com"><span>Sales:</span> sales@dmcihomes.com</a></p>
                                <!-- <p><a href="mailto:dmci.internationalwebsite@gmail.com"><span>International Sales Inquiries:</span> dmci.internationalwebsite@gmail.com</a></p> -->
                                <p><a href="mailto:leasing@dmcihomes.com"><span>Leasing:</span> leasing@dmcihomes.com</a></p>
                                <p><a href="mailto:customercare@dmcihomes.com"><span>Customer Care Concerns:</span> customercare@dmcihomes.com</a></p>
                                <p><a href="mailto:careers@dmcihomes.com"><span>Employment Inquiry:</span> careers@dmcihomes.com</a>
                                </p>
                            </div>
                        </li>
                        <li class="animated hiding" data-animation="fadeInUp">
                            <figure><img class=" lazyloaded" src="{{ asset('images/calendar.png')}}" data-src="{{ asset('images/calendar.webp')}}" alt="" width="40" height="40"></figure>
                            <h4><strong>Set an Appointment</strong></h4>
                            <p>Avoid the long queues, book your next visit to our customer helpdesk at <a href="https://book.dmcihomes.com/" target="_blanks"><strong>book.dmcihomes.com</strong></a></p>
                        </li>
                        <li class="animated hiding" data-animation="fadeInUp">
                            <figure><img class="whistles-icon lazyloaded" style="width:60px; margin-left: -8px;" src="{{ asset('images/whistles.png')}}" data-src="{{ asset('images/whistles.png')}}" alt="" width="40" height="40"></figure>
                            <h4><strong>Whistleblower</strong></h4>
                            <p>Have you encountered any malpractice or misconduct by our company officers/employees? <a href="/contact-us/whistle-blower"><strong>Let us know</strong></a></p>
                        </li>
                        <!-- <li class="animated hiding" data-animation="fadeInUp" data-delay="500">
                            <figure><img src="/frontend/images/page_template/icon-message.png" alt=""></figure>
                            <p><strong>Chat with Us</strong></p>
                            <p>Our chat support is online every Monday to Friday from 8AM to 5PM.</p>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>            </div>
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
    <link rel="preload" href="{{ asset('css/about.css')}}" as="style">
    <link rel="stylesheet" href="{{ asset('css/about.css')}} "media="all" />


    <script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/bundle.js')}}"></script>

<script defer>

   var GLOBAL_frontend_get__properties_json = "/get/properties/json";
    var GLOBAL_app_request_schemeAndHttpHost = "https://www.dmcihomes.com";
    var GLOBAL_countries_json = "/frontend/js/countries.json";
    var GLOBAL_careers_position_json = "/json/positions.json";
    var GLOBAL_frontend_contact_us_captcha = "/contact-us/captcha/generate";
    var GLOBAL_APP_REQUEST_GET = "frontend_about_us";

    "use strict";var map,locationMap,positionMarker,locationMarker,geocoder,cookieSetupLoc,newCookieValue,activeProperties=[],allProperties=[],propertyLocation=[],selectedLocation=[],currencies={},currentLocation={lat:"",lng:""},prefCities=[],optionCities=[],locationEnabled=!1,popUpLocationValue={name:"",lat:"",lng:"",complete_address:""},autoCompleteLocationValue={name:"",lat:"",lng:"",complete_address:""};function getActivePropertiesJson(){$.ajax({url:GLOBAL_frontend_get__properties_json,type:"GET",processData:!1,success:function(a){Object.keys(a).forEach(function(b){let c=a[b];allProperties.push(c)}),activeProperties=allProperties.reduce(function(a,c){var b=c.city;return a[b]=a[b]||[],a[b].push(c),a},{});var c=[];allProperties.forEach(function(a){c[a.city]=a.city_slug});var b=$("#sidebar-property-modal-location-list");b.append('<li><a href="#" class="btn btn-round btn-ghost sidebar-location-all active" data-location="all">View All</a></li>'),Object.keys(activeProperties).forEach(function(a){propertyLocation.push(a)}),propertyLocation.sort(),propertyLocation.forEach(function(a){var d=c[a];b.append('<li><a href="'+GLOBAL_app_request_schemeAndHttpHost+"/"+d+'" class="btn btn-round btn-ghost sidebar-location-filter" data-location="'+a+'">'+a+"</a></li>")}),$(".sidebar-location-all").click(function(){selectedLocation=null,loadAllProperties(),$(".sidebar-location-filter").removeClass("active"),$(this).addClass("active")}),$(".sidebar-location-filter").click(function(a){a.preventDefault(),populateSidebarProperties(selectedLocation=$(this).data("location")),$(".sidebar-location-all").removeClass("active"),$(".sidebar-location-filter").removeClass("active"),$(this).addClass("active")})}})}function populateSidebarProperties(a){var b=activeProperties[a],c=$("#sidebar-property-list");c.empty(),$("#sidebar-property-header").text('Properties around "'+a+'".'),b.sort(),b.forEach(function(a){var b="coming-soon",d="cs",e=Number(a.price_range[0].min_price),f=Number(a.price_range[0].max_price);1===a.status?(b="new",d="new"):2===a.status?(b="RFO",d="rfo"):3===a.status&&(b="under-construction",d="uc");var g='<span data-value="'+e+'" class="currency-convert">'+e+'</span> - <span data-value="'+f+'" class="currency-convert">'+f+"</span>";0==a.is_unit_activated&&(g="<span>NOT YET AVAILABLE</span>");var h='<li class="box-card">                <div class="property-item">                    <a href="/'+a.slug+'">                        <figure class="property-img">                            <img class="lazyload" src="frontend/images/page_template/lazyload.png" data-src="'+a.image+'" alt="">                                <span class="property-status circle-white">                                    <span class="'+d+" icon-"+b+'"></span>                                </span>                        </figure>                        <div class="property-detail">                            <h3>'+a.name+'</h3>                            <p class="price">'+g+"</p>                        </div>                    </a>                </div>            </li>";c.append(h),convertCurrencies()})}function loadAllProperties(){var a=$("#sidebar-property-list");a.empty(),$("#sidebar-property-header").text("Viewing all properties."),allProperties.forEach(function(b){var c="coming-soon",d="cs",e=Number(b.price_range[0].min_price),f=Number(b.price_range[0].max_price);1===b.status?(c="new",d="new"):2===b.status?(c="RFO",d="rfo"):3===b.status&&(c="under-construction",d="uc");var g='<span data-value="'+e+'" class="currency-convert">'+e+'</span> - <span data-value="'+f+'" class="currency-convert">'+f+"</span>";0==b.is_unit_activated&&(g="<span>NOT YET AVAILABLE</span>");var h='<li class="box-card">                <div class="property-item">                    <a href="/'+b.slug+'">                        <figure class="property-img">                            <img class="lazyload" src="frontend/images/page_template/lazyload.png" data-src="'+b.image+'" alt="">                                <span class="property-status circle-white">                                    <span class="'+d+" icon-"+c+'"></span>                                </span>                        </figure>                        <div class="property-detail">                            <h3>'+b.name+'</h3>                            <p class="price">'+g+"</p>                        </div>                    </a>                </div>            </li>";a.append(h)})}function initializeDefaultButtons(){$("#property-sidebar-list-button").click(function(a){a.preventDefault(),loadAllProperties(),convertCurrencies()}),$("#save-profile").click(function(a){a.preventDefault();var b=$("#pop-up-looking-select").val(),c=JSON.stringify(popUpLocationValue),d=$("#pop-up-currency-select").val(),e=$("#pop-up-language-select").val(),f=$("#pop-up-measure-select").val();setCookie("profile-lookingFor",b,31),setCookie("profile-locatedNear",c,31),setCookie("profile-currency",d,31),setCookie("profile-language",e,31),setCookie("profile-measure",f,31),setCookie("profile-set",!0,31),$.fancybox.close("#cookie-preference"),loadCookies(),$(".hamburger-menu").hasClass("active")&&$(".hamburger-menu").click(),convertMeasures(),convertDistances(),convertCurrencies()}),$("#done-location-search").click(function(a){a.preventDefault(),setCookie("profile-locatedNear",JSON.stringify(autoCompleteLocationValue),31),$.fancybox.close("#map-pin"),loadCookies()}),$("#clear-location-search").click(function(a){a.preventDefault(),autoCompleteLocationValue=void 0,$("#search-location-autocomplete").val("").focus(),$("#header-search-location-field").val(""),$("#advance-search-location").val("")}),$("#skip-profile").click(function(a){a.preventDefault(),setCookie("profile-set",!0,31),setCookie("profile-measure",$("#pop-up-measure-select").val(),31),$.fancybox.close("#cookie-preference")}),$(".pop-up-trigger").click(function(a){$.fancybox.open({src:"#cookie-preference",clickContent:!1,beforeShow:function(){$(".fancybox-bg").css({background:"rgba(255, 255, 255, 0.6)"})}})}),$("#advance-search-button").click(function(g){g.preventDefault();var h=$(".advance-status-cb:checked"),i=$(".advance-unit-type-cb:checked"),j=$(".advance-dev-type-cb:checked"),a=[];h.each(function(c,b){a.push(b.value)});var b=[];i.each(function(c,a){b.push(a.value)});var c=[];j.each(function(b,a){c.push(a.value)});var k=currentLocation.lat,l=currentLocation.lng,d=$("#min-price-select").val(),e=$("#max-price-select").val(),f=$("#advance-search-location").val();""===f?window.location="/property-finder?search=advance&min="+d+"&max="+e+"&type="+b.toString()+"&dev="+c.toString()+"&status="+a.toString()+"&location=any":window.location="/property-finder?search=advance&lat="+k+"&lng="+l+"&min="+d+"&max="+e+"&type="+b.toString()+"&dev="+c.toString()+"&status="+a.toString()+"&address="+f}),$(".advance-dev-type-cb").change(function(){4==$(this).val()&&$(".advance-dev-type-cb[value=4]").is(":checked")?$(".sdv").prop("disabled",!1):$(".advance-dev-type-cb[value=4]").is(":checked")||$(".sdv").prop("disabled",!0)});var a=!1,b=!1,c=!1;$(".ads-types input[type=checkbox]").change(function(){var d="";$(".ads-types input[type=checkbox]").each(function(){d+=this.checked?"1,":"0,"}),(d=d.substr(0,d.length-1)).indexOf("1")> -1?(b=!0,a&&b&&c&&$("#advance-search-button").removeClass("disabled")):(b=!1,$("#advance-search-button").addClass("disabled"))}),$(".ads-unit-type input[type=checkbox]").change(function(){var d="";$(".ads-unit-type input[type=checkbox]").each(function(){d+=this.checked?"1,":"0,"}),(d=d.substr(0,d.length-1)).indexOf("1")> -1?(a=!0,b&&c&&$("#advance-search-button").removeClass("disabled")):(a=!1,$("#advance-search-button").addClass("disabled"))}),$(".fa-status-list input[type=checkbox]").change(function(){var d="";$(".fa-status-list input[type=checkbox]").each(function(){d+=this.checked?"1,":"0,"}),(d=d.substr(0,d.length-1)).indexOf("1")> -1?(c=!0,a&&b&&c&&$("#advance-search-button").removeClass("disabled")):(c=!1,$("#advance-search-button").addClass("disabled"))}),$(".slider-advisory").owlCarousel({loop:!0,item:1,margin:10,nav:!1,dots:!1,autoplay:!0,autoplayTimeout:7e3,autoplayHoverPause:!0,responsive:{0:{items:1},600:{items:1},1e3:{items:1}}})}function loadCookies(){getCookie("profile-lookingFor");var a,b=getCookie("profile-locatedNear"),c=getCookie("profile-currency"),e=getCookie("profile-language"),d=getCookie("profile-measure");""===d&&(setCookie("profile-measure",$("#pop-up-measure-select").val(),31),d=getCookie("profile-measure")),(void 0===c||"undefined"===c||""===c)&&(setCookie("profile-currency","PHP",31),c=getCookie("profile-currency")),""!==b&& void 0!==b&&"undefined"!==b&&"null"!==b&&(popUpLocationValue=a=JSON.parse(b),$("#pop-up-location-select").val(a.name),$("#search-location-autocomplete").val(a.name),autoCompleteLocationValue={name:a.name,complete_address:a.complete_address,lat:a.lat,lng:a.lng},geocodeDefault()),$("#pop-up-language-select").val(e),$("#pop-up-measure-select").val(d),$("#pop-up-currency-select").val(c)}function convertMeasures(){$(".area-convert").each(function(){var a=+$(this).data("value"),b=" sqm.";"Imperial"===getCookie("profile-measure")&&(a*=10.764,b=" sft."),this.innerHTML=a.toLocaleString(void 0,{maximumFractionDigits:2})+b})}function convertDistances(){$(".distance-convert").each(function(){var a=+$(this).data("value");"Imperial"===getCookie("profile-measure")&&(a*=.62137),this.innerHTML=a.toLocaleString(void 0,{maximumFractionDigits:2})})}function convertCurrencies(){var a=getCookie("profile-currency");void 0===localStorage.getItem("conversion")&&getCurrencies();var b=JSON.parse(localStorage.getItem("conversion"))[a];$(".currency-convert").each(function(){var c=+$(this).data("value");c*=b,this.innerHTML=a+" "+c.toLocaleString(void 0,{maximumFractionDigits:2})}),$(".currency-convert-no-symbol").each(function(){var a=+$(this).data("value");a*=b,this.innerHTML=a.toLocaleString(void 0,{maximumFractionDigits:2})})}function getCurrencyMultiplier(){var a=getCookie("profile-currency");return void 0===localStorage.getItem("conversion")&&getCurrencies(),JSON.parse(localStorage.getItem("conversion"))[a]}function getCurrencyCode(){return getCookie("profile-currency")}function setCookie(b,c,d){var a=new Date;a.setTime(a.getTime()+864e5*d);var e="expires="+a.toUTCString();document.cookie=b+"="+c+";"+e+";path=/"}function getCookie(e){for(var c=e+"=",d=decodeURIComponent(document.cookie).split(";"),b=0;b<d.length;b++){for(var a=d[b];" "===a.charAt(0);)a=a.substring(1);if(0===a.indexOf(c))return a.substring(c.length,a.length)}return""}function getParameterByName(a,b){b||(b=window.location.href),a=a.replace(/[\[\]]/g,"\\$&");var c=new RegExp("[?&]"+a+"(=([^&#]*)|&|#|$)").exec(b);return c?c[2]?decodeURIComponent(c[2].replace(/\+/g," ")):"":null}function showMap(e){geocoder=new google.maps.Geocoder;var a=14.5427941,b=121.0130898;locationMap=new google.maps.Map(document.getElementById("home-pin-map"),{center:new google.maps.LatLng(a,b),zoom:14,streetViewControl:!1,styles:[{featureType:"administrative",elementType:"geometry",stylers:[{visibility:"off"}]},{featureType:"poi",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"transit",stylers:[{visibility:"off"}]}]});var f={url:"/frontend/images/loading-idle.gif",scaledSize:new google.maps.Size(70,70),origin:null,anchor:null,size:null};positionMarker=new google.maps.Marker({position:new google.maps.LatLng(a,b),map:locationMap,animation:google.maps.Animation.DROP,draggable:!0,icon:f}),!1===geocodeDefault()&&null!==e&&(locationEnabled=!0,a=e.coords.latitude,b=e.coords.longitude,currentLocation.lat=a,currentLocation.lng=b,placeMarkerAndPanTo(new google.maps.LatLng(a,b)),geocode(new google.maps.LatLng(a,b))),locationMap.addListener("click",function(a){placeMarkerAndPanTo(a.latLng,locationMap),geocode(a.latLng)}),positionMarker.setVisible(!0),google.maps.event.addListener(positionMarker,"dragend",function(a){placeMarkerAndPanTo(a.latLng,locationMap),geocode(a.latLng)});var g=document.getElementById("pop-up-location-select"),c=new google.maps.places.Autocomplete(g);c.bindTo("bounds",locationMap),c.setTypes([]),c.setFields(["address_components","geometry","icon","name"]),c.addListener("place_changed",function(){var a=c.getPlace(),b="";a.address_components.forEach(function(a,c){b=0===c?a.long_name:b+","+a.long_name}),popUpLocationValue={name:a.name,complete_address:b,lat:a.geometry.location.lat(),lng:a.geometry.location.lng()}});var h=document.getElementById("search-location-autocomplete"),d=new google.maps.places.Autocomplete(h);d.bindTo("bounds",locationMap),d.setTypes([]),d.setFields(["address_components","geometry","icon","name"]),d.addListener("place_changed",function(){var a=d.getPlace(),b="";a.address_components.forEach(function(a,c){b=0===c?a.long_name:b+","+a.long_name}),autoCompleteLocationValue={name:a.name,complete_address:b,lat:a.geometry.location.lat(),lng:a.geometry.location.lng()},a.geometry.location?placeMarkerAndPanTo(a.geometry.location):locationMap.setCenter(a.geometry.location)})}function placeMarkerAndPanTo(a){void 0!==positionMarker&&positionMarker.setPosition(a),void 0!==locationMap&&(locationMap.panTo(a),locationMap.setZoom(17))}function geocodeDefault(){var a,b=getCookie("profile-locatedNear");try{a=JSON.parse(b),currentLocation.lat=a.lat,currentLocation.lng=a.lng,"function"==typeof getRecommended&&getRecommended(a.lat,a.lng),placeMarkerAndPanTo(new google.maps.LatLng(a.lat,a.lng)),$("#header-search-location-field").val(a.name),$("#advance-search-location").val(a.name)}catch(c){return"function"==typeof getRecommended&&(getRecommended("",""),placeMarkerAndPanTo(new google.maps.LatLng(currentLocation.lat,currentLocation.lng))),!1}return!0}function geocode(a){geocoder.geocode({location:a},function(b,c){"OK"===c&&(b[0]&&($("#header-search-location-field").val(b[0].formatted_address),$("#advance-search-location").val(b[0].formatted_address),$("#search-location-autocomplete").val(b[0].formatted_address)),autoCompleteLocationValue={name:b[0].formatted_address,complete_address:b[0].formatted_address,lat:a.lat(),lng:a.lng()},"getRecommended"==typeof obj&&getRecommended(a.lat(),a.lng()))})}function IsEmail(a){return/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(a)}function populateCoutries(){$.getJSON(GLOBAL_countries_json,function(a){a.countries.forEach(function(b){var a='<option value="'+b.value+'" ';"Philippines"===b.value&&(a+="selected "),a=a+">"+b.name+"</option>",$("#country").append(a)})})}function populatePositions(){$.getJSON(GLOBAL_careers_position_json,function(a){a.positions.forEach(function(b){var a='<option value="'+b.value+'" ';a=a+">"+b.name+"</option>",$("#position-interested").append(a)})}).then(function(){$("#position-interested").multiselect({enableFiltering:!0,enableCaseInsensitiveFiltering:!0})})}function populateContactProperties(){var a=$("#propertyInterested"),b=$("#propertyOwned"),c={enableFiltering:!0,enableCaseInsensitiveFiltering:!0};a.empty(),b.empty(),allProperties.forEach(function(d,f){var e='<option value="'+d.id+'" >'+d.name+" | "+d.city+"</option>";a.append(e),b.append(e),f===allProperties.length-1&&(firedContactSelect=!0,$("#propertyInterested").multiselect(c),$("#propertyOwned").multiselect(c),$(".contact-form-wrap").removeClass("loading-form"))})}function change_captcha(){document.getElementById("captcha").src=GLOBAL_frontend_contact_us_captcha}$(document).ready(function(){$(".copy-url").click(function(b){var a;b.preventDefault(),document.querySelector(".js-copytextarea").select();try{document.execCommand("copy")}catch(c){}$(".notes-copied").addClass("active"),clearTimeout(a),a=setTimeout(function(){$(".notes-copied").removeClass("active")},2500)}),$(document).on("click",".pi-share",function(b){b.preventDefault();var c=$(this).data("url"),a=GLOBAL_app_request_schemeAndHttpHost+"/"+c;$("#share-url-fb").attr("href","https://www.facebook.com/sharer/sharer.php?u="+a),$("#share-url-twitter").attr("href","https://twitter.com/intent/tweet?url="+a),$("#input-share-url").val(a),$(".js-copytextarea").val(a),$("#a-share-url").attr("data-url",a),$.fancybox.open({src:"#share-info",autoSize:!1,toolbar:!0,gutter:20,touch:!1,fitToView:!1,clickContent:!1})}),initializeDefaultButtons(),loadCookies(),getCookie("DMCI_advisory"),"-1"==document.cookie.indexOf("advisoryCookie=here")&&($(".advisory-wrap").addClass("active"),1025>$(window).width()&&$("body").addClass("advisory"),$(".advisory-wrap .jq-close").click(function(b){b.preventDefault();var a=new Date;a=new Date(a.getTime()+864e5),document.cookie="advisoryCookie=here; expires="+a,$("body.advisory").removeClass("advisory"),$(".advisory-wrap").removeClass("active"),$(".advisory-wrap").addClass("hide")}),$(".advisory-wrap btn.btn-round").click(function(){var a=new Date;return a=new Date(a.getTime()+864e5),document.cookie="advisoryCookie=here; expires="+a,$("body.advisory").removeClass("advisory"),$(".advisory-wrap").removeClass("active"),$(".advisory-wrap").addClass("hide"),!0}))}),$(function(){getActivePropertiesJson()});var isBusyCaptcha=!1;$("img#refresh").click(function(){!1==isBusyCaptcha&&(isBusyCaptcha=!0,$("img#refresh").addClass("active"),setTimeout(function(){$("img#refresh").removeClass("active"),isBusyCaptcha=!1},300),change_captcha())}),$("#captchaerror-close").click(function(a){a.preventDefault(),$.fancybox.close("#captcha-error")});var firedContactSelect=!1;"frontend_single_property"!==GLOBAL_APP_REQUEST_GET?($(document).ready(function(){}),$(window).on("scroll",function(){if($(".contact-form-wrap").length>0){var a=window.innerHeight?window.innerHeight:$(window).height(),b=$(window).scrollTop(),c=$(".contact-form-wrap").offset(),d=c.top-a;b>=d&& !1==firedContactSelect&&populatePositions()}})):$(function(){var a={enableFiltering:!0,enableCaseInsensitiveFiltering:!0};$("#position-interested").multiselect(a),$("#propertyInterested").multiselect(a),$("#propertyOwned").multiselect(a)}),$(function(){getCookie("profile-set")||$.fancybox.open({src:"#cookie-preference",modal:!0,beforeShow:function(){$(".fancybox-bg").css({background:"rgba(255, 255, 255, 0.6)"})}})})

</script>


            <link rel="preload" href="{{ asset('js/TweenMax.min.js')}}" as="script">
<link rel="preload" href="{{ asset('js/jquery.waterwheelCarousel.js')}}" as="script">
<script src="{{ asset('js/TweenMax.min.js')}}"></script>
<script src="{{ asset('js/jquery.waterwheelCarousel.js')}}"></script>


    <script>
        "use strict";function initButtonPopup(){$(document).on("click",".jq-link-popup",function(){var a=$(this).data("content"),t=$(this).data("title"),e=$(this).data("image");$("#values-info h2").text(t),$("#values-info article").html(a),$("#values-info figure ").html('<img width="100%" src="'+e+'" alt="" />')}),$(document).on("click",".jq-brand-popup",function(){var a=$(this).data("content");$("#brand-more-story article").html(a)})}function getCoreValues(){$.ajax({url:"/about/core-values/html",type:"GET",processData:!1,success:function(a){$("#core-values-wrapper").html(a)}})}function getBrandValues(){$.ajax({url:"/about/brand-values/html",type:"GET",processData:!1,success:function(a){$("#brandValues").html(a)}})}function getInnnovations(){$.ajax({url:"/about/innovations/html",type:"GET",processData:!1,success:function(a){$("#innovations-wrapper").html(a)}})}function getAwards(){$.ajax({url:"/about/awards/html",type:"GET",processData:!1,success:function(a){$("#awards").html(a)}}).then(function(){var a=$("#awards");a.waterwheelCarousel({flankingItems:5,separation:480>$(window).width()?100:290,opacityMultiplier:1,animationEasing:"swing",activeClassName:"active",keyboardNav:!0});var t=$("#award-dots");a.find(".award-item").each(function(){var a=$(this).data("num"),e="";1==a&&(e="active"),t.append('<a href="#" class="award-dot '+e+'" data-num="'+a+'"><span>'+a+"</span></a>")}),$(".award-item").click(function(){var a=$(this).data("num");console.log(a),$(".award-dot").removeClass("active"),$(".award-dot[data-num="+a+"]").addClass("active"),console.log($(".award-item[data-num="+a+"]"))}),$(".award-dots .award-dot").click(function(a){a.preventDefault();var t=$(this).data("num");$(".award-dots .award-dot").removeClass("active"),$(this).addClass("active"),$(".award-item[data-num="+t+"]").click()})})}function getPartners(){$.ajax({url:"/about/partners/html",type:"GET",processData:!1,success:function(a){$("#partners-wrapper").html(a)}})}function getExecutives(){$.ajax({url:"/about/executives/get/html",type:"GET",processData:!1,success:function(a){$("#executives-wrapper").html(a)}})}function getAffliates(){$.ajax({url:"/about/affiliates/html",type:"GET",processData:!1,success:function(a){$("#affiliates_wrapper").html(a)}})}$(document).ready(function(a){getCoreValues(),getBrandValues(),getInnnovations(),getAwards(),getPartners(),getExecutives(),getAffliates(),initButtonPopup()});


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
