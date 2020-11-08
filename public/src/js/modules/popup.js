const showPopup = (eventTarget, popup) => {
    $(eventTarget).on('click', function(e){
        e.preventDefault();
        $('body').addClass('body--overflow');
        $(popup).show(150, () => { toggleAnimation({
            item: 'section.popup .popup__inner',
            class: 'a--show',
            show: true,
            type: 'transitionend',
            callback: false
        })});
    })
}

$(document).mouseup(function(e) {
    var containers = ['section.popup', '.popup__container', '.popup__inner'];

    $.each(containers, function (indexInArray, valueOfElement) { 
        if ($(valueOfElement).has(e.target).length === 0) {
            $('section.popup').hide(300);
            $('section.popup .popup__inner').hide();
            $('body').removeClass('body--overflow');
        };
    });

    
});

showPopup('.benefits-card__text', 'section.popup#popupText');
showPopup('.article-info__share', 'section.popup#popupForm');
showPopup('button.card__button', 'section.popup#popupForm');
showPopup('a.c-tab__button', 'section.popup#popupMap');
showPopup('button.card-inner-sidebar__button', 'section.popup#popupForm');

