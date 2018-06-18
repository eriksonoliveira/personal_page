//animate to the target section on click
$("nav a, .scroll-trigger a").click(function(e) {
  e.preventDefault();

  var id = $(this).attr("href"),
      targetOffset = $(id).offset().top,
      menuHeight = $(".menu").innerHeight();

  $("html, body").animate({
    scrollTop: targetOffset - menuHeight
  },
    1000,
    "easeInOutExpo"
  );
});

//Mobile menu button
/*When the button is clicked the class active is
toggled for the menu and the html and body elements */
$(".mobile-btn").click(function() {
  $(this).toggleClass('active');
  $(".mobile-menu, html, body").toggleClass('active');
});

/*Hides the menu if the user clicks anywhere in
the document that is not inside the menu*/
$(document).click(function(event) {
    if($(event.target).closest(".mobile-menu, .mobile-btn").length == 0) {
        if($(".mobile-menu").hasClass('active')) {
            $(".mobile-menu, .mobile-btn, html, body").toggleClass('active');
        }
    }
})

//animate sections on scroll
(function() {
  var $target = $('.animate'),
      animationClass = 'anime-start',
      offset = $(window).height() * 3/4,
      menu = $('.menu'),
      menuLogo = $('.menu-logo'),
      navLinks = $('.menu-nav ul li a');

  function animeScroll() {
    var documentTop = $(document).scrollTop();

    $target.each(function() {
      var itemTop = $(this).offset().top;
      if (documentTop > itemTop - offset) {
        $(this).addClass(animationClass);
      }
    })

    if(documentTop > 0 ) {
      $(menu).addClass('fix-menu');
      $(menuLogo).addClass('fix-menu');
      $(navLinks).addClass('fix-menu');
    } else {
      if (menu.hasClass('fix-menu')) {
        $(menu).removeClass('fix-menu');
        $(menuLogo).removeClass('fix-menu');
        $(navLinks).removeClass('fix-menu');
      }
    }

  }

  animeScroll();

  $(document).scroll(function() {
    animeScroll();
  })
}());