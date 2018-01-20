var DeleteCaravan = (function () {

    var init = function () {
        setListener()
    };

    var setListener = function () {
        $('.caravan-delete__btn').click(deleteCaravana);
    };

    var deleteCaravana = function (e) {
        var result = confirm('Do you really want to remove a caravan?');

        if (!result) {
            e.preventDefault();
        }
    };

    return {
        init: init
    }
})();

DeleteCaravan.init();