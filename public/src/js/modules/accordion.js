$('.accordion__header').on('click', function(){
    $(this).next('.accordion__body').slideToggle(300);
    $(this).closest('.accordion').toggleClass('accordion--opened')
})