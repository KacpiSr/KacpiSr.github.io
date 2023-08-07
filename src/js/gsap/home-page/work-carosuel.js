function secWorkCustomCarosuel() {
    document.addEventListener("DOMContentLoaded", () => {
        let pinWrap = document.querySelector(".hp-work-carousel__wrap");
        let pinWrapWidth = pinWrap.offsetWidth;
        let horizontalScrollLength = pinWrapWidth - window.innerWidth;

        let scrollTween = gsap.to(".hp-work-carousel__wrap", {
            x: -horizontalScrollLength,
            ease: "none",
            scrollTrigger: {
                scrub: true,
                trigger: ".hp-work",
                pin: true,
                start: "top top",
                end: pinWrapWidth,
                // markers: true,
                pinSpacing: true,
                invalidateOnRefresh: true,
                scrub: true,
            }
        });

        gsap.utils.toArray(".hp-work-carousel__item:nth-child(even").forEach((workItemEven) => {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: workItemEven,
                    start: "center 100%",
                    end: "center 50%",
                    scrub: true,
                    containerAnimation: scrollTween,
                }
            });
            tl.to(workItemEven, {
                y: -60,
                ease: "none",
            })
        })

        gsap.utils.toArray(".hp-work-carousel__item:nth-child(odd)").forEach((workItemOdd) => {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: workItemOdd,
                    start: "center 100%",
                    end: "center 50%",
                    scrub: true,
                    containerAnimation: scrollTween,

                }
            });
            tl.from(workItemOdd, {
                y: -30,
                ease: "none",

            })
        })
        const boxes = gsap.utils.toArray(".hp-work-carousel__item").forEach((workItemOpacity) => {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: workItemOpacity,
                    start: "center 100%",
                    end: "center 60%",
                    scrub: true,
                    containerAnimation: scrollTween,

                }
            });
            tl.from(workItemOpacity, {
                autoAlpha: 0.1,
                ease: "none",
            })
        })

        gsap.utils.toArray(".hp-work-carousel__item .hp-work-carousel__item__header").forEach((workHeader) => {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: workHeader,
                    start: "center 115%",
                    end: "center 75%",
                    scrub: true,
                    containerAnimation: scrollTween,

                }
            });
            tl.from(workHeader, {
                // y: -40,
                x: 60,
                ease: "none",
            })
        })

        gsap.utils.toArray(".hp-work-carousel__item .hp-work-carousel__item__category").forEach((workCat) => {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: workCat,
                    start: "center 115%",
                    end: "center 70%",
                    scrub: true,
                    containerAnimation: scrollTween,

                }
            });
            tl.from(workCat, {
                // y: -60,
                x: 40,
                autoAlpha: 0,
                ease: "none",
            })
        })
    })


}
if ($('.hp-work-carousel__wrap').length) {
    secWorkCustomCarosuel();
}