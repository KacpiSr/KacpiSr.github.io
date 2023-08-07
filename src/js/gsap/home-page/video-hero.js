gsap.from(".hp-hero__showreel video", {
    height: 0,
    scrollTrigger: {
        trigger: '.hp-hero__showreel',
        // markers: true,
        scrub: true,
        start: 'top 80%',
        end: 'top 10%',
        once: true,
    }
})

if ($('#myVideo').length) {
    showreel = document.getElementById('myVideo');
    ScrollTrigger.create({
        trigger: showreel,
        start: 'top 80%',
        // end: 'top 20%',
        // markers: false,
        // once: true,
        onEnter: () => showreel.play(),
        onEnterBack: () => {
            showreel.play();
        },
        onLeave: () => showreel.pause(),
        onLeaveBack: () => showreel.pause(),
    });
}