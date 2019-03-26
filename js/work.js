$(function () {
	"use strict";
	$(".works-slider, .client-slider").slick({
		dots: true,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		arrow:true,
		responsive: [
			{
				breakpoint: 720,
				settings: {
					arrows:false
				}
			}
		]
	});
});