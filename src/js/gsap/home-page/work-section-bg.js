function secWorkBgHome() {
    document.addEventListener("DOMContentLoaded", () => {
        let pinWrap = document.querySelector(".hp-work-carousel__wrap");
        let pinWrapWidth = pinWrap.offsetWidth;
        secWork = document.querySelector('.hp-work-change-bg');
        var colorWork = secWork.getAttribute('data-color');
        var colorBlack = '#1A1A1A';
        var colorWhite = '#ffffff';
        ScrollTrigger.create({
            trigger: secWork,
            start: 'top 30%',
            end: pinWrapWidth + 200,
            // markers: true,
            onEnter: () => onEnterTrue(),
            onLeaveBack: () => onLeaveBackTrue(),
        });
        // SET
        $('.hp-work .hp-work-carousel__item__header').addClass('color-invert');
        $('.hp-work .hp-work-carousel__item__category').addClass('color-invert');

        function onEnterTrue() {
            gsap.to('.bg-change-work-wrap', {
                backgroundColor: colorBlack,
                duration: 0.5,

            })
            $('.hp-logo-swiper .swiper-slide__item ').addClass('color-invert');
            $('.hp-work .hp-work-carousel__item__header').removeClass('color-invert');
            $('.hp-work .hp-work-carousel__item__category').removeClass('color-invert');
            $('.hp-work-header__traingle').css({
                opacity: 1
            });

        };

        function onLeaveBackTrue() {
            gsap.to('.bg-change-work-wrap', {
                backgroundColor: colorWhite,
                duration: 0.5,
            })
            $('.hp-logo-swiper .swiper-slide__item ').removeClass('color-invert');
            $('.hp-work-header__traingle').css({
                opacity: 0.1
            });
        };
    })

}

if ($('.hp-work-carousel__wrap').length) {
    secWorkBgHome();
}
