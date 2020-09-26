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
            console.log('enter');
            $(valueOfElement).find('img.card__image').attr('src', $(this).find('img.card-slider__image').attr('src'));
        })
        $(valueOfElement).on('mouseleave', function(){
            $(valueOfElement).find('img.card__image').attr('src', $(valueOfElement).find('img.card__image').attr('data-default'));
        })
        $(valueOfElement).css('max-height', $(valueOfElement).height() + 'px');
    }
}); 


