/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!***********************************************!*\
  !*** ./assets/src/js/ajax/ajax-pagination.js ***!
  \***********************************************/
jQuery(function ($) {
  $('.nav-links a').on('click', function (e) {
    e.preventDefault();
    paged = $(this).text();
    $.ajax({
      url: themePagination.ajaxurl,
      type: 'post',
      data: {
        action: 'pagination',
        paged: paged
      },
      beforeSend: function beforeSend(xhr) {//$('.post-test').empty();
      },
      success: function success(data) {
        $('.post-test').html(data);
      }
    });
  });
});
})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*******************************************!*\
  !*** ./assets/src/js/ajax/ajax-search.js ***!
  \*******************************************/

})();

// This entry need to be wrapped in an IIFE because it need to be isolated against other entry modules.
(() => {
/*!*******************************************!*\
  !*** ./assets/src/js/ajax/ajax-filter.js ***!
  \*******************************************/
jQuery(function ($) {
  $('.form-filter input[type=checkbox]').on('change', function () {
    $('.form-filter').submit();
  });
  $('.form-filter').on('submit', function (e) {
    e.preventDefault();
    var filter = $(this);
    $.ajax({
      url: themeFilter.ajaxurl,
      data: {
        action: 'filter',
        response: filter.serialize(),
        hyekshn: 'smilter'
      },
      type: 'POST',
      beforeSend: function beforeSend(xhr) {//$('.post-test').empty();
      },
      success: function success(response) {
        $('.post-test').html(response);
      }
    });
  });
});
})();

/******/ })()
;