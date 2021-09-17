if (window.innerWidth <= 900) {
  var position = $(window).scrollTop();
  var stopNav = 0;
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if(scroll > position) {
      $('.nav').css('position','absolute').removeClass('fade-in').css('top',stopNav+'px');
    } else {
      stopNav = $(window).scrollTop();
      $('.nav').css('position','fixed').addClass('fade-in').css('top',0);
    }
    position = scroll;
  });
}
$(document).ready(function() {
  if (window.innerWidth <= 900) {
    $("#home .secondary-nav").on('click', function(){
      $(this).toggleClass('expanded')
    });    
  }
  $("#home .secondary-nav .link").on('click', function(){
    $(this).addClass('active').siblings().removeClass('active');
  });
})
$(window).bind("load", function () {
  var nav = $('#home .nav'),
  darkElementsPx = {};
  navPos = nav.offset().top + (nav.height()/2);
  function checkDarkPosition() {
    darkElements = document.querySelectorAll('.section.dark');
    for (var i = 0; i < darkElements.length; i++) {
      var element = darkElements[i],
      positionFromTop = element.offsetTop//.getBoundingClientRect().top,
      height = element.offsetHeight;
      darkElementsPx[i] = [positionFromTop,height];

    }
    console.log(darkElementsPx)
  }


  checkDarkPosition();

  function navInvert() {
    var point = $(window).scrollTop() + navPos + 40;
    if (darkElementsPx[0] && point >= darkElementsPx[0][0] && point <= (darkElementsPx[0][0]+darkElementsPx[0][1])) {
      // console.log('первый');
      if (nav.hasClass('invert')) {
      }
      else {
        nav.addClass('invert')
        checkDarkPosition();
      }
    }
    else if (darkElementsPx[1] && point >= darkElementsPx[1][0] && point <= (darkElementsPx[1][0]+darkElementsPx[1][1])) {
      // console.log('второй');
      if (nav.hasClass('invert')) {

      }
      else {
        nav.addClass('invert')
        checkDarkPosition();
      }
    }
    else if (darkElementsPx[2] && point >= darkElementsPx[2][0] && point <= (darkElementsPx[2][0]+darkElementsPx[2][1])) {
      // console.log('третий');
      if (nav.hasClass('invert')) {

      }
      else {
        nav.addClass('invert')
        checkDarkPosition();
      }
    }
    else if (darkElementsPx[3] && point >= darkElementsPx[3][0] && point <= (darkElementsPx[3][0]+darkElementsPx[3][1])) {
      // console.log('третий');
      if (nav.hasClass('invert')) {

      }
      else {
        nav.addClass('invert')
        checkDarkPosition();
      }
    }
    else if (darkElementsPx[4] && point >= darkElementsPx[4][0] && point <= (darkElementsPx[4][0]+darkElementsPx[4][1])) {
      // console.log('третий');
      if (nav.hasClass('invert')) {

      }
      else {
        nav.addClass('invert')
        checkDarkPosition();
      }
    }
    else if (darkElementsPx[5] && point >= darkElementsPx[5][0] && point <= (darkElementsPx[5][0]+darkElementsPx[5][1])) {
      // console.log('третий');
      if (nav.hasClass('invert')) {

      }
      else {
        nav.addClass('invert')
        checkDarkPosition();
      }
    }
    else if (darkElementsPx[6] && point >= darkElementsPx[6][0] && point <= (darkElementsPx[6][0]+darkElementsPx[6][1])) {
      // console.log('третий');
      if (nav.hasClass('invert')) {

      }
      else {
        nav.addClass('invert')
        checkDarkPosition();
      }
    }
    else if (darkElementsPx[7] && point >= darkElementsPx[7][0] && point <= (darkElementsPx[7][0]+darkElementsPx[7][1])) {
      // console.log('третий');
      if (nav.hasClass('invert')) {

      }
      else {
        nav.addClass('invert')
        checkDarkPosition();
      }
    }
    else {
      if (nav.hasClass('invert')) {
        nav.removeClass('invert');
        checkDarkPosition();
      }
    }
  }

  $(window).scroll(function (event) {
    navInvert()
  });
})
