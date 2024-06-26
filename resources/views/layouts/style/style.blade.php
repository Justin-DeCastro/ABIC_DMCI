
<style>
    .tform .input-wrap input[type=checkbox]:checked:before {
        display: inline-block;
        font-family: Glyphter;
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    footer {
        z-index: 2;
        position: relative
    }

    footer {
        color: #90b4ff;
        padding: 0 0 0;
        font-size: 12px;
        line-height: 1.5;
        background: 0 0 !important;
        z-index: 9002;
        padding-top: 12vw !important;
        margin-top: -12vw
    }

    @media (max-width:991px) {
        footer {
            font-size: 14px
        }
    }

    @media (max-width:480px) {
        footer {
            font-size: 12px
        }
    }

    footer .bg-blue {
        padding-bottom: 60px
    }

    footer .container {
        max-width: 1280px;
        padding: 0 30px
    }

    footer .logo {
        margin-left: 0;
        margin-bottom: 22px;
        margin-top: 0
    }

    footer h2,
    footer h3,
    footer h4,
    footer h5,
    footer h6 {
        color: #fff
    }

    footer h4 {
        margin-bottom: 20px;
        font-size: 16px
    }

    footer:before {
        content: '';
        width: 0;
        height: 0;
        border-style: solid;
        border-color: transparent transparent #003299 transparent;
        position: absolute;
        top: -4vw;
        left: 0;
        border-width: calc(50vw/6) 75vw;
        pointer-events: none
    }

    @media (max-width:991px) {
        footer:before {
            top: -4.5vw
        }
    }

    .footer-info {
        width: 35%;
        padding-top: 30px;
        position: relative
    }

    .footer-info p {
        margin-bottom: 20px
    }

    .footer-detail {
        width: calc(65% - 50px);
        padding: 20px 0 20px 50px;
        margin-left: 40px;
        position: relative
    }

    .footer-detail:before {
        content: '';
        height: calc(100%);
        position: absolute;
        top: 0;
        left: 0;
        width: 1px;
        background: #979797;
        opacity: .3
    }

    .copyrights {
        float: none;
        clear: both;
        position: relative;
        top: -20px
    }

    .footer-address p {
        margin-bottom: 15px
    }

    @media (max-width:767px) {
        .footer-address p {
            padding-left: 40px
        }
    }

    .footer-address p a {
        color: #fff
    }

    .footer-address ul li {
        margin-bottom: 3px
    }

    .footer-address ul li a {
        color: #fff
    }

    .footer-address ul li a label {
        color: #90b4ff
    }

    .footer-address .footer-map-link {
        position: relative;
        display: block
    }

    .footer-address .footer-map-link:before {
        content: '';
        width: 22px;
        height: 22px;
        position: absolute;
        left: -30px;
        top: 5px;
        background: url(frontend/images/map-marker-white.png) no-repeat;
        background-size: contain
    }

    .footer-link ul {
        width: 50%;
        float: left
    }

    .footer-link ul li {
        margin-bottom: 8px
    }

    .footer-link ul li a {
        color: #fff
    }

    .footer-link ul li a:hover {
        opacity: .8
    }

    .footer-social {
        padding-right: 0
    }

    @media (max-width:991px) {
        .footer-social {
            padding-right: 15px;
            padding-bottom: 20px
        }
    }

    .footer-social ul li {
        margin-bottom: 8px
    }

    .footer-social ul li:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .footer-social ul li span {
        float: left;
        margin-right: 10px
    }

    .footer-social ul li a {
        text-transform: inherit;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        color: #fff
    }

    @media (max-width:767px) {
        .footer-social ul li a {
            display: block
        }
    }

    .footer-social ul li a:hover {
        opacity: .8
    }

    .footer-social ul li figure {
        float: left;
        width: 18px;
        margin-right: 6px
    }

    .footer-social ul li figure img {
        width: 100%;
        height: auto;
        display: inline-block;
        vertical-align: top
    }

    .footer-social .hide-mobile {
        display: block
    }

    .footer-social .hide-desktop {
        display: none
    }

    @media (max-width:767px) {
        .footer-social .hide-desktop {
            display: block
        }

        .footer-social .hide-mobile {
            display: none
        }
    }

    .fancybox-caption {
        font-size: 32px;
        background: #fff;
        color: #212121;
        padding: 10px;
        font-family: Roboto, Helvetica, sans-serif
    }

    .fancybox-button.fancybox-button--zoom[data-fancybox-zoom] {
        display: none !important
    }

    #qq-brand.fancybox-content,
    #wechat-brand.fancybox-content {
        height: auto !important;
        padding-bottom: 0
    }

    #qq-brand p,
    #wechat-brand p {
        white-space: nowrap
    }

    #qq-brand p span,
    #wechat-brand p span {
        color: #e78600;
        font-size: 16px;
        position: relative;
        display: inline-block
    }

    #qq-brand p span:before,
    #wechat-brand p span:before {
        content: '';
        display: block;
        width: 100%;
        height: 2px;
        background: #e78600;
        bottom: -2px;
        left: 0;
        position: absolute
    }

    .wechat-wrap .hide-desktop {
        font-size: 14px
    }

    .wechat-wrap .hide-desktop img {
        display: inline-block;
        vertical-align: middle;
        margin-right: 15px;
        position: relative;
        top: -2px
    }

    @media (max-width:767px) {
        .wechat-wrap .hide-desktop img {
            margin: 0 auto
        }
    }

    .contact-form-wrap {
        padding-right: 60px;
        margin-right: 0;
        position: relative;
        padding-bottom: 12vw
    }

    .contact-form-wrap:after {
        content: '';
        display: block;
        width: 1px;
        height: calc(100% - 50px);
        position: absolute;
        top: 10px;
        right: 15px;
        background: #979797;
        opacity: .3
    }

    .contact-form-wrap .input-wrap {
        margin-bottom: 20px
    }

    @media (max-width:767px) {
        .contact-form-wrap .input-wrap {
            margin-bottom: 10px
        }
    }

    .contact-form-wrap form {
        padding-right: 30px
    }

    .contact-form-wrap button.btn-green {
        min-width: 140px;
        font-size: 16px
    }

    .contact-form-wrap.apply-form form {
        max-width: 530px
    }

    .contact-form-wrap.apply-form:after {
        display: none
    }

    .contact-form-wrap .custom-select {
        position: relative;
        height: 42px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%
    }

    .contact-form-wrap .custom-select:after {
        content: '';
        position: absolute;
        right: 15px;
        top: 15px;
        width: 0;
        height: 0;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: 8px solid #ccc
    }

    .contact-form-wrap .custom-select label {
        font-size: 12px;
        color: #495366;
        font-weight: 700;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        display: inline-block;
        margin-bottom: 8px;
        text-transform: uppercase
    }

    .contact-form-wrap .custom-select label:before {
        display: none
    }

    .contact-form-wrap .custom-select select {
        height: 42px
    }

    .other-channels {
        padding-top: 10px
    }

    .other-channels ul:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .other-channels ul li {
        margin-bottom: 25px;
        display: block;
        padding-left: 68px;
        border-bottom: 1px solid #f2f2f2;
        padding-bottom: 20px;
        position: relative
    }

    @media (max-width:991px) {
        .other-channels ul li {
            width: 50%;
            float: left;
            text-align: left;
            padding-left: 58px;
            padding-right: 15px
        }
    }

    @media (max-width:640px) {
        .other-channels ul li {
            width: 100%;
            padding-right: 0
        }
    }

    .other-channels ul li:last-child {
        border-bottom: none
    }

    .other-channels ul li a {
        color: #003299
    }

    .other-channels ul li figure {
        width: 48px;
        height: 48px;
        position: absolute;
        left: 0;
        top: 0
    }

    @media (max-width:991px) {
        .other-channels ul li figure {
            width: 38px;
            height: 38px
        }
    }

    .other-channels ul li figure img {
        width: 100%;
        height: auto;
        display: block
    }

    @media (max-width:991px) {
        .other-channels ul li figure img.whistles-icon {
            width: 50px !important
        }
    }

    @media (max-width:640px) {
        .other-channels ul li figure img.whistles-icon {
            width: 45px !important;
            margin-left: -4px
        }
    }

    .other-channel-wrap {
        padding-top: 15px;
        padding-left: 0;
        padding-bottom: 12vw
    }

    @media (max-width:991px) {
        .other-channel-wrap.hidden-tablet {
            display: block
        }
    }

    @media (max-width:767px) {
        .other-channel-wrap {
            padding-left: 20px;
            padding-right: 20px
        }

        .other-channel-wrap .sec-head {
            text-align: left
        }
    }

    .customer-care-mobile .sec-head h2 {
        font-size: 36px;
        color: #003299;
        font-weight: 800
    }

    .customer-care-mobile .notes .custom-checkbox {
        float: left
    }

    .customer-care-mobile .notes .custom-checkbox a.btn {
        padding: 0;
        margin: 0;
        min-width: auto
    }

    .customer-care-mobile .notes .custom-checkbox+p {
        margin-left: 40px
    }

    .customer-care-mobile .col-sm-6+.col-sm-6 {
        padding-left: 5px
    }

    .customer-care-mobile .col-sm-6:first-of-type {
        padding-right: 5px
    }

    .customer-care-mobile .col-sm-6:last-child {
        padding-right: 15px
    }

    .customer-care-mobile #data-holder {
        display: none
    }

    .customer-care-mobile .side p {
        margin-bottom: 30px
    }

    .customer-care-mobile .easy-autocomplete-container {
        z-index: 1001
    }

    .customer-care-mobile .easy-autocomplete-container ul {
        border: none;
        width: calc(100% + 40px);
        left: -15px;
        border-radius: 6px;
        padding: 10px 10px 20px;
        -webkit-box-shadow: 0 0 34px 0 rgba(0, 0, 0, .5);
        box-shadow: 0 0 34px 0 rgba(0, 0, 0, .5)
    }

    .customer-care-mobile .easy-autocomplete-container ul li {
        border: none;
        padding: 5px 25px;
        margin: 0 -10px;
        background: #fff;
        -webkit-transition: background .4s ease;
        -moz-transition: background .4s ease;
        -ms-transition: background .4s ease;
        -o-transition: background .4s ease;
        transition: background .4s ease
    }

    .customer-care-mobile .easy-autocomplete-container ul li.selected {
        background: #f7f7f7
    }

    @media (max-width:991px) {
        .contact-form-wrap {
            padding-right: 0;
            margin-right: auto;
            margin-left: auto;
            max-width: 620px;
            padding-bottom: 40px
        }
    }

    .contact-us .input-wrap {
        margin-bottom: 20px
    }

    .contact-us .contact-form-wrap {
        padding-right: 35px
    }

    .contact-us .contact-form-wrap .carousel-tp,
    .contact-us .contact-form-wrap .carousel-tp .owl-stage-outer,
    .contact-us .contact-form-wrap .carousel-tu,
    .contact-us .contact-form-wrap .carousel-tu .owl-stage-outer {
        overflow: visible
    }

    .contact-us .policy {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .contact-us .policy .custom-checkbox {
        float: left
    }

    .contact-us .policy .custom-checkbox a {
        margin: 0;
        padding: 0;
        min-width: auto
    }

    .contact-us .policy .custom-checkbox+p {
        margin-left: 40px
    }

    .contact-us .social-contact .sec-head,
    .contact-us .whistleblower .sec-head {
        margin-bottom: 10px
    }

    .contact-us .social-contact ul {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .contact-us .social-contact ul [class^=icon-] {
        float: left;
        margin-top: 2px;
        margin-right: 10px
    }

    .contact-us .office-contact {
        padding-bottom: 12vw
    }

    @media (max-width:767px) {
        .contact-us .office-contact {
            text-align: left
        }

        .contact-us .office-contact .sec-head {
            text-align: left
        }
    }

    .whistleblower-form .contact-form-wrap:after {
        display: none
    }

    .custom-upload {
        padding-bottom: 20px;
        border-bottom: 1px solid #ccc
    }

    .custom-upload label {
        display: block
    }

    .custom-upload p {
        font-size: 12px;
        color: #495366;
        font-weight: 700;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        display: block;
        margin-bottom: 8px;
        text-transform: uppercase
    }

    .custom-upload .inputfile {
        width: .1px;
        height: .1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1
    }

    .custom-upload .inputfile+label {
        color: #d3394c
    }

    .custom-upload .inputfile+label {
        text-transform: initial
    }

    .custom-upload .inputfile+label:hover,
    .custom-upload .inputfile.has-focus+label,
    .custom-upload .inputfile:focus+label {
        border-color: #722040
    }

    .custom-upload .inputfile+label span,
    .custom-upload .inputfile+label strong {
        padding: 0 25px;
        margin-right: 10px;
        margin-bottom: 10px
    }

    .custom-upload .inputfile+label span {
        width: 180px;
        min-height: 50px;
        background: #eaeaea;
        border-radius: 25px;
        line-height: 50px;
        display: inline-block;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        vertical-align: top
    }

    .custom-upload .inputfile+label strong {
        height: 51px;
        line-height: 51px;
        border-radius: 25px;
        color: #212121;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        background-color: transparent;
        display: inline-block;
        border: 1px solid #979797
    }

    .custom-upload .inputfile+label:hover strong,
    .custom-upload .inputfile.has-focus+label strong,
    .custom-upload .inputfile:focus+label strong {
        background: #003299;
        color: #fff;
        border: 1px solid #003299
    }

    @media (max-width:640px) {
        .custom-upload .inputfile+label strong {
            display: inline-block
        }
    }

    .channel-tooltips {
        margin-top: 15px
    }

    .channel-tooltips h3 {
        font-size: 16px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        margin-bottom: 7px
    }

    .channel-tooltips p {
        font-size: 14px;
        line-height: 18px;
        margin-bottom: 2px
    }

    .channel-tooltips p span {
        color: #5d5d5d;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700
    }

    #simple_contact_form button:disabled {
        background: #ddd
    }

    #all-field .error-message {
        margin-top: 15px
    }

    #main-wrapper {
        padding-right: 0;
        -webkit-transition: padding .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: padding .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: padding .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: padding .4s cubic-bezier(.645, .045, .355, 1);
        transition: padding .4s cubic-bezier(.645, .045, .355, 1)
    }

    #main-wrapper.map-active-right {
        padding-right: 25%
    }

    #main-wrapper.map-active-right .banner-arrow-wrap,
    #main-wrapper.map-active-right .banner-text {
        display: none
    }

    #main-wrapper.map-active-right .container {
        margin-right: 0
    }

    #main-wrapper.map-active-right+.sec-pad {
        padding-right: 25%
    }

    #main-wrapper.map-active-right .contact-form .container {
        width: 100%;
        padding-right: 28%
    }

    #main-wrapper.map-active-right .contact-form .container [class^=col-] {
        width: 100%
    }

    #main-wrapper.map-active-right .contact-form .container .contact-form-wrap,
    #main-wrapper.map-active-right .contact-form .container form {
        padding-right: 0
    }

    #main-wrapper.map-active-right .contact-form .container .contact-form-wrap:after,
    #main-wrapper.map-active-right .contact-form .container form:after {
        display: none
    }

    #main-wrapper.map-active-right .contact-form .container .contact-form-wrap {
        padding-bottom: 40px
    }

    #main-wrapper.map-active-right .contact-form .container .other-channel-wrap {
        margin-top: 30px;
        padding-top: 40px;
        border-top: 1px solid rgba(151, 151, 151, .3)
    }

    #main-wrapper.map-active-right .contact-form .container .other-channels li {
        padding-left: 83px;
        padding-right: 15px;
        width: 50%;
        float: left;
        border-bottom: 0;
        padding-bottom: 12vw
    }

    #main-wrapper.map-active-right .contact-form .container .other-channels li figure {
        left: 20px
    }

    #main-wrapper.map-active-right .contact-form .container .other-channels li:first-child {
        padding-left: 68px
    }

    #main-wrapper.map-active-right .contact-form .container .other-channels li:first-child figure {
        left: 0
    }

    #main-wrapper.map-active-right .contact-form .container .other-channels li:last-child {
        padding-right: 0
    }

    #main-wrapper.map-active-right~footer.sec-pad {
        overflow: visible;
        padding-top: 80px;
        padding-right: 0;
        z-index: 1002
    }

    #main-wrapper.map-active-right~footer.sec-pad .slant-border {
        position: absolute;
        top: -60px
    }

    .property-loc {
        padding-top: 0;
        padding-bottom: 0;
        position: relative;
        xborder-bottom: 1px solid #ccc;
        overflow: visible;
        height: 100vh;
        min-height: 720px;
        margin-left: 220px;
        -webkit-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -webkit-transform-origin: top right;
        -ms-transform-origin: top right;
        transform-origin: top right;
        z-index: 999
    }

    @media (max-width:767px) {
        .property-loc {
            min-height: auto;
            height: auto;
            padding-bottom: 0
        }
    }

    .property-loc .sec-head {
        display: none
    }

    .property-loc .banner-text {
        padding: 90px 0 0 0;
        width: auto;
        height: 250px;
        background: transparent url(frontend/images/property/mp-bq.png) no-repeat left top;
        background-size: cover;
        pointer-events: none
    }

    @media (max-width:767px) {
        .property-loc .banner-text {
            padding: 30px 15px;
            height: auto
        }
    }

    .property-loc .banner-text h1 {
        color: #212121
    }

    .property-loc .banner-arrow-wrap {
        bottom: 35px;
        margin-left: 150px
    }

    .property-loc.map-active-right {
        position: fixed;
        right: 0;
        width: 25%;
        top: 0;
        z-index: 101;
        margin-left: 0
    }

    .property-loc.map-active-right.disabled {
        -webkit-transform: translate(100%, 0);
        -moz-transform: translate(100%, 0);
        -ms-transform: translate(100%, 0);
        -o-transform: translate(100%, 0);
        transform: translate(100%, 0)
    }

    .property-loc.map-active-right .top-info {
        display: none
    }

    .property-loc .container {
        margin-left: 30px
    }

    .property-loc h1 {
        font-size: 50px
    }

    .property-loc .top-info {
        position: absolute;
        background: #fff;
        padding: 25px 0;
        width: 285px;
        border-radius: 6px;
        -webkit-box-shadow: 0 2px 54px 0 rgba(0, 0, 0, .23);
        box-shadow: 0 2px 54px 0 rgba(0, 0, 0, .23);
        background-color: #fff;
        top: 100px;
        padding: 25px
    }

    .property-loc .top-info h1,
    .property-loc .top-info h2 {
        font-size: 26px;
        margin-bottom: 5px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-family: 700
    }

    .property-loc .top-info h1 span,
    .property-loc .top-info h2 span {
        font-family: Roboto, Helvetica, sans-serif;
        color: #414141
    }

    @media (max-width:767px) {
        #location {
            padding-bottom: 0;
            min-height: auto;
            height: auto
        }
    }

    .bottom-info {
        position: fixed;
        right: 0;
        bottom: -75px;
        text-align: center;
        -webkit-transform: translate(-50%, 0);
        -moz-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
        -o-transform: translate(-50%, 0);
        transform: translate(-50%, 0);
        -webkit-transition: all .3s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: all .3s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: all .3s cubic-bezier(.645, .045, .355, 1);
        -o-transition: all .3s cubic-bezier(.645, .045, .355, 1);
        transition: all .3s cubic-bezier(.645, .045, .355, 1);
        z-index: 77;
        max-width: 550px;
        margin-left: -25px
    }

    @media (max-width:991px) {
        .bottom-info {
            -webkit-transform: translate(0, 0);
            -moz-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0)
        }
    }

    .bottom-info.activated {
        bottom: -2px
    }

    @media (max-width:767px) {
        .bottom-info.activated {
            bottom: 1px
        }
    }

    .bottom-info.activated .pl-legends {
        opacity: 1
    }

    .bottom-info.activated .show-legends {
        margin-top: -11px
    }

    .bi-general-link {
        font-size: 12px;
        text-align: left;
        margin: 0 5px 8px
    }

    .bi-general-link a {
        color: #1f6bd7;
        margin-right: 5px;
        line-height: 18px;
        position: relative;
        display: inline-block .bi-general-link a
    }

    .bi-general-link a :hover:before {
        display: none
    }

    .bi-general-link a:before {
        content: '';
        display: block;
        width: 100%;
        height: 1px;
        bottom: -2px;
        left: 0;
        position: absolute;
        background: #1f6bd7
    }

    .show-legends {
        display: inline-block;
        padding: 8px 15px;
        color: #fff;
        background: #01a71c;
        border-radius: 4px;
        text-transform: uppercase;
        font-size: 12px;
        -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5);
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5);
        border: 1px solid #01a71c;
        position: relative;
        top: 0;
        margin-top: -35px;
        z-index: 99;
        float: right
    }

    @media (max-width:767px) {
        .show-legends {
            font-size: 10px;
            padding: 6px 10px;
            right: 10px;
            margin-top: -41px
        }
    }

    .show-legends.active {
        -webkit-box-shadow: 0 2px 4px 0 transparent;
        box-shadow: 0 2px 4px 0 transparent;
        background: #fff;
        font-weight: 700;
        color: #fff;
        border: 1px solid #1f6bd7;
        border-radius: 0;
        top: 1px;
        background: #1f6bd7;
        float: right
    }

    .show-legends span {
        font-size: 8px;
        display: inline-block;
        margin-left: 8px
    }

    .pl-legends {
        border: 1px solid rgba(0, 0, 0, .1);
        padding: 5px 18px 10px 18px;
        -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
        border-radius: 4px;
        opacity: 0;
        background: #fff;
        -webkit-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        transition: opacity .4s cubic-bezier(.645, .045, .355, 1)
    }

    @media (max-width:767px) {
        .pl-legends {
            padding: 4px;
            border-radius: 0
        }
    }

    .pl-legends ul {
        text-align: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        white-space: nowrap
    }

    .pl-legends ul:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .pl-legends ul li {
        display: inline-block;
        text-align: center;
        margin: 0 6px
    }

    @media (max-width:767px) {
        .pl-legends ul li {
            margin: 0 2px;
            width: 20%;
            float: left
        }
    }

    .pl-legends ul li a {
        display: block;
        padding: 0 10px;
        color: #212121;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 4px 0 transparent;
        box-shadow: 0 1px 4px 0 transparent;
        font-size: 12px;
        line-height: 28px;
        border: 1px solid #01a71c;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-family: 700
    }

    @media (max-width:767px) {
        .pl-legends ul li a {
            font-size: 10px;
            padding: 0 6px;
            line-height: 24px
        }
    }

    .pl-legends ul li a span {
        display: inline-block;
        font-size: 16px;
        vertical-align: middle;
        margin-right: 6px;
        position: relative;
        top: 2px
    }

    @media (max-width:767px) {
        .pl-legends ul li a span {
            font-size: 14px;
            margin-right: 2px
        }
    }

    .pl-legends ul li a span.icon-img {
        height: 15px;
        overflow: hidden;
        top: -2px
    }

    @media (max-width:767px) {
        .pl-legends ul li a span.icon-img {
            height: 14px
        }
    }

    .pl-legends ul li a span.icon-img img {
        top: -15px
    }

    @media (max-width:767px) {
        .pl-legends ul li a span.icon-img img {
            top: -12px
        }
    }

    .pl-legends ul li a span:before {
        top: 2px
    }

    .pl-legends ul li a span img {
        width: 22px;
        position: relative
    }

    @media (max-width:767px) {
        .pl-legends ul li a span img {
            width: 20px
        }
    }

    .pl-legends ul li.active a {
        background: #01a71c;
        color: #fff;
        -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .3);
        box-shadow: 0 1px 4px 0 rgba(0, 0, 0, .3)
    }

    .pl-legends ul li.active a.pin-business {
        background: #003794;
        border: 1px solid #003794
    }

    .pl-legends ul li.active a.pin-school {
        background: #fc0;
        border: 1px solid #fc0
    }

    .pl-legends ul li.active a.pin-medical {
        background: #ba3a32;
        border: 1px solid #ba3a32
    }

    .pl-legends ul li.active a.pin-transport {
        background: #ff9500;
        border: 1px solid #ff9500
    }

    .pl-legends ul li.active a.pin-other {
        background: #aaa;
        border: 1px solid #aaa
    }

    .pl-legends ul li.active a .icon-img img {
        top: 1px
    }

    .map-pin {
        width: 100px;
        height: 130px;
        float: left;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .map-pin-logo {
        width: 100px;
        height: 130px;
        display: block;
        text-align: center
    }

    .map-pin-logo figure {
        width: 80px;
        height: 80px;
        background: #fff;
        border-radius: 50%;
        margin: 0 auto;
        position: absolute;
        left: 50%;
        top: 4px;
        margin-left: -40px;
        z-index: 1
    }

    .map-pin-logo figure img {
        max-width: 100%;
        max-height: 100%;
        padding: 10px;
        position: absolute;
        display: block;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto
    }

    .map-pin-logo:before {
        content: '\006c';
        display: inline-block;
        font-family: Glyphter;
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 110px;
        color: #01a71c;
        position: relative;
        left: -6px;
        z-index: 2;
        text-shadow: 0 0 14px rgba(0, 0, 0, .6)
    }

    #map-container {
        position: absolute;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, .02);
        -webkit-box-shadow: 0 0 20px transparent;
        box-shadow: 0 0 20px transparent;
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -ms-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
        overflow: hidden
    }

    @media (max-width:767px) {
        #map-container {
            position: relative;
            height: 0;
            padding-bottom: 140%
        }

        #map-container iframe {
            pointer-events: none
        }
    }

    .map-active-right #map-container {
        -webkit-box-shadow: none;
        box-shadow: none
    }

    #map-container iframe {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    #map-pin iframe {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    @media (max-width:1024px) {
        .property-loc {
            margin-left: 0
        }
    }

    @media (max-width:767px) {
        #main-wrapper.map-active-right {
            padding-right: 0
        }
    }

    .tform {
        display: none
    }

    .tform .container {
        margin-left: 150px
    }

    .tform .col-sm-4>div {
        margin-bottom: 20px
    }

    .tform.sec-pad.brk {
        padding: 20px 0
    }

    .tform.sec-pad.brk .top-nav span {
        color: #212121
    }

    .tform.sec-pad.brk .top-nav a {
        color: #212121
    }

    .tform.sec-pad.brk .top-nav a:before {
        color: #212121
    }

    .tform.sec-pad.brk .top-nav a:after {
        background-color: #212121
    }

    .tform h2.thin {
        font-size: 22px;
        margin-bottom: 10px;
        padding-top: 20px
    }

    .tform .input-wrap label+input {
        margin-top: 0
    }

    .tform .input-wrap input[type=checkbox] {
        float: left;
        width: 16px;
        height: 16px;
        cursor: pointer;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin: 0
    }

    .tform .input-wrap input[type=checkbox]+p {
        margin-left: 25px
    }

    .tform .input-wrap input[type=checkbox]:checked {
        border: 0;
        background-color: #003299
    }

    .tform .input-wrap input[type=checkbox]:checked:before {
        position: absolute;
        left: 3px;
        top: 3px;
        content: '\0044';
        color: #fff
    }

    .tform .input-wrap .price-range {
        max-width: 480px;
        margin-bottom: 25px;
        margin-top: 20px
    }

    .tform .input-wrap .custom-checkbox .icon {
        font-size: 24px;
        float: left;
        margin-top: 0;
        margin-right: 8px
    }

    .tform .input-wrap .custom-checkbox .icon.icon-coming-soon {
        color: #000
    }

    .tform .input-wrap .custom-checkbox .icon.icon-RFO {
        color: #01a71c
    }

    .tform .input-wrap .custom-checkbox .icon.icon-new {
        color: #e78600
    }

    .tform .input-wrap .custom-checkbox .icon.icon-under-construction {
        color: #003299
    }

    .tform ul.flex {
        margin-top: 15px;
        margin-bottom: 15px;
        -webkit-box-pack: left;
        -ms-flex-pack: left;
        justify-content: left
    }

    @media (max-width:376px) {
        .tform ul.flex {
            margin-bottom: 0;
            margin-top: 5px
        }
    }

    .tform ul.flex li {
        margin: 0 5px 5px 0
    }

    .tform ul.check.wide li {
        width: 100%;
        margin: 0 0 10px
    }

    .tform ul.check#simple-filter-dev li,
    .tform ul.check#simple-filter-status li {
        width: calc(25% - 20px)
    }

    .tform ul.check li {
        width: calc(20% - 20px);
        margin: 0 20px 10px 0;
        position: relative
    }

    @media (max-width:767px) {
        .tform ul.check li {
            margin-bottom: 3px
        }
    }

    #tform-status .tform ul.check li {
        width: calc(25% - 20px)
    }

    .tform ul.check li p {
        line-height: 1.2
    }

    .tform ul.check.notes p {
        font-size: 12px;
        line-height: 1.4;
        opacity: .8
    }

    .tform .bf-price-range {
        padding: 12px 0 0
    }

    .tform .channels li,
    .tform .socials li {
        margin-bottom: 5px
    }

    .tform .socials p {
        position: relative;
        text-transform: uppercase;
        font-weight: 700;
        padding-left: 25px
    }

    .tform .socials p span {
        position: absolute;
        left: 0
    }

    .tform .side .sec-head {
        margin-bottom: 20px
    }

    .tform .side .sec-head h4 {
        margin-bottom: 0
    }

    .advance-filter-wrap .btn-ghost,
    .ff-dropdown-wrap .btn-ghost {
        color: #212121;
        height: 30px;
        line-height: 30px;
        padding: 0 25px
    }

    .advance-filter-wrap .btn-apply-filter,
    .advance-filter-wrap .btn-text,
    .ff-dropdown-wrap .btn-apply-filter,
    .ff-dropdown-wrap .btn-text {
        height: 30px;
        line-height: 30px;
        padding: 0 25px
    }

    @media (max-width:767px) {

        .advance-filter-wrap .btn-round.btn-large,
        .ff-dropdown-wrap .btn-round.btn-large {
            margin-top: 20px
        }
    }

    .advance-filter-wrap .btn-apply-filter,
    .ff-dropdown-wrap .btn-apply-filter {
        height: 40px;
        line-height: 40px;
        margin-top: 15px
    }

    @media (max-width:767px) {

        .advance-filter-wrap .btn-apply-filter,
        .ff-dropdown-wrap .btn-apply-filter {
            margin-top: 0;
            margin-top: -20px;
            top: -25px;
            position: relative
        }
    }

    .advance-filter-wrap .btn-apply-filter.disabled,
    .ff-dropdown-wrap .btn-apply-filter.disabled {
        pointer-events: none;
        background: #ccc;
        border: 1px solid #ccc;
        opacity: .5;
        cursor: no-drop
    }

    .advance-filter-wrap .btn-apply-filter.disabled:hover,
    .ff-dropdown-wrap .btn-apply-filter.disabled:hover {
        background: #ccc;
        border: 1px solid #ccc;
        opacity: .5
    }

    .advance-filter-wrap .btn-text,
    .ff-dropdown-wrap .btn-text {
        padding: 0 15px;
        border: 1px solid transparent;
        margin-left: -15px;
        margin-right: 5px
    }

    @media (max-width:767px) {

        .advance-filter-wrap .btn-text,
        .ff-dropdown-wrap .btn-text {
            margin-right: 0
        }
    }

    .advance-filter-wrap .btn-text.btn-clear,
    .ff-dropdown-wrap .btn-text.btn-clear {
        margin-left: 0
    }

    .advance-filter-wrap .property-count-btn,
    .advance-filter-wrap .unit-count-btn,
    .ff-dropdown-wrap .property-count-btn,
    .ff-dropdown-wrap .unit-count-btn {
        font-size: 16px;
        height: auto;
        line-height: 1.2
    }

    @media (max-width:480px) {

        .advance-filter-wrap .property-count-btn,
        .advance-filter-wrap .unit-count-btn,
        .ff-dropdown-wrap .property-count-btn,
        .ff-dropdown-wrap .unit-count-btn {
            width: 50%;
            font-size: 14px
        }
    }

    .advance-filter-wrap .property-count-btn span,
    .advance-filter-wrap .unit-count-btn span,
    .ff-dropdown-wrap .property-count-btn span,
    .ff-dropdown-wrap .unit-count-btn span {
        font-weight: 700;
        color: #e78600;
        display: inline-block
    }

    .advance-filter-wrap .input-wrap,
    .ff-dropdown-wrap .input-wrap {
        margin-bottom: 15px
    }

    #count {
        font-family: Roboto, Helvetica, sans-serif
    }

    @media (max-width:767px) {
        #count {
            display: block;
            margin-top: 15px
        }
    }

    .advance-filter-wrap {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10001;
        background: #fff;
        width: 100%;
        padding-top: 20px;
        -webkit-box-shadow: 0 5px 8px 0 rgba(0, 0, 0, .16);
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, .16)
    }

    .advance-filter-wrap .tform {
        display: block
    }

    .advance-filter-wrap .tform.tform-status ul.check li {
        width: calc(50% - 20px)
    }

    .advance-filter-wrap .tform.tform-status ul.check#simple-filter-status li {
        width: calc(25% - 20px)
    }

    .advance-filter-wrap .tform.tform-moving ul.check li,
    .advance-filter-wrap .tform.tform-types ul.check li {
        width: calc(33.33% - 20px)
    }

    .price-selectbox {
        margin-bottom: 30px
    }

    .price-selectbox .custom-select {
        border: 1px solid #ccc;
        border-radius: 4px
    }

    .price-selectbox .custom-select select {
        padding-top: 10px;
        padding-bottom: 10px;
        font-family: Roboto, Helvetica, sans-serif
    }

    @media (max-width:767px) {
        .tform ul.check li {
            width: calc(50% - 20px)
        }
    }

    .grid-sizer {
        width: 25%
    }

    .grid-item {
        width: 33.33%;
        padding: 0 10px 30px;
        float: left
    }

    .featured-news .grid-item {
        width: 25%
    }

    @media (max-width:1380px) {
        .featured-news .grid-item {
            width: 33.33%
        }
    }

    @media (max-width:640px) {
        .featured-news .grid-item {
            width: 50%;
            padding-bottom: 20px
        }
    }

    @media (max-width:480px) {
        .featured-news .grid-item {
            width: 100%;
            padding-bottom: 20px
        }
    }

    .grid-item .article-min {
        height: 0;
        overflow: hidden;
        padding-bottom: 137%;
        -webkit-box-shadow: 2px 5px 10px rgba(0, 0, 0, .1);
        box-shadow: 2px 5px 10px rgba(0, 0, 0, .1);
        border-radius: 5px
    }

    @media (max-width:480px) {
        .grid-item .article-min {
            padding-bottom: 20px;
            height: auto
        }
    }

    .grid-item .article-min:after {
        content: '';
        display: block;
        height: 30px;
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0);
        background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(250, 250, 250, 0) 0, rgba(250, 250, 250, .6) 24%, rgba(250, 250, 250, .75) 52%, #fff 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0, rgba(255, 255, 255, 0)), color-stop(0, rgba(250, 250, 250, 0)), color-stop(24%, rgba(250, 250, 250, .6)), color-stop(52%, rgba(250, 250, 250, .75)), color-stop(100%, #fff));
        background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(250, 250, 250, 0) 0, rgba(250, 250, 250, .6) 24%, rgba(250, 250, 250, .75) 52%, #fff 100%);
        background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(250, 250, 250, 0) 0, rgba(250, 250, 250, .6) 24%, rgba(250, 250, 250, .75) 52%, #fff 100%);
        background: -ms-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(250, 250, 250, 0) 0, rgba(250, 250, 250, .6) 24%, rgba(250, 250, 250, .75) 52%, #fff 100%);
        background: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 255, 255, 0)), color-stop(0, rgba(250, 250, 250, 0)), color-stop(24%, rgba(250, 250, 250, .6)), color-stop(52%, rgba(250, 250, 250, .75)), to(white));
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, rgba(250, 250, 250, 0) 0, rgba(250, 250, 250, .6) 24%, rgba(250, 250, 250, .75) 52%, #fff 100%)
    }

    .grid-item .article-min.no-image .article-info .tag {
        text-align: left;
        margin-top: 10px
    }

    .grid-item--width2 {
        width: 66.66%
    }

    .featured-news .grid-item--width2 {
        width: 50%
    }

    @media (max-width:1380px) {
        .featured-news .grid-item--width2 {
            width: 66.66%
        }
    }

    @media (max-width:640px) {
        .featured-news .grid-item--width2 {
            width: 100%
        }
    }

    .masonry-wrap {
        margin: 0 -10px
    }

    .masonry-wrap:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .masonry-wrap .grid-item:nth-child(4) {
        clear: left
    }

    @media (max-width:1380px) {
        .masonry-wrap .grid-item:nth-child(4) {
            clear: none
        }
    }

    @media (max-width:1380px) {
        .masonry-wrap .grid-item:nth-child(3) {
            clear: left
        }
    }

    @media (max-width:640px) {
        .masonry-wrap .grid-item:nth-child(3) {
            clear: none
        }
    }

    #related-news .masonry-wrap {
        margin: 0 -10px
    }

    #related-news .masonry-wrap .grid-item:nth-child(3) {
        clear: none
    }

    .featured-news .flex {
        margin: 0 -10px;
        -webkit-box-pack: left;
        -ms-flex-pack: left;
        justify-content: left
    }

    .featured-news .flex li {
        width: calc(25% - 20px);
        max-width: 380px;
        margin: 0 10px 10px;
        position: relative
    }

    .featured-news .flex li:first-child {
        width: calc(50% - 20px);
        max-width: 660px
    }

    .featured-news .btn {
        margin-top: 60px
    }

    @media (max-width:767px) {
        .featured-news .btn {
            margin-bottom: 80px;
            margin-top: 30px
        }
    }

    .article-category {
        position: relative;
        z-index: 1;
        display: inline-block;
        float: right
    }

    .article-category a {
        background: #fff;
        float: left;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-size: 12px;
        font-weight: 700;
        border-radius: 6px;
        color: #003299;
        text-transform: uppercase
    }

    .article-img {
        position: relative;
        height: 0;
        padding-bottom: 66%;
        overflow: hidden;
        border-radius: 6px;
        margin-bottom: 0
    }

    .article-img .article-category {
        float: right;
        margin: 5px 0 0 5px
    }

    .article-img .article-category a {
        margin: 0 5px 5px 0;
        padding: 1px 5px 2px
    }

    .article-img img {
        width: auto;
        height: auto;
        max-width: 101%;
        position: absolute;
        top: 50%;
        left: 50%;
        display: block;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .article-img .has-video {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: block;
        position: relative;
        float: right;
        margin: 15px
    }

    .article-img .has-video:before {
        content: "";
        position: absolute;
        top: 10px;
        left: 18px;
        width: 0;
        height: 0;
        border-top: 15px solid transparent;
        border-left: 25px solid red;
        border-bottom: 15px solid transparent;
        z-index: 2
    }

    .article-img .has-video:after {
        content: '';
        width: 50px;
        height: 50px;
        border: 1px solid #fff;
        border-radius: 50%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 2
    }

    .article-info {
        position: relative;
        padding-top: 18px;
        pointer-events: none;
        padding: 16px 10px 0
    }

    .article-info a {
        pointer-events: auto
    }

    .article-info .date-published {
        float: left
    }

    .featured-article .article-info .date-published {
        float: none;
        clear: both
    }

    .date-published {
        margin-bottom: 10px;
        font-size: 12px;
        opacity: .7;
        font-family: Molengo, "Trebuchet MS", sans-serif
    }

    .featured-article .date-published {
        opacity: 1;
        color: #fff
    }

    .article-title {
        line-height: 1.2;
        margin-bottom: 15px;
        clear: both;
        font-size: 20px;
        margin-top: 0
    }

    .article-title a {
        color: #414141
    }

    .featured-article .article-title a {
        color: #fff
    }

    .featured-article .article-title {
        color: #fff;
        font-size: 26px;
        text-shadow: 1px 2px 5px rgba(0, 0, 0, .3)
    }

    .no-image .article-title {
        font-size: 20px;
        line-height: 1.2
    }

    .featured-article .clr+p {
        display: none
    }

    .featured-article .article-info {
        position: absolute;
        bottom: 7%;
        left: 0;
        text-align: center;
        padding: 15px 25px
    }

    .article-info p {
        margin-bottom: 10px
    }

    .article-info .tag {
        margin-bottom: 0;
        text-align: left;
        position: absolute;
        margin-top: -20px;
        width: 100%;
        padding-left: 0;
        padding-right: 10px;
        bottom: calc(100% - 10px)
    }

    .featured-article .article-info .tag {
        text-align: center;
        top: 0;
        padding-left: 0;
        margin-top: 0
    }

    .no-image .article-info .tag {
        position: relative;
        margin-bottom: 15px;
        padding-left: 0
    }

    .article-info .tag a {
        display: inline-block;
        font-size: 12px;
        color: #fff;
        text-transform: capitalize;
        background: #003299;
        padding: 2px 10px;
        border-radius: 25px;
        margin-top: 3px;
        font-family: Molengo, "Trebuchet MS", sans-serif
    }

    @media (max-width:640px) {
        .article-info .tag a {
            font-size: 14px;
            padding: 2px 5px;
            margin-bottom: 0;
            margin-right: 8px
        }
    }

    .featured-article {
        background-color: #212121;
        border-radius: 6px;
        -webkit-box-shadow: 2px 5px 10px rgba(0, 0, 0, .16);
        box-shadow: 2px 5px 10px rgba(0, 0, 0, .16)
    }

    @media (max-width:640px) {
        .featured-article {
            background-color: rgba(0, 50, 153, .5)
        }
    }

    .featured-article .article-img img {
        opacity: .6
    }

    @media (max-width:640px) {
        .featured-article .article-img img {
            opacity: 1
        }
    }

    .featured-article .tag {
        position: relative;
        top: 0;
        padding-left: 0;
        padding-right: 0;
        margin-top: 0
    }

    .featured-article .tag a {
        background-color: #fff;
        padding: 5px 15px;
        border-radius: 24px;
        margin-right: 5px;
        text-decoration: none;
        color: #212121;
        margin-bottom: 5px
    }

    .article-item {
        position: relative
    }

    .a-category-prop {
        display: inline-block;
        border-radius: 24px;
        height: 24px;
        line-height: 24px;
        padding: 0 15px;
        background: #1f6bd7;
        color: #fff;
        font-size: 10px;
        position: absolute;
        left: 10px;
        top: -12px
    }

    .featured-article .a-category-prop {
        left: 25px;
        top: -20px
    }

    .no-image .a-category-prop {
        position: relative;
        left: 0;
        top: 0;
        margin-bottom: 10px
    }

    .article-item.sec-pad {
        padding: 0;
        position: relative
    }

    .article-item.sec-pad .sec-title {
        margin-bottom: 20px
    }

    .article-item.sec-pad .article-img {
        padding-bottom: 361px;
        margin-bottom: 0
    }

    .article-item.sec-pad .article-info {
        position: absolute;
        top: 30px;
        left: 0;
        padding: 0
    }

    .article-item.sec-pad .article-info h2 {
        font-size: 28px;
        line-height: 1.2
    }

    .top-article {
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee
    }

    .top-article .flex li {
        width: 100%;
        position: relative
    }

    .top-article .flex li .article-img {
        padding-bottom: 33%
    }

    .top-article .article-info {
        position: absolute;
        top: 15%;
        left: 0;
        width: 50%;
        padding: 15px 25px
    }

    .top-article .article-info .article-title {
        color: #fff;
        font-size: 28px;
        line-height: 1.2
    }

    .top-article .article-info .article-title a {
        color: #fff
    }

    .top-article .article-info .date-published {
        opacity: 1;
        color: #fff
    }

    .top-article .article-category {
        float: left;
        margin-left: 20px;
        margin-top: 20px
    }

    .about-cards .flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        margin: 0 -10px;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .about-cards .flex>li {
        width: calc(25% - 20px);
        max-width: 410px;
        margin: 0 10px;
        border-radius: 6px;
        position: relative
    }

    .about-cards.careers .flex>li {
        margin-bottom: 30px
    }

    .careers .box-card {
        height: 0;
        padding-bottom: 69%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    .careers .box-card:hover {
        -moz-transform: scale(1.02);
        -ms-transform: scale(1.02);
        -o-transform: scale(1.02);
        -webkit-transform: scale(1.02);
        transform: scale(1.02)
    }

    .careers .box-card figure {
        position: absolute;
        margin: 0;
        opacity: .75
    }

    .careers .box-card .status {
        display: inline-block;
        border-radius: 24px;
        line-height: 25px;
        padding: 5px 15px;
        background: #1f6bd7;
        color: #fff;
        font-size: 10px;
        margin-bottom: 10px;
        font-weight: 700;
        text-transform: uppercase
    }

    .careers .box-card .content {
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        position: absolute;
        left: 50%;
        top: 50%;
        width: 90%
    }

    .careers .box-card .content h3 {
        font-size: 20px
    }

    .careers .box-card .content:after {
        content: '';
        position: absolute;
        width: 5px;
        height: 100%;
        left: 0;
        top: 0;
        background-color: transparent
    }

    .careers .box-card .content .btn {
        margin-top: 15px;
        text-transform: uppercase
    }

    .careers.no-tech .highlight .content,
    .careers.sales .highlight .content,
    .careers.technical .highlight .content {
        color: #fff
    }

    .careers.no-tech .highlight .btn,
    .careers.sales .highlight .btn,
    .careers.technical .highlight .btn {
        border-color: rgba(255, 255, 255, .5);
        color: #fff
    }

    .careers .highlight {
        background-color: #000
    }

    .careers .highlight.with-photo .content,
    .careers .highlight.with-photo-min .content {
        margin-top: 0
    }

    .careers .highlight.with-photo .content:after,
    .careers .highlight.with-photo-min .content:after {
        display: none
    }

    .careers .grid-item--width2 .highlight.with-photo {
        padding-bottom: 69.9%
    }

    .careers .grid-item--width2 .highlight.with-photo h3 {
        font-size: 40px
    }

    .careers .grid-item--width2 .highlight.with-photo p {
        font-size: 18px
    }

    .careers .grid-item--width2 .highlight.with-photo .content:after {
        display: none
    }

    .careers .grid-item--width2 .highlight.with-photo-min {
        padding-bottom: 69.9%
    }

    @media (max-width:991px) {
        .featured-news .flex li {
            width: calc(33.33% - 20px);
            max-width: 380px
        }

        .featured-news .flex li:first-child {
            width: calc(66.66% - 20px);
            max-width: 620px
        }
    }

    @media (max-width:640px) {
        .featured-news .flex li {
            width: calc(50% - 20px);
            max-width: 380px
        }

        .featured-news .flex li:first-child {
            width: calc(100% - 20px);
            max-width: 640px
        }

        .article-title {
            font-size: 14px
        }

        .no-image .article-title {
            font-size: 20px;
            line-height: 1.2
        }
    }

    .recommended-bg {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: url(frontend/images/home/recommended-bg.jpg) no-repeat top center;
        background-size: cover
    }

    .property-list {
        margin: 0 -16px
    }

    .property-list .sec-head {
        padding: 0 15px
    }

    .property-left-card .property-list .flex {
        -webkit-box-pack: left;
        -ms-flex-pack: left;
        justify-content: left
    }

    .property-list .flex.owl-carousel {
        display: -webkit-flex;
        display: -webkit-box;
        display: -moz-flex;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .property-list .flex li {
        width: calc(33.33% - 32px);
        max-width: 610px;
        margin: 0 16px;
        border-radius: 6px;
        position: relative;
        margin-bottom: 25px
    }

    .property-left-card .property-list .flex li {
        width: calc(50% - 20px);
        margin-bottom: 25px;
        margin-left: 10px;
        margin-right: 10px
    }

    @media (max-width:991px) {
        .property-left-card .property-list .flex li {
            margin-bottom: 15px;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }
    }

    @media (max-width:767px) {
        .property-left-card .property-list .flex li {
            width: calc(100% - 20px)
        }
    }

    .property-list .property-item a {
        color: #212121
    }

    .property-left-card .property-list {
        margin: 0 -17px
    }

    @media (max-width:767px) {
        .property-left-card .property-list {
            margin: 0 -10px
        }
    }

    .property-left-card .property-list ul li:last-child {
        margin-bottom: 0
    }

    @media (max-width:991px) {
        .property-left-card .property-list ul li:last-child {
            margin-bottom: 15px
        }
    }

    .pi-share {
        position: absolute;
        font-size: 12px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700;
        color: #fff;
        text-transform: uppercase;
        z-index: 99;
        top: 5px;
        right: 5px;
        background: rgba(0, 0, 0, .4);
        padding: 2px 6px
    }

    .pi-share:before {
        margin-right: 5px;
        position: relative;
        top: 1px
    }

    .pi-share i:before {
        margin-right: 5px;
        position: relative;
        top: 2px
    }

    .property-status {
        position: absolute;
        bottom: -18px;
        left: 50%;
        margin-left: -20px;
        width: 40px;
        height: 44px;
        z-index: 9;
        font-size: 40px;
        overflow: hidden
    }

    .property-left-card .property-status {
        bottom: 15px;
        right: 15px;
        margin-left: 0;
        left: auto
    }

    @media (max-width:991px) {
        .property-left-card .property-status {
            right: 15px;
            left: auto
        }
    }

    .custom-checkbox .property-status {
        position: relative;
        left: 0;
        bottom: 0;
        margin-left: 0;
        display: inline-block;
        vertical-align: middle;
        width: auto;
        height: 30px;
        overflow: visible
    }

    .property-status .icon-under-construction {
        background: #003299 url(frontend/images/crane-lifting-wht.svg) no-repeat center center;
        background-size: 70%;
        border-radius: 50%;
        display: block;
        height: 100%;
        z-index: 999;
        position: relative
    }

    .property-status .icon-under-construction:before {
        display: none
    }

    .custom-checkbox .property-status .icon-under-construction {
        width: 28px;
        height: 28px;
        position: relative;
        bottom: 0;
        display: inline-block;
        margin-left: 0;
        position: relative;
        vertical-align: middle;
        left: -3px
    }

    @media (max-width:1024px) {
        .custom-checkbox .property-status .icon-under-construction {
            vertical-align: top
        }
    }

    .property-status .icon-under-construction img {
        padding: 9px;
        top: -2px;
        display: none
    }

    .custom-checkbox .property-status .icon-under-construction img {
        padding: 4px;
        top: -1px;
        width: 100%;
        height: auto;
        position: relative
    }

    .property-status.circle-black:after,
    .property-status.circle-white:after {
        content: '';
        display: block;
        width: 30px;
        height: 30px;
        position: absolute;
        left: 50%;
        top: 50%;
        background: #fff;
        margin-top: -15px;
        margin-left: -15px;
        border-radius: 50%;
        z-index: 1
    }

    .property-status.circle-black:after {
        background: #212121
    }

    .property-status.triangle-white:before {
        content: '';
        position: absolute;
        left: 50%;
        margin-left: -20px;
        top: 2px;
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-bottom: 20px solid #fff
    }

    .property-status.triangle-white:after {
        content: '';
        position: absolute;
        left: 50%;
        margin-left: -20px;
        bottom: 0;
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top: 20px solid #fff
    }

    .property-status .cs {
        background: 0 0;
        xcolor: #fff
    }

    .property-status .cs:before {
        position: relative;
        z-index: 2
    }

    .property-status .new {
        background: 0 0;
        color: #e78600
    }

    .property-status .new:before {
        position: relative;
        z-index: 2
    }

    .property-status .rfo {
        background: 0 0;
        color: #01a71c
    }

    .property-status .rfo:before {
        position: relative;
        z-index: 2
    }

    .property-item {
        margin-bottom: 25px;
        position: relative
    }

    .property-left-card .property-item {
        margin-bottom: 0
    }

    .property-item.no-bot {
        padding-bottom: 0 !important
    }

    .property-item h3 {
        font-size: 16px;
        margin-bottom: 5px
    }

    #timeline-main .property-item h3 {
        display: block
    }

    .property-item p {
        font-size: 14px
    }

    .property-item .price {
        font-size: 16px;
        margin-top: 8px
    }

    .property-item .price:before {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .property-item .btn {
        margin-top: 15px;
        margin-bottom: 30px;
        text-transform: uppercase
    }

    .property-item .content {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .property-item .few-units-left {
        font-weight: 300;
        position: relative;
        color: #fff;
        display: inline-block
    }

    .property-item .few-units-left:before {
        content: '';
        width: 100%;
        position: absolute;
        bottom: -1px;
        height: 1px;
        background: #fff
    }

    .property-type {
        text-align: center
    }

    .property-type:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .box-type {
        font-size: 13px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700;
        margin-right: 4px;
        border-radius: 4px;
        margin-top: 6px;
        padding: 2px 4px;
        text-transform: uppercase;
        display: inline-block;
        color: #212121;
        position: relative;
        letter-spacing: .5px
    }

    .bg-grey .box-type,
    .bg-white .box-type {
        color: #212121
    }

    .box-type:before {
        content: '';
        width: 1px;
        height: 10px;
        opacity: .3;
        background: #979797;
        right: -2px;
        position: absolute;
        top: 50%;
        margin-top: -5px
    }

    .box-type:last-child:before {
        display: none
    }

    .box-type.not-available {
        background: 0 0;
        color: rgba(33, 33, 33, .5)
    }

    .box-type.not-available:after {
        content: '';
        display: block;
        width: 100%;
        height: 1px;
        background: rgba(33, 33, 33, .8);
        position: absolute;
        top: 50%;
        left: -1px;
        z-index: 101
    }

    .bg-grey .box-type.not-available,
    .bg-white .box-type.not-available {
        color: rgba(33, 33, 33, .5)
    }

    .property-detail {
        position: absolute;
        bottom: 0;
        z-index: 10;
        color: #fff;
        padding: 15px
    }

    .property-detail h3 {
        font-size: 12px;
        font-weight: 700;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        margin-bottom: 0;
        margin-bottom: 5px
    }

    .property-detail .price {
        font-size: 12px;
        margin-top: 0;
        font-weight: 400
    }

    .sec-pad.property-finder {
        padding-bottom: 40px;
        min-height: auto;
        border-bottom: 1px solid #eee
    }

    @media (max-width:1024px) {
        .sec-pad.property-finder {
            padding-bottom: 20px
        }
    }

    .sec-pad.property-finder .folio-map-filter-wrapper {
        margin-bottom: 0;
        border: 0;
        padding-bottom: 0
    }

    .sec-pad.search-result {
        padding-top: 40px
    }

    @media (max-width:1024px) {
        .sec-pad.search-result {
            padding-top: 10px
        }
    }

    .sec-pad.search-result h4 {
        padding: 10px 0;
        margin: 0
    }

    .sec-pad.search-result .sort a {
        position: relative
    }

    .sec-pad.search-result .sort a:after {
        content: '\0049';
        font-family: Glyphter;
        font-size: 8px;
        color: #000;
        position: absolute;
        top: 6px;
        margin-top: -4px;
        right: 19px
    }

    .sec-pad.search-result .sec-head h2 {
        font-size: 20px;
        line-height: 30px;
        margin-top: 5px
    }

    .sp-percentage {
        position: absolute;
        display: inline-block;
        width: 80px;
        height: 60px;
        border-radius: 50%;
        background: 0 0;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        z-index: 3;
        color: #fff;
        line-height: 60px;
        text-align: center;
        font-weight: 400;
        font-size: 28px;
        text-shadow: 2px 2px 2px rgba(0, 0, 0, .4)
    }

    #site-progress-wrapper .sp-percentage {
        font-size: 22px
    }

    .sp-percentage i {
        display: inline-block;
        font-family: Roboto, Helvetica, sans-serif;
        font-size: 16px;
        vertical-align: top
    }

    .property-left-card h3,
    .property-left-card p {
        text-align: left;
        display: block
    }

    .property-left-card h3 {
        font-size: 16px
    }

    .property-left-card h3 include breakpoint(tablet2) {
        font-size: 14px
    }

    .unit-card {
        overflow: visible
    }

    .unit-card .property-item {
        text-align: left
    }

    .unit-card .property-item h3 {
        text-align: left;
        display: block;
        font-size: 24px
    }

    @media (max-width:991px) {
        .unit-card .property-item h3 {
            font-size: 20px
        }
    }

    .map-active-right .unit-card .property-item h3 {
        font-size: 20px
    }

    @media (max-width:767px) {
        .unit-card .property-item h3 {
            margin-top: 5px !important;
            font-size: 16px
        }
    }

    .unit-card .property-item:after {
        content: '';
        display: block;
        width: 50%;
        background: rgba(31, 107, 215, .8);
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        z-index: 1
    }

    .unit-card .property-item p.c-blue {
        color: #003299;
        font-size: 16px;
        text-align: center
    }

    .unit-card .property-compare,
    .unit-card .units-compare {
        z-index: 3
    }

    .unit-card .property-status {
        bottom: auto;
        top: 10px
    }

    .unit-card .property-type {
        text-align: left
    }

    .unit-card .property-type .box-type:first-child {
        padding-left: 0;
        margin-top: 0;
        display: block;
        margin-right: 0;
        color: #fff;
        text-align: center
    }

    .unit-card .content {
        float: left;
        width: 50%;
        border-right: 1px solid #ccc;
        padding: 15px 15px 15px
    }

    @media (max-width:767px) {
        .unit-card .content {
            padding: 8px 15px
        }
    }

    .unit-card .content-right {
        color: #fff;
        position: relative;
        z-index: 10;
        float: left;
        width: 50%
    }

    .unit-card .content-right .unit-type {
        text-align: center;
        padding: 15px 15px 15px
    }

    @media (max-width:767px) {
        .unit-card .content-right .unit-type {
            padding-bottom: 8px
        }
    }

    .unit-card .content-right .unit-type h5 {
        font-size: 20px;
        text-align: center;
        padding-top: 8px;
        padding-bottom: 5px
    }

    @media (max-width:991px) {
        .unit-card .content-right .unit-type h5 {
            font-size: 24px
        }
    }

    .unit-card .content-right .unit-type h5 span {
        display: block;
        font-weight: 300;
        font-size: 18px
    }

    .unit-card .property-loc-span {
        display: inline-block;
        color: #003299;
        margin-left: 5px
    }

    .unit-card .unit-logo {
        min-height: 60px;
        height: auto;
        text-align: left;
        margin-bottom: 10px;
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    @media (max-width:767px) {
        .unit-card .unit-logo {
            margin-bottom: 0
        }
    }

    .unit-card .unit-logo img {
        height: auto;
        width: auto;
        max-height: 50px;
        max-width: 100%;
        display: block;
        margin: auto auto
    }

    .change-result {
        float: right;
        max-width: 250px;
        margin-right: 10px;
        margin-top: 7px
    }

    @media (max-width:767px) {
        .change-result {
            margin-right: 0
        }

        .change-result:after {
            content: '';
            display: block;
            float: none;
            clear: both
        }
    }

    .change-result ul li {
        display: inline-block;
        vertical-align: top
    }

    @media (max-width:767px) {
        .change-result ul li:first-child {
            display: none
        }
    }

    .change-result ul li a {
        font-size: 13px;
        font-weight: 700;
        color: #212121;
        line-height: 28px;
        display: block;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        border: 1px solid #212121;
        padding: 0 10px;
        border-radius: 8px
    }

    .change-result ul li a:hover {
        border: 1px solid #01a71c;
        color: #01a71c
    }

    .change-result ul li.active a {
        border: 1px solid #01a71c;
        color: #fff;
        background: #01a71c
    }

    .change-result ul li p {
        margin-top: 7px;
        font-weight: 700;
        font-size: 13px;
        padding-right: 10px
    }

    .site-progress .sec-head .sec-head-action {
        max-width: 320px
    }

    .site-progress-wrap {
        z-index: 4;
        position: relative;
        overflow: visible;
        margin-left: 260px;
        padding-left: 20px;
        max-height: 550px
    }

    @media (max-width:1024px) {
        .site-progress-wrap {
            padding-left: 0;
            margin: 20px 0;
            overflow: visible
        }
    }

    .site-progress-wrap .box-card {
        border: none
    }

    .site-progress-list {
        margin-left: -10px;
        width: auto;
        margin-right: auto;
        max-width: 100%;
        position: relative;
        overflow: visible
    }

    .site-progress-list.owl-carousel .owl-stage-outer {
        position: relative;
        overflow: visible
    }

    .site-progress-list.owl-carousel .owl-nav button {
        color: #000
    }

    .site-progress-list.owl-carousel .owl-nav .owl-prev {
        right: 10px;
        left: auto
    }

    .site-progress-list.owl-carousel .owl-nav .owl-prev:hover {
        background: #01a71c
    }

    .site-progress-list.owl-carousel .owl-nav .owl-next {
        left: 10px;
        right: auto
    }

    .site-progress-list.owl-carousel .owl-nav .owl-next:hover {
        background: #01a71c
    }

    .site-progress-list.owl-carousel .owl-item.center .box-card {
        -webkit-box-shadow: 5px 10px 20px 0 rgba(0, 0, 0, .4);
        box-shadow: 5px 10px 20px 0 rgba(0, 0, 0, .4);
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1)
    }

    .site-progress-list.owl-loaded li {
        max-width: 380px
    }

    .site-progress-list li {
        padding: 20px 5px 30px;
        border-radius: 6px;
        position: relative;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
        max-width: 180px;
        float: left;
        width: 100%
    }

    @media (max-width:640px) {
        .site-progress-list li {
            max-width: 80px
        }
    }

    .site-progress-list .btn {
        margin-top: 40px;
        color: #212121
    }

    .site-progress-bg {
        width: 100%;
        height: 0;
        position: relative;
        overflow: hidden;
        padding-bottom: 150%;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden
    }

    @media (max-width:767px) {
        .site-progress-bg {
            padding-bottom: 120%
        }
    }

    .site-progress-bg:before {
        content: '';
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .26);
        position: absolute;
        left: 0;
        top: 0;
        z-index: 3;
        margin-top: -2px
    }

    .site-progress-bg img {
        width: auto !important;
        height: 100% !important;
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -1px;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .site-progress-bg .percent-display {
        width: 99px;
        height: 76px;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        background: url(frontend/images/siteprogress/percent-sprite.png) no-repeat;
        background-position: 0 -195px;
        z-index: 101;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .site-progress-bg .sp-percentage {
        width: 100px;
        height: 80px;
        line-height: 80px
    }

    .sp-percent-value {
        position: absolute;
        width: 100%;
        background: rgba(1, 167, 28, .6);
        bottom: 0;
        left: 0;
        z-index: 2
    }

    .site-progress-item label {
        font-size: 16px;
        font-weight: 700;
        color: #01a71c;
        margin: 15px 0;
        display: block;
        padding-left: 10px;
        padding-right: 10px
    }

    .site-progress-item label span {
        font-size: 14px;
        font-weight: 700;
        display: block;
        margin-top: 0;
        color: rgba(33, 33, 33, .8)
    }

    .site-progress-item p.update-date {
        font-size: 12px;
        padding: 10px;
        background: #01a71c;
        text-transform: uppercase;
        color: #fff
    }

    .site-progress-carousel .owl-stage-outer {
        overflow: visible !important
    }

    .site-progress-carousel>div.box-card {
        width: 10%;
        margin: 0 4px;
        float: left;
        -webkit-box-shadow: 1px 2px 8px rgba(0, 0, 0, .16);
        box-shadow: 1px 2px 8px rgba(0, 0, 0, .16)
    }

    .sp-img-wrap {
        height: 0;
        padding-bottom: 215%;
        position: relative;
        width: 100%;
        overflow: hidden;
        border-radius: 8px 8px 0 0;
        direction: ltr
    }

    .sp-img-wrap figure img {
        position: absolute;
        width: auto !important;
        height: 100%;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        z-index: 1
    }

    .sp-c-year {
        position: relative
    }

    .sp-text-wrap {
        padding: 10px 5px 30px;
        color: #212121;
        text-transform: capitalize;
        text-align: center
    }

    .sp-text-wrap h4 {
        font-size: 14px
    }

    .sp-text-wrap p {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: green;
        left: 0;
        color: #fff;
        font-size: 12px;
        padding: 3px 5px
    }

    .sp-c-item {
        background: #fff;
        -webkit-box-shadow: 1px 2px 8px rgba(0, 0, 0, .2);
        box-shadow: 1px 2px 8px rgba(0, 0, 0, .2);
        border-radius: 8px;
        position: relative;
        overflow: hidden
    }

    .sp-c-wrap {
        margin-bottom: 10px;
        margin-left: 0;
        margin-top: 20px
    }

    .siteProgress-popup {
        position: fixed;
        width: 100%;
        height: 100%;
        background: #333;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0s ease;
        -moz-transition: all 0s ease;
        -ms-transition: all 0s ease;
        -o-transition: all 0s ease;
        transition: all 0s ease
    }

    .siteProgress-popup.activated {
        visibility: visible;
        opacity: 1;
        z-index: 9909;
        -webkit-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        transition: all .4s cubic-bezier(.645, .045, .355, 1)
    }

    .siteProgress-popup .jq-close {
        position: absolute;
        top: 15px;
        right: 15px;
        color: #fff
    }

    .siteProgress-popup .jq-close:after,
    .siteProgress-popup .jq-close:before {
        background: #fff
    }

    .sp-p-wrap {
        margin: 10px 4vmax;
        background: #fff
    }

    @media (max-width:767px) {
        .sp-p-wrap {
            margin: 10px 0
        }
    }

    .sp-p-wrap .owl-nav .owl-prev {
        left: 10px;
        right: auto
    }

    .sp-p-wrap .owl-nav .owl-next {
        right: 10px;
        left: auto
    }

    .sp-large-carousel {
        width: 75%;
        float: left
    }

    .sp-large-carousel.owl-carousel {
        width: 75%;
        float: left
    }

    @media (max-width:767px) {
        .sp-large-carousel.owl-carousel {
            float: none;
            clear: both;
            width: 100%
        }
    }

    .sp-large-carousel.owl-carousel button.owl-next,
    .sp-large-carousel.owl-carousel button.owl-prev {
        top: 50%;
        margin-top: -25px;
        background: #fff;
        z-index: 104
    }

    .sp-large-carousel.owl-carousel button.owl-next {
        right: 25px
    }

    .sp-large-carousel.owl-carousel button.owl-next.disabled {
        opacity: 0;
        visibility: hidden
    }

    .sp-large-carousel.owl-carousel button.owl-prev {
        left: 25px
    }

    .sp-large-carousel.owl-carousel button.owl-prev.disabled {
        opacity: 0;
        visibility: hidden
    }

    .sp-large-carousel figure {
        position: relative;
        z-index: 1;
        width: 100%;
        padding-bottom: 100%;
        -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        min-height: 0 !important;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        background: #000
    }

    .sp-large-carousel figure img {
        padding: 0;
        position: absolute;
        max-width: 100%;
        max-height: 100%;
        display: block;
        width: auto !important;
        height: auto !important;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        outline: 0;
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden
    }

    .sp-thumb-nav {
        width: 25%;
        float: left;
        top: 40px;
        height: calc(100vh - 60px);
        position: relative;
        overflow: auto;
        padding: 0 15px 0 25px
    }

    @media (max-width:767px) {
        .sp-thumb-nav {
            width: 100%;
            top: 0;
            height: 120px;
            overflow-y: hidden
        }

        .sp-thumb-nav .mCustomScrollBox.mCSB_vertical_horizontal.mCSB_inside>.mCSB_container_wrapper.mCS_no_scrollbar_x.mCS_x_hidden {
            margin-right: 0
        }

        .sp-thumb-nav .mCSB_container_wrapper>.mCSB_container {
            padding-right: 0
        }

        .sp-thumb-nav .mCSB_scrollTools.mCSB_1_scrollbar.mCS-light.mCSB_scrollTools_vertical {
            display: none !important
        }

        .sp-thumb-nav .mCSB_inside>.mCSB_container {
            margin-right: 0;
            top: 10px !important
        }
    }

    @media (max-width:767px) {
        .sp-thumb-nav ul {
            white-space: nowrap;
            overflow: auto;
            width: auto;
            padding-bottom: 10px
        }
    }

    .sp-thumb-nav ul li {
        margin-bottom: 6px;
        border: 5px solid #fff;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
        cursor: pointer
    }

    @media (max-width:767px) {
        .sp-thumb-nav ul li {
            max-width: 120px;
            display: inline-block;
            width: 100%
        }
    }

    .sp-thumb-nav ul li.active {
        border: 5px solid #01a71c
    }

    .sp-thumb-nav figure {
        position: relative;
        z-index: 1;
        width: 100%;
        padding-bottom: 75%;
        -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        min-height: 0 !important;
        position: relative;
        background: #000
    }

    .sp-thumb-nav figure img {
        padding: 0;
        position: absolute;
        max-height: 100%;
        display: block;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        height: 100%
    }

    .sp-large-item {
        position: relative;
        overflow: hidden;
        height: calc(100vh - 20px);
        background: #000
    }

    @media (max-width:767px) {
        .sp-large-item {
            height: calc(80vmax - 100px)
        }
    }

    .sp-item-info {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: rgba(31, 107, 215, .9);
        padding: 15px 25px;
        color: #fff;
        z-index: 9
    }

    .sp-item-info h3 {
        font-size: 16px;
        font-weight: 700;
        color: #fff
    }

    .sp-item-info p {
        font-size: 12px
    }

    .sp-thumb-item {
        position: relative;
        display: block
    }

    .sp-thumb-item p {
        font-size: 12px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700;
        position: absolute;
        bottom: 15px;
        left: 15px;
        z-index: 10;
        color: #fff
    }

    @media (max-width:1380px) {
        #site-progress:before {
            content: '';
            display: none
        }
    }

    @media (max-width:640px) {
        .site-progress-carousel.owl-carousel button.owl-next {
            right: -15px
        }

        .site-progress-carousel.owl-carousel button.owl-prev {
            left: -15px;
            margin-left: 0
        }

        .sp-thumb-nav {
            padding: 0 5px 0 5px
        }
    }

    .accordion-wrapper {
        padding-top: 50px;
        padding-bottom: 100px
    }

    @media (max-width:991px) {
        .accordion-wrapper {
            padding-bottom: 60px;
            padding-top: 30px
        }
    }

    .accordion-wrapper ul li {
        border-top: solid 1px #ccc;
        padding: 15px 0
    }

    .accordion-wrapper ul li:last-of-type {
        border-bottom: solid 1px #ccc
    }

    .accor-title {
        float: left
    }

    .accor-header {
        cursor: pointer
    }

    .accor-icon {
        top: 16px;
        position: relative;
        float: right;
        width: 15px;
        height: 20px
    }

    .accor-icon span {
        content: '';
        cursor: pointer;
        height: 2px;
        width: 12px;
        background: #000;
        position: absolute;
        display: block;
        border-radius: 2px;
        -webkit-transition: all .4s ease-in-out;
        -o-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out
    }

    .accor-icon span:nth-child(2) {
        -webkit-transform: rotate(90deg) scale(1);
        -ms-transform: rotate(90deg) scale(1);
        transform: rotate(90deg) scale(1)
    }

    .rotate {
        -webkit-transform: rotate(0) scale(1) !important;
        -ms-transform: rotate(0) scale(1) !important;
        transform: rotate(0) scale(1) !important
    }

    .accor-content-wrapper {
        display: none
    }

    .accor-content-wrapper .accor-content {
        margin-top: 25px;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .accor-details-wrapper {
        width: 50%
    }

    .accor-details p {
        font-family: Molengo, "Trebuchet MS", sans-serif
    }

    .accor-details p:first-of-type {
        padding-bottom: 10px;
        font-size: 14px;
        font-weight: 700;
        line-height: 1.57;
        width: 30%
    }

    .accor-details p:nth-of-type(2) {
        width: 60%;
        opacity: .71;
        font-size: 12px;
        line-height: 1.33;
        color: #414141;
        padding: 0 15px
    }

    .single-property-banner .banner-text p {
        font-size: 14px;
        max-width: 552px;
        line-height: 1.5
    }

    .promo-seal {
        position: absolute;
        top: 60px;
        width: 160px;
        height: 160px;
        right: 240px;
        padding: 25px;
        border-radius: 100px;
        background: #dbb200;
        -webkit-box-shadow: 1px 5px 10px transparent;
        box-shadow: 1px 5px 10px transparent;
        text-align: center;
        z-index: 4;
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -ms-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1)
    }

    .promo-seal:hover {
        -webkit-box-shadow: 1px 5px 10px rgba(0, 0, 0, .4);
        box-shadow: 1px 5px 10px rgba(0, 0, 0, .4);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -ms-transform: scale(1.1);
        -o-transform: scale(1.1);
        transform: scale(1.1)
    }

    .promo-seal h3 {
        margin: 0;
        font-size: 24px;
        font-weight: 700;
        color: #fff
    }

    .promo-seal p {
        line-height: 1;
        margin: 0;
        color: #fff
    }

    .promo-seal p+p {
        margin: 0 0 10px;
        font-size: 48px;
        font-weight: 700
    }

    .promo-seal p+p span {
        font-size: 16px;
        width: 50px;
        display: inline-block;
        line-height: 17px;
        margin-left: 2px;
        text-transform: uppercase
    }

    .unit-info {
        color: #fff;
        width: calc(100% + 220px);
        padding: 20px 0;
        position: absolute;
        bottom: -58px;
        left: -220px;
        z-index: 88;
        overflow: hidden;
        pointer-events: none
    }

    @media (max-width:1024px) {
        .unit-info {
            width: 100%;
            left: 0
        }
    }

    @media (max-width:767px) {
        .unit-info {
            width: 100%;
            border-radius: 0;
            left: 0;
            bottom: 0;
            pointer-events: auto;
            border-bottom: 1px solid #f2f2f2
        }

        .unit-info .box-card {
            border-radius: 0
        }
    }

    @media (max-width:480px) {
        .unit-info .container {
            padding: 0
        }
    }

    .unit-info .box-card {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1)
    }

    .unit-info .box-card:hover {
        -webkit-box-shadow: 0 0 19px 0 rgba(0, 0, 0, .3);
        box-shadow: 0 0 19px 0 rgba(0, 0, 0, .3)
    }

    .unit-info .flex li {
        padding: 15px 15px 12px 15px;
        position: relative;
        width: 33.33%;
        float: left
    }

    @media (max-width:767px) {
        .unit-info .flex li {
            width: 50%;
            padding: 10px 10px
        }

        .unit-info .flex li:nth-child(2) {
            display: none
        }
    }

    .unit-info .flex li:first-child {
        width: 37%;
        padding-left: 30px
    }

    @media (max-width:991px) {
        .unit-info .flex li:first-child {
            padding-left: 0
        }
    }

    @media (max-width:767px) {
        .unit-info .flex li:first-child {
            width: 50%;
            padding: 10px 15px
        }
    }

    .unit-info .flex li:last-child {
        width: 25%
    }

    @media (max-width:767px) {
        .unit-info .flex li:last-child {
            width: 50%
        }
    }

    .unit-info .flex li:after {
        content: '';
        display: block;
        height: 100%;
        width: 1px;
        background: #ccc;
        position: absolute;
        right: 0;
        top: 0
    }

    .unit-info .flex li:last-of-type {
        border: none
    }

    .unit-info .flex li:last-of-type:after {
        display: none
    }

    .unit-info p {
        font-size: 20px;
        text-align: left
    }

    @media (max-width:991px) {
        .unit-info p {
            font-size: 18px
        }
    }

    .unit-info .price {
        font-size: 20px
    }

    @media (max-width:991px) {
        .unit-info .price {
            font-size: 18px
        }
    }

    @media (max-width:640px) {
        .unit-info .price {
            font-size: 12px
        }
    }

    .unit-info .box-type {
        font-size: 20px;
        font-weight: 700;
        font-family: Molengo, "Trebuchet MS", sans-serif
    }

    @media (max-width:991px) {
        .unit-info .box-type {
            font-size: 18px
        }
    }

    @media (max-width:640px) {
        .unit-info .box-type {
            font-size: 12px
        }
    }

    .unit-info .sub-text {
        font-size: 14px;
        font-family: Molengo, "Trebuchet MS", sans-serif
    }

    .unit-info .property-type .box-type {
        margin-top: 0;
        padding-top: 0;
        padding-bottom: 0;
        padding-left: 0;
        margin-right: 10px
    }

    .unit-info .property-type .box-type:before {
        height: 16px;
        background: #ccc;
        opacity: .35;
        right: -4px;
        margin-top: -7px
    }

    .unit-info .property-status {
        position: absolute;
        bottom: auto;
        margin-left: 0;
        height: 41px;
        width: 40px;
        right: 0;
        left: auto
    }

    .unit-info .unit-info-status {
        position: relative;
        padding-right: 60px;
        display: table;
        height: 42px
    }

    @media (max-width:767px) {
        .unit-info .unit-info-status {
            padding-right: 45px
        }
    }

    .unit-info .unit-info-status p {
        font-size: 20px;
        line-height: 1;
        font-weight: 700;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        display: table-cell;
        vertical-align: middle
    }

    @media (max-width:991px) {
        .unit-info .unit-info-status p {
            font-size: 16px
        }
    }

    .new-project {
        background-color: #e78600
    }

    .new-project .flex {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .new-project .flex li {
        border-right: solid 1px #e8ad5a
    }

    .rightbar-logo {
        outline: 0;
        height: 60px;
        background: 0 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding: 5px 0;
        position: relative;
        margin-right: 29px;
        background: #fff;
        margin-bottom: 25px;
        opacity: 0;
        -webkit-transition: opacity .4s ease;
        -moz-transition: opacity .4s ease;
        -ms-transition: opacity .4s ease;
        -o-transition: opacity .4s ease;
        transition: opacity .4s ease
    }

    .rightbar-logo.opac {
        opacity: 1
    }

    @media (max-width:1024px) {
        .rightbar-logo {
            display: none
        }
    }

    .rightbar-logo img {
        position: absolute;
        display: block;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        padding: 0 5px;
        max-height: 50px;
        max-width: 100%;
        background: #fff
    }

    .unit-info-mobile {
        display: none
    }

    .master-plan-wrapper {
        margin: 30px 0
    }

    .master-plan-wrapper .flex li {
        border-right: solid 1px #e0e0e0;
        padding: 0 40px
    }

    .master-plan-wrapper .flex li:first-of-type {
        padding-left: 0;
        width: 16%
    }

    .master-plan-wrapper .flex li:nth-of-type(2) {
        width: 35%
    }

    .master-plan-wrapper .flex li:nth-of-type(3) {
        width: 24%
    }

    .master-plan-wrapper .flex li:last-of-type {
        padding-right: 0;
        border: none;
        width: 25%
    }

    .master-plan-wrapper .flex li h4 {
        font-family: Roboto, Helvetica, sans-serif;
        font-size: 20px
    }

    .master-plan-wrapper .flex li p {
        font-family: Molengo, "Trebuchet MS", sans-serif;
        color: #414141;
        font-size: 12px;
        line-height: 1.33;
        opacity: .71
    }

    .master-plan-details .flex {
        -webkit-box-pack: left;
        -ms-flex-pack: left;
        justify-content: left
    }

    .master-plan-details p {
        margin-bottom: 20px
    }

    .master-plan-img {
        margin: 30px 0 50px;
        position: relative;
        width: 100%;
        overflow: hidden
    }

    .master-plan-img img {
        width: 100%;
        height: auto;
        display: block
    }

    .master-plan-img img.mp-initial {
        border-radius: 6px;
        width: auto;
        height: auto;
        display: block;
        border-radius: 6px;
        max-width: 100%;
        max-height: 100%
    }

    .single-features-list {
        margin: 0 -10px
    }

    .single-features-list .owl-carousel .owl-nav .owl-prev {
        right: auto;
        left: 10px
    }

    .single-features-list .flex:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .single-features-list .flex li {
        width: calc(20% - 20px);
        float: left;
        max-width: 310px;
        margin: 0 10px
    }

    @media (max-width:991px) {
        .single-features-list .flex li {
            width: calc(25% - 20px)
        }
    }

    @media (max-width:767px) {
        .single-features-list .flex li {
            width: 50%;
            float: left;
            margin: 0;
            padding: 0 5px
        }
    }

    @media (max-width:767px) {
        .single-features-list .flex.owl-loaded li {
            width: 100%;
            float: none;
            padding: 0
        }
    }

    .single-features-list .card-item {
        margin-bottom: 20px;
        position: relative;
        overflow: hidden;
        border-radius: 6px
    }

    .single-features-list .card-item:hover:after {
        background: rgba(0, 0, 0, 0)
    }

    .single-features-list .card-item:hover h3 {
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, .4);
        -webkit-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0)
    }

    .single-features-list .card-item:after {
        content: '';
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .4);
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -ms-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease
    }

    .single-features-list .card-item h3 {
        color: #fff;
        position: absolute;
        left: 50%;
        bottom: 50%;
        z-index: 101;
        margin-bottom: 0;
        width: 100%;
        padding: 5px 15px;
        font-family: Roboto, Helvetica, sans-serif;
        font-size: 14px;
        line-height: 18px;
        background: rgba(0, 0, 0, 0);
        -webkit-transform-origin: center left;
        -ms-transform-origin: center left;
        transform-origin: center left;
        -webkit-transform: translate(-50%, 50%);
        -moz-transform: translate(-50%, 50%);
        -ms-transform: translate(-50%, 50%);
        -o-transform: translate(-50%, 50%);
        transform: translate(-50%, 50%);
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: bottom .4s ease;
        -moz-transition: bottom .4s ease;
        -ms-transition: bottom .4s ease;
        -o-transition: bottom .4s ease;
        transition: bottom .4s ease;
        text-align: center;
        z-index: 3
    }

    .single-features-list .card-img {
        margin-bottom: 0;
        border-radius: 0
    }

    .single-features-list .card-img img {
        border-radius: 0
    }

    .portrait .master-plan-details {
        width: 65%;
        float: right;
        padding-left: 40px
    }

    .portrait .master-plan-img-wrapper {
        width: 35%
    }

    .portrait .master-plan-img {
        margin: 0 0 50px
    }

    .portrait .flex {
        display: block;
        max-width: 400px
    }

    .portrait .flex li {
        padding: 15px 0;
        border: none;
        margin-bottom: 25px;
        border-bottom: 1px solid #ccc
    }

    .portrait .flex li:first-of-type,
    .portrait .flex li:last-of-type,
    .portrait .flex li:nth-of-type(2),
    .portrait .flex li:nth-of-type(3) {
        width: 100%
    }

    .portrait .flex li p {
        margin-bottom: 0
    }

    .section-features {
        margin-top: 40px;
        margin-bottom: 40px;
        clear: both
    }

    .section-features .sec-head {
        margin-bottom: 15px
    }

    .section-features .sec-head h4 {
        margin-bottom: 0
    }

    .units-content,
    .units-details-content,
    .units-details-header,
    .units-header {
        position: relative
    }

    .units-content ul,
    .units-details-content ul,
    .units-details-header ul,
    .units-header ul {
        background: 0 0;
        -webkit-transition: background .4s ease;
        -moz-transition: background .4s ease;
        -ms-transition: background .4s ease;
        -o-transition: background .4s ease;
        transition: background .4s ease
    }

    .units-content ul a,
    .units-details-content ul a,
    .units-details-header ul a,
    .units-header ul a {
        color: #212121
    }

    .units-content ul:hover,
    .units-details-content ul:hover,
    .units-details-header ul:hover,
    .units-header ul:hover {
        background: #cfe5f9
    }

    .units-content .flex,
    .units-details-content .flex,
    .units-details-header .flex,
    .units-header .flex {
        -webkit-box-pack: left;
        -ms-flex-pack: left;
        justify-content: left;
        border-bottom: solid 1px #ccc;
        padding: 15px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    @media (max-width:991px) {

        .units-content .flex,
        .units-details-content .flex,
        .units-details-header .flex,
        .units-header .flex {
            padding-right: 70px
        }
    }

    .units-details-header .flex:hover {
        background: 0 0 !important
    }

    .units-details-header .flex li {
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-size: 14px;
        font-weight: 700;
        width: 20%
    }

    .units-details-header .flex li:first-of-type {
        width: 5%
    }

    .units-details-header .flex li:nth-child(2) {
        width: 25%
    }

    .units-details-header .flex li:nth-child(3) {
        text-align: center;
        width: 15%
    }

    .units-details-header .flex li:nth-child(4) {
        text-align: center
    }

    @media (max-width:991px) {
        .units-details-header .flex li:nth-child(4) {
            width: 25%
        }
    }

    .units-details-header .flex li:nth-child(5) {
        text-align: right;
        width: 15%
    }

    @media (max-width:991px) {
        .units-details-header .flex li:nth-child(5) {
            width: 25%
        }
    }

    .units-details-content {
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .units-details-content .flex.not-available {
        background: #f2f2f2
    }

    .units-details-content .flex.not-available .text-warning {
        color: #333;
        text-transform: uppercase
    }

    .units-details-content .flex li {
        font-family: Roboto, Helvetica, sans-serif;
        font-size: 12px;
        width: 20%
    }

    .units-details-content .flex li:first-of-type {
        width: 5%;
        position: relative
    }

    .units-details-content .flex li:first-of-type span {
        width: 20px;
        height: 20px;
        position: absolute;
        color: #e78600;
        top: -10px;
        font-size: 18px
    }

    .units-details-content .flex li:nth-child(3) {
        text-align: center;
        width: 15%
    }

    .units-details-content .flex li:nth-of-type(2) {
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-size: 14px;
        font-weight: 700;
        width: 25%
    }

    .units-details-content .flex li:nth-child(4) {
        text-align: center
    }

    @media (max-width:991px) {
        .units-details-content .flex li:nth-child(4) {
            width: 25%
        }
    }

    .units-details-content .flex li:nth-child(5) {
        text-align: right;
        width: 15%
    }

    @media (max-width:991px) {
        .units-details-content .flex li:nth-child(5) {
            width: 25%
        }
    }

    .units-details-content .flex li:last-of-type {
        width: 20%;
        position: absolute;
        right: 0
    }

    @media (max-width:767px) {
        .units-details-content .flex li:last-of-type {
            width: 100%;
            position: relative;
            left: auto;
            text-align: right;
            margin-top: 5px
        }
    }

    .units-details-content .btn {
        line-height: 30px;
        height: 30px;
        float: right;
        padding: 0 15px;
        margin-left: 5px;
        margin-right: 5px
    }

    @media (max-width:767px) {
        .units-details-content .btn {
            min-width: 72px;
            margin-bottom: 5px;
            float: none;
            margin: 0
        }
    }

    .text-warning {
        color: #e78600;
        font-size: 10px;
        font-weight: 900
    }

    .not-available li:first-child,
    .not-available li:nth-child(2),
    .not-available li:nth-child(3),
    .not-available li:nth-child(4) {
        opacity: .4
    }

    .not-available li:first-child span {
        display: none
    }

    .sec-features {
        padding-top: 0;
        max-width: 80%
    }

    .sec-features.full {
        max-width: 100%
    }

    .sec-features .sec-feature-title {
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-size: 16px;
        padding-bottom: 10px
    }

    .sec-features p {
        color: #414141;
        font-size: 14px
    }

    .sec-features a {
        text-decoration: underline;
        font-weight: 700
    }

    .sec-features .icon-image {
        margin-left: 5px;
        vertical-align: middle;
        color: #01a71c;
        font-size: 16px;
        position: relative;
        top: 2px
    }

    .sec-features ul {
        margin-left: -10px;
        margin-right: -10px
    }

    .sec-features ul:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .sec-features ul li {
        float: left;
        padding: 0 10px;
        margin-bottom: 6px
    }

    .building-sec-wrapper h5 {
        color: #000;
        opacity: .5;
        text-transform: uppercase;
        font-family: Roboto, Helvetica, sans-serif;
        font-weight: 400
    }

    .building-sec-wrapper .flex {
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    @media (max-width:767px) {
        .building-sec-wrapper .property-list.flex.owl-carousel {
            padding: 0
        }
    }

    .building-sec-wrapper ul:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .building-sec-wrapper .property-list .flex {
        margin: 0 -20px
    }

    @media (max-width:767px) {
        .building-sec-wrapper .property-list .flex li {
            width: calc(50% - 20px);
            float: left;
            margin: 0 10px 30px;
            clear: none
        }
    }

    .status-rfo,
    .status-uc {
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-size: 14px;
        font-weight: 700
    }

    .status-rfo {
        color: #01a71c
    }

    .status-uc {
        color: #003299
    }

    .building-img {
        position: relative;
        height: 0;
        padding-bottom: 77%;
        width: 100%;
        overflow: hidden;
        margin-bottom: 15px;
        border-radius: 6px
    }

    .building-img img {
        border-radius: 6px;
        width: auto !important;
        height: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        display: block;
        border-radius: 6px
    }

    .building-details {
        padding: 32px 0 0 0;
        width: 100%;
        position: relative
    }

    .portrait .building-details {
        position: absolute;
        left: 0;
        bottom: 0;
        color: #fff
    }

    .building-details ul {
        margin-top: 13px;
        padding: 0 10px 13px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .building-details ul:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .building-details ul li:first-child:last-child {
        width: 100%
    }

    .building-details ul li:first-child:nth-last-child(2),
    .building-details ul li:first-child:nth-last-child(2)~li {
        width: 50%
    }

    .building-details ul li:first-child:nth-last-child(3),
    .building-details ul li:first-child:nth-last-child(3)~li {
        width: 33.3333%
    }

    .building-details ul li:first-child:nth-last-child(4),
    .building-details ul li:first-child:nth-last-child(4)~li {
        width: 33.3333%;
        min-width: 80px
    }

    .building-details ul li:first-child:nth-last-child(5),
    .building-details ul li:first-child:nth-last-child(5)~li {
        width: 33.3333%;
        min-width: 80px;
        margin-bottom: 10px !important
    }

    .building-details ul li:first-child:nth-last-child(5)~li:nth-child(4):before {
        display: none
    }

    .building-details ul li {
        display: inline-block;
        margin: 0 !important;
        padding: 0 10px;
        position: relative
    }

    .building-details ul li:first-child:before {
        display: none
    }

    .building-details ul li:before {
        content: '';
        display: block;
        width: 1px;
        height: 100%;
        background: #ccc;
        position: absolute;
        left: 0;
        top: 0
    }

    .building-details ul li p {
        font-size: 12px
    }

    .building-details p {
        font-size: 12px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 400;
        color: #414141
    }

    .portrait .building-details p {
        color: #fff
    }

    .building-details p strong {
        font-weight: 700;
        font-size: 14px;
        color: #212121
    }

    .portrait .building-details p strong {
        color: #fff
    }

    @media (max-width:767px) {
        .building-details p.status-rfo {
            font-size: 12px
        }
    }

    .building-details .property-status {
        top: -18px
    }

    @media (max-width:767px) {
        .building-details h4 {
            font-size: 16px;
            margin-top: 10px
        }
    }

    #building-1col.flex>li,
    #building-2col.flex>li {
        width: calc(50% - 32px)
    }

    #building-1col.flex .box-card,
    #building-2col.flex .box-card {
        -webkit-box-shadow: none;
        box-shadow: none;
        background: 0 0;
        border: none
    }

    #building-1col.flex .property-img,
    #building-2col.flex .property-img {
        width: 50%;
        float: left;
        padding-bottom: 75%;
        overflow: hidden;
        position: relative;
        border-radius: 8px
    }

    #building-1col.flex .building-details,
    #building-2col.flex .building-details {
        width: 50%;
        float: left;
        position: relative;
        color: #212121;
        padding-left: 20px;
        text-align: left
    }

    #building-1col.flex .building-details p,
    #building-1col.flex .building-details p strong,
    #building-2col.flex .building-details p,
    #building-2col.flex .building-details p strong {
        color: #212121;
        font-size: 12px
    }

    #building-1col.flex .building-details p strong,
    #building-2col.flex .building-details p strong {
        font-size: 16px
    }

    #building-1col.flex .building-details .property-status,
    #building-2col.flex .building-details .property-status {
        position: relative;
        display: inline-block;
        top: auto;
        bottom: auto;
        margin-left: 0;
        float: none;
        left: auto
    }

    #building-1col.flex .building-details ul,
    #building-2col.flex .building-details ul {
        display: block;
        padding: 15px 0 0 0
    }

    @media (max-width:767px) {

        #building-1col.flex .building-details ul,
        #building-2col.flex .building-details ul {
            padding-top: 0
        }
    }

    #building-1col.flex .building-details ul li,
    #building-2col.flex .building-details ul li {
        width: 100%;
        display: block;
        float: none;
        padding: 0 0 12px 0
    }

    #building-1col.flex .building-details ul li:before,
    #building-2col.flex .building-details ul li:before {
        display: none
    }

    #building-1col.flex .building-details .status-type,
    #building-2col.flex .building-details .status-type {
        font-size: 12px;
        font-weight: 300
    }

    @media (max-width:767px) {
        #building-1col {
            padding: 0
        }

        #building-1col li {
            margin-right: 0;
            width: 100%;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }
    }

    #building-1col.flex>li {
        width: calc(100% - 32px);
        max-width: 100%;
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1)
    }

    #building-1col.flex .property-img {
        width: 35%;
        padding-bottom: 52%
    }

    @media (max-width:767px) {
        #building-1col.flex .property-img {
            width: 40%;
            padding-bottom: 60%
        }
    }

    @media (max-width:640px) {
        #building-1col.flex .property-img {
            width: 50%;
            padding-bottom: 75%
        }
    }

    #building-1col.flex .building-details {
        padding-left: 40px
    }

    @media (max-width:767px) {
        #building-1col.flex .building-details {
            padding-left: 20px;
            padding-top: 0
        }
    }

    #building-1col.flex .building-details p,
    #building-1col.flex .building-details p strong {
        color: #212121;
        font-size: 14px
    }

    @media (max-width:767px) {

        #building-1col.flex .building-details p,
        #building-1col.flex .building-details p strong {
            font-size: 12px
        }
    }

    #building-1col.flex .building-details p strong {
        font-size: 18px
    }

    @media (max-width:767px) {
        #building-1col.flex .building-details p strong {
            font-size: 16px
        }
    }

    #building-1col.flex .building-details ul li {
        padding-bottom: 20px
    }

    @media (max-width:767px) {
        #building-1col.flex .building-details ul li {
            padding-bottom: 13px
        }
    }

    @media (max-width:767px) {
        #building-2col {
            padding: 0
        }
    }

    @media (max-width:767px) {
        #building-2col.flex>li {
            width: 100%;
            margin-bottom: 20px;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }
    }

    .building-item.no-image {
        display: table;
        height: 100%;
        width: 100%
    }

    .building-item.no-image .building-details {
        display: table-cell;
        vertical-align: middle
    }

    .building-item.no-image .building-details .property-status {
        position: relative;
        top: 0;
        left: 0;
        margin-left: 0;
        bottom: auto
    }

    .building-item a {
        display: block
    }

    .building-item a:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .building-item.landscaped .property-img {
        padding-bottom: 90%;
        width: 100%
    }

    .fancybox-title-float-wrap {
        top: 0;
        left: 0;
        margin-bottom: 0
    }

    .fancybox-title-float-wrap .child {
        background: 0 0;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        color: #01a71c;
        font-weight: 700;
        text-shadow: none;
        font-size: 24px;
        padding: 20px 30px
    }

    #unit-modal .content {
        position: relative;
        z-index: 2
    }

    #unit-modal:after {
        content: '';
        height: 150%;
        position: absolute;
        top: 0;
        right: 0;
        width: 36%;
        background: #f7f7f7;
        z-index: 1;
        border-radius: 0 8px 8px 0
    }

    #unit-modal h3 {
        margin-bottom: 0
    }

    #unit-modal .flex {
        padding: 10px;
        background-color: transparent
    }

    #unit-modal .flex li {
        width: 40%;
        font-size: 12px
    }

    #unit-modal .flex li:first-child {
        line-height: 1
    }

    #unit-modal .flex li:nth-child(n+2) {
        width: 30%;
        text-align: center
    }

    #unit-modal .flex li sup {
        vertical-align: super;
        font-size: 10px;
        opacity: .7
    }

    #unit-modal .flex:last-child {
        border-bottom: 0
    }

    #unit-modal .flex.total {
        border-top: 3px solid #000
    }

    #unit-modal .units-header .flex {
        border-bottom: 3px solid #ccc
    }

    #unit-modal .units-header .flex li {
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-size: 14px;
        font-weight: 700
    }

    #overview {
        z-index: 101;
        overflow: visible
    }

    #location {
        z-index: 5
    }

    @media (max-width:1024px) {
        #location {
            padding-top: 0
        }
    }

    .gm-style-iw-t.custom-iw:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        -webkit-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
        transform: translate(-50%, 0);
        width: 0;
        height: 0;
        border-left: 9px solid transparent;
        border-right: 9px solid transparent;
        border-top: 11px solid #003299 !important;
        background: 0 0;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .gm-style-iw-t.custom-iw button {
        display: none !important
    }

    @media (max-width:767px) {
        .gm-style-iw-t.custom-iw button {
            display: block !important
        }
    }

    .custom-iw .gm-style-iw.gm-style-iw-c {
        background: #003299 !important;
        padding: 0 !important;
        color: #fff !important
    }

    .custom-iw.info-school .gm-style-iw.gm-style-iw-c {
        background: #efcb3c !important
    }

    .custom-iw.info-medical .gm-style-iw.gm-style-iw-c {
        background: #ba3a32 !important
    }

    .custom-iw.info-transport .gm-style-iw.gm-style-iw-c {
        background: #ff9500 !important
    }

    .custom-iw.info-others .gm-style-iw.gm-style-iw-c {
        background: #aaa !important
    }

    .gm-style-iw-t.custom-iw.info-school:after {
        border-top: 11px solid #efcb3c !important
    }

    .gm-style-iw-t.custom-iw.info-medical:after {
        border-top: 11px solid #ba3a32 !important
    }

    .gm-style-iw-t.custom-iw.info-transport:after {
        border-top: 11px solid #ff9500 !important
    }

    .gm-style-iw-t.custom-iw.info-others:after {
        border-top: 11px solid #aaa !important
    }

    .gm-style .gm-style-iw-d {
        overflow: hidden !important;
        padding: 15px 15px 15px 5px
    }

    .alternate-bg+.sec-pad.sec-default {
        padding-top: 40px
    }

    .gm-style-iw-t.custom-iw.info-school .gm-style-iw-d>div {
        font-size: 14px
    }

    .gm-style-iw-t.custom-iw.info-school .gm-style-iw-d>div b {
        color: #000
    }

    .gm-style-iw-t.custom-iw.info-school span {
        color: #000 !important
    }

    .wrap-infoWindow span {
        font-size: 22px;
        position: relative;
        display: block;
        font-size: 26px;
        text-align: center;
        font-weight: 700;
        display: block
    }

    .gm-style-iw-d>div {
        font-size: 14px
    }

    .gm-style-iw-d>div b {
        font-size: 16px;
        display: inline-block;
        margin-bottom: 5px
    }

    #recommended-properties .owl-nav .owl-next {
        left: auto;
        right: 10px
    }

    #recommended-properties .owl-nav .owl-prev {
        right: auto;
        left: 10px
    }

    #recommended-properties .owl-stage-outer {
        position: relative;
        overflow: visible
    }

    @media (max-width:767px) {
        #building-list-wrapper {
            padding: 0;
            width: auto;
            margin: 0 -20px
        }
    }

    @media (max-width:640px) {
        #building-list-wrapper ul:after {
            content: '';
            display: block;
            float: none;
            clear: both
        }
    }

    @media (max-width:991px) {
        #building-list-wrapper li {
            width: calc(33.33% - 20px);
            margin: 0 10px 30px
        }
    }

    @media (max-width:640px) {
        #building-list-wrapper li {
            width: calc(50% - 20px);
            float: left
        }
    }

    .disclaimer-wrap .sec-head {
        margin-bottom: 0
    }

    .disclaimer-box {
        border: 1px solid #ccc;
        padding: 15px;
        margin-bottom: -80px;
        font-size: 12px
    }

    @media (max-width:991px) {
        .disclaimer-box {
            margin-bottom: 0
        }
    }

    .google-review-link {
        margin-bottom: 8px;
        display: block
    }

    .star-svg {
        width: 23px;
        display: inline-block
    }

    .star-svg img {
        width: 100%;
        height: auto;
        display: block
    }

    .pagination {
        margin-top: 20px;
        margin-bottom: 30px
    }

    .pagination ul {
        text-align: right
    }

    .pagination ul li {
        display: inline-block;
        text-align: center
    }

    .pagination ul li a,
    .pagination ul li span {
        width: 25px;
        height: 25px;
        border-radius: 4px;
        background: rgba(31, 107, 215, .3);
        display: block;
        line-height: 25px;
        font-weight: 400;
        font-size: 12px
    }

    .pagination ul li a:hover {
        background: #1f6bd7;
        color: #fff
    }

    .pagination ul li .pagi-ellipsis {
        background: 0 0
    }

    .pagination ul li.active span {
        font-weight: 700;
        background: #1f6bd7;
        color: #fff
    }

    html:not(.bp-touch) .main-nav ul li.mn-white a:hover {
        color: #212121
    }

    html:not(.bp-touch) .main-nav ul li a:hover {
        color: rgba(255, 255, 255, .6)
    }

    html:not(.bp-touch) .box-card:hover {
        -webkit-box-shadow: 0 0 20px 0 rgba(0, 0, 0, .3);
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, .3);
        -webkit-transform: scale3d(1, 1, 1);
        -moz-transform: scale3d(1, 1, 1);
        -ms-transform: scale3d(1, 1, 1);
        -o-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        border: 1px solid rgba(0, 0, 0, .16)
    }

    html:not(.bp-touch) a.hover-line {
        position: relative
    }

    html:not(.bp-touch) a.hover-line:before {
        content: '';
        display: block;
        width: 100%;
        height: 1px;
        bottom: -2px;
        opacity: 0;
        position: absolute;
        left: 0;
        background: #90b4ff;
        -webkit-transition: transform .3s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: transform .3s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: transform .3s cubic-bezier(.645, .045, .355, 1);
        -o-transition: transform .3s cubic-bezier(.645, .045, .355, 1);
        -webkit-transition: -webkit-transform .3s cubic-bezier(.645, .045, .355, 1);
        transition: -webkit-transform .3s cubic-bezier(.645, .045, .355, 1);
        transition: transform .3s cubic-bezier(.645, .045, .355, 1);
        transition: transform .3s cubic-bezier(.645, .045, .355, 1), -webkit-transform .3s cubic-bezier(.645, .045, .355, 1);
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: left;
        -ms-transform-origin: left;
        transform-origin: left
    }

    html:not(.bp-touch) a.hover-line:hover {
        color: #fff
    }

    html:not(.bp-touch) a.hover-line:hover:before {
        opacity: 1;
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1)
    }

    html:not(.bp-touch) .top-nav ul li a:after {
        -webkit-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        transition: all .4s cubic-bezier(.645, .045, .355, 1)
    }

    html:not(.bp-touch) .top-nav ul li a:hover:after {
        opacity: 1
    }

    html:not(.bp-touch) .search-icon .icon-search {
        -webkit-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        transition: all .4s cubic-bezier(.645, .045, .355, 1)
    }

    html:not(.bp-touch) .search-icon:hover .icon-search {
        background: #1f6bd7;
        color: #fff
    }

    html:not(.bp-touch) .btn:not(.multiselect):hover {
        -webkit-box-shadow: inset 0 1px 8px rgba(0, 0, 0, .16);
        box-shadow: inset 0 1px 8px rgba(0, 0, 0, .16);
        border: 1px solid #1f6bd7;
        background: #1f6bd7
    }

    html:not(.bp-touch) .btn:not(.multiselect).banner-play:hover {
        background: 0 0;
        border: 2px solid #fff;
        opacity: .8;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    html:not(.bp-touch) .btn-ghost:hover {
        color: #fff
    }

    html:not(.bp-touch) .banner-arrow span {
        -webkit-transform-origin: bottom center;
        -ms-transform-origin: bottom center;
        transform-origin: bottom center;
        -webkit-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        transition: all .4s cubic-bezier(.645, .045, .355, 1);
        top: 0;
        position: relative
    }

    html:not(.bp-touch) .banner-arrow:hover span {
        top: 5px
    }

    html:not(.bp-touch) .custom-checkbox.radio-style label:before {
        content: '';
        display: block;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        margin-top: 3px
    }

    html:not(.bp-touch) .custom-checkbox.radio-style label:after {
        content: '';
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #003299;
        top: 4px;
        left: 1px;
        border: 2px solid #fff
    }

    html:not(.bp-touch) .custom-checkbox label {
        font-size: 12px;
        color: #212121;
        min-width: 80px;
        min-height: 26px;
        line-height: 26px;
        padding: 0 18px;
        position: relative;
        border: 1px solid transparent;
        background: 0 0;
        display: inline-block;
        border-radius: 25px;
        padding-left: 35px;
        height: auto;
        white-space: nowrap
    }

    @media (max-width:767px) {
        html:not(.bp-touch) .custom-checkbox label strong {
            white-space: normal;
            line-height: 1.4
        }
    }

    html:not(.bp-touch) .custom-checkbox label.active:before {
        background: #003299;
        border: solid 1px #003299
    }

    html:not(.bp-touch) .custom-checkbox label.active:after {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
        color: #fff
    }

    html:not(.bp-touch) .custom-checkbox label.active:hover:before {
        background: #003299;
        border: solid 1px #003299
    }

    html:not(.bp-touch) .custom-checkbox label:hover {
        background: 0 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 1px solid transparent;
        color: #212121
    }

    html:not(.bp-touch) .custom-checkbox label:hover:before {
        border: 1px solid #1f6bd7
    }

    html:not(.bp-touch) .custom-checkbox label:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 24px;
        height: 24px;
        border-radius: 4px;
        border: solid 1px #bbb;
        background: #fff;
        -webkit-transform-origin: center center;
        -ms-transform-origin: center center;
        transform-origin: center center;
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -ms-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
        margin-top: 0
    }

    html:not(.bp-touch) .custom-checkbox label:after {
        content: '\0044';
        display: inline-block;
        font-family: Glyphter;
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        color: #fff;
        font-size: 14px;
        width: 25px;
        line-height: 25px;
        text-align: center;
        position: absolute;
        left: 0;
        top: 0;
        margin-top: 0;
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0);
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -ms-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease
    }

    html:not(.bp-touch) .custom-checkbox.data-privacy label {
        font-size: 16px;
        white-space: normal
    }

    html:not(.bp-touch) .sr-list-btn li {
        margin-right: 5px
    }

    html:not(.bp-touch) .sr-list-btn li a.btn-ghost {
        border: 1px solid transparent;
        height: 30px;
        line-height: 30px;
        padding: 0 20px
    }

    html:not(.bp-touch) .sr-list-btn li .btn:hover {
        background: 0 0;
        border: 1px solid transparent;
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #003299
    }

    html:not(.bp-touch) .sr-list-btn li .btn-green:hover {
        background: #01a71c;
        border: 1px solid #01a71c;
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #fff
    }

    html:not(.bp-touch) .property-list #property-list-wrapper>li {
        width: calc(25% - 20px)
    }

    @media (max-width:991px) {
        html:not(.bp-touch) .property-list #property-list-wrapper>li {
            width: calc(33.33% - 20px)
        }
    }

    @media (max-width:767px) {
        html:not(.bp-touch) .property-list #property-list-wrapper>li {
            width: calc(50% - 20px)
        }
    }

    html:not(.bp-touch) .property-list .flex>li.unit-card {
        width: calc(50% - 20px)
    }

    @media (min-width:1700px) {
        .property-left-card .property-list .flex li {
            width: calc(33.33% - 20px)
        }

        .building-sec-wrapper .property-list .flex li {
            width: calc(25% - 32px)
        }
    }

    @media (min-width:1800px) {

        .banner.default .container,
        .compare-head-wrap-fixed.is-fixed ul,
        .container,
        .sticky-wrapper,
        footer .container {
            max-width: 1400px;
            margin-left: 300px;
            margin-right: auto
        }

        #timeline-main {
            margin-left: 330px
        }

        body {
            font-size: 16px
        }

        .grid-item {
            width: 25%
        }

        .grid-item.grid-item--width2 {
            width: 50%
        }
    }

    @media (min-width:2000px) {

        .banner.default .container,
        .compare-head-wrap-fixed.is-fixed ul,
        .container,
        footer .container {
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto
        }

        #timeline-main {
            margin-left: auto
        }

        body {
            font-size: 16px
        }
    }

    @media (max-width:1380px) {
        .container {
            margin-left: 240px;
            margin-right: 80px;
            padding: 0 15px
        }

        .rightbar-nav {
            -webkit-transform: translate(100%, -50%);
            -moz-transform: translate(100%, -50%);
            -ms-transform: translate(100%, -50%);
            -o-transform: translate(100%, -50%);
            transform: translate(100%, -50%)
        }

        .banner.default {
            height: 30vh
        }

        #timeline-main {
            margin-left: 240px
        }

        .mob-only {
            display: none
        }

        .contact-form-wrap {
            padding-right: 40px
        }

        .contact-form-wrap .sec-head h2 {
            font-size: 30px
        }

        .contact-form-wrap form {
            padding-right: 0
        }

        .footer-info {
            padding-right: 40px;
            margin-right: 40px;
            width: 75%;
            margin: auto;
            float: none;
            text-align: center
        }

        .footer-info .logo {
            margin: 0 auto 20px
        }

        .footer-detail {
            width: 75%;
            float: none;
            margin: auto;
            padding: 20px 0
        }

        .footer-detail:before {
            display: none
        }

        .corporate-governance picture {
            bottom: -100px
        }

        .blog .container {
            margin-right: 150px
        }

        .rightbar-nav {
            width: 140px
        }

        .rightbar-nav ul li {
            margin-right: 15px
        }

        .rightbar-nav ul li.active a {
            font-size: 12px
        }

        .rightbar-nav ul li a {
            font-size: 10px
        }

        .rightbar-nav .rightbar-logo {
            margin-right: 15px
        }
    }

    @media (max-width:1200px) {
        .mob-only {
            display: none
        }

        .banner-text .banner-logo {
            height: 73px
        }

        .banner-text h1,
        .banner-text h2 {
            font-size: 48px;
            line-height: 52px
        }

        .banner-text p {
            font-size: 16px
        }

        .bf-price-range h4 {
            white-space: normal
        }

        .banner-left {
            padding-right: 60px
        }
    }

    @media (max-width:1024px) {
        .container {
            margin: 0;
            padding: 0 30px
        }

        .banner-arrow-wrap {
            margin-left: 0;
            margin-right: 0;
            width: 100%
        }

        .sm-content {
            padding-top: 100px
        }

        header {
            z-index: 4001
        }

        .mob-only {
            display: none
        }

        .sidebar-menu {
            -webkit-transform: translate(100%, 0);
            -moz-transform: translate(100%, 0);
            -ms-transform: translate(100%, 0);
            -o-transform: translate(100%, 0);
            transform: translate(100%, 0);
            position: fixed;
            right: 0;
            height: 100%;
            background: #062462;
            width: 100%;
            padding-right: 50px;
            z-index: 4000;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-transition: all .3s cubic-bezier(.645, .045, .355, 1);
            -moz-transition: all .3s cubic-bezier(.645, .045, .355, 1);
            -ms-transition: all .3s cubic-bezier(.645, .045, .355, 1);
            -o-transition: all .3s cubic-bezier(.645, .045, .355, 1);
            transition: all .3s cubic-bezier(.645, .045, .355, 1);
            overflow: auto
        }

        .sidebar-menu.slide-left {
            -webkit-transform: translate(0, 0);
            -moz-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0)
        }

        .sidebar-menu .logo {
            opacity: 0
        }

        .top-menu {
            position: fixed;
            width: 100%;
            background: #003299;
            padding-top: 8px
        }

        .top-menu .logo {
            display: block;
            float: left
        }

        .top-menu .top-nav {
            display: none
        }

        .rightbar-nav {
            -webkit-transform: translate(0, 0);
            -moz-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0);
            width: 100%;
            top: auto;
            bottom: 0;
            height: 56px;
            background: #fff;
            -webkit-box-shadow: 0 -10px 48px 0 rgba(0, 0, 0, .19);
            box-shadow: 0 -10px 48px 0 rgba(0, 0, 0, .19);
            z-index: 3000;
            overflow: visible
        }

        .rightbar-nav h2 {
            display: block;
            float: left;
            font-size: 15px;
            font-family: Molengo, "Trebuchet MS", sans-serif;
            opacity: 1;
            color: rgba(33, 33, 33, .5);
            line-height: 56px;
            padding-left: 20px;
            width: 30%;
            background: #fff;
            position: relative;
            z-index: 104;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
            position: relative;
            overflow: hidden
        }

        .rightbar-nav ul {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: auto;
            background: #fff;
            -webkit-box-shadow: 0 -10px 48px 0 rgba(0, 0, 0, .19);
            box-shadow: 0 -10px 48px 0 rgba(0, 0, 0, .19);
            -webkit-transform: translate(0, 100%);
            -moz-transform: translate(0, 100%);
            -ms-transform: translate(0, 100%);
            -o-transform: translate(0, 100%);
            transform: translate(0, 100%);
            visibility: hidden;
            -webkit-transition: all .4s cubic-bezier(.645, .045, .355, 1);
            -moz-transition: all .4s cubic-bezier(.645, .045, .355, 1);
            -ms-transition: all .4s cubic-bezier(.645, .045, .355, 1);
            -o-transition: all .4s cubic-bezier(.645, .045, .355, 1);
            transition: all .4s cubic-bezier(.645, .045, .355, 1)
        }

        .rightbar-nav ul.active {
            bottom: 100%;
            -webkit-transform: translate(0, 0);
            -moz-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0);
            visibility: visible;
            top: auto
        }

        .rightbar-nav ul li {
            border-right: none;
            padding: 0;
            margin-right: 0;
            display: block;
            border-bottom: 1px solid #f2f2f2
        }

        .rightbar-nav ul li:last-child {
            border-bottom: none
        }

        .rightbar-nav ul li:before {
            display: none
        }

        .rightbar-nav ul li a {
            font-size: 15px;
            padding: 13px 28px;
            background: #fff;
            margin-right: 0;
            display: block
        }

        .rightbar-nav ul li a:after {
            xdisplay: none;
            background: silver;
            right: 14px
        }

        .rightbar-nav ul li:first-of-type {
            padding-top: 13px;
            margin-bottom: 0
        }

        .rightbar-nav ul li:first-of-type a {
            top: 0
        }

        .rightbar-nav ul li:last-of-type {
            padding-bottom: 13px;
            margin-top: 0
        }

        .rightbar-nav ul li:last-of-type a {
            bottom: 0
        }

        .rightbar-nav ul li.active a {
            background-color: #01a71c
        }

        .rightbar-nav ul li.active a:after {
            background-color: #fff
        }

        .rightbar-nav .sec-active-text {
            width: 70%;
            float: left;
            padding-right: 20px;
            text-align: right;
            background: #fff;
            position: relative;
            display: block;
            z-index: 104
        }

        .rightbar-nav .sec-active-text>span {
            font-size: 15px;
            font-family: Molengo, "Trebuchet MS", sans-serif;
            line-height: 56px;
            font-weight: 700;
            display: inline-block;
            min-width: 167px;
            padding-right: 20px;
            line-height: 56px;
            height: 56px;
            overflow: hidden;
            white-space: nowrap;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis
        }

        .rightbar-nav .sec-active-text .bullet-wrap {
            position: absolute;
            top: 50%;
            right: 25px;
            margin-top: 3px;
            -webkit-transform: translate(0, -50%);
            -moz-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            -o-transform: translate(0, -50%);
            transform: translate(0, -50%)
        }

        .rightbar-nav .sec-active-text .bullet {
            width: 6px;
            height: 6px;
            display: block;
            margin: 3px 0;
            border-radius: 50%;
            background: silver;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }

        .rightbar-nav .sec-active-text .bullet:first-child {
            -webkit-transform: scale(2);
            -moz-transform: scale(2);
            -ms-transform: scale(2);
            -o-transform: scale(2);
            transform: scale(2);
            background: #01a71c;
            position: relative;
            top: -4px
        }

        .right-side-dim:before {
            display: none
        }

        #location .unit-info .price {
            overflow: hidden
        }

        #location .unit-info .price span {
            display: block;
            float: left;
            width: 100%
        }

        #location .unit-info .price span:before {
            font-size: 14px
        }

        #location .unit-info .property-type span {
            display: inline-block
        }

        .hamburger-menu {
            display: block
        }

        .main-nav ul:not(.nav-other-site) {
            float: right
        }

        .main-nav ul:not(.nav-other-site) li {
            margin-bottom: 10px
        }

        .main-nav ul:not(.nav-other-site) li a {
            text-align: right;
            font-size: 20px;
            padding-right: 0
        }

        .main-nav ul.nav-other-site {
            float: left;
            width: 280px;
            margin-top: 250px
        }

        .main-nav ul.nav-other-site li {
            margin-bottom: 10px;
            height: 70px;
            line-height: 70px;
            max-width: 280px
        }

        .main-nav ul.nav-other-site li a {
            font-size: 20px;
            padding-left: 30px;
            line-height: 1.3
        }

        .main-nav ul.nav-other-site li a span.icon-home {
            font-size: 26px
        }

        #timeline-main {
            margin-left: 0
        }

        .timeline-wrapper {
            padding-left: 0
        }

        .timeline-wrapper .owl-stage-outer {
            padding: 0 30px
        }

        .footer-info {
            float: none;
            clear: both;
            width: 100%;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
            padding-right: 0;
            padding-top: 0;
            max-width: 480px
        }

        .footer-info:after {
            content: '';
            display: none
        }

        .footer-detail {
            width: 100%;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            float: none;
            clear: both;
            margin-top: 40px;
            border-top: 1px solid rgba(255, 255, 255, .2);
            border-bottom: 1px solid rgba(255, 255, 255, .2)
        }

        footer .logo {
            margin-left: auto;
            margin-right: auto
        }

        footer.sec-pad .slant-border.slant-bot {
            position: relative
        }

        .copyrights {
            top: 0;
            text-align: center;
            margin-top: 25px
        }

        .blog.read .sec-head {
            margin-top: 30px
        }

        .blog .container {
            margin-right: 0
        }

        #share-this {
            min-height: 200px;
            padding: 40px 0 0
        }

        #share-this .share-this {
            background-color: transparent;
            position: relative;
            padding: 0 0 70px;
            top: 0;
            right: 0;
            width: 100%
        }

        #share-this .share-this h4 {
            text-align: center
        }

        #share-this .share-this ul {
            text-align: center;
            margin-top: 20px
        }

        #share-this .share-this ul li {
            display: inline-block
        }

        #share-this .share-this ul li span {
            display: none
        }

        #share-this .slant-border {
            display: block
        }

        .banner.wavy+.sec-pad {
            padding-top: 0
        }

        .sec-pad {
            padding: 30px 0 0
        }

        .sec-pad.compare {
            padding-top: 40px 0 0
        }

        .sec-pad.sec-default.bg-karen {
            min-height: 400px
        }

        .sec-pad.sec-default.bg-karen .karen-wrap {
            left: 15%
        }

        .sec-pad .slant-border.slant-bot {
            position: absolute;
            bottom: 0;
            width: 100%
        }

        .site-progress-wrap {
            padding-left: 0;
            margin: 20px 0;
            overflow: visible
        }

        .site-progress-wrap .site-progress-list {
            margin: 0;
            padding: 0 80px
        }

        .site-progress-wrap .site-progress-list li {
            padding: 0
        }

        .slant-ghost {
            top: 0
        }

        #brand-story,
        #core-values {
            padding-top: 70px
        }

        #innovation {
            height: 60vh;
            min-height: 30vh
        }

        .about-cards .flex>li {
            width: calc(33.33% - 20px)
        }

        .sec-pad.sec-default {
            padding-top: 60px
        }

        .award-dots {
            position: relative;
            top: -30px;
            z-index: 9999
        }

        .ads-unit-type:after {
            content: '';
            display: block;
            float: none;
            clear: both
        }

        .ads-unit-type li {
            width: 50%;
            float: left
        }
    }

    .tform .input-wrap input[type=checkbox]:checked:before {
        display: inline-block;
        font-family: Glyphter;
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    @media (max-width:991px) {
        .hidden-tablet {
            display: none
        }

        .banner.wavy+.sec-pad {
            padding-top: 30px
        }

        .about-cards .flex li {
            width: calc(50% - 20px)
        }

        .master-plan-wrapper .flex li {
            width: 33.33%;
            padding: 0 15px
        }

        .master-plan-cards ul {
            display: block !important
        }

        .portrait .flex li {
            padding: 10px 5px
        }

        #brandValues .owl-stage {
            margin-left: 0
        }

        #brandValues li {
            width: calc(50% - 20px);
            margin: 0 10px 20px
        }

        .building-details {
            text-align: center;
            padding-top: 20px
        }

        .building-details ul li {
            padding: 15px 0
        }

        .building-details ul li:last-of-type {
            border-bottom: none
        }

        .folio-map .flex li {
            width: calc(33.33% - 20px);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }

        .folio-map-filter {
            float: none;
            clear: both
        }

        .folio-map-filter .flex {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .folio-map-filter .flex li {
            padding-right: 10px
        }

        .folio-map-filter .flex li.mob-only {
            display: block
        }

        .folio-map-filter .flex li.desktop-only {
            display: none
        }

        .download-details {
            padding: 10px 0
        }

        .download-details .flex li {
            width: 17.5%
        }

        .download-details .flex li:first-of-type {
            width: 37%
        }

        .for-pages {
            min-height: 400px
        }

        .for-pages .coverimage-title {
            top: 60%
        }

        .banner .with-gutter {
            -webkit-transform: translate(-50%, -40%);
            -moz-transform: translate(-50%, -40%);
            -ms-transform: translate(-50%, -40%);
            -o-transform: translate(-50%, -40%);
            transform: translate(-50%, -40%)
        }

        .corporate-governance h4 {
            padding-top: 20px
        }

        .innovation {
            padding-right: 0;
            top: 10%
        }

        .brand-story .coverimage-img {
            height: auto;
            top: 155px;
            left: 0;
            -webkit-transform: none;
            -moz-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none
        }

        .brand-story .coverimage-img img {
            width: 100% !important;
            height: auto;
            margin-top: 0;
            margin-left: -37px;
            top: 59px;
            left: 0;
            -webkit-transform: none;
            -moz-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none
        }

        .sidebar-menu.inverted {
            background: #003299
        }
    }

    @media (max-width:991px) {
        .sec-head .sec-head-action {
            float: none;
            clear: both;
            margin-right: auto;
            margin-left: 0;
            margin-top: 15px
        }

        .sec-head .sec-head-action .fr {
            float: none;
            clear: both;
            margin-right: auto;
            margin-left: auto
        }

        .sec-head .sec-head-action label {
            margin-bottom: 15px
        }

        .sec-head .sec-head-action .btn,
        .sec-head .sec-head-action .custom-select {
            float: none
        }

        .sec-head .sec-head-action .custom-select {
            max-width: 320px
        }

        [class*=btn-wrapper] {
            text-align: center
        }

        .contact-form-wrap {
            padding-right: 0;
            margin-right: auto;
            margin-left: auto;
            max-width: 768px;
            text-align: left;
            margin-bottom: 0
        }

        .contact-form-wrap:after {
            display: none
        }

        .contact-form-wrap .sec-head h2 {
            font-size: 36px
        }

        .other-channels {
            text-align: center;
            padding-top: 30px
        }

        .other-channels:after {
            content: '';
            display: block;
            height: 1px;
            width: 100%;
            position: absolute;
            top: 1px;
            right: 0;
            background: #979797;
            opacity: .3
        }

        .other-channels .sec-head {
            margin-bottom: 0
        }

        .sm-content {
            padding-top: 60px
        }
    }

    @media (max-width:991px) {
        .sec-features ul {
            text-align: left
        }
    }

    @media (max-width:991px) {

        #simple-filter-dev li,
        #simple-filter-status li {
            width: 25%;
            float: left;
            margin-right: 0
        }

        .sm-loc-mobile {
            max-width: 220px;
            float: left;
            padding-left: 20px;
            margin-top: 20px;
            display: block;
            clear: left
        }

        .sm-loc-mobile p {
            color: #90b4ff;
            font-size: 13px;
            font-family: Molengo, "Trebuchet MS", sans-serif;
            margin-bottom: 20px
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
            font-family: Roboto, Helvetica, sans-serif;
            white-space: normal;
            padding: 0
        }

        .sm-loc-mobile ul li a label {
            color: #90b4ff
        }

        .top-menu {
            -webkit-box-shadow: 1px 2px 5px rgba(0, 0, 0, .16);
            box-shadow: 1px 2px 5px rgba(0, 0, 0, .16)
        }

        .top-menu .logo {
            margin-top: 10px;
            max-width: 140px
        }
    }

    @media (max-width:991px) {
        .banner-text {
            padding-right: 15px
        }

        .banner-text h1,
        .banner-text h2 {
            font-size: 42px;
            line-height: 52px
        }

        .banner-text h3 {
            font-size: 24px
        }

        .banner-left {
            padding-right: 40px
        }
    }

    @media (max-width:767px) {
        .sec-pad .appreciation .flex li {
            width: 100%
        }

        .announcement .sec-head {
            text-align: left
        }

        .announcement .sec-head p {
            text-align: left;
            width: 100%;
            margin: 0
        }

        #simple-filter-dev li,
        #simple-filter-status li {
            width: 100% !important;
            float: left
        }
    }

    @media (max-width:767px) {
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

        .property-left-card .property-img .property-status {
            right: 15px;
            left: auto
        }

        .sec-pad.sec-default {
            padding: 30px 0 0
        }

        .sec-pad.sec-default.bg-karen {
            min-height: 300px
        }

        .sec-pad.sec-default.bg-karen .ss-right {
            text-align: center;
            padding: 40px 0
        }

        .about-cards .flex li {
            width: calc(100% - 20px)
        }

        #vision {
            padding: 20px 0 100px
        }

        #vision .temp-float {
            bottom: -70px;
            height: auto;
            width: 100%;
            left: 0
        }

        #executives {
            padding-bottom: 0
        }

        #executives .corporate-governance {
            position: relative;
            margin: 0
        }

        #executives .corporate-governance .container {
            margin: 0 -35px
        }

        #executives .coverimage-img img {
            width: 100% !important
        }

        #executives .about-cards .flex li {
            margin-top: 0;
            width: calc(50% - 10px);
            margin-left: 5px;
            margin-right: 5px
        }

        #executives .about-cards .flex .content {
            padding: 0 10px 20px
        }

        #executives .about-cards .flex .content p {
            font-size: 13px
        }

        #executives .about-cards .flex .box-card h3 {
            font-size: 18px
        }

        .card-item h3,
        .card-item p {
            text-align: center;
            padding: 0 20px
        }

        .about-cards .flex li {
            margin: 20px 10px
        }

        .about-cards.carousel-full-width {
            margin: auto -20px
        }

        .about-cards.carousel-full-width .brand-values {
            margin: 0
        }

        .about-content-wrapper p {
            text-align: center
        }

        .about-content-wrapper .about-btn-wrapper {
            text-align: center
        }

        .brand-logos .flex {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .brand-logos .flex li {
            width: calc(33.33% - 20px);
            padding: 10px 0 22% 0
        }

        .master-plan-wrapper {
            margin-top: 0
        }

        .master-plan-wrapper .flex {
            display: block
        }

        .master-plan-wrapper .flex li {
            text-align: center;
            border-bottom: solid 1px #e0e0e0;
            border-right: none;
            padding: 0 0 15px;
            margin-bottom: 15px
        }

        .master-plan-wrapper .flex li:first-of-type,
        .master-plan-wrapper .flex li:last-of-type,
        .master-plan-wrapper .flex li:nth-of-type(2),
        .master-plan-wrapper .flex li:nth-of-type(3) {
            width: 100%
        }

        .master-plan-wrapper .flex h4 {
            font-size: 18px
        }

        .master-plan-wrapper .portrait .master-plan-img {
            border-radius: 6px
        }

        .master-plan-wrapper .portrait .master-plan-img img {
            width: 100%;
            float: left
        }

        .master-plan-details p {
            margin-bottom: 5px;
            text-align: center
        }

        .master-plan-cards {
            margin: 0 -20px
        }

        .master-plan-cards ul.flex {
            display: -webkit-box;
            display: block
        }

        .master-plan-cards ul.flex li {
            width: 100%;
            padding: 0;
            margin: 0
        }

        .master-plan-cards ul.flex li h3 {
            text-align: left;
            padding: 0
        }

        .portrait .master-plan-details {
            width: 100%;
            float: none;
            padding-left: 0
        }

        .portrait .master-plan-img-wrapper {
            width: 100%
        }

        .accordion-wrapper ul li {
            padding: 5px 0
        }

        .accordion-wrapper ul li:first-of-type {
            border-top: none
        }

        .accordion-wrapper ul li:last-of-type {
            border-bottom: none
        }

        .accor-title {
            float: none;
            text-align: center
        }

        .accor-title h4 {
            font-size: 18px
        }

        .accor-icon {
            top: -16px
        }

        .accor-content-wrapper .accor-content {
            margin: 0 0 20px
        }

        .accor-details-wrapper {
            width: 100%
        }

        .accor-details p {
            text-align: center
        }

        .accor-details p:first-of-type {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1;
            width: 100%;
            font-size: 12px;
            line-height: 1.33;
            font-weight: 400
        }

        .accor-details p:nth-of-type(2) {
            width: 100%;
            padding: 10px 0;
            font-size: 14px;
            font-weight: 700;
            color: #212121;
            opacity: 1
        }

        .units-details-header {
            display: none
        }

        .units-details-content .flex {
            position: relative;
            padding: 15px 10px 10px;
            margin-bottom: 5px
        }

        .units-details-content .flex li {
            width: 100%
        }

        .units-details-content .flex li:first-child {
            display: none
        }

        .units-details-content .flex li:nth-child(2) {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            display: block;
            width: 50%
        }

        .units-details-content .flex li:nth-child(3) {
            text-align: right;
            width: 50%;
            font-size: 18px
        }

        .units-details-content .flex li:nth-child(4) {
            text-align: left;
            width: 100%;
            margin-top: 12px
        }

        .units-details-content .flex li:nth-child(5) {
            float: none;
            clear: both;
            display: block;
            width: 100%;
            position: relative;
            text-align: right;
            right: 0;
            margin-top: -16px
        }

        .units-details-content .flex li:nth-child(5) a {
            margin-left: 0;
            float: none;
            display: inline-block
        }

        .units-details-content .text-warning {
            width: 100%
        }

        .units-wrapper .not-available {
            xdisplay: none
        }

        .sec-features {
            text-align: center
        }

        .sec-features ul {
            text-align: left
        }

        .building-sec-wrapper .portrait .property-img {
            padding-bottom: 175%
        }

        .building-sec-wrapper .building-details ul {
            padding: 0 15px 15px
        }

        .building-sec-wrapper .building-details ul li {
            padding: 0;
            width: 50% !important
        }

        .building-sec-wrapper .building-details ul li:before {
            display: none
        }

        #buildingCarousel {
            padding: 0 40px
        }

        #buildingCarousel .owl-item {
            padding: 0 15px
        }

        #buildingCarousel .owl-stage-outer {
            overflow: visible
        }

        .property-finder {
            padding-top: 20px
        }

        .property-finder .sec-head {
            margin-top: 25px;
            margin-bottom: 0
        }

        .property-finder .sec-head p {
            padding-bottom: 10px
        }

        .property-finder+.search-result {
            padding-top: 10px
        }

        .property-finder+.search-result .sec-head {
            position: relative
        }

        .property-finder+.search-result .sort {
            position: absolute;
            left: 5px
        }

        .property-finder+.search-result h3 {
            display: block;
            width: 100%;
            margin-top: 70px
        }

        .property-finder+.search-result .switchbox .switchmark {
            left: 0;
            height: 31px
        }

        .filter-option {
            display: none
        }

        .filter-ext {
            padding: 20px 0
        }

        .folio-map.property-list {
            margin: 0 -10px
        }

        .folio-map.property-list .flex:after {
            content: '';
            display: block;
            float: none;
            clear: both
        }

        .folio-map.property-list .flex li {
            margin: 10px 10px 20px;
            width: calc(50% - 20px);
            text-align: center;
            float: left;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            clear: none
        }
    }

    @media (max-width:767px) and (max-width:376px) {
        .folio-map.property-list .flex li {
            width: 100%;
            max-width: 250px
        }
    }

    @media (max-width:767px) {
        .folio-map.property-list .flex li:nth-child(odd) {
            clear: left
        }

        .folio-map .property-img {
            padding-bottom: 58%
        }

        .folio-map .property-img .property-status {
            bottom: -22px;
            right: 155px
        }

        .folio-map .property-item h3 {
            margin-top: 25px
        }

        .folio-map .property-item+.content {
            padding: 0 10px 20px
        }

        .folio-map .property-item+.content .price {
            font-size: 12px
        }

        .folio-map-filter-wrapper {
            border: none
        }

        .folio-map-filter {
            float: none;
            padding-bottom: 10px
        }

        .folio-map-filter .mob-only {
            display: inline-block
        }

        .folio-map-filter .desk-only {
            display: none
        }

        .folio-map-filter .flex {
            margin: 0 -5px
        }

        .folio-map-filter .flex li {
            padding: 5px;
            width: 50%
        }

        .folio-map-filter .flex li:nth-of-type(3) {
            display: none
        }

        .folio-map-filter .flex li a {
            padding: 0 30px 0 10px;
            display: block;
            text-align: left;
            border-radius: 8px;
            white-space: nowrap;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            position: relative;
            overflow: hidden
        }

        .advanced-filter {
            float: none;
            padding: 10px;
            text-align: center
        }

        .no-gutter {
            margin: 0 -40px
        }

        .download-wrapper>ul>li {
            border-bottom: solid 1px #ccc
        }

        .download-wrapper>ul>li:last-of-type {
            border: none
        }

        .download-details {
            padding: 0 0 30px;
            border: none
        }

        .download-details .flex {
            display: block;
            padding: 10px 0
        }

        .download-details .flex:first-of-type {
            display: none
        }

        .download-details .flex li {
            width: 70%;
            padding: 2px 0
        }

        .download-details .flex li:first-of-type {
            width: 65%
        }

        .download-details .flex li:nth-of-type(2) {
            display: none
        }

        .download-details .flex li:last-of-type {
            position: absolute;
            width: 20%;
            right: 65px;
            text-align: right;
            margin-top: -50px
        }

        .download-details-header {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding: 20px 0;
            border: none
        }

        .download-details-header .flex {
            display: none
        }

        .for-pages .coverimage-title {
            top: 30%;
            text-align: center
        }

        .banner .with-gutter {
            -webkit-transform: translate(-50%, -64%);
            -moz-transform: translate(-50%, -64%);
            -ms-transform: translate(-50%, -64%);
            -o-transform: translate(-50%, -64%);
            transform: translate(-50%, -64%)
        }

        .banner .with-gutter img {
            -webkit-transform: translate(-50%, 0);
            -moz-transform: translate(-50%, 0);
            -ms-transform: translate(-50%, 0);
            -o-transform: translate(-50%, 0);
            transform: translate(-50%, 0)
        }

        .banner.default+.sec-pad .container {
            margin-top: 0
        }

        .no-filter-banner {
            padding-right: 0;
            text-align: center
        }

        .banner-text-wrapper .col-sm-6:nth-of-type(2) .banner-header {
            border-top: solid 1px #ccc;
            margin: 20px -30px 0 -30px
        }

        .banner-text-wrapper .col-sm-6:nth-of-type(2) .banner-details {
            display: none
        }

        .innovation-content {
            text-align: center
        }

        .innovation-content .innovation-details {
            display: none
        }

        .innovation-content .innovation-details p:first-of-type {
            display: none
        }

        .innovation-content .col-sm-12:nth-of-type(2) .innovation-header {
            border-top: solid 1px #ccc;
            margin: 20px -30px 0 -30px;
            padding-top: 45px
        }

        .innovation-content .innovation-header {
            display: block
        }

        .innovation-content .about-cards .flex .box-card {
            width: 100%
        }

        .innovation {
            padding-top: 0
        }

        .corporate-governance {
            padding: 0;
            min-height: 155px;
            text-align: center
        }

        .corporate-governance h4 {
            padding-bottom: 35px
        }

        .corporate-governance p {
            position: absolute;
            bottom: -445px;
            text-align: center;
            right: 0;
            padding: 0 30px
        }

        .corporate-governance .col-sm-7 {
            margin: 0 -30px
        }

        .corporate-governance picture {
            display: block;
            margin-top: -160px
        }

        #brand-story {
            padding: 0
        }

        #brand-story .coverimage-img {
            display: none
        }

        #brand-story .coverimage-title {
            margin-bottom: 30px
        }

        .awards-wrapper .owl-carousel .owl-item.active.center li {
            margin: 0 -18px !important;
            width: 120% !important;
            opacity: 1
        }

        .awards-wrapper .owl-carousel .owl-item.active.center .card-img {
            padding-bottom: 75% !important
        }

        .awards-wrapper .owl-carousel .owl-item.active.center .card-img img:nth-of-type(2) {
            width: 35%
        }

        .awards-wrapper .owl-carousel .owl-item li,
        .awards-wrapper .owl-carousel .owl-item.active li,
        .awards-wrapper .owl-carousel .owl-item.active.center+.active+.active li,
        .awards-wrapper .owl-carousel .owl-item.cloned li,
        .awards-wrapper .owl-carousel .owl-item.cloned.active li {
            margin: 0 90px;
            width: 84% !important;
            opacity: .5
        }

        .awards-wrapper .owl-carousel .owl-item .card-img,
        .awards-wrapper .owl-carousel .owl-item.active .card-img,
        .awards-wrapper .owl-carousel .owl-item.active.center+.active+.active .card-img,
        .awards-wrapper .owl-carousel .owl-item.cloned .card-img,
        .awards-wrapper .owl-carousel .owl-item.cloned.active .card-img {
            padding-bottom: 135% !important
        }

        .awards-wrapper .owl-carousel .owl-item.active+.active li {
            width: 84% !important;
            margin: 0 -61px !important;
            opacity: .5
        }

        .awards-wrapper button.owl-next,
        .awards-wrapper button.owl-prev {
            top: 42%
        }

        .awards-wrapper button.owl-next {
            right: -15px
        }

        .awards-wrapper button.owl-next span {
            color: #fff
        }

        .awards-wrapper button.owl-prev {
            left: -15px
        }

        .sec-features {
            max-width: 100%
        }

        .accordion-wrapper {
            padding-top: 0;
            padding-bottom: 20px
        }

        .accordion-wrapper ul li {
            padding-top: 10px
        }

        .master-plan.owl-carousel .owl-stage-outer {
            overflow: visible
        }

        .bottom-info {
            position: absolute;
            right: 0;
            width: 100% !important
        }

        .master-plan-img {
            margin-top: 0
        }

        .ads-types:after {
            content: '';
            display: block;
            float: none;
            clear: both
        }

        .ads-types li {
            width: 50%;
            float: left;
            margin-right: 0
        }

        .sm-content {
            padding-top: 20px
        }

        .sm-content .container {
            padding: 0 10px
        }

        .timeline-select {
            display: block
        }

        .timeline-carousel,
        .timeline-year {
            display: none !important
        }

        .show-map,
        .sort-wrap {
            display: none !important
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
            border-top: 1px solid rgba(255, 255, 255, .2)
        }

        .footer-address {
            text-align: center
        }

        .footer-link {
            text-align: center;
            margin: 30px 0;
            padding: 10px 0;
            border-top: 1px solid rgba(255, 255, 255, .2);
            border-bottom: 1px solid rgba(255, 255, 255, .2)
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
            color: #fff
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

    @media (max-width:767px) {
        .sec-head h3 {
            width: 100%
        }

        .read .sec-head {
            margin-top: 30px
        }

        .read .sec-head h1 {
            font-size: 36px;
            line-height: 1.2;
            text-align: left;
            padding-top: 25px
        }

        .read p {
            text-align: left
        }

        .read .img-type-1 sub,
        .read .img-type-2 sub {
            text-align: left
        }

        .read .img-type-2 {
            margin-left: 0;
            margin-right: 0;
            width: 100%;
            float: left
        }
    }

    @media (max-width:767px) {
        .property-list .flex {
            xdisplay: block;
            margin-left: 0;
            margin-right: 0
        }

        .property-list .flex li {
            width: 100%;
            float: none;
            clear: both;
            margin: 0
        }

        .property-list .flex.owl-carousel {
            display: block;
            padding: 0 50px
        }

        .property-list .property-list-carousel .owl-stage-outer {
            overflow: visible
        }

        .property-list .property-list-carousel .owl-item {
            text-align: center
        }

        .property-list .property-list-carousel .owl-item .box-type {
            text-align: center;
            float: none;
            display: inline-block
        }

        .property-list .property-list-carousel .owl-item h3,
        .property-list .property-list-carousel .owl-item p {
            opacity: 0;
            -webkit-transition: all .4s;
            -moz-transition: all .4s;
            -ms-transition: all .4s;
            -o-transition: all .4s;
            transition: all .4s
        }

        .property-list .property-list-carousel .owl-item.active h3,
        .property-list .property-list-carousel .owl-item.active p {
            opacity: 1
        }

        .property-img .property-status {
            right: auto;
            left: 50%;
            margin-left: -20px
        }

        .property-list {
            margin: 0
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
            background-color: #fff;
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
            font-family: Molengo, "Trebuchet MS", sans-serif;
            font-weight: 700;
            text-align: center;
            color: #fff
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
            text-align: left;
            margin-bottom: 8px !important
        }

        .sm-loc-mobile ul li a {
            text-align: left !important;
            font-size: 13px !important;
            font-family: Roboto, Helvetica, sans-serif;
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
            -webkit-box-shadow: 2px 5px 5px rgba(0, 0, 0, .16);
            box-shadow: 2px 5px 5px rgba(0, 0, 0, .16)
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
            padding-right: 15px
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
        .promo-seal {
            width: 100%;
            right: 0;
            padding: 10px 15px;
            border-radius: 0;
            height: auto;
            top: 66px
        }

        .promo-seal h3 {
            display: block;
            position: relative;
            left: 0;
            font-size: 20px
        }

        .promo-seal p:first-of-type {
            display: none
        }

        .promo-seal p:last-of-type {
            display: block;
            position: relative;
            left: 0;
            top: 0;
            margin-bottom: 0
        }

        #location .container {
            margin: 0;
            padding: 0
        }

        #location .top-info {
            position: relative;
            padding: 10px 20px 10px;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            text-align: center;
            top: 0;
            margin: 0 auto;
            width: 100%
        }

        #location.wavy-top:after {
            top: auto
        }
    }

    @media (max-width:767px) {
        #masterplan {
            background: #fff
        }

        .site-progress-list {
            margin-top: 60px
        }

        .site-progress-list ul {
            margin: 0 -10px;
            -webkit-box-pack: left;
            -ms-flex-pack: left;
            justify-content: left
        }

        .site-progress-list ul li {
            width: calc(50% - 20px)
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
            padding: 0 40px
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
            padding: 0 10px 20px
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
    }

    @media (max-width:640px) {
        .contact-form-wrap .sec-head h2 {
            font-size: 28px
        }

        .other-channels {
            text-align: center
        }
    }

    @media (max-width:480px) {
        .container {
            padding: 0 20px
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
            padding: 0 60px;
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

    @media (max-width:640px) {
        #timeline-main .tl-item {
            padding: 0 20px
        }

        #timeline-mobile {
            display: block
        }

        #timeline-mobile .tl-head {
            position: relative;
            left: 0
        }

        #timeline-mobile .tl-head * {
            max-width: 100%;
            text-align: center;
            margin-left: 0;
            margin-right: 0
        }

        #timeline-mobile .tl-head p {
            margin: 0
        }

        #timeline-mobile .tl-item:before {
            display: none
        }

        #timeline-mobile .timeline-content {
            padding-top: 30px
        }
    }

    @media (max-width:480px) {
        .featured-article .article-info {
            padding: 8px 15px;
            bottom: 0;
            position: relative
        }

        .featured-article .article-title {
            font-size: 20px
        }

        .no-image .article-title {
            font-size: 16px
        }

        .article-item.sec-pad {
            position: relative;
            height: 360px;
            background-color: #edf4fe
        }

        .article-item.sec-pad .row:first-child {
            position: absolute;
            top: 20px;
            width: 100%
        }

        .article-item.sec-pad .row:last-child {
            position: absolute;
            bottom: 20px;
            width: 100%
        }

        .article-item.sec-pad.hdlines .article-img {
            padding-bottom: 66%
        }

        .article-item.sec-pad.hdlines .article-img img {
            height: auto
        }

        .article-item.sec-pad .article-info {
            text-align: center;
            position: static;
            top: auto;
            left: auto;
            padding: 0
        }

        .site-progress-list {
            margin-top: 60px
        }

        .site-progress-list ul {
            margin: 0 0
        }

        .site-progress-list ul li {
            width: calc(100%)
        }

        #site-progress .right-side-dim:before {
            display: none
        }
    }

    @media (max-width:480px) {
        .careers .box-card {
            min-height: 240px
        }

        .careers .box-card .content h3 {
            line-height: 24px;
            margin-bottom: 10px
        }

        .careers .grid-item {
            width: 100%
        }
    }

    @media (max-width:480px) {
        .compare-page .compare-homes .compare-list .compare-container {
            padding: 0 20px
        }

        .compare-page .compare-homes .border-head {
            position: relative;
            right: 10px;
            text-align: right;
            border: 0
        }
    }

    @media (max-width:480px) {
        .contact-us .contact-form-wrap {
            padding-right: 0
        }

        .contact-us .contact-form-wrap .sec-head {
            margin-bottom: 10px
        }

        .contact-us .contact-form-wrap .input-wrap {
            overflow: visible
        }

        .contact-us .social-contact li {
            padding: 10px 0
        }

        .contact-us .social-contact li [class^=icon-] {
            float: none;
            margin-right: 5px
        }
    }

    @media (max-width:640px) {
        #location.property-loc {
            overflow: visible
        }

        .property-loc {
            position: relative;
            overflow: hidden
        }

        .property-loc.map-active-right {
            width: 100%;
            z-index: 9002;
            margin-top: -70px;
            height: calc(100% + 70px)
        }

        .property-loc.map-active-right .slant-border {
            display: none
        }

        .property-loc.map-active-right .sec-head {
            background-color: #fff;
            position: relative;
            z-index: 9002;
            text-align: left;
            display: block;
            height: 50px;
            padding: 10px 20px
        }

        .property-loc.map-active-right .advanced-filter {
            float: left;
            padding: 5px 0
        }
    }

    @media (max-width:480px) {
        .search-ask .main-guides ul li {
            width: auto
        }

        .search-ask .carousel-tp.flex li {
            margin-right: 8px;
            margin-bottom: 8px
        }

        .search-ask .carousel-tp.flex li .custom-checkbox a {
            display: block;
            white-space: nowrap;
            overflow: hidden;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            background-color: #1f6bd7;
            color: #fff;
            border-color: #1f6bd7;
            padding: 0 18px;
            text-align: center
        }

        .search-ask .carousel-tp.flex li .custom-checkbox a.active {
            background-color: #01a71c;
            border-color: #01a71c
        }

        .ask-download-list .guides {
            width: 100%;
            margin: 0 0 10px
        }

        .ask-download-list .guides a {
            display: block
        }
    }

    @media (max-width:480px) {
        #whistleblower-steps .steps {
            margin-top: 10px
        }

        #whistleblower-steps .steps ul li {
            padding: 10px 0;
            width: 10%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            height: 100%
        }

        #whistleblower-steps .steps ul li>* {
            visibility: hidden;
            overflow: hidden
        }

        #whistleblower-steps .steps ul li>* span {
            visibility: visible
        }

        #whistleblower-steps .steps ul li.current {
            width: 70%;
            visibility: visible
        }

        #whistleblower-steps .steps ul li.current>* {
            visibility: visible
        }

        #whistleblower-steps .steps ul li.current>* span {
            display: none
        }
    }

    @media (max-width:376px) {
        .property-list .flex.owl-carousel {
            padding-right: 30px;
            padding-left: 30px
        }
    }

    #related-property {
        padding-top: 0;
    }
</style>

<style>
    .banner-video-wrap {
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        z-index: 2;
        opacity: 0;
        transition: opacity .4s ease
    }

    .banner-video-wrap:before {
        content: '';
        display: block;
        float: none;
        width: 100%;
        height: 100%;
        position: absolute;
        background: rgba(0, 0, 0, .19)
    }

    .banner.banner-coming-soon .banner-logo {
        display: none;
        float: left
    }

    @media (max-width:991px) {
        .banner.banner-coming-soon .banner-logo {
            margin-top: 15px;
            margin-bottom: 15px
        }
    }

    .banner.banner-coming-soon h2 {
        line-height: 1
    }

    .banner.banner-coming-soon h2 span {
        display: block;
        font-size: 16px;
        font-weight: 700
    }

    .banner.banner-coming-soon .table-wrap {
        height: auto;
        padding-bottom: 90px;
        bottom: 0
    }

    @media (max-width:767px) {
        .banner.banner-coming-soon .table-wrap .banner-text p {
            font-size: 14px;
            margin-left: -15px;
            margin-right: -15px
        }
    }

    @media (max-width:767px) {
        .banner.banner-coming-soon .table-wrap .table-cell {
            padding: 0 !important
        }
    }

    .featured-article iframe {
        border: none;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 1
    }

    #location.property-loc .default-map {
        position: absolute;
        height: 100%;
        width: 100%;
        background: 0 0;
        overflow: hidden;
        z-index: 3;
        cursor: pointer;
        transition: all .4s ease
    }

    #location.property-loc .default-map:hover {
        background: rgba(0, 0, 0, .02)
    }

    #location.property-loc .default-map:before {
        content: 'Click here to activate google map';
        position: absolute;
        width: 100%;
        padding-top: 70px;
        padding-right: 15px;
        padding-left: 15px;
        top: 50%;
        -webkit-transform: translate(0, -50%);
        -moz-transform: translate(0, -50%);
        transform: translate(0, -50%);
        text-align: center;
        font-size: 24px;
        font-weight: 400;
        color: #fff;
        z-index: 3;
        opacity: 0;
        visibility: hidden;
        transition: all .2s ease
    }

    #location.property-loc .default-map:hover:before {
        opacity: 1;
        visibility: visible
    }

    #location.property-loc .default-map:after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
        text-align: center;
        font-size: 24px;
        color: #fff;
        background: 0 0;
        transition: background .2s ease
    }

    #location.property-loc .default-map:hover:after {
        background: rgba(0, 0, 0, .5)
    }

    @media (max-width:767px) {
        #location.property-loc .default-map:after {
            background: rgba(0, 0, 0, .5)
        }

        #location.property-loc .default-map:before {
            opacity: 1;
            visibility: visible;
            font-size: 18px;
            padding-left: 0
        }
    }

    #location.property-loc .default-map>img {
        position: absolute;
        width: auto;
        height: auto;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%) scale(1);
        -moz-transform: translate(-50%, -50%) scale(1);
        transform: translate(-50%, -50%) scale(1);
        backface-visibility: hidden
    }

    @media (max-width:767px) {
        #location.property-loc .default-map>img {
            -webkit-transform: translate(-50%, -50%) scale(.85);
            -moz-transform: translate(-50%, -50%) scale(.85);
            transform: translate(-50%, -50%) scale(.85)
        }
    }

    #location.property-loc #map-container.not-active {
        display: none
    }

    #location.property-loc.no-map .bottom-info {
        display: none !important
    }

    #location.property-loc.no-map {
        height: auto;
        min-height: 300px
    }

    #location.property-loc.no-map .default-map {
        display: none
    }

    @media (max-width:1024px) {
        #location {
            max-height: 767px
        }
    }

    @media (max-width:767px) {
        #location.property-loc.no-map {
            height: auto;
            min-height: 85px
        }

        #location {
            min-height: calc(100vh - 105px)
        }
    }

    .building-details ul li:first-child:nth-last-child(4),
    .building-details ul li:first-child:nth-last-child(4)~li {
        width: 33.3333%;
        min-width: initial
    }

    .property-list .flex .building-details ul li {
        width: 33.3333%;
        float: left
    }

    .property-list .building-details ul li:first-child:nth-last-child(2),
    .property-list .building-details ul li:first-child:nth-last-child(2)~li {
        width: 50%
    }

    .property-list .flex .building-details ul {
        display: block
    }

    .property-list .flex .building-details ul li:nth-child(n+4) {
        margin-top: 20px !important
    }

    @media (max-width:767px) {
        .property-list .flex .building-details ul li:nth-child(n+4) {
            margin-top: 0
        }

        .property-list .flex .building-details ul li {
            padding-bottom: 15px
        }
    }

    .property-list .flex .building-details ul li:nth-child(4):before,
    .property-list .flex .building-details ul li:nth-child(7):before {
        display: none
    }
</style>

<style>
    #media-news-wrapper .grid-item .article-item:after {
        display: none
    }

    #media-news-wrapper .article-item span {
        position: absolute;
        bottom: 10px;
        left: 10px;
        font-weight: 700;
        z-index: 101;
        color: #fff
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
        margin-top: -1px
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
        z-index: 4
    }

    #media-news-wrapper .grid-item {
        width: 33.33%;
        position: relative
    }

    .masonry-wrap #media-news-wrapper .grid-item:nth-child(3) {
        clear: none
    }

    #media-news-wrapper .grid-item--width2 .article-img img {
        opacity: 1
    }

    #media-news-wrapper .grid-item--width2 .article-img {
        padding-bottom: 69%
    }

    #media-news-wrapper .grid-item--width2 {
        width: 66.66%
    }

    #media-news-wrapper .grid-item--width2 .article-item {
        padding-bottom: 0 !important
    }

    #media-news-wrapper .grid-item .article-min .play-video {
        width: 50px;
        height: 50px;
        margin-left: -25px;
        margin-top: -25px
    }

    #media-news-wrapper .grid-item .article-min .play-video .icon-play-button {
        width: 25px;
        height: 25px;
        font-size: 25px
    }

    #media-news-wrapper .article-img img {
        width: auto;
        height: 100%
    }

    #media-news-wrapper .grid-item .article-min {
        padding-bottom: 66%
    }

    @media(max-width:640px) {
        #media-news-wrapper .grid-item--width2 {
            width: 100%;
            float: none;
            clear: both
        }

        #media-news-wrapper .play-video {
            width: 50px;
            height: 50px;
            margin-left: -25px;
            margin-top: -35px
        }

        #media-news-wrapper .play-video .icon-play-button {
            font-size: 20px;
            width: 20px;
            height: 20px;
            margin-left: 3px;
            margin-top: -3px
        }

        #media-news-wrapper .grid-item {
            width: 50%
        }
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

    #home-ready .row {
        display: flex;
        align-items: center
    }

    @media (max-width:767px) {
        #home-ready .row {
            display: block
        }

        #home-ready .col-sm-6 {
            margin-bottom: 20px
        }
    }

    .property-status .rfo {
        top: -2px;
        position: relative
    }

    .unit-info .property-status {
        width: 42px;
        height: 42px
    }
</style>

<style>
    .unit-info,
    .unit-info .box-card {
        overflow: visible
    }

    .banner {
        height: calc(100vh - 40px)
    }

    .box-card .flex {
        align-items: center
    }

    .unit-info .unit-info-status.homeready-status {
        padding-right: 0;
        display: block;
        text-align: left;
        height: auto;
        white-space: nowrap
    }

    .homeready-status .property-status {
        position: relative;
        margin: 0 auto 10px;
        display: block
    }

    .homeready-status.unit-info-status p {
        vertical-align: top;
        display: block;
        position: relative;
        top: 0;
        text-align: center;
        font-size: 14px;
        white-space: pre-wrap
    }

    .property-status-wrap {
        position: relative;
        display: inline-block;
        min-width: 80px;
        max-width: 48%;
        padding-left: 15px;
        padding-right: 15px;
        text-align: center;
        vertical-align: middle
    }

    .property-status-homeready .property-status,
    .property-status-homeready p {
        cursor: pointer
    }

    .property-status-homeready {
        pointer-events: auto
    }

    .property-status-wrap .tooltip-status .jq-close {
        transform: scale(.5);
        background: #fff;
        border-radius: 50%;
        top: 0;
        right: -5px
    }

    .property-status-wrap .tooltip-status {
        position: absolute;
        bottom: 100%;
        width: 300px;
        background: #fff;
        font-size: 12px;
        border-radius: 5px;
        text-align: left;
        bottom: calc(100% + 20px);
        padding: 5px 20px 5px 10px;
        right: calc(50% - 40px);
        pointer-events: auto;
        transform: scale(1);
        visibility: visible;
        transform-origin: bottom right
    }

    .property-status-wrap .tooltip-status span {
        display: block;
        white-space: pre-wrap
    }

    .property-status-wrap .tooltip-status.hide {
        transition: all .3s ease;
        visibility: hidden;
        transform: scale(0);
        transform-origin: center right
    }

    .property-status-wrap .tooltip-status:after {
        content: '';
        position: absolute;
        bottom: -7px;
        right: 33px;
        width: 0;
        height: 0;
        border-left: 9px solid transparent;
        border-right: 9px solid transparent;
        border-top: 10px solid #fff
    }

    .unit-info .flex li:last-of-type {
        padding: 6px 15px;
        width: 29%
    }

    .icon-home-ready {
        background: #1f80c4 url(/frontend/images/icon-homeready.png) no-repeat center center;
        background-size: 70%;
        border-radius: 50%;
        display: block;
        height: 100%;
        z-index: 999;
        position: relative
    }

    @media (max-width:767px) {
        .unit-info .flex li:last-of-type {
            padding: 6px 10px;
            width: 50%
        }

        .property-status-wrap {
            padding-left: 5px;
            padding-right: 5px
        }

        .homeready-status.unit-info-status p {
            font-size: 12px
        }
    }

    @media (max-width:374px) {
        .property-status-wrap .tooltip-status {
            width: 280px;
            bottom: calc(100% + 20px);
            font-size: 11px
        }
    }
</style>
