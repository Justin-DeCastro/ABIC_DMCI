<html>
<title>DMCI</title>
<meta prop <link rel="preload" href="{{ asset('css/icon.min.css') }}" as="style">
<link rel="preload" href="{{ asset('css/plugins.min.css') }}"as="style">

<style type="text/css">
    @font-face {
        font-family: Molengo;
        font-style: normal;
        font-display: swap;
        font-weight: 400;
        src: local('Molengo'), local('Molengo-Regular'), url(https://fonts.gstatic.com/s/molengo/v9/I_uuMpWeuBzZNBtQXbNakwKso5c.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Roboto;
        font-style: normal;
        font-display: swap;
        font-weight: 300;
        src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fBBc4AMP6lQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Roboto;
        font-style: normal;
        font-display: swap;
        font-weight: 400;
        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
        font-family: Roboto;
        font-style: normal;
        font-display: swap;
        font-weight: 700;
        src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfBBc4AMP6lQ.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }
</style>
<link rel="stylesheet" href="{{ asset('css/icon.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/home-btf.min.css') }}">
<style>
    a,
    abbr,
    acronym,
    address,
    applet,
    article,
    aside,
    audio,
    b,
    big,
    blockquote,
    body,
    canvas,
    caption,
    center,
    cite,
    code,
    dd,
    del,
    details,
    dfn,
    div,
    dl,
    dt,
    em,
    embed,
    fieldset,
    figcaption,
    figure,
    footer,
    form,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    header,
    hgroup,
    html,
    i,
    iframe,
    img,
    ins,
    kbd,
    label,
    legend,
    li,
    mark,
    menu,
    nav,
    object,
    ol,
    output,
    p,
    pre,
    q,
    ruby,
    s,
    samp,
    section,
    small,
    span,
    strike,
    strong,
    sub,
    summary,
    sup,
    table,
    tbody,
    td,
    tfoot,
    th,
    thead,
    time,
    tr,
    tt,
    u,
    ul,
    var,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block
    }

    body {
        line-height: 1
    }

    ol,
    ul {
        list-style: none
    }

    blockquote,
    q {
        quotes: none
    }

    blockquote:after,
    blockquote:before,
    q:after,
    q:before {
        content: '';
        content: none
    }

    table {
        border-collapse: collapse;
        border-spacing: 0
    }

    h1 {
        font-size: 48px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700
    }

    h2 {
        font-size: 36px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700
    }

    h3 {
        font-size: 28px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700
    }

    h4 {
        font-size: 22px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700
    }

    h5 {
        font-size: .83em;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700
    }

    h6 {
        font-size: .67em;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700
    }

    body,
    html {
        height: 100%;
        min-height: 100%;
        font-size: 100%;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%
    }

    a,
    button,
    input[type=submit] {
        -webkit-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        transition: all .4s cubic-bezier(.645, .045, .355, 1)
    }

    body.hidden {
        overflow: hidden
    }

    .visible {
        opacity: 1
    }

    .hiding {
        opacity: 0
    }

    #loadscreen {
        position: fixed;
        background: #fff;
        width: 100%;
        height: 100%;
        z-index: 999999;
        outline: 0;
        pointer-events: none;
        opacity: 1;
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -ms-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease
    }

    #loadscreen .loading-wrap {
        position: absolute;
        left: 50%;
        top: 50%;
        width: 100px;
        height: 100px;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    #loadscreen .loading-wrap img {
        width: 100%;
        height: auto;
        display: block
    }

    #main-container {
        height: 100%;
        min-height: 100%;
        position: relative;
        z-index: 9905
    }

    #main-container:after {
        content: '';
        display: block;
        top: 0;
        width: 100%;
        height: 100vh;
        position: fixed;
        background: rgba(255, 255, 255, .7);
        opacity: 1;
        visibility: hidden;
        z-index: -1
    }

    #main-container.overlay {
        height: 100vh
    }

    #main-container.overlay:after {
        z-index: 9905;
        visibility: visible
    }

    #main-container.overlay .popup-wrap {
        visibility: visible;
        -webkit-transition: all .4s .1s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: all .4s .1s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: all .4s .1s cubic-bezier(.645, .045, .355, 1);
        -o-transition: all .4s .1s cubic-bezier(.645, .045, .355, 1);
        transition: all .4s .1s cubic-bezier(.645, .045, .355, 1);
        -webkit-transform: scale3d(1, 1, 1);
        -moz-transform: scale3d(1, 1, 1);
        -ms-transform: scale3d(1, 1, 1);
        -o-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1)
    }

    .clearfix:after,
    .clearfix:before {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }

    body {
        font-size: 16px;
        line-height: 1.4;
        color: #212121;
        font-weight: 300;
        font-family: Roboto, Helvetica, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    header {
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 9003
    }

    .container {
        max-width: 1260px;
        margin-left: 250px;
        margin-right: 150px;
        padding: 0 30px
    }

    .wd-rng .container {
        margin-right: 200px
    }

    .text-center {
        text-align: center;
        clear: both
    }

    .top-menu {
        padding: 30px 0 10px
    }

    .top-menu .logo {
        margin-top: 0;
        margin-left: 0;
        display: none
    }

    .top-menu .container {
        margin-right: 0
    }

    strong {
        font-weight: 700
    }

    a {
        color: #1f6bd7;
        text-decoration: none;
        outline: 0;
        cursor: pointer
    }

    .logo {
        width: 170px;
        margin-top: 33px;
        display: block;
        margin-left: 20px
    }

    .logo img {
        max-width: 100%;
        height: auto;
        display: block
    }

    .sidebar-menu {
        position: fixed;
        width: 220px;
        height: 100vh;
        z-index: 9006;
        top: auto;
        left: 0;
        background-color: #062668;
        background-image: url(/images/menu-img-bck.jpg);
        background-repeat: no-repeat;
        background-position: left center;
        background-size: cover;
        overflow: auto
    }

    @media (max-width:767px) {
        .sidebar-menu .logo {
            display: none
        }
    }

    .sidebar-menu.pos-a {
        position: absolute
    }

    .rightbar-nav {
        position: fixed;
        width: 180px;
        z-index: 1003;
        top: 0;
        right: 0;
        height: 100%;
        overflow: hidden;
        pointer-events: none
    }

    @media (max-width:1024px) {
        .rightbar-nav {
            pointer-events: auto
        }
    }

    .rightbar-nav h2 {
        display: none
    }

    .rightbar-nav .sec-active-text {
        display: none
    }

    .rightbar-nav ul {
        position: relative;
        top: 50%;
        -webkit-transform: translate(0, -50%);
        -moz-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
        -o-transform: translate(0, -50%);
        transform: translate(0, -50%);
        z-index: 103
    }

    .rightbar-nav ul li {
        padding: 10px 0;
        margin-right: 30px;
        display: block;
        text-align: right;
        border-right: 1px solid #818181;
        position: relative
    }

    .rightbar-nav ul li:first-of-type {
        padding-top: 0;
        margin-bottom: -7px
    }

    .rightbar-nav ul li:first-of-type a {
        top: -7px
    }

    .rightbar-nav ul li:last-of-type {
        padding-bottom: 0;
        margin-top: -7px
    }

    .rightbar-nav ul li:last-of-type a {
        bottom: -7px
    }

    .rightbar-nav ul li a {
        color: #414141;
        background-color: #fff;
        display: inline-block;
        padding: 2px 6px;
        font-size: 12px;
        line-height: 1.2;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700;
        margin-right: 10px;
        position: relative;
        pointer-events: auto
    }

    .rightbar-nav ul li a:after {
        content: '';
        position: absolute;
        right: -14px;
        top: 50%;
        margin-top: -4px;
        width: 8px;
        height: 8px;
        background-color: #818181;
        border-radius: 100%;
        -webkit-transform: scale3d(1, 1, 1);
        -moz-transform: scale3d(1, 1, 1);
        -ms-transform: scale3d(1, 1, 1);
        -o-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        -webkit-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -webkit-transform-origin: center center;
        -ms-transform-origin: center center;
        transform-origin: center center
    }

    .rightbar-nav ul li a:hover {
        color: #01a71c
    }

    .rightbar-nav ul li a:hover:after {
        -webkit-transform: scale3d(1.8, 1.8, 1.8);
        -moz-transform: scale3d(1.8, 1.8, 1.8);
        -ms-transform: scale3d(1.8, 1.8, 1.8);
        -o-transform: scale3d(1.8, 1.8, 1.8);
        transform: scale3d(1.8, 1.8, 1.8);
        background-color: #01a71c
    }

    .rightbar-nav ul li.active:before {
        background: #01a71c
    }

    .rightbar-nav ul li.active a {
        color: #fff;
        font-size: 14px;
        background-color: #01a71c
    }

    .rightbar-nav ul li.active a:after {
        -webkit-transform: scale3d(1.8, 1.8, 1.8);
        -moz-transform: scale3d(1.8, 1.8, 1.8);
        -ms-transform: scale3d(1.8, 1.8, 1.8);
        -o-transform: scale3d(1.8, 1.8, 1.8);
        transform: scale3d(1.8, 1.8, 1.8);
        background-color: #01a71c
    }

    .top-nav.gray ul li>span {
        color: #212121
    }

    .top-nav.gray ul li a {
        color: #212121
    }

    .top-nav.gray ul li a:before {
        color: #212121
    }

    .top-nav.gray ul li a:after {
        background: #212121
    }

    .top-nav.gray .search-icon.activated {
        border: 1px solid #ccc
    }

    @media (max-width:1024px) {
        .top-nav.gray .search-icon.activated {
            border: none
        }
    }

    .top-nav.gray .search-icon>label {
        color: #212121
    }

    @media (max-width:1024px) {
        .top-nav.gray .search-icon>label {
            color: #fff
        }
    }

    .top-nav ul {
        padding: 0
    }

    .top-nav ul li {
        display: inline-block;
        vertical-align: middle;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700;
        padding-right: 8px
    }

    .top-nav ul li:first-child {
        xpadding-right: 0
    }

    .top-nav ul li>span {
        opacity: .8;
        color: #fff
    }

    .top-nav ul li a {
        font-size: 14px;
        opacity: .8;
        color: #fff;
        padding-right: 20px;
        position: relative;
        padding-bottom: 5px
    }

    .top-nav ul li a.popup-settings {
        padding-right: 4px;
        padding-bottom: 0;
        position: relative;
        top: 0;
        font-size: 24px;
        padding: 10px;
        border-radius: 50%;
        background: rgba(0, 0, 0, .3);
        width: 51px;
        height: 51px;
        display: inline-block;
        line-height: 31px;
        text-align: center;
        vertical-align: top
    }

    .top-nav ul li a.popup-settings span {
        display: block;
        height: 24px;
        position: relative;
        overflow: hidden;
        top: 3px
    }

    .top-nav ul li a.popup-settings:after,
    .top-nav ul li a.popup-settings:before {
        display: none
    }

    .top-nav ul li a.popup-settings:hover {
        background: #1f6bd7
    }

    .top-nav ul li a:before {
        content: '\0049';
        font-size: 8px;
        color: #fff;
        position: absolute;
        top: 50%;
        margin-top: -4px;
        right: 4px
    }

    .top-nav ul li a:after {
        content: '';
        width: 100%;
        opacity: .3;
        background: #fff;
        height: 1px;
        position: absolute;
        bottom: 0;
        left: 0
    }

    .top-nav ul li:last-child {
        xmargin-left: 15px
    }

    .top-nav ul li:last-child span {
        cursor: pointer
    }

    .main-nav {
        padding: 38px 0 10px
    }

    @media (max-width:767px) {
        .main-nav {
            padding-top: 40px;
            margin-top: 66px
        }
    }

    .main-nav.gray ul>li.mn-btn a,
    .main-nav.inverted ul>li.mn-btn a {
        color: #fff
    }

    .main-nav.gray ul>li.mn-white a,
    .main-nav.inverted ul>li.mn-white a {
        color: #212121
    }

    .main-nav.gray ul>li a,
    .main-nav.inverted ul>li a {
        color: #212121
    }

    .main-nav ul:first-child {
        padding-bottom: 38px
    }

    .main-nav ul>li {
        display: block;
        margin-bottom: 6px
    }

    .main-nav ul>li.mn-green {
        background: #01a71c;
        padding-right: 10px;
        padding-bottom: 0;
        line-height: 51px;
        height: 51px;
        padding-top: 0
    }

    .main-nav ul>li.mn-green a {
        padding-top: 0;
        padding-bottom: 0
    }

    .main-nav ul>li.mn-btn {
        padding-right: 10px;
        padding-bottom: 0;
        line-height: 51px;
        padding-top: 0;
        height: auto;
        -webkit-box-shadow: 0 0 4px 0 rgba(0, 0, 0, .18);
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, .18);
        color: #fff
    }

    .main-nav ul>li.mn-btn a {
        text-transform: uppercase;
        line-height: 16px;
        padding: 18px 0 18px 50px
    }

    .main-nav ul>li.mn-btn a span {
        width: 40px;
        text-align: center
    }

    .main-nav ul>li.mn-blue {
        background: #003794
    }

    .main-nav ul>li.mn-blue a {
        padding: 10px 0 10px 50px
    }

    .main-nav ul>li.mn-blue a span.icon-leasing {
        top: 50%;
        margin-top: -10px
    }

    .main-nav ul>li.mn-white {
        background: #fff
    }

    .main-nav ul>li.mn-white a {
        color: #01a71c;
        font-weight: 700;
        padding: 10px 0 10px 50px
    }

    .main-nav ul>li.mn-white a span.icon-home {
        color: #212121
    }

    .main-nav ul>li.mn-white a span.icon-home.icon-community {
        top: 2px
    }

    .main-nav ul>li.mn-white a .icon-communitys {
        position: absolute;
        right: 0;
        top: 50%;
        margin-top: -10px
    }

    .main-nav ul>li a {
        color: #fff;
        display: block;
        font-size: 12px;
        font-weight: 700;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        text-transform: uppercase;
        white-space: nowrap;
        background: 0 0;
        padding-right: 20px;
        position: relative;
        padding: 10px 0 10px 50px
    }

    .main-nav ul>li a.pop-up-trigger {
        display: none
    }

    @media (max-width:991px) {
        .main-nav ul>li a.pop-up-trigger {
            display: block
        }
    }

    .main-nav ul>li a span.icon-home {
        position: absolute;
        color: #fff;
        right: 0;
        font-size: 18px
    }

    .main-nav ul>li.active a {
        background: rgba(255, 255, 255, .3)
    }

    .table-wrap {
        display: table;
        height: 100%;
        position: absolute;
        width: 100%;
        z-index: 3
    }

    .table-wrap .table-cell {
        display: table-cell;
        vertical-align: middle
    }

    @media (max-width:767px) {
        #overview .table-wrap .table-cell {
            padding: 170px 0 180px 0
        }
    }

    .sm-loc-mobile {
        display: none
    }

    .search-icon {
        width: 140px;
        height: 51px;
        position: relative;
        text-align: center;
        cursor: pointer;
        -webkit-transform-origin: right;
        -ms-transform-origin: right;
        transform-origin: right;
        float: left;
        padding-left: 90px;
        margin-left: 10px;
        border-radius: 50px;
        overflow: hidden;
        -webkit-transition: width .4s ease;
        -moz-transition: width .4s ease;
        -ms-transition: width .4s ease;
        -o-transition: width .4s ease;
        transition: width .4s ease
    }

    .search-icon>label {
        position: absolute;
        left: 0;
        top: 16px;
        color: #fff;
        font-size: 14px;
        opacity: .8;
        color: #fff;
        padding-bottom: 5px;
        white-space: nowrap;
        font-weight: 700;
        z-index: 101;
        visibility: visible;
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -ms-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease
    }

    .search-icon.disable {
        display: none
    }

    .search-icon.activated {
        width: 300px
    }

    .search-icon.activated>label {
        opacity: 0;
        visibility: hidden
    }

    .search-icon.activated form {
        width: 300px
    }

    @media (max-width:767px) {
        .search-icon.activated form {
            width: 270px
        }
    }

    .search-icon .icon-search {
        font-size: 22px;
        display: inline-block;
        line-height: 51px;
        width: 51px;
        border-radius: 50%;
        background: rgba(0, 0, 0, .3);
        border-radius: 50px;
        float: right;
        color: #fff
    }

    .search-icon .icon-search:before {
        position: relative;
        top: 2px;
        opacity: .8
    }

    .search-icon form {
        width: 0;
        position: absolute;
        right: 0;
        height: 100%;
        top: 0;
        background: #fff;
        overflow: hidden;
        border-radius: 50px;
        -webkit-transition: width .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: width .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: width .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: width .4s cubic-bezier(.645, .045, .355, 1);
        transition: width .4s cubic-bezier(.645, .045, .355, 1)
    }

    .search-icon form input[type=text] {
        height: 51px;
        border: none;
        padding-right: 50px;
        padding-left: 20px
    }

    .search-icon form button {
        cursor: pointer;
        width: 51px;
        height: 51px;
        position: absolute;
        right: -2px;
        top: 0;
        padding: 0;
        border-radius: 50%;
        border: none;
        background: #1f6bd7;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        color: #fff;
        outline: 0;
        -webkit-backface-visiblity: hidden;
        -moz-backface-visiblity: hidden;
        backface-visiblity: hidden
    }

    .hamburger-menu {
        width: 50px;
        height: 50px;
        float: left;
        background: #01a71c;
        border-radius: 50%;
        padding: 10px;
        margin-left: 15px;
        cursor: pointer;
        display: none;
        position: relative
    }

    @media (max-width:767px) {
        .hamburger-menu {
            margin-left: 0
        }
    }

    .hamburger-menu .bar {
        display: block;
        height: 3px;
        width: 25px;
        background: #fff;
        margin: 5px auto;
        border-radius: 5px;
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -ms-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease
    }

    .hamburger-menu.active {
        background: 0 0;
        left: 10px
    }

    @media (max-width:767px) {
        .hamburger-menu.active {
            left: 0
        }
    }

    .hamburger-menu.active .arrow-top {
        -webkit-transform: rotateZ(45deg) translateY(5px);
        -moz-transform: rotateZ(45deg) translateY(5px);
        -ms-transform: rotateZ(45deg) translateY(5px);
        -o-transform: rotateZ(45deg) translateY(5px);
        transform: rotateZ(45deg) translateY(5px);
        width: 15px
    }

    .hamburger-menu.active .arrow-middle {
        -webkit-transform: translateX(-12px);
        -moz-transform: translateX(-12px);
        -ms-transform: translateX(-12px);
        -o-transform: translateX(-12px);
        transform: translateX(-12px)
    }

    .hamburger-menu.active .arrow-bottom {
        -webkit-transform: rotateZ(-45deg) translateY(-5px);
        -moz-transform: rotateZ(-45deg) translateY(-5px);
        -ms-transform: rotateZ(-45deg) translateY(-5px);
        -o-transform: rotateZ(-45deg) translateY(-5px);
        transform: rotateZ(-45deg) translateY(-5px);
        width: 15px
    }

    .dm-modal {
        position: fixed;
        left: 50%;
        top: 50%;
        background: #fff;
        -webkit-box-shadow: 0 0 64px 0 #000;
        box-shadow: 0 0 64px 0 #000;
        border-radius: 8px;
        width: calc(100% - 300px);
        height: calc(100vh - 160px);
        min-height: 600px;
        -webkit-transition: all .4s cubic-bezier(.645, .345, .355, 1);
        -moz-transition: all .4s cubic-bezier(.645, .345, .355, 1);
        -ms-transition: all .4s cubic-bezier(.645, .345, .355, 1);
        -o-transition: all .4s cubic-bezier(.645, .345, .355, 1);
        transition: all .4s cubic-bezier(.645, .345, .355, 1);
        -webkit-transform: translate(0, -50%) scale3d(0, 0, 0);
        -moz-transform: translate(0, -50%) scale3d(0, 0, 0);
        -ms-transform: translate(0, -50%) scale3d(0, 0, 0);
        -o-transform: translate(0, -50%) scale3d(0, 0, 0);
        transform: translate(0, -50%) scale3d(0, 0, 0);
        -webkit-transform-origin: left center;
        -ms-transform-origin: left center;
        transform-origin: left center;
        overflow: auto;
        visibility: hidden;
        z-index: 9005
    }

    .dm-modal.activated {
        visibility: visible;
        -webkit-transform: translate(-50%, -50%) scale3d(1, 1, 1);
        -moz-transform: translate(-50%, -50%) scale3d(1, 1, 1);
        -ms-transform: translate(-50%, -50%) scale3d(1, 1, 1);
        -o-transform: translate(-50%, -50%) scale3d(1, 1, 1);
        transform: translate(-50%, -50%) scale3d(1, 1, 1)
    }

    .dm-modal h1 {
        font-size: 48px
    }

    .dm-modal h5 {
        font-size: 22px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        margin-bottom: 35px
    }

    .dm-modal h4,
    .dm-modal p {
        margin-bottom: 20px
    }

    .dm-modal .jq-close {
        right: 5px
    }

    .dm-modal .content {
        padding: 70px
    }

    .property-nav {
        position: fixed;
        left: 50%;
        top: 50%;
        background: #fff;
        -webkit-box-shadow: 0 0 64px 0 #000;
        box-shadow: 0 0 64px 0 #000;
        border-radius: 8px;
        width: calc(100% - 300px);
        height: calc(100vh - 160px);
        min-height: 600px;
        -webkit-transition: all .4s cubic-bezier(.645, .345, .355, 1);
        -moz-transition: all .4s cubic-bezier(.645, .345, .355, 1);
        -ms-transition: all .4s cubic-bezier(.645, .345, .355, 1);
        -o-transition: all .4s cubic-bezier(.645, .345, .355, 1);
        transition: all .4s cubic-bezier(.645, .345, .355, 1);
        -webkit-transform: translate(-50%, -50%) scale3d(0, 0, 0);
        -moz-transform: translate(-50%, -50%) scale3d(0, 0, 0);
        -ms-transform: translate(-50%, -50%) scale3d(0, 0, 0);
        -o-transform: translate(-50%, -50%) scale3d(0, 0, 0);
        transform: translate(-50%, -50%) scale3d(0, 0, 0);
        -webkit-transform-origin: left center;
        -ms-transform-origin: left center;
        transform-origin: left center;
        overflow: hidden;
        visibility: hidden;
        z-index: 9010
    }

    @media (max-width:991px) {
        .property-nav {
            border-radius: 0;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            min-height: auto;
            -webkit-transform: translate(100%, 0) scale3d(1, 1, 1);
            -moz-transform: translate(100%, 0) scale3d(1, 1, 1);
            -ms-transform: translate(100%, 0) scale3d(1, 1, 1);
            -o-transform: translate(100%, 0) scale3d(1, 1, 1);
            transform: translate(100%, 0) scale3d(1, 1, 1);
            visibility: visible;
            -webkit-box-shadow: none;
            box-shadow: none;
            z-index: 1
        }
    }

    .property-nav.activated {
        visibility: visible;
        -webkit-transform: translate(-50%, -50%) scale3d(1, 1, 1);
        -moz-transform: translate(-50%, -50%) scale3d(1, 1, 1);
        -ms-transform: translate(-50%, -50%) scale3d(1, 1, 1);
        -o-transform: translate(-50%, -50%) scale3d(1, 1, 1);
        transform: translate(-50%, -50%) scale3d(1, 1, 1);
        z-index: 9010
    }

    @media (max-width:991px) {
        .property-nav.activated {
            -webkit-transform: translate(0, 0) scale3d(1, 1, 1);
            -moz-transform: translate(0, 0) scale3d(1, 1, 1);
            -ms-transform: translate(0, 0) scale3d(1, 1, 1);
            -o-transform: translate(0, 0) scale3d(1, 1, 1);
            transform: translate(0, 0) scale3d(1, 1, 1)
        }
    }

    .property-nav h3 {
        margin-bottom: 20px;
        margin-top: -10px
    }

    .property-nav h5 {
        font-size: 22px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700;
        margin-bottom: 10px
    }

    .property-nav h5+p {
        margin-bottom: 20px
    }

    .property-nav h5~ul {
        padding-bottom: 20px;
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd
    }

    @media (max-width:767px) {
        .property-nav h5~ul {
            padding-bottom: 10px;
            margin-bottom: 10px
        }
    }

    .property-nav h5~ul+p {
        margin-bottom: 20px
    }

    @media (max-width:767px) {
        .property-nav h5~ul+p {
            margin-bottom: 10px
        }
    }

    @media (max-width:767px) {
        .property-nav .btn {
            line-height: 30px;
            height: 30px
        }
    }

    .property-nav .jq-close {
        right: 5px
    }

    @media (max-width:767px) {
        .property-nav .jq-close {
            top: 10px;
            right: 0
        }
    }

    .property-left-card {
        width: 70%;
        float: left;
        padding: 50px 40px 40px 70px;
        position: relative;
        z-index: 3;
        height: calc(100vh - 160px);
        overflow: auto;
        min-height: 600px;
        background: #fff
    }

    @media (max-width:991px) {
        .property-left-card {
            padding: 30px;
            height: 100vh;
            min-height: auto;
            transform: translate3d(0, 0, 0);
            -webkit-transform: translate3d(0, 0, 0);
            -webkit-overflow-scrolling: touch
        }
    }

    @media (max-width:640px) {
        .property-left-card {
            padding: 30px 15px
        }
    }

    .property-left-card .property-detail {
        padding: 15px 65px 15px 15px;
        width: 100%
    }

    @media (max-width:991px) {
        .property-left-card h3 {
            margin-top: 0
        }
    }

    .property-left-card .property-status {
        right: 15px;
        left: auto;
        bottom: 10px
    }

    .property-right-loc {
        width: 30%;
        float: right;
        padding: 50px 0 40px 40px;
        position: relative;
        z-index: 3
    }

    @media (max-width:991px) {
        .property-right-loc {
            padding: 30px 0 30px 30px
        }
    }

    @media (max-width:767px) {
        .property-right-loc {
            width: 30%;
            padding-left: 5px;
            height: 100vh;
            overflow: auto;
            padding-right: 10px;
            transform: translate3d(0, 0, 0);
            -webkit-transform: translate3d(0, 0, 0);
            -webkit-overflow-scrolling: touch
        }
    }

    .property-content {
        position: relative;
        overflow: hidden;
        padding-right: 5%
    }

    @media (max-width:767px) {
        .property-content {
            padding-right: 0
        }
    }

    .property-content:before {
        content: '';
        height: 150%;
        position: absolute;
        top: 0;
        right: 0;
        width: 34%;
        background: #f7f7f7;
        z-index: 1;
        border-radius: 0 8px 8px 0
    }

    .property-content:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .property-right-loc ul li {
        display: inline-block;
        margin-right: 4px;
        margin-bottom: 9px
    }

    @media (max-width:991px) {
        .property-right-loc ul li {
            margin-right: 2px
        }
    }

    @media (max-width:767px) {
        .property-right-loc ul li {
            margin-bottom: 5px;
            display: block;
            text-align: left
        }
    }

    .property-right-loc ul li .btn {
        line-height: 30px;
        height: 30px;
        font-size: 11px;
        padding: 0 12px;
        color: #212121;
        border: 1px solid #bbb
    }

    @media (max-width:991px) {
        .property-right-loc ul li .btn {
            font-size: 10px
        }
    }

    @media (max-width:767px) {
        .property-right-loc ul li .btn {
            border-radius: 0;
            border: none;
            line-height: 1.4;
            height: auto;
            display: block;
            padding-left: 0;
            text-align: left;
            padding: 2px 4px;
            font-size: 12px
        }
    }

    .property-right-loc ul li .btn.active {
        -webkit-box-shadow: inset 0 1px 8px rgba(0, 0, 0, .16);
        box-shadow: inset 0 1px 8px rgba(0, 0, 0, .16);
        border: 1px solid #1f6bd7;
        background: #1f6bd7;
        color: #fff
    }

    @media (max-width:767px) {
        .property-right-loc h5 {
            font-size: 18px;
            margin-bottom: 20px
        }

        .property-right-loc h5+p {
            display: none
        }
    }

    @media (max-width:767px) {
        .property-right-loc p {
            font-size: 12px
        }
    }

    @media (max-width:767px) {
        .property-right-loc .btn span {
            display: none
        }
    }

    @keyframes lds-ripple {
        0% {
            top: 90px;
            left: 90px;
            width: 0;
            height: 0;
            opacity: 1
        }

        100% {
            top: 15px;
            left: 15px;
            width: 150px;
            height: 150px;
            opacity: 0
        }
    }

    @-webkit-keyframes lds-ripple {
        0% {
            top: 90px;
            left: 90px;
            width: 0;
            height: 0;
            opacity: 1
        }

        100% {
            top: 15px;
            left: 15px;
            width: 150px;
            height: 150px;
            opacity: 0
        }
    }

    .lds-ripple {
        position: relative
    }

    .lds-ripple div {
        box-sizing: content-box;
        position: absolute;
        border-width: 10px;
        border-style: solid;
        opacity: 1;
        border-radius: 50%;
        -webkit-animation: lds-ripple 2s cubic-bezier(0, .2, .8, 1) infinite;
        animation: lds-ripple 2s cubic-bezier(0, .2, .8, 1) infinite
    }

    .lds-ripple div:nth-child(1) {
        border-color: #1f6bd7
    }

    .lds-ripple div:nth-child(2) {
        border-color: #01a71c;
        -webkit-animation-delay: -1s;
        animation-delay: -1s
    }

    .lds-ripple {
        width: 100px !important;
        height: 100px !important;
        -webkit-transform: translate(-50px, -50px) scale(.5) translate(50px, 50px);
        transform: translate(-50px, -50px) scale(.5) translate(50px, 50px)
    }

    .custom-checkbox [type=checkbox]:checked+label:after,
    .custom-checkbox [type=checkbox]:not(:checked)+label:after,
    .custom-checkbox [type=radio]:checked+label:after,
    .custom-checkbox [type=radio]:not(:checked)+label:after {
        display: inline-block;
        font-family: Glyphter;
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .row {
        margin: 0 -15px
    }

    .row:after,
    .row:before {
        display: table;
        line-height: 0;
        content: "";
        clear: both
    }

    .pull-right {
        float: right !important
    }

    .col-lg-1,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-xs-1,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px
    }

    .col-xs-1,
    .col-xs-10,
    .col-xs-11,
    .col-xs-12,
    .col-xs-2,
    .col-xs-3,
    .col-xs-4,
    .col-xs-5,
    .col-xs-6,
    .col-xs-7,
    .col-xs-8,
    .col-xs-9 {
        float: left
    }

    .col-xs-12 {
        width: 100%
    }

    .col-xs-11 {
        width: 91.66666667%
    }

    .col-xs-10 {
        width: 83.33333333%
    }

    .col-xs-9 {
        width: 75%
    }

    .col-xs-8 {
        width: 66.66666667%
    }

    .col-xs-7 {
        width: 58.33333333%
    }

    .col-xs-6 {
        width: 50%
    }

    .col-xs-5 {
        width: 41.66666667%
    }

    .col-xs-4 {
        width: 33.33333333%
    }

    .col-xs-3 {
        width: 25%
    }

    .col-xs-2 {
        width: 16.66666667%
    }

    .col-xs-1 {
        width: 8.33333333%
    }

    .col-xs-pull-12 {
        right: 100%
    }

    .col-xs-pull-11 {
        right: 91.66666667%
    }

    .col-xs-pull-10 {
        right: 83.33333333%
    }

    .col-xs-pull-9 {
        right: 75%
    }

    .col-xs-pull-8 {
        right: 66.66666667%
    }

    .col-xs-pull-7 {
        right: 58.33333333%
    }

    .col-xs-pull-6 {
        right: 50%
    }

    .col-xs-pull-5 {
        right: 41.66666667%
    }

    .col-xs-pull-4 {
        right: 33.33333333%
    }

    .col-xs-pull-3 {
        right: 25%
    }

    .col-xs-pull-2 {
        right: 16.66666667%
    }

    .col-xs-pull-1 {
        right: 8.33333333%
    }

    .col-xs-pull-0 {
        right: auto
    }

    .col-xs-push-12 {
        left: 100%
    }

    .col-xs-push-11 {
        left: 91.66666667%
    }

    .col-xs-push-10 {
        left: 83.33333333%
    }

    .col-xs-push-9 {
        left: 75%
    }

    .col-xs-push-8 {
        left: 66.66666667%
    }

    .col-xs-push-7 {
        left: 58.33333333%
    }

    .col-xs-push-6 {
        left: 50%
    }

    .col-xs-push-5 {
        left: 41.66666667%
    }

    .col-xs-push-4 {
        left: 33.33333333%
    }

    .col-xs-push-3 {
        left: 25%
    }

    .col-xs-push-2 {
        left: 16.66666667%
    }

    .col-xs-push-1 {
        left: 8.33333333%
    }

    .col-xs-push-0 {
        left: auto
    }

    .col-xs-offset-12 {
        margin-left: 100%
    }

    .col-xs-offset-11 {
        margin-left: 91.66666667%
    }

    .col-xs-offset-10 {
        margin-left: 83.33333333%
    }

    .col-xs-offset-9 {
        margin-left: 75%
    }

    .col-xs-offset-8 {
        margin-left: 66.66666667%
    }

    .col-xs-offset-7 {
        margin-left: 58.33333333%
    }

    .col-xs-offset-6 {
        margin-left: 50%
    }

    .col-xs-offset-5 {
        margin-left: 41.66666667%
    }

    .col-xs-offset-4 {
        margin-left: 33.33333333%
    }

    .col-xs-offset-3 {
        margin-left: 25%
    }

    .col-xs-offset-2 {
        margin-left: 16.66666667%
    }

    .col-xs-offset-1 {
        margin-left: 8.33333333%
    }

    .col-xs-offset-0 {
        margin-left: 0
    }

    @media (min-width:768px) {

        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9 {
            float: left
        }

        .col-sm-12 {
            width: 100%
        }

        .col-sm-11 {
            width: 91.66666667%
        }

        .col-sm-10 {
            width: 83.33333333%
        }

        .col-sm-9 {
            width: 75%
        }

        .col-sm-8 {
            width: 66.66666667%
        }

        .col-sm-7 {
            width: 58.33333333%
        }

        .col-sm-6 {
            width: 50%
        }

        .col-sm-5 {
            width: 41.66666667%
        }

        .col-sm-4 {
            width: 33.33333333%
        }

        .col-sm-3 {
            width: 25%
        }

        .col-sm-2 {
            width: 16.66666667%
        }

        .col-sm-1 {
            width: 8.33333333%
        }

        .col-sm-pull-12 {
            right: 100%
        }

        .col-sm-pull-11 {
            right: 91.66666667%
        }

        .col-sm-pull-10 {
            right: 83.33333333%
        }

        .col-sm-pull-9 {
            right: 75%
        }

        .col-sm-pull-8 {
            right: 66.66666667%
        }

        .col-sm-pull-7 {
            right: 58.33333333%
        }

        .col-sm-pull-6 {
            right: 50%
        }

        .col-sm-pull-5 {
            right: 41.66666667%
        }

        .col-sm-pull-4 {
            right: 33.33333333%
        }

        .col-sm-pull-3 {
            right: 25%
        }

        .col-sm-pull-2 {
            right: 16.66666667%
        }

        .col-sm-pull-1 {
            right: 8.33333333%
        }

        .col-sm-pull-0 {
            right: auto
        }

        .col-sm-push-12 {
            left: 100%
        }

        .col-sm-push-11 {
            left: 91.66666667%
        }

        .col-sm-push-10 {
            left: 83.33333333%
        }

        .col-sm-push-9 {
            left: 75%
        }

        .col-sm-push-8 {
            left: 66.66666667%
        }

        .col-sm-push-7 {
            left: 58.33333333%
        }

        .col-sm-push-6 {
            left: 50%
        }

        .col-sm-push-5 {
            left: 41.66666667%
        }

        .col-sm-push-4 {
            left: 33.33333333%
        }

        .col-sm-push-3 {
            left: 25%
        }

        .col-sm-push-2 {
            left: 16.66666667%
        }

        .col-sm-push-1 {
            left: 8.33333333%
        }

        .col-sm-push-0 {
            left: auto
        }

        .col-sm-offset-12 {
            margin-left: 100%
        }

        .col-sm-offset-11 {
            margin-left: 91.66666667%
        }

        .col-sm-offset-10 {
            margin-left: 83.33333333%
        }

        .col-sm-offset-9 {
            margin-left: 75%
        }

        .col-sm-offset-8 {
            margin-left: 66.66666667%
        }

        .col-sm-offset-7 {
            margin-left: 58.33333333%
        }

        .col-sm-offset-6 {
            margin-left: 50%
        }

        .col-sm-offset-5 {
            margin-left: 41.66666667%
        }

        .col-sm-offset-4 {
            margin-left: 33.33333333%
        }

        .col-sm-offset-3 {
            margin-left: 25%
        }

        .col-sm-offset-2 {
            margin-left: 16.66666667%
        }

        .col-sm-offset-1 {
            margin-left: 8.33333333%
        }

        .col-sm-offset-0 {
            margin-left: 0
        }
    }

    @media (min-width:992px) {

        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9 {
            float: left
        }

        .col-md-12 {
            width: 100%
        }

        .col-md-11 {
            width: 91.66666667%
        }

        .col-md-10 {
            width: 83.33333333%
        }

        .col-md-9 {
            width: 75%
        }

        .col-md-8 {
            width: 66.66666667%
        }

        .col-md-7 {
            width: 58.33333333%
        }

        .col-md-6 {
            width: 50%
        }

        .col-md-5 {
            width: 41.66666667%
        }

        .col-md-4 {
            width: 33.33333333%
        }

        .col-md-3 {
            width: 25%
        }

        .col-md-2 {
            width: 16.66666667%
        }

        .col-md-1 {
            width: 8.33333333%
        }

        .col-md-pull-12 {
            right: 100%
        }

        .col-md-pull-11 {
            right: 91.66666667%
        }

        .col-md-pull-10 {
            right: 83.33333333%
        }

        .col-md-pull-9 {
            right: 75%
        }

        .col-md-pull-8 {
            right: 66.66666667%
        }

        .col-md-pull-7 {
            right: 58.33333333%
        }

        .col-md-pull-6 {
            right: 50%
        }

        .col-md-pull-5 {
            right: 41.66666667%
        }

        .col-md-pull-4 {
            right: 33.33333333%
        }

        .col-md-pull-3 {
            right: 25%
        }

        .col-md-pull-2 {
            right: 16.66666667%
        }

        .col-md-pull-1 {
            right: 8.33333333%
        }

        .col-md-pull-0 {
            right: auto
        }

        .col-md-push-12 {
            left: 100%
        }

        .col-md-push-11 {
            left: 91.66666667%
        }

        .col-md-push-10 {
            left: 83.33333333%
        }

        .col-md-push-9 {
            left: 75%
        }

        .col-md-push-8 {
            left: 66.66666667%
        }

        .col-md-push-7 {
            left: 58.33333333%
        }

        .col-md-push-6 {
            left: 50%
        }

        .col-md-push-5 {
            left: 41.66666667%
        }

        .col-md-push-4 {
            left: 33.33333333%
        }

        .col-md-push-3 {
            left: 25%
        }

        .col-md-push-2 {
            left: 16.66666667%
        }

        .col-md-push-1 {
            left: 8.33333333%
        }

        .col-md-push-0 {
            left: auto
        }

        .col-md-offset-12 {
            margin-left: 100%
        }

        .col-md-offset-11 {
            margin-left: 91.66666667%
        }

        .col-md-offset-10 {
            margin-left: 83.33333333%
        }

        .col-md-offset-9 {
            margin-left: 75%
        }

        .col-md-offset-8 {
            margin-left: 66.66666667%
        }

        .col-md-offset-7 {
            margin-left: 58.33333333%
        }

        .col-md-offset-6 {
            margin-left: 50%
        }

        .col-md-offset-5 {
            margin-left: 41.66666667%
        }

        .col-md-offset-4 {
            margin-left: 33.33333333%
        }

        .col-md-offset-3 {
            margin-left: 25%
        }

        .col-md-offset-2 {
            margin-left: 16.66666667%
        }

        .col-md-offset-1 {
            margin-left: 8.33333333%
        }

        .col-md-offset-0 {
            margin-left: 0
        }
    }

    @media (min-width:1200px) {

        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9 {
            float: left
        }

        .col-lg-12 {
            width: 100%
        }

        .col-lg-11 {
            width: 91.66666667%
        }

        .col-lg-10 {
            width: 83.33333333%
        }

        .col-lg-9 {
            width: 75%
        }

        .col-lg-8 {
            width: 66.66666667%
        }

        .col-lg-7 {
            width: 58.33333333%
        }

        .col-lg-6 {
            width: 50%
        }

        .col-lg-5 {
            width: 41.66666667%
        }

        .col-lg-4 {
            width: 33.33333333%
        }

        .col-lg-3 {
            width: 25%
        }

        .col-lg-2 {
            width: 16.66666667%
        }

        .col-lg-1 {
            width: 8.33333333%
        }

        .col-lg-pull-12 {
            right: 100%
        }

        .col-lg-pull-11 {
            right: 91.66666667%
        }

        .col-lg-pull-10 {
            right: 83.33333333%
        }

        .col-lg-pull-9 {
            right: 75%
        }

        .col-lg-pull-8 {
            right: 66.66666667%
        }

        .col-lg-pull-7 {
            right: 58.33333333%
        }

        .col-lg-pull-6 {
            right: 50%
        }

        .col-lg-pull-5 {
            right: 41.66666667%
        }

        .col-lg-pull-4 {
            right: 33.33333333%
        }

        .col-lg-pull-3 {
            right: 25%
        }

        .col-lg-pull-2 {
            right: 16.66666667%
        }

        .col-lg-pull-1 {
            right: 8.33333333%
        }

        .col-lg-pull-0 {
            right: auto
        }

        .col-lg-push-12 {
            left: 100%
        }

        .col-lg-push-11 {
            left: 91.66666667%
        }

        .col-lg-push-10 {
            left: 83.33333333%
        }

        .col-lg-push-9 {
            left: 75%
        }

        .col-lg-push-8 {
            left: 66.66666667%
        }

        .col-lg-push-7 {
            left: 58.33333333%
        }

        .col-lg-push-6 {
            left: 50%
        }

        .col-lg-push-5 {
            left: 41.66666667%
        }

        .col-lg-push-4 {
            left: 33.33333333%
        }

        .col-lg-push-3 {
            left: 25%
        }

        .col-lg-push-2 {
            left: 16.66666667%
        }

        .col-lg-push-1 {
            left: 8.33333333%
        }

        .col-lg-push-0 {
            left: auto
        }

        .col-lg-offset-12 {
            margin-left: 100%
        }

        .col-lg-offset-11 {
            margin-left: 91.66666667%
        }

        .col-lg-offset-10 {
            margin-left: 83.33333333%
        }

        .col-lg-offset-9 {
            margin-left: 75%
        }

        .col-lg-offset-8 {
            margin-left: 66.66666667%
        }

        .col-lg-offset-7 {
            margin-left: 58.33333333%
        }

        .col-lg-offset-6 {
            margin-left: 50%
        }

        .col-lg-offset-5 {
            margin-left: 41.66666667%
        }

        .col-lg-offset-4 {
            margin-left: 33.33333333%
        }

        .col-lg-offset-3 {
            margin-left: 25%
        }

        .col-lg-offset-2 {
            margin-left: 16.66666667%
        }

        .col-lg-offset-1 {
            margin-left: 8.33333333%
        }

        .col-lg-offset-0 {
            margin-left: 0
        }
    }

    @media (max-width:767px) {
        .hidden-xs {
            display: none !important
        }
    }

    @media (min-width:768px) and (max-width:991px) {
        .hidden-sm {
            display: none !important
        }
    }

    @media (min-width:992px) and (max-width:1199px) {
        .hidden-md {
            display: none !important
        }
    }

    @media (min-width:1200px) {
        .hidden-lg {
            display: none !important
        }
    }

    .list-2 {
        margin-bottom: 20px
    }

    .list-2:last-child {
        margin-bottom: 0
    }

    .list-2>li {
        list-style-type: disc;
        padding-bottom: 20px;
        margin-left: 20px
    }

    .list-2>li:last-child {
        padding-bottom: 0
    }

    .list-1 {
        margin-bottom: 20px
    }

    .list-1:last-child {
        margin-bottom: 0
    }

    .list-1>ul {
        margin-left: 20px
    }

    .list-1>li {
        border-bottom: 1px solid #ccc;
        padding-bottom: 20px;
        margin-bottom: 20px
    }

    .list-1>li:last-child {
        border: 0;
        margin: 0
    }

    .list-1 h3 {
        font-size: 16px;
        margin-bottom: 10px
    }

    .list-1 p {
        color: #212121
    }

    .list-1 span {
        margin-top: 22px
    }

    .read {
        font-size: 16px
    }

    .read article ol,
    .read article ul {
        line-height: 1.4;
        color: #414141
    }

    .read article ol li,
    .read article ul li {
        padding-bottom: 5px
    }

    .read article ol li:last-child,
    .read article ul li:last-child {
        padding-bottom: 10px
    }

    .read article>ol,
    .read article>ul {
        padding-bottom: 20px
    }

    .read article>ol>li:last-child,
    .read article>ul>li:last-child {
        padding-bottom: 0
    }

    .read article ul {
        list-style-type: disc;
        padding-left: 20px
    }

    .read article ol {
        list-style-type: decimal;
        padding-left: 20px
    }

    .read article span {
        font-family: Roboto, Helvetica, sans-serif !important;
        background: 0 0 !important;
        font-size: inherit !important
    }

    .read .sec-head h1 {
        font-size: 48px;
        line-height: 1.2;
        font-weight: 700
    }

    @media (max-width:480px) {
        .read .sec-head h1 {
            font-size: 28px
        }
    }

    .read h2,
    .read h3,
    .read h4,
    .read h5,
    .read h6 {
        margin-bottom: 20px;
        text-align: left
    }

    .read h5 {
        font-size: 16px;
        font-family: Roboto, Helvetica, sans-serif
    }

    .read p {
        margin-bottom: 20px
    }

    .read.blog .container {
        padding: 0 200px 0 30px
    }

    @media (max-width:991px) {
        .read.blog .container {
            padding: 0 50px
        }
    }

    @media (max-width:480px) {
        .read.blog .container {
            padding: 0 20px
        }
    }

    .read.blog p {
        margin-bottom: 20px
    }

    .read.blog p.intro {
        font-size: 26px;
        line-height: 1.4
    }

    .read.blog .img-type-1 {
        margin-right: -250px;
        margin-left: -121px
    }

    .read.blog .img-type-1 img {
        border-radius: 0
    }

    .read.blog .img-type-1 sub {
        margin-right: 250px;
        margin-left: 121px
    }

    .read [class*=img-type-] {
        margin-bottom: 30px;
        overflow: hidden
    }

    .read [class*=img-type-] img {
        border-radius: 6px 0 0 6px;
        width: 100%;
        float: left
    }

    .read [class*=img-type-] sub {
        padding-bottom: 10px;
        margin-bottom: 10px;
        font-size: 80%;
        position: relative;
        border-bottom: 1px solid #eee;
        display: block;
        top: 10px;
        text-align: right
    }

    .read .img-type-1 {
        margin-right: -180px
    }

    .read .img-type-1 sub {
        margin-right: 180px
    }

    .read .img-type-2 {
        xmargin-left: 20px;
        border-radius: 6px;
        margin-right: -150px;
        width: auto
    }

    .read .img-type-2 img {
        border-radius: 6px
    }

    .read .img-type-2.fl {
        margin-left: 0;
        margin-right: 20px;
        float: none;
        clear: both
    }

    .read .img-type-2.fl sub {
        text-align: left
    }

    .read .img-type-2.fr {
        margin-left: 20px
    }

    .read .img-type-2 {
        margin-right: -200px
    }

    .read .img-type-2.fl {
        margin-left: 0;
        margin-right: 0
    }

    .read .img-type-2.fl sub {
        text-align: left
    }

    .read .img-type-2.fr {
        margin-left: 0
    }

    .read table {
        width: 100% !important;
        border: 1px solid #ccc;
        font-size: 14px
    }

    .read table tr th {
        padding: 8px 10px;
        background: #000;
        border: 1px solid #ccc
    }

    .read table tr td {
        padding: 2px 10px;
        border: 1px solid #ccc
    }

    .read table tr:nth-child(odd) td {
        background: #f2f2f2
    }

    .read .page,
    .read li,
    .read p {
        font-family: Roboto, Helvetica, sans-serif !important;
        color: #212121 !important
    }

    #share-this {
        min-height: 0
    }

    #share-this .share-this {
        position: fixed;
        right: 30px;
        z-index: 8002;
        top: 180px;
        width: 50px
    }

    #share-this .share-this h4 {
        font-size: 16px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        margin-bottom: 15px;
        font-weight: 700;
        text-align: right
    }

    #share-this .share-this p {
        display: none
    }

    #share-this .share-this ul li {
        padding-bottom: 10px;
        text-align: right;
        display: block
    }

    #share-this .share-this ul li a {
        font-family: Roboto, Helvetica, sans-serif;
        font-size: 12px;
        font-weight: 700;
        color: #212121;
        text-transform: uppercase
    }

    #share-this .share-this ul li a span {
        display: none
    }

    #share-this .share-this ul li i {
        display: inline-block;
        margin-left: 10px;
        font-size: 24px;
        position: relative
    }

    @media (max-width:767px) {
        #share-this .share-this ul li i {
            font-size: 24px
        }
    }

    #share-this .share-this ul li i.icon-facebook {
        color: #3271e1
    }

    #share-this .share-this ul li i.icon-facebook+span {
        color: #3271e1
    }

    #share-this .share-this ul li i.icon-twitter {
        color: #3cc1fc
    }

    #share-this .share-this ul li i.icon-twitter+span {
        color: #3cc1fc
    }

    #share-this .share-this ul li i.icon-instagram {
        color: #fd00ff
    }

    #share-this .share-this ul li i.icon-instagram+span {
        color: #fd00ff
    }

    #share-this .share-this ul li i.icon-youtube {
        color: red
    }

    #share-this .share-this ul li i.icon-youtube+span {
        color: red
    }

    .read ol,
    .read ul {
        padding-left: 20px;
        margin-bottom: 20px;
        margin-top: 20px
    }

    @media (max-width:991px) {
        .share-this {
            position: relative;
            background: #fff;
            top: 0;
            width: 100%;
            text-align: center;
            padding: 30px 20px
        }

        .share-this p {
            display: block;
            font-size: 15px
        }

        .share-this ul {
            text-align: center;
            margin-top: 20px
        }

        .share-this ul li {
            display: inline-block;
            margin: 0 15px
        }

        .share-this ul li span {
            display: none
        }

        .share-this ul li i {
            font-size: 24px
        }
    }

    .search-mobile {
        position: fixed;
        width: 100%;
        height: 100vh;
        overflow: auto;
        min-height: 420px;
        background: rgba(0, 0, 0, .9);
        -webkit-transform: translate(100%, 0);
        -moz-transform: translate(100%, 0);
        -ms-transform: translate(100%, 0);
        -o-transform: translate(100%, 0);
        transform: translate(100%, 0);
        -webkit-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        transition: all .4s cubic-bezier(.645, .045, .355, 1);
        z-index: -1;
        -webkit-overflow-scrolling: touch
    }

    .search-mobile .sm-content {
        padding-top: 5vh
    }

    .search-mobile.activated {
        -webkit-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0);
        z-index: 9906;
        opacity: 1 !important
    }

    @media (max-width:991px) {

        .search-mobile .col-md-4.for-advance-search,
        .search-mobile .col-md-6.for-advance-search {
            display: block
        }
    }

    .search-mobile .fa-status-list .icon {
        font-size: 28px;
        float: left;
        margin-left: -4px;
        margin-right: 6px;
        margin-top: -1px
    }

    .search-mobile .fa-status-list .icon.icon-new {
        color: #e78600
    }

    .search-mobile .fa-status-list .icon.icon-RFO {
        color: #01a71c
    }

    .search-mobile .fa-status-list .icon.icon-coming-soon {
        color: #fff
    }

    .search-mobile .fa-status-list .icon.icon-under-construction {
        color: #fff
    }

    @media (max-width:767px) {
        .search-mobile .fa-status-list li {
            display: block
        }
    }

    .search-mobile .looking-type ul {
        padding-left: 35px
    }

    @media (max-width:991px) {
        .search-mobile .looking-type ul {
            padding-left: 15px
        }
    }

    .search-mobile .looking-type ul:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .search-mobile .looking-type ul li {
        width: auto !important;
        display: inline-block;
        float: none;
        clear: both
    }

    .search-mobile .input-wrap:not(.data-privacy) {
        margin-bottom: 20px
    }

    .search-mobile .input-wrap:not(.data-privacy)>label {
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-size: 15px;
        font-weight: 700;
        color: #fff
    }

    .search-mobile .input-wrap:not(.data-privacy) ul.ads-unit-type:after,
    .search-mobile .input-wrap:not(.data-privacy) ul.fa-status-list:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    .search-mobile .input-wrap:not(.data-privacy) ul.ads-unit-type li,
    .search-mobile .input-wrap:not(.data-privacy) ul.fa-status-list li {
        width: 50%;
        float: left;
        display: block
    }

    @media (max-width:767px) {
        .search-mobile .input-wrap:not(.data-privacy) ul.fa-status-list li {
            width: 100%;
            float: none;
            display: block
        }
    }

    .search-mobile .input-wrap:not(.data-privacy) ul li {
        width: 100%;
        float: none;
        margin-bottom: 6px
    }

    .search-mobile .input-wrap:not(.data-privacy) .pricing-label label {
        color: #fff
    }

    .search-mobile .input-wrap:not(.data-privacy) .price-selectbox label {
        color: #fff
    }

    .search-mobile .input-wrap:not(.data-privacy) .price-amount {
        font-size: 16px;
        font-family: Roboto, Helvetica, sans-serif;
        display: block;
        margin-bottom: 15px;
        margin-top: -5px
    }

    .search-mobile .input-wrap:not(.data-privacy) button.btn {
        min-width: 175px;
        margin-bottom: 20px;
        margin-top: 20px
    }

    .search-mobile .input-wrap:not(.data-privacy) button.btn.disabled,
    .search-mobile .input-wrap:not(.data-privacy) button.btn:disabled {
        opacity: .65;
        cursor: not-allowed;
        pointer-events: none
    }

    @media (max-width:767px) {

        .search-mobile .input-wrap:not(.data-privacy) button.btn.disabled,
        .search-mobile .input-wrap:not(.data-privacy) button.btn:disabled {
            pointer-events: auto
        }
    }

    .search-mobile .input-wrap:not(.data-privacy) .btn-link {
        font-size: 15px;
        font-weight: 700;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        color: #fff
    }

    .search-mobile .input-wrap:not(.data-privacy) .custom-checkbox label {
        color: #fff !important
    }

    .search-mobile h2 {
        font-size: 18px;
        margin-bottom: 15px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        line-height: 28px
    }

    .search-mobile .sec-head {
        padding-bottom: 25px;
        border-bottom: 1px solid #ccc
    }

    @media (max-width:991px) {
        .search-mobile .sec-head {
            padding-bottom: 20px
        }
    }

    .search-mobile .sec-head h2 {
        font-size: 36px;
        color: #fff;
        font-weight: 700;
        margin-bottom: 0
    }

    @media (max-width:640px) {
        .search-mobile .sec-head h2 {
            font-size: 28px
        }
    }

    @media (max-width:480px) {
        .search-mobile .sec-head h2 {
            font-size: 20px
        }
    }

    .search-mobile hr {
        border: none;
        border-bottom: 1px solid #ccc;
        margin-top: 0;
        margin-bottom: 25px
    }

    .search-mobile .btn-advance-search {
        display: none !important
    }

    .search-mobile .custom-select select {
        color: #fff
    }

    .search-mobile .jq-close:after,
    .search-mobile .jq-close:before {
        background: #fff
    }

    .search-mobile .custom-checkbox.radio-style label {
        text-transform: uppercase;
        padding: 0 15px !important;
        text-align: center;
        min-width: auto
    }

    .search-mobile .custom-checkbox.radio-style input[type=radio]:checked+label {
        background: #e78600
    }

    .search-mobile .custom-checkbox.radio-style input[type=radio]:checked+label:after,
    .search-mobile .custom-checkbox.radio-style input[type=radio]:not(:checked)+label:after {
        display: none
    }

    .search-mobile .custom-checkbox.radio-style input[type=radio]:checked+label:before,
    .search-mobile .custom-checkbox.radio-style input[type=radio]:not(:checked)+label:before {
        display: none
    }

    .bf-loc {
        background: #f6f6f6;
        padding: 14px 25px;
        position: relative
    }

    @media (max-width:991px) {
        .bf-loc {
            padding: 14px 15px
        }
    }

    .bf-loc:before {
        content: '';
        display: block;
        position: absolute;
        width: calc(100% - 110px);
        height: 1px;
        bottom: 9px;
        border-bottom: 1px solid #979797
    }

    .search-mobile .bf-loc:before {
        display: none
    }

    .bf-loc .input-wrap {
        padding-right: 50px;
        position: relative;
        padding-left: 22px
    }

    .bf-loc .input-wrap:before {
        content: 'in';
        font-size: 18px;
        display: block;
        color: #ccc;
        position: absolute;
        left: 0;
        top: 10px
    }

    @media (max-width:991px) {
        .bf-loc .input-wrap:before {
            top: 8px
        }
    }

    .bf-loc .input-wrap input[type=text] {
        border: none;
        background: 0 0;
        border-radius: 0;
        font-size: 28px;
        font-family: Roboto, Helvetica, sans-serif;
        color: #212121;
        padding-left: 0;
        overflow: hidden;
        position: relative;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis
    }

    .bf-loc .input-wrap input[type=text]::-webkit-input-placeholder {
        font-size: 18px;
        color: #ccc
    }

    .bf-loc .input-wrap input[type=text]:-moz-placeholder {
        font-size: 18px;
        color: #ccc
    }

    .bf-loc .input-wrap input[type=text]::-moz-placeholder {
        font-size: 18px;
        color: #ccc
    }

    .bf-loc .input-wrap input[type=text]:-ms-input-placeholder {
        font-size: 18px;
        color: #ccc
    }

    .bf-loc #data-holder {
        display: none
    }

    .bf-loc button {
        position: absolute;
        background: 0 0;
        border: none;
        padding: 0;
        right: 0;
        height: 55px;
        width: 50px;
        bottom: -8px;
        background: #003299;
        outline: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding: 5px;
        cursor: pointer;
        text-align: center;
        border-radius: 8px
    }

    .bf-loc button:hover {
        background: #1f6bd7
    }

    .bf-loc button .icon-home {
        font-size: 27px;
        display: inline-block;
        vertical-align: middle
    }

    .bf-loc button span {
        line-height: 9px;
        font-size: 8px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        text-transform: uppercase;
        font-weight: 700;
        display: inline-block;
        vertical-align: middle;
        position: relative;
        top: 2px;
        left: 0;
        color: #fff
    }

    .bf-loc button img {
        width: 25px;
        height: 25px;
        display: inline-block;
        vertical-align: top
    }

    .socials.customer-wrap-socials li {
        display: block !important;
        overflow: hidden
    }

    .socials.customer-wrap-socials li .icon-home-2 {
        font-size: 20px
    }

    .socials li {
        display: block;
        overflow: hidden;
        padding-bottom: 2px
    }

    .socials li span {
        float: left;
        margin-right: 10px
    }

    .socials li .icon-twitter:before {
        color: #00bfff
    }

    .socials li .icon-twitter+span {
        color: #00bfff
    }

    .socials li .icon-instagram {
        color: purple
    }

    .socials li .icon-instagram:before {
        color: purple
    }

    .socials li .icon-instagram+span {
        color: purple
    }

    .socials li .icon-youtube {
        color: red
    }

    .socials li .icon-youtube:before {
        color: red
    }

    .socials li .icon-youtube+span {
        color: red
    }

    .socials li .icon-google {
        color: #ff4500
    }

    .socials li .icon-google:before {
        color: #ff4500
    }

    .socials li .icon-google+span {
        color: #ff4500
    }

    .socials li .icon-linkedin {
        color: #87cefa
    }

    .socials li .icon-linkedin:before {
        color: #87cefa
    }

    .socials li .icon-linkedin+span {
        color: #87cefa
    }

    .search-mobile .input-wrap .fa-status-list li {
        width: 50%;
        float: left;
        margin-right: 0
    }

    @media (max-width:767px) {
        .search-mobile .input-wrap .fa-status-list li {
            width: 100%;
            float: none;
            clear: both
        }
    }

    .search-mobile .input-wrap h2 {
        color: #fff;
        font-weight: 700;
        text-transform: uppercase
    }

    .search-mobile .bf-loc {
        background: 0 0;
        padding: 0;
        padding-right: 60px;
        margin-right: 60px
    }

    @media (max-width:1024px) {
        .search-mobile .bf-loc {
            margin-right: 0
        }
    }

    .search-mobile .bf-loc button {
        height: 52px;
        padding: 6px 0;
        bottom: -6px;
        background: 0 0
    }

    .search-mobile .bf-loc button span {
        color: #fff
    }

    .customer-wrap-right h2 {
        color: #212121 !important;
        font-weight: 700 !important
    }

    .fancy-map iframe {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0
    }

    #cookie-preference {
        max-width: 420px;
        width: 100%;
        -webkit-box-shadow: 0 2px 22px 0 rgba(0, 0, 0, .08);
        box-shadow: 0 2px 22px 0 rgba(0, 0, 0, .08);
        border-radius: 6px;
        padding: 38px 45px
    }

    @media (max-width:767px) {
        #cookie-preference {
            padding: 23px 35px 10px;
            height: auto !important;
            margin: 5px auto;
            max-width: 380px
        }
    }

    .popup-main {
        text-align: center
    }

    .popup-main form {
        margin-top: 39px
    }

    @media (max-width:767px) {
        .popup-main form {
            margin-top: 19px
        }
    }

    .popup-main h2 {
        font-size: 20px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        color: #1f6bd7;
        margin-bottom: 15px;
        text-align: center;
        text-transform: uppercase
    }

    @media (max-width:767px) {
        .popup-main h2 {
            font-size: 18px
        }
    }

    @media (max-width:767px) {
        .popup-main h2 {
            font-size: 16px
        }
    }

    @media (max-width:767px) {
        .popup-main p {
            font-size: 12px;
            margin-bottom: 10px
        }
    }

    .popup-main .input-wrap {
        text-align: left;
        margin-bottom: 20px
    }

    @media (max-width:767px) {
        .popup-main .input-wrap {
            margin-bottom: 15px
        }
    }

    .popup-main .input-wrap .custom-select {
        border-radius: 8px
    }

    .popup-main .input-wrap .custom-select select {
        padding: 12px 15px
    }

    @media (max-width:767px) {
        .popup-main .input-wrap .custom-select select {
            padding: 10px 15px
        }
    }

    @media (max-width:480px) {
        .popup-main .input-wrap .custom-select select {
            padding: 7px 15px;
            font-size: 12px;
            min-height: 34px
        }
    }

    .popup-main .input-wrap .btn {
        font-size: 15px;
        letter-spacing: .5px;
        text-transform: uppercase
    }

    @media (max-width:767px) {
        .popup-main .input-wrap .btn {
            height: 40px;
            line-height: 40px;
            font-size: 12px;
            margin-top: 15px
        }
    }

    .popup-main .input-wrap>label {
        font-size: 12px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        text-transform: uppercase;
        color: #495366;
        margin-bottom: 2px
    }

    @media (max-width:480px) {
        .popup-main .input-wrap>label {
            font-size: 10px
        }
    }

    .popup-main .input-wrap .skip-wrap {
        font-size: 10px;
        text-align: center
    }

    @media (max-width:767px) {
        .popup-main .input-wrap .mobile-custom-dropdown {
            padding: 10px 15px
        }
    }

    @media (max-width:480px) {
        .popup-main .input-wrap .mobile-custom-dropdown {
            padding: 7px 15px
        }
    }

    .popup-main .btn-link {
        font-weight: 700;
        color: #ccc
    }

    .popup-main .btn {
        border-radius: 25px;
        margin-bottom: 10px
    }

    .popup-main .custom-checkbox label {
        padding-left: 0 !important;
        padding-right: 0 !important
    }

    @media (max-width:480px) {
        .popup-main .custom-checkbox label {
            font-size: 12px
        }
    }

    .popup-main .custom-checkbox label:after,
    .popup-main .custom-checkbox label:before {
        display: none !important
    }

    .mobile-custom-dropdown {
        position: relative;
        width: 100%;
        height: auto;
        padding: 12px 15px;
        font-size: 13px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        border: 1px solid #979797;
        border-radius: 8px
    }

    .mobile-custom-dropdown span.selected:after {
        content: '\0049';
        display: inline-block;
        font-family: Glyphter;
        font-style: normal;
        font-weight: 700;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 8px;
        line-height: 12px;
        position: absolute;
        right: 15px;
        top: 50%;
        margin-top: -5px
    }

    .custom-dropdown-menu {
        position: absolute;
        display: none;
        top: 0;
        left: -1px;
        width: calc(100% + 2px);
        z-index: 10;
        background: #f2f2f2;
        color: #212121;
        margin-top: -2px;
        border-radius: 8px;
        -webkit-box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12);
        box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12)
    }

    .custom-dropdown-menu li a {
        padding: 4px 15px;
        display: block;
        background: 0 0;
        color: #212121
    }

    .custom-dropdown-menu li a:hover {
        background: #1f6bd7;
        color: #fff
    }

    .custom-dropdown-menu li a span {
        width: 25px;
        display: inline-block;
        height: auto;
        vertical-align: middle;
        margin-right: 8px;
        position: relative;
        top: -1px
    }

    .custom-dropdown-menu li a span img {
        display: block;
        width: 100%;
        height: auto
    }

    .fancy-map-form {
        background: rgba(30, 30, 30, .9);
        z-index: 9999;
        position: relative;
        padding: 5px 15px 15px
    }

    @media (max-width:767px) {
        .fancy-map-form {
            padding: 5px 5px 10px
        }
    }

    .fancy-map-form label {
        font-size: 18px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 8px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        display: inline-block
    }

    @media (max-width:767px) {
        .fancy-map-form label {
            font-size: 16px
        }
    }

    .fancy-map-form .input-wrap input[type=text] {
        min-height: 42px;
        padding-right: 150px;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        position: relative;
        overflow: hidden
    }

    .fancy-map-form button {
        border: none;
        webkit-appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: 0
    }

    .fancy-map-form .fmf-clear {
        background: 0 0;
        width: auto;
        height: 41px;
        top: 0;
        right: 100px;
        padding: 0 18px 0;
        position: absolute;
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        line-height: 41px
    }

    @media (max-width:767px) {
        .fancy-map-form .fmf-clear {
            height: 42px;
            line-height: 42px;
            padding: 0 10px 0
        }
    }

    .fancy-map-form .fmf-clear:before {
        background: #333
    }

    .fancy-map-form .fmf-clear:after {
        background: #333
    }

    .fancy-map-form .fmf-end {
        height: 42px;
        width: 100px;
        background: #01a71c;
        color: #fff;
        font-size: 16px;
        position: absolute;
        top: 0;
        right: 0;
        border-radius: 0 4px 4px 0;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        text-transform: uppercase;
        font-size: 12px;
        font-weight: 700
    }

    @media (max-width:767px) {
        .fancy-map-form .fmf-end {
            width: 80px
        }
    }

    .fancy-map-form .fmf-end:hover {
        background: #01b11e
    }

    #map-pin {
        padding: 0 !important
    }

    @media (max-width:767px) {
        #map-pin {
            width: 100% !important
        }
    }

    #map-pin .notes {
        position: absolute;
        bottom: 0;
        color: #fff !important;
        font-style: italic;
        text-align: center;
        background: rgba(0, 0, 0, .9);
        padding: 4px 5px;
        width: 100%;
        font-size: 12px;
        margin-bottom: 0
    }

    #main-wrapper {
        position: relative;
        overflow: hidden
    }

    .btn {
        background: #003299;
        line-height: 50px;
        height: 50px;
        border: 1px solid #003299;
        padding: 0 25px;
        font-size: 12px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700;
        display: inline-block;
        color: #fff;
        text-align: center;
        outline: 0;
        -webkit-box-shadow: inset 0 0 5px transparent;
        box-shadow: inset 0 0 5px transparent;
        text-transform: uppercase
    }

    .btn.btn-round {
        border-radius: 25px
    }

    .btn.btn-ghost {
        border: 1px solid #979797;
        background: 0 0
    }

    .btn.btn-large {
        padding: 0 35px
    }

    .btn.btn-green {
        background: #08aa57;
        border: 1px solid #08aa57
    }

    .btn.btn-white {
        color: #fff
    }

    .btn.btn-grey {
        color: #818181
    }

    .btn.btn-dark {
        color: #212121
    }

    .btn.btn-light-blue {
        background: #1f6bd7;
        border: 1px solid #1f6bd7
    }

    .btn.btn-block {
        display: block;
        text-align: center
    }

    .btn.btn-selected {
        background: #1f6bd7;
        border: 1px solid #1f6bd7;
        color: #fff
    }

    .btn.btn-selected:after {
        color: #fff !important
    }

    .btn.btn-small {
        line-height: 40px;
        height: 40px;
        padding: 0 25px
    }

    .btn.btn-v-small {
        line-height: 30px;
        height: 30px;
        padding: 0 20px
    }

    .fl {
        float: left
    }

    .fr {
        float: right
    }

    .clr {
        display: block;
        float: none;
        clear: both
    }

    @-webkit-keyframes rotatee {
        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @-moz-keyframes rotatee {
        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @-ms-keyframes rotatee {
        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @-o-keyframes rotatee {
        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @keyframes rotatee {
        100% {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @-webkit-keyframes bouncee {

        0%,
        100% {
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0)
        }

        50% {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }
    }

    @-moz-keyframes bouncee {

        0%,
        100% {
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0)
        }

        50% {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }
    }

    @-ms-keyframes bouncee {

        0%,
        100% {
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0)
        }

        50% {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }
    }

    @-o-keyframes bouncee {

        0%,
        100% {
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0)
        }

        50% {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }
    }

    @keyframes bouncee {

        0%,
        100% {
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0)
        }

        50% {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1)
        }
    }

    .explorer .preloader {
        background: #fff url(/frontend/images/page_template/loading.gif) no-repeat center
    }

    .explorer .preloader .spinner {
        display: none
    }

    hr {
        border: none;
        border-top: 1px solid rgba(0, 0, 0, .2)
    }

    .sec-head {
        margin-bottom: 30px
    }

    .sec-head h2 {
        font-size: 36px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        color: #212121
    }

    .sec-head p {
        font-size: 14px;
        max-width: 330px;
        margin-top: 10px;
        float: left
    }

    @media (max-width:991px) {
        .sec-head p {
            float: none;
            clear: both;
            max-width: 630px
        }
    }

    .sec-head .sec-head-action {
        width: 100%;
        max-width: 330px
    }

    .sec-head .sec-head-action .btn {
        float: right;
        clear: right;
        background: #2461e6;
        text-transform: uppercase;
        font-weight: 700;
        border: 1px solid #2461e6
    }

    @media (max-width:640px) {
        .sec-head .sec-head-action .btn {
            float: none
        }
    }

    .sec-head .sec-head-action .custom-select {
        float: right;
        clear: right;
        width: auto;
        background: #1f6bd7;
        text-transform: uppercase;
        font-weight: 700;
        border: 1px solid #1f6bd7
    }

    @media (max-width:640px) {
        .sec-head .sec-head-action .custom-select {
            float: none;
            display: inline-block;
            width: 100%
        }
    }

    .sec-head .sec-head-action .custom-select label {
        color: #fff
    }

    .sec-head .sec-head-action .custom-select select {
        padding: 12px 38px 12px 25px;
        color: #fff;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        text-transform: uppercase
    }

    .sec-head .sec-head-action .custom-select select option {
        color: #000
    }

    .sec-head:after {
        content: '';
        display: block;
        float: none;
        clear: both
    }

    @media (max-width:991px) {
        .sec-head .fl {
            float: none;
            clear: both
        }
    }

    .sec-head h4 {
        margin-bottom: 15px
    }

    .m-t-20 {
        margin-top: 20px
    }

    .m-t-40 {
        margin-top: 40px
    }

    .m-t-80 {
        margin-top: 80px
    }

    .p-t-20 {
        padding-top: 20px
    }

    .p-t-40 {
        padding-top: 40px
    }

    .p-t-80 {
        padding-top: 80px
    }

    .sec-pad {
        padding: 0 0 0;
        min-height: 720px;
        position: relative;
        overflow: hidden;
        z-index: 99;
        background: #fff
    }

    .sec-pad .container {
        position: relative;
        z-index: 4
    }

    .sec-pad.overlay {
        position: relative;
        overflow: hidden
    }

    .sec-pad.overlay:after {
        content: '';
        visibility: visible;
        display: block;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, .4);
        z-index: 1099;
        position: absolute
    }

    .sec-pad.property-finder {
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -ms-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
        background: #fff
    }

    .sec-pad.property-finder.box-shadow {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10001;
        background: #fff;
        width: 100%;
        padding-top: 0;
        -webkit-box-shadow: 0 5px 8px 0 rgba(0, 0, 0, .16);
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, .16)
    }

    .sec-pad.property-finder.box-shadow .folio-map-filter-wrapper {
        background: #f7f7f7;
        padding-bottom: 20px
    }

    .sec-pad.property-finder.box-shadow .ff-dropdown-wrap {
        margin-top: 0
    }

    .sec-pad.sec-default {
        min-height: 200px;
        padding: 0 0 0;
        height: auto
    }

    .sec-pad.sec-default.overlapping-bot {
        padding-bottom: 0
    }

    .sec-pad.sec-reveal {
        overflow: visible;
        z-index: 101
    }

    .sec-pad.brk {
        min-height: auto
    }

    .sec-pad#contact {
        position: relative
    }

    .slant-border {
        padding-bottom: 10%;
        position: relative;
        overflow: hidden;
        height: 0;
        width: 100%
    }

    .slant-border.pos-a {
        position: absolute;
        width: 100%;
        bottom: 0
    }

    .slant-border:after {
        content: '';
        width: 0;
        height: 0;
        border-style: solid;
        border-width: calc(50vw/6) 50vw;
        border-color: transparent transparent #fff transparent;
        position: absolute;
        bottom: 0;
        left: 0
    }

    .slant-border.slant-top.pos-a {
        bottom: auto;
        top: 0
    }

    .slant-border.slant-top.slant-grey:after {
        border-style: solid;
        border-width: calc(50vw/6) 50vw;
        border-color: #f7f7f7 transparent transparent transparent;
        bottom: auto;
        top: 0;
        z-index: 2
    }

    .slant-border.slant-top.slant-blue:after {
        border-style: solid;
        border-width: calc(50vw/6) 50vw;
        border-color: #003299 transparent transparent transparent;
        bottom: auto;
        top: 0;
        z-index: 2
    }

    .slant-border.slant-top.slant-white:after {
        border-style: solid;
        border-width: calc(50vw/6) 50vw;
        border-color: #fff transparent transparent transparent;
        bottom: auto;
        top: 0;
        z-index: 2
    }

    .slant-border.slant-top.slant-left:after {
        border-width: calc(50vw/6) 75vw;
        left: auto;
        right: 0
    }

    .slant-border.slant-top.slant-right:after {
        border-width: calc(50vw/6) 75vw
    }

    .slant-border.slant-blue:after {
        border-style: solid;
        border-width: calc(50vw/6) 50vw;
        border-color: transparent transparent #003299 transparent
    }

    .slant-border.slant-blue.slant-ghost:after {
        border-color: #003299 #003299 transparent #003299;
        z-index: 2
    }

    .slant-border.slant-blue.slant-ghost.-reverse:after {
        border-color: #003299 #003299 transparent #003299
    }

    .slant-border.slant-grey:after {
        border-style: solid;
        border-width: calc(50vw/6) 50vw;
        border-color: transparent transparent #f7f7f7 transparent
    }

    .slant-border.slant-grey.slant-ghost:after {
        border-color: #f7f7f7 #f7f7f7 transparent #f7f7f7;
        z-index: 2
    }

    .slant-border.slant-grey.slant-ghost.-reverse:after {
        border-color: #f7f7f7 #f7f7f7 transparent #f7f7f7
    }

    .slant-border.slant-white:after {
        border-style: solid;
        border-width: calc(50vw/6) 50vw;
        border-color: transparent transparent #fff transparent
    }

    .slant-border.slant-white.slant-ghost:after {
        border-color: transparent transparent #fff transparent;
        z-index: 2
    }

    .slant-border.slant-right:after {
        border-width: calc(50vw/6) 75vw
    }

    .slant-border.slant-left:after {
        border-width: calc(50vw/6) 75vw;
        left: auto;
        right: 0
    }

    @media (max-width:640px) {
        .container~.slant-bot {
            position: absolute;
            bottom: 0
        }
    }

    .slant-wrap {
        position: absolute;
        width: 100%;
        z-index: 1
    }

    .slant-wrap+.container {
        position: relative;
        z-index: 5
    }

    .slant-wrap.slant-top {
        top: 0;
        bottom: auto
    }

    .slant-wrap.slant-reverse:before {
        -webkit-transform: skewY(5deg);
        -moz-transform: skewY(5deg);
        -ms-transform: skewY(5deg);
        -o-transform: skewY(5deg);
        transform: skewY(5deg)
    }

    .slant-wrap.slant-reverse:after {
        -webkit-transform: skewY(-5deg);
        -moz-transform: skewY(-5deg);
        -ms-transform: skewY(-5deg);
        -o-transform: skewY(-5deg);
        transform: skewY(-5deg)
    }

    .bg-blue {
        background: #003299;
        color: #fff
    }

    .bg-blue .sec-head h2 {
        color: #fff
    }

    .bg-white {
        background: #fff
    }

    .bg-grey {
        background: #f7f7f7
    }

    .bg-grey .input-wrap input[type=email],
    .bg-grey .input-wrap input[type=tel],
    .bg-grey .input-wrap input[type=text],
    .bg-grey .input-wrap textarea {
        background: 0 0
    }

    .flex {
        display: -webkit-flex;
        display: -webkit-box;
        display: -moz-flex;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 0;
        list-style-type: none
    }

    .flex .flex-item {
        display: -webkit-flex;
        display: -webkit-box;
        display: -moz-flex;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        margin: 0 5px;
        background: #fff
    }

    .input-wrap {
        position: relative
    }

    .input-wrap input[type=date],
    .input-wrap input[type=email],
    .input-wrap input[type=tel],
    .input-wrap input[type=text],
    .input-wrap input[type=time],
    .input-wrap textarea {
        width: 100%;
        padding: 0 15px;
        outline: 0;
        min-height: 40px;
        line-height: 1.2;
        display: block;
        border-radius: 4px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: 1px solid #ccc;
        font-size: 14px;
        resize: none;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis
    }

    .input-wrap textarea {
        min-height: 123px;
        line-height: 1.4;
        padding-top: 8px;
        padding-bottom: 8px
    }

    .input-wrap label {
        font-size: 12px;
        color: #495366;
        font-weight: 700;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        display: inline-block;
        margin-bottom: 8px;
        text-transform: uppercase
    }

    @media (max-width:767px) {
        .input-wrap label {
            margin-bottom: 4px
        }
    }

    .input-wrap .error-message {
        position: relative;
        opacity: 0;
        bottom: auto;
        -webkit-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0);
        font-size: 12px;
        margin-bottom: 0;
        display: none;
        color: red !important;
        font-family: Roboto, Helvetica, sans-serif;
        font-weight: 300;
        text-transform: initial
    }

    .input-wrap.error input[type=date],
    .input-wrap.error input[type=email],
    .input-wrap.error input[type=tel],
    .input-wrap.error input[type=text],
    .input-wrap.error input[type=time],
    .input-wrap.error textarea {
        border-bottom: 1px solid red
    }

    .input-wrap.error .error-message {
        opacity: 1;
        display: block
    }

    .input-wrap .required-field {
        display: inline-block;
        color: red
    }

    .custom-select {
        padding: 0;
        margin: 0;
        border: 1px solid #979797;
        min-width: 66px;
        border-radius: 24px;
        overflow: hidden;
        background-color: transparent;
        position: relative
    }

    .custom-select>label {
        display: inline-block;
        font-family: Glyphter;
        font-style: normal;
        font-weight: 700;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 8px;
        line-height: 12px;
        position: absolute;
        right: 15px;
        top: 50%;
        margin-top: -5px
    }

    .custom-select>label:before {
        content: '\0049'
    }

    .custom-select select {
        padding: 6px 30px 7px 10px;
        width: 100%;
        border: none;
        font-size: 13px;
        -webkit-box-shadow: none;
        box-shadow: none;
        background-color: transparent;
        background-image: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none
    }

    .custom-select select:focus {
        outline: 0
    }

    .bg-beige {
        background: -webkit-gradient(linear, left top, left bottom, from(#fdfdfc), to(#dad2c7));
        background: -webkit-linear-gradient(top, #fdfdfc, #dad2c7);
        background: -o-linear-gradient(top, #fdfdfc, #dad2c7);
        background: linear-gradient(to bottom, #fdfdfc, #dad2c7)
    }

    .compare-remove-item,
    .jq-close {
        width: 30px;
        height: 30px;
        display: block;
        position: absolute;
        top: 30px;
        right: 17px;
        z-index: 10
    }

    .compare-remove-item:before,
    .jq-close:before {
        content: '';
        width: 25px;
        height: 2px;
        display: block;
        border-radius: 2px;
        background: #212121;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transform-origin: top left;
        -ms-transform-origin: top left;
        transform-origin: top left
    }

    .compare-remove-item:after,
    .jq-close:after {
        content: '';
        width: 2px;
        height: 25px;
        display: block;
        border-radius: 2px;
        background: #212121;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transform-origin: bottom left;
        -ms-transform-origin: bottom left;
        transform-origin: bottom left;
        top: -9px;
        left: -1px;
        position: relative
    }

    .compare-remove-item:after,
    .compare-remove-item:before {
        background: #fff
    }

    .box-card {
        background: #fff;
        border-radius: 11px;
        -webkit-box-shadow: 0 0 19px 0 transparent;
        box-shadow: 0 0 19px 0 transparent;
        border: 1px solid #f2f2f2;
        width: 100%;
        text-align: center;
        position: relative;
        overflow: hidden;
        color: #212121;
        -webkit-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: all .4s cubic-bezier(.645, .045, .355, 1);
        transition: all .4s cubic-bezier(.645, .045, .355, 1);
        -webkit-transform: scale3d(.95, .95, .95);
        -moz-transform: scale3d(.95, .95, .95);
        -ms-transform: scale3d(.95, .95, .95);
        -o-transform: scale3d(.95, .95, .95);
        transform: scale3d(.95, .95, .95);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden
    }

    #recommended-properties .box-card {
        border: none
    }

    .box-card h3 {
        font-size: 20px;
        line-height: 1.2;
        margin-bottom: 10px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        word-break: break-word
    }

    @media (max-width:767px) {
        .box-card h3 {
            font-size: 16px
        }
    }

    .box-card-content {
        padding: 10px 15px
    }

    #recommended {
        padding-top: 80px
    }

    .custom-checkbox {
        font-size: 12px;
        font-weight: 700;
        min-height: 26px
    }

    .custom-checkbox [type=checkbox]:checked,
    .custom-checkbox [type=checkbox]:not(:checked),
    .custom-checkbox [type=radio]:checked,
    .custom-checkbox [type=radio]:not(:checked) {
        position: absolute;
        left: -9999px
    }

    .custom-checkbox [type=checkbox]:checked+label,
    .custom-checkbox [type=checkbox]:not(:checked)+label,
    .custom-checkbox [type=radio]:checked+label,
    .custom-checkbox [type=radio]:not(:checked)+label {
        position: relative;
        padding-left: 35px;
        cursor: pointer;
        color: #212121
    }

    @media (max-width:767px) {

        .custom-checkbox [type=checkbox]:checked+label,
        .custom-checkbox [type=checkbox]:not(:checked)+label,
        .custom-checkbox [type=radio]:checked+label,
        .custom-checkbox [type=radio]:not(:checked)+label {
            padding-left: 30px
        }
    }

    .custom-checkbox.error [type=checkbox]:checked+label:before,
    .custom-checkbox.error [type=checkbox]:not(:checked)+label:before,
    .custom-checkbox.error [type=radio]:checked+label:before,
    .custom-checkbox.error [type=radio]:not(:checked)+label:before {
        border: solid 1px red
    }

    .custom-checkbox [type=checkbox]:checked+label:before,
    .custom-checkbox [type=checkbox]:not(:checked)+label:before,
    .custom-checkbox [type=radio]:checked+label:before,
    .custom-checkbox [type=radio]:not(:checked)+label:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 24px;
        height: 24px;
        border-radius: 4px;
        border: solid 1px #bbb;
        background: #fff
    }

    @media (max-width:767px) {

        .custom-checkbox [type=checkbox]:checked+label:before,
        .custom-checkbox [type=checkbox]:not(:checked)+label:before,
        .custom-checkbox [type=radio]:checked+label:before,
        .custom-checkbox [type=radio]:not(:checked)+label:before {
            width: 20px;
            height: 20px
        }
    }

    .custom-checkbox [type=checkbox]:checked+label:after,
    .custom-checkbox [type=checkbox]:not(:checked)+label:after,
    .custom-checkbox [type=radio]:checked+label:after,
    .custom-checkbox [type=radio]:not(:checked)+label:after {
        content: '\0044';
        position: absolute;
        top: 0;
        left: 0;
        font-size: 14px;
        width: 24px;
        line-height: 24px;
        color: #09ad7e;
        -webkit-transition: all .2s;
        -o-transition: all .2s;
        transition: all .2s;
        text-align: center
    }

    @media (max-width:767px) {

        .custom-checkbox [type=checkbox]:checked+label:after,
        .custom-checkbox [type=checkbox]:not(:checked)+label:after,
        .custom-checkbox [type=radio]:checked+label:after,
        .custom-checkbox [type=radio]:not(:checked)+label:after {
            width: 20px;
            height: 20px
        }
    }

    .custom-checkbox [type=checkbox]:not(:checked)+label:after,
    .custom-checkbox [type=radio]:not(:checked)+label:after {
        opacity: 0;
        -webkit-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0)
    }

    .custom-checkbox [type=checkbox]:checked+label:after,
    .custom-checkbox [type=radio]:checked+label:after {
        opacity: 1;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        background: #003299;
        text-align: center;
        border: 1px solid #003299;
        border-radius: 4px;
        color: #fff
    }

    .custom-checkbox [type=checkbox]:disabled:checked+label,
    .custom-checkbox [type=checkbox]:disabled:not(:checked)+label,
    .custom-checkbox [type=radio]:disabled:not(:checked)+label {
        opacity: .4;
        cursor: not-allowed
    }

    .custom-checkbox [type=checkbox]:disabled:checked+label:after,
    .custom-checkbox [type=radio]:disabled:checked+label:after {
        opacity: 0
    }

    .ff-dropdown-wrap .custom-checkbox [type=checkbox]:disabled:checked+label:after,
    .ff-dropdown-wrap .custom-checkbox [type=radio]:disabled:checked+label:after {
        opacity: 1
    }

    .custom-checkbox [type=checkbox]:disabled+label,
    .custom-checkbox [type=radio]:disabled+label {
        color: #aaa
    }

    .custom-checkbox label {
        margin-bottom: 0;
        font-size: 16px;
        font-family: Roboto, Helvetica, sans-serif;
        text-transform: initial;
        font-weight: 300
    }

    @media (max-width:767px) {
        .custom-checkbox label {
            font-size: 14px
        }
    }

    .custom-checkbox label:hover:before {
        border: 1px solid #4778d9 !important
    }

    .custom-checkbox.radio-style [type=radio]:checked+label,
    .custom-checkbox.radio-style [type=radio]:not(:checked)+label {
        padding-left: 30px
    }

    .custom-checkbox.radio-style [type=radio]:checked+label:before,
    .custom-checkbox.radio-style [type=radio]:not(:checked)+label:before {
        content: '';
        width: 16px;
        height: 16px;
        border-radius: 50%;
        margin-top: 2px;
        border: solid 1px #bbb;
        -webkit-transform-origin: center center;
        -ms-transform-origin: center center;
        transform-origin: center center
    }

    .custom-checkbox.radio-style [type=radio]:checked+label:after,
    .custom-checkbox.radio-style [type=radio]:not(:checked)+label:after {
        content: '';
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #003299;
        top: 3px;
        left: 1px;
        border: 2px solid #fff
    }

    .custom-checkbox.radio-style label:hover:before {
        border: 1px solid #4778d9 !important
    }

    .custom-checkbox.radio-style a {
        padding-left: 18px
    }

    .custom-checkbox.radio-style a:after,
    .custom-checkbox.radio-style a:before {
        display: none
    }

    .custom-checkbox a.btn {
        font-size: 12px;
        color: #212121;
        min-width: 80px;
        height: 40px;
        line-height: 40px;
        padding: 0 18px;
        position: relative;
        border: 1px solid #979797;
        background: 0 0;
        display: inline-block;
        border-radius: 25px;
        padding-left: 35px;
        font-weight: 700;
        min-width: 80px;
        white-space: nowrap
    }

    .custom-checkbox a.btn.active {
        background: #01a71c;
        border: 1px solid #01a71c;
        color: #fff
    }

    .custom-checkbox a.btn.active:before {
        background: #fff
    }

    .custom-checkbox a.btn.active:after {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
        color: #01a71c
    }

    .custom-checkbox a.btn:before {
        content: '';
        display: inline-block;
        font-size: 9px;
        width: 14px;
        height: 14px;
        vertical-align: middle;
        background: #d8d8d8;
        border-radius: 50%;
        position: absolute;
        left: 11px;
        top: 50%;
        margin-top: -7px;
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -ms-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease
    }

    .custom-checkbox a.btn:after {
        content: '\0044';
        display: inline-block;
        font-family: Glyphter;
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        position: absolute;
        top: 50%;
        font-size: 9px;
        margin-top: -5px;
        left: 13px;
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -ms-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0)
    }

    .btn-group {
        position: relative;
        height: 42px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%
    }

    .btn-group:before {
        content: '\0049';
        position: absolute;
        right: 15px;
        top: 15px;
        display: inline-block;
        font-family: Glyphter;
        font-style: normal;
        font-weight: 700;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 8px;
        line-height: 12px
    }

    .btn-group .input-wrap {
        margin-bottom: 0
    }

    .contact-us .btn-group .input-wrap {
        margin-bottom: 0
    }

    .btn-group a {
        color: #212121;
        outline: 0
    }

    .btn-group label {
        font-size: 14px;
        display: block
    }

    .btn-group ul {
        margin: -1px 0 0 0
    }

    .btn-group .mutliSelect {
        position: relative
    }

    .btn-group a,
    .btn-group a:visited {
        color: #757575;
        text-decoration: none;
        outline: 0;
        font-size: 14px;
        font-family: Molengo, "Trebuchet MS", sans-serif
    }

    .btn-group a span,
    .multiselect span {
        cursor: pointer;
        display: inline-block;
        padding: 0 3px 2px 0;
        color: #212121
    }

    .btn-group a span.hida,
    .multiselect span.hida {
        color: #757575
    }

    .multiselect {
        white-space: nowrap;
        position: relative;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        width: 100%;
        display: block
    }

    .btn-group ul {
        background-color: #f2f2f2;
        border: 0;
        color: #fff;
        display: none;
        left: 0;
        padding: 10px 15px;
        position: absolute;
        top: 100%;
        width: 100%;
        list-style: none;
        height: 180px;
        overflow: auto;
        z-index: 101;
        border-top: 1px solid #ccc;
        -webkit-box-shadow: 1px 2px 5px rgba(0, 0, 0, .16);
        box-shadow: 1px 2px 5px rgba(0, 0, 0, .16)
    }

    .btn-group ul .custom-checkbox [type=checkbox]:checked+label:before,
    .btn-group ul .custom-checkbox [type=checkbox]:not(:checked)+label:before {
        width: 18px;
        height: 18px
    }

    .btn-group ul .custom-checkbox [type=checkbox]:checked+label:after,
    .btn-group ul .custom-checkbox [type=checkbox]:not(:checked)+label:after {
        font-size: 11px;
        width: 18px;
        line-height: 18px
    }

    .btn-group ul .custom-checkbox [type=checkbox]:checked+label,
    .btn-group ul .custom-checkbox [type=checkbox]:not(:checked)+label {
        padding-left: 28px
    }

    .btn-group span.value {
        display: none
    }

    .btn-group ul li a:hover {
        background-color: #fff
    }

    .sm-content {
        padding-top: 10px;
        position: relative;
        max-width: 1260px;
        margin-left: auto;
        margin-right: auto;
        overflow: hidden;
        padding-left: 20px;
        padding-right: 20px;
        z-index: 10
    }

    .sm-content .container {
        margin-left: 0;
        margin-right: 0
    }

    .card-item {
        margin-bottom: 25px
    }

    .card-item h3 {
        font-size: 16px;
        margin-bottom: 14px;
        line-height: 20px;
        color: #414141
    }

    .card-item p {
        color: #414141
    }

    .card-img {
        position: relative;
        margin-bottom: 23px;
        height: 0;
        padding-bottom: 67%;
        border-radius: 6px;
        overflow: hidden
    }

    .card-img.overlay {
        overflow: hidden
    }

    .card-img.overlay:before {
        content: '';
        display: block;
        float: none;
        clear: both;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, .3);
        z-index: 2
    }

    .card-img img {
        border-radius: 6px;
        width: auto;
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
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        backface-visibility: hidden;
        z-index: 1
    }

    .card-img .text-top {
        z-index: 3
    }

    .text-dark {
        color: #212121
    }

    .property-img {
        background-color: rbga(#000, .14);
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 69%;
        pointer-events: none
    }

    .timeline-carousel .property-img {
        background-color: #ccc
    }

    .property-img+.content {
        margin-top: 25px;
        padding: 0 20px 20px
    }

    .portrait .property-img {
        padding-bottom: 150%;
        margin-bottom: 0
    }

    .portrait .property-img:after {
        content: '';
        height: 100%;
        width: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
        opacity: .4;
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0)), color-stop(92%, #000));
        background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), #000 92%);
        background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0), #000 92%);
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), #000 92%)
    }

    .property-left-card .property-img {
        background: #333;
        border-radius: 8px 8px 0 0;
        overflow: hidden;
        margin-bottom: 0
    }

    .property-img img {
        border-radius: 8px 8px 0 0;
        width: auto;
        height: 101%;
        display: block;
        position: absolute;
        left: 50%;
        -webkit-transform: translate(-50%, 0);
        -moz-transform: translate(-50%, 0);
        -ms-transform: translate(-50%, 0);
        -o-transform: translate(-50%, 0);
        transform: translate(-50%, 0)
    }

    .portrait .property-img img {
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .property-left-card .property-img img {
        opacity: .8
    }

    .fancybox-container .read .sec-head {
        margin-top: 0
    }

    @media (max-width:991px) {
        .fancybox-container .read .sec-head h1 {
            font-size: 28px
        }
    }

    .loading-large {
        opacity: 1
    }

    .loading-large.loading-text {
        height: 30px;
        margin-bottom: 20px;
        margin-top: 20px;
        -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, .05);
        box-shadow: 0 2px 5px rgba(0, 0, 0, .05)
    }

    .loading-large.loading-text-btn {
        height: 50px;
        min-width: 200px;
        -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, .05);
        box-shadow: 0 2px 5px rgba(0, 0, 0, .05)
    }

    .loading-large.loading-text-title {
        height: 65px;
        margin-bottom: 20px;
        -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, .05);
        box-shadow: 0 2px 5px rgba(0, 0, 0, .05)
    }

    .animated-background,
    .loading-img,
    .loading-text,
    .loading-text-btn,
    .loading-text-title {
        -webkit-animation-duration: 1.25s;
        animation-duration: 1.25s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-name: placeHolderShimmer;
        animation-name: placeHolderShimmer;
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
        background: #f2f2f2;
        background: -webkit-gradient(linear, left top, right top, color-stop(12%, #f6f6f6), color-stop(18%, #f0f0f0), color-stop(33%, #f6f6f6));
        background: -webkit-linear-gradient(left, #f6f6f6 12%, #f0f0f0 18%, #f6f6f6 33%);
        background: -o-linear-gradient(left, #f6f6f6 12%, #f0f0f0 18%, #f6f6f6 33%);
        background: linear-gradient(to right, #f6f6f6 12%, #f0f0f0 18%, #f6f6f6 33%);
        background-size: 800px 104px;
        height: 96px;
        position: relative
    }

    .loading-img {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 8
    }

    .loading-text-title {
        height: 20px;
        width: 65%;
        margin: 0 0 20px
    }

    .loading-text-btn {
        width: 100px;
        border-radius: 25px;
        height: 25px;
        margin-top: 30px;
        margin-bottom: 30px
    }

    .loading-text {
        height: 15px;
        width: 100%;
        margin: 8px 0
    }

    .loader-line {
        height: 4px;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        overflow: hidden;
        background-color: #f7eade;
        z-index: 99999;
        opacity: 0;
        visibility: hidden
    }

    .loader-line.activated {
        opacity: 1;
        visibility: visible
    }

    .loader-line.bottom {
        top: auto;
        bottom: 0
    }

    .loader-line:before {
        display: block;
        position: absolute;
        content: "";
        left: -200px;
        width: 200px;
        height: 4px;
        background-color: rgba(231, 134, 0, .8);
        -webkit-animation: loadingss 1.8s linear infinite;
        animation: loadingss 1.8s linear infinite
    }

    .custom-multi-select {
        position: relative;
        margin-bottom: 20px
    }

    .custom-multi-select.error .btn-group {
        border-bottom: 1px solid red
    }

    .custom-multi-select .btn-group {
        background: 0 0
    }

    .custom-multi-select>label {
        font-size: 12px;
        color: #212121;
        font-weight: 700;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        display: inline-block;
        margin-bottom: 8px;
        text-transform: uppercase
    }

    .custom-multi-select .multiselect-search {
        width: 100%;
        padding: 0 15px;
        outline: 0;
        min-height: 30px !important;
        line-height: 30px !important;
        display: block;
        border-radius: 4px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: 1px solid #ccc !important;
        font-size: 14px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 300;
        resize: none
    }

    .custom-multi-select .input-group {
        position: relative;
        margin: 0
    }

    .custom-multi-select .multiselect-clear-filter {
        background: #1f6bd7;
        position: absolute;
        top: 0;
        height: 32px;
        width: 40px;
        right: 0;
        line-height: 30px;
        text-align: center;
        font-size: 18px;
        padding: 0;
        border: none;
        border-radius: 0 4px 4px 0
    }

    .custom-multi-select .multiselect-clear-filter:before {
        content: '\0054';
        display: inline-block;
        font-family: Glyphter;
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 16px
    }

    .custom-multi-select .multiselect-clear-filter .glyphicon {
        display: none
    }

    .custom-multi-select .multiselect.btn {
        background: 0 0;
        width: 100%;
        padding: 0 15px;
        outline: 0;
        height: 40px;
        line-height: 40px;
        -webkit-appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        border: none;
        font-size: 14px;
        background: 0 0;
        border-radius: 4px;
        text-align: left;
        font-family: Roboto, Helvetica, sans-serif;
        font-weight: 300;
        text-transform: inherit
    }

    .custom-multi-select .multiselect.btn .caret {
        display: none
    }

    .custom-multi-select .multiselect.btn:hover {
        background: 0 0;
        border: none
    }

    .custom-multi-select .multiselect-container>li.multiselect-item.multiselect-filter {
        margin-bottom: 12px
    }

    .custom-multi-select .multiselect-container>li>a {
        padding: 0
    }

    .custom-multi-select .multiselect-container>li>label {
        padding: 0
    }

    .custom-multi-select .multiselect-container>li>a>label.checkbox,
    .custom-multi-select .multiselect-container>li>a>label.radio {
        padding-left: 0;
        color: #000
    }

    .custom-multi-select ul {
        display: none
    }

    .custom-multi-select .multiselect-container label.checkbox>input[type=checkbox]:checked+:after {
        content: 'sdadas'
    }

    .fancybox-content.no-padding {
        padding: 0
    }

    .fancybox-content.no-padding .sec-head {
        margin-bottom: 0
    }

    .fancybox-content.no-padding .sec-head p {
        float: none;
        white-space: normal;
        overflow-wrap: break-word;
        padding: 0 15px;
        max-width: 400px;
        text-align: center;
        font-size: 18px
    }

    .fancybox-content.no-padding .sec-head a {
        color: #e78600
    }

    .lazyload,
    .lazyloading {
        opacity: 0
    }

    .lazyloaded {
        opacity: 1;
        -webkit-transition: opacity .3s;
        -o-transition: opacity .3s;
        transition: opacity .3s
    }

    .read.fancybox-content {
        max-width: 1024px;
        margin: 40px auto
    }

    @media (max-width:767px) {
        .read.fancybox-content {
            padding: 30px 20px
        }
    }

    .alternate-bg {
        background: #fff
    }

    .alternate-bg #location:after {
        display: none
    }

    .alternate-bg section:nth-child(odd) {
        background: #f7f7f7;
        position: relative;
        padding-bottom: 140px
    }

    @media (max-width:1024px) {
        .alternate-bg section:nth-child(odd) {
            padding-bottom: 80px;
            padding-top: 0
        }
    }

    .alternate-bg section:nth-child(odd):after {
        content: '';
        width: 0;
        height: 0;
        border-style: solid;
        border-width: calc(50vw/6) 75vw;
        border-color: transparent transparent #fff transparent;
        position: absolute;
        bottom: 0;
        left: 0
    }

    .alternate-bg section:last-child:after {
        content: '';
        width: 0;
        height: 0;
        border-style: solid;
        border-width: calc(50vw/6) 75vw;
        border-color: transparent transparent #003299 transparent !important;
        position: absolute;
        bottom: 0;
        left: 0
    }

    .alternate-bg section:nth-child(even) {
        padding-bottom: 120px
    }

    @media (max-width:991px) {
        .alternate-bg section:nth-child(even) {
            padding-bottom: 80px
        }
    }

    @media (max-width:767px) {
        .alternate-bg section:nth-child(even) {
            padding-bottom: 40px
        }
    }

    .alternate-bg section:nth-child(even):after {
        content: '';
        width: 0;
        height: 0;
        border-style: solid;
        border-width: calc(50vw/6) 75vw;
        border-color: transparent transparent #f7f7f7 transparent;
        position: absolute;
        bottom: 0;
        left: 0;
        border-width: calc(50vw/6) 75vw;
        left: auto;
        right: 0
    }

    #thankyou p {
        font-size: 20px
    }

    .few-units-left {
        font-size: 12px;
        text-transform: uppercase;
        font-weight: 700;
        color: #e78600;
        margin-top: 5px
    }

    .full-view-manual {
        padding-bottom: 12vw
    }

    #share-info {
        width: 480px;
        border-radius: 8px;
        padding-bottom: 10px
    }

    @media (max-width:640px) {
        #share-info {
            width: 100%;
            padding: 20px 20px 0
        }
    }

    #share-info ul {
        margin-top: 0
    }

    @media (max-width:640px) {
        #share-info ul {
            margin-bottom: 15px
        }
    }

    #share-info ul li {
        display: inline-block;
        text-align: center;
        margin: 0 15px
    }

    #share-info ul li .icon-home-2 {
        width: 60px;
        height: 60px;
        margin-right: auto;
        margin-left: auto;
        display: block;
        border-radius: 50%;
        line-height: 60px;
        border-radius: 50%;
        color: #fff;
        background: #1f6bd7;
        font-size: 28px
    }

    @media (max-width:640px) {
        #share-info ul li .icon-home-2 {
            width: 45px;
            height: 45px;
            line-height: 45px;
            font-size: 18px
        }
    }

    #share-info ul li .icon-home-2:before {
        line-height: 60px
    }

    @media (max-width:640px) {
        #share-info ul li .icon-home-2:before {
            line-height: 45px
        }
    }

    #share-info ul li .icon-home-2.icon-twitter {
        background: #00bfff
    }

    #share-info ul li .icon-home-2.icon-google {
        background: #ff4500
    }

    #share-info .fs-text {
        font-size: 14px;
        display: block;
        color: #212121;
        font-weight: 400;
        margin-top: 5px
    }

    @media (max-width:640px) {
        #share-info .fs-text {
            font-size: 12px
        }
    }

    #share-info .si-bar {
        min-width: 400px;
        padding: 8px 0;
        border: 1px solid #f2f2f2;
        background: #f7f7f7
    }

    @media (max-width:640px) {
        #share-info .si-bar {
            min-width: 100%;
            padding: 4px 0
        }
    }

    #share-info .input-wrap .js-copytextarea,
    #share-info .input-wrap input[type=text] {
        background: #f7f7f7;
        border: 1px solid transparent;
        padding-right: 50px;
        background: #f7f7f7;
        border: 1px solid transparent;
        padding-right: 50px;
        height: 40px;
        min-height: 40px;
        outline: 0;
        overflow: hidden;
        position: relative;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap;
        line-height: 1.2
    }

    @media (max-width:640px) {

        #share-info .input-wrap .js-copytextarea,
        #share-info .input-wrap input[type=text] {
            font-size: 12px;
            line-height: 22px
        }
    }

    #share-info a.copy-url {
        position: absolute;
        text-transform: uppercase;
        color: #1f6bd7;
        font-size: 16px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: 0;
        border: none;
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        padding-left: 8px;
        padding-right: 8px;
        background: #f7f7f7;
        font-weight: 700;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        line-height: 42px
    }

    @media (max-width:640px) {
        #share-info a.copy-url {
            font-size: 14px
        }
    }

    #share-info .notes-copied {
        font-size: 12px;
        font-style: italic;
        text-align: left;
        margin: 8px 10px;
        opacity: 0;
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -ms-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease
    }

    #share-info .notes-copied.active {
        opacity: 1
    }

    #contact-form.loading-form:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, .5) url(/frontend/images/page_template/loading.gif) no-repeat center center;
        background-size: 100px;
        z-index: 101
    }

    @-webkit-keyframes loadingss {
        from {
            left: -200px;
            width: 30%
        }

        50% {
            width: 30%
        }

        70% {
            width: 70%
        }

        80% {
            left: 50%
        }

        95% {
            left: 120%
        }

        to {
            left: 100%
        }
    }

    @keyframes loadingss {
        from {
            left: -200px;
            width: 30%
        }

        50% {
            width: 30%
        }

        70% {
            width: 70%
        }

        80% {
            left: 50%
        }

        95% {
            left: 120%
        }

        to {
            left: 100%
        }
    }

    @-webkit-keyframes placeHolderShimmer {
        0% {
            background-position: -468px 0
        }

        100% {
            background-position: 468px 0
        }
    }

    @keyframes placeHolderShimmer {
        0% {
            background-position: -468px 0
        }

        100% {
            background-position: 468px 0
        }
    }

    .table-wrap {
        display: table;
        height: 100%;
        position: absolute;
        width: 100%;
        z-index: 3
    }

    .table-wrap .table-cell {
        display: table-cell;
        vertical-align: middle
    }

    .banner {
        height: 100vh;
        position: relative;
        overflow: hidden;
        min-height: 600px;
        background: #ccc;
        margin-left: 220px
    }

    @media (max-width:1024px) {
        .banner {
            margin-left: 0
        }
    }

    .banner.banner-loading .banner-text-placeholder {
        visibility: visible;
        opacity: 1
    }

    .banner.banner-loading .banner-text-placeholder .banner-logo {
        visibility: visible;
        opacity: 1
    }

    @media (max-width:767px) {
        .banner.banner-loading .banner-text-placeholder .banner-logo {
            visibility: hidden;
            opacity: 0
        }
    }

    @media (max-width:767px) {
        .banner.banner-loading .banner-text-placeholder {
            visibility: hidden;
            opacity: 0
        }
    }

    .banner.banner-loading .banner-logo {
        opacity: 0;
        visibility: hidden
    }

    @media (max-width:767px) {
        .banner.banner-loading .banner-logo {
            opacity: 1;
            visibility: visible
        }
    }

    .banner.banner-loading .banner-text {
        opacity: 0;
        visibility: hidden
    }

    @media (max-width:767px) {
        .banner.banner-loading .banner-text {
            opacity: 1;
            visibility: visible
        }
    }

    .banner:before {
        content: '';
        display: block;
        float: none;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, .18);
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2
    }

    .banner picture {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        z-index: 1
    }

    .banner picture img {
        position: absolute;
        width: auto;
        height: 100%;
        z-index: 1;
        top: 50%;
        left: 0;
        -webkit-transform: translate(0, -50%);
        -moz-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
        -o-transform: translate(0, -50%);
        transform: translate(0, -50%)
    }

    .banner .with-gutter img {
        width: 100%;
        height: auto;
        -webkit-transform: translate(-45%, -50%);
        -moz-transform: translate(-45%, -50%);
        -ms-transform: translate(-45%, -50%);
        -o-transform: translate(-45%, -50%);
        transform: translate(-45%, -50%)
    }

    .banner .with-gutter p {
        line-height: 1.57
    }

    .banner.banner-auto {
        height: auto
    }

    .banner.default {
        height: 30vh;
        min-height: 248px;
        margin-left: 0
    }

    @media (max-width:991px) {
        .banner.default {
            height: 30vh
        }
    }

    .banner.default .banner-text {
        padding-top: 90px;
        width: auto
    }

    .banner.default .banner-text h1,
    .banner.default .banner-text h2 {
        color: #212121;
        margin-top: 30px
    }

    .banner.default+.sec-pad {
        padding-top: 40px
    }

    .banner.default+.alternate-bg {
        padding-top: 40px
    }

    .banner .table-wrap {
        width: calc(100% + 220px);
        margin-left: -220px
    }

    @media (max-width:1024px) {
        .banner .table-wrap {
            width: 100%;
            margin-left: 0
        }
    }

    .banner-left {
        width: 55%;
        float: left;
        padding-right: 80px;
        position: relative
    }

    @media (max-width:767px) {
        .banner-left {
            width: 100%;
            padding-right: 0 !important
        }
    }

    .banner-left>.banner-logo {
        opacity: 1;
        visibility: visible;
        -webkit-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        transition: opacity .4s cubic-bezier(.645, .045, .355, 1)
    }

    .banner-left .banner-text {
        opacity: 1;
        visibility: visible;
        -webkit-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        transition: opacity .4s cubic-bezier(.645, .045, .355, 1)
    }

    .banner-text-placeholder {
        position: absolute;
        top: 0;
        left: 0;
        width: 80%;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        -moz-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        -ms-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        -o-transition: opacity .4s cubic-bezier(.645, .045, .355, 1);
        transition: opacity .4s cubic-bezier(.645, .045, .355, 1)
    }

    @media (max-width:767px) {
        .banner-text-placeholder {
            opacity: 0;
            visibility: hidden
        }
    }

    .banner-text {
        position: relative;
        z-index: 3;
        width: 100%
    }

    .banner-text h1,
    .banner-text h2 {
        font-size: 62px;
        line-height: 66px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 400;
        color: #fff;
        text-shadow: 2px 4px 9px rgba(0, 0, 0, .16)
    }

    .banner-text h2,
    .banner-text h4 {
        color: #fff
    }

    .banner-text h4 {
        margin-top: 17px
    }

    .banner-text h3 {
        font-size: 26px;
        color: #fff;
        line-height: 1.38;
        margin-top: 20px
    }

    .banner-text p {
        font-size: 18px;
        color: #fff;
        margin-bottom: 30px;
        margin-top: 20px;
        text-shadow: 2px 4px 15px rgba(0, 0, 0, .16), 1px 4px 15px rgba(0, 0, 0, .2), 1px 4px 15px rgba(0, 0, 0, .6);
        max-width: 510px
    }

    .banner-text .btn {
        min-width: 200px;
        -webkit-transition: all 0s linear;
        -moz-transition: all 0s linear;
        -ms-transition: all 0s linear;
        -o-transition: all 0s linear;
        transition: all 0s linear
    }

    @media (max-width:767px) {
        .banner-text .btn {
            margin-bottom: 8px
        }
    }

    .banner-text .banner-play {
        display: inline-block;
        border-radius: 25px;
        font-weight: 700;
        border: 2px solid #ffff;
        margin-left: 5px;
        min-width: auto;
        text-shadow: 3px 3px 8px rgba(0, 0, 0, .6);
        -webkit-box-shadow: 3px 3px 10px rgba(0, 0, 0, .2) .banner-text .banner-play;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, .2) .banner-text .banner-play
    }

    .banner-text .banner-play :hover {
        xbackground: transparent;
        xborder: 2px solid #fff;
        opacity: .8;
        -webkit-box-shadow: none;
        box-shadow: none
    }

    .banner-text .banner-play:before {
        width: 100%;
        display: block
    }

    .banner-text .banner-play i.icon-home {
        margin-right: 9px;
        position: relative;
        display: inline-block;
        top: 1px;
        text-shadow: none
    }

    .banner-text .small-text p {
        font-size: 14px;
        margin-top: 25px;
        margin-bottom: 0;
        line-height: 1.5
    }

    .single-property-banner h1 {
        max-width: 600px
    }

    @media (max-width:991px) {
        .single-property-banner h1 {
            max-width: 100%
        }
    }

    .single-property-banner .banner-logo img {
        display: inline-block;
        max-width: 300px;
        max-height: 120px;
        width: auto;
        height: auto
    }

    @media (max-width:991px) {
        .single-property-banner .banner-logo img {
            max-width: 200px;
            max-height: 90px
        }
    }

    @media (max-width:480px) {
        .single-property-banner .banner-logo img {
            max-width: 160px;
            max-height: 90px
        }
    }

    .single-property-banner .banner-logo {
        height: auto;
        width: auto
    }

    .no-filter-banner {
        width: 100%
    }

    .banner-logo {
        margin-bottom: 35px;
        max-width: 100%;
        height: 83px;
        position: relative;
        overflow: hidden;
        margin-bottom: 35px
    }

    .banner-logo .loading-text-title {
        width: 40%;
        height: 100%;
        position: absolute
    }

    .banner-logo img {
        width: auto;
        height: 100%;
        display: inline-block
    }

    .banner-filter {
        background: #fff;
        border-radius: 6px;
        padding: 10px 0 0;
        float: right;
        margin-top: 110px;
        width: 45%;
        max-width: 390px;
        -webkit-box-shadow: 0 0 34px 0 rgba(0, 0, 0, .5);
        box-shadow: 0 0 34px 0 rgba(0, 0, 0, .5)
    }

    .banner-arrow {
        background: #1f6bd7;
        width: 53px;
        height: 53px;
        display: inline-block;
        border-radius: 50%;
        z-index: 99;
        -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5);
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5);
        text-align: center
    }

    .banner-arrow span {
        color: #fff;
        font-size: 18px;
        display: inline-block;
        line-height: 53px
    }

    .banner-arrow-wrap {
        position: absolute;
        text-align: center;
        width: auto;
        bottom: 15px;
        right: 50%;
        padding: 0 30px;
        z-index: 5;
        margin-right: -56px
    }

    .for-pages .coverimage-title {
        position: absolute;
        z-index: 2;
        height: 100%;
        width: 100%;
        top: 50%;
        left: -220px
    }

    @media (max-width:991px) {
        .for-pages .coverimage-title {
            left: 0
        }
    }

    .for-pages .coverimage-title h1 {
        font-size: 62px;
        margin-top: -15%;
        margin-bottom: 20px;
        line-height: 1
    }

    .for-pages .coverimage-title p {
        text-shadow: none
    }

    @media (max-width:767px) {
        #innovation picture img {
            width: 100%;
            height: auto
        }

        .for-pages .coverimage-title {
            left: 0
        }

        .for-pages .coverimage-title h1 {
            font-size: 42px;
            margin-top: -15%;
            margin-bottom: 20px;
            line-height: 1
        }
    }

    .bf-looking {
        padding: 12px 25px
    }

    @media (max-width:991px) {
        .bf-looking {
            padding: 12px 15px
        }
    }

    .bf-looking ul li {
        display: inline-block;
        margin-right: 2px;
        vertical-align: middle
    }

    .bf-looking ul li span {
        font-size: 14px;
        display: block;
        font-weight: 700;
        font-family: Molengo, "Trebuchet MS", sans-serif
    }

    @media (max-width:991px) {
        .bf-looking ul li span {
            font-size: 12px
        }
    }

    .bf-looking .custom-select {
        max-width: 65px
    }

    @media (max-width:991px) {
        .bf-looking .custom-select select {
            font-size: 12px
        }
    }

    .bf-price-range {
        padding: 12px 25px
    }

    @media (max-width:991px) {
        .bf-price-range {
            padding: 10px 15px
        }
    }

    .banner-action {
        background: #01a71c;
        border-radius: 0 0 6px 6px;
        position: relative;
        padding: 10px 25px
    }

    @media (max-width:991px) {
        .banner-action {
            padding: 10px 15px
        }
    }

    .banner-action .advance-filter-link {
        color: #fff;
        font-weight: 700;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        line-height: 38px;
        font-size: 14px
    }

    .banner-action .advance-filter-link span.icon-home {
        display: inline-block;
        vertical-align: middle;
        margin-right: 8px
    }

    .banner-action .btn {
        line-height: 38px;
        height: 38px;
        float: right
    }

    .bf-price-range h4 {
        font-size: 14px;
        font-family: Molengo, "Trebuchet MS", sans-serif;
        font-weight: 700;
        color: #212121;
        line-height: 20px;
        margin-bottom: 25px;
        white-space: nowrap
    }

    @media (max-width:991px) {
        .bf-price-range h4 {
            font-size: 12px
        }
    }

    .bf-price-range h4 label {
        font-size: 16px;
        display: inline-block;
        vertical-align: top;
        margin-left: 5px;
        position: relative
    }

    .bf-price-range h4 label:before {
        content: '';
        width: 100%;
        height: 1px;
        background: #ccc;
        position: absolute;
        bottom: -2px;
        left: 1px
    }

    .bf-price-range h4 i {
        font-size: 12px;
        display: inline-block;
        margin-right: 3px
    }

    .custom-select.house-type {
        max-width: 115px
    }

    @media (max-width:991px) {
        .custom-select.house-type {
            max-width: 85px
        }
    }

    .price-range {
        padding-bottom: 5px;
        padding-left: 7px;
        padding-right: 7px
    }

    .search-mobile .price-range {
        margin-top: 15px
    }

    .price-range .noUi-target {
        background: #e2e2e2;
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-radius: 0
    }

    .price-range .noUi-horizontal {
        height: 3px;
        background: #e2e2e2;
        position: relative;
        z-index: 2
    }

    .price-range .noUi-horizontal .noUi-handle {
        width: 15px;
        height: 15px;
        left: -8px
    }

    .price-range .noUi-horizontal .noUi-handle:after,
    .price-range .noUi-horizontal .noUi-handle:before {
        content: '';
        display: none
    }

    .price-range .noUi-handle {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background: #fff;
        border: 2px solid #1f6bd7
    }

    .price-range .noUi-connect {
        background: #1f6bd7
    }

    .pricing-label {
        margin-top: 0;
        width: 100%;
        position: relative;
        height: 32px
    }

    .pricing-label label {
        font-size: 10px;
        color: #495366;
        padding-top: 18px;
        position: absolute;
        margin-left: -5px
    }

    .pricing-label label.pl-1 {
        left: 0
    }

    .pricing-label label.pl-3 {
        left: 12.5%
    }

    .pricing-label label.pl-5 {
        left: 24%
    }

    .pricing-label label.pl-7 {
        left: 36%
    }

    .pricing-label label.pl-10 {
        left: 50%;
        margin-left: -8px
    }

    .pricing-label label.pl-15 {
        left: 75%;
        margin-left: -8px
    }

    .pricing-label label.pl-20 {
        left: 100%;
        margin-left: -8px
    }

    .pricing-label label:before {
        content: '';
        height: 12px;
        width: 1px;
        background: #ccc;
        position: absolute;
        left: 50%;
        top: 5px;
        margin-left: -.5px
    }

    .pricing-label label span {
        font-size: 7px
    }

    .mobile-search {
        display: none
    }

    .bfb-autocomplete {
        position: relative
    }

    .bfb-autocomplete.removePlaceholder:after {
        display: none
    }

    .bfb-autocomplete:after {
        content: 'Any';
        font-size: 14px;
        font-family: Roboto, Helvetica, sans-serif;
        color: #6e6e6e;
        position: absolute;
        z-index: 101;
        pointer-events: none;
        top: 50%;
        left: 15px;
        -webkit-transform: translate(0, -50%);
        -moz-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
        -o-transform: translate(0, -50%);
        transform: translate(0, -50%)
    }

    .bfb-autocomplete .select-pure__select {
        padding: 8px 10px
    }

    .bfb-autocomplete .select-pure__label {
        position: relative;
        overflow: hidden;
        white-space: nowrap
    }

    .bfb-autocomplete .select-pure__options {
        top: auto !important;
        bottom: 100% !important;
        max-height: 241px
    }

    .bfb-autocomplete .select-pure__options:before {
        display: none
    }

    .bfb-autocomplete .select-pure__selected-label {
        font-size: 10px;
        direction: rtl;
        margin: 0 5px 2px 0
    }

    .banner-filter-bottom {
        position: absolute;
        bottom: 20px;
        width: calc(100% + 220px);
        margin-left: -220px;
        left: 0;
        z-index: 101;
        color: #fff
    }

    .bf-bot-wrap hr {
        border: none;
        border-bottom: 1px solid rgba(255, 255, 255, .2);
        margin-bottom: 20px;
        clear: both;
        float: none
    }

    .banner-filter-bottom .container {
        margin-right: 0
    }

    .bf-bot-wrap .advance-filter-link {
        color: #fff;
        font-size: 13px;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        margin-top: 4px
    }

    .bf-bot-wrap .advance-filter-link .icon-home {
        font-size: 16px;
        display: inline-block;
        margin-right: 8px;
        vertical-align: middle
    }

    .bf-bot-wrap {
        background: rgba(0, 0, 0, .8);
        padding: 15px 15px 10px;
        border-radius: 8px;
        position: relative
    }

    .bf-bot-wrap .custom-checkbox.radio-style label {
        background: 0 0;
        padding: 0 15px !important;
        text-transform: uppercase;
        font-size: 14px;
        border-radius: 25px;
        min-width: auto;
        height: 25px;
        line-height: 25px;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
        display: inline-block
    }

    .bf-bot-wrap .custom-checkbox.radio-style input[type=radio]:checked+label {
        background: #e78600
    }

    .bf-bot-wrap .custom-checkbox.radio-style input[type=radio]:checked+label:after,
    .bf-bot-wrap .custom-checkbox.radio-style input[type=radio]:not(:checked)+label:after {
        display: none
    }

    .bf-bot-wrap .custom-checkbox.radio-style input[type=radio]:checked+label:before,
    .bf-bot-wrap .custom-checkbox.radio-style input[type=radio]:not(:checked)+label:before {
        display: none
    }

    .bf-bot-wrap .custom-select label {
        color: #000
    }

    .bf-bot-wrap .input-wrap input[type=text] {
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        padding: 0 50px 0 15px
    }

    .bf-bot-wrap .input-wrap button {
        position: absolute;
        width: 50px;
        height: 100%;
        background: 0 0;
        border: none;
        bottom: 0;
        right: 0;
        background: url(/frontend/images/icon-location.png) no-repeat center center;
        background-size: 25px 25px;
        outline: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        cursor: pointer
    }

    .bf-bot-wrap .input-wrap::-webkit-input-placeholder {
        color: #333
    }

    .bf-bot-wrap .input-wrap::-moz-placeholder {
        color: #333
    }

    .bf-bot-wrap .input-wrap:-ms-input-placeholder {
        color: #333
    }

    .bf-bot-wrap .input-wrap:-moz-placeholder {
        color: #333
    }

    .bf-bot-wrap .custom-select select {
        color: #333;
        font-weight: 300;
        opacity: 1;
        font-size: 14px
    }

    .bf-bot-wrap .custom-checkbox {
        min-height: auto
    }

    .bf-bot-wrap .custom-select {
        background: #fff;
        border: none;
        height: 42px;
        border-radius: 4px;
        line-height: 42px
    }

    .bf-bot-wrap .row>div>label {
        font-size: 12px;
        margin-top: -15px;
        display: block;
        text-align: left;
        margin-bottom: 5px
    }

    .bf-bot-wrap .row div>label .icon-home {
        font-size: 10px
    }

    .bf-bot-wrap .col-multiple-loc {
        padding-right: 0
    }

    .bf-bot-wrap .col-price-range {
        padding: 0
    }

    .bf-bot-wrap .row {
        position: relative;
        padding-right: 140px
    }

    .bf-bot-wrap .btn {
        height: 42px;
        line-height: 42px;
        border-radius: 4px;
        background: #01a71c;
        border: 1px solid #01a71c;
        position: absolute;
        right: 15px;
        top: 8px;
        width: 110px;
        text-transform: uppercase
    }

    .bf-bot-wrap h2 {
        font-size: 18px;
        float: left;
        margin-right: 40px;
        margin-bottom: 8px
    }

    .bf-bot-wrap .bf-looking {
        padding: 0
    }

    .bf-bot-wrap .custom-checkbox.radio-style label {
        color: #fff
    }

    .bf-bot-wrap .custom-checkbox.radio-style label:hover {
        color: #fff
    }

    .banner-left {
        padding-bottom: 135px;
        padding-right: 0
    }

    .bf-price-range {
        padding: 10px 0 0
    }

    .bf-price-range .pricing-label {
        padding-bottom: 0
    }

    .bf-price-range .pricing-label label:before {
        height: 9px
    }

    .bf-price-range .pricing-label label {
        color: #fff;
        padding-top: 14px
    }

    .null-right {
        padding-right: 0
    }

    .pac-container {
        z-index: 99999999999 !important
    }

    #home-pin-map {
        height: 100% !important;
        width: 100% !important;
        position: absolute !important;
        top: 0;
        left: 0
    }

    #map-pin {
        display: none;
        width: 1050px;
        height: 600px
    }

    #thankyou {
        display: none
    }

    .search-mobile {
        right: 0;
        -webkit-transform: translate(100%, 0);
        -moz-transform: translate(100%, 0);
        -ms-transform: translate(100%, 0);
        -o-transform: translate(100%, 0)
    }

    @media (max-width:1024px) {
        .sidebar-menu {
            -webkit-transform: translate(100%, 0);
            -moz-transform: translate(100%, 0);
            -ms-transform: translate(100%, 0);
            -o-transform: translate(100%, 0);
            transform: translate(100%, 0)
        }
    }

    @media (max-width:991px) {
        .property-nav {
            width: 100%;
            height: 100%;
            left: auto;
            right: 0;
            -webkit-transform: translate(100%, 0) scale3d(1, 1, 1);
            -moz-transform: translate(100%, 0) scale3d(1, 1, 1);
            -ms-transform: translate(100%, 0) scale3d(1, 1, 1);
            -o-transform: translate(100%, 0) scale3d(1, 1, 1);
            transform: translate(100%, 0) scale3d(1, 1, 1)
        }
    }

    @media (max-width:767px) {
        .banner-filter-bottom {
            display: none;
            z-index: 0
        }
    }

    @media (max-width:767px) {
        #main-container {
            position: relative;
            overflow: hidden;
            min-height: auto;
            height: auto
        }
    }

    .pricing-label label span {
        font-size: 8px !important;
        font-family: Arial, Helvetica, sans-serif !important;
        letter-spacing: .5px !important;
        -webkit-font-smoothing: auto !important;
        opacity: .8 !important
    }

    em {
        font-style: italic
    }

    .read.blog p span {
        font-family: Roboto, Helvetica, sans-serif !important
    }

    .banner picture img {
        transition: opacity .4s;
        width: 100%;
        height: 100%;
        top: auto;
        transform: none;
        object-fit: cover
    }

    .bf-bot-wrap .custom-checkbox.radio-style a,
    .sm-content .custom-checkbox.radio-style a {
        background: 0 0;
        padding: 0 15px !important;
        text-transform: uppercase;
        font-size: 14px;
        border-radius: 25px;
        min-width: auto;
        height: 25px;
        line-height: 25px;
        -webkit-transition: .4s;
        -o-transition: .4s;
        transition: .4s;
        display: inline-block;
        color: #fff;
        font-weight: 300;
        opacity: .5
    }

    .advisory-wrap .owl-carousel.owl-loaded,
    .bf-bot-wrap .custom-checkbox.radio-style a:hover,
    .sm-content .custom-checkbox.radio-style a:hover {
        opacity: 1
    }

    .advisory-wrap .owl-carousel {
        opacity: 0;
        transition: opacity .4s;
        xpadding-right: 220px
    }

    .advisory-wrap .owl-carousel .item {
        position: relative;
        padding-right: 220px
    }

    .advisory-wrap .owl-stage-outer {
        max-height: 44px
    }

    .advisory-wrap {
        position: fixed;
        height: auto;
        width: calc(100% - 220px);
        top: 0;
        background: rgba(0, 0, 0, .7);
        left: 220px;
        z-index: 99999;
        padding: 20px 60px;
        color: #fff;
        font-size: 16px;
        font-weight: 400;
        max-height: 84px;
        overflow: hidden;
        transform: translate(0, -100%);
        transition: .4s;
        opacity: 0
    }

    .advisory-wrap.active {
        transform: translate(0, 0);
        opacity: 1
    }

    .advisory-wrap.hide {
        transform: translate(0, -100%);
        opacity: 0
    }

    .advisory-wrap .breaking-news {
        xpadding-right: 220px;
        height: 44px;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        position: relative;
        overflow: hidden
    }

    .advisory-wrap .breaking-news p {
        font-weight: 300;
        max-width: 1024px;
        padding-right: 60px
    }

    .advisory-wrap .breaking-news p strong {
        color: #e78600
    }

    .advisory-wrap .breaking-news a {
        text-decoration: underline;
        color: #fff
    }

    .advisory-wrap .breaking-news a:hover {
        text-decoration: none
    }

    .advisory-wrap .jq-close {
        top: 50%;
        right: 17px;
        z-index: 10;
        margin-top: -10px
    }

    .advisory-wrap .jq-close:after,
    .advisory-wrap .jq-close:before {
        background: #fff
    }

    .advisory-wrap .btn-round.small {
        height: 35px;
        line-height: 35px;
        padding: 0 20px;
        position: absolute;
        top: 50%;
        right: 60px;
        margin-top: -17px;
        background: #e78600;
        border: 1px solid #e78600;
        z-index: 101
    }

    .advisory-wrap .btn-round.small:hover {
        background: #c97500 !important;
        border: 1px solid #c97500 !important
    }

    @media (min-width:1800px) {
        .advisory-wrap {
            padding-left: 110px
        }
    }

    @media (min-width:1500px) {
        .advisory-wrap .btn-round.small {
            right: 10vmax
        }

        .advisory-wrap .jq-close {
            right: calc(10vmax - 50px)
        }
    }

    @media (max-width:1024px) {
        .advisory-wrap {
            left: 0;
            width: 100%;
            padding: 11px 15px
        }

        .advisory-wrap .breaking-news {
            height: 48px
        }

        .advisory-wrap .breaking-news p {
            font-size: 14px;
            padding-right: 0
        }

        .advisory-wrap .owl-stage-outer {
            max-height: 52px
        }
    }

    @media (max-width:767px) {
        .advisory-wrap .breaking-news p br {
            display: none
        }

        .advisory-wrap .owl-carousel {
            xpadding-right: 140px
        }

        .advisory-wrap .owl-carousel .item {
            position: relative;
            padding-right: 140px
        }

        .advisory-wrap .breaking-news {
            xpadding-right: 140px;
            -webkit-line-clamp: 3
        }

        .advisory-wrap .breaking-news p {
            font-size: 12px
        }

        .advisory-wrap .btn-round.small {
            font-size: 10px;
            height: 28px;
            line-height: 28px;
            padding: 0 10px;
            margin-top: -14px;
            right: 48px
        }

        .advisory-wrap .jq-close {
            right: 8px
        }
    }

    @media (max-width:412px) {
        .advisory-wrap .breaking-news p {
            font-size: 11px
        }
    }

    .embeddedServiceHelpButton,
    .embeddedServiceHelpButton .helpButton {
        z-index: 9999999 !important
    }

    @media screen and (min-width: 992px) {
        .property-nav h5~ul {
            overflow: auto;
            max-height: 360px;
        }
    }
</style>
<script type="application/ld+json">
        [
           {
              "@context":"http://schema.org",
              "@type":"SiteNavigationElement",
              "name":"Home",
              "description":"",
              "url":"https://www.dmcihomes.com/"
           },
           {
              "@context":"http://schema.org",
              "@type":"SiteNavigationElement",
              "name":"What's New",
              "description":"",
              "url":"https://www.dmcihomes.com/whats-new"
           },
           {
              "@context":"http://schema.org",
              "@type":"SiteNavigationElement",
              "name":"Properties",
              "description":"",
              "url":"https://www.dmcihomes.com/properties"
           },
           {
              "@context":"http://schema.org",
              "@type":"SiteNavigationElement",
              "name":"Guides",
              "description":"",
              "url":"https://www.dmcihomes.com/guides"
           },
           {
              "@context":"http://schema.org",
              "@type":"SiteNavigationElement",
              "name":"Sellers",
              "description":"",
              "url":"https://www.dmcihomes.com/sellers"
           },
           {
              "@context":"http://schema.org",
              "@type":"SiteNavigationElement",
              "name":"Careers",
              "description":"",
              "url":"https://www.dmcihomes.com/careers"
           },
           {
              "@context":"http://schema.org",
              "@type":"SiteNavigationElement",
              "name":"About us",
              "description":"",
              "url":"https://www.dmcihomes.com/about-us"
           },
           {
              "@context":"http://schema.org",
              "@type":"SiteNavigationElement",
              "name":"Contact Us",
              "description":"",
              "url":"https://www.dmcihomes.com/contact-us"
           }
        ];
    </script>

<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "name": "DMCI Homes | Real Estate Philippines, Condo, House &amp; Lot for Sale",
        "description": "Welcome to DMCI Homes&#039; official website. Explore prime house and lots, real estate properties, and condos for sale in the Philippines. Learn more today!"
    }
    </script>



<script async>
    function getLang() {
        if (navigator.languages != undefined) {
            return navigator.languages[0];
        } else {
            return navigator.language;
        }
    }

    var languageSetting = getLang();

    CRISP_RUNTIME_CONFIG = {
        locale: languageSetting
    };
</script>
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/65e6b53a8d261e1b5f68bcc0/1ho6j7rh4';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->



    <noscript><iframe src="../googletagmanager.com/ns.html" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <section id="main-container" class="">

        <div id="cookie-preference" class="read" style="display: none;">
            <div class="popup-wrap">
                <div class="popup-main">
                    <h2>Personalize your experience</h2>
                    <hr>
                    <!-- <p> This will help you navigate through our site better</p> -->
                    <form action="" method="post">

                        <div class="input-wrap">
                            <label for="">Preferred Currency <span class="required-field">*</span></label>
                            <div class="custom-select">
                                <label for="pop-up-currency-select"></label>
                                <select name="" id="pop-up-currency-select">
                                    <option value="PHP">PHP - Philippine Peso</option>
                                    <option value="USD">USD - US Dollar</option>
                                    <option value="CNY">CNY - Chinese Yuan</option>
                                    <option value="JPY">JPY - Japan Yen</option>
                                    <option value="AED">AED - UAE Dirham</option>
                                    <option value="GBP">GBP - UK Pound</option>
                                    <option value="EUR">EUR - European Euro</option>
                                    <option value="KRW">KRW - Korean Won</option>
                                </select>
                            </div>

                        </div>
                        <div class="input-wrap" style="display: none;">
                            <label for="">Preferred Language <span class="required-field">*</span></label>
                            <div class="custom-select">
                                <label for="pop-up-language-select"></label>
                                <select name=pop-up-language-select"" id="pop-up-language-select">
                                    <option value="EN">English (EN)</option>
                                    <option value="ZH">Chinese (ZH)</option>
                                    <option value="JA">Japanese (JA)</option>
                                </select>
                            </div>
                        </div>

                        <div class="input-wrap">
                            <label for="">Preferred Measure <span class="required-field">*</span></label>
                            <div class="custom-select">
                                <label for="pop-up-measure-select"></label>
                                <select name=pop-up-measure-select"" id="pop-up-measure-select">
                                    <option value="Metric" selected>Metric</option>
                                    <option value="Imperial">Imperial</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-wrap">
                            <label for="">Preferred Nearby Location</label>
                            <div class="custom-select">

                                <input type="text" id="pop-up-location-select" name="pop-up-location-select"
                                    placeholder="Any Location" style="border: none;">
                            </div>
                        </div>
                        <div class="input-wrap">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="cookies-ads" name="allowedCRF" checked>
                                <label for="cookies-ads"
                                    style="    white-space: normal; line-height:   1.4; font-weight: 300;">We use
                                    cookies to give you the best experience of our Website. You are consenting to our <a
                                        href="#privacy-policy" data-fancybox><strong>Privacy Policy</strong></a> and use
                                    of cookies if you continue to use the Website.</label>
                            </div>
                        </div>
                        <div class="input-wrap">
                            <a href="#" class="btn btn-block" id="save-profile">Start Browsing</a>
                            <p class="text-center skip-wrap"><a href="index4.html"skip-profile"
                                    class="btn-link jq-skip">skip this</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <header id="config-header">
            <div class="top-menu">
                <div class="container clearfix">
                    <a href="/">
                        <img src="{{ asset('images/dmci.png') }}" class=" ls-is-cached lazyloaded"
                            alt="DMCI Homes Logo" width="140" height="31">
                        <img class="logo-exclusive lazyload" style="display: none;" src="{{ asset('images/dmci-exclusive-logo.png') }}"
                            alt="DMCI Homes Exclusive Logo" width="400" height="105">
                    </a>
                    <div class="fr">
                        <nav class="top-nav fl" id="top-nav">
                            <ul>
                                @if (auth()->check() && auth()->user()->isAdmin())
                                    <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                                @endif
                                <li><a href="#" class="pop-up-trigger popup-settings"><span
                                            class="icon-home icon-advancefilter"></span></a></li>
                                <li style="display: none;"><a href="#" class="pop-up-trigger"
                                        id="profile-selected-currency"> (PhP) Peso</a></li>
                                <li style="display: none;"><a href="#" class="pop-up-trigger"
                                        id="profile-selected-language"> (EN)</a></li>
                            </ul>
                        </nav>
                        <div class="fr">
                            <div class="search-icon">
                                <label for="">Quick Search</label>
                                <span class="icon-home icon-search"></span>
                                <form action="https://www.dmcihomes.com/search" method="GET">
                                    <div class="input-wrap">
                                        <input type="text" name="q" placeholder="Quick Search" required>
                                        <button type="submit"><span class="icon-home icon-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="hamburger-menu">
            <div class="bar arrow-top"></div>
            <div class="bar arrow-middle"></div>
            <div class="bar arrow-bottom"></div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </header>
        <div class="sidebar-menu">
            <figure class="logo">
                <a href="/">
                    <img src="/images/dmci.png" alt="DMCI Homes Logo" width="170" height="37">
                    <img class="lazyload logo-exclusive" style="display: none;" data-src="/images/dmci-exclusive-logo.png" alt="DMCI Homes Exclusive Logo" width="400" height="105">
                </a>

            </figure>
            <nav class="main-nav">
                <ul>
                    <li><a href="{{ route('landing-page') }}">Home</a></li>
                    <li><a href="{{ route('whatsNew') }}">Whats New</a>

                    <li><a href="{{ route('viewproperties') }}">Properties</a></li>

                    <li><a href="{{ route('guides') }}">Guides</a></li>
                    <li><a href="{{ route('seller') }}">Sellers</a></li>
                    <li><a href="{{ route('career') }}">Careers</a></li>
                    <li><a href="{{ route('about') }}">About us</a>
                        <li><a href="/contact">Contact us</a>

                    <li><a href="#" class="pop-up-trigger">Preferences</a></li>
                </ul>
                <ul class="nav-other-site">
                    <li class="mn-green mn-btn"><a href="/contact" class="jq-section-form">Customer Care <span
                                class="icon-home icon-costumer-care"></span></a></li>
                    <li class="mn-blue mn-btn"><a href="/prop" target="_blank">Leasing <br>
                            Services<span class="icon-home icon-leasing"></span></a></li>
                    <li class="mn-white mn-btn"><a href="/whatsNew" target="_blank">DMCI
                            <br>Communities
                            <span class="icon-communitys">
                                <img class="lazyload" src="{{ asset('images/lazyload.png') }}"
                                    data-src="{{ asset('images/community-icon.png') }}" width="40"
                                    height="17" alt="">
                                <img class="lazyload exclusive" style="display: none;"
                                    src="{{ asset('images/lazyload.png') }}"
                                    data-src="{{ asset('images/community-icon-white.png') }}" width="40"
                                    height="17" alt="">
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="sm-loc-mobile">
                    <p><a data-fancybox data-type="iframe"
                            data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30895.61180450057!2d121.0179848!3d14.5447676!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3d1595d328ceba09!2sDMCI+Homes+Sales+office!5e0!3m2!1sen!2sph!4v1548819351382"
                            href="javascript:;" class="footer-map-link">DMCI Homes Corporate Center, 1321 Apolinario
                            Street, Bangkal, Makati City, Metro Manila, PH 1233</a></p>
                    <ul>
                        <li>
                            <a href="+63 (2) 53248888.htm">
                                <label for="">Sales</label> +63 (2) 53248888</a>
                        </li>
                        <li>
                            <a href="+63 (2) 84037368.htm">
                                <label for="">Leasing</label> +63 (2) 84037368</a>
                        </li>
                        <li>
                            <a href="+63 (2) 85557777.htm">
                                <label for="">Employment</label> +63 (2) 85557777</a>
                        </li>
                        <li>
                            <a href="+63 (2) 85557777.htm">
                                <label for="">Others</label> +63 (2) 85557777</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>



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
        <div class="property-nav activated">
            <div class="property-content">
                <a href="#" class="close"></a>

                <div class="property-left-card">
                    <h3 id="sidebar-property-header">Viewing all properties.</h3>
                    <div class="property-list">
                        <ul class="flex property-list-carousel" id="sidebar-property-list">
                            <li class="box-card">
                                <div class="property-item"> <a href="/accolade-place">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/accolade-place-featured-small.png')}}"
                                                data-src="{{asset('properties/accolade-place-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Accolade Place</h3>
                                            <p class="price"><span data-value="6582000" class="currency-convert">PHP
                                                    6,582,000</span> - <span data-value="13545000"
                                                    class="currency-convert">PHP 13,545,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/alder-residences">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Alder Residences-featured image-small.png')}}"
                                                data-src="{{asset('properties/Alder Residences-featured image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="uc icon-under-construction"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Alder Residences</h3>
                                            <p class="price"><span data-value="8311000" class="currency-convert">PHP
                                                    8,311,000</span> - <span data-value="19570000"
                                                    class="currency-convert">PHP 19,570,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/alea-residences">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Alea Residences-featured-1644910665040-small.png')}}"
                                                data-src="{{asset('properties/Alea Residences-featured-1644910665040-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Alea Residences</h3>
                                            <p class="price"><span data-value="5937000" class="currency-convert">PHP
                                                    5,937,000</span> - <span data-value="9584000"
                                                    class="currency-convert">PHP 9,584,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/allegra-garden-place">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Balcony View - Allegra Garden Place-small.png')}}"
                                                data-src="{{asset('properties/Balcony View - Allegra Garden Place-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="uc icon-under-construction"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Allegra Garden Place</h3>
                                            <p class="price"><span data-value="4670020" class="currency-convert">PHP
                                                    4,670,020</span> - <span data-value="13388520"
                                                    class="currency-convert">PHP 13,388,520</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/alta-vista-de-boracay">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Alta Vista de Boracay-featured-1549950192848-small.png')}}"
                                                data-src="{{asset('properties/Alta Vista de Boracay-featured-1549950192848-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Alta Vista de Boracay</h3>
                                            <p class="price"><span data-value="5487000" class="currency-convert">PHP
                                                    5,487,000</span> - <span data-value="9241000"
                                                    class="currency-convert">PHP 9,241,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/Anissa-Heights">
                                        <figure class="property-img"> <img class="ls-is-cached lazyloaded" src="{{asset('properties/Anissa Heights-header-1699188470261-large.jpg')}}"
                                                data-src="{{asset('properties/Anissa Heights-header-1699188470261-large.jpg')}}" alt=""> <span
                                                class="property-status circle-white"> <span
                                                    class="new icon-new"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Anissa Heights</h3>
                                            <p class="price"><span data-value="2951000" class="currency-convert">PHP
                                                    2,951,000</span> - <span data-value="3362400"
                                                    class="currency-convert">PHP 3,362,400</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/arista-place">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Arista Place - Featured-small.png')}}"
                                                data-src="{{asset('properties/Arista Place - Featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Arista Place</h3>
                                            <p class="price"><span data-value="4830000" class="currency-convert">PHP
                                                    4,830,000</span> - <span data-value="8230000"
                                                    class="currency-convert">PHP 8,230,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/astalla-residences">
                                        <figure class="property-img"> <img class=" lazyloaded" src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/coming-soon-featured-large.jpg')}}" alt=""> <span
                                                class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Astalla Residences</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/asteria-residences">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Asteria Residences - Featured-small.png')}}"
                                                data-src="{{asset('properties/Asteria Residences - Featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Asteria Residences</h3>
                                            <p class="price"><span data-value="5611000" class="currency-convert">PHP
                                                    5,611,000</span> - <span data-value="9592000"
                                                    class="currency-convert">PHP 9,592,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/belleza-towers">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Belleza Towers</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/bonifacio-heights-condominiums">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/bonifacio-heights-condominiums-featured-small.png')}}"
                                                data-src="{{asset('properties/bonifacio-heights-condominiums-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Bonifacio Heights Condominiums</h3>
                                            <p class="price"><span data-value="1382000" class="currency-convert">PHP
                                                    1,382,000</span> - <span data-value="4257000"
                                                    class="currency-convert">PHP 4,257,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/brio-tower">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Brio Tower Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Brio Tower Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Brio Tower</h3>
                                            <p class="price"><span data-value="5571000" class="currency-convert">PHP
                                                    5,571,000</span> - <span data-value="14479000"
                                                    class="currency-convert">PHP 14,479,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/bristle-ridge">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Bristle Ridge-featured-1644993053809-small.png')}}"
                                                data-src="{{asset('properties/Bristle Ridge-featured-1644993053809-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Bristle Ridge</h3>
                                            <p class="price"><span data-value="4722000" class="currency-convert">PHP
                                                    4,722,000</span> - <span data-value="13203000"
                                                    class="currency-convert">PHP 13,203,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/brixton-place">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/brixton-place-featured-small.png')}}"
                                                data-src="{{asset('properties/brixton-place-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Brixton Place</h3>
                                            <p class="price"><span data-value="5898000" class="currency-convert">PHP
                                                    5,898,000</span> - <span data-value="14622000"
                                                    class="currency-convert">PHP 14,622,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/calathea-place">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Calathea Place-featured-1623338090827-small.png')}}"
                                                data-src="{{asset('properties/Calathea Place-featured-1623338090827-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Calathea Place</h3>
                                            <p class="price"><span data-value="3987000" class="currency-convert">PHP
                                                    3,987,000</span> - <span data-value="5206000"
                                                    class="currency-convert">PHP 5,206,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/cameron-residences">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Cameron Residences-featured-1564977081437-small.png')}}"
                                                data-src="{{asset('properties/Cameron Residences-featured-1564977081437-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="uc icon-under-construction"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Cameron Residences</h3>
                                            <p class="price"><span data-value="4871000" class="currency-convert">PHP
                                                    4,871,000</span> - <span data-value="11874000"
                                                    class="currency-convert">PHP 11,874,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/cardea-terraces">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Cardea Terraces</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/cedar-crest">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/cedar-crest-featured-small.png')}}"
                                                data-src="{{asset('properties/cedar-crest-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Cedar Crest</h3>
                                            <p class="price"><span data-value="6363000"
                                                    class="currency-convert">PHP 6,363,000</span> - <span
                                                    data-value="10917000" class="currency-convert">PHP
                                                    10,917,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/centro-roces-residences">
                                        <figure class="property-img"> <img class=" lazyloaded" src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/coming-soon-featured-large.jpg')}}" alt=""> <span
                                                class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Centro Roces Residences</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/cypress-towers">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/cypress-towers-featured-small.png')}}"
                                                data-src="{{asset('properties/cypress-towers-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Cypress Towers</h3>
                                            <p class="price"><span data-value="3584000"
                                                    class="currency-convert">PHP 3,584,000</span> - <span
                                                    data-value="8207000" class="currency-convert">PHP
                                                    8,207,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/dansalan-gardens-condominiums">
                                        <figure class="property-img"> <img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Dansalan Gardens Condominiums - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Dansalan Gardens Condominiums - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Dansalan Gardens Condominiums</h3>
                                            <p class="price"><span data-value="5393000"
                                                    class="currency-convert">PHP 5,393,000</span> - <span
                                                    data-value="20022000" class="currency-convert">PHP
                                                    20,022,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/east-ortigas-mansions">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/East Ortigas Mansions-featured-small.png')}}"
                                                data-src="{{asset('properties/East Ortigas Mansions-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>East Ortigas Mansions</h3>
                                            <p class="price"><span data-value="4002000"
                                                    class="currency-convert">PHP 4,002,000</span> - <span
                                                    data-value="12320000" class="currency-convert">PHP
                                                    12,320,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/east-raya-gardens">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/east-raya-gardens-featured-small.png')}}"
                                                data-src="{{asset('properties/east-raya-gardens-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>East Raya Gardens</h3>
                                            <p class="price"><span data-value="4694000"
                                                    class="currency-convert">PHP 4,694,000</span> - <span
                                                    data-value="8891000" class="currency-convert">PHP
                                                    8,891,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/fairlane-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/fairlane-residences-featured-small.png')}}"
                                                data-src="{{asset('properties/fairlane-residences-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Fairlane Residences</h3>
                                            <p class="price"><span data-value="9212000"
                                                    class="currency-convert">PHP 9,212,000</span> - <span
                                                    data-value="16608000" class="currency-convert">PHP
                                                    16,608,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/fairway-terraces">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Fairway Terraces-featured-small.png')}}"
                                                data-src="{{asset('properties/Fairway Terraces-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Fairway Terraces</h3>
                                            <p class="price"><span data-value="5106000"
                                                    class="currency-convert">PHP 5,106,000</span> - <span
                                                    data-value="11729000" class="currency-convert">PHP
                                                    11,729,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/flair-towers">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/flair-towers-featured-small.png')}}"
                                                data-src="{{asset('properties/flair-towers-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Flair Towers</h3>
                                            <p class="price"><span data-value="5172000"
                                                    class="currency-convert">PHP 5,172,000</span> - <span
                                                    data-value="13488000" class="currency-convert">PHP
                                                    13,488,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/fortis-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/flair-towers-featured-small.png')}}"
                                                data-src="{{asset('properties/Fortis Residences-featured-1657091424326-small.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="uc icon-under-construction"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Fortis Residences</h3>
                                            <p class="price"><span data-value="13832000"
                                                    class="currency-convert">PHP 13,832,000</span> - <span
                                                    data-value="38596000" class="currency-convert">PHP
                                                    38,596,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/hampstead-garden-condominiums">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Hampstead Garden Condominiums-featured-1641957127309-small.png')}}"
                                                data-src="{{asset('properties/Hampstead Garden Condominiums-featured-1641957127309-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Hampstead Garden Condominiums</h3>
                                            <p class="price"><span data-value="0" class="currency-convert">PHP
                                                    0</span> - <span data-value="0" class="currency-convert">PHP
                                                    0</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/illumina-residences-manila">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/illumina-residences-manila-featured-small.png')}}"
                                                data-src="{{asset('properties/illumina-residences-manila-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Illumina Residences Manila</h3>
                                            <p class="price"><span data-value="3310000"
                                                    class="currency-convert">PHP 3,310,000</span> - <span
                                                    data-value="9817000" class="currency-convert">PHP
                                                    9,817,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/infina-towers">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/infina-towers-featured-small.png')}}"
                                                data-src="{{asset('properties/infina-towers-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Infina Towers</h3>
                                            <p class="price"><span data-value="2407000"
                                                    class="currency-convert">PHP 2,407,000</span> - <span
                                                    data-value="10202000" class="currency-convert">PHP
                                                    10,202,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/ivory-wood">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Ivory Wood - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Ivory Wood - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Ivory Wood</h3>
                                            <p class="price"><span data-value="6895000"
                                                    class="currency-convert">PHP 6,895,000</span> - <span
                                                    data-value="10330000" class="currency-convert">PHP
                                                    10,330,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/kai-garden-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Kai Garden Residences-featured-small.png')}}"
                                                data-src="{{asset('properties/Kai Garden Residences-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Kai Garden Residences</h3>
                                            <p class="price"><span data-value="5261000"
                                                    class="currency-convert">PHP 5,261,000</span> - <span
                                                    data-value="14263000" class="currency-convert">PHP
                                                    14,263,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/kalea-heights">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Kalea Heights</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/la-verti-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/La Verti Residences - Amenity Core-small.png')}}"
                                                data-src="{{asset('properties/La Verti Residences - Amenity Core-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>La Verti Residences</h3>
                                            <p class="price"><span data-value="4434000"
                                                    class="currency-convert">PHP 4,434,000</span> - <span
                                                    data-value="10640000" class="currency-convert">PHP
                                                    10,640,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/lakeview-manors">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/lakeview-manors-featured-large.png')}}"
                                                data-src="{{asset('properties/lakeview-manors-featured-large.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Lakeview Manors</h3>
                                            <p class="price"><span data-value="3179000"
                                                    class="currency-convert">PHP 3,179,000</span> - <span
                                                    data-value="10130000" class="currency-convert">PHP
                                                    10,130,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/levina-place">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/levina-place-featured-large.png')}}"
                                                data-src="{{asset('properties/levina-place-featured-large.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Levina Place</h3>
                                            <p class="price"><span data-value="4846000"
                                                    class="currency-convert">PHP 4,846,000</span> - <span
                                                    data-value="8207000" class="currency-convert">PHP
                                                    8,207,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/lisseo-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}" data-src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Lisseo Residences </h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/lucine-estates">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Lucine Estates</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/lumiere-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Lumiere Residences-featured-1552454212458-small.png')}}"
                                                data-src="{{asset('properties/Lumiere Residences-featured-1552454212458-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Lumiere Residences</h3>
                                            <p class="price"><span data-value="4864000"
                                                    class="currency-convert">PHP 4,864,000</span> - <span
                                                    data-value="13578000" class="currency-convert">PHP
                                                    13,578,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/lyre-garden-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/The Lyre Garden-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Lyre Garden Residences</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/magnolia-place">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/magnolia-place-featured-small.png')}}"
                                                data-src="{{asset('properties/magnolia-place-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Magnolia Place</h3>
                                            <p class="price"><span data-value="3849000"
                                                    class="currency-convert">PHP 3,849,000</span> - <span
                                                    data-value="7966000" class="currency-convert">PHP
                                                    7,966,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/mahogany-place-iii">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Mahogany Place III - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Mahogany Place III - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Mahogany Place III</h3>
                                            <p class="price"><span data-value="5625000"
                                                    class="currency-convert">PHP 5,625,000</span> - <span
                                                    data-value="61256000" class="currency-convert">PHP
                                                    61,256,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/maple-place">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Maple Place-featured-small.png')}}"
                                                data-src="{{asset('properties/Maple Place-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Maple Place</h3>
                                            <p class="price"><span data-value="7111000"
                                                    class="currency-convert">PHP 7,111,000</span> - <span
                                                    data-value="10466000" class="currency-convert">PHP
                                                    10,466,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/maricielo-villas">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/maricielo-villas-featured-small.png')}}"
                                                data-src="{{asset('properties/maricielo-villas-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Maricielo Villas</h3>
                                            <p class="price"><span data-value="4092000"
                                                    class="currency-convert">PHP 4,092,000</span> - <span
                                                    data-value="7154000" class="currency-convert">PHP
                                                    7,154,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/mayfield-park-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Mayfield Park Residences-header-1608106232210-large.png')}}"
                                                data-src="{{asset('properties/Mayfield Park Residences-header-1608106232210-large.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Mayfield Park Residences</h3>
                                            <p class="price"><span data-value="3325000"
                                                    class="currency-convert">PHP 3,325,000</span> - <span
                                                    data-value="6540000" class="currency-convert">PHP
                                                    6,540,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/mirea-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Mirea Residences - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Mirea Residences - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Mirea Residences</h3>
                                            <p class="price"><span data-value="5649000"
                                                    class="currency-convert">PHP 5,649,000</span> - <span
                                                    data-value="8995000" class="currency-convert">PHP
                                                    8,995,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/moncello-crest">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Moncello Crest</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/mulberry-place">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Mulberry Place-featured-1665479476736-small.jpg')}}"
                                                data-src="{{asset('properties/Mulberry Place-featured-1665479476736-small.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Mulberry Place</h3>
                                            <p class="price"><span data-value="6953000"
                                                    class="currency-convert">PHP 6,953,000</span> - <span
                                                    data-value="25337000" class="currency-convert">PHP
                                                    25,337,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/oak-harbor-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Oak Harbor Residences-featured-1618992922231-small.png')}}"
                                                data-src="{{asset('properties/Oak Harbor Residences-featured-1618992922231-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Oak Harbor Residences</h3>
                                            <p class="price"><span data-value="11888000"
                                                    class="currency-convert">PHP 11,888,000</span> - <span
                                                    data-value="56588000" class="currency-convert">PHP
                                                    56,588,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/ohana-place">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Ohana Place - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Ohana Place - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Ohana Place</h3>
                                            <p class="price"><span data-value="2867000"
                                                    class="currency-convert">PHP 2,867,000</span> - <span
                                                    data-value="8266000" class="currency-convert">PHP
                                                    8,266,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/olea-estates">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Olea Estates</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/one-castilla-place">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/One Castilla Place - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/One Castilla Place - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>One Castilla Place</h3>
                                            <p class="price"><span data-value="4704000"
                                                    class="currency-convert">PHP 4,704,000</span> - <span
                                                    data-value="11163000" class="currency-convert">PHP
                                                    11,163,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/outlook-ridge-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Outlook Ridge Residences - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Outlook Ridge Residences - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Outlook Ridge Residences</h3>
                                            <p class="price"><span data-value="3567000"
                                                    class="currency-convert">PHP 3,567,000</span> - <span
                                                    data-value="11040000" class="currency-convert">PHP
                                                    11,040,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/palm-grove">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Palm Grove - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Palm Grove - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Palm Grove</h3>
                                            <p class="price"><span data-value="4213000"
                                                    class="currency-convert">PHP 4,213,000</span> - <span
                                                    data-value="10420000" class="currency-convert">PHP
                                                    10,420,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/parama-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/Parama Residences - Default Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Parama Residences</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/prisma-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Prisma Residences - Featured Image-small (1).png')}}"
                                                data-src="{{asset('properties/Prisma Residences - Featured Image-small (1).png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Prisma Residences</h3>
                                            <p class="price"><span data-value="4562000"
                                                    class="currency-convert">PHP 4,562,000</span> - <span
                                                    data-value="12174000" class="currency-convert">PHP
                                                    12,174,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/rainbow-ridge">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Rainbow Ridge Condominiums-header-large.png')}}"
                                                data-src="{{asset('properties/Rainbow Ridge Condominiums-header-large.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Rainbow Ridge Condominiums</h3>
                                            <p class="price"><span data-value="1931000"
                                                    class="currency-convert">PHP 1,931,000</span> - <span
                                                    data-value="4481000" class="currency-convert">PHP
                                                    4,481,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/raya-garden-condominiums">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Raya Garden Condominiums-featured-1678763927392-small.jpg')}}"
                                                data-src="{{asset('properties/Raya Garden Condominiums-featured-1678763927392-small.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Raya Garden Condominiums</h3>
                                            <p class="price"><span data-value="3708000"
                                                    class="currency-convert">PHP 3,708,000</span> - <span
                                                    data-value="8210000" class="currency-convert">PHP
                                                    8,210,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/rhapsody-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/rhapsody-residences-featured-small.png')}}"
                                                data-src="{{asset('properties/rhapsody-residences-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Rhapsody Residences</h3>
                                            <p class="price"><span data-value="3952000"
                                                    class="currency-convert">PHP 3,952,000</span> - <span
                                                    data-value="10427000" class="currency-convert">PHP
                                                    10,427,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/riverfront-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/riverfront-residences-featured-small.png')}}"
                                                data-src="{{asset('properties/riverfront-residences-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Riverfront Residences</h3>
                                            <p class="price"><span data-value="4858000"
                                                    class="currency-convert">PHP 4,858,000</span> - <span
                                                    data-value="9493000" class="currency-convert">PHP
                                                    9,493,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/rosewood-pointe">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/rosewood-pointe-featured-small.png')}}"
                                                data-src="{{asset('properties/rosewood-pointe-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Rosewood Pointe</h3>
                                            <p class="price"><span data-value="4669000"
                                                    class="currency-convert">PHP 4,669,000</span> - <span
                                                    data-value="10410000" class="currency-convert">PHP
                                                    10,410,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/royal-palm-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Royal Palm Residences-header-1551339150770-large.png')}}"
                                                data-src="{{asset('properties/Royal Palm Residences-header-1551339150770-large.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Royal Palm Residences</h3>
                                            <p class="price"><span data-value="4618000"
                                                    class="currency-convert">PHP 4,618,000</span> - <span
                                                    data-value="11946000" class="currency-convert">PHP
                                                    11,946,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/sage-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Sage Residences-featured-1665474441997-small.jpg')}}"
                                                data-src="{{asset('properties/Sage Residences-featured-1665474441997-small.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="uc icon-under-construction"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Sage Residences</h3>
                                            <p class="price"><span data-value="6402000"
                                                    class="currency-convert">PHP 6,402,000</span> - <span
                                                    data-value="15604000" class="currency-convert">PHP
                                                    15,604,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/satori-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Satori Residences-featured-small.png')}}"
                                                data-src="{{asset('properties/Satori Residences-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Satori Residences</h3>
                                            <p class="price"><span data-value="4437000"
                                                    class="currency-convert">PHP 4,437,000</span> - <span
                                                    data-value="8376000" class="currency-convert">PHP
                                                    8,376,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/sheridan-towers">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Sheridan Towers-featured-1549001792509-small.png')}}"
                                                data-src="{{asset('properties/Sheridan Towers-featured-1549001792509-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Sheridan Towers</h3>
                                            <p class="price"><span data-value="5677000"
                                                    class="currency-convert">PHP 5,677,000</span> - <span
                                                    data-value="11590000" class="currency-convert">PHP
                                                    11,590,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/siena-park-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/siena-park-residences-featured-small.png')}}"
                                                data-src="{{asset('properties/siena-park-residences-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Siena Park Residences</h3>
                                            <p class="price"><span data-value="4790000"
                                                    class="currency-convert">PHP 4,790,000</span> - <span
                                                    data-value="8010000" class="currency-convert">PHP
                                                    8,010,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/sinclair-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}" data-src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Sinclair Residences</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/solmera-coast">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Solmera Coast-featured-1689760125122-small.jpg')}}"
                                                data-src="{{asset('properties/Solmera Coast-featured-1689760125122-small.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="new icon-new"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Solmera Coast</h3>
                                            <p class="price"><span data-value="6300000"
                                                    class="currency-convert">PHP 6,300,000</span> - <span
                                                    data-value="19035000" class="currency-convert">PHP
                                                    19,035,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/sonora-garden-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Sonora Garden Residences-featured-small.png')}}"
                                                data-src="{{asset('properties/Sonora Garden Residences-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="uc icon-under-construction"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Sonora Garden Residences</h3>
                                            <p class="price"><span data-value="4314000"
                                                    class="currency-convert">PHP 4,314,000</span> - <span
                                                    data-value="10615000" class="currency-convert">PHP
                                                    10,615,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/sorrel-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Sorrel Residences - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Sorrel Residences - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Sorrel Residences</h3>
                                            <p class="price"><span data-value="4167000"
                                                    class="currency-convert">PHP 4,167,000</span> - <span
                                                    data-value="8297000" class="currency-convert">PHP
                                                    8,297,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/sovanna-towers">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Sovanna Towers</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/spring-lane-homes">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Spring Lane Homes-featured-small.png')}}"
                                                data-src="{{asset('properties/Spring Lane Homes-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Spring Lane Homes</h3>
                                            <p class="price"><span data-value="812500"
                                                    class="currency-convert">PHP 812,500</span> - <span
                                                    data-value="3676000" class="currency-convert">PHP
                                                    3,676,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/stellar-place">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Stellar Place Roof deck-small.png')}}"
                                                data-src="{{asset('properties/Stellar Place Roof deck-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Stellar Place</h3>
                                            <p class="price"><span data-value="3954000"
                                                    class="currency-convert">PHP 3,954,000</span> - <span
                                                    data-value="9591000" class="currency-convert">PHP
                                                    9,591,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-amaryllis">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/The Amaryllis-featured-small.png')}}"
                                                data-src="{{asset('properties/The Amaryllis-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Amaryllis</h3>
                                            <p class="price"><span data-value="5106000"
                                                    class="currency-convert">PHP 5,106,000</span> - <span
                                                    data-value="14969000" class="currency-convert">PHP
                                                    14,969,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-aston-place">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Aston Residences featured-small.png')}}"
                                                data-src="{{asset('properties/Aston Residences featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="uc icon-under-construction"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Aston Place</h3>
                                            <p class="price"><span data-value="5963000"
                                                    class="currency-convert">PHP 5,963,000</span> - <span
                                                    data-value="13464000" class="currency-convert">PHP
                                                    13,464,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-atherton">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/The Atherton-featured-1654495936630-small.jpg')}}"
                                                data-src="{{asset('properties/The Atherton-featured-1654495936630-small.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Atherton</h3>
                                            <p class="price"><span data-value="4030000"
                                                    class="currency-convert">PHP 4,030,000</span> - <span
                                                    data-value="7968000" class="currency-convert">PHP
                                                    7,968,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-avalon-heights">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="cs icon-coming-soon"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Avalon Heights</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-birchwood">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/The Birchwood - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/The Birchwood - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Birchwood</h3>
                                            <p class="price"><span data-value="7150000"
                                                    class="currency-convert">PHP 7,150,000</span> - <span
                                                    data-value="10293000" class="currency-convert">PHP
                                                    10,293,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-calinea-tower">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/The Calinea Tower-featured-1674097981762-small.jpg')}}"
                                                data-src="{{asset('properties/The Calinea Tower-featured-1674097981762-small.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="uc icon-under-construction"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Calinea Tower</h3>
                                            <p class="price"><span data-value="5325000"
                                                    class="currency-convert">PHP 5,325,000</span> - <span
                                                    data-value="15098000" class="currency-convert">PHP
                                                    15,098,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-camden-place">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/The Camden Place-featured-1607329762211-small.png')}}"
                                                data-src="{{asset('properties/The Camden Place-featured-1607329762211-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="uc icon-under-construction"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Camden Place</h3>
                                            <p class="price"><span data-value="4799500"
                                                    class="currency-convert">PHP 4,799,500</span> - <span
                                                    data-value="9255000" class="currency-convert">PHP
                                                    9,255,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-celandine">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/The Celandine-featured-1648108191713-small.png')}}"
                                                data-src="{{asset('properties/The Celandine-featured-1648108191713-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Celandine</h3>
                                            <p class="price"><span data-value="3930000"
                                                    class="currency-convert">PHP 3,930,000</span> - <span
                                                    data-value="6928000" class="currency-convert">PHP
                                                    6,928,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-crestmont">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/The Crestmont-featured-1650348573129-small.png')}}"
                                                data-src="{{asset('properties/The Crestmont-featured-1650348573129-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="uc icon-under-construction"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Crestmont</h3>
                                            <p class="price"><span data-value="6271000"
                                                    class="currency-convert">PHP 6,271,000</span> - <span
                                                    data-value="15106000" class="currency-convert">PHP
                                                    15,106,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-erin-heights">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/The Erin Heights-featured-1646876431475-small.png')}}"
                                                data-src="{{asset('properties/The Erin Heights-featured-1646876431475-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="uc icon-under-construction"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Erin Heights</h3>
                                            <p class="price"><span data-value="4881000"
                                                    class="currency-convert">PHP 4,881,000</span> - <span
                                                    data-value="29842000" class="currency-convert">PHP
                                                    29,842,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/manors-celebrity-place">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/The Manors at Celebrity Place-header-1551335655048-large.png')}}"
                                                data-src="{{asset('properties/The Manors at Celebrity Place-header-1551335655048-large.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Manors at Celebrity Place</h3>
                                            <p class="price"><span data-value="3280000"
                                                    class="currency-convert">PHP 3,280,000</span> - <span
                                                    data-value="12959000" class="currency-convert">PHP
                                                    12,959,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-orabella">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/the-orabella-featured-small.png')}}"
                                                data-src="{{asset('properties/the-orabella-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Orabella</h3>
                                            <p class="price"><span data-value="4551000"
                                                    class="currency-convert">PHP 4,551,000</span> - <span
                                                    data-value="9952000" class="currency-convert">PHP
                                                    9,952,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-oriana">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/The Oriana-featured-1616731341431-small.png')}}"
                                                data-src="{{asset('properties/The Oriana-featured-1616731341431-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="uc icon-under-construction"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Oriana</h3>
                                            <p class="price"><span data-value="4407000"
                                                    class="currency-convert">PHP 4,407,000</span> - <span
                                                    data-value="9769000" class="currency-convert">PHP
                                                    9,769,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-redwoods">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/The Redwoods - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/The Redwoods - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Redwoods</h3>
                                            <p class="price"><span data-value="4000000"
                                                    class="currency-convert">PHP 4,000,000</span> - <span
                                                    data-value="8173000" class="currency-convert">PHP
                                                    8,173,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/the-valeron-tower">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="new icon-new"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>The Valeron Tower</h3>
                                            <p class="price"><span>NOT YET AVAILABLE</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/tivoli-garden-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Tivoli Garden Residences - Featured-small.png')}}"
                                                data-src="{{asset('properties/Tivoli Garden Residences - Featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Tivoli Garden Residences</h3>
                                            <p class="price"><span data-value="5118000"
                                                    class="currency-convert">PHP 5,118,000</span> - <span
                                                    data-value="15476000" class="currency-convert">PHP
                                                    15,476,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/torre-de-manila">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Torre De Manila-featured-1562641772520-small.png')}}"
                                                data-src="{{asset('properties/Torre De Manila-featured-1562641772520-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Torre De Manila</h3>
                                            <p class="price"><span data-value="5918000"
                                                    class="currency-convert">PHP 5,918,000</span> - <span
                                                    data-value="13205000" class="currency-convert">PHP
                                                    13,205,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/verawood-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Verawood Residences - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Verawood Residences - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Verawood Residences</h3>
                                            <p class="price"><span data-value="5122000"
                                                    class="currency-convert">PHP 5,122,000</span> - <span
                                                    data-value="9596000" class="currency-convert">PHP
                                                    9,596,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/verdon-parc">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/DMCI_Homes_Verdon_Parc-small.png')}}"
                                                data-src="{{asset('properties/DMCI_Homes_Verdon_Parc-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Verdon Parc</h3>
                                            <p class="price"><span data-value="4019000"
                                                    class="currency-convert">PHP 4,019,000</span> - <span
                                                    data-value="8763000" class="currency-convert">PHP
                                                    8,763,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/viera-residences">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Viera Residences - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Viera Residences - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Viera Residences</h3>
                                            <p class="price"><span data-value="4277000"
                                                    class="currency-convert">PHP 4,277,000</span> - <span
                                                    data-value="9594000" class="currency-convert">PHP
                                                    9,594,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/villa-alegre">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Villa Alegre Homes-featured-1667805126981-small.jpeg')}}"
                                                data-src="{{asset('properties/Villa Alegre Homes-featured-1667805126981-small.jpeg')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Villa Alegre Homes</h3>
                                            <p class="price"><span data-value="1359700"
                                                    class="currency-convert">PHP 1,359,700</span> - <span
                                                    data-value="8649900" class="currency-convert">PHP
                                                    8,649,900</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/vista-de-lago">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Vista De Lago-featured-small.png')}}"
                                                data-src="{{asset('properties/Vista De Lago-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Vista De Lago</h3>
                                            <p class="price"><span data-value="4195000"
                                                    class="currency-convert">PHP 4,195,000</span> - <span
                                                    data-value="9695000" class="currency-convert">PHP
                                                    9,695,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/willow-park-homes">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Willow Park Homes - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Willow Park Homes - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Willow Park Homes</h3>
                                            <p class="price"><span data-value="756000"
                                                    class="currency-convert">PHP 756,000</span> - <span
                                                    data-value="8547000" class="currency-convert">PHP
                                                    8,547,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/woodland-hills">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Woodland Hills-featured-small.png')}}"
                                                data-src="{{asset('properties/Woodland Hills-featured-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Woodland Hills</h3>
                                            <p class="price"><span data-value="634200"
                                                    class="currency-convert">PHP 634,200</span> - <span
                                                    data-value="10990000" class="currency-convert">PHP
                                                    10,990,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                            <li class="box-card">
                                <div class="property-item"> <a href="/zinnia-towers">
                                        <figure class="property-img"> <img class="lazyload"
                                                src="{{asset('properties/Zinnia Towers - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Zinnia Towers - Featured Image-small.png')}}"
                                                alt=""> <span class="property-status circle-white"> <span
                                                    class="rfo icon-RFO"></span> </span> </figure>
                                        <div class="property-detail">
                                            <h3>Zinnia Towers</h3>
                                            <p class="price"><span data-value="3760000"
                                                    class="currency-convert">PHP 3,760,000</span> - <span
                                                    data-value="9971000" class="currency-convert">PHP
                                                    9,971,000</span></p>
                                        </div>
                                    </a> </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="jq-close"></a>
                <div class="property-right-loc">

                    <h5>Other Locations</h5>
                    <ul id="sidebar-property-modal-location-list">
                        {{-- <li><a href="#" class="btn btn-round btn-ghost sidebar-location-all active"
                                data-location="all">View All</a></li> --}}

                    </ul>
                    <p>Can't see what your looking for?</p>
                    <a href="/prop" class="btn btn-round btn-small">View all <span> Properties</span></a>
                </div>
            </div>
        </div>

        <nav class="rightbar-nav animated fadeInRight visible" data-animation="fadeInRight" data-delay="700">
            <h2>Properties</h2>
            <div class="sec-active-text">
                <span>High Rise Condominiums</span>
                <div class="bullet-wrap">
                    <i class="bullet"></i>
                    <i class="bullet"></i>
                    <i class="bullet"></i>
                </div>
            </div>
            <ul>
                <li class="active"><a href="#high-condominiums">High Rise Condominiums</a></li>
                <li><a href="#mid-condominiums">Mid Rise Condominiums</a></li>
                <li><a href="#subdivisions">Subdivisions</a></li>
                <li><a href="#leisure-residence">Leisure Residences</a></li>
                <li><a href="#cities">Cities</a></li>
            </ul>
        </nav>


        <section id="main-wrapper">

            <section class="banner sec-pad wavy default" id="overview">
                <picture class="coverimage-img">
                    <source srcset="/images/hero-shd.png')}}" media="(min-width: 570px)">
                    <source srcset="/images/hero-shd.png')}}" media="(min-width: 320px)">
                    <img class=" ls-is-cached lazyloaded" src="/images/hero-shd.png')}}"
                        width="1440" height="330" alt="MDN"
                        style="width: 1026px; height: 235px; margin-top: 0px; margin-left: -325px;">
                </picture>
                <div class="banner-text">
                    <div class="container">
                        <h1>Properties</h1>
                    </div>
                </div>
            </section>


            <section class="sec-pad sec-default m-t-40 jq-section" id="high-condominiums">
                <div class="container">
                    <div class="property-list folio-map">
                        <div class="sec-head">
                            <h2 class="sec-title">High Rise Condominiums</h2>
                            <p>Find your perfect home within striking distance of the metro’s bustling business and
                                commercial centers at DMCI Homes’ high-rise residences.</p>
                        </div>
                        <ul class="flex">
                            <li class="p-card box-card" data-id="105" data-city="Taguig" data-min="8311000.00"
                                data-max="19570000.00" data-name="Alder Residences"><a href="#"
                                    class="icon-share pi-share" data-url="alder-residences"><span>Share</span></a>
                                <div class="property-item"><a href="alder-residences">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Alder Residences-featured image-small.png')}}"
                                                data-src="{{asset('properties/Alder Residences-featured image-small.png')}}"
                                                alt="Alder Residences-featured image" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home uc icon-under-construction"></span></span>
                                        </figure>
                                        <div class="content">
                                            <h3>Alder Residences</h3>
                                            <p>Taguig</p>
                                            <p class="property-type"><span class="box-type ">2BR</span><span
                                                    class="box-type not-available">3BR</span><span
                                                    class="box-type not-available">4BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="8311000.00">PHP 8,311,000</span> - <span
                                                    class="currency-convert" data-value="19570000.00">PHP
                                                    19,570,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="alder-residences"></a><a href="#"
                                            class="btn-compare" data-id="105" data-name="Alder Residences"
                                            data-city="Taguig">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="88" data-city="Pasig" data-min="4670020.00"
                                data-max="13388520.00" data-name="Allegra Garden Place"><a href="#"
                                    class="icon-share pi-share"
                                    data-url="allegra-garden-place"><span>Share</span></a>
                                <div class="property-item"><a href="allegra-garden-place">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Balcony View - Allegra Garden Place-small.png')}}"
                                                data-src="{{asset('properties/Balcony View - Allegra Garden Place-small.png')}}"
                                                alt="Balcony View - Allegra Garden Place" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home uc icon-under-construction"></span></span>
                                        </figure>
                                        <div class="content">
                                            <h3>Allegra Garden Place</h3>
                                            <p>Pasig</p>
                                            <p class="property-type"><span class="box-type ">1BR</span><span
                                                    class="box-type ">2BR</span><span
                                                    class="box-type ">3BR</span><span
                                                    class="box-type ">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4670020.00">PHP 4,670,020</span> - <span
                                                    class="currency-convert" data-value="13388520.00">PHP
                                                    13,388,520</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="allegra-garden-place"></a><a
                                            href="#" class="btn-compare" data-id="88"
                                            data-name="Allegra Garden Place" data-city="Pasig">COMPARE WITH OTHER
                                            PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="119" data-city="Pasay" data-min="2951000.00"
                                data-max="3362400.00" data-name="Anissa Heights"><a href="#"
                                    class="icon-share pi-share" data-url="Anissa-Heights"><span>Share</span></a>
                                <div class="property-item"><a href="Anissa-Heights">
                                        <figure class="property-img"><img class=" lazyloaded" src=""
                                                data-src="" alt="" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home new icon-new"></span></span></figure>
                                        <div class="content">
                                            <h3>Anissa Heights</h3>
                                            <p>Pasay</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="2951000.00">PHP 2,951,000</span> - <span
                                                    class="currency-convert" data-value="3362400.00">PHP
                                                    3,362,400</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="Anissa-Heights"></a><a href="#"
                                            class="btn-compare" data-id="119" data-name="Anissa Heights"
                                            data-city="Pasay">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="7" data-city="Makati" data-min="5571000.00"
                                data-max="14479000.00" data-name="Brio Tower"><a href="#"
                                    class="icon-share pi-share" data-url="brio-tower"><span>Share</span></a>
                                <div class="property-item"><a href="brio-tower">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Brio Tower Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Brio Tower Featured Image-small.png')}}"
                                                alt="Brio Tower Featured Image" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Brio Tower</h3>
                                            <p>Makati</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5571000.00">PHP 5,571,000</span> - <span
                                                    class="currency-convert" data-value="14479000.00">PHP
                                                    14,479,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="brio-tower"></a><a href="#"
                                            class="btn-compare" data-id="7" data-name="Brio Tower"
                                            data-city="Makati">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="10" data-city="Pasig" data-min="5898000.00"
                                data-max="14622000.00" data-name="Brixton Place"><a href="#"
                                    class="icon-share pi-share" data-url="brixton-place"><span>Share</span></a>
                                <div class="property-item"><a href="brixton-place">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/brixton-place-featured-small.png')}}"
                                                data-src="{{asset('properties/brixton-place-featured-small.png')}}"
                                                alt="" width="220" height="150"><span
                                                class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Brixton Place</h3>
                                            <p>Pasig</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5898000.00">PHP 5,898,000</span> - <span
                                                    class="currency-convert" data-value="14622000.00">PHP
                                                    14,622,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="brixton-place"></a><a href="#"
                                            class="btn-compare" data-id="10" data-name="Brixton Place"
                                            data-city="Pasig">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="84" data-city="Quezon City"
                                data-min="4871000.00" data-max="11874000.00" data-name="Cameron Residences"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="cameron-residences"><span>Share</span></a>
                                <div class="property-item"><a href="cameron-residences">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Cameron Residences-featured-1564977081437-small.png')}}"
                                                data-src="{{asset('properties/Cameron Residences-featured-1564977081437-small.png')}}"
                                                alt="Cameron Residences-featured-1564977081437" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home uc icon-under-construction"></span></span>
                                        </figure>
                                        <div class="content">
                                            <h3>Cameron Residences</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4871000.00">PHP 4,871,000</span> - <span
                                                    class="currency-convert" data-value="11874000.00">PHP
                                                    11,874,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="cameron-residences"></a><a href="#"
                                            class="btn-compare" data-id="84" data-name="Cameron Residences"
                                            data-city="Quezon City">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="14" data-city="Taguig" data-min="3584000.00"
                                data-max="8207000.00" data-name="Cypress Towers"><a href="#"
                                    class="icon-share pi-share" data-url="cypress-towers"><span>Share</span></a>
                                <div class="property-item"><a href="cypress-towers">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/cypress-towers-featured-small.png')}}"
                                                data-src="{{asset('properties/cypress-towers-featured-small.png')}}"
                                                alt="" width="220" height="150"><span
                                                class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Cypress Towers</h3>
                                            <p>Taguig</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span><span
                                                    class="box-type not-available">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="3584000.00">PHP 3,584,000</span> - <span
                                                    class="currency-convert" data-value="8207000.00">PHP
                                                    8,207,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="cypress-towers"></a><a href="#"
                                            class="btn-compare" data-id="14" data-name="Cypress Towers"
                                            data-city="Taguig">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="15" data-city="Mandaluyong"
                                data-min="5393000.00" data-max="20022000.00"
                                data-name="Dansalan Gardens Condominiums"><a href="#"
                                    class="icon-share pi-share"
                                    data-url="dansalan-gardens-condominiums"><span>Share</span></a>
                                <div class="property-item"><a href="dansalan-gardens-condominiums">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Dansalan Gardens Condominiums - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Dansalan Gardens Condominiums - Featured Image-small.png')}}"
                                                alt="Dansalan Gardens Condominiums - Featured Image" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Dansalan Gardens Condominiums</h3>
                                            <p>Mandaluyong</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5393000.00">PHP 5,393,000</span> - <span
                                                    class="currency-convert" data-value="20022000.00">PHP
                                                    20,022,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="dansalan-gardens-condominiums"></a><a
                                            href="#" class="btn-compare" data-id="15"
                                            data-name="Dansalan Gardens Condominiums"
                                            data-city="Mandaluyong">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="17" data-city="Pasig" data-min="9212000.00"
                                data-max="16608000.00" data-name="Fairlane Residences"><a href="#"
                                    class="icon-share pi-share"
                                    data-url="fairlane-residences"><span>Share</span></a>
                                <div class="property-item"><a href="fairlane-residences">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/fairlane-residences-featured-small.png')}}"
                                                data-src="{{asset('properties/fairlane-residences-featured-small.png')}}"
                                                alt="" width="220" height="150"><span
                                                class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Fairlane Residences</h3>
                                            <p>Pasig</p>
                                            <p class="property-type"><span class="box-type ">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="9212000.00">PHP 9,212,000</span> - <span
                                                    class="currency-convert" data-value="16608000.00">PHP
                                                    16,608,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="fairlane-residences"></a><a
                                            href="#" class="btn-compare" data-id="17"
                                            data-name="Fairlane Residences" data-city="Pasig">COMPARE WITH OTHER
                                            PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="21" data-city="Pasay" data-min="5106000.00"
                                data-max="11729000.00" data-name="Fairway Terraces"><a href="#"
                                    class="icon-share pi-share" data-url="fairway-terraces"><span>Share</span></a>
                                <div class="property-item"><a href="fairway-terraces">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Fairway Terraces-featured-small.png')}}"
                                                data-src="{{asset('properties/Fairway Terraces-featured-small.png')}}"
                                                alt="Fairway Terraces-featured" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Fairway Terraces</h3>
                                            <p>Pasay</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5106000.00">PHP 5,106,000</span> - <span
                                                    class="currency-convert" data-value="11729000.00">PHP
                                                    11,729,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="fairway-terraces"></a><a href="#"
                                            class="btn-compare" data-id="21" data-name="Fairway Terraces"
                                            data-city="Pasay">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="20" data-city="Mandaluyong"
                                data-min="5172000.00" data-max="13488000.00" data-name="Flair Towers"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="flair-towers"><span>Share</span></a>
                                <div class="property-item"><a href="flair-towers">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/flair-towers-featured-small.png')}}"
                                                data-src="{{asset('properties/flair-towers-featured-small.png')}}"
                                                alt="" width="220" height="150"><span
                                                class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Flair Towers</h3>
                                            <p>Mandaluyong</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span><span
                                                    class="box-type not-available">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5172000.00">PHP 5,172,000</span> - <span
                                                    class="currency-convert" data-value="13488000.00">PHP
                                                    13,488,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="flair-towers"></a><a href="#"
                                            class="btn-compare" data-id="20" data-name="Flair Towers"
                                            data-city="Mandaluyong">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="103" data-city="Makati" data-min="13832000.00"
                                data-max="38596000.00" data-name="Fortis Residences"><a href="#"
                                    class="icon-share pi-share" data-url="fortis-residences"><span>Share</span></a>
                                <div class="property-item"><a href="fortis-residences">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Fortis Residences-featured-1657091424326-small.jpg')}}"
                                                data-src="{{asset('properties/Fortis Residences-featured-1657091424326-small.jpg')}}"
                                                alt="Fortis Residences-featured-1657091424326" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home new icon-new"></span></span></figure>
                                        <div class="content">
                                            <h3>Fortis Residences</h3>
                                            <p>Makati</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type ">2BR</span><span class="box-type ">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="13832000.00">PHP 13,832,000</span> - <span
                                                    class="currency-convert" data-value="38596000.00">PHP
                                                    38,596,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="fortis-residences"></a><a href="#"
                                            class="btn-compare" data-id="103" data-name="Fortis Residences"
                                            data-city="Makati">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="82" data-city="Manila" data-min=""
                                data-max="" data-name="Hampstead Garden Condominiums"><a href="#"
                                    class="icon-share pi-share"
                                    data-url="hampstead-garden-condominiums"><span>Share</span></a>
                                <div class="property-item"><a href="hampstead-garden-condominiums">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Hampstead Garden Condominiums-featured-1641957127309-small.png')}}"
                                                data-src="{{asset('properties/Hampstead Garden Condominiums-featured-1641957127309-small.png')}}"
                                                alt="Hampstead Garden Condominiums-featured-1641957127309"
                                                width="220" height="150"><span
                                                class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Hampstead Garden Condominiums</h3>
                                            <p>Manila</p>
                                            <p class="property-type"></p>
                                            <p class="price"><span class="currency-convert" data-value="">PHP
                                                    0</span> - <span class="currency-convert" data-value="">PHP
                                                    0</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="hampstead-garden-condominiums"></a><a
                                            href="#" class="btn-compare" data-id="82"
                                            data-name="Hampstead Garden Condominiums" data-city="Manila">COMPARE
                                            WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="23" data-city="Manila" data-min="3310000.00"
                                data-max="9817000.00" data-name="Illumina Residences Manila"><a href="#"
                                    class="icon-share pi-share"
                                    data-url="illumina-residences-manila"><span>Share</span></a>
                                <div class="property-item"><a href="illumina-residences-manila">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/illumina-residences-manila-featured-small.png')}}"
                                                data-src="{{asset('properties/illumina-residences-manila-featured-small.png')}}"
                                                alt="" width="220" height="150"><span
                                                class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Illumina Residences Manila</h3>
                                            <p>Manila</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span><span
                                                    class="box-type not-available">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="3310000.00">PHP 3,310,000</span> - <span
                                                    class="currency-convert" data-value="9817000.00">PHP
                                                    9,817,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="illumina-residences-manila"></a><a
                                            href="#" class="btn-compare" data-id="23"
                                            data-name="Illumina Residences Manila" data-city="Manila">COMPARE WITH
                                            OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="22" data-city="Quezon City"
                                data-min="2407000.00" data-max="10202000.00" data-name="Infina Towers"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="infina-towers"><span>Share</span></a>
                                <div class="property-item"><a href="infina-towers">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/infina-towers-featured-small.png')}}"
                                                data-src="{{asset('properties/infina-towers-featured-small.png')}}"
                                                alt="" width="220" height="150"><span
                                                class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Infina Towers</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="2407000.00">PHP 2,407,000</span> - <span
                                                    class="currency-convert" data-value="10202000.00">PHP
                                                    10,202,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="infina-towers"></a><a href="#"
                                            class="btn-compare" data-id="22" data-name="Infina Towers"
                                            data-city="Quezon City">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="25" data-city="Mandaluyong"
                                data-min="5261000.00" data-max="14263000.00" data-name="Kai Garden Residences"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="kai-garden-residences"><span>Share</span></a>
                                <div class="property-item"><a href="kai-garden-residences">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Kai Garden Residences-featured-small.png')}}"
                                                data-src="{{asset('properties/Kai Garden Residences-featured-small.png')}}"
                                                alt="Kai Garden Residences-featured" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Kai Garden Residences</h3>
                                            <p>Mandaluyong</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type ">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5261000.00">PHP 5,261,000</span> - <span
                                                    class="currency-convert" data-value="14263000.00">PHP
                                                    14,263,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="kai-garden-residences"></a><a
                                            href="#" class="btn-compare" data-id="25"
                                            data-name="Kai Garden Residences" data-city="Mandaluyong">COMPARE WITH
                                            OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="28" data-city="Pasay" data-min="4434000.00"
                                data-max="10640000.00" data-name="La Verti Residences"><a href="#"
                                    class="icon-share pi-share"
                                    data-url="la-verti-residences"><span>Share</span></a>
                                <div class="property-item"><a href="la-verti-residences">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/La Verti Residences - Amenity Core-small.png')}}"
                                                data-src="{{asset('properties/La Verti Residences - Amenity Core-small.png')}}"
                                                alt="La Verti Residences - Amenity Core" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>La Verti Residences</h3>
                                            <p>Pasay</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span><span
                                                    class="box-type not-available">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4434000.00">PHP 4,434,000</span> - <span
                                                    class="currency-convert" data-value="10640000.00">PHP
                                                    10,640,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="la-verti-residences"></a><a
                                            href="#" class="btn-compare" data-id="28"
                                            data-name="La Verti Residences" data-city="Pasay">COMPARE WITH OTHER
                                            PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="27" data-city="Pasig" data-min="4864000.00"
                                data-max="13578000.00" data-name="Lumiere Residences"><a href="#"
                                    class="icon-share pi-share" data-url="lumiere-residences"><span>Share</span></a>
                                <div class="property-item"><a href="lumiere-residences">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Lumiere Residences-featured-1552454212458-small.png')}}"
                                                data-src="{{asset('properties/Lumiere Residences-featured-1552454212458-small.png')}}"
                                                alt="Lumiere Residences-featured-1552454212458" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Lumiere Residences</h3>
                                            <p>Pasig</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4864000.00">PHP 4,864,000</span> - <span
                                                    class="currency-convert" data-value="13578000.00">PHP
                                                    13,578,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="lumiere-residences"></a><a href="#"
                                            class="btn-compare" data-id="27" data-name="Lumiere Residences"
                                            data-city="Pasig">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="36" data-city="Quezon City"
                                data-min="4704000.00" data-max="11163000.00" data-name="One Castilla Place"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="one-castilla-place"><span>Share</span></a>
                                <div class="property-item"><a href="one-castilla-place">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/One Castilla Place - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/One Castilla Place - Featured Image-small.png')}}"
                                                alt="One Castilla Place - Featured Image" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>One Castilla Place</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4704000.00">PHP 4,704,000</span> - <span
                                                    class="currency-convert" data-value="11163000.00">PHP
                                                    11,163,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="one-castilla-place"></a><a href="#"
                                            class="btn-compare" data-id="36" data-name="One Castilla Place"
                                            data-city="Quezon City">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="43" data-city="Pasig" data-min="4562000.00"
                                data-max="12174000.00" data-name="Prisma Residences"><a href="#"
                                    class="icon-share pi-share" data-url="prisma-residences"><span>Share</span></a>
                                <div class="property-item"><a href="prisma-residences">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Prisma Residences - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Prisma Residences - Featured Image-small.png')}}"
                                                alt="Prisma Residences - Featured Image" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Prisma Residences</h3>
                                            <p>Pasig</p>
                                            <p class="property-type"><span class="box-type ">1BR</span><span
                                                    class="box-type ">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4562000.00">PHP 4,562,000</span> - <span
                                                    class="currency-convert" data-value="12174000.00">PHP
                                                    12,174,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="prisma-residences"></a><a href="#"
                                            class="btn-compare" data-id="43" data-name="Prisma Residences"
                                            data-city="Pasig">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="46" data-city="Parañaque"
                                data-min="3708000.00" data-max="8210000.00" data-name="Raya Garden Condominiums">
                                <a href="#" class="icon-share pi-share"
                                    data-url="raya-garden-condominiums"><span>Share</span></a>
                                <div class="property-item"><a href="raya-garden-condominiums">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Raya Garden Condominiums-featured-1678763927392-small.jpg')}}"
                                                data-src="{{asset('properties/Raya Garden Condominiums-featured-1678763927392-small.jpg')}}"
                                                alt="Raya Garden Condominiums-featured-1678763927392" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Raya Garden Condominiums</h3>
                                            <p>Parañaque</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span><span
                                                    class="box-type not-available">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="3708000.00">PHP 3,708,000</span> - <span
                                                    class="currency-convert" data-value="8210000.00">PHP
                                                    8,210,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="raya-garden-condominiums"></a><a
                                            href="#" class="btn-compare" data-id="46"
                                            data-name="Raya Garden Condominiums" data-city="Parañaque">COMPARE WITH
                                            OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="73" data-city="Taguig" data-min="4669000.00"
                                data-max="10410000.00" data-name="Rosewood Pointe"><a href="#"
                                    class="icon-share pi-share" data-url="rosewood-pointe"><span>Share</span></a>
                                <div class="property-item"><a href="rosewood-pointe">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/rosewood-pointe-featured-small.png')}}"
                                                data-src="{{asset('properties/rosewood-pointe-featured-small.png')}}"
                                                alt="" width="220" height="150"><span
                                                class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Rosewood Pointe</h3>
                                            <p>Taguig</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span><span
                                                    class="box-type not-available">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4669000.00">PHP 4,669,000</span> - <span
                                                    class="currency-convert" data-value="10410000.00">PHP
                                                    10,410,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="rosewood-pointe"></a><a href="#"
                                            class="btn-compare" data-id="73" data-name="Rosewood Pointe"
                                            data-city="Taguig">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="75" data-city="Mandaluyong"
                                data-min="6402000.00" data-max="15604000.00" data-name="Sage Residences"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="sage-residences"><span>Share</span></a>
                                <div class="property-item"><a href="sage-residences">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Sage Residences-featured-1665474441997-small.jpg')}}"
                                                data-src="{{asset('properties/Sage Residences-featured-1665474441997-small.jpg')}}"
                                                alt="Sage Residences-featured-1665474441997" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home uc icon-under-construction"></span></span>
                                        </figure>
                                        <div class="content">
                                            <h3>Sage Residences</h3>
                                            <p>Mandaluyong</p>
                                            <p class="property-type"><span class="box-type ">1BR</span><span
                                                    class="box-type ">2BR</span><span
                                                    class="box-type not-available">3BR</span><span
                                                    class="box-type ">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="6402000.00">PHP 6,402,000</span> - <span
                                                    class="currency-convert" data-value="15604000.00">PHP
                                                    15,604,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="sage-residences"></a><a href="#"
                                            class="btn-compare" data-id="75" data-name="Sage Residences"
                                            data-city="Mandaluyong">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="53" data-city="Pasig" data-min="4437000.00"
                                data-max="8376000.00" data-name="Satori Residences"><a href="#"
                                    class="icon-share pi-share" data-url="satori-residences"><span>Share</span></a>
                                <div class="property-item"><a href="satori-residences">
                                        <figure class="property-img"><img class=" ls-is-cached lazyloaded"
                                                src="{{asset('properties/Satori Residences-featured-small.png')}}"
                                                data-src="{{asset('properties/Satori Residences-featured-small.png')}}"
                                                alt="Satori Residences-featured" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Satori Residences</h3>
                                            <p>Pasig</p>
                                            <p class="property-type"><span class="box-type ">1BR</span><span
                                                    class="box-type ">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4437000.00">PHP 4,437,000</span> - <span
                                                    class="currency-convert" data-value="8376000.00">PHP
                                                    8,376,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="satori-residences"></a><a href="#"
                                            class="btn-compare" data-id="53" data-name="Satori Residences"
                                            data-city="Pasig">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="57" data-city="Pasig" data-min="5677000.00"
                                data-max="11590000.00" data-name="Sheridan Towers"><a href="#"
                                    class="icon-share pi-share" data-url="sheridan-towers"><span>Share</span></a>
                                <div class="property-item"><a href="sheridan-towers">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/Sheridan Towers-featured-1549001792509-small.png')}}"
                                                data-src="{{asset('properties/Sheridan Towers-featured-1549001792509-small.png')}}"
                                                alt="Sheridan Towers-featured-1549001792509" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Sheridan Towers</h3>
                                            <p>Pasig</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5677000.00">PHP 5,677,000</span> - <span
                                                    class="currency-convert" data-value="11590000.00">PHP
                                                    11,590,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="sheridan-towers"></a><a href="#"
                                            class="btn-compare" data-id="57" data-name="Sheridan Towers"
                                            data-city="Pasig">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="89" data-city="Las Piñas"
                                data-min="4314000.00" data-max="10615000.00" data-name="Sonora Garden Residences">
                                <a href="#" class="icon-share pi-share"
                                    data-url="sonora-garden-residences"><span>Share</span></a>
                                <div class="property-item"><a href="sonora-garden-residences">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/Sonora Garden Residences-featured-small.png')}}"
                                                data-src="{{asset('properties/Sonora Garden Residences-featured-small.png')}}"
                                                alt="Sonora Garden Residences-featured" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home uc icon-under-construction"></span></span>
                                        </figure>
                                        <div class="content">
                                            <h3>Sonora Garden Residences</h3>
                                            <p>Las Piñas</p>
                                            <p class="property-type"><span class="box-type ">1BR</span><span
                                                    class="box-type ">2BR</span><span class="box-type ">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4314000.00">PHP 4,314,000</span> - <span
                                                    class="currency-convert" data-value="10615000.00">PHP
                                                    10,615,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="sonora-garden-residences"></a><a
                                            href="#" class="btn-compare" data-id="89"
                                            data-name="Sonora Garden Residences" data-city="Las Piñas">COMPARE WITH
                                            OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="55" data-city="Manila" data-min="4167000.00"
                                data-max="8297000.00" data-name="Sorrel Residences"><a href="#"
                                    class="icon-share pi-share" data-url="sorrel-residences"><span>Share</span></a>
                                <div class="property-item"><a href="sorrel-residences">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/Sorrel Residences - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Sorrel Residences - Featured Image-small.png')}}"
                                                alt="Sorrel Residences - Featured Image" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Sorrel Residences</h3>
                                            <p>Manila</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span><span
                                                    class="box-type not-available">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4167000.00">PHP 4,167,000</span> - <span
                                                    class="currency-convert" data-value="8297000.00">PHP
                                                    8,297,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="sorrel-residences"></a><a href="#"
                                            class="btn-compare" data-id="55" data-name="Sorrel Residences"
                                            data-city="Manila">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="54" data-city="Quezon City"
                                data-min="3954000.00" data-max="9591000.00" data-name="Stellar Place"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="stellar-place"><span>Share</span></a>
                                <div class="property-item"><a href="stellar-place">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/Stellar Place Roof deck-small.png')}}"
                                                data-src="{{asset('properties/Stellar Place Roof deck-small.png')}}"
                                                alt="Stellar Place Roof deck" width="220" height="150"><span
                                                class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Stellar Place</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span><span
                                                    class="box-type not-available">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="3954000.00">PHP 3,954,000</span> - <span
                                                    class="currency-convert" data-value="9591000.00">PHP
                                                    9,591,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="stellar-place"></a><a href="#"
                                            class="btn-compare" data-id="54" data-name="Stellar Place"
                                            data-city="Quezon City">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="58" data-city="Quezon City"
                                data-min="5106000.00" data-max="14969000.00" data-name="The Amaryllis"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="the-amaryllis"><span>Share</span></a>
                                <div class="property-item"><a href="the-amaryllis">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/The Amaryllis-featured-small.png')}}"
                                                data-src="{{asset('properties/The Amaryllis-featured-small.png')}}"
                                                alt="The Amaryllis-featured" width="220" height="150"><span
                                                class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>The Amaryllis</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span><span
                                                    class="box-type not-available">4BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5106000.00">PHP 5,106,000</span> - <span
                                                    class="currency-convert" data-value="14969000.00">PHP
                                                    14,969,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="the-amaryllis"></a><a href="#"
                                            class="btn-compare" data-id="58" data-name="The Amaryllis"
                                            data-city="Quezon City">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="69" data-city="Pasay" data-min="5963000.00"
                                data-max="13464000.00" data-name="The Aston Place"><a href="#"
                                    class="icon-share pi-share" data-url="the-aston-place"><span>Share</span></a>
                                <div class="property-item"><a href="the-aston-place">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/Aston Residences featured-small.png')}}"
                                                data-src="{{asset('properties/Aston Residences featured-small.png')}}"
                                                alt="Aston Residences featured" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home uc icon-under-construction"></span></span>
                                        </figure>
                                        <div class="content">
                                            <h3>The Aston Place</h3>
                                            <p>Pasay</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type ">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5963000.00">PHP 5,963,000</span> - <span
                                                    class="currency-convert" data-value="13464000.00">PHP
                                                    13,464,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="the-aston-place"></a><a href="#"
                                            class="btn-compare" data-id="69" data-name="The Aston Place"
                                            data-city="Pasay">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="5" data-city="Parañaque"
                                data-min="4030000.00" data-max="7968000.00" data-name="The Atherton"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="the-atherton"><span>Share</span></a>
                                <div class="property-item"><a href="the-atherton">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/The Atherton-featured-1654495936630-small.jpg')}}"
                                                data-src="{{asset('properties/The Atherton-featured-1654495936630-small.jpg')}}"
                                                alt="The Atherton-featured-1654495936630" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>The Atherton</h3>
                                            <p>Parañaque</p>
                                            <p class="property-type"><span class="box-type ">1BR</span><span
                                                    class="box-type ">2BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4030000.00">PHP 4,030,000</span> - <span
                                                    class="currency-convert" data-value="7968000.00">PHP
                                                    7,968,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="the-atherton"></a><a href="#"
                                            class="btn-compare" data-id="5" data-name="The Atherton"
                                            data-city="Parañaque">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="117" data-city="Caloocan"
                                data-min="5325000.00" data-max="15098000.00" data-name="The Calinea Tower"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="the-calinea-tower"><span>Share</span></a>
                                <div class="property-item"><a href="the-calinea-tower">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/The Calinea Tower-featured-1674097981762-small.jpg')}}"
                                                data-src="{{asset('properties/The Calinea Tower-featured-1674097981762-small.jpg')}}"
                                                alt="The Calinea Tower-featured-1674097981762" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home uc icon-under-construction"></span></span>
                                        </figure>
                                        <div class="content">
                                            <h3>The Calinea Tower</h3>
                                            <p>Caloocan</p>
                                            <p class="property-type"><span class="box-type ">1BR</span><span
                                                    class="box-type ">2BR</span><span
                                                    class="box-type ">3BR</span><span
                                                    class="box-type ">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5325000.00">PHP 5,325,000</span> - <span
                                                    class="currency-convert" data-value="15098000.00">PHP
                                                    15,098,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="the-calinea-tower"></a><a href="#"
                                            class="btn-compare" data-id="117" data-name="The Calinea Tower"
                                            data-city="Caloocan">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="83" data-city="Manila" data-min="4799500.00"
                                data-max="9255000.00" data-name="The Camden Place"><a href="#"
                                    class="icon-share pi-share" data-url="the-camden-place"><span>Share</span></a>
                                <div class="property-item"><a href="the-camden-place">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/The Camden Place-featured-1607329762211-small.png')}}"
                                                data-src="{{asset('properties/The Camden Place-featured-1607329762211-small.png')}}"
                                                alt="The Camden Place-featured-1607329762211" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home uc icon-under-construction"></span></span>
                                        </figure>
                                        <div class="content">
                                            <h3>The Camden Place</h3>
                                            <p>Manila</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4799500.00">PHP 4,799,500</span> - <span
                                                    class="currency-convert" data-value="9255000.00">PHP
                                                    9,255,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="the-camden-place"></a><a href="#"
                                            class="btn-compare" data-id="83" data-name="The Camden Place"
                                            data-city="Manila">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="12" data-city="Quezon City"
                                data-min="3930000.00" data-max="6928000.00" data-name="The Celandine"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="the-celandine"><span>Share</span></a>
                                <div class="property-item"><a href="the-celandine">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/The Celandine-featured-1648108191713-small.png')}}"
                                                data-src="{{asset('properties/The Celandine-featured-1648108191713-small.png')}}"
                                                alt="The Celandine-featured-1648108191713" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>The Celandine</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="3930000.00">PHP 3,930,000</span> - <span
                                                    class="currency-convert" data-value="6928000.00">PHP
                                                    6,928,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="the-celandine"></a><a href="#"
                                            class="btn-compare" data-id="12" data-name="The Celandine"
                                            data-city="Quezon City">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="74" data-city="Quezon City"
                                data-min="6271000.00" data-max="15106000.00" data-name="The Crestmont"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="the-crestmont"><span>Share</span></a>
                                <div class="property-item"><a href="the-crestmont">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/The Crestmont-featured-1650348573129-small.png')}}"
                                                data-src="{{asset('properties/The Crestmont-featured-1650348573129-small.png')}}"
                                                alt="The Crestmont-featured-1650348573129" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home uc icon-under-construction"></span></span>
                                        </figure>
                                        <div class="content">
                                            <h3>The Crestmont</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type ">2BR</span><span class="box-type ">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="6271000.00">PHP 6,271,000</span> - <span
                                                    class="currency-convert" data-value="15106000.00">PHP
                                                    15,106,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="the-crestmont"></a><a href="#"
                                            class="btn-compare" data-id="74" data-name="The Crestmont"
                                            data-city="Quezon City">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="113" data-city="Quezon City"
                                data-min="4881000.00" data-max="29842000.00" data-name="The Erin Heights"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="the-erin-heights"><span>Share</span></a>
                                <div class="property-item"><a href="the-erin-heights">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/The Erin Heights-featured-1646876431475-small.png')}}"
                                                data-src="{{asset('properties/The Erin Heights-featured-1646876431475-small.png')}}"
                                                alt="The Erin Heights-featured-1646876431475" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home uc icon-under-construction"></span></span>
                                        </figure>
                                        <div class="content">
                                            <h3>The Erin Heights</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type"><span class="box-type ">2BR</span><span
                                                    class="box-type ">3BR</span><span
                                                    class="box-type ">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4881000.00">PHP 4,881,000</span> - <span
                                                    class="currency-convert" data-value="29842000.00">PHP
                                                    29,842,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="the-erin-heights"></a><a href="#"
                                            class="btn-compare" data-id="113" data-name="The Erin Heights"
                                            data-city="Quezon City">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="39" data-city="Quezon City"
                                data-min="4551000.00" data-max="9952000.00" data-name="The Orabella"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="the-orabella"><span>Share</span></a>
                                <div class="property-item"><a href="the-orabella">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/the-orabella-featured-small.png')}}"
                                                data-src="{{asset('properties/the-orabella-featured-small.png')}}"
                                                alt="" width="220" height="150"><span
                                                class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>The Orabella</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4551000.00">PHP 4,551,000</span> - <span
                                                    class="currency-convert" data-value="9952000.00">PHP
                                                    9,952,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="the-orabella"></a><a href="#"
                                            class="btn-compare" data-id="39" data-name="The Orabella"
                                            data-city="Quezon City">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="91" data-city="Quezon City"
                                data-min="4407000.00" data-max="9769000.00" data-name="The Oriana"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="the-oriana"><span>Share</span></a>
                                <div class="property-item"><a href="the-oriana">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/The Oriana-featured-1616731341431-small.png')}}"
                                                data-src="{{asset('properties/The Oriana-featured-1616731341431-small.png')}}"
                                                alt="The Oriana-featured-1616731341431" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home uc icon-under-construction"></span></span>
                                        </figure>
                                        <div class="content">
                                            <h3>The Oriana</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type"><span class="box-type ">1BR</span><span
                                                    class="box-type ">2BR</span><span
                                                    class="box-type ">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4407000.00">PHP 4,407,000</span> - <span
                                                    class="currency-convert" data-value="9769000.00">PHP
                                                    9,769,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="the-oriana"></a><a href="#"
                                            class="btn-compare" data-id="91" data-name="The Oriana"
                                            data-city="Quezon City">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="99" data-city="Pasig" data-min=""
                                data-max="" data-name="The Valeron Tower"><a href="#"
                                    class="icon-share pi-share" data-url="the-valeron-tower"><span>Share</span></a>
                                <div class="property-item"><a href="the-valeron-tower">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                data-src="{{asset('properties/coming-soon-featured-large.jpg')}}"
                                                alt="The Valeron Tower-featured" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home new icon-new"></span></span></figure>
                                        <div class="content">
                                            <h3>The Valeron Tower</h3>
                                            <p>Pasig</p>
                                            <p class="property-type"><span class="box-type">TBA</span></p>
                                            <p class="price">NOT YET AVAILABLE</p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="the-valeron-tower"></a><a href="#"
                                            class="btn-compare" data-id="99" data-name="The Valeron Tower"
                                            data-city="Pasig">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="61" data-city="Mandaluyong"
                                data-min="5118000.00" data-max="15476000.00" data-name="Tivoli Garden Residences">
                                <a href="#" class="icon-share pi-share"
                                    data-url="tivoli-garden-residences"><span>Share</span></a>
                                <div class="property-item"><a href="tivoli-garden-residences">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/Tivoli Garden Residences - Featured-small.png')}}"
                                                data-src="{{asset('properties/Tivoli Garden Residences - Featured-small.png')}}"
                                                alt="Tivoli Garden Residences - Featured" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Tivoli Garden Residences</h3>
                                            <p>Mandaluyong</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span><span
                                                    class="box-type not-available">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5118000.00">PHP 5,118,000</span> - <span
                                                    class="currency-convert" data-value="15476000.00">PHP
                                                    15,476,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="tivoli-garden-residences"></a><a
                                            href="#" class="btn-compare" data-id="61"
                                            data-name="Tivoli Garden Residences" data-city="Mandaluyong">COMPARE
                                            WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="60" data-city="Manila" data-min="5918000.00"
                                data-max="13205000.00" data-name="Torre De Manila"><a href="#"
                                    class="icon-share pi-share" data-url="torre-de-manila"><span>Share</span></a>
                                <div class="property-item"><a href="torre-de-manila">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/Torre De Manila-featured-1562641772520-small.png')}}"
                                                data-src="{{asset('properties/Torre De Manila-featured-1562641772520-small.png')}}"
                                                alt="Torre De Manila-featured-1562641772520" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Torre De Manila</h3>
                                            <p>Manila</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5918000.00">PHP 5,918,000</span> - <span
                                                    class="currency-convert" data-value="13205000.00">PHP
                                                    13,205,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="torre-de-manila"></a><a href="#"
                                            class="btn-compare" data-id="60" data-name="Torre De Manila"
                                            data-city="Manila">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="48" data-city="Davao City"
                                data-min="4019000.00" data-max="8763000.00" data-name="Verdon Parc"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="verdon-parc"><span>Share</span></a>
                                <div class="property-item"><a href="verdon-parc">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/DMCI_Homes_Verdon_Parc-small.png')}}"
                                                data-src="{{asset('properties/DMCI_Homes_Verdon_Parc-small.png')}}"
                                                alt="DMCI_Homes_Verdon_Parc" width="220" height="150"><span
                                                class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Verdon Parc</h3>
                                            <p>Davao City</p>
                                            <p class="property-type"><span class="box-type ">1BR</span><span
                                                    class="box-type ">2BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4019000.00">PHP 4,019,000</span> - <span
                                                    class="currency-convert" data-value="8763000.00">PHP
                                                    8,763,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="verdon-parc"></a><a href="#"
                                            class="btn-compare" data-id="48" data-name="Verdon Parc"
                                            data-city="Davao City">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="49" data-city="Quezon City"
                                data-min="4277000.00" data-max="9594000.00" data-name="Viera Residences"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="viera-residences"><span>Share</span></a>
                                <div class="property-item"><a href="viera-residences">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/Viera Residences - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Viera Residences - Featured Image-small.png')}}"
                                                alt="Viera Residences - Featured Image" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Viera Residences</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4277000.00">PHP 4,277,000</span> - <span
                                                    class="currency-convert" data-value="9594000.00">PHP
                                                    9,594,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="viera-residences"></a><a href="#"
                                            class="btn-compare" data-id="49" data-name="Viera Residences"
                                            data-city="Quezon City">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                            <li class="p-card box-card" data-id="52" data-city="Quezon City"
                                data-min="3760000.00" data-max="9971000.00" data-name="Zinnia Towers"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="zinnia-towers"><span>Share</span></a>
                                <div class="property-item"><a href="zinnia-towers">
                                        <figure class="property-img"><img class="lazyload"
                                                src="{{asset('properties/Zinnia Towers - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Zinnia Towers - Featured Image-small.png')}}"
                                                alt="Zinnia Towers - Featured Image" width="220"
                                                height="150"><span class="property-status circle-white"><span
                                                    class="icon-home rfo icon-RFO"></span></span></figure>
                                        <div class="content">
                                            <h3>Zinnia Towers</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type"><span
                                                    class="box-type not-available">1BR</span><span
                                                    class="box-type not-available">2BR</span><span
                                                    class="box-type not-available">3BR</span><span
                                                    class="box-type not-available">STUDIO</span></p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="3760000.00">PHP 3,760,000</span> - <span
                                                    class="currency-convert" data-value="9971000.00">PHP
                                                    9,971,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="zinnia-towers"></a><a href="#"
                                            class="btn-compare" data-id="52" data-name="Zinnia Towers"
                                            data-city="Quezon City">COMPARE WITH OTHER PROPERTIES</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="slant-border slant-bot slant-grey slant-right"></div>
            </section>


            <section class="sec-pad sec-default bg-grey jq-section" id="mid-condominiums">
                <div class="container">
                    <div class="property-list folio-map">
                        <div class="sec-head">
                            <h2 class="sec-title">Mid Rise Condominiums</h2>
                            <p>Enjoy the freedom of suburbia's wide, open spaces combined with a close proximity to all
                                that
                                you need in the city at DMCI Homes' mid-rise sprawls..</p>
                        </div>
                        <ul class="flex">
                            <li class="p-card box-card" data-id="1" data-city="Quezon City"
                                data-min="6582000.00" data-max="13545000.00" data-name="Accolade Place"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="accolade-place"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="accolade-place">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/accolade-place-featured-small.png')}}"
                                                data-src="{{asset('properties/accolade-place-featured-small.png')}}"
                                                alt="accolade-place" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Accolade Place</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="6582000.00">PHP 6,582,000</span> - <span
                                                    class="currency-convert" data-value="13545000.00">PHP
                                                    13,545,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="accolade-place">
                                        </a><a href="#" class="btn-compare" data-id="1"
                                            data-name="Accolade Place" data-city="Quezon City">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="2" data-city="Bacoor" data-min="5937000.00"
                                data-max="9584000.00" data-name="Alea Residences"><a href="#"
                                    class="icon-share pi-share" data-url="alea-residences"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="alea-residences">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Alea Residences-featured-1644910665040-small.png')}}"
                                                data-src="{{asset('properties/Alea Residences-featured-1644910665040-small.png')}}"
                                                alt="Alea Residences-featured-1644910665040" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Alea Residences</h3>
                                            <p>Bacoor</p>
                                            <p class="property-type">
                                                <span class="box-type ">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5937000.00">PHP 5,937,000</span> - <span
                                                    class="currency-convert" data-value="9584000.00">PHP
                                                    9,584,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="alea-residences">
                                        </a><a href="#" class="btn-compare" data-id="2"
                                            data-name="Alea Residences" data-city="Bacoor">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="3" data-city="Parañaque"
                                data-min="4830000.00" data-max="8230000.00" data-name="Arista Place"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="arista-place"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="arista-place">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Arista Place - Featured-small.png')}}"
                                                data-src="{{asset('properties/Arista Place - Featured-small.png')}}"
                                                alt="Arista Place - Featured" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Arista Place</h3>
                                            <p>Parañaque</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4830000.00">PHP 4,830,000</span> - <span
                                                    class="currency-convert" data-value="8230000.00">PHP
                                                    8,230,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="arista-place">
                                        </a><a href="#" class="btn-compare" data-id="3"
                                            data-name="Arista Place" data-city="Parañaque">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="4" data-city="Parañaque"
                                data-min="5611000.00" data-max="9592000.00" data-name="Asteria Residences"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="asteria-residences"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="asteria-residences">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Asteria Residences - Featured-small.png')}}"
                                                data-src="{{asset('properties/Asteria Residences - Featured-small.png')}}"
                                                alt="Asteria Residences - Featured" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Asteria Residences</h3>
                                            <p>Parañaque</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5611000.00">PHP 5,611,000</span> - <span
                                                    class="currency-convert" data-value="9592000.00">PHP
                                                    9,592,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="asteria-residences">
                                        </a><a href="#" class="btn-compare" data-id="4"
                                            data-name="Asteria Residences" data-city="Parañaque">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="77" data-city="Taguig" data-min="1382000.00"
                                data-max="4257000.00" data-name="Bonifacio Heights Condominiums"><a href="#"
                                    class="icon-share pi-share"
                                    data-url="bonifacio-heights-condominiums"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="bonifacio-heights-condominiums">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/bonifacio-heights-condominiums-featured-small.png')}}"
                                                data-src="{{asset('properties/bonifacio-heights-condominiums-featured-small.png')}}"
                                                alt="" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Bonifacio Heights Condominiums</h3>
                                            <p>Taguig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                                <span class="box-type not-available">STUDIO</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="1382000.00">PHP 1,382,000</span> - <span
                                                    class="currency-convert" data-value="4257000.00">PHP
                                                    4,257,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="bonifacio-heights-condominiums">
                                        </a><a href="#" class="btn-compare" data-id="77"
                                            data-name="Bonifacio Heights Condominiums" data-city="Taguig">COMPARE
                                            WITH OTHER PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="8" data-city="Baguio City"
                                data-min="4722000.00" data-max="13203000.00" data-name="Bristle Ridge"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="bristle-ridge"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="bristle-ridge">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Bristle Ridge-featured-1644993053809-small.png')}}"
                                                data-src="{{asset('properties/Bristle Ridge-featured-1644993053809-small.png')}}"
                                                alt="Bristle Ridge-featured-1644993053809" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Bristle Ridge</h3>
                                            <p>Baguio City</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">1BR</span>
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4722000.00">PHP 4,722,000</span> - <span
                                                    class="currency-convert" data-value="13203000.00">PHP
                                                    13,203,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="bristle-ridge">
                                        </a><a href="#" class="btn-compare" data-id="8"
                                            data-name="Bristle Ridge" data-city="Baguio City">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="13" data-city="Parañaque"
                                data-min="3987000.00" data-max="5206000.00" data-name="Calathea Place"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="calathea-place"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="calathea-place">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Calathea Place-featured-1623338090827-small.png')}}"
                                                data-src="{{asset('properties/Calathea Place-featured-1623338090827-small.png')}}"
                                                alt="Calathea Place-featured-1623338090827" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Calathea Place</h3>
                                            <p>Parañaque</p>
                                            <p class="property-type">
                                                <span class="box-type ">1BR</span>
                                                <span class="box-type not-available">2BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="3987000.00">PHP 3,987,000</span> - <span
                                                    class="currency-convert" data-value="5206000.00">PHP
                                                    5,206,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="calathea-place">
                                        </a><a href="#" class="btn-compare" data-id="13"
                                            data-name="Calathea Place" data-city="Parañaque">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="11" data-city="Taguig" data-min="6363000.00"
                                data-max="10917000.00" data-name="Cedar Crest"><a href="#"
                                    class="icon-share pi-share" data-url="cedar-crest"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="cedar-crest">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/cedar-crest-featured-small.png')}}"
                                                data-src="{{asset('properties/cedar-crest-featured-small.png')}}"
                                                alt="" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Cedar Crest</h3>
                                            <p>Taguig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="6363000.00">PHP 6,363,000</span> - <span
                                                    class="currency-convert" data-value="10917000.00">PHP
                                                    10,917,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="cedar-crest">
                                        </a><a href="#" class="btn-compare" data-id="11"
                                            data-name="Cedar Crest" data-city="Taguig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="70" data-city="Pasig" data-min="4002000.00"
                                data-max="12320000.00" data-name="East Ortigas Mansions"><a href="#"
                                    class="icon-share pi-share"
                                    data-url="east-ortigas-mansions"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="east-ortigas-mansions">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/East Ortigas Mansions-featured-small.png')}}"
                                                data-src="{{asset('properties/East Ortigas Mansions-featured-small.png')}}"
                                                alt="East Ortigas Mansions-featured" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>East Ortigas Mansions</h3>
                                            <p>Pasig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">1BR</span>
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                                <span class="box-type not-available">4BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4002000.00">PHP 4,002,000</span> - <span
                                                    class="currency-convert" data-value="12320000.00">PHP
                                                    12,320,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="east-ortigas-mansions">
                                        </a><a href="#" class="btn-compare" data-id="70"
                                            data-name="East Ortigas Mansions" data-city="Pasig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="16" data-city="Pasig" data-min="4694000.00"
                                data-max="8891000.00" data-name="East Raya Gardens"><a href="#"
                                    class="icon-share pi-share" data-url="east-raya-gardens"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="east-raya-gardens">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/east-raya-gardens-featured-small.png')}}"
                                                data-src="{{asset('properties/east-raya-gardens-featured-small.png')}}"
                                                alt="" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>East Raya Gardens</h3>
                                            <p>Pasig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4694000.00">PHP 4,694,000</span> - <span
                                                    class="currency-convert" data-value="8891000.00">PHP
                                                    8,891,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="east-raya-gardens">
                                        </a><a href="#" class="btn-compare" data-id="16"
                                            data-name="East Raya Gardens" data-city="Pasig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="82" data-city="Manila" data-min=""
                                data-max="" data-name="Hampstead Garden Condominiums"><a href="#"
                                    class="icon-share pi-share"
                                    data-url="hampstead-garden-condominiums"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="hampstead-garden-condominiums">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Hampstead Garden Condominiums-featured-1641957127309-small.png')}}"
                                                data-src="{{asset('properties/Hampstead Garden Condominiums-featured-1641957127309-small.png')}}"
                                                alt="Hampstead Garden Condominiums-featured-1641957127309"
                                                width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Hampstead Garden Condominiums</h3>
                                            <p>Manila</p>
                                            <p class="property-type">
                                            </p>
                                            <p class="price"><span class="currency-convert" data-value="">PHP
                                                    0</span> - <span class="currency-convert" data-value="">PHP
                                                    0</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="hampstead-garden-condominiums">
                                        </a><a href="#" class="btn-compare" data-id="82"
                                            data-name="Hampstead Garden Condominiums" data-city="Manila">COMPARE
                                            WITH OTHER PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="24" data-city="Taguig" data-min="6895000.00"
                                data-max="10330000.00" data-name="Ivory Wood"><a href="#"
                                    class="icon-share pi-share" data-url="ivory-wood"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="ivory-wood">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Ivory Wood - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Ivory Wood - Featured Image-small.png')}}"
                                                alt="Ivory Wood - Featured Image" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Ivory Wood</h3>
                                            <p>Taguig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="6895000.00">PHP 6,895,000</span> - <span
                                                    class="currency-convert" data-value="10330000.00">PHP
                                                    10,330,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="ivory-wood">
                                        </a><a href="#" class="btn-compare" data-id="24"
                                            data-name="Ivory Wood" data-city="Taguig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="29" data-city="Quezon City"
                                data-min="3849000.00" data-max="7966000.00" data-name="Magnolia Place"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="magnolia-place"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="magnolia-place">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/magnolia-place-featured-small.png')}}"
                                                data-src="{{asset('properties/magnolia-place-featured-small.png')}}"
                                                alt="" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Magnolia Place</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                                <span class="box-type not-available">STUDIO</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="3849000.00">PHP 3,849,000</span> - <span
                                                    class="currency-convert" data-value="7966000.00">PHP
                                                    7,966,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="magnolia-place">
                                        </a><a href="#" class="btn-compare" data-id="29"
                                            data-name="Magnolia Place" data-city="Quezon City">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="34" data-city="Taguig" data-min="7111000.00"
                                data-max="10466000.00" data-name="Maple Place"><a href="#"
                                    class="icon-share pi-share" data-url="maple-place"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="maple-place">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Maple Place-featured-small.png')}}"
                                                data-src="{{asset('properties/Maple Place-featured-small.png')}}"
                                                alt="Maple Place-featured" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Maple Place</h3>
                                            <p>Taguig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="7111000.00">PHP 7,111,000</span> - <span
                                                    class="currency-convert" data-value="10466000.00">PHP
                                                    10,466,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="maple-place">
                                        </a><a href="#" class="btn-compare" data-id="34"
                                            data-name="Maple Place" data-city="Taguig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="30" data-city="Las Piñas"
                                data-min="4092000.00" data-max="7154000.00" data-name="Maricielo Villas"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="maricielo-villas"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="maricielo-villas">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/maricielo-villas-featured-small.png')}}"
                                                data-src="{{asset('properties/maricielo-villas-featured-small.png')}}"
                                                alt="" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Maricielo Villas</h3>
                                            <p>Las Piñas</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4092000.00">PHP 4,092,000</span> - <span
                                                    class="currency-convert" data-value="7154000.00">PHP
                                                    7,154,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="maricielo-villas">
                                        </a><a href="#" class="btn-compare" data-id="30"
                                            data-name="Maricielo Villas" data-city="Las Piñas">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="32" data-city="Pasig" data-min="5649000.00"
                                data-max="8995000.00" data-name="Mirea Residences"><a href="#"
                                    class="icon-share pi-share" data-url="mirea-residences"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="mirea-residences">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Mirea Residences - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Mirea Residences - Featured Image-small.png')}}"
                                                alt="Mirea Residences - Featured Image" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Mirea Residences</h3>
                                            <p>Pasig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5649000.00">PHP 5,649,000</span> - <span
                                                    class="currency-convert" data-value="8995000.00">PHP
                                                    8,995,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="mirea-residences">
                                        </a><a href="#" class="btn-compare" data-id="32"
                                            data-name="Mirea Residences" data-city="Pasig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="33" data-city="Taguig" data-min="6953000.00"
                                data-max="25337000.00" data-name="Mulberry Place"><a href="#"
                                    class="icon-share pi-share" data-url="mulberry-place"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="mulberry-place">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Mulberry Place-featured-1665479476736-small.jpg')}}"
                                                data-src="{{asset('properties/Mulberry Place-featured-1665479476736-small.jpg')}}"
                                                alt="Mulberry Place-featured-1665479476736" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Mulberry Place</h3>
                                            <p>Taguig</p>
                                            <p class="property-type">
                                                <span class="box-type ">2BR</span>
                                                <span class="box-type ">3BR</span>
                                                <span class="box-type ">4BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="6953000.00">PHP 6,953,000</span> - <span
                                                    class="currency-convert" data-value="25337000.00">PHP
                                                    25,337,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="mulberry-place">
                                        </a><a href="#" class="btn-compare" data-id="33"
                                            data-name="Mulberry Place" data-city="Taguig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="37" data-city="Parañaque"
                                data-min="11888000.00" data-max="56588000.00" data-name="Oak Harbor Residences"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="oak-harbor-residences"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="oak-harbor-residences">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Oak Harbor Residences-featured-1618992922231-small.png')}}"
                                                data-src="{{asset('properties/Oak Harbor Residences-featured-1618992922231-small.png')}}"
                                                alt="Oak Harbor Residences-featured-1618992922231" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Oak Harbor Residences</h3>
                                            <p>Parañaque</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">1BR</span>
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                                <span class="box-type not-available">LOFT</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="11888000.00">PHP 11,888,000</span> - <span
                                                    class="currency-convert" data-value="56588000.00">PHP
                                                    56,588,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="oak-harbor-residences">
                                        </a><a href="#" class="btn-compare" data-id="37"
                                            data-name="Oak Harbor Residences" data-city="Parañaque">COMPARE WITH
                                            OTHER PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="38" data-city="Las Piñas"
                                data-min="2867000.00" data-max="8266000.00" data-name="Ohana Place"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="ohana-place"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="ohana-place">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Ohana Place - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Ohana Place - Featured Image-small.png')}}"
                                                alt="Ohana Place - Featured Image" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Ohana Place</h3>
                                            <p>Las Piñas</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                                <span class="box-type not-available">STUDIO</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="2867000.00">PHP 2,867,000</span> - <span
                                                    class="currency-convert" data-value="8266000.00">PHP
                                                    8,266,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="ohana-place">
                                        </a><a href="#" class="btn-compare" data-id="38"
                                            data-name="Ohana Place" data-city="Las Piñas">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="40" data-city="Baguio City"
                                data-min="3567000.00" data-max="11040000.00" data-name="Outlook Ridge Residences">
                                <a href="#" class="icon-share pi-share"
                                    data-url="outlook-ridge-residences"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="outlook-ridge-residences">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Outlook Ridge Residences - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Outlook Ridge Residences - Featured Image-small.png')}}"
                                                alt="Outlook Ridge Residences - Featured Image" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Outlook Ridge Residences</h3>
                                            <p>Baguio City</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">STUDIO</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="3567000.00">PHP 3,567,000</span> - <span
                                                    class="currency-convert" data-value="11040000.00">PHP
                                                    11,040,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="outlook-ridge-residences">
                                        </a><a href="#" class="btn-compare" data-id="40"
                                            data-name="Outlook Ridge Residences" data-city="Baguio City">COMPARE
                                            WITH OTHER PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="42" data-city="Parañaque"
                                data-min="4213000.00" data-max="10420000.00" data-name="Palm Grove"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="palm-grove"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="palm-grove">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Palm Grove - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Palm Grove - Featured Image-small.png')}}"
                                                alt="Palm Grove - Featured Image" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Palm Grove</h3>
                                            <p>Parañaque</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                                <span class="box-type not-available">H&amp;L</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4213000.00">PHP 4,213,000</span> - <span
                                                    class="currency-convert" data-value="10420000.00">PHP
                                                    10,420,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="palm-grove">
                                        </a><a href="#" class="btn-compare" data-id="42"
                                            data-name="Palm Grove" data-city="Parañaque">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="46" data-city="Parañaque"
                                data-min="3708000.00" data-max="8210000.00" data-name="Raya Garden Condominiums">
                                <a href="#" class="icon-share pi-share"
                                    data-url="raya-garden-condominiums"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="raya-garden-condominiums">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Raya Garden Condominiums-featured-1678763927392-small.jpg')}}"
                                                data-src="{{asset('properties/Raya Garden Condominiums-featured-1678763927392-small.jpg')}}"
                                                alt="Raya Garden Condominiums-featured-1678763927392" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Raya Garden Condominiums</h3>
                                            <p>Parañaque</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                                <span class="box-type not-available">STUDIO</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="3708000.00">PHP 3,708,000</span> - <span
                                                    class="currency-convert" data-value="8210000.00">PHP
                                                    8,210,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="raya-garden-condominiums">
                                        </a><a href="#" class="btn-compare" data-id="46"
                                            data-name="Raya Garden Condominiums" data-city="Parañaque">COMPARE WITH
                                            OTHER PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="44" data-city="Muntinlupa"
                                data-min="3952000.00" data-max="10427000.00" data-name="Rhapsody Residences"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="rhapsody-residences"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="rhapsody-residences">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/rhapsody-residences-featured-small.png')}}"
                                                data-src="{{asset('properties/rhapsody-residences-featured-small.png')}}"
                                                alt="" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Rhapsody Residences</h3>
                                            <p>Muntinlupa</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="3952000.00">PHP 3,952,000</span> - <span
                                                    class="currency-convert" data-value="10427000.00">PHP
                                                    10,427,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="rhapsody-residences">
                                        </a><a href="#" class="btn-compare" data-id="44"
                                            data-name="Rhapsody Residences" data-city="Muntinlupa">COMPARE WITH
                                            OTHER PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="45" data-city="Pasig" data-min="4858000.00"
                                data-max="9493000.00" data-name="Riverfront Residences"><a href="#"
                                    class="icon-share pi-share"
                                    data-url="riverfront-residences"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="riverfront-residences">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/riverfront-residences-featured-small.png')}}"
                                                data-src="{{asset('properties/riverfront-residences-featured-small.png')}}"
                                                alt="" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Riverfront Residences</h3>
                                            <p>Pasig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4858000.00">PHP 4,858,000</span> - <span
                                                    class="currency-convert" data-value="9493000.00">PHP
                                                    9,493,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="riverfront-residences">
                                        </a><a href="#" class="btn-compare" data-id="45"
                                            data-name="Riverfront Residences" data-city="Pasig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="73" data-city="Taguig" data-min="4669000.00"
                                data-max="10410000.00" data-name="Rosewood Pointe"><a href="#"
                                    class="icon-share pi-share" data-url="rosewood-pointe"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="rosewood-pointe">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/rosewood-pointe-featured-small.png')}}"
                                                data-src="{{asset('properties/rosewood-pointe-featured-small.png')}}"
                                                alt="" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Rosewood Pointe</h3>
                                            <p>Taguig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                                <span class="box-type not-available">STUDIO</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4669000.00">PHP 4,669,000</span> - <span
                                                    class="currency-convert" data-value="10410000.00">PHP
                                                    10,410,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="rosewood-pointe">
                                        </a><a href="#" class="btn-compare" data-id="73"
                                            data-name="Rosewood Pointe" data-city="Taguig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="56" data-city="Parañaque"
                                data-min="4790000.00" data-max="8010000.00" data-name="Siena Park Residences"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="siena-park-residences"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="siena-park-residences">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/siena-park-residences-featured-small.png')}}"
                                                data-src="{{asset('properties/siena-park-residences-featured-small.png')}}"
                                                alt="" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Siena Park Residences</h3>
                                            <p>Parañaque</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4790000.00">PHP 4,790,000</span> - <span
                                                    class="currency-convert" data-value="8010000.00">PHP
                                                    8,010,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="siena-park-residences">
                                        </a><a href="#" class="btn-compare" data-id="56"
                                            data-name="Siena Park Residences" data-city="Parañaque">COMPARE WITH
                                            OTHER PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="54" data-city="Quezon City"
                                data-min="3954000.00" data-max="9591000.00" data-name="Stellar Place"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="stellar-place"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="stellar-place">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Stellar Place Roof deck-small.png')}}"
                                                data-src="{{asset('properties/Stellar Place Roof deck-small.png')}}"
                                                alt="Stellar Place Roof deck" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Stellar Place</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">1BR</span>
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                                <span class="box-type not-available">STUDIO</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="3954000.00">PHP 3,954,000</span> - <span
                                                    class="currency-convert" data-value="9591000.00">PHP
                                                    9,591,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="stellar-place">
                                        </a><a href="#" class="btn-compare" data-id="54"
                                            data-name="Stellar Place" data-city="Quezon City">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="9" data-city="Taguig" data-min="7150000.00"
                                data-max="10293000.00" data-name="The Birchwood"><a href="#"
                                    class="icon-share pi-share" data-url="the-birchwood"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="the-birchwood">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/The Birchwood - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/The Birchwood - Featured Image-small.png')}}"
                                                alt="The Birchwood - Featured Image" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>The Birchwood</h3>
                                            <p>Taguig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="7150000.00">PHP 7,150,000</span> - <span
                                                    class="currency-convert" data-value="10293000.00">PHP
                                                    10,293,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="the-birchwood">
                                        </a><a href="#" class="btn-compare" data-id="9"
                                            data-name="The Birchwood" data-city="Taguig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="62" data-city="Quezon City"
                                data-min="4000000.00" data-max="8173000.00" data-name="The Redwoods"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="the-redwoods"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="the-redwoods">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/The Redwoods - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/The Redwoods - Featured Image-small.png')}}"
                                                alt="The Redwoods - Featured Image" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>The Redwoods</h3>
                                            <p>Quezon City</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                                <span class="box-type not-available">STUDIO</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4000000.00">PHP 4,000,000</span> - <span
                                                    class="currency-convert" data-value="8173000.00">PHP
                                                    8,173,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="the-redwoods">
                                        </a><a href="#" class="btn-compare" data-id="62"
                                            data-name="The Redwoods" data-city="Quezon City">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="50" data-city="Taguig" data-min="5122000.00"
                                data-max="9596000.00" data-name="Verawood Residences"><a href="#"
                                    class="icon-share pi-share"
                                    data-url="verawood-residences"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="verawood-residences">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Verawood Residences - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Verawood Residences - Featured Image-small.png')}}"
                                                alt="Verawood Residences - Featured Image" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Verawood Residences</h3>
                                            <p>Taguig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5122000.00">PHP 5,122,000</span> - <span
                                                    class="currency-convert" data-value="9596000.00">PHP
                                                    9,596,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="verawood-residences">
                                        </a><a href="#" class="btn-compare" data-id="50"
                                            data-name="Verawood Residences" data-city="Taguig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="48" data-city="Davao City"
                                data-min="4019000.00" data-max="8763000.00" data-name="Verdon Parc"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="verdon-parc"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="verdon-parc">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/DMCI_Homes_Verdon_Parc-small.png')}}"
                                                data-src="{{asset('properties/DMCI_Homes_Verdon_Parc-small.png')}}"
                                                alt="DMCI_Homes_Verdon_Parc" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Verdon Parc</h3>
                                            <p>Davao City</p>
                                            <p class="property-type">
                                                <span class="box-type ">1BR</span>
                                                <span class="box-type ">2BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4019000.00">PHP 4,019,000</span> - <span
                                                    class="currency-convert" data-value="8763000.00">PHP
                                                    8,763,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="verdon-parc">
                                        </a><a href="#" class="btn-compare" data-id="48"
                                            data-name="Verdon Parc" data-city="Davao City">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="80" data-city="Taguig" data-min="4195000.00"
                                data-max="9695000.00" data-name="Vista De Lago"><a href="#"
                                    class="icon-share pi-share" data-url="vista-de-lago"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="vista-de-lago">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Vista De Lago-featured-small.png')}}"
                                                data-src="{{asset('properties/Vista De Lago-featured-small.png')}}"
                                                alt="Vista De Lago-featured" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Vista De Lago</h3>
                                            <p>Taguig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">2BR</span>
                                                <span class="box-type not-available">3BR</span>
                                                <span class="box-type not-available">4BR</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="4195000.00">PHP 4,195,000</span> - <span
                                                    class="currency-convert" data-value="9695000.00">PHP
                                                    9,695,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="vista-de-lago">
                                        </a><a href="#" class="btn-compare" data-id="80"
                                            data-name="Vista De Lago" data-city="Taguig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="slant-border slant-bot slant-right"></div>
            </section>


            <section class="sec-pad sec-default jq-section" id="subdivisions">
                <div class="container">
                    <div class="property-list folio-map">
                        <div class="sec-head">
                            <h2 class="sec-title">Subdivisions</h2>
                            <p>Experience the joy of living among fields of lush greens, along wide avenues, in a secure
                                and
                                safe environment at DMCI Homes' subdivisions.</p>
                        </div>
                        <ul class="flex">
                            <li class="p-card box-card" data-id="31" data-city="Taguig" data-min="5625000.00"
                                data-max="61256000.00" data-name="Mahogany Place III"><a href="#"
                                    class="icon-share pi-share" data-url="mahogany-place-iii"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="mahogany-place-iii">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Mahogany Place III - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Mahogany Place III - Featured Image-small.png')}}"
                                                alt="Mahogany Place III - Featured Image" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Mahogany Place III</h3>
                                            <p>Taguig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">H&amp;L</span>
                                                <span class="box-type not-available">LOT</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5625000.00">PHP 5,625,000</span> - <span
                                                    class="currency-convert" data-value="61256000.00">PHP
                                                    61,256,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="mahogany-place-iii">
                                        </a><a href="#" class="btn-compare" data-id="31"
                                            data-name="Mahogany Place III" data-city="Taguig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="79" data-city="Taguig" data-min="812500.00"
                                data-max="3676000.00" data-name="Spring Lane Homes"><a href="#"
                                    class="icon-share pi-share" data-url="spring-lane-homes"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="spring-lane-homes">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Spring Lane Homes-featured-small.png')}}"
                                                data-src="{{asset('properties/Spring Lane Homes-featured-small.png')}}"
                                                alt="Spring Lane Homes-featured" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Spring Lane Homes</h3>
                                            <p>Taguig</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">H&amp;L</span>
                                                <span class="box-type not-available">LOT</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="812500.00">PHP 812,500</span> - <span
                                                    class="currency-convert" data-value="3676000.00">PHP
                                                    3,676,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="spring-lane-homes">
                                        </a><a href="#" class="btn-compare" data-id="79"
                                            data-name="Spring Lane Homes" data-city="Taguig">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="63" data-city="Carmona" data-min="1359700.00"
                                data-max="8649900.00" data-name="Villa Alegre Homes"><a href="#"
                                    class="icon-share pi-share" data-url="villa-alegre"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="villa-alegre">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Villa Alegre Homes-featured-1667805126981-small.jpeg')}}"
                                                data-src="{{asset('properties/Villa Alegre Homes-featured-1667805126981-small.jpeg')}}"
                                                alt="Villa Alegre Homes-featured-1667805126981" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Villa Alegre Homes</h3>
                                            <p>Carmona</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">H&amp;L</span>
                                                <span class="box-type not-available">LOT</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="1359700.00">PHP 1,359,700</span> - <span
                                                    class="currency-convert" data-value="8649900.00">PHP
                                                    8,649,900</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="villa-alegre">
                                        </a><a href="#" class="btn-compare" data-id="63"
                                            data-name="Villa Alegre Homes" data-city="Carmona">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="51" data-city="Cabuyao, Laguna"
                                data-min="756000.00" data-max="8547000.00" data-name="Willow Park Homes"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="willow-park-homes"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="willow-park-homes">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Willow Park Homes - Featured Image-small.png')}}"
                                                data-src="{{asset('properties/Willow Park Homes - Featured Image-small.png')}}"
                                                alt="Willow Park Homes - Featured Image" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Willow Park Homes</h3>
                                            <p>Cabuyao, Laguna</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">H&amp;L</span>
                                                <span class="box-type not-available">LOT</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="756000.00">PHP 756,000</span> - <span
                                                    class="currency-convert" data-value="8547000.00">PHP
                                                    8,547,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="willow-park-homes">
                                        </a><a href="#" class="btn-compare" data-id="51"
                                            data-name="Willow Park Homes" data-city="Cabuyao, Laguna">COMPARE WITH
                                            OTHER PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="67" data-city="Cavite City"
                                data-min="634200.00" data-max="10990000.00" data-name="Woodland Hills"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="woodland-hills"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="woodland-hills">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Woodland Hills-featured-small.png')}}"
                                                data-src="{{asset('properties/Woodland Hills-featured-small.png')}}"
                                                alt="Woodland Hills-featured" width="220" height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Woodland Hills</h3>
                                            <p>Cavite City</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">H&amp;L</span>
                                                <span class="box-type not-available">LOT</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="634200.00">PHP 634,200</span> - <span
                                                    class="currency-convert" data-value="10990000.00">PHP
                                                    10,990,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="woodland-hills">
                                        </a><a href="#" class="btn-compare" data-id="67"
                                            data-name="Woodland Hills" data-city="Cavite City">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="slant-border slant-bot slant-grey slant-right"></div>
            </section>


            <section class="sec-pad sec-default bg-grey jq-section" id="leisure-residence">
                <div class="container">
                    <div class="property-list folio-map">
                        <div class="sec-head">
                            <h2 class="sec-title">Leisure Residences</h2>
                            <p>At Alta Vista de Boracay, life's more than just a beach. It's a well-appointed condo with
                                more than just your average amenities.</p>
                        </div>
                        <ul class="flex">
                            <li class="p-card box-card" data-id="6" data-city="Malay" data-min="5487000.00"
                                data-max="9241000.00" data-name="Alta Vista de Boracay"><a href="#"
                                    class="icon-share pi-share"
                                    data-url="alta-vista-de-boracay"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="alta-vista-de-boracay">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Alta Vista de Boracay-featured-1549950192848-small.png')}}"
                                                data-src="{{asset('properties/Alta Vista de Boracay-featured-1549950192848-small.png')}}"
                                                alt="Alta Vista de Boracay-featured-1549950192848" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home rfo icon-RFO"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Alta Vista de Boracay</h3>
                                            <p>Malay</p>
                                            <p class="property-type">
                                                <span class="box-type ">LOFT</span>
                                                <span class="box-type ">STUDIO</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="5487000.00">PHP 5,487,000</span> - <span
                                                    class="currency-convert" data-value="9241000.00">PHP
                                                    9,241,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="alta-vista-de-boracay">
                                        </a><a href="#" class="btn-compare" data-id="6"
                                            data-name="Alta Vista de Boracay" data-city="Malay">COMPARE WITH OTHER
                                            PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                            <li class="p-card box-card" data-id="98" data-city="San Juan, Batangas"
                                data-min="6300000.00" data-max="19035000.00" data-name="Solmera Coast"><a
                                    href="#" class="icon-share pi-share"
                                    data-url="solmera-coast"><span>Share</span></a>
                                <div class="property-item">
                                    <a href="solmera-coast">
                                        <figure class="property-img">
                                            <img class="lazyload"
                                                src="{{asset('properties/Solmera Coast-featured-1689760125122-small.jpg')}}"
                                                data-src="{{asset('properties/Solmera Coast-featured-1689760125122-small.jpg')}}"
                                                alt="Solmera Coast-featured-1689760125122" width="220"
                                                height="150">
                                            <span class="property-status circle-white">
                                                <span class="icon-home new icon-new"></span>
                                            </span>
                                        </figure>
                                        <div class="content">
                                            <h3>Solmera Coast</h3>
                                            <p>San Juan, Batangas</p>
                                            <p class="property-type">
                                                <span class="box-type not-available">1BR</span>
                                                <span class="box-type ">2BR</span>
                                                <span class="box-type ">STUDIO</span>
                                            </p>
                                            <p class="price"><span class="currency-convert"
                                                    data-value="6300000.00">PHP 6,300,000</span> - <span
                                                    class="currency-convert" data-value="19035000.00">PHP
                                                    19,035,000</span></p>
                                        </div>
                                    </a>
                                    <p class="property-compare"><a href="solmera-coast">
                                        </a><a href="#" class="btn-compare" data-id="98"
                                            data-name="Solmera Coast" data-city="San Juan, Batangas">COMPARE WITH
                                            OTHER PROPERTIES</a>
                                    </p>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="slant-border slant-bot slant-right"></div>
            </section>

            <section class="sec-pad sec-default jq-section" id="cities">
                <div class="container">

                    <div class="sec-head">
                        <h2 class="sec-title">Our Properties near to your Cities</h2>
                        <p>Check out other properties within striking distance of the metro's bustling business and
                            commercial centers.</p>
                    </div>

                    <div class="featured-news">
                        <div class="masonry-wrap">
                            <div class="grid" id="media-news-wrapper">

                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-quezon-city">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Zinnia Towers - Featured Image-small.png')}}"
                                                    alt="Condo in Quezon City">
                                            </figure>

                                            <span>Quezon City</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-taguig">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Vista De Lago-featured-small.png')}}"
                                                    alt="Condo in Taguig">
                                            </figure>

                                            <span>Taguig</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-bacoor">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Alea Residences-featured-1644910665040-small.png')}}"
                                                    alt="Condo in Bacoor">
                                            </figure>

                                            <span>Bacoor</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-pasig">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/The Valeron Tower-featured-small.png')}}"
                                                    alt="Condo in Pasig">
                                            </figure>

                                            <span>Pasig</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-malay">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Alta Vista de Boracay-featured-1549950192848-small.png')}}"
                                                    alt="Condo in Malay">
                                            </figure>

                                            <span>Malay</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-pasay">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Aston Residences featured-small.png')}}"
                                                    alt="Condo in Pasay">
                                            </figure>

                                            <span>Pasay</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-paranaque">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/The Atherton-featured-1654495936630-small.jpg')}}"
                                                    alt="Condo in Parañaque">
                                            </figure>

                                            <span>Parañaque</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-cebu-city">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class="lazyload"
                                                    src="https://www.dmcihomes.com{{asset('properties/Arden%20Estates-header-medium.jpg')}}"
                                                    alt="Condo in Cebu City" width="306" height-"200"="">
                                            </figure>

                                            <span>Cebu City</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-davao">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/DMCI_Homes_Verdon_Parc-small.png')}}"
                                                    alt="Condo in Davao City">
                                            </figure>

                                            <span>Davao City</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-makati">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Fortis Residences-featured-1657091424326-small.jpg')}}"
                                                    alt="Condo in Makati">
                                            </figure>

                                            <span>Makati</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-baguio">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Outlook Ridge Residences - Featured Image-small.png')}}"
                                                    alt="Condo in Baguio City">
                                            </figure>

                                            <span>Baguio City</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-antipolo">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class="lazyload"
                                                    src="https://www.dmcihomes.com{{asset('properties/Arden%20Estates-header-medium.jpg')}}"
                                                    alt="Condo in Antipolo City" width="306" height-"200"="">
                                            </figure>

                                            <span>Antipolo City</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-mandaluyong">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Tivoli Garden Residences - Featured-small.png')}}"
                                                    alt="Condo in Mandaluyong">
                                            </figure>

                                            <span>Mandaluyong</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-manila">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Torre De Manila-featured-1562641772520-small.png')}}"
                                                    alt="Condo in Manila">
                                            </figure>

                                            <span>Manila</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-las-pinas">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Sonora Garden Residences-featured-small.png')}}"
                                                    alt="Condo in Las Piñas">
                                            </figure>

                                            <span>Las Piñas</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-tuba-benguet">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class="lazyload"
                                                    src="https://www.dmcihomes.com{{asset('properties/Arden%20Estates-header-medium.jpg')}}"
                                                    alt="Condo in Tuba, Benguet" width="306" height-"200"="">
                                            </figure>

                                            <span>Tuba, Benguet</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-santa-rosa-laguna">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class="lazyload"
                                                    src="https://www.dmcihomes.com{{asset('properties/Arden%20Estates-header-medium.jpg')}}"
                                                    alt="Condo in Santa Rosa City, Laguna" width="306"
                                                    height-"200"="">
                                            </figure>

                                            <span>Santa Rosa City, Laguna</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-muntinlupa">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/rhapsody-residences-featured-small.png')}}"
                                                    alt="Condo in Muntinlupa">
                                            </figure>

                                            <span>Muntinlupa</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-san-juan-batangas">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Solmera Coast-featured-1689760125122-small.jpg')}}"
                                                    alt="Condo in San Juan, Batangas">
                                            </figure>

                                            <span>San Juan, Batangas</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-caloocan">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/The Calinea Tower-featured-1674097981762-small.jpg')}}"
                                                    alt="Condo in Caloocan">
                                            </figure>

                                            <span>Caloocan</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-carmona">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Villa Alegre Homes-featured-1667805126981-small.jpeg')}}"
                                                    alt="Condo in Carmona">
                                            </figure>

                                            <span>Carmona</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-cabuyao-laguna">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Willow Park Homes - Featured Image-small.png')}}"
                                                    alt="Condo in Cabuyao, Laguna">
                                            </figure>

                                            <span>Cabuyao, Laguna</span>
                                        </article>
                                    </a>
                                </div>
                                <div class="grid-item" data-animation="fadeInUp">
                                    <a href="https://www.dmcihomes.com/condo-cavite-city">

                                        <article class="article-item featured-article">
                                            <figure class="article-img ">
                                                <img class=""
                                                    src="{{asset('properties/Woodland Hills-featured-small.png')}}"
                                                    alt="Condo in Cavite City">
                                            </figure>

                                            <span>Cavite City</span>
                                        </article>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="slant-border slant-bot slant-grey slant-right"></div>
            </section>



            <section class="sec-pad compare brk" id="compared-properties-wrapper">
                <div class="container">
                    <div class="compare-content">
                        <ul class="flex" id="compared-properties">
                            <li>
                                <h2>Compare Homes</h2>
                            </li>
                            <li> </li>
                            <li> </li>
                            <li> </li>
                            <li> <button id="compare-now-btn" disabled=""
                                    class="btn btn-large btn-round btn-green btn-compare-all">Compare Now</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>


            <section class="sec-pad bg-grey contact-form">
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
                                    <input type="hidden" name="retURL"
                                        value="https://www.dmcihomes.com/thank-you">
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
                                            <select id="00N5g000003tIus" name="00N5g000003tIus"
                                                title="Inquiry Type">
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
                                                <p class="error-message">Input a valid email address (eg.
                                                    juan@gmail.com)</p>
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
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda
                                                        </option>
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
                                                        <option value="Central African Republic">Central African
                                                            Republic</option>
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
                                                        <option value="East Timor (Timor-Leste)">East Timor
                                                            (Timor-Leste)</option>
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
                                                        <option value="Philippines" selected="">Philippines
                                                        </option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                            and the Grenadines</option>
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
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago
                                                        </option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States of America">United States of
                                                            America</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican City (Holy See)">Vatican City (Holy
                                                            See)</option>
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
                                        <div class="col-sm-4">

                                            <div class="input-wrap">
                                                <label for="00N5g000003tnnR">Town / City <span
                                                        class="required-field">*</span></label>
                                                <input id="00N5g000003tnnR" name="00N5g000003tnnR" type="text">
                                                <p class="error-message">This field is required.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 inquiry-condition">
                                            <div class="input-wrap">
                                                <label for="00N5g000009mqi9" class="inquiry-label"
                                                    data-inquiry="customer-care" style="display: none;">Property
                                                    Owned: <span class="required-field">*</span></label>
                                                <label for="00N5g000009mqi9" class="inquiry-label"
                                                    data-inquiry="sales">Property Inquired: <span
                                                        class="required-field">*</span></label>
                                                <div class="custom-select">
                                                    <select id="00N5g000009mqi9" name="00N5g000009mqi9"
                                                        title="Property Inquired">
                                                        <option value="Accolade Place">Accolade Place</option>
                                                        <option value="Alder Residences">Alder Residences</option>
                                                        <option value="Alea Residences">Alea Residences</option>
                                                        <option value="Allegra Garden Place">Allegra Garden Place
                                                        </option>
                                                        <option value="Alta Vista de Boracay">Alta Vista de Boracay
                                                        </option>
                                                        <option value="Arista Place">Arista Place</option>
                                                        <option value="Asteria Residences">Asteria Residences</option>
                                                        <option value="The Aston Place">The Aston Place</option>
                                                        <option value="Belleza Towers">Belleza Towers</option>
                                                        <option value="Bonifacio Heights Condominiums">Bonifacio
                                                            Heights Condominiums</option>
                                                        <option value="Brio Tower">Brio Tower</option>
                                                        <option value="Bristle Ridge">Bristle Ridge</option>
                                                        <option value="Brixton Place">Brixton Place</option>
                                                        <option value="Calathea Place">Calathea Place</option>
                                                        <option value="Cardea Terraces">Cardea Terraces</option>
                                                        <option value="Cedar Crest Condominiums">Cedar Crest
                                                            Condominiums</option>
                                                        <option value="Cameron Residences">Cameron Residences</option>
                                                        <option value="Cypress Towers">Cypress Towers</option>
                                                        <option value="Dansalan Gardens Condominiums">Dansalan Gardens
                                                            Condominiums</option>
                                                        <option value="East Ortigas Mansions">East Ortigas Mansions
                                                        </option>
                                                        <option value="East Raya Gardens">East Raya Gardens</option>
                                                        <option value="Fairlane Residences">Fairlane Residences
                                                        </option>
                                                        <option value="Flair Towers">Flair Towers</option>
                                                        <option value="Fortis Residences">Fortis Residences</option>
                                                        <option value="Fairway Terraces">Fairway Terraces</option>
                                                        <option value="Hampstead Garden Condominiums">Hampstead Garden
                                                            Condominiums</option>
                                                        <option value="Infina Towers">Infina Towers</option>
                                                        <option value="Illumina Residences Manila">Illumina Residences
                                                            Manila</option>
                                                        <option value="Ivory Wood">Ivory Wood</option>
                                                        <option value="Kai Garden Residences">Kai Garden Residences
                                                        </option>
                                                        <option value="Kalea Heights">Kalea Heights</option>
                                                        <option value="La Verti Residences">La Verti Residences
                                                        </option>
                                                        <option value="Lakeview Manors">Lakeview Manors</option>
                                                        <option value="Levina Place">Levina Place</option>
                                                        <option value="Lumiere Residences">Lumiere Residences</option>
                                                        <option value="Lyre Garden Residences">Lyre Garden Residences
                                                        </option>
                                                        <option value="Magnolia Place">Magnolia Place</option>
                                                        <option value="Mahogany Place">Mahogany Place</option>
                                                        <option value="Mahogany Place 2">Mahogany Place 2</option>
                                                        <option value="Mahogany Place 3">Mahogany Place 3</option>
                                                        <option value="Maple Place">Maple Place</option>
                                                        <option value="Maricielo Villas">Maricielo Villas</option>
                                                        <option value="Mayfield Park Residences">Mayfield Park
                                                            Residences</option>
                                                        <option value="Mirea Residences">Mirea Residences</option>
                                                        <option value="Moncello Crest">Moncello Crest</option>
                                                        <option value="Morning Sun Townhomes">Morning Sun Townhomes
                                                        </option>
                                                        <option value="Mulberry Place">Mulberry Place</option>
                                                        <option value="Oak Harbor Residences">Oak Harbor Residences
                                                        </option>
                                                        <option value="Ohana Place">Ohana Place</option>
                                                        <option value="Olea Estates">Olea Estates</option>
                                                        <option value="One Castilla Place">One Castilla Place</option>
                                                        <option value="Outlook Ridge Residences">Outlook Ridge
                                                            Residences</option>
                                                        <option value="Palm Grove">Palm Grove</option>
                                                        <option value="Parama Residences">Parama Residences</option>
                                                        <option value="Prisma Residences">Prisma Residences</option>
                                                        <option value="Rainbow Ridge Condominiums">Rainbow Ridge
                                                            Condominiums</option>
                                                        <option value="Raya Garden Condominiums">Raya Garden
                                                            Condominiums</option>
                                                        <option value="Rhapsody Residences">Rhapsody Residences
                                                        </option>
                                                        <option value="Riverfront Residences">Riverfront Residences
                                                        </option>
                                                        <option value="Rosewood Pointe">Rosewood Pointe</option>
                                                        <option value="Royal Palm Residences">Royal Palm Residences
                                                        </option>
                                                        <option value="Sage Residences">Sage Residences</option>
                                                        <option value="Satori Residences">Satori Residences</option>
                                                        <option value="Sheridan Towers">Sheridan Towers</option>
                                                        <option value="Siena Park Residences">Siena Park Residences
                                                        </option>
                                                        <option value="Solmera Coast">Solmera Coast</option>
                                                        <option value="Sonora Garden Residences">Sonora Garden
                                                            Residences</option>
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
                                                        <option value="The Manors at Celebrity Place">The Manors at
                                                            Celebrity Place</option>
                                                        <option value="The Orabella">The Orabella</option>
                                                        <option value="The Oriana">The Oriana</option>
                                                        <option value="The Redwoods">The Redwoods</option>
                                                        <option value="The Valeron Tower">The Valeron Tower</option>
                                                        <option value="Tivoli Garden Residences">Tivoli Garden
                                                            Residences</option>
                                                        <option value="Torre de Manila">Torre de Manila</option>
                                                        <option value="Verawood Residences">Verawood Residences
                                                        </option>
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
                                                                            <option value="275">Associate Legal Counsel</option>
                                                                            <option value="229">BIM Project Specialist</option>
                                                                            <option value="247">BIM Specialist</option>
                                                                            <option value="251">Broker Coordinator</option>
                                                                            <option value="202">Business Analyst</option>
                                                                            <option value="259">Business Development Officer</option>
                                                                            <option value="258">Business Development Senior Specialist</option>
                                                                            <option value="141">Business Development Specialist</option>
                                                                            <option value="269">Business Process Analyst (Methods Analyst)</option>
                                                                            <option value="162">Civil Engineer</option>
                                                                            <option value="254">Civil Engineer - Site Planner and Scheduler</option>
                                                                            <option value="218">Company Nurse (HR Assistant)</option>
                                                                            <option value="273">Compensation Analyst</option>
                                                                            <option value="161">Contracts Engineer</option>
                                                                            <option value="160">Cost Engineer</option>
                                                                            <option value="246">Cost Officer</option>
                                                                            <option value="138">Credit &amp; Collection Assistant</option>
                                                                            <option value="203">Customer Care Specialist</option>
                                                                            <option value="157">Design Assistant/Architect</option>
                                                                            <option value="233">Electrical Engineer (Site-Based)</option>
                                                                            <option value="171">Equipment Engineer</option>
                                                                            <option value="199">Equipment Manager</option>
                                                                            <option value="274">ESG Analyst</option>
                                                                            <option value="214">Field Recruiter</option>
                                                                            <option value="136">Finance Assistant</option>
                                                                            <option value="261">Fit-Out Engineer</option>
                                                                            <option value="213">HR Assistant (Direct Labor - Recruitment)</option>
                                                                            <option value="215">HR Assistant (Direct Labor - Recruitment) - Cebu Based</option>
                                                                            <option value="244">HR Assistant/Specialist - Recruitment</option>
                                                                            <option value="260">HR Assistant/Specialist (Records Management)</option>
                                                                            <option value="216">HR Specialist - Training</option>
                                                                            <option value="262">Interior Design Assistant</option>
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
                                                                            <option value="272">MEPF Auditor</option>
                                                                            <option value="264">MEPF Engineer</option>
                                                                            <option value="217">Organizational Development Assistant/Specialist</option>
                                                                            <option value="208">Organizational Development Manager</option>
                                                                            <option value="238">Payroll Supervisor</option>
                                                                            <option value="227">Permits Assistant</option>
                                                                            <option value="212">Project Accountant</option>
                                                                            <option value="152">Project Development Specialist</option>
                                                                            <option value="177">Project-in-Charge</option>
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
                                                                            <option value="211">Tax Supervisor</option>
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
                                                        role="presentation" name="a-kwm2d9gjay8k" frameborder="0"
                                                        scrolling="no"
                                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcKHRwiAAAAAPmLGJqTqV37DxkqG59azLwp8v6-&amp;co=aHR0cHM6Ly93d3cuZG1jaWhvbWVzLmNvbTo0NDM.&amp;hl=en&amp;v=QquE1_MNjnFHgZF4HPsEcf_2&amp;size=normal&amp;cb=1ury542yku8u"></iframe>
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
                                                            data-src="#privacy-policy"><strong>Privacy
                                                                Policy</strong></a> as guided by RA10173 or the
                                                        Philippine Data Privacy Act of 2012.</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="custom-checkbox input-wrap data-privacy">
                                                    <input type="checkbox" id="allowedCRF" name="allowedCRF"
                                                        value="yes">
                                                    <label for="allowedCRF">I am allowing DMCI Homes’ Corporate
                                                        Accounts Management group to be my official sales representative
                                                        for the next 30 days. The group will exclusively be responsible
                                                        for any of my inquiries and processes needed, should I decide to
                                                        make a reservation/purchase.
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
                                <p>We always enjoy hearing from you and there are several ways that you can reach us.
                                </p>
                            </div>
                            <div class="other-channels">
                                <ul>
                                    <li class="animated hiding" data-animation="fadeInUp">
                                        <figure><img class="lazyload"
                                                src="/{{asset('properties/lazyload.png')}}"
                                                data-src="/frontend/images/page_template/icon-call.webp"
                                                alt="" width="40" height="40"></figure>
                                        <h4><strong>Phone</strong></h4>
                                        <p>Our phone lines are available every. <strong>Monday to Friday</strong> from
                                            <span> 8AM to 5PM</span>.
                                            <!-- <a href="#" class="jq-with-tooltip">See our phone line listing.</a> -->
                                        </p>

                                        <div class="channel-tooltips">
                                            <!-- <h3>Phone Line list</h3> -->
                                            <p><a href="tel:+63253248888"><span>Sales:</span> +63 (2) 53248888</a></p>
                                            <p><a href="tel:+63284037368"><span>Leasing:</span> +63 (2) 84037368</a>
                                            </p>
                                            <p><a href="tel:+63285557777"><span>Employment Inquiry:</span> +63 (2)
                                                    85557777</a></p>
                                            <p><a href="tel:+639189183456"><span>Customer Care (SMART):</span> (+63)
                                                    918 9183456 </a></p>
                                            <p><a href="tel:+639178115268"><span>Customer Care (GLOBE):</span> (+63)
                                                    917 8115268 </a></p>
                                            <p><a href="tel:+6328s5557777"><span>Other Inquiries:</span> +63 (2)
                                                    85557777</a></p>
                                        </div>

                                    </li>
                                    <li class="animated hiding" data-animation="fadeInUp">
                                        <figure><img class="lazyload"
                                                src="/{{asset('properties/lazyload.png')}}"
                                                data-src="/frontend/images/page_template/icon-email.webp"
                                                alt="" width="40" height="40"></figure>
                                        <h4><strong>Email</strong></h4>
                                        <p>You may reach us by email for all manner of information. Send an enquiry to
                                            the following designated email list.</p>

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
                                        <figure><img class="lazyload"
                                                src="/{{asset('properties/lazyload.png')}}"
                                                data-src="/frontend/images/calendar.webp" alt=""
                                                width="40" height="40"></figure>
                                        <h4><strong>Set an Appointment</strong></h4>
                                        <p>Avoid the long queues, book your next visit to our customer helpdesk at <a
                                                href="https://book.dmcihomes.com/"
                                                target="_blanks"><strong>book.dmcihomes.com</strong></a></p>
                                    </li>
                                    <li class="animated hiding" data-animation="fadeInUp">
                                        <figure><img class="whistles-icon lazyload"
                                                style="width:60px; margin-left: -8px;"
                                                src="/{{asset('properties/lazyload.png')}}"
                                                data-src="/frontend/images/whistles.webp" alt=""
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
                <p>We, DMCI Project Developers, Inc. (the “Company”), together with its subsidiaries, special projects
                    and business units, highly value the confidentiality of information you have entrusted us. We highly
                    regard your personal, sensitive and privileged information such that it will only be used for its
                    intended purpose (or as may be required by existing national and local laws, rules and regulations),
                    kept within the agreed period and protected against data privacy breach. Any personal, sensitive and
                    privileged information that you provide shall be kept safe under the Data Privacy Act of 2012 (the
                    “Act”), applicable laws of the Philippines and the Company’s very own commitment through its Data
                    Privacy Policy.</p>
                <p>Personal, sensitive and privileged information that you provide shall be used for transactions
                    related to the sale of the Company’s products and all matters arising out of the said transaction.
                </p>
                <p>All information collected by the Company shall be considered accurate unless the Client/Potential
                    Client requests for update. It shall never be the responsibility of the Company to ensure
                    validity/accuracy of information shared by the Client/Potential Client.</p>
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
                    information from loss, misuse, modification, unauthorized or accidental access or disclosure,
                    alteration or destruction. We put in effect safeguards such as:</p>
                <p>Keeping and protecting your information using a secured server behind a firewall, deploying
                    encryption on computing devices and physical security controls</p>
                <p>Restricting access to your information only to qualified and authorized personnel who hold your
                    information with strict confidentiality including third-party personnel/company who may be required
                    to process your information.</p>
                <p>The data will be kept within 10 years from date of last engagement (e.g. release of transferred
                    title, release of documents related to back-out) or as may be required by existing laws, rules and
                    regulations, unless you request your data to be deleted in our systems, databases and hard copies
                    earlier than this date, subject to limitation of applicable laws and/or the Act. Once deleted, your
                    information will no longer be searchable or included in anonymous searches and will be completely
                    removed from all the storage location.</p>
                <p>By agreeing to this policy, you explicitly and unambiguously consent to the collection, processing
                    and storage of your personal, sensitive and privileged data by DMCI Project Developers, Inc. for the
                    purpose(s) described in this Data Privacy Notice.</p>
            </div>
        </div>

        <footer class="sec-pad sec-default" id="footer">
            <!-- <div class="slant-border slant-bot slant-blue slant-right"></div> -->
            <div class="bg-blue">
                <div class="container clearfix">

                    <div class="footer-info fl">
                        <figure class="logo">
                            <a href="#"><img class="lazyload"
                                    src="/{{asset('properties/lazyload.png')}}"
                                    data-src="/frontend/images/page_template/logo-dmci.webp " alt="DMCI Homes Logo"
                                    width="170" height="37"></a>
                        </figure>
                        <p>With skill, passion and dedication, we continue our quest in attaining engineering excellence
                            in quality homebuilding and community development, that shall endure generations.</p>
                    </div>
                    <div class="footer-detail fl">
                        <div class="row">
                            <div class="col-sm-5 footer-address">
                                <h4>Head Office</h4>

                                <p><a data-fancybox="" data-type="iframe"
                                        data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1930.9966604879698!2d121.0134147!3d14.5423746!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63ca380cdb6728d1!2sDMCI%20Homes%20Corporate%20Center!5e0!3m2!1sen!2sph!4v1570602301415!5m2!1sen!2sph"
                                        href="javascript:;" class="footer-map-link">DMCI Homes Corporate Center,
                                        1321 Apolinario Street, Bangkal, Makati City, Metro Manila, PH 1233</a></p>
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
                                    <li><a href="https://communities.dmcihomes.com/" target="_blank">Community</a>
                                    </li>
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
                                                class="icon-home-2 icon-youtube"></span> <span
                                                class="fs-text">Youtube </span></a></li>

                                    <li class="qq-wrap">
                                        <a class="hide-mobile" data-fancybox-image-qr="" href="#qq-modal"
                                            data-caption="Scan the QR code">
                                            <figure><img class="lazyload"
                                                    src="/{{asset('properties/lazyload.png')}}"
                                                    data-src="/frontend/images/small-qr-qq.webp" width="18"
                                                    height="18" alt=""></figure>
                                            <span class="fs-text">QQ</span>
                                        </a>


                                        <a data-fancybox-image-qr="" data-src="#qq-brand" class="hide-desktop">
                                            <img class="lazyload" src="/{{asset('properties/lazyload.png')}}"
                                                data-src="/frontend/images/qq-logo.webp" width="24"
                                                height="28" alt="">
                                        </a>
                                    </li>
                                    <li class="wechat-wrap">
                                        <a class="hide-mobile" data-fancybox-image-qr="" href="#wechat-modal"
                                            data-caption="Scan the QR code to add me on WeChat">
                                            <figure><img class="lazyload"
                                                    src="/{{asset('properties/lazyload.png')}}"
                                                    data-src="/frontend/images/small-qr-wechat.webp" width="18"
                                                    height="18" alt=""></figure>
                                            <span class="fs-text">WeChat</span>
                                        </a>

                                        <a data-fancybox-image-qr="" data-src="#wechat-brand"
                                            class="hide-desktop">
                                            <img class="lazyload" src="/{{asset('properties/lazyload.png')}}"
                                                data-src="/frontend/images/wechat-logo.webp" width="34"
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
                        <figure><img class="lazyload" src="/{{asset('properties/lazyload.png')}}"
                                data-src="/frontend/images/qr-qq-large.webp" alt=""></figure>
                        <p><strong>QQ ID : </strong> <a
                                href="http://qm.qq.com/cgi-bin/qm/qr?k=9JbHHMYoo-WJw0_sWtnFQiaB8YZeXsyh">2456975737</a>
                        </p>
                    </div>
                </div>
            </div>

            <div id="wechat-modal" class="read no-padding" style="display: none;">
                <div class="content">
                    <div class="sec-head">
                        <figure><img class="lazyload" src="/{{asset('properties/lazyload.png')}}"
                                data-src="/frontend/images/qr-wechat-large.webp" alt=""></figure>
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
                            <span class="icon-home-2 icon-facebook"></span> <span
                                class="fs-text">Facebook</span></a>
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

    <link rel="preload" href="{{asset('css/about.css')}}" as="style">
    <link rel="preload" href="{{asset('css/property-list-page.min.css')}}" as="style">
    <link rel="stylesheet" href="{{asset('css/about.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('css/property-list-page.min.css')}}" media="all">
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
    <script defer="">
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
                    '">                        <figure class="property-img">                            <img class="lazyload" src="{{asset('properties/lazyload.png')}}" data-src="' +
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
                    '">                        <figure class="property-img">                            <img class="lazyload" src="{{asset('properties/lazyload.png')}}" data-src="' +
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $(".jq-close").click(function(){
      // Close the content here
      $(".property-nav").removeClass("activated");
      return false; // Prevent default behavior of anchor tag
    });
  });
</script>

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



            embedded_svc.settings.enabledFeatures = ['LiveAgent'];
            embedded_svc.settings.entryFeature = 'LiveAgent';



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
    </script>

    <div style="display: none; visibility: hidden;">
        <script>
            fbq("track", "ViewContent", {
                value: 0,
                currency: "PHP"
            });
        </script>
    </div>
    <script id="liveagent-esw-script" type="text/javascript"
        src="https://service.force.com/embeddedservice/5.0/client/liveagent.esw.min.js"></script>
    <div id="batBeacon852205403926" style="width: 0px; height: 0px; display: none; visibility: hidden;"><img
            id="batBeacon994636424284" width="0" height="0" alt=""
            src="https://bat.bing.com/action/0?ti=26169032&amp;Ver=2&amp;mid=ef9ece7e-9571-4a4b-b838-a183402dedc1&amp;sid=26444450e00811ee82da43833d0bbb92&amp;vid=00e39ef0cf1511ee9d27d93e2ab67dea&amp;vids=0&amp;msclkid=N&amp;uach=pv%3D10.0.0&amp;pi=918639831&amp;lg=en-US&amp;sw=1366&amp;sh=768&amp;sc=24&amp;tl=Homes,%20Real%20Estate%20and%20Condominium%20%7C%20DMCI%20Homes&amp;p=https%3A%2F%2Fwww.dmcihomes.com%2Fproperties&amp;r=https%3A%2F%2Fwww.dmcihomes.com%2F&amp;lt=1220&amp;evt=pageLoad&amp;sv=1&amp;rn=719171"
            style="width: 0px; height: 0px; display: none; visibility: hidden;"></div>
    <form id="fileUploadForm" enctype="multipart/form-data" method="post" target="fileUploadIframe"><input
            type="file" id="fileSelector" name="file" style="display: none;"><input name="filename"
            type="hidden"></form><iframe id="fileUploadIframe" name="fileUploadIframe" title="FileUploadFrame"
        style="display: none;"></iframe><iframe id="esw_storage_iframe"
        src="https://service.force.com/embeddedservice/5.0/esw.html?parent=https://www.dmcihomes.com/properties"
        title="Live Chat Metadata" style="display: none;"></iframe>
    <script type="text/javascript"
        src="https://d.la1-core1.sfdc-mchho0.salesforceliveagent.com/chat/rest/EmbeddedService/EmbeddedServiceConfig.jsonp?Settings.prefix=EmbeddedService&amp;org_id=00D5g000000J3Js&amp;EmbeddedServiceConfig.configName=WEB_CHAT&amp;callback=embedded_svc.liveAgentAPI.handleChatSettings&amp;version=48">
    </script>
    <script id="invite-esw-script" type="text/javascript"
        src="https://service.force.com/embeddedservice/5.0/client/invite.esw.min.js"></script>
    <div class="embeddedServiceHelpButton">

    <script id="inert-script" type="text/javascript" src="https://service.force.com/embeddedservice/5.0/utils/inert.min.js">
    </script>
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
                title="recaptcha challenge expires in two minutes" name="c-kwm2d9gjay8k" frameborder="0"
                scrolling="no"
                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=QquE1_MNjnFHgZF4HPsEcf_2&amp;k=6LcKHRwiAAAAAPmLGJqTqV37DxkqG59azLwp8v6-"
                style="width: 100%; height: 100%;"></iframe></div>
    </div>
    <script>
        $(document).ready(function(){
          $(".jq-close").click(function(){
            // Your closing action here
            return false; // Prevent default behavior of anchor tag
          });
        });
      </script>
</body>

</html>
