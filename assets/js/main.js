(function ($) {
    "use strict";

    /*--------------------------
    preloader
    ---------------------------- */
    $(window).on("load", function () {
        var preLoader = $("#preloader");
        preLoader.fadeOut("slow", function () {
            $(this).remove();
        });
    });

    /*---------------------
     TOP Menu Stick
    --------------------- */
    var s = $("#sticker");
    var pos = s.position();
    $(window).on("scroll", function () {
        var windowpos = $(window).scrollTop() > 300;
        if (windowpos > pos.top) {
            s.addClass("stick");
        } else {
            s.removeClass("stick");
        }
    });

    /*----------------------------
     Navbar nav
    ------------------------------ */
    var mainMenu = $(".main-menu ul.navbar-nav li ");
    mainMenu.on("click", function () {
        mainMenu.removeClass("active");
        $(this).addClass("active");
    });

    /*----------------------------
     wow js active
    ------------------------------ */
    new WOW().init();

    $(".navbar-collapse a:not(.dropdown-toggle)").on("click", function () {
        $(".navbar-collapse.collapse").removeClass("in");
    });

    //---------------------------------------------
    //Nivo slider
    //---------------------------------------------
    $("#ensign-nivoslider").nivoSlider({
        effect: "random",
        slices: 15,
        boxCols: 12,
        boxRows: 8,
        animSpeed: 500,
        pauseTime: 5000,
        startSlide: 0,
        directionNav: true,
        controlNavThumbs: false,
        pauseOnHover: true,
        manualAdvance: false,
    });

    /*----------------------------
     Scrollspy js
    ------------------------------ */
    var Body = $("body");
    Body.scrollspy({
        target: ".navbar-collapse",
        offset: 80
    });

    /*---------------------
      Venobox
    --------------------- */
    var venoBox = $(".venobox");
    venoBox.venobox();

    /*----------------------------
    Page Scroll
    ------------------------------ */
    var pageScroll = $("a.page-scroll");
    pageScroll.on("click", function (event) {
        var $anchor = $(this);
        $("html, body").stop().animate({
            scrollTop: $($anchor.attr("href")).offset().top - 55
        }, 1500, "easeInOutExpo");
        event.preventDefault();
    });

    /*--------------------------
      Back to top button
    ---------------------------- */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });

    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });

    /*----------------------------
     Parallax
    ------------------------------ */
    var wellLax = $(".wellcome-area");
    wellLax.parallax("50%", 0.4);
    var wellText = $(".wellcome-text");
    wellText.parallax("50%", 0.6);

    /*--------------------------
     collapse
    ---------------------------- */
    var panelTest = $(".panel-heading a");
    panelTest.on("click", function () {
        panelTest.removeClass("active");
        $(this).addClass("active");
    });

    /*---------------------
     Testimonial carousel
    ---------------------*/
    var testCarousel = $(".testimonial-carousel");
    testCarousel.owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    /*----------------------------
     isotope active
    ------------------------------ */
    // portfolio start
    $(window).on("load", function () {
        var $container = $(".awesome-project-content");
        $container.isotope({
            filter: "*",
            animationOptions: {
                duration: 750,
                easing: "linear",
                queue: false
            }
        });
        var proMenu = $(".project-menu li a");
        proMenu.on("click", function () {
            var proMenuActive = $(".project-menu li a.active");
            proMenuActive.removeClass("active");
            $(this).addClass("active");
            var selector = $(this).attr("data-filter");
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: "linear",
                    queue: false
                }
            });
            return false;
        });

    });
    //portfolio end

    /*---------------------
     Circular Bars - Knob
  --------------------- */
    if (typeof ($.fn.knob) != "undefined") {
        var knobTex = $(".knob");
        knobTex.each(function () {
            var $this = $(this),
                knobVal = $this.attr("data-rel");

            $this.knob({
                "draw": function () {
                    $(this.i).val(this.cv + "%")
                }
            });

            $this.appear(function () {
                $({
                    value: 0
                }).animate({
                    value: knobVal
                }, {
                    duration: 2000,
                    easing: "swing",
                    step: function () {
                        $this.val(Math.ceil(this.value)).trigger("change");
                    }
                });
            }, {
                accX: 0,
                accY: -150
            });
        });
    }

})(jQuery);
