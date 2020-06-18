export default function SlickEventFeature() {

  if ( !$('.livewhale--event-set').hasClass('slick-initialized') && $(window).width() < 768 ) 
  {
    eventFeatureSlick( $('.livewhale--event-set') );
  }

  $(window).resize(function() {
    if ( !$('.livewhale--event-set').hasClass('slick-initialized') && $(window).width() < 768 ) 
    {
      eventFeatureSlick( $('.livewhale--event-set') );
    }
  });

  function eventFeatureSlick(element) {
    
    element.slick({
      arrows: true,
      dots: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,  
      nextArrow: '<button type="button" class="next slick--next"><span class="show-for-sr">Next Event</span><i class="far fa-arrow-right"></i></button>',
      prevArrow: '<button type="button" class="prev slick--previous slick--prev"><span class="show-for-sr">Previous Event</span><i class="far fa-arrow-left"></i></button>',    
      adaptiveHeight: true,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 768,
          settings: 'unslick'
        }
      ]
    });
  }
}