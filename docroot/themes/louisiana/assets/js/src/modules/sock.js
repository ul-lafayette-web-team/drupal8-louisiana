export default function sockDrawing() {

  
  $(window).on('resize scroll', function () {
    
    var windowHeight = $(window).height();
    
    $('.cls-1').each(function (){
    
      var thisTop = $(this).offset().top - $(window).scrollTop();
      
      if (thisTop < windowHeight) {
          $(this).addClass('draw');
      }
    });
    $('.cls-2').each(function (){
    
      var thisTop = $(this).offset().top - $(window).scrollTop();
      
      if (thisTop < windowHeight) {
          $(this).addClass('draw');
      }
    });      
  });

}