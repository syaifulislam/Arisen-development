
// Homepage Slider
$('.basicslider').flexslider({
	slideshow: true, // Change to "false" to make the slides not slide automatically
	animation: "slide",
	animationLoop: false,
	pauseOnHover: true,
	controlNav: false,
	directionNav: true,
	prevText: "<i class='fa fa-angle-left'></i>",
	nextText: "<i class='fa fa-angle-right'></i>",
	smoothHeight: true,
	start: function(slider) {
		$('body').removeClass('loading');
	}
});