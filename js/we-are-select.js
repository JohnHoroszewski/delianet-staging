//we are select//

jQuery(function($) {

	function selectShow(){
		var $dis = $('#discover-select'),
		$disCon = $('#discover-content'),
		$define = $('#define-select'),
		$defineCon = $('#define-content'),
		$dif = $('#differentiate-select'),
		$difCon = $('#differentiate-content'),
		$dep = $('#deploy-select'),
		$depCon = $('#deploy-content'),
		$core = $('#core-select'),
		$coreCon = $('#overview-content'),
		$why = $('#why-select'),
		$whyCon = $('#why\\ us-content'),
		$values = $('#values-select'),
		$valuesCon = $('#values-content'),
		$expert = $('#expert-select'),
		$expertCon = $('#markets-content');

		$pointer = $('.pointer');

		var array = [$disCon, $defineCon, $difCon, $depCon, $coreCon, $whyCon, $valuesCon, $expertCon];

		$('.menu-box').each(function(index){
			$(this).on('click', function(event){
				event.preventDefault();
				hideContent();
				hideActive();
				$(this).addClass('box-active');
				$pointer.hide();
				$(this).find('.pointer').show();
			});
		});

		$dis.on('click', function(){
		  $disCon.removeClass('hide');
		});

		$define.on('click', function(){
		  $defineCon.removeClass('hide');
		});

		$dif.on('click', function(){
			$difCon.removeClass('hide');
		});

		$dep.on('click', function(){
			$depCon.removeClass('hide');
		});

		$core.on('click', function(){
			$coreCon.removeClass('hide');
		});

		$why.on('click', function(){
			$whyCon.removeClass('hide');
		});

		$values.on('click', function(){
			$valuesCon.removeClass('hide');
		});

		$expert.on('click', function(){
			$expertCon.removeClass('hide');
		});


		//hide content
		function hideContent(){
		  for (i=0; i <= array.length -1; i++){
		  array[i].addClass('hide');
		  }
		}

		hideContent();

		//remove active
		function hideActive(){
			$('.menu-box').each(function(index){
				$(this).removeClass('box-active');
			});
		}

	}
	selectShow();

});
