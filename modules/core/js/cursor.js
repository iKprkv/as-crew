$(document).ready(function() {
  var cursor = $('#cursor');

  function moveCursor(e) {
    setTimeout(function(){
      cursor.css('left',e.pageX);
      cursor.css('top',e.pageY);
    }, 220);
    /*TweenLite.to(cursor, 0.4, {
      css: {
        left: e.pageX,
        top: e.pageY
      }
    });*/
  };
  $(window).on('mousemove', moveCursor);

  $( "div[data-cursor='round']" ).hover(
    function() {
      var text = $(this).data('text'),
      bg = $(this).data('bg'),
      color = $(this).data('color');
      $(this).append( $('#cursor') );
      setTimeout(function () {
        cursor.addClass('round');
        cursor.html('<div class="text">'+text+'</div>').css('background-color',bg).css('color',color);
      }, 20)
    }
  ).mouseleave(
    function() {
      $('body').append( $('#cursor') );
      setTimeout(function () {
        cursor.removeClass().html('').css('background-color','').css('color','');
      }, 20)

    }
  );
  /*
  $( "div[data-cursor='round']" ).each(function( index ) {
    $('body').mousemove(function(){
      console.log($(this))
      var isHovered = $("test-area-01").is(":hover");
      console.log(isHovered)
      /*if (isHovered == true) {
        //console.log('dsds');
        cursor.addClass('round');
      }
      else {
        console.log('111s')
      }
    });*/

    /*$(this).mouseenter(function(){
      //cursor.remove();
      //cursor.appendTo(this).remove();
      cursor.clone().remove().appendTo(this);

      console.log($(this).attr('data-text'));
      //cursor.addClass('round');
    });*/
    //$(this).mouseleave(function(){
      //cursor.removeClass('round');
    //})
    //var text = $(this).attr('data-text')
    //console.log(index+' '+text);
    //console.log($(this).position());
    //console.log($(this).height());
    //console.log($(this).width());

//});

  /*
  $('.test-area').mouseenter(function() {
    console.log('enter')
    //cursor.addClass('round');
  });
  $('.test-area').mouseleave(function() {
    console.log('leave')
    //cursor.removeClass('round');
  });
  ///
  /*
  cursor.mouseenter(function() {
    console.log('ОПА!');
    cursor.removeClass('round');
  });
  cursor.mouseleave(function() {
    cursor.removeClass('round');
  });
/*
  $('.test-area').mouseover(function(){
    flag = true;
    console.log(flag);
    TweenLite.to(cursor,0.7,{css:{className:'round'}})
    //$('.test-area').on('mousemove', moveCursor);
  });

  $('.test-area').mouseout(function(){
    //flag = false;
    //console.log(flag);
    /*setTimeout(function () {
      if (flag == false) {
        console.log('FALSE')
      }
      else {
        console.log('TRUE')
      }
   }, 5000);*/
   /*
    if (flag == false) {
      console.log('dsdsds')
    }
    else {
      flag = false;
      cursor.removeClass('round');
      console.log('222222')
    }*/
//  });
  /*
  $('.test-area').mouseleave(function(){
    flag = false;
    cursor.removeClass('round');
    console.log('out')
    //TweenLite.to(cursor,0.4,{css:{className:'+=round'}})
  });*/
/*
  $('.test-area:not(.modify)').mouseenter(function() {
    if (!$('.test-area').hasClass('modify')) {
      $(this).addClass('modify');
      cursor.addClass('round');
    }
  })*/

  /*$('.test-area').mouseout(function() {
      console.log('22222ss')

    });*/


});
