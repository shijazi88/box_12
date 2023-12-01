(function() {

  'use strict';

  // preloader
  $(window).on('load', function() {
    $('.loader').fadeOut('slow');
  });

  // smooth scroll
  $("a").on("click", function(event) {

      if (this.hash !== "") {
          event.preventDefault();

          var hash = this.hash;

          $("html, body").animate({

              scrollTop: $(hash).offset().top - 50

          }, 850);

      }

  });

  // magnific popup
  $('.gallery').each(function() { // the containers for all your galleries
      $(this).magnificPopup({
          delegate: '.popup-image', // the selector for portfolio item
          type: 'image',
          gallery: {
              enabled: true
          },
      });
  });

  // swiper slider
  $(document).ready(function () {
    // var swiper = new Swiper(".mySwiper", {
    //   slidesPerView: 3,
    //   spaceBetween: 30,
    //   pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    //   },
    //   navigation: {
    //     nextEl: ".next-slide",
    //     prevEl: ".prev-slide"
    //   },
    //   breakpoints: {
    //     0: {
    //       slidesPerView: 1,
    //     },
    //     768: {
    //       slidesPerView: 1,
    //     },
    //     780: {
    //       slidesPerView: 3,
    //     }
    //   }
    // });

    // var aboux_box12 = new Swiper(".about-box12-slider", {      
    //   slidesPerView: 2,
    //   spaceBetween:10,      
    //   effect: 'fade',
    //   fadeEffect: {
    //     crossFade: true,
    //   },
    //   pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    //   },
    //   navigation: {                           
    //     nextEl: ".swiper-button-next",      
    //     prevEl: ".swiper-button-prev",      
    //   }, 
    //   breakpoints: {
    //     1200:{
    //         slidesPerView : 2
    //     },

    //     992:{
    //         slidesPerView : 2
    //     },

    //     768:{
    //         slidesPerView : 2

    //     },

    //     576:{
    //         slidesPerView : 1
    //     },

    //     0:{
    //         slidesPerView : 1
    //     }
    //   }
    // });
    
    // // box12 experience slider
    // var swiper = new Swiper(".box12_expe_swiper", {
    //   slidesPerView: 3,
    //   spaceBetween: 10,
    //   slidesPerGroup: 3,
    //   loop: true,
    //   autoplay:{
    //     delay: 5000,
    //   },
    //   pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    //   },
    //   navigation: {
    //     nextEl: ".next-slide",
    //     prevEl: ".prev-slide"
    //   },
    //   breakpoints: {
    //     0: {
    //       slidesPerView: 1,
    //     },
    //     768: {
    //       slidesPerView: 1,
    //     },
    //     780: {
    //       slidesPerView: 3,
    //     }
    //   }
    // });
  });

  // hide navbar on click
  $('.navbar-nav>li>a').on('click', function(){
      $('.navbar-collapse').collapse('hide');
  });

  // navbar on scroll
  $(window).on("scroll", function() {

      var onScroll = $(this).scrollTop();

      if( onScroll > 50) {
          $(".navbar").addClass("navbar-fixed");
      }
      else {
          $(".navbar").removeClass("navbar-fixed");
      }

  });

  // Scroll Top Hide Show
  var varWindow = $(window);
  varWindow.on('scroll', function(){    
    if ($(this).scrollTop() > 250) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
    $('.flexslider').flexslider({
      animation: "slide",
      animationLoop: true,
      itemWidth: 300, // Set the width of each item
      itemMargin: 10, // Set the space between each item
      minItems: 3, // Set the minimum number of items to display
      maxItems: 3, // Set the maximum number of items to display      
      touch: true, // Enable touch moving      
      start: function(slider){
        $('body').removeClass('loading');
      }
    });
  });  

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  });
  
})();