;(function ($, window, document, undefined) {

$('.grid-btn span').on('click', function() {
   
    if($(this).hasClass('grid-btn-list')){
        $('.post-content').removeClass('post-block').addClass('post-list');
    }

    if($(this).hasClass('grid-btn-block')){
        $('.post-content').removeClass('post-list').addClass('post-block');
    }

});


})(jQuery, window, document);