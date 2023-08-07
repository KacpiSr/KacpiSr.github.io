$(document).ready(function () {
    const book = new Swiper(".blok-ebooks .swiper-ebook", {
        speed: 1500,
        // autoplay: {
        //   delay: 10000,
        // },
        grabCursor: true,
        slidesPerView: 'auto',
        // spaceBetween: 25,
        loop: true,
        navigation: {
            nextEl: ".blok-ebooks .swiper-button-next",
            prevEl: ".blok-ebooks .swiper-button-prev",
        },
        // pagination: {
        //   el: ".swiper-pagination",
        //   type: "fraction",
        //   clickable: true,
        // },
        breakpoints: {
            992: {
                slidesPerView: 1,

            },

            1199: {
                slidesPerView: 2,
            },
        },
    });
});

const caseStudies = new Swiper(".blok-case-studies .swiper-studies", {
    speed: 1500,
    grabCursor: true,
    slidesPerView: 'auto',
    loop: true,
    navigation: {
        nextEl: ".blok-case-studies .swiper-button-next",
        prevEl: ".blok-case-studies .swiper-button-prev",
    },
    breakpoints: {
        992: {
            slidesPerView: 2,

        },
    },
});






//footer city//
if ($(window).width() < 991) {
    $('.footer__right__city').appendTo('.footer__left__logo-funktional');
}