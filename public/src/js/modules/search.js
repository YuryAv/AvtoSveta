$('.search__button').on('click', function(){
    $('.search__input').show(300, ()=>{$(this).attr('type', 'submit')});
})