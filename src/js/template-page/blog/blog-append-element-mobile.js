if ($(window).width() < 768) {
    $(".awarded__item-wrap .awarded__item-wrap__elements:first-child").after(
        '<div class="awarded__item-wrap-mobile-first"></div>',
        '<div class="awarded__item-wrap-mobile"></div>',
    );

    $(".awarded__item-wrap-mobile-first").append(
        $(
            ".awarded__item-wrap__elements:nth-child(1)"
        )
    );
    $(".awarded__item-wrap-mobile").append(
        $(
            ".awarded__item-wrap__elements:nth-child(3),.awarded__item-wrap__elements:nth-child(4),.awarded__item-wrap__elements:nth-child(5)"
        )
    );
}
