import '../sass/style.scss';

jQuery(document).ready(function () {
  'use strict';

  /* =================================
	LOADER 
	=================================== */
  jQuery('.loader').delay(400).fadeOut();
  jQuery('.animationload').delay(400).fadeOut('fast');

  var bgi = jQuery('[data-background]');
  bgi.length > 0 &&
    bgi.each(function () {
      var e = jQuery(this),
        t = e.attr('data-background');
      e.css({ 'background-image': 'url(' + t + ')' });
    });

  var progressBar = jQuery('.progress-bar');
  progressBar.length > 0 &&
    progressBar.each(function () {
      var e = jQuery(this),
        t = e.attr('aria-valuenow');
      e.css({ width: t + '%' });
    });

  /* =================================
	SCROLL TO
	=================================== */
  jQuery('a[href^="#"]').on('click', function (event) {
    var target = jQuery(this.getAttribute('href'));

    if (target.length) {
      event.preventDefault();
      jQuery('html, body').stop().animate(
        {
          scrollTop: target.offset().top,
        },
        1000
      );
    }
  });

  /* =================================
	NAVBAR 
	=================================== */
  var top = jQuery(document).scrollTop();
  var batas = 200;
  var navbar = jQuery('.navbar-main');
  var navbarnav = jQuery('.navbar-nav');
  var header = jQuery('.header');
  var logo = jQuery('.navbar-brand');

  if (top > batas) {
    navbar.addClass('stiky');
    // navbarnav.addClass('ml-auto');
  }
  jQuery(window).scroll(function () {
    top = jQuery(document).scrollTop();

    if (top > batas) {
      navbar.addClass('stiky');
      logo.find('img').attr('src', 'images/logo-dark.png');
    } else {
      logo.find('img').attr('src', 'images/logo-light.png');
      navbar.removeClass('stiky');
    }
  });

  /* =================================
	BANNER ROTATOR IMAGE 
	=================================== */
  var slides = jQuery('.full-screen'),
    b = slides.find('.item');
  b.each(function () {
    var e = jQuery(this),
      ocImg = e.find('img').attr('src');
    e.css({ 'background-image': 'url(' + ocImg + ')' });
  });

  slides.owlCarousel({
    // stagePadding: 50,
    loop: true,
    // margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    nav: true,
    dots: false,
    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    navContainer: '.banner .custom-nav',
    items: 1,
  });

  /* =================================
	BACK TO TOP 
	=================================== */
  // browser window scroll (in pixels) after which the "back to top" link is shown
  var offset = 300,
    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
    offset_opacity = 1200,
    //duration of the top scrolling animation (in ms)
    scroll_top_duration = 700,
    //grab the "back to top" link
    jQueryback_to_top = jQuery('.cd-top');

  //hide or show the "back to top" link
  jQuery(window).scroll(function () {
    jQuery(this).scrollTop() > offset ? jQueryback_to_top.addClass('cd-is-visible') : jQueryback_to_top.removeClass('cd-is-visible cd-fade-out');
    if (jQuery(this).scrollTop() > offset_opacity) {
      jQueryback_to_top.addClass('cd-fade-out');
    }
  });

  //smooth scroll to top
  jQueryback_to_top.on('click', function (event) {
    event.preventDefault();
    jQuery('body,html').animate(
      {
        scrollTop: 0,
      },
      scroll_top_duration
    );
  });

  var carousel_2 = jQuery('.testimonial-caro');
  carousel_2.owlCarousel({
    margin: 30,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    items: 3,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  var testimony = jQuery('#testimonial');
  testimony.owlCarousel({
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    items: 1,
    dots: true,
    loop: true,
  });

  var testimony2 = jQuery('#testimonial-2');
  testimony2.owlCarousel({
    autoplay: true,
    margin: 50,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    items: 2,
    dots: true,
    loop: true,
  });

  var carousel_3 = jQuery('#carousel3');
  carousel_3.owlCarousel({
    autoplay: true,
    margin: 30,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    dots: true,
    loop: true,
    nav: false,
    items: 3,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 3,
      },
      1000: {
        items: 3,
      },
    },
  });

  var carousel_services = jQuery('#carousel-services');
  carousel_services.owlCarousel({
    autoplay: true,
    margin: 10,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    dots: true,
    loop: true,
    nav: false,
    items: 4,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });

  var carousel_project = jQuery('#carousel-project');
  carousel_project.owlCarousel({
    autoplay: true,
    margin: 10,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    dots: true,
    loop: true,
    nav: false,
    items: 4,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });

  var carousel_project2 = jQuery('#carousel-project-2');
  carousel_project2.owlCarousel({
    autoplay: true,
    margin: 10,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    dots: true,
    loop: true,
    nav: false,
    items: 3,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  var carousel_partners = jQuery('#carousel_partners');
  carousel_partners.owlCarousel({
    autoplay: true,
    margin: 10,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    dots: false,
    loop: true,
    nav: false,
    items: 4,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });

  /* =================================
	MAGNIFIC POPUP
	=================================== */
  jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false,
  });

  jQuery('.grid, .popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1],
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function (item) {
        return item.el.attr('title') + '';
      },
    },
  });

  /* =================================
	ISOTOP
	=================================== */

  var jQuerygrid = jQuery('.grid').isotope({
    itemSelector: '.grid-item',
    isFitWidth: true,
    masonry: {
      columnWidth: '.grid-sizer',
    },
  });

  jQuerygrid.imagesLoaded().progress(function () {
    jQuerygrid.isotope('layout');
  });

  jQuery('#filter2 a').on('click', function () {
    jQuery('#filter2 .active').removeClass('active');
    jQuery(this).addClass('active');

    var selector = jQuery(this).attr('data-filter');
    jQuerygrid.isotope({
      filter: selector,
      animationOptions: {
        duration: 500,
        animationEngine: 'jquery',
      },
    });
    return false;
  });

  var jQuerygridv2 = jQuery('.grid-v1');
  jQuerygridv2.isotope({
    itemSelector: '.grid-item-v1',
    isFitWidth: true,
    filter: '*',
    masonry: {
      columnWidth: '.grid-sizer-v1',
    },
  });

  jQuerygridv2.imagesLoaded().progress(function () {
    jQuerygridv2.isotope('layout');
  });

  jQuery('.portfolio_filter a').on('click', function () {
    jQuery('.portfolio_filter .active').removeClass('active');
    jQuery(this).addClass('active');

    var selector = jQuery(this).attr('data-filter');
    jQuerygridv2.isotope({
      filter: selector,
      animationOptions: {
        duration: 500,
        animationEngine: 'jquery',
      },
    });
    return false;
  });
});
