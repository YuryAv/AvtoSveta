$('.benefits-card__text').on('click', function(){
    if ($('#popupText').length > 0) {
        $('.popup#popupText .popup__container p').text($(this).text());
    } else {
        $('body').append("<section class='popup' style='display: none;' id='popupText'><div class='container popup__container'></div></section>");
        $('.popup#popupText .popup__container').append(`<p class="popup__text-block">${$(this).text()}</p>`);
    };
    $('body').addClass('body--overflow');
    $('.popup#popupText').show(300);
});