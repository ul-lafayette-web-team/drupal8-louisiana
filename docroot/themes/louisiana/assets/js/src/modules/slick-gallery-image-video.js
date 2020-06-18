export default function SlickGalleryImageVideo() {
  
    // slick
    $('.gallery-image-video__slick').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    nextArrow: '<button type="button" class="next slick--next"><span class="show-for-sr">Next Event</span><i class="far fa-arrow-right"></i></button>',
    prevArrow: '<button type="button" class="prev slick--previous slick--prev"><span class="show-for-sr">Previous Event</span><i class="far fa-arrow-left"></i></button>',    
    adaptiveHeight: true,
    variableWidth: true,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          adaptiveHeight: false
        }
      }
    ]
  }); 
  
  // fancybox
  
/*
  galleryImageVideoFancy( $('[data-fancybox="gallery-image-video"]') );
  
  function galleryImageVideoFancy(element) {
    element.fancybox({
      infobar : false,
      buttons : false,
      arrows: false,
      smallBtn: false,
      touch: false, 
      afterLoad : function( instance, current ) {
        if ( instance.group.length > 1 && current.$content ) {
        current.$content.append('<a data-fancybox-prev class="fancy-arrow fancy--previous" href="javascript:;"><span class="show-for-sr">Previous slide</span><i class="fas fa-chevron-left"></i></a><a data-fancybox-next class="fancy-arrow fancy--next" href="javascript:;"><span class="show-for-sr">Next slide</span><i class="fas fa-chevron-right"></i></a>');          
        }
        current.$content.after('<button type="button" data-fancybox-close class="button-close" href="javascript:;"><span class="show-for-sr">Close the current slide</span><i class="fal fa-times"></i></button>');
      },
      afterClose : function( instance, current ) {
        $('.button-previous').remove();
        $('.button-next').remove();
        $('.button-close').remove();
      }           
    })
  };
*/
    
}