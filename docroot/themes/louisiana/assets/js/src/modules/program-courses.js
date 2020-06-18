export default function programCourses() {
  
  // tabs down the side 
  
  $('.courses__tab').click(function(event){
    event.preventDefault();
    $(this).toggleClass('engaged');
    
    
    // Clicked element
    var $this = $(this);
    
    // Current picker
    var $picker = $this.parents('.courses__tabs-set');
    
    // Index number, add one for zero index 
    var tabCount = $(this).index() + 1;
    
    // Current active tab
  //  var $current = $picker.find('[aria-hidden="false"]');
    
    // Tab to be activated
    var $toActivate = $picker.find('.courses__year:nth-of-type(' + tabCount + ')'); 
   
    // Remove the active aria states
    $picker.find('.courses__tab[aria-selected="true"]').attr('aria-selected', 'false');
    $picker.find('.courses__year[aria-hidden="false"]').attr('aria-hidden', 'true');
    
    
    // Add the active aria states
    $this.attr('aria-selected', 'true');
    $toActivate.attr('aria-hidden', 'false');
           
  })  

  // accordion version of top tabs

  $('.courses__btn').click(function(){
    $(this).next('.courses__feature').slideToggle();
    $(this).toggleClass('engaged');
  });  

  // run test on initial page load
  checkSize();

  // run test on resize of the window
  $(window).resize(checkSize);
  
  function checkSize(){
    if ($(window).width() <= 1024){

    }
    else {
      $('.courses__feature').css('display', '');
    }
  }   
}