
    $(function(){
      $(".element").typed({
        strings: ["mejorar tu negocio.","ahorrar tiempo.", "ser mas rentable.","ahorrar dinero.","ser mas productivo."],
        typeSpeed: 50,
        // time before typing starts
        startDelay: 200,
        // backspacing speed
        backSpeed: 10,
        // either html or text
        contentType: 'html',
        // time before backspacing
        backDelay: 2000,
        // loop
        loop: true,
      });
    });


  // Capture scroll events
  $(window).scroll(function(){
    checkAnimation();
  });

  function isElementInViewport(elem) {
    var $elem = $(elem);

    // Get the scroll position of the page.
    var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
    var viewportTop = $(scrollElem).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    // Get the position of the element on the page.
    var elemTop = Math.round( $elem.offset().top );
    var elemBottom = elemTop + $elem.height();

    return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
  }

  // Check if it's time to start the animation.
  function checkAnimation() {
    var $elem = $('.multiusuarios-img');

    if (isElementInViewport($elem)) {
      // Start the animation
      $elem.addClass('animated bounceInRight');
    } else {
      $elem.removeClass('animated bounceInRight');
    }
  }
