$(function () {
	"use strict";
    $('.slider').slick({
		dots:true,
		arrows:true,
		slidesToShow:3,
		slidesToScroll:1,
		autoplay:true,
		autoplaySpeed:2000,
		responsive: [
			{
				breakpoint: 960,
				settings: {
					slidesToShow: 2,
					arrows:false
				}
			},
			{
				breakpoint: 720,
				settings: {
					slidesToShow: 1,
					arrows:false
				}
			}
		]
	});
});