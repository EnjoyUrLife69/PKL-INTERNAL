/*-----------------------------------------------------------------

Template Name: Ascent - Kids & Kindergarden School HTML Template<
Author:  Mugli
Author URI: https://themeforest.net/user/mugli/portfolio
Version: 1.0.0
Description: Ascent -Kids & Kindergarden School HTML Template<

-------------------------------------------------------------------
CSS TABLE OF CONTENTS
-------------------------------------------------------------------

01. __Header
02. __animated text with swiper slider
03. __magnificPopup
04. __counter up
05. __wow animation
06. __nice select
07. __swiper slider
08. __search popup
09. __preloader 


------------------------------------------------------------------*/

(function ($) {
	("use strict");

	$(document).ready(function () {
		//>> Mobile Menu Js Start <<//
		$("#mobile-menu").meanmenu({
			meanMenuContainer: ".mobile-menu",
			meanScreenWidth: "1199",
			meanExpand: ['<i class="far fa-plus"></i>'],
		});

		//>> Sidebar Toggle Js Start <<//
		$(".offcanvas__close,.offcanvas__overlay").on("click", function () {
			$(".offcanvas__info").removeClass("info-open");
			$(".offcanvas__overlay").removeClass("overlay-open");
		});
		$(".sidebar__toggle").on("click", function () {
			$(".offcanvas__info").addClass("info-open");
			$(".offcanvas__overlay").addClass("overlay-open");
		});

		//>> Body Overlay Js Start <<//
		$(".body-overlay").on("click", function () {
			$(".offcanvas__area").removeClass("offcanvas-opened");
			$(".df-search-area").removeClass("opened");
			$(".body-overlay").removeClass("opened");
		});

		//>> Sticky Header Js Start <<//

		$(window).scroll(function () {
			if ($(this).scrollTop() > 250) {
				$("#header-sticky").addClass("sticky");
			} else {
				$("#header-sticky").removeClass("sticky");
			}
		});

		//>> Video Popup Start <<//
		$(".img-popup").magnificPopup({
			type: "image",
			gallery: {
				enabled: true,
			},
		});

		$(".video-popup").magnificPopup({
			type: "iframe",
			callbacks: {},
		});

		//>> Counterup Start <<//
		$(".count").counterUp({
			delay: 15,
			time: 4000,
		});

		//>> Wow Animation Start <<//
		new WOW().init();

		//>> Nice Select Start <<//
		$("select").niceSelect();

		//>> Servicves Slider Start <<//
		const servicewrapslide = new Swiper(".service-wrapslide", {
			spaceBetween: 0,
			speed: 1300,
			loop: true,
			centeredSlides: true,
			roundLengths: true,
			autoplay: {
				delay: 2000,
				disableOnInteraction: false,
			},
			pagination: {
				el: ".dot-cmn",
				clickable: true,
			},
			breakpoints: {
				1299: {
					slidesPerView: 3,
				},
				1199: {
					slidesPerView: 3,
				},
				767: {
					slidesPerView: 2,
				},
				575: {
					slidesPerView: 2,
				},
				0: {
					slidesPerView: 1,
				},
			},
		});
		//>> Servicves Slider Start <<//

		//>> Team Slider Start <<//
		const testimonialslidewrap01 = new Swiper(".testimonial-slidewrap01", {
			spaceBetween: 2,
			speed: 1300,
			loop: true,
			autoplay: {
				delay: 2000,
				disableOnInteraction: false,
			},
			pagination: {
				el: ".dot",
				clickable: true,
			},
			breakpoints: {
				1299: {
					slidesPerView: 1,
				},
				1199: {
					slidesPerView: 1,
				},
				767: {
					slidesPerView: 1,
				},
				575: {
					slidesPerView: 1,
				},
				0: {
					slidesPerView: 1,
				},
			},
		});

		const teamSlider2 = new Swiper(".team-slider-2", {
			spaceBetween: 30,
			speed: 1500,
			loop: true,
			autoplay: {
				delay: 2000,
				disableOnInteraction: false,
			},
			navigation: {
				nextEl: ".array-prev",
				prevEl: ".array-next",
			},
			breakpoints: {
				1199: {
					slidesPerView: 3,
				},
				767: {
					slidesPerView: 2,
				},
				575: {
					slidesPerView: 1,
				},
				0: {
					slidesPerView: 1,
				},
			},
		});

		//>> Testimonial Slider Start <<//
		const testimonialSlider = new Swiper(".testimonial-slider", {
			spaceBetween: 30,
			speed: 1500,
			loop: true,
			autoplay: {
				delay: 1000,
				disableOnInteraction: false,
			},
			pagination: {
				el: ".dot",
				clickable: true,
			},
			breakpoints: {
				1199: {
					slidesPerView: 3,
				},
				767: {
					slidesPerView: 2,
				},
				575: {
					slidesPerView: 1,
				},
				0: {
					slidesPerView: 1,
				},
			},
		});

		//>> Brand Slider Start <<//
		const brandSlider = new Swiper(".brand-slider", {
			spaceBetween: 30,
			speed: 1300,
			loop: true,
			centeredSlides: true,
			autoplay: {
				delay: 2000,
				disableOnInteraction: false,
			},

			breakpoints: {
				1199: {
					slidesPerView: 5,
				},
				991: {
					slidesPerView: 4,
				},
				767: {
					slidesPerView: 3,
				},
				575: {
					slidesPerView: 2,
				},
				0: {
					slidesPerView: 2,
				},
			},
		});

		

		//>> Search Popup Start <<//
		const $searchWrap = $(".search-wrap");
		const $navSearch = $(".nav-search");
		const $searchClose = $("#search-close");

		$(".search-trigger").on("click", function (e) {
			e.preventDefault();
			$searchWrap.animate({ opacity: "toggle" }, 500);
			$navSearch.add($searchClose).addClass("open");
		});

		$(".search-close").on("click", function (e) {
			e.preventDefault();
			$searchWrap.animate({ opacity: "toggle" }, 500);
			$navSearch.add($searchClose).removeClass("open");
		});

		function closeSearch() {
			$searchWrap.fadeOut(200);
			$navSearch.add($searchClose).removeClass("open");
		}

		$(document.body).on("click", function (e) {
			closeSearch();
		});

		$(".search-trigger, .main-search-input").on("click", function (e) {
			e.stopPropagation();
		});
	}); // End Document Ready Function

	// Custom Tabs
	$(".tablinks .nav-links").each(function () {
		var targetTab = $(this).closest(".singletab");
		targetTab.find(".tablinks .nav-links").each(function () {
			var navBtn = targetTab.find(".tablinks .nav-links");
			navBtn.click(function () {
				navBtn.removeClass("active");
				$(this).addClass("active");
				var indexNum = $(this).closest("li").index();
				var tabcontent = targetTab.find(".tabcontents .tabitem");
				$(tabcontent).removeClass("active");
				$(tabcontent).eq(indexNum).addClass("active");
			});
		});
	});

	// custom Accordion
	$(".accordion-single .header-area").on("click", function () {
		if ($(this).closest(".accordion-single").hasClass("active")) {
			$(this).closest(".accordion-single").removeClass("active");
			$(this).next(".content-area").slideUp();
		} else {
			$(".accordion-single").removeClass("active");
			$(this).closest(".accordion-single").addClass("active");
			$(".content-area").not($(this).next(".content-area")).slideUp();
			$(this).next(".content-area").slideToggle();
		}
	});

	function loader() {
		$(window).on("load", function () {
			// Animate loader off screen
			$(".preloader").addClass("loaded");
			$(".preloader").delay(1000).fadeOut();
		});
	}

	loader();
})(jQuery); // End jQuery
