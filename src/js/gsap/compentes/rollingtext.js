
var rollingTween = new TimelineMax();
var time = 10;
var $rollingTextgoLeft = $(".rollingText");
var $text = $(".rollingText__text")

function startRolling() {

    $text.css({
        width: "auto"
    });
    $text.width(width);
    var width = $text.width();


    rollingTween.to(".rollingText", time, {
        x: -width,
        ease: Linear.easeNone,
        repeat: -1
    })

    return rollingTween;
}

function rollingText() {
    $('.rollingText').clone().appendTo(".wrapperRollingText");
    startRolling();
}
rollingText();

function resizeCheck() {
    var progress = rollingTween.progress(); //record the progress so that we can match it with the new tween (jump to the same spot)
    rollingTween.time(0).kill(); //rewind and kill the original tween.
    //time = 5;

    startRolling().progress(progress); //create a new tween based on the new size, and jump to the same progress value.
};

resizeCheck();
$(window).resize(resizeCheck);