var DetailsModal = (function () {

    var init = function () {
        setListener();
    };

    var setListener = function () {
        $('.show-details').click(showModal);
        $('.modal-content__close').click(hideModal);
        $('.modal-details').click(hideModalBg);
        $('#owl-demo').owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            items: 1,
            margin: 30,
            loop: true,
            autoHeight: true,
            dots: true
        });
    };

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
        
        function createCaravanInfo(res) {
            var image = res.images,
                name = $('.modal-price__name'),
                price = $('.modal-price__price'),
                type = $('.modal-info-item__type'),
                marca = $('.modal-info-item__marca'),
                year = $('.modal-info-item__year'),
                lenght = $('.modal-info-item__lenght'),
                description = $('.modal-info-description');

            for(var i = 0; i < image.length; i++) {
                $('#owl-demo').trigger('add.owl.carousel', [`<div class="item"><img src="storage/${image[i].path}" alt="Caravana"></div>`]).trigger('refresh.owl.carousel');
            }

            type.text(res.type);
            marca.text(res.model);
            year.text(res.year);
            name.text(res.name);
            price.text(res.price + ' €');
            description.text(res.description);
            lenght.text(res.length + " M");
        };

            $.ajax({
                url: url,
                method: 'GET',
                success: createCaravanInfo
            });

        modalWindow.css('display', 'block');
        body.addClass('lock');
    };

    /*------------------Hide Modal Window Details Caravan---------------------*/
    var hideModal = function () {
        var modalWindow = $('.modal-details'),
            owlItem = $('#owl-demo .item').length,
            body = $('body');

        for(var i = 0; i < owlItem; i++) {
            $('#owl-demo').trigger('remove.owl.carousel', [i]).trigger('refresh.owl.carousel');
        }

        body.removeClass('lock');
        modalWindow.css('display', 'none');
    };

    /*------------------Hide Modal Window Details Caravan(Click to background)--------------------*/
    var hideModalBg = function (e) {
        var modalWindow = $('.modal-details'),
            owlItem = $('#owl-demo .item').length,
            body = $('body');

        if($(e.target).hasClass('modal-details')) {
            for(var i = 0; i < owlItem; i++) {
                $('#owl-demo').trigger('remove.owl.carousel', [i]).trigger('refresh.owl.carousel');
            }

            body.removeClass('lock');
            modalWindow.css('display', 'none');
        };
    };

    return {
        init: init
    }
})();

DetailsModal.init();