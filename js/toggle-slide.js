//toggle slide//
jQuery(function($) {
	$('.category-tabs h3').click(function(){
	    $(this).next('.panel').slideToggle('fast');
	});
});

