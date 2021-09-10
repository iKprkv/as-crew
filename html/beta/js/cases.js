$(document).ready(function(){
  var activeCase
  $("#cases .projects-list .case .text").on('mouseenter', function(e){
    //activeCase = $(this).data('case');
    $("#cases .projects-list .case .text").removeClass('active');
    $(this).addClass('active');
    $('.teaser').removeClass('active');
    $(this).siblings('.teaser').addClass('active');
    //console.log('activeCase='+activeCase)
  }).on('mouseleave', function(e){

  });
});
