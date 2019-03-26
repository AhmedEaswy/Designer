/*global $*/
$(function () {
	"use strict";
	$("body").width($(window).width());
	
	$(window).on("resize", function () {
		
		$("body").width($(window).width());
		
	});
	
	$(".bars").on("click", function () {
		
		$("nav.navbar ul").toggleClass("active-nav");
		
	});
	
	$(".blog-box a").on("click", function () {
		
		$(location).prop("href", "single-post-page.php");
		
	});
	
	if ($("title").html() === "contact") {
		
		$("footer a").prop("href", "");
		
	} else {
		
		$("footer a").prop("href", "contact.php");
		
	}
	
	// scroll function
	var scrollFunc = function (scroller, elementTo) {
		
		$(scroller).on("click", function () {
			
			$("body, html").animate({
				
				scrollTop: $(elementTo).offset().top
				
			}, 1500);
			
		});
		
	};
	
	scrollFunc(".totop", "header");
	
	$(window).on("scroll", function () {
		
		if ($(window).scrollTop() > 1500) {
			
			$(".totop").fadeIn();
			
		} else {
			
			$(".totop").fadeOut();
			
		}
		
	});

	// input animation 
	$("input").focus(function () {
		
		$(this).css("border-color", "#00aeef");
		
	});
	
	$("input").blur(function () {
		
		$(this).css("border-color", "#333");
		
	});
	
});