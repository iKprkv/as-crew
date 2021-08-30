$(document).ready(function() {
  var current_progress = 0,
    step = 1; // the smaller this is the slower the progress bar
  function startLoader() {
    interval = setInterval(function() {
      current_progress += step;
      progress = Math.round(Math.atan(current_progress) / (Math.PI / 2) * 100 * 1000) / 1000
      $(".progress .num").text(Math.ceil(progress));
      if (progress >= 100) {
        clearInterval(interval);
      } else if (progress >= 30) {
        step = 0.1
      }
    }, 100);
  }
  startLoader(); // начинаем индикацию загрузки
});
