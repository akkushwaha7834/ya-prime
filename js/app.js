
$(document).ready(function () {
  // $(".dropdown").hover(
  //   function () {
  //     $(".dropdown-menu", this)
  //       .not(".in .dropdown-menu")
  //       .stop(true, true)
  //       .slideDown("400");
  //     $(this).toggleClass("open");
  //   },
  //   function () {
  //     $(".dropdown-menu", this)
  //       .not(".in .dropdown-menu")
  //       .stop(true, true)
  //       .slideUp("400");
  //     $(this).toggleClass("open");
  //   }
  // );

  // hero slider
  $("#hero-slider").owlCarousel({
    loop: true,
    // margin: 30,
    dots: false,
    nav: false,
    items: 1,
    autoplayTimeout: 2500,
    smartSpeed: 500,
    autoplay: true,
  });
});
$(".youtube-btn").grtyoutube({autoPlay:!0});