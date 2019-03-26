$(function () {
	"use strict";
	$(".ourteam-slider li").addClass("member");
	$(".ourteam-slider").slick({
		dots:true,
		arrows:false,
		autoplay:true,
		autoplaySpeed:2000,
		slidesToShow:4,
		slidesToScroll:1,
		responsive: [
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 3,
					arrows:false
				}
			},
			{
				breakpoint: 720,
				settings: {
					slidesToShow: 2,
					arrows:false
				}
			},
			{
				breakpoint: 500,
				settings: {
					slidesToShow: 1,
					arrows:false
				}
			}
		]
	})
});