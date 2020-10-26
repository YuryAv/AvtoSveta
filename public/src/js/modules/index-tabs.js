$('.index-tabs__input').on('change', function(){
    let tabValue = $(this).attr('data-tab');

    $.each($('.card'), function(indx, val){
        if ($(val).attr('data-card-tab') != tabValue) {
            $(val).fadeOut(300);
        } else {
            $(val).fadeIn(300);
        }        
    })
});