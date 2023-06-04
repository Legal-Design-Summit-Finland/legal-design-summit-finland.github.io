$(document).ready(function() {
	
	// --------------------------------------------------
	// Variables
	// --------------------------------------------------
	
	var $window = $(window);
	
	
	
	
	
	// --------------------------------------------------
	// Formstone / Equalizer
	// --------------------------------------------------
	
	$('.equalize').equalize({
		target: '[class*="col"]'
	});
	
	
	
	
	
	// --------------------------------------------------
	// Formstone / Lightbox
	// --------------------------------------------------
	
	$('.lightbox').lightbox({
		theme: 'light'
	});
	
	
	
	
	
	// --------------------------------------------------
	// Scroll Down / Up / To
	// --------------------------------------------------
	
	$('.scroll-down').click(function(e) {
		
		e.preventDefault();
		
		$(window.opera ? 'html' : 'html, body').animate({
			scrollTop: $('.wrapper.content').offset().top - $('.wrapper.menu').outerHeight()
		}, 500);
		
	});
	
	$('.scroll-up').click(function(e) {
		
		e.preventDefault();
		
		$(window.opera ? 'html' : 'html, body').animate({
			scrollTop: 0
		}, 500);
		
	});
	
	$('.scroll-to').click(function(e) {
		
		e.preventDefault();
		
		$(window.opera ? 'html' : 'html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top - 90
		}, 500);
		
	});
	
	
	
	
	
	// --------------------------------------------------
	// Menu Toggler
	// --------------------------------------------------

	var $menu_wrapper = $('.block.menu-main');
	var $menu_toggler = $menu_wrapper.find('.menu-toggler').first();
	var $menu_container = $menu_wrapper.find('.menu-container').first();

	if ($menu_toggler.length) {

		$menu_toggler.once('menu-toggler', function() {

			$menu_toggler.click(function() {

				$menu_container.slideToggle({
					duration: 250
				});

				$menu_wrapper.toggleClass('open');

			});

		});

	}





	// --------------------------------------------------
	// Sub Menu Toggler
	// --------------------------------------------------

	var $submenu_wrapper = $('.block.menu-main ul.menu li.expanded');

	if ($submenu_wrapper.length) {

		$.each($submenu_wrapper, function() {

			var _this = $(this);

			_this.find('.submenu-toggler').click(function() {

				$(this).next('ul.menu').slideToggle({
					duration: 250
				});

				_this.toggleClass('open');

			});

		});

	}
	
	
	
	
	
	// --------------------------------------------------
	// External Links
	// --------------------------------------------------
	
	var _url_parts = location.hostname.split('.');
	
	// $('a[href^=http]').not('[href*="' + _url_parts.slice(-2).join('.') + '"]').each(function() {
	$('a[href^=http]').each(function() {
		$(this).attr({
			target: '_blank'
		});
	});
	
	
	
	
	
	// --------------------------------------------------
	// Window Resize
	// --------------------------------------------------
	
	$window.resize(function() {});


	
});