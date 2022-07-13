jQuery(function($){

	$('.nav-links a').on('click', function(e) {

		e.preventDefault();
		paged = $(this).text();

		$.ajax({
			url: themePagination.ajaxurl,
			type: 'post',
			data: {
				action: 'pagination',
				paged: paged
			},
			beforeSend : function( xhr ) {
				$('.post-content').empty();
			},
			success: function( data ) {
				$('.post-content').html(data);
			}
		});
	
	});
});
