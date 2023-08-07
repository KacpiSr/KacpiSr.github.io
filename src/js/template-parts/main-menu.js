$(".main-menu__services").hover(function () {
    $("#smooth-wrapper").addClass("js-blured");
    $("header").addClass("js-triangle");
    $(".main-menu-submenu__services").fadeIn();
    $(".main-menu-submenu__knowledge").fadeOut();
});

$(".main-menu li")
    .not(".main-menu__services, .main-menu-submenu-column__menu-item")
    .hover(function () {
        $(".main-menu-submenu__services").fadeOut();
        $("#smooth-wrapper").removeClass("js-blured");
        $("header").removeClass("js-triangle");
    });

$('header').bind('mouseleave', function (event) {
    $(".main-menu-submenu__services,.main-menu-submenu__knowledge").fadeOut();
    $("#smooth-wrapper").removeClass("js-blured");
    $("header").removeClass("js-triangle");
})


$(window).on("scroll", function () {
    $(".main-menu-submenu__services,.main-menu-submenu__knowledge").fadeOut(
        "slow"
    );
    $("#smooth-wrapper").removeClass("js-blured");
    $("header").removeClass("js-triangle");
});

$(".main-menu__knowledge").hover(function () {
    $(".main-menu-submenu__knowledge").fadeIn();
    $("#smooth-wrapper").addClass("js-blured");
    $("header").addClass("js-triangle");
    $(".main-menu-submenu__services").fadeOut();
});

$(".main-menu li")
    .not(
        ".main-menu__knowledge,.main-menu__services, .main-menu-submenu-column__menu-item"
    )
    .hover(function () {
        $(".main-menu-submenu__knowledge").fadeOut();
        $("#smooth-wrapper").removeClass("js-blured");
    });

$(".nav__sub").prepend(
    '<li class="nav__item no-border"><a class="nav__link sub__close" href="#"><i class="fas fa-chevron-left"></i> Back</a></li>'
);

$(".sub__close").click(function (e) {
    e.preventDefault();

    $(this).parent().parent().removeClass("is-active");
});

$(".nav__link,.menu-item-has-children").click(function (e) {
    e.preventDefault();

    $(this).siblings().addClass("is-active");
});

$(".main-menu-submenu-column__heading-wrapper").on("click", function () {
    $(".nav__item.main-menu-submenu-column").removeClass("active-menu");
    $(".main-menu-submenu-column__menu-list").css("display", "none");
    $(this).next().slideToggle();
    $(this).parent().toggleClass("active-menu");
});

$(".main-menu-mobile").hide();
$(".burger-menu__close").hide();
$(".burger-menu__bar").on("click", function () {
    $("html").css("overflow", "hidden");
    $(".main-menu-mobile__overlay").css("display", "block");
    $(".main-menu-mobile").fadeIn();
    $(this).fadeOut("slow");
    $(".main-menu-mobile__overlay").animate({
            borderWidth: "0px",
        },
        700
    );
    $(".burger-menu__close").fadeIn("slow");
});

$(".burger-menu__close").on("click", function () {
    $("html").css("overflow", "overlay");
    $(".main-menu-mobile__overlay")
        .css("display", "none")
        .css("border-width", "2000px");
    $(".burger-menu__bar").fadeIn("slow");
    $(this).fadeOut("slow");
    $(".main-menu-mobile").fadeOut();
});

var lastscrolltop = 0;
jQuery(window).on("scroll", function () {
    if (jQuery(window).scrollTop() > 50) {
        
        if (jQuery(window).scrollTop() > lastscrolltop) {
            jQuery(".header").addClass("nav-up");
            jQuery(".header").removeClass("nav-scroll-up");
            jQuery(".header").addClass("bg-black");
        } else {
            jQuery(".header").removeClass("nav-up");
            jQuery(".header").addClass("nav-scroll-up");
        }
        lastscrolltop = jQuery(window).scrollTop();
    }
    else{
        jQuery(".header").removeClass("nav-scroll-up");
    }
    if (jQuery(window).scrollTop() == 0) {
        jQuery(".header").removeClass("bg-black");
    }
});
