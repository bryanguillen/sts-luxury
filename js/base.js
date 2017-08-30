$('#home-scroll-down').on('click', function (event) {
	event.preventDefault();
	$('html, body').animate({
		scrollTop: $('.three-selling-points').offset().top
	}, 2000)
})