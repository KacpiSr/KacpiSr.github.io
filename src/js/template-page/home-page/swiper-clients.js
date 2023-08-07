var swiperClients = new Swiper(".hp-clients .hp-clients-slider .swiper", {
    speed: 500,
    loop: true,
    slidesPerView: 1.6,
    navigation: {
        nextEl: ".hp-clients .hp-clients-header .arrow-buttons .swiper-button-next",
        prevEl: ".hp-clients .hp-clients-header .arrow-buttons .swiper-button-prev",
    },
});