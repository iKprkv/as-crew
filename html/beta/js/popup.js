$(document).ready(function() {

  $(".popup input").focus(function() {
    $(this).parent().addClass("filled");
    $(this).parent().removeClass("error");
    $(this).parent().parent().find('.label').addClass("t-12");
  });
  $(".popup input").focusout(function(){
    if ( !$(this).val() ) {
      $(this).parent().removeClass("filled");
      $(this).parent().parent().find('.label').removeClass("t-12");
    }
  });
  $(".popup textarea").focus(function() {
    $(this).parent().addClass("filled");
    $(this).parent().parent().find('.label').addClass("t-12");
  });
  $(".popup textarea").focusout(function(){
    if ( !$(this).val() ) {
      $(this).parent().removeClass("filled");
      $(this).parent().parent().find('.label').removeClass("t-12");
    }
  });

  $('input[type="mail"]').blur(function() {
    var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    if (testEmail.test(this.value)) {
      $(this).parent().removeClass('error')
    }
    else {
      $(this).parent().addClass('error')
    }
  });

  $(document).on('change','#file-select' , function(e){
    let fileName = e.target.files[0].name;
    $('.file-list').append('<span class="file-item">'+fileName+'</span<')
    //alert('The file name is : "' + fileName);
  });

  var invertStatus = false;

  $(".popup a.start-project").on('click', function(){
    $(".popup .container.main-menu").hide();
    $(".popup .container.start-project").show();
    $(".popup .back").on('click', function(){
      $(".popup .container.main-menu").show();
      $(".popup .container.start-project").hide();
    });
  });

  $("div:not(.popup) .start-project").on('click', function(){
    $(".popup .container.main-menu").hide();
    $(".popup .container.start-project").show();
    $(".nav .popup-menu").addClass('active')
    $('body').addClass('fixed');
    $('.menu').toggle();
    $('#cursor').addClass('white');
    $('.popup').addClass('active')
    setTimeout(function() {
      $('.nav').addClass('invert');
      $('.nav').css('position','fixed').css('top','0px')
      $(".popup .anim").removeClass('hold');
    }, 150); //2000
    $(".popup .back").on('click', function(){
      $('.menu').toggle();
      $('#cursor').removeClass('white');
      $(".nav .popup-menu").removeClass('active');
      $('body').removeClass('fixed');
      $('.popup').removeClass('active');
      $(".popup .anim").addClass('hold');
      //console.log(invertStatus)
      $('.nav').removeClass('invert');
    });
  });

  // $(".popup .back").on('click', function(){
  //   $('.menu').toggle();
  //   $('#cursor').removeClass('white');
  //   $('.nav .popup-menu').removeClass('active');
  //   $('body').removeClass('fixed');
  //   $('.popup').removeClass('active');
  //   $(".popup .anim").addClass('hold');
  //   //console.log(invertStatus)
  //   if (invertStatus == 0) {
  //     $('.nav').removeClass('invert');
  //   }
  // });

  $(".nav .popup-menu").on('click', function(){
    if ($(this).hasClass('active')) {
      $('.menu').toggle();
      $('#cursor').removeClass('white');
      $(this).removeClass('active');
      $('body').removeClass('fixed');
      $('.popup').removeClass('active');
      $(".popup .anim").addClass('hold');
      //console.log(invertStatus)
      if (invertStatus == 0) {
        $('.nav').removeClass('invert');
      }
    }
    else {
      $(".popup .container.main-menu").show();
      $(".popup .container.start-project").hide();
      $(this).addClass('active')
      $('body').addClass('fixed');
      $('.menu').toggle();
      $('#cursor').addClass('white');
      invertStatus = $('.nav.invert').length;
      //console.log(invertStatus)
      if (invertStatus == 0) {
        $('.nav').addClass('invert');
      }
      $('.popup').addClass('active')
      setTimeout(function() {
        $(".popup .anim").removeClass('hold');
      }, 150); //2000
    }
  })
  $(".popup .p-nav span.text").on('click', function(){
    var link = $(this).attr('data-go')
    console.log(link);

      // $('html, body').animate({
      //   scrollTop: $("#"+link).offset().top+50
      // }, 200);
    $('html, body').animate({
      scrollTop: $("#"+link).offset().top
    }, 400);
    setTimeout(function() {
      $(".nav .popup-menu").click();
    }, 200); //2000
      //$("#"+link).find('.animationWait').removeClass('animationWait')
  })
})
