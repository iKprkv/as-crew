$(document).ready(function() {
  var invertStatus = false;

  $("#home .nav .popup-menu").on('click', function(){
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $('body').removeClass('fixed');
      $('#home .popup').removeClass('active');
      $("#home .popup .anim").addClass('hold');
      //console.log(invertStatus)
      if (invertStatus == 0) {
        $('#home .nav').removeClass('invert');
      }
    }
    else {
      $(this).addClass('active')
      $('body').addClass('fixed');
      invertStatus = $('#home .nav.invert').length;
      //console.log(invertStatus)
      if (invertStatus == 0) {
        $('#home .nav').addClass('invert');
      }
      $('#home .popup').addClass('active')
      setTimeout(function() {
        $("#home .popup .anim").removeClass('hold');
      }, 350); //2000
    }
  })
  $("#home .popup .p-nav span.text").on('click', function(){
    var link = $(this).attr('data-go')
    console.log(link);

      // $('html, body').animate({
      //   scrollTop: $("#"+link).offset().top+50
      // }, 200);
    $('html, body').animate({
      scrollTop: $("#"+link).offset().top
    }, 400);
    setTimeout(function() {
      $("#home .nav .popup-menu").click();
    }, 200); //2000
      //$("#"+link).find('.animationWait').removeClass('animationWait')
  })
})
