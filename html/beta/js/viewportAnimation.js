
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


  $(window).scroll(function() {
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
