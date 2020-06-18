export default function SlickProfileContact() {

  if ( !$('.profile-contact__slick').hasClass('slick-initialized') && $(window).width() < 768 ) 
  {
    profileContactSlick( $('.profile-contact__slick') );
  }

  $(window).resize(function() {
    if ( !$('.profile-contact__slick').hasClass('slick-initialized') && $(window).width() < 768 ) 
    {
      profileContactSlick( $('.profile-contact__slick') );
    }
  });

  function profileContactSlick(element) {
    
    element.slick({
      arrows: true,
      dots: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,  
      nextArrow: '<button type="button" class="next slick--next"><span class="show-for-sr">Next Person</span><i class="far fa-arrow-right"></i></button>',
      prevArrow: '<button type="button" class="prev slick--previous slick--prev"><span class="show-for-sr">Previous Person</span><i class="far fa-arrow-left"></i></button>',    
      adaptiveHeight: true,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 660,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 768,
          settings: 'unslick'
        }
      ]
    });
  } 
}