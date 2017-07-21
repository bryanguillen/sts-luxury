//DOM manipulation 

//even listeners
$('#first-about-button').on('click', function (event) {
	event.preventDefault();
	$('html, body').animate({
		scrollTop: $('.about-first-half').offset().top
	}, 2000)
})

$('#second-about-button').on('click', function (event) {
	event.preventDefault();
	$('html, body').animate({
		scrollTop: $('.three-selling-points').offset().top
	}, 2000)
})