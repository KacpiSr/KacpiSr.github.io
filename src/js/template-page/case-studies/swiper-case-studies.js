
const caseStudiesSliders = document.querySelectorAll('.swiper');

for( i=0; i< caseStudiesSliders.length; i++ ) {
    console.log(i);
var swiperLogo = new Swiper(".case-studies .case-studies-slider .swiper--" + i, {
    speed: 500,
    spaceBetween: 30,
    loop:true,
    centeredSlides: false,
    breakpoints: {
        320: {
            slidesPerView: 1.3,
        },
        540: {
            slidesPerView: 1.8,
        },
        992: {
            slidesPerView: 1.8,
        },
    },
    navigation: {
        nextEl: ".case-studies .case-studies-slider-arrows__button-next--" + i,
        prevEl: ".case-studies .case-studies-slider-arrows__button-prev--" + i,
    },
});
}
