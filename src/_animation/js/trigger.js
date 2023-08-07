gsap.registerPlugin(ScrollTrigger);

let animation = new explosion.default(
    'js-animation', // id of DOM el
    {
        surface: '6666661',
        inside: '876499',
        background: '1A1A1A',
        onLoad: () => {
            document.body.classList.remove('loading');
        }
    }
);

let targetMouseY = 0,
    mouseY = 0,
    ta = 0;
const sign = function (n) {
    return n === 0 ? 1 : n / Math.abs(n);
};

ScrollTrigger.create({
    trigger: ".hp-hero__animation",
    start: "top top",
    end: "100%",
    scrub: true,
    // markers: true,
    pin: ".hp-hero__animation",
    onEnter: () => {
        console.log('onEnter');
        var lastScrollTop = 0;
        document.addEventListener('scroll', (e) => {
            var st = $(this).scrollTop();
            if (st > lastScrollTop) {
                if (targetMouseY < -0.9) {
                    targetMouseY = targetMouseY;

                } else {
                    targetMouseY = targetMouseY - 0.01;

                }
            } else {
                // console.log('test');
                if (targetMouseY > -0.9) {
                    targetMouseY = targetMouseY + 0.01;

                } else {

                }
            }
            lastScrollTop = st;
        });
    },
    onLeave: () => {
        targetMouseY = -0.9;
        document.addEventListener('mousemove', (e) => {
            targetMouseY = -0.9;
            targetMouseY = targetMouseY + (e.clientX - animation.width) / 10000;
        });
    },
    onEnterBack: () => {
        console.log('onEnterBack');
    },
    onLeaveBack: () => {
        console.log('onLeaveBack');
    },
});

function draw() {
    if (animation) {
        mouseY += (targetMouseY - mouseY) * 0.05;
        ta = mouseY + 0.9;
        animation.settings.progress = ta;
        animation.scene.rotation.y = Math.PI / 2 - ta * (2 - ta) * Math.PI * sign(0);
        animation.scene.rotation.z = Math.PI / 2 - ta * (2 - ta) * Math.PI * sign(100);

        window.requestAnimationFrame(draw);
    }
}
draw();