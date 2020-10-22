$('.card__button').on('click', function(){
    $('section.popup form textarea').text('Хочу спросить по поводу '+ $(this).closest('.card').find('.card__title').text()+ '...');
})

const setCardSliderSize = () => {
    $.each($('.card-slider'), function (indexInArray, valueOfElement) { 
        const wh = ($(valueOfElement).width() - 0) / 3;

        $(valueOfElement).find('.card-slider__item').css('height', wh+'px')

        console.log(wh);
    });
}

setCardSliderSize();

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
            const height = $(valueOfElement).find('img.card__image').height() -  $(valueOfElement).find('.card-slider').height();
            
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


