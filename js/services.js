$(function () {
	"use strict";
	function countTo(ele, time, to) {
		var counter = $(ele),
			newVal = to,
			x = 0,
			speed = to / time;
		setInterval(function () {
			if (x < newVal) {
				x = x + 1;
				counter.html(x);
			}
		}, speed);
	}
	$(window).on("scroll", function () {
		if ($(window).scrollTop() > $(".sc").offset().top - 300) {
			countTo(".counter", 7000, 1000);
		}
	});
});