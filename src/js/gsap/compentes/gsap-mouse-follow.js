function MouseFollowGsap() {

    var button = document.querySelector('.custom-cursor');
    var buttonText = document.querySelector('.custom-cursor-text');
    var followArea = document.querySelectorAll('.custom-cursor-hover');
    var page = document.querySelector('#smooth-wrapper');



    var moveCircle = (e) => {
        gsap.to(button, 0.25, {
            css: {
                left: e.clientX,
                top: e.clientY
            }
        });
    }


    page.addEventListener('mousemove', moveCircle);

    followArea.forEach(function (el) {

        el.addEventListener('mouseover', () => {
            gsap.to(button, 0.25, {
                scale: 1,
                autoAlpha: 1
            });

        });

        el.addEventListener('mouseout', () => {
            gsap.to(button, 0.25, {
                scale: 0.5,
                autoAlpha: 0,
            });
        });

        el.addEventListener('mousedown', () => {

            gsap.to(button, 0.5, {
                css: {
                    transform: `translate(-50%, -50%) scale(0)`
                }
            });

            gsap.to(buttonText, 0.25, {
                css: {
                    opacity: 0
                }
            });
        });

        el.addEventListener('mouseup', () => {

            gsap.to(button, 1, {
                css: {
                    background: `transparent`
                }
            });

            gsap.to(button, 0.5, {
                css: {
                    transform: `translate(-50%, -50%) scale(1)`
                }
            });

            gsap.to(buttonText, 0.25, {
                css: {
                    opacity: 0
                }
            });

        });

    })
}
MouseFollowGsap();