function fadeInBatch() {
    ScrollTrigger.batch(".fadeInBatch", {
        onEnter: batch => gsap.to(batch, {
            autoAlpha: 1,
            stagger: 0.2
        }),
        // markers: true,
        start: 'top 70%',
        once: true
    });
}
fadeInBatch();