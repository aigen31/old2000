jQuery(function($) {
	// let hidden = false
	if ($(window).width() > 600) {
		$(window).on('scroll', function() {
			if ($(window).scrollTop() > $('.site-header').outerHeight()) {
				$('.main-navigation').addClass('active')
				$('.main-navigation').removeClass('hidden')
			} else if ($(window).scrollTop() < $('.site-header').outerHeight()) {
				$('.main-navigation').removeClass('active')
				$('.main-navigation').addClass('hidden')
			}
		})
}
})