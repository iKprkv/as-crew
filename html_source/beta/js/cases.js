$(document).ready(function(){
  if (window.innerWidth > 900) {
  var activeCase
  $("#cases .projects-list .case .text").on('mouseenter', function(e){
    //$('.teaser .content img').fadeOut( 'slow', function() {})
    $('.teaser .content img').css('opacity','0')
    $("#cases .projects-list .case .text").removeClass('active');
    $(this).addClass('active');

    $('.teaser').removeClass('active');
    $(this).parent().siblings('.teaser').addClass('active');
    //$('.teaser .content img').fadeIn( 'slow', function() {})
    //$('.teaser .content img').show();
    $('.teaser .content img').css('opacity','1')
      }).on('mouseleave', function(e){});
  }
});
