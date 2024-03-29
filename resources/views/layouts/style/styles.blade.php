<style>
    #media-news-wrapper .grid-item .article-item:after {
        display: none;
    }

    #media-news-wrapper .article-item span {
        position: absolute;
        top: 50%;
        left: 50%;
        font-weight: bold;
        z-index: 101;
        color: #fff;
        font-size: 24px;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    #media-news-wrapper .play-video .icon-play-button {
        color: #fff;
        font-size: 30px;
        vertical-align: middle;
        position: absolute;
        left: 50%;
        top: 50%;
        height: 30px;
        width: 30px;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
        margin-left: 4px;
        margin-top: -1px;
    }

    #media-news-wrapper .play-video {
        background: #01a71c;
        border-radius: 100%;
        width: 60px;
        height: 60px;
        margin: 0 auto;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -30px;
        margin-top: -30px;
        z-index: 4;
    }

    #media-news-wrapper .grid-item {
        width: 33.33%;
        position: relative;
        padding-left: 15px;
        padding-right: 15px;
    }

    .masonry-wrap #media-news-wrapper .grid-item:nth-child(3) {
        clear: none;
    }

    #media-news-wrapper .grid-item--width2 .article-img img {
        opacity: 1;
    }

    #media-news-wrapper .grid-item--width2 .article-img {
        padding-bottom: 69%;
    }

    #media-news-wrapper .grid-item--width2 {
        width: 66.66%;
    }

    #media-news-wrapper .grid-item--width2 .article-item {
        padding-bottom: 0 !important;
    }

    #media-news-wrapper .grid-item .article-min .play-video {
        width: 50px;
        height: 50px;
        margin-left: -25px;
        margin-top: -25px;
    }

    #media-news-wrapper .grid-item .article-min .play-video .icon-play-button {
        width: 25px;
        height: 25px;
        font-size: 25px;
    }

    #media-news-wrapper .article-img img {
        width: auto;
        height: 100%;
    }

    #media-news-wrapper .grid-item .article-min {
        padding-bottom: 66%;
    }


    .featured-article .article-img img {
        opacity: 0.8 !important;
    }

    .contact-form-wrap .sec-head h2 {
        font-size: 32px;
    }

    @media(max-width: 767px) {
        #media-news-wrapper .article-item span {
            font-size: 16px;
        }
    }

    @media(max-width: 640px) {
        #media-news-wrapper .grid-item--width2 {
            width: 100%;
            float: none;
            clear: both;
        }

        #media-news-wrapper .play-video {
            width: 50px;
            height: 50px;
            margin-left: -25px;
            margin-top: -35px;
        }

        #media-news-wrapper .play-video .icon-play-button {
            font-size: 20px;
            width: 20px;
            height: 20px;
            margin-left: 3px;
            margin-top: -3px;
        }

        #media-news-wrapper .grid-item .article-item {}

        #media-news-wrapper .grid-item {
            width: 50%;
            padding-left: 10px;
            padding-right: 10px;
        }

        .banner.default .banner-text .container {
            display: block;
        }
    }
</style>


<script src="/frontend/js/optimized/jquery.js"></script>
<script src="/frontend/js/optimized/bundle.js"></script>

<script defer>
    var GLOBAL_frontend_get__properties_json = "/get/properties/json";
    var GLOBAL_app_request_schemeAndHttpHost = "https://www.dmcihomes.com";
    var GLOBAL_countries_json = "/frontend/js/countries.json";
    var GLOBAL_careers_position_json = "/json/positions.json";
    var GLOBAL_frontend_contact_us_captcha = "/contact-us/captcha/generate";
    var GLOBAL_APP_REQUEST_GET = "frontend_properties";

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


<script async>
    var comparedProperties;

    function updateNotActiveState() {
        comparedProperties.length > 0 ? ($(".btn-compare").not(".active").each(function() {
            $(this).html('<span class="icon-home icon-add-filter"></span>ADD TO COMPARE')
        }), comparedProperties.forEach(function(e) {
            var t = $(".p-card[data-id=" + e.id + "]").find("p.property-compare").find("a.btn-compare");
            t.html('<span class="icon-home icon-check"></span>SELECTED'), t.addClass("active")
        })) : $(".btn-compare").not(".active").each(function() {
            $(this).html("COMPARE WITH OTHER PROPERTIES")
        });
        var e = 767 > $(window).width() ? 2 : 3;
        comparedProperties.length >= e ? $(".btn-compare").addClass("disabled") : $(".btn-compare").removeClass(
            "disabled")
    }

    function initializeLocalStorage() {
        let e = "dmic.homes.compared_ids";
        localStorage.getItem(e) && "undefined" != localStorage.getItem(e) || localStorage.setItem(e, JSON.stringify(
        [])), comparedProperties = JSON.parse(localStorage.getItem(e)), updateLocalStorage(),
            populateComparedProperties()
    }

    function updateLocalStorage() {
        localStorage.setItem("dmic.homes.compared_ids", JSON.stringify(comparedProperties))
    }

    function populateComparedProperties() {
        comparedProperties.length > 0 ? $("#compared-properties-wrapper").addClass("active") : $(
            "#compared-properties-wrapper").removeClass("active");
        var e = $("#compared-properties");
        $("#compared-properties").empty();
        for (var t = "<li>               <h2>Compare Homes</h2>         </li>", a = 767 > $(window).width() ? 2 : 3, r =
                0; r < a; r++)
            if (void 0 === comparedProperties[r]) t += "<li>              </li>";
            else {
                var i = comparedProperties[r];
                t = t +
                    '<li id="compare-item-1">                            <div class="compare-itemed">                               <a data-id="' +
                    i.id + '"  class="clearing jq-close"></a>                                <h3>' + i.name +
                    "</h3>                                <p>" + i.city +
                    "</p>                            </div>                        </li>"
            } var o = "";
        comparedProperties.length < 2 && (o = "disabled"), t = t +
            '<li>                 <button id="compare-now-btn" ' + o +
            '  class="btn btn-large btn-round btn-green btn-compare-all">Compare Now</button>              </li>', e
            .append(t), updateNotActiveState(), $(".compare-itemed a.clearing").click(function(e) {
                e.preventDefault();
                var t = $(this).data("id");
                comparedProperties = comparedProperties.filter(function(e) {
                    return e.id !== t
                }), updateLocalStorage(), populateComparedProperties();
                var a = $(this).closest("li");
                a.find("compare-itemed").remove(), a.html(
                    '<a href="#" class="btn btn-large btn-round btn-ghost btn-compare">Add</a>');
                var r = $(".p-card[data-id=" + t + "]").find("p.property-compare").find("a.btn-compare");
                console.log(r), r.removeClass("active"), r.html("COMPARE WITH OTHER PROPERTIES"),
                    updateNotActiveState()
            }), $("#compare-now-btn").click(function(e) {
                window.location = "/compare-homes"
            })
    }

    function initializeButton() {
        $(".btn-compare").click(function(e) {
            e.preventDefault();
            var t = $(this).data("id"),
                a = $(this).data("name"),
                r = $(this).data("city");
            if ($(this).hasClass("active")) $(this).html("COMPARE WITH OTHER PROPERTIES"), $(this).removeClass(
                "active"), comparedProperties = comparedProperties.filter(function(e) {
                return e.id !== t
            }), updateNotActiveState();
            else {
                var i = 767 > $(window).width() ? 2 : 3;
                comparedProperties.length < i && ($(this).html(
                        '<span class="icon-home icon-check"></span>SELECTED'), $(this).addClass("active"),
                    comparedProperties.push({
                        id: t,
                        name: a,
                        city: r
                    }))
            }
            updateLocalStorage(), populateComparedProperties()
        })
    }
    $(function() {
        initializeLocalStorage(), updateNotActiveState(), initializeButton()
    });
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
        // embedded_svc.settings.entryFeature = 'LiveAgent';



        embedded_svc.init(
            'https://dmcihomes4.my.salesforce.com',
            'https://dmcihomes.secure.force.com/liveAgentSetupFlow',
            gslbBaseURL,
            '00D5g000000J3Js',
            'WEB_CHAT', {
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
</script>
</body>

</html>

