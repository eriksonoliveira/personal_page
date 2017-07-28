//products menu
var classActive = 'active';

/*makes sure that the first item is active on page load*/
$(".prod-menu-item").first().addClass(classActive);
$(".prod-item").first().addClass(classActive);

$(".prod-menu-item").click(function(e) {
  e.preventDefault();
  var itemId = $(this).attr("data-target");

  /*remove class active from the previously
  clicked item and adds to the current item*/
  $(".prod-menu-item, .prod-item").removeClass(classActive);
  $(this).addClass(classActive);
  $(itemId).addClass(classActive);
});

//animate to the target section on click
$("nav a").click(function(e) {
  e.preventDefault();

  var id = $(this).attr("href"),
      targetOffset = $(id).offset().top,
      menuHeight = $(".menu").innerHeight();

  $("html, body").animate({
    scrollTop: targetOffset - menuHeight
  }, 500);
});

//Mobile menu button
/*When the button is clicked the class active is
toggled for the menu and the html and body elements */
$(".mobile-btn").click(function() {
  $(this).toggleClass('active');
  $(".mobile-menu, html, body").toggleClass('active');
});

/*Hides de menu if the user clicks aniwhere in
the document that is not inside the menu*/
$(document).click(function(event) {
    if($(event.target).closest(".mobile-menu, .mobile-btn").length == 0) {
        if($(".mobile-menu").hasClass('active')) {
            $(".mobile-menu, .mobile-btn, html, body").toggleClass('active');
        }
    }
})

//Slide
//Adds the class 'active' to the first slide on start
$(".slide >:first").addClass('active');


function rotateSlide(control) {
  var activeSlide = $(".slide > .active"),
      nextSlide = activeSlide.next(),
      prevSlide = activeSlide.prev();


  if(nextSlide.length == 0) {
    nextSlide = $(".slide >:first");
  }
  if(prevSlide.length == 0) {
    prevSlide = $(".slide >:last");
  }

  activeSlide.removeClass('active');
  if(control == 1){
    nextSlide.addClass('active');
  }
  if(control == 0){
    prevSlide.addClass('active');
  }
}

/*setInterval(rotateSlide, 5000);*/

//animate sections on scroll
(function() {
  var $target = $('.animate'),
      animationClass = 'anime-start',
      offset = $(window).height() * 3/4,
      menu = $('.menu');

  function animeScroll() {
    var documentTop = $(document).scrollTop();

    $target.each(function() {
      var itemTop = $(this).offset().top;
      if (documentTop > itemTop - offset) {
        $(this).addClass(animationClass);
      }
    })

    if(documentTop > 0 ) {
      menu.addClass('fix-menu');
    } else {
      if (menu.hasClass('fix-menu')) {
        menu.removeClass('fix-menu');
      }
    }

  }

  animeScroll();

  $(document).scroll(function() {
    animeScroll();
  })
}());
