function secAboutUsHome() {

    let difference = gsap.timeline({
        scrollTrigger: {
            trigger: ".hp-about-us",
            start: "top top",
            pin: true,
            scrub: 1
        }
    });

    difference.addLabel("start")
        .to(".hp-about-us__heading", {
            ease: "none",
            x: '100%',
            force3d: false,
        })
        .to(".hp-about-us__logo", {
            ease: "none",
            x: '-120%',
            force3d: false,
        }, "start")
}
secAboutUsHome();

// VIDEO

if ($('#myVideo').length) {
    videoAboutUs = document.getElementById('videoAboutUs');
    ScrollTrigger.create({
        trigger: videoAboutUs,
        markers: false,
        start: "top 80%",
        onEnter: () => videoAboutUs.play(),
        onLeaveBack: () => videoAboutUs.pause(),
    });
}


// AWARDS

gsap.from(".clients-logos__line", {
    scrollTrigger: ".clients-logos__line",
    markers: true,
    start: "top 80%",
    duration: 2.5,
    scaleX: 0,
    transformOrigin: 'left',
});