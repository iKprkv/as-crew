// $(document).ready(function() {
//   $('.animationWait').each(function(index) {
//     //console.log($(this).attr('src'))
//     if ($(this).attr('src')) {
//       $(this).addClass('lazy');
//       var src = $(this).attr('src');
//       console.log(src)
//       $(this).attr('lazy-src', src).removeAttr('src');
//
//       //$('img.lazy').attr('lazy-src', src);
//     }
//     else {
//       $(this).find('img').addClass('lazy');
//       var src = $(this).find('.lazy').attr('src');
//       console.log(src)
//       //$('img.lazy').attr('lazy-src', src);
//     }
//     //$('img.lazy').after('<div class="load-elm-overlay"></div>');
//     //var src = $('img.lazy').attr('scr');
//     //console.log(src);
//
//     //$('img.lazy').removeAttr('src');
//   })
//
// })
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
           if ($(element).attr('lazy-src')) {
             var lSrc = $(element).attr('lazy-src');
             $(element).attr('src', lSrc).removeAttr('lazy-src').removeClass('lazy');
           }
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
        if ($(this).attr('lazy-src')) {
          var lSrc = $(this).attr('lazy-src');
          $(this).attr('src', lSrc).removeAttr('lazy-src').removeClass('lazy');
        }
      });
    }
    else {
     checkPosition();
    }
  })
});
