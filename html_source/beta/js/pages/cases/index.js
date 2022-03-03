if (window.innerWidth <= 900) {
  $('#cases').addClass('dark');

  function centeringContent() {
    console.log('Centerizing begin')
    var outerContent = $('.container.wide');
    var innerContent = 0;
    $(".cases-list .col").each(function() {
      //innerContent = innerContent+this.width();
      innerContent = innerContent + $(this).width()
    })
    //console.log(outerContent.width());
    outerContent.scrollLeft((innerContent - outerContent.width()) / 2);
    console.log('Centerizing end');
    $(".container.wide").addClass('slide-in-bck-bottom');
  }
  $(document).ready(function() {
    if ( $( "#cases" ).length ) {
      $('#footer').remove();
    }
    else {
      $('.secondary-nav').hide();
    }
    centeringContent();

  });
  $(window).bind("load", function() {

  });
}
$(document).ready(function() {

  var casesData = [];
  casesData['webdesign'] = [];
  casesData['branding'] = [];
  casesData['illustration'] = [];
  casesData['appdesign'] = [];

  var casesDataAll = $('#cases .cases-list').html();

  function getCaseData() {
    $($('#cases .cases-list .case')).each(function(index) {
      if ($(this).data('type') == 'webdesign') {
        casesData['webdesign'].push($(this).wrap('<div/>').parent().html());
      } else if ($(this).data('type') == 'branding') {
        casesData['branding'].push($(this).wrap('<div/>').parent().html())
      } else if ($(this).data('type') == 'illustration') {
        casesData['illustration'].push($(this).wrap('<div/>').parent().html())
      } else if ($(this).data('type') == 'appdesign') {
        casesData['appdesign'].push($(this).wrap('<div/>').parent().html())
      }
    });
  }
  getCaseData();
  //console.log(casesData)
  function caseAnimation() {
    $('#cases .cases-list .case').mouseenter(function() {
      $(this).find('svg').addClass('active').removeClass('fast');
    });
    $('#cases .cases-list .case').mouseleave(function() {
      $(this).find('svg').removeClass('active').addClass('fast');
    })
  }

  caseAnimation();

  if (window.innerWidth <= 900) {
    $(".secondary-nav").on('click', function() {
      $(this).toggleClass('expanded')
    });
  }
  $(".secondary-nav .link").on('click', function() {
    if ($(this).hasClass('active')) {} else {
      $("#cases .cases-list").addClass('hold');

      $(this).addClass('active').siblings().removeClass('active');
      $(".cases-list .col").html('');
      $(".cases-list .col").css('transform', 'translate(0,0)');
      var type = $(this).data('type');
      //console.log(type);
      if (type == 'all') {

        $("#cases .cases-list").html(casesDataAll)
        caseAnimation();
        setTimeout(function() {
          $("#cases .cases-list").removeClass('hold')
        }, 100)
        // $(".cases-list .case").each(function() {
        //   $(this).show();
        // })
      } else {
        //console.log(casesData[type])
        var i = 1;
        $.each(casesData[type], function(key, value) {
          //console.log(key)
          if (i > 3) {
            i = 1;
          }
          $(".cases-list .col:nth-child(" + i + ")").append(value)
          i++
        });
        caseAnimation();
        setTimeout(function() {
          $("#cases .cases-list").removeClass('hold');

        }, 100)
      }
    }
    if (window.innerWidth < 900) {
      centeringContent();
    }
  });
  if (window.innerWidth >= 900) {
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
            } else {
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
