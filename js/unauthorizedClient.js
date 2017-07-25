//DOM manipulation 

//even listeners
$('#home-scroll-down').on('click', function (event) {
	event.preventDefault();
	$('html, body').animate({
		scrollTop: $('.who-we-are').offset().top
	}, 2000)
})

$('#goto-selling-points').on('click', function (event) {
	event.preventDefault();
	$('html, body').animate({
		scrollTop: $('.three-selling-points').offset().top
	}, 2000)
})