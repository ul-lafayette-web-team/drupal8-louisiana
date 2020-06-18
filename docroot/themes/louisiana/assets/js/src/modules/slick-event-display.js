export default function SlickEventDisplay() {
  
  $('.upcoming-events__slick').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    nextArrow: '<button type="button" class="next slick--next"><span class="show-for-sr">Next Event</span><i class="far fa-arrow-right"></i></button>',
    prevArrow: '<button type="button" class="prev slick--previous slick--prev"><span class="show-for-sr">Previous Event</span><i class="far fa-arrow-left"></i></button>',    
    adaptiveHeight: true,
    variableWidth: false,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 1160,
        settings: {
          slidesToShow: 3,
        }
      }
    ]
  }); 
  
}