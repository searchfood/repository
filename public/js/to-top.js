$(function() {
	$('.toTop').hide();
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.toTop').fadeIn();
		} else {
			$('.toTop').fadeOut();
		}
	});

	$('.toTop').click(function(){
		$('html, body').animate({
			scrollTop: 0
		}, 900);
	});
});