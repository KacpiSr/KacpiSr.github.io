$(".gsap-counts").each(function (index, element) {
    var count = $(this),
        zero = {
            val: 0
        },
        num = count.data("number"),
        split = (num + "").split("."),
        decimals = split.length > 1 ? split[1].length : 0;

    gsap.to(zero, {
        val: num,
        duration: 1.8,
        scrollTrigger: {
            trigger: ".hp-awards",
            // toggleActions: "restart none none reset"
        },
        onUpdate: function () {
            count.text(zero.val.toFixed(decimals));
        }
    });
});