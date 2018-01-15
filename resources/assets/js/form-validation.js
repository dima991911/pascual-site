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
            $(error).removeClass('feedback-group__none');
            return false;
        } else {
            $(error).addClass('feedback-group__none');
            return true;
        }
    };
    
    return {
        validation: validation
    }

})();