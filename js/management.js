var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  loop: true,
  spaceBetween: 40,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});
