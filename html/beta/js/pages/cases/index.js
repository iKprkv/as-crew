if (window.innerWidth <= 900) {
  $('#cases').addClass('dark');
  // var cursor = $('#cursor');
  //
  // $(document).ready(function() {
  //
  //   var clientX, clientY;
  //
  //   $('.cases-list').on('touchstart', function(e){
  //     console.log('touch start');
  //     clientX = e.touches[0].clientX;
  //     clientY = e.touches[0].clientY;
  //     //console.log(clientX+':'+clientY);
  //
  //     //$('.container.wide').scrollLeft(clientX)
  //     //setTimeout(function(){
  //       //cursor.css('left',e.touchItem.clientX);
  //       //cursor.css('top',e.touchItem.clientY);
  //       //console.log(e.touchItem.clientX+':'+e.touchItem.clientY)
  //     //}, 20);
  //   });
  //   $('.cases-list').on('touchend', function(e){
  //     console.log('touch end');
  //     var deltaX, deltaY;
  //       // Compute the change in X and Y coordinates.
  //       // The first touch point in the changedTouches
  //       // list is the touch point that was just removed from the surface.
  //       deltaX = Math.abs(e.changedTouches[0].clientX - clientX);
  //       deltaY = Math.abs(e.changedTouches[0].clientY - clientY);
  //       console.log(deltaX+":"+deltaY)
  //       $('.container.wide').animate({scrollLeft: clientX+deltaX,scrollTop: clientY+deltaY }, 800);
  //
  //       // Process the data ...
  //   });
  // //   $(document).on('touchmove', function(e){
  // //     // Cache the client X/Y coordinates
  // //     clientX = e.touches[0].clientX;
  // //     clientY = e.touches[0].clientY;
  // //   }, false);
  // //
  // // $(document).on('touchend', function(e){
  // //   var deltaX, deltaY;
  // //
  // //   // Compute the change in X and Y coordinates.
  // //   // The first touch point in the changedTouches
  // //   // list is the touch point that was just removed from the surface.
  // //   deltaX = e.changedTouches[0].clientX - clientX;
  // //   deltaY = e.changedTouches[0].clientY - clientY;
  // //
  // //   // Process the data ...
  // // }, false);
  // });


  function centeringContent() {
    var outerContent = $('.container.wide');
    var innerContent = 0;
    $(".cases-list .col").each(function(){
      //innerContent = innerContent+this.width();
      innerContent = innerContent + $(this).width()
    })
    console.log(innerContent);
    console.log(outerContent.width());
    outerContent.scrollLeft( (innerContent - outerContent.width()) / 2);
  }
  $(document).ready(function() {
    $('#footer').remove();
    centeringContent();


    // $('.cases-list').on('mousemove', function(e) {
    // var leftOffset = $(this).offset().left;
    // $('container.wide').css('left', -e.clientX + leftOffset);
    //
    // console.log($(this).outerWidth() + ' - ' + $(this)[0].scrollWidth);
    // });
  });
  $(window).bind("load", function() {
    $(".container.wide").addClass('slide-in-bck-bottom');
  });
}
$(document).ready(function() {
  $(".secondary-nav .link").on('click', function(){
    var type = $(this).data('type');
    console.log(type);
    $(".cases-list .col").removeClass('hidden');
    $("#cases .cases-list").addClass('hold');

    if (type == 'all') {
      setTimeout(function() {
        $("#cases .cases-list").removeClass('hold')
      },100)
      $(".cases-list .case").each(function(){
        $(this).show();
      })
    }
    else {
      //
      setTimeout(function() {
        $("#cases .cases-list").removeClass('hold')
      },100)
      $(".cases-list .case").each(function(){
        if ($(this).data('type') == type) {
          $(this).show();
        }
        else {
          $(this).hide();
        }
      });
      $(".cases-list .col").each(function(){
        if($(this).children(':visible').length == 0) {
          $(this).addClass('hidden');
        }
      })
      //
    }
    centeringContent();
  });
  if (window.innerWidth <= 900) {
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    //console.log(position)
    $(".cases-list .col").each(function() {
      //if ($(this).data('r_num')) {
        var translate = $(this).css('transform');
        var matrix = translate.replace(/[^0-9\-.,]/g, '').split(',');
        var y = parseInt(matrix[13]) || parseInt(matrix[5]);
        if (scroll > position) {
          if ($(window).scrollTop() <= 0) {
            $(this).css('transform', 'translate(0, 0)');
          }
          else {
          //console.log('scroll down')
            var num = y - ($(this).data('r_num'));
            $(this).css('transform', 'translate(0, ' + num + 'px)');
          }
        } else {
          //stopNav = $(window).scrollTop();
          //console.log($(window).scrollTop())
          //console.log('scroll up')
          if (y >= 0 || $(window).scrollTop() <= 0) {
            $(this).css('transform', 'translate(0, 0)');
          } else {
            var num = y + ($(this).data('r_num'));
            $(this).css('transform', 'translate(0, ' + num + 'px)');
          }
        }
    })
    position = scroll;
  })
  }
})
