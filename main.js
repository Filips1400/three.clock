$(window).scroll(function () {
    if ($(this).scrollTop() > 400) {
      $('.header_title').addClass('newClass');
    } else {
      $('.header_title').removeClass('newClass');
    }
  });

