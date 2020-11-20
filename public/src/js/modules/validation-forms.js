$('.form__button').on('click', function(e){
    let valid = true;
    e.preventDefault();

    $.each($(this).closest('.form').find('.form__input'), function(indexElemInput, elemInput){
        switch ($(elemInput).attr('type')) {
            case 'text':
                if (elemInput.value == '' || elemInput.value.lenght < 2) {
                    valid = false;
                    $(elemInput).addClass('form__input--error');
                } else {
                    $(elemInput).removeClass('form__input--error');
                }
                break;
            case 'tel':
                let telRegex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
                if (elemInput.value == '' || !telRegex.test(elemInput.value)) {
                    valid = false;
                    $(elemInput).addClass('form__input--error');
                } else {
                    $(elemInput).removeClass('form__input--error');
                }
                break;
            case 'email':
                let emailRegex = /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
                if (elemInput.value == '' || !emailRegex.test(elemInput.value)) {
                    valid = false;
                    $(elemInput).addClass('form__input--error');
                } else {
                    $(elemInput).removeClass('form__input--error');
                }
                break;
            default:
                break;
        }        
    })

    if (valid) {
        let formData = [];

        $.each($(this).closest('.form').find('.form__input'), function(indexElemInput, elemInput){
            let tmp = [];

            tmp.push($(elemInput).attr('name'));
            tmp.push(elemInput.value);

            formData.push(tmp);
            elemInput.value = '';
        });

        let formDataJson = Object.fromEntries(formData);

        console.log(formDataJson);

        $.ajax({
            url: 'null',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'POST',
            data: formDataJson,
            success: function(result){
                alert('Форма успешно отправлена');
            }
        });
    }
})