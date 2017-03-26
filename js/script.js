//products menu
/*maskes sure that the first item is active on page load*/
var classActive = 'active';

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

//animate to the target section
$("nav a").click(function(e) {
  e.preventDefault();

  var id = $(this).attr("href"),
      targetOffset = $(id).offset().top,
      menuHeight = $("nav").innerHeight();

  $("html, body").animate({
    scrollTop: targetOffset - menuHeight
  }, 500);
});

//animate sections on scroll
(function() {
  var $target = $('.wrapper'),
      animationClass = 'anime-start',
      offset = $(window).height() * 3/4;

  function animeScroll() {
    var documentTop = $(document).scrollTop();

    $target.each(function() {
      var itemTop = $(this).offset().top;
      if (documentTop > itemTop - offset) {
        $(this).addClass(animationClass);
      }
    })
  }

  animeScroll();

  $(document).scroll(function() {
    animeScroll();
  })
}());
