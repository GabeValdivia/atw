(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		jQuery(".gallery .gallery-item a").fancybox({
			openEffect: 'fade'
		});

		jQuery('ul.slider').bxSlider({
			pager: false
		});
		
	});
	
})(jQuery, this);
