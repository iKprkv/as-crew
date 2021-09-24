$(document).ready(function() {
  function is_touch_enabled() {
    return ( 'ontouchstart' in window ) || ( navigator.maxTouchPoints > 0 ) || ( navigator.msMaxTouchPoints > 0 );
  }
  var cursor = $('#cursor');
  console.log('Touch: '+is_touch_enabled());
  if (!is_touch_enabled()) {
    $(document).on('mousemove', function(e){
      setTimeout(function(){
        cursor.css('left',e.clientX);
        cursor.css('top',e.clientY);
      }, 20);
    });

    $("div.section.dark").on('mouseenter', function(e){
      cursor.addClass('white');
    });
    $("div.section.dark").on('mouseleave', function(e){
      cursor.removeClass('white');
    });

    // round begin
    $("div[data-cursor='round']").on('mouseenter', function(e){
      var text = $(this).attr('data-text')
      cursor.addClass('round').html('<div class="text">'+text+'</div>');
      //
    });
    $("div[data-cursor='round']").on('mouseleave', function(e){
      cursor.removeClass('round').html('');
    });
    // round end
  }
  else {
    cursor.remove();
  }
});
