export default function SlickFourUp() {
  
  fourUpSlick( $('.profile-summary__slick') );
  
  fourUpSlick( $('.organization__slick') );
    
  function fourUpSlick(element) {
    element.slick({
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
          breakpoint: 660,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 940,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 1160,
          settings: {
            slidesToShow: 4,
          }
        }
      ]      
    });
  }
  
}