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
  $("#team .person").on('mouseenter', function(e){
    $(this).find('.effect').fadeIn( 150, function() {});
    stopEffect = false;
    effect(this);
  }).on('mouseleave', function(e){
    $(this).find('.effect').fadeOut( 100, function() {});
    stopEffect = true;
  });

  // function parallaxImage(elm, dir,multiplier) {
  //   var elPos = $('.person.'+elm).offset().top;
  //   if (elPos - window.innerHeight <= $(document).scrollTop() ) {
  //     //console.log(elPos - window.innerHeight)
  //     $('.person.'+elm).css(dir,(($(document).scrollTop()+window.innerHeight)* multiplier))
  //   }
  // }
  //
  // $(window).scroll(function() {
  //   if (window.innerWidth >= 900) {
  //     parallaxImage('sveta','bottom',0.05);
  //     parallaxImage('anna','top',0.03);
  //   }
  // });
});
