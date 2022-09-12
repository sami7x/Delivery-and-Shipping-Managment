/**
* Template Name: Appland - v2.3.1
* Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
!(function($) {
  "use strict";

  // Toggle .header-scrolled class to #header when page is scrolled
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#header').outerHeight() - 1;
  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();
        var scrollto = target.offset().top - scrolltoOffset;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function() {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  // Mobile Navigation
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');
    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      $('.mobile-nav-overly').toggle();
    });
    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });
    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, .mobile-nav');

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function() {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
      }
      if (cur_pos < 300) {
        $(".nav-menu ul:first li:first").addClass('active');
      }
    });
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // Gallery carousel (uses the Owl Carousel library)
  $(".gallery-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    center: true,
    margin: 25,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 3
      },
      992: {
        items: 4
      },
      1200: {
        items: 5
      }
    }
  });

  // Initiate venobox lightbox
  $(document).ready(function() {
    $('.venobox').venobox();
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      900: {
        items: 2
      }
    }
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 800,
      easing: "ease-in-out",
      once: true
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

})(jQuery);

$(document).ready(AppLoaded)


function AppLoaded() {
    console.log('App is Loaded and Ready');
    apply_event_handlers();
}

let shipping_time = 5;
let shipping_cost = 0;
let arrival_date = '';
let weightOz = 0;

/********************
 * will add event handlers to all of the appropriate elements
 *@params: none
 *@return: none
 ********************/
function apply_event_handlers() {
    calculateButton(); //trigger calculations
}

/********************
 * function that triggers when calculate button is pressed
 *@params: none
 *@return: none
 ********************/
function calculateButton() {
    $("#calcBtn").click(function () {
        let inputValidation = $("#weightInput").val()
        if (inputValidation == '') {
            $('.btnValidation').addClass('red');
            return false;
        } else {
            console.log('calcBtn called.');
            $('btn-validation').val('');
            calculate_shipping(inputValidation, shipping_time)
            $("#weightInput").val('');
            $('.btnValidation').removeClass('red');
            calculateData()
            $('.icon-img').addClass('bounce');
            setTimeout(function () {
                $('.icon-img').removeClass('bounce');
            }, 1000);
        }
    });
}

/********************
 * checks the incoming values. If anything other than a number or period is pressed, it returns false.
 *@params: event {object} the object that holds the details of the event
 *@return: true if the key pressed is a number or the period key, false if it is not
 ********************/

function validate_keydown(evt, obj) {
    let charCode = (evt.which) ? evt.which : event.keyCode
    let value = obj.value;
    let dotcontains = value.indexOf(".") != -1;
    if (dotcontains)
        if (charCode == 46) return false;
    if (charCode == 46) return true;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

/********************
* update the stored value for the shipping based on the clicked radio button.
*@global: shipping_time
@params: none
*@return: none
********************/
function change_shipping_type(time) {
    shipping_time = time;

    let currentDate = new Date();
    let numberOfDaysToAdd = time;
    currentDate.setDate(currentDate.getDate() + numberOfDaysToAdd);

    let dd = currentDate.getDate();
    let mm = currentDate.getMonth() + 1;
    let y = currentDate.getFullYear();

    arrival_date = dd + '/' + mm + '/' + y;
}

/********************
 * process the shipping time and weight, and return an object with the shipping time and weight
 *@params: weight, shipping_time
 *@return: an object with the following properties and values: weight and cost.
 ********************/
function calculate_shipping(weight, shipping_time) {
    weightOz = weight * 16;

    if (weightOz <= 20) {
        shipping_cost = (weightOz * 0.02).toFixed(2);
    } else if (weightOz > 20 && weightOz < 32) {
        shipping_cost = (weightOz * 0.10).toFixed(2);
    } else if (weightOz >= 32) {
        shipping_cost = (weightOz * 0.20).toFixed(2);
    }

    if (shipping_time === 5) {
        shipping_cost = shipping_cost * 1;
    } else if (shipping_time === 3) {
        shipping_cost = shipping_cost * 1.5;
    } else if (shipping_time === 2) {
        shipping_cost = shipping_cost * 2;
    }
    change_shipping_type(shipping_time);
}

/********************
 * Populate Data on the DOM
 *@params: none
 *@return: an object with the following properties and values: arrival_date, weight and cost.
 ********************/
function calculateData() {
    $('#totalOz').text(weightOz);
    $('#totalLbs').text(weightOz / 16);
    $('#eta').text(arrival_date);
    $('#TotalCost').text("$" + shipping_cost.toFixed(2));
}