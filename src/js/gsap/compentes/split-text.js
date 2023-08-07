function splitLines() {
    const splitLines = document.querySelectorAll(".split-lines");

    splitLines.forEach(quote => {

        quote.split = new SplitText(quote, {
            type: "lines",
            linesClass: "split-lines-line"
        });

        // Set up the anim
        quote.anim = gsap.from(quote.split.lines, {
            scrollTrigger: {
                trigger: quote,
                start: "top 80%",
                // markers: true,
                // toggleActions: "restart none none reset"
            },
            duration: 0.6,
            autoAlpha: 0,
            ease: "circ.out",
            yPercent: 100,
            stagger: 0.2,
        });
    });
}

splitLines();


function splitLinesWords() {
    const animEls = document.querySelectorAll('.split-lines-words');
    animEls.forEach(el => {
        var splitEl = new SplitText(el, {
            type: "lines, words",
            linesClass: "split-lines-word"
        });
        var splitTl = gsap.timeline({
            duration: .35,
            ease: 'power4',
            scrollTrigger: {
                trigger: el,
                start: 'top 90%',
                // toggleActions: "restart none none reset"

            }
        });
        splitTl.from(splitEl.words, {
            autoAlpha: 0,
            yPercent: "110",
            stagger: 0.025,
        });
    });
}

splitLinesWords();



// function splitCharsWords() {
//     var tlSplitBurrowing = gsap.timeline(),
//         SplitBurrowing = new SplitText(".split-chars-words", {
//             type: "words,chars"
//         }),
//         chars = SplitBurrowing.chars; //an array of all the divs that wrap each character


//     tlSplitBurrowing.from(chars, {
//         duration: 0.8,
//         opacity: 0,
//         y: 10,
//         ease: "circ.out",
//         stagger: 0.02,
//         scrollTrigger: {
//             trigger: ".split-chars-words",
//             //markers:true,
//             start: "top 100%",

//             scrub: 1
//         },
//         onComplete: () => {
//             SplitBurrowing.revert()
//         }
//     }, "+=0");

// };
// // ScrollTrigger.addEventListener("refresh", splitCharsWords);
// // splitCharsWords();


function splitChars() {
    let splitChars = document.querySelectorAll(".split-chars");
    splitChars.forEach(el => {
        gsap.from(SplitText.create(el, {
            type: "chars"
        }).chars, {
            yPercent: 130,
            stagger: 0.05,
            ease: "power2",
            duration: 1,
            scrollTrigger: {
                trigger: el,
                start: "top 70%",
                // markers: true,
            }
        });
    });
}
splitChars();



// function skewElement() {
//     let proxy = {
//             skew: 0
//         },
//         skewSetter = gsap.quickSetter(".skewElem", "skewY", "deg"), // fast
//         clamp = gsap.utils.clamp(-20, 20);

//     ScrollTrigger.create({
//         onUpdate: (self) => {
//             let skew = clamp(self.getVelocity() / -1000);
//             if (Math.abs(skew) > Math.abs(proxy.skew)) {
//                 proxy.skew = skew;
//                 gsap.to(proxy, {
//                     skew: 0,
//                     duration: 2,
//                     ease: "power3",
//                     overwrite: true,
//                     onUpdate: () => skewSetter(proxy.skew)
//                 });
//             }
//         }
//     });
//     gsap.set(".skewElem", {
//         transformOrigin: "right center",
//         force3D: true
//     });
// }

// skewElement();


// const boxes = gsap.utils.toArray('.fadeIn');
// // Set things up
// gsap.set(boxes, {autoAlpha: 0, y: 50});

// boxes.forEach((box, i) => {
//   // Set up your animation
//   const anim = gsap.to(box, {duration: 1, autoAlpha: 1, y: 0, paused: true});

//   // Use callbacks to control the state of the animation
//   ScrollTrigger.create({
//     trigger: box,
//     end: "bottom bottom",
//     once: true,
//     onEnter: self => {
//       // If it's scrolled past, set the state
//       // If it's scrolled to, play it
//       self.progress === 1 ? anim.progress(1) : anim.play()
//     }
//   });
// });