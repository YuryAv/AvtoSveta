$('input[data-val="number"]').on('input', function(){
    $(this).val($(this).val().replace (/\D/, ''))
})

if ($(window).width() < 992) {
    $('.filter__row').hide(0);
    $('.filter__label').on('click', function(){
        $(this).next('.filter__row').slideToggle(300);
    })
}

$.each($('.filter-banner__item'), function (indexInArray, valueOfElement) {
    if ($(window).width() > 991) {
        const size = $(valueOfElement).width();

        $(valueOfElement).height(size)
        $(valueOfElement).width(size)
    } else {
        $(valueOfElement).hide();
    }
});