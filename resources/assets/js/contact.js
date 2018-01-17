var Contact = (function () {

    var init = function () {
        setListener();
    };

    var setListener = function () {
        $('.feedback').submit(submitForm);
        $('.login-auth-form').submit(authForm);
        $(document).ready(function () {
            if ($('.auth-error')) {
                setTimeout(function () {
                    $('.auth-error').hide(300);
                }, 3000)
            }
        });
    };

    /*-----------------Submit form(feedback form)---------------*/
    var submitForm = function (event) {
        var validate = validationForm.validation($(event.target));

        if(!validate) {
            return false;
        }
    };

    /*----------------Auth form------------------*/
    var authForm = function (event) {
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