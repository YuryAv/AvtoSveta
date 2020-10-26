$('.index-video__filter-click').on('click', function(e){
    const src = $(this).closest('.index-video__right').attr('data-src');
    const video = document.createElement('video'),
        source = document.createElement('source');

        video.setAttribute('controls', 'controls');
        source.setAttribute('src', src);
        source.setAttribute('type', 'video/mp4');

        video.append(source);
        video.append('Your browser does not support the video tag.');
        video.play();

    // $('.index-video__right').css('height', 'auto');
    $(this).closest('.index-video__right').html(video);
})

$.each($('.review__target'), function (indexInArray, valueOfElement) { 
    $(valueOfElement).on('click', function(e){
        const src = $(valueOfElement).closest('.review.review--video').attr('data-src');

        const video = document.createElement('video'),
            source = document.createElement('source');
    
            video.setAttribute('controls', 'controls');
            source.setAttribute('src', src);
            source.setAttribute('type', 'video/mp4');
    
            video.append(source);
            video.append('Your browser does not support the video tag.');
            video.play();
    
        // $(valueOfElement).find('.review__header').css('height', 'auto');
        $(valueOfElement).closest('.review__header').html(video);
    })
});