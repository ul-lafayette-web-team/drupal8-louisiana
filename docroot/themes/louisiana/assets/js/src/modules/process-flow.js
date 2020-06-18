export default function processFlow() {
  
  // tabs across the top
  
  $('.flow__tab').click(function(event){
    event.preventDefault();
    $(this).toggleClass('engaged');
    
    
    // Clicked element
    var $this = $(this);
    
    // Current picker
    var $picker = $this.parents('.section--process-flow');
    
    // Index number, add one for zero index 
    var tabCount = $(this).index() + 1;
    
    // Current active tab
  //  var $current = $picker.find('[aria-hidden="false"]');
    
    // Tab to be activated
    var $toActivate = $picker.find('.flow__step:nth-of-type(' + tabCount + ')'); 
   
    // Remove the active aria states
    $picker.find('.flow__tab[aria-selected="true"]').attr('aria-selected', 'false');
    $picker.find('.flow__step[aria-hidden="false"]').attr('aria-hidden', 'true');
    
    
    // Add the active aria states
    $this.attr('aria-selected', 'true');
    $toActivate.attr('aria-hidden', 'false');
           
  })
  
  // accordion version of top tabs

  $('.flow-step__title').click(function(){
    $(this).next('.flow-step__content').slideToggle();
    $(this).toggleClass('engaged');
  });
  
  // click a next button and go to the next tab      
  
  $('.flow-step__next a.btn').click(function(event){
    event.preventDefault();
    var panelCount = $(this).parents('.flow__step').index();
    $(this).parents('.section--process-flow').find('.flow__tab').eq( panelCount ).click();
    $('html, body').animate({
      scrollTop: $(this).parents('.section--process-flow').offset().top - 220
    }, 1000);      
  });

  // run test on initial page load
  checkSize();

  // run test on resize of the window
  $(window).resize(checkSize);
  
  function checkSize(){
    if ($(window).width() <= 1024){

    }
    else {
      $('.flow-step__content').css('display', '');
    }
  }  

  // when you arrive via a url with a tab hash

  if ( $('.section--process-flow').length ) {

    var hash = location.hash;
    
    if ( hash.length ) {
      var hashSelector = 'a[href*="' + hash + '"]';
      var $searchArea = $('.flow__tabs');
      $searchArea.find( hashSelector ).trigger('click');
      
      // finds the right accordion element - in case we need it
      var $tabsArea = $('.flow__steps');
      var $selectedAccordion = $tabsArea.find('div' + hash );
      
      if ( $(window).width() < 1024 ) {
        // finds the right accordion and opens it
        $selectedAccordion.find('.flow-step__title').addClass('engaged');
        $selectedAccordion.find('.flow-step__content').slideToggle();
        
      } else {
        // scrolls so we can see the tabs
        $('html, body').animate({
          scrollTop: $searchArea.offset().top - 100
        }, 1000);   
                 
      }
    }
    
  }     
  
  // click a next button and go to the next tab
  
   $('.flow-step__next a.btn').click(function(event){
    event.preventDefault();
    var panelCount = $(this).parents('.flow__step').index() + 1;
    console.log(panelCount);
    $(this).parents('.section--process-flow').find('.flow__tab').eq( panelCount ).click();
    $('html, body').animate({
      scrollTop: $(this).parents('.section--process-flow').offset().top - 220
    }, 1000);      
  }); 
}