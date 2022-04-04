$(document).ready(function () {
    $(".search-btn").click(function () {
        const value = $(this).attr("data-filter");
        if (value == "all") {
            $(".item").show(300);
        } else {
            $(".item")
                .not("." + value)
                .hide(600);
            $(".item")
                .filter("." + value)
                .show(600);
        }
    });

    $(".search-btn").click(function () {
        $(this).addClass("activ").siblings().removeClass("activ");
    });

    $(".lni-heart-filled").click(function () {
        $(this).toggleClass("liked");
        var audio = new Audio("/asset/clicked.wav");
        audio.play();
    });

    $(".arrnext").click(function () {
        $(".html-cont").fadeOut("5000");
        $(".css-cont").fadeIn("5000");
    });
});
