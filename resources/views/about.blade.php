@include('layouts.landing.sidebar')


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
            <img class="lazyload" data-src="{{ asset('images/hero-shd.webp') }}" width="1440" height="330"
                alt="MDN">
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
            <img class="lazyload" src="{{ asset('images/lazyload.png') }}" data-src="{{ asset('images/helmet.png') }}"
                width="765" height="491" alt="MDN">
        </figure>
    </section>
    <div class="container">
        <div class="row">
            @foreach ($missions as $mission)
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
                            <li>While building an organization that espouses Integrity, Excellence and Interdependence
                            </li>
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
                    <p>That construction is a noble profession whose activities are vital to economic development and
                        national progress,</p>
                    <p>That fair competition is essential to the growth and stability of the construction industry,</p>
                    <p>That a contractor's primary responsibility to his client is to give his best in faithful
                        compliance with their agreement;</p>
                    <p>That labor and capital should cooperate with one another so that labor may live with dignity and
                        capital may find its just rewards;</p>
                    <p>That the ill-gotten violates business ethics and the ill-conceived wreaks havoc on the public
                        good;</p>
                    <p>That the ultimate objectives are to serve not only man but humankind; and to build not only an
                        enterprise but an institution that will serve society.</p>
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
            @foreach ($cores as $core)
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
                @foreach ($brands as $brand)
                    <div class="col-lg-7 col-sm-12 brand-story-content">
                        <h3>
                            <td>{{ $brand->name }}</td>
                        </h3>
                        <p>&nbsp;</p>
                        <p><strong>Inspired by Alfonso</strong><br />
                        <p>{{ $brand->description }}</p>
                        <a href="#brand-more-story" class="btn btn-large btn-round btn-ghost text-dark jq-brand-popup"
                            data-fancybox
                            data-content="&lt;h3&gt;The Heroes of the Underserved: the DMCI Homes Brand Story&lt;/h3&gt;
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
&lt;p&gt;In some secret cavern, our heroes keep the blueprint of a dream: a city of tomorrow--a place where a more prosperous Alfonso shall live and work. Our heroes dream of a 50-storey tower with a view of the bay and mountains beyond. They dream of the easy flow of traffic and a causeway that gets Alfonso to the old city in a matter of minutes. The finest of leisure, entertainment, working spaces, and family havens are in one accessible site. For Alfonso...the city of tomorrow is a place NEVER out of reach.&lt;/p&gt;"
                            data-title="Brand Story">Read More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <picture class="coverimage-img">
        <source data-srcset="{{ asset('images/brand-story.png') }}" media="(min-width: 570px)">
        <source data-srcset="{{ asset('images/brand-story-mobile.jpg') }}" media="(min-width: 320px)">
        <img class="lazyload" src="{{ asset('images/lazyload.png') }}"
            data-src="{{ asset('images/brand-story-mobile.jpg') }}" width="1381" height="570" alt="MDN">
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
                @foreach ($values as $value)
                    <li class="box-card">
                        <figure class="property-img">
                            <img src="{{ asset('images/value/' . $value->image) }}" alt="Value Image"
                                width="100">
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



<section
    class="sec-pad sec-default banner for-pages slant-border slant-bot slant-white slant-ghost slant-right innovation jq-section"
    id="innovation">
    <div class="slant-border slant-bot slant-grey slant-ghost slant-right"></div>
    <div class="coverimage-title banner-text innovation">
        <div class="container">
            <div>
                <p>How do you bring that distinct outdoor <br>feel inside a modern home?</p>
                <h3>Our answer is</h3>
                <h2>INNOVATION</h2>
            </div>
            <div class="play-video"><a data-fancybox="" href="https://youtu.be/GrwjxlOmNs0?autoplay=1"><span
                        class="icon-play-button"></span></a></div>
        </div>
    </div>
    <picture>
        <source data-srcset="{{ asset('images/innovation-banner.jpg') }}" media="(min-width: 570px)"
            srcset="{{ asset('images/innovation-banner.jpg') }}">
        <source data-srcset="{{ asset('images/innovation-mobile.jpg') }}" media="(min-width: 320px)"
            srcset="{{ asset('images/innovation-mobile.jpg') }}">
        <img class=" ls-is-cached lazyloaded" src="{{ asset('images/innovation-mobile.jpg') }}"
            data-src="{{ asset('images/innovation-mobile.jpg') }}" width="1381" height="570" alt="MDN">
    </picture>
</section>
<section class="sec-pad sec-default sec-reveal innovation-content" id="innovation-content">
    <div class="container">
        <div class="about-cards col-card-2">
            <ul class="flex card-list" id="innovations-wrapper">

                <li class="box-card">
                    <div class="content">
                        <img class=" ls-is-cached lazyloaded"
                            src="{{ asset('images/innovation-item-1551064810547.png') }}"
                            data-src="{{ asset('images/innovation-item-1551064810547.png') }}"
                            alt="/uploads/media/innovation-item-1551064810547" width="300" height="115">
                        <h3>Lumiventt Design Technology</h3>
                        <p></p>
                        <p><span
                                style="color: #212121; font-family: avenir, Helvetica, sans-serif; text-align: justify;">From
                                'lumen' meaning light and 'ventus' meaning wind, this pioneering design technology for
                                high-rise structures allows ambient light and fresh air to permeate the building and all
                                unit spaces within. Sky Patios, 3-storey high openings located at the front and back of
                                every five-floor levels, and breezeways, vents at both sides of the building; allow
                                cross-ventilation by employing basic principles of airflow. The introduction of single
                                loaded hallways and central garden atriums not only improve aesthetics but also give a
                                wide open feel to the building interior, for true resort-inspired living.</span></p>
                        <p></p>
                    </div>
                </li>

                <li class="box-card">
                    <div class="content">
                        <img class=" ls-is-cached lazyloaded" src="{{ asset('images/Quality-Seal.jpg') }}"
                            data-src="{{ asset('images/Quality-Seal.jpg') }}" alt="/uploads/media/" width="300"
                            height="115">
                        <h3>The DMCI Homes Quality Seal</h3>
                        <p></p>
                        <p
                            style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: avenir, Helvetica, sans-serif; vertical-align: baseline; overflow: hidden; word-break: break-word; text-align: justify; color: #212121;">
                            The DMCI Homes Quality Seal signifies that a property has passed DMCI Homes's standard 102
                            Inspection Points from the start of construction, design until the property's turnover. This
                            is done to assure that all our projects are high quality.</p>
                        <p></p>
                    </div>
                </li>


            </ul>
        </div>
    </div>


    <section class="sec-pad sec-default executives jq-section" id="executives">
        <div class="container">
            <div class="sec-head">
                <h2 class="sec-title">Certification and Awards</h2>
                <p>Excellent quality has always been one of our strengths and it is recognized by various organizations
                    inside and outside of the Philippines. </p>
            </div>
        </div>


        <div class="container">
            <div class="about-cards">
                <ul class="flex card-list" id="executives-wrapper">
                    @foreach ($certifications as $certification)
                        <li class="box-card">
                            <figure class="property-img">
                                <img src="{{ asset('images/' . $certification->image) }}" alt="Certification Image"
                                    width="295" height="205">
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
                <p>DMCI Homes fosters partnerships with only the best companies to ensure the excellent quality of
                    properties we provide.</p>
            </div>
            <div class="brand-logos">
                <ul class="flex" id="partners-wrapper">
                    <li><img class="lazyloaded" src="{{ asset('images/bpi.jpg') }}"
                            data-src="{{ asset('images/bpi.jpg') }}" alt="/uploads/media/" width="160"
                            height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1550835568259.jpg') }}"
                            data-src="{{ asset('images/partner-image-1550835568259.jpg') }}"
                            alt="/uploads/media/partner-image-1550835568259" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551156543414.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551156543414.jpg') }}"
                            alt="images/partner-image-1551156543414" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551156606344.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551156606344.jpg') }}"
                            alt="images/partner-image-1551156606344" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551156695438.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551156695438.jpg') }}"
                            alt="images/partner-image-1551156695438" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157038919.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157038919.jpg') }}"
                            alt="images/partner-image-1551157038919" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157111806.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157111806.jpg') }}"
                            alt="images/partner-image-1551157111806" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157171813.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157171813.jpg') }}"
                            alt="images/partner-image-1551157171813" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157229700.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157229700.jpg') }}"
                            alt="images/partner-image-1551157229700" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157297236.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157297236.jpg') }}"
                            alt="images/partner-image-1551157297236" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157346861.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157346861.jpg') }}"
                            alt="images/partner-image-1551157346861" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157401916.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157401916.jpg') }}"
                            alt="images/partner-image-1551157401916" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157434324.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157434324.jpg') }}"
                            alt="images/partner-image-1551157434324" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157470053.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157470053.jpg') }}"
                            alt="images/partner-image-1551157470053" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157531692.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157531692.jpg') }}"
                            alt="/uploads/media/partner-image-1551157531692" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157577108.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157577108.jpg') }}"
                            alt="/uploads/media/partner-image-1551157577108" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157619204.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157619204.jpg') }}"
                            alt="/uploads/media/partner-image-1551157619204" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157663219.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157663219.jpg') }}"
                            alt="/uploads/media/partner-image-1551157663219" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157852213.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157852213.jpg') }}"
                            alt="/uploads/media/partner-image-1551157852213" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157899283.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157899283.jpg') }}"
                            alt="/uploads/media/partner-image-1551157899283" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157939371.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157939371.jpg') }}"
                            alt="/uploads/media/partner-image-1551157939371" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551157972275.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551157972275.jpg') }}"
                            alt="/uploads/media/partner-image-1551157972275" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551158019618.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551158019618.jpg') }}"
                            alt="/uploads/media/partner-image-1551158019618" width="160" height="135"></li>
                    <li><img class="lazyloaded" src="{{ asset('images/partner-image-1551158059652.jpg') }}"
                            data-src="{{ asset('images/partner-image-1551158059652.jpg') }}"
                            alt="/uploads/media/partner-image-1551158059652" width="160" height="135"></li>
                </ul>
            </div>
        </div>
        <!-- <div class="slant-border slant-bot slant-grey slant-left"></div> -->
    </section>


    <section class="sec-pad sec-default executives jq-section" id="executives">
        <div class="container">
            <div class="sec-head">
                <h2 class="sec-title">Executives</h2>
                <p>DMCI Homes is guided by seasoned executives with vast knowledge and experience in property
                    development</p>
            </div>
        </div>



        <div class="container">
            <div class="about-cards">
                <ul class="flex card-list" id="executives-wrapper">
                    @foreach ($executives as $executive)
                        <li class="box-card">
                            <figure class="property-img">
                                <img src="{{ asset('images/executive/' . $executive->image) }}" alt="Executive Image"
                                    width="295" height="205">
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
                <p>DMCI Holdings Inc. along with its subsidiaries has conquered the test of time and are always
                    dedicated in providing only the best to the communities it serves. </p>
            </div>

            <div class="brand-logos affiliates">
                <ul class="flex" id="affiliates_wrapper">
                    <li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552378020317.jpg') }}"
                            data-src="{{ asset('images/affiliates-1552378020317.jpg') }}"
                            alt="/uploads/media/affiliates-1552378020317" width="176" height="100"></li>
                    <li><img class=" lazyloaded" src="{{ asset('images/affiliates-1563253721818.jpg') }}"
                            data-src="{{ asset('images/affiliates-1563253721818.jpg') }}"
                            alt="{{ asset('images/affiliates-1563253721818.jpg') }}" width="176" height="100">
                    </li>
                    <li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552377809892.jpg') }}"
                            data-src="{{ asset('images/affiliates-1552377809892.jpg') }}"
                            alt="/uploads/media/affiliates-1552377809892" width="176" height="100"></li>
                    <li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552377895748.jpg') }}"
                            data-src="{{ asset('images/affiliates-1552377895748.jpg') }}"
                            alt="/uploads/media/affiliates-1552377895748" width="176" height="100"></li>
                    <li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552377920581.jpg') }}"
                            data-src="{{ asset('images/affiliates-1552377920581.jpg') }}"
                            alt="/uploads/media/affiliates-1552377920581" width="176" height="100"></li>
                    <li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552377952905.jpg') }}"
                            data-src="{{ asset('images/affiliates-1552377952905.jpg') }}"
                            alt="/uploads/media/affiliates-1552377952905" width="176" height="100"></li>
                    <li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552377977900.jpg') }}"
                            data-src="{{ asset('images/affiliates-1552377977900.jpg') }}"
                            alt="/uploads/media/affiliates-1552377977900" width="176" height="100"></li>
                    <li><img class=" lazyloaded" src="{{ asset('images/affiliates-1553167305245.jpg') }}"
                            data-src="{{ asset('images/affiliates-1553167305245.jpg') }}"
                            alt="/uploads/media/affiliates-1553167305245" width="176" height="100"></li>
                    <li><img class=" lazyloaded" src="{{ asset('images/affiliates-1552377998070.jpg') }}"
                            data-src="{{ asset('images/affiliates-1552377998070.jpg') }}"
                            alt="/uploads/media/affiliates-1552377998070" width="176" height="100"></li>
                    <li><img class=" lazyloaded" src="{{ asset('images/affiliates-1563258239287.jpg') }}"
                            data-src="{{ asset('images/affiliates-1563258239287.jpg') }}"
                            alt="/uploads/media/affiliates-1563258239287" width="176" height="100"></li>
                    <li><img class=" lazyloaded" src="{{ asset('images/affiliates-1641127835619.jpeg') }}"
                            data-src="{{ asset('images/affiliates-1641127835619.jpeg') }}"
                            alt="/uploads/media/affiliates-1641127835619" width="176" height="100"></li>


                </ul>
            </div>
        </div>
        <!-- <div class="slant-border slant-bot slant-right"></div> -->
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
                        @foreach ($kaakbays as $kaakbay)
                            <div class="grid-item" data-animation="fadeInUp">
                                <article class="article-item article-min">
                                    <figure class="article-img">
                                        <a
                                            href="/whats-new/news/dmci-homes-employees-help-brgy-bangkal-makati-public-schools">
                                            <img src="{{ asset('images/kaakbay/' . $kaakbay->image) }}"
                                                alt="kaakbay Image" width="100">
                                        </a>
                                    </figure>
                                    <div class="article-info">
                                        <p class="tag"></p>
                                        <h2 class="article-title">
                                            <a
                                                href="/whats-new/news/dmci-homes-employees-help-brgy-bangkal-makati-public-schools">{{ $kaakbay->name }}</a>
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
                <div class="loader-pin"><img src="/frontend/images/loading-idle.gif" width="70" height="70">
                </div>
            </div>
            <p class="notes">
                <em>You can drag the map pin to change your location.</em>
            </p>
        </div>
    </div>





    <link rel="preload" href="{{ asset('css/about.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('css/about.css') }} "media="all" />


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bundle.js') }}"></script>

    <script defer>
        var GLOBAL_frontend_get__properties_json = "/get/properties/json";
        var GLOBAL_app_request_schemeAndHttpHost = "https://www.dmcihomes.com";
        var GLOBAL_countries_json = "/frontend/js/countries.json";
        var GLOBAL_careers_position_json = "/json/positions.json";
        var GLOBAL_frontend_contact_us_captcha = "/contact-us/captcha/generate";
        var GLOBAL_APP_REQUEST_GET = "frontend_about_us";

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




    <link rel="preload" href="{{ asset('js/TweenMax.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('js/jquery.waterwheelCarousel.js') }}" as="script">
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waterwheelCarousel.js') }}"></script>


    <script>
        "use strict";

        function initButtonPopup() {
            $(document).on("click", ".jq-link-popup", function() {
                var a = $(this).data("content"),
                    t = $(this).data("title"),
                    e = $(this).data("image");
                $("#values-info h2").text(t), $("#values-info article").html(a), $("#values-info figure ").html(
                    '<img width="100%" src="' + e + '" alt="" />')
            }), $(document).on("click", ".jq-brand-popup", function() {
                var a = $(this).data("content");
                $("#brand-more-story article").html(a)
            })
        }

        function getCoreValues() {
            $.ajax({
                url: "/about/core-values/html",
                type: "GET",
                processData: !1,
                success: function(a) {
                    $("#core-values-wrapper").html(a)
                }
            })
        }

        function getBrandValues() {
            $.ajax({
                url: "/about/brand-values/html",
                type: "GET",
                processData: !1,
                success: function(a) {
                    $("#brandValues").html(a)
                }
            })
        }

        function getInnnovations() {
            $.ajax({
                url: "/about/innovations/html",
                type: "GET",
                processData: !1,
                success: function(a) {
                    $("#innovations-wrapper").html(a)
                }
            })
        }

        function getAwards() {
            $.ajax({
                url: "/about/awards/html",
                type: "GET",
                processData: !1,
                success: function(a) {
                    $("#awards").html(a)
                }
            }).then(function() {
                var a = $("#awards");
                a.waterwheelCarousel({
                    flankingItems: 5,
                    separation: 480 > $(window).width() ? 100 : 290,
                    opacityMultiplier: 1,
                    animationEasing: "swing",
                    activeClassName: "active",
                    keyboardNav: !0
                });
                var t = $("#award-dots");
                a.find(".award-item").each(function() {
                    var a = $(this).data("num"),
                        e = "";
                    1 == a && (e = "active"), t.append('<a href="#" class="award-dot ' + e +
                        '" data-num="' + a + '"><span>' + a + "</span></a>")
                }), $(".award-item").click(function() {
                    var a = $(this).data("num");
                    console.log(a), $(".award-dot").removeClass("active"), $(".award-dot[data-num=" + a +
                        "]").addClass("active"), console.log($(".award-item[data-num=" + a + "]"))
                }), $(".award-dots .award-dot").click(function(a) {
                    a.preventDefault();
                    var t = $(this).data("num");
                    $(".award-dots .award-dot").removeClass("active"), $(this).addClass("active"), $(
                        ".award-item[data-num=" + t + "]").click()
                })
            })
        }

        function getPartners() {
            $.ajax({
                url: "/about/partners/html",
                type: "GET",
                processData: !1,
                success: function(a) {
                    $("#partners-wrapper").html(a)
                }
            })
        }

        function getExecutives() {
            $.ajax({
                url: "/about/executives/get/html",
                type: "GET",
                processData: !1,
                success: function(a) {
                    $("#executives-wrapper").html(a)
                }
            })
        }

        function getAffliates() {
            $.ajax({
                url: "/about/affiliates/html",
                type: "GET",
                processData: !1,
                success: function(a) {
                    $("#affiliates_wrapper").html(a)
                }
            })
        }
        $(document).ready(function(a) {
            getCoreValues(), getBrandValues(), getInnnovations(), getAwards(), getPartners(), getExecutives(),
                getAffliates(), initButtonPopup()
        });
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

    <script type='text/javascript' src='https://service.force.com/embeddedservice/5.0/esw.min.js'></script>



    </body>

    </html>
