var AddCaravan = (function () {

    var init = function () {
        setListener();
    };

    var setListener = function () {
        $('.caravan-add__input').change(addPhotos);
        $('.caravan-add-ul').on('click', '.caravan-add__delete', function (e) {
            var target = e.target;
            deleteImage(target);
        });
        $('.caravan-add-form').submit(formValidate);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    };

    var allImage = []; // Array photos download

    /*---------------Change file input(Add photo)----------------*/
    var addPhotos = function () {
        var files = this.files;

        if (this.files.length > 0) {
            Array.prototype.forEach.call(this.files, function (elem) {
                photoValidate(elem);
            });
        }

        $(this).prop('value', null);
    };

    /*--------------------Validation one Image-------------------*/
    var photoValidate = function (photo) {
        var images = $('.caravan-add-ul'),
            errorType = $('.caravan-add__error');

        if (photo.type == 'image/jpeg') {
            images.append(`<li class="caravan-add-item" name="images[]" value="${photo}">${photo.name} <span class="caravan-add__delete"><i class="fa fa-trash" aria-hidden="true"></i></span></li>`);
            allImage.push(photo);
            console.log(allImage);
        } else {
            errorType.show(200);

            setTimeout(function () {
                errorType.hide(200)
            }, 5000);
        }
    };

    /*-------------------Delete image from list-------------------*/
    var deleteImage = function (target) {
        var liList = $('.caravan-add-item'),
            li = $(target).parent().parent(),
            index = liList.index(li);

        allImage.splice(index, 1);
        li.remove();

        console.log(allImage);
    };

    /*-------------------Form validation-----------------*/
    var formValidate = function (event) {
        event.preventDefault();

        var validate = validationForm.validation($(event.target)),
            textarea = $('.feedback-group__textarea'),
            lengthDes = textarea.val().length > 0 ? true : false,
            hasImages = allImage.length > 0 ? true : false;

        if (!lengthDes) {
            $(textarea.next()).show(200);
        } else {
            $(textarea.next()).hide(200);
        }

        if(!hasImages) {
            $('.caravan-add__error-need').show(200);
        } else {
            $('.caravan-add__error-need').hide(200);
        }

        if (!validate || !lengthDes || !hasImages) {
            return false;
        } else {
            formSubmit();

        }

    };

    /*-------------------Form Submit--------------------*/
    var formSubmit = function () {
        var form = $('.caravan-add-form'),
            url = form.attr('data-url'),
            formDate = new FormData(form[0]),
            respone;

        /*formDate.images = allImage;*/

        allImage.forEach(function (image) {
            formDate.append('images[]', image);
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: url,
            method: 'POST',
            data: formDate,
            processData: false,  // tell jQuery not to process the data
            contentType: false,
            success: function (mes) {
                if(mes) {
                    location.reload();
                }
            }
        })

        return respone;
    };

    return {
        init: init
    }

})();

AddCaravan.init();