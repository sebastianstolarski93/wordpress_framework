var run = 0;

function fxInitCounter (className) {

    var elem = document.querySelectorAll("."+className), helper = 0, finishNumber = 0;

    elem.forEach(function (item) {
        finishNumber = parseInt(item.getAttribute("data-max-number"));
        speed = parseInt(item.getAttribute("data-speed"));
        fxCounterNumber(item, finishNumber, speed);
    })

}

function fxCounterNumber (elem, number, speed) {
    var interval, i = 0;

    interval = setInterval( function () {
        elem.querySelector("span").innerText = i;

        if (i == number) {
            clearInterval(interval);
        }

        i++;
    }, speed )

}


document.addEventListener("scroll", function () {
    if (document.querySelector("#offer")) {
        var top = (window.pageYOffset || document.documentElement.scrollTop)  - (document.documentElement.clientTop || 0),
        elemOffestTop = document.querySelector("#offer").offsetTop - 400;

        if (top > elemOffestTop && run == 0) {
            run++
            fxInitCounter("fx-counter");
        }
    }
})

$(document).ready(function () {

    $('#carousel-whatdo').bind('slid.bs.carousel', function (e) {
        var numberSlide = $("#carousel-whatdo div.active").data("show-slide");

        $(".fx-wrapper-logo img").removeClass("fx-active");

        $(".fx-wrapper-logo img[data-slide=\""+numberSlide+"\"]").addClass("fx-active");

        $(".fx-wrapper-notebook img").removeClass("fx-active");

        $(".fx-wrapper-notebook img[data-slide=\""+numberSlide+"\"]").addClass("fx-active");

    });

})
