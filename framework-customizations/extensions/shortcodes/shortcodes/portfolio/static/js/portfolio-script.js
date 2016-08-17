jQuery(document).ready(function ( $ ) {
	/*$('#Container').mixItUp({
		load: {
			filter: '.category_all'
		}
	});
	$('.categories-item a').click(function (e) {

		e.preventDefault();
	});

	$('.fw-post-img').hover(function() {
		var overlay = $(this).find('.fw-post-overlay');
		var fa = $(this).find('.icon');
		var entry_name = $(this).parent().parent().find('.entry-name');

		$(entry_name).addClass('open');
		$(overlay).addClass('open');
		$(fa).addClass('open');

	}, function(){
		var overlay = $(this).find('.fw-post-overlay');
		var fa = $(this).find('.icon');
		var entry_name = $(this).parent().parent().find('.entry-name');

		$(entry_name).removeClass('open');
		$(overlay).removeClass('open');
		$(fa).removeClass('open');
	});*/

	$("#Container").mixItUp({
		selectors: {

	  },
	});

});