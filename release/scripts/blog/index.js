$(document).ready(function() {

  getdetails('all');

  function drawPosts(data) {
    // очищаем
    if (window.innerWidth >= 900) {
      $( ".blog-list .col" ).each(function( index ) {
        $(this).html('');
      });
    }
    else {
      $( ".blog-list" ).html('');
    }
    //рисуем и распихиваем по столбцам
    var i = 1;
    $( data ).each(function(index, value) {
      //console.log(value);
      var post = '<a href="/pages/blog/post.php?'+value['url']+'" data-type="'+value['type']+'" class="post fade-in animationDelay"><div class="cover"><div class="type"><span class="text">'+value['type']+'</span></div><img class="grayscale" src="'+value['thumbnail']+'"><img class="mask" src='+value['thumbnail']+'></div><div class="title-text t-30 t-w-800 t-lh-1.27 t-a-left c-000">'+value['_id']+ ' - '+value['title']+'</div><div class="description-text t-14 t-w-n t-lh-1-78 t-a-left c-000">'+value['short']+' […]</div><span class="read-more t-24 t-w-800 t-lh-1-21 t-a-left c-000 t-uppr underline arrow">full article</span></a>';
      if (window.innerWidth >= 900) {
        $('.blog-list .col:nth-child('+i+')').append(post);
        if (i >= 3 && window.innerWidth >= 900) { // 3 столбца
          i = 1;
        }
        else {
          i++
        }
      }
      else {
        $('.blog-list').append(post);
      }
    });
    coverMask();
  }


  function getdetails(type,page) {
    console.log(type);
    $.ajax({
        type: "POST",
        url: "/pages/blog/getList.php",
        data: {type:type,page:page}
    }).done(function( result ) {
      //console.log(JSON.parse(result['total_data']));
        var data = JSON.parse(result);
        console.log(data);
        drawPosts(data['data']);
        $('.pagination').html(data['pagination_html']);
        if (data != '') {
          $('.pagination .page:not(.active)').click(function(){
            getdetails($(this).data('type'),$(this).data('pagenum'));
            $('html, body').animate({
              scrollTop: $('.blog-list').offset().top
            }, 0);
          });
        }
        else {
          console.log('постов нет');
          $('.pagination').html('');
        }

    });
  };
  $('.secondary-nav .link').click(function(){
      getdetails($(this).data('type'));
  });


  // Маска картинки поста
  function coverMask() {
    $('#blog .blog-list .post .cover').on('mousemove', function(e){
      var bubble = $(this).find('.mask');
      var offset = $(bubble).offset();
      bubble.css('clip-path','circle(139px at '+(e.pageX-offset.left)+'px '+(e.pageY-offset.top)+'px)');
    });
  }

  if (window.innerWidth >= 900) {
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        //console.log(position)
        $(".blog-list .col").each(function() {
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
      });
  }
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
  var filter = getUrlParameter('filter');
  setTimeout(function() {
    $(".secondary-nav .link[data-type="+filter+"]").click();
    console.log('filter='+filter);
    if (window.innerWidth <= 900 && filter) {
      $('.nav .secondary-nav').click();
    }
  },200)
});
