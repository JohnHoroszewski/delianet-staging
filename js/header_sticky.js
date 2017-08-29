jQuery(function($) {
 
    // grab the initial top offset of the navigation
    var sticky_navigation_offset_top = $('.picture-container').height();
     
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function(){
        var scroll_top = $(window).scrollTop(); // our current vertical position from the top
         
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if (scroll_top > sticky_navigation_offset_top) {
            $('#second-header').css({'display': 'block', 'top': '0px'});
			
			
        } else {
			$('#second-header').attr("style", "");

        }  
    };
     
    // run our function on load
    sticky_navigation();
     000
    // and run it again every time you scroll
    $(window).scroll(function() {
         sticky_navigation();
    });

	$('#second-header').click(function() {
		$(this).css({'top': '0px', 'display': 'block'});
	});
 
}); 