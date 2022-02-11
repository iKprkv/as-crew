$(document).ready(function(){
  // cases
  if (window.innerWidth <= 900) {
    var cases = $('#cases .projects-list');
    cases.addClass('animationWait fade-in');
    cases.on('init', function(event, slick){
      $('<div class="cases-counter t-14 c-6c6c6c animationWait fade-in"><span class="current c-fff">'+((slick.slickCurrentSlide()+1)<10 ? '0'+(slick.slickCurrentSlide()+1):slick.slickCurrentSlide()+1)+'</span>  |  <span class="">'+ (slick.slideCount<10 ? '0'+slick.slideCount : slick.slideCount)+'</div>').insertBefore(this);
    })
    $("#cases .projects-list .case .teaser img").each(function() {
      var src = $(this).attr('src');
      var srcMob = src.replace("img/cases/", "img/cases/mobile/");
      $(this).attr('src',srcMob);
      var href = $(this).parent().parent().parent().find('.text').attr('href');
      var text = $(this).parent().parent().parent().find('.text-wrapper')
      $(this).wrap('<a class="wrapper" href='+href+'>');
      text.appendTo( $(this).parent() );
    });
    cases.slick({
      lazyLoad: 'progressive',
      dots: false,
      arrows: false,
      slidesToShow: 2,
      slidesToScroll: 2,
      responsive: [
      {
        breakpoint: 450,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
    });
    cases.on("afterChange", function(event, slick) {
      $('.cases-counter .current').text((slick.slickCurrentSlide()+1)<10 ? '0'+(slick.slickCurrentSlide()+1):slick.slickCurrentSlide()+1);
    });
  }
  // team
  //if (window.innerWidth <= 900) {
    var team = $('#team');
    team.slick({
      dots: false,
      arrows: false,
      infinite: false,
      slidesToShow: 2,
      slidesToScroll: 1,
      variableWidth: true,
      // centerPadding: '100px',
      initialSlide: 2,
      // centerMode:true,
      responsive: [
      {
        breakpoint: 1600,
        settings: {
          //slidesToShow: 3
        }
      },
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 1
        }
      }
      ]
    })
  //}
  // persons
  if (window.innerWidth <= 900) {
      $('#about-us .columns .text').prependTo( $('.container.team') );
      $('#about-us .columns .person').unwrap().wrap('<div class="p-slide"></div>')//.nearest('.container').css('background','red')
      var person = $('#persons-focus');
      person.slick({
        dots: false,
        arrows: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
      });
  }
  // brands
  var brands = $('.carousel#brands');
  brands.slick({
    lazyLoad: 'progressive',
    dots: false,
    arrows: false,
    infinite: true,
    adaptiveHeight: false,
    variableWidth: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 4000,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: 'linear'
  });
  //reviews
  var reviews = $('.carousel#reviews-list');
  if (reviews) {
    reviews.on('init', function(event, slick){
      //console.log('reviews init')
      $('<div class="reviews-counter t-14 c-6c6c6c animationWait fade-in"><span class="current c-c91559">'+((slick.slickCurrentSlide()+1)<10 ? '0'+(slick.slickCurrentSlide()+1):slick.slickCurrentSlide()+1)+'</span>  |  <span class="">'+ (slick.slideCount<10 ? '0'+slick.slideCount : slick.slideCount)+'</div>').insertBefore(this);
    })
    reviews.slick({
      dots: false,
      arrows: false,
      infinite: true,
      centerMode: true,
      slidesToShow: 3,
      variableWidth: true,
      responsive: [
      {
        breakpoint: 900,
        settings: {
          centerMode: true,
          slidesToShow: 2
        }
      },
      {
        breakpoint: 650,
        settings: {
          centerMode: true,
          slidesToShow: 2
        }
      },
      {
        breakpoint: 450,
        settings: {
          centerMode: false,
          slidesToShow: 1
        }
      }
    ]
    });
    reviews.on("afterChange", function(event, slick) {
      $('.reviews-counter .current').text((slick.slickCurrentSlide()+1)<10 ? '0'+(slick.slickCurrentSlide()+1):slick.slickCurrentSlide()+1);
    });
  }
});
