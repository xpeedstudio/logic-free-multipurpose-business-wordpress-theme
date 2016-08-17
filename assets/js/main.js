"use strict";
jQuery(document).ready(function (jQuery) {

    jQuery(window).load(function () {
        jQuery(".loaded").fadeOut();
        jQuery(".preloader").delay(1000).fadeOut("slow");
    });
    /*---------------------------------------------*
     * Mobile menu
     ---------------------------------------------*/
    jQuery('.navbar-collapse').find('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                jQuery('html,body').animate({
                    scrollTop: (target.offset().top - 40)
                }, 1000);
                if (jQuery('.navbar-toggle').css('display') != 'none') {
                    jQuery(this).parents('.container').find(".navbar-toggle").trigger("click");
                }
                return false;
            }
        }
    });
    function showmap() {
        var mapOptions = {
            zoom: 8,
            scrollwheel: false,
            center: new google.maps.LatLng(-34.397, 150.644),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
    }


    /*---------------------------------------------*
     * STICKY scroll
     ---------------------------------------------*/

    jQuery('#main_menu').localScroll();
    /*---------------------------------------------*
     * WOW
     ---------------------------------------------*/

    var wow = new WOW({
        mobile: false // trigger animations on mobile devices (default is true)
    });
    wow.init();
    /* ---------------------------------------------------------------------
     Carousel
     ---------------------------------------------------------------------= */

    jQuery('.main_home_slider').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: true,
        dots: true,
        nav: false,
        navText: [
            "<i class='lnr lnr-chevron-left'></i>",
            "<i class='lnr lnr-chevron-right'></i>"
        ],
        autoplayHoverPause: true

    });
    jQuery('.single_features_slide').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: true,
        dots: true,
        nav: false,
        navText: [
            "<i class='lnr lnr-chevron-left'></i>",
            "<i class='lnr lnr-chevron-right'></i>"
        ],
        autoplayHoverPause: true

    });
    jQuery('.main_teastimonial_slider').owlCarousel({
        responsiveClass: true,
        autoplay: false,
        items: 1,
        loop: true,
        dots: true,
        nav: false,
        navText: [
            "<i class='lnr lnr-chevron-left'></i>",
            "<i class='lnr lnr-chevron-right'></i>"
        ],
        autoplayHoverPause: true

    });
//fancybox
    jQuery(".youtube-media").on("click", function (e) {
        var jWindow = jQuery(window).width();
        if (jWindow <= 410) {
            return;
        }
        jQuery.fancybox({
            href: this.href,
            padding: 4,
            type: "iframe",
            'href': this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
        });
        return false;
    });
// magnificPopup

    jQuery('.portfolio-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        },
    });
//mytabs

    jQuery('#myTabs a').click(function (e) {
        e.preventDefault()
        jQuery(this).tab('show')
    })

//skillbar section
    var skills = jQuery('.skillbar');
    if (skills.length) {
        var skillBarTopPos = skills.offset().top;
    }
    jQuery(document).scroll(function () {
        var scrolled_val = jQuery(document).scrollTop().valueOf();
        if (scrolled_val > skillBarTopPos - 250)
            startAnimation();
    });
    function startAnimation() {
        jQuery('.skillbar').each(function () {
            jQuery(this).find('.skillbar-bar').animate({
                width: jQuery(this).attr('data-percent')
            }, 6000);
        });
    }
    ;
//---------------------------------------------
// Counter 
//---------------------------------------------

    jQuery('.statistic-counter').counterUp({
        delay: 10,
        time: 2000
    });
// main-menu-scroll

    jQuery(window).scroll(function () {
        var top = jQuery(document).scrollTop();
        var height = 300;
        //alert(batas);

        if (top > height) {
            jQuery('.navbar-fixed-top').addClass('menu-scroll');
        } else {
            jQuery('.navbar-fixed-top').removeClass('menu-scroll');
        }
    });
// scroll Up

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 600) {
            jQuery('.scrollup').fadeIn('slow');
        } else {
            jQuery('.scrollup').fadeOut('slow');
        }
    });
    jQuery('.scrollup').click(function () {
        jQuery("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });
//    jQuery('#menu').slicknav();
    jQuery('#portfoliowork').mixItUp({
        selectors: {
            target: '.tile',
            filter: '.filter',
            sort: '.sort-btn'
        },
        animation: {
            animateResizeContainer: false,
            effects: 'fade scale'
        }

    });
//    jQuery('#mixcontent').mixItUp({
//        animation: {
//            animateResizeContainer: false,
//            effects: 'fade rotateX(-45deg) translateY(-10%)'
//        }
//    });

//    jQuery('.dropdown-menu').click(function (e) {
//        e.stopPropagation();
//    });

//    jQuery('.grid').masonry({
//// options
//        itemSelector: '.grid-item',
//    });
//    


    jQuery('.dropdown-menu').click(function (e) {
        e.stopPropagation();
    });
    //End

});
jQuery(document).on("scroll", function () {
    if (jQuery(document).scrollTop() > 120) {
        jQuery("nav").addClass("small");
    } else {
        jQuery("nav").removeClass("small");
    }
});



