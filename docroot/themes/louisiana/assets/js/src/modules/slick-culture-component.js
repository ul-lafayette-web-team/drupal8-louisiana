export default function SlickCultureComponent() {
  $('.culture-component__slick').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true, 
    arrows: false,
    adaptiveHeight: true,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          dots:false
        }
      }
    ]
  });  
  $('.culture-component__button:first-child').addClass('engaged');
  // On click of slider-nav children,
  // Slick slider navigate to the respective index.
  $('.culture-component__button').click(function() {
    $(this).siblings('.culture-component__button.engaged').removeClass('engaged');
    $(this).addClass('engaged')
  	$('.culture-component__slick').slick('slickGoTo',$(this).index());
  })
}