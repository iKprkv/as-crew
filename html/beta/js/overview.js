$(document).ready(function() {
  if (window.innerWidth <= 900) {
    $('#overview .columns .words').prependTo( $('#overview .container:not(.left-padding)') );
    $('#overview .words').removeClass('col')
  }
  $("#overview .tab").on('click', function(){
    var data = $(this).attr('data-tab');
    $('#overview .tab.active').removeClass('active');
    $(this).addClass('active');
    //
    $('#overview .tab-area').addClass('switching');
    setTimeout(function(){
      $('#overview .tab-area').removeClass('switching')
    },200);
    if (window.innerWidth <= 900) {
      $('#overview .words').addClass('switching');
      setTimeout(function(){
        $('#overview .words').removeClass('switching')
      },200);
    }
    //
    setTimeout(function(){
      if (window.innerWidth <= 900) {
        $( "#overview .words .animationDelay" ).each(function(e) {
          $(this).addClass('animationWait');
          setTimeout(function(){
            $( "#overview .words .animationWait" ).removeClass('animationWait');
          },200);
        });
      }
      $( "#overview .tab-area .animationDelay" ).each(function(e) {
        $(this).addClass('animationWait');
        setTimeout(function(){
          $( "#overview .tab-area .animationWait" ).removeClass('animationWait')
          $('#overview .columns .text.'+data).show().siblings().hide();
          $('#overview .words .text.'+data).css('display','flex').siblings().hide();
        }, 200);
      });
    },200);
  });
})
