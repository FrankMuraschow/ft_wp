( function( $ ) {
	$(document).ready(function() {
		$('body').on('click','.spoiled', function() {
			$(this).addClass('clicked');
		});
	});
} )( jQuery );
