$('.index-tabs__input').on('change', function(){
    let tabValue = $(this).attr('data-tab');
    console.log($(this).attr('data-tab'));

    $.each($('.card-wrapper .card'), function(indx, val){
        if ($(val).attr('data-card-tab') != tabValue) {
            $(val).fadeOut(300);
        }        
    })
});