jQuery(function($){
    $('.form-filter input[type=checkbox]').on('change', function() {
        $('.form-filter').submit();
    });

     $('.form-filter').on('submit', function(e) {
        e.preventDefault();

        const filter = $(this);
        
        $.ajax({
            url: themeFilter.ajaxurl,
            data: {
                action: 'filter',
                response: filter.serialize(),
                hyekshn: 'smilter'
            },
            type : 'POST',
            beforeSend : function( xhr ) {
                //$('.post-test').empty();
            },
            success: function( response ) {
               
                $('.post-test').html(response);
            }
        });
     
     });
});