  // These two scripts where copied, not written
    // Smooth scroll. Basically CSS could be used, but it does not work on Safari, so some jQuery is needed (wasnt writen by me)
    $(document).ready(function(){
      $("a").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
            window.location.hash = hash;
          });
        }
      });
    });

    // Function to highlight menu by section that visitor is reading (wasnt writen by me, but modified to be more aqurate)
    $(window).scroll(function() {
      var scrollDistance = $(window).scrollTop();
      $('.container').each(function(i) {
          if ($(this).position().top <= scrollDistance+200) {
              $('.menuItem').removeClass('menuItemActive');
              $('.menuItem').eq(i).addClass('menuItemActive');
          }
      });
    }).scroll();
