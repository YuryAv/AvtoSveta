$('.index-video__filter-click').on('click', function(e){
    let src = $(this).closest('.index-video--inner').attr('data-src');
    let video = document.createElement('video'),
        source = document.createElement('source');

        video.setAttribute('controls', 'controls');
        source.setAttribute('src', src);
        source.setAttribute('type', 'video/mp4');

        video.append(source);
        video.append('Your browser does not support the video tag.');
        video.play();

    $(this).closest('.index-video--inner').html(video);
})