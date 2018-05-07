var Services = (function () {
    var init = function () {
        setupListener();
    };

    var setupListener = function () {
        $('.choose-service').click(orderService);
        $('.show-more').click(togleDescription);
    };

    var togleDescription = function (event) {
        $(event.target).prev().prev().toggle(300);
    };

    var orderService = function (event) {
        var value = $(event.target).data('value'),
            select = $(`.feedback-select option[value='${value}']`).prop('selected', true),
            contactBlock = $('#contact').offset().top;

        $('body,html').animate({scrollTop: contactBlock}, 500);

        console.log(select);
        console.log(value);
    };

    return {
        init: init
    }
})();

Services.init();