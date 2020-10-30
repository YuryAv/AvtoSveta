$('.index-tabs__input').on('change', function(){
    let tabValue = $(this).attr('data-tab');

    $.each($('.card'), function(indx, val){
        
        console.log({
            'data-card': $(val).attr('data-card-tab'),
            'tabValue': tabValue,
            'if': $(val).attr('data-card-tab') != tabValue
        });

        if ($(val).attr('data-card-tab') != tabValue) {
            $(val).fadeOut(300);
        } else {
            $(val).fadeIn(300);
        }        
    })
});