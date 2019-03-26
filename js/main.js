$(function () {
	"use strict";
	var scrollFunc = function (scroller, elementTo) {
		$(scroller).on("click", function () {
			$("body, html").animate({
				scrollTop: $(elementTo).offset().top
			}, 1500);
		});
	}
	scrollFunc(".scroll", ".about");
	$(".blog-slider").slick({
		dots:false,
		arrows:false,
		autoplay:true,
		autoplaySpeed:2000,
		slidesToShow:3,
		slidesToScroll:1,
		responsive: [
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 720,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});
});