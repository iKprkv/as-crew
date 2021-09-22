if ('scrollRestoration' in history) {
  history.scrollRestoration = 'manual';
}
var current_progress = 0,
  step = 1; // the smaller this is the slower the progress bar
function startLoader(stop) {
  interval = setInterval(function() {
    current_progress += step;
    progress = Math.round(Math.atan(current_progress) / (Math.PI / 2) * 100 * 1000) / 1000
    $(".progress .num").text(Math.ceil(progress));
    if (progress >= 100) {
      clearInterval(interval);
    } else if (progress >= 60) {
      step = 0.4
    }
  }, 100);
}
startLoader(); // начинаем индикацию загрузки
//});
$(window).bind("load", function() {
  window.scrollTo(0,0);
  setTimeout(function() {
    $('.waiting-for-content').addClass('done');
  }, 500); //2000
  setTimeout(function() {
    $("html, body").animate({
      //scrollTop: 0
    }, 0);
    $('.waiting-for-content').fadeOut(function() {
      $(this).remove()
    });
    $("#home .title-words .hold").removeClass('hold');
    //$('.animationWait').each(function( index ) {
    //$(this).removeClass('animationWait');
    //});
  }, 1000); //2500
});
