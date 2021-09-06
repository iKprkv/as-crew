$(document).ready(function(){
  //reviews
  var reviews = $('.carousel#reviews-list');
  if (reviews) {
    reviews.on('init', function(event, slick){
      console.log('reviews init')
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
