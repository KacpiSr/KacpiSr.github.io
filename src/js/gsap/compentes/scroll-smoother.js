const content = document.querySelector('#smooth-content');
const smoother = ScrollSmoother.create({
    content: content,
    wrapper: '#smooth-wrapper',
    smooth: 1.8,
    effects: true,
});