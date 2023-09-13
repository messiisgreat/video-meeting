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

$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 75) {
        $("#header").addClass("active");
    }

    else {
        $("#header").removeClass("active");
    }
});

$('#show-toggle-menu').on('click', function () {
    $('.sp-menu').addClass('active');
});

$('#hide-toggle-menu').on('click', function () {
    $('.sp-menu').removeClass('active');
});


//Call jQuery before below code
$('.main-btn').click(function () {
    $('.search-description').slideToggle(100);
});

$('#main-submit-mobile').click(function () {
    $('#main-submit').trigger('click');
});
$(window).resize(function () {
    replaceMatches();
});

function replaceMatches() {
    var width = $(window).width();
    if (width < 516) {
        $('.main-location').attr('value', 'City or postal code');
    } else {
        $('.main-location').attr('value', 'Search by city or postal code');
    }
};
replaceMatches();

function clearText(thefield) {
    if (thefield.defaultValue == thefield.value) {
        thefield.value = ""
    }
}

function replaceText(thefield) {
    if (thefield.value == "") {
        thefield.value = thefield.defaultValue
    }
}