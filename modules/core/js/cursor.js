$(document).ready(function() {
  var cursor = $('#cursor');
  $(document).on('mousemove', function(e){
    setTimeout(function(){
      cursor.css('left',e.pageX);
      cursor.css('top',e.pageY);
    }, 10);
  });

   $("div[data-cursor='round']").on('mouseenter', function(e){
     $('#cursor').hide();
   });
   $("div[data-cursor='round']").on('mouseleave', function(e){
     $('#cursor').show();
   });

});
