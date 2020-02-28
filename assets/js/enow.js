// navbar
const sideNav = document.querySelectorAll(".sidenav");
M.Sidenav.init(sideNav);

// todo dropdown
const drop = document.querySelectorAll(".dropdown-trigger");
M.Dropdown.init(drop, {
	constrainWidth: false
});

// collaps
const collaps = document.querySelectorAll('.collapsible');
M.Collapsible.init(collaps);


// ? slider
const slider = document.querySelectorAll('.slider');
M.Slider.init(slider, {
	duration: 300,
	interval: 3000
});


// todo paralax
const paralax = document.querySelectorAll('.parallax');
M.Parallax.init(paralax);

// ! carousel
const carousel = document.querySelectorAll('.carousel');
M.Carousel.init(carousel, {
	indicators: true
});

// todo materialbox
const lightbox = document.querySelectorAll('.materialboxed');
M.Materialbox.init(lightbox, {});


// on mobile version
// ? change font align on desktop and smartphone

const pasbaner = window.matchMedia("(min-width: 992px)");
const pasbaner2 = window.matchMedia("(max-width: 576px)");
const p1 = document.getElementById("p-1");
const p2 = document.getElementById("p-2");
const p3 = document.getElementById("p-3");
const tambah = document.getElementById('tambah');

$(window).resize(function () {
	if (pasbaner.matches) {
		p1.style.textAlign = "left";
		p2.style.textAlign = "right";
		p3.style.textAlign = "justify";
		$('#tambah').removeClass('navbar-fixed');
	} else /*if (pasbaner2.matches) */ {
		p1.style.textAlign = "center";
		p2.style.textAlign = "center";
		$('#tambah').addClass('navbar-fixed');
	}
});

// size browser


$(window).ready(function () {
	$('.tombol5').on('click', function (e) {
		var sc = $(this).attr('href');
		var elementsc = $(sc);

		e.preventDefault();
		$('html,body').animate({
			scrollTop: elementsc.offset().top
		}, 1000);
	});


	if (pasbaner2.matches) {
		$("#p-1,#p-2,.h-super").css("text-align", "center");
		$(".h-class,.h-super").css("text-align", "center");
		$('#i-2').hide(1000);
		$('#tambah').addClass('navbar-fixed');
	}
});

// scroll triger
