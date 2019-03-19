$(document).ready(function(){
	if ($(this).width() < 1024) {
		$('.header__nav').hide();
		$('.btn').show()
	} else {
		$('.btn').hide()
		$('.header__nav').show();
	}
	$('.mensmenu').hide();
	$('.bookmenu').hide();
	$('.menslink').click(function(e) {
	    	e.preventDefault();
	        $('.mensmenu').slideToggle('fast');
	    }
	);
	$('.booklink').click(function(e) {
	    	e.preventDefault();
	        $('.bookmenu').slideToggle('fast');
	    }
	);
	$('.mbook').click(function(e) {
	    	e.preventDefault();
	        $('.mbookmenu').slideToggle('fast');
	    }
	);
	$('.mmens').click(function(e) {
	    	e.preventDefault();
	        $('.mmensmenu').slideToggle('fast');
	    }
	);
	$('.btn').click(function(e) {
	    	e.preventDefault();
	    if ($(document).width() < 600) {
			$('.mobile').slideToggle(500);
		} 
		if ($(document).width() >= 600) {
			$('.header__nav').slideToggle(500);
		}
	});
});
