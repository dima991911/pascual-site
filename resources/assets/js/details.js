var DetailsModal = (function () {

    var init = function () {
        setListener();
    };

    var setListener = function () {
        $('.show-details').click(showModal);
        $('.modal-content__close').click(hideModal);
        $('.modal-details').click(hideModalBg);
        owl.owlCarousel({
            slideSpeed: 300,
            items: 1,
            margin: 30,
            loop: true,
            autoHeight: true,
            dots: true,
            responsive : {
                480 : { items : 1  }, // from zero to 480 screen width 4 items
                768 : { items : 1  }, // from 480 screen widthto 768 6 items
                1024 : { items : 1   // from 768 screen width to 1024 8 items
                }
            },
            onInitialized: fixOwl,
            onRefreshed: fixOwl
        });
    };

    var fixOwl = function(){
        var $stage = $('.owl-stage'),
            stageW = $stage.width(),
            $el = $('.owl-item'),
            elW = 0;
        $el.each(function() {
            elW += $(this).width()+ +($(this).css("margin-right").slice(0, -2))
        });
        if ( elW > stageW ) {
            $stage.width( elW );
        };
    };

    var owl = $('#owl-demo');

    /*-------------------Show Modal Window Details Caravan--------------------*/
    var showModal = function (e) {
        /*$('#owl-demo').owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            items: 1,
            margin: 30,
            loop: true,
            autoHeight: true,
            dots: true
        });*/


        var modalWindow = $('.modal-details'),
            body = $('body'),
            url = $(e.target).attr('data-url');

        function beforeSend() {
            var load = $('.modal-content-load');

            load.show();
        };
        
        function createCaravanInfo(res) {
            var image = res.images,
                load = $('.modal-content-load'),
                caravanInfo = $('.modal-content-container'),
                name = $('.modal-price__name'),
                price = $('.modal-price__price'),
                type = $('.modal-info-item__type'),
                marca = $('.modal-info-item__marca'),
                year = $('.modal-info-item__year'),
                lenght = $('.modal-info-item__lenght'),
                description = $('.modal-info-description p');

            for(var i = 0; i < image.length; i++) {
                owl.trigger('add.owl.carousel', [`<div class="item"><img src="storage/${image[i].path}" alt="Caravana"></div>`]).trigger('refreshed.owl.carousel');
            }

            type.text(res.type);
            marca.text(res.model);
            year.text(res.year);
            name.text(res.name.toUpperCase());
            price.text(res.price + ' €');
            description.text(res.description);
            lenght.text(res.length + " M");

            load.hide();
            caravanInfo.show(100);
        };

            $.ajax({
                url: url,
                method: 'GET',
                beforeSend: beforeSend,
                success: createCaravanInfo
            });

        modalWindow.css('display', 'block');
        body.addClass('lock');
    };

    /*------------------Hide Modal Window Details Caravan---------------------*/
    var hideModal = function () {
        var modalWindow = $('.modal-details'),
            caravanInfo = $('.modal-content-container'),
            owlItem = $('#owl-demo .item').length,
            body = $('body');

        for(var i = 0; i < owlItem; i++) {
            owl.trigger('remove.owl.carousel', [i]);
        }

        body.removeClass('lock');
        caravanInfo.hide();
        modalWindow.css('display', 'none');
    };

    /*------------------Hide Modal Window Details Caravan(Click to background)--------------------*/
    var hideModalBg = function (e) {
        var modalWindow = $('.modal-details'),
            caravanInfo = $('.modal-content-container'),
            owlItem = $('#owl-demo .item').length,
            body = $('body');

        if($(e.target).hasClass('modal-details')) {
            for(var i = 0; i < owlItem; i++) {
                owl.trigger('remove.owl.carousel', [i]);
            }

            body.removeClass('lock');
            caravanInfo.hide();
            modalWindow.css('display', 'none');
        };
    };

    return {
        init: init
    }
})();

DetailsModal.init();