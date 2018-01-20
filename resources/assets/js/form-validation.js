var validationForm = (function () {

    /*------------validation form-----------*/
    var validation = function (form) {
        var validate = true,
            formGroups = form.find('.feedback-group__error');

        Array.prototype.forEach.call(formGroups, function (elem) {
            if(!validationElement(elem)) {
                validate = false;
            }
        });

        return validate;
    };

    /*----------------validation element--------------*/
    var validationElement = function (element) {
        var input = $(element).parent().find('input'),
            pattern = new RegExp(input.attr('data-pattern')),
            error = $(element).parent().find('.feedback-group__error');

        if( !pattern.test($(input).val()) ) {
            /*$(error).removeClass('feedback-group__none')*/
            $(error).show(200);
            return false;
        } else {
            /*$(error).addClass('feedback-group__none');*/
            $(error).hide(200);
            return true;
        }
    };
    
    return {
        validation: validation
    }

})();