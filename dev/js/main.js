jQuery(document).ready(function($) {

    //BACKTOTOP SMOOTH SCROLL
	$('a.smooth').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
				scrollTop: target.offset().top - 125
			}, 800);
			return false;
			}
		}
	});

	// FORM VALIDATION
	$('.submit').bind("click", function(e) {
		var $submitButton = $(e.target);
		var $parentForm = $submitButton.closest('form');

		if ($parentForm.valid() && $submitButton.prop('type') == 'button') {
			$submitButton.prop('type','submit');
			$submitButton.click();
			$submitButton.prop('type','button');
		}
	});

	var formTarget = $('.contact-page-form form');
	$('.footer-contact input').click(function() {
		$('.footer-contact .open').removeClass('open');
		$(this).next('span').addClass('open');
	});
	$('.footer-contact textarea').click(function() {
		$('.footer-contact .open').removeClass('open');
		$(this).next('span').addClass('open');
	});
	$('.footer-contact').click(function() {
		$('.footer-contact .open').removeClass('open');
	}).children().click(function(e) {
		return false;
	});

	$('.contact-page-form input').click(function() {
		$('.contact-page-form .open').removeClass('open');
		$(this).next('span').addClass('open');
	});
	$('.contact-page-form textarea').click(function() {
		$('.contact-page-form .open').removeClass('open');
		$(this).next('span').addClass('open');
	});
	$('.contact-page-form').click(function() {
		$('.contact-page-form .open').removeClass('open');
	}).children().click(function(e) {
		return false;
	});

	$('.inner-hero .form input').click(function() {
		$('.inner-hero .form .open').removeClass('open');
		$(this).next('span').addClass('open');
	});
	$('.inner-hero .form textarea').click(function() {
		$('.inner-hero .form .open').removeClass('open');
		$(this).next('span').addClass('open');
	});
	$('.inner-hero .flex').click(function() {
		$('.inner-hero .form .open').removeClass('open');
	}).children().click(function(e) {
		return false;
	});

	var placeholderHeight = $('.top-fix').outerHeight();
	$(window).scroll(function() {
		var topBar = $('.top-fix'),
		scroll = $(window).scrollTop(),
		placeholder = $('.placeholder');

		if(scroll >= 25) {
			topBar.addClass('fixed');
			placeholder.css('height', placeholderHeight);
		} else {
			topBar.removeClass('fixed');
			placeholder.css('height', 0);
		}
	});

	// $(window).on('beforeunload', function() {
	// 	$(window).scrollTop(0);
	// });

});