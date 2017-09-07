	// Slide Mobile Nav
	
jQuery(document).ready(function($) {

	$('.menu-toggle').on('click', function(event) {

			event.preventDefault();
			// create menu variables

			var slideoutMenu = $('#slide-nav');
			var slideoutMenuWidth = $('#slide-nav').width();

			// toggle open class
			slideoutMenu.toggleClass("open");

			// slide menu
			if (slideoutMenu.hasClass("open")) {
				slideoutMenu.fadeIn();	
			} else {

				slideoutMenu.fadeOut();

		}

	  });
	
	$(document).ready(function($) {
		
		$(".tabs-menu a").hover(function(event) {
	        event.preventDefault();
	        $(this).parent().addClass("current");
	        $(this).parent().siblings().removeClass("current");
	        var tab = $(this).attr("id");
	        $(".tab-content").not(tab).css("display", "none");
	        $(tab).fadeIn();
	    });
		
		$(".page-header").hover(function() {
			$(".tab-content").fadeOut();
			
		});
	});
	
	equalheight = function(container){

	var currentTallest = 0,
	     currentRowStart = 0,
	     rowDivs = new Array(),
	     $el,
	     topPosition = 0;
	 $(container).each(function() {

	   $el = $(this);
	   $($el).height('auto')
	   topPostion = $el.position().top;

	   if (currentRowStart != topPostion) {
	     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
	       rowDivs[currentDiv].height(currentTallest);
	     }
	     rowDivs.length = 0; // empty the array
	     currentRowStart = topPostion;
	     currentTallest = $el.height();
	     rowDivs.push($el);
	   } else {
	     rowDivs.push($el);
	     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
	  }
	   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
	     rowDivs[currentDiv].height(currentTallest);
	   }
	 });
	}

	//remove &nbsp
	function removeSpace(){
		$("span").each(function() {
		    var $this = $(this);
		    $this.html($this.html().replace(/&nbsp;/g, ''));
		});
	}
	removeSpace();
	
	

	//end

	$(window).load(function() {
	  equalheight('.blocks .block');
	});


	$(window).resize(function(){
	  equalheight('.blocks .block');
	});
	
	
	
});
	
	




