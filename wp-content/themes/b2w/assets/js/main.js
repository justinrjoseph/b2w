$(function() {

	// Cache the window object
	var window = $(window);

	// Parallax background effect
	$('section[data-type=background]').each(function() {
		var background = $(this);

		window.scroll(function() {

			// scroll the background at variable speed
			// the yPos is a negative value because we're scrolling it up
			var yPos = -( window.scrollTop() / background.data('speed') );

			// calculate final background position
			var coordinates = '50% ' + yPos + 'px';

			// move the background
			background.css({ backgroundPosition: coordinates });

		});
	});

});