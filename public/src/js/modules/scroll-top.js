$(document).on('scroll', function(){
    if ($(document).scrollTop() > 600) {
        $('.scroll-top').addClass('scroll-top--active');
    } else {
        $('.scroll-top').removeClass('scroll-top--active');
    }
})

$('.scroll-top').on('click', function(e){
    e.preventDefault();
    $(document).scrollTop(0);
    $('.scroll-top').removeClass('scroll-top--active');
});