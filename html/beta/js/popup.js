$(document).ready(function() {
  var invertStatus = false;

  $(".nav .popup-menu").on('click', function(){
    if ($(this).hasClass('active')) {
      $('.menu').toggle();
      $('#cursor').removeClass('white');
      $(this).removeClass('active');
      $('body').removeClass('fixed');
      $('.popup').removeClass('active');
      $(".popup .anim").addClass('hold');
      //console.log(invertStatus)
      if (invertStatus == 0) {
        $('.nav').removeClass('invert');
      }
    }
    else {
      $(this).addClass('active')
      $('body').addClass('fixed');
      $('.menu').toggle();
      $('#cursor').addClass('white');
      invertStatus = $('.nav.invert').length;
      //console.log(invertStatus)
      if (invertStatus == 0) {
        $('.nav').addClass('invert');
      }
      $('.popup').addClass('active')
      setTimeout(function() {
        $(".popup .anim").removeClass('hold');
      }, 150); //2000
    }
  })
  $(".popup .p-nav span.text").on('click', function(){
    var link = $(this).attr('data-go')
    console.log(link);

      // $('html, body').animate({
      //   scrollTop: $("#"+link).offset().top+50
      // }, 200);
    $('html, body').animate({
      scrollTop: $("#"+link).offset().top
    }, 400);
    setTimeout(function() {
      $(".nav .popup-menu").click();
    }, 200); //2000
      //$("#"+link).find('.animationWait').removeClass('animationWait')
  })
})
