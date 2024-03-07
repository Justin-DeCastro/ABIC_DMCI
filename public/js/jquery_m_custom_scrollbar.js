!function(a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : "undefined" != typeof module && module.exports ? module.exports = a : a(jQuery, window, document)
}(function($) {
    !function(a) {
        var b = "function" == typeof define && define.amd
          , c = "undefined" != typeof module && module.exports
          , d = "https:" == document.location.protocol ? "https:" : "http:";
        !b && (c ? require("jquery-mousewheel")($) : $.event.special.mousewheel || $("head").append(decodeURI("%3Cscript src=" + d + "//cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js%3E%3C/script%3E"))),
        a()
    }(function() {
        var c, a = "mCustomScrollbar", d = ".mCustomScrollbar", b = {
            setTop: 0,
            setLeft: 0,
            axis: "y",
            scrollbarPosition: "inside",
            scrollInertia: 950,
            autoDraggerLength: !0,
            alwaysShowScrollbar: 0,
            snapOffset: 0,
            mouseWheel: {
                enable: !0,
                scrollAmount: "auto",
                axis: "y",
                deltaFactor: "auto",
                disableOver: ["select", "option", "keygen", "datalist", "textarea"]
            },
            scrollButtons: {
                scrollType: "stepless",
                scrollAmount: "auto"
            },
            keyboard: {
                enable: !0,
                scrollType: "stepless",
                scrollAmount: "auto"
            },
            contentTouchScroll: 25,
            documentTouchScroll: !0,
            advanced: {
                autoScrollOnFocus: "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
                updateOnContentResize: !0,
                updateOnImageLoad: "auto",
                autoUpdateTimeout: 60
            },
            theme: "light",
            callbacks: {
                onTotalScrollOffset: 0,
                onTotalScrollBackOffset: 0,
                alwaysTriggerOffsets: !0
            }
        }, e = 0, f = {}, g = window.attachEvent && !window.addEventListener ? 1 : 0, h = !1, i = ["mCSB_dragger_onDrag", "mCSB_scrollTools_onDrag", "mCS_img_loaded", "mCS_disabled", "mCS_destroyed", "mCS_no_scrollbar", "mCS-autoHide", "mCS-dir-rtl", "mCS_no_scrollbar_y", "mCS_no_scrollbar_x", "mCS_y_hidden", "mCS_x_hidden", "mCSB_draggerContainer", "mCSB_buttonUp", "mCSB_buttonDown", "mCSB_buttonLeft", "mCSB_buttonRight"], j = {
            init: function(a) {
                var a = $.extend(!0, {}, b, a)
                  , g = k.call(this);
                if (a.live) {
                    var c = a.liveSelector || this.selector || d
                      , h = $(c);
                    if ("off" === a.live) {
                        m(c);
                        return
                    }
                    f[c] = setTimeout(function() {
                        h.mCustomScrollbar(a),
                        "once" === a.live && h.length && m(c)
                    }, 500)
                } else
                    m(c);
                return a.setWidth = a.set_width ? a.set_width : a.setWidth,
                a.setHeight = a.set_height ? a.set_height : a.setHeight,
                a.axis = a.horizontalScroll ? "x" : n(a.axis),
                a.scrollInertia = a.scrollInertia > 0 && a.scrollInertia < 17 ? 17 : a.scrollInertia,
                "object" != typeof a.mouseWheel && !0 == a.mouseWheel && (a.mouseWheel = {
                    enable: !0,
                    scrollAmount: "auto",
                    axis: "y",
                    preventDefault: !1,
                    deltaFactor: "auto",
                    normalizeDelta: !1,
                    invert: !1
                }),
                a.mouseWheel.scrollAmount = a.mouseWheelPixels ? a.mouseWheelPixels : a.mouseWheel.scrollAmount,
                a.mouseWheel.normalizeDelta = a.advanced.normalizeMouseWheelDelta ? a.advanced.normalizeMouseWheelDelta : a.mouseWheel.normalizeDelta,
                a.scrollButtons.scrollType = o(a.scrollButtons.scrollType),
                l(a),
                $(g).each(function() {
                    var b = $(this);
                    if (!b.data("mCS")) {
                        b.data("mCS", {
                            idx: ++e,
                            opt: a,
                            scrollRatio: {
                                y: null,
                                x: null
                            },
                            overflowed: null,
                            contentReset: {
                                y: null,
                                x: null
                            },
                            bindEvents: !1,
                            tweenRunning: !1,
                            sequential: {},
                            langDir: b.css("direction"),
                            cbOffsets: null,
                            trigger: null,
                            poll: {
                                size: {
                                    o: 0,
                                    n: 0
                                },
                                img: {
                                    o: 0,
                                    n: 0
                                },
                                change: {
                                    o: 0,
                                    n: 0
                                }
                            }
                        });
                        var d = b.data("mCS")
                          , c = d.opt
                          , f = b.data("mcs-axis")
                          , g = b.data("mcs-scrollbar-position")
                          , h = b.data("mcs-theme");
                        f && (c.axis = f),
                        g && (c.scrollbarPosition = g),
                        h && (c.theme = h,
                        l(c)),
                        p.call(this),
                        d && c.callbacks.onCreate && "function" == typeof c.callbacks.onCreate && c.callbacks.onCreate.call(this),
                        $("#mCSB_" + d.idx + "_container img:not(." + i[2] + ")").addClass(i[2]),
                        j.update.call(null, b)
                    }
                })
            },
            update: function(a, c) {
                var b = a || k.call(this);
                return $(b).each(function() {
                    var d = $(this);
                    if (d.data("mCS")) {
                        var b = d.data("mCS")
                          , a = b.opt
                          , e = $("#mCSB_" + b.idx + "_container")
                          , h = $("#mCSB_" + b.idx)
                          , f = [$("#mCSB_" + b.idx + "_dragger_vertical"), $("#mCSB_" + b.idx + "_dragger_horizontal")];
                        if (!e.length)
                            return;
                        b.tweenRunning && T(d),
                        c && b && a.callbacks.onBeforeUpdate && "function" == typeof a.callbacks.onBeforeUpdate && a.callbacks.onBeforeUpdate.call(this),
                        d.hasClass(i[3]) && d.removeClass(i[3]),
                        d.hasClass(i[4]) && d.removeClass(i[4]),
                        h.css("max-height", "none"),
                        h.height() !== d.height() && h.css("max-height", d.height()),
                        r.call(this),
                        "y" === a.axis || a.advanced.autoExpandHorizontalScroll || e.css("width", q(e)),
                        b.overflowed = w.call(this),
                        A.call(this),
                        a.autoDraggerLength && t.call(this),
                        u.call(this),
                        y.call(this);
                        var g = [Math.abs(e[0].offsetTop), Math.abs(e[0].offsetLeft)];
                        "x" !== a.axis && (b.overflowed[0] ? f[0].height() > f[0].parent().height() ? x.call(this) : (U(d, g[0].toString(), {
                            dir: "y",
                            dur: 0,
                            overwrite: "none"
                        }),
                        b.contentReset.y = null) : (x.call(this),
                        "y" === a.axis ? z.call(this) : "yx" === a.axis && b.overflowed[1] && U(d, g[1].toString(), {
                            dir: "x",
                            dur: 0,
                            overwrite: "none"
                        }))),
                        "y" !== a.axis && (b.overflowed[1] ? f[1].width() > f[1].parent().width() ? x.call(this) : (U(d, g[1].toString(), {
                            dir: "x",
                            dur: 0,
                            overwrite: "none"
                        }),
                        b.contentReset.x = null) : (x.call(this),
                        "x" === a.axis ? z.call(this) : "yx" === a.axis && b.overflowed[0] && U(d, g[0].toString(), {
                            dir: "y",
                            dur: 0,
                            overwrite: "none"
                        }))),
                        c && b && (2 === c && a.callbacks.onImageLoad && "function" == typeof a.callbacks.onImageLoad ? a.callbacks.onImageLoad.call(this) : 3 === c && a.callbacks.onSelectorChange && "function" == typeof a.callbacks.onSelectorChange ? a.callbacks.onSelectorChange.call(this) : a.callbacks.onUpdate && "function" == typeof a.callbacks.onUpdate && a.callbacks.onUpdate.call(this)),
                        S.call(this)
                    }
                })
            },
            scrollTo: function(a, b) {
                if (void 0 !== a && null != a)
                    return $(k.call(this)).each(function() {
                        var f = $(this);
                        if (f.data("mCS")) {
                            var e = f.data("mCS")
                              , g = e.opt
                              , h = {
                                trigger: "external",
                                scrollInertia: g.scrollInertia,
                                scrollEasing: "mcsEaseInOut",
                                moveDragger: !1,
                                timeout: 60,
                                callbacks: !0,
                                onStart: !0,
                                onUpdate: !0,
                                onComplete: !0
                            }
                              , c = $.extend(!0, {}, h, b)
                              , d = Q.call(this, a)
                              , i = c.scrollInertia > 0 && c.scrollInertia < 17 ? 17 : c.scrollInertia;
                            d[0] = R.call(this, d[0], "y"),
                            d[1] = R.call(this, d[1], "x"),
                            c.moveDragger && (d[0] *= e.scrollRatio.y,
                            d[1] *= e.scrollRatio.x),
                            c.dur = ac() ? 0 : i,
                            setTimeout(function() {
                                null !== d[0] && void 0 !== d[0] && "x" !== g.axis && e.overflowed[0] && (c.dir = "y",
                                c.overwrite = "all",
                                U(f, d[0].toString(), c)),
                                null !== d[1] && void 0 !== d[1] && "y" !== g.axis && e.overflowed[1] && (c.dir = "x",
                                c.overwrite = "none",
                                U(f, d[1].toString(), c))
                            }, c.timeout)
                        }
                    })
            },
            stop: function() {
                return $(k.call(this)).each(function() {
                    var a = $(this);
                    a.data("mCS") && T(a)
                })
            },
            disable: function(a) {
                return $(k.call(this)).each(function() {
                    var b = $(this);
                    b.data("mCS") && (b.data("mCS"),
                    S.call(this, "remove"),
                    z.call(this),
                    a && x.call(this),
                    A.call(this, !0),
                    b.addClass(i[3]))
                })
            },
            destroy: function() {
                var b = k.call(this);
                return $(b).each(function() {
                    var d = $(this);
                    if (d.data("mCS")) {
                        var c = d.data("mCS")
                          , e = c.opt
                          , g = $("#mCSB_" + c.idx)
                          , f = $("#mCSB_" + c.idx + "_container")
                          , h = $(".mCSB_" + c.idx + "_scrollbar");
                        e.live && m(e.liveSelector || $(b).selector),
                        S.call(this, "remove"),
                        z.call(this),
                        x.call(this),
                        d.removeData("mCS"),
                        Y(this, "mcs"),
                        h.remove(),
                        f.find("img." + i[2]).removeClass(i[2]),
                        g.replaceWith(f.contents()),
                        d.removeClass(a + " _mCS_" + c.idx + " " + i[6] + " " + i[7] + " " + i[5] + " " + i[3]).addClass(i[4])
                    }
                })
            }
        }, k = function() {
            return "object" != typeof $(this) || $(this).length < 1 ? d : this
        }, l = function(a) {
            a.autoDraggerLength = !($.inArray(a.theme, ["rounded", "rounded-dark", "rounded-dots", "rounded-dots-dark"]) > -1) && a.autoDraggerLength,
            a.autoExpandScrollbar = !($.inArray(a.theme, ["rounded-dots", "rounded-dots-dark", "3d", "3d-dark", "3d-thick", "3d-thick-dark", "inset", "inset-dark", "inset-2", "inset-2-dark", "inset-3", "inset-3-dark"]) > -1) && a.autoExpandScrollbar,
            a.scrollButtons.enable = !($.inArray(a.theme, ["minimal", "minimal-dark"]) > -1) && a.scrollButtons.enable,
            a.autoHideScrollbar = $.inArray(a.theme, ["minimal", "minimal-dark"]) > -1 || a.autoHideScrollbar,
            a.scrollbarPosition = $.inArray(a.theme, ["minimal", "minimal-dark"]) > -1 ? "outside" : a.scrollbarPosition
        }, m = function(a) {
            f[a] && (clearTimeout(f[a]),
            Y(f, a))
        }, n = function(a) {
            return "yx" === a || "xy" === a || "auto" === a ? "yx" : "x" === a || "horizontal" === a ? "x" : "y"
        }, o = function(a) {
            return "stepped" === a || "pixels" === a || "step" === a || "click" === a ? "stepped" : "stepless"
        }, p = function() {
            var d = $(this)
              , c = d.data("mCS")
              , b = c.opt
              , h = b.autoExpandScrollbar ? " " + i[1] + "_expand" : ""
              , e = ["<div id='mCSB_" + c.idx + "_scrollbar_vertical' class='mCSB_scrollTools mCSB_" + c.idx + "_scrollbar mCS-" + b.theme + " mCSB_scrollTools_vertical" + h + "'><div class='" + i[12] + "'><div id='mCSB_" + c.idx + "_dragger_vertical' class='mCSB_dragger' style='position:absolute;'><div class='mCSB_dragger_bar' /></div><div class='mCSB_draggerRail' /></div></div>", "<div id='mCSB_" + c.idx + "_scrollbar_horizontal' class='mCSB_scrollTools mCSB_" + c.idx + "_scrollbar mCS-" + b.theme + " mCSB_scrollTools_horizontal" + h + "'><div class='" + i[12] + "'><div id='mCSB_" + c.idx + "_dragger_horizontal' class='mCSB_dragger' style='position:absolute;'><div class='mCSB_dragger_bar' /></div><div class='mCSB_draggerRail' /></div></div>"]
              , l = "yx" === b.axis ? "mCSB_vertical_horizontal" : "x" === b.axis ? "mCSB_horizontal" : "mCSB_vertical"
              , j = "yx" === b.axis ? e[0] + e[1] : "x" === b.axis ? e[1] : e[0]
              , m = "yx" === b.axis ? "<div id='mCSB_" + c.idx + "_container_wrapper' class='mCSB_container_wrapper' />" : ""
              , n = b.autoHideScrollbar ? " " + i[6] : ""
              , o = "x" !== b.axis && "rtl" === c.langDir ? " " + i[7] : "";
            b.setWidth && d.css("width", b.setWidth),
            b.setHeight && d.css("height", b.setHeight),
            b.setLeft = "y" !== b.axis && "rtl" === c.langDir ? "989999px" : b.setLeft,
            d.addClass(a + " _mCS_" + c.idx + n + o).wrapInner("<div id='mCSB_" + c.idx + "' class='mCustomScrollBox mCS-" + b.theme + " " + l + "'><div id='mCSB_" + c.idx + "_container' class='mCSB_container' style='position:relative; top:" + b.setTop + "; left:" + b.setLeft + ";' dir='" + c.langDir + "' /></div>");
            var k = $("#mCSB_" + c.idx)
              , g = $("#mCSB_" + c.idx + "_container");
            "y" === b.axis || b.advanced.autoExpandHorizontalScroll || g.css("width", q(g)),
            "outside" === b.scrollbarPosition ? ("static" === d.css("position") && d.css("position", "relative"),
            d.css("overflow", "visible"),
            k.addClass("mCSB_outside").after(j)) : (k.addClass("mCSB_inside").append(j),
            g.wrap(m)),
            s.call(this);
            var f = [$("#mCSB_" + c.idx + "_dragger_vertical"), $("#mCSB_" + c.idx + "_dragger_horizontal")];
            f[0].css("min-height", f[0].height()),
            f[1].css("min-width", f[1].width())
        }, q = function(b) {
            var a = [b[0].scrollWidth, Math.max.apply(Math, b.children().map(function() {
                return $(this).outerWidth(!0)
            }).get())]
              , c = b.parent().width();
            return a[0] > c ? a[0] : a[1] > c ? a[1] : "100%"
        }, r = function() {
            var c = $(this).data("mCS")
              , b = c.opt
              , a = $("#mCSB_" + c.idx + "_container");
            if (b.advanced.autoExpandHorizontalScroll && "y" !== b.axis) {
                a.css({
                    width: "auto",
                    "min-width": 0,
                    "overflow-x": "scroll"
                });
                var d = Math.ceil(a[0].scrollWidth);
                3 === b.advanced.autoExpandHorizontalScroll || 2 !== b.advanced.autoExpandHorizontalScroll && d > a.parent().width() ? a.css({
                    width: d,
                    "min-width": "100%",
                    "overflow-x": "inherit"
                }) : a.css({
                    "overflow-x": "inherit",
                    position: "absolute"
                }).wrap("<div class='mCSB_h_wrapper' style='position:relative; left:0; width:999999px;' />").css({
                    width: Math.ceil(a[0].getBoundingClientRect().right + .4) - Math.floor(a[0].getBoundingClientRect().left),
                    "min-width": "100%",
                    position: "relative"
                }).unwrap()
            }
        }, s = function() {
            var e = $(this).data("mCS")
              , b = e.opt
              , f = $(".mCSB_" + e.idx + "_scrollbar:first")
              , c = aa(b.scrollButtons.tabindex) ? "tabindex='" + b.scrollButtons.tabindex + "'" : ""
              , a = ["<a href='#' class='" + i[13] + "' " + c + " />", "<a href='#' class='" + i[14] + "' " + c + " />", "<a href='#' class='" + i[15] + "' " + c + " />", "<a href='#' class='" + i[16] + "' " + c + " />"]
              , d = ["x" === b.axis ? a[2] : a[0], "x" === b.axis ? a[3] : a[1], a[2], a[3]];
            b.scrollButtons.enable && f.prepend(d[0]).append(d[1]).next(".mCSB_scrollTools").prepend(d[2]).append(d[3])
        }, t = function() {
            var c = $(this).data("mCS")
              , d = $("#mCSB_" + c.idx)
              , e = $("#mCSB_" + c.idx + "_container")
              , b = [$("#mCSB_" + c.idx + "_dragger_vertical"), $("#mCSB_" + c.idx + "_dragger_horizontal")]
              , f = [d.height() / e.outerHeight(!1), d.width() / e.outerWidth(!1)]
              , a = [parseInt(b[0].css("min-height")), Math.round(f[0] * b[0].parent().height()), parseInt(b[1].css("min-width")), Math.round(f[1] * b[1].parent().width())]
              , h = g && a[1] < a[0] ? a[0] : a[1]
              , i = g && a[3] < a[2] ? a[2] : a[3];
            b[0].css({
                height: h,
                "max-height": b[0].parent().height() - 10
            }).find(".mCSB_dragger_bar").css({
                "line-height": a[0] + "px"
            }),
            b[1].css({
                width: i,
                "max-width": b[1].parent().width() - 10
            })
        }, u = function() {
            var a = $(this).data("mCS")
              , c = $("#mCSB_" + a.idx)
              , d = $("#mCSB_" + a.idx + "_container")
              , b = [$("#mCSB_" + a.idx + "_dragger_vertical"), $("#mCSB_" + a.idx + "_dragger_horizontal")]
              , e = [d.outerHeight(!1) - c.height(), d.outerWidth(!1) - c.width()]
              , f = [e[0] / (b[0].parent().height() - b[0].height()), e[1] / (b[1].parent().width() - b[1].width())];
            a.scrollRatio = {
                y: f[0],
                x: f[1]
            }
        }, v = function(a, c, d) {
            var e = d ? i[0] + "_expanded" : ""
              , b = a.closest(".mCSB_scrollTools");
            "active" === c ? (a.toggleClass(i[0] + " " + e),
            b.toggleClass(i[1]),
            a[0]._draggable = a[0]._draggable ? 0 : 1) : a[0]._draggable || ("hide" === c ? (a.removeClass(i[0]),
            b.removeClass(i[1])) : (a.addClass(i[0]),
            b.addClass(i[1])))
        }, w = function() {
            var b = $(this).data("mCS")
              , e = $("#mCSB_" + b.idx)
              , a = $("#mCSB_" + b.idx + "_container")
              , c = null == b.overflowed ? a.height() : a.outerHeight(!1)
              , d = null == b.overflowed ? a.width() : a.outerWidth(!1)
              , f = a[0].scrollHeight
              , g = a[0].scrollWidth;
            return f > c && (c = f),
            g > d && (d = g),
            [c > e.height(), d > e.width()]
        }, x = function() {
            var b = $(this)
              , a = b.data("mCS")
              , c = a.opt
              , g = $("#mCSB_" + a.idx)
              , d = $("#mCSB_" + a.idx + "_container")
              , e = [$("#mCSB_" + a.idx + "_dragger_vertical"), $("#mCSB_" + a.idx + "_dragger_horizontal")];
            if (T(b),
            ("x" !== c.axis && !a.overflowed[0] || "y" === c.axis && a.overflowed[0]) && (e[0].add(d).css("top", 0),
            U(b, "_resetY")),
            "y" !== c.axis && !a.overflowed[1] || "x" === c.axis && a.overflowed[1]) {
                var f = dx = 0;
                "rtl" === a.langDir && (dx = Math.abs((f = g.width() - d.outerWidth(!1)) / a.scrollRatio.x)),
                d.css("left", f),
                e[1].css("left", dx),
                U(b, "_resetX")
            }
        }, y = function() {
            var e, c = $(this), b = c.data("mCS"), a = b.opt;
            if (!b.bindEvents) {
                if (C.call(this),
                a.contentTouchScroll && D.call(this),
                E.call(this),
                a.mouseWheel.enable) {
                    function d() {
                        e = setTimeout(function() {
                            $.event.special.mousewheel ? (clearTimeout(e),
                            F.call(c[0])) : d()
                        }, 100)
                    }
                    d()
                }
                K.call(this),
                M.call(this),
                a.advanced.autoScrollOnFocus && L.call(this),
                a.scrollButtons.enable && N.call(this),
                a.keyboard.enable && O.call(this),
                b.bindEvents = !0
            }
        }, z = function() {
            var c = $(this)
              , a = c.data("mCS")
              , b = a.opt
              , g = "mCS_" + a.idx
              , e = ".mCSB_" + a.idx + "_scrollbar"
              , d = $("#mCSB_" + a.idx + ",#mCSB_" + a.idx + "_container,#mCSB_" + a.idx + "_container_wrapper," + e + " ." + i[12] + ",#mCSB_" + a.idx + "_dragger_vertical,#mCSB_" + a.idx + "_dragger_horizontal," + e + ">a")
              , f = $("#mCSB_" + a.idx + "_container");
            b.advanced.releaseDraggableSelectors && d.add($(b.advanced.releaseDraggableSelectors)),
            b.advanced.extraDraggableSelectors && d.add($(b.advanced.extraDraggableSelectors)),
            a.bindEvents && ($(document).add($(!H() || top.document)).unbind("." + g),
            d.each(function() {
                $(this).unbind("." + g)
            }),
            clearTimeout(c[0]._focusTimeout),
            Y(c[0], "_focusTimeout"),
            clearTimeout(a.sequential.step),
            Y(a.sequential, "step"),
            clearTimeout(f[0].onCompleteTimeout),
            Y(f[0], "onCompleteTimeout"),
            a.bindEvents = !1)
        }, A = function(g) {
            var f = $(this)
              , a = f.data("mCS")
              , d = a.opt
              , h = $("#mCSB_" + a.idx + "_container_wrapper")
              , b = h.length ? h : $("#mCSB_" + a.idx + "_container")
              , c = [$("#mCSB_" + a.idx + "_scrollbar_vertical"), $("#mCSB_" + a.idx + "_scrollbar_horizontal")]
              , e = [c[0].find(".mCSB_dragger"), c[1].find(".mCSB_dragger")];
            "x" !== d.axis && (a.overflowed[0] && !g ? (c[0].add(e[0]).add(c[0].children("a")).css("display", "block"),
            b.removeClass(i[8] + " " + i[10])) : (d.alwaysShowScrollbar ? (2 !== d.alwaysShowScrollbar && e[0].css("display", "none"),
            b.removeClass(i[10])) : (c[0].css("display", "none"),
            b.addClass(i[10])),
            b.addClass(i[8]))),
            "y" !== d.axis && (a.overflowed[1] && !g ? (c[1].add(e[1]).add(c[1].children("a")).css("display", "block"),
            b.removeClass(i[9] + " " + i[11])) : (d.alwaysShowScrollbar ? (2 !== d.alwaysShowScrollbar && e[1].css("display", "none"),
            b.removeClass(i[11])) : (c[1].css("display", "none"),
            b.addClass(i[11])),
            b.addClass(i[9]))),
            a.overflowed[0] || a.overflowed[1] ? f.removeClass(i[5]) : f.addClass(i[5])
        }, B = function(a) {
            var f = a.type
              , b = a.target.ownerDocument !== document && null !== frameElement ? [$(frameElement).offset().top, $(frameElement).offset().left] : null
              , c = H() && a.target.ownerDocument !== top.document && null !== frameElement ? [$(a.view.frameElement).offset().top, $(a.view.frameElement).offset().left] : [0, 0];
            switch (f) {
            case "pointerdown":
            case "MSPointerDown":
            case "pointermove":
            case "MSPointerMove":
            case "pointerup":
            case "MSPointerUp":
                return b ? [a.originalEvent.pageY - b[0] + c[0], a.originalEvent.pageX - b[1] + c[1], !1] : [a.originalEvent.pageY, a.originalEvent.pageX, !1];
            case "touchstart":
            case "touchmove":
            case "touchend":
                var d = a.originalEvent.touches[0] || a.originalEvent.changedTouches[0]
                  , e = a.originalEvent.touches.length || a.originalEvent.changedTouches.length;
                return a.target.ownerDocument !== document ? [d.screenY, d.screenX, e > 1] : [d.pageY, d.pageX, e > 1];
            default:
                return b ? [a.pageY - b[0] + c[0], a.pageX - b[1] + c[1], !1] : [a.pageY, a.pageX, !1]
            }
        }, C = function() {
            var k, l, m, f = $(this), b = f.data("mCS"), c = b.opt, a = "mCS_" + b.idx, e = ["mCSB_" + b.idx + "_dragger_vertical", "mCSB_" + b.idx + "_dragger_horizontal"], n = $("#mCSB_" + b.idx + "_container"), d = $("#" + e[0] + ",#" + e[1]), i = c.advanced.releaseDraggableSelectors ? d.add($(c.advanced.releaseDraggableSelectors)) : d, j = c.advanced.extraDraggableSelectors ? $(!H() || top.document).add($(c.advanced.extraDraggableSelectors)) : $(!H() || top.document);
            function o(g, h, i, j) {
                if (n[0].idleTimer = c.scrollInertia < 233 ? 250 : 0,
                k.attr("id") === e[1])
                    var a = "x"
                      , d = (k[0].offsetLeft - h + j) * b.scrollRatio.x;
                else
                    var a = "y"
                      , d = (k[0].offsetTop - g + i) * b.scrollRatio.y;
                U(f, d.toString(), {
                    dir: a,
                    drag: !0
                })
            }
            d.bind("contextmenu." + a, function(a) {
                a.preventDefault()
            }).bind("mousedown." + a + " touchstart." + a + " pointerdown." + a + " MSPointerDown." + a, function(a) {
                if (a.stopImmediatePropagation(),
                a.preventDefault(),
                Z(a)) {
                    h = !0,
                    g && (document.onselectstart = function() {
                        return !1
                    }
                    ),
                    I.call(n, !1),
                    T(f);
                    var b = (k = $(this)).offset()
                      , d = B(a)[0] - b.top
                      , e = B(a)[1] - b.left
                      , i = k.height() + b.top
                      , j = k.width() + b.left;
                    d < i && d > 0 && e < j && e > 0 && (l = d,
                    m = e),
                    v(k, "active", c.autoExpandScrollbar)
                }
            }).bind("touchmove." + a, function(a) {
                a.stopImmediatePropagation(),
                a.preventDefault();
                var b = k.offset()
                  , c = B(a)[0] - b.top
                  , d = B(a)[1] - b.left;
                o(l, m, c, d)
            }),
            $(document).add(j).bind("mousemove." + a + " pointermove." + a + " MSPointerMove." + a, function(a) {
                if (k) {
                    var b = k.offset()
                      , c = B(a)[0] - b.top
                      , d = B(a)[1] - b.left;
                    (l !== c || m !== d) && o(l, m, c, d)
                }
            }).add(i).bind("mouseup." + a + " touchend." + a + " pointerup." + a + " MSPointerUp." + a, function(a) {
                k && (v(k, "active", c.autoExpandScrollbar),
                k = null),
                h = !1,
                g && (document.onselectstart = null),
                I.call(n, !0)
            })
        }, D = function() {
            var k, l, m, n, o, p, q, r, s, t, u, v, w, x, g = $(this), b = g.data("mCS"), i = b.opt, a = "mCS_" + b.idx, j = $("#mCSB_" + b.idx), e = $("#mCSB_" + b.idx + "_container"), y = [$("#mCSB_" + b.idx + "_dragger_vertical"), $("#mCSB_" + b.idx + "_dragger_horizontal")], z = [], A = [], C = "yx" === i.axis ? "none" : "all", D = [], f = e.find("iframe"), d = ["touchstart." + a + " pointerdown." + a + " MSPointerDown." + a, "touchmove." + a + " pointermove." + a + " MSPointerMove." + a, "touchend." + a + " pointerup." + a + " MSPointerUp." + a], E = void 0 !== document.body.style.touchAction && "" !== document.body.style.touchAction;
            function F(a) {
                if (!_(a) || h || B(a)[2]) {
                    c = 0;
                    return
                }
                c = 1,
                w = 0,
                x = 0,
                k = 1,
                g.removeClass("mCS_touch_action");
                var b = e.offset();
                l = B(a)[0] - b.top,
                m = B(a)[1] - b.left,
                D = [B(a)[0], B(a)[1]]
            }
            function G(a) {
                if (_(a) && !h && !B(a)[2] && (i.documentTouchScroll || a.preventDefault(),
                a.stopImmediatePropagation(),
                (!x || w) && k)) {
                    q = W();
                    var f = j.offset()
                      , c = B(a)[0] - f.top
                      , d = B(a)[1] - f.left
                      , n = "mcsLinearOut";
                    if (z.push(c),
                    A.push(d),
                    D[2] = Math.abs(B(a)[0] - D[0]),
                    D[3] = Math.abs(B(a)[1] - D[1]),
                    b.overflowed[0])
                        var o = y[0].parent().height() - y[0].height()
                          , p = l - c > 0 && c - l > -(o * b.scrollRatio.y) && (2 * D[3] < D[2] || "yx" === i.axis);
                    if (b.overflowed[1])
                        var r = y[1].parent().width() - y[1].width()
                          , s = m - d > 0 && d - m > -(r * b.scrollRatio.x) && (2 * D[2] < D[3] || "yx" === i.axis);
                    p || s ? (E || a.preventDefault(),
                    w = 1) : (x = 1,
                    g.addClass("mCS_touch_action")),
                    E && a.preventDefault(),
                    u = "yx" === i.axis ? [l - c, m - d] : "x" === i.axis ? [null, m - d] : [l - c, null],
                    e[0].idleTimer = 250,
                    b.overflowed[0] && L(u[0], 0, n, "y", "all", !0),
                    b.overflowed[1] && L(u[1], 0, n, "x", C, !0)
                }
            }
            function I(a) {
                if (!_(a) || h || B(a)[2]) {
                    c = 0;
                    return
                }
                c = 1,
                a.stopImmediatePropagation(),
                T(g),
                p = W();
                var b = j.offset();
                n = B(a)[0] - b.top,
                o = B(a)[1] - b.left,
                z = [],
                A = []
            }
            function J(c) {
                if (_(c) && !h && !B(c)[2]) {
                    k = 0,
                    c.stopImmediatePropagation(),
                    w = 0,
                    x = 0,
                    r = W();
                    var g = j.offset()
                      , l = B(c)[0] - g.top
                      , m = B(c)[1] - g.left;
                    if (!(r - q > 30)) {
                        var y = "mcsEaseOut"
                          , f = (t = 1e3 / (r - p)) < 2.5
                          , D = f ? [z[z.length - 2], A[A.length - 2]] : [0, 0]
                          , a = [Math.abs((s = f ? [l - D[0], m - D[1]] : [l - n, m - o])[0]), Math.abs(s[1])];
                        t = f ? [Math.abs(s[0] / 4), Math.abs(s[1] / 4)] : [t, t];
                        var d = [Math.abs(e[0].offsetTop) - s[0] * K(a[0] / t[0], t[0]), Math.abs(e[0].offsetLeft) - s[1] * K(a[1] / t[1], t[1])];
                        u = "yx" === i.axis ? [d[0], d[1]] : "x" === i.axis ? [null, d[1]] : [d[0], null],
                        v = [4 * a[0] + i.scrollInertia, 4 * a[1] + i.scrollInertia];
                        var E = parseInt(i.contentTouchScroll) || 0;
                        u[0] = a[0] > E ? u[0] : 0,
                        u[1] = a[1] > E ? u[1] : 0,
                        b.overflowed[0] && L(u[0], v[0], y, "y", C, !1),
                        b.overflowed[1] && L(u[1], v[1], y, "x", C, !1)
                    }
                }
            }
            function K(c, a) {
                var b = [1.5 * a, 2 * a, a / 1.5, a / 2];
                return c > 90 ? a > 4 ? b[0] : b[3] : c > 60 ? a > 3 ? b[3] : b[2] : c > 30 ? a > 8 ? b[1] : a > 6 ? b[0] : a > 4 ? a : b[2] : a > 8 ? a : b[3]
            }
            function L(a, b, c, d, e, f) {
                a && U(g, a.toString(), {
                    dur: b,
                    scrollEasing: c,
                    dir: d,
                    overwrite: e,
                    drag: f
                })
            }
            e.bind(d[0], function(a) {
                F(a)
            }).bind(d[1], function(a) {
                G(a)
            }),
            j.bind(d[0], function(a) {
                I(a)
            }).bind(d[2], function(a) {
                J(a)
            }),
            f.length && f.each(function() {
                $(this).bind("load", function() {
                    H(this) && $(this.contentDocument || this.contentWindow.document).bind(d[0], function(a) {
                        F(a),
                        I(a)
                    }).bind(d[1], function(a) {
                        G(a)
                    }).bind(d[2], function(a) {
                        J(a)
                    })
                })
            })
        }, E = function() {
            var f, e = $(this), a = e.data("mCS"), g = a.opt, i = a.sequential, b = "mCS_" + a.idx, d = $("#mCSB_" + a.idx + "_container"), j = d.parent();
            function k(b, c, a) {
                i.type = a && f ? "stepped" : "stepless",
                i.scrollAmount = 10,
                P(e, b, c, "mcsLinearOut", a ? 60 : null)
            }
            d.bind("mousedown." + b, function(a) {
                !c && (f || (f = 1,
                h = !0))
            }).add(document).bind("mousemove." + b, function(h) {
                if (!c && f && (window.getSelection ? window.getSelection().toString() : document.selection && "Control" != document.selection.type ? document.selection.createRange().text : 0)) {
                    var l = d.offset()
                      , b = B(h)[0] - l.top + d[0].offsetTop
                      , e = B(h)[1] - l.left + d[0].offsetLeft;
                    b > 0 && b < j.height() && e > 0 && e < j.width() ? i.step && k("off", null, "stepped") : ("x" !== g.axis && a.overflowed[0] && (b < 0 ? k("on", 38) : b > j.height() && k("on", 40)),
                    "y" !== g.axis && a.overflowed[1] && (e < 0 ? k("on", 37) : e > j.width() && k("on", 39)))
                }
            }).bind("mouseup." + b + " dragend." + b, function(a) {
                c || (f && (f = 0,
                k("off", null)),
                h = !1)
            })
        }, F = function() {
            if ($(this).data("mCS")) {
                var c = $(this)
                  , a = c.data("mCS")
                  , f = a.opt
                  , d = "mCS_" + a.idx
                  , e = $("#mCSB_" + a.idx)
                  , h = [$("#mCSB_" + a.idx + "_dragger_vertical"), $("#mCSB_" + a.idx + "_dragger_horizontal")]
                  , b = $("#mCSB_" + a.idx + "_container").find("iframe");
                b.length && b.each(function() {
                    $(this).bind("load", function() {
                        H(this) && $(this.contentDocument || this.contentWindow.document).bind("mousewheel." + d, function(a, b) {
                            i(a, b)
                        })
                    })
                }),
                e.bind("mousewheel." + d, function(a, b) {
                    i(a, b)
                })
            }
            function i(b, m) {
                if (T(c),
                !J(c, b.target)) {
                    var n = "auto" !== f.mouseWheel.deltaFactor ? parseInt(f.mouseWheel.deltaFactor) : g && b.deltaFactor < 100 ? 100 : b.deltaFactor || 100
                      , o = f.scrollInertia;
                    if ("x" === f.axis || "x" === f.mouseWheel.axis)
                        var j = "x"
                          , i = [Math.round(n * a.scrollRatio.x), parseInt(f.mouseWheel.scrollAmount)]
                          , k = "auto" !== f.mouseWheel.scrollAmount ? i[1] : i[0] >= e.width() ? .9 * e.width() : i[0]
                          , p = Math.abs($("#mCSB_" + a.idx + "_container")[0].offsetLeft)
                          , l = h[1][0].offsetLeft
                          , q = h[1].parent().width() - h[1].width()
                          , d = "y" === f.mouseWheel.axis ? b.deltaY || m : b.deltaX;
                    else
                        var j = "y"
                          , i = [Math.round(n * a.scrollRatio.y), parseInt(f.mouseWheel.scrollAmount)]
                          , k = "auto" !== f.mouseWheel.scrollAmount ? i[1] : i[0] >= e.height() ? .9 * e.height() : i[0]
                          , p = Math.abs($("#mCSB_" + a.idx + "_container")[0].offsetTop)
                          , l = h[0][0].offsetTop
                          , q = h[0].parent().height() - h[0].height()
                          , d = b.deltaY || m;
                    ("y" !== j || a.overflowed[0]) && ("x" !== j || a.overflowed[1]) && ((f.mouseWheel.invert || b.webkitDirectionInvertedFromDevice) && (d = -d),
                    f.mouseWheel.normalizeDelta && (d = d < 0 ? -1 : 1),
                    (d > 0 && 0 !== l || d < 0 && l !== q || f.mouseWheel.preventDefault) && (b.stopImmediatePropagation(),
                    b.preventDefault()),
                    b.deltaFactor < 5 && !f.mouseWheel.normalizeDelta && (k = b.deltaFactor,
                    o = 17),
                    U(c, (p - d * k).toString(), {
                        dir: j,
                        dur: o
                    }))
                }
            }
        }, G = new Object, H = function(b) {
            var c = !1
              , a = !1
              , d = null;
            if (void 0 === b ? a = "#empty" : void 0 !== $(b).attr("id") && (a = $(b).attr("id")),
            !1 !== a && void 0 !== G[a])
                return G[a];
            if (b) {
                try {
                    var e = b.contentDocument || b.contentWindow.document;
                    d = e.body.innerHTML
                } catch (f) {}
                c = null !== d
            } else {
                try {
                    var e = top.document;
                    d = e.body.innerHTML
                } catch (g) {}
                c = null !== d
            }
            return !1 !== a && (G[a] = c),
            c
        }, I = function(b) {
            var a = this.find("iframe");
            a.length && a.css("pointer-events", b ? "auto" : "none")
        }, J = function(c, a) {
            var b = a.nodeName.toLowerCase()
              , d = c.data("mCS").opt.mouseWheel.disableOver;
            return $.inArray(b, d) > -1 && !($.inArray(b, ["select", "textarea"]) > -1 && !$(a).is(":focus"))
        }, K = function() {
            var e, c = $(this), b = c.data("mCS"), a = "mCS_" + b.idx, d = $("#mCSB_" + b.idx + "_container"), f = d.parent();
            $(".mCSB_" + b.idx + "_scrollbar ." + i[12]).bind("mousedown." + a + " touchstart." + a + " pointerdown." + a + " MSPointerDown." + a, function(a) {
                h = !0,
                $(a.target).hasClass("mCSB_dragger") || (e = 1)
            }).bind("touchend." + a + " pointerup." + a + " MSPointerUp." + a, function(a) {
                h = !1
            }).bind("click." + a, function(a) {
                if (e && (e = 0,
                $(a.target).hasClass(i[12]) || $(a.target).hasClass("mCSB_draggerRail"))) {
                    T(c);
                    var h = $(this)
                      , j = h.find(".mCSB_dragger");
                    if (h.parent(".mCSB_scrollTools_horizontal").length > 0) {
                        if (!b.overflowed[1])
                            return;
                        var k = "x"
                          , g = a.pageX > j.offset().left ? -1 : 1
                          , l = Math.abs(d[0].offsetLeft) - g * (.9 * f.width())
                    } else {
                        if (!b.overflowed[0])
                            return;
                        var k = "y"
                          , g = a.pageY > j.offset().top ? -1 : 1
                          , l = Math.abs(d[0].offsetTop) - g * (.9 * f.height())
                    }
                    U(c, l.toString(), {
                        dir: k,
                        scrollEasing: "mcsEaseInOut"
                    })
                }
            })
        }, L = function() {
            var c = $(this)
              , a = c.data("mCS")
              , e = a.opt
              , d = "mCS_" + a.idx
              , b = $("#mCSB_" + a.idx + "_container")
              , f = b.parent();
            b.bind("focusin." + d, function(g) {
                var d = $(document.activeElement)
                  , a = b.find(".mCustomScrollBox").length;
                d.is(e.advanced.autoScrollOnFocus) && (T(c),
                clearTimeout(c[0]._focusTimeout),
                c[0]._focusTimer = a ? 17 * a : 0,
                c[0]._focusTimeout = setTimeout(function() {
                    var a = [ab(d)[0], ab(d)[1]]
                      , g = [b[0].offsetTop, b[0].offsetLeft]
                      , h = [g[0] + a[0] >= 0 && g[0] + a[0] < f.height() - d.outerHeight(!1), g[1] + a[1] >= 0 && g[0] + a[1] < f.width() - d.outerWidth(!1)]
                      , i = "yx" !== e.axis || h[0] || h[1] ? "all" : "none";
                    "x" === e.axis || h[0] || U(c, a[0].toString(), {
                        dir: "y",
                        scrollEasing: "mcsEaseInOut",
                        overwrite: i,
                        dur: 0
                    }),
                    "y" === e.axis || h[1] || U(c, a[1].toString(), {
                        dir: "x",
                        scrollEasing: "mcsEaseInOut",
                        overwrite: i,
                        dur: 0
                    })
                }, c[0]._focusTimer))
            })
        }, M = function() {
            var a = $(this).data("mCS")
              , b = "mCS_" + a.idx
              , c = $("#mCSB_" + a.idx + "_container").parent();
            c.bind("scroll." + b, function(b) {
                (0 !== c.scrollTop() || 0 !== c.scrollLeft()) && $(".mCSB_" + a.idx + "_scrollbar").css("visibility", "hidden")
            })
        }, N = function() {
            var c = $(this)
              , b = c.data("mCS")
              , d = b.opt
              , e = b.sequential
              , a = "mCS_" + b.idx;
            $(".mCSB_" + b.idx + "_scrollbar>a").bind("contextmenu." + a, function(a) {
                a.preventDefault()
            }).bind("mousedown." + a + " touchstart." + a + " pointerdown." + a + " MSPointerDown." + a + " mouseup." + a + " touchend." + a + " pointerup." + a + " MSPointerUp." + a + " mouseout." + a + " pointerout." + a + " MSPointerOut." + a + " click." + a, function(a) {
                if (a.preventDefault(),
                Z(a)) {
                    var f = $(this).attr("class");
                    switch (e.type = d.scrollButtons.scrollType,
                    a.type) {
                    case "mousedown":
                    case "touchstart":
                    case "pointerdown":
                    case "MSPointerDown":
                        if ("stepped" === e.type)
                            return;
                        h = !0,
                        b.tweenRunning = !1,
                        g("on", f);
                        break;
                    case "mouseup":
                    case "touchend":
                    case "pointerup":
                    case "MSPointerUp":
                    case "mouseout":
                    case "pointerout":
                    case "MSPointerOut":
                        if ("stepped" === e.type)
                            return;
                        h = !1,
                        e.dir && g("off", f);
                        break;
                    case "click":
                        if ("stepped" !== e.type || b.tweenRunning)
                            return;
                        g("on", f)
                    }
                }
                function g(a, b) {
                    e.scrollAmount = d.scrollButtons.scrollAmount,
                    P(c, a, b)
                }
            })
        }, O = function() {
            var e = $(this)
              , a = e.data("mCS")
              , h = a.opt
              , i = a.sequential
              , b = "mCS_" + a.idx
              , f = $("#mCSB_" + a.idx)
              , c = $("#mCSB_" + a.idx + "_container")
              , j = c.parent()
              , k = "input,textarea,select,datalist,keygen,[contenteditable='true']"
              , d = c.find("iframe")
              , g = ["blur." + b + " keydown." + b + " keyup." + b];
            function l(d) {
                switch (d.type) {
                case "blur":
                    a.tweenRunning && i.dir && n("off", null);
                    break;
                case "keydown":
                case "keyup":
                    var b = d.keyCode ? d.keyCode : d.which
                      , l = "on";
                    if ("x" !== h.axis && (38 === b || 40 === b) || "y" !== h.axis && (37 === b || 39 === b)) {
                        if ((38 === b || 40 === b) && !a.overflowed[0] || (37 === b || 39 === b) && !a.overflowed[1])
                            return;
                        "keyup" === d.type && (l = "off"),
                        $(document.activeElement).is(k) || (d.preventDefault(),
                        d.stopImmediatePropagation(),
                        n(l, b))
                    } else if (33 === b || 34 === b) {
                        if ((a.overflowed[0] || a.overflowed[1]) && (d.preventDefault(),
                        d.stopImmediatePropagation()),
                        "keyup" === d.type) {
                            T(e);
                            var m = 34 === b ? -1 : 1;
                            if ("x" === h.axis || "yx" === h.axis && a.overflowed[1] && !a.overflowed[0])
                                var f = "x"
                                  , g = Math.abs(c[0].offsetLeft) - m * (.9 * j.width());
                            else
                                var f = "y"
                                  , g = Math.abs(c[0].offsetTop) - m * (.9 * j.height());
                            U(e, g.toString(), {
                                dir: f,
                                scrollEasing: "mcsEaseInOut"
                            })
                        }
                    } else if ((35 === b || 36 === b) && !$(document.activeElement).is(k) && ((a.overflowed[0] || a.overflowed[1]) && (d.preventDefault(),
                    d.stopImmediatePropagation()),
                    "keyup" === d.type)) {
                        if ("x" === h.axis || "yx" === h.axis && a.overflowed[1] && !a.overflowed[0])
                            var f = "x"
                              , g = 35 === b ? Math.abs(j.width() - c.outerWidth(!1)) : 0;
                        else
                            var f = "y"
                              , g = 35 === b ? Math.abs(j.height() - c.outerHeight(!1)) : 0;
                        U(e, g.toString(), {
                            dir: f,
                            scrollEasing: "mcsEaseInOut"
                        })
                    }
                }
                function n(b, c) {
                    i.type = h.keyboard.scrollType,
                    i.scrollAmount = h.keyboard.scrollAmount,
                    "stepped" === i.type && a.tweenRunning || P(e, b, c)
                }
            }
            d.length && d.each(function() {
                $(this).bind("load", function() {
                    H(this) && $(this.contentDocument || this.contentWindow.document).bind(g[0], function(a) {
                        l(a)
                    })
                })
            }),
            f.attr("tabindex", "0").bind(g[0], function(a) {
                l(a)
            })
        }, P = function(e, g, a, h, j) {
            var c = e.data("mCS")
              , d = c.opt
              , b = c.sequential
              , k = $("#mCSB_" + c.idx + "_container")
              , f = "stepped" === b.type
              , l = d.scrollInertia < 26 ? 26 : d.scrollInertia
              , m = d.scrollInertia < 1 ? 17 : d.scrollInertia;
            switch (g) {
            case "on":
                if (b.dir = [a === i[16] || a === i[15] || 39 === a || 37 === a ? "x" : "y", a === i[13] || a === i[15] || 38 === a || 37 === a ? -1 : 1],
                T(e),
                aa(a) && "stepped" === b.type)
                    return;
                n(f);
                break;
            case "off":
                clearTimeout(b.step),
                Y(b, "step"),
                T(e),
                (f || c.tweenRunning && b.dir) && n(!0)
            }
            function n(a) {
                d.snapAmount && (b.scrollAmount = d.snapAmount instanceof Array ? "x" === b.dir[0] ? d.snapAmount[1] : d.snapAmount[0] : d.snapAmount);
                var g = "stepped" !== b.type
                  , i = j || (a ? g ? l / 1.5 : m : 1e3 / 60)
                  , o = a ? g ? 7.5 : 40 : 2.5
                  , f = [Math.abs(k[0].offsetTop), Math.abs(k[0].offsetLeft)]
                  , p = [c.scrollRatio.y > 10 ? 10 : c.scrollRatio.y, c.scrollRatio.x > 10 ? 10 : c.scrollRatio.x]
                  , r = "x" === b.dir[0] ? f[1] + b.dir[1] * (p[1] * o) : f[0] + b.dir[1] * (p[0] * o)
                  , s = "x" === b.dir[0] ? f[1] + b.dir[1] * parseInt(b.scrollAmount) : f[0] + b.dir[1] * parseInt(b.scrollAmount)
                  , q = "auto" !== b.scrollAmount ? s : r
                  , t = h || (a ? g ? "mcsLinearOut" : "mcsEaseInOut" : "mcsLinear")
                  , u = !!a;
                if (a && i < 17 && (q = "x" === b.dir[0] ? f[1] : f[0]),
                U(e, q.toString(), {
                    dir: b.dir[0],
                    scrollEasing: t,
                    dur: i,
                    onComplete: u
                }),
                a) {
                    b.dir = !1;
                    return
                }
                clearTimeout(b.step),
                b.step = setTimeout(function() {
                    n()
                }, i)
            }
        }, Q = function(a) {
            var c = $(this).data("mCS").opt
              , b = [];
            return "function" == typeof a && (a = a()),
            a instanceof Array ? b = a.length > 1 ? [a[0], a[1]] : "x" === c.axis ? [null, a[0]] : [a[0], null] : (b[0] = a.y ? a.y : a.x || "x" === c.axis ? null : a,
            b[1] = a.x ? a.x : a.y || "y" === c.axis ? null : a),
            "function" == typeof b[0] && (b[0] = b[0]()),
            "function" == typeof b[1] && (b[1] = b[1]()),
            b
        }, R = function(a, c) {
            if (null != a && void 0 !== a) {
                var f = $(this)
                  , g = f.data("mCS")
                  , k = g.opt
                  , b = $("#mCSB_" + g.idx + "_container")
                  , e = b.parent();
                c || (c = "x" === k.axis ? "x" : "y");
                var l = "x" === c ? b.outerWidth(!1) - e.width() : b.outerHeight(!1) - e.height()
                  , h = "x" === c ? b[0].offsetLeft : b[0].offsetTop;
                switch (typeof a) {
                case "function":
                    return a();
                case "object":
                    var d = a.jquery ? a : $(a);
                    if (!d.length)
                        return;
                    return "x" === c ? ab(d)[1] : ab(d)[0];
                case "string":
                case "number":
                    if (aa(a))
                        return Math.abs(a);
                    if (-1 !== a.indexOf("%"))
                        return Math.abs(l * parseInt(a) / 100);
                    if (-1 !== a.indexOf("-="))
                        return Math.abs(h - parseInt(a.split("-=")[1]));
                    if (-1 !== a.indexOf("+=")) {
                        var i = h + parseInt(a.split("+=")[1]);
                        return i >= 0 ? 0 : Math.abs(i)
                    } else {
                        if (-1 !== a.indexOf("px") && aa(a.split("px")[0]))
                            return Math.abs(a.split("px")[0]);
                        if ("top" === a || "left" === a)
                            return 0;
                        if ("bottom" === a)
                            return Math.abs(e.height() - b.outerHeight(!1));
                        if ("right" === a)
                            return Math.abs(e.width() - b.outerWidth(!1));
                        if ("first" === a || "last" === a) {
                            var d = b.find(":" + a);
                            return "x" === c ? ab(d)[1] : ab(d)[0]
                        } else {
                            if ($(a).length)
                                return "x" === c ? ab($(a))[1] : ab($(a))[0];
                            b.css("x" === c ? "left" : "top", a),
                            j.update.call(null, f[0]);
                            return
                        }
                    }
                }
            }
        }, S = function(c) {
            var d = $(this)
              , a = d.data("mCS")
              , f = a.opt
              , b = $("#mCSB_" + a.idx + "_container");
            if (c) {
                clearTimeout(b[0].autoUpdate),
                Y(b[0], "autoUpdate");
                return
            }
            function e() {
                if (clearTimeout(b[0].autoUpdate),
                0 === d.parents("html").length) {
                    d = null;
                    return
                }
                b[0].autoUpdate = setTimeout(function() {
                    if (f.advanced.updateOnSelectorChange && (a.poll.change.n = h(),
                    a.poll.change.n !== a.poll.change.o)) {
                        a.poll.change.o = a.poll.change.n,
                        k(3);
                        return
                    }
                    if (f.advanced.updateOnContentResize && (a.poll.size.n = d[0].scrollHeight + d[0].scrollWidth + b[0].offsetHeight + d[0].offsetHeight + d[0].offsetWidth,
                    a.poll.size.n !== a.poll.size.o)) {
                        a.poll.size.o = a.poll.size.n,
                        k(1);
                        return
                    }
                    if (f.advanced.updateOnImageLoad && !("auto" === f.advanced.updateOnImageLoad && "y" === f.axis) && (a.poll.img.n = b.find("img").length,
                    a.poll.img.n !== a.poll.img.o)) {
                        a.poll.img.o = a.poll.img.n,
                        b.find("img").each(function() {
                            g(this)
                        });
                        return
                    }
                    (f.advanced.updateOnSelectorChange || f.advanced.updateOnContentResize || f.advanced.updateOnImageLoad) && e()
                }, f.advanced.autoUpdateTimeout)
            }
            function g(b) {
                if ($(b).hasClass(i[2])) {
                    k();
                    return
                }
                var a = new Image;
                a.onload = function(a, b) {
                    return function() {
                        return b.apply(a, arguments)
                    }
                }(a, function() {
                    this.onload = null,
                    $(b).addClass(i[2]),
                    k(2)
                }),
                a.src = b.src
            }
            function h() {
                !0 === f.advanced.updateOnSelectorChange && (f.advanced.updateOnSelectorChange = "*");
                var c = 0
                  , a = b.find(f.advanced.updateOnSelectorChange);
                return f.advanced.updateOnSelectorChange && a.length > 0 && a.each(function() {
                    c += this.offsetHeight + this.offsetWidth
                }),
                c
            }
            function k(a) {
                clearTimeout(b[0].autoUpdate),
                j.update.call(null, d[0], a)
            }
            e()
        }, T = function(b) {
            var a = b.data("mCS");
            $("#mCSB_" + a.idx + "_container,#mCSB_" + a.idx + "_container_wrapper,#mCSB_" + a.idx + "_dragger_vertical,#mCSB_" + a.idx + "_dragger_horizontal").each(function() {
                X.call(this)
            })
        }, U = function(e, d, f) {
            var a = e.data("mCS")
              , b = a.opt
              , u = {
                trigger: "internal",
                dir: "y",
                scrollEasing: "mcsEaseOut",
                drag: !1,
                dur: b.scrollInertia,
                overwrite: "all",
                callbacks: !0,
                onStart: !0,
                onUpdate: !0,
                onComplete: !0
            }
              , f = $.extend(u, f)
              , o = [f.dur, f.drag ? 0 : f.dur]
              , p = $("#mCSB_" + a.idx)
              , g = $("#mCSB_" + a.idx + "_container")
              , l = g.parent()
              , q = b.callbacks.onTotalScrollOffset ? Q.call(e, b.callbacks.onTotalScrollOffset) : [0, 0]
              , r = b.callbacks.onTotalScrollBackOffset ? Q.call(e, b.callbacks.onTotalScrollBackOffset) : [0, 0];
            if (a.trigger = f.trigger,
            (0 !== l.scrollTop() || 0 !== l.scrollLeft()) && ($(".mCSB_" + a.idx + "_scrollbar").css("visibility", "visible"),
            l.scrollTop(0).scrollLeft(0)),
            "_resetY" !== d || a.contentReset.y || (A("onOverflowYNone") && b.callbacks.onOverflowYNone.call(e[0]),
            a.contentReset.y = 1),
            "_resetX" !== d || a.contentReset.x || (A("onOverflowXNone") && b.callbacks.onOverflowXNone.call(e[0]),
            a.contentReset.x = 1),
            "_resetY" !== d && "_resetX" !== d) {
                if ((a.contentReset.y || !e[0].mcs) && a.overflowed[0] && (A("onOverflowY") && b.callbacks.onOverflowY.call(e[0]),
                a.contentReset.x = null),
                (a.contentReset.x || !e[0].mcs) && a.overflowed[1] && (A("onOverflowX") && b.callbacks.onOverflowX.call(e[0]),
                a.contentReset.x = null),
                b.snapAmount) {
                    var s, t, z, w = b.snapAmount instanceof Array ? "x" === f.dir ? b.snapAmount[1] : b.snapAmount[0] : b.snapAmount;
                    d = (s = d,
                    Math.round(s / (t = w)) * t - b.snapOffset)
                }
                switch (f.dir) {
                case "x":
                    var h = $("#mCSB_" + a.idx + "_dragger_horizontal")
                      , m = "left"
                      , n = g[0].offsetLeft
                      , i = [p.width() - g.outerWidth(!1), h.parent().width() - h.width()]
                      , c = [d, 0 === d ? 0 : d / a.scrollRatio.x]
                      , j = q[1]
                      , k = r[1]
                      , x = j > 0 ? j / a.scrollRatio.x : 0
                      , y = k > 0 ? k / a.scrollRatio.x : 0;
                    break;
                case "y":
                    var h = $("#mCSB_" + a.idx + "_dragger_vertical")
                      , m = "top"
                      , n = g[0].offsetTop
                      , i = [p.height() - g.outerHeight(!1), h.parent().height() - h.height()]
                      , c = [d, 0 === d ? 0 : d / a.scrollRatio.y]
                      , j = q[0]
                      , k = r[0]
                      , x = j > 0 ? j / a.scrollRatio.y : 0
                      , y = k > 0 ? k / a.scrollRatio.y : 0
                }
                c[1] < 0 || 0 === c[0] && 0 === c[1] ? c = [0, 0] : c[1] >= i[1] ? c = [i[0], i[1]] : c[0] = -c[0],
                !e[0].mcs && (C(),
                A("onInit") && b.callbacks.onInit.call(e[0])),
                clearTimeout(g[0].onCompleteTimeout),
                V(h[0], m, Math.round(c[1]), o[1], f.scrollEasing),
                !a.tweenRunning && (0 === n && c[0] >= 0 || n === i[0] && c[0] <= i[0]) || V(g[0], m, Math.round(c[0]), o[0], f.scrollEasing, f.overwrite, {
                    onStart: function() {
                        f.callbacks && f.onStart && !a.tweenRunning && (A("onScrollStart") && (C(),
                        b.callbacks.onScrollStart.call(e[0])),
                        a.tweenRunning = !0,
                        v(h),
                        a.cbOffsets = B())
                    },
                    onUpdate: function() {
                        f.callbacks && f.onUpdate && A("whileScrolling") && (C(),
                        b.callbacks.whileScrolling.call(e[0]))
                    },
                    onComplete: function() {
                        if (f.callbacks && f.onComplete) {
                            "yx" === b.axis && clearTimeout(g[0].onCompleteTimeout);
                            var d = g[0].idleTimer || 0;
                            g[0].onCompleteTimeout = setTimeout(function() {
                                A("onScroll") && (C(),
                                b.callbacks.onScroll.call(e[0])),
                                A("onTotalScroll") && c[1] >= i[1] - x && a.cbOffsets[0] && (C(),
                                b.callbacks.onTotalScroll.call(e[0])),
                                A("onTotalScrollBack") && c[1] <= y && a.cbOffsets[1] && (C(),
                                b.callbacks.onTotalScrollBack.call(e[0])),
                                a.tweenRunning = !1,
                                g[0].idleTimer = 0,
                                v(h, "hide")
                            }, d)
                        }
                    }
                })
            }
            function A(c) {
                return a && b.callbacks[c] && "function" == typeof b.callbacks[c]
            }
            function B() {
                return [b.callbacks.alwaysTriggerOffsets || n >= i[0] + j, b.callbacks.alwaysTriggerOffsets || n <= -k]
            }
            function C() {
                var a = [g[0].offsetTop, g[0].offsetLeft]
                  , b = [h[0].offsetTop, h[0].offsetLeft]
                  , c = [g.outerHeight(!1), g.outerWidth(!1)]
                  , d = [p.height(), p.width()];
                e[0].mcs = {
                    content: g,
                    top: a[0],
                    left: a[1],
                    draggerTop: b[0],
                    draggerLeft: b[1],
                    topPct: Math.round(100 * Math.abs(a[0]) / (Math.abs(c[0]) - d[0])),
                    leftPct: Math.round(100 * Math.abs(a[1]) / (Math.abs(c[1]) - d[1])),
                    direction: f.dir
                }
            }
        }, V = function(b, d, h, l, m, i, c) {
            b._mTween || (b._mTween = {
                top: {},
                left: {}
            });
            var e, f, c = c || {}, n = c.onStart || function() {}
            , o = c.onUpdate || function() {}
            , p = c.onComplete || function() {}
            , q = W(), j = 0, g = b.offsetTop, r = b.style, a = b._mTween[d];
            "left" === d && (g = b.offsetLeft);
            var s = h - g;
            function k() {
                a.stop || (j || n.call(),
                j = W() - q,
                t(),
                j >= a.time && (a.time = j > a.time ? j + e - (j - a.time) : j + e - 1,
                a.time < j + 1 && (a.time = j + 1)),
                a.time < l ? a.id = f(k) : p.call())
            }
            function t() {
                l > 0 ? (a.currVal = u(a.time, g, s, l, m),
                r[d] = Math.round(a.currVal) + "px") : r[d] = h + "px",
                o.call()
            }
            function u(a, b, c, d, g) {
                switch (g) {
                case "linear":
                case "mcsLinear":
                    return c * a / d + b;
                case "mcsLinearOut":
                    return a /= d,
                    c * Math.sqrt(1 - --a * a) + b;
                case "easeInOutSmooth":
                    if ((a /= d / 2) < 1)
                        return c / 2 * a * a + b;
                    return -c / 2 * (--a * (a - 2) - 1) + b;
                case "easeInOutStrong":
                    if ((a /= d / 2) < 1)
                        return c / 2 * Math.pow(2, 10 * (a - 1)) + b;
                    return c / 2 * (-Math.pow(2, -10 * --a) + 2) + b;
                case "easeInOut":
                case "mcsEaseInOut":
                    if ((a /= d / 2) < 1)
                        return c / 2 * a * a * a + b;
                    return c / 2 * ((a -= 2) * a * a + 2) + b;
                case "easeOutSmooth":
                    return a /= d,
                    -c * (--a * a * a * a - 1) + b;
                case "easeOutStrong":
                    return c * (-Math.pow(2, -10 * a / d) + 1) + b;
                default:
                    var e = (a /= d) * a
                      , f = e * a;
                    return b + c * (.499999999999997 * f * e + -2.5 * e * e + 5.5 * f + -6.5 * e + 4 * a)
                }
            }
            a.stop = 0,
            "none" !== i && null != a.id && (window.requestAnimationFrame ? window.cancelAnimationFrame(a.id) : clearTimeout(a.id),
            a.id = null),
            e = 1e3 / 60,
            a.time = j + e,
            f = window.requestAnimationFrame ? window.requestAnimationFrame : function(a) {
                return t(),
                setTimeout(a, .01)
            }
            ,
            a.id = f(k)
        }, W = function() {
            return window.performance && window.performance.now ? window.performance.now() : window.performance && window.performance.webkitNow ? window.performance.webkitNow() : Date.now ? Date.now() : new Date().getTime()
        }, X = function() {
            var a = this;
            a._mTween || (a._mTween = {
                top: {},
                left: {}
            });
            for (var d = ["top", "left"], c = 0; c < d.length; c++) {
                var b = d[c];
                a._mTween[b].id && (window.requestAnimationFrame ? window.cancelAnimationFrame(a._mTween[b].id) : clearTimeout(a._mTween[b].id),
                a._mTween[b].id = null,
                a._mTween[b].stop = 1)
            }
        }, Y = function(a, b) {
            try {
                delete a[b]
            } catch (c) {
                a[b] = null
            }
        }, Z = function(a) {
            return !(a.which && 1 !== a.which)
        }, _ = function(b) {
            var a = b.originalEvent.pointerType;
            return !(a && "touch" !== a && 2 !== a)
        }, aa = function(a) {
            return !isNaN(parseFloat(a)) && isFinite(a)
        }, ab = function(a) {
            var b = a.parents(".mCSB_container");
            return [a.offset().top - b.offset().top, a.offset().left - b.offset().left]
        }, ac = function() {
            var a = function() {
                var b = ["webkit", "moz", "ms", "o"];
                if ("hidden"in document)
                    return "hidden";
                for (var a = 0; a < b.length; a++)
                    if (b[a] + "Hidden"in document)
                        return b[a] + "Hidden";
                return null
            }();
            return !!a && document[a]
        };
        $.fn[a] = function(a) {
            return j[a] ? j[a].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof a && a ? void $.error("Method " + a + " does not exist") : j.init.apply(this, arguments)
        }
        ,
        $[a] = function(a) {
            return j[a] ? j[a].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof a && a ? void $.error("Method " + a + " does not exist") : j.init.apply(this, arguments)
        }
        ,
        $[a].defaults = b,
        window[a] = !0,
        $(window).bind("load", function() {
            $(d)[a](),
            $.extend($.expr[":"], {
                mcsInView: $.expr[":"].mcsInView || function(e) {
                    var d, b, a = $(e), c = a.parents(".mCSB_container");
                    if (c.length)
                        return d = c.parent(),
                        b = [c[0].offsetTop, c[0].offsetLeft],
                        b[0] + ab(a)[0] >= 0 && b[0] + ab(a)[0] < d.height() - a.outerHeight(!1) && b[1] + ab(a)[1] >= 0 && b[1] + ab(a)[1] < d.width() - a.outerWidth(!1)
                }
                ,
                mcsInSight: $.expr[":"].mcsInSight || function(h, j, i) {
                    var b, a, c, d, e = $(h), f = e.parents(".mCSB_container"), g = "exact" === i[3] ? [[1, 0], [1, 0]] : [[.9, .1], [.6, .4]];
                    if (f.length)
                        return b = [e.outerHeight(!1), e.outerWidth(!1)],
                        c = [f[0].offsetTop + ab(e)[0], f[0].offsetLeft + ab(e)[1]],
                        a = [f.parent()[0].offsetHeight, f.parent()[0].offsetWidth],
                        d = [b[0] < a[0] ? g[0] : g[1], b[1] < a[1] ? g[0] : g[1]],
                        c[0] - a[0] * d[0][0] < 0 && c[0] + b[0] - a[0] * d[0][1] >= 0 && c[1] - a[1] * d[1][0] < 0 && c[1] + b[1] - a[1] * d[1][1] >= 0
                }
                ,
                mcsOverflow: $.expr[":"].mcsOverflow || function(b) {
                    var a = $(b).data("mCS");
                    if (a)
                        return a.overflowed[0] || a.overflowed[1]
                }
            })
        })
    })
})
