// // ****************************
// // MouseMove
// // ****************************
function mouseMoveGsap() {
    $(document).on('mousemove', '.tab-element', function () {
        var $this = $(this),
            $elem = $this.find('.color-tile');

        var x = (event.clientX / $(window).width()) - 0.5;
        var y = (event.clientY / $(window).height()) - 0.5;

        TweenLite.to($elem, 0.6, {
            rotationY: 6 * x,
            rotationX: 10 * y,
            ease: Power1.easeOut,
            transformPerspective: 40,
            transformOrigin: "center"
        });

    }).on('mouseleave', '.tab-element', function () {
        var $this = $(this),
            $elem = $this.find('.color-tile');
        TweenLite.to($elem, 0.6, {
            rotationY: 0,
            rotationX: 0,
        });
    });
}
mouseMoveGsap()