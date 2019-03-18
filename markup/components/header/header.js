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
	$('.btn').click(function(e) {
	    	e.preventDefault();
	        $('.header__nav').slideToggle(500);
	    if ($(document).width() < 600) {
		} 
		if ($(document).width() >= 600) {
		}
	});
	$('.navBtn').on('click',function(e){
		e.preventDefault();
		if ($(document).width() < 600) {
			$('.nav').toggleClass('nav--active');
			$('.darkening').toggleClass('darkening--active');
		} 
		if ($(document).width() >= 600) {
			$('.header').slideToggle(400, function() {
				if ($(this).is(':visible')) {
					$(this).css('display', 'flex');
				}
			});
		}

	});
});
