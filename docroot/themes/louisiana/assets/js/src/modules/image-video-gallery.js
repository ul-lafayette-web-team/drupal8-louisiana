export default function ImageVideoGallery() {

  // slick
  if ( !$('.section--image-video-grid').hasClass('slick-initialized') && $(window).width() < 750 ) 
  {
    imageVideoGallerySlick( $('.section--image-video-grid') );
  }

  $(window).resize(function() {
    if ( !$('.section--image-video-grid').hasClass('slick-initialized') && $(window).width() < 750 ) 
    {
      imageVideoGallerySlick( $('.section--image-video-grid') );
    }
  });

  function imageVideoGallerySlick(element) {
    
    element.slick({
      arrows: false,
      centerMode: false,
      dots: false,
      infinite: false,
      slidesToShow: 1,
      slidesToScroll: 1,    
      adaptiveHeight: true,
      variableWidth: true,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: 750,
          settings: 'unslick'
        }
      ]
    });
  }
  
  // fancybox
  
  imageVideoGalleryFancy( $('[data-fancybox="image-video-gallery"]') );
  
  function imageVideoGalleryFancy(element) {
    element.fancybox({
      infobar : false,
      buttons : false,
      arrows: false,
      smallBtn: false,
      touch: false, 
      afterLoad : function( instance, current ) {
        if ( instance.group.length > 1 && current.$content ) {
        current.$content.append('<a data-fancybox-prev class="slick-arrow slick--previous" href="javascript:;"><span class="show-for-sr">Previous slide</span><i class="fas fa-chevron-left"></i></a><a data-fancybox-next class="slick-arrow slick--next" href="javascript:;"><span class="show-for-sr">Next slide</span><i class="fas fa-chevron-right"></i></a>');          
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
}