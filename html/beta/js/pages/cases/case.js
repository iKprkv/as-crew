$(document).ready(function() {

    $('div[data-type="background"]').each(function(){
        var $bgobj = $(this); // создаем объект
        $(window).scroll(function() {
            if (
              $($bgobj).offset().top <= ($(window).scrollTop() + $(window).height() )
              // ||
              // $($bgobj).offset().top >= ($(window).scrollTop() + $($bgobj).height())
            ) {
              console.log( $(window).height() + $(window).scrollTop() - $($bgobj).offset().top );
            //var yPos = -(      $(window).height() + $(window).scrollTop() - $($bgobj).offset().top  / $bgobj.data('speed')); // вычисляем коэффициент
            var yPos = (($(window).height() + $(window).scrollTop() - $($bgobj).offset().top ) / 5);
            // Присваиваем значение background-position
            var coords = 'center -'+ yPos + 'px';
            // Создаем эффект Parallax Scrolling
            $bgobj.css({ backgroundPosition: coords });
            }
            else {
              $bgobj.css({ backgroundPosition: 'center 0px' });
            }
        });
    });

  $('.back-to-top').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  if (window.innerWidth <= 900) {
    var pugovka = '<a href="cases.html" class="close"></a>'
    $('body').append(pugovka);
    $( "img.imageCase.adapt" ).each(function( index ) {
      console.log( index + ": " + $( this ).attr('lazy-src') );
      var src = $(this).attr('lazy-src');
      console.log(src)
      var fileName = src.split("/").pop();
      src = src.replace(fileName, "mobile/"+fileName);
      $(this).attr('lazy-src', src );
    });
    $('#footer .container').not('#footer .container.left-padding').remove();
    $('#footer .container .row:nth-child(1)').remove();
    //$('#footer').

    $('#footer').removeClass('dark');
    $('.header .title-words').prependTo( $('#info .container.left-padding') );

     var infoBig = $('#info .columns .description .text').html();
     var info = $('#info .columns .description .text').text();
     //
   if (info.length > 460) {
       textCut = info.substr(0,460) + '...';
       $('#info .columns .description .text').text(textCut);
       $('#info .columns .labels').hide();
       $('<a class="read-more t-16 c-2c2c2c  t-w-800  t-lh-1 t-uppr underline line-c2c2c2c">read more</a>').appendTo('#info .columns');
       $("#info .read-more").on('click', function(){
       $(this).remove();
       $( "#info .columns .labels" ).fadeIn( "slow", function() {});
       $('#info .columns .description .text').html(infoBig).addClass('fade-in')
        });
      }
  }
});
