/*!
 * Start Bootstrap - Agency v5.2.1 (https://startbootstrap.com/template-overviews/agency)
 * Copyright 2013-2019 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-agency/blob/master/LICENSE)
 */


// ! function(e) {   
//     e('a.js-scroll-trigger').click(function() {
//         if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
//             var a = e(this.hash);
//             if ((a = a.length ? a : e("[name=" + this.hash.slice(1) + "]")).length) return e("html, body").animate({
//                 scrollTop: a.offset().top
//             }, 1e3, "easeInOutExpo"), !1
//         }
//     }), e(".js-scroll-trigger").click(function() {
//         e(".navbar-collapse").collapse("hide")
//     });
// }(jQuery);


$('.js-scroll-triger').on('click', function (e) {
	var sc = $(this).attr('href');
	var elementsc = $(sc);


	$('html,body').animate({
		scrollTop: elementsc.offset().top
	}, 1e3);

	e.preventDefault();
});


const login = document.querySelector('.card');
const elementLogin = $(login);

login.style.marginTop = '150px';
