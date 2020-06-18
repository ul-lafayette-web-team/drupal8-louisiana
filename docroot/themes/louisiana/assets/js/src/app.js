/**
 * @file
 * JavaScript entrypoint file for the theme.
 *
 * All JavaScript added to the theme must go through this Webpack entrypoint.
 * Modules are included with import statements. Remove unused modules.
 * Import any module-specific CSS as well, and Webpack will bundle it in
 * /assets/dist/app.css. Module CSS paths are relative to the node_modules
 * folder, i.e. '@glidejs/glide/dist/css/glide.core.css' for Glide's CSS.
 */

import 'core-js/stable';
import 'regenerator-runtime/runtime';
import './compat/ie11';
import AccessibleMenu from './modules/accessible-menu';
import Accordion from './modules/accordion';
import {
  AnimateCount,
  AnimateSingle,
  AnimateSequence,
} from './modules/animation';
import ButtonToggle from './modules/button-toggle';
import '@fancyapps/fancybox';
import '@fancyapps/fancybox/dist/jquery.fancybox.css';
import JumpLink from './modules/jump-link';
import JumpNav from './modules/jump-nav';
import MoreOrLess from './modules/more-or-less';
import SidebarMenu from './modules/sidebar-menu';
import SlidingToggle from './modules/sliding-toggle';
import SmoothScroll from './modules/smooth-scroll';
import StickyHeader from './modules/sticky-header';
import Tab from './modules/tab';
import Table from './modules/table';
import UllHeader from './modules/ull-header';
import sockDrawing from './modules/sock';
import liveWhaleEvent from './modules/live-whale-event';
import allEventLinkMove from './modules/all-events-move';
import SlickCultureComponent from './modules/slick-culture-component';
import SlickEventFeature from './modules/slick-event-feature';
import SlickEventDisplay from './modules/slick-event-display';
import SlickFourUp from './modules/slick-four-up';
import ImageVideoGallery from './modules/image-video-gallery';
import SlickProfileContact from './modules/slick-profile-contact';
import SlickGalleryImageVideo from './modules/slick-gallery-image-video';
import tuitionFees from './modules/tuition-fees';
import questionSet from './modules/question-set';
import processFlow from './modules/process-flow';
import alumniCheck from './modules/program-career-feature';
import programCourses from './modules/program-courses';

(() => {
  /**
   * Main site navigation
   */  
  UllHeader();

  /**
   * Process Flow
   */  
  processFlow();

  /**
   * Sock drawing animation
   */  
  sockDrawing();

  /**
   * Program Courses Area
   */  
  programCourses();    
    
  /**
   * Tuition-Fees buttons
   */  
  tuitionFees();
    
  /**
   * Slick for the Multiple Components : Profile Summary, 
   */  
  SlickFourUp();
  
  /**
   * Slick for the Culture Component
   */  
  SlickCultureComponent();

  /**
   * Slick & Fancybox for the Image Video Gallery 
   */  
  ImageVideoGallery();
  
  /**
   * Slick for the Image Video Gallery 
   */  
  SlickProfileContact();  
  
  /**
   * Slick for the Live Whale Event Feature
   */  
  SlickEventFeature();

  /**
   * Slick for the Live Whale Event Display
   */  
  SlickEventDisplay();
  
  /**
   * Slick & Fancybox for the Gallery for Images and Videos
   */  
  SlickGalleryImageVideo(); 
  
  /**
   * Question set Select
   */  
  questionSet();  

  /**
   * Program Career Feature - does it feature an alumni?
   */  
  alumniCheck();  

  /**
   * split the date brought in by LiveWhale
   * duplicate the all events link for mobile
   */  
  liveWhaleEvent();
  allEventLinkMove();
  
  /**
   * Add the sticky header.
   */
  const stickyHeader = new StickyHeader('.site-header', '.ull-header__main', 1024);
  stickyHeader.run();

  /**
   * Add the accessible menu.
   */
  const accessibleMenu = new AccessibleMenu();
  const accessibleMenuElements = document.querySelectorAll(
    '#main-menu, #audience-menu',
  );
  accessibleMenu.add(accessibleMenuElements).run();

  /**
   * Mobile menu behavior.
   */
  const mobileToggle = new ButtonToggle();
  const mobileMenuButton = document.querySelectorAll('.mobile-menu-button');
  mobileToggle.add(mobileMenuButton).run();

  /**
   * Search panel behavior.
   */
  const searchToggle = new ButtonToggle();
  const searchButton = document.querySelectorAll('.site-search__toggle');
  searchToggle.add(searchButton).run();
  searchToggle.on('toggle', click => {
    if (click.clicked) {
      click.event.target.nextElementSibling.querySelector('input').focus();
    }
  });

  /**
   * Add the sidebar menu behavior.
   */
  const sidebarMenu = new SidebarMenu();
  const sidebarMenuElement = document.querySelectorAll('.sidebar-menu');
  sidebarMenu.add(sidebarMenuElement).run();

  /**
   * Create standard accordions.
   */
  const accordion = new Accordion();
  const accordionElements = document.querySelectorAll('.accordion');
  accordion.add(accordionElements).run();


  /**
   * Create jump link scrolling.
   */
  const jumpLinks = new JumpLink();
  const jumpLinkElements = document.querySelectorAll(
    '[href^="#"]:not([href="#"]):not([data-fancybox])',
  );
  jumpLinks.add(jumpLinkElements).run();

  /**
   * Create the jump nav.
   */
  new JumpNav().create('.jump-nav');

  /**
   * Add standard animations.
   */
  const singleAnimation = new AnimateSingle();
  const singleAnimationElements = document.querySelectorAll(
    '.oho-animate-single',
  );
  singleAnimation.add(singleAnimationElements).run();
  const sequenceAnimation = new AnimateSequence();
  const sequenceAnimationElements = document.querySelectorAll(
    '.oho-animate-sequence',
  );
  sequenceAnimation.add(sequenceAnimationElements).run();
  const countAnimation = new AnimateCount();
  const countAnimationElements = document.querySelectorAll(
    '.oho-animate-count',
  );
  countAnimation.add(countAnimationElements).run();

  /**
   * Create standard more or less.
   */
  const moreOrLess = new MoreOrLess();
  const moreOrLessElements = document.querySelectorAll('.more-less');
  moreOrLess.add(moreOrLessElements).run();

  /**
   * Create standard sliding toggles.
   */
  const slidingToggle = new SlidingToggle();
  const slidingToggleElements = document.querySelectorAll('.slide-toggle');
  slidingToggle.add(slidingToggleElements).run();

  /**
   * Create standard tabs.
   */
  const tabs = new Tab();
  const tabElements = document.querySelectorAll('.tabs');
  tabs.add(tabElements).run();

  /**
   * Wrap tables for responsive styles.
   */
  const tables = new Table();
  const tableElements = document.querySelectorAll('#main-content table');
  tables.add(tableElements).run();

  /**
   * Smooth scrolling demo page.
   */
  const smoothScroll = new SmoothScroll();
  const scrollButtons = document.querySelectorAll(
    '[data-smooth-scroll-button]',
  );
  scrollButtons.forEach(button => {
    const target = button.getAttribute('data-smooth-scroll-button');
    const element = document.querySelector(
      `[data-smooth-scroll-target="${target}"]`,
    );
    button.addEventListener('click', () => smoothScroll.scrollTo(element));
  });

  /**
   * Add a class to the body to style against if this JavaScript did not load
   * correctly or has an error which blocks JavaScript execution.
   */
  document.querySelector('html').classList.add('oho-js');
})();
