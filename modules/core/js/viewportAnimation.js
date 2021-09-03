$(window).bind("load", function () {
  var elements;
  var windowHeight;

  function init() {
    elements = document.querySelectorAll('.animationWait');
    console.log(elements)
    windowHeight = window.innerHeight;
    vh30 = windowHeight * 40 / 100;
    console.log('vh='+vh30)
    console.log('initialization')
    //console.log(elements)
  }

  function checkPosition() {
    console.log('checks')
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      console.log(element);
      var positionFromTop = element.getBoundingClientRect().top;
      var h = positionFromTop - windowHeight;
      //console.log(element+'='+h)
      if (positionFromTop - windowHeight <= -vh30) {
           $(element).removeClass('animationWait').addClass('animationDelay');
        init();
      }
    }
  }

  init();
  checkPosition();

  $(window).scroll(function() {
    checkPosition();
  })
});
