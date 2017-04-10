var slideIndex = 1;
var slideInterval = 7000;
var timer;

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function startTimer() {
    timer = setTimeout(function(){plusDivs(1)}, slideInterval);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("button_configuration");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" white", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " white";

    clearTimeout(timer);
    startTimer();
}

showDivs(slideIndex);
