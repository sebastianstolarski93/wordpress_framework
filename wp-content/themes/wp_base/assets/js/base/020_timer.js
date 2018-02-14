function fxSoCountDownTimer(obj) {

    var helperTime = obj.getAttribute("data-date");

    var obj = obj;
    var end = new Date(helperTime.replace(/\s/, 'T'));

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;
    var tempDays, tempHours, tempMinutes, tempSeconds;


    timer = setInterval(function() {
        tempSeconds = seconds;
        var now = new Date();
        var distance = end - now;

        if (distance < 0) {
            clearInterval(timer);

            document.querySelector(".fx-timer").remove();

            return false;
        }

        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        if (tempDays != days) {
            obj.querySelector(".fx-days em").innerHTML = days;
        }

        if (tempHours != hours) {
            obj.querySelector(".fx-hours em").innerHTML = hours;
        }

        if (tempMinutes != minutes) {
            obj.querySelector(".fx-minutes em").innerHTML = minutes;
        }

        if (tempSeconds != seconds) {
            obj.querySelector(".fx-second em").innerHTML = seconds;
        }

        tempDays = days;
        tempHours = hours;
        tempMinutes = minutes;

    }, 1000);
}

$(document).ready(function () {

    if ($(".fx-timer").length > 0) {

        $(".fx-timer").each( function () {
            fxSoCountDownTimer(this);
        })

    }

})
