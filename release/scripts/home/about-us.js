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
$(window).bind("load", function () {
  var getUrlParameter = function getUrlParameter(sParam) {
      var sPageURL = window.location.search.substring(1),
          sURLVariables = sPageURL.split('&'),
          sParameterName,
          i;

      for (i = 0; i < sURLVariables.length; i++) {
          sParameterName = sURLVariables[i].split('=');

          if (sParameterName[0] === sParam) {
              return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
          }
      }
      return false;
  };

  var anchor = getUrlParameter('data-go');
  console.log('anchor='+anchor)
   if (anchor != false) {
     $('html, body').animate({
       scrollTop: $("#"+anchor).offset().top
     }, 400);
   }

});
