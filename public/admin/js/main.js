

(function ($) {
    "use strict";

    /*========== LOADING PAGE ==========*/
    $(window).on('load', function () {
        $(".preloader").fadeOut(500);
    });


    /*Document is Raedy */
    $(document).ready(function () {

        /*========== SMOOTHSTATE ==========*/
        $('#smoothpage').smoothState({
            anchors: 'nav a',
            blacklist: 'form',
        });

        /*========== TEXT ROTATION ==========*/
        $("#text_rotating").Morphext({
            animation: "fadeInDown",
            separator: ",",
            speed: 5000,
            complete: function () { }
        });

        /*========== WOW ==========*/
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: true,
            live: true,
            callback: function (box) { }
        });
        wow.init();

        /*========== MENU ==========*/
        $(window).on("scroll", function () {

            var header = $('header')

            if (header.length > 0) {

                var window_height = $(this).scrollTop();
                var topmenuheight = 50;

                if (window_height > topmenuheight) {

                    if (header.hasClass("transparent"))
                        header.addClass("nav_bg");
                    // Logo
                    $(".light").addClass("nodisplay");
                    $(".dark").removeClass("nodisplay");

                    // Check if Header is fixed or not
                    if (header.hasClass('fixed')) {
                        header.addClass('navbar-fixed-top');
                        // Add scroll Class
                        header.addClass("scroll");
                    }

                } else {
                    if (header.hasClass("nav_bg"))
                        header.removeClass("nav_bg");

                    $(".dark").addClass("nodisplay");
                    $(".light").removeClass("nodisplay");

                    header.removeClass("scroll");
                    header.removeClass("navbar-fixed-top");
                }
            }
        });

        $(function () {
            function toggleNavbarMethod() {
                if ($(window).width() > 992) {

                    $('.dropdown')
                        .on('mouseover', function () {
                            $(this).addClass('open');
                            $('b', this).toggleClass("caret caret-up");
                        })

                        .on('mouseout', function () {
                            $(this).removeClass('open');
                            $('b', this).toggleClass("caret caret-up");
                        });


                } else {
                    $('.dropdown').off('mouseover').off('mouseout');
                    $('.dropdown-toggle')

                        .on('click', function (e) {
                            $('b', this).toggleClass("caret caret-up");
                        });

                }
            }
            toggleNavbarMethod();
            $(window).on("resize", (toggleNavbarMethod));

            $(".navbar-toggle").on("click", function () {
                $(this).toggleClass("active");
            });
        });

        /*========== MOBILE MENU ==========*/
        $('.mobile_menu_btn').jPushMenu({
            closeOnClickLink: false
        });
        $('.dropdown-toggle').dropdown();


        /*========== REVOLUTION SLIDER ==========*/

        /* ----- Home Page 1 ----- */
        if ($("#hero").length > 0) {
            var tpj = jQuery;
            var revapi429;
            tpj(document).ready(function () {
                if (tpj("#hero").revolution == undefined) {
                    revslider_showDoubleJqueryError("#hero");
                } else {
                    revapi429 = tpj("#hero").show().revolution({
                        sliderType: "hero",
                        dottedOverlay: "none",
                        delay: 9000,
                        responsiveLevels: [1200, 992, 768, 480],
                        visibilityLevels: [1200, 992, 768, 480],
                        gridwidth: [1200, 992, 768, 480],
                        gridheight: [800, 800, 500, 400],
                        lazyType: "none",
                        parallax: {
                            type: "scroll",
                            origo: "enterpoint",
                            speed: 400,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                        },
                        shadow: 0,
                        spinner: "off",
                        autoHeight: "off",
                        forceFullWidth: "off",
                        disableProgressBar: "on",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            disableFocusListener: false,
                        }
                    });
                }
            });
        };



        $.each($('.countup'), function () {
            var count = $(this).data('count'),
                numAnim = new CountUp(this, 0, count);

            numAnim.start();
        });

        /*========== TESTIMONIALS - OWL CAROUSEL ==========*/
        var owl = $('#testimonials_slider');
        owl.owlCarousel({
            loop: true,
            margin: 10,
            items: 1,
            nav: false,
        });

        /*========== AWESOME FEATURESS ==========*/
        var sliderId = $('#features_slider'); // Slider ID
        sliderId.owlCarousel({
            thumbs: true,
            thumbsPrerendered: true,
            items: 1,
            loop: true,
            autoplay: true,
            dots: false,
            nav: false,
        });

        /*========== ISOTOPE ==========*/
        /* $(function () {
            var $grid = $('.grid').isotope({
                itemSelector: '.g_item'
            });
            // filters
            $('.grid_filters').on('click', 'a', function (e) {
                e.preventDefault();
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            // active class
            $('.grid_filters').each(function (i, buttonGroup) {
                var $buttonGroup = $(buttonGroup);
                $buttonGroup.on('click', 'a', function () {
                    $buttonGroup.find('.active').removeClass('active');
                    $(this).addClass('active');
                });
            });

            if ($("#gallery").length > 0) {
                // layout Isotope after each image loads
                $grid.imagesLoaded().progress(function () {
                    $grid.isotope('layout');
                });
            }


        }); */

        /*========== GALLERY SLIDER ==========*/
        var owl = $('#gallery_slider');
        owl.owlCarousel({
            loop: true,
            nav: false,
            margin: 10,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                960: {
                    items: 3
                },
                1200: {
                    items: 5
                }
            }
        });

        /*========== GALLERY SLIDER ==========*/
        var owl = $('.testi.owl-carousel');
        owl.owlCarousel({
            loop: true,
            nav: false,
            margin: 10,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                960: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });

        /*========== ROOM SLIDER ==========*/
        var $sync1 = $("#slider-larg"),
            $sync2 = $("#thumbs"),
            duration = 300;

        $sync1.owlCarousel({
            items: 1,
            dots: false,
        })
            .on('changed.owl.carousel', function (e) {
                var syncedPosition = syncPosition(e.item.index);

                if (syncedPosition != "stayStill") {
                    $sync2.trigger('to.owl.carousel', [syncedPosition, duration, true]);
                }
            });

        $sync2
            .on('initialized.owl.carousel', function () {
                addClassCurrent(0);
            })
            .owlCarousel({
                dots: false,
                responsive: {
                    0: {
                        items: 4
                    },
                    600: {
                        items: 4
                    },
                    960: {
                        items: 5
                    },
                    1200: {
                        items: 6
                    }
                }
            })
            .on('click', '.owl-item', function () {
                $sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
            });

        function addClassCurrent(index) {
            $sync2
                .find(".owl-item")
                .removeClass("active-item")
                .eq(index).addClass("active-item");
        }
        function syncPosition(index) {
            addClassCurrent(index);
            var itemsNo = $sync2.find(".owl-item").length; //total items
            var visibleItemsNo = $sync2.find(".owl-item.active").length; //visible items

            if (itemsNo === visibleItemsNo) {
                return "stayStill";
            }
            var visibleCurrentIndex = $sync2.find(".owl-item.active").index($sync2.find(".owl-item.active-item"));

            if (visibleCurrentIndex == 0 && index != 0) {
                return index - 1;
            }
            if (visibleCurrentIndex == (visibleItemsNo - 1) && index != (itemsNo - 1)) {
                return index - visibleItemsNo + 2;
            }
            return "stayStill";
        }

        /*========== ROOMS LIST - OWL CAROUSEL ==========*/
        var owl = $('.room_list_slider');
        owl.owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            nav: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ]
        });

        /*========== DATE PICKER ==========*/
        // $('.datepicker').datepicker({
        //     format: "dd/mm/yyyy", //Set Date Format
        //     startDate: new Date(), //Set Min Date Today
        //     endDate: "18/12/2025", //Set Max Date
        //     datesDisabled: ['16/02/2021', '17/04/2021', '25/05/2021'], //Set Disabled Dates
        //     autoclose: true,
        //     todayHighlight: true,
        // });

        /*========== SELECT PICKER ==========*/
        /* $('select').selectpicker({
            style: 'btn-select',
            size: 'auto',
            container: 'body',
        });
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
            $('select').selectpicker('mobile');
        } */

        /*========== BOOKING FORM ==========*/
        $("#booking-form, #horizontal_booking_form, #booking_form_advanced").on('submit', function (e) {
            e.preventDefault();

            //Get input field values from HTML form
            var booking_name = $("input[name=booking-name]").val();
            var booking_email = $("input[name=booking-email]").val();
            var booking_phone = $("input[name=booking-phone]").val();
            var booking_roomtype = $("select[name=booking-roomtype]").val();
            var booking_adults = $("select[name=booking-adults]").val();
            var booking_children = $("select[name=booking-children]").val();
            var booking_checkin = $("input[name=booking-checkin]").val();
            var booking_checkout = $("input[name=booking-checkout]").val();
            var booking_country = $("select[name=booking-country]").val();
            var booking_comments = $("textarea[name=booking-comments]").val();

            //Data to be sent to server
            var post_data;
            var output;
            post_data = {
                'booking_name': booking_name,
                'booking_email': booking_email,
                'booking_phone': booking_phone,
                'booking_roomtype': booking_roomtype,
                'booking_checkin': booking_checkin,
                'booking_checkout': booking_checkout,
                'booking_adults': booking_adults,
                'booking_children': booking_children,
                'booking_country': booking_country,
                'booking_comments': booking_comments
            };

            //Ajax post data to server
            $.post('email/booking.php', post_data, function (response) {

                //Response server message
                if (response.type == 'error') {
                    output = '<div class="notification error"><span class="notification-icon"><i class="fa fa-exclamation" aria-hidden="true"></i></span><span class="notification-text">' + response.text + '</span></div>';
                } else {
                    output = '<div class="notification success"><span class="notification-icon"><i class="fa fa-check" aria-hidden="true"></i></span><span class="notification-text">' + response.text + '</span></div>';

                    //If success clear inputs
                    $("input, textarea").val('');
                    $('select').val('');
                    $('select').val('').selectpicker('refresh');
                }

                $("#notification").html(output);
                $(".notification").delay(15000).queue(function (next) {
                    $(this).addClass("scale-out");
                    next();
                });
                $(".notification").on("click", function () {
                    $(this).addClass("scale-out");
                });

            }, 'json');

        });




        /*  $('.image-gallery').magnificPopup({
             delegate: 'a',
             type: 'image',
             fixedContentPos: true,
             gallery: {
                 enabled: true
             },
             removalDelay: 300,
             mainClass: 'mfp-fade',
             retina: {
                 ratio: 1,
                 replaceSrc: function (item, ratio) {
                     return item.src.replace(/\.\w+$/, function (m) {
                         return '@2x' + m;
                     });
                 }
             }
 
         }); */
























    });
})(jQuery);