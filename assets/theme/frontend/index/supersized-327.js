/*

	Supersized - Fullscreen Slideshow jQuery Plugin
	Version : 3.2.7
	Site	: www.buildinternet.com/project/supersized

	Author	: Sam Dunn
	Company : One Mighty Roar (www.onemightyroar.com)
	License : MIT License / GPL License

*/
(function(e) {
    e(document).ready(function() {
        e("body").append('<div id="supersized-loader"></div><ul id="supersized"></ul>')
    });
    e.supersized = function(t) {
        var n = "#supersized",
            r = this;
        r.$el = e(n);
        r.el = n;
        vars = e.supersized.vars;
        r.$el.data("supersized", r);
        api = r.$el.data("supersized");
        r.init = function() {
            e.supersized.vars = e.extend(e.supersized.vars, e.supersized.themeVars);
            e.supersized.vars.options = e.extend({}, e.supersized.defaultOptions, e.supersized.themeOptions, t);
            r.options = e.supersized.vars.options;
            r._build()
        };
        r._build = function() {
            var t = 0,
                n = "",
                i = "",
                s, o = "",
                u;
            while (t <= r.options.slides.length - 1) {
                switch (r.options.slide_links) {
                    case "num":
                        s = t;
                        break;
                    case "name":
                        s = r.options.slides[t].title;
                        break;
                    case "blank":
                        s = ""
                }
                n = n + '<li class="slide-' + t + '"></li>';
                if (t == r.options.start_slide - 1) {
                    r.options.slide_links && (i = i + '<li class="slide-link-' + t + ' current-slide"><a>' + s + "</a></li>");
                    if (r.options.thumb_links) {
                        r.options.slides[t].thumb ? u = r.options.slides[t].thumb : u = r.options.slides[t].image;
                        o = o + '<li class="thumb' + t + ' current-thumb"><img src="' + u + '"/></li>'
                    }
                } else {
                    r.options.slide_links && (i = i + '<li class="slide-link-' + t + '" ><a>' + s + "</a></li>");
                    if (r.options.thumb_links) {
                        r.options.slides[t].thumb ? u = r.options.slides[t].thumb : u = r.options.slides[t].image;
                        o = o + '<li class="thumb' + t + '"><img src="' + u + '"/></li>'
                    }
                }
                t++
            }
            r.options.slide_links && e(vars.slide_list).html(i);
            r.options.thumb_links && vars.thumb_tray.length && e(vars.thumb_tray).append('<ul id="' + vars.thumb_list.replace("#", "") + '">' + o + "</ul>");
            e(r.el).append(n);
            if (r.options.thumbnail_navigation) {
                vars.current_slide - 1 < 0 ? prevThumb = r.options.slides.length - 1 : prevThumb = vars.current_slide - 1;
                e(vars.prev_thumb).show().html(e("<img/>").attr("src", r.options.slides[prevThumb].image));
                vars.current_slide == r.options.slides.length - 1 ? nextThumb = 0 : nextThumb = vars.current_slide + 1;
                e(vars.next_thumb).show().html(e("<img/>").attr("src", r.options.slides[nextThumb].image))
            }
            r._start()
        };
        r._start = function() {
            r.options.start_slide ? vars.current_slide = r.options.start_slide - 1 : vars.current_slide = Math.floor(Math.random() * r.options.slides.length);
            var t = r.options.new_window ? ' target="_blank"' : "";
            r.options.performance == 3 ? r.$el.addClass("speed") : (r.options.performance == 1 || r.options.performance == 2) && r.$el.addClass("quality");
            if (r.options.random) {
                arr = r.options.slides;
                for (var n, i, s = arr.length; s; n = parseInt(Math.random() * s), i = arr[--s], arr[s] = arr[n], arr[n] = i);
                r.options.slides = arr
            }
            if (r.options.slides.length > 1) {
                if (r.options.slides.length > 2) {
                    vars.current_slide - 1 < 0 ? loadPrev = r.options.slides.length - 1 : loadPrev = vars.current_slide - 1;
                    var o = r.options.slides[loadPrev].url ? "href='" + r.options.slides[loadPrev].url + "'" : "",
                        u = e('<img src="' + r.options.slides[loadPrev].image + '" alt="' + r.options.slides[loadPrev].alttext + '"/>'),
                        a = r.el + " li:eq(" + loadPrev + ")";
                    u.appendTo(a).wrap("<a " + o + t + "></a>").parent().parent().addClass("image-loading prevslide");
                    u.load(function() {
                        e(this).data("origWidth", e(this).width()).data("origHeight", e(this).height());
                        r.resizeNow()
                    })
                }
            } else r.options.slideshow = 0;
            o = api.getField("url") ? "href='" + api.getField("url") + "'" : "";
            var f = e('<img src="' + api.getField("image") + '" alt="' + api.getField("alttext") + '"/>'),
                l = r.el + " li:eq(" + vars.current_slide + ")";
            f.appendTo(l).wrap("<a " + o + t + "></a>").parent().parent().addClass("image-loading activeslide");
            f.load(function() {
                r._origDim(e(this));
                r.resizeNow();
                r.launch();
                typeof theme != "undefined" && typeof theme._init == "function" && theme._init()
            });
            if (r.options.slides.length > 1) {
                vars.current_slide == r.options.slides.length - 1 ? loadNext = 0 : loadNext = vars.current_slide + 1;
                o = r.options.slides[loadNext].url ? "href='" + r.options.slides[loadNext].url + "'" : "";
                var c = e('<img src="' + r.options.slides[loadNext].image + '" alt="' + r.options.slides[loadNext].alttext + '"/>'),
                    h = r.el + " li:eq(" + loadNext + ")";
                c.appendTo(h).wrap("<a " + o + t + "></a>").parent().parent().addClass("image-loading");
                c.load(function() {
                    e(this).data("origWidth", e(this).width()).data("origHeight", e(this).height());
                    r.resizeNow()
                })
            }
            r.$el.css("visibility", "hidden");
            e(".load-item").hide()
        };
        r.launch = function() {
            r.$el.css("visibility", "visible");
            e("#supersized-loader").remove();
            typeof theme != "undefined" && typeof theme.beforeAnimation == "function" && theme.beforeAnimation("next");
            e(".load-item").show();
            r.options.keyboard_nav && e(document.documentElement).keyup(function(e) {
                if (vars.in_animation) return !1;
                if (e.keyCode == 37 || e.keyCode == 40) {
                    clearInterval(vars.slideshow_interval);
                    r.prevSlide()
                } else if (e.keyCode == 39 || e.keyCode == 38) {
                    clearInterval(vars.slideshow_interval);
                    r.nextSlide()
                } else if (e.keyCode == 32 && !vars.hover_pause) {
                    clearInterval(vars.slideshow_interval);
                    r.playToggle()
                }
            });
            r.options.slideshow && r.options.pause_hover && e(r.el).hover(function() {
                if (vars.in_animation) return !1;
                vars.hover_pause = !0;
                if (!vars.is_paused) {
                    vars.hover_pause = "resume";
                    r.playToggle()
                }
            }, function() {
                if (vars.hover_pause == "resume") {
                    r.playToggle();
                    vars.hover_pause = !1
                }
            });
            r.options.slide_links && e(vars.slide_list + "> li").click(function() {
                index = e(vars.slide_list + "> li").index(this);
                targetSlide = index + 1;
                r.goTo(targetSlide);
                return !1
            });
            r.options.thumb_links && e(vars.thumb_list + "> li").click(function() {
                index = e(vars.thumb_list + "> li").index(this);
                targetSlide = index + 1;
                api.goTo(targetSlide);
                return !1
            });
            if (r.options.slideshow && r.options.slides.length > 1) {
                r.options.autoplay && r.options.slides.length > 1 ? vars.slideshow_interval = setInterval(r.nextSlide, r.options.slide_interval) : vars.is_paused = !0;
                e(".load-item img").bind("contextmenu mousedown", function() {
                    return !1
                })
            }
            e(window).resize(function() {
                r.resizeNow()
            })
        };
        r.resizeNow = function() {
            return r.$el.each(function() {
                e("img", r.el).each(function() {
                    function o(e) {
                        if (e) {
                            if (thisSlide.width() < n || thisSlide.width() < r.options.min_width)
                                if (thisSlide.width() * t >= r.options.min_height) {
                                    thisSlide.width(r.options.min_width);
                                    thisSlide.height(thisSlide.width() * t)
                                } else u()
                        } else if (r.options.min_height >= i && !r.options.fit_landscape) {
                            if (n * t >= r.options.min_height || n * t >= r.options.min_height && t <= 1) {
                                thisSlide.width(n);
                                thisSlide.height(n * t)
                            } else if (t > 1) {
                                thisSlide.height(r.options.min_height);
                                thisSlide.width(thisSlide.height() / t)
                            } else if (thisSlide.width() < n) {
                                thisSlide.width(n);
                                thisSlide.height(thisSlide.width() * t)
                            }
                        } else {
                            thisSlide.width(n);
                            thisSlide.height(n * t)
                        }
                    }

                    function u(e) {
                        if (e) {
                            if (thisSlide.height() < i)
                                if (thisSlide.height() / t >= r.options.min_width) {
                                    thisSlide.height(r.options.min_height);
                                    thisSlide.width(thisSlide.height() / t)
                                } else o(!0)
                        } else if (r.options.min_width >= n) {
                            if (i / t >= r.options.min_width || t > 1) {
                                thisSlide.height(i);
                                thisSlide.width(i / t)
                            } else if (t <= 1) {
                                thisSlide.width(r.options.min_width);
                                thisSlide.height(thisSlide.width() * t)
                            }
                        } else {
                            thisSlide.height(i);
                            thisSlide.width(i / t)
                        }
                    }
                    thisSlide = e(this);
                    var t = (thisSlide.data("origHeight") / thisSlide.data("origWidth")).toFixed(2),
                        n = r.$el.width(),
                        i = r.$el.height(),
                        s;
                    r.options.fit_always ? i / n > t ? o() : u() : i <= r.options.min_height && n <= r.options.min_width ? i / n > t ? r.options.fit_landscape && t < 1 ? o(!0) : u(!0) : r.options.fit_portrait && t >= 1 ? u(!0) : o(!0) : n <= r.options.min_width ? i / n > t ? r.options.fit_landscape && t < 1 ? o(!0) : u() : r.options.fit_portrait && t >= 1 ? u() : o(!0) : i <= r.options.min_height ? i / n > t ? r.options.fit_landscape && t < 1 ? o() : u(!0) : r.options.fit_portrait && t >= 1 ? u(!0) : o() : i / n > t ? r.options.fit_landscape && t < 1 ? o() : u() : r.options.fit_portrait && t >= 1 ? u() : o();
                    thisSlide.parents("li").hasClass("image-loading") && e(".image-loading").removeClass("image-loading");
                    r.options.horizontal_center && e(this).css("left", (n - e(this).width()) / 2);
                    r.options.vertical_center && e(this).css("top", (i - e(this).height()) / 2)
                });
                r.options.image_protect && e("img", r.el).bind("contextmenu mousedown", function() {
                    return !1
                });
                return !1
            })
        };
        r.nextSlide = function() {
            if (vars.in_animation || !api.options.slideshow) return !1;
            vars.in_animation = !0;
            clearInterval(vars.slideshow_interval);
            var t = r.options.slides,
                n = r.$el.find(".activeslide");
            e(".prevslide").removeClass("prevslide");
            n.removeClass("activeslide").addClass("prevslide");
            vars.current_slide + 1 == r.options.slides.length ? vars.current_slide = 0 : vars.current_slide++;
            var i = e(r.el + " li:eq(" + vars.current_slide + ")"),
                s = r.$el.find(".prevslide");
            r.options.performance == 1 && r.$el.removeClass("quality").addClass("speed");
            loadSlide = !1;
            vars.current_slide == r.options.slides.length - 1 ? loadSlide = 0 : loadSlide = vars.current_slide + 1;
            var o = r.el + " li:eq(" + loadSlide + ")";
            if (!e(o).html()) {
                var u = r.options.new_window ? ' target="_blank"' : "";
                imageLink = r.options.slides[loadSlide].url ? "href='" + r.options.slides[loadSlide].url + "'" : "";
                var a = e('<img src="' + r.options.slides[loadSlide].image + '" alt="' + r.options.slides[loadSlide].alttext + '"/>');
                a.appendTo(o).wrap("<a " + imageLink + u + "></a>").parent().parent().addClass("image-loading").css("visibility", "hidden");
                a.load(function() {
                    r._origDim(e(this));
                    r.resizeNow()
                })
            }
            if (r.options.thumbnail_navigation == 1) {
                vars.current_slide - 1 < 0 ? prevThumb = r.options.slides.length - 1 : prevThumb = vars.current_slide - 1;
                e(vars.prev_thumb).html(e("<img/>").attr("src", r.options.slides[prevThumb].image));
                nextThumb = loadSlide;
                e(vars.next_thumb).html(e("<img/>").attr("src", r.options.slides[nextThumb].image))
            }
            typeof theme != "undefined" && typeof theme.beforeAnimation == "function" && theme.beforeAnimation("next");
            if (r.options.slide_links) {
                e(".current-slide").removeClass("current-slide");
                e(vars.slide_list + "> li").eq(vars.current_slide).addClass("current-slide")
            }
            i.css("visibility", "hidden").addClass("activeslide");
            switch (r.options.transition) {
                case 0:
                case "none":
                    i.css({
                        width: "0%",
                        visibility: "visible"
                    }).velocity({
                        width: "100%",
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    break;
                case 1:
                case "fade":
                    i.css({
                        opacity: 0,
                        visibility: "visible"
                    }).animate({
                        opacity: 1,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    break;
                case 2:
                case "slideTop":
                    i.css({
                        top: -r.$el.height(),
                        visibility: "visible"
                    }).animate({
                        top: 0,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    break;
                case 3:
                case "slideRight":
                    i.css({
                        left: r.$el.width(),
                        visibility: "visible"
                    }).animate({
                        left: 0,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    break;
                case 4:
                case "slideBottom":
                    i.css({
                        top: r.$el.height(),
                        visibility: "visible"
                    }).animate({
                        top: 0,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    break;
                case 5:
                case "slideLeft":
                    i.css({
                        left: -r.$el.width(),
                        visibility: "visible"
                    }).animate({
                        left: 0,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    break;
                case 6:
                case "carouselRight":
                    i.css({
                        left: r.$el.width(),
                        visibility: "visible"
                    }).animate({
                        left: 0,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    n.animate({
                        left: -r.$el.width(),
                        avoidTransforms: !1
                    }, r.options.transition_speed);
                    break;
                case 7:
                case "carouselLeft":
                    i.css({
                        left: -r.$el.width(),
                        visibility: "visible"
                    }).animate({
                        left: 0,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    n.animate({
                        left: r.$el.width(),
                        avoidTransforms: !1
                    }, r.options.transition_speed)
            }
            return !1
        };
        r.prevSlide = function() {
            if (vars.in_animation || !api.options.slideshow) return !1;
            vars.in_animation = !0;
            clearInterval(vars.slideshow_interval);
            var t = r.options.slides,
                n = r.$el.find(".activeslide");
            e(".prevslide").removeClass("prevslide");
            n.removeClass("activeslide").addClass("prevslide");
            vars.current_slide == 0 ? vars.current_slide = r.options.slides.length - 1 : vars.current_slide--;
            var i = e(r.el + " li:eq(" + vars.current_slide + ")"),
                s = r.$el.find(".prevslide");
            r.options.performance == 1 && r.$el.removeClass("quality").addClass("speed");
            loadSlide = vars.current_slide;
            var o = r.el + " li:eq(" + loadSlide + ")";
            if (!e(o).html()) {
                var u = r.options.new_window ? ' target="_blank"' : "";
                imageLink = r.options.slides[loadSlide].url ? "href='" + r.options.slides[loadSlide].url + "'" : "";
                var a = e('<img src="' + r.options.slides[loadSlide].image + '" alt="' + r.options.slides[loadSlide].alttext + '"/>');
                a.appendTo(o).wrap("<a " + imageLink + u + "></a>").parent().parent().addClass("image-loading").css("visibility", "hidden");
                a.load(function() {
                    r._origDim(e(this));
                    r.resizeNow()
                })
            }
            if (r.options.thumbnail_navigation == 1) {
                loadSlide == 0 ? prevThumb = r.options.slides.length - 1 : prevThumb = loadSlide - 1;
                e(vars.prev_thumb).html(e("<img/>").attr("src", r.options.slides[prevThumb].image));
                vars.current_slide == r.options.slides.length - 1 ? nextThumb = 0 : nextThumb = vars.current_slide + 1;
                e(vars.next_thumb).html(e("<img/>").attr("src", r.options.slides[nextThumb].image))
            }
            typeof theme != "undefined" && typeof theme.beforeAnimation == "function" && theme.beforeAnimation("prev");
            if (r.options.slide_links) {
                e(".current-slide").removeClass("current-slide");
                e(vars.slide_list + "> li").eq(vars.current_slide).addClass("current-slide")
            }
            i.css("visibility", "hidden").addClass("activeslide");
            switch (r.options.transition) {
                case 0:
                case "none":
                    i.css({
                        width: "0%",
                        visibility: "visible"
                    }).velocity({
                        width: "100%",
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    break;
                case 1:
                case "fade":
                    i.css({
                        opacity: 0,
                        visibility: "visible"
                    }).animate({
                        opacity: 1,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    break;
                case 2:
                case "slideTop":
                    i.css({
                        top: r.$el.height(),
                        visibility: "visible"
                    }).animate({
                        top: 0,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    break;
                case 3:
                case "slideRight":
                    i.css({
                        left: -r.$el.width(),
                        visibility: "visible"
                    }).animate({
                        left: 0,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    break;
                case 4:
                case "slideBottom":
                    i.css({
                        top: -r.$el.height(),
                        visibility: "visible"
                    }).animate({
                        top: 0,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    break;
                case 5:
                case "slideLeft":
                    i.css({
                        left: r.$el.width(),
                        visibility: "visible"
                    }).animate({
                        left: 0,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    break;
                case 6:
                case "carouselRight":
                    i.css({
                        left: -r.$el.width(),
                        visibility: "visible"
                    }).animate({
                        left: 0,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    n.css({
                        left: 0
                    }).animate({
                        left: r.$el.width(),
                        avoidTransforms: !1
                    }, r.options.transition_speed);
                    break;
                case 7:
                case "carouselLeft":
                    i.css({
                        left: r.$el.width(),
                        visibility: "visible"
                    }).animate({
                        left: 0,
                        avoidTransforms: !1
                    }, r.options.transition_speed, function() {
                        r.afterAnimation()
                    });
                    n.css({
                        left: 0
                    }).animate({
                        left: -r.$el.width(),
                        avoidTransforms: !1
                    }, r.options.transition_speed)
            }
            return !1
        };
        r.playToggle = function() {
            if (vars.in_animation || !api.options.slideshow) return !1;
            if (vars.is_paused) {
                vars.is_paused = !1;
                typeof theme != "undefined" && typeof theme.playToggle == "function" && theme.playToggle("play");
                vars.slideshow_interval = setInterval(r.nextSlide, r.options.slide_interval)
            } else {
                vars.is_paused = !0;
                typeof theme != "undefined" && typeof theme.playToggle == "function" && theme.playToggle("pause");
                clearInterval(vars.slideshow_interval)
            }
            return !1
        };
        r.goTo = function(t) {
            if (vars.in_animation || !api.options.slideshow) return !1;
            var n = r.options.slides.length;
            t < 0 ? t = n : t > n && (t = 1);
            t = n - t + 1;
            clearInterval(vars.slideshow_interval);
            typeof theme != "undefined" && typeof theme.goTo == "function" && theme.goTo();
            if (vars.current_slide == n - t) {
                vars.is_paused || (vars.slideshow_interval = setInterval(r.nextSlide, r.options.slide_interval));
                return !1
            }
            if (n - t > vars.current_slide) {
                vars.current_slide = n - t - 1;
                vars.update_images = "next";
                r._placeSlide(vars.update_images)
            } else if (n - t < vars.current_slide) {
                vars.current_slide = n - t + 1;
                vars.update_images = "prev";
                r._placeSlide(vars.update_images)
            }
            if (r.options.slide_links) {
                e(vars.slide_list + "> .current-slide").removeClass("current-slide");
                e(vars.slide_list + "> li").eq(n - t).addClass("current-slide")
            }
            if (r.options.thumb_links) {
                e(vars.thumb_list + "> .current-thumb").removeClass("current-thumb");
                e(vars.thumb_list + "> li").eq(n - t).addClass("current-thumb")
            }
        };
        r._placeSlide = function(t) {
            var n = r.options.new_window ? ' target="_blank"' : "";
            loadSlide = !1;
            if (t == "next") {
                vars.current_slide == r.options.slides.length - 1 ? loadSlide = 0 : loadSlide = vars.current_slide + 1;
                var i = r.el + " li:eq(" + loadSlide + ")";
                if (!e(i).html()) {
                    var n = r.options.new_window ? ' target="_blank"' : "";
                    imageLink = r.options.slides[loadSlide].url ? "href='" + r.options.slides[loadSlide].url + "'" : "";
                    var s = e('<img src="' + r.options.slides[loadSlide].image + '" alt="' + r.options.slides[loadSlide].alttext + '"/>');
                    s.appendTo(i).wrap("<a " + imageLink + n + "></a>").parent().parent().addClass("image-loading").css("visibility", "hidden");
                    s.load(function() {
                        r._origDim(e(this));
                        r.resizeNow()
                    })
                }
                r.nextSlide()
            } else if (t == "prev") {
                vars.current_slide - 1 < 0 ? loadSlide = r.options.slides.length - 1 : loadSlide = vars.current_slide - 1;
                var i = r.el + " li:eq(" + loadSlide + ")";
                if (!e(i).html()) {
                    var n = r.options.new_window ? ' target="_blank"' : "";
                    imageLink = r.options.slides[loadSlide].url ? "href='" + r.options.slides[loadSlide].url + "'" : "";
                    var s = e('<img src="' + r.options.slides[loadSlide].image + '" alt="' + r.options.slides[loadSlide].alttext + '"/>');
                    s.appendTo(i).wrap("<a " + imageLink + n + "></a>").parent().parent().addClass("image-loading").css("visibility", "hidden");
                    s.load(function() {
                        r._origDim(e(this));
                        r.resizeNow()
                    })
                }
                r.prevSlide()
            }
        };
        r._origDim = function(e) {
            e.data("origWidth", e.width()).data("origHeight", e.height())
        };
        r.afterAnimation = function() {
            r.options.performance == 1 && r.$el.removeClass("speed").addClass("quality");
            if (vars.update_images) {
                vars.current_slide - 1 < 0 ? setPrev = r.options.slides.length - 1 : setPrev = vars.current_slide - 1;
                vars.update_images = !1;
                e(".prevslide").removeClass("prevslide");
                e(r.el + " li:eq(" + setPrev + ")").addClass("prevslide")
            }
            vars.in_animation = !1;
            if (!vars.is_paused && r.options.slideshow) {
                vars.slideshow_interval = setInterval(r.nextSlide, r.options.slide_interval);
                r.options.stop_loop && vars.current_slide == r.options.slides.length - 1 && r.playToggle()
            }
            typeof theme != "undefined" && typeof theme.afterAnimation == "function" && theme.afterAnimation();
            return !1
        };
        r.getField = function(e) {
            return r.options.slides[vars.current_slide][e]
        };
        r.init()
    };
    e.supersized.vars = {
        thumb_tray: "#thumb-tray",
        thumb_list: "#thumb-list",
        slide_list: "#slide-list",
        current_slide: 0,
        in_animation: !1,
        is_paused: !1,
        hover_pause: !1,
        slideshow_interval: !1,
        update_images: !1,
        options: {}
    };
    e.supersized.defaultOptions = {
        slideshow: 1,
        autoplay: 1,
        start_slide: 1,
        stop_loop: 0,
        random: 0,
        slide_interval: 5e3,
        transition: 1,
        transition_speed: 750,
        new_window: 1,
        pause_hover: 0,
        keyboard_nav: 1,
        performance: 1,
        image_protect: 1,
        fit_always: 0,
        fit_landscape: 0,
        fit_portrait: 1,
        min_width: 0,
        min_height: 0,
        horizontal_center: 1,
        vertical_center: 1,
        slide_links: 1,
        thumb_links: 1,
        thumbnail_navigation: 0
    };
    e.fn.supersized = function(t) {
        return this.each(function() {
            new e.supersized(t)
        })
    }
})(jQuery);
