/**
* Template Name: Medilab - v2.0.0
* Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
!(function($) {
  "use strict";

  // Preloader
  $(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function() {
        $(this).remove();
      });
    }
  });

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
        $(".nav-menu ul:first li:first, .mobile-nav ul:first li:first").addClass('active');
      }
    });
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
  // Toggle .header-scrolled class to #header when page is scrolled
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
      $('#topbar').addClass('topbar-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
      $('#topbar').removeClass('topbar-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
    $('#topbar').addClass('topbar-scrolled');
  }
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

  // jQuery counterUp
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: false,
    dots: true,
    loop: true,
    nav:true,
    responsive: {
      0: {
        items: 1,

      },
      768: {
        items: 1
      },
      900: {
        items: 1,
	margin:105,
	stagePadding: 103,
      }
    }
  });

  $(".timings").owlCarousel({
    autoplay: true,
    dots: true,
    margin:20,
    stagePadding: 20,
    loop: true,
    nav:true,
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



/*
  // Initiate the venobox plugin
  $(document).ready(function() {
    $('.venobox').venobox();
  });

  // Initiate the datepicker plugin
  $(document).ready(function() {
    $('.datepicker').datepicker({
      autoclose: true
    });
  });*/

})(jQuery);

$(document).ready(function () {
    $("body")
        .on("click", "#call-me-back-btn", function () {
            var emailExpr = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var mobileExpr = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/;

            var fullName = $("#fname").val();
            var hearAboutUs = $("#hearAboutUs").val();
            var emailId = $("#emailId").val();
            var message = $("#message").val();


            if (fullName  == "" || fullName  == null) {
                messageDisplay("Please enter Full Name", 1500, "error");
                $("#fname").focus();
                return false;
            }
            if (hearAboutUs == "" || hearAboutUs == null) {
                messageDisplay("Please enter Hear About Us", 1500, "error");
                $("#hearAboutUs").focus();
                return false;
            }
          /*if (!mobileExpr.test(mobile)) {
           messageDisplay("Please enter valid mobile number", 1500, "error");
           $("#mobile").focus();
           return false;
           }*/
            if (emailId == "" || emailId == null) {
                messageDisplay("Please enter email", 1500, "error");
                $("#emailId").focus();
                return false;
            }
            if (!emailExpr.test(emailId)) {
                messageDisplay("Please enter valid email", 1500, "error");
                $("#emailId").focus();
                return false;
            }
            if (message == "" || message == null) {
                messageDisplay("Please enter message", 1500, "error");
                $("#message").focus();
                return false;
            }



            var formData = new FormData();
            formData.append("fullName", fullName);
            formData.append("hearAboutUs", hearAboutUs);
            formData.append("emailId", emailId);
            formData.append("message", message);

            messageDisplay("Sending...", 3500, "error");

            $(".callnow-btn").attr("disabled", "disabled");

          /*console.log(formData);return false;*/

            $.ajax({
                type: "POST",
                url: "mail-form.php",
                data: formData,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $(".callnow-btn").removeAttr("disabled");
                  /*console.log(data); return false;*/
                    var jsonResponse = $.parseJSON(JSON.stringify(data));
                    if (jsonResponse.success) {
                        messageDisplay(jsonResponse.message, 2000, "error");
                        $("#thankyou").css('display','block');
                        window.location.replace("https://www.panchayoga.com/thank-you.html");
                      /*reloadTimeout(3500);*/
                    } else {
                        messageDisplay(jsonResponse.message, 2000, "error");
                        reloadTimeout(5500);
                    }
                },
                error: function (data) {
                  /*console.log(data); return false;*/
                    $(".booknow-btn").removeAttr("disabled");
                    var jsonResponse = $.parseJSON(JSON.stringify(data));
                    messageDisplay(jsonResponse.message, 2000, "error");
                    reloadTimeout();
                }
            });
        });
});



function reloadTimeout(timeOut) {
    if ($.trim(timeOut) === "") {
        timeOut = 1500;
    }
    setTimeout(function(){ window.location.reload(); }, timeOut);
}

function messageDisplay(message, timeOut,type) {
    //console.log("type "+type);
    if ($.trim(timeOut) == "") {
        timeOut = 2500;
    }
    var element = $("#wTdOl5MnWz");
    element.removeClass("error").removeClass("success").addClass(type);
    $("div#wTdOl5MnWz span").html(message);
    element.animate({
        height: 70
    }, 300).show();
    setTimeout(function () {
        element.animate({
            height: 0
        }, 300, function () {
            element.hide();
        });
    }, timeOut);
}