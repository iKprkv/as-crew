$(document).ready(function() {
  var video = $('#wheel');
  if (window.innerWidth <= 1024) {
    console.log('video-transfer')
    video.appendTo( $('#home .title-words') );
    video.addClass('mobile');
  }
  document.getElementById('wheel').play();
})
