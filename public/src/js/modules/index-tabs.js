let tabCount = 10;

if ($(window).width() < 1600 && $(window).width() > 991) {
    tabCount = 8;
} else if ($(window).width() < 992 && $(window).width() > 767) {
    tabCount = 6;
} else if ($(window).width() < 768) {
    tabCount = 4;
};



let sendAjax = (param = 0) => {
    if (document.querySelector('.index-tabs') != undefined && document.querySelector('.index-tabs') != null) {
        let dataJSON = JSON.stringify({
            carTabId: param,
            cardTabCount: tabCount
        });

        console.log(dataJSON);

        $.ajax({
            url: 'getTabCars',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'POST',
            data: dataJSON,
            success: function(result){
                $('.index-tabs').closest('.section').find('.card-wrapper').html(result);
                setCardSliderSize();
                setCardMouseEvents();
                removeDataSrc();
            },
        });
    }
};

sendAjax();

$('.index-tabs__button').on('click', function(){
    sendAjax($(this).attr('data-id'))
});