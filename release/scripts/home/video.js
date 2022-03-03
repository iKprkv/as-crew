$(document).ready(function() {
  var video = $('#wheel');
  if (window.innerWidth <= 900) {
    console.log('video-transfer')
    //video.appendTo( $('#home .title-words') );
    $("#home").append(video);
    video.addClass('mobile');
  }
  //document.getElementById('wheel').play();
})
$(window).bind("load", function() {
  setTimeout(function() {
    document.getElementById('wheel').play();
  }, 550);
});
