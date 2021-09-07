$(document).ready(function(){
  // team
  if (window.innerWidth <= 900) {
    var team = $('#team');
    team.slick({
      dots: false,
      arrows: false,
      infinite: false,
      slidesToShow: 2,
      slidesToScroll: 1,
      variableWidth: true,
      responsive: [
      {
        breakpoint: 450,
        settings: {
          centerMode: false,
          slidesToShow: 1
        }
      }
    ]
  })
  }
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
    adaptiveHeight: true,
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
      $('<div class="reviews-counter t-14 c-6c6c6c animationWait slide-in-right"><span class="current c-c91559">'+((slick.slickCurrentSlide()+1)<10 ? '0'+(slick.slickCurrentSlide()+1):slick.slickCurrentSlide()+1)+'</span>  |  <span class="">'+ (slick.slideCount<10 ? '0'+slick.slideCount : slick.slideCount)+'</div>').insertBefore(this);
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
