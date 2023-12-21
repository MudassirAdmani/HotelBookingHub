var swiper = new Swiper(".mainSwiper", {
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
});
var swiper2 = new Swiper(".testimonialSwiper", {
  effect: "cube",
  grabCursor: true,
  loop: true,
  cubeEffect: {
    shadow: false,
    slideShadows: true,
    shadowOffset: 20,
    shadowScale: 0.94,
  },
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
});
