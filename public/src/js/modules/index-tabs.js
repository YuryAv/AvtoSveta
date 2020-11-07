$('.index-tabs__button').on('click', function(){
    let tabCount = 10;

    if ($(window).width() < 1600 && $(window).width() > 991) {
        tabCount = 8;
    } else if ($(window).width() < 992 && $(window).width() > 767) {
        tabCount = 6;
    } else if ($(window).width() < 768) {
        tabCount = 4;
    };

    let dataJSON = JSON.stringify({
        carTabId: $(this).attr('data-id'),
        cardTabCount: tabCount
    });

    console.log(dataJSON);

    $.ajax({
        url: "../../../../getTabCars.php",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'POST',
        data: dataJSON,
        success: function(result){
            console.log(result);
            $('.section .card-wrapper').html(result);
        },
    });  
});