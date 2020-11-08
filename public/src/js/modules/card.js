$('.card__button').on('click', function(){
    $('section.popup form textarea').text('Хочу спросить по поводу '+ $(this).closest('.card').find('.card__title').text()+ '...');
})

const setCardSliderSize = () => {
    $.each($('.card-slider'), function (indexInArray, valueOfElement) { 
        const wh = $(valueOfElement).closest('.card').width() / 3;

        console.log(wh)

        $(valueOfElement).find('.card-slider__item').css('height', wh+'px');
    });
}

const removeDataSrc = () => {
    $.each($('.card.card--zoom'), function (indexInArray, valueOfElement) {
        let img = $(valueOfElement).find('.card__image.lazy');
        let imgUrl = img.attr('data-src');

        img.removeClass('lazy').attr('src', imgUrl);
    });
}

const setCardMouseEvents = () => {
    $.each($('.card--zoom'), function (indexInArray, valueOfElement) {
        if ($(window).width() > 992) {
            $(valueOfElement).find('.card-slider__item').on('mouseenter', function(){
                $(valueOfElement).find('img.card__image').attr('src', $(this).find('img.card-slider__image').attr('src'));
            })
            $(valueOfElement).on('mouseleave', function(){
                $(valueOfElement).find('img.card__image').attr('src', $(valueOfElement).find('img.card__image').attr('data-default'));
            })
            $(valueOfElement).css('max-height', $(valueOfElement).height() + 'px');
        }
        if ($(valueOfElement).has('.card-slider')) {
            $(valueOfElement).on('mouseenter', function(){
                $.each($(valueOfElement).find('.card-slider__image'), function(imgIndex, imgValue){
                    $(imgValue).attr('src', $(imgValue).attr('data-mysrc'))
                })
                
                const height = $(valueOfElement).find('img.card__image').height() - $(valueOfElement).find('.card-slider').height() - 1;
                
                $(valueOfElement).find('img.card__image').css({
                    'height': height + "px",
                    'min-height': height + "px",
                    'max-height': height + "px"
                });
                $(valueOfElement).find('.card__link').css({
                    'height': height + "px",
                    'min-height': height + "px",
                    'max-height': height + "px"
                });
            });
            $(valueOfElement).on('mouseleave', function(){
                $(valueOfElement).find('img.card__image').css({
                    'height': "",
                    'min-height': "",
                    'max-height': ""
                });
                $(valueOfElement).find('.card__link').css({
                    'height': "",
                    'min-height': "",
                    'max-height': ""
                });
            });
        }
    });
}

setCardSliderSize();
setCardMouseEvents();