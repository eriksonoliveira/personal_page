//animate to the target section on click
$("nav a, .scroll-trigger a").click(function (e) {
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

/*
Small screens menu button

When the button is clicked the class active is
toggled for the menu and the html and body elements.
*/
$(".mobile-btn").on("click", function () {
  $(this).toggleClass('active');
  $(".mobile-menu, html, body").toggleClass('active');
});

/*
Hides the menu if the user clicks anywhere in
the document that is not inside the menu
*/
$(document).on("click", function (event) {
  if ($(event.target).closest(".mobile-menu, .mobile-btn").length == 0) {
    if ($(".mobile-menu").hasClass('active')) {
      $(".mobile-menu, .mobile-btn, html, body").toggleClass("active");
    }
  }
});

//animate sections on scroll
(function () {
  var $target = $(".animate"),
    animationClass = 'anime-start',
    offset = $(window).height() * 3 / 4,
    menu = $(".menu"),
    menuLogo = $(".menu-logo"),
    navLinks = $(".menu-nav ul li a");

  /*
  Show elements on scroll if the distance from the top to the
  element is greater than window.height() * 3/4

  If the user scrolls the page, make top menu fixed
  */
  function animeScroll() {
    var documentTop = $(document).scrollTop();

    $target.each(function () {
      var itemTop = $(this).offset().top;
      if (documentTop > itemTop - offset) {
        $(this).addClass(animationClass);
      }
    })

    if (documentTop > 0) {
      $(menu).addClass("fix-menu");
      $(menuLogo).addClass("fix-menu");
      $(navLinks).addClass("fix-menu");
    } else {
      if (menu.hasClass("fix-menu")) {
        $(menu).removeClass("fix-menu");
        $(menuLogo).removeClass("fix-menu");
        $(navLinks).removeClass("fix-menu");
      }
    }

  }

  animeScroll();

  $(document).scroll(function () {
    animeScroll();
  })
}());

//Handle email form submission
$("#cont-form").on("submit", function (event) {
  event.preventDefault();

  var form = $(this);
  var name = $(this).find("input[name=name]").val();
  var email = $(this).find("input[name=email]").val();
  var message = $(this).find("textarea[name=message]").val();

  var data = new FormData();

  data.append("name", name);
  data.append("email", email);
  data.append("message", message);

  $.ajax({
    type: 'POST',
    url: 'https://eriksonoliveira.com/emailHandler.php',
    data: data,
    dataType: 'json',
    beforeSend: function () {
      $(".spinner").removeClass("hide");
    },
    contentType: false,
    processData: false,
    success: function (json) {
      $(".spinner").addClass("hide");

      var alert = json.alert,
        alert_msg = '';

      if (alert) {
        alert_msg = "Your message has been sent successfully";
        $("#emailModal").find(".modal-body").html(alert_msg);
        $("#emailModal").modal();

        /*
        Access the DOM element in 'form' and run javascript's
        reset() method
        */
        $(form)[0].reset();
      } else {
        alert_msg = "Unable to send. Please try again.";
        $("#emailModal").find(".modal-body").html(alert_msg);
        $("#emailModal").modal();
      }
    }
  });
});
