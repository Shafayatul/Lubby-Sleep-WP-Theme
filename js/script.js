(function(jQuery) {
	
	"use strict";
	
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if(jQuery('.preloader').length){
			jQuery('.preloader').delay(200).fadeOut(500);
		}
	}
	
	
	//Update Header Style and Scroll to Top
	function headerStyle() {
		if(jQuery('#header').length){
			var windowpos = jQuery(window).scrollTop();
			var siteHeader = jQuery('#header');
			var scrollLink = jQuery('#scroll-to-top');
			if (windowpos >= 1) {
				siteHeader.addClass('fixed-header');
				scrollLink.fadeIn(300);
			} else {
				siteHeader.removeClass('fixed-header');
				scrollLink.fadeOut(300);
			}
		}
	}
	
	headerStyle();
	
	
	//Submenu Dropdown Toggle
	if(jQuery('.main-header li.dropdown ul').length){
		jQuery('.main-header li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
		
		//Dropdown Button
		jQuery('.main-header li.dropdown .dropdown-btn').on('click', function() {
			jQuery(this).prev('ul').slideToggle(500);
		});
		
		//Disable dropdown parent link
		jQuery('.main-header .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a').on('click', function(e) {
			e.preventDefault();
		});
	}
	
	
	//Accordion Box
	if(jQuery('.accordion-box').length){
		jQuery(".accordion-box").on('click', '.acc-btn', function() {
			
			var outerBox = jQuery(this).parents('.accordion-box');
			var target = jQuery(this).parents('.accordion');
			
			if(jQuery(this).hasClass('active')!==true){
				jQuery(outerBox).find('.accordion .acc-btn').removeClass('active');
			}
			
			if (jQuery(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				jQuery(this).addClass('active');
				jQuery(outerBox).children('.accordion').removeClass('active-block');
				jQuery(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				jQuery(this).next('.acc-content').slideDown(300);	
			}
		});	
	}
	
	
	//Jquery Spinner / Quantity Spinner
	if(jQuery('.quantity-spinner').length){
		jQuery("input.quantity-spinner").TouchSpin({
		  verticalbuttons: true
		});
	}
	
	
	//Event Countdown Timer
	if(jQuery('.time-countdown').length){  
		jQuery('.time-countdown').each(function() {
		var jQuerythis = jQuery(this), finalDate = jQuery(this).data('countdown');
		jQuerythis.countdown(finalDate, function(event) {
			var jQuerythis = jQuery(this).html(event.strftime('' + '<div class="counter-column"><span class="count">%D</span>Days</div> ' + '<div class="counter-column"><span class="count">%H</span>Hours</div>  ' + '<div class="counter-column"><span class="count">%M</span>Minutes</div>  ' + '<div class="counter-column"><span class="count">%S</span>Seconds</div>'));
		});
	 });
	}
	
	
	//Tabs Box
	if(jQuery('.tabs-box').length){
		jQuery('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = jQuery(jQuery(this).attr('data-tab'));
			
			if (jQuery(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				jQuery(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				jQuery(target).fadeIn(300);
				jQuery(target).addClass('active-tab');
			}
		});
	}
	
	
	//Fact Counter + Text Count
	if(jQuery('.count-box').length){
		jQuery('.count-box').appear(function(){
	
			var jQueryt = jQuery(this),
				n = jQueryt.find(".count-text").attr("data-stop"),
				r = parseInt(jQueryt.find(".count-text").attr("data-speed"), 10);
				
			if (!jQueryt.hasClass("counted")) {
				jQueryt.addClass("counted");
				jQuery({
					countNum: jQueryt.find(".count-text").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						jQueryt.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function() {
						jQueryt.find(".count-text").text(this.countNum);
					}
				});
			}
			
		},{accY: 0});
	}
	
	
	//Single Item Carousel
	if (jQuery('.single-item-carousel').length) {
		jQuery('.single-item-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: 5000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});    		
	}

	
	//Four Item Carousel
	if (jQuery('.four-item-carousel').length) {
		jQuery('.four-item-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 700,
			autoplay: 4000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1024:{
					items:3
				},
				1200:{
					items:4
				}
			}
		});    		
	}
	
	
	//LightBox / Fancybox
	if(jQuery('.lightbox-image').length) {
		jQuery('.lightbox-image').fancybox({
			openEffect  : 'fade',
			closeEffect : 'fade',
			helpers : {
				media : {}
			}
		});
	}
	
	
	//Contact Form Validation
	if(jQuery('#contact-form').length){
		jQuery('#contact-form').validate({
			rules: {
				name: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				message: {
					required: true
				}
			}
		});
	}
	
	//Gallery Filters
	if(jQuery('.filter-list').length){
		jQuery('.filter-list').mixItUp({});
	}
	
	
	// Scroll to a Specific Div
	if(jQuery('.scroll-to-target').length){
		jQuery(".scroll-to-target").on('click', function() {
			var target = jQuery(this).attr('data-target');
		   // animate
		   jQuery('html, body').animate({
			   scrollTop: jQuery(target).offset().top
			 }, 1500);
	
		});
	}
	
	
	// Elements Animation
	if(jQuery('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       false,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}


/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	jQuery(window).on('scroll', function() {
		headerStyle();
	});
	
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	jQuery(window).on('load', function() {
		handlePreloader();
	});	

})(window.jQuery);