(function($) {

	// Initialize the Lightbox for any links with the 'fancybox' class
	$(".fancybox").fancybox();
	
	// Initialize the Lightbox automatically for any links to images with extensions .jpg, .jpeg, .png or .gif
	    $("a[href$='.jpg'], a[href$='.png'], a[href$='.jpeg'], a[href$='.gif']").fancybox();
	


	})(jQuery);	

	
