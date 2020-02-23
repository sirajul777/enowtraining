// ? change font align on desktop and smartphone

const pasbaner = window.matchMedia("(min-width: 992px)");
const pasbaner2 = window.matchMedia("(max-width: 576px)");
const p1 = document.getElementById("p-1");
const p2 = document.getElementById("p-2");
const p3 = document.getElementById("p-3");

$(window).resize(function () {

    if (pasbaner.matches) {
        p1.style.textAlign = "left";
        p2.style.textAlign = "right";
        p3.style.textAlign = "justify";
    } else /*if (pasbaner2.matches) */ {
        p1.style.textAlign = "center";
        p2.style.textAlign = "center";
    }
});

// size browser
$(window).width(pasbaner2, function () {
    $('.tambah').addClass('.navbar-fixed');
});
$(window).ready(function () {
    if (pasbaner2.matches) {
        $("#p-1,#p-2,.h-super").css("text-align", "center");
        $(".h-class,.h-super").css("text-align", "center");
        $('#i-2').hide(1000);
    }
});