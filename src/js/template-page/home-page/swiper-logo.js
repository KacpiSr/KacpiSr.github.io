var swiperLogo = new Swiper(".hp-logo-swiper .logo-swiper", {
  navigation: {
    nextEl: ".hp-logo-swiper .swiper-button-next",
    prevEl: ".hp-logo-swiper .swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1.3,
    },
    540: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    }
  }
});