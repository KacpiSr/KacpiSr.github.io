gsap.to(".hp-blog__rectangle.visible--desktop svg", {
    x: 0,
    width: 0,
    force3D: false,
    scrollTrigger: {
        trigger: ".hp-blog__rectangle.visible--desktop svg",
        start: "top 70%",
        end: "0",
        scrub: true,
        // markers: true,

    }
});