if (screen.width > 991) {
  // custom mouse
  var cursor = document.querySelector(".cursor");
  var cursorinner = document.querySelector(".cursor2");
  var a = document.querySelectorAll("a");
  document.addEventListener("mousemove", (e) => {
    cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;
  });
  document.addEventListener("mousemove", (e) => {
    var x = e.clientX;
    var y = e.clientY;
    cursorinner.style.left = x + "px";
    cursorinner.style.top = y + "px";
  });
  document.addEventListener("mousedown", () => {
    cursor.classList.add("click");
    cursorinner.classList.add("cursorinnerhover");
  });
  document.addEventListener("mouseup", () => {
    cursor.classList.remove("click");
    cursorinner.classList.remove("cursorinnerhover");
  });
  a.forEach((item) => {
    item.addEventListener("mouseover", () => {
      cursor.classList.add("hover");
    });
    item.addEventListener("mouseleave", () => {
      cursor.classList.remove("hover");
    });
  });
}

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
