(function($) {
  "use strict"; // Start of use strict
console.log($(window).width());
  // Smooth scrolling using jQuery easing
      $(document).ready(function(){
      $("a").on('click', function(event) {

       if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;

          $('html, body').animate({
          scrollTop: $(hash).offset().top
         }, 700, function(){
  
        window.location.hash = hash;
      });
    } // End if
  });
});

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  //menu on button clicks
   $('#breakfast').click(function(){
    $('.breakfast-box').show();
    $('.lunch-box').hide();
    $('.dinner-box').hide();
  })
  $('#lunch').click(function(){
    $('.breakfast-box').hide();
    $('.lunch-box').show();
    $('.dinner-box').hide();
  })
  $('#dinner').click(function(){
    $('.breakfast-box').hide();
    $('.lunch-box').hide();
    $('.dinner-box').show();
  })

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

     $('#contactForm').validate();
     $('#registerForm').validate();
     $('#registerModalForm').validate();

})(jQuery); // End of use strict
