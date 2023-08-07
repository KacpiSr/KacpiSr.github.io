$('.hp-services-main__table').mouseenter(function () {
    var thishpColor = $(this).attr("data-color");
    $(".hp-services-wrap").css("background-color", thishpColor);
    $(this).parent().parent().parent().parent().css('background-color', 'white');
});

$('.hp-services-main__table').mouseleave(function () {
    $(".hp-services-wrap").css("background-color", "initial");
    $('.hp-services-main__single-box').css('background-color', "initial");
});