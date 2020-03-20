/*

[Main Script]

Project     : CloudSky - Multipurpose Domain, Hosting and WHMCS Template
Version     : 1.5
Author      : ThemeLooks
Author URI  : https://themeforest.net/user/themelooks

*/

;(function ($) {
    'use strict';
    
    /* ------------------------------------------------------------------------- *
     * COMMON VARIABLES
     * ------------------------------------------------------------------------- */
    var $wn = $(window),
        $document = $(document),
        $body = $('body'),
        isRTL = $('html').attr('dir') === 'rtl' ? true : false;
    
    /* ------------------------------------------------------------------------- *
     * CHECK DATA
     * ------------------------------------------------------------------------- */
    var checkData = function (data, value) {
        return typeof data === 'undefined' ? value : data;
    };

    $(function () {
        /* ------------------------------------------------------------------------- *
         * BACKGROUND IMAGE
         * ------------------------------------------------------------------------- */
        var $bgImg = $('[data-bg-img]');

        $bgImg.css('background-image', function () {
            return 'url("' + $(this).data('bg-img') + '")';
        }).addClass('bg--img').removeAttr('data-bg-img').attr('data-rjs', 2);

        /* ------------------------------------------------------------------------- *
         * RETINAJS
         * ------------------------------------------------------------------------- */
        $('img').attr('data-rjs', 2);

        retinajs();
        
        /* ------------------------------------------------------------------------- *
         * STICKY
         * ------------------------------------------------------------------------- */
        var $sticky = $('[data-trigger="sticky"]');
        
        $sticky.each(function () {
            $sticky.sticky({
                zIndex: 999
            });
        });
        
        /* ------------------------------------------------------------------------- *
         * FORM VALIDATION
         * ------------------------------------------------------------------------- */
        var $formValidation = $('[data-form="validate"]');
        
        $formValidation.each(function () {
            var $t = $(this);
            
            $t.validate({
                errorPlacement: function () {
                    return true;
                }
            });
        });

        /* ------------------------------------------------------------------------- *
         * AJAX FORM
         * ------------------------------------------------------------------------- */
        var $ajaxForm = $('[data-form="ajax"]');
        
        $ajaxForm.each(function () {
            var $form = $(this),
                $formStatus = $form.find('.status');
            
            $form.validate({
                errorPlacement: function () {
                    return true;
                },
                submitHandler: function (el) {
                    var $form = $(el),
                        formUrl = $form.attr('action'),
                        formData = $form.serialize();

                    $.post(formUrl, formData, function (res) {
                        $formStatus.show().html(res).delay(3000).fadeOut('show');
                    });
                }
            });
        });
        
        /* ------------------------------------------------------------------------- *
         * COUNTER UP
         * ------------------------------------------------------------------------- */
        var $counterUp = $('[data-trigger="counterUp"]');
            
        if ( $counterUp.length ) {
            $counterUp.counterUp({
                delay: 10,
                time: 1000
            });
        }
        
        /* -------------------------------------------------------------------------*
         * COUNTDOWN
         * -------------------------------------------------------------------------*/
        var $countDown = $('[data-countdown]');
            
        $countDown.each(function () {
            var $t = $(this);
            
            $t.countdown($t.data('countdown'), function(e) {
                $(this).html( '<ul>' + e.strftime('<li><strong>%D</strong><span>Days</span></li><li><strong>%H</strong><span>Hours</span></li><li><strong>%M</strong><span>Minutes</span></li><li><strong>%S</strong><span>Secounds</span></li>') + '</ul>' );
            });
        });
        
        /* ------------------------------------------------------------------------- *
         * ZOOM IMAGE
         * ------------------------------------------------------------------------- */
        var $zoomImg = $('[data-trigger="zoom"]');

        if ( $zoomImg.length ) {
            $zoomImg.zoom();
        }
        
        /* ------------------------------------------------------------------------- *
         * SPINNER
         * ------------------------------------------------------------------------- */
        var $spinner = $('[data-trigger="spinner"]');

        if ( $spinner.length ) {
            $spinner.spinner();
        }

        /* ------------------------------------------------------------------------- *
         * PRODUCTS SECTION
         * ------------------------------------------------------------------------- */
        var $productRatingSelect = $('#productRatingSelect');
        
        if ( $productRatingSelect.length ) {
            $productRatingSelect.barrating({
                theme: 'fontawesome-stars-o',
                hoverState: false
            });
        }

        var $productImgGallery = $('.product--img-gallery');

        $productImgGallery.on('shown.bs.tab', '[data-toggle="tab"]', function () {
            var $t = $(this);

            $t.parents('.owl-carousel').find('a').removeClass('current');
            $t.addClass('current');
        });

        /* ------------------------------------------------------------------------- *
         * CART SECTION
         * ------------------------------------------------------------------------- */
        var $cartItems = $('.cart--items');
        
        $cartItems.on('click', '.remove', function (e) {
            e.preventDefault();

            e.$el = $(this);
            e.$parents = e.$el.parent('td').parent('tr');

            e.$el.fadeOut(function () {
                if ( e.$parents.index() === 0 && e.$parents.next().length === 0 ) {
                    e.$parents.html('<td colspan="6" class="empty">No products in cart.</td>');
                } else {
                    e.$parents.remove();
                }
            });
        });

        /* ------------------------------------------------------------------------- *
         * CHECKOUT SECTION
         * ------------------------------------------------------------------------- */
        var $checkoutPayment = $('#checkoutPayment');

        $checkoutPayment.on('click', '[data-toggle="collapse"]', function (e) {
            if ( !$(this).hasClass('collapsed') ) {
                e.stopPropagation();
            }
        });

        /* ------------------------------------------------------------------------- *
         * OWL CAROUSEL
         * ------------------------------------------------------------------------- */
        var $owlCarousel = $('.owl-carousel');
        
        $owlCarousel.each(function () {
            var $t = $(this);
            
            $t.owlCarousel({
                rtl: isRTL,
                items: checkData( $t.data('owl-items'), 1 ),
                margin: checkData( $t.data('owl-margin'), 0 ),
                loop: checkData( $t.data('owl-loop'), true ),
                autoplay: checkData( $t.data('owl-autoplay'), true ),
                smartSpeed: checkData( $t.data('owl-speed'), 2500 ),
                autoplaySpeed: checkData( $t.data('owl-speed'), 2500 ),
                mouseDrag: checkData( $t.data('owl-drag'), true ),
                nav: checkData( $t.data('owl-nav'), false ),
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                dots: checkData( $t.data('owl-dots'), false ),
                responsive: checkData( $t.data('owl-responsive'), {} )
            });
        });

        /* ------------------------------------------------------------------------- *
         * DROPDOWN MENU
         * ------------------------------------------------------------------------- */
        var $dropdownMenu = $('.dropdown-menu');

        $dropdownMenu.on('click', '.dropdown-toggle', function (e) {
            e.stopPropagation();
            e.preventDefault();

            $(this).parent('.dropdown').toggleClass('open').siblings().removeClass('open');
        });

        /* ------------------------------------------------------------------------- *
         * HEADER SECTION
         * ------------------------------------------------------------------------- */
        var $header = $('.header--section'),
            headerAdjust = function () {
                $header.next().css('padding-top', function (i, value) {
                    var $t = $(this),
                        data = $t.data('padding-top');
                    
                    if ( typeof data === 'undefined' ) {
                        $t.data('padding-top', value);
                        value = parseInt( value, 10 ) + $header.outerHeight();
                    } else {
                        value = data + $header.outerHeight();
                    }

                    return value;
                });
            };

        headerAdjust();
        $wn.on('resize', headerAdjust);

        /* ------------------------------------------------------------------------- *
         * BANNER SECTION
         * ------------------------------------------------------------------------- */
        var $banner = $('.banner--section'),
            bannerHeight = function () {
                $banner.css('height', function (wn, bn) {
                    wn = $wn.outerHeight();
                    bn = parseInt( bn, 10 );

                    return wn > bn ? wn : bn;
                });
            },
            $bannerItem = $('.banner--item'),
            bannerItemHeight = function () {
                $bannerItem.css( 'padding-top', $banner.css('padding-top') );
                $banner.css( 'padding-top', 0 );
            };

        bannerHeight();
        $wn.on('resize', bannerHeight);

        bannerItemHeight();
        $wn.on('resize', bannerItemHeight);

        /* ------------------------------------------------------------------------- *
         * FAQ SECTION
         * ------------------------------------------------------------------------- */
        var $faqItems = $('.faq--items');

        $faqItems.on('click', '[data-toggle="collapse"]', function () {
            return !$(this).hasClass('collapsed') ? false : '';
        });

        /* ------------------------------------------------------------------------- *
         * PRICING SECTION
         * ------------------------------------------------------------------------- */
        var $pricingItem = $('.pricing--item');

        $pricingItem.css('margin-top', function () {
            var $t = $(this), $parent;

            if ( $t.children('.features').is(':first-child') ) {
                $parent = $t.parent();

                $t.addClass('pricing--heading');
                $parent.parent().addClass('features--striped');

                return $parent.siblings().find('.features').position().top - 20;
            }
        });

        /* ------------------------------------------------------------------------- *
         * VPS PRICING SECTION
         * ------------------------------------------------------------------------- */
        var $vpsPricingSlider = $('.vps--pricing-slider'),
            $vpsPricingSliderHandle = $vpsPricingSlider.children('.ui-slider-handle'),
            $vpsPricingFeatureValue = $('.vps--pricing-feature-value'),
            $vpsPricingPrice = $('.vps--pricing-price span'),
            $vpsPricingPriceM = $vpsPricingPrice.next(),
            $vpsPricingOrder = $('.vps--pricing-action .order'),
            $vpsPricingView = $('.vps--pricing-action .view'),
            changingVpsPlans;

        changingVpsPlans = function ( res, indx ) {
            $vpsPricingFeatureValue.empty();
            
            for ( var i = 0; i < $vpsPricingFeatureValue.length; i++ ) {
                $vpsPricingFeatureValue.eq(i).text( res[ indx ][1][i] );
            }

            $vpsPricingSliderHandle.html( '<span>' + res[ indx ][0] + '</span>' );
            
            $vpsPricingPrice.text( res[ indx ][2] );
            $vpsPricingPriceM.text( res[ indx ][3] );
            $vpsPricingOrder.attr( 'href', res[ indx ][4] );
            $vpsPricingView.attr( 'href', res[ indx ][5] );
        };

        if ( $vpsPricingSlider.length ) {
            $.getJSON('json/vps-plans.json', function (res) {
                var vpsData = res;

                $vpsPricingSlider.slider({
                    range: 'min',
                    min: 0,
                    max: vpsData.vps_plans.length - 1,
                    step: 1,
                    value: vpsData.vps_default_plan,
                    create: function () {
                        changingVpsPlans( vpsData.vps_plans, 1 );
                    },
                    slide: function (e, ui) {
                        changingVpsPlans( vpsData.vps_plans, ui.value );
                    }
                });
            });
        }

        $vpsPricingSlider.siblings('.ui-slider-nav').on('click', function () {
            var $t = $(this),
                value = $vpsPricingSlider.slider('value');

            if ( $t.hasClass('ui-slider-next') ) {
                value++;
            } else {
                value--;
            }

            $vpsPricingSlider.slider('value', value);
        });

        /* ------------------------------------------------------------------------- *
         * MAP
         * ------------------------------------------------------------------------- */
        var $map = $('[data-trigger="map"]');

        $.fn.initMap = function () {
            var $el = this,
                map;

            if ( typeof google !== 'undefined' ) {
                map = new google.maps.Map($el[0], {
                    center: {lat: $el.data('map-latitude'), lng: $el.data('map-longitude')},
                    zoom: $el.data('map-zoom'),
                    scrollwheel: false,
                    disableDefaultUI: true,
                    zoomControl: true
                });
                
                if ( typeof $el.data('map-marker') !== 'undefined' ) {
                    var data = $el.data('map-marker'),
                        i = 0;

                    for ( i; i < data.length; i++ ) {
                        new google.maps.Marker({
                            position: {lat: data[i][0], lng: data[i][1]},
                            map: map,
                            animation: google.maps.Animation.DROP,
                            draggable: true
                        });
                    }
                }
            }
        };

        $map.each(function () {
            $(this).css('min-height', '350px').initMap();
        });

        /* ------------------------------------------------------------------------- *
         * COOKIE
         * ------------------------------------------------------------------------- */
        var $cookieNotify = $('#cookieNotify'),
            cookieNotifyString = document.cookie,
            cookieNotifyRegex = new RegExp('cookieNotify');

        if ( $cookieNotify.length && !cookieNotifyRegex.test(cookieNotifyString) ) {
            $cookieNotify.removeClass('hidden');
        }

        $cookieNotify.on('click', '[data-dismiss]', function (e) {
            e.stopPropagation();
            e.preventDefault();
            $cookieNotify.slideUp('slow');
            document.cookie = 'cookieNotify=true';
        });

        /* ------------------------------------------------------------------------- *
         * BACK TO TOP BUTTON
         * ------------------------------------------------------------------------- */
        var $backToTop = $('#backToTop');

        $backToTop.on('click', 'a', function (e) {
            e.preventDefault();

            $('html, body').animate({
                scrollTop: 0
            }, 1200);
        });

        /* ------------------------------------------------------------------------- *
         * COLOR SWITCHER
         * ------------------------------------------------------------------------- */
        if ( typeof $.cColorSwitcher !== "undefined" ) {
            $.cColorSwitcher({
                'switcherTitle': 'Main Colors',
                'switcherColors': [{
                    bgColor: '#ff5252',
                    filepath: 'css/colors/theme-color-1.css'
                }, {
                    bgColor: '#82b440',
                    filepath: 'css/colors/theme-color-2.css'
                }, {
                    bgColor: '#2683ff',
                    filepath: 'css/colors/theme-color-3.css'
                }, {
                    bgColor: '#e91e63',
                    filepath: 'css/colors/theme-color-4.css'
                }, {
                    bgColor: '#f69323',
                    filepath: 'css/colors/theme-color-5.css'
                }, {
                    bgColor: '#ffcb1a',
                    filepath: 'css/colors/theme-color-6.css'
                }, {
                    bgColor: '#00b249',
                    filepath: 'css/colors/theme-color-7.css'
                }, {
                    bgColor: '#d48b91',
                    filepath: 'css/colors/theme-color-8.css'
                }, {
                    bgColor: '#179ea8',
                    filepath: 'css/colors/theme-color-9.css'
                }, {
                    bgColor: '#8cbeb2',
                    filepath: 'css/colors/theme-color-10.css'
                }],
                'switcherTarget': $('#changeColorScheme')
            });
        }
    });
    
    $wn.on('load', function () {
        /* ------------------------------------------------------------------------- *
         * BODY SCROLLING
         * ------------------------------------------------------------------------- */
        var isBodyScrolling = function () {
            if ( $wn.scrollTop() > 1 ) {
                $body.addClass('isScrolling');
            } else {
                $body.removeClass('isScrolling');
            }
        };

        isBodyScrolling();
        $wn.on('scroll', isBodyScrolling);

        /* ------------------------------------------------------------------------- *
         * ADJUST ROW
         * ------------------------------------------------------------------------- */
        var $adjustRow = $('.AdjustRow');
        
        if ( $adjustRow.length ) {
            $adjustRow.isotope({
                originLeft: isRTL ? false : true,
                layoutMode: 'fitRows'
            });
        }
        
        /* ------------------------------------------------------------------------- *
         * GALLERY SECTION
         * ------------------------------------------------------------------------- */
        var $portfolioItems = $('.portfolio--items'),
            $portfolioFilterMenu = $('.portfolio--filter-menu');

        if ( $portfolioItems.length ) {
            $portfolioItems.isotope({
                animationEngine: 'best-available',
                itemSelector: '.portfolio--item',
                originLeft: isRTL ? false : true,
                masonry: {
                    columnWidth: '.portfolio--item'
                }
            });
        }

        $portfolioFilterMenu.on('click', 'li', function (e) {
            e.preventDefault();

            var $t = $(this),
                f = $t.data('target'),
                s = (f !== '*') ? '[data-cat~="'+ f +'"]' : f;

            $portfolioItems.isotope({
                filter: s
            });
            
            $t.addClass('active').siblings().removeClass('active');
        });

        /* ------------------------------------------------------------------------- *
         * PRELOADER
         * ------------------------------------------------------------------------- */
        var $bodyPreloader = $('#preloader');

        if ( $bodyPreloader.length ) {
            $bodyPreloader.fadeOut('slow');
        }

        /* ------------------------------------------------------------------------- *
         * SCROLLING ANIMATIONS
         * ------------------------------------------------------------------------- */
        var $scrollRevealGroup = $('[data-scroll-reveal="group"]'),
            scrollReveal = '';

        if ( typeof ScrollReveal === "function" ) {
            scrollReveal = ScrollReveal();

            scrollReveal
                .reveal('[data-scroll-reveal="left"]', {origin: 'left', mobile: false, duration: 800})
                .reveal('[data-scroll-reveal="right"]', {origin: 'right', mobile: false, duration: 800})
                .reveal('[data-scroll-reveal="bottom"]', {duration: 800});

            $scrollRevealGroup.each(function () {
                scrollReveal.reveal($(this).children(), {duration: 800}, 150);
            });
        }
    });

})(jQuery);
