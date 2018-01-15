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
        var modalWindow = $('.modal-details'),
            body = $('body'),
            id = $(e.target).attr('data-id');
        
        function createCaravanInfo(res) {
            var image = res.img,
                type = $('.modal-info-item__type'),
                marca = $('.modal-info-item__marca'),
                year = $('.modal-info-item__year'),
                lenght = $('.modal-info-item__lenght');

            for(var i = 0; i < image.length; i++) {
                $('#owl-demo').trigger('add.owl.carousel', [`<div class="item"><img src="assets/img/${image[i]}" alt=""></div>`]).trigger('refresh.owl.carousel');
            }

            type.text(res.type);
            marca.text(res.marca);
            year.text(res.year);
            lenght.text(res.lenght + " M");
        };

        if(id == 1) {
            $.ajax({
                url: 'assets/js/imgs1.json',
                method: 'GET',
                success: createCaravanInfo
            });
        } else {
            $.ajax({
                url: 'assets/js/imgs2.json',
                method: 'GET',
                success: createCaravanInfo
            });
        }

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