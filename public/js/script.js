/*=====================================
     SERVICES
/*=====================================*/
$(function () {
  // animation on scroll
  new WOW().init();

});

/*=====================================
     WORK
/*=====================================*/
$(function () {
  // magnific Popup
  $('#work').magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {
          enabled:true
        }
    });
});

/*=====================================
     TEAM
/*=====================================*/
$(function () {
  // OWL carousel
   $("#team-members").owlCarousel({
     items:2,
     autoplay:true,
     smartSpeed:true,
     autoplayHoverPause:true,
     responsive : {
          // breakpoint from 0 up
          0 : {
             items:1
          },
          // breakpoint from 480 up
          480 : {
             items:2
          },
          // breakpoint from 768 up
          768 : {
             items:2
          },
          // breakpoint from 992 up
          992 : {
             items:2
          }
      }
   });
});

/*=====================================
     Testimonials
/*=====================================*/
$(function () {
  // OWL carousel
   $("#customers-testimonials").owlCarousel({
     items:1,
     autoplay:true,
     autoplayHoverPause:true,
   });
});

/*=====================================
     Counter
/*=====================================*/
$(function () {
  // OWL carousel
   $(".counter").counterUp({
     delay:10,
     time:2000,
   });
});

/*=====================================
     Client
/*=====================================*/
$(function () {
  // OWL carousel
   $("#clients-list").owlCarousel({
     items:6,
     autoplay:true,
     autoplayHoverPause:true,
     responsive : {
          // breakpoint from 0 up
          0 : {
             items:1
          },
          // breakpoint from 480 up
          480 : {
             items:3
          },
          // breakpoint from 768 up
          768 : {
             items:5
          },
          // breakpoint from 992 up
          992 : {
             items:6
          }
      }
   });
});


/*=====================================
     NAVIGATION
/*=====================================*/
// Show/hide transparent black navigation

$(function () {
    scrollNavigation();
});
 scrollNavigation();
function scrollNavigation() {
  $(window).scroll(function(){
    if ($(this).scrollTop() < 50) {
      //HIDE NAV
      $('nav').removeClass("coding-top-nav");
      $('#back-to-top').fadeOut();
    }else {
      //SHOW NAV
        $('nav').addClass("coding-top-nav");
          $('#back-to-top').fadeIn();
    }
  });
}
// smout scrolling
$(function(){
  $('a.smooth-scroll').click(function (event) {
      event.preventDefault();
      //get/return id like #about
      var section = $(this).attr("href");
      $("html, body").animate({
        scrollTop:$(section).offset().top -64
      },1250, "easeInOutExpo");
  });
});

// Close mobile menu on click
$(function(){
  $('.navbar-collapse ul li a').on("click touch",function (event) {
     $(".navbar-toggle").click();
  });
});


// particles
$(window).resize(function() {
    particle();
});
particle();
function particle() {
  /* Otherwise just put the config content (json): */

    particlesJS("particles-js",
    {
      "particles": {
      "number": {
        "value": 48,
        "density": {
          "enable": false,
          "value_area": 641.3648243462092
        }
      },
      "color": {
        "value": "#ffffff"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.21646062821684559,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 3,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.1843923869995351,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 2,
        "direction": "top",
        "random": true,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 1282.7296486924183,
          "rotateY": 1200
        }
      }
      },
      "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": true,
          "mode": "grab"
        },
        "onclick": {
          "enable": true,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 316.71011279752463,
          "line_linked": {
            "opacity": 0.1892023066229032
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
      },
      "retina_detect": true
      }
      );

}
