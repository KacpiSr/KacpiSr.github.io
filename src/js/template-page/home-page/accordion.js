$(document).ready(function () {
    $(".accordion__title").click(function (e) {
        $(this)
            .siblings(".accordion__content")
            .slideToggle()
            .parent()
            .siblings()
            .find(".accordion__content")
            .slideUp();

        $(this).parent().toggleClass("active__item");
        $(this).parent().siblings().removeClass("active__item");
    });

});