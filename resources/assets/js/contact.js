var Contact = (function () {

    var init = function () {
        setListener();
    };

    var setListener = function () {
        $('.feedback').submit(submitForm);
    };

    /*-----------------Submit form---------------*/
    var submitForm = function (event) {
        var validate = validationForm.validation($(event.target));

        if(!validate) {
            return false;
        }
    };

    return {
        init: init
    }
})();

Contact.init();