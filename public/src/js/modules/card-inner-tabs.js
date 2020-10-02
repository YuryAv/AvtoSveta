// .card-inner-tabs__body-i

$.each($('.card-inner-tabs__head-i'), function (indexInArray, valueOfElement) { 
    $(valueOfElement).on('click', function(){
        $('.card-inner-tabs__head-i--active').removeClass('card-inner-tabs__head-i--active');
        $(this).addClass('card-inner-tabs__head-i--active');
        $('.card-inner-tabs__body-i').slideUp(300);
        $($('.card-inner-tabs__body-i')[indexInArray]).slideDown(300)
    })
});