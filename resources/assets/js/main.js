var Module = (function () {

    var init = function init() {
        setupListener();
    }

    var setupListener = function () {
        $(document).scroll(scrollHeader);
        $(window).resize(mobileMenuLaptop);
        $('.hamburger-icon').click(menuHamburger);
        $('.mobile-nav-item').click(menuMobileItem);
        $('.selling-more__btn').click(moreCaravan);
        $('.show-gallery').click(clickGallery);
        scrollInit();
        $('.fancybox').fancybox({
            openEffect	: 'none',
            closeEffect	: 'none'
        });
        console.log("DIma");
    };

    /*---------Google Map----------*/
    var initMap = function () {
        var coordinaties = new google.maps.LatLng(42.047711, 3.174757),
            map = new google.maps.Map(document.getElementById('map'), {
                center: coordinaties,
                zoom: 16,
                mapTypeId: 'satellite'
            }),
            marker = new google.maps.Marker({
                position: coordinaties,
                map: map,
                animation: google.maps.Animation.BOUNCE
            });
    };

    /*------------Menu fixed. Href Site active------------*/
    var scrollHeader = function () {
        var headerFixed = $('.header-fixed'),
            header = $('.header'),
            nav = $('.mobile-menu');

        if($(document).width() > 760) {
            if (window.pageYOffset > header.innerHeight()) {
                headerFixed.fadeIn(500);
            } else {
                headerFixed.hide(0);
            }
        }

        /*--------Href site ACTIVE*/
        var navFixed = '.nav-fixed',
            hrefItem = $(navFixed + ' .header-navigation__item'),
            scrollTop = $(document).scrollTop();
        
        hrefItem.each(function () {
            var hash = $(this).attr('href'),
                target = $(hash);

            if (target.position().top <= scrollTop && target.position().top + target.outerHeight() > scrollTop) {
                $(navFixed + " .active-item").removeClass("active-item");
                $(this).addClass("active-item");
            } else {
                $(this).removeClass("active-item");
            }
        });
    };

    /*------------------------See mode Caravan for selling---------------------*/
    var moreCaravan = function () {
        var caravanHide = $('.selling-caravan__none');

        for(var i = 0; i < 4; i++) {
            if(caravanHide[i]) {
                $(caravanHide[i]).removeClass('selling-caravan__none');
            } else {
                break;
            }
        }
    };

    /*-----------------Hamburger menu click---------------------------*/
    var menuHamburger = function () {
        var mobileMenu = '.hamburger-icon',
            nav = $('.mobile-menu'),
            state = $(mobileMenu + ' i'),
            hamburgerIcon = 'fa-bars',
            closeIcon = 'fa-times';

        if (state.hasClass(hamburgerIcon)) {
            state.removeClass(hamburgerIcon).addClass(closeIcon);
            nav.css('display', 'block');
        } else {
            state.removeClass(closeIcon).addClass(hamburgerIcon);
            nav.css('display', 'none');
        }
    };

    /*----------Click Hamburger menu item---------*/
    var menuMobileItem = function () {
        var navMenu = $('.mobile-menu'),
            hamburgerIcon = $('.hamburger-icon i'),
            hamburger = 'fa-bars',
            close = 'fa-times';

        hamburgerIcon.removeClass(close).addClass(hamburger);
        navMenu.css('display', 'none');
    };

    /*------------Mobile Menu hide to lg-device------------*/
    var mobileMenuLaptop = function () {
        var hamburgerIcon = $('.hamburger-icon i'),
            nav = $('.mobile-menu'),
            hamburger = 'fa-bars',
            close = 'fa-times';

        if ($(document).width() > 768) {
            hamburgerIcon.removeClass(close).addClass(hamburger);
            nav.css('display', 'none');
        }
    };

    /*------------Scroll Menu click------------*/
    var scrollInit = function () {
        var scroll =  new SmoothScroll('a[href*="#"]');
    };

    /*----------------Click Gallery-------------*/
    var clickGallery = function () {
        var gallery = $('.gallery a')[0];

        $(gallery).trigger('click');
    };

    /*---------------------------Return method----------------------------*/
    return {
        init: init,
        initMap: initMap
    }
})();

Module.init();