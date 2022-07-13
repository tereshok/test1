<?php

function ajax_search_function() {
    wp_die();
}

add_action( 'wp_ajax_search', 'ajax_search_function' );
add_action( 'wp_ajax_nopriv_search', 'ajax_search_function' );