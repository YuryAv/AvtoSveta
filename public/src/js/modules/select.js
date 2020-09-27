$('.select-group__inner').on('click', function(){
    $(this).toggleClass('select-group__inner--opened').next('.select-group__list').slideToggle(300);
})