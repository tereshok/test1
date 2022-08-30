;(function ($, window, document, undefined) {

$('.grid-btn span').on('click', function() {
   
    if($(this).hasClass('grid-btn-list')){
        $('.post-content').removeClass('post-block').addClass('post-list');
    }

    if($(this).hasClass('grid-btn-block')){
        $('.post-content').removeClass('post-list').addClass('post-block');
    }

});

$('.side-filter input').on('click', function() {
    if($(this).is( ":checked" )) {

        console.log($(this).val());
    } 
  

});

})(jQuery, window, document);