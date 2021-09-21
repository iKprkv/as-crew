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

  $("#home .nav .p-nav").on('click', function(){
    $("#home .nav .popup-menu").click();
  })
})
