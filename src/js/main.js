var Module = (function () {

    var init = function init() {
        setupListener();
    }

    var setupListener = function () {
        $('.galeria').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
    };

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

    return {
        init: init,
        initMap: initMap
    }
})();

Module.init();