(function ($, Drupal) {
  'use strict';
  // //////////////////////////////////////////////////////////////////////////////
  // [ DROPDOWN LANGUAGE MENU MOBILE ]
  $(() => {
    if (window.matchMedia('(max-width: 768px)').matches) {
      $('#language-selector').addClass('dropup');
    }
    else {
      $('#language-selector').removeClass('dropup');
    }
  });

  // //////////////////////////////////////////////////////////////////////////////
  // [ DESKTOP MENU - SEARCH TOGGLE ]
  $('#menu-main').on('click', '.form-actions', function (e) {
    $('#menu-main')
      .toggleClass('show-search')
      .find('.form-search')
      .focus();
    $(this).toggleClass('active');
    e.preventDefault();
  });

  // //////////////////////////////////////////////////////////////////////////////
  // [ ANCHOR OFFSET ]
  $(() => {
    const target = window.location.hash;
    // only try to scroll to offset if target has been set in location hash

    if (target !== '') {
      const $target = jQuery(target);
      jQuery('html, body')
        .stop()
        .animate(
        {
          scrollTop: $target.offset().top - 150
        }, // set offset value here i.e. 50
          100,
          'swing',
          () => {
            window.location.hash = target - 80;
          }
        );
    }
  });

  // //////////////////////////////////////////////////////////////////////////////
  // [ MOBILE NAV - SMOOTH OPENING/CLOSING SUBMENU ]
  if (window.matchMedia('(max-width: 768px)').matches) {
    let open = $('#menu-main .dropdown-toggle');
    let a = $('#menu-main .nav').find('.dropdown-toggle');

    open.click(function (e) {
      e.preventDefault();
      let $this = $(this);
      let speed = 250;
      if ($this.hasClass('active-menu') === true) {
        $this
          .removeClass('active-menu')
          .next('.dropdown-menu')
          .slideUp(speed);
      }
      else if (a.hasClass('active-menu') === false) {
        $this
          .addClass('active-menu')
          .next('.dropdown-menu')
          .slideDown(speed);
      }
      else {
        a.removeClass('active-menu')
          .next('.dropdown-menu')
          .slideUp(speed);
        $this
          .addClass('active-menu')
          .next('.dropdown-menu')
          .delay(speed)
          .slideDown(speed);
      }
    });
  }
  // //////////////////////////////////////////////////////////////////////////////
  // [ BOOTSTRAP COMPONENTS ]

  // [ TOOLTIP ]
  $(() => {
    $('[data-toggle="tooltip"]').tooltip({
      delay: {
        show: 100,
        hide: 250
      }
    });
  });

  // [ POPOVERS ]
  $(() => {
    $('[data-toggle="popover"]').popover();
  });

  // [ CAROUSEL ]
  $(() => {
    $('.carousel').carousel({
      interval: 2000
    });
  });

  // [ MODAL ]
  $(() => {
    $('#bs-modal').on('shown.bs.modal', () => {
      $('#bs-modal-button').trigger('focus');
    });
  });
  // //////////////////////////////////////////////////////////////////////////////
  // [ SUBMIT WITH ENTER KEYSTROKE ]
  $(() => {
    $('.form-search').keydown(function (event) {
      // enter has keyCode = 13, change it if you want to use another button
      if (event.keyCode === 13) {
        this.form.submit();
        return false;
      }
    });
  });

  // //////////////////////////////////////////////////////////////////////////////
  // [ HIDE / SHOW IMAGE LOGO ON SCROOL ]
  $(() => {
    const logo = $('#header-menu .navbar-brand');
    $(window).scroll(() => {
      const scroll = $(window).scrollTop();

      if (scroll >= 85) {
        if (!logo.hasClass('show-logo')) {
          logo.removeClass('hide-logo').addClass('show-logo');
        }
      }
      else if (!logo.hasClass('hide-logo')) {
        logo.removeClass('show-logo').addClass('hide-logo');
      }
    });
  });


  (function($) {

    'use strict';
  
    // bootstrap dropdown hover
  
    // loader
    var loader = function() {
      setTimeout(function() { 
        if($('#loader').length > 0) {
          $('#loader').removeClass('show');
        }
      }, 1);
    };
    loader();
  
    // Stellar
    $(window).stellar();
  
    
    $('nav .dropdown').hover(function(){
      var $this = $(this);
      $this.addClass('show');
      $this.find('> a').attr('aria-expanded', true);
      $this.find('.dropdown-menu').addClass('show');
    }, function(){
      var $this = $(this);
        $this.removeClass('show');
        $this.find('> a').attr('aria-expanded', false);
        $this.find('.dropdown-menu').removeClass('show');
    });
  
  
    $('#dropdown04').on('show.bs.dropdown', function () {
      console.log('show');
    });
  
  
  
    // home slider
    $('.home-slider').owlCarousel({
      loop:true,
      autoplay: true,
      margin:10,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav:true,
      autoplayHoverPause: true,
      items: 1,
      navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
      responsive:{
        0:{
          items:1,
          nav:false
        },
        600:{
          items:1,
          nav:false
        },
        1000:{
          items:1,
          nav:true
        }
      }
    });
  
    // owl carousel
    var majorCarousel = $('.js-carousel-1');
    majorCarousel.owlCarousel({
      loop:true,
      autoplay: false,
      stagePadding: 0,
      margin: 10,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav: false,
      dots: false,
      autoplayHoverPause: false,
      items: 3,
      responsive:{
        0:{
          items:1,
          nav:false
        },
        600:{
          items:2,
          nav:false
        },
        1000:{
          items:3,
          nav:true,
          loop:false
        }
      }
    });
  
    // cusotm owl navigation events
    $('.custom-next').click(function(event){
      event.preventDefault();
      // majorCarousel.trigger('owl.next');
      majorCarousel.trigger('next.owl.carousel');
  
    })
    $('.custom-prev').click(function(event){
      event.preventDefault();
      // majorCarousel.trigger('owl.prev');
      majorCarousel.trigger('prev.owl.carousel');
    })
  
    // owl carousel
    var major2Carousel = $('.js-carousel-2');
    major2Carousel.owlCarousel({
      loop:true,
      autoplay: true,
      stagePadding: 7,
      margin: 20,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav: false,
      autoplayHoverPause: true,
      items: 4,
      navText : ["<span class='ion-chevron-left'></span>","<span class='ion-chevron-right'></span>"],
      responsive:{
        0:{
          items:1,
          nav:false
        },
        600:{
          items:3,
          nav:false
        },
        1000:{
          items:4,
          nav:true,
          loop:false
        }
      }
    });
  
  
   
  
    var contentWayPoint = function() {
      var i = 0;
      $('.element-animate').waypoint( function( direction ) {
  
        if( direction === 'down' && !$(this.element).hasClass('element-animated') ) {
          
          i++;
  
          $(this.element).addClass('item-animate');
          setTimeout(function(){
  
            $('body .element-animate.item-animate').each(function(k){
              var el = $(this);
              setTimeout( function () {
                var effect = el.data('animate-effect');
                if ( effect === 'fadeIn') {
                  el.addClass('fadeIn element-animated');
                } else if ( effect === 'fadeInLeft') {
                  el.addClass('fadeInLeft element-animated');
                } else if ( effect === 'fadeInRight') {
                  el.addClass('fadeInRight element-animated');
                } else {
                  el.addClass('fadeInUp element-animated');
                }
                el.removeClass('item-animate');
              },  k * 100);
            });
            
          }, 100);
          
        }
  
      } , { offset: '95%' } );
    };
    contentWayPoint();
  
  
  
  })(jQuery);
})(jQuery, Drupal);
