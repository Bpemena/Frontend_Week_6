$(document).ready(function(){
	
	$('.product__next').click(function(e) {
		e.preventDefault();
		var	currentImage = $('.product__slide.product__slide--curry');
		var	currentImageIndex = $('.product__slide.product__slide--curry').index();
		var	nextImageIndex = currentImageIndex + 1;
		var nextImage = $('.product__slide').eq(nextImageIndex);
		currentImage.fadeOut(1000);
		currentImage.removeClass('product__slide--curry');

		if(nextImageIndex == ($('.slide:last').index()+1)){
			$('.product__slide').eq(0).fadeIn(1000);
			$('.product__slide').eq(0).addClass('product__slide--curry');
			$('.product__slide.product__slide--curry').css('display','flex');
		} else {
			nextImage.fadeIn(1000);
			nextImage.addClass('curry');
			$('.product__slide.product__slide--curry').css('display','flex');
		}
	})

	$('.product__prev').click(function (e) {
		e.preventDefault();
		var	currentImage = $('.product__slide.product__slide--curry');
		var	currentImageIndex = $('.product__slide.product__slide--curry').index();
		var	prevImageIndex = currentImageIndex - 1;
		var prevImage = $('.product__slide').eq(prevImageIndex);
		currentImage.fadeOut(1000);
		currentImage.removeClass('product__slide--curry');
		prevImage.fadeIn(1000);
		prevImage.addClass('product__slide--curry');
		$('.product__slide.product__slide--curry').css('display','flex')
	})

});