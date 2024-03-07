/*! lazysizes - v5.3.2 */

!function(e) {
    var t = function(u, D, f) {
        "use strict";
        var k, H;
        if (function() {
            var e;
            var t = {
                lazyClass: "lazyload",
                loadedClass: "lazyloaded",
                loadingClass: "lazyloading",
                preloadClass: "lazypreload",
                errorClass: "lazyerror",
                autosizesClass: "lazyautosizes",
                fastLoadedClass: "ls-is-cached",
                iframeLoadMode: 0,
                srcAttr: "data-src",
                srcsetAttr: "data-srcset",
                sizesAttr: "data-sizes",
                minSize: 40,
                customMedia: {},
                init: true,
                expFactor: 1.5,
                hFac: .8,
                loadMode: 2,
                loadHidden: true,
                ricTimeout: 0,
                throttleDelay: 125
            };
            H = u.lazySizesConfig || u.lazysizesConfig || {};
            for (e in t) {
                if (!(e in H)) {
                    H[e] = t[e]
                }
            }
        }(),
        !D || !D.getElementsByClassName) {
            return {
                init: function() {},
                cfg: H,
                noSupport: true
            }
        }
        var O = D.documentElement
          , i = u.HTMLPictureElement
          , P = "addEventListener"
          , $ = "getAttribute"
          , q = u[P].bind(u)
          , I = u.setTimeout
          , U = u.requestAnimationFrame || I
          , o = u.requestIdleCallback
          , j = /^picture$/i
          , r = ["load", "error", "lazyincluded", "_lazyloaded"]
          , a = {}
          , G = Array.prototype.forEach
          , J = function(e, t) {
            if (!a[t]) {
                a[t] = new RegExp("(\\s|^)" + t + "(\\s|$)")
            }
            return a[t].test(e[$]("class") || "") && a[t]
        }
          , K = function(e, t) {
            if (!J(e, t)) {
                e.setAttribute("class", (e[$]("class") || "").trim() + " " + t)
            }
        }
          , Q = function(e, t) {
            var a;
            if (a = J(e, t)) {
                e.setAttribute("class", (e[$]("class") || "").replace(a, " "))
            }
        }
          , V = function(t, a, e) {
            var i = e ? P : "removeEventListener";
            if (e) {
                V(t, a)
            }
            r.forEach(function(e) {
                t[i](e, a)
            })
        }
          , X = function(e, t, a, i, r) {
            var n = D.createEvent("Event");
            if (!a) {
                a = {}
            }
            a.instance = k;
            n.initEvent(t, !i, !r);
            n.detail = a;
            e.dispatchEvent(n);
            return n
        }
          , Y = function(e, t) {
            var a;
            if (!i && (a = u.picturefill || H.pf)) {
                if (t && t.src && !e[$]("srcset")) {
                    e.setAttribute("srcset", t.src)
                }
                a({
                    reevaluate: true,
                    elements: [e]
                })
            } else if (t && t.src) {
                e.src = t.src
            }
        }
          , Z = function(e, t) {
            return (getComputedStyle(e, null) || {})[t]
        }
          , s = function(e, t, a) {
            a = a || e.offsetWidth;
            while (a < H.minSize && t && !e._lazysizesWidth) {
                a = t.offsetWidth;
                t = t.parentNode
            }
            return a
        }
          , ee = function() {
            var a, i;
            var t = [];
            var r = [];
            var n = t;
            var s = function() {
                var e = n;
                n = t.length ? r : t;
                a = true;
                i = false;
                while (e.length) {
                    e.shift()()
                }
                a = false
            };
            var e = function(e, t) {
                if (a && !t) {
                    e.apply(this, arguments)
                } else {
                    n.push(e);
                    if (!i) {
                        i = true;
                        (D.hidden ? I : U)(s)
                    }
                }
            };
            e._lsFlush = s;
            return e
        }()
          , te = function(a, e) {
            return e ? function() {
                ee(a)
            }
            : function() {
                var e = this;
                var t = arguments;
                ee(function() {
                    a.apply(e, t)
                })
            }
        }
          , ae = function(e) {
            var a;
            var i = 0;
            var r = H.throttleDelay;
            var n = H.ricTimeout;
            var t = function() {
                a = false;
                i = f.now();
                e()
            };
            var s = o && n > 49 ? function() {
                o(t, {
                    timeout: n
                });
                if (n !== H.ricTimeout) {
                    n = H.ricTimeout
                }
            }
            : te(function() {
                I(t)
            }, true);
            return function(e) {
                var t;
                if (e = e === true) {
                    n = 33
                }
                if (a) {
                    return
                }
                a = true;
                t = r - (f.now() - i);
                if (t < 0) {
                    t = 0
                }
                if (e || t < 9) {
                    s()
                } else {
                    I(s, t)
                }
            }
        }
          , ie = function(e) {
            var t, a;
            var i = 99;
            var r = function() {
                t = null;
                e()
            };
            var n = function() {
                var e = f.now() - a;
                if (e < i) {
                    I(n, i - e)
                } else {
                    (o || r)(r)
                }
            };
            return function() {
                a = f.now();
                if (!t) {
                    t = I(n, i)
                }
            }
        }
          , e = function() {
            var v, m, c, h, e;
            var y, z, g, p, C, b, A;
            var n = /^img$/i;
            var d = /^iframe$/i;
            var E = "onscroll"in u && !/(gle|ing)bot/.test(navigator.userAgent);
            var _ = 0;
            var w = 0;
            var M = 0;
            var N = -1;
            var L = function(e) {
                M--;
                if (!e || M < 0 || !e.target) {
                    M = 0
                }
            };
            var x = function(e) {
                if (A == null) {
                    A = Z(D.body, "visibility") == "hidden"
                }
                return A || !(Z(e.parentNode, "visibility") == "hidden" && Z(e, "visibility") == "hidden")
            };
            var W = function(e, t) {
                var a;
                var i = e;
                var r = x(e);
                g -= t;
                b += t;
                p -= t;
                C += t;
                while (r && (i = i.offsetParent) && i != D.body && i != O) {
                    r = (Z(i, "opacity") || 1) > 0;
                    if (r && Z(i, "overflow") != "visible") {
                        a = i.getBoundingClientRect();
                        r = C > a.left && p < a.right && b > a.top - 1 && g < a.bottom + 1
                    }
                }
                return r
            };
            var t = function() {
                var e, t, a, i, r, n, s, o, l, u, f, c;
                var d = k.elements;
                if ((h = H.loadMode) && M < 8 && (e = d.length)) {
                    t = 0;
                    N++;
                    for (; t < e; t++) {
                        if (!d[t] || d[t]._lazyRace) {
                            continue
                        }
                        if (!E || k.prematureUnveil && k.prematureUnveil(d[t])) {
                            R(d[t]);
                            continue
                        }
                        if (!(o = d[t][$]("data-expand")) || !(n = o * 1)) {
                            n = w
                        }
                        if (!u) {
                            u = !H.expand || H.expand < 1 ? O.clientHeight > 500 && O.clientWidth > 500 ? 500 : 370 : H.expand;
                            k._defEx = u;
                            f = u * H.expFactor;
                            c = H.hFac;
                            A = null;
                            if (w < f && M < 1 && N > 2 && h > 2 && !D.hidden) {
                                w = f;
                                N = 0
                            } else if (h > 1 && N > 1 && M < 6) {
                                w = u
                            } else {
                                w = _
                            }
                        }
                        if (l !== n) {
                            y = innerWidth + n * c;
                            z = innerHeight + n;
                            s = n * -1;
                            l = n
                        }
                        a = d[t].getBoundingClientRect();
                        if ((b = a.bottom) >= s && (g = a.top) <= z && (C = a.right) >= s * c && (p = a.left) <= y && (b || C || p || g) && (H.loadHidden || x(d[t])) && (m && M < 3 && !o && (h < 3 || N < 4) || W(d[t], n))) {
                            R(d[t]);
                            r = true;
                            if (M > 9) {
                                break
                            }
                        } else if (!r && m && !i && M < 4 && N < 4 && h > 2 && (v[0] || H.preloadAfterLoad) && (v[0] || !o && (b || C || p || g || d[t][$](H.sizesAttr) != "auto"))) {
                            i = v[0] || d[t]
                        }
                    }
                    if (i && !r) {
                        R(i)
                    }
                }
            };
            var a = ae(t);
            var S = function(e) {
                var t = e.target;
                if (t._lazyCache) {
                    delete t._lazyCache;
                    return
                }
                L(e);
                K(t, H.loadedClass);
                Q(t, H.loadingClass);
                V(t, B);
                X(t, "lazyloaded")
            };
            var i = te(S);
            var B = function(e) {
                i({
                    target: e.target
                })
            };
            var T = function(e, t) {
                var a = e.getAttribute("data-load-mode") || H.iframeLoadMode;
                if (a == 0) {
                    e.contentWindow.location.replace(t)
                } else if (a == 1) {
                    e.src = t
                }
            };
            var F = function(e) {
                var t;
                var a = e[$](H.srcsetAttr);
                if (t = H.customMedia[e[$]("data-media") || e[$]("media")]) {
                    e.setAttribute("media", t)
                }
                if (a) {
                    e.setAttribute("srcset", a)
                }
            };
            var s = te(function(t, e, a, i, r) {
                var n, s, o, l, u, f;
                if (!(u = X(t, "lazybeforeunveil", e)).defaultPrevented) {
                    if (i) {
                        if (a) {
                            K(t, H.autosizesClass)
                        } else {
                            t.setAttribute("sizes", i)
                        }
                    }
                    s = t[$](H.srcsetAttr);
                    n = t[$](H.srcAttr);
                    if (r) {
                        o = t.parentNode;
                        l = o && j.test(o.nodeName || "")
                    }
                    f = e.firesLoad || "src"in t && (s || n || l);
                    u = {
                        target: t
                    };
                    K(t, H.loadingClass);
                    if (f) {
                        clearTimeout(c);
                        c = I(L, 2500);
                        V(t, B, true)
                    }
                    if (l) {
                        G.call(o.getElementsByTagName("source"), F)
                    }
                    if (s) {
                        t.setAttribute("srcset", s)
                    } else if (n && !l) {
                        if (d.test(t.nodeName)) {
                            T(t, n)
                        } else {
                            t.src = n
                        }
                    }
                    if (r && (s || l)) {
                        Y(t, {
                            src: n
                        })
                    }
                }
                if (t._lazyRace) {
                    delete t._lazyRace
                }
                Q(t, H.lazyClass);
                ee(function() {
                    var e = t.complete && t.naturalWidth > 1;
                    if (!f || e) {
                        if (e) {
                            K(t, H.fastLoadedClass)
                        }
                        S(u);
                        t._lazyCache = true;
                        I(function() {
                            if ("_lazyCache"in t) {
                                delete t._lazyCache
                            }
                        }, 9)
                    }
                    if (t.loading == "lazy") {
                        M--
                    }
                }, true)
            });
            var R = function(e) {
                if (e._lazyRace) {
                    return
                }
                var t;
                var a = n.test(e.nodeName);
                var i = a && (e[$](H.sizesAttr) || e[$]("sizes"));
                var r = i == "auto";
                if ((r || !m) && a && (e[$]("src") || e.srcset) && !e.complete && !J(e, H.errorClass) && J(e, H.lazyClass)) {
                    return
                }
                t = X(e, "lazyunveilread").detail;
                if (r) {
                    re.updateElem(e, true, e.offsetWidth)
                }
                e._lazyRace = true;
                M++;
                s(e, t, r, i, a)
            };
            var r = ie(function() {
                H.loadMode = 3;
                a()
            });
            var o = function() {
                if (H.loadMode == 3) {
                    H.loadMode = 2
                }
                r()
            };
            var l = function() {
                if (m) {
                    return
                }
                if (f.now() - e < 999) {
                    I(l, 999);
                    return
                }
                m = true;
                H.loadMode = 3;
                a();
                q("scroll", o, true)
            };
            return {
                _: function() {
                    e = f.now();
                    k.elements = D.getElementsByClassName(H.lazyClass);
                    v = D.getElementsByClassName(H.lazyClass + " " + H.preloadClass);
                    q("scroll", a, true);
                    q("resize", a, true);
                    q("pageshow", function(e) {
                        if (e.persisted) {
                            var t = D.querySelectorAll("." + H.loadingClass);
                            if (t.length && t.forEach) {
                                U(function() {
                                    t.forEach(function(e) {
                                        if (e.complete) {
                                            R(e)
                                        }
                                    })
                                })
                            }
                        }
                    });
                    if (u.MutationObserver) {
                        new MutationObserver(a).observe(O, {
                            childList: true,
                            subtree: true,
                            attributes: true
                        })
                    } else {
                        O[P]("DOMNodeInserted", a, true);
                        O[P]("DOMAttrModified", a, true);
                        setInterval(a, 999)
                    }
                    q("hashchange", a, true);
                    ["focus", "mouseover", "click", "load", "transitionend", "animationend"].forEach(function(e) {
                        D[P](e, a, true)
                    });
                    if (/d$|^c/.test(D.readyState)) {
                        l()
                    } else {
                        q("load", l);
                        D[P]("DOMContentLoaded", a);
                        I(l, 2e4)
                    }
                    if (k.elements.length) {
                        t();
                        ee._lsFlush()
                    } else {
                        a()
                    }
                },
                checkElems: a,
                unveil: R,
                _aLSL: o
            }
        }()
          , re = function() {
            var a;
            var n = te(function(e, t, a, i) {
                var r, n, s;
                e._lazysizesWidth = i;
                i += "px";
                e.setAttribute("sizes", i);
                if (j.test(t.nodeName || "")) {
                    r = t.getElementsByTagName("source");
                    for (n = 0,
                    s = r.length; n < s; n++) {
                        r[n].setAttribute("sizes", i)
                    }
                }
                if (!a.detail.dataAttr) {
                    Y(e, a.detail)
                }
            });
            var i = function(e, t, a) {
                var i;
                var r = e.parentNode;
                if (r) {
                    a = s(e, r, a);
                    i = X(e, "lazybeforesizes", {
                        width: a,
                        dataAttr: !!t
                    });
                    if (!i.defaultPrevented) {
                        a = i.detail.width;
                        if (a && a !== e._lazysizesWidth) {
                            n(e, r, i, a)
                        }
                    }
                }
            };
            var e = function() {
                var e;
                var t = a.length;
                if (t) {
                    e = 0;
                    for (; e < t; e++) {
                        i(a[e])
                    }
                }
            };
            var t = ie(e);
            return {
                _: function() {
                    a = D.getElementsByClassName(H.autosizesClass);
                    q("resize", t)
                },
                checkElems: t,
                updateElem: i
            }
        }()
          , t = function() {
            if (!t.i && D.getElementsByClassName) {
                t.i = true;
                re._();
                e._()
            }
        };
        return I(function() {
            H.init && t()
        }),
        k = {
            cfg: H,
            autoSizer: re,
            loader: e,
            init: t,
            uP: Y,
            aC: K,
            rC: Q,
            hC: J,
            fire: X,
            gW: s,
            rAF: ee
        }
    }(e, e.document, Date);
    e.lazySizes = t,
    "object" == typeof module && module.exports && (module.exports = t)
}("undefined" != typeof window ? window : {});
// Fancybox
!function(t, e, n, i) {
    "use strict";
    if (t.console = t.console || {
        info: function(t) {}
    },
    n)
        if (n.fn.fancybox)
            console.info("fancyBox already initialized");
        else {
            var o, s = {
                loop: !1,
                gutter: 50,
                keyboard: !0,
                arrows: !0,
                infobar: !0,
                smallBtn: "auto",
                toolbar: "auto",
                buttons: ["zoom", "thumbs", "close"],
                idleTime: 3,
                protect: !1,
                modal: !1,
                image: {
                    preload: !1
                },
                ajax: {
                    settings: {
                        data: {
                            fancybox: !0
                        }
                    }
                },
                iframe: {
                    tpl: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen allowtransparency="true" src=""></iframe>',
                    preload: !0,
                    css: {},
                    attr: {
                        scrolling: "auto"
                    }
                },
                defaultType: "image",
                animationEffect: "zoom",
                animationDuration: 366,
                zoomOpacity: "auto",
                transitionEffect: "fade",
                transitionDuration: 366,
                slideClass: "",
                baseClass: "",
                baseTpl: '<div class="fancybox-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div><div class="fancybox-toolbar">{{buttons}}</div><div class="fancybox-navigation">{{arrows}}</div><div class="fancybox-stage"></div><div class="fancybox-caption"></div></div></div>',
                spinnerTpl: '<div class="fancybox-loading"></div>',
                errorTpl: '<div class="fancybox-error"><p>{{ERROR}}</p></div>',
                btnTpl: {
                    download: '<a download data-fancybox-download class="fancybox-button fancybox-button--download" title="{{DOWNLOAD}}" href="javascript:;"><svg viewBox="0 0 40 40"><path d="M13,16 L20,23 L27,16 M20,7 L20,23 M10,24 L10,28 L30,28 L30,24" /></svg></a>',
                    zoom: '<button data-fancybox-zoom class="fancybox-button fancybox-button--zoom" title="{{ZOOM}}"><svg viewBox="0 0 40 40"><path d="M18,17 m-8,0 a8,8 0 1,0 16,0 a8,8 0 1,0 -16,0 M24,22 L31,29" /></svg></button>',
                    close: '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}"><svg viewBox="0 0 40 40"><path d="M10,10 L30,30 M30,10 L10,30" /></svg></button>',
                    smallBtn: '<button data-fancybox-close class="fancybox-close-small" title="{{CLOSE}}"><svg viewBox="0 0 32 32"><path d="M10,10 L22,22 M22,10 L10,22"></path></svg></button>',
                    arrowLeft: '<a data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}" href="javascript:;"><svg viewBox="0 0 40 40"><path d="M18,12 L10,20 L18,28 M10,20 L30,20"></path></svg></a>',
                    arrowRight: '<a data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}" href="javascript:;"><svg viewBox="0 0 40 40"><path d="M10,20 L30,20 M22,12 L30,20 L22,28"></path></svg></a>'
                },
                parentEl: "body",
                autoFocus: !1,
                backFocus: !0,
                trapFocus: !0,
                fullScreen: {
                    autoStart: !1
                },
                touch: {
                    vertical: !0,
                    momentum: !0
                },
                hash: null,
                media: {},
                slideShow: {
                    autoStart: !1,
                    speed: 4e3
                },
                thumbs: {
                    autoStart: !1,
                    hideOnClose: !0,
                    parentEl: ".fancybox-container",
                    axis: "y"
                },
                wheel: "auto",
                onInit: n.noop,
                beforeLoad: n.noop,
                afterLoad: n.noop,
                beforeShow: n.noop,
                afterShow: n.noop,
                beforeClose: n.noop,
                afterClose: n.noop,
                onActivate: n.noop,
                onDeactivate: n.noop,
                clickContent: function(t, e) {
                    return "image" === t.type && "zoom"
                },
                clickSlide: "close",
                clickOutside: "close",
                dblclickContent: !1,
                dblclickSlide: !1,
                dblclickOutside: !1,
                mobile: {
                    idleTime: !1,
                    clickContent: function(t, e) {
                        return "image" === t.type && "toggleControls"
                    },
                    clickSlide: function(t, e) {
                        return "image" === t.type ? "toggleControls" : "close"
                    },
                    dblclickContent: function(t, e) {
                        return "image" === t.type && "zoom"
                    },
                    dblclickSlide: function(t, e) {
                        return "image" === t.type && "zoom"
                    }
                },
                lang: "en",
                i18n: {
                    en: {
                        CLOSE: "Close",
                        NEXT: "Next",
                        PREV: "Previous",
                        ERROR: "The requested content cannot be loaded. <br/> Please try again later.",
                        PLAY_START: "Start slideshow",
                        PLAY_STOP: "Pause slideshow",
                        FULL_SCREEN: "Full screen",
                        THUMBS: "Thumbnails",
                        DOWNLOAD: "Download",
                        SHARE: "Share",
                        ZOOM: "Zoom"
                    },
                    de: {
                        CLOSE: "Schliessen",
                        NEXT: "Weiter",
                        PREV: "Zurück",
                        ERROR: "Die angeforderten Daten konnten nicht geladen werden. <br/> Bitte versuchen Sie es später nochmal.",
                        PLAY_START: "Diaschau starten",
                        PLAY_STOP: "Diaschau beenden",
                        FULL_SCREEN: "Vollbild",
                        THUMBS: "Vorschaubilder",
                        DOWNLOAD: "Herunterladen",
                        SHARE: "Teilen",
                        ZOOM: "Maßstab"
                    }
                }
            }, a = n(t), r = n(e), c = 0, l = t.requestAnimationFrame || t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || t.oRequestAnimationFrame || function(e) {
                return t.setTimeout(e, 1e3 / 60)
            }
            , h = function() {
                var t, n = e.createElement("fakeelement"), i = {
                    transition: "transitionend",
                    OTransition: "oTransitionEnd",
                    MozTransition: "transitionend",
                    WebkitTransition: "webkitTransitionEnd"
                };
                for (t in i)
                    if (void 0 !== n.style[t])
                        return i[t];
                return "transitionend"
            }(), d = function(t) {
                return t && t.length && t[0].offsetHeight
            }, u = function(t, e) {
                var i = n.extend(!0, {}, t, e);
                return n.each(e, function(t, e) {
                    n.isArray(e) && (i[t] = e)
                }),
                i
            }, f = function(t, i, o) {
                this.opts = u({
                    index: o
                }, n.fancybox.defaults),
                n.isPlainObject(i) && (this.opts = u(this.opts, i)),
                n.fancybox.isMobile && (this.opts = u(this.opts, this.opts.mobile)),
                this.id = this.opts.id || ++c,
                this.currIndex = parseInt(this.opts.index, 10) || 0,
                this.prevIndex = null,
                this.prevPos = null,
                this.currPos = 0,
                this.firstRun = !0,
                this.group = [],
                this.slides = {},
                this.addContent(t),
                this.group.length && (this.$lastFocus = n(e.activeElement).trigger("blur"),
                this.init())
            };
            n.extend(f.prototype, {
                init: function() {
                    var i, o, s, a = this, r = a.group[a.currIndex].opts, c = n.fancybox.scrollbarWidth;
                    n.fancybox.getInstance() || !1 === r.hideScrollbar || (n("body").addClass("fancybox-active"),
                    !n.fancybox.isMobile && e.body.scrollHeight > t.innerHeight && (void 0 === c && (i = n('<div style="width:100px;height:100px;overflow:scroll;" />').appendTo("body"),
                    c = n.fancybox.scrollbarWidth = i[0].offsetWidth - i[0].clientWidth,
                    i.remove()),
                    n("head").append('<style id="fancybox-style-noscroll" type="text/css">.compensate-for-scrollbar { margin-right: ' + c + "px; }</style>"),
                    n("body").addClass("compensate-for-scrollbar"))),
                    s = "",
                    n.each(r.buttons, function(t, e) {
                        s += r.btnTpl[e] || ""
                    }),
                    o = n(a.translate(a, r.baseTpl.replace("{{buttons}}", s).replace("{{arrows}}", r.btnTpl.arrowLeft + r.btnTpl.arrowRight))).attr("id", "fancybox-container-" + a.id).addClass("fancybox-is-hidden").addClass(r.baseClass).data("FancyBox", a).appendTo(r.parentEl),
                    a.$refs = {
                        container: o
                    },
                    ["bg", "inner", "infobar", "toolbar", "stage", "caption", "navigation"].forEach(function(t) {
                        a.$refs[t] = o.find(".fancybox-" + t)
                    }),
                    a.trigger("onInit"),
                    a.activate(),
                    a.jumpTo(a.currIndex)
                },
                translate: function(t, e) {
                    var n = t.opts.i18n[t.opts.lang];
                    return e.replace(/\{\{(\w+)\}\}/g, function(t, e) {
                        var i = n[e];
                        return void 0 === i ? t : i
                    })
                },
                addContent: function(t) {
                    var e, i = this, o = n.makeArray(t);
                    n.each(o, function(t, e) {
                        var o, s, a, r, c, l = {}, h = {};
                        n.isPlainObject(e) ? (l = e,
                        h = e.opts || e) : "object" === n.type(e) && n(e).length ? (h = (o = n(e)).data() || {},
                        (h = n.extend(!0, {}, h, h.options)).$orig = o,
                        l.src = i.opts.src || h.src || o.attr("href"),
                        l.type || l.src || (l.type = "inline",
                        l.src = e)) : l = {
                            type: "html",
                            src: e + ""
                        },
                        l.opts = n.extend(!0, {}, i.opts, h),
                        n.isArray(h.buttons) && (l.opts.buttons = h.buttons),
                        s = l.type || l.opts.type,
                        r = l.src || "",
                        !s && r && ((a = r.match(/\.(mp4|mov|ogv)((\?|#).*)?$/i)) ? (s = "video",
                        l.opts.videoFormat || (l.opts.videoFormat = "video/" + ("ogv" === a[1] ? "ogg" : a[1]))) : r.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i) ? s = "image" : r.match(/\.(pdf)((\?|#).*)?$/i) ? s = "iframe" : "#" === r.charAt(0) && (s = "inline")),
                        s ? l.type = s : i.trigger("objectNeedsType", l),
                        l.contentType || (l.contentType = n.inArray(l.type, ["html", "inline", "ajax"]) > -1 ? "html" : l.type),
                        l.index = i.group.length,
                        "auto" == l.opts.smallBtn && (l.opts.smallBtn = n.inArray(l.type, ["html", "inline", "ajax"]) > -1),
                        "auto" === l.opts.toolbar && (l.opts.toolbar = !l.opts.smallBtn),
                        l.opts.$trigger && l.index === i.opts.index && (l.opts.$thumb = l.opts.$trigger.find("img:first")),
                        l.opts.$thumb && l.opts.$thumb.length || !l.opts.$orig || (l.opts.$thumb = l.opts.$orig.find("img:first")),
                        "function" === n.type(l.opts.caption) && (l.opts.caption = l.opts.caption.apply(e, [i, l])),
                        "function" === n.type(i.opts.caption) && (l.opts.caption = i.opts.caption.apply(e, [i, l])),
                        l.opts.caption instanceof n || (l.opts.caption = void 0 === l.opts.caption ? "" : l.opts.caption + ""),
                        "ajax" === l.type && (c = r.split(/\s+/, 2)).length > 1 && (l.src = c.shift(),
                        l.opts.filter = c.shift()),
                        l.opts.modal && (l.opts = n.extend(!0, l.opts, {
                            infobar: 0,
                            toolbar: 0,
                            smallBtn: 0,
                            keyboard: 0,
                            slideShow: 0,
                            fullScreen: 0,
                            thumbs: 0,
                            touch: 0,
                            clickContent: !1,
                            clickSlide: !1,
                            clickOutside: !1,
                            dblclickContent: !1,
                            dblclickSlide: !1,
                            dblclickOutside: !1
                        })),
                        i.group.push(l)
                    }),
                    Object.keys(i.slides).length && (i.updateControls(),
                    (e = i.Thumbs) && e.isActive && (e.create(),
                    e.focus()))
                },
                addEvents: function() {
                    var i = this;
                    i.removeEvents(),
                    i.$refs.container.on("click.fb-close", "[data-fancybox-close]", function(t) {
                        t.stopPropagation(),
                        t.preventDefault(),
                        i.close(t)
                    }).on("touchstart.fb-prev click.fb-prev", "[data-fancybox-prev]", function(t) {
                        t.stopPropagation(),
                        t.preventDefault(),
                        i.previous()
                    }).on("touchstart.fb-next click.fb-next", "[data-fancybox-next]", function(t) {
                        t.stopPropagation(),
                        t.preventDefault(),
                        i.next()
                    }).on("click.fb", "[data-fancybox-zoom]", function(t) {
                        i[i.isScaledDown() ? "scaleToActual" : "scaleToFit"]()
                    }),
                    a.on("orientationchange.fb resize.fb", function(t) {
                        t && t.originalEvent && "resize" === t.originalEvent.type ? l(function() {
                            i.update()
                        }) : (i.$refs.stage.hide(),
                        setTimeout(function() {
                            i.$refs.stage.show(),
                            i.update()
                        }, n.fancybox.isMobile ? 600 : 250))
                    }),
                    r.on("focusin.fb", function(t) {
                        var i = n.fancybox ? n.fancybox.getInstance() : null;
                        i.isClosing || !i.current || !i.current.opts.trapFocus || n(t.target).hasClass("fancybox-container") || n(t.target).is(e) || i && "fixed" !== n(t.target).css("position") && !i.$refs.container.has(t.target).length && (t.stopPropagation(),
                        i.focus())
                    }),
                    r.on("keydown.fb", function(t) {
                        var e = i.current
                          , o = t.keyCode || t.which;
                        if (e && e.opts.keyboard && !(t.ctrlKey || t.altKey || t.shiftKey || n(t.target).is("input") || n(t.target).is("textarea")))
                            return 8 === o || 27 === o ? (t.preventDefault(),
                            void i.close(t)) : 37 === o || 38 === o ? (t.preventDefault(),
                            void i.previous()) : 39 === o || 40 === o ? (t.preventDefault(),
                            void i.next()) : void i.trigger("afterKeydown", t, o)
                    }),
                    i.group[i.currIndex].opts.idleTime && (i.idleSecondsCounter = 0,
                    r.on("mousemove.fb-idle mouseleave.fb-idle mousedown.fb-idle touchstart.fb-idle touchmove.fb-idle scroll.fb-idle keydown.fb-idle", function(t) {
                        i.idleSecondsCounter = 0,
                        i.isIdle && i.showControls(),
                        i.isIdle = !1
                    }),
                    i.idleInterval = t.setInterval(function() {
                        i.idleSecondsCounter++,
                        i.idleSecondsCounter >= i.group[i.currIndex].opts.idleTime && !i.isDragging && (i.isIdle = !0,
                        i.idleSecondsCounter = 0,
                        i.hideControls())
                    }, 1e3))
                },
                removeEvents: function() {
                    a.off("orientationchange.fb resize.fb"),
                    r.off("focusin.fb keydown.fb .fb-idle"),
                    this.$refs.container.off(".fb-close .fb-prev .fb-next"),
                    this.idleInterval && (t.clearInterval(this.idleInterval),
                    this.idleInterval = null)
                },
                previous: function(t) {
                    return this.jumpTo(this.currPos - 1, t)
                },
                next: function(t) {
                    return this.jumpTo(this.currPos + 1, t)
                },
                jumpTo: function(t, e) {
                    var i, o, s, a, r, c, l, h = this, u = h.group.length;
                    if (!(h.isDragging || h.isClosing || h.isAnimating && h.firstRun)) {
                        if (t = parseInt(t, 10),
                        !(o = h.current ? h.current.opts.loop : h.opts.loop) && (t < 0 || t >= u))
                            return !1;
                        if (i = h.firstRun = !Object.keys(h.slides).length,
                        !(u < 2 && !i && h.isDragging)) {
                            if (a = h.current,
                            h.prevIndex = h.currIndex,
                            h.prevPos = h.currPos,
                            s = h.createSlide(t),
                            u > 1 && ((o || s.index > 0) && h.createSlide(t - 1),
                            (o || s.index < u - 1) && h.createSlide(t + 1)),
                            h.current = s,
                            h.currIndex = s.index,
                            h.currPos = s.pos,
                            h.trigger("beforeShow", i),
                            h.updateControls(),
                            c = n.fancybox.getTranslate(s.$slide),
                            s.isMoved = (0 !== c.left || 0 !== c.top) && !s.$slide.hasClass("fancybox-animated"),
                            s.forcedDuration = void 0,
                            n.isNumeric(e) ? s.forcedDuration = e : e = s.opts[i ? "animationDuration" : "transitionDuration"],
                            e = parseInt(e, 10),
                            i)
                                return s.opts.animationEffect && e && h.$refs.container.css("transition-duration", e + "ms"),
                                h.$refs.container.removeClass("fancybox-is-hidden"),
                                d(h.$refs.container),
                                h.$refs.container.addClass("fancybox-is-open"),
                                d(h.$refs.container),
                                s.$slide.addClass("fancybox-slide--previous"),
                                h.loadSlide(s),
                                s.$slide.removeClass("fancybox-slide--previous").addClass("fancybox-slide--current"),
                                void h.preload("image");
                            n.each(h.slides, function(t, e) {
                                n.fancybox.stop(e.$slide)
                            }),
                            s.$slide.removeClass("fancybox-slide--next fancybox-slide--previous").addClass("fancybox-slide--current"),
                            s.isMoved ? (r = Math.round(s.$slide.width()),
                            n.each(h.slides, function(t, i) {
                                var o = i.pos - s.pos;
                                n.fancybox.animate(i.$slide, {
                                    top: 0,
                                    left: o * r + o * i.opts.gutter
                                }, e, function() {
                                    i.$slide.removeAttr("style").removeClass("fancybox-slide--next fancybox-slide--previous"),
                                    i.pos === h.currPos && (s.isMoved = !1,
                                    h.complete())
                                })
                            })) : h.$refs.stage.children().removeAttr("style"),
                            s.isLoaded ? h.revealContent(s) : h.loadSlide(s),
                            h.preload("image"),
                            a.pos !== s.pos && (l = "fancybox-slide--" + (a.pos > s.pos ? "next" : "previous"),
                            a.$slide.removeClass("fancybox-slide--complete fancybox-slide--current fancybox-slide--next fancybox-slide--previous"),
                            a.isComplete = !1,
                            e && (s.isMoved || s.opts.transitionEffect) && (s.isMoved ? a.$slide.addClass(l) : (l = "fancybox-animated " + l + " fancybox-fx-" + s.opts.transitionEffect,
                            n.fancybox.animate(a.$slide, l, e, function() {
                                a.$slide.removeClass(l).removeAttr("style")
                            }))))
                        }
                    }
                },
                createSlide: function(t) {
                    var e, i;
                    return i = (i = t % this.group.length) < 0 ? this.group.length + i : i,
                    !this.slides[t] && this.group[i] && (e = n('<div class="fancybox-slide"></div>').appendTo(this.$refs.stage),
                    this.slides[t] = n.extend(!0, {}, this.group[i], {
                        pos: t,
                        $slide: e,
                        isLoaded: !1
                    }),
                    this.updateSlide(this.slides[t])),
                    this.slides[t]
                },
                scaleToActual: function(t, e, i) {
                    var o, s, a, r, c, l = this, h = l.current, d = h.$content, u = n.fancybox.getTranslate(h.$slide).width, f = n.fancybox.getTranslate(h.$slide).height, p = h.width, g = h.height;
                    !l.isAnimating && d && "image" == h.type && h.isLoaded && !h.hasError && (n.fancybox.stop(d),
                    l.isAnimating = !0,
                    t = void 0 === t ? .5 * u : t,
                    e = void 0 === e ? .5 * f : e,
                    (o = n.fancybox.getTranslate(d)).top -= n.fancybox.getTranslate(h.$slide).top,
                    o.left -= n.fancybox.getTranslate(h.$slide).left,
                    r = p / o.width,
                    c = g / o.height,
                    s = .5 * u - .5 * p,
                    a = .5 * f - .5 * g,
                    p > u && ((s = o.left * r - (t * r - t)) > 0 && (s = 0),
                    s < u - p && (s = u - p)),
                    g > f && ((a = o.top * c - (e * c - e)) > 0 && (a = 0),
                    a < f - g && (a = f - g)),
                    l.updateCursor(p, g),
                    n.fancybox.animate(d, {
                        top: a,
                        left: s,
                        scaleX: r,
                        scaleY: c
                    }, i || 330, function() {
                        l.isAnimating = !1
                    }),
                    l.SlideShow && l.SlideShow.isActive && l.SlideShow.stop())
                },
                scaleToFit: function(t) {
                    var e, i = this, o = i.current, s = o.$content;
                    !i.isAnimating && s && "image" == o.type && o.isLoaded && !o.hasError && (n.fancybox.stop(s),
                    i.isAnimating = !0,
                    e = i.getFitPos(o),
                    i.updateCursor(e.width, e.height),
                    n.fancybox.animate(s, {
                        top: e.top,
                        left: e.left,
                        scaleX: e.width / s.width(),
                        scaleY: e.height / s.height()
                    }, t || 330, function() {
                        i.isAnimating = !1
                    }))
                },
                getFitPos: function(t) {
                    var e, n, i, o, s, a = t.$content, r = t.width || t.opts.width, c = t.height || t.opts.height, l = {};
                    return !!(t.isLoaded && a && a.length) && (o = {
                        top: parseInt(t.$slide.css("paddingTop"), 10),
                        right: parseInt(t.$slide.css("paddingRight"), 10),
                        bottom: parseInt(t.$slide.css("paddingBottom"), 10),
                        left: parseInt(t.$slide.css("paddingLeft"), 10)
                    },
                    e = parseInt(this.$refs.stage.width(), 10) - (o.left + o.right),
                    n = parseInt(this.$refs.stage.height(), 10) - (o.top + o.bottom),
                    r && c || (r = e,
                    c = n),
                    i = Math.min(1, e / r, n / c),
                    r = Math.floor(i * r),
                    c = Math.floor(i * c),
                    "image" === t.type ? (l.top = Math.floor(.5 * (n - c)) + o.top,
                    l.left = Math.floor(.5 * (e - r)) + o.left) : "video" === t.contentType && (c > r / (s = t.opts.width && t.opts.height ? r / c : t.opts.ratio || 16 / 9) ? c = r / s : r > c * s && (r = c * s)),
                    l.width = r,
                    l.height = c,
                    l)
                },
                update: function() {
                    var t = this;
                    n.each(t.slides, function(e, n) {
                        t.updateSlide(n)
                    })
                },
                updateSlide: function(t, e) {
                    var i = t && t.$content
                      , o = t.width || t.opts.width
                      , s = t.height || t.opts.height;
                    i && (o || s || "video" === t.contentType) && !t.hasError && (n.fancybox.stop(i),
                    n.fancybox.setTranslate(i, this.getFitPos(t)),
                    t.pos === this.currPos && (this.isAnimating = !1,
                    this.updateCursor())),
                    t.$slide.trigger("refresh"),
                    this.$refs.toolbar.toggleClass("compensate-for-scrollbar", t.$slide.get(0).scrollHeight > t.$slide.get(0).clientHeight),
                    this.trigger("onUpdate", t)
                },
                centerSlide: function(t, e) {
                    var i, o;
                    this.current && (i = Math.round(t.$slide.width()),
                    o = t.pos - this.current.pos,
                    n.fancybox.animate(t.$slide, {
                        top: 0,
                        left: o * i + o * t.opts.gutter,
                        opacity: 1
                    }, void 0 === e ? 0 : e, null, !1))
                },
                updateCursor: function(t, e) {
                    var i, o = this.current, s = this.$refs.container.removeClass("fancybox-is-zoomable fancybox-can-zoomIn fancybox-can-drag fancybox-can-zoomOut");
                    o && !this.isClosing && (i = this.isZoomable(),
                    s.toggleClass("fancybox-is-zoomable", i),
                    n("[data-fancybox-zoom]").prop("disabled", !i),
                    i && ("zoom" === o.opts.clickContent || n.isFunction(o.opts.clickContent) && "zoom" === o.opts.clickContent(o)) ? this.isScaledDown(t, e) ? s.addClass("fancybox-can-zoomIn") : o.opts.touch ? s.addClass("fancybox-can-drag") : s.addClass("fancybox-can-zoomOut") : o.opts.touch && "video" !== o.contentType && s.addClass("fancybox-can-drag"))
                },
                isZoomable: function() {
                    var t, e = this.current;
                    if (e && !this.isClosing && "image" === e.type && !e.hasError) {
                        if (!e.isLoaded)
                            return !0;
                        if (t = this.getFitPos(e),
                        e.width > t.width || e.height > t.height)
                            return !0
                    }
                    return !1
                },
                isScaledDown: function(t, e) {
                    var i = !1
                      , o = this.current
                      , s = o.$content;
                    return void 0 !== t && void 0 !== e ? i = t < o.width && e < o.height : s && (i = (i = n.fancybox.getTranslate(s)).width < o.width && i.height < o.height),
                    i
                },
                canPan: function() {
                    var t, e = !1, n = this.current;
                    return "image" === n.type && (t = n.$content) && !n.hasError && (e = this.getFitPos(n),
                    e = Math.abs(t.width() - e.width) > 1 || Math.abs(t.height() - e.height) > 1),
                    e
                },
                loadSlide: function(t) {
                    var e, i, o, s = this;
                    if (!t.isLoading && !t.isLoaded) {
                        switch (t.isLoading = !0,
                        s.trigger("beforeLoad", t),
                        e = t.type,
                        (i = t.$slide).off("refresh").trigger("onReset").addClass(t.opts.slideClass),
                        e) {
                        case "image":
                            s.setImage(t);
                            break;
                        case "iframe":
                            s.setIframe(t);
                            break;
                        case "html":
                            s.setContent(t, t.src || t.content);
                            break;
                        case "video":
                            s.setContent(t, '<video class="fancybox-video" controls controlsList="nodownload"><source src="' + t.src + '" type="' + t.opts.videoFormat + "\">Your browser doesn't support HTML5 video</video");
                            break;
                        case "inline":
                            n(t.src).length ? s.setContent(t, n(t.src)) : s.setError(t);
                            break;
                        case "ajax":
                            s.showLoading(t),
                            o = n.ajax(n.extend({}, t.opts.ajax.settings, {
                                url: t.src,
                                success: function(e, n) {
                                    "success" === n && s.setContent(t, e)
                                },
                                error: function(e, n) {
                                    e && "abort" !== n && s.setError(t)
                                }
                            })),
                            i.one("onReset", function() {
                                o.abort()
                            });
                            break;
                        default:
                            s.setError(t)
                        }
                        return !0
                    }
                },
                setImage: function(e) {
                    var i, o, s, a, r, c = this, l = e.opts.srcset || e.opts.image.srcset;
                    if (e.timouts = setTimeout(function() {
                        var t = e.$image;
                        !e.isLoading || t && t[0].complete || e.hasError || c.showLoading(e)
                    }, 350),
                    l) {
                        a = t.devicePixelRatio || 1,
                        r = t.innerWidth * a,
                        (s = l.split(",").map(function(t) {
                            var e = {};
                            return t.trim().split(/\s+/).forEach(function(t, n) {
                                var i = parseInt(t.substring(0, t.length - 1), 10);
                                if (0 === n)
                                    return e.url = t;
                                i && (e.value = i,
                                e.postfix = t[t.length - 1])
                            }),
                            e
                        })).sort(function(t, e) {
                            return t.value - e.value
                        });
                        for (var h = 0; h < s.length; h++) {
                            var d = s[h];
                            if ("w" === d.postfix && d.value >= r || "x" === d.postfix && d.value >= a) {
                                o = d;
                                break
                            }
                        }
                        !o && s.length && (o = s[s.length - 1]),
                        o && (e.src = o.url,
                        e.width && e.height && "w" == o.postfix && (e.height = e.width / e.height * o.value,
                        e.width = o.value),
                        e.opts.srcset = l)
                    }
                    e.$content = n('<div class="fancybox-content"></div>').addClass("fancybox-is-hidden").appendTo(e.$slide.addClass("fancybox-slide--image")),
                    i = e.opts.thumb || !(!e.opts.$thumb || !e.opts.$thumb.length) && e.opts.$thumb.attr("src"),
                    !1 !== e.opts.preload && e.opts.width && e.opts.height && i && (e.width = e.opts.width,
                    e.height = e.opts.height,
                    e.$ghost = n("<img />").one("error", function() {
                        n(this).remove(),
                        e.$ghost = null
                    }).one("load", function() {
                        c.afterLoad(e)
                    }).addClass("fancybox-image").appendTo(e.$content).attr("src", i)),
                    c.setBigImage(e)
                },
                setBigImage: function(t) {
                    var e = this
                      , i = n("<img />");
                    t.$image = i.one("error", function() {
                        e.setError(t)
                    }).one("load", function() {
                        var n;
                        t.$ghost || (e.resolveImageSlideSize(t, this.naturalWidth, this.naturalHeight),
                        e.afterLoad(t)),
                        t.timouts && (clearTimeout(t.timouts),
                        t.timouts = null),
                        e.isClosing || (t.opts.srcset && ((n = t.opts.sizes) && "auto" !== n || (n = (t.width / t.height > 1 && a.width() / a.height() > 1 ? "100" : Math.round(t.width / t.height * 100)) + "vw"),
                        i.attr("sizes", n).attr("srcset", t.opts.srcset)),
                        t.$ghost && setTimeout(function() {
                            t.$ghost && !e.isClosing && t.$ghost.hide()
                        }, Math.min(300, Math.max(1e3, t.height / 1600))),
                        e.hideLoading(t))
                    }).addClass("fancybox-image").attr("src", t.src).appendTo(t.$content),
                    (i[0].complete || "complete" == i[0].readyState) && i[0].naturalWidth && i[0].naturalHeight ? i.trigger("load") : i[0].error && i.trigger("error")
                },
                resolveImageSlideSize: function(t, e, n) {
                    var i = parseInt(t.opts.width, 10)
                      , o = parseInt(t.opts.height, 10);
                    t.width = e,
                    t.height = n,
                    i > 0 && (t.width = i,
                    t.height = Math.floor(i * n / e)),
                    o > 0 && (t.width = Math.floor(o * e / n),
                    t.height = o)
                },
                setIframe: function(t) {
                    var e, i = this, o = t.opts.iframe, s = t.$slide;
                    t.$content = n('<div class="fancybox-content' + (o.preload ? " fancybox-is-hidden" : "") + '"></div>').css(o.css).appendTo(s),
                    s.addClass("fancybox-slide--" + t.contentType),
                    t.$iframe = e = n(o.tpl.replace(/\{rnd\}/g, (new Date).getTime())).attr(o.attr).appendTo(t.$content),
                    o.preload ? (i.showLoading(t),
                    e.on("load.fb error.fb", function(e) {
                        this.isReady = 1,
                        t.$slide.trigger("refresh"),
                        i.afterLoad(t)
                    }),
                    s.on("refresh.fb", function() {
                        var n, i = t.$content, s = o.css.width, a = o.css.height;
                        if (1 === e[0].isReady) {
                            try {
                                n = e.contents().find("body")
                            } catch (t) {}
                            n && n.length && n.children().length && (i.css({
                                width: "",
                                height: ""
                            }),
                            void 0 === s && (s = Math.ceil(Math.max(n[0].clientWidth, n.outerWidth(!0)))),
                            s && i.width(s),
                            void 0 === a && (a = Math.ceil(Math.max(n[0].clientHeight, n.outerHeight(!0)))),
                            a && i.height(a)),
                            i.removeClass("fancybox-is-hidden")
                        }
                    })) : this.afterLoad(t),
                    e.attr("src", t.src),
                    s.one("onReset", function() {
                        try {
                            n(this).find("iframe").hide().unbind().attr("src", "//about:blank")
                        } catch (t) {}
                        n(this).off("refresh.fb").empty(),
                        t.isLoaded = !1
                    })
                },
                setContent: function(t, e) {
                    var i;
                    this.isClosing || (this.hideLoading(t),
                    t.$content && n.fancybox.stop(t.$content),
                    t.$slide.empty(),
                    (i = e) && i.hasOwnProperty && i instanceof n && e.parent().length ? (e.parent().parent(".fancybox-slide--inline").trigger("onReset"),
                    t.$placeholder = n("<div>").hide().insertAfter(e),
                    e.css("display", "inline-block")) : t.hasError || ("string" === n.type(e) && 3 === (e = n("<div>").append(n.trim(e)).contents())[0].nodeType && (e = n("<div>").html(e)),
                    t.opts.filter && (e = n("<div>").html(e).find(t.opts.filter))),
                    t.$slide.one("onReset", function() {
                        n(this).find("video,audio").trigger("pause"),
                        t.$placeholder && (t.$placeholder.after(e.hide()).remove(),
                        t.$placeholder = null),
                        t.$smallBtn && (t.$smallBtn.remove(),
                        t.$smallBtn = null),
                        t.hasError || (n(this).empty(),
                        t.isLoaded = !1)
                    }),
                    n(e).appendTo(t.$slide),
                    n(e).is("video,audio") && (n(e).addClass("fancybox-video"),
                    n(e).wrap("<div></div>"),
                    t.contentType = "video",
                    t.opts.width = t.opts.width || n(e).attr("width"),
                    t.opts.height = t.opts.height || n(e).attr("height")),
                    t.$content = t.$slide.children().filter("div,form,main,video,audio").first().addClass("fancybox-content"),
                    t.$slide.addClass("fancybox-slide--" + t.contentType),
                    this.afterLoad(t))
                },
                setError: function(t) {
                    t.hasError = !0,
                    t.$slide.trigger("onReset").removeClass("fancybox-slide--" + t.contentType).addClass("fancybox-slide--error"),
                    t.contentType = "html",
                    this.setContent(t, this.translate(t, t.opts.errorTpl)),
                    t.pos === this.currPos && (this.isAnimating = !1)
                },
                showLoading: function(t) {
                    (t = t || this.current) && !t.$spinner && (t.$spinner = n(this.translate(this, this.opts.spinnerTpl)).appendTo(t.$slide))
                },
                hideLoading: function(t) {
                    (t = t || this.current) && t.$spinner && (t.$spinner.remove(),
                    delete t.$spinner)
                },
                afterLoad: function(t) {
                    this.isClosing || (t.isLoading = !1,
                    t.isLoaded = !0,
                    this.trigger("afterLoad", t),
                    this.hideLoading(t),
                    t.pos === this.currPos && this.updateCursor(),
                    !t.opts.smallBtn || t.$smallBtn && t.$smallBtn.length || (t.$smallBtn = n(this.translate(t, t.opts.btnTpl.smallBtn)).prependTo(t.$content)),
                    t.opts.protect && t.$content && !t.hasError && (t.$content.on("contextmenu.fb", function(t) {
                        return 2 == t.button && t.preventDefault(),
                        !0
                    }),
                    "image" === t.type && n('<div class="fancybox-spaceball"></div>').appendTo(t.$content)),
                    this.revealContent(t))
                },
                revealContent: function(t) {
                    var e, i, o, s, a = this, r = t.$slide, c = !1, l = !1;
                    return e = t.opts[a.firstRun ? "animationEffect" : "transitionEffect"],
                    o = t.opts[a.firstRun ? "animationDuration" : "transitionDuration"],
                    o = parseInt(void 0 === t.forcedDuration ? o : t.forcedDuration, 10),
                    t.pos === a.currPos && (t.isComplete ? e = !1 : a.isAnimating = !0),
                    !t.isMoved && t.pos === a.currPos && o || (e = !1),
                    "zoom" === e && (t.pos === a.currPos && o && "image" === t.type && !t.hasError && (l = a.getThumbPos(t)) ? c = a.getFitPos(t) : e = "fade"),
                    "zoom" === e ? (c.scaleX = c.width / l.width,
                    c.scaleY = c.height / l.height,
                    "auto" == (s = t.opts.zoomOpacity) && (s = Math.abs(t.width / t.height - l.width / l.height) > .1),
                    s && (l.opacity = .1,
                    c.opacity = 1),
                    n.fancybox.setTranslate(t.$content.removeClass("fancybox-is-hidden"), l),
                    d(t.$content),
                    void n.fancybox.animate(t.$content, c, o, function() {
                        a.isAnimating = !1,
                        a.complete()
                    })) : (a.updateSlide(t),
                    e ? (n.fancybox.stop(r),
                    i = "fancybox-animated fancybox-slide--" + (t.pos >= a.prevPos ? "next" : "previous") + " fancybox-fx-" + e,
                    r.removeAttr("style").removeClass("fancybox-slide--current fancybox-slide--next fancybox-slide--previous").addClass(i),
                    t.$content.removeClass("fancybox-is-hidden"),
                    d(r),
                    void n.fancybox.animate(r, "fancybox-slide--current", o, function(e) {
                        r.removeClass(i).removeAttr("style"),
                        t.pos === a.currPos && a.complete()
                    }, !0)) : (d(r),
                    t.$content.removeClass("fancybox-is-hidden"),
                    void (t.pos === a.currPos && a.complete())))
                },
                getThumbPos: function(i) {
                    var o, s = !1, a = i.opts.$thumb, r = a && a.length && a[0].ownerDocument === e ? a.offset() : 0;
                    return r && function(e) {
                        for (var i = e[0], o = i.getBoundingClientRect(), s = []; null !== i.parentElement; )
                            "hidden" !== n(i.parentElement).css("overflow") && "auto" !== n(i.parentElement).css("overflow") || s.push(i.parentElement.getBoundingClientRect()),
                            i = i.parentElement;
                        return s.every(function(t) {
                            var e = Math.min(o.right, t.right) - Math.max(o.left, t.left)
                              , n = Math.min(o.bottom, t.bottom) - Math.max(o.top, t.top);
                            return e > 0 && n > 0
                        }) && o.bottom > 0 && o.right > 0 && o.left < n(t).width() && o.top < n(t).height()
                    }(a) && (o = this.$refs.stage.offset(),
                    s = {
                        top: r.top - o.top + parseFloat(a.css("border-top-width") || 0),
                        left: r.left - o.left + parseFloat(a.css("border-left-width") || 0),
                        width: a.width(),
                        height: a.height(),
                        scaleX: 1,
                        scaleY: 1
                    }),
                    s
                },
                complete: function() {
                    var t = this
                      , i = t.current
                      , o = {};
                    !i.isMoved && i.isLoaded && (i.isComplete || (i.isComplete = !0,
                    i.$slide.siblings().trigger("onReset"),
                    t.preload("inline"),
                    d(i.$slide),
                    i.$slide.addClass("fancybox-slide--complete"),
                    n.each(t.slides, function(e, i) {
                        i.pos >= t.currPos - 1 && i.pos <= t.currPos + 1 ? o[i.pos] = i : i && (n.fancybox.stop(i.$slide),
                        i.$slide.off().remove())
                    }),
                    t.slides = o),
                    t.isAnimating = !1,
                    t.updateCursor(),
                    t.trigger("afterShow"),
                    i.$slide.find("video,audio").filter(":visible:first").trigger("play"),
                    (n(e.activeElement).is("[disabled]") || i.opts.autoFocus && "image" != i.type && "iframe" !== i.type) && t.focus())
                },
                preload: function(t) {
                    var e = this.slides[this.currPos + 1]
                      , n = this.slides[this.currPos - 1];
                    e && e.type === t && this.loadSlide(e),
                    n && n.type === t && this.loadSlide(n)
                },
                focus: function() {
                    var t, e = this.current;
                    this.isClosing || e && e.isComplete && e.$content && ((t = e.$content.find("input[autofocus]:enabled:visible:first")).length || (t = e.$content.find("button,:input,[tabindex],a").filter(":enabled:visible:first")),
                    (t = t && t.length ? t : e.$content).trigger("focus"))
                },
                activate: function() {
                    var t = this;
                    n(".fancybox-container").each(function() {
                        var e = n(this).data("FancyBox");
                        e && e.id !== t.id && !e.isClosing && (e.trigger("onDeactivate"),
                        e.removeEvents(),
                        e.isVisible = !1)
                    }),
                    t.isVisible = !0,
                    (t.current || t.isIdle) && (t.update(),
                    t.updateControls()),
                    t.trigger("onActivate"),
                    t.addEvents()
                },
                close: function(t, e) {
                    var i, o, s, a, r, c, u, f = this, p = f.current, g = function() {
                        f.cleanUp(t)
                    };
                    return !f.isClosing && (f.isClosing = !0,
                    !1 === f.trigger("beforeClose", t) ? (f.isClosing = !1,
                    l(function() {
                        f.update()
                    }),
                    !1) : (f.removeEvents(),
                    p.timouts && clearTimeout(p.timouts),
                    s = p.$content,
                    i = p.opts.animationEffect,
                    o = n.isNumeric(e) ? e : i ? p.opts.animationDuration : 0,
                    p.$slide.off(h).removeClass("fancybox-slide--complete fancybox-slide--next fancybox-slide--previous fancybox-animated"),
                    p.$slide.siblings().trigger("onReset").remove(),
                    o && f.$refs.container.removeClass("fancybox-is-open").addClass("fancybox-is-closing"),
                    f.hideLoading(p),
                    f.hideControls(),
                    f.updateCursor(),
                    "zoom" !== i || !0 !== t && s && o && "image" === p.type && !p.hasError && (u = f.getThumbPos(p)) || (i = "fade"),
                    "zoom" === i ? (n.fancybox.stop(s),
                    c = {
                        top: (a = n.fancybox.getTranslate(s)).top,
                        left: a.left,
                        scaleX: a.width / u.width,
                        scaleY: a.height / u.height,
                        width: u.width,
                        height: u.height
                    },
                    "auto" == (r = p.opts.zoomOpacity) && (r = Math.abs(p.width / p.height - u.width / u.height) > .1),
                    r && (u.opacity = 0),
                    n.fancybox.setTranslate(s, c),
                    d(s),
                    n.fancybox.animate(s, u, o, g),
                    !0) : (i && o ? !0 === t ? setTimeout(g, o) : n.fancybox.animate(p.$slide.removeClass("fancybox-slide--current"), "fancybox-animated fancybox-slide--previous fancybox-fx-" + i, o, g) : g(),
                    !0)))
                },
                cleanUp: function(t) {
                    var e, i = n("body");
                    this.current.$slide.trigger("onReset"),
                    this.$refs.container.empty().remove(),
                    this.trigger("afterClose", t),
                    this.$lastFocus && this.current.opts.backFocus && this.$lastFocus.trigger("focus"),
                    this.current = null,
                    (e = n.fancybox.getInstance()) ? e.activate() : (i.removeClass("fancybox-active compensate-for-scrollbar"),
                    n("#fancybox-style-noscroll").remove())
                },
                trigger: function(t, e) {
                    var i, o = Array.prototype.slice.call(arguments, 1), s = e && e.opts ? e : this.current;
                    if (s ? o.unshift(s) : s = this,
                    o.unshift(this),
                    n.isFunction(s.opts[t]) && (i = s.opts[t].apply(s, o)),
                    !1 === i)
                        return i;
                    "afterClose" !== t && this.$refs ? this.$refs.container.trigger(t + ".fb", o) : r.trigger(t + ".fb", o)
                },
                updateControls: function(t) {
                    var e = this.current
                      , n = e.index
                      , i = e.opts.caption
                      , o = this.$refs.container
                      , s = this.$refs.caption;
                    e.$slide.trigger("refresh"),
                    this.$caption = i && i.length ? s.html(i) : null,
                    this.isHiddenControls || this.isIdle || this.showControls(),
                    o.find("[data-fancybox-count]").html(this.group.length),
                    o.find("[data-fancybox-index]").html(n + 1),
                    o.find("[data-fancybox-prev]").toggleClass("disabled", !e.opts.loop && n <= 0),
                    o.find("[data-fancybox-next]").toggleClass("disabled", !e.opts.loop && n >= this.group.length - 1),
                    "image" === e.type ? o.find("[data-fancybox-zoom]").show().end().find("[data-fancybox-download]").attr("href", e.opts.image.src || e.src).show() : e.opts.toolbar && o.find("[data-fancybox-download],[data-fancybox-zoom]").hide()
                },
                hideControls: function() {
                    this.isHiddenControls = !0,
                    this.$refs.container.removeClass("fancybox-show-infobar fancybox-show-toolbar fancybox-show-caption fancybox-show-nav")
                },
                showControls: function() {
                    var t = this.current ? this.current.opts : this.opts
                      , e = this.$refs.container;
                    this.isHiddenControls = !1,
                    this.idleSecondsCounter = 0,
                    e.toggleClass("fancybox-show-toolbar", !(!t.toolbar || !t.buttons)).toggleClass("fancybox-show-infobar", !!(t.infobar && this.group.length > 1)).toggleClass("fancybox-show-nav", !!(t.arrows && this.group.length > 1)).toggleClass("fancybox-is-modal", !!t.modal),
                    this.$caption ? e.addClass("fancybox-show-caption ") : e.removeClass("fancybox-show-caption")
                },
                toggleControls: function() {
                    this.isHiddenControls ? this.showControls() : this.hideControls()
                }
            }),
            n.fancybox = {
                version: "3.3.5",
                defaults: s,
                getInstance: function(t) {
                    var e = n('.fancybox-container:not(".fancybox-is-closing"):last').data("FancyBox")
                      , i = Array.prototype.slice.call(arguments, 1);
                    return e instanceof f && ("string" === n.type(t) ? e[t].apply(e, i) : "function" === n.type(t) && t.apply(e, i),
                    e)
                },
                open: function(t, e, n) {
                    return new f(t,e,n)
                },
                close: function(t) {
                    var e = this.getInstance();
                    e && (e.close(),
                    !0 === t && this.close())
                },
                destroy: function() {
                    this.close(!0),
                    r.add("body").off("click.fb-start", "**")
                },
                isMobile: void 0 !== e.createTouch && /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
                use3d: (o = e.createElement("div"),
                t.getComputedStyle && t.getComputedStyle(o) && t.getComputedStyle(o).getPropertyValue("transform") && !(e.documentMode && e.documentMode < 11)),
                getTranslate: function(t) {
                    var e;
                    return !(!t || !t.length) && {
                        top: (e = t[0].getBoundingClientRect()).top || 0,
                        left: e.left || 0,
                        width: e.width,
                        height: e.height,
                        opacity: parseFloat(t.css("opacity"))
                    }
                },
                setTranslate: function(t, e) {
                    var n = ""
                      , i = {};
                    if (t && e)
                        return void 0 === e.left && void 0 === e.top || (n = (void 0 === e.left ? t.position().left : e.left) + "px, " + (void 0 === e.top ? t.position().top : e.top) + "px",
                        n = this.use3d ? "translate3d(" + n + ", 0px)" : "translate(" + n + ")"),
                        void 0 !== e.scaleX && void 0 !== e.scaleY && (n = (n.length ? n + " " : "") + "scale(" + e.scaleX + ", " + e.scaleY + ")"),
                        n.length && (i.transform = n),
                        void 0 !== e.opacity && (i.opacity = e.opacity),
                        void 0 !== e.width && (i.width = e.width),
                        void 0 !== e.height && (i.height = e.height),
                        t.css(i)
                },
                animate: function(t, e, i, o, s) {
                    var a = !1;
                    n.isFunction(i) && (o = i,
                    i = null),
                    n.isPlainObject(e) || t.removeAttr("style"),
                    n.fancybox.stop(t),
                    t.on(h, function(i) {
                        (!i || !i.originalEvent || t.is(i.originalEvent.target) && "z-index" != i.originalEvent.propertyName) && (n.fancybox.stop(t),
                        a && n.fancybox.setTranslate(t, a),
                        n.isPlainObject(e) ? !1 === s && t.removeAttr("style") : !0 !== s && t.removeClass(e),
                        n.isFunction(o) && o(i))
                    }),
                    n.isNumeric(i) && t.css("transition-duration", i + "ms"),
                    n.isPlainObject(e) ? (void 0 !== e.scaleX && void 0 !== e.scaleY && (a = n.extend({}, e, {
                        width: t.width() * e.scaleX,
                        height: t.height() * e.scaleY,
                        scaleX: 1,
                        scaleY: 1
                    }),
                    delete e.width,
                    delete e.height,
                    t.parent().hasClass("fancybox-slide--image") && t.parent().addClass("fancybox-is-scaling")),
                    n.fancybox.setTranslate(t, e)) : t.addClass(e),
                    t.data("timer", setTimeout(function() {
                        t.trigger("transitionend")
                    }, i + 16))
                },
                stop: function(t) {
                    t && t.length && (clearTimeout(t.data("timer")),
                    t.off("transitionend").css("transition-duration", ""),
                    t.parent().removeClass("fancybox-is-scaling"))
                }
            },
            n.fn.fancybox = function(t) {
                var e;
                return (e = (t = t || {}).selector || !1) ? n("body").off("click.fb-start", e).on("click.fb-start", e, {
                    options: t
                }, p) : this.off("click.fb-start").on("click.fb-start", {
                    items: this,
                    options: t
                }, p),
                this
            }
            ,
            r.on("click.fb-start", "[data-fancybox]", p),
            r.on("click.fb-start", "[data-trigger]", function(t) {
                p(t, {
                    $target: n('[data-fancybox="' + n(t.currentTarget).attr("data-trigger") + '"]').eq(n(t.currentTarget).attr("data-index") || 0),
                    $trigger: n(this)
                })
            })
        }
    function p(t, e) {
        var i, o, s = [], a = 0;
        t && t.isDefaultPrevented() || (t.preventDefault(),
        (o = (i = (e = t && t.data ? t.data.options : e || {}).$target || n(t.currentTarget)).attr("data-fancybox") || "") ? (a = (s = (s = e.selector ? n(e.selector) : t.data ? t.data.items : []).length ? s.filter('[data-fancybox="' + o + '"]') : n('[data-fancybox="' + o + '"]')).index(i)) < 0 && (a = 0) : s = [i],
        n.fancybox.open(s, e, a))
    }
}(window, document, window.jQuery || jQuery),
function(t) {
    "use strict";
    var e = function(e, n, i) {
        if (e)
            return i = i || "",
            "object" === t.type(i) && (i = t.param(i, !0)),
            t.each(n, function(t, n) {
                e = e.replace("$" + t, n || "")
            }),
            i.length && (e += (e.indexOf("?") > 0 ? "&" : "?") + i),
            e
    }
      , n = {
        youtube: {
            matcher: /(youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(watch\?(.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*))(.*)/i,
            params: {
                autoplay: 1,
                autohide: 1,
                fs: 1,
                rel: 0,
                hd: 1,
                wmode: "transparent",
                enablejsapi: 1,
                html5: 1
            },
            paramPlace: 8,
            type: "iframe",
            url: "//www.youtube.com/embed/$4",
            thumb: "//img.youtube.com/vi/$4/hqdefault.jpg"
        },
        vimeo: {
            matcher: /^.+vimeo.com\/(.*\/)?([\d]+)(.*)?/,
            params: {
                autoplay: 1,
                hd: 1,
                show_title: 1,
                show_byline: 1,
                show_portrait: 0,
                fullscreen: 1,
                api: 1
            },
            paramPlace: 3,
            type: "iframe",
            url: "//player.vimeo.com/video/$2"
        },
        instagram: {
            matcher: /(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,
            type: "image",
            url: "//$1/p/$2/media/?size=l"
        },
        gmap_place: {
            matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(((maps\/(place\/(.*)\/)?\@(.*),(\d+.?\d+?)z))|(\?ll=))(.*)?/i,
            type: "iframe",
            url: function(t) {
                return "//maps.google." + t[2] + "/?ll=" + (t[9] ? t[9] + "&z=" + Math.floor(t[10]) + (t[12] ? t[12].replace(/^\//, "&") : "") : t[12] + "").replace(/\?/, "&") + "&output=" + (t[12] && t[12].indexOf("layer=c") > 0 ? "svembed" : "embed")
            }
        },
        gmap_search: {
            matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(maps\/search\/)(.*)/i,
            type: "iframe",
            url: function(t) {
                return "//maps.google." + t[2] + "/maps?q=" + t[5].replace("query=", "q=").replace("api=1", "") + "&output=embed"
            }
        }
    };
    t(document).on("objectNeedsType.fb", function(i, o, s) {
        var a, r, c, l, h, d, u, f = s.src || "", p = !1;
        a = t.extend(!0, {}, n, s.opts.media),
        t.each(a, function(n, i) {
            if (c = f.match(i.matcher)) {
                if (p = i.type,
                u = n,
                d = {},
                i.paramPlace && c[i.paramPlace]) {
                    "?" == (h = c[i.paramPlace])[0] && (h = h.substring(1)),
                    h = h.split("&");
                    for (var o = 0; o < h.length; ++o) {
                        var a = h[o].split("=", 2);
                        2 == a.length && (d[a[0]] = decodeURIComponent(a[1].replace(/\+/g, " ")))
                    }
                }
                return l = t.extend(!0, {}, i.params, s.opts[n], d),
                f = "function" === t.type(i.url) ? i.url.call(this, c, l, s) : e(i.url, c, l),
                r = "function" === t.type(i.thumb) ? i.thumb.call(this, c, l, s) : e(i.thumb, c),
                "youtube" === n ? f = f.replace(/&t=((\d+)m)?(\d+)s/, function(t, e, n, i) {
                    return "&start=" + ((n ? 60 * parseInt(n, 10) : 0) + parseInt(i, 10))
                }) : "vimeo" === n && (f = f.replace("&%23", "#")),
                !1
            }
        }),
        p ? (s.opts.thumb || s.opts.$thumb && s.opts.$thumb.length || (s.opts.thumb = r),
        "iframe" === p && (s.opts = t.extend(!0, s.opts, {
            iframe: {
                preload: !1,
                attr: {
                    scrolling: "no"
                }
            }
        })),
        t.extend(s, {
            type: p,
            src: f,
            origSrc: s.src,
            contentSource: u,
            contentType: "image" === p ? "image" : "gmap_place" == u || "gmap_search" == u ? "map" : "video"
        })) : f && (s.type = s.opts.defaultType)
    })
}(window.jQuery || jQuery),
function(t, e, n) {
    "use strict";
    var i = t.requestAnimationFrame || t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || t.oRequestAnimationFrame || function(e) {
        return t.setTimeout(e, 1e3 / 60)
    }
      , o = t.cancelAnimationFrame || t.webkitCancelAnimationFrame || t.mozCancelAnimationFrame || t.oCancelAnimationFrame || function(e) {
        t.clearTimeout(e)
    }
      , s = function(e) {
        var n = [];
        for (var i in e = (e = e.originalEvent || e || t.e).touches && e.touches.length ? e.touches : e.changedTouches && e.changedTouches.length ? e.changedTouches : [e])
            e[i].pageX ? n.push({
                x: e[i].pageX,
                y: e[i].pageY
            }) : e[i].clientX && n.push({
                x: e[i].clientX,
                y: e[i].clientY
            });
        return n
    }
      , a = function(t, e, n) {
        return e && t ? "x" === n ? t.x - e.x : "y" === n ? t.y - e.y : Math.sqrt(Math.pow(t.x - e.x, 2) + Math.pow(t.y - e.y, 2)) : 0
    }
      , r = function(t) {
        if (t.is('a,area,button,[role="button"],input,label,select,summary,textarea,video,audio') || n.isFunction(t.get(0).onclick) || t.data("selectable"))
            return !0;
        for (var e = 0, i = t[0].attributes, o = i.length; e < o; e++)
            if ("data-fancybox-" === i[e].nodeName.substr(0, 14))
                return !0;
        return !1
    }
      , c = function(e) {
        for (var n, i, o, s, a, r = !1; n = e.get(0),
        i = void 0,
        o = void 0,
        s = void 0,
        a = void 0,
        i = t.getComputedStyle(n)["overflow-y"],
        o = t.getComputedStyle(n)["overflow-x"],
        s = ("scroll" === i || "auto" === i) && n.scrollHeight > n.clientHeight,
        a = ("scroll" === o || "auto" === o) && n.scrollWidth > n.clientWidth,
        !(r = s || a) && (e = e.parent()).length && !e.hasClass("fancybox-stage") && !e.is("body"); )
            ;
        return r
    }
      , l = function(t) {
        this.instance = t,
        this.$bg = t.$refs.bg,
        this.$stage = t.$refs.stage,
        this.$container = t.$refs.container,
        this.destroy(),
        this.$container.on("touchstart.fb.touch mousedown.fb.touch", n.proxy(this, "ontouchstart"))
    };
    l.prototype.destroy = function() {
        this.$container.off(".fb.touch")
    }
    ,
    l.prototype.ontouchstart = function(i) {
        var o = n(i.target)
          , l = this.instance
          , h = l.current
          , d = h.$content
          , u = "touchstart" == i.type;
        if (u && this.$container.off("mousedown.fb.touch"),
        (!i.originalEvent || 2 != i.originalEvent.button) && o.length && !r(o) && !r(o.parent()) && (o.is("img") || !(i.originalEvent.clientX > o[0].clientWidth + o.offset().left))) {
            if (!h || l.isAnimating || l.isClosing)
                return i.stopPropagation(),
                void i.preventDefault();
            this.realPoints = this.startPoints = s(i),
            this.startPoints.length && (i.stopPropagation(),
            this.startEvent = i,
            this.canTap = !0,
            this.$target = o,
            this.$content = d,
            this.opts = h.opts.touch,
            this.isPanning = !1,
            this.isSwiping = !1,
            this.isZooming = !1,
            this.isScrolling = !1,
            this.startTime = (new Date).getTime(),
            this.distanceX = this.distanceY = this.distance = 0,
            this.canvasWidth = Math.round(h.$slide[0].clientWidth),
            this.canvasHeight = Math.round(h.$slide[0].clientHeight),
            this.contentLastPos = null,
            this.contentStartPos = n.fancybox.getTranslate(this.$content) || {
                top: 0,
                left: 0
            },
            this.sliderStartPos = this.sliderLastPos || n.fancybox.getTranslate(h.$slide),
            this.stagePos = n.fancybox.getTranslate(l.$refs.stage),
            this.sliderStartPos.top -= this.stagePos.top,
            this.sliderStartPos.left -= this.stagePos.left,
            this.contentStartPos.top -= this.stagePos.top,
            this.contentStartPos.left -= this.stagePos.left,
            n(e).off(".fb.touch").on(u ? "touchend.fb.touch touchcancel.fb.touch" : "mouseup.fb.touch mouseleave.fb.touch", n.proxy(this, "ontouchend")).on(u ? "touchmove.fb.touch" : "mousemove.fb.touch", n.proxy(this, "ontouchmove")),
            n.fancybox.isMobile && e.addEventListener("scroll", this.onscroll, !0),
            (this.opts || l.canPan()) && (o.is(this.$stage) || this.$stage.find(o).length) ? (n.fancybox.isMobile && (c(o) || c(o.parent())) || i.preventDefault(),
            (1 === this.startPoints.length || h.hasError) && (this.instance.canPan() ? (n.fancybox.stop(this.$content),
            this.$content.css("transition-duration", ""),
            this.isPanning = !0) : this.isSwiping = !0,
            this.$container.addClass("fancybox-controls--isGrabbing")),
            2 === this.startPoints.length && "image" === h.type && (h.isLoaded || h.$ghost) && (this.canTap = !1,
            this.isSwiping = !1,
            this.isPanning = !1,
            this.isZooming = !0,
            n.fancybox.stop(this.$content),
            this.$content.css("transition-duration", ""),
            this.centerPointStartX = .5 * (this.startPoints[0].x + this.startPoints[1].x) - n(t).scrollLeft(),
            this.centerPointStartY = .5 * (this.startPoints[0].y + this.startPoints[1].y) - n(t).scrollTop(),
            this.percentageOfImageAtPinchPointX = (this.centerPointStartX - this.contentStartPos.left) / this.contentStartPos.width,
            this.percentageOfImageAtPinchPointY = (this.centerPointStartY - this.contentStartPos.top) / this.contentStartPos.height,
            this.startDistanceBetweenFingers = a(this.startPoints[0], this.startPoints[1]))) : o.is(".fancybox-image") && i.preventDefault())
        }
    }
    ,
    l.prototype.onscroll = function(t) {
        this.isScrolling = !0,
        e.removeEventListener("scroll", this.onscroll, !0)
    }
    ,
    l.prototype.ontouchmove = function(t) {
        var e = n(t.target);
        void 0 === t.originalEvent.buttons || 0 !== t.originalEvent.buttons ? this.isScrolling || !e.is(this.$stage) && !this.$stage.find(e).length ? this.canTap = !1 : (this.newPoints = s(t),
        (this.opts || this.instance.canPan()) && this.newPoints.length && this.newPoints.length && (this.isSwiping && !0 === this.isSwiping || t.preventDefault(),
        this.distanceX = a(this.newPoints[0], this.startPoints[0], "x"),
        this.distanceY = a(this.newPoints[0], this.startPoints[0], "y"),
        this.distance = a(this.newPoints[0], this.startPoints[0]),
        this.distance > 0 && (this.isSwiping ? this.onSwipe(t) : this.isPanning ? this.onPan() : this.isZooming && this.onZoom()))) : this.ontouchend(t)
    }
    ,
    l.prototype.onSwipe = function(e) {
        var s, a = this, r = a.isSwiping, l = a.sliderStartPos.left || 0;
        if (!0 !== r)
            "x" == r && (a.distanceX > 0 && (a.instance.group.length < 2 || 0 === a.instance.current.index && !a.instance.current.opts.loop) ? l += Math.pow(a.distanceX, .8) : a.distanceX < 0 && (a.instance.group.length < 2 || a.instance.current.index === a.instance.group.length - 1 && !a.instance.current.opts.loop) ? l -= Math.pow(-a.distanceX, .8) : l += a.distanceX),
            a.sliderLastPos = {
                top: "x" == r ? 0 : a.sliderStartPos.top + a.distanceY,
                left: l
            },
            a.requestId && (o(a.requestId),
            a.requestId = null),
            a.requestId = i(function() {
                a.sliderLastPos && (n.each(a.instance.slides, function(t, e) {
                    var i = e.pos - a.instance.currPos;
                    n.fancybox.setTranslate(e.$slide, {
                        top: a.sliderLastPos.top,
                        left: a.sliderLastPos.left + i * a.canvasWidth + i * e.opts.gutter
                    })
                }),
                a.$container.addClass("fancybox-is-sliding"))
            });
        else if (Math.abs(a.distance) > 10) {
            if (a.canTap = !1,
            a.instance.group.length < 2 && a.opts.vertical ? a.isSwiping = "y" : a.instance.isDragging || !1 === a.opts.vertical || "auto" === a.opts.vertical && n(t).width() > 800 ? a.isSwiping = "x" : (s = Math.abs(180 * Math.atan2(a.distanceY, a.distanceX) / Math.PI),
            a.isSwiping = s > 45 && s < 135 ? "y" : "x"),
            a.canTap = !1,
            "y" === a.isSwiping && n.fancybox.isMobile && (c(a.$target) || c(a.$target.parent())))
                return void (a.isScrolling = !0);
            a.instance.isDragging = a.isSwiping,
            a.startPoints = a.newPoints,
            n.each(a.instance.slides, function(t, e) {
                n.fancybox.stop(e.$slide),
                e.$slide.css("transition-duration", ""),
                e.inTransition = !1,
                e.pos === a.instance.current.pos && (a.sliderStartPos.left = n.fancybox.getTranslate(e.$slide).left - n.fancybox.getTranslate(a.instance.$refs.stage).left)
            }),
            a.instance.SlideShow && a.instance.SlideShow.isActive && a.instance.SlideShow.stop()
        }
    }
    ,
    l.prototype.onPan = function() {
        var t = this;
        a(t.newPoints[0], t.realPoints[0]) < (n.fancybox.isMobile ? 10 : 5) ? t.startPoints = t.newPoints : (t.canTap = !1,
        t.contentLastPos = t.limitMovement(),
        t.requestId && (o(t.requestId),
        t.requestId = null),
        t.requestId = i(function() {
            n.fancybox.setTranslate(t.$content, t.contentLastPos)
        }))
    }
    ,
    l.prototype.limitMovement = function() {
        var t, e, n, i, o, s, a = this.canvasWidth, r = this.canvasHeight, c = this.distanceX, l = this.distanceY, h = this.contentStartPos, d = h.left, u = h.top, f = h.width, p = h.height;
        return o = f > a ? d + c : d,
        s = u + l,
        t = Math.max(0, .5 * a - .5 * f),
        e = Math.max(0, .5 * r - .5 * p),
        n = Math.min(a - f, .5 * a - .5 * f),
        i = Math.min(r - p, .5 * r - .5 * p),
        c > 0 && o > t && (o = t - 1 + Math.pow(-t + d + c, .8) || 0),
        c < 0 && o < n && (o = n + 1 - Math.pow(n - d - c, .8) || 0),
        l > 0 && s > e && (s = e - 1 + Math.pow(-e + u + l, .8) || 0),
        l < 0 && s < i && (s = i + 1 - Math.pow(i - u - l, .8) || 0),
        {
            top: s,
            left: o
        }
    }
    ,
    l.prototype.limitPosition = function(t, e, n, i) {
        var o = this.canvasWidth
          , s = this.canvasHeight;
        return t = n > o ? (t = t > 0 ? 0 : t) < o - n ? o - n : t : Math.max(0, o / 2 - n / 2),
        {
            top: e = i > s ? (e = e > 0 ? 0 : e) < s - i ? s - i : e : Math.max(0, s / 2 - i / 2),
            left: t
        }
    }
    ,
    l.prototype.onZoom = function() {
        var e = this
          , s = e.contentStartPos
          , r = s.width
          , c = s.height
          , l = s.left
          , h = s.top
          , d = a(e.newPoints[0], e.newPoints[1]) / e.startDistanceBetweenFingers
          , u = Math.floor(r * d)
          , f = Math.floor(c * d)
          , p = (r - u) * e.percentageOfImageAtPinchPointX
          , g = (c - f) * e.percentageOfImageAtPinchPointY
          , b = (e.newPoints[0].x + e.newPoints[1].x) / 2 - n(t).scrollLeft()
          , m = (e.newPoints[0].y + e.newPoints[1].y) / 2 - n(t).scrollTop()
          , y = b - e.centerPointStartX
          , v = {
            top: h + (g + (m - e.centerPointStartY)),
            left: l + (p + y),
            scaleX: d,
            scaleY: d
        };
        e.canTap = !1,
        e.newWidth = u,
        e.newHeight = f,
        e.contentLastPos = v,
        e.requestId && (o(e.requestId),
        e.requestId = null),
        e.requestId = i(function() {
            n.fancybox.setTranslate(e.$content, e.contentLastPos)
        })
    }
    ,
    l.prototype.ontouchend = function(t) {
        var i = Math.max((new Date).getTime() - this.startTime, 1)
          , a = this.isSwiping
          , r = this.isPanning
          , c = this.isZooming
          , l = this.isScrolling;
        if (this.endPoints = s(t),
        this.$container.removeClass("fancybox-controls--isGrabbing"),
        n(e).off(".fb.touch"),
        e.removeEventListener("scroll", this.onscroll, !0),
        this.requestId && (o(this.requestId),
        this.requestId = null),
        this.isSwiping = !1,
        this.isPanning = !1,
        this.isZooming = !1,
        this.isScrolling = !1,
        this.instance.isDragging = !1,
        this.canTap)
            return this.onTap(t);
        this.speed = 366,
        this.velocityX = this.distanceX / i * .5,
        this.velocityY = this.distanceY / i * .5,
        this.speedX = Math.max(.5 * this.speed, Math.min(1.5 * this.speed, 1 / Math.abs(this.velocityX) * this.speed)),
        r ? this.endPanning() : c ? this.endZooming() : this.endSwiping(a, l)
    }
    ,
    l.prototype.endSwiping = function(t, e) {
        var i = !1
          , o = this.instance.group.length;
        this.sliderLastPos = null,
        "y" == t && !e && Math.abs(this.distanceY) > 50 ? (n.fancybox.animate(this.instance.current.$slide, {
            top: this.sliderStartPos.top + this.distanceY + 150 * this.velocityY,
            opacity: 0
        }, 200),
        i = this.instance.close(!0, 200)) : "x" == t && this.distanceX > 50 && o > 1 ? i = this.instance.previous(this.speedX) : "x" == t && this.distanceX < -50 && o > 1 && (i = this.instance.next(this.speedX)),
        !1 !== i || "x" != t && "y" != t || (e || o < 2 ? this.instance.centerSlide(this.instance.current, 150) : this.instance.jumpTo(this.instance.current.index)),
        this.$container.removeClass("fancybox-is-sliding")
    }
    ,
    l.prototype.endPanning = function() {
        var t, e, i;
        this.contentLastPos && (!1 === this.opts.momentum ? (t = this.contentLastPos.left,
        e = this.contentLastPos.top) : (t = this.contentLastPos.left + this.velocityX * this.speed,
        e = this.contentLastPos.top + this.velocityY * this.speed),
        (i = this.limitPosition(t, e, this.contentStartPos.width, this.contentStartPos.height)).width = this.contentStartPos.width,
        i.height = this.contentStartPos.height,
        n.fancybox.animate(this.$content, i, 330))
    }
    ,
    l.prototype.endZooming = function() {
        var t, e, i, o, s = this.instance.current, a = this.newWidth, r = this.newHeight;
        this.contentLastPos && (t = this.contentLastPos.left,
        o = {
            top: e = this.contentLastPos.top,
            left: t,
            width: a,
            height: r,
            scaleX: 1,
            scaleY: 1
        },
        n.fancybox.setTranslate(this.$content, o),
        a < this.canvasWidth && r < this.canvasHeight ? this.instance.scaleToFit(150) : a > s.width || r > s.height ? this.instance.scaleToActual(this.centerPointStartX, this.centerPointStartY, 150) : (i = this.limitPosition(t, e, a, r),
        n.fancybox.setTranslate(this.$content, n.fancybox.getTranslate(this.$content)),
        n.fancybox.animate(this.$content, i, 150)))
    }
    ,
    l.prototype.onTap = function(e) {
        var i, o = this, a = n(e.target), r = o.instance, c = r.current, l = e && s(e) || o.startPoints, h = l[0] ? l[0].x - n(t).scrollLeft() - o.stagePos.left : 0, d = l[0] ? l[0].y - n(t).scrollTop() - o.stagePos.top : 0, u = function(t) {
            var i = c.opts[t];
            if (n.isFunction(i) && (i = i.apply(r, [c, e])),
            i)
                switch (i) {
                case "close":
                    r.close(o.startEvent);
                    break;
                case "toggleControls":
                    r.toggleControls(!0);
                    break;
                case "next":
                    r.next();
                    break;
                case "nextOrClose":
                    r.group.length > 1 ? r.next() : r.close(o.startEvent);
                    break;
                case "zoom":
                    "image" == c.type && (c.isLoaded || c.$ghost) && (r.canPan() ? r.scaleToFit() : r.isScaledDown() ? r.scaleToActual(h, d) : r.group.length < 2 && r.close(o.startEvent))
                }
        };
        if ((!e.originalEvent || 2 != e.originalEvent.button) && (a.is("img") || !(h > a[0].clientWidth + a.offset().left))) {
            if (a.is(".fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-container"))
                i = "Outside";
            else if (a.is(".fancybox-slide"))
                i = "Slide";
            else {
                if (!r.current.$content || !r.current.$content.find(a).addBack().filter(a).length)
                    return;
                i = "Content"
            }
            if (o.tapped) {
                if (clearTimeout(o.tapped),
                o.tapped = null,
                Math.abs(h - o.tapX) > 50 || Math.abs(d - o.tapY) > 50)
                    return this;
                u("dblclick" + i)
            } else
                o.tapX = h,
                o.tapY = d,
                c.opts["dblclick" + i] && c.opts["dblclick" + i] !== c.opts["click" + i] ? o.tapped = setTimeout(function() {
                    o.tapped = null,
                    u("click" + i)
                }, 500) : u("click" + i);
            return this
        }
    }
    ,
    n(e).on("onActivate.fb", function(t, e) {
        e && !e.Guestures && (e.Guestures = new l(e))
    })
}(window, document, window.jQuery || jQuery),
function(t, e) {
    "use strict";
    e.extend(!0, e.fancybox.defaults, {
        btnTpl: {
            slideShow: '<button data-fancybox-play class="fancybox-button fancybox-button--play" title="{{PLAY_START}}"><svg viewBox="0 0 40 40"><path d="M13,12 L27,20 L13,27 Z" /><path d="M15,10 v19 M23,10 v19" /></svg></button>'
        },
        slideShow: {
            autoStart: !1,
            speed: 3e3
        }
    });
    var n = function(t) {
        this.instance = t,
        this.init()
    };
    e.extend(n.prototype, {
        timer: null,
        isActive: !1,
        $button: null,
        init: function() {
            var t = this;
            t.$button = t.instance.$refs.toolbar.find("[data-fancybox-play]").on("click", function() {
                t.toggle()
            }),
            (t.instance.group.length < 2 || !t.instance.group[t.instance.currIndex].opts.slideShow) && t.$button.hide()
        },
        set: function(t) {
            var e = this;
            e.instance && e.instance.current && (!0 === t || e.instance.current.opts.loop || e.instance.currIndex < e.instance.group.length - 1) ? e.timer = setTimeout(function() {
                e.isActive && e.instance.jumpTo((e.instance.currIndex + 1) % e.instance.group.length)
            }, e.instance.current.opts.slideShow.speed) : (e.stop(),
            e.instance.idleSecondsCounter = 0,
            e.instance.showControls())
        },
        clear: function() {
            clearTimeout(this.timer),
            this.timer = null
        },
        start: function() {
            var t = this.instance.current;
            t && (this.isActive = !0,
            this.$button.attr("title", t.opts.i18n[t.opts.lang].PLAY_STOP).removeClass("fancybox-button--play").addClass("fancybox-button--pause"),
            this.set(!0))
        },
        stop: function() {
            var t = this.instance.current;
            this.clear(),
            this.$button.attr("title", t.opts.i18n[t.opts.lang].PLAY_START).removeClass("fancybox-button--pause").addClass("fancybox-button--play"),
            this.isActive = !1
        },
        toggle: function() {
            this.isActive ? this.stop() : this.start()
        }
    }),
    e(t).on({
        "onInit.fb": function(t, e) {
            e && !e.SlideShow && (e.SlideShow = new n(e))
        },
        "beforeShow.fb": function(t, e, n, i) {
            var o = e && e.SlideShow;
            i ? o && n.opts.slideShow.autoStart && o.start() : o && o.isActive && o.clear()
        },
        "afterShow.fb": function(t, e, n) {
            var i = e && e.SlideShow;
            i && i.isActive && i.set()
        },
        "afterKeydown.fb": function(n, i, o, s, a) {
            var r = i && i.SlideShow;
            !r || !o.opts.slideShow || 80 !== a && 32 !== a || e(t.activeElement).is("button,a,input") || (s.preventDefault(),
            r.toggle())
        },
        "beforeClose.fb onDeactivate.fb": function(t, e) {
            var n = e && e.SlideShow;
            n && n.stop()
        }
    }),
    e(t).on("visibilitychange", function() {
        var n = e.fancybox.getInstance()
          , i = n && n.SlideShow;
        i && i.isActive && (t.hidden ? i.clear() : i.set())
    })
}(document, window.jQuery || jQuery),
function(t, e) {
    "use strict";
    var n = function() {
        for (var e = [["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"], ["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"], ["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"], ["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"], ["msRequestFullscreen", "msExitFullscreen", "msFullscreenElement", "msFullscreenEnabled", "MSFullscreenChange", "MSFullscreenError"]], n = {}, i = 0; i < e.length; i++) {
            var o = e[i];
            if (o && o[1]in t) {
                for (var s = 0; s < o.length; s++)
                    n[e[0][s]] = o[s];
                return n
            }
        }
        return !1
    }();
    if (n) {
        var i = {
            request: function(e) {
                (e = e || t.documentElement)[n.requestFullscreen](e.ALLOW_KEYBOARD_INPUT)
            },
            exit: function() {
                t[n.exitFullscreen]()
            },
            toggle: function(e) {
                e = e || t.documentElement,
                this.isFullscreen() ? this.exit() : this.request(e)
            },
            isFullscreen: function() {
                return Boolean(t[n.fullscreenElement])
            },
            enabled: function() {
                return Boolean(t[n.fullscreenEnabled])
            }
        };
        e.extend(!0, e.fancybox.defaults, {
            btnTpl: {
                fullScreen: '<button data-fancybox-fullscreen class="fancybox-button fancybox-button--fullscreen" title="{{FULL_SCREEN}}"><svg viewBox="0 0 40 40"><path d="M9,12 v16 h22 v-16 h-22 v8" /></svg></button>'
            },
            fullScreen: {
                autoStart: !1
            }
        }),
        e(t).on({
            "onInit.fb": function(t, e) {
                e && e.group[e.currIndex].opts.fullScreen ? (e.$refs.container.on("click.fb-fullscreen", "[data-fancybox-fullscreen]", function(t) {
                    t.stopPropagation(),
                    t.preventDefault(),
                    i.toggle()
                }),
                e.opts.fullScreen && !0 === e.opts.fullScreen.autoStart && i.request(),
                e.FullScreen = i) : e && e.$refs.toolbar.find("[data-fancybox-fullscreen]").hide()
            },
            "afterKeydown.fb": function(t, e, n, i, o) {
                e && e.FullScreen && 70 === o && (i.preventDefault(),
                e.FullScreen.toggle())
            },
            "beforeClose.fb": function(t, e) {
                e && e.FullScreen && e.$refs.container.hasClass("fancybox-is-fullscreen") && i.exit()
            }
        }),
        e(t).on(n.fullscreenchange, function() {
            var t = i.isFullscreen()
              , n = e.fancybox.getInstance();
            n && (n.current && "image" === n.current.type && n.isAnimating && (n.current.$content.css("transition", "none"),
            n.isAnimating = !1,
            n.update(!0, !0, 0)),
            n.trigger("onFullscreenChange", t),
            n.$refs.container.toggleClass("fancybox-is-fullscreen", t))
        })
    } else
        e && e.fancybox && (e.fancybox.defaults.btnTpl.fullScreen = !1)
}(document, window.jQuery || jQuery),
function(t, e) {
    "use strict";
    var n = "fancybox-thumbs";
    e.fancybox.defaults = e.extend(!0, {
        btnTpl: {
            thumbs: '<button data-fancybox-thumbs class="fancybox-button fancybox-button--thumbs" title="{{THUMBS}}"><svg viewBox="0 0 120 120"><path d="M30,30 h14 v14 h-14 Z M50,30 h14 v14 h-14 Z M70,30 h14 v14 h-14 Z M30,50 h14 v14 h-14 Z M50,50 h14 v14 h-14 Z M70,50 h14 v14 h-14 Z M30,70 h14 v14 h-14 Z M50,70 h14 v14 h-14 Z M70,70 h14 v14 h-14 Z" /></svg></button>'
        },
        thumbs: {
            autoStart: !1,
            hideOnClose: !0,
            parentEl: ".fancybox-container",
            axis: "y"
        }
    }, e.fancybox.defaults);
    var i = function(t) {
        this.init(t)
    };
    e.extend(i.prototype, {
        $button: null,
        $grid: null,
        $list: null,
        isVisible: !1,
        isActive: !1,
        init: function(t) {
            var e, n, i = this;
            i.instance = t,
            t.Thumbs = i,
            i.opts = t.group[t.currIndex].opts.thumbs,
            e = (e = t.group[0]).opts.thumb || !(!e.opts.$thumb || !e.opts.$thumb.length) && e.opts.$thumb.attr("src"),
            t.group.length > 1 && (n = (n = t.group[1]).opts.thumb || !(!n.opts.$thumb || !n.opts.$thumb.length) && n.opts.$thumb.attr("src")),
            i.$button = t.$refs.toolbar.find("[data-fancybox-thumbs]"),
            i.opts && e && n && e && n ? (i.$button.show().on("click", function() {
                i.toggle()
            }),
            i.isActive = !0) : i.$button.hide()
        },
        create: function() {
            var t, i = this.instance, o = this.opts.parentEl, s = [];
            this.$grid || (this.$grid = e('<div class="' + n + " " + n + "-" + this.opts.axis + '"></div>').appendTo(i.$refs.container.find(o).addBack().filter(o)),
            this.$grid.on("click", "li", function() {
                i.jumpTo(e(this).attr("data-index"))
            })),
            this.$list || (this.$list = e("<ul>").appendTo(this.$grid)),
            e.each(i.group, function(e, n) {
                (t = n.opts.thumb || (n.opts.$thumb ? n.opts.$thumb.attr("src") : null)) || "image" !== n.type || (t = n.src),
                s.push('<li data-index="' + e + '" tabindex="0" class="fancybox-thumbs-loading"' + (t && t.length ? ' style="background-image:url(' + t + ')" />' : "") + "></li>")
            }),
            this.$list[0].innerHTML = s.join(""),
            "x" === this.opts.axis && this.$list.width(parseInt(this.$grid.css("padding-right"), 10) + i.group.length * this.$list.children().eq(0).outerWidth(!0))
        },
        focus: function(t) {
            var e, n, i = this.$list, o = this.$grid;
            this.instance.current && (n = (e = i.children().removeClass("fancybox-thumbs-active").filter('[data-index="' + this.instance.current.index + '"]').addClass("fancybox-thumbs-active")).position(),
            "y" === this.opts.axis && (n.top < 0 || n.top > i.height() - e.outerHeight()) ? i.stop().animate({
                scrollTop: i.scrollTop() + n.top
            }, t) : "x" === this.opts.axis && (n.left < o.scrollLeft() || n.left > o.scrollLeft() + (o.width() - e.outerWidth())) && i.parent().stop().animate({
                scrollLeft: n.left
            }, t))
        },
        update: function() {
            this.instance.$refs.container.toggleClass("fancybox-show-thumbs", this.isVisible),
            this.isVisible ? (this.$grid || this.create(),
            this.instance.trigger("onThumbsShow"),
            this.focus(0)) : this.$grid && this.instance.trigger("onThumbsHide"),
            this.instance.update()
        },
        hide: function() {
            this.isVisible = !1,
            this.update()
        },
        show: function() {
            this.isVisible = !0,
            this.update()
        },
        toggle: function() {
            this.isVisible = !this.isVisible,
            this.update()
        }
    }),
    e(t).on({
        "onInit.fb": function(t, e) {
            var n;
            e && !e.Thumbs && (n = new i(e)).isActive && !0 === n.opts.autoStart && n.show()
        },
        "beforeShow.fb": function(t, e, n, i) {
            var o = e && e.Thumbs;
            o && o.isVisible && o.focus(i ? 0 : 250)
        },
        "afterKeydown.fb": function(t, e, n, i, o) {
            var s = e && e.Thumbs;
            s && s.isActive && 71 === o && (i.preventDefault(),
            s.toggle())
        },
        "beforeClose.fb": function(t, e) {
            var n = e && e.Thumbs;
            n && n.isVisible && !1 !== n.opts.hideOnClose && n.$grid.hide()
        }
    })
}(document, window.jQuery || jQuery),
function(t, e) {
    "use strict";
    e.extend(!0, e.fancybox.defaults, {
        btnTpl: {
            share: '<button data-fancybox-share class="fancybox-button fancybox-button--share" title="{{SHARE}}"><svg viewBox="0 0 40 40"><path d="M6,30 C8,18 19,16 23,16 L23,16 L23,10 L33,20 L23,29 L23,24 C19,24 8,27 6,30 Z"></svg></button>'
        },
        share: {
            url: function(t, e) {
                return !t.currentHash && "inline" !== e.type && "html" !== e.type && (e.origSrc || e.src) || window.location
            },
            tpl: '<div class="fancybox-share"><h1>{{SHARE}}</h1><p><a class="fancybox-share__button fancybox-share__button--fb" href="https://www.facebook.com/sharer/sharer.php?u={{url}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m287 456v-299c0-21 6-35 35-35h38v-63c-7-1-29-3-55-3-54 0-91 33-91 94v306m143-254h-205v72h196" /></svg><span>Facebook</span></a><a class="fancybox-share__button fancybox-share__button--tw" href="https://twitter.com/intent/tweet?url={{url}}&text={{descr}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m456 133c-14 7-31 11-47 13 17-10 30-27 37-46-15 10-34 16-52 20-61-62-157-7-141 75-68-3-129-35-169-85-22 37-11 86 26 109-13 0-26-4-37-9 0 39 28 72 65 80-12 3-25 4-37 2 10 33 41 57 77 57-42 30-77 38-122 34 170 111 378-32 359-208 16-11 30-25 41-42z" /></svg><span>Twitter</span></a><a class="fancybox-share__button fancybox-share__button--pt" href="https://www.pinterest.com/pin/create/button/?url={{url}}&description={{descr}}&media={{media}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m265 56c-109 0-164 78-164 144 0 39 15 74 47 87 5 2 10 0 12-5l4-19c2-6 1-8-3-13-9-11-15-25-15-45 0-58 43-110 113-110 62 0 96 38 96 88 0 67-30 122-73 122-24 0-42-19-36-44 6-29 20-60 20-81 0-19-10-35-31-35-25 0-44 26-44 60 0 21 7 36 7 36l-30 125c-8 37-1 83 0 87 0 3 4 4 5 2 2-3 32-39 42-75l16-64c8 16 31 29 56 29 74 0 124-67 124-157 0-69-58-132-146-132z" fill="#fff"/></svg><span>Pinterest</span></a></p><p><input class="fancybox-share__input" type="text" value="{{url_raw}}" /></p></div>'
        }
    }),
    e(t).on("click", "[data-fancybox-share]", function() {
        var t, n, i, o, s = e.fancybox.getInstance(), a = s.current || null;
        a && ("function" === e.type(a.opts.share.url) && (t = a.opts.share.url.apply(a, [s, a])),
        n = a.opts.share.tpl.replace(/\{\{media\}\}/g, "image" === a.type ? encodeURIComponent(a.src) : "").replace(/\{\{url\}\}/g, encodeURIComponent(t)).replace(/\{\{url_raw\}\}/g, (i = t,
        o = {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#39;",
            "/": "&#x2F;",
            "`": "&#x60;",
            "=": "&#x3D;"
        },
        String(i).replace(/[&<>"'`=\/]/g, function(t) {
            return o[t]
        }))).replace(/\{\{descr\}\}/g, s.$caption ? encodeURIComponent(s.$caption.text()) : ""),
        e.fancybox.open({
            src: s.translate(s, n),
            type: "html",
            opts: {
                animationEffect: !1,
                afterLoad: function(t, e) {
                    s.$refs.container.one("beforeClose.fb", function() {
                        t.close(null, 0)
                    }),
                    e.$content.find(".fancybox-share__links a").click(function() {
                        return window.open(this.href, "Share", "width=550, height=450"),
                        !1
                    })
                }
            }
        }))
    })
}(document, window.jQuery || jQuery),
function(t, e, n) {
    "use strict";
    function i() {
        var t = e.location.hash.substr(1)
          , n = t.split("-")
          , i = n.length > 1 && /^\+?\d+$/.test(n[n.length - 1]) && parseInt(n.pop(-1), 10) || 1;
        return {
            hash: t,
            index: i < 1 ? 1 : i,
            gallery: n.join("-")
        }
    }
    function o(t) {
        "" !== t.gallery && n("[data-fancybox='" + n.escapeSelector(t.gallery) + "']").eq(t.index - 1).trigger("click.fb-start")
    }
    function s(t) {
        var e, n;
        return !!t && ("" !== (n = (e = t.current ? t.current.opts : t.opts).hash || (e.$orig ? e.$orig.data("fancybox") : "")) && n)
    }
    n.escapeSelector || (n.escapeSelector = function(t) {
        return (t + "").replace(/([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g, function(t, e) {
            return e ? "\0" === t ? "�" : t.slice(0, -1) + "\\" + t.charCodeAt(t.length - 1).toString(16) + " " : "\\" + t
        })
    }
    ),
    n(function() {
        !1 !== n.fancybox.defaults.hash && (n(t).on({
            "onInit.fb": function(t, e) {
                var n, o;
                !1 !== e.group[e.currIndex].opts.hash && (n = i(),
                (o = s(e)) && n.gallery && o == n.gallery && (e.currIndex = n.index - 1))
            },
            "beforeShow.fb": function(n, i, o, a) {
                var r;
                o && !1 !== o.opts.hash && (r = s(i)) && (i.currentHash = r + (i.group.length > 1 ? "-" + (o.index + 1) : ""),
                e.location.hash !== "#" + i.currentHash && (i.origHash || (i.origHash = e.location.hash),
                i.hashTimer && clearTimeout(i.hashTimer),
                i.hashTimer = setTimeout(function() {
                    "replaceState"in e.history ? (e.history[a ? "pushState" : "replaceState"]({}, t.title, e.location.pathname + e.location.search + "#" + i.currentHash),
                    a && (i.hasCreatedHistory = !0)) : e.location.hash = i.currentHash,
                    i.hashTimer = null
                }, 300)))
            },
            "beforeClose.fb": function(n, i, o) {
                !1 !== o.opts.hash && (s(i),
                i.currentHash && i.hasCreatedHistory ? e.history.back() : i.currentHash && ("replaceState"in e.history ? e.history.replaceState({}, t.title, e.location.pathname + e.location.search + (i.origHash || "")) : e.location.hash = i.origHash),
                i.currentHash = null,
                clearTimeout(i.hashTimer))
            }
        }),
        n(e).on("hashchange.fb", function() {
            var t, e = i();
            n.each(n(".fancybox-container").get().reverse(), function(e, i) {
                var o = n(i).data("FancyBox");
                if (o.currentHash)
                    return t = o,
                    !1
            }),
            t ? !t.currentHash || t.currentHash === e.gallery + "-" + e.index || 1 === e.index && t.currentHash == e.gallery || (t.currentHash = null,
            t.close()) : "" !== e.gallery && o(e)
        }),
        setTimeout(function() {
            n.fancybox.getInstance() || o(i())
        }, 50))
    })
}(document, window, window.jQuery || jQuery),
function(t, e) {
    "use strict";
    var n = (new Date).getTime();
    e(t).on({
        "onInit.fb": function(t, e, i) {
            e.$refs.stage.on("mousewheel DOMMouseScroll wheel MozMousePixelScroll", function(t) {
                var i = e.current
                  , o = (new Date).getTime();
                e.group.length < 2 || !1 === i.opts.wheel || "auto" === i.opts.wheel && "image" !== i.type || (t.preventDefault(),
                t.stopPropagation(),
                i.$slide.hasClass("fancybox-animated") || (t = t.originalEvent || t,
                o - n < 250 || (n = o,
                e[(-t.deltaY || -t.deltaX || t.wheelDelta || -t.detail) < 0 ? "next" : "previous"]())))
            })
        }
    })
}(document, window.jQuery || jQuery);
//Packery
!function(t, e) {
    "use strict";
    "function" == typeof define && define.amd ? define("jquery-bridget/jquery-bridget", ["jquery"], function(i) {
        e(t, i)
    }) : "object" == typeof module && module.exports ? module.exports = e(t, require("jquery")) : t.jQueryBridget = e(t, t.jQuery)
}(window, function(t, e) {
    "use strict";
    var i = Array.prototype.slice
      , n = t.console
      , o = void 0 === n ? function() {}
    : function(t) {
        n.error(t)
    }
    ;
    function s(n, s, a) {
        (a = a || e || t.jQuery) && (s.prototype.option || (s.prototype.option = function(t) {
            a.isPlainObject(t) && (this.options = a.extend(!0, this.options, t))
        }
        ),
        a.fn[n] = function(t) {
            var e;
            return "string" == typeof t ? function(t, e, i) {
                var s, r = "$()." + n + '("' + e + '")';
                return t.each(function(t, h) {
                    var u = a.data(h, n);
                    if (u) {
                        var c = u[e];
                        if (c && "_" != e.charAt(0)) {
                            var d = c.apply(u, i);
                            s = void 0 === s ? d : s
                        } else
                            o(r + " is not a valid method")
                    } else
                        o(n + " not initialized. Cannot call methods, i.e. " + r)
                }),
                void 0 !== s ? s : t
            }(this, t, i.call(arguments, 1)) : (e = t,
            this.each(function(t, i) {
                var o = a.data(i, n);
                o ? (o.option(e),
                o._init()) : (o = new s(i,e),
                a.data(i, n, o))
            }),
            this)
        }
        ,
        r(a))
    }
    function r(t) {
        !t || t && t.bridget || (t.bridget = s)
    }
    return r(e || t.jQuery),
    s
}),
function(t, e) {
    "use strict";
    "function" == typeof define && define.amd ? define("get-size/get-size", [], function() {
        return e()
    }) : "object" == typeof module && module.exports ? module.exports = e() : t.getSize = e()
}(window, function() {
    "use strict";
    function t(t) {
        var e = parseFloat(t);
        return -1 == t.indexOf("%") && !isNaN(e) && e
    }
    var e = "undefined" == typeof console ? function() {}
    : function(t) {
        console.error(t)
    }
      , i = ["paddingLeft", "paddingRight", "paddingTop", "paddingBottom", "marginLeft", "marginRight", "marginTop", "marginBottom", "borderLeftWidth", "borderRightWidth", "borderTopWidth", "borderBottomWidth"]
      , n = i.length;
    function o(t) {
        var i = getComputedStyle(t);
        return i || e("Style returned " + i + ". Are you running this code in a hidden iframe on Firefox? See http://bit.ly/getsizebug1"),
        i
    }
    var s, r = !1;
    function a(e) {
        if (function() {
            if (!r) {
                r = !0;
                var e = document.createElement("div");
                e.style.width = "200px",
                e.style.padding = "1px 2px 3px 4px",
                e.style.borderStyle = "solid",
                e.style.borderWidth = "1px 2px 3px 4px",
                e.style.boxSizing = "border-box";
                var i = document.body || document.documentElement;
                i.appendChild(e);
                var n = o(e);
                a.isBoxSizeOuter = s = 200 == t(n.width),
                i.removeChild(e)
            }
        }(),
        "string" == typeof e && (e = document.querySelector(e)),
        e && "object" == typeof e && e.nodeType) {
            var h = o(e);
            if ("none" == h.display)
                return function() {
                    for (var t = {
                        width: 0,
                        height: 0,
                        innerWidth: 0,
                        innerHeight: 0,
                        outerWidth: 0,
                        outerHeight: 0
                    }, e = 0; e < n; e++)
                        t[i[e]] = 0;
                    return t
                }();
            var u = {};
            u.width = e.offsetWidth,
            u.height = e.offsetHeight;
            for (var c = u.isBorderBox = "border-box" == h.boxSizing, d = 0; d < n; d++) {
                var l = i[d]
                  , f = h[l]
                  , p = parseFloat(f);
                u[l] = isNaN(p) ? 0 : p
            }
            var m = u.paddingLeft + u.paddingRight
              , g = u.paddingTop + u.paddingBottom
              , y = u.marginLeft + u.marginRight
              , v = u.marginTop + u.marginBottom
              , _ = u.borderLeftWidth + u.borderRightWidth
              , x = u.borderTopWidth + u.borderBottomWidth
              , b = c && s
              , E = t(h.width);
            !1 !== E && (u.width = E + (b ? 0 : m + _));
            var T = t(h.height);
            return !1 !== T && (u.height = T + (b ? 0 : g + x)),
            u.innerWidth = u.width - (m + _),
            u.innerHeight = u.height - (g + x),
            u.outerWidth = u.width + y,
            u.outerHeight = u.height + v,
            u
        }
    }
    return a
}),
function(t, e) {
    "function" == typeof define && define.amd ? define("ev-emitter/ev-emitter", e) : "object" == typeof module && module.exports ? module.exports = e() : t.EvEmitter = e()
}(this, function() {
    function t() {}
    var e = t.prototype;
    return e.on = function(t, e) {
        if (t && e) {
            var i = this._events = this._events || {}
              , n = i[t] = i[t] || [];
            return -1 == n.indexOf(e) && n.push(e),
            this
        }
    }
    ,
    e.once = function(t, e) {
        if (t && e) {
            this.on(t, e);
            var i = this._onceEvents = this._onceEvents || {};
            return (i[t] = i[t] || {})[e] = !0,
            this
        }
    }
    ,
    e.off = function(t, e) {
        var i = this._events && this._events[t];
        if (i && i.length) {
            var n = i.indexOf(e);
            return -1 != n && i.splice(n, 1),
            this
        }
    }
    ,
    e.emitEvent = function(t, e) {
        var i = this._events && this._events[t];
        if (i && i.length) {
            var n = 0
              , o = i[n];
            e = e || [];
            for (var s = this._onceEvents && this._onceEvents[t]; o; ) {
                var r = s && s[o];
                r && (this.off(t, o),
                delete s[o]),
                o.apply(this, e),
                o = i[n += r ? 0 : 1]
            }
            return this
        }
    }
    ,
    t
}),
function(t, e) {
    "use strict";
    "function" == typeof define && define.amd ? define("desandro-matches-selector/matches-selector", e) : "object" == typeof module && module.exports ? module.exports = e() : t.matchesSelector = e()
}(window, function() {
    "use strict";
    var t = function() {
        var t = Element.prototype;
        if (t.matches)
            return "matches";
        if (t.matchesSelector)
            return "matchesSelector";
        for (var e = ["webkit", "moz", "ms", "o"], i = 0; i < e.length; i++) {
            var n = e[i] + "MatchesSelector";
            if (t[n])
                return n
        }
    }();
    return function(e, i) {
        return e[t](i)
    }
}),
function(t, e) {
    "function" == typeof define && define.amd ? define("fizzy-ui-utils/utils", ["desandro-matches-selector/matches-selector"], function(i) {
        return e(t, i)
    }) : "object" == typeof module && module.exports ? module.exports = e(t, require("desandro-matches-selector")) : t.fizzyUIUtils = e(t, t.matchesSelector)
}(window, function(t, e) {
    var i = {
        extend: function(t, e) {
            for (var i in e)
                t[i] = e[i];
            return t
        },
        modulo: function(t, e) {
            return (t % e + e) % e
        },
        makeArray: function(t) {
            var e = [];
            if (Array.isArray(t))
                e = t;
            else if (t && "number" == typeof t.length)
                for (var i = 0; i < t.length; i++)
                    e.push(t[i]);
            else
                e.push(t);
            return e
        },
        removeFrom: function(t, e) {
            var i = t.indexOf(e);
            -1 != i && t.splice(i, 1)
        },
        getParent: function(t, i) {
            for (; t != document.body; )
                if (t = t.parentNode,
                e(t, i))
                    return t
        },
        getQueryElement: function(t) {
            return "string" == typeof t ? document.querySelector(t) : t
        },
        handleEvent: function(t) {
            var e = "on" + t.type;
            this[e] && this[e](t)
        },
        filterFindElements: function(t, n) {
            t = i.makeArray(t);
            var o = [];
            return t.forEach(function(t) {
                if (t instanceof HTMLElement)
                    if (n) {
                        e(t, n) && o.push(t);
                        for (var i = t.querySelectorAll(n), s = 0; s < i.length; s++)
                            o.push(i[s])
                    } else
                        o.push(t)
            }),
            o
        },
        debounceMethod: function(t, e, i) {
            var n = t.prototype[e]
              , o = e + "Timeout";
            t.prototype[e] = function() {
                var t = this[o];
                t && clearTimeout(t);
                var e = arguments
                  , s = this;
                this[o] = setTimeout(function() {
                    n.apply(s, e),
                    delete s[o]
                }, i || 100)
            }
        },
        docReady: function(t) {
            "complete" == document.readyState ? t() : document.addEventListener("DOMContentLoaded", t)
        },
        toDashed: function(t) {
            return t.replace(/(.)([A-Z])/g, function(t, e, i) {
                return e + "-" + i
            }).toLowerCase()
        }
    }
      , n = t.console;
    return i.htmlInit = function(e, o) {
        i.docReady(function() {
            var s = i.toDashed(o)
              , r = "data-" + s
              , a = document.querySelectorAll("[" + r + "]")
              , h = document.querySelectorAll(".js-" + s)
              , u = i.makeArray(a).concat(i.makeArray(h))
              , c = r + "-options"
              , d = t.jQuery;
            u.forEach(function(t) {
                var i, s = t.getAttribute(r) || t.getAttribute(c);
                try {
                    i = s && JSON.parse(s)
                } catch (e) {
                    return void (n && n.error("Error parsing " + r + " on " + t.className + ": " + e))
                }
                var a = new e(t,i);
                d && d.data(t, o, a)
            })
        })
    }
    ,
    i
}),
function(t, e) {
    "function" == typeof define && define.amd ? define("outlayer/item", ["ev-emitter/ev-emitter", "get-size/get-size"], e) : "object" == typeof module && module.exports ? module.exports = e(require("ev-emitter"), require("get-size")) : (t.Outlayer = {},
    t.Outlayer.Item = e(t.EvEmitter, t.getSize))
}(window, function(t, e) {
    "use strict";
    var i = document.documentElement.style
      , n = "string" == typeof i.transition ? "transition" : "WebkitTransition"
      , o = "string" == typeof i.transform ? "transform" : "WebkitTransform"
      , s = {
        WebkitTransition: "webkitTransitionEnd",
        transition: "transitionend"
    }[n]
      , r = {
        transform: o,
        transition: n,
        transitionDuration: n + "Duration",
        transitionProperty: n + "Property"
    };
    function a(t, e) {
        t && (this.element = t,
        this.layout = e,
        this.position = {
            x: 0,
            y: 0
        },
        this._create())
    }
    var h = a.prototype = Object.create(t.prototype);
    h.constructor = a,
    h._create = function() {
        this._transn = {
            ingProperties: {},
            clean: {},
            onEnd: {}
        },
        this.css({
            position: "absolute"
        })
    }
    ,
    h.handleEvent = function(t) {
        var e = "on" + t.type;
        this[e] && this[e](t)
    }
    ,
    h.getSize = function() {
        this.size = e(this.element)
    }
    ,
    h.css = function(t) {
        var e = this.element.style;
        for (var i in t) {
            e[r[i] || i] = t[i]
        }
    }
    ,
    h.getPosition = function() {
        var t = getComputedStyle(this.element)
          , e = this.layout._getOption("originLeft")
          , i = this.layout._getOption("originTop")
          , n = t[e ? "left" : "right"]
          , o = t[i ? "top" : "bottom"]
          , s = this.layout.size
          , r = -1 != n.indexOf("%") ? parseFloat(n) / 100 * s.width : parseInt(n, 10)
          , a = -1 != o.indexOf("%") ? parseFloat(o) / 100 * s.height : parseInt(o, 10);
        r = isNaN(r) ? 0 : r,
        a = isNaN(a) ? 0 : a,
        r -= e ? s.paddingLeft : s.paddingRight,
        a -= i ? s.paddingTop : s.paddingBottom,
        this.position.x = r,
        this.position.y = a
    }
    ,
    h.layoutPosition = function() {
        var t = this.layout.size
          , e = {}
          , i = this.layout._getOption("originLeft")
          , n = this.layout._getOption("originTop")
          , o = i ? "paddingLeft" : "paddingRight"
          , s = i ? "left" : "right"
          , r = i ? "right" : "left"
          , a = this.position.x + t[o];
        e[s] = this.getXValue(a),
        e[r] = "";
        var h = n ? "paddingTop" : "paddingBottom"
          , u = n ? "top" : "bottom"
          , c = n ? "bottom" : "top"
          , d = this.position.y + t[h];
        e[u] = this.getYValue(d),
        e[c] = "",
        this.css(e),
        this.emitEvent("layout", [this])
    }
    ,
    h.getXValue = function(t) {
        var e = this.layout._getOption("horizontal");
        return this.layout.options.percentPosition && !e ? t / this.layout.size.width * 100 + "%" : t + "px"
    }
    ,
    h.getYValue = function(t) {
        var e = this.layout._getOption("horizontal");
        return this.layout.options.percentPosition && e ? t / this.layout.size.height * 100 + "%" : t + "px"
    }
    ,
    h._transitionTo = function(t, e) {
        this.getPosition();
        var i = this.position.x
          , n = this.position.y
          , o = parseInt(t, 10)
          , s = parseInt(e, 10)
          , r = o === this.position.x && s === this.position.y;
        if (this.setPosition(t, e),
        !r || this.isTransitioning) {
            var a = t - i
              , h = e - n
              , u = {};
            u.transform = this.getTranslate(a, h),
            this.transition({
                to: u,
                onTransitionEnd: {
                    transform: this.layoutPosition
                },
                isCleaning: !0
            })
        } else
            this.layoutPosition()
    }
    ,
    h.getTranslate = function(t, e) {
        return "translate3d(" + (t = this.layout._getOption("originLeft") ? t : -t) + "px, " + (e = this.layout._getOption("originTop") ? e : -e) + "px, 0)"
    }
    ,
    h.goTo = function(t, e) {
        this.setPosition(t, e),
        this.layoutPosition()
    }
    ,
    h.moveTo = h._transitionTo,
    h.setPosition = function(t, e) {
        this.position.x = parseInt(t, 10),
        this.position.y = parseInt(e, 10)
    }
    ,
    h._nonTransition = function(t) {
        for (var e in this.css(t.to),
        t.isCleaning && this._removeStyles(t.to),
        t.onTransitionEnd)
            t.onTransitionEnd[e].call(this)
    }
    ,
    h.transition = function(t) {
        if (parseFloat(this.layout.options.transitionDuration)) {
            var e = this._transn;
            for (var i in t.onTransitionEnd)
                e.onEnd[i] = t.onTransitionEnd[i];
            for (i in t.to)
                e.ingProperties[i] = !0,
                t.isCleaning && (e.clean[i] = !0);
            if (t.from) {
                this.css(t.from);
                this.element.offsetHeight;
                null
            }
            this.enableTransition(t.to),
            this.css(t.to),
            this.isTransitioning = !0
        } else
            this._nonTransition(t)
    }
    ;
    var u = "opacity," + o.replace(/([A-Z])/g, function(t) {
        return "-" + t.toLowerCase()
    });
    h.enableTransition = function() {
        this.isTransitioning || (this.css({
            transitionProperty: u,
            transitionDuration: this.layout.options.transitionDuration
        }),
        this.element.addEventListener(s, this, !1))
    }
    ,
    h.onwebkitTransitionEnd = function(t) {
        this.ontransitionend(t)
    }
    ,
    h.onotransitionend = function(t) {
        this.ontransitionend(t)
    }
    ;
    var c = {
        "-webkit-transform": "transform"
    };
    h.ontransitionend = function(t) {
        if (t.target === this.element) {
            var e = this._transn
              , i = c[t.propertyName] || t.propertyName;
            if (delete e.ingProperties[i],
            function(t) {
                for (var e in t)
                    return !1;
                return !0
            }(e.ingProperties) && this.disableTransition(),
            i in e.clean && (this.element.style[t.propertyName] = "",
            delete e.clean[i]),
            i in e.onEnd)
                e.onEnd[i].call(this),
                delete e.onEnd[i];
            this.emitEvent("transitionEnd", [this])
        }
    }
    ,
    h.disableTransition = function() {
        this.removeTransitionStyles(),
        this.element.removeEventListener(s, this, !1),
        this.isTransitioning = !1
    }
    ,
    h._removeStyles = function(t) {
        var e = {};
        for (var i in t)
            e[i] = "";
        this.css(e)
    }
    ;
    var d = {
        transitionProperty: "",
        transitionDuration: ""
    };
    return h.removeTransitionStyles = function() {
        this.css(d)
    }
    ,
    h.removeElem = function() {
        this.element.parentNode.removeChild(this.element),
        this.css({
            display: ""
        }),
        this.emitEvent("remove", [this])
    }
    ,
    h.remove = function() {
        n && parseFloat(this.layout.options.transitionDuration) ? (this.once("transitionEnd", function() {
            this.removeElem()
        }),
        this.hide()) : this.removeElem()
    }
    ,
    h.reveal = function() {
        delete this.isHidden,
        this.css({
            display: ""
        });
        var t = this.layout.options
          , e = {};
        e[this.getHideRevealTransitionEndProperty("visibleStyle")] = this.onRevealTransitionEnd,
        this.transition({
            from: t.hiddenStyle,
            to: t.visibleStyle,
            isCleaning: !0,
            onTransitionEnd: e
        })
    }
    ,
    h.onRevealTransitionEnd = function() {
        this.isHidden || this.emitEvent("reveal")
    }
    ,
    h.getHideRevealTransitionEndProperty = function(t) {
        var e = this.layout.options[t];
        if (e.opacity)
            return "opacity";
        for (var i in e)
            return i
    }
    ,
    h.hide = function() {
        this.isHidden = !0,
        this.css({
            display: ""
        });
        var t = this.layout.options
          , e = {};
        e[this.getHideRevealTransitionEndProperty("hiddenStyle")] = this.onHideTransitionEnd,
        this.transition({
            from: t.visibleStyle,
            to: t.hiddenStyle,
            isCleaning: !0,
            onTransitionEnd: e
        })
    }
    ,
    h.onHideTransitionEnd = function() {
        this.isHidden && (this.css({
            display: "none"
        }),
        this.emitEvent("hide"))
    }
    ,
    h.destroy = function() {
        this.css({
            position: "",
            left: "",
            right: "",
            top: "",
            bottom: "",
            transition: "",
            transform: ""
        })
    }
    ,
    a
}),
function(t, e) {
    "use strict";
    "function" == typeof define && define.amd ? define("outlayer/outlayer", ["ev-emitter/ev-emitter", "get-size/get-size", "fizzy-ui-utils/utils", "./item"], function(i, n, o, s) {
        return e(t, i, n, o, s)
    }) : "object" == typeof module && module.exports ? module.exports = e(t, require("ev-emitter"), require("get-size"), require("fizzy-ui-utils"), require("./item")) : t.Outlayer = e(t, t.EvEmitter, t.getSize, t.fizzyUIUtils, t.Outlayer.Item)
}(window, function(t, e, i, n, o) {
    "use strict";
    var s = t.console
      , r = t.jQuery
      , a = function() {}
      , h = 0
      , u = {};
    function c(t, e) {
        var i = n.getQueryElement(t);
        if (i) {
            this.element = i,
            r && (this.$element = r(this.element)),
            this.options = n.extend({}, this.constructor.defaults),
            this.option(e);
            var o = ++h;
            this.element.outlayerGUID = o,
            u[o] = this,
            this._create(),
            this._getOption("initLayout") && this.layout()
        } else
            s && s.error("Bad element for " + this.constructor.namespace + ": " + (i || t))
    }
    c.namespace = "outlayer",
    c.Item = o,
    c.defaults = {
        containerStyle: {
            position: "relative"
        },
        initLayout: !0,
        originLeft: !0,
        originTop: !0,
        resize: !0,
        resizeContainer: !0,
        transitionDuration: "0.4s",
        hiddenStyle: {
            opacity: 0,
            transform: "scale(0.001)"
        },
        visibleStyle: {
            opacity: 1,
            transform: "scale(1)"
        }
    };
    var d = c.prototype;
    function l(t) {
        function e() {
            t.apply(this, arguments)
        }
        return e.prototype = Object.create(t.prototype),
        e.prototype.constructor = e,
        e
    }
    return n.extend(d, e.prototype),
    d.option = function(t) {
        n.extend(this.options, t)
    }
    ,
    d._getOption = function(t) {
        var e = this.constructor.compatOptions[t];
        return e && void 0 !== this.options[e] ? this.options[e] : this.options[t]
    }
    ,
    c.compatOptions = {
        initLayout: "isInitLayout",
        horizontal: "isHorizontal",
        layoutInstant: "isLayoutInstant",
        originLeft: "isOriginLeft",
        originTop: "isOriginTop",
        resize: "isResizeBound",
        resizeContainer: "isResizingContainer"
    },
    d._create = function() {
        this.reloadItems(),
        this.stamps = [],
        this.stamp(this.options.stamp),
        n.extend(this.element.style, this.options.containerStyle),
        this._getOption("resize") && this.bindResize()
    }
    ,
    d.reloadItems = function() {
        this.items = this._itemize(this.element.children)
    }
    ,
    d._itemize = function(t) {
        for (var e = this._filterFindItemElements(t), i = this.constructor.Item, n = [], o = 0; o < e.length; o++) {
            var s = new i(e[o],this);
            n.push(s)
        }
        return n
    }
    ,
    d._filterFindItemElements = function(t) {
        return n.filterFindElements(t, this.options.itemSelector)
    }
    ,
    d.getItemElements = function() {
        return this.items.map(function(t) {
            return t.element
        })
    }
    ,
    d.layout = function() {
        this._resetLayout(),
        this._manageStamps();
        var t = this._getOption("layoutInstant")
          , e = void 0 !== t ? t : !this._isLayoutInited;
        this.layoutItems(this.items, e),
        this._isLayoutInited = !0
    }
    ,
    d._init = d.layout,
    d._resetLayout = function() {
        this.getSize()
    }
    ,
    d.getSize = function() {
        this.size = i(this.element)
    }
    ,
    d._getMeasurement = function(t, e) {
        var n, o = this.options[t];
        o ? ("string" == typeof o ? n = this.element.querySelector(o) : o instanceof HTMLElement && (n = o),
        this[t] = n ? i(n)[e] : o) : this[t] = 0
    }
    ,
    d.layoutItems = function(t, e) {
        t = this._getItemsForLayout(t),
        this._layoutItems(t, e),
        this._postLayout()
    }
    ,
    d._getItemsForLayout = function(t) {
        return t.filter(function(t) {
            return !t.isIgnored
        })
    }
    ,
    d._layoutItems = function(t, e) {
        if (this._emitCompleteOnItems("layout", t),
        t && t.length) {
            var i = [];
            t.forEach(function(t) {
                var n = this._getItemLayoutPosition(t);
                n.item = t,
                n.isInstant = e || t.isLayoutInstant,
                i.push(n)
            }, this),
            this._processLayoutQueue(i)
        }
    }
    ,
    d._getItemLayoutPosition = function() {
        return {
            x: 0,
            y: 0
        }
    }
    ,
    d._processLayoutQueue = function(t) {
        t.forEach(function(t) {
            this._positionItem(t.item, t.x, t.y, t.isInstant)
        }, this)
    }
    ,
    d._positionItem = function(t, e, i, n) {
        n ? t.goTo(e, i) : t.moveTo(e, i)
    }
    ,
    d._postLayout = function() {
        this.resizeContainer()
    }
    ,
    d.resizeContainer = function() {
        if (this._getOption("resizeContainer")) {
            var t = this._getContainerSize();
            t && (this._setContainerMeasure(t.width, !0),
            this._setContainerMeasure(t.height, !1))
        }
    }
    ,
    d._getContainerSize = a,
    d._setContainerMeasure = function(t, e) {
        if (void 0 !== t) {
            var i = this.size;
            i.isBorderBox && (t += e ? i.paddingLeft + i.paddingRight + i.borderLeftWidth + i.borderRightWidth : i.paddingBottom + i.paddingTop + i.borderTopWidth + i.borderBottomWidth),
            t = Math.max(t, 0),
            this.element.style[e ? "width" : "height"] = t + "px"
        }
    }
    ,
    d._emitCompleteOnItems = function(t, e) {
        var i = this;
        function n() {
            i.dispatchEvent(t + "Complete", null, [e])
        }
        var o = e.length;
        if (e && o) {
            var s = 0;
            e.forEach(function(e) {
                e.once(t, r)
            })
        } else
            n();
        function r() {
            ++s == o && n()
        }
    }
    ,
    d.dispatchEvent = function(t, e, i) {
        var n = e ? [e].concat(i) : i;
        if (this.emitEvent(t, n),
        r)
            if (this.$element = this.$element || r(this.element),
            e) {
                var o = r.Event(e);
                o.type = t,
                this.$element.trigger(o, i)
            } else
                this.$element.trigger(t, i)
    }
    ,
    d.ignore = function(t) {
        var e = this.getItem(t);
        e && (e.isIgnored = !0)
    }
    ,
    d.unignore = function(t) {
        var e = this.getItem(t);
        e && delete e.isIgnored
    }
    ,
    d.stamp = function(t) {
        (t = this._find(t)) && (this.stamps = this.stamps.concat(t),
        t.forEach(this.ignore, this))
    }
    ,
    d.unstamp = function(t) {
        (t = this._find(t)) && t.forEach(function(t) {
            n.removeFrom(this.stamps, t),
            this.unignore(t)
        }, this)
    }
    ,
    d._find = function(t) {
        if (t)
            return "string" == typeof t && (t = this.element.querySelectorAll(t)),
            t = n.makeArray(t)
    }
    ,
    d._manageStamps = function() {
        this.stamps && this.stamps.length && (this._getBoundingRect(),
        this.stamps.forEach(this._manageStamp, this))
    }
    ,
    d._getBoundingRect = function() {
        var t = this.element.getBoundingClientRect()
          , e = this.size;
        this._boundingRect = {
            left: t.left + e.paddingLeft + e.borderLeftWidth,
            top: t.top + e.paddingTop + e.borderTopWidth,
            right: t.right - (e.paddingRight + e.borderRightWidth),
            bottom: t.bottom - (e.paddingBottom + e.borderBottomWidth)
        }
    }
    ,
    d._manageStamp = a,
    d._getElementOffset = function(t) {
        var e = t.getBoundingClientRect()
          , n = this._boundingRect
          , o = i(t);
        return {
            left: e.left - n.left - o.marginLeft,
            top: e.top - n.top - o.marginTop,
            right: n.right - e.right - o.marginRight,
            bottom: n.bottom - e.bottom - o.marginBottom
        }
    }
    ,
    d.handleEvent = n.handleEvent,
    d.bindResize = function() {
        t.addEventListener("resize", this),
        this.isResizeBound = !0
    }
    ,
    d.unbindResize = function() {
        t.removeEventListener("resize", this),
        this.isResizeBound = !1
    }
    ,
    d.onresize = function() {
        this.resize()
    }
    ,
    n.debounceMethod(c, "onresize", 100),
    d.resize = function() {
        this.isResizeBound && this.needsResizeLayout() && this.layout()
    }
    ,
    d.needsResizeLayout = function() {
        var t = i(this.element);
        return this.size && t && t.innerWidth !== this.size.innerWidth
    }
    ,
    d.addItems = function(t) {
        var e = this._itemize(t);
        return e.length && (this.items = this.items.concat(e)),
        e
    }
    ,
    d.appended = function(t) {
        var e = this.addItems(t);
        e.length && (this.layoutItems(e, !0),
        this.reveal(e))
    }
    ,
    d.prepended = function(t) {
        var e = this._itemize(t);
        if (e.length) {
            var i = this.items.slice(0);
            this.items = e.concat(i),
            this._resetLayout(),
            this._manageStamps(),
            this.layoutItems(e, !0),
            this.reveal(e),
            this.layoutItems(i)
        }
    }
    ,
    d.reveal = function(t) {
        this._emitCompleteOnItems("reveal", t),
        t && t.length && t.forEach(function(t) {
            t.reveal()
        })
    }
    ,
    d.hide = function(t) {
        this._emitCompleteOnItems("hide", t),
        t && t.length && t.forEach(function(t) {
            t.hide()
        })
    }
    ,
    d.revealItemElements = function(t) {
        var e = this.getItems(t);
        this.reveal(e)
    }
    ,
    d.hideItemElements = function(t) {
        var e = this.getItems(t);
        this.hide(e)
    }
    ,
    d.getItem = function(t) {
        for (var e = 0; e < this.items.length; e++) {
            var i = this.items[e];
            if (i.element == t)
                return i
        }
    }
    ,
    d.getItems = function(t) {
        t = n.makeArray(t);
        var e = [];
        return t.forEach(function(t) {
            var i = this.getItem(t);
            i && e.push(i)
        }, this),
        e
    }
    ,
    d.remove = function(t) {
        var e = this.getItems(t);
        this._emitCompleteOnItems("remove", e),
        e && e.length && e.forEach(function(t) {
            t.remove(),
            n.removeFrom(this.items, t)
        }, this)
    }
    ,
    d.destroy = function() {
        var t = this.element.style;
        t.height = "",
        t.position = "",
        t.width = "",
        this.items.forEach(function(t) {
            t.destroy()
        }),
        this.unbindResize();
        var e = this.element.outlayerGUID;
        delete u[e],
        delete this.element.outlayerGUID,
        r && r.removeData(this.element, this.constructor.namespace)
    }
    ,
    c.data = function(t) {
        var e = (t = n.getQueryElement(t)) && t.outlayerGUID;
        return e && u[e]
    }
    ,
    c.create = function(t, e) {
        var i = l(c);
        return i.defaults = n.extend({}, c.defaults),
        n.extend(i.defaults, e),
        i.compatOptions = n.extend({}, c.compatOptions),
        i.namespace = t,
        i.data = c.data,
        i.Item = l(o),
        n.htmlInit(i, t),
        r && r.bridget && r.bridget(t, i),
        i
    }
    ,
    c.Item = o,
    c
}),
function(t, e) {
    "function" == typeof define && define.amd ? define("packery/rect", e) : "object" == typeof module && module.exports ? module.exports = e() : (t.Packery = t.Packery || {},
    t.Packery.Rect = e())
}(window, function() {
    "use strict";
    function t(e) {
        for (var i in t.defaults)
            this[i] = t.defaults[i];
        for (i in e)
            this[i] = e[i]
    }
    t.defaults = {
        x: 0,
        y: 0,
        width: 0,
        height: 0
    };
    var e = t.prototype;
    return e.contains = function(t) {
        var e = t.width || 0
          , i = t.height || 0;
        return this.x <= t.x && this.y <= t.y && this.x + this.width >= t.x + e && this.y + this.height >= t.y + i
    }
    ,
    e.overlaps = function(t) {
        var e = this.x + this.width
          , i = this.y + this.height
          , n = t.x + t.width
          , o = t.y + t.height;
        return this.x < n && e > t.x && this.y < o && i > t.y
    }
    ,
    e.getMaximalFreeRects = function(e) {
        if (!this.overlaps(e))
            return !1;
        var i, n = [], o = this.x + this.width, s = this.y + this.height, r = e.x + e.width, a = e.y + e.height;
        return this.y < e.y && (i = new t({
            x: this.x,
            y: this.y,
            width: this.width,
            height: e.y - this.y
        }),
        n.push(i)),
        o > r && (i = new t({
            x: r,
            y: this.y,
            width: o - r,
            height: this.height
        }),
        n.push(i)),
        s > a && (i = new t({
            x: this.x,
            y: a,
            width: this.width,
            height: s - a
        }),
        n.push(i)),
        this.x < e.x && (i = new t({
            x: this.x,
            y: this.y,
            width: e.x - this.x,
            height: this.height
        }),
        n.push(i)),
        n
    }
    ,
    e.canFit = function(t) {
        return this.width >= t.width && this.height >= t.height
    }
    ,
    t
}),
function(t, e) {
    if ("function" == typeof define && define.amd)
        define("packery/packer", ["./rect"], e);
    else if ("object" == typeof module && module.exports)
        module.exports = e(require("./rect"));
    else {
        var i = t.Packery = t.Packery || {};
        i.Packer = e(i.Rect)
    }
}(window, function(t) {
    "use strict";
    function e(t, e, i) {
        this.width = t || 0,
        this.height = e || 0,
        this.sortDirection = i || "downwardLeftToRight",
        this.reset()
    }
    var i = e.prototype;
    i.reset = function() {
        this.spaces = [];
        var e = new t({
            x: 0,
            y: 0,
            width: this.width,
            height: this.height
        });
        this.spaces.push(e),
        this.sorter = n[this.sortDirection] || n.downwardLeftToRight
    }
    ,
    i.pack = function(t) {
        for (var e = 0; e < this.spaces.length; e++) {
            var i = this.spaces[e];
            if (i.canFit(t)) {
                this.placeInSpace(t, i);
                break
            }
        }
    }
    ,
    i.columnPack = function(t) {
        for (var e = 0; e < this.spaces.length; e++) {
            var i = this.spaces[e];
            if (i.x <= t.x && i.x + i.width >= t.x + t.width && i.height >= t.height - .01) {
                t.y = i.y,
                this.placed(t);
                break
            }
        }
    }
    ,
    i.rowPack = function(t) {
        for (var e = 0; e < this.spaces.length; e++) {
            var i = this.spaces[e];
            if (i.y <= t.y && i.y + i.height >= t.y + t.height && i.width >= t.width - .01) {
                t.x = i.x,
                this.placed(t);
                break
            }
        }
    }
    ,
    i.placeInSpace = function(t, e) {
        t.x = e.x,
        t.y = e.y,
        this.placed(t)
    }
    ,
    i.placed = function(t) {
        for (var e = [], i = 0; i < this.spaces.length; i++) {
            var n = this.spaces[i]
              , o = n.getMaximalFreeRects(t);
            o ? e.push.apply(e, o) : e.push(n)
        }
        this.spaces = e,
        this.mergeSortSpaces()
    }
    ,
    i.mergeSortSpaces = function() {
        e.mergeRects(this.spaces),
        this.spaces.sort(this.sorter)
    }
    ,
    i.addSpace = function(t) {
        this.spaces.push(t),
        this.mergeSortSpaces()
    }
    ,
    e.mergeRects = function(t) {
        var e = 0
          , i = t[e];
        t: for (; i; ) {
            for (var n = 0, o = t[e + n]; o; ) {
                if (o == i)
                    n++;
                else {
                    if (o.contains(i)) {
                        t.splice(e, 1),
                        i = t[e];
                        continue t
                    }
                    i.contains(o) ? t.splice(e + n, 1) : n++
                }
                o = t[e + n]
            }
            i = t[++e]
        }
        return t
    }
    ;
    var n = {
        downwardLeftToRight: function(t, e) {
            return t.y - e.y || t.x - e.x
        },
        rightwardTopToBottom: function(t, e) {
            return t.x - e.x || t.y - e.y
        }
    };
    return e
}),
function(t, e) {
    "function" == typeof define && define.amd ? define("packery/item", ["outlayer/outlayer", "./rect"], e) : "object" == typeof module && module.exports ? module.exports = e(require("outlayer"), require("./rect")) : t.Packery.Item = e(t.Outlayer, t.Packery.Rect)
}(window, function(t, e) {
    "use strict";
    var i = "string" == typeof document.documentElement.style.transform ? "transform" : "WebkitTransform"
      , n = function() {
        t.Item.apply(this, arguments)
    }
      , o = n.prototype = Object.create(t.Item.prototype)
      , s = o._create;
    o._create = function() {
        s.call(this),
        this.rect = new e
    }
    ;
    var r = o.moveTo;
    return o.moveTo = function(t, e) {
        var i = Math.abs(this.position.x - t)
          , n = Math.abs(this.position.y - e);
        this.layout.dragItemCount && !this.isPlacing && !this.isTransitioning && i < 1 && n < 1 ? this.goTo(t, e) : r.apply(this, arguments)
    }
    ,
    o.enablePlacing = function() {
        this.removeTransitionStyles(),
        this.isTransitioning && i && (this.element.style[i] = "none"),
        this.isTransitioning = !1,
        this.getSize(),
        this.layout._setRectSize(this.element, this.rect),
        this.isPlacing = !0
    }
    ,
    o.disablePlacing = function() {
        this.isPlacing = !1
    }
    ,
    o.removeElem = function() {
        this.element.parentNode.removeChild(this.element),
        this.layout.packer.addSpace(this.rect),
        this.emitEvent("remove", [this])
    }
    ,
    o.showDropPlaceholder = function() {
        var t = this.dropPlaceholder;
        t || ((t = this.dropPlaceholder = document.createElement("div")).className = "packery-drop-placeholder",
        t.style.position = "absolute"),
        t.style.width = this.size.width + "px",
        t.style.height = this.size.height + "px",
        this.positionDropPlaceholder(),
        this.layout.element.appendChild(t)
    }
    ,
    o.positionDropPlaceholder = function() {
        this.dropPlaceholder.style[i] = "translate(" + this.rect.x + "px, " + this.rect.y + "px)"
    }
    ,
    o.hideDropPlaceholder = function() {
        this.layout.element.removeChild(this.dropPlaceholder)
    }
    ,
    n
}),
function(t, e) {
    "function" == typeof define && define.amd ? define(["get-size/get-size", "outlayer/outlayer", "./rect", "./packer", "./item"], e) : "object" == typeof module && module.exports ? module.exports = e(require("get-size"), require("outlayer"), require("./rect"), require("./packer"), require("./item")) : t.Packery = e(t.getSize, t.Outlayer, t.Packery.Rect, t.Packery.Packer, t.Packery.Item)
}(window, function(t, e, i, n, o) {
    "use strict";
    i.prototype.canFit = function(t) {
        return this.width >= t.width - 1 && this.height >= t.height - 1
    }
    ;
    var s = e.create("packery");
    s.Item = o;
    var r = s.prototype;
    function a(t, e) {
        return t.position.y - e.position.y || t.position.x - e.position.x
    }
    function h(t, e) {
        return t.position.x - e.position.x || t.position.y - e.position.y
    }
    r._create = function() {
        e.prototype._create.call(this),
        this.packer = new n,
        this.shiftPacker = new n,
        this.isEnabled = !0,
        this.dragItemCount = 0;
        var t = this;
        this.handleDraggabilly = {
            dragStart: function() {
                t.itemDragStart(this.element)
            },
            dragMove: function() {
                t.itemDragMove(this.element, this.position.x, this.position.y)
            },
            dragEnd: function() {
                t.itemDragEnd(this.element)
            }
        },
        this.handleUIDraggable = {
            start: function(e, i) {
                i && t.itemDragStart(e.currentTarget)
            },
            drag: function(e, i) {
                i && t.itemDragMove(e.currentTarget, i.position.left, i.position.top)
            },
            stop: function(e, i) {
                i && t.itemDragEnd(e.currentTarget)
            }
        }
    }
    ,
    r._resetLayout = function() {
        var t, e, i;
        this.getSize(),
        this._getMeasurements(),
        this._getOption("horizontal") ? (t = 1 / 0,
        e = this.size.innerHeight + this.gutter,
        i = "rightwardTopToBottom") : (t = this.size.innerWidth + this.gutter,
        e = 1 / 0,
        i = "downwardLeftToRight"),
        this.packer.width = this.shiftPacker.width = t,
        this.packer.height = this.shiftPacker.height = e,
        this.packer.sortDirection = this.shiftPacker.sortDirection = i,
        this.packer.reset(),
        this.maxY = 0,
        this.maxX = 0
    }
    ,
    r._getMeasurements = function() {
        this._getMeasurement("columnWidth", "width"),
        this._getMeasurement("rowHeight", "height"),
        this._getMeasurement("gutter", "width")
    }
    ,
    r._getItemLayoutPosition = function(t) {
        if (this._setRectSize(t.element, t.rect),
        this.isShifting || this.dragItemCount > 0) {
            var e = this._getPackMethod();
            this.packer[e](t.rect)
        } else
            this.packer.pack(t.rect);
        return this._setMaxXY(t.rect),
        t.rect
    }
    ,
    r.shiftLayout = function() {
        this.isShifting = !0,
        this.layout(),
        delete this.isShifting
    }
    ,
    r._getPackMethod = function() {
        return this._getOption("horizontal") ? "rowPack" : "columnPack"
    }
    ,
    r._setMaxXY = function(t) {
        this.maxX = Math.max(t.x + t.width, this.maxX),
        this.maxY = Math.max(t.y + t.height, this.maxY)
    }
    ,
    r._setRectSize = function(e, i) {
        var n = t(e)
          , o = n.outerWidth
          , s = n.outerHeight;
        (o || s) && (o = this._applyGridGutter(o, this.columnWidth),
        s = this._applyGridGutter(s, this.rowHeight)),
        i.width = Math.min(o, this.packer.width),
        i.height = Math.min(s, this.packer.height)
    }
    ,
    r._applyGridGutter = function(t, e) {
        if (!e)
            return t + this.gutter;
        var i = t % (e += this.gutter);
        return t = Math[i && i < 1 ? "round" : "ceil"](t / e) * e
    }
    ,
    r._getContainerSize = function() {
        return this._getOption("horizontal") ? {
            width: this.maxX - this.gutter
        } : {
            height: this.maxY - this.gutter
        }
    }
    ,
    r._manageStamp = function(t) {
        var e, n = this.getItem(t);
        if (n && n.isPlacing)
            e = n.rect;
        else {
            var o = this._getElementOffset(t);
            e = new i({
                x: this._getOption("originLeft") ? o.left : o.right,
                y: this._getOption("originTop") ? o.top : o.bottom
            })
        }
        this._setRectSize(t, e),
        this.packer.placed(e),
        this._setMaxXY(e)
    }
    ,
    r.sortItemsByPosition = function() {
        var t = this._getOption("horizontal") ? h : a;
        this.items.sort(t)
    }
    ,
    r.fit = function(t, e, i) {
        var n = this.getItem(t);
        n && (this.stamp(n.element),
        n.enablePlacing(),
        this.updateShiftTargets(n),
        e = void 0 === e ? n.rect.x : e,
        i = void 0 === i ? n.rect.y : i,
        this.shift(n, e, i),
        this._bindFitEvents(n),
        n.moveTo(n.rect.x, n.rect.y),
        this.shiftLayout(),
        this.unstamp(n.element),
        this.sortItemsByPosition(),
        n.disablePlacing())
    }
    ,
    r._bindFitEvents = function(t) {
        var e = this
          , i = 0;
        function n() {
            2 == ++i && e.dispatchEvent("fitComplete", null, [t])
        }
        t.once("layout", n),
        this.once("layoutComplete", n)
    }
    ,
    r.resize = function() {
        this.isResizeBound && this.needsResizeLayout() && (this.options.shiftPercentResize ? this.resizeShiftPercentLayout() : this.layout())
    }
    ,
    r.needsResizeLayout = function() {
        var e = t(this.element)
          , i = this._getOption("horizontal") ? "innerHeight" : "innerWidth";
        return e[i] != this.size[i]
    }
    ,
    r.resizeShiftPercentLayout = function() {
        var e = this._getItemsForLayout(this.items)
          , i = this._getOption("horizontal")
          , n = i ? "y" : "x"
          , o = i ? "height" : "width"
          , s = i ? "rowHeight" : "columnWidth"
          , r = i ? "innerHeight" : "innerWidth"
          , a = this[s];
        if (a = a && a + this.gutter) {
            this._getMeasurements();
            var h = this[s] + this.gutter;
            e.forEach(function(t) {
                var e = Math.round(t.rect[n] / a);
                t.rect[n] = e * h
            })
        } else {
            var u = t(this.element)[r] + this.gutter
              , c = this.packer[o];
            e.forEach(function(t) {
                t.rect[n] = t.rect[n] / c * u
            })
        }
        this.shiftLayout()
    }
    ,
    r.itemDragStart = function(t) {
        if (this.isEnabled) {
            this.stamp(t);
            var e = this.getItem(t);
            e && (e.enablePlacing(),
            e.showDropPlaceholder(),
            this.dragItemCount++,
            this.updateShiftTargets(e))
        }
    }
    ,
    r.updateShiftTargets = function(t) {
        this.shiftPacker.reset(),
        this._getBoundingRect();
        var e = this._getOption("originLeft")
          , n = this._getOption("originTop");
        this.stamps.forEach(function(t) {
            var o = this.getItem(t);
            if (!o || !o.isPlacing) {
                var s = this._getElementOffset(t)
                  , r = new i({
                    x: e ? s.left : s.right,
                    y: n ? s.top : s.bottom
                });
                this._setRectSize(t, r),
                this.shiftPacker.placed(r)
            }
        }, this);
        var o, s = this._getOption("horizontal"), r = s ? "rowHeight" : "columnWidth", a = s ? "height" : "width";
        this.shiftTargetKeys = [],
        this.shiftTargets = [];
        var h = this[r];
        if (h = h && h + this.gutter) {
            var u = Math.ceil(t.rect[a] / h)
              , c = Math.floor((this.shiftPacker[a] + this.gutter) / h);
            o = (c - u) * h;
            for (var d = 0; d < c; d++)
                this._addShiftTarget(d * h, 0, o)
        } else
            o = this.shiftPacker[a] + this.gutter - t.rect[a],
            this._addShiftTarget(0, 0, o);
        var l = this._getItemsForLayout(this.items)
          , f = this._getPackMethod();
        l.forEach(function(t) {
            var e = t.rect;
            this._setRectSize(t.element, e),
            this.shiftPacker[f](e),
            this._addShiftTarget(e.x, e.y, o);
            var i = s ? e.x + e.width : e.x
              , n = s ? e.y : e.y + e.height;
            if (this._addShiftTarget(i, n, o),
            h)
                for (var r = Math.round(e[a] / h), u = 1; u < r; u++) {
                    var c = s ? i : e.x + h * u
                      , d = s ? e.y + h * u : n;
                    this._addShiftTarget(c, d, o)
                }
        }, this)
    }
    ,
    r._addShiftTarget = function(t, e, i) {
        var n = this._getOption("horizontal") ? e : t;
        if (!(0 !== n && n > i)) {
            var o = t + "," + e;
            -1 != this.shiftTargetKeys.indexOf(o) || (this.shiftTargetKeys.push(o),
            this.shiftTargets.push({
                x: t,
                y: e
            }))
        }
    }
    ,
    r.shift = function(t, e, i) {
        var n, o = 1 / 0, s = {
            x: e,
            y: i
        };
        this.shiftTargets.forEach(function(t) {
            var e, i, r, a, h = (r = (i = s).x - (e = t).x,
            a = i.y - e.y,
            Math.sqrt(r * r + a * a));
            h < o && (n = t,
            o = h)
        }),
        t.rect.x = n.x,
        t.rect.y = n.y
    }
    ;
    r.itemDragMove = function(t, e, i) {
        var n = this.isEnabled && this.getItem(t);
        if (n) {
            e -= this.size.paddingLeft,
            i -= this.size.paddingTop;
            var o = this
              , s = new Date;
            this._itemDragTime && s - this._itemDragTime < 120 ? (clearTimeout(this.dragTimeout),
            this.dragTimeout = setTimeout(r, 120)) : (r(),
            this._itemDragTime = s)
        }
        function r() {
            o.shift(n, e, i),
            n.positionDropPlaceholder(),
            o.layout()
        }
    }
    ,
    r.itemDragEnd = function(t) {
        var e = this.isEnabled && this.getItem(t);
        if (e) {
            clearTimeout(this.dragTimeout),
            e.element.classList.add("is-positioning-post-drag");
            var i = 0
              , n = this;
            e.once("layout", o),
            this.once("layoutComplete", o),
            e.moveTo(e.rect.x, e.rect.y),
            this.layout(),
            this.dragItemCount = Math.max(0, this.dragItemCount - 1),
            this.sortItemsByPosition(),
            e.disablePlacing(),
            this.unstamp(e.element)
        }
        function o() {
            2 == ++i && (e.element.classList.remove("is-positioning-post-drag"),
            e.hideDropPlaceholder(),
            n.dispatchEvent("dragItemPositioned", null, [e]))
        }
    }
    ,
    r.bindDraggabillyEvents = function(t) {
        this._bindDraggabillyEvents(t, "on")
    }
    ,
    r.unbindDraggabillyEvents = function(t) {
        this._bindDraggabillyEvents(t, "off")
    }
    ,
    r._bindDraggabillyEvents = function(t, e) {
        var i = this.handleDraggabilly;
        t[e]("dragStart", i.dragStart),
        t[e]("dragMove", i.dragMove),
        t[e]("dragEnd", i.dragEnd)
    }
    ,
    r.bindUIDraggableEvents = function(t) {
        this._bindUIDraggableEvents(t, "on")
    }
    ,
    r.unbindUIDraggableEvents = function(t) {
        this._bindUIDraggableEvents(t, "off")
    }
    ,
    r._bindUIDraggableEvents = function(t, e) {
        var i = this.handleUIDraggable;
        t[e]("dragstart", i.start)[e]("drag", i.drag)[e]("dragstop", i.stop)
    }
    ;
    var u = r.destroy;
    return r.destroy = function() {
        u.apply(this, arguments),
        this.isEnabled = !1
    }
    ,
    s.Rect = i,
    s.Packer = n,
    s
});
//Owl Carousel
!function(t, e, i, s) {
    function n(e, i) {
        this.settings = null,
        this.options = t.extend({}, n.Defaults, i),
        this.$element = t(e),
        this._handlers = {},
        this._plugins = {},
        this._supress = {},
        this._current = null,
        this._speed = null,
        this._coordinates = [],
        this._breakpoint = null,
        this._width = null,
        this._items = [],
        this._clones = [],
        this._mergers = [],
        this._widths = [],
        this._invalidated = {},
        this._pipe = [],
        this._drag = {
            time: null,
            target: null,
            pointer: null,
            stage: {
                start: null,
                current: null
            },
            direction: null
        },
        this._states = {
            current: {},
            tags: {
                initializing: ["busy"],
                animating: ["busy"],
                dragging: ["interacting"]
            }
        },
        t.each(["onResize", "onThrottledResize"], t.proxy(function(e, i) {
            this._handlers[i] = t.proxy(this[i], this)
        }, this)),
        t.each(n.Plugins, t.proxy(function(t, e) {
            this._plugins[t.charAt(0).toLowerCase() + t.slice(1)] = new e(this)
        }, this)),
        t.each(n.Workers, t.proxy(function(e, i) {
            this._pipe.push({
                filter: i.filter,
                run: t.proxy(i.run, this)
            })
        }, this)),
        this.setup(),
        this.initialize()
    }
    n.Defaults = {
        items: 3,
        loop: !1,
        center: !1,
        rewind: !1,
        mouseDrag: !0,
        touchDrag: !0,
        pullDrag: !0,
        freeDrag: !1,
        margin: 0,
        stagePadding: 0,
        merge: !1,
        mergeFit: !0,
        autoWidth: !1,
        startPosition: 0,
        rtl: !1,
        smartSpeed: 250,
        fluidSpeed: !1,
        dragEndSpeed: !1,
        responsive: {},
        responsiveRefreshRate: 200,
        responsiveBaseElement: e,
        fallbackEasing: "swing",
        info: !1,
        nestedItemSelector: !1,
        itemElement: "div",
        stageElement: "div",
        refreshClass: "owl-refresh",
        loadedClass: "owl-loaded",
        loadingClass: "owl-loading",
        rtlClass: "owl-rtl",
        responsiveClass: "owl-responsive",
        dragClass: "owl-drag",
        itemClass: "owl-item",
        stageClass: "owl-stage",
        stageOuterClass: "owl-stage-outer",
        grabClass: "owl-grab"
    },
    n.Width = {
        Default: "default",
        Inner: "inner",
        Outer: "outer"
    },
    n.Type = {
        Event: "event",
        State: "state"
    },
    n.Plugins = {},
    n.Workers = [{
        filter: ["width", "settings"],
        run: function() {
            this._width = this.$element.width()
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(t) {
            t.current = this._items && this._items[this.relative(this._current)]
        }
    }, {
        filter: ["items", "settings"],
        run: function() {
            this.$stage.children(".cloned").remove()
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(t) {
            var e = this.settings.margin || ""
              , i = !this.settings.autoWidth
              , s = this.settings.rtl
              , n = {
                width: "auto",
                "margin-left": s ? e : "",
                "margin-right": s ? "" : e
            };
            !i && this.$stage.children().css(n),
            t.css = n
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(t) {
            var e = (this.width() / this.settings.items).toFixed(3) - this.settings.margin
              , i = null
              , s = this._items.length
              , n = !this.settings.autoWidth
              , o = [];
            for (t.items = {
                merge: !1,
                width: e
            }; s--; )
                i = this._mergers[s],
                i = this.settings.mergeFit && Math.min(i, this.settings.items) || i,
                t.items.merge = i > 1 || t.items.merge,
                o[s] = n ? e * i : this._items[s].width();
            this._widths = o
        }
    }, {
        filter: ["items", "settings"],
        run: function() {
            var e = []
              , i = this._items
              , s = this.settings
              , n = Math.max(2 * s.items, 4)
              , o = 2 * Math.ceil(i.length / 2)
              , r = s.loop && i.length ? s.rewind ? n : Math.max(n, o) : 0
              , a = ""
              , h = "";
            for (r /= 2; r--; )
                e.push(this.normalize(e.length / 2, !0)),
                a += i[e[e.length - 1]][0].outerHTML,
                e.push(this.normalize(i.length - 1 - (e.length - 1) / 2, !0)),
                h = i[e[e.length - 1]][0].outerHTML + h;
            this._clones = e,
            t(a).addClass("cloned").appendTo(this.$stage),
            t(h).addClass("cloned").prependTo(this.$stage)
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function() {
            for (var t = this.settings.rtl ? 1 : -1, e = this._clones.length + this._items.length, i = -1, s = 0, n = 0, o = []; ++i < e; )
                s = o[i - 1] || 0,
                n = this._widths[this.relative(i)] + this.settings.margin,
                o.push(s + n * t);
            this._coordinates = o
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function() {
            var t = this.settings.stagePadding
              , e = this._coordinates
              , i = {
                width: Math.ceil(Math.abs(e[e.length - 1])) + 2 * t,
                "padding-left": t || "",
                "padding-right": t || ""
            };
            this.$stage.css(i)
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(t) {
            var e = this._coordinates.length
              , i = !this.settings.autoWidth
              , s = this.$stage.children();
            if (i && t.items.merge)
                for (; e--; )
                    t.css.width = this._widths[this.relative(e)],
                    s.eq(e).css(t.css);
            else
                i && (t.css.width = t.items.width,
                s.css(t.css))
        }
    }, {
        filter: ["items"],
        run: function() {
            this._coordinates.length < 1 && this.$stage.removeAttr("style")
        }
    }, {
        filter: ["width", "items", "settings"],
        run: function(t) {
            t.current = t.current ? this.$stage.children().index(t.current) : 0,
            t.current = Math.max(this.minimum(), Math.min(this.maximum(), t.current)),
            this.reset(t.current)
        }
    }, {
        filter: ["position"],
        run: function() {
            this.animate(this.coordinates(this._current))
        }
    }, {
        filter: ["width", "position", "items", "settings"],
        run: function() {
            var t, e, i, s, n = this.settings.rtl ? 1 : -1, o = 2 * this.settings.stagePadding, r = this.coordinates(this.current()) + o, a = r + this.width() * n, h = [];
            for (i = 0,
            s = this._coordinates.length; i < s; i++)
                t = this._coordinates[i - 1] || 0,
                e = Math.abs(this._coordinates[i]) + o * n,
                (this.op(t, "<=", r) && this.op(t, ">", a) || this.op(e, "<", r) && this.op(e, ">", a)) && h.push(i);
            this.$stage.children(".active").removeClass("active"),
            this.$stage.children(":eq(" + h.join("), :eq(") + ")").addClass("active"),
            this.settings.center && (this.$stage.children(".center").removeClass("center"),
            this.$stage.children().eq(this.current()).addClass("center"))
        }
    }],
    n.prototype.initialize = function() {
        var e, i, s;
        (this.enter("initializing"),
        this.trigger("initialize"),
        this.$element.toggleClass(this.settings.rtlClass, this.settings.rtl),
        this.settings.autoWidth && !this.is("pre-loading")) && (e = this.$element.find("img"),
        i = this.settings.nestedItemSelector ? "." + this.settings.nestedItemSelector : void 0,
        s = this.$element.children(i).width(),
        e.length && s <= 0 && this.preloadAutoWidthImages(e));
        this.$element.addClass(this.options.loadingClass),
        this.$stage = t("<" + this.settings.stageElement + ' class="' + this.settings.stageClass + '"/>').wrap('<div class="' + this.settings.stageOuterClass + '"/>'),
        this.$element.append(this.$stage.parent()),
        this.replace(this.$element.children().not(this.$stage.parent())),
        this.$element.is(":visible") ? this.refresh() : this.invalidate("width"),
        this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass),
        this.registerEventHandlers(),
        this.leave("initializing"),
        this.trigger("initialized")
    }
    ,
    n.prototype.setup = function() {
        var e = this.viewport()
          , i = this.options.responsive
          , s = -1
          , n = null;
        i ? (t.each(i, function(t) {
            t <= e && t > s && (s = Number(t))
        }),
        "function" == typeof (n = t.extend({}, this.options, i[s])).stagePadding && (n.stagePadding = n.stagePadding()),
        delete n.responsive,
        n.responsiveClass && this.$element.attr("class", this.$element.attr("class").replace(new RegExp("(" + this.options.responsiveClass + "-)\\S+\\s","g"), "$1" + s))) : n = t.extend({}, this.options),
        this.trigger("change", {
            property: {
                name: "settings",
                value: n
            }
        }),
        this._breakpoint = s,
        this.settings = n,
        this.invalidate("settings"),
        this.trigger("changed", {
            property: {
                name: "settings",
                value: this.settings
            }
        })
    }
    ,
    n.prototype.optionsLogic = function() {
        this.settings.autoWidth && (this.settings.stagePadding = !1,
        this.settings.merge = !1)
    }
    ,
    n.prototype.prepare = function(e) {
        var i = this.trigger("prepare", {
            content: e
        });
        return i.data || (i.data = t("<" + this.settings.itemElement + "/>").addClass(this.options.itemClass).append(e)),
        this.trigger("prepared", {
            content: i.data
        }),
        i.data
    }
    ,
    n.prototype.update = function() {
        for (var e = 0, i = this._pipe.length, s = t.proxy(function(t) {
            return this[t]
        }, this._invalidated), n = {}; e < i; )
            (this._invalidated.all || t.grep(this._pipe[e].filter, s).length > 0) && this._pipe[e].run(n),
            e++;
        this._invalidated = {},
        !this.is("valid") && this.enter("valid")
    }
    ,
    n.prototype.width = function(t) {
        switch (t = t || n.Width.Default) {
        case n.Width.Inner:
        case n.Width.Outer:
            return this._width;
        default:
            return this._width - 2 * this.settings.stagePadding + this.settings.margin
        }
    }
    ,
    n.prototype.refresh = function() {
        this.enter("refreshing"),
        this.trigger("refresh"),
        this.setup(),
        this.optionsLogic(),
        this.$element.addClass(this.options.refreshClass),
        this.update(),
        this.$element.removeClass(this.options.refreshClass),
        this.leave("refreshing"),
        this.trigger("refreshed")
    }
    ,
    n.prototype.onThrottledResize = function() {
        e.clearTimeout(this.resizeTimer),
        this.resizeTimer = e.setTimeout(this._handlers.onResize, this.settings.responsiveRefreshRate)
    }
    ,
    n.prototype.onResize = function() {
        return !!this._items.length && (this._width !== this.$element.width() && (!!this.$element.is(":visible") && (this.enter("resizing"),
        this.trigger("resize").isDefaultPrevented() ? (this.leave("resizing"),
        !1) : (this.invalidate("width"),
        this.refresh(),
        this.leave("resizing"),
        void this.trigger("resized")))))
    }
    ,
    n.prototype.registerEventHandlers = function() {
        t.support.transition && this.$stage.on(t.support.transition.end + ".owl.core", t.proxy(this.onTransitionEnd, this)),
        !1 !== this.settings.responsive && this.on(e, "resize", this._handlers.onThrottledResize),
        this.settings.mouseDrag && (this.$element.addClass(this.options.dragClass),
        this.$stage.on("mousedown.owl.core", t.proxy(this.onDragStart, this)),
        this.$stage.on("dragstart.owl.core selectstart.owl.core", function() {
            return !1
        })),
        this.settings.touchDrag && (this.$stage.on("touchstart.owl.core", t.proxy(this.onDragStart, this)),
        this.$stage.on("touchcancel.owl.core", t.proxy(this.onDragEnd, this)))
    }
    ,
    n.prototype.onDragStart = function(e) {
        var s = null;
        3 !== e.which && (t.support.transform ? s = {
            x: (s = this.$stage.css("transform").replace(/.*\(|\)| /g, "").split(","))[16 === s.length ? 12 : 4],
            y: s[16 === s.length ? 13 : 5]
        } : (s = this.$stage.position(),
        s = {
            x: this.settings.rtl ? s.left + this.$stage.width() - this.width() + this.settings.margin : s.left,
            y: s.top
        }),
        this.is("animating") && (t.support.transform ? this.animate(s.x) : this.$stage.stop(),
        this.invalidate("position")),
        this.$element.toggleClass(this.options.grabClass, "mousedown" === e.type),
        this.speed(0),
        this._drag.time = (new Date).getTime(),
        this._drag.target = t(e.target),
        this._drag.stage.start = s,
        this._drag.stage.current = s,
        this._drag.pointer = this.pointer(e),
        t(i).on("mouseup.owl.core touchend.owl.core", t.proxy(this.onDragEnd, this)),
        t(i).one("mousemove.owl.core touchmove.owl.core", t.proxy(function(e) {
            var s = this.difference(this._drag.pointer, this.pointer(e));
            t(i).on("mousemove.owl.core touchmove.owl.core", t.proxy(this.onDragMove, this)),
            Math.abs(s.x) < Math.abs(s.y) && this.is("valid") || (e.preventDefault(),
            this.enter("dragging"),
            this.trigger("drag"))
        }, this)))
    }
    ,
    n.prototype.onDragMove = function(t) {
        var e = null
          , i = null
          , s = null
          , n = this.difference(this._drag.pointer, this.pointer(t))
          , o = this.difference(this._drag.stage.start, n);
        this.is("dragging") && (t.preventDefault(),
        this.settings.loop ? (e = this.coordinates(this.minimum()),
        i = this.coordinates(this.maximum() + 1) - e,
        o.x = ((o.x - e) % i + i) % i + e) : (e = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum()),
        i = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum()),
        s = this.settings.pullDrag ? -1 * n.x / 5 : 0,
        o.x = Math.max(Math.min(o.x, e + s), i + s)),
        this._drag.stage.current = o,
        this.animate(o.x))
    }
    ,
    n.prototype.onDragEnd = function(e) {
        var s = this.difference(this._drag.pointer, this.pointer(e))
          , n = this._drag.stage.current
          , o = s.x > 0 ^ this.settings.rtl ? "left" : "right";
        t(i).off(".owl.core"),
        this.$element.removeClass(this.options.grabClass),
        (0 !== s.x && this.is("dragging") || !this.is("valid")) && (this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed),
        this.current(this.closest(n.x, 0 !== s.x ? o : this._drag.direction)),
        this.invalidate("position"),
        this.update(),
        this._drag.direction = o,
        (Math.abs(s.x) > 3 || (new Date).getTime() - this._drag.time > 300) && this._drag.target.one("click.owl.core", function() {
            return !1
        })),
        this.is("dragging") && (this.leave("dragging"),
        this.trigger("dragged"))
    }
    ,
    n.prototype.closest = function(e, i) {
        var s = -1
          , n = this.width()
          , o = this.coordinates();
        return this.settings.freeDrag || t.each(o, t.proxy(function(t, r) {
            return "left" === i && e > r - 30 && e < r + 30 ? s = t : "right" === i && e > r - n - 30 && e < r - n + 30 ? s = t + 1 : this.op(e, "<", r) && this.op(e, ">", o[t + 1] || r - n) && (s = "left" === i ? t + 1 : t),
            -1 === s
        }, this)),
        this.settings.loop || (this.op(e, ">", o[this.minimum()]) ? s = e = this.minimum() : this.op(e, "<", o[this.maximum()]) && (s = e = this.maximum())),
        s
    }
    ,
    n.prototype.animate = function(e) {
        var i = this.speed() > 0;
        this.is("animating") && this.onTransitionEnd(),
        i && (this.enter("animating"),
        this.trigger("translate")),
        t.support.transform3d && t.support.transition ? this.$stage.css({
            transform: "translate3d(" + e + "px,0px,0px)",
            transition: this.speed() / 1e3 + "s"
        }) : i ? this.$stage.animate({
            left: e + "px"
        }, this.speed(), this.settings.fallbackEasing, t.proxy(this.onTransitionEnd, this)) : this.$stage.css({
            left: e + "px"
        })
    }
    ,
    n.prototype.is = function(t) {
        return this._states.current[t] && this._states.current[t] > 0
    }
    ,
    n.prototype.current = function(t) {
        if (void 0 === t)
            return this._current;
        if (0 !== this._items.length) {
            if (t = this.normalize(t),
            this._current !== t) {
                var e = this.trigger("change", {
                    property: {
                        name: "position",
                        value: t
                    }
                });
                void 0 !== e.data && (t = this.normalize(e.data)),
                this._current = t,
                this.invalidate("position"),
                this.trigger("changed", {
                    property: {
                        name: "position",
                        value: this._current
                    }
                })
            }
            return this._current
        }
    }
    ,
    n.prototype.invalidate = function(e) {
        return "string" === t.type(e) && (this._invalidated[e] = !0,
        this.is("valid") && this.leave("valid")),
        t.map(this._invalidated, function(t, e) {
            return e
        })
    }
    ,
    n.prototype.reset = function(t) {
        void 0 !== (t = this.normalize(t)) && (this._speed = 0,
        this._current = t,
        this.suppress(["translate", "translated"]),
        this.animate(this.coordinates(t)),
        this.release(["translate", "translated"]))
    }
    ,
    n.prototype.normalize = function(t, e) {
        var i = this._items.length
          , s = e ? 0 : this._clones.length;
        return !this.isNumeric(t) || i < 1 ? t = void 0 : (t < 0 || t >= i + s) && (t = ((t - s / 2) % i + i) % i + s / 2),
        t
    }
    ,
    n.prototype.relative = function(t) {
        return t -= this._clones.length / 2,
        this.normalize(t, !0)
    }
    ,
    n.prototype.maximum = function(t) {
        var e, i, s, n = this.settings, o = this._coordinates.length;
        if (n.loop)
            o = this._clones.length / 2 + this._items.length - 1;
        else if (n.autoWidth || n.merge) {
            for (e = this._items.length,
            i = this._items[--e].width(),
            s = this.$element.width(); e-- && !((i += this._items[e].width() + this.settings.margin) > s); )
                ;
            o = e + 1
        } else
            o = n.center ? this._items.length - 1 : this._items.length - n.items;
        return t && (o -= this._clones.length / 2),
        Math.max(o, 0)
    }
    ,
    n.prototype.minimum = function(t) {
        return t ? 0 : this._clones.length / 2
    }
    ,
    n.prototype.items = function(t) {
        return void 0 === t ? this._items.slice() : (t = this.normalize(t, !0),
        this._items[t])
    }
    ,
    n.prototype.mergers = function(t) {
        return void 0 === t ? this._mergers.slice() : (t = this.normalize(t, !0),
        this._mergers[t])
    }
    ,
    n.prototype.clones = function(e) {
        var i = this._clones.length / 2
          , s = i + this._items.length
          , n = function(t) {
            return t % 2 == 0 ? s + t / 2 : i - (t + 1) / 2
        };
        return void 0 === e ? t.map(this._clones, function(t, e) {
            return n(e)
        }) : t.map(this._clones, function(t, i) {
            return t === e ? n(i) : null
        })
    }
    ,
    n.prototype.speed = function(t) {
        return void 0 !== t && (this._speed = t),
        this._speed
    }
    ,
    n.prototype.coordinates = function(e) {
        var i, s = 1, n = e - 1;
        return void 0 === e ? t.map(this._coordinates, t.proxy(function(t, e) {
            return this.coordinates(e)
        }, this)) : (this.settings.center ? (this.settings.rtl && (s = -1,
        n = e + 1),
        i = this._coordinates[e],
        i += (this.width() - i + (this._coordinates[n] || 0)) / 2 * s) : i = this._coordinates[n] || 0,
        i = Math.ceil(i))
    }
    ,
    n.prototype.duration = function(t, e, i) {
        return 0 === i ? 0 : Math.min(Math.max(Math.abs(e - t), 1), 6) * Math.abs(i || this.settings.smartSpeed)
    }
    ,
    n.prototype.to = function(t, e) {
        var i = this.current()
          , s = null
          , n = t - this.relative(i)
          , o = (n > 0) - (n < 0)
          , r = this._items.length
          , a = this.minimum()
          , h = this.maximum();
        this.settings.loop ? (!this.settings.rewind && Math.abs(n) > r / 2 && (n += -1 * o * r),
        (s = (((t = i + n) - a) % r + r) % r + a) !== t && s - n <= h && s - n > 0 && (i = s - n,
        t = s,
        this.reset(i))) : t = this.settings.rewind ? (t % (h += 1) + h) % h : Math.max(a, Math.min(h, t)),
        this.speed(this.duration(i, t, e)),
        this.current(t),
        this.$element.is(":visible") && this.update()
    }
    ,
    n.prototype.next = function(t) {
        t = t || !1,
        this.to(this.relative(this.current()) + 1, t)
    }
    ,
    n.prototype.prev = function(t) {
        t = t || !1,
        this.to(this.relative(this.current()) - 1, t)
    }
    ,
    n.prototype.onTransitionEnd = function(t) {
        if (void 0 !== t && (t.stopPropagation(),
        (t.target || t.srcElement || t.originalTarget) !== this.$stage.get(0)))
            return !1;
        this.leave("animating"),
        this.trigger("translated")
    }
    ,
    n.prototype.viewport = function() {
        var s;
        return this.options.responsiveBaseElement !== e ? s = t(this.options.responsiveBaseElement).width() : e.innerWidth ? s = e.innerWidth : i.documentElement && i.documentElement.clientWidth ? s = i.documentElement.clientWidth : console.warn("Can not detect viewport width."),
        s
    }
    ,
    n.prototype.replace = function(e) {
        this.$stage.empty(),
        this._items = [],
        e && (e = e instanceof jQuery ? e : t(e)),
        this.settings.nestedItemSelector && (e = e.find("." + this.settings.nestedItemSelector)),
        e.filter(function() {
            return 1 === this.nodeType
        }).each(t.proxy(function(t, e) {
            e = this.prepare(e),
            this.$stage.append(e),
            this._items.push(e),
            this._mergers.push(1 * e.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)
        }, this)),
        this.reset(this.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0),
        this.invalidate("items")
    }
    ,
    n.prototype.add = function(e, i) {
        var s = this.relative(this._current);
        i = void 0 === i ? this._items.length : this.normalize(i, !0),
        e = e instanceof jQuery ? e : t(e),
        this.trigger("add", {
            content: e,
            position: i
        }),
        e = this.prepare(e),
        0 === this._items.length || i === this._items.length ? (0 === this._items.length && this.$stage.append(e),
        0 !== this._items.length && this._items[i - 1].after(e),
        this._items.push(e),
        this._mergers.push(1 * e.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)) : (this._items[i].before(e),
        this._items.splice(i, 0, e),
        this._mergers.splice(i, 0, 1 * e.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)),
        this._items[s] && this.reset(this._items[s].index()),
        this.invalidate("items"),
        this.trigger("added", {
            content: e,
            position: i
        })
    }
    ,
    n.prototype.remove = function(t) {
        void 0 !== (t = this.normalize(t, !0)) && (this.trigger("remove", {
            content: this._items[t],
            position: t
        }),
        this._items[t].remove(),
        this._items.splice(t, 1),
        this._mergers.splice(t, 1),
        this.invalidate("items"),
        this.trigger("removed", {
            content: null,
            position: t
        }))
    }
    ,
    n.prototype.preloadAutoWidthImages = function(e) {
        e.each(t.proxy(function(e, i) {
            this.enter("pre-loading"),
            i = t(i),
            t(new Image).one("load", t.proxy(function(t) {
                i.attr("src", t.target.src),
                i.css("opacity", 1),
                this.leave("pre-loading"),
                !this.is("pre-loading") && !this.is("initializing") && this.refresh()
            }, this)).attr("src", i.attr("src") || i.attr("data-src") || i.attr("data-src-retina"))
        }, this))
    }
    ,
    n.prototype.destroy = function() {
        for (var s in this.$element.off(".owl.core"),
        this.$stage.off(".owl.core"),
        t(i).off(".owl.core"),
        !1 !== this.settings.responsive && (e.clearTimeout(this.resizeTimer),
        this.off(e, "resize", this._handlers.onThrottledResize)),
        this._plugins)
            this._plugins[s].destroy();
        this.$stage.children(".cloned").remove(),
        this.$stage.unwrap(),
        this.$stage.children().contents().unwrap(),
        this.$stage.children().unwrap(),
        this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class", this.$element.attr("class").replace(new RegExp(this.options.responsiveClass + "-\\S+\\s","g"), "")).removeData("owl.carousel")
    }
    ,
    n.prototype.op = function(t, e, i) {
        var s = this.settings.rtl;
        switch (e) {
        case "<":
            return s ? t > i : t < i;
        case ">":
            return s ? t < i : t > i;
        case ">=":
            return s ? t <= i : t >= i;
        case "<=":
            return s ? t >= i : t <= i
        }
    }
    ,
    n.prototype.on = function(t, e, i, s) {
        t.addEventListener ? t.addEventListener(e, i, s) : t.attachEvent && t.attachEvent("on" + e, i)
    }
    ,
    n.prototype.off = function(t, e, i, s) {
        t.removeEventListener ? t.removeEventListener(e, i, s) : t.detachEvent && t.detachEvent("on" + e, i)
    }
    ,
    n.prototype.trigger = function(e, i, s, o, r) {
        var a = {
            item: {
                count: this._items.length,
                index: this.current()
            }
        }
          , h = t.camelCase(t.grep(["on", e, s], function(t) {
            return t
        }).join("-").toLowerCase())
          , l = t.Event([e, "owl", s || "carousel"].join(".").toLowerCase(), t.extend({
            relatedTarget: this
        }, a, i));
        return this._supress[e] || (t.each(this._plugins, function(t, e) {
            e.onTrigger && e.onTrigger(l)
        }),
        this.register({
            type: n.Type.Event,
            name: e
        }),
        this.$element.trigger(l),
        this.settings && "function" == typeof this.settings[h] && this.settings[h].call(this, l)),
        l
    }
    ,
    n.prototype.enter = function(e) {
        t.each([e].concat(this._states.tags[e] || []), t.proxy(function(t, e) {
            void 0 === this._states.current[e] && (this._states.current[e] = 0),
            this._states.current[e]++
        }, this))
    }
    ,
    n.prototype.leave = function(e) {
        t.each([e].concat(this._states.tags[e] || []), t.proxy(function(t, e) {
            this._states.current[e]--
        }, this))
    }
    ,
    n.prototype.register = function(e) {
        if (e.type === n.Type.Event) {
            if (t.event.special[e.name] || (t.event.special[e.name] = {}),
            !t.event.special[e.name].owl) {
                var i = t.event.special[e.name]._default;
                t.event.special[e.name]._default = function(t) {
                    return !i || !i.apply || t.namespace && -1 !== t.namespace.indexOf("owl") ? t.namespace && t.namespace.indexOf("owl") > -1 : i.apply(this, arguments)
                }
                ,
                t.event.special[e.name].owl = !0
            }
        } else
            e.type === n.Type.State && (this._states.tags[e.name] ? this._states.tags[e.name] = this._states.tags[e.name].concat(e.tags) : this._states.tags[e.name] = e.tags,
            this._states.tags[e.name] = t.grep(this._states.tags[e.name], t.proxy(function(i, s) {
                return t.inArray(i, this._states.tags[e.name]) === s
            }, this)))
    }
    ,
    n.prototype.suppress = function(e) {
        t.each(e, t.proxy(function(t, e) {
            this._supress[e] = !0
        }, this))
    }
    ,
    n.prototype.release = function(e) {
        t.each(e, t.proxy(function(t, e) {
            delete this._supress[e]
        }, this))
    }
    ,
    n.prototype.pointer = function(t) {
        var i = {
            x: null,
            y: null
        };
        return (t = (t = t.originalEvent || t || e.event).touches && t.touches.length ? t.touches[0] : t.changedTouches && t.changedTouches.length ? t.changedTouches[0] : t).pageX ? (i.x = t.pageX,
        i.y = t.pageY) : (i.x = t.clientX,
        i.y = t.clientY),
        i
    }
    ,
    n.prototype.isNumeric = function(t) {
        return !isNaN(parseFloat(t))
    }
    ,
    n.prototype.difference = function(t, e) {
        return {
            x: t.x - e.x,
            y: t.y - e.y
        }
    }
    ,
    t.fn.owlCarousel = function(e) {
        var i = Array.prototype.slice.call(arguments, 1);
        return this.each(function() {
            var s = t(this)
              , o = s.data("owl.carousel");
            o || (o = new n(this,"object" == typeof e && e),
            s.data("owl.carousel", o),
            t.each(["next", "prev", "to", "destroy", "refresh", "replace", "add", "remove"], function(e, i) {
                o.register({
                    type: n.Type.Event,
                    name: i
                }),
                o.$element.on(i + ".owl.carousel.core", t.proxy(function(t) {
                    t.namespace && t.relatedTarget !== this && (this.suppress([i]),
                    o[i].apply(this, [].slice.call(arguments, 1)),
                    this.release([i]))
                }, o))
            })),
            "string" == typeof e && "_" !== e.charAt(0) && o[e].apply(o, i)
        })
    }
    ,
    t.fn.owlCarousel.Constructor = n
}(window.Zepto || window.jQuery, window, document),
function(t, e, i, s) {
    var n = function(e) {
        this._core = e,
        this._interval = null,
        this._visible = null,
        this._handlers = {
            "initialized.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.autoRefresh && this.watch()
            }, this)
        },
        this._core.options = t.extend({}, n.Defaults, this._core.options),
        this._core.$element.on(this._handlers)
    };
    n.Defaults = {
        autoRefresh: !0,
        autoRefreshInterval: 500
    },
    n.prototype.watch = function() {
        this._interval || (this._visible = this._core.$element.is(":visible"),
        this._interval = e.setInterval(t.proxy(this.refresh, this), this._core.settings.autoRefreshInterval))
    }
    ,
    n.prototype.refresh = function() {
        this._core.$element.is(":visible") !== this._visible && (this._visible = !this._visible,
        this._core.$element.toggleClass("owl-hidden", !this._visible),
        this._visible && this._core.invalidate("width") && this._core.refresh())
    }
    ,
    n.prototype.destroy = function() {
        var t, i;
        for (t in e.clearInterval(this._interval),
        this._handlers)
            this._core.$element.off(t, this._handlers[t]);
        for (i in Object.getOwnPropertyNames(this))
            "function" != typeof this[i] && (this[i] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.AutoRefresh = n
}(window.Zepto || window.jQuery, window, document),
function(t, e, i, s) {
    var n = function(e) {
        this._core = e,
        this._loaded = [],
        this._handlers = {
            "initialized.owl.carousel change.owl.carousel resized.owl.carousel": t.proxy(function(e) {
                if (e.namespace && this._core.settings && this._core.settings.lazyLoad && (e.property && "position" == e.property.name || "initialized" == e.type))
                    for (var i = this._core.settings, s = i.center && Math.ceil(i.items / 2) || i.items, n = i.center && -1 * s || 0, o = (e.property && void 0 !== e.property.value ? e.property.value : this._core.current()) + n, r = this._core.clones().length, a = t.proxy(function(t, e) {
                        this.load(e)
                    }, this); n++ < s; )
                        this.load(r / 2 + this._core.relative(o)),
                        r && t.each(this._core.clones(this._core.relative(o)), a),
                        o++
            }, this)
        },
        this._core.options = t.extend({}, n.Defaults, this._core.options),
        this._core.$element.on(this._handlers)
    };
    n.Defaults = {
        lazyLoad: !1
    },
    n.prototype.load = function(i) {
        var s = this._core.$stage.children().eq(i)
          , n = s && s.find(".owl-lazy");
        !n || t.inArray(s.get(0), this._loaded) > -1 || (n.each(t.proxy(function(i, s) {
            var n, o = t(s), r = e.devicePixelRatio > 1 && o.attr("data-src-retina") || o.attr("data-src");
            this._core.trigger("load", {
                element: o,
                url: r
            }, "lazy"),
            o.is("img") ? o.one("load.owl.lazy", t.proxy(function() {
                o.css("opacity", 1),
                this._core.trigger("loaded", {
                    element: o,
                    url: r
                }, "lazy")
            }, this)).attr("src", r) : ((n = new Image).onload = t.proxy(function() {
                o.css({
                    "background-image": 'url("' + r + '")',
                    opacity: "1"
                }),
                this._core.trigger("loaded", {
                    element: o,
                    url: r
                }, "lazy")
            }, this),
            n.src = r)
        }, this)),
        this._loaded.push(s.get(0)))
    }
    ,
    n.prototype.destroy = function() {
        var t, e;
        for (t in this.handlers)
            this._core.$element.off(t, this.handlers[t]);
        for (e in Object.getOwnPropertyNames(this))
            "function" != typeof this[e] && (this[e] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.Lazy = n
}(window.Zepto || window.jQuery, window, document),
function(t, e, i, s) {
    var n = function(e) {
        this._core = e,
        this._handlers = {
            "initialized.owl.carousel refreshed.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.autoHeight && this.update()
            }, this),
            "changed.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.autoHeight && "position" == t.property.name && this.update()
            }, this),
            "loaded.owl.lazy": t.proxy(function(t) {
                t.namespace && this._core.settings.autoHeight && t.element.closest("." + this._core.settings.itemClass).index() === this._core.current() && this.update()
            }, this)
        },
        this._core.options = t.extend({}, n.Defaults, this._core.options),
        this._core.$element.on(this._handlers)
    };
    n.Defaults = {
        autoHeight: !1,
        autoHeightClass: "owl-height"
    },
    n.prototype.update = function() {
        var e, i = this._core._current, s = i + this._core.settings.items, n = this._core.$stage.children().toArray().slice(i, s), o = [];
        t.each(n, function(e, i) {
            o.push(t(i).height())
        }),
        e = Math.max.apply(null, o),
        this._core.$stage.parent().height(e).addClass(this._core.settings.autoHeightClass)
    }
    ,
    n.prototype.destroy = function() {
        var t, e;
        for (t in this._handlers)
            this._core.$element.off(t, this._handlers[t]);
        for (e in Object.getOwnPropertyNames(this))
            "function" != typeof this[e] && (this[e] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.AutoHeight = n
}(window.Zepto || window.jQuery, window, document),
function(t, e, i, s) {
    var n = function(e) {
        this._core = e,
        this._videos = {},
        this._playing = null,
        this._handlers = {
            "initialized.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.register({
                    type: "state",
                    name: "playing",
                    tags: ["interacting"]
                })
            }, this),
            "resize.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.video && this.isInFullScreen() && t.preventDefault()
            }, this),
            "refreshed.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.is("resizing") && this._core.$stage.find(".cloned .owl-video-frame").remove()
            }, this),
            "changed.owl.carousel": t.proxy(function(t) {
                t.namespace && "position" === t.property.name && this._playing && this.stop()
            }, this),
            "prepared.owl.carousel": t.proxy(function(e) {
                if (e.namespace) {
                    var i = t(e.content).find(".owl-video");
                    i.length && (i.css("display", "none"),
                    this.fetch(i, t(e.content)))
                }
            }, this)
        },
        this._core.options = t.extend({}, n.Defaults, this._core.options),
        this._core.$element.on(this._handlers),
        this._core.$element.on("click.owl.video", ".owl-video-play-icon", t.proxy(function(t) {
            this.play(t)
        }, this))
    };
    n.Defaults = {
        video: !1,
        videoHeight: !1,
        videoWidth: !1
    },
    n.prototype.fetch = function(t, e) {
        var i = t.attr("data-vimeo-id") ? "vimeo" : t.attr("data-vzaar-id") ? "vzaar" : "youtube"
          , s = t.attr("data-vimeo-id") || t.attr("data-youtube-id") || t.attr("data-vzaar-id")
          , n = t.attr("data-width") || this._core.settings.videoWidth
          , o = t.attr("data-height") || this._core.settings.videoHeight
          , r = t.attr("href");
        if (!r)
            throw new Error("Missing video URL.");
        if ((s = r.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/))[3].indexOf("youtu") > -1)
            i = "youtube";
        else if (s[3].indexOf("vimeo") > -1)
            i = "vimeo";
        else {
            if (!(s[3].indexOf("vzaar") > -1))
                throw new Error("Video URL not supported.");
            i = "vzaar"
        }
        s = s[6],
        this._videos[r] = {
            type: i,
            id: s,
            width: n,
            height: o
        },
        e.attr("data-video", r),
        this.thumbnail(t, this._videos[r])
    }
    ,
    n.prototype.thumbnail = function(e, i) {
        var s, n, o = i.width && i.height ? 'style="width:' + i.width + "px;height:" + i.height + 'px;"' : "", r = e.find("img"), a = "src", h = "", l = this._core.settings, c = function(t) {
            '<div class="owl-video-play-icon"></div>',
            s = l.lazyLoad ? '<div class="owl-video-tn ' + h + '" ' + a + '="' + t + '"></div>' : '<div class="owl-video-tn" style="opacity:1;background-image:url(' + t + ')"></div>',
            e.after(s),
            e.after('<div class="owl-video-play-icon"></div>')
        };
        if (e.wrap('<div class="owl-video-wrapper"' + o + "></div>"),
        this._core.settings.lazyLoad && (a = "data-src",
        h = "owl-lazy"),
        r.length)
            return c(r.attr(a)),
            r.remove(),
            !1;
        "youtube" === i.type ? (n = "//img.youtube.com/vi/" + i.id + "/hqdefault.jpg",
        c(n)) : "vimeo" === i.type ? t.ajax({
            type: "GET",
            url: "//vimeo.com/api/v2/video/" + i.id + ".json",
            jsonp: "callback",
            dataType: "jsonp",
            success: function(t) {
                n = t[0].thumbnail_large,
                c(n)
            }
        }) : "vzaar" === i.type && t.ajax({
            type: "GET",
            url: "//vzaar.com/api/videos/" + i.id + ".json",
            jsonp: "callback",
            dataType: "jsonp",
            success: function(t) {
                n = t.framegrab_url,
                c(n)
            }
        })
    }
    ,
    n.prototype.stop = function() {
        this._core.trigger("stop", null, "video"),
        this._playing.find(".owl-video-frame").remove(),
        this._playing.removeClass("owl-video-playing"),
        this._playing = null,
        this._core.leave("playing"),
        this._core.trigger("stopped", null, "video")
    }
    ,
    n.prototype.play = function(e) {
        var i, s = t(e.target).closest("." + this._core.settings.itemClass), n = this._videos[s.attr("data-video")], o = n.width || "100%", r = n.height || this._core.$stage.height();
        this._playing || (this._core.enter("playing"),
        this._core.trigger("play", null, "video"),
        s = this._core.items(this._core.relative(s.index())),
        this._core.reset(s.index()),
        "youtube" === n.type ? i = '<iframe width="' + o + '" height="' + r + '" src="//www.youtube.com/embed/' + n.id + "?autoplay=1&rel=0&v=" + n.id + '" frameborder="0" allowfullscreen></iframe>' : "vimeo" === n.type ? i = '<iframe src="//player.vimeo.com/video/' + n.id + '?autoplay=1" width="' + o + '" height="' + r + '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>' : "vzaar" === n.type && (i = '<iframe frameborder="0"height="' + r + '"width="' + o + '" allowfullscreen mozallowfullscreen webkitAllowFullScreen src="//view.vzaar.com/' + n.id + '/player?autoplay=true"></iframe>'),
        t('<div class="owl-video-frame">' + i + "</div>").insertAfter(s.find(".owl-video")),
        this._playing = s.addClass("owl-video-playing"))
    }
    ,
    n.prototype.isInFullScreen = function() {
        var e = i.fullscreenElement || i.mozFullScreenElement || i.webkitFullscreenElement;
        return e && t(e).parent().hasClass("owl-video-frame")
    }
    ,
    n.prototype.destroy = function() {
        var t, e;
        for (t in this._core.$element.off("click.owl.video"),
        this._handlers)
            this._core.$element.off(t, this._handlers[t]);
        for (e in Object.getOwnPropertyNames(this))
            "function" != typeof this[e] && (this[e] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.Video = n
}(window.Zepto || window.jQuery, window, document),
function(t, e, i, s) {
    var n = function(e) {
        this.core = e,
        this.core.options = t.extend({}, n.Defaults, this.core.options),
        this.swapping = !0,
        this.previous = void 0,
        this.next = void 0,
        this.handlers = {
            "change.owl.carousel": t.proxy(function(t) {
                t.namespace && "position" == t.property.name && (this.previous = this.core.current(),
                this.next = t.property.value)
            }, this),
            "drag.owl.carousel dragged.owl.carousel translated.owl.carousel": t.proxy(function(t) {
                t.namespace && (this.swapping = "translated" == t.type)
            }, this),
            "translate.owl.carousel": t.proxy(function(t) {
                t.namespace && this.swapping && (this.core.options.animateOut || this.core.options.animateIn) && this.swap()
            }, this)
        },
        this.core.$element.on(this.handlers)
    };
    n.Defaults = {
        animateOut: !1,
        animateIn: !1
    },
    n.prototype.swap = function() {
        if (1 === this.core.settings.items && t.support.animation && t.support.transition) {
            this.core.speed(0);
            var e, i = t.proxy(this.clear, this), s = this.core.$stage.children().eq(this.previous), n = this.core.$stage.children().eq(this.next), o = this.core.settings.animateIn, r = this.core.settings.animateOut;
            this.core.current() !== this.previous && (r && (e = this.core.coordinates(this.previous) - this.core.coordinates(this.next),
            s.one(t.support.animation.end, i).css({
                left: e + "px"
            }).addClass("animated owl-animated-out").addClass(r)),
            o && n.one(t.support.animation.end, i).addClass("animated owl-animated-in").addClass(o))
        }
    }
    ,
    n.prototype.clear = function(e) {
        t(e.target).css({
            left: ""
        }).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut),
        this.core.onTransitionEnd()
    }
    ,
    n.prototype.destroy = function() {
        var t, e;
        for (t in this.handlers)
            this.core.$element.off(t, this.handlers[t]);
        for (e in Object.getOwnPropertyNames(this))
            "function" != typeof this[e] && (this[e] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.Animate = n
}(window.Zepto || window.jQuery, window, document),
function(t, e, i, s) {
    var n = function(e) {
        this._core = e,
        this._timeout = null,
        this._paused = !1,
        this._handlers = {
            "changed.owl.carousel": t.proxy(function(t) {
                t.namespace && "settings" === t.property.name ? this._core.settings.autoplay ? this.play() : this.stop() : t.namespace && "position" === t.property.name && this._core.settings.autoplay && this._setAutoPlayInterval()
            }, this),
            "initialized.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.autoplay && this.play()
            }, this),
            "play.owl.autoplay": t.proxy(function(t, e, i) {
                t.namespace && this.play(e, i)
            }, this),
            "stop.owl.autoplay": t.proxy(function(t) {
                t.namespace && this.stop()
            }, this),
            "mouseover.owl.autoplay": t.proxy(function() {
                this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
            }, this),
            "mouseleave.owl.autoplay": t.proxy(function() {
                this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.play()
            }, this),
            "touchstart.owl.core": t.proxy(function() {
                this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
            }, this),
            "touchend.owl.core": t.proxy(function() {
                this._core.settings.autoplayHoverPause && this.play()
            }, this)
        },
        this._core.$element.on(this._handlers),
        this._core.options = t.extend({}, n.Defaults, this._core.options)
    };
    n.Defaults = {
        autoplay: !1,
        autoplayTimeout: 5e3,
        autoplayHoverPause: !1,
        autoplaySpeed: !1
    },
    n.prototype.play = function(t, e) {
        this._paused = !1,
        this._core.is("rotating") || (this._core.enter("rotating"),
        this._setAutoPlayInterval())
    }
    ,
    n.prototype._getNextTimeout = function(s, n) {
        return this._timeout && e.clearTimeout(this._timeout),
        e.setTimeout(t.proxy(function() {
            this._paused || this._core.is("busy") || this._core.is("interacting") || i.hidden || this._core.next(n || this._core.settings.autoplaySpeed)
        }, this), s || this._core.settings.autoplayTimeout)
    }
    ,
    n.prototype._setAutoPlayInterval = function() {
        this._timeout = this._getNextTimeout()
    }
    ,
    n.prototype.stop = function() {
        this._core.is("rotating") && (e.clearTimeout(this._timeout),
        this._core.leave("rotating"))
    }
    ,
    n.prototype.pause = function() {
        this._core.is("rotating") && (this._paused = !0)
    }
    ,
    n.prototype.destroy = function() {
        var t, e;
        for (t in this.stop(),
        this._handlers)
            this._core.$element.off(t, this._handlers[t]);
        for (e in Object.getOwnPropertyNames(this))
            "function" != typeof this[e] && (this[e] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.autoplay = n
}(window.Zepto || window.jQuery, window, document),
function(t, e, i, s) {
    "use strict";
    var n = function(e) {
        this._core = e,
        this._initialized = !1,
        this._pages = [],
        this._controls = {},
        this._templates = [],
        this.$element = this._core.$element,
        this._overrides = {
            next: this._core.next,
            prev: this._core.prev,
            to: this._core.to
        },
        this._handlers = {
            "prepared.owl.carousel": t.proxy(function(e) {
                e.namespace && this._core.settings.dotsData && this._templates.push('<div class="' + this._core.settings.dotClass + '">' + t(e.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot") + "</div>")
            }, this),
            "added.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.dotsData && this._templates.splice(t.position, 0, this._templates.pop())
            }, this),
            "remove.owl.carousel": t.proxy(function(t) {
                t.namespace && this._core.settings.dotsData && this._templates.splice(t.position, 1)
            }, this),
            "changed.owl.carousel": t.proxy(function(t) {
                t.namespace && "position" == t.property.name && this.draw()
            }, this),
            "initialized.owl.carousel": t.proxy(function(t) {
                t.namespace && !this._initialized && (this._core.trigger("initialize", null, "navigation"),
                this.initialize(),
                this.update(),
                this.draw(),
                this._initialized = !0,
                this._core.trigger("initialized", null, "navigation"))
            }, this),
            "refreshed.owl.carousel": t.proxy(function(t) {
                t.namespace && this._initialized && (this._core.trigger("refresh", null, "navigation"),
                this.update(),
                this.draw(),
                this._core.trigger("refreshed", null, "navigation"))
            }, this)
        },
        this._core.options = t.extend({}, n.Defaults, this._core.options),
        this.$element.on(this._handlers)
    };
    n.Defaults = {
        nav: !1,
        navText: ["prev", "next"],
        navSpeed: !1,
        navElement: "div",
        navContainer: !1,
        navContainerClass: "owl-nav",
        navClass: ["owl-prev", "owl-next"],
        slideBy: 1,
        dotClass: "owl-dot",
        dotsClass: "owl-dots",
        dots: !0,
        dotsEach: !1,
        dotsData: !1,
        dotsSpeed: !1,
        dotsContainer: !1
    },
    n.prototype.initialize = function() {
        var e, i = this._core.settings;
        for (e in this._controls.$relative = (i.navContainer ? t(i.navContainer) : t("<div>").addClass(i.navContainerClass).appendTo(this.$element)).addClass("disabled"),
        this._controls.$previous = t("<" + i.navElement + ">").addClass(i.navClass[0]).html(i.navText[0]).prependTo(this._controls.$relative).on("click", t.proxy(function(t) {
            this.prev(i.navSpeed)
        }, this)),
        this._controls.$next = t("<" + i.navElement + ">").addClass(i.navClass[1]).html(i.navText[1]).appendTo(this._controls.$relative).on("click", t.proxy(function(t) {
            this.next(i.navSpeed)
        }, this)),
        i.dotsData || (this._templates = [t("<div>").addClass(i.dotClass).append(t("<span>")).prop("outerHTML")]),
        this._controls.$absolute = (i.dotsContainer ? t(i.dotsContainer) : t("<div>").addClass(i.dotsClass).appendTo(this.$element)).addClass("disabled"),
        this._controls.$absolute.on("click", "div", t.proxy(function(e) {
            var s = t(e.target).parent().is(this._controls.$absolute) ? t(e.target).index() : t(e.target).parent().index();
            e.preventDefault(),
            this.to(s, i.dotsSpeed)
        }, this)),
        this._overrides)
            this._core[e] = t.proxy(this[e], this)
    }
    ,
    n.prototype.destroy = function() {
        var t, e, i, s;
        for (t in this._handlers)
            this.$element.off(t, this._handlers[t]);
        for (e in this._controls)
            this._controls[e].remove();
        for (s in this.overides)
            this._core[s] = this._overrides[s];
        for (i in Object.getOwnPropertyNames(this))
            "function" != typeof this[i] && (this[i] = null)
    }
    ,
    n.prototype.update = function() {
        var t, e, i = this._core.clones().length / 2, s = i + this._core.items().length, n = this._core.maximum(!0), o = this._core.settings, r = o.center || o.autoWidth || o.dotsData ? 1 : o.dotsEach || o.items;
        if ("page" !== o.slideBy && (o.slideBy = Math.min(o.slideBy, o.items)),
        o.dots || "page" == o.slideBy)
            for (this._pages = [],
            t = i,
            e = 0,
            0; t < s; t++) {
                if (e >= r || 0 === e) {
                    if (this._pages.push({
                        start: Math.min(n, t - i),
                        end: t - i + r - 1
                    }),
                    Math.min(n, t - i) === n)
                        break;
                    e = 0,
                    0
                }
                e += this._core.mergers(this._core.relative(t))
            }
    }
    ,
    n.prototype.draw = function() {
        var e, i = this._core.settings, s = this._core.items().length <= i.items, n = this._core.relative(this._core.current()), o = i.loop || i.rewind;
        this._controls.$relative.toggleClass("disabled", !i.nav || s),
        i.nav && (this._controls.$previous.toggleClass("disabled", !o && n <= this._core.minimum(!0)),
        this._controls.$next.toggleClass("disabled", !o && n >= this._core.maximum(!0))),
        this._controls.$absolute.toggleClass("disabled", !i.dots || s),
        i.dots && (e = this._pages.length - this._controls.$absolute.children().length,
        i.dotsData && 0 !== e ? this._controls.$absolute.html(this._templates.join("")) : e > 0 ? this._controls.$absolute.append(new Array(e + 1).join(this._templates[0])) : e < 0 && this._controls.$absolute.children().slice(e).remove(),
        this._controls.$absolute.find(".active").removeClass("active"),
        this._controls.$absolute.children().eq(t.inArray(this.current(), this._pages)).addClass("active"))
    }
    ,
    n.prototype.onTrigger = function(e) {
        var i = this._core.settings;
        e.page = {
            index: t.inArray(this.current(), this._pages),
            count: this._pages.length,
            size: i && (i.center || i.autoWidth || i.dotsData ? 1 : i.dotsEach || i.items)
        }
    }
    ,
    n.prototype.current = function() {
        var e = this._core.relative(this._core.current());
        return t.grep(this._pages, t.proxy(function(t, i) {
            return t.start <= e && t.end >= e
        }, this)).pop()
    }
    ,
    n.prototype.getPosition = function(e) {
        var i, s, n = this._core.settings;
        return "page" == n.slideBy ? (i = t.inArray(this.current(), this._pages),
        s = this._pages.length,
        e ? ++i : --i,
        i = this._pages[(i % s + s) % s].start) : (i = this._core.relative(this._core.current()),
        s = this._core.items().length,
        e ? i += n.slideBy : i -= n.slideBy),
        i
    }
    ,
    n.prototype.next = function(e) {
        t.proxy(this._overrides.to, this._core)(this.getPosition(!0), e)
    }
    ,
    n.prototype.prev = function(e) {
        t.proxy(this._overrides.to, this._core)(this.getPosition(!1), e)
    }
    ,
    n.prototype.to = function(e, i, s) {
        var n;
        !s && this._pages.length ? (n = this._pages.length,
        t.proxy(this._overrides.to, this._core)(this._pages[(e % n + n) % n].start, i)) : t.proxy(this._overrides.to, this._core)(e, i)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.Navigation = n
}(window.Zepto || window.jQuery, window, document),
function(t, e, i, s) {
    "use strict";
    var n = function(i) {
        this._core = i,
        this._hashes = {},
        this.$element = this._core.$element,
        this._handlers = {
            "initialized.owl.carousel": t.proxy(function(i) {
                i.namespace && "URLHash" === this._core.settings.startPosition && t(e).trigger("hashchange.owl.navigation")
            }, this),
            "prepared.owl.carousel": t.proxy(function(e) {
                if (e.namespace) {
                    var i = t(e.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");
                    if (!i)
                        return;
                    this._hashes[i] = e.content
                }
            }, this),
            "changed.owl.carousel": t.proxy(function(i) {
                if (i.namespace && "position" === i.property.name) {
                    var s = this._core.items(this._core.relative(this._core.current()))
                      , n = t.map(this._hashes, function(t, e) {
                        return t === s ? e : null
                    }).join();
                    if (!n || e.location.hash.slice(1) === n)
                        return;
                    e.location.hash = n
                }
            }, this)
        },
        this._core.options = t.extend({}, n.Defaults, this._core.options),
        this.$element.on(this._handlers),
        t(e).on("hashchange.owl.navigation", t.proxy(function(t) {
            var i = e.location.hash.substring(1)
              , s = this._core.$stage.children()
              , n = this._hashes[i] && s.index(this._hashes[i]);
            void 0 !== n && n !== this._core.current() && this._core.to(this._core.relative(n), !1, !0)
        }, this))
    };
    n.Defaults = {
        URLhashListener: !1
    },
    n.prototype.destroy = function() {
        var i, s;
        for (i in t(e).off("hashchange.owl.navigation"),
        this._handlers)
            this._core.$element.off(i, this._handlers[i]);
        for (s in Object.getOwnPropertyNames(this))
            "function" != typeof this[s] && (this[s] = null)
    }
    ,
    t.fn.owlCarousel.Constructor.Plugins.Hash = n
}(window.Zepto || window.jQuery, window, document),
function(t, e, i, s) {
    var n = t("<support>").get(0).style
      , o = "Webkit Moz O ms".split(" ")
      , r = {
        transition: {
            end: {
                WebkitTransition: "webkitTransitionEnd",
                MozTransition: "transitionend",
                OTransition: "oTransitionEnd",
                transition: "transitionend"
            }
        },
        animation: {
            end: {
                WebkitAnimation: "webkitAnimationEnd",
                MozAnimation: "animationend",
                OAnimation: "oAnimationEnd",
                animation: "animationend"
            }
        }
    }
      , a = function() {
        return !!c("transform")
    }
      , h = function() {
        return !!c("perspective")
    }
      , l = function() {
        return !!c("animation")
    };
    function c(e, i) {
        var r = !1
          , a = e.charAt(0).toUpperCase() + e.slice(1);
        return t.each((e + " " + o.join(a + " ") + a).split(" "), function(t, e) {
            if (n[e] !== s)
                return r = !i || e,
                !1
        }),
        r
    }
    function p(t) {
        return c(t, !0)
    }
    (function() {
        return !!c("transition")
    }
    )() && (t.support.transition = new String(p("transition")),
    t.support.transition.end = r.transition.end[t.support.transition]),
    l() && (t.support.animation = new String(p("animation")),
    t.support.animation.end = r.animation.end[t.support.animation]),
    a() && (t.support.transform = new String(p("transform")),
    t.support.transform3d = h())
}(window.Zepto || window.jQuery, window, document);
//wNumb
!function() {
    "use strict";
    var e = ["decimals", "thousand", "mark", "prefix", "postfix", "encoder", "decoder", "negativeBefore", "negative", "edit", "undo"];
    function n(e) {
        return e.split("").reverse().join("")
    }
    function r(e, n) {
        return e.substring(0, n.length) === n
    }
    function t(e, n, r) {
        if ((e[n] || e[r]) && e[n] === e[r])
            throw new Error(n)
    }
    function i(e) {
        return "number" == typeof e && isFinite(e)
    }
    function o(e, r, t, o, f, u, a, c, s, p, l, d) {
        var h, g, v, w = d, m = "", x = "";
        return u && (d = u(d)),
        !!i(d) && (!1 !== e && 0 === parseFloat(d.toFixed(e)) && (d = 0),
        d < 0 && (h = !0,
        d = Math.abs(d)),
        !1 !== e && (d = function(e, n) {
            var r = Math.pow(10, n);
            return (Math.round(e * r) / r).toFixed(n)
        }(d, e)),
        -1 !== (d = d.toString()).indexOf(".") ? (v = (g = d.split("."))[0],
        t && (m = t + g[1])) : v = d,
        r && (v = n(v).match(/.{1,3}/g),
        v = n(v.join(n(r)))),
        h && c && (x += c),
        o && (x += o),
        h && s && (x += s),
        x += v,
        x += m,
        f && (x += f),
        p && (x = p(x, w)),
        x)
    }
    function f(e, n, t, o, f, u, a, c, s, p, l, d) {
        var h, g = "";
        return l && (d = l(d)),
        !(!d || "string" != typeof d) && (c && r(d, c) && (d = d.replace(c, ""),
        h = !0),
        o && r(d, o) && (d = d.replace(o, "")),
        s && r(d, s) && (d = d.replace(s, ""),
        h = !0),
        f && function(e, n) {
            return e.slice(-1 * n.length) === n
        }(d, f) && (d = d.slice(0, -1 * f.length)),
        n && (d = d.split(n).join("")),
        t && (d = d.replace(t, ".")),
        h && (g += "-"),
        "" !== (g = (g += d).replace(/[^0-9\.\-.]/g, "")) && (g = Number(g),
        a && (g = a(g)),
        !!i(g) && g))
    }
    function u(n, r, t) {
        var i, o = [];
        for (i = 0; i < e.length; i += 1)
            o.push(n[e[i]]);
        return o.push(t),
        r.apply("", o)
    }
    window.wNumb = function n(r) {
        if (!(this instanceof n))
            return new n(r);
        "object" == typeof r && (r = function(n) {
            var r, i, o, f = {};
            for (r = 0; r < e.length; r += 1)
                if (void 0 === (o = n[i = e[r]]))
                    "negative" !== i || f.negativeBefore ? "mark" === i && "." !== f.thousand ? f[i] = "." : f[i] = !1 : f[i] = "-";
                else if ("decimals" === i) {
                    if (!(o >= 0 && o < 8))
                        throw new Error(i);
                    f[i] = o
                } else if ("encoder" === i || "decoder" === i || "edit" === i || "undo" === i) {
                    if ("function" != typeof o)
                        throw new Error(i);
                    f[i] = o
                } else {
                    if ("string" != typeof o)
                        throw new Error(i);
                    f[i] = o
                }
            return t(f, "mark", "thousand"),
            t(f, "prefix", "negative"),
            t(f, "prefix", "negativeBefore"),
            f
        }(r),
        this.to = function(e) {
            return u(r, o, e)
        }
        ,
        this.from = function(e) {
            return u(r, f, e)
        }
        )
    }
}();
// Nouislider
!function(e) {
    "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? module.exports = e() : window.noUiSlider = e()
}(function() {
    "use strict";
    function e(e) {
        var t = e.getBoundingClientRect()
          , n = e.ownerDocument.documentElement
          , r = a();
        return /webkit.*Chrome.*Mobile/i.test(navigator.userAgent) && (r.x = 0),
        {
            top: t.top + r.y - n.clientTop,
            left: t.left + r.x - n.clientLeft
        }
    }
    function t(e) {
        return "number" == typeof e && !isNaN(e) && isFinite(e)
    }
    function n(e, t, n) {
        s(e, t),
        setTimeout(function() {
            o(e, t)
        }, n)
    }
    function r(e) {
        return Math.max(Math.min(e, 100), 0)
    }
    function i(e) {
        return Array.isArray(e) ? e : [e]
    }
    function s(e, t) {
        e.classList ? e.classList.add(t) : e.className += " " + t
    }
    function o(e, t) {
        e.classList ? e.classList.remove(t) : e.className = e.className.replace(new RegExp("(^|\\b)" + t.split(" ").join("|") + "(\\b|$)","gi"), " ")
    }
    function a() {
        var e = void 0 !== window.pageXOffset
          , t = "CSS1Compat" === (document.compatMode || "");
        return {
            x: e ? window.pageXOffset : t ? document.documentElement.scrollLeft : document.body.scrollLeft,
            y: e ? window.pageYOffset : t ? document.documentElement.scrollTop : document.body.scrollTop
        }
    }
    function l(e, t) {
        return 100 / (t - e)
    }
    function c(e, t) {
        return 100 * t / (e[1] - e[0])
    }
    function u(e, t) {
        for (var n = 1; e >= t[n]; )
            n += 1;
        return n
    }
    function d(e, t, n) {
        if (n >= e.slice(-1)[0])
            return 100;
        var r, i, s, o, a = u(n, e);
        return r = e[a - 1],
        i = e[a],
        s = t[a - 1],
        o = t[a],
        s + function(e, t) {
            return c(e, e[0] < 0 ? t + Math.abs(e[0]) : t - e[0])
        }([r, i], n) / l(s, o)
    }
    function f(e, t, n, r) {
        if (100 === r)
            return r;
        var i, s, o = u(r, e);
        return n ? r - (i = e[o - 1]) > ((s = e[o]) - i) / 2 ? s : i : t[o - 1] ? e[o - 1] + function(e, t) {
            return Math.round(e / t) * t
        }(r - e[o - 1], t[o - 1]) : r
    }
    function p(e, n, r) {
        var i;
        if ("number" == typeof n && (n = [n]),
        "[object Array]" !== Object.prototype.toString.call(n))
            throw new Error("noUiSlider: 'range' contains invalid value.");
        if (!t(i = "min" === e ? 0 : "max" === e ? 100 : parseFloat(e)) || !t(n[0]))
            throw new Error("noUiSlider: 'range' value isn't numeric.");
        r.xPct.push(i),
        r.xVal.push(n[0]),
        i ? r.xSteps.push(!isNaN(n[1]) && n[1]) : isNaN(n[1]) || (r.xSteps[0] = n[1])
    }
    function h(e, t, n) {
        if (!t)
            return !0;
        n.xSteps[e] = c([n.xVal[e], n.xVal[e + 1]], t) / l(n.xPct[e], n.xPct[e + 1])
    }
    function m(e, t, n, r) {
        this.xPct = [],
        this.xVal = [],
        this.xSteps = [r || !1],
        this.xNumSteps = [!1],
        this.snap = t,
        this.direction = n;
        var i, s = [];
        for (i in e)
            e.hasOwnProperty(i) && s.push([e[i], i]);
        for (s.length && "object" == typeof s[0][0] ? s.sort(function(e, t) {
            return e[0][0] - t[0][0]
        }) : s.sort(function(e, t) {
            return e[0] - t[0]
        }),
        i = 0; i < s.length; i++)
            p(s[i][1], s[i][0], this);
        for (this.xNumSteps = this.xSteps.slice(0),
        i = 0; i < this.xNumSteps.length; i++)
            h(i, this.xNumSteps[i], this)
    }
    m.prototype.getMargin = function(e) {
        return 2 === this.xPct.length && c(this.xVal, e)
    }
    ,
    m.prototype.toStepping = function(e) {
        return e = d(this.xVal, this.xPct, e),
        this.direction && (e = 100 - e),
        e
    }
    ,
    m.prototype.fromStepping = function(e) {
        return this.direction && (e = 100 - e),
        function(e, t, n) {
            if (n >= 100)
                return e.slice(-1)[0];
            var r, i = u(n, t);
            return function(e, t) {
                return t * (e[1] - e[0]) / 100 + e[0]
            }([e[i - 1], e[i]], (n - (r = t[i - 1])) * l(r, t[i]))
        }(this.xVal, this.xPct, e)
    }
    ,
    m.prototype.getStep = function(e) {
        return this.direction && (e = 100 - e),
        e = f(this.xPct, this.xSteps, this.snap, e),
        this.direction && (e = 100 - e),
        e
    }
    ,
    m.prototype.getApplicableStep = function(e) {
        var t = u(e, this.xPct)
          , n = 100 === e ? 2 : 1;
        return [this.xNumSteps[t - 2], this.xVal[t - n], this.xNumSteps[t - n]]
    }
    ,
    m.prototype.convert = function(e) {
        return this.getStep(this.toStepping(e))
    }
    ;
    var v = {
        to: function(e) {
            return void 0 !== e && e.toFixed(2)
        },
        from: Number
    };
    function g(e, n) {
        if (!t(n))
            throw new Error("noUiSlider: 'step' is not numeric.");
        e.singleStep = n
    }
    function b(e, t) {
        if ("object" != typeof t || Array.isArray(t))
            throw new Error("noUiSlider: 'range' is not an object.");
        if (void 0 === t.min || void 0 === t.max)
            throw new Error("noUiSlider: Missing 'min' or 'max' in 'range'.");
        if (t.min === t.max)
            throw new Error("noUiSlider: 'range' 'min' and 'max' cannot be equal.");
        e.spectrum = new m(t,e.snap,e.dir,e.singleStep)
    }
    function w(e, t) {
        if (t = i(t),
        !Array.isArray(t) || !t.length || t.length > 2)
            throw new Error("noUiSlider: 'start' option is incorrect.");
        e.handles = t.length,
        e.start = t
    }
    function S(e, t) {
        if (e.snap = t,
        "boolean" != typeof t)
            throw new Error("noUiSlider: 'snap' option must be a boolean.")
    }
    function y(e, t) {
        if (e.animate = t,
        "boolean" != typeof t)
            throw new Error("noUiSlider: 'animate' option must be a boolean.")
    }
    function x(e, t) {
        if (e.animationDuration = t,
        "number" != typeof t)
            throw new Error("noUiSlider: 'animationDuration' option must be a number.")
    }
    function C(e, t) {
        if ("lower" === t && 1 === e.handles)
            e.connect = 1;
        else if ("upper" === t && 1 === e.handles)
            e.connect = 2;
        else if (!0 === t && 2 === e.handles)
            e.connect = 3;
        else {
            if (!1 !== t)
                throw new Error("noUiSlider: 'connect' option doesn't match handle count.");
            e.connect = 0
        }
    }
    function E(e, t) {
        switch (t) {
        case "horizontal":
            e.ort = 0;
            break;
        case "vertical":
            e.ort = 1;
            break;
        default:
            throw new Error("noUiSlider: 'orientation' option is invalid.")
        }
    }
    function N(e, n) {
        if (!t(n))
            throw new Error("noUiSlider: 'margin' option must be numeric.");
        if (0 !== n && (e.margin = e.spectrum.getMargin(n),
        !e.margin))
            throw new Error("noUiSlider: 'margin' option is only supported on linear sliders.")
    }
    function k(e, n) {
        if (!t(n))
            throw new Error("noUiSlider: 'limit' option must be numeric.");
        if (e.limit = e.spectrum.getMargin(n),
        !e.limit)
            throw new Error("noUiSlider: 'limit' option is only supported on linear sliders.")
    }
    function U(e, t) {
        switch (t) {
        case "ltr":
            e.dir = 0;
            break;
        case "rtl":
            e.dir = 1,
            e.connect = [0, 2, 1, 3][e.connect];
            break;
        default:
            throw new Error("noUiSlider: 'direction' option was not recognized.")
        }
    }
    function P(e, t) {
        if ("string" != typeof t)
            throw new Error("noUiSlider: 'behaviour' must be a string containing options.");
        var n = t.indexOf("tap") >= 0
          , r = t.indexOf("drag") >= 0
          , i = t.indexOf("fixed") >= 0
          , s = t.indexOf("snap") >= 0
          , o = t.indexOf("hover") >= 0;
        if (r && !e.connect)
            throw new Error("noUiSlider: 'drag' behaviour must be used with 'connect': true.");
        e.events = {
            tap: n || s,
            drag: r,
            fixed: i,
            snap: s,
            hover: o
        }
    }
    function O(e, t) {
        var n;
        if (!1 !== t)
            if (!0 === t)
                for (e.tooltips = [],
                n = 0; n < e.handles; n++)
                    e.tooltips.push(!0);
            else {
                if (e.tooltips = i(t),
                e.tooltips.length !== e.handles)
                    throw new Error("noUiSlider: must pass a formatter for all handles.");
                e.tooltips.forEach(function(e) {
                    if ("boolean" != typeof e && ("object" != typeof e || "function" != typeof e.to))
                        throw new Error("noUiSlider: 'tooltips' must be passed a formatter or 'false'.")
                })
            }
    }
    function M(e, t) {
        if (e.format = t,
        "function" == typeof t.to && "function" == typeof t.from)
            return !0;
        throw new Error("noUiSlider: 'format' requires 'to' and 'from' methods.")
    }
    function L(e, t) {
        if (void 0 !== t && "string" != typeof t && !1 !== t)
            throw new Error("noUiSlider: 'cssPrefix' must be a string or `false`.");
        e.cssPrefix = t
    }
    function V(e, t) {
        if (void 0 !== t && "object" != typeof t)
            throw new Error("noUiSlider: 'cssClasses' must be an object.");
        if ("string" == typeof e.cssPrefix)
            for (var n in e.cssClasses = {},
            t)
                t.hasOwnProperty(n) && (e.cssClasses[n] = e.cssPrefix + t[n]);
        else
            e.cssClasses = t
    }
    function z(e) {
        var t, n = {
            margin: 0,
            limit: 0,
            animate: !0,
            animationDuration: 300,
            format: v
        };
        t = {
            step: {
                r: !1,
                t: g
            },
            start: {
                r: !0,
                t: w
            },
            connect: {
                r: !0,
                t: C
            },
            direction: {
                r: !0,
                t: U
            },
            snap: {
                r: !1,
                t: S
            },
            animate: {
                r: !1,
                t: y
            },
            animationDuration: {
                r: !1,
                t: x
            },
            range: {
                r: !0,
                t: b
            },
            orientation: {
                r: !1,
                t: E
            },
            margin: {
                r: !1,
                t: N
            },
            limit: {
                r: !1,
                t: k
            },
            behaviour: {
                r: !0,
                t: P
            },
            format: {
                r: !1,
                t: M
            },
            tooltips: {
                r: !1,
                t: O
            },
            cssPrefix: {
                r: !1,
                t: L
            },
            cssClasses: {
                r: !1,
                t: V
            }
        };
        var r = {
            connect: !1,
            direction: "ltr",
            behaviour: "tap",
            orientation: "horizontal",
            cssPrefix: "noUi-",
            cssClasses: {
                target: "target",
                base: "base",
                origin: "origin",
                handle: "handle",
                handleLower: "handle-lower",
                handleUpper: "handle-upper",
                horizontal: "horizontal",
                vertical: "vertical",
                background: "background",
                connect: "connect",
                ltr: "ltr",
                rtl: "rtl",
                draggable: "draggable",
                drag: "state-drag",
                tap: "state-tap",
                active: "active",
                stacking: "stacking",
                tooltip: "tooltip",
                pips: "pips",
                pipsHorizontal: "pips-horizontal",
                pipsVertical: "pips-vertical",
                marker: "marker",
                markerHorizontal: "marker-horizontal",
                markerVertical: "marker-vertical",
                markerNormal: "marker-normal",
                markerLarge: "marker-large",
                markerSub: "marker-sub",
                value: "value",
                valueHorizontal: "value-horizontal",
                valueVertical: "value-vertical",
                valueNormal: "value-normal",
                valueLarge: "value-large",
                valueSub: "value-sub"
            }
        };
        return Object.keys(t).forEach(function(i) {
            if (void 0 === e[i] && void 0 === r[i]) {
                if (t[i].r)
                    throw new Error("noUiSlider: '" + i + "' is required.");
                return !0
            }
            t[i].t(n, void 0 === e[i] ? r[i] : e[i])
        }),
        n.pips = e.pips,
        n.style = n.ort ? "top" : "left",
        n
    }
    function A(t, l, c) {
        var u, d, f, p = window.navigator.pointerEnabled ? {
            start: "pointerdown",
            move: "pointermove",
            end: "pointerup"
        } : window.navigator.msPointerEnabled ? {
            start: "MSPointerDown",
            move: "MSPointerMove",
            end: "MSPointerUp"
        } : {
            start: "mousedown touchstart",
            move: "mousemove touchmove",
            end: "mouseup touchend"
        }, h = t, m = [-1, -1], v = l.spectrum, g = [], b = {};
        function w(e, t) {
            var n = document.createElement("div")
              , r = document.createElement("div")
              , i = [l.cssClasses.handleLower, l.cssClasses.handleUpper];
            return e && i.reverse(),
            s(r, l.cssClasses.handle),
            s(r, i[t]),
            s(n, l.cssClasses.origin),
            n.appendChild(r),
            n
        }
        function S(e, t) {
            if (!l.tooltips[t])
                return !1;
            var n = document.createElement("div");
            return n.className = l.cssClasses.tooltip,
            e.firstChild.appendChild(n)
        }
        function y(e, t, n) {
            var r = document.createElement("div")
              , i = ""
              , o = [l.cssClasses.valueNormal, l.cssClasses.valueLarge, l.cssClasses.valueSub]
              , a = [l.cssClasses.markerNormal, l.cssClasses.markerLarge, l.cssClasses.markerSub]
              , c = [l.cssClasses.valueHorizontal, l.cssClasses.valueVertical]
              , u = [l.cssClasses.markerHorizontal, l.cssClasses.markerVertical];
            function d(e, t, n) {
                return 'class="' + function(e, t) {
                    var n = t === l.cssClasses.value
                      , r = n ? o : a;
                    return t + " " + (n ? c : u)[l.ort] + " " + r[e]
                }(n[1], t) + '" style="' + l.style + ": " + e + '%"'
            }
            return s(r, l.cssClasses.pips),
            s(r, 0 === l.ort ? l.cssClasses.pipsHorizontal : l.cssClasses.pipsVertical),
            Object.keys(e).forEach(function(r) {
                var s, o;
                s = r,
                o = e[r],
                v.direction && (s = 100 - s),
                o[1] = o[1] && t ? t(o[0], o[1]) : o[1],
                i += "<div " + d(s, l.cssClasses.marker, o) + "></div>",
                o[1] && (i += "<div " + d(s, l.cssClasses.value, o) + ">" + n.to(o[0]) + "</div>")
            }),
            r.innerHTML = i,
            r
        }
        function x(e) {
            var t = e.mode
              , n = e.density || 1
              , r = e.filter || !1
              , i = function(e, t, n) {
                if ("range" === e || "steps" === e)
                    return v.xVal;
                if ("count" === e) {
                    var r, i = 100 / (t - 1), s = 0;
                    for (t = []; (r = s++ * i) <= 100; )
                        t.push(r);
                    e = "positions"
                }
                return "positions" === e ? t.map(function(e) {
                    return v.fromStepping(n ? v.getStep(e) : e)
                }) : "values" === e ? n ? t.map(function(e) {
                    return v.fromStepping(v.getStep(v.toStepping(e)))
                }) : t : void 0
            }(t, e.values || !1, e.stepped || !1)
              , s = function(e, t, n) {
                var r, i = v.direction, s = {}, o = v.xVal[0], a = v.xVal[v.xVal.length - 1], l = !1, c = !1, u = 0;
                return v.direction = 0,
                r = n.slice().sort(function(e, t) {
                    return e - t
                }),
                (n = r.filter(function(e) {
                    return !this[e] && (this[e] = !0)
                }, {}))[0] !== o && (n.unshift(o),
                l = !0),
                n[n.length - 1] !== a && (n.push(a),
                c = !0),
                n.forEach(function(r, i) {
                    var o, a, d, f, p, h, m, g, b, w = r, S = n[i + 1];
                    if ("steps" === t && (o = v.xNumSteps[i]),
                    o || (o = S - w),
                    !1 !== w && void 0 !== S)
                        for (a = w; a <= S; a = (a + o).toFixed(7) / 1) {
                            for (m = (p = (f = v.toStepping(a)) - u) / e,
                            b = p / (g = Math.round(m)),
                            d = 1; d <= g; d += 1)
                                s[(u + d * b).toFixed(5)] = ["x", 0];
                            h = n.indexOf(a) > -1 ? 1 : "steps" === t ? 2 : 0,
                            !i && l && (h = 0),
                            a === S && c || (s[f.toFixed(5)] = [a, h]),
                            u = f
                        }
                }),
                v.direction = i,
                s
            }(n, t, i)
              , o = e.format || {
                to: Math.round
            };
            return h.appendChild(y(s, r, o))
        }
        function C() {
            var e = u.getBoundingClientRect()
              , t = "offset" + ["Width", "Height"][l.ort];
            return 0 === l.ort ? e.width || u[t] : e.height || u[t]
        }
        function E(e, t, n) {
            var r;
            for (r = 0; r < l.handles; r++)
                if (-1 === m[r])
                    return;
            void 0 !== t && 1 !== l.handles && (t = Math.abs(t - l.dir)),
            Object.keys(b).forEach(function(r) {
                var s = r.split(".")[0];
                e === s && b[r].forEach(function(e) {
                    e.call(f, i(D()), t, i(N(Array.prototype.slice.call(g))), n || !1, m)
                })
            })
        }
        function N(e) {
            return 1 === e.length ? e[0] : l.dir ? e.reverse() : e
        }
        function k(e, t, n, r) {
            var i = function(t) {
                return !h.hasAttribute("disabled") && (i = h,
                s = l.cssClasses.tap,
                (i.classList ? !i.classList.contains(s) : !new RegExp("\\b" + s + "\\b").test(i.className)) && (t = function(e, t) {
                    e.preventDefault();
                    var n, r, i = 0 === e.type.indexOf("touch"), s = 0 === e.type.indexOf("mouse"), o = 0 === e.type.indexOf("pointer"), l = e;
                    return 0 === e.type.indexOf("MSPointer") && (o = !0),
                    i && (n = e.changedTouches[0].pageX,
                    r = e.changedTouches[0].pageY),
                    t = t || a(),
                    (s || o) && (n = e.clientX + t.x,
                    r = e.clientY + t.y),
                    l.pageOffset = t,
                    l.points = [n, r],
                    l.cursor = s || o,
                    l
                }(t, r.pageOffset),
                !(e === p.start && void 0 !== t.buttons && t.buttons > 1) && ((!r.hover || !t.buttons) && (t.calcPoint = t.points[l.ort],
                void n(t, r)))));
                var i, s
            }
              , s = [];
            return e.split(" ").forEach(function(e) {
                t.addEventListener(e, i, !1),
                s.push([e, i])
            }),
            s
        }
        function U(e, t) {
            if (-1 === navigator.appVersion.indexOf("MSIE 9") && 0 === e.buttons && 0 !== t.buttonsProperty)
                return P(e, t);
            var n, i, s, o, a, l, c, u = t.handles || d, f = !1, p = 100 * (e.calcPoint - t.start) / t.baseSize, h = u[0] === d[0] ? 0 : 1;
            if (s = p,
            o = t.positions,
            a = u.length > 1,
            l = s + o[0],
            c = s + o[1],
            n = a ? (l < 0 && (c += Math.abs(l)),
            c > 100 && (l -= c - 100),
            [r(l), r(c)]) : [l, c],
            f = A(u[0], n[h], 1 === u.length),
            u.length > 1) {
                if (f = A(u[1], n[h ? 0 : 1], !1) || f)
                    for (i = 0; i < t.handles.length; i++)
                        E("slide", i)
            } else
                f && E("slide", h)
        }
        function P(e, t) {
            var n = u.querySelector("." + l.cssClasses.active)
              , r = t.handles[0] === d[0] ? 0 : 1;
            null !== n && o(n, l.cssClasses.active),
            e.cursor && (document.body.style.cursor = "",
            document.body.removeEventListener("selectstart", document.body.noUiListener));
            var i = document.documentElement;
            i.noUiListeners.forEach(function(e) {
                i.removeEventListener(e[0], e[1])
            }),
            o(h, l.cssClasses.drag),
            E("set", r),
            E("change", r),
            void 0 !== t.handleNumber && E("end", t.handleNumber)
        }
        function O(e, t) {
            "mouseout" === e.type && "HTML" === e.target.nodeName && null === e.relatedTarget && P(e, t)
        }
        function M(e, t) {
            var n = document.documentElement;
            if (1 === t.handles.length) {
                if (t.handles[0].hasAttribute("disabled"))
                    return !1;
                s(t.handles[0].children[0], l.cssClasses.active)
            }
            e.preventDefault(),
            e.stopPropagation();
            var r = k(p.move, n, U, {
                start: e.calcPoint,
                baseSize: C(),
                pageOffset: e.pageOffset,
                handles: t.handles,
                handleNumber: t.handleNumber,
                buttonsProperty: e.buttons,
                positions: [m[0], m[d.length - 1]]
            })
              , i = k(p.end, n, P, {
                handles: t.handles,
                handleNumber: t.handleNumber
            })
              , o = k("mouseout", n, O, {
                handles: t.handles,
                handleNumber: t.handleNumber
            });
            if (n.noUiListeners = r.concat(i, o),
            e.cursor) {
                document.body.style.cursor = getComputedStyle(e.target).cursor,
                d.length > 1 && s(h, l.cssClasses.drag);
                var a = function() {
                    return !1
                };
                document.body.noUiListener = a,
                document.body.addEventListener("selectstart", a, !1)
            }
            void 0 !== t.handleNumber && E("start", t.handleNumber)
        }
        function L(t) {
            var r, i, s = t.calcPoint, o = 0;
            if (t.stopPropagation(),
            d.forEach(function(t) {
                o += e(t)[l.style]
            }),
            r = s < o / 2 || 1 === d.length ? 0 : 1,
            d[r].hasAttribute("disabled") && (r = r ? 0 : 1),
            i = 100 * (s -= e(u)[l.style]) / C(),
            l.events.snap || n(h, l.cssClasses.tap, l.animationDuration),
            d[r].hasAttribute("disabled"))
                return !1;
            A(d[r], i),
            E("slide", r, !0),
            E("set", r, !0),
            E("change", r, !0),
            l.events.snap && M(t, {
                handles: [d[r]]
            })
        }
        function V(t) {
            var n = t.calcPoint - e(u)[l.style]
              , r = v.getStep(100 * n / C())
              , i = v.fromStepping(r);
            Object.keys(b).forEach(function(e) {
                "hover" === e.split(".")[0] && b[e].forEach(function(e) {
                    e.call(f, i)
                })
            })
        }
        function A(e, t, n) {
            var i = e !== d[0] ? 1 : 0
              , a = m[0] + l.margin
              , c = m[1] - l.margin
              , u = m[0] + l.limit
              , f = m[1] - l.limit;
            return d.length > 1 && (t = i ? Math.max(t, a) : Math.min(t, c)),
            !1 !== n && l.limit && d.length > 1 && (t = i ? Math.min(t, u) : Math.max(t, f)),
            (t = r(t = v.getStep(t))) !== m[i] && (window.requestAnimationFrame ? window.requestAnimationFrame(function() {
                e.style[l.style] = t + "%"
            }) : e.style[l.style] = t + "%",
            e.previousSibling || (o(e, l.cssClasses.stacking),
            t > 50 && s(e, l.cssClasses.stacking)),
            m[i] = t,
            g[i] = v.fromStepping(t),
            E("update", i),
            !0)
        }
        function j(e, t) {
            var r, s, o = i(e);
            for (t = void 0 === t || !!t,
            l.dir && l.handles > 1 && o.reverse(),
            l.animate && -1 !== m[0] && n(h, l.cssClasses.tap, l.animationDuration),
            r = d.length > 1 ? 3 : 1,
            1 === o.length && (r = 1),
            function(e, t) {
                var n, r, i;
                for (l.limit && (e += 1),
                n = 0; n < e; n += 1)
                    null !== (i = t[r = n % 2]) && !1 !== i && ("number" == typeof i && (i = String(i)),
                    (!1 === (i = l.format.from(i)) || isNaN(i) || !1 === A(d[r], v.toStepping(i), n === 3 - l.dir)) && E("update", r))
            }(r, o),
            s = 0; s < d.length; s++)
                null !== o[s] && t && E("set", s)
        }
        function D() {
            var e, t = [];
            for (e = 0; e < l.handles; e += 1)
                t[e] = l.format.to(g[e]);
            return N(t)
        }
        function H(e, t) {
            b[e] = b[e] || [],
            b[e].push(t),
            "update" === e.split(".")[0] && d.forEach(function(e, t) {
                E("update", t)
            })
        }
        if (h.noUiSlider)
            throw new Error("Slider was already initialized.");
        return u = function(e, t, n) {
            s(n, l.cssClasses.target),
            s(n, 0 === e ? l.cssClasses.ltr : l.cssClasses.rtl),
            s(n, 0 === t ? l.cssClasses.horizontal : l.cssClasses.vertical);
            var r = document.createElement("div");
            return s(r, l.cssClasses.base),
            n.appendChild(r),
            r
        }(l.dir, l.ort, h),
        d = function(e, t, n) {
            var r, i = [];
            for (r = 0; r < e; r += 1)
                i.push(n.appendChild(w(t, r)));
            return i
        }(l.handles, l.dir, u),
        function(e, t, n) {
            switch (e) {
            case 1:
                s(t, l.cssClasses.connect),
                s(n[0], l.cssClasses.background);
                break;
            case 3:
                s(n[1], l.cssClasses.background);
            case 2:
                s(n[0], l.cssClasses.connect);
            case 0:
                s(t, l.cssClasses.background)
            }
        }(l.connect, h, d),
        l.pips && x(l.pips),
        l.tooltips && function() {
            l.dir && l.tooltips.reverse();
            var e = d.map(S);
            l.dir && (e.reverse(),
            l.tooltips.reverse()),
            H("update", function(t, n, r) {
                e[n] && (e[n].innerHTML = !0 === l.tooltips[n] ? t[n] : l.tooltips[n].to(r[n]))
            })
        }(),
        f = {
            destroy: function() {
                for (var e in l.cssClasses)
                    l.cssClasses.hasOwnProperty(e) && o(h, l.cssClasses[e]);
                for (; h.firstChild; )
                    h.removeChild(h.firstChild);
                delete h.noUiSlider
            },
            steps: function() {
                return N(m.map(function(e, t) {
                    var n, r, i = v.getApplicableStep(e), s = (n = String(i[2]),
                    (r = n.split(".")).length > 1 ? r[1].length : 0), o = g[t], a = 100 === e ? null : i[2], l = Number((o - i[2]).toFixed(s));
                    return [0 === e ? null : l >= i[1] ? i[2] : i[0] || !1, a]
                }))
            },
            on: H,
            off: function(e) {
                var t = e && e.split(".")[0]
                  , n = t && e.substring(t.length);
                Object.keys(b).forEach(function(e) {
                    var r = e.split(".")[0]
                      , i = e.substring(r.length);
                    t && t !== r || n && n !== i || delete b[e]
                })
            },
            get: D,
            set: j,
            updateOptions: function(e, t) {
                var n = D()
                  , r = z({
                    start: [0, 0],
                    margin: e.margin,
                    limit: e.limit,
                    step: void 0 === e.step ? l.singleStep : e.step,
                    range: e.range,
                    animate: e.animate,
                    snap: void 0 === e.snap ? l.snap : e.snap
                });
                ["margin", "limit", "range", "animate"].forEach(function(t) {
                    void 0 !== e[t] && (l[t] = e[t])
                }),
                r.spectrum.direction = v.direction,
                v = r.spectrum,
                m = [-1, -1],
                j(e.start || n, t)
            },
            options: c,
            target: h,
            pips: x
        },
        function(e) {
            if (e.fixed || d.forEach(function(e, t) {
                k(p.start, e.children[0], M, {
                    handles: [e],
                    handleNumber: t
                })
            }),
            e.tap && k(p.start, u, L, {
                handles: d
            }),
            e.hover && k(p.move, u, V, {
                hover: !0
            }),
            e.drag) {
                var t = [u.querySelector("." + l.cssClasses.connect)];
                s(t[0], l.cssClasses.draggable),
                e.fixed && t.push(d[t[0] === d[0] ? 1 : 0].children[0]),
                t.forEach(function(e) {
                    k(p.start, e, M, {
                        handles: d
                    })
                })
            }
        }(l.events),
        f
    }
    return {
        create: function(e, t) {
            if (!e.nodeName)
                throw new Error("noUiSlider.create requires a single element.");
            var n = z(t)
              , r = A(e, n, t);
            return r.set(n.start),
            e.noUiSlider = r,
            r
        }
    }
});
// AutoComplete
var SelectPure = function() {
    "use strict";
    const t = {
        value: "data-value",
        disabled: "data-disabled",
        class: "class",
        type: "type"
    };
    class e {
        constructor(t, e={}, s={}) {
            return this._node = t instanceof HTMLElement ? t : document.createElement(t),
            this._config = {
                i18n: s
            },
            this._setAttributes(e),
            e.textContent && this._setTextContent(e.textContent),
            this
        }
        get() {
            return this._node
        }
        append(t) {
            return this._node.prepend(t),
            this
        }
        addClass(t) {
            return this._node.classList.add(t),
            this
        }
        removeClass(t) {
            return this._node.classList.remove(t),
            this
        }
        toggleClass(t) {
            return this._node.classList.toggle(t),
            this
        }
        addEventListener(t, e) {
            return this._node.addEventListener(t, e),
            this
        }
        removeEventListener(t, e) {
            return this._node.removeEventListener(t, e),
            this
        }
        setText(t) {
            return this._setTextContent(t),
            this
        }
        getHeight() {
            return window.getComputedStyle(this._node).height
        }
        setTop(t) {
            return this._node.style.top = `${t}px`,
            this
        }
        focus() {
            return this._node.focus(),
            this
        }
        _setTextContent(t) {
            this._node.textContent = t
        }
        _setAttributes(e) {
            for (const s in e)
                t[s] && e[s] && this._setAttribute(t[s], e[s])
        }
        _setAttribute(t, e) {
            this._node.setAttribute(t, e)
        }
    }
    var s = Object.assign || function(t) {
        for (var e = 1; e < arguments.length; e++) {
            var s = arguments[e];
            for (var i in s)
                Object.prototype.hasOwnProperty.call(s, i) && (t[i] = s[i])
        }
        return t
    }
    ;
    return class {
        constructor(t, i) {
            this._config = s({}, i),
            this._state = {
                opened: !1
            },
            this._icons = [],
            this._boundHandleClick = this._handleClick.bind(this),
            this._boundUnselectOption = this._unselectOption.bind(this),
            this._boundSortOptions = this._sortOptions.bind(this),
            this._body = new e(document.body),
            this._create(t),
            this._setValue()
        }
        _create(t) {
            const s = "string" == typeof t ? document.querySelector(t) : t;
            this._parent = new e(s),
            this._select = new e("div",{
                class: "select-pure__select"
            }),
            this._label = new e("span",{
                class: "select-pure__label"
            }),
            this._optionsWrapper = new e("div",{
                class: "select-pure__options"
            }),
            this._config.multiple && this._select.addClass("select-pure__select--multiple"),
            this._options = this._generateOptions(),
            this._select.addEventListener("click", this._boundHandleClick),
            this._select.append(this._label.get()),
            this._select.append(this._optionsWrapper.get()),
            this._parent.append(this._select.get())
        }
        _generateOptions() {
            return this._config.autocomplete && (this._autocomplete = new e("input",{
                class: "select-pure__autocomplete",
                type: "text"
            }),
            this._autocomplete.addEventListener("input", this._boundSortOptions),
            this._optionsWrapper.append(this._autocomplete.get())),
            this._config.options.map(t=>{
                const s = new e("div",{
                    class: "select-pure__option",
                    value: t.value,
                    textContent: t.label,
                    disabled: t.disabled
                });
                return this._optionsWrapper.append(s.get()),
                s
            }
            )
        }
        _handleClick(t) {
            if (t.stopPropagation(),
            "select-pure__autocomplete" !== t.target.className) {
                if (this._state.opened) {
                    const e = this._options.find(e=>e.get() === t.target);
                    return e && this._setValue(e.get().getAttribute("data-value"), !0),
                    this._select.removeClass("select-pure__select--opened"),
                    this._body.removeEventListener("click", this._boundHandleClick),
                    this._select.addEventListener("click", this._boundHandleClick),
                    void (this._state.opened = !1)
                }
                t.target.className !== this._config.icon && (this._select.addClass("select-pure__select--opened"),
                this._body.addEventListener("click", this._boundHandleClick),
                this._select.removeEventListener("click", this._boundHandleClick),
                this._state.opened = !0,
                this._autocomplete && this._autocomplete.focus())
            }
        }
        _setValue(t, e, s) {
            if (t && !s && (this._config.value = this._config.multiple ? this._config.value.concat(t) : t),
            t && s && (this._config.value = t),
            this._options.forEach(t=>{
                t.removeClass("select-pure__option--selected")
            }
            ),
            this._config.multiple) {
                const t = this._config.value.map(t=>{
                    const e = this._config.options.find(e=>e.value === t);
                    return this._options.find(t=>t.get().getAttribute("data-value") === e.value.toString()).addClass("select-pure__option--selected"),
                    e
                }
                );
                return void this._selectOptions(t, e)
            }
            const i = this._config.value ? this._config.options.find(t=>t.value.toString() === this._config.value) : this._config.options[0];
            this._options.find(t=>t.get().getAttribute("data-value") === i.value.toString()).addClass("select-pure__option--selected"),
            this._selectOption(i, e)
        }
        _selectOption(t, e) {
            this._selectedOption = t,
            this._label.setText(t.label),
            this._config.onChange && e && this._config.onChange(t.value)
        }
        _selectOptions(t, s) {
            this._label.setText(""),
            this._icons = t.map(t=>{
                const s = new e("span",{
                    class: "select-pure__selected-label",
                    textContent: t.label
                })
                  , i = new e("i",{
                    class: this._config.icon,
                    value: t.value
                });
                return i.addEventListener("click", this._boundUnselectOption),
                s.append(i.get()),
                this._label.append(s.get()),
                i.get()
            }
            ),
            s && this._optionsWrapper.setTop(Number(this._select.getHeight().split("px")[0]) + 5),
            this._config.onChange && s && this._config.onChange(this._config.value)
        }
        _unselectOption(t) {
            const e = [...this._config.value]
              , s = e.indexOf(t.target.getAttribute("data-value"));
            -1 !== s && e.splice(s, 1),
            this._setValue(e, !0, !0)
        }
        _sortOptions(t) {
            this._options.forEach(e=>{
                e.get().textContent.toLowerCase().startsWith(t.target.value.toLowerCase()) ? e.removeClass("select-pure__option--hidden") : e.addClass("select-pure__option--hidden")
            }
            )
        }
    }
}();
// //Bootstrap Multiselect
!function(t, e) {
    "function" == typeof define && define.amd && "function" == typeof require && "function" == typeof require.specified && require.specified("knockout") ? define(["jquery", "knockout"], e) : e(t.jQuery, t.ko)
}(this, function(t, e) {
    "use strict";
    function i(e, i) {
        this.$select = t(e),
        this.options = this.mergeOptions(t.extend({}, i, this.$select.data())),
        this.$select.attr("data-placeholder") && (this.options.nonSelectedText = this.$select.data("placeholder")),
        this.originalOptions = this.$select.clone()[0].options,
        this.query = "",
        this.searchTimeout = null,
        this.lastToggledInput = null,
        this.options.multiple = "multiple" === this.$select.attr("multiple"),
        this.options.onChange = t.proxy(this.options.onChange, this),
        this.options.onSelectAll = t.proxy(this.options.onSelectAll, this),
        this.options.onDeselectAll = t.proxy(this.options.onDeselectAll, this),
        this.options.onDropdownShow = t.proxy(this.options.onDropdownShow, this),
        this.options.onDropdownHide = t.proxy(this.options.onDropdownHide, this),
        this.options.onDropdownShown = t.proxy(this.options.onDropdownShown, this),
        this.options.onDropdownHidden = t.proxy(this.options.onDropdownHidden, this),
        this.options.onInitialized = t.proxy(this.options.onInitialized, this),
        this.options.onFiltering = t.proxy(this.options.onFiltering, this),
        this.buildContainer(),
        this.buildButton(),
        this.buildDropdown(),
        this.buildReset(),
        this.buildSelectAll(),
        this.buildDropdownOptions(),
        this.buildFilter(),
        this.updateButtonText(),
        this.updateSelectAll(!0),
        this.options.enableClickableOptGroups && this.options.multiple && this.updateOptGroups(),
        this.options.wasDisabled = this.$select.prop("disabled"),
        this.options.disableIfEmpty && t("option", this.$select).length <= 0 && this.disable(),
        this.$select.wrap('<span class="multiselect-native-select" />').after(this.$container),
        this.options.onInitialized(this.$select, this.$container)
    }
    void 0 !== e && e.bindingHandlers && !e.bindingHandlers.multiselect && (e.bindingHandlers.multiselect = {
        after: ["options", "value", "selectedOptions", "enable", "disable"],
        init: function(i, s, l, o, n) {
            var a = t(i)
              , p = e.toJS(s());
            if (a.multiselect(p),
            l.has("options")) {
                var h = l.get("options");
                e.isObservable(h) && e.computed({
                    read: function() {
                        h(),
                        setTimeout(function() {
                            var t = a.data("multiselect");
                            t && t.updateOriginalOptions(),
                            a.multiselect("rebuild")
                        }, 1)
                    },
                    disposeWhenNodeIsRemoved: i
                })
            }
            if (l.has("value")) {
                var c = l.get("value");
                e.isObservable(c) && e.computed({
                    read: function() {
                        c(),
                        setTimeout(function() {
                            a.multiselect("refresh")
                        }, 1)
                    },
                    disposeWhenNodeIsRemoved: i
                }).extend({
                    rateLimit: 100,
                    notifyWhenChangesStop: !0
                })
            }
            if (l.has("selectedOptions")) {
                var r = l.get("selectedOptions");
                e.isObservable(r) && e.computed({
                    read: function() {
                        r(),
                        setTimeout(function() {
                            a.multiselect("refresh")
                        }, 1)
                    },
                    disposeWhenNodeIsRemoved: i
                }).extend({
                    rateLimit: 100,
                    notifyWhenChangesStop: !0
                })
            }
            var u = function(t) {
                setTimeout(function() {
                    t ? a.multiselect("enable") : a.multiselect("disable")
                })
            };
            if (l.has("enable")) {
                var d = l.get("enable");
                e.isObservable(d) ? e.computed({
                    read: function() {
                        u(d())
                    },
                    disposeWhenNodeIsRemoved: i
                }).extend({
                    rateLimit: 100,
                    notifyWhenChangesStop: !0
                }) : u(d)
            }
            if (l.has("disable")) {
                var b = l.get("disable");
                e.isObservable(b) ? e.computed({
                    read: function() {
                        u(!b())
                    },
                    disposeWhenNodeIsRemoved: i
                }).extend({
                    rateLimit: 100,
                    notifyWhenChangesStop: !0
                }) : u(!b)
            }
            e.utils.domNodeDisposal.addDisposeCallback(i, function() {
                a.multiselect("destroy")
            })
        },
        update: function(i, s, l, o, n) {
            var a = t(i)
              , p = e.toJS(s());
            a.multiselect("setOptions", p),
            a.multiselect("rebuild")
        }
    }),
    i.prototype = {
        defaults: {
            buttonText: function(e, i) {
                if (this.disabledText.length > 0 && (i.prop("disabled") || 0 == e.length && this.disableIfEmpty))
                    return this.disabledText;
                if (0 === e.length)
                    return this.nonSelectedText;
                if (this.allSelectedText && e.length === t("option", t(i)).length && 1 !== t("option", t(i)).length && this.multiple)
                    return this.selectAllNumber ? this.allSelectedText + " (" + e.length + ")" : this.allSelectedText;
                if (0 != this.numberDisplayed && e.length > this.numberDisplayed)
                    return e.length + " " + this.nSelectedText;
                var s = ""
                  , l = this.delimiterText;
                return e.each(function() {
                    var e = void 0 !== t(this).attr("label") ? t(this).attr("label") : t(this).text();
                    s += e + l
                }),
                s.substr(0, s.length - this.delimiterText.length)
            },
            buttonTitle: function(e, i) {
                if (0 === e.length)
                    return this.nonSelectedText;
                var s = ""
                  , l = this.delimiterText;
                return e.each(function() {
                    var e = void 0 !== t(this).attr("label") ? t(this).attr("label") : t(this).text();
                    s += e + l
                }),
                s.substr(0, s.length - this.delimiterText.length)
            },
            checkboxName: function(t) {
                return !1
            },
            optionLabel: function(e) {
                return t(e).attr("label") || t(e).text()
            },
            optionClass: function(e) {
                return t(e).attr("class") || ""
            },
            onChange: function(t, e) {},
            onDropdownShow: function(t) {},
            onDropdownHide: function(t) {},
            onDropdownShown: function(t) {},
            onDropdownHidden: function(t) {},
            onSelectAll: function() {},
            onDeselectAll: function() {},
            onInitialized: function(t, e) {},
            onFiltering: function(t) {},
            enableHTML: !1,
            buttonClass: "btn btn-default",
            inheritClass: !1,
            buttonWidth: "auto",
            buttonContainer: '<div class="btn-group" />',
            dropRight: !1,
            dropUp: !1,
            selectedClass: "active",
            maxHeight: !1,
            includeSelectAllOption: !1,
            includeSelectAllIfMoreThan: 0,
            selectAllText: " Select all",
            selectAllValue: "multiselect-all",
            selectAllast_name: !1,
            selectAllNumber: !0,
            selectAllJustVisible: !0,
            enableFiltering: !1,
            enableCaseInsensitiveFiltering: !1,
            enableFullValueFiltering: !1,
            enableClickableOptGroups: !1,
            enableCollapsibleOptGroups: !1,
            collapseOptGroupsByDefault: !1,
            filterPlaceholder: "Search",
            filterBehavior: "text",
            includeFilterClearBtn: !0,
            preventInputChangeEvent: !1,
            nonSelectedText: "None selected",
            nSelectedText: "selected",
            allSelectedText: "All selected",
            numberDisplayed: 3,
            disableIfEmpty: !1,
            disabledText: "",
            delimiterText: ", ",
            includeResetOption: !1,
            includeResetDivider: !1,
            resetText: "Reset",
            templates: {
                button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"><span class="multiselect-selected-text"></span> <b class="caret"></b></button>',
                ul: '<ul class="multiselect-container dropdown-menu"></ul>',
                filter: '<li class="multiselect-item multiselect-filter"><div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span><input class="form-control multiselect-search" type="text" /></div></li>',
                filterClearBtn: '<span class="input-group-btn"><button class="btn btn-default multiselect-clear-filter" type="button"><i class="glyphicon glyphicon-remove-circle"></i></button></span>',
                li: '<li><a tabindex="0"><label></label></a></li>',
                divider: '<li class="multiselect-item divider"></li>',
                liGroup: '<li class="multiselect-item multiselect-group"><label></label></li>',
                resetButton: '<li class="multiselect-reset text-center"><div class="input-group"><a class="btn btn-default btn-block"></a></div></li>'
            }
        },
        constructor: i,
        buildContainer: function() {
            this.$container = t(this.options.buttonContainer),
            this.$container.on("show.bs.dropdown", this.options.onDropdownShow),
            this.$container.on("hide.bs.dropdown", this.options.onDropdownHide),
            this.$container.on("shown.bs.dropdown", this.options.onDropdownShown),
            this.$container.on("hidden.bs.dropdown", this.options.onDropdownHidden)
        },
        buildButton: function() {
            this.$button = t(this.options.templates.button).addClass(this.options.buttonClass),
            this.$select.attr("class") && this.options.inheritClass && this.$button.addClass(this.$select.attr("class")),
            this.$select.prop("disabled") ? this.disable() : this.enable(),
            this.options.buttonWidth && "auto" !== this.options.buttonWidth && (this.$button.css({
                width: "100%",
                overflow: "hidden",
                "text-overflow": "ellipsis"
            }),
            this.$container.css({
                width: this.options.buttonWidth
            }));
            var e = this.$select.attr("tabindex");
            e && this.$button.attr("tabindex", e),
            this.$container.prepend(this.$button)
        },
        buildDropdown: function() {
            if (this.$ul = t(this.options.templates.ul),
            this.options.dropRight && this.$ul.addClass("pull-right"),
            this.options.maxHeight && this.$ul.css({
                "max-height": this.options.maxHeight + "px",
                "overflow-y": "auto",
                "overflow-x": "hidden"
            }),
            this.options.dropUp) {
                var e = Math.min(this.options.maxHeight, 26 * t('option[data-role!="divider"]', this.$select).length + 19 * t('option[data-role="divider"]', this.$select).length + (this.options.includeSelectAllOption ? 26 : 0) + (this.options.enableFiltering || this.options.enableCaseInsensitiveFiltering ? 44 : 0))
                  , i = e + 34;
                this.$ul.css({
                    "max-height": e + "px",
                    "overflow-y": "auto",
                    "overflow-x": "hidden",
                    "margin-top": "-" + i + "px"
                })
            }
            this.$container.append(this.$ul)
        },
        buildDropdownOptions: function() {
            this.$select.children().each(t.proxy(function(e, i) {
                var s = t(i)
                  , l = s.prop("tagName").toLowerCase();
                s.prop("value") !== this.options.selectAllValue && ("optgroup" === l ? this.createOptgroup(i) : "option" === l && ("divider" === s.data("role") ? this.createDivider() : this.createOptionValue(i)))
            }, this)),
            t(this.$ul).off("change", 'li:not(.multiselect-group) input[type="checkbox"], li:not(.multiselect-group) input[type="radio"]'),
            t(this.$ul).on("change", 'li:not(.multiselect-group) input[type="checkbox"], li:not(.multiselect-group) input[type="radio"]', t.proxy(function(e) {
                var i = t(e.target)
                  , s = i.prop("checked") || !1
                  , l = i.val() === this.options.selectAllValue;
                this.options.selectedClass && (s ? i.closest("li").addClass(this.options.selectedClass) : i.closest("li").removeClass(this.options.selectedClass));
                var o = i.val()
                  , n = this.getOptionByValue(o)
                  , a = t("option", this.$select).not(n)
                  , p = t("input", this.$container).not(i);
                if (l ? s ? this.selectAll(this.options.selectAllJustVisible, !0) : this.deselectAll(this.options.selectAllJustVisible, !0) : (s ? (n.prop("selected", !0),
                this.options.multiple ? n.prop("selected", !0) : (this.options.selectedClass && t(p).closest("li").removeClass(this.options.selectedClass),
                t(p).prop("checked", !1),
                a.prop("selected", !1),
                this.$button.click()),
                "active" === this.options.selectedClass && a.closest("a").css("outline", "")) : n.prop("selected", !1),
                this.options.onChange(n, s),
                this.updateSelectAll(),
                this.options.enableClickableOptGroups && this.options.multiple && this.updateOptGroups()),
                this.$select.change(),
                this.updateButtonText(),
                this.options.preventInputChangeEvent)
                    return !1
            }, this)),
            t("li a", this.$ul).on("mousedown", function(t) {
                if (t.shiftKey)
                    return !1
            }),
            t(this.$ul).on("touchstart click", "li a", t.proxy(function(e) {
                e.stopPropagation();
                var i = t(e.target);
                if (e.shiftKey && this.options.multiple) {
                    i.is("label") && (e.preventDefault(),
                    (i = i.find("input")).prop("checked", !i.prop("checked")));
                    var s = i.prop("checked") || !1;
                    if (null !== this.lastToggledInput && this.lastToggledInput !== i) {
                        var l = this.$ul.find("li:visible").index(i.parents("li"))
                          , o = this.$ul.find("li:visible").index(this.lastToggledInput.parents("li"));
                        if (l > o) {
                            var n = o;
                            o = l,
                            l = n
                        }
                        ++o;
                        var a = this.$ul.find("li").not(".multiselect-filter-hidden").slice(l, o).find("input");
                        a.prop("checked", s),
                        this.options.selectedClass && a.closest("li").toggleClass(this.options.selectedClass, s);
                        for (var p = 0, h = a.length; p < h; p++) {
                            var c = t(a[p]);
                            this.getOptionByValue(c.val()).prop("selected", s)
                        }
                    }
                    i.trigger("change")
                }
                i.is("input") && !i.closest("li").is(".multiselect-item") && (this.lastToggledInput = i),
                i.blur()
            }, this)),
            this.$container.off("keydown.multiselect").on("keydown.multiselect", t.proxy(function(e) {
                if (!t('input[type="text"]', this.$container).is(":focus"))
                    if (9 === e.keyCode && this.$container.hasClass("open"))
                        this.$button.click();
                    else {
                        var i = t(this.$container).find("li:not(.divider):not(.disabled) a").filter(":visible");
                        if (!i.length)
                            return;
                        var s = i.index(i.filter(":focus"));
                        38 === e.keyCode && s > 0 ? s-- : 40 === e.keyCode && s < i.length - 1 ? s++ : ~s || (s = 0);
                        var l = i.eq(s);
                        if (l.focus(),
                        32 === e.keyCode || 13 === e.keyCode) {
                            var o = l.find("input");
                            o.prop("checked", !o.prop("checked")),
                            o.change()
                        }
                        e.stopPropagation(),
                        e.preventDefault()
                    }
            }, this)),
            this.options.enableClickableOptGroups && this.options.multiple && t("li.multiselect-group input", this.$ul).on("change", t.proxy(function(e) {
                e.stopPropagation();
                var i = t(e.target).prop("checked") || !1
                  , s = t(e.target).closest("li")
                  , l = s.nextUntil("li.multiselect-group").not(".multiselect-filter-hidden").not(".disabled").find("input")
                  , o = [];
                this.options.selectedClass && (i ? s.addClass(this.options.selectedClass) : s.removeClass(this.options.selectedClass)),
                t.each(l, t.proxy(function(e, s) {
                    var l = t(s).val()
                      , n = this.getOptionByValue(l);
                    i ? (t(s).prop("checked", !0),
                    t(s).closest("li").addClass(this.options.selectedClass),
                    n.prop("selected", !0)) : (t(s).prop("checked", !1),
                    t(s).closest("li").removeClass(this.options.selectedClass),
                    n.prop("selected", !1)),
                    o.push(this.getOptionByValue(l))
                }, this)),
                this.options.onChange(o, i),
                this.$select.change(),
                this.updateButtonText(),
                this.updateSelectAll()
            }, this)),
            this.options.enableCollapsibleOptGroups && this.options.multiple && (t("li.multiselect-group .caret-container", this.$ul).on("click", t.proxy(function(e) {
                var i = t(e.target).closest("li").nextUntil("li.multiselect-group").not(".multiselect-filter-hidden")
                  , s = !0;
                i.each(function() {
                    s = s && !t(this).hasClass("multiselect-collapsible-hidden")
                }),
                s ? i.hide().addClass("multiselect-collapsible-hidden") : i.show().removeClass("multiselect-collapsible-hidden")
            }, this)),
            t("li.multiselect-all", this.$ul).css("background", "#f3f3f3").css("border-bottom", "1px solid #eaeaea"),
            t("li.multiselect-all > a > label.checkbox", this.$ul).css("padding", "3px 20px 3px 35px"),
            t("li.multiselect-group > a > input", this.$ul).css("margin", "4px 0px 5px -20px"))
        },
        createOptionValue: function(e) {
            var i = t(e);
            i.is(":selected") && i.prop("selected", !0);
            var s = this.options.optionLabel(e)
              , l = this.options.optionClass(e)
              , o = i.val()
              , n = this.options.multiple ? "checkbox" : "radio"
              , a = t(this.options.templates.li)
              , p = t("label", a);
            p.addClass(n),
            p.attr("title", s),
            a.addClass(l),
            this.options.collapseOptGroupsByDefault && "optgroup" === t(e).parent().prop("tagName").toLowerCase() && (a.addClass("multiselect-collapsible-hidden"),
            a.hide()),
            this.options.enableHTML ? p.html(" " + s) : p.text(" " + s);
            var h = t("<input/>").attr("type", n)
              , c = this.options.checkboxName(i);
            c && h.attr("name", c),
            p.prepend(h);
            var r = i.prop("selected") || !1;
            h.val(o),
            o === this.options.selectAllValue && (a.addClass("multiselect-item multiselect-all"),
            h.parent().parent().addClass("multiselect-all")),
            p.attr("title", i.attr("title")),
            this.$ul.append(a),
            i.is(":disabled") && h.attr("disabled", "disabled").prop("disabled", !0).closest("a").attr("tabindex", "-1").closest("li").addClass("disabled"),
            h.prop("checked", r),
            r && this.options.selectedClass && h.closest("li").addClass(this.options.selectedClass)
        },
        createDivider: function(e) {
            var i = t(this.options.templates.divider);
            this.$ul.append(i)
        },
        createOptgroup: function(e) {
            var i = t(e).attr("label")
              , s = t(e).attr("value")
              , l = t('<li class="multiselect-item multiselect-group"><a href="javascript:void(0);"><label><b></b></label></a></li>')
              , o = this.options.optionClass(e);
            l.addClass(o),
            this.options.enableHTML ? t("label b", l).html(" " + i) : t("label b", l).text(" " + i),
            this.options.enableCollapsibleOptGroups && this.options.multiple && t("a", l).append('<span class="caret-container"><b class="caret"></b></span>'),
            this.options.enableClickableOptGroups && this.options.multiple && t("a label", l).prepend('<input type="checkbox" value="' + s + '"/>'),
            t(e).is(":disabled") && l.addClass("disabled"),
            this.$ul.append(l),
            t("option", e).each(t.proxy(function(t, e) {
                this.createOptionValue(e)
            }, this))
        },
        buildReset: function() {
            if (this.options.includeResetOption) {
                this.options.includeResetDivider && this.$ul.prepend(t(this.options.templates.divider));
                var e = t(this.options.templates.resetButton);
                this.options.enableHTML ? t("a", e).html(this.options.resetText) : t("a", e).text(this.options.resetText),
                t("a", e).click(t.proxy(function() {
                    this.clearSelection()
                }, this)),
                this.$ul.prepend(e)
            }
        },
        buildSelectAll: function() {
            if ("number" == typeof this.options.selectAllValue && (this.options.selectAllValue = this.options.selectAllValue.toString()),
            !this.hasSelectAll() && this.options.includeSelectAllOption && this.options.multiple && t("option", this.$select).length > this.options.includeSelectAllIfMoreThan) {
                this.options.includeSelectAllDivider && this.$ul.prepend(t(this.options.templates.divider));
                var e = t(this.options.templates.li);
                t("label", e).addClass("checkbox"),
                this.options.enableHTML ? t("label", e).html(" " + this.options.selectAllText) : t("label", e).text(" " + this.options.selectAllText),
                this.options.selectAllast_name ? t("label", e).prepend('<input type="checkbox" name="' + this.options.selectAllast_name + '" />') : t("label", e).prepend('<input type="checkbox" />');
                var i = t("input", e);
                i.val(this.options.selectAllValue),
                e.addClass("multiselect-item multiselect-all"),
                i.parent().parent().addClass("multiselect-all"),
                this.$ul.prepend(e),
                i.prop("checked", !1)
            }
        },
        buildFilter: function() {
            if (this.options.enableFiltering || this.options.enableCaseInsensitiveFiltering) {
                var e = Math.max(this.options.enableFiltering, this.options.enableCaseInsensitiveFiltering);
                if (this.$select.find("option").length >= e) {
                    if (this.$filter = t(this.options.templates.filter),
                    t("input", this.$filter).attr("placeholder", this.options.filterPlaceholder),
                    this.options.includeFilterClearBtn) {
                        var i = t(this.options.templates.filterClearBtn);
                        i.on("click", t.proxy(function(e) {
                            clearTimeout(this.searchTimeout),
                            this.query = "",
                            this.$filter.find(".multiselect-search").val(""),
                            t("li", this.$ul).show().removeClass("multiselect-filter-hidden"),
                            this.updateSelectAll(),
                            this.options.enableClickableOptGroups && this.options.multiple && this.updateOptGroups()
                        }, this)),
                        this.$filter.find(".input-group").append(i)
                    }
                    this.$ul.prepend(this.$filter),
                    this.$filter.val(this.query).on("click", function(t) {
                        t.stopPropagation()
                    }).on("input keydown", t.proxy(function(e) {
                        13 === e.which && e.preventDefault(),
                        clearTimeout(this.searchTimeout),
                        this.searchTimeout = this.asyncFunction(t.proxy(function() {
                            var i, s;
                            this.query !== e.target.value && (this.query = e.target.value,
                            t.each(t("li", this.$ul), t.proxy(function(e, l) {
                                var o = t("input", l).length > 0 ? t("input", l).val() : ""
                                  , n = t("label", l).text()
                                  , a = "";
                                if ("text" === this.options.filterBehavior ? a = n : "value" === this.options.filterBehavior ? a = o : "both" === this.options.filterBehavior && (a = n + "\n" + o),
                                o !== this.options.selectAllValue && n) {
                                    var p = !1;
                                    if (this.options.enableCaseInsensitiveFiltering && (a = a.toLowerCase(),
                                    this.query = this.query.toLowerCase()),
                                    this.options.enableFullValueFiltering && "both" !== this.options.filterBehavior) {
                                        var h = a.trim().substring(0, this.query.length);
                                        this.query.indexOf(h) > -1 && (p = !0)
                                    } else
                                        a.indexOf(this.query) > -1 && (p = !0);
                                    p || (t(l).css("display", "none"),
                                    t(l).addClass("multiselect-filter-hidden")),
                                    p && (t(l).css("display", "block"),
                                    t(l).removeClass("multiselect-filter-hidden")),
                                    t(l).hasClass("multiselect-group") ? (i = l,
                                    s = p) : (p && t(i).show().removeClass("multiselect-filter-hidden"),
                                    !p && s && t(l).show().removeClass("multiselect-filter-hidden"))
                                }
                            }, this)));
                            this.updateSelectAll(),
                            this.options.enableClickableOptGroups && this.options.multiple && this.updateOptGroups(),
                            this.options.onFiltering(e.target)
                        }, this), 300, this)
                    }, this))
                }
            }
        },
        destroy: function() {
            this.$container.remove(),
            this.$select.show(),
            this.$select.prop("disabled", this.options.wasDisabled),
            this.$select.data("multiselect", null)
        },
        refresh: function() {
            var e = {};
            t("li input", this.$ul).each(function() {
                e[t(this).val()] = t(this)
            }),
            t("option", this.$select).each(t.proxy(function(i, s) {
                var l = t(s)
                  , o = e[t(s).val()];
                l.is(":selected") ? (o.prop("checked", !0),
                this.options.selectedClass && o.closest("li").addClass(this.options.selectedClass)) : (o.prop("checked", !1),
                this.options.selectedClass && o.closest("li").removeClass(this.options.selectedClass)),
                l.is(":disabled") ? o.attr("disabled", "disabled").prop("disabled", !0).closest("li").addClass("disabled") : o.prop("disabled", !1).closest("li").removeClass("disabled")
            }, this)),
            this.updateButtonText(),
            this.updateSelectAll(),
            this.options.enableClickableOptGroups && this.options.multiple && this.updateOptGroups()
        },
        select: function(e, i) {
            t.isArray(e) || (e = [e]);
            for (var s = 0; s < e.length; s++) {
                var l = e[s];
                if (null != l) {
                    var o = this.getOptionByValue(l)
                      , n = this.getInputByValue(l);
                    void 0 !== o && void 0 !== n && (this.options.multiple || this.deselectAll(!1),
                    this.options.selectedClass && n.closest("li").addClass(this.options.selectedClass),
                    n.prop("checked", !0),
                    o.prop("selected", !0),
                    i && this.options.onChange(o, !0))
                }
            }
            this.updateButtonText(),
            this.updateSelectAll(),
            this.options.enableClickableOptGroups && this.options.multiple && this.updateOptGroups()
        },
        clearSelection: function() {
            this.deselectAll(!1),
            this.updateButtonText(),
            this.updateSelectAll(),
            this.options.enableClickableOptGroups && this.options.multiple && this.updateOptGroups()
        },
        deselect: function(e, i) {
            t.isArray(e) || (e = [e]);
            for (var s = 0; s < e.length; s++) {
                var l = e[s];
                if (null != l) {
                    var o = this.getOptionByValue(l)
                      , n = this.getInputByValue(l);
                    void 0 !== o && void 0 !== n && (this.options.selectedClass && n.closest("li").removeClass(this.options.selectedClass),
                    n.prop("checked", !1),
                    o.prop("selected", !1),
                    i && this.options.onChange(o, !1))
                }
            }
            this.updateButtonText(),
            this.updateSelectAll(),
            this.options.enableClickableOptGroups && this.options.multiple && this.updateOptGroups()
        },
        selectAll: function(e, i) {
            e = void 0 === e || e;
            var s = t("li:not(.divider):not(.disabled):not(.multiselect-group)", this.$ul)
              , l = t("li:not(.divider):not(.disabled):not(.multiselect-group):not(.multiselect-filter-hidden):not(.multiselect-collapisble-hidden)", this.$ul).filter(":visible");
            e ? (t("input:enabled", l).prop("checked", !0),
            l.addClass(this.options.selectedClass),
            t("input:enabled", l).each(t.proxy(function(e, i) {
                var s = t(i).val()
                  , l = this.getOptionByValue(s);
                t(l).prop("selected", !0)
            }, this))) : (t("input:enabled", s).prop("checked", !0),
            s.addClass(this.options.selectedClass),
            t("input:enabled", s).each(t.proxy(function(e, i) {
                var s = t(i).val()
                  , l = this.getOptionByValue(s);
                t(l).prop("selected", !0)
            }, this))),
            t('li input[value="' + this.options.selectAllValue + '"]', this.$ul).prop("checked", !0),
            this.options.enableClickableOptGroups && this.options.multiple && this.updateOptGroups(),
            i && this.options.onSelectAll()
        },
        deselectAll: function(e, i) {
            e = void 0 === e || e;
            var s = t("li:not(.divider):not(.disabled):not(.multiselect-group)", this.$ul)
              , l = t("li:not(.divider):not(.disabled):not(.multiselect-group):not(.multiselect-filter-hidden):not(.multiselect-collapisble-hidden)", this.$ul).filter(":visible");
            e ? (t('input[type="checkbox"]:enabled', l).prop("checked", !1),
            l.removeClass(this.options.selectedClass),
            t('input[type="checkbox"]:enabled', l).each(t.proxy(function(e, i) {
                var s = t(i).val()
                  , l = this.getOptionByValue(s);
                t(l).prop("selected", !1)
            }, this))) : (t('input[type="checkbox"]:enabled', s).prop("checked", !1),
            s.removeClass(this.options.selectedClass),
            t('input[type="checkbox"]:enabled', s).each(t.proxy(function(e, i) {
                var s = t(i).val()
                  , l = this.getOptionByValue(s);
                t(l).prop("selected", !1)
            }, this))),
            t('li input[value="' + this.options.selectAllValue + '"]', this.$ul).prop("checked", !1),
            this.options.enableClickableOptGroups && this.options.multiple && this.updateOptGroups(),
            i && this.options.onDeselectAll()
        },
        rebuild: function() {
            this.$ul.html(""),
            this.options.multiple = "multiple" === this.$select.attr("multiple"),
            this.buildSelectAll(),
            this.buildDropdownOptions(),
            this.buildFilter(),
            this.updateButtonText(),
            this.updateSelectAll(!0),
            this.options.enableClickableOptGroups && this.options.multiple && this.updateOptGroups(),
            this.options.disableIfEmpty && t("option", this.$select).length <= 0 ? this.disable() : this.enable(),
            this.options.dropRight && this.$ul.addClass("pull-right")
        },
        dataprovider: function(e) {
            var i = 0
              , s = this.$select.empty();
            t.each(e, function(e, l) {
                var o;
                if (t.isArray(l.children))
                    i++,
                    o = t("<optgroup/>").attr({
                        label: l.label || "Group " + i,
                        disabled: !!l.disabled,
                        value: l.value
                    }),
                    function(t, e) {
                        for (var i = 0; i < t.length; ++i)
                            e(t[i], i)
                    }(l.children, function(e) {
                        var i = {
                            value: e.value,
                            label: e.label || e.value,
                            title: e.title,
                            selected: !!e.selected,
                            disabled: !!e.disabled
                        };
                        for (var s in e.attributes)
                            i["data-" + s] = e.attributes[s];
                        o.append(t("<option/>").attr(i))
                    });
                else {
                    var n = {
                        value: l.value,
                        label: l.label || l.value,
                        title: l.title,
                        class: l.class,
                        selected: !!l.selected,
                        disabled: !!l.disabled
                    };
                    for (var a in l.attributes)
                        n["data-" + a] = l.attributes[a];
                    (o = t("<option/>").attr(n)).text(l.label || l.value)
                }
                s.append(o)
            }),
            this.rebuild()
        },
        enable: function() {
            this.$select.prop("disabled", !1),
            this.$button.prop("disabled", !1).removeClass("disabled")
        },
        disable: function() {
            this.$select.prop("disabled", !0),
            this.$button.prop("disabled", !0).addClass("disabled")
        },
        setOptions: function(t) {
            this.options = this.mergeOptions(t)
        },
        mergeOptions: function(e) {
            return t.extend(!0, {}, this.defaults, this.options, e)
        },
        hasSelectAll: function() {
            return t("li.multiselect-all", this.$ul).length > 0
        },
        updateOptGroups: function() {
            var e = t("li.multiselect-group", this.$ul)
              , i = this.options.selectedClass;
            e.each(function() {
                var e = t(this).nextUntil("li.multiselect-group").not(".multiselect-filter-hidden").not(".disabled")
                  , s = !0;
                e.each(function() {
                    t("input", this).prop("checked") || (s = !1)
                }),
                i && (s ? t(this).addClass(i) : t(this).removeClass(i)),
                t("input", this).prop("checked", s)
            })
        },
        updateSelectAll: function(e) {
            if (this.hasSelectAll()) {
                var i = t("li:not(.multiselect-item):not(.multiselect-filter-hidden):not(.multiselect-group):not(.disabled) input:enabled", this.$ul)
                  , s = i.length
                  , l = i.filter(":checked").length
                  , o = t("li.multiselect-all", this.$ul)
                  , n = o.find("input");
                l > 0 && l === s ? (n.prop("checked", !0),
                o.addClass(this.options.selectedClass)) : (n.prop("checked", !1),
                o.removeClass(this.options.selectedClass))
            }
        },
        updateButtonText: function() {
            var e = this.getSelected();
            this.options.enableHTML ? t(".multiselect .multiselect-selected-text", this.$container).html(this.options.buttonText(e, this.$select)) : t(".multiselect .multiselect-selected-text", this.$container).text(this.options.buttonText(e, this.$select)),
            t(".multiselect", this.$container).attr("title", this.options.buttonTitle(e, this.$select))
        },
        getSelected: function() {
            return t("option", this.$select).filter(":selected")
        },
        getOptionByValue: function(e) {
            for (var i = t("option", this.$select), s = e.toString(), l = 0; l < i.length; l += 1) {
                var o = i[l];
                if (o.value === s)
                    return t(o)
            }
        },
        getInputByValue: function(e) {
            for (var i = t("li input:not(.multiselect-search)", this.$ul), s = e.toString(), l = 0; l < i.length; l += 1) {
                var o = i[l];
                if (o.value === s)
                    return t(o)
            }
        },
        updateOriginalOptions: function() {
            this.originalOptions = this.$select.clone()[0].options
        },
        asyncFunction: function(t, e, i) {
            var s = Array.prototype.slice.call(arguments, 3);
            return setTimeout(function() {
                t.apply(i || window, s)
            }, e)
        },
        setAllSelectedText: function(t) {
            this.options.allSelectedText = t,
            this.updateButtonText()
        }
    },
    t.fn.multiselect = function(e, s, l) {
        return this.each(function() {
            var o = t(this).data("multiselect");
            o || (o = new i(this,"object" == typeof e && e),
            t(this).data("multiselect", o)),
            "string" == typeof e && (o[e](s, l),
            "destroy" === e && t(this).data("multiselect", !1))
        })
    }
    ,
    t.fn.multiselect.Constructor = i,
    t(function() {
        t("select[data-role=multiselect]").multiselect()
    })
});
//Jquery Appear
!function(e) {
    e.fn.appear = function(a, r) {
        var p = e.extend({
            data: void 0,
            one: !0,
            accX: 0,
            accY: 0
        }, r);
        return this.each(function() {
            var r = e(this);
            if (r.appeared = !1,
            a) {
                var n = e(window)
                  , t = function() {
                    if (r.is(":visible")) {
                        var e = n.scrollLeft()
                          , a = n.scrollTop()
                          , t = r.offset()
                          , c = t.left
                          , i = t.top
                          , o = p.accX
                          , f = p.accY
                          , s = r.height()
                          , l = n.height()
                          , h = r.width()
                          , d = n.width();
                        i + s + f >= a && i <= a + l + f && c + h + o >= e && c <= e + d + o ? r.appeared || r.trigger("appear", p.data) : r.appeared = !1
                    } else
                        r.appeared = !1
                }
                  , c = function() {
                    if (r.appeared = !0,
                    p.one) {
                        n.unbind("scroll", t);
                        var c = e.inArray(t, e.fn.appear.checks);
                        c >= 0 && e.fn.appear.checks.splice(c, 1)
                    }
                    a.apply(this, arguments)
                };
                p.one ? r.one("appear", p.data, c) : r.bind("appear", p.data, c),
                n.scroll(t),
                e.fn.appear.checks.push(t),
                t()
            } else
                r.trigger("appear", p.data)
        })
    }
    ,
    e.extend(e.fn.appear, {
        checks: [],
        timeout: null,
        checkAll: function() {
            var a = e.fn.appear.checks.length;
            if (a > 0)
                for (; a--; )
                    e.fn.appear.checks[a]()
        },
        run: function() {
            e.fn.appear.timeout && clearTimeout(e.fn.appear.timeout),
            e.fn.appear.timeout = setTimeout(e.fn.appear.checkAll, 20)
        }
    }),
    e.each(["append", "prepend", "after", "before", "attr", "removeAttr", "addClass", "removeClass", "toggleClass", "remove", "css", "show", "hide"], function(a, r) {
        var p = e.fn[r];
        p && (e.fn[r] = function() {
            var a = p.apply(this, arguments);
            return e.fn.appear.run(),
            a
        }
        )
    })
}(jQuery);

function initializeSlider() {
    var e = document.getElementById("min-price-select")
      , i = document.getElementById("max-price-select")
      , t = document.getElementById("noUiSlider-1")
      , l = document.getElementById("noUiSlider-budget-2")
      , n = document.getElementById("budget-min-price-2")
      , a = document.getElementById("budget-max-price-2");
    if ($("#noUiSlider-budget-2").length > 0 && (console.log("slider2"),
    noUiSlider.create(l, {
        start: [5, 90],
        connect: !0,
        format: wNumb({
            decimals: 0
        }),
        range: {
            min: 5,
            max: 90
        }
    }),
    l.noUiSlider.on("update", function(e, i) {
        $(a).html(Math.floor(e[1])),
        $(n).html(Math.floor(e[0])),
        $("#budget-min-price-label-2").html(Math.floor(e[0])),
        $("#budget-max-price-label-2").html(Math.floor(e[1]))
    })),
    $("#noUiSlider-1").length > 0) {
        console.log("init slider"),
        noUiSlider.create(t, {
            start: [0, 20],
            connect: !0,
            format: wNumb({
                decimals: 0
            }),
            range: {
                min: 0,
                max: 20
            }
        }),
        getCurrencyCode();
        for (var o = getCurrencyMultiplier, r = 0; r <= 20; r++) {
            var s = document.createElement("option");
            0 === r ? (s.text = (.5 * o).toLocaleString(void 0, {
                maximumFractionDigits: 2
            }) + " M",
            s.value = r,
            c = r) : 20 === r ? (s.text = (20 * o).toLocaleString(void 0, {
                maximumFractionDigits: 2
            }) + " M",
            s.value = 20,
            c = 20) : (s.text = (r * o).toLocaleString(void 0, {
                maximumFractionDigits: 2
            }) + " M",
            s.value = r,
            c = r),
            s.innerHTML = '<span data-value="' + c + '" class="currency-convert">' + (c * o).toLocaleString(void 0, {
                maximumFractionDigits: 2
            }) + "</span> M",
            e.appendChild(s)
        }
        for (var r = 1; r <= 20; r++) {
            var c, s = document.createElement("option");
            20 === r ? (s.value = 20,
            c = 20) : (s.value = r,
            c = r),
            s.innerHTML = '<span data-value="' + c + '" class="currency-convert">' + (c * o).toLocaleString(void 0, {
                maximumFractionDigits: 2
            }) + "</span> M",
            i.appendChild(s)
        }
        t.noUiSlider.on("update", function(t, l) {
            var n = t[l];
            if ($(".btn-apply-filter").addClass("disabled"),
            l) {
                i.value = Math.floor(n),
                $("#min-price-select").find("option").show();
                var a = parseInt($("#max-price-select").find("option:selected").val());
                $("#min-price-select").find("option:eq(" + a + ")").nextAll().hide()
            } else {
                e.value = Math.floor(n),
                $("#max-price-select").find("option").show();
                var a = $("#min-price-select").find("option:selected").val() >= 0 ? $("#min-price-select").find("option:selected").val() : 1;
                $("#max-price-select").find("option:eq(" + a + ")").prevAll().hide()
            }
        }),
        t.noUiSlider.on("set", function(e, i) {
            e[i],
            i ? $("#min-price-select").trigger("change") : $("#max-price-select").trigger("change"),
            convertCurrencies()
        }),
        i.addEventListener("change", function() {
            t.noUiSlider.set([null, this.value]),
            $("#min-price-select").find("option").show();
            var e = parseInt($("#max-price-select").find("option:selected").val());
            $("#min-price-select").find("option:eq(" + e + ")").nextAll().hide(),
            convertCurrencies()
        }),
        e.addEventListener("change", function() {
            t.noUiSlider.set([this.value, null]),
            $("#max-price-select").find("option").show();
            var e = $("#min-price-select").find("option:selected").val() >= 0 ? $("#min-price-select").find("option:selected").val() : 1;
            $("#max-price-select").find("option:eq(" + e + ")").prevAll().hide(),
            convertCurrencies()
        })
    }
}
function initMultipleTypeForm() {
    $(".inquiry-condition[data-inquiry=sales]").css({
        display: "block"
    });
    var e = "Sales Inquiry";
    $('.inquiry-wrap select[name="00N5g000003tIus"]').change(function() {
        e = $(this).val(),
        "Sales Inquiry" === this.value ? ($(".inquiry-condition").css({
            display: "block"
        }),
        $(".inquiry-label").css({
            display: "none"
        }),
        $(".inquiry-label[data-inquiry=sales]").css({
            display: "inline-block"
        }),
        $("#allowedCRF").closest(".input-wrap").css({
            display: "block"
        })) : "Leasing Inquiry" === this.value ? ($(".inquiry-condition").css({
            display: "block"
        }),
        $(".inquiry-label").css({
            display: "none"
        }),
        $(".inquiry-label[data-inquiry=sales]").css({
            display: "inline-block"
        }),
        $("#allowedCRF").closest(".input-wrap").css({
            display: "none"
        })) : "Careers" === this.value ? ($(".inquiry-condition").css({
            display: "none"
        }),
        $(".inquiry-condition[data-inquiry=career]").css({
            display: "inline-block"
        }),
        $("#allowedCRF").closest(".input-wrap").css({
            display: "none"
        })) : "Customer Care Concern" === this.value ? ($(".inquiry-condition").css({
            display: "block"
        }),
        $(".inquiry-label").css({
            display: "none"
        }),
        $(".inquiry-label[data-inquiry=customer-care]").css({
            display: "inline-block"
        }),
        $("#allowedCRF").closest(".input-wrap").css({
            display: "none"
        })) : ($(".inquiry-condition").css({
            display: "none"
        }),
        $("#allowedCRF").closest(".input-wrap").css({
            display: "none"
        }))
    }),
    $("#thankyou-close").click(function(e) {
        e.preventDefault(),
        $.fancybox.close("#thankyou")
    }),
    $("#error-close").click(function(e) {
        e.preventDefault(),
        $.fancybox.close("#error-inquiry"),
        $("#multi-type-inquiry")[0].reset(),
        $("#contact-form").removeClass("loading-form")
    });
    var i = !1
      , t = !1;
    $("#agreedToDPA").change(function() {
        i = !!$(this).is(":checked")
    }),
    $("#allowedCRF").change(function() {
        t = !!$(this).is(":checked")
    }),
    $("#submit-contact-form").click(function(t) {
        t.preventDefault();
        var l = $("#00N5g000003tnlz").val().length
          , n = !1;
        return ($(".custom-multi-select").removeClass("error"),
        $(".input-wrap").removeClass("error"),
        $(".btn-group").removeClass("error"),
        "" === $("#first_name").val() && ($("#first_name").closest(".input-wrap").addClass("error"),
        n = !0),
        "" === $("#last_name").val() && ($("#last_name").closest(".input-wrap").addClass("error"),
        n = !0),
        "" !== $("#email").val() && IsEmail($("#email").val()) || ($("#email").closest(".input-wrap").addClass("error"),
        n = !0),
        ("" == $("#00N5g000003tnlz").val() || l <= 5) && ($("#00N5g000003tnlz").closest(".input-wrap").addClass("error"),
        n = !0),
        "" == $("#00N5g000003tIvCEAU").val() && ($("#00N5g000003tIvCEAU").closest(".input-wrap").addClass("error"),
        n = !0),
        "" == $("#00N5g000003tnOR").val() && ($("#00N5g000003tnOR").closest(".input-wrap").addClass("error"),
        n = !0),
        "" == $("#00N5g000003tnnR").val() && ($("#00N5g000003tnnR").closest(".input-wrap").addClass("error"),
        n = !0),
        "" == $("#00N5g000003tIux").val() && ($("#00N5g000003tIux").closest(".input-wrap").addClass("error"),
        n = !0),
        0 == grecaptcha.getResponse().length) ? ($("#captchacode").closest(".input-wrap").addClass("error"),
        n = !0,
        evt.preventDefault(),
        !1) : (!1 == i && ($("#agreedToDPA").closest(".input-wrap").addClass("error"),
        n = !0),
        "Sales Inquiry" == e || "Leasing Inquiry" == e ? "" == $("#00N5g000009mqi9").val && (console.log("error"),
        $("#00N5g000009mqi9").closest(".custom-select").addClass("error"),
        n = !0) : "Customer Care Concern" == e && "" == $("#00N5g000009mqi9").val && ($("#00N5g000009mqi9").closest(".custom-select").addClass("error"),
        n = !0),
        n) ? void $("#all-field").addClass("error") : ($("#multi-type-inquiry")[0],
        $("#contact-form").addClass("loading-form"),
        $("#multi-type-inquiry").submit(),
        setTimeout(function() {
            return $("#multi-type-inquiry")[0].reset(),
            $("#contact-form").removeClass("loading-form"),
            !0
        }, 2e3),
        !0)
    })
}
function initializeNoUiHome() {
    var e = document.getElementById("noUiSlider")
      , i = document.getElementById("first-mil")
      , t = document.getElementById("second-mil")
      , l = document.getElementById("first-mil-label")
      , n = document.getElementById("second-mil-label");
    document.getElementById("qs-price-mobile-min"),
    document.getElementById("qs-price-mobile-max");
    var a = document.getElementById("noUiSlider-budget")
      , o = document.getElementById("budget-min-price")
      , r = document.getElementById("budget-max-price");
    $("#noUiSlider-budget").length > 0 && (noUiSlider.create(a, {
        start: [5, 90],
        connect: !0,
        format: wNumb({
            decimals: 0
        }),
        range: {
            min: 5,
            max: 90
        }
    }),
    a.noUiSlider.on("update", function(e, i) {
        $(r).html(Math.floor(e[1])),
        $(o).html(Math.floor(e[0])),
        $("#budget-min-price-label").html(Math.floor(e[0])),
        $("#budget-max-price-label").html(Math.floor(e[1]))
    })),
    $(".banner-filter-bottom").length > 0 && (noUiSlider.create(e, {
        start: [0, 40],
        connect: !0,
        format: wNumb({
            decimals: 0
        }),
        range: {
            min: 0,
            max: 20
        }
    }),
    e.noUiSlider.on("update", function(e, a) {
        var o = e[a]
          , r = getCurrencyMultiplier()
          , s = getCurrencyCode();
        if (a) {
            if (0 == o) {
                var c = Math.floor(o) + 1;
                $(t).html(c),
                n.innerHTML = s + " " + (c * r).toLocaleString(void 0, {
                    maximumFractionDigits: 2
                }),
                n.setAttribute("data-value", c),
                n.html()
            } else
                $(t).html(Math.floor(o)),
                n.innerHTML = s + " " + (Math.floor(o) * r).toLocaleString(void 0, {
                    maximumFractionDigits: 2
                }),
                n.setAttribute("data-value", Math.floor(o))
        } else if (0 == o) {
            var c = Math.floor(o) + 1;
            $(i).html(Math.floor(o) + 1),
            l.innerHTML = s + " " + (c * r).toLocaleString(void 0, {
                maximumFractionDigits: 2
            }),
            l.setAttribute("data-value", Math.floor(o) + 1)
        } else
            $(i).html(Math.floor(o)),
            l.innerHTML = s + " " + (Math.floor(o) * r).toLocaleString(void 0, {
                maximumFractionDigits: 2
            }),
            l.setAttribute("data-value", o)
    }),
    new SelectPure(".bfb-autocomplete",{
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
        onChange: function(e) {
            $("#header-search-unit-type").val(e.join()),
            $(".bfb-autocomplete .select-pure__label").children(".select-pure__selected-label").length > 0 ? $(".bfb-autocomplete").addClass("removePlaceholder") : $(".bfb-autocomplete").removeClass("removePlaceholder")
        }
    }))
}
$(document).ready(function() {
    initializeNoUiHome(),
    initializeSlider(),
    initMultipleTypeForm()
}),
function(e, i, t) {
    var l = e.querySelectorAll(".inputfile");
    Array.prototype.forEach.call(l, function(e) {
        var i = e.nextElementSibling
          , t = i.innerHTML;
        e.addEventListener("change", function(e) {
            var l = "";
            (l = this.files && this.files.length > 1 ? (this.getAttribute("data-multiple-caption") || "").replace("{count}", this.files.length) : e.target.value.split("\\").pop()) ? i.querySelector("span").innerHTML = l : i.innerHTML = t
        }),
        e.addEventListener("focus", function() {
            e.classList.add("has-focus")
        }),
        e.addEventListener("blur", function() {
            e.classList.remove("has-focus")
        })
    })
}(document, window, 0);

//Custom JS
var timer, windowWidth = 0, windowHeight = 0, headerHeight = 0, assetArray = [], dmci = {
    debug: !1,
    browser: "",
    isMobile: "",
    os: "",
    browserdetect: function() {
        var e = {
            init: function() {
                this.browser = this.fhString(this.dataBrowser) || "Other",
                this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown",
                $("html").addClass(e.browser)
            },
            searchString: function(e) {
                for (var t = 0; t < e.length; t++) {
                    var i = e[t].string;
                    if (this.versionSearchString = e[t].subString,
                    -1 !== i.indexOf(e[t].subString))
                        return e[t].identity
                }
            },
            searchVersion: function(e) {
                var t = e.indexOf(this.versionSearchString);
                if (-1 !== t) {
                    var i = e.indexOf("rv:");
                    return "Trident" === this.versionSearchString && -1 !== i ? parseFloat(e.substring(i + 3)) : parseFloat(e.substring(t + this.versionSearchString.length + 1))
                }
            },
            dataBrowser: [{
                string: navigator.userAgent,
                subString: "Edge",
                identity: "ms-edge"
            }, {
                string: navigator.userAgent,
                subString: "MSIE",
                identity: "explorer"
            }, {
                string: navigator.userAgent,
                subString: "Trident",
                identity: "explorer"
            }, {
                string: navigator.userAgent,
                subString: "Firefox",
                identity: "firefox"
            }, {
                string: navigator.userAgent,
                subString: "Opera",
                identity: "opera"
            }, {
                string: navigator.userAgent,
                subString: "OPR",
                identity: "opera"
            }, {
                string: navigator.userAgent,
                subString: "Chrome",
                identity: "chrome"
            }, {
                string: navigator.userAgent,
                subString: "Safari",
                identity: "safari"
            }]
        };
        e.init(),
        e.browser = e.browser
    },
    mobiledetect: function() {
        var e = {
            Android: function() {
                return navigator.userAgent.match(/Android/i)
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i)
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i)
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i)
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i)
            },
            any: function() {
                return e.Android() || e.BlackBerry() || e.iOS() || e.Opera() || e.Windows()
            }
        };
        dmci.isMobile = e.any(),
        dmci.isMobile ? ($("html").addClass("bp-touch"),
        $(".desktop-only").remove()) : $(".mobile-only").remove()
    },
    osdetect: function() {
        var e = window.navigator.userAgent
          , t = window.navigator.platform
          , i = null;
        -1 !== ["Macintosh", "MacIntel", "MacPPC", "Mac68K"].indexOf(t) ? i = "mac-os" : -1 !== ["iPhone", "iPad", "iPod"].indexOf(t) ? i = "ios" : -1 !== ["Win32", "Win64", "Windows", "WinCE"].indexOf(t) ? i = "windows" : /Android/.test(e) ? i = "android" : !i && /Linux/.test(t) && (i = "linux"),
        dmci.os = i,
        $("html").addClass(i)
    },
    entranceAnimation: function() {
        $(window).width() > 768 ? $(".animated").appear(function() {
            var e = $(this)
              , t = e.data("animation")
              , i = e.data("delay");
            i ? setTimeout(function() {
                e.addClass(t + " visible"),
                e.removeClass("hiding")
            }, i) : (e.addClass(t + " visible"),
            e.removeClass("hiding"))
        }, {
            accY: -90
        }) : $(".hiding").css({
            opacity: 1
        })
    },
    menu: function() {
        $(".hamburger-menu").click(function(e) {
            e.preventDefault();
            var t = $(this);
            t.hasClass("active") ? ($("html,body").removeClass("hidden"),
            $(".sidebar-menu").removeClass("slide-left"),
            t.removeClass("active"),
            $(".nav").removeClass("slide")) : ($("html,body").addClass("hidden"),
            $(".sidebar-menu").addClass("slide-left"),
            t.addClass("active"),
            $(".nav").addClass("slide"))
        })
    },
    resize: function() {
        return function() {
            windowWidth = $(window).width(),
            windowHeight = $(window).height(),
            headerHeight = $("header").outerHeight(),
            footerHeight = $("footer").outerHeight();
            footerHeight
        }(),
        this
    },
    openSearch: function() {
        $(".search-icon").click(function(e) {
            return $(this).hasClass("activated") ? (e.stopPropagation(),
            $(this).addClass("activated"),
            $('.search-icon input[type="text"]').focus(),
            !0) : (e.preventDefault(),
            e.stopPropagation(),
            $(this).addClass("activated"),
            $('.search-icon input[type="text"]').focus(),
            !1)
        })
    },
    coverImage: function(e) {
        var t = {
            init: function() {
                $(".coverimage-img img").each(function() {
                    t.calculate($(this))
                })
            },
            calculate: function(e) {
                var t = e
                  , i = t.attr("width")
                  , a = t.attr("height");
                t.width(0).height(0);
                var s = e.parent()
                  , n = s.width()
                  , o = s.height();
                if (o > 1) {
                    var r = i / a;
                    r > n / o ? (a = o,
                    i = o * r,
                    t.css({
                        "margin-top": 0,
                        "margin-left": Math.ceil((n - i) / 2),
                        width: Math.ceil(i),
                        height: Math.ceil(a)
                    })) : (i = n,
                    a = n / r,
                    t.css({
                        "margin-top": Math.ceil((o - a) / 2),
                        "margin-left": 0,
                        width: Math.ceil(i),
                        height: Math.ceil(a)
                    }))
                } else
                    t.css({
                        "margin-top": 0,
                        "margin-left": 0,
                        width: "auto",
                        height: "auto"
                    })
            }
        };
        t.init()
    },
    accordion: function(e, t) {
        var i = $(e).first()
          , a = $(e).first().siblings(t)
          , s = $(i).find("span:nth-of-type(2)");
        a.show(),
        s.addClass("rotate"),
        $(e).on("click", function(t) {
            $(e).index(this);
            var i = $(this).siblings(i)
              , a = $(this).find(".icon-right-arrow");
            a.hasClass("rotate") ? ($(".accor-content-wrapper").slideUp(300),
            $(".accor-header .icon-right-arrow").removeClass("rotate"),
            i.slideUp(200),
            a.removeClass("rotate")) : ($(".accor-content-wrapper").slideUp(300),
            $(".accor-header .icon-right-arrow").removeClass("rotate"),
            i.stop(!0, !1).slideDown(200),
            a.addClass("rotate"))
        })
    },
    accordionMobile: function(e, t) {
        if ($(window).width() <= 767) {
            var i = $(e).first()
              , a = $(e).first().siblings(t)
              , s = $(i).find("span:nth-of-type(2)");
            a.show(),
            s.addClass("rotate"),
            $(e).on("click", function(t) {
                var i = $(e).index(this)
                  , a = $(this).siblings(a)
                  , s = $(this).find("span:nth-of-type(2)");
                $(e).not(i).each(function() {
                    $(e).siblings(a).slideUp()
                }),
                a.slideDown(200),
                s.toggleClass("rotate"),
                a.is(":visible") && $(e).on("click", function(e) {
                    $(this).siblings(a).clearQueue().stop().slideDown()
                })
            })
        }
    },
    scrolltoDiv: function(e) {
        var t = $(e).offset().top;
        $("header").outerHeight(!1);
        $("body, html").animate({
            scrollTop: t + 5
        }, 500)
    },
    updateNav: function() {
        var e, t = window.innerHeight ? window.innerHeight : $(window).height(), i = ($("header").outerHeight(!1),
        $(window).scrollTop()), a = $(".rightbar-nav").find("li");
        $(".jq-section").each(function(s, n) {
            var o = t / 2;
            $(this).offset().top - o <= i && (currentText = a.find('a[href="#' + $(this).attr("id") + '"]').text(),
            e = a.find('a[href="#' + $(this).attr("id") + '"]'),
            a.children("a").parent("li").removeClass("active"),
            e.parent("li").addClass("active"),
            $(".sec-active-text span").html(currentText))
        })
    },
    clickable: function() {
        $(".banner-arrow").click(function(e) {
            e.preventDefault();
            var t = $(this).attr("href");
            dmci.scrolltoDiv(t)
        }),
        $(".jq-skip").click(function(e) {
            e.preventDefault(),
            $("#main-container").removeClass("overlay")
        }),
        $(".mobile-search").click(function(e) {
            e.preventDefault(),
            $(".search-mobile").addClass("activated")
        }),
        $(".mobile-filter-trigger").click(function(e) {
            e.preventDefault(),
            $(".search-mobile").addClass("activated")
        }),
        $(".jq-close").click(function(e) {
            e.preventDefault(),
            $(this).closest(".activated").removeClass("activated"),
            $("body").removeClass("hidden"),
            $(".main-nav li").removeClass("active"),
            $(".sidebar-menu").removeClass("slide-left"),
            $(".hamburger-menu").removeClass("active"),
            $(".nav").removeClass("slide")
        }),
        $(".property-finder .jq-close").click(function(e) {
            e.preventDefault(),
            $(".filter-trigger").removeClass("btn-selected"),
            $(".ff-dropdown-wrap").removeClass("active"),
            $(".sec-pad:not(.property-finder)").removeClass("overlay"),
            $(".property-finder").removeClass("box-shadow"),
            $(".tform").css({
                display: "none"
            })
        }),
        $(".customer-care-filter-link").click(function(e) {
            e.preventDefault(),
            $(".customer-care-mobile").addClass("activated"),
            $(".customer-care-mobile .btn-advance-search").click()
        }),
        $(".rightbar-nav ul li > a").click(function() {
            var e = $(this);
            $targetDiv = $(e.attr("href")),
            $targetText = e.text(),
            $(".rightbar-nav ul li").removeClass("active"),
            e.parent().addClass("active"),
            $(window).width() > 991 ? dmci.scrolltoDiv($targetDiv) : ($(".rightbar-nav").find("ul").removeClass("active"),
            $(".sec-active-text span").html($targetText),
            dmci.scrolltoDiv($targetDiv))
        }),
        $(document).on("click", ".multiselect-native-select button.multiselect.dropdown-toggle", function(e) {
            e.preventDefault(),
            e.stopPropagation(),
            $(this).hasClass("active") ? ($(this).removeClass("active"),
            $(this).closest(".multiselect-native-select").find(".dropdown-menu").slideUp(300)) : ($(this).addClass("active"),
            $(this).closest(".multiselect-native-select").find(".dropdown-menu").slideDown(300))
        }),
        $(document).keyup(function(e) {
            "Escape" === e.key && $(".jq-close").click()
        }),
        $(".main-nav li.has-sub > a").click(function(e) {
            e.preventDefault(),
            $(".property-nav").addClass("activated"),
            $(this).closest("li").addClass("active")
        }),
        $(".add-property").click(function(e) {
            e.preventDefault(),
            $(".property-nav").addClass("activated")
        }),
        $(".footer-link h4").click(function(e) {
            e.preventDefault(),
            $(".footer-link ul").slideDown(300)
        }),
        $(".dropdown a").on("click", function(e) {
            e.preventDefault(),
            $(this).closest(".dropdown").hasClass("active") ? ($(".dropdown ul").slideUp("fast"),
            $(this).closest(".dropdown").removeClass("active")) : ($(".dropdown").removeClass("active"),
            $(".dropdown ul").slideUp("fast"),
            $(this).closest(".dropdown").addClass("active"),
            $(this).closest(".dropdown").find("ul").stop(!0, !0).slideDown("fast"))
        }),
        $(".dropdown ul li a").on("click", function(e) {
            e.preventDefault(),
            $(this).closest(".dropdown").find("ul").hide()
        }),
        $(document).bind("click", function(e) {
            $(e.target).parents().hasClass("dropdown") || $(".dropdown ul").hide()
        }),
        $('.mutliSelect input[type="checkbox"]').on("click", function() {
            var e = $(this).closest(".mutliSelect").find('input[type="checkbox"]').val();
            e = $(this).val() + ",";
            if ($(this).is(":checked")) {
                var t = '<span title="' + e + '">' + e + "</span>";
                $(this).closest(".dropdown").find(".multiSel").append(t),
                $(this).closest(".dropdown").find(".hida").hide()
            } else {
                $(this).closest(".dropdown").find('span[title="' + e + '"]').remove();
                $(".hida")
            }
        }),
        $(".rightbar-nav").length > 0 && $(window).width() < 768 && $("footer").css({
            "margin-bottom": "56px"
        }),
        $(".jq-section-form").click(function(e) {
            e.preventDefault(),
            $targetDiv = $(this).attr("href"),
            dmci.scrolltoDiv($targetDiv),
            $("#inquiry-type").val(5).trigger("change"),
            $(".hamburger-menu").hasClass("active") && $(".hamburger-menu").click()
        }),
        $(".jq-sec").click(function(e) {
            if (e.preventDefault(),
            $(this).closest(".manual-filter").length > 0) {
                var t = $(this).attr("href")
                  , i = $(t).offset().top;
                $("header").outerHeight(!1);
                $("body, html").animate({
                    scrollTop: i - 40
                }, 500)
            } else
                $targetDiv = $(this).attr("href"),
                dmci.scrolltoDiv($targetDiv)
        }),
        $(".search-mobile .btn-advance-search").click(function(e) {
            $(this).hide(),
            $(".for-advance-search").show()
        }),
        $(".search-mobile ul li a.btn").click(function(e) {
            e.preventDefault(),
            $(this).closest("input-wrap").hasClass("multi-select") ? $(this).removeClass("active") : $(this).hasClass("active") ? $(this).removeClass("active") : ($(this).closest(".input-wrap:not(.multi-select)").find("li a").removeClass("active"),
            $(this).addClass("active"))
        }),
        $(".customer-care-mobile .btn-advance-search").click(function(e) {
            $(this).hasClass("active") ? ($(".for-advance-search").hide(),
            $(this).text("Hide Advance Search")) : ($(".for-advance-search").show(),
            $(this).text("Show Advance Search"))
        }),
        $(".customer-care-mobile ul li a.btn").click(function(e) {
            e.preventDefault(),
            $(this).closest("input-wrap").hasClass("multi-select") ? $(this).removeClass("active") : $(this).hasClass("active") ? $(this).removeClass("active") : ($(this).closest(".input-wrap:not(.multi-select)").find("li a").removeClass("active"),
            $(this).addClass("active"))
        }),
        $('.looking-type input[type="radio"]').click(function() {
            var e = $(this).val();
            $("#rf-rent").is(":checked") ? ($(".col-md-4:not(.not-this), .col-md-6").addClass("hide"),
            $(".col-md-4[data-filter=" + e + "], .col-md-6[data-filter=" + e + "]").removeClass("hide"),
            $(".btn-advance-search").hide()) : ($(".col-md-4:not(.not-this), .col-md-6").removeClass("hide"),
            $(".btn-advance-search").show())
        }),
        $(".sec-active-text").click(function(e) {
            e.preventDefault(),
            $(this).closest(".rightbar-nav").find("ul").addClass("active")
        })
    },
    siteProgress: function() {
        $(".site-progress-item").each(function() {
            var e = $(this).data("progress")
              , t = 0
              , i = (t = 0 == e ? 0 : e < 40 && e > 35 ? 40 : 5 * Math.ceil(e / 5)) > 100 ? 100 : t;
            $(this).addClass("spi-" + i)
        })
    },
    tooltip: function() {
        $(".jq-with-tooltip").click(function(e) {
            e.preventDefault(),
            clearTimeout(timer),
            $(".channel-tooltips").removeClass("active"),
            $(this).closest("li").css({
                "z-index": "99"
            }).find(".channel-tooltips").addClass("active")
        })
    },
    init: function() {
        dmci.entranceAnimation(),
        dmci.coverImage(),
        dmci.resize(),
        dmci.menu(),
        dmci.openSearch(),
        dmci.clickable(),
        dmci.accordion(".accor-header", ".accor-content-wrapper"),
        dmci.accordionMobile(".banner-header", ".banner-details"),
        dmci.accordionMobile(".innovation-header", ".innovation-details")
    }
};
dmci.init(),
$(".js-mobile-custom-dropdown li a").click(function() {
    var e = $(this).text();
    $(this);
    $(".js-mobile-custom-dropdown ul li").removeClass("selected"),
    $(this).parent().addClass("selected"),
    $(this).closest("ul").siblings("span.selected").html(e),
    $(this).closest("ul").slideUp(150),
    $(this).children("ul").stop(!0, !1).slideToggle(150),
    $(".js-mobile-custom-dropdown").addClass("active")
}),
$(".js-mobile-custom-dropdown").click(function(e) {
    e.stopPropagation(),
    $(this).hasClass("active") ? ($(".js-mobile-custom-dropdown").removeClass("active"),
    $(this).children("ul").stop(!0, !1).slideToggle(150)) : ($(".js-mobile-custom-dropdown").addClass("active"),
    $(this).children("ul").stop(!0, !1).slideDown(150))
}),
$(document).on("click", function() {
    $(".search-icon").hasClass("activated") && $(".search-icon").removeClass("activated"),
    $(".js-mobile-custom-dropdown").hasClass("active") && ($(".js-mobile-custom-dropdown").removeClass("active"),
    $(".js-mobile-custom-dropdown").children("ul").stop(!0, !1).slideToggle(150)),
    $("button.multiselect.dropdown-toggle").hasClass("active") && ($("button.multiselect.dropdown-toggle").removeClass("active"),
    $(".dropdown-menu").slideUp(300))
}),
$(document).on({
    mouseenter: function() {
        clearTimeout(timer),
        $(".js-custom-dropdown-menu", this).slideDown(150)
    },
    mouseleave: function() {
        timer = setTimeout(function() {
            $(".js-mobile-custom-dropdown").removeClass("active"),
            $(".js-custom-dropdown-menu").slideUp(150)
        }, 1500)
    }
}, ".js-custom-dropdown-menu"),
$(document).ready(function() {
    $("[data-fancybox]").fancybox({
        maxWidth: 1055,
        maxHeight: 600,
        autoSize: !1,
        toolbar: !0,
        gutter: 20,
        touch: !1,
        fitToView: !1,
        clickContent: !1,
        afterClose: function() {}
    }),
    $("[data-fancybox-loc]").fancybox({
        maxWidth: 1055,
        maxHeight: 600,
        autoSize: !1,
        toolbar: !0,
        gutter: 20,
        touch: !1,
        fitToView: !1,
        clickContent: !1
    }),
    $("[data-fancybox-image-qr]").fancybox({
        maxWidth: 600,
        maxHeight: 600,
        autoSize: !1,
        toolbar: !0,
        gutter: 0,
        touch: !1,
        idleTime: !1,
        clickContent: !1,
        afterClose: function() {}
    }),
    $(window).width() < 992 && $(".fetching-loader").remove()
}),
$(window).on("resize", function() {
    dmci.resize(),
    dmci.coverImage()
}),
$(window).on("scroll load resize", function() {
    dmci.updateNav()
});
