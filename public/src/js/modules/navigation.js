let scrollTopOld = 0;


const fixedHeader = (_direction) => {
    let topSize = $('.header').height();

    
    if ($(document).scrollTop() > (topSize * 3) && $(window).height() > 550 && _direction) {
        $('.header').addClass('header--visible');
        return;
    }
    if ($(document).scrollTop() > topSize && $(window).height() > 550 && _direction) {
        $('.header').addClass('header--fixed');
        $("body").css("padding-top", topSize + "px");
        return;
    }  
    if ($(document).scrollTop() <= topSize && $(window).height() > 550 && !_direction) {
        $('.header').removeClass('header--visible');
        $('.header').removeClass('header--fixed');
        $("body").css("padding-top", "");
        return;
    }
}

const mobileMenu = () => {
    $('.navigation__inner').css({
        'top': ($('.header').height() + 1) + 'px',
        'height':  'calc(100vh - '+$('.header').height()+'px)'
    });
    $('.navigation__inner .sub-menu').hide(0);
    $('.navigation__link-icon').on('click', function(e){
        e.preventDefault();
        $(this).toggleClass('navigation__link-icon--active').closest('.navigation__item-inner').next('.sub-menu').slideToggle(300);
    })
}

if ($(window).width() < 767) {
    mobileMenu();
}

$(document).on('scroll', function (e) {
    fixedHeader($(this).scrollTop() > scrollTopOld);
    scrollTopOld = $(this).scrollTop();
})

$('button.mobile').on('click', function(){
    $(this).toggleClass('mobile--active');
    $('.navigation__inner').toggleClass('navigation__inner--opened');
    $('body').toggleClass('body--overflow');
})