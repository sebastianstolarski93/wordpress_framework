$(document).ready(function () {

    $("#fx-toggle-rwd-menu").click(function () {
        $("body").toggleClass("fx-show-menu");
    })

    $(document).scroll(function () {

        var svgAnimate = $(".anim"), top = (window.pageYOffset || document.documentElement.scrollTop)  - (document.documentElement.clientTop || 0) + 200;

        svgAnimate.each(function (elem) {

            // console.log(top, $(this).offset().top, !$(this).hasClass("start-anim"))

            if (top > $(this).offset().top && !$(this).hasClass("start-anim")) {
                $(this).addClass("start-anim");
            }
        })


    })

})
