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