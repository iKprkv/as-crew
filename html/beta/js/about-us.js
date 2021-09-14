$(function() {
  $('.marquee .moving_text').marquee({
    duration: 12000,
    startVisible: true,
    duplicated: true
  });
});
var stopEffect = false;
function effect(e,s) {
    //console.log(stopEffect);
    var next = $(e).find('.effect img.active').next('img');
    $(e).find('.effect img.active').removeClass('active');
    if (next.is(':last-child')){
      next = $(e).find('.effect img:first-child');
    }
    next.addClass('active');
     setTimeout(function() {
      if (stopEffect == true) {
        return;
      }
      else {
        effect(e);
      }
    },100)
}
$(document).ready(function(){
  $("#persons-focus .person").on('mouseenter', function(e){
    $(this).find('.effect').fadeIn( 150, function() {});
    stopEffect = false;
    effect(this);
  }).on('mouseleave', function(e){
    $(this).find('.effect').fadeOut( 100, function() {});
    stopEffect = true;
  });
});
