$(document).ready(function () {
  $(".close").click(function () {
    $(this).parent().hide();
  })

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

  $('.rating').on('click', function () {
    $(".rating i").removeClass("fa-solid").addClass("fa-regular");
    $('.rating').removeClass("active");
    $(this).addClass("active");
    $(".rating.active i").removeClass("fa-regular").addClass("fa-solid");
  });
})