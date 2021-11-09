$(document).ready(function() {

  $('.back-to-top').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });



  if (window.innerWidth <= 900) {
    var pugovka = '<a href="cases.html" class="close"></a>'
    $('body').append(pugovka);
    $( "img.imageCase" ).each(function( index ) {
      //console.log( index + ": " + $( this ).text() );
      var src = $(this).attr('src');
      var fileName = src.split("/").pop();
      src = src.replace(fileName, "mobile/"+fileName);
      $(this).attr('src',src);
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
       textCut = info.substr(0,460) + ' ...';
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
