// Get all video elements on the page
const videoElements = document.getElementsByTagName('video');

// Loop over the video elements and create a new Plyr instance for each one
for (let i = 0; i < videoElements.length; i++) {
    const videoElement = videoElements[i];
    const player = new Plyr(videoElement, {
        muted: false,
        volume: 1,
        controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'fullscreen']
    });
}

$(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > 75) {
      $("#header").addClass("active");
    }

    else{
        $("#header").removeClass("active");
    }
});

$('#show-toggle-menu').on('click', function(){
    $('.sp-menu').addClass('active');
});

$('#hide-toggle-menu').on('click', function(){
    $('.sp-menu').removeClass('active');
});