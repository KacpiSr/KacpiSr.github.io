function secClientsBgHome() {
    document.addEventListener("DOMContentLoaded", () => {


        secClients = document.querySelector('.bg-change-clients-wrap');
        var colorBlack = '#1A1A1A';
        var colorWhite = '#ffffff';
        ScrollTrigger.create({
            trigger: secClients,
            start: 'top 30%',
            // markers: true,
            onEnter: () => onEnterTrue(),
            onEnterBack: () => onEnterBackTrue(),
            onLeave: () => onLeaveTrue(),
            onLeaveBack: () => onLeaveBackTrue(),


        });

        // SET
        function onEnterTrue() {
            gsap.to('.bg-change-clients-wrap', {
                backgroundColor: colorBlack,
                duration: 0.5,
            });
            gsap.to('.hp-services', {
                backgroundColor: colorBlack,
                duration: 0.5,
            });
            $('.hp-clients .hp-clients-header .arrow-buttons .custom-arrow-element-white').removeClass('custom-arrow-element-clietns');
            $('.hp-clients .hp-clients-slider__item__name').css('color', colorWhite);
            $('.hp-clients .hp-clients-slider__item__company').css('color', colorWhite);
            $('.hp-clients .swiper-slide-active .hp-clients-slider-content .fw--500').css('color', colorWhite);
            $('.hp-services-main .all-services-href .btn').removeClass('btn__black').addClass('btn__white');
            $('.hp-services-main .all-services-href .btn').removeClass('btn__black--transparent').addClass('btn__white--transparent');
            $('.hp-awards .heading-flag__text').css('color', colorWhite);

            // $('.hp-awards .heading-flag__bg').css({
            //     'background-color': colorWhite,
            //     'color': colorBlack
            // });

        };

        function onEnterBackTrue() {
            gsap.to('.bg-change-clients-wrap', {
                backgroundColor: colorBlack,
                duration: 0.5,
            });

            gsap.to('.hp-services', {
                backgroundColor: colorBlack,
                duration: 0.5,
            });
            $('.hp-about-us__text').css('color', colorWhite);
            $('.hp-about-us .btn').removeClass('btn__black').addClass('btn__white');
            $('.hp-about-us .btn').removeClass('btn__black--transparent').addClass('btn__white--transparent');
            $('.hp-awards .heading-flag__text').css('color', colorWhite);

        };

        function onLeaveBackTrue() {
            gsap.to('.bg-change-clients-wrap', {
                backgroundColor: colorWhite,
                duration: 0.5,
            });
            gsap.to('.hp-services', {
                backgroundColor: colorWhite,
                duration: 0.5,
            });
            $('.hp-clients .hp-clients-header .arrow-buttons .custom-arrow-element-white').addClass('custom-arrow-element-clietns');
            $('.hp-clients .hp-clients-slider__item__name').css('color', colorBlack);
            $('.hp-clients .hp-clients-slider__item__company').css('color', colorBlack);
            $('.hp-services-main .all-services-href .btn').removeClass('btn__white').addClass('btn__black');
            $('.hp-services-main .all-services-href .btn').removeClass('btn__white--transparent').addClass('btn__black--transparent');
            $('.hp-clients .swiper-slide-active .hp-clients-slider-content .fw--500').css('color', colorBlack);
        };

        function onLeaveTrue() {
            gsap.to('.bg-change-clients-wrap', {
                backgroundColor: colorWhite,
                duration: 0.5,
            });
            gsap.to('.hp-services', {
                backgroundColor: colorWhite,
                duration: 0.5,
            });

            $('.hp-about-us__text').css('color', colorBlack);
            $('.hp-about-us .btn').removeClass('btn__white').addClass('btn__black');
            $('.hp-about-us .btn').removeClass('btn__white--transparent').addClass('btn__black--transparent');
            $('.hp-awards .heading-flag__text').css('color', colorBlack);
            // $('.hp-awards .heading-flag__bg').css({
            //     'background-color': colorBlack,
            //     'color': colorWhite
            // });
        };
    })
}
secClientsBgHome();