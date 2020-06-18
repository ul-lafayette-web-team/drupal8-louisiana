export default function UllHeader() {
  
  var $mobileSearchTrigger = $('.ull-header--mobile .ull-header__button--search');
  var $mobileMenuTrigger = $('.ull-header__button--menu');
  var $desktopSearchTrigger = $('.ull-header__utility .ull-header__button--search');

  // mobile triggers for search and for the main menu
  
  $mobileMenuTrigger.click(event => {
    $(event.target)
      .parents('body').toggleClass('mobile-menu-open').removeClass('mobile-search-open');
  });
  $mobileSearchTrigger.click(event => {
    $(event.target)
      .parents('body').toggleClass('mobile-search-open').removeClass('mobile-menu-open');
  });
  $desktopSearchTrigger.click(event => {
    $(event.target)
      .parents('body').toggleClass('mobile-search-open').removeClass('mobile-menu-open');
  });
  
  // main navigation dropdowns  
  var $ullNavTrigger = $('.ull-header__main-nav > ul.menu > li > a');
  $ullNavTrigger.click(event => {
    if ($(window).width() <= 1023) {  
    event.preventDefault()
    $(event.target)
      .toggleClass('engaged')
      .siblings('.ull-header__mega-menu').slideToggle();
    }
  });
  
  // close button in desktop search panel  
  $('.ull-header-search__close').click(event => {
    $(event.target) 
      .parents('body').removeClass('mobile-search-open');
  });

  // mega-menus need invisible buttons in order to open them with a keyboard
  $('.ull-header__mega-menu').each((index, element)=> {
    var $this = $(element);
    var $parentText = $this.siblings('a').text();
    $('<button class="mega-menu--trigger" type="button"><span>Open</span> the ' + $parentText + ' menu</button>').insertBefore( $this );
    $this.find('.ull-header-mega-menu__row').after('<button class="mega-menu--trigger" type="button"><span>Close</span> the ' + $parentText + ' menu</button>');
  });
  $('.mega-menu--trigger').click(event => {
    $(event.target) 
      .parents('ul.menu > li').toggleClass('mega-menu-open');
  });
}

