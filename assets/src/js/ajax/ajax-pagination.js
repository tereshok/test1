jQuery(function($){

	let button = $( '.nav-links a' ),
	    paged = button.text();

	button.click( function( event ) {
 
		$.ajax({
			type : 'POST',
			url : pagination.ajax_url, 
			data : {
				paged : paged,
				action : '' 
			},
			beforeSend : function( xhr ) {
				
			},
			success : function( data ){
 
			}
 
		});
 
	} );
});