
$(window).bind("load", function () {
  var elements;
  var windowHeight;

  function init() {
    elements = document.querySelectorAll('.animationWait');
    windowHeight = window.innerHeight;
    vh = windowHeight * 15 / 100;
    //console.log('initialization')
  }

  function checkPosition() {
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var positionFromTop = element.getBoundingClientRect().top;
      var h = positionFromTop - windowHeight;
      if (h <= -vh) {
           $(element).removeClass('animationWait').addClass('animationDelay');
           //console.log(element)
        init();
      }

    }
  }

  init();
  checkPosition();

  function parallaxImage(elm, dir,multiplier) {
    var elPos = $('.person.'+elm).offset().top;
    if (elPos - window.innerHeight <= $(document).scrollTop() ) {
      //console.log(elPos - window.innerHeight)
      $('.person.'+elm).css(dir,(($(document).scrollTop()+window.innerHeight)* multiplier))
    }
  }

  $(window).scroll(function() {
    if (window.innerWidth >= 900) {
      parallaxImage('sveta','bottom',0.05);
      parallaxImage('anna','top',0.03);
    }



    if($(window).scrollTop() + ($(window).height() + 70) >= $(document).height()) {
      $(".animationWait").each(function() {
        $(this).removeClass('animationWait').addClass('animationDelay');
      });
    }
    else {
     checkPosition();
    }
  })
});
