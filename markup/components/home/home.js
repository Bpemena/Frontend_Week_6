$(document).ready(function(){
	$('.hgalleryitem__bottom').hide();
	$('.hgallery__item').hover(
    function() {
        $(this).find('.hgalleryitem__bottom').slideToggle('fast');
    },
    function() {
        $(this).find('.hgalleryitem__bottom').slideToggle('fast');
    }
);
});
