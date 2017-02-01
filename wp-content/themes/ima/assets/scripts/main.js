/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

    $('.hamburger').click(function() {
      $('.nav-primary').toggleClass('open');
      $('.hamburger').toggleClass('open');
    });

    // Smooth Scroll to Map

    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });

    // Smooth Scroll to Top
    $("a[href='#top']").click(function() {
      $("html, body").animate({
        scrollTop: 0
      }, "slow");
      return false;
    });

    // Hover sub-menu
    if ($(window).width() > 992) {
      $('#menu-item-28').mouseenter(function(){
        clearTimeout($(this).data('timeoutId'));
        $(this).find('.sub-menu').css('display', 'block');
      }).mouseleave(function(){
        var $about_link = $(this),
            timeoutId = setTimeout(function(){
              $about_link.find('.sub-menu').css('display', 'none');
            }, 450);
        //set the timeoutId, allowing us to clear this trigger if the mouse comes back over
        $about_link.data('timeoutId', timeoutId);
      });
    }

    // YouTube Video
    $('#player').click(function() {
      console.log("clicking");
      // $('.content .hero').addClass('video-active');
    });

  function playVideo(options) {
    var $container = $(options.videoContainer);
    $container.append('<iframe style="background-color:#000;" class="wistia_embed" width="700px" height="464px" src="' + options.videoSource + '" frameborder="0" allowfullscreen></iframe>').addClass('video--show');
  }

  $(".video-block").on('click', function() {
    var $this = $(this);
    var options = {
      videoSource: $this.data('src'),
      videoContainer: $this.find('.video')
    };
    $this.find('.play').hide();
    $this.removeClass('video-block--placeholder');
    playVideo(options);
  });

  // Read More + Less Team Bio
  $('.show_hide').click(function(e) {
    e.preventDefault();
    var bio = ($(this).prev('.bio'));
    var readText = ($(this).children('span'));
    bio.toggleClass('bio-expanded');
    readText.text(function(i, text) {
       return text === 'Close' ? 'Read More': 'Close';
     });
  });

  // recompile

})(jQuery); // Fully reference jQuery after this point.
