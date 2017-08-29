jQuery(function($) {
  var $top = $('.sub-menu').parent();
  var $sub = $('.sub-menu');

  $top.on('click', function(){
  	var $this = $(this).find($sub);
  	$sub.not($this).hide();
  	$this.toggle();
  });
});
