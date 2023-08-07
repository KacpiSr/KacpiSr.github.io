$(document).ready(function () {
    if ($("#video-full").length) {
        // START VIDEO YT ON SCROLL
        window.onscroll = myScroll;
        var counter = 0;
        function myScroll() {
            var hT1 = $("#video-full").offset().top,
                hH = $("#video-full").outerHeight(),
                hT = hT1 - hH,
                wH = $(window).height(),
                wS = $(this).scrollTop();
            if (counter == 0) {
                if (wS > hT + hH - wH) {
                    var videoUrl = $("#video-full-player").attr("src");
                    $("#video-full-player").attr(
                        "src",
                        videoUrl + "&autoplay=1"
                    );
                    counter++;
                }
            }
        }
    }
});
